<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
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
        if ($this->session->userdata('status') != "login") {
            echo "<script>
            alert('您还没有登录！');
            window.location.href = '" . base_url('Login') . "';
        </script>";
        }
    }

    //Dashboard Admin
    public function index()
    {
        $data['title'] = '仪表板管理员';
        $data['NewsCount'] = $this->News_model->newsCount();
        $data['AchievementCount'] = $this->Achievement_model->achievementCount();
        $data['agenda'] =  $this->db->query("SELECT * from agenda where YEAR(agendaDate) = YEAR(NOW()) AND MONTH(agendaDate) = MONTH(NOW())")->result();
        $data['graph'] = $this->Infographics_model->graph();
        $this->template_admin->views('admin/dashboard', $data);
    }

    //School Vision And Misson (学校愿景使命)
    public function visionMission()
    {
        $data['title'] = '愿景和使命';
        $data['Vision'] = $this->Vision_model->getAll()->result();
        $data['Mission'] = $this->Mission_model->getAll()->result();
        $this->template_admin->views('admin/visionMission', $data);
    }

    public function addMission()
    {
        $data['title'] = '增加使命';
        $this->template_admin->views('admin/addMission', $data);
    }

    public function inputMission()
    {
        $mission = $this->input->post('mission');

        $data = array(
            'mission' => $mission
        );
        $this->Mission_model->input_data($data, 'mission');
        $this->session->set_flashdata('flash', '输入');
        redirect('Admin/visionMission');
    }

    public function editVision($id)
    {
        $where = array('id' => $id);
        $data['title'] = '学校愿景更新';
        $data['editVision'] = $this->Vision_model->edit_data($where, 'vision')->result();
        $this->template_admin->views('admin/editVision', $data);
    }

    public function editMission($id)
    {
        $where = array('id' => $id);
        $data['title'] = '学校使命更新';
        $data['editMission'] = $this->Mission_model->edit_data($where, 'mission')->result();
        $this->template_admin->views('admin/editMission', $data);
    }

    public function updateVision()
    {
        $id = $this->input->post('id');
        $vision = $this->input->post('vision');

        $data = array(
            'vision' => $vision
        );

        $where = array(
            'id' => $id
        );

        $this->Vision_model->update_data($where, $data, 'vision');
        $this->session->set_flashdata('flash', '编辑');
        redirect('Admin/visionMission');
    }

    public function updateMission()
    {
        $id = $this->input->post('id');
        $mission = $this->input->post('mission');

        $data = array(
            'mission' => $mission
        );

        $where = array(
            'id' => $id
        );

        $this->Mission_model->update_data($where, $data, 'mission');
        $this->session->set_flashdata('flash', '编辑');
        redirect('Admin/visionMission');
    }

    public function deleteMission($id)
    {
        $where = array('id' => $id);
        $this->Mission_model->delete_data($where, 'mission');
        $this->session->set_flashdata('flash', '删除');
        redirect('Admin/visionMission');
    }

    //School History (校史)
    public function schoolHistory()
    {
        $data['title'] = '校史';
        $data['SchoolHistory'] = $this->SchoolHistory_model->getAll()->result();
        $this->template_admin->views('admin/schoolHistory', $data);
    }

    public function editSchoolHistory($id)
    {
        $where = array('id' => $id);
        $data['title'] = '学校历史更新';
        $data['editSchoolHistory'] = $this->SchoolHistory_model->edit_data($where, 'school_history')->result();
        $this->template_admin->views('admin/editSchoolHistory', $data);
    }

    public function updateSchoolHistory()
    {
        $id = $this->input->post('id');
        $title = $this->input->post('title');
        $contents = $this->input->post('contents');

        $data = array(
            'title' => $title,
            'contents' => $contents
        );

        $where = array(
            'id' => $id
        );

        $this->SchoolHistory_model->update_data($where, $data, 'school_history');
        $this->session->set_flashdata('flash', '编辑');
        redirect('Admin/schoolHistory');
    }

    //School Photo (学校简介照片)
    public function schoolPhoto()
    {
        $data['title'] = '学校简介照片';
        $data['schoolPhoto'] = $this->SchoolPhoto_model->getAll()->result();
        $this->template_admin->views('admin/schoolPhoto', $data);
    }

    public function addSchoolPhoto()
    {
        $data['title'] = '添加学校资料照片';
        $this->template_admin->views('admin/addSchoolPhoto', $data);
    }

    public function inputSchoolPhoto()
    {
        $title = $this->input->post('title');
        $image = $_FILES['image'];
        if ($image = '') {
        } else {

            $config['upload_path'] = './uploads/school_photo';
            $config['allowed_types'] = 'jpeg|jpg|png|svg';
            $config['overwrite'] = true;
            $config['max_size'] = 2048; //2MB

            $this->upload->initialize($config);
            if (!$this->upload->do_upload('image')) {
                echo "上传失败";
                die();
            } else {
                $image = $this->upload->data("file_name");
            }
        }

        $data = array(
            'title' => $title,
            'image' => $image
        );
        $this->SchoolPhoto_model->input_data($data, 'school_photo');
        $this->session->set_flashdata('flash', '输入');
        redirect('Admin/schoolPhoto');
    }

    public function editSchoolPhoto($id)
    {
        $where = array('id' => $id);
        $data['title'] = '学校资料照片更新';
        $data['editSchoolPhoto'] = $this->SchoolPhoto_model->edit_data($where, 'school_photo')->result();
        $this->template_admin->views('admin/editSchoolPhoto', $data);
    }

    public function updateSchoolPhoto()
    {
        $id = $this->input->post('id');
        $title = $this->input->post('title');
        $image = $_FILES['image'];
        if ($image = '') {
            echo "图片为必填项";
        } else {

            $config['upload_path'] = './uploads/school_photo';
            $config['allowed_types'] = 'jpeg|jpg|png|svg';
            $config['overwrite'] = true;
            $config['max_size'] = 2048; //2MB

            $this->upload->initialize($config);
            if (!$this->upload->do_upload('image')) {
                $data = array(
                    'title' => $title
                );

                $where = array(
                    'id' => $id
                );

                $this->SchoolPhoto_model->update_data($where, $data, 'school_photo');
                $this->session->set_flashdata('flash', '编辑');
                redirect('Admin/schoolPhoto');
            } else {
                $image = $this->upload->data("file_name");
            }
        }

        $data = array(
            'title' => $title,
            'image' => $image
        );

        $where = array(
            'id' => $id
        );

        $this->SchoolPhoto_model->update_data($where, $data, 'school_photo');
        $this->session->set_flashdata('flash', '编辑');
        redirect('Admin/schoolPhoto');
    }

    public function deleteSchoolPhoto($id)
    {
        $where = array('id' => $id);
        $this->SchoolPhoto_model->delete_data($where, 'school_photo');
        $this->session->set_flashdata('flash', '删除');
        redirect('Admin/schoolPhoto');
    }

    //Achievement (学生的成就)
    public function achievement()
    {
        $data['title'] = '学生的成就';
        $data['achievement'] = $this->Achievement_model->getAll()->result();
        $this->template_admin->views('admin/achievement', $data);
    }

    public function addAchievement()
    {
        $data['title'] = '添加成就';
        $this->template_admin->views('admin/addAchievement', $data);
    }

    public function inputAchievement()
    {
        $title = $this->input->post('title');
        $name = $this->input->post('name');
        $description = $this->input->post('description');
        $image = $_FILES['image'];
        if ($image = '') {
        } else {

            $config['upload_path'] = './uploads/achievement';
            $config['allowed_types'] = 'jpeg|jpg|png|svg';
            $config['overwrite'] = true;
            $config['max_size'] = 2048; //2MB

            $this->upload->initialize($config);
            if (!$this->upload->do_upload('image')) {
                echo "上传失败";
                die();
            } else {
                $image = $this->upload->data("file_name");
            }
        }

        $data = array(
            'title' => $title,
            'name' => $name,
            'description' => $description,
            'image' => $image
        );
        $this->Achievement_model->input_data($data, 'achievement');
        $this->session->set_flashdata('flash', '输入');
        redirect('Admin/achievement');
    }

    public function editAchievement($id)
    {
        $where = array('id' => $id);
        $data['title'] = '学生的成就更新';
        $data['editAchievement'] = $this->Achievement_model->edit_data($where, 'achievement')->result();
        $this->template_admin->views('admin/editAchievement', $data);
    }

    public function updateAchievement()
    {
        $id = $this->input->post('id');
        $title = $this->input->post('title');
        $name = $_POST['name'];
        $description = $_POST['description'];
        $image = $_FILES['image'];
        if ($image = '') {
            echo "图片为必填项";
        } else {

            $config['upload_path'] = './uploads/achievement';
            $config['allowed_types'] = 'jpeg|jpg|png|svg';
            $config['overwrite'] = true;
            $config['max_size'] = 2048; //2MB

            $this->upload->initialize($config);
            if (!$this->upload->do_upload('image')) {
                $data = array(
                    'title' => $title,
                    'name' => $name,
                    'description' => $description
                );

                $where = array(
                    'id' => $id
                );

                $this->Achievement_model->update_data($where, $data, 'achievement');
                $this->session->set_flashdata('flash', '编辑');
                redirect('Admin/achievement');
            } else {
                $image = $this->upload->data("file_name");
            }
        }

        $data = array(
            'title' => $title,
            'name' => $name,
            'description' => $description,
            'image' => $image
        );

        $where = array(
            'id' => $id
        );

        $this->Achievement_model->update_data($where, $data, 'achievement');
        $this->session->set_flashdata('flash', '编辑');
        redirect('Admin/achievement');
    }

    public function deleteAchievement($id)
    {
        $where = array('id' => $id);
        $this->Achievement_model->delete_data($where, 'achievement');
        $this->session->set_flashdata('flash', '删除');
        redirect('Admin/achievement');
    }

    //Extracurricular (学生的成就)
    public function extracurricular()
    {
        $data['title'] = '课外';
        $data['extracurricular'] = $this->Extracurricular_model->getAll()->result();
        $this->template_admin->views('admin/extracurricular', $data);
    }

    public function addExtracurricular()
    {
        $data['title'] = '添加课外';
        $this->template_admin->views('admin/addExtracurricular', $data);
    }

    public function inputExtracurricular()
    {
        $name = $this->input->post('name');
        $description = $this->input->post('description');
        $image = $_FILES['image'];
        if ($image = '') {
        } else {

            $config['upload_path'] = './uploads/extracurricular';
            $config['allowed_types'] = 'jpeg|jpg|png|svg';
            $config['overwrite'] = true;
            $config['max_size'] = 2048; //2MB

            $this->upload->initialize($config);
            if (!$this->upload->do_upload('image')) {
                echo "上传失败";
                die();
            } else {
                $image = $this->upload->data("file_name");
            }
        }

        $data = array(
            'name' => $name,
            'description' => $description,
            'image' => $image
        );
        $this->Extracurricular_model->input_data($data, 'extracurricular');
        $this->session->set_flashdata('flash', '输入');
        redirect('Admin/extracurricular');
    }

    public function editExtracurricular($id)
    {
        $where = array('id' => $id);
        $data['title'] = '课外更新';
        $data['editExtracurricular'] = $this->Extracurricular_model->edit_data($where, 'extracurricular')->result();
        $this->template_admin->views('admin/editExtracurricular', $data);
    }

    public function updateExtracurricular()
    {
        $id = $this->input->post('id');
        $name = $_POST['name'];
        $description = $_POST['description'];
        $image = $_FILES['image'];
        if ($image = '') {
            echo "图片为必填项";
        } else {

            $config['upload_path'] = './uploads/extracurricular';
            $config['allowed_types'] = 'jpeg|jpg|png|svg';
            $config['overwrite'] = true;
            $config['max_size'] = 2048; //2MB

            $this->upload->initialize($config);
            if (!$this->upload->do_upload('image')) {
                $data = array(
                    'name' => $name,
                    'description' => $description
                );

                $where = array(
                    'id' => $id
                );

                $this->Extracurricular_model->update_data($where, $data, 'extracurricular');
                $this->session->set_flashdata('flash', '编辑');
                redirect('Admin/extracurricular');
            } else {
                $image = $this->upload->data("file_name");
            }
        }

        $data = array(
            'name' => $name,
            'description' => $description,
            'image' => $image
        );

        $where = array(
            'id' => $id
        );

        $this->Extracurricular_model->update_data($where, $data, 'extracurricular');
        $this->session->set_flashdata('flash', '编辑');
        redirect('Admin/extracurricular');
    }

    public function deleteExtracurricular($id)
    {
        $where = array('id' => $id);
        $this->Extracurricular_model->delete_data($where, 'extracurricular');
        $this->session->set_flashdata('flash', '删除');
        redirect('Admin/extracurricular');
    }

    //News(消息)
    public function news()
    {
        $data['title'] = '消息';
        $data['news'] = $this->News_model->getAll()->result();
        $this->template_admin->views('admin/news', $data);
    }

    public function addNews()
    {
        $data['title'] = '添加信息';
        $this->template_admin->views('admin/addNews', $data);
    }

    public function inputNews()
    {
        $title = $this->input->post('title');
        $contents = $this->input->post('contents');
        $createdDate = $this->input->post('createdDate');
        $image = $_FILES['image'];
        if ($image = '') {
        } else {

            $config['upload_path'] = './uploads/news';
            $config['allowed_types'] = 'jpeg|jpg|png|svg';
            $config['overwrite'] = true;
            $config['max_size'] = 2048; //2MB

            $this->upload->initialize($config);
            if (!$this->upload->do_upload('image')) {
                echo "上传失败";
                die();
            } else {
                $image = $this->upload->data("file_name");
            }
        }

        $data = array(
            'title' => $title,
            'contents' => $contents,
            'createdDate' => $createdDate,
            'image' => $image
        );
        $this->News_model->input_data($data, 'news');
        $this->session->set_flashdata('flash', '输入');
        redirect('Admin/news');
    }

    public function editNews($id)
    {
        $where = array('id' => $id);
        $data['title'] = '更新信息';
        $data['editNews'] = $this->News_model->edit_data($where, 'news')->result();
        $this->template_admin->views('admin/editNews', $data);
    }

    public function updateNews()
    {
        $id = $this->input->post('id');
        $title = $this->input->post('title');
        $contents = $_POST['contents'];
        $createdDate = $_POST['createdDate'];
        $image = $_FILES['image'];
        if ($image = '') {
            echo "图片为必填项";
        } else {

            $config['upload_path'] = './uploads/news';
            $config['allowed_types'] = 'jpeg|jpg|png|svg';
            $config['overwrite'] = true;
            $config['max_size'] = 2048; //2MB

            $this->upload->initialize($config);
            if (!$this->upload->do_upload('image')) {
                $data = array(
                    'title' => $title,
                    'contents' => $contents,
                    'createdDate' => $createdDate
                );

                $where = array(
                    'id' => $id
                );

                $this->News_model->update_data($where, $data, 'news');
                $this->session->set_flashdata('flash', '编辑');
                redirect('Admin/news');
            } else {
                $image = $this->upload->data("file_name");
            }
        }

        $data = array(
            'title' => $title,
            'contents' => $contents,
            'createdDate' => $createdDate,
            'image' => $image
        );

        $where = array(
            'id' => $id
        );

        $this->News_model->update_data($where, $data, 'news');
        $this->session->set_flashdata('flash', '编辑');
        redirect('Admin/news');
    }

    public function deleteNews($id)
    {
        $where = array('id' => $id);
        $this->News_model->delete_data($where, 'news');
        $this->session->set_flashdata('flash', '删除');
        redirect('Admin/news');
    }

    //Agenda(议程)
    public function agenda()
    {
        $data['title'] = '议程';
        $data['agenda'] = $this->Agenda_model->getAll()->result();
        $this->template_admin->views('admin/agenda', $data);
    }
    public function addAgenda()
    {
        $data['title'] = '添加议程';
        $this->load->view('admin/addAgenda', $data);
    }

    public function inputAgenda()
    {
        $title = $this->input->post('title');
        $agenda = $this->input->post('agenda');
        $agendaDate = $this->input->post('agendaDate');
        $time = $this->input->post('time');
        $createdDate = $this->input->post('createdDate');
        $image = $_FILES['image'];
        if ($image = '') {
        } else {

            $config['upload_path'] = './uploads/agenda';
            $config['allowed_types'] = 'jpeg|jpg|png|svg';
            $config['overwrite'] = true;
            $config['max_size'] = 2048; //2MB

            $this->upload->initialize($config);
            if (!$this->upload->do_upload('image')) {
                echo "上传失败";
                die();
            } else {
                $image = $this->upload->data("file_name");
            }
        }

        $data = array(
            'title' => $title,
            'agenda' => $agenda,
            'agendaDate' => $agendaDate,
            'time' => $time,
            'createdDate' => $createdDate,
            'image' => $image
        );
        $this->Agenda_model->input_data($data, 'agenda');
        $this->session->set_flashdata('flash', '输入');
        redirect('Admin/agenda');
    }

    public function editAgenda($id)
    {
        $where = array('id' => $id);
        $data['title'] = '更新议程';
        $data['editAgenda'] = $this->Agenda_model->edit_data($where, 'agenda')->result();
        $this->load->view('admin/editAgenda', $data);
    }

    public function updateAgenda()
    {
        $id = $this->input->post('id');
        $title = $this->input->post('title');
        $agenda = $_POST['agenda'];
        $agendaDate = $_POST['agendaDate'];
        $time = $_POST['time'];
        $createdDate = $_POST['createdDate'];
        $image = $_FILES['image'];
        if ($image = '') {
            echo "图片为必填项";
        } else {

            $config['upload_path'] = './uploads/agenda';
            $config['allowed_types'] = 'jpeg|jpg|png|svg';
            $config['overwrite'] = true;
            $config['max_size'] = 2048; //2MB

            $this->upload->initialize($config);
            if (!$this->upload->do_upload('image')) {
                $data = array(
                    'title' => $title,
                    'agenda' => $agenda,
                    'agendaDate' => $agendaDate,
                    'time' => $time,
                    'createdDate' => $createdDate
                );

                $where = array(
                    'id' => $id
                );

                $this->Agenda_model->update_data($where, $data, 'agenda');
                $this->session->set_flashdata('flash', '编辑');
                redirect('Admin/agenda');
            } else {
                $image = $this->upload->data("file_name");
            }
        }

        $data = array(
            'title' => $title,
            'agenda' => $agenda,
            'agendaDate' => $agendaDate,
            'time' => $time,
            'createdDate' => $createdDate,
            'image' => $image
        );

        $where = array(
            'id' => $id
        );

        $this->Agenda_model->update_data($where, $data, 'agenda');
        $this->session->set_flashdata('flash', '编辑');
        redirect('Admin/agenda');
    }

    public function deleteAgenda($id)
    {
        $where = array('id' => $id);
        $this->Agenda_model->delete_data($where, 'agenda');
        $this->session->set_flashdata('flash', '删除');
        redirect('Admin/agenda');
    }

    //New Student Registration Information(新学生注册信息)
    public function newStudentRegistrationInformation()
    {
        $data['title'] = '新学生注册信息';
        $data['RegistrationInformation'] = $this->RegistrationInformation_model->getAll()->result();
        $this->template_admin->views('admin/newStudentRegistrationInformation', $data);
    }
    public function addRegistrationInformation()
    {
        $data['title'] = '添加新的学生注册信息';
        $this->template_admin->views('admin/addnewStudentRegistrationInformation', $data);
    }

    public function inputRegistrationInformation()
    {
        $title = $this->input->post('title');
        $information = $this->input->post('information');
        $image = $_FILES['image'];
        if ($image = '') {
        } else {

            $config['upload_path'] = './uploads/registration_information';
            $config['allowed_types'] = 'jpeg|jpg|png|svg';
            $config['overwrite'] = true;
            $config['max_size'] = 2048; //2MB

            $this->upload->initialize($config);
            if (!$this->upload->do_upload('image')) {
                echo "上传失败";
                die();
            } else {
                $image = $this->upload->data("file_name");
            }
        }

        $data = array(
            'title' => $title,
            'information' => $information,
            'image' => $image
        );
        $this->RegistrationInformation_model->input_data($data, 'registration_information');
        $this->session->set_flashdata('flash', '输入');
        redirect('Admin/newStudentRegistrationInformation');
    }

    public function editRegistrationInformation($id)
    {
        $where = array('id' => $id);
        $data['title'] = '更新新的学生注册信息';
        $data['editRegistrationInformation'] = $this->RegistrationInformation_model->edit_data($where, 'registration_information')->result();
        $this->template_admin->views('admin/editNewStudentRegistrationInformation', $data);
    }

    public function updateRegistrationInformation()
    {
        $id = $this->input->post('id');
        $title = $this->input->post('title');
        $information = $this->input->post('information');
        $image = $_FILES['image'];
        if ($image = '') {
            echo "图片为必填项";
        } else {

            $config['upload_path'] = './uploads/registration_information';
            $config['allowed_types'] = 'jpeg|jpg|png|svg';
            $config['overwrite'] = true;
            $config['max_size'] = 2048; //2MB

            $this->upload->initialize($config);
            if (!$this->upload->do_upload('image')) {
                $data = array(
                    'title' => $title,
                    'information' => $information
                );

                $where = array(
                    'id' => $id
                );

                $this->RegistrationInformation_model->update_data($where, $data, 'registration_information');
                $this->session->set_flashdata('flash', '编辑');
                redirect('Admin/newStudentRegistrationInformation');
            } else {
                $image = $this->upload->data("file_name");
            }
        }

        $data = array(
            'title' => $title,
            'information' => $information,
            'image' => $image
        );

        $where = array(
            'id' => $id
        );

        $this->RegistrationInformation_model->update_data($where, $data, 'registration_information');
        $this->session->set_flashdata('flash', '编辑');
        redirect('Admin/newStudentRegistrationInformation');
    }

    public function deleteRegistrationInformation($id)
    {
        $where = array('id' => $id);
        $this->RegistrationInformation_model->delete_data($where, 'registration_information');
        $this->session->set_flashdata('flash', '删除');
        redirect('Admin/newStudentRegistrationInformation');
    }

    //Infographichs(信息图表)
    public function infographics()
    {
        $data['title'] = '信息图表';
        $data['infographics'] = $this->Infographics_model->getAll()->result();
        $this->template_admin->views('admin/infographics', $data);
    }

    public function addInfographics()
    {
        $data['title'] = '添加信息图表';
        $this->template_admin->views('admin/addInfographics', $data);
    }

    public function inputInfographics()
    {
        $title = $this->input->post('title');
        $amount = $this->input->post('amount');

        $data = array(
            'title' => $title,
            'amount' => $amount
        );

        $this->Infographics_model->input_data($data, 'infographics');
        $this->session->set_flashdata('flash', '输入');
        redirect('Admin/infographics');
    }

    public function editInfographics($id)
    {
        $where = array('id' => $id);
        $data['title'] = '更新信息图表';
        $data['editInfographics'] = $this->Infographics_model->edit_data($where, 'infographics')->result();
        $this->template_admin->views('admin/editInfographics', $data);
    }

    public function updateInfographics()
    {
        $id = $this->input->post('id');
        $title = $this->input->post('title');
        $amount = $this->input->post('amount');

        $data = array(
            'title' => $title,
            'amount' => $amount
        );

        $where = array(
            'id' => $id
        );

        $this->Infographics_model->update_data($where, $data, 'infographics');
        $this->session->set_flashdata('flash', '编辑');
        redirect('Admin/infographics');
    }

    public function deleteInfographics($id)
    {
        $where = array('id' => $id);
        $this->Infographics_model->delete_data($where, 'infographics');
        $this->session->set_flashdata('flash', '删除');
        redirect('Admin/infographics');
    }

    //Office Hours(工作时间)
    public function officeHours()
    {
        $data['title'] = '工作时间';
        $data['officeHours'] = $this->OfficeHours_model->getAll()->result();
        $this->template_admin->views('admin/officeHours', $data);
    }

    public function editOfficeHours($id)
    {
        $where = array('id' => $id);
        $data['title'] = '更新工作时间';
        $data['editOfficeHours'] = $this->OfficeHours_model->edit_data($where, 'office_hours')->result();
        $this->template_admin->views('admin/editOfficeHours', $data);
    }

    public function updateOfficeHours()
    {
        $id = $this->input->post('id');
        $day = $this->input->post('day');
        $time_start = $this->input->post('time_start');
        $time_end = $this->input->post('time_end');

        $data = array(
            'day' => $day,
            'time_start' => $time_start,
            'time_end' => $time_end
        );

        $where = array(
            'id' => $id
        );

        $this->OfficeHours_model->update_data($where, $data, 'office_hours');
        $this->session->set_flashdata('flash', '编辑');
        redirect('Admin/officeHours');
    }

    //Contacts(往来)
    public function contacts()
    {
        $data['title'] = '往来';
        $data['contacts'] = $this->Contacts_model->getAll()->result();
        $this->template_admin->views('admin/contacts', $data);
    }

    public function editContacts($id)
    {
        $where = array('id' => $id);
        $data['title'] = '更新往来';
        $data['editContacts'] = $this->Contacts_model->edit_data($where, 'contacts')->result();
        $this->template_admin->views('admin/editContacts', $data);
    }

    public function updateContacts()
    {
        $id = $this->input->post('id');
        $address = $this->input->post('address');
        $phone_number = $this->input->post('phone_number');
        $email = $this->input->post('email');

        $data = array(
            'address' => $address,
            'phone_number' => $phone_number,
            'email' => $email
        );

        $where = array(
            'id' => $id
        );

        $this->Contacts_model->update_data($where, $data, 'contacts');
        $this->session->set_flashdata('flash', '编辑');
        redirect('Admin/contacts');
    }

    //Settings(设置)
    public function accountSettings()
    {
        $data['title'] = '帐号设定';
        $data['accountSettings'] = $this->UserLogin_model->getAll()->result();
        $this->template_admin->views('admin/accountSettings', $data);
    }
    public function editAccountSettings($id)
    {
        $where = array('id' => $id);
        $data['title'] = '更新帐户设置';
        $data['editAccountSettings'] = $this->UserLogin_model->edit_data($where, 'user_login')->result();
        $this->template_admin->views('admin/editAccountSettings', $data);
    }

    public function updateAccountSettings()
    {
        $id = $this->input->post('id');
        $username = $this->input->post('username');
        $email = $this->input->post('email');
        $password = md5($this->input->post('password'));
        $createdDate = $this->input->post('createdDate');

        $data = array(
            'username' => $username,
            'email' => $email,
            'password' => $password,
            'createdDate' => $createdDate
        );

        $where = array(
            'id' => $id
        );

        $this->UserLogin_model->update_data($where, $data, 'user_login');
        $this->session->set_flashdata('flashAccountSettings', '编辑');
        redirect('Admin/accountSettings');
    }
}
