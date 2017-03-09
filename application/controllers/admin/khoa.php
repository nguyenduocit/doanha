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
			// load ra thư viện phân trang
			 $this->load->library('pagination');
			
			 // lấy ra tổng số các khoa 
			$total_row = $this->KhoaModel->get_total();

			$config  = array();
			$config['total_rows'] =  $total_row; // tổng tất cả các sản phẩm trên website ;
	        $config['base_url'] =  admin_url('khoa/index'); // link hiển thị dữ lieeu danh sách sản phẩm
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
        	$list_khoa = $this->KhoaModel->get_list($input);
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

			// kiểm tra có tồn tại người dùng 
			$maGV = isset_user($this->session->userdata('userdata'));
				
			// kiểm tra khi người dùng kích vào thêm mới 
			if($this->input->post())
			{
				// kiểm tra giá trị tên khoa
				$this->form_validation->set_rules('tenkhoa','Nhập vào tên khoa ','required');

				// kiểm tra giá trị mã khoa
				$this->form_validation->set_rules('makhoa','Nhập vào mã khoa ','required');


				if($this->form_validation->run())
				{
					// gán giá trị tên khoa
					$tenkhoa = $this->input ->post('tenkhoa');

					// gán giá trị mã khoa

					$makhoa = $this ->input ->post('makhoa');

					// lấy giá trị của activel 

					$activel = $this ->input ->post('active');

					$input = array();

					$input['where'] = array('makhoa' =>$makhoa);

					$data = $this->KhoaModel->get_list($input);

					if(empty($data))
					{
						$makhoa = $this ->input ->post('makhoa');

						// lưu vào mảng data ;
				
						$data = array(
									'makhoa' 		=> $makhoa,
									'tenkhoa' 		=> $tenkhoa,
									'nguoithaotac'  => $maGV,
									'hienthi'		=> $activel
									);

						//kiểm tra và chạy câu lệnh inser 

						if($this->KhoaModel->create($data))
						{
							 $this->session->set_flashdata('success','Insert  thành công');
							 redirect(admin_url('khoa'));
						}
						else
						{
							$this->session->set_flashdata('error','Lỗi không thể insert dữ liệu');

						}

					}
					else
					{
						$this->session->set_flashdata('error','Mã khoa đã bị trùng .');
					}

				}

			}


			$data['temp'] = 'admin/dulieu/khoa/add';
			$this->load->view('admin/main',$data);
		}


		/*
			Chỉnh sửa cập nhật dữ liệu 
		*/

		public function edit()
		{
			// lấy id được trả về
			$id =  $this->uri->rsegment(3);

			 // kiểm tra có tồn tại giáo viên

			 $maGV = isset_user($this->session->userdata('userdata'));

			 settype($id, "int");

			 // lấy ra thông tin khoa mới id
			 $list_khoa = $this->KhoaModel->get_info($id);

			 // kiểm tra 
			  if(!$list_khoa)
		        {
		            $this->session->set_flashdata('error','Không tồn tại khoa .');

		            redirect(admin_url('khoa'));
		        }

		    if($this->input->post())
		    {
		      	// kiểm tra giá trị tên khoa
				$this->form_validation->set_rules('tenkhoa','Nhập vào tên khoa ','required');

				// kiểm tra giá trị mã khoa
				$this->form_validation->set_rules('makhoa','Nhập vào mã khoa ','required');


				if($this->form_validation->run())
				{
					
					// gán giá trị tên khoa
					$tenkhoa = $this->input ->post('tenkhoa');

					$makhoa = $this->input ->post('makhoa');

					if ($list_khoa->makhoa == $makhoa ) 
					{
						$data = array();
						
					}
					else
					{
						$input = array();
						$input['where'] = array('makhoa' => $makhoa);
						$data = $this->KhoaModel->get_list($input);

					}
					

					// lấy giá trị của activel 

					$activel = $this ->input ->post('active');

					if(empty($data))
					{

						$makhoa = $this->input ->post('makhoa');
						// lưu vào mảng data ;
						$data = array(
									'makhoa' 		=> $makhoa,
									'tenkhoa' 		=> $tenkhoa,
									'nguoithaotac'  => $maGV,
									'hienthi'		=> $activel
							);

						//kiểm tra và chạy câu lệnh inser 

						if($this->KhoaModel->update($id,$data))
						{
							 $this->session->set_flashdata('success','Update  thành công');
							 redirect(admin_url('khoa'));
						}
						else
						{
							$this->session->set_flashdata('error','Lỗi không thể update dữ liệu');
							redirect(admin_url('khoa/edit'));

						}
					}
					else
					{
						$this->session->set_flashdata('error','Lỗi không thể update dữ liệu , mã khoa đã trùng');
							redirect(admin_url('khoa/edit'));
					}
					
				
				}

		     
			}

			$data['list_khoa'] = $list_khoa;

			$data['temp'] = 'admin/dulieu/khoa/edit';
			$this->load->view('admin/main',$data);
		}


		/*
			Xóa khoa 
		*/

		function delete()
	    {
	        $id = $this->uri->rsegment(3);

	        $maGV = isset_user($this->session->userdata('userdata'));

			settype($id, "int");
	        
	        if ($this->KhoaModel->delete($id)) {
	        	# code...
	        	$this->session->set_flashdata('success','Delet thành công ');

	        	redirect(admin_url('khoa'));
	        }
	        else
	        {
	        	
	        	$this->session->set_flashdata('error',' Lỗi không thể xóa dữ liệu ');

	        	redirect(admin_url('khoa'));
	        }
	        
	    }

	}
 ?>