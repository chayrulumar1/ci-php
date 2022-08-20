<?php

class Stock extends CI_Model
{
    public function get_stock()
    {
        //$data = $this->db->query("SELECT * FROM mhs");
        //return $data->result_array();

        return $this->db->get('stock')->result_array();
    }

    public function tambah_stock()
    {
        $data = [
            "namabarang" => $this->input->POST('namabarang', true),
            "deskripsi" => $this->input->POST('deskripsi', true),
            "stock" => $this->input->POST('stock', true),

        ];
        $this->db->insert('stock', $data);
        $this->db->where('id', $data['id']);
        return true;
    }
    public function updateStockBarang($id)
    {
        $data = [
            "idbarang" => $id,
            "namabarang" => $this->input->POST('namabarang', true),
            "deskripsi" => $this->input->POST('deskripsi', true),
            "stock" => $this->input->POST('stock', true),

        ];

        $this->db->where('idbarang', $data['idbarang']);
        $this->db->update('stock', $data);

        return true;
    }
    public function hapusDataMhs($id)
    {
        $this->db->where('idbarang', $id);
        $this->db->delete('stock',);
    }
}
