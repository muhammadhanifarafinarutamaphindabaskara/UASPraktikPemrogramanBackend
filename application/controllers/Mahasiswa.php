<?php defined('BASEPATH') or die('No direct script access allowed');

require('./application/third_party/phpoffice/vendor/autoload.php');

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

class Mahasiswa extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('auth');
        $this->load->library('upload');
        $this->load->model('M_mahasiswa');
        $this->auth->cek_login();
    }

    public function index()
    {
        $data['mahasiswa'] = $this->M_mahasiswa->tampil_data()->result();
        $this->load->view('template_administrator/header');
        $this->load->view('template_administrator/sidebar');
        $this->load->view('admin/mahasiswa', $data);
        $this->load->view('template_administrator/footer');
    }

    public function tambah_aksi()
    {
        $nama = $this->input->post('nama');
        $nim = $this->input->post('nim');
        $tgl_lahir = $this->input->post('tgl_lahir');
        $jurusan = $this->input->post('jurusan');
        $alamat = $this->input->post('alamat');
        $email = $this->input->post('email');
        $no_telp = $this->input->post('no_telp');
        $jenkel = $this->input->post('jenkel');
        $hobi = $this->input->post('hobi');
        $foto = $_FILES['foto'];
        if ($foto = '') {
        } else {
            $config['upload_path'] = './assets/foto';
            $config['allowed_types'] = 'jpeg|jpg|png';

            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('foto')) {
                echo "Upload Gagal";
                die();
            } else {
                $foto = $this->upload->data('file_name');
            }
        }
        $data = array(
            'nama' => $nama,
            'nim' => $nim,
            'tgl_lahir' => $tgl_lahir,
            'jurusan' => $jurusan,
            'alamat' => $alamat,
            'email' => $email,
            'no_telp' => $no_telp,
            'jenkel' => $jenkel,
            'hobi' => json_encode(implode(",", $hobi)),
            'foto' => $foto
        );

        $this->M_mahasiswa->input_data($data, 'tb_mahasiswa');
        $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        Data Berhasil Ditambahkan
        </div>');
        redirect('mahasiswa/index');
        $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        Data Gagal di tambahkan
        </div>');
    }

    public function hapus($id)
    {
        $id = array(
            'id' => $id
        );
        $this->M_mahasiswa->hapus_data($id, 'tb_mahasiswa');
        $this->session->set_flashdata('pesan', '<div class="alert alert-primary alert-danger" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                 Data Berhasil Dihapus
                </div>');
        redirect('mahasiswa/index');
    }

    public function edit($id)
    {
        $id = array('id' => $id);
        $data['mahasiswa'] = $this->M_mahasiswa->edit_data($id, 'tb_mahasiswa')->result();

        $this->load->view('template_administrator/header');
        $this->load->view('template_administrator/sidebar');
        $this->load->view('admin/edit_mahasiswa', $data);
        $this->load->view('template_administrator/footer');
    }
    public function update()
    {
        $id = $this->input->post('id');
        $nama = $this->input->post('nama');
        $nim = $this->input->post('nim');
        $tgl_lahir = $this->input->post('tgl_lahir');
        $jurusan = $this->input->post('jurusan');
        $alamat = $this->input->post('alamat');
        $email = $this->input->post('email');
        $no_telp = $this->input->post('no_telp');
        $jenkel = $this->input->post('jenkel');
        $hobi = $this->input->post('hobi');
        $path = './assets/foto';

        $id = array('id' => $id);

        // get foto
        $config['upload_path'] = './assets/foto';
        $config['allowed_types'] = 'jpg|png|jpeg|gif';
        $config['max_size'] = '2048';  //2MB max
        $config['max_width'] = '4480'; // pixel
        $config['max_height'] = '4480'; // pixel
        $config['file_name'] = $_FILES['foto']['name'];

        $this->upload->initialize($config);

        if (!empty($_FILES['foto']['name'])) {
            if ($this->upload->do_upload('foto')) {
                $foto = $this->upload->data();
                $data = array(
                    'nama' => $nama,
                    'nim' => $nim,
                    'tgl_lahir' => $tgl_lahir,
                    'jurusan' => $jurusan,
                    'alamat' => $alamat,
                    'email' => $email,
                    'no_telp' => $no_telp,
                    'jenkel' => $jenkel,
                    'hobi' => json_encode(implode(",", $hobi)),
                    'foto' => $foto['file_name']
                );
                // hapus foto pada direktori
                @unlink($path . $this->input->post('filelama'));
                $this->M_mahasiswa->update_data($id, $data, 'tb_mahasiswa');
                $this->session->set_flashdata('pesan', '<div class="alert alert-primary alert-danger" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                 Data Berhasil Diupdate
                </div>');
                redirect('mahasiswa/index');
            } else {
                die("gagal update");
            }
        } else {
            $data = array(
                'nama' => $nama,
                'nim' => $nim,
                'tgl_lahir' => $tgl_lahir,
                'jurusan' => $jurusan,
                'alamat' => $alamat,
                'email' => $email,
                'no_telp' => $no_telp,
                'jenkel' => $jenkel,
            );

            @unlink($path . $this->input->post('filelama'));

            $this->M_mahasiswa->update_data($id, $data, 'tb_mahasiswa');
            $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible" role="alert">
              <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              Data Berhasil Diupdate
              </div>');
            redirect('mahasiswa/index');
        }
    }

    public function detail($id)
    {
        $this->load->model('M_mahasiswa');

        $detail = $this->M_mahasiswa->detail_data($id);
        $data['detail'] = $detail;

        $this->load->view('template_administrator/header');
        $this->load->view('template_administrator/sidebar');
        $this->load->view('admin/detail_mahasiswa', $data);
        $this->load->view('template_administrator/footer');
    }

    public function print_file()
    {
        $data['mahasiswa'] = $this->M_mahasiswa->tampil_data('tb_mahasiswa')->result();
        $this->load->view('admin/print_mahasiswa', $data);
    }

    public function pdf()
    {
        $this->load->library('dompdf_gen');

        $data['mahasiswa'] = $this->M_mahasiswa->tampil_data('tb_mahasiswa')->result();

        $this->load->view('admin/laporan_pdf', $data);

        $paper_size = 'A4';
        $orientation = 'landscape';
        $html = $this->output->get_output();
        $this->dompdf->set_paper($paper_size, $orientation);

        $this->dompdf->load_html($html);
        $this->dompdf->render();
        $this->dompdf->stream('laporan_mahasiswa.pdf', array('Attachment' => 0));
    }
    
    public function search()
    {
        $keyword = $this->input->post('keyword');
        $data['mahasiswa'] = $this->M_mahasiswa->get_keyword($keyword);
        $this->load->view('template_administrator/header');
        $this->load->view('template_administrator/sidebar');
        $this->load->view('admin/mahasiswa', $data);
        $this->load->view('template_administrator/footer');
    }
}
