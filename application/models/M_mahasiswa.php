<?php

class M_mahasiswa extends CI_Model
{
    public function tampil_data()
    {
        return $this->db->get('tb_mahasiswa');
    }
    public function input_data($data, $table)
    {
        $this->db->insert($table, $data);
    }

    public function hapus_data($id, $table)
    {
        $this->db->where($id);
        $this->db->delete($table);
    }

    function get_chart_data()
    {
        return $this->db->query('SELECT kategori,harga FROM produk')->result_array();
    }

    function get_sum_harga()
    {
        return $this->db->query('SELECT SUM(price) as total_harga FROM orders;')->result_array();
    }

    public function edit_data($id, $table)
    {
        return $this->db->get_where($table, $id);
    }
    public function update_data($id, $data, $table)
    {
        $this->db->where($id);
        $this->db->update($table, $data);
    }
    public function detail_data($id = Null)
    {
        $query = $this->db->get_where('tb_mahasiswa', array('id' => $id))->row();

        return $query;
    }

    public function get_keyword($keyword)
    {
        $this->db->select('*');
        $this->db->from('tb_mahasiswa');
        $this->db->like('nama', $keyword);
        $this->db->or_like('nim', $keyword);
        $this->db->or_like('tgl_lahir', $keyword);
        $this->db->or_like('jurusan', $keyword);
        $this->db->or_like('alamat', $keyword);
        $this->db->or_like('email', $keyword);
        $this->db->or_like('no_telp', $keyword);

        return $this->db->get()->result();
    }
}
