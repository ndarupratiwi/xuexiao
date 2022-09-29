<?php

class RegistrationInformation_model extends CI_Model
{
    public function getAll()
    {
        $this->db->select('*');
        $this->db->from('registration_information');
        $query = $this->db->get();
        return $query;
    }

    public function getRegistrationInformation($limit, $start)
    {
        $this->db->order_by('id', 'DESC');
        $query = $this->db->get('registration_information', $limit, $start);
        return $query;
    }

    public function countAllRegistrationInformation()
    {
        return $this->db->get('registration_information')->num_rows();
    }

    function detail_ppdb($where, $data)
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
