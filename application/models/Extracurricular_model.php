<?php

class Extracurricular_model extends CI_Model
{
    public function getAll()
    {
        $this->db->select('*');
        $this->db->from('extracurricular');
        $query = $this->db->get();
        return $query;
    }

    public function Extracurricular($limit, $start)
    {
        $query = $this->db->get('extracurricular', $limit, $start);
        return $query;
    }

    public function countAllExtracurricular()
    {
        return $this->db->get('extracurricular')->num_rows();
    }

    public function input_data($data, $table)
    {
        $this->db->insert($table, $data);
    }

    function edit_data($where, $table)
    {
        return $this->db->get_where($table, $where);
    }

    function update_data($where, $data, $table)
    {
        $this->db->where($where);
        $this->db->update($table, $data);
    }

    function delete_data($where, $table)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }
}
