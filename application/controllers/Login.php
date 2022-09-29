<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('UserLogin_model');
        $this->load->helper(array('url'));
    }

    public function index()
    {
        $data['title'] = '管理员登录';
        $this->load->view('login', $data);
    }

    public function login()
    {
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $where = array(
            'username' => $username,
            'password' => md5($password)
        );
        $cek = $this->UserLogin_model->login("user_login", $where)->num_rows();
        if ($cek > 0) {
            $data_session = array(
                'username' => $username,
                'status' => 'login'
            );
            $this->session->set_userdata($data_session);
            $this->session->set_flashdata('login', '您已成功登录！');
            redirect('Admin/index');
        } else {
            $this->session->set_flashdata('message', '<div class="alert-danger" role="alert">您的用户名和密码错误！</div>');
            redirect('Login');
        }
    }

    //Function Forgot Password
    public function forgot_password()
    {
        $data['title'] = '忘记密码';
        $this->load->view('forgot_password', $data);
    }

    public function forgotPassword()
    {
        $email = $this->input->post('email');
        $password = $this->input->post('password');
        $password2 = $this->input->post('password2');

        if ($password !== $password2) {
            $this->session->set_flashdata('flash', '密码不一样!');
            redirect('Login/forgot_password');
        } else {
            $validate = $this->UserLogin_model->validate_email($email);
            $email = $this->db->query("SELECT * FROM user_login WHERE email='$email'")->result();
            $post = $this->input->post();

            if ($validate->num_rows() > 0) {
                $email = $this->input->post('email');
                $data = array(
                    'password' => md5($post['password']),
                );

                $this->UserLogin_model->forgotpassword($email, $data, 'user_login');
                $this->session->set_flashdata('flash', '密码修改成功!');
                redirect('Login');
            } else {
                $this->session->set_flashdata('flash', '错误的电子邮件!');
                redirect('Login/forgot_password');
            }
        }
    }
}
