<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Blog extends CI_Controller
{
    public function __construct() //Método constructor
    {
        parent::__construct();
        $this->load->model('generic_model');
    }
    public function blog($url = NULL)
    {
        $data = $this->generic_model->get_a_record_by_record('articles', 'url', $url);

        //First group of files
        $this->load->View('canvas/common_files/01_open_html', $data);
        $this->load->View('canvas/common_files/02_head');
        $this->load->View('canvas/common_files/03_open_body_and_wrapper');
        //End of first group of files

        //Content

        $this->load->View('canvas/sections/blog/blog_single_full');
        $this->load->View('canvas/sections/footers/01_open_footer');
        $this->load->View('canvas/sections/footers/copyrights');
        $this->load->View('canvas/sections/footers/02_close_footer');

        //End of Content

        //Second group of files
        $this->load->View('canvas/common_files/04_close_wrapper');
        $this->load->View('canvas/common_files/05_go_to_top');
        $this->load->View('canvas/common_files/06_scripts');
        $this->load->View('canvas/common_files/07_close_html_and_body');
        //End of second group of files
    }
}
