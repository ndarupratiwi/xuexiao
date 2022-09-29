<?php
class Template_home
{
    protected $_ci;
    function __construct()
    {
        $this->_ci = &get_instance();
    }
    function views($template_home = null, $data = null)
    {
        if ($template_home != null) {
            $data['header'] = $this->_ci->load->view('home/template/header', $data, true);
            $data['navbar'] = $this->_ci->load->view('home/template/navbar', $data, true);
            $data['konten'] = $this->_ci->load->view($template_home, $data, TRUE);
            $data['content'] = $this->_ci->load->view('home/template/content', $data, true);
            $data['footer'] = $this->_ci->load->view('home/template/footer', $data, true);
            $data['js'] = $this->_ci->load->view('home/template/js', $data, true);

            echo $data['template_home'] = $this->_ci->load->view('home/template/template_home', $data, true);
        }
    }
}
