<?php 

    class MY_Controller extends CI_Controller
    {
        /**
         * khởi tạo ! kế thừa từ CI_Controller
         */
        public function __construct()
        {
            parent::__construct();

           $contro = $this->uri->segment(1);
            
            switch ($contro) {
             case 'admin':
                 # code...
                $this->check_login();
                 break;
             
             default:
                 # code...
                 break;
             }
        }


        private function check_login()
        {
            // lấy controller trên thanh địa chỉ
            $controler = $this->uri->rsegment('1');
            // chuyển về chữ thường và kiểm tra
            $controler = strtolower($controler);
            // gán biến session 
            $login = $this->session->userdata('login');
            // nếu chưa đăng nhạp và controller khác login
            if(!$login && $controler != 'login')
            {
                redirect(admin_url('login'));
            }
            // nếu admin đã đăng nhập thì không cho vào trang admin
            if($login && $controler =='login')
            {
                redirect(admin_url('home'));
            }


        }

         
         
    }

 ?>