<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Achievement_model');
        $this->load->model('Agenda_model');
        $this->load->model('Contacts_model');
        $this->load->model('Extracurricular_model');
        $this->load->model('Infographics_model');
        $this->load->model('News_model');
        $this->load->model('OfficeHours_model');
        $this->load->model('SchoolHistory_model');
        $this->load->model('SchoolPhoto_model');
        $this->load->model('RegistrationInformation_model');
        $this->load->model('UserLogin_model');
        $this->load->model('Vision_model');
        $this->load->model('Mission_model');
        $this->load->helper(array('url'));
    }

    //Homapage
    public function index()
    {
        $data['title'] = '学校管理系统';
        $data['photo'] = $this->SchoolPhoto_model->getAll()->result();
        $data['news'] = $this->News_model->getNews()->result();
        $data['SchoolHistory'] = $this->SchoolHistory_model->getAll()->result();
        $data['infographics'] = $this->Infographics_model->getAll()->result();
        $data['Kontak'] = $this->Contacts_model->getAll()->result();
        $data['agenda'] =  $this->db->query("SELECT * from agenda where YEAR(agendaDate) = YEAR(NOW()) AND MONTH(agendaDate) = MONTH(NOW())")->result();
        $this->template_home->views('index', $data);
    }

    //About School
    public function schoolProfile()
    {
        $data['title'] = '学校简介';
        $data['Vision'] = $this->Vision_model->getAll()->result();
        $data['Mission'] = $this->Mission_model->getAll()->result();
        $data['SchoolHistory'] = $this->SchoolHistory_model->getAll()->result();
        $data['officeHours'] = $this->OfficeHours_model->getAll()->result();
        $data['Kontak'] = $this->Contacts_model->getAll()->result();
        $this->template_home->views('home/aboutSchool', $data);
    }

    //Information
    public function information()
    {
        $data['title'] = '信息';
        //load library
        $this->load->library('pagination');
        //load config
        $config['base_url'] = 'http://localhost/school/home/information';
        $config['total_rows'] = $this->News_model->countAllNews();
        $config['per_page'] = 2;
        //styling
        $config['full_tag_open'] = '<nav><ul class="pagination justify-content-center">';
        $config['full_tag_close'] = '</ul></nav>';

        $config['first_link'] = 'First';
        $config['first_tag_open'] = '<li class="page-item">';
        $config['first_tag_close'] = '</li>';

        $config['last_link'] = 'Last';
        $config['last_tag_open'] = '<li class="page-item">';
        $config['last_tag_close'] = '</li>';

        $config['next_link'] = '&raquo';
        $config['next_tag_open'] = '<li class="page-item">';
        $config['next_tag_close'] = '</li>';

        $config['prev_link'] = '&laquo';
        $config['prev_tag_open'] = '<li class="page-item">';
        $config['prev_tag_close'] = '</li>';

        $config['cur_tag_open'] = '<li class="page-item active"><a class="page-link" href="#">';
        $config['cur_tag_close'] = '</a></li>';

        $config['num_tag_open'] = '<li class="page-item">';
        $config['num_tag_close'] = '</li>';

        $config['attributes'] = array('class' => 'page-link');


        //initialize
        $this->pagination->initialize($config);
        $data['start'] = $this->uri->segment(3);
        $data['information'] = $this->News_model->News($config['per_page'], $data['start'])->result();
        $data['Kontak'] = $this->Contacts_model->getAll()->result();
        $this->template_home->views('home/information', $data);
    }

    public function detailNews($id)
    {
        $where = array('id' => $id);
        $data['title'] = '信息详情';
        $data['detailNews'] = $this->News_model->detail_news($where, 'news')->result();
        $data['Kontak'] = $this->Contacts_model->getAll()->result();
        $this->template_home->views('home/detailNews', $data);
    }

    //Agenda
    public function agenda()
    {
        $data['title'] = '议程';
        //load library
        $this->load->library('pagination');
        //load config
        $config['base_url'] = 'http://localhost/school/home/agenda';
        $config['total_rows'] = $this->Agenda_model->countAllAgenda();
        $config['per_page'] = 2;
        //styling
        $config['full_tag_open'] = '<nav><ul class="pagination justify-content-center">';
        $config['full_tag_close'] = '</ul></nav>';

        $config['first_link'] = 'First';
        $config['first_tag_open'] = '<li class="page-item">';
        $config['first_tag_close'] = '</li>';

        $config['last_link'] = 'Last';
        $config['last_tag_open'] = '<li class="page-item">';
        $config['last_tag_close'] = '</li>';

        $config['next_link'] = '&raquo';
        $config['next_tag_open'] = '<li class="page-item">';
        $config['next_tag_close'] = '</li>';

        $config['prev_link'] = '&laquo';
        $config['prev_tag_open'] = '<li class="page-item">';
        $config['prev_tag_close'] = '</li>';

        $config['cur_tag_open'] = '<li class="page-item active"><a class="page-link" href="#">';
        $config['cur_tag_close'] = '</a></li>';

        $config['num_tag_open'] = '<li class="page-item">';
        $config['num_tag_close'] = '</li>';

        $config['attributes'] = array('class' => 'page-link');


        //initialize
        $this->pagination->initialize($config);
        $data['start'] = $this->uri->segment(3);
        $data['agenda'] = $this->Agenda_model->getAgenda($config['per_page'], $data['start'])->result();
        $data['Kontak'] = $this->Contacts_model->getAll()->result();
        $this->template_home->views('home/agenda', $data);
    }

    public function detailAgenda($id)
    {
        $where = array('id' => $id);
        $data['title'] = '详细议程';
        $data['detailAgenda'] = $this->Agenda_model->detail_agenda($where, 'agenda')->result();
        $data['Kontak'] = $this->Contacts_model->getAll()->result();
        $this->template_home->views('home/detailAgenda', $data);
    }


    public function extracurricular()
    {
        $data['title'] = '课外';
        //load library
        $this->load->library('pagination');
        //load config
        $config['base_url'] = 'http://localhost/school/home/extracurricular';
        $config['total_rows'] = $this->Extracurricular_model->countAllExtracurricular();
        $config['per_page'] = 3;
        //styling
        $config['full_tag_open'] = '<nav><ul class="pagination justify-content-center">';
        $config['full_tag_close'] = '</ul></nav>';

        $config['first_link'] = 'First';
        $config['first_tag_open'] = '<li class="page-item">';
        $config['first_tag_close'] = '</li>';

        $config['last_link'] = 'Last';
        $config['last_tag_open'] = '<li class="page-item">';
        $config['last_tag_close'] = '</li>';

        $config['next_link'] = '&raquo';
        $config['next_tag_open'] = '<li class="page-item">';
        $config['next_tag_close'] = '</li>';

        $config['prev_link'] = '&laquo';
        $config['prev_tag_open'] = '<li class="page-item">';
        $config['prev_tag_close'] = '</li>';

        $config['cur_tag_open'] = '<li class="page-item active"><a class="page-link" href="#">';
        $config['cur_tag_close'] = '</a></li>';

        $config['num_tag_open'] = '<li class="page-item">';
        $config['num_tag_close'] = '</li>';

        $config['attributes'] = array('class' => 'page-link');


        //initialize
        $this->pagination->initialize($config);
        $data['start'] = $this->uri->segment(3);
        $data['extracurricular'] = $this->Extracurricular_model->Extracurricular($config['per_page'], $data['start'])->result();
        $data['Kontak'] = $this->Contacts_model->getAll()->result();
        $this->template_home->views('home/extracurricular', $data);
    }

    public function achievement()
    {
        $data['title'] = '成就';
        //load library
        $this->load->library('pagination');
        //load config
        $config['base_url'] = 'http://localhost/school/home/achievement';
        $config['total_rows'] = $this->Achievement_model->countAllAchievement();
        $config['per_page'] = 3;
        //styling
        $config['full_tag_open'] = '<nav><ul class="pagination justify-content-center">';
        $config['full_tag_close'] = '</ul></nav>';

        $config['first_link'] = 'First';
        $config['first_tag_open'] = '<li class="page-item">';
        $config['first_tag_close'] = '</li>';

        $config['last_link'] = 'Last';
        $config['last_tag_open'] = '<li class="page-item">';
        $config['last_tag_close'] = '</li>';

        $config['next_link'] = '&raquo';
        $config['next_tag_open'] = '<li class="page-item">';
        $config['next_tag_close'] = '</li>';

        $config['prev_link'] = '&laquo';
        $config['prev_tag_open'] = '<li class="page-item">';
        $config['prev_tag_close'] = '</li>';

        $config['cur_tag_open'] = '<li class="page-item active"><a class="page-link" href="#">';
        $config['cur_tag_close'] = '</a></li>';

        $config['num_tag_open'] = '<li class="page-item">';
        $config['num_tag_close'] = '</li>';

        $config['attributes'] = array('class' => 'page-link');


        //initialize
        $this->pagination->initialize($config);
        $data['start'] = $this->uri->segment(3);
        $data['achievement'] = $this->Achievement_model->Achievement($config['per_page'], $data['start'])->result();
        $data['Kontak'] = $this->Contacts_model->getAll()->result();
        $this->template_home->views('home/achievement', $data);
    }

    public function newStudentRegistration()
    {
        $data['title'] = '新学生注册';
        //load library
        $this->load->library('pagination');
        //load config
        $config['base_url'] = 'http://localhost/school/home/newStudentRegistration';
        $config['total_rows'] = $this->Achievement_model->countAllAchievement();
        $config['per_page'] = 2;
        //styling
        $config['full_tag_open'] = '<nav><ul class="pagination justify-content-center">';
        $config['full_tag_close'] = '</ul></nav>';

        $config['first_link'] = 'First';
        $config['first_tag_open'] = '<li class="page-item">';
        $config['first_tag_close'] = '</li>';

        $config['last_link'] = 'Last';
        $config['last_tag_open'] = '<li class="page-item">';
        $config['last_tag_close'] = '</li>';

        $config['next_link'] = '&raquo';
        $config['next_tag_open'] = '<li class="page-item">';
        $config['next_tag_close'] = '</li>';

        $config['prev_link'] = '&laquo';
        $config['prev_tag_open'] = '<li class="page-item">';
        $config['prev_tag_close'] = '</li>';

        $config['cur_tag_open'] = '<li class="page-item active"><a class="page-link" href="#">';
        $config['cur_tag_close'] = '</a></li>';

        $config['num_tag_open'] = '<li class="page-item">';
        $config['num_tag_close'] = '</li>';

        $config['attributes'] = array('class' => 'page-link');


        //initialize
        $this->pagination->initialize($config);
        $data['start'] = $this->uri->segment(3);
        $data['newStudentRegistration'] = $this->RegistrationInformation_model->getRegistrationInformation($config['per_page'], $data['start'])->result();
        $data['Kontak'] = $this->Contacts_model->getAll()->result();
        $this->template_home->views('home/newStudentRegistration', $data);
    }

    public function detailStudentRegistration($id)
    {
        $where = array('id' => $id);
        $data['title'] = '新学生注册信息的详细信息';
        $data['detailStudentRegistration'] = $this->RegistrationInformation_model->detail_ppdb($where, 'registration_information')->result();
        $data['Kontak'] = $this->Contacts_model->getAll()->result();
        $this->template_home->views('home/detailStudentRegistration', $data);
    }
}
