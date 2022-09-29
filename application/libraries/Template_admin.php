<?php
class Template_admin
{
    protected $_ci;
    function __construct()
    {
        $this->_ci = &get_instance();
    }
    function views($template_admin = null, $data = null)
    {
        if ($template_admin != null) {
            $data['header'] = $this->_ci->load->view('admin/template/header', $data, true);
            $data['sidebar'] = $this->_ci->load->view('admin/template/sidebar', $data, true);
            $data['topbar'] = $this->_ci->load->view('admin/template/topbar', $data, true);
            $data['konten'] = $this->_ci->load->view($template_admin, $data, TRUE);
            $data['content'] = $this->_ci->load->view('admin/template/content', $data, true);
            $data['footer'] = $this->_ci->load->view('admin/template/footer', $data, true);
            $data['logout'] = $this->_ci->load->view('admin/template/logout', $data, true);
            $data['js'] = $this->_ci->load->view('admin/template/js', $data, true);

            echo $data['template_admin'] = $this->_ci->load->view('admin/template/template_admin', $data, true);
        }
    }
}
