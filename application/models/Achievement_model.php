<?php

class Achievement_model extends CI_Model
{
    public function getAll()
    {
        $this->db->select('*');
        $this->db->from('achievement');
        $query = $this->db->get();
        return $query;
    }

    public function Achievement($limit, $start)
    {
        $this->db->order_by('id', 'DESC');
        $query = $this->db->get('achievement', $limit, $start);
        return $query;
    }

    public function countAllAchievement()
    {
        return $this->db->get('achievement')->num_rows();
    }

    public function achievementCount()
    {
        return $this->db->get('achievement')->num_rows();
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
