<?php
	class Khoa extends MY_Controller
	{
		public function __construct()
		{
			parent::__construct();
			$this->load->model('KhoaModel');
			 //kiểm tra dữ liệu
	        $this->load->library('form_validation');
	        $this->load->helper('form');
		}


		public function index()
		{
			// lấy ra danh sách khoa 

			$list_khoa = $this->KhoaModel->get_list();

			// gán truyền danh sách các khoa sang view 
			$data['list_khoa'] = $list_khoa;

			$data['temp'] = 'admin/dulieu/khoa/index';
			$this->load->view('admin/main',$data);	
		}

		/*
			Thêm dữ liệu vào bảng khoa 
		*/

		public function add()
		{
			$data = array();
			// kiểm tra khi người dùng kích vào thêm mới 
			if($this->input->post())
			{
				// kiểm tra giá trị tên khoa
				$this->form_validation->set_rules('tenkhoa','Nhập vào tên khoa ','required');

				// kiểm tra giá trị mã khoa
				$this->form_validation->set_rules('makhoa','Nhập vào mã khoa ','required');

				// kiểm tra có tồn tại người dùng 
				if($this ->session ->userdata('userdata'))
				{
					$userdata = $this ->session ->userdata('userdata');
					
					echo $userdata['maGV'];
				}
				else
				{
					// không tồn tại 
					redirect(admin_url('login'));
				}

				if($this->form_validation->run())
				{
					// gán giá trị tên khoa
					$tenkhoa = $this->input ->post('tenkhoa');

					// gán giá trị mã khoa

					$makhoa = $this ->input ->post('makhoa');

					// lấy giá trị của activel 

					$activel = $this ->input ->post('active');

					// lưu vào mảng data ;

					$data = array(


						);

				}

			}


			$data['temp'] = 'admin/dulieu/khoa/add';
			$this->load->view('admin/main',$data);
		}

	}
 ?>