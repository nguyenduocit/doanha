<?php
	/**
	* Kiểm tra xem người dùng đã login chưa
	*/
	class Login extends MY_Controller
	{
        function __construct()
            {
                parent::__construct();
               
            }
		
		function index()
		{
			
            // kiểm tra có tồn tại biến post
            if($this->input->post())
            {
            
                $this->form_validation->set_rules('login','login','callback_check_login');
                if($this->form_validation->run())
                {
               
                    $this->session->set_userdata('login',true);
                    redirect(admin_url('home'));

                }
            }

			$this->load->view('admin/login/index');
		}



		 // hàm check login 
        function check_login()
        {
        	// kiểm tra xem trường đăng nhập đã được nhập chưa và thông báo
            $this->form_validation->set_rules('maGV','Nhập vào tên đăng nhập !!! ','required');

            // kiểm tra xem trường đăng nhập đã được nhập chưa và thông báo
            $this->form_validation->set_rules('password','Nhập vào tên mật khẩu !!! ','required');

         // gán giá trị cho username  và pass word
            $maGV = $this->input->post('maGV');
            $passwod = $this->input->post('password');

            // mã hóa mật khẩu
            //$password = md5(sha1($passwod));

            // load ra model admin 
             $this->load->model('AdminModel');
             // gán điều kiện 
            $where = array('maGV'=>$maGV , 'matkhau'=>$passwod);
            // kiểm tra xem check trả về giá trị hoặc không có giá trị
            if($this->AdminModel->check_exists($where))
            {
                $input['where'] = array('maGV'=>$maGV ,'matkhau'=>$passwod);
                $user = $this->AdminModel->get_list($input);
                

                $userdata = array();
                foreach ($user as $key => $value) {
                    # code...
                    $userdata[] = $value;
                }
                
                $this->session->set_userdata('userdata',$userdata);
                //pre($userdata );
                return true;
            }
            $this->form_validation->set_message(__FUNCTION__,'Thông tin tài khoản không chính xác');
            return false;
	     

        }


         function logout()
	    {
	        if($this->session->userdata('login'))
	        {
	            $this->session->unset_userdata('login');
                $this->session->sess_destroy();
	        }
	        redirect(admin_url('login'));
	    }

	}
 ?>