<?php
	class Trinhdo extends MY_Controller
	{
		public function __construct()
		{
			parent::__construct();
			$this->load->model('TrinhdoModel');
			 //kiểm tra dữ liệu
	        $this->load->library('form_validation');
	        $this->load->helper('form');
		}


		public function index()
		{
			// load ra thư viện phân trang
			 $this->load->library('pagination');
			
			 // lấy ra tổng số các trinhdo 
			$total_row = $this->TrinhdoModel->get_total();

			$config  = array();
			$config['total_rows'] =  $total_row; // tổng tất cả các sản phẩm trên website ;
	        $config['base_url'] =  admin_url('trinhdo/index'); // link hiển thị dữ lieeu danh sách sản phẩm
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

        	// lấy ra danh sách trinhdo 
        	$list = $this->TrinhdoModel->get_list($input);
			// gán truyền danh sách các trinhdo sang view 
			$data['list'] = $list;

			$data['temp'] = 'admin/dulieu/trinhdo/index';
			$this->load->view('admin/main',$data);	
		}

		/*
			Thêm dữ liệu vào bảng trinhdo 
		*/

		public function add()
		{
			$data = array();

			// kiểm tra có tồn tại người dùng 
			$maGV = isset_user($this->session->userdata('userdata'));
				
			// kiểm tra khi người dùng kích vào thêm mới 
			if($this->input->post())
			{
				// kiểm tra giá trị tên trinhdo
				$this->form_validation->set_rules('tentrinhdo','Nhập vào tên trình độ ','required');

				// kiểm tra giá trị mã trinhdo
				$this->form_validation->set_rules('matrinhdo','Nhập vào mã trình độ ','required');


				if($this->form_validation->run())
				{
					// gán giá trị tên trinhdo
					$tentrinhdo = $this->input ->post('tentrinhdo');

					// gán giá trị mã trinhdo

					$matrinhdo = $this ->input ->post('matrinhdo');

					// lấy giá trị của activel 

					
					$input = array();

					$input['where'] = array('matrinhdo' =>$matrinhdo);

					$data = $this->TrinhdoModel->get_list($input);

					if(empty($data))
					{
						$matrinhdo = $this ->input ->post('matrinhdo');

						// lưu vào mảng data ;
				
						$data = array(
									'matrinhdo' 		=> $matrinhdo,
									'tentrinhdo' 	=> $tentrinhdo,
									'nguoithaotac'  => $maGV,
									);

						//kiểm tra và chạy câu lệnh inser 

						if($this->TrinhdoModel->create($data))
						{
							 $this->session->set_flashdata('success','Insert  thành công');
							 redirect(admin_url('trinhdo'));
						}
						else
						{
							$this->session->set_flashdata('error','Lỗi không thể insert dữ liệu');

						}

					}
					else
					{
						$this->session->set_flashdata('error','Mã trình độ đã bị trùng .');
					}

				}

			}


			$data['temp'] = 'admin/dulieu/trinhdo/add';
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

			 // lấy ra thông tin trinhdo mới id
			 $list = $this->TrinhdoModel->get_info($id);

			 // kiểm tra 
			  if(!$list)
		        {
		            $this->session->set_flashdata('error','Không tồn tại trình độ .');

		            redirect(admin_url('trinhdo'));
		        }

		    if($this->input->post())
		    {
		      	// kiểm tra giá trị tên trinhdo
				$this->form_validation->set_rules('tentrinhdo','Nhập vào tên trình độ ','required');

				// kiểm tra giá trị mã trinhdo
				$this->form_validation->set_rules('matrinhdo','Nhập vào mã trình độ ','required');


				if($this->form_validation->run())
				{

					// gán giá trị tên trinhdo
					$tentrinhdo = $this->input ->post('tentrinhdo');

					$matrinhdo = $this->input ->post('matrinhdo');

					if ($list->matrinhdo == $matrinhdo ) 
					{
						$data = array();
						
					}
					else
					{
						$input = array();
						$input['where'] = array('matrinhdo' => $matrinhdo);
						$data = $this->TrinhdoModel->get_list($input);

					}
					

					if(empty($data))
					{

						$matrinhdo = $this->input ->post('matrinhdo');
						// lưu vào mảng data ;
						$data = array(
									'matrinhdo' 		=> $matrinhdo,
									'tentrinhdo' 	=> $tentrinhdo,
									'nguoithaotac'  => $maGV,
									);

						//kiểm tra và chạy câu lệnh inser 

						if($this->TrinhdoModel->update($id,$data))
						{
							 $this->session->set_flashdata('success','Update  thành công');
							 redirect(admin_url('trinhdo'));
						}
						else
						{
							$this->session->set_flashdata('error','Lỗi không thể update dữ liệu');
							
							

						}
					}
					else
					{
						$this->session->set_flashdata('error','Lỗi không thể update dữ liệu , mã trình độ đã trùng');
							//redirect(admin_url('trinhdo/edit'));
					}
					
				
				}

		     
			}

			$data['list'] = $list;

			$data['temp'] = 'admin/dulieu/trinhdo/edit';
			$this->load->view('admin/main',$data);
		}


		/*
			Xóa trinhdo 
		*/

		function delete()
	    {
	        $id = $this->uri->rsegment(3);

	        $maGV = isset_user($this->session->userdata('userdata'));

			settype($id, "int");
	        
	        if ($this->TrinhdoModel->delete($id)) {
	        	# code...
	        	$this->session->set_flashdata('success','Delet thành công ');

	        	redirect(admin_url('trinhdo'));
	        }
	        else
	        {
	        	
	        	$this->session->set_flashdata('error',' Lỗi không thể xóa dữ liệu ');

	        	redirect(admin_url('trinhdo'));
	        }
	        
	    }



	    // tìm kiếm theo tên
        function search()
        {
           
           $key = $this->input->get('key-search');
            

            $this->data['key'] = trim($key);
            $input = array();
            $input['like'] = array('tentrinhdo',$key);
         
            $list = $this->TrinhdoModel->get_list($input);
            

            $data['list'] = $list;
            // hiển thị ra phần view
           	$data['temp'] = 'admin/dulieu/trinhdo/index';
            $this->load->view('admin/main',$data);	
        }

	}
 ?>