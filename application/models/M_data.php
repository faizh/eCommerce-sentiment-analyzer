<?php
class M_data extends CI_Model {
    
    public function insert($data)
    {
        $this->db->insert('t_data',$data);
    }

    public function getData()
    {
        $this->db->select('*');
        $results = $this->db->get('t_data')->row();

        return $results;
    }

    public function delete_all()
    {
        $this->db->truncate('t_data');
    }

    public function update_presentase($presentase)
    {
        $this->db->set('presentase_data_uji', $presentase);
        $this->db->update('t_data');
    }
}