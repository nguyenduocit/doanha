<?php
	class Hocham extends MY_Controller
	{
		public function __construct()
		{
			parent::__construct();
			$this->load->model('HochamModel');
			 //kiểm tra dữ liệu
	        $this->load->library('form_validation');
	        $this->load->helper('form');
		}


		public function index()
		{
			// load ra thư viện phân trang
			 $this->load->library('pagination');
			
			 // lấy ra tổng số các khoa 
			$total_row = $this->HochamModel->get_total();

			$config  = array();
			$config['total_rows'] =  $total_row; // tổng tất cả các sản phẩm trên website ;
	        $config['base_url'] =  admin_url('hocham/index'); // link hiển thị dữ lieeu danh sách sản phẩm
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
        	$list = $this->HochamModel->get_list($input);
			// gán truyền danh sách các khoa sang view 
			$data['list'] = $list;

			$data['temp'] = 'admin/dulieu/hocham/index';
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
				$this->form_validation->set_rules('tenhocham','Nhập vào tên học hàm ','required');

				// kiểm tra giá trị mã khoa
				$this->form_validation->set_rules('mahocham','Nhập vào mã hoc hàm ','required');


				if($this->form_validation->run())
				{
					// gán giá trị tên khoa
					$tenhocham = $this->input ->post('tenhocham');

					// gán giá trị mã khoa

					$mahocham = $this ->input ->post('mahocham');

					// lấy giá trị của activel 

					
					$input = array();

					$input['where'] = array('mahocham' =>$mahocham);

					$data = $this->HochamModel->get_list($input);

					if(empty($data))
					{
						$makhoa = $this ->input ->post('mahocham');

						// lưu vào mảng data ;
				
						$data = array(
									'mahocham' 		=> $mahocham,
									'tenhocham' 	=> $tenhocham,
									'nguoithaotac'  => $maGV,
									);

						//kiểm tra và chạy câu lệnh inser 

						if($this->HochamModel->create($data))
						{
							 $this->session->set_flashdata('success','Insert  thành công');
							 redirect(admin_url('hocham'));
						}
						else
						{
							$this->session->set_flashdata('error','Lỗi không thể insert dữ liệu');

						}

					}
					else
					{
						$this->session->set_flashdata('error','Mã hocham đã bị trùng .');
					}

				}

			}


			$data['temp'] = 'admin/dulieu/hocham/add';
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
			 $list = $this->HochamModel->get_info($id);

			 // kiểm tra 
			  if(!$list)
		        {
		            $this->session->set_flashdata('error','Không tồn tại học hàm .');

		            redirect(admin_url('hocham'));
		        }

		    if($this->input->post())
		    {
		      	// kiểm tra giá trị tên khoa
				$this->form_validation->set_rules('tenhocham','Nhập vào tên học hàm ','required');

				// kiểm tra giá trị mã khoa
				$this->form_validation->set_rules('mahocham','Nhập vào mã học hàm ','required');


				if($this->form_validation->run())
				{

					// gán giá trị tên khoa
					$tenhocham = $this->input ->post('tenhocham');

					$mahocham = $this->input ->post('mahocham');

					if ($list->mahocham == $mahocham ) 
					{
						$data = array();
						
					}
					else
					{
						$input = array();
						$input['where'] = array('mahocham' => $mahocham);
						$data = $this->HochamModel->get_list($input);

					}
					

					if(empty($data))
					{

						$mahocham = $this->input ->post('mahocham');
						// lưu vào mảng data ;
						$data = array(
									'mahocham' 		=> $mahocham,
									'tenhocham' 	=> $tenhocham,
									'nguoithaotac'  => $maGV,
									);

						//kiểm tra và chạy câu lệnh inser 

						if($this->HochamModel->update($id,$data))
						{
							 $this->session->set_flashdata('success','Update  thành công');
							 redirect(admin_url('hocham'));
						}
						else
						{
							$this->session->set_flashdata('error','Lỗi không thể update dữ liệu');
							
							

						}
					}
					else
					{
						$this->session->set_flashdata('error','Lỗi không thể update dữ liệu , mã học hàm đã trùng');
							//redirect(admin_url('khoa/edit'));
					}
					
				
				}

		     
			}

			$data['list'] = $list;

			$data['temp'] = 'admin/dulieu/hocham/edit';
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
	        
	        if ($this->HochamModel->delete($id)) {
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



	    // tìm kiếm theo tên
        function search()
        {
           
           $key = $this->input->get('key-search');
            

            $this->data['key'] = trim($key);
            $input = array();
            $input['like'] = array('tenhocham',$key);
         
            $list = $this->HochamModel->get_list($input);
            

            $data['list'] = $list;
            // hiển thị ra phần view
           	$data['temp'] = 'admin/dulieu/hocham/index';
            $this->load->view('admin/main',$data);	
        }

	}
 ?>