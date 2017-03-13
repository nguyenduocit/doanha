<?php 
	class Admin extends MY_Controller
	{
		public function __construct()
		{
			parent::__construct();


			$this->load->model('BomonModel');
			$this->load->model('KhoaModel');
			$this->load->model('ChuyennganhModel');
			$this->load->model('AdminModel');
			$this->load->model('HochamModel');
			$this->load->model('ChucvuModel');
			$this->load->model('TrinhdoModel');
			 //kiểm tra dữ liệu

	        $this->load->library('form_validation');
	        $this->load->helper('form');
		}


		public function index()
		{
			// load ra thư viện phân trang
			 $this->load->library('pagination');
			
			 // lấy ra tổng số các khoa 
			$total_row = $this->AdminModel->get_total();

			$config  = array();
			$config['total_rows'] =  $total_row; // tổng tất cả các sản phẩm trên website ;
	        $config['base_url'] =  admin_url('admin/index'); // link hiển thị dữ lieeu danh sách sản phẩm
	        $config['per_page'] =  8; // số sản phẩm hiển thị trên 1 trang
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
        	$list = $this->AdminModel->get_list($input);
			// gán truyền danh sách các khoa sang view 
			$data['list'] = $list;


			$data['temp'] = 'admin/dulieu/giaovien/index';
			$this->load->view('admin/main',$data);	
		}


		/*
			Thêm mới bộ môn
		*/

		public function add()
		{

			$data = array();

			// kiểm tra có tồn tại người dùng 
			$maGVs = isset_user($this->session->userdata('userdata'));


			// kiểm tra khi người dùng kích vào thêm mới 
			if($this->input->post())
			{
				// kiểm tra giá trị tên bộ môn
				$this->form_validation->set_rules('hoten','Nhập vào tên giáo viên ','required');


				$this->form_validation->set_rules('matkhau','Nhập vào mật khẩu ','required|min_length[8]');


				$this->form_validation->set_rules('rmatkhau','Nhập vào mật khẩu , mật khẩu phải trùng khớp ','required|matches[matkhau]');

				// kiểm tra giá trị mã bộ môn
				$this->form_validation->set_rules('maGV','Nhập vào mã giáo viên ','required');


				$this->form_validation->set_rules('email','Nhập vào email','required|valid_email');

				$this->form_validation->set_rules('diachi','Nhập vào địa chỉ','required');

				$this->form_validation->set_rules('ngaysinh','Nhập vào ngày sinh','required');


				$this->form_validation->set_rules('dienthoai','Nhập vào số điện thoại','required');




				if($this->form_validation->run())
				{
					// gán giá trị tên 
					$hoten = $this->input ->post('hoten');

					// gán giá trị mã GV

					$maGV = $this ->input ->post('maGV');

					// lấy giá trị của email 

					$email = $this ->input ->post('email');

					// lây giá trị của địa chỉ 
					$diachi = $this ->input ->post('diachi');

					// lây giá trị của ngày sinh
					$ngaysinh = $this ->input ->post('ngaysinh');


					$dienthoai = $this ->input ->post('dienthoai');


					$makhoa = $this ->input ->post('makhoa');


					$mabomon = $this ->input ->post('mabomon');


					$machuyennganh = $this ->input ->post('machuyennganh');


					$hocham = $this ->input ->post('hocham');


					$chucvu = $this ->input ->post('chucvu');


					$trinhdo = $this ->input ->post('trinhdo');

					$sex     = $this->input -> post("sex");


					$matkhau     = $this->input -> post("matkhau");



					$input = array();

					$input['where'] = array('maGV' =>$maGV);

					$data = $this->AdminModel->get_list($input);

					if(empty($data))
					{

						$this->load->library('upload_library');

						$upload_path ='./public/upload/';

						$upload_data = $this->upload_library->upload($upload_path,'image');

						$hinhanh =$upload_data['file_name'];

						if(isset($upload_data['file_name']))
			                {
			                    $hinhanh = $upload_data['file_name'];
			                    

			                }
						$giaovien = $this ->input ->post('mabomon');

						$data = array(
									'maGV'			=>$maGV,
									'hoten' 		=> $hoten,
									'ngaysinh' 		=> $ngaysinh,
									'gioitinh' 		=> $sex,
									'diachi' 		=> $diachi,
									'dienthoai' 	=> $dienthoai,
									'email' 		=> $email,
									'hocham' 		=> $hocham,
									'trinhdo' 		=> $trinhdo,
									'chucvu' 		=> $chucvu,
									'hinhanh' 		=> $hinhanh,
									'mabomon' 		=> $mabomon,
									'makhoa' 		=> $makhoa,
									'manganh' 		=> $machuyennganh,
									'matkhau' 		=> $matkhau,
									'nguoithaotac'  => $maGVs,
									);
						
						//kiểm tra và chạy câu lệnh inser 

						if($this->AdminModel->create($data))
						{
							 $this->session->set_flashdata('success','Insert  thành công');
							 redirect(admin_url("admin"));
						}
						else
						{
							$this->session->set_flashdata('error','Lỗi không thể insert dữ liệu');

						}

					}
					else
					{
						$this->session->set_flashdata('error','Mã giáo viên đã bị trùng .');
					}

				}
			}
			// lấy ra danh sách bộ môn
			$list_bomon = $this->BomonModel->get_list();
			$data['list_bomon'] = $list_bomon;

			//lấy ra danh sách chuyên ngành
			$list_chuyennganh = $this->ChuyennganhModel->get_list();
			$data['list_chuyennganh'] = $list_chuyennganh;


			$list_khoa = $this->KhoaModel->get_list();
			$data['list_khoa'] = $list_khoa;


			$list_hocham = $this->HochamModel->get_list();
			$data['list_hocham'] = $list_hocham;


			$list_chucvu = $this->ChucvuModel->get_list();
			$data['list_chucvu'] = $list_chucvu;

			$list_trinhdo = $this->TrinhdoModel->get_list();
			$data['list_trinhdo'] = $list_trinhdo;


			$data['temp'] = 'admin/dulieu/giaovien/add';
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

			 $list = $this->BomonModel->get_info($id);

			 // kiểm tra 
			  if(!$list)
		        {
		            $this->session->set_flashdata('error','Không tồn tại bộ môn .');

		            redirect(admin_url('bomon'));
		        }

		     // kiểm tra khi người dùng kích vào  
			if($this->input->post())
			{
				// kiểm tra giá trị tên bộ môn
				$this->form_validation->set_rules('tenbomon','Nhập vào Tên bộ môn ','required');

				// kiểm tra giá trị mã bộ môn
				$this->form_validation->set_rules('mabomon','Nhập vào mã bộ môn ','required');


				$this->form_validation->set_rules('viettat','Nhập vào viết tắt của bộ môn ','required');


				if($this->form_validation->run())
				{
					// gán giá trị tên bộ môn
					$tenbomon = $this->input ->post('tenbomon');

					// gán giá trị mã bộ môn

					$mabomon = $this ->input ->post('mabomon');

					// lấy giá trị của activel 

					$activel = $this ->input ->post('active');

					// lây giá trị của mã khoa 
					$makhoa = $this ->input ->post('makhoa');

					$viettat = $this ->input ->post('viettat');

					if($list->mabomon == $mabomon)
					{
						$data = array();
					}else
					{
						$input = array();

						$input['where'] = array('mabomon' =>$mabomon);

						$data = $this->BomonModel->get_list($input);

					}

					if(empty($data))
					{
						$mabomon = $this ->input ->post('mabomon');

						// lưu vào mảng data ;
						//id`, `mabomon`, `tenbomon`, `viettat`, `makhoa`, `nguoithaotac`, `hienthi`, `created_at`, `updated_at`)
				
						$data = array(
									'mabomon'		=>$mabomon,
									'tenbomon' 		=> $tenbomon,
									'viettat' 		=> $viettat,
									'makhoa' 		=> $makhoa,
									'nguoithaotac'  => $maGV,
									'hienthi'		=> $activel
									);

						//kiểm tra và chạy câu lệnh inser 

						if($this->BomonModel->update($id,$data))
						{
							 $this->session->set_flashdata('success','Update  thành công');
							 redirect(admin_url('bomon'));
						}
						else
						{
							$this->session->set_flashdata('error','Lỗi không thể update dữ liệu');

						}

					}
					else
					{
						$this->session->set_flashdata('error','Bộ môn đã bị trùng .');
					}

				}
			}

			$list_khoa = $this->KhoaModel->get_list();
			$data['list_khoa'] = $list_khoa;

			$data['list'] = $list;


			$data['temp'] = 'admin/dulieu/bomon/edit';
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
	        
	        if ($this->BomonModel->delete($id)) {
	        	# code...
	        	$this->session->set_flashdata('success','Delet thành công ');

	        	redirect(admin_url('bomon'));
	        }
	        else
	        {
	        	
	        	$this->session->set_flashdata('error',' Lỗi không thể xóa dữ liệu ');

	        	redirect(admin_url('bomon'));
	        }
	        
	    }


	    // tìm kiếm theo tên
        function search()
        {
           
           $key = $this->input->get('key-search');
            

            $this->data['key'] = trim($key);
            $input = array();
            $input['like'] = array('tenbomon',$key);
         
            $list = $this->BomonModel->get_list($input);
            

            $data['list'] = $list;
            // hiển thị ra phần view
           	$data['temp'] = 'admin/dulieu/bomon/index';
            $this->load->view('admin/main',$data);	
        }
	}






?>