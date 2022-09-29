<?php

class News_model extends CI_Model
{
    public function getAll()
    {
        $this->db->select('*');
        $this->db->from('news');
        $query = $this->db->get();
        return $query;
    }

    public function getNews()
    {
        $query = $this->db->get('news', 2, 1);
        return $query;
    }

    public function News($limit, $start)
    {
        $this->db->order_by('id', 'DESC');
        $query = $this->db->get('news', $limit, $start);
        return $query;
    }

    public function countAllNews()
    {
        return $this->db->get('news')->num_rows();
    }

    function detail_news($where, $data)
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

    public function newsCount()
    {
        return $this->db->get('news')->num_rows();
    }
}
