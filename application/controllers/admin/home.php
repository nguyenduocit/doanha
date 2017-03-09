<?php 

    class Home extends MY_Controller
    {
        public function index()
        {
            
            $data['temp'] = 'admin/dulieu/khoa/index';
            $this->load->view('admin/main',$data);
        }
    }
 ?>