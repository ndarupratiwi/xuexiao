<?php

class UserLogin_model extends CI_Model
{
    public function getAll()
    {
        $this->db->select('*');
        $this->db->from('user_login');
        $query = $this->db->get();
        return $query;
    }

    function validate($username, $password)
    {
        $this->db->where('user_login.username', $username);
        $this->db->where('user_login.password', $password);
        $result = $this->db->get('user_login', 1);
        return $result;
    }

    public function validate_email($email)
    {
        $this->db->where('user_login.email', $email);
        $result = $this->db->get('user_login', 1);
        return $result;
    }

    function forgotpassword($email, $data, $table)
    {
        $this->db->where('email', $email);
        $this->db->update($table, $data);
    }

    function login($table, $where)
    {
        return $this->db->get_where($table, $where);
    }

    function login2($table, $where2)
    {
        return $this->db->get_where($table, $where2);
    }

    function id($username)
    {
        $query = $this->db->query("SELECT * FROM user_login WHERE username='$username'");
        return $query->result();
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
