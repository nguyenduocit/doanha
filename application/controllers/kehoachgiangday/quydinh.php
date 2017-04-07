<?php
	class Quydinh extends MY_Controller
	{
		public function __construct()
		{
			parent::__construct();
			// load ra model
			$this->load->model('QuydinhModel');
			$this->load->model('AdminModel');
		}

		// lấy ra danh sách
		public function index()
		{

			// load ra thư viện phân trang
			$this->load->library('pagination');
			
			 // lấy ra tổng số các khoa 
			$total_row = $this->QuydinhModel->get_total();

			$config  = array();
			$config['total_rows'] =  $total_row; // tổng tất cả các sản phẩm trên website ;
	        $config['base_url'] =  kehoachgiangday_url('quydinh/index'); // link hiển thị dữ lieeu danh sách sản phẩm
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
        	$list = $this->QuydinhModel->get_list($input);
			// gán truyền danh sách các khoa sang view 
			$data['list'] = $list;

			$data['temp'] ="admin/dulieu/quydinh/index";
			$this->load->view('admin/main',$data);
		}

		// thêm dữ liệu vào bảng
		public function add()
		{
			$data = array();
			// kiểm tra có tồn tại người dùng 
			$maGV = isset_user($this->session->userdata('userdata'));

			// kiểm tra khi người dùng kích vào thêm mới 
			if($this->input->post())
			{
				// kiểm tra giá trị của form không được bỏ trống
				$this->form_validation->set_rules('maquydinh','Nhập vào mã quy định ','required');

				$this->form_validation->set_rules('maGV','Bạn cần chọn giáo viên  ','required');

				$this->form_validation->set_rules('hocky','Bạn cần chọn học kỳ ','required');

				$this->form_validation->set_rules('sogiochuan','Nhập vào số giờ chuẩn ','required');

				$this->form_validation->set_rules('mucthanhtoan','Nhập vào hạn mức thanh toán ','required');


				if($this->form_validation->run())
				{
					// lấy giá trị của form 
					$maquydinh = $this->input ->post('maquydinh');

					$maGVs = $this ->input ->post('maGV');

					$kyhoc = $this ->input ->post('active');

					$namhoc = $this ->input ->post('namhoc');

					$sogiochuan = $this ->input ->post('sogiochuan');

					$mucthanhtoan = $this ->input ->post('mucthanhtoan');

					$activel = $this ->input ->post('active');		

					// kiểm tra xem mã quy định có bị trùng
					$input = array();

					$input['where'] = array('maquydinh' =>$maquydinh);

					$data = $this->QuydinhModel->get_list($input);

					// nếu mã quy định không bị trùng tiến hành insert vào csdl
					if(empty($data))
					{
						
						$data = array(
									'maquydinh'		=>$maquydinh,
									'maGV' 			=> $maGVs,
									'kyhoc' 		=> $kyhoc,
									'namhoc' 		=> $namhoc,
									'sogiochuan' 	=> $sogiochuan,
									'mucthanhtoan' 	=> $mucthanhtoan,
									'nguoithaotac'  => $maGV,
									'hienthi'		=> $activel
									);

						//kiểm tra và chạy câu lệnh inser 

						if($this->QuydinhModel->create($data))
						{
							// gửi thông báo
							 $this->session->set_flashdata('success','Insert  thành công');
							 // chuyển về trang hiển thị danh sách quy định
							 redirect(kehoachgiangday_url('quydinh'));
						}
						else
						{
							$this->session->set_flashdata('error','Lỗi không thể insert dữ liệu');

						}

					}
					else
					{
						$this->session->set_flashdata('error','Mã bộ môn đã tồn tại.');
					}

				}
			}

			// lấy ra dữ liệu của bảng admin
			$list_giaovien = $this->AdminModel->get_list();
			$data['list_giaovien'] = $list_giaovien;


			$data['temp'] ="admin/dulieu/quydinh/add";
			$this->load->view('admin/main',$data);
		}


		/*
			chỉnh sửa dữ liệu
		*/

		public function edit()
		{

			// lấy id được trả về
			$id =  $this->uri->rsegment(3);

			settype($id, "int");

			// kiểm tra có tồn tại kế hoạch trả về 

			$maGV = isset_user($this->session->userdata('userdata'));

			$list = $this->QuydinhModel->get_info($id);

			// kiểm tra 
				if(!$list)
				{
					$this->session->set_flashdata('error','Không tồn tại quy định .');

					// chuyển về trang hiển thị danh sách quy định
					redirect(kehoachgiangday_url('quydinh'));
					

				}

				// kiểm tra khi người dùng kích vào  
			if($this->input->post())
			{
				// kiểm tra giá trị của form không được bỏ trống
				$this->form_validation->set_rules('maquydinh','Nhập vào mã quy định ','required');

				$this->form_validation->set_rules('maGV','Bạn cần chọn giáo viên  ','required');

				$this->form_validation->set_rules('hocky','Bạn cần chọn học kỳ ','required');

				$this->form_validation->set_rules('sogiochuan','Nhập vào số giờ chuẩn ','required');

				$this->form_validation->set_rules('mucthanhtoan','Nhập vào hạn mức thanh toán ','required');


				if($this->form_validation->run())
				{
					// lấy giá trị của form 
					$maquydinh = $this->input ->post('maquydinh');

					$maGVs = $this ->input ->post('maGV');

					$kyhoc = $this ->input ->post('active');

					$namhoc = $this ->input ->post('namhoc');

					$sogiochuan = $this ->input ->post('sogiochuan');

					$mucthanhtoan = $this ->input ->post('mucthanhtoan');

					$activel = $this ->input ->post('active');		


					// kiem tra nếu người dùng nhập mã quy định trùng mới mã quy định trong cơ sở dữ liệu thì k cho update
					if($list->maquydinh == $maquydinh )
					{
						$data = array();
					}else
					{
						$input = array();

						$input['where'] = array('maquydinh' =>$maquydinh);

						$data = $this->QuydinhModel->get_list($input);


					}

						

						if(empty($data))
						{
							
							$data = array(
										'maquydinh'		=>$maquydinh,
										'maGV' 			=> $maGVs,
										'kyhoc' 		=> $kyhoc,
										'namhoc' 		=> $namhoc,
										'sogiochuan' 	=> $sogiochuan,
										'mucthanhtoan' 	=> $mucthanhtoan,
										'nguoithaotac'  => $maGV,
										'hienthi'		=> $activel
										);


							//kiểm tra và chạy câu lệnh inser 

							if($this->QuydinhModel->update($id,$data))
							{
								$this->session->set_flashdata('success','Update  thành công');
								redirect(kehoachgiangday_url('quydinh'));
							}
							else
							{
								$this->session->set_flashdata('error','Lỗi không thể update dữ liệu');

							}

						}
						else
						{
							$this->session->set_flashdata('error','Mã bộ môn đã tồn tại  .');
						}

				}
			}
		// lấy ra dữ liệu của bảng admin
		$list_giaovien = $this->AdminModel->get_list();
		$data['list_giaovien'] = $list_giaovien;

		$data['list'] = $list;
		$data['temp'] ="admin/dulieu/quydinh/edit";
		$this->load->view('admin/main',$data);
	}


		/*
			Xóa quy định
		*/

		function delete()
	    {
	    	// lấy ra giá trị id cần xóa
	        $id = $this->uri->rsegment(3);

	        // kiểm tra có admin đăng nhập
	        $maGV = isset_user($this->session->userdata('userdata'));

			settype($id, "int");
	        // thực hiện câu lệnh xóa
	        if ($this->QuydinhModel->delete($id)) {
	        	# code...
	        	$this->session->set_flashdata('success','Delet thành công ');

	        	redirect(kehoachgiangday_url('quydinh'));
	        }
	        else
	        {
	        	
	        	$this->session->set_flashdata('error',' Lỗi không thể xóa dữ liệu ');

	        	redirect(kehoachgiangday_url('quydinh'));
	        }
	        
	    }



	    // tìm kiếm theo tên
        function search()
        {
           
           $key = $this->input->get('key-search');
            

            $this->data['key'] = trim($key);
            $input = array();
            $input['like'] = array('maquydinh',$key);
         
            $list = $this->QuydinhModel->get_list($input);
            

            $data['list'] = $list;
            // hiển thị ra phần view
           	$data['temp'] = 'admin/dulieu/quydinh/index';
            $this->load->view('admin/main',$data);	
        }
	}
?>