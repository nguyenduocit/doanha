<?php 
	class Lop extends MY_Controller
	{
		public function __construct()
		{
			parent::__construct();


			$this->load->model('LopModel');
			$this->load->model('ChuyennganhModel');
			$this->load->model('HedaotaoModel');
			$this->load->model('AdminModel');
			$this->load->model('BomonModel');
			 //kiểm tra dữ liệu

	        $this->load->library('form_validation');
	        $this->load->helper('form');
		}


		public function index()
		{
			// load ra thư viện phân trang
			 $this->load->library('pagination');
			
			 // lấy ra tổng số các chuyên ngành
			$total_row = $this->LopModel->get_total();

			$config  = array();
			$config['total_rows'] =  $total_row; // tổng tất cả các sản phẩm trên website ;
	        $config['base_url'] =  admin_url('lop/index'); // link hiển thị dữ lieeu danh sách sản phẩm
	        $config['per_page'] =  10; // số sản phẩm hiển thị trên 1 trang
	        $config['uri_segment'] = 4; // phân đoạn hiển thị số trnag
	        $config['next_link']= 'Next' ; //Nhãn tên của nút Next
	        $config['prev_link']= 'Previous' ; //Nhãn tên của nút Previous
	        // khởi tạo cấu hình phân trang
	        $this->pagination->initialize($config);

	        $segment = $this->uri->segment(4);
        	$segment = intval($segment);
	        $input = array();
        	$input['limit'] = array($config['per_page'],$segment );

        	// lấy ra danh sách khoa 
        	$list = $this->LopModel->get_list($input);
			// gán truyền danh sách các khoa sang view 
			$data['list'] = $list;


			$data['temp'] = 'admin/dulieu/lop/index';
			$this->load->view('admin/main',$data);	
		}


		/*
			Thêm mới  lớp
		*/

		public function add()
		{
	
			// kiểm tra có tồn tại người dùng 
			$maGV = isset_user($this->session->userdata('userdata'));


			// kiểm tra khi người dùng kích vào thêm mới 
			if($this->input->post())
			{
				// kiểm tra giá trị tên 
				$this->form_validation->set_rules('tenlop','Nhập vào tên tên lớp ','required');

				// kiểm tra giá trị mã lớp
				$this->form_validation->set_rules('malop','Nhập vào mã lớp ','required');

				// kiểm tra giá trị mã
				$this->form_validation->set_rules('siso','Nhập vào sĩ số của lớp ','required');


				if($this->form_validation->run())
				{
					// gán giá trị mã hệ đào tạo
					$mahedaotao = $this->input ->post('mahedaotao');

					// gán giá trị mã chuyên ngành 

					$machuyennganh = $this ->input ->post('machuyennganh');

					// lấy giá trị mã giáo viên
					$magv = $this ->input ->post('magv');

					// lấy giá trị tên lớp
					$tenlop = $this ->input ->post('tenlop');

					// lấy giá trị mã lớp
					$malop = $this ->input ->post('malop');

					// lấy giá trị sĩ số
					$siso = $this ->input ->post('siso');

					// lấy giá trị của activel 

					$activel = $this ->input ->post('active');

					// lây giá trị của mã khoa 
					

					$input = array();

					$input['where'] = array('gvcn' =>$magv);

					$data = $this->LopModel->get_list($input);

					if(empty($data))
					{
						//`lop`(`id`, `malop`, `mahedaotao`, `tenlop`, `siso`, `machuyennganh`, `gvcn`, `nguoithaotac`, `hienthi`, `created_at`, `updated_at`)
				
						$data = array(
									'malop'				=>$malop,
									'mahedaotao'		=>$mahedaotao,
									'tenlop'			=>$tenlop,
									'siso' 				=> $siso,
									'machuyennganh' 	=> $machuyennganh,
									'gvcn'  			=> $magv,
									'nguoithaotac'  	=> $maGV,
									'hienthi'			=> $activel
									);

						//kiểm tra và chạy câu lệnh inser 

						if($this->LopModel->create($data))
						{
							 $this->session->set_flashdata('success','Insert  thành công');
							 redirect(admin_url('lop'));
						}
						else
						{
							$this->session->set_flashdata('error','Lỗi không thể insert dữ liệu');

						}

					}
					else
					{
						$this->session->set_flashdata('error',' Giáo viên đã có lớp chủ nhiệm .
						 .');
					}

				}
			}

			$list_hedaotao = $this->HedaotaoModel->get_list();
			$data['list_hedaotao'] = $list_hedaotao;


			$list_chuyennganh = $this->ChuyennganhModel->get_list();
			$data['list_chuyennganh'] = $list_chuyennganh;

			
			$list_admin = $this->AdminModel->get_list();
			$data['list_admin'] = $list_admin;


			$data['temp'] = 'admin/dulieu/lop/add';
			$this->load->view('admin/main',$data);	
		}


		/*
			Chỉnh sửa thông tin  bộ môn
		*/

		public function edit()
		{
			// lấy id được trả về
			$id =  $this->uri->rsegment(3);

			settype($id, "int");

			// kiểm tra có tồn tại giáo viên

			 $maGV = isset_user($this->session->userdata('userdata'));

			 $list = $this->LopModel->get_info($id);

			 // kiểm tra 
			  if(!$list)
		        {
		            $this->session->set_flashdata('error','Không tồn tại lớp .');

		            redirect(admin_url('lop'));
		        }

		     // kiểm tra khi người dùng kích vào  
			if($this->input->post())
			{
				// kiểm tra giá trị tên 
				$this->form_validation->set_rules('tenlop','Nhập vào tên tên lớp ','required');

				// kiểm tra giá trị mã lớp
				$this->form_validation->set_rules('malop','Nhập vào mã lớp ','required');

				// kiểm tra giá trị mã
				$this->form_validation->set_rules('siso','Nhập vào sĩ số của lớp ','required');


				if($this->form_validation->run())
				{
					// gán giá trị mã hệ đào tạo
					$mahedaotao = $this->input ->post('mahedaotao');

					// gán giá trị mã chuyên ngành 

					$machuyennganh = $this ->input ->post('machuyennganh');

					// lấy giá trị mã giáo viên
					$magv = $this ->input ->post('magv');

					// lấy giá trị tên lớp
					$tenlop = $this ->input ->post('tenlop');

					// lấy giá trị mã lớp
					$malop = $this ->input ->post('malop');

					// lấy giá trị sĩ số
					$siso = $this ->input ->post('siso');

					// lấy giá trị của activel 

					$activel = $this ->input ->post('active');

					// lây giá trị của mã khoa 


					if($list->gvcn == $magv )
					{
						$data = array();
					}else
					{
						$input = array();

						$input['where'] = array('gvcn' =>$magv);

						$data = $this->LopModel->get_list($input);


					}

					

					if(empty($data))
					{
						$malop = $this ->input ->post('malop');

						
				
						$data = array(
									'malop'				=>$malop,
									'mahedaotao'		=>$mahedaotao,
									'tenlop'			=>$tenlop,
									'siso' 				=> $siso,
									'machuyennganh' 	=> $machuyennganh,
									'gvcn'  			=> $magv,
									'nguoithaotac'  	=> $maGV,
									'hienthi'			=> $activel
									);

						//kiểm tra và chạy câu lệnh inser 

						if($this->LopModel->update($id,$data))
						{
							 $this->session->set_flashdata('success','Update  thành công');
							 redirect(admin_url('lop'));
						}
						else
						{
							$this->session->set_flashdata('error','Lỗi không thể update dữ liệu');

						}

					}
					else
					{
						$this->session->set_flashdata('error','Giáo viên đã có lớp chủ nhiệm .');
					}

				}
			}

			$list_hedaotao = $this->HedaotaoModel->get_list();
			$data['list_hedaotao'] = $list_hedaotao;


			$list_chuyennganh = $this->ChuyennganhModel->get_list();
			$data['list_chuyennganh'] = $list_chuyennganh;

			
			$list_admin = $this->AdminModel->get_list();
			$data['list_admin'] = $list_admin;

			$data['list'] = $list;
			$data['temp'] = 'admin/dulieu/lop/edit';
			$this->load->view('admin/main',$data);	
		}


		/*
			Xóa thông tin  bộ môn
		*/

		function delete()
	    {
	        $id = $this->uri->rsegment(3);

	        $maGV = isset_user($this->session->userdata('userdata'));

			settype($id, "int");
	        
	        if ($this->LopModel->delete($id)) {
	        	# code...
	        	$this->session->set_flashdata('success','Delet thành công ');

	        	redirect(admin_url('lop'));
	        }
	        else
	        {
	        	
	        	$this->session->set_flashdata('error',' Lỗi không thể xóa dữ liệu ');

	        	redirect(admin_url('lop'));
	        }
	        
	    }


	    // tìm kiếm theo tên
        function search()
        {
           
           $key = $this->input->get('key-search');
            

            $this->data['key'] = trim($key);
            $input = array();
            $input['like'] = array('tenlop',$key);
         
            $list = $this->LopModel->get_list($input);
            

            $data['list'] = $list;
            // hiển thị ra phần view
           	$data['temp'] = 'admin/dulieu/lop/index';
            $this->load->view('admin/main',$data);	
        }



	}


?>