<?php

class Agenda_model extends CI_Model
{
    public function getAll()
    {
        $this->db->select('*');
        $this->db->from('agenda');
        $query = $this->db->get();
        return $query;
    }

    public function Agenda()
    {
        $this->db->select('*');
        $this->db->from('agenda');
        $this->db->order_by('id', 'DESC');
        $query = $this->db->get();
        return $query;
    }

    public function getAgenda($limit, $start)
    {
        $this->db->order_by('id', 'DESC');
        $query = $this->db->get('agenda', $limit, $start);
        return $query;
    }

    public function countAllAgenda()
    {
        return $this->db->get('agenda')->num_rows();
    }

    function detail_agenda($where, $data)
    {
        return $this->db->get_where($data, $where);
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
