<?php
	class Chucvu extends MY_Controller
	{
		public function __construct()
		{
			parent::__construct();
			$this->load->model('ChucvuModel');
			 //kiểm tra dữ liệu
	        $this->load->library('form_validation');
	        $this->load->helper('form');
		}


		public function index()
		{
			// load ra thư viện phân trang
			 $this->load->library('pagination');
			
			 // lấy ra tổng số các chucvu 
			$total_row = $this->ChucvuModel->get_total();

			$config  = array();
			$config['total_rows'] =  $total_row; // tổng tất cả các sản phẩm trên website ;
	        $config['base_url'] =  admin_url('chucvu/index'); // link hiển thị dữ lieeu danh sách sản phẩm
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

        	// lấy ra danh sách chucvu 
        	$list = $this->ChucvuModel->get_list($input);
			// gán truyền danh sách các chucvu sang view 
			$data['list'] = $list;

			$data['temp'] = 'admin/dulieu/chucvu/index';
			$this->load->view('admin/main',$data);	
		}

		/*
			Thêm dữ liệu vào bảng chucvu 
		*/

		public function add()
		{
			$data = array();

			// kiểm tra có tồn tại người dùng 
			$maGV = isset_user($this->session->userdata('userdata'));
				
			// kiểm tra khi người dùng kích vào thêm mới 
			if($this->input->post())
			{
				// kiểm tra giá trị tên chucvu
				$this->form_validation->set_rules('tenchucvu','Nhập vào tên chức vụ ','required');

				// kiểm tra giá trị mã chucvu
				$this->form_validation->set_rules('machucvu','Nhập vào mã chức vụ ','required');


				if($this->form_validation->run())
				{
					// gán giá trị tên chucvu
					$tenchucvu = $this->input ->post('tenchucvu');

					// gán giá trị mã chucvu

					$machucvu = $this ->input ->post('machucvu');

					// lấy giá trị của activel 

					
					$input = array();

					$input['where'] = array('machucvu' =>$machucvu);

					$data = $this->ChucvuModel->get_list($input);

					if(empty($data))
					{
						$machucvu = $this ->input ->post('machucvu');

						// lưu vào mảng data ;
				
						$data = array(
									'machucvu' 		=> $machucvu,
									'tenchucvu' 	=> $tenchucvu,
									'nguoithaotac'  => $maGV,
									);

						//kiểm tra và chạy câu lệnh inser 

						if($this->ChucvuModel->create($data))
						{
							 $this->session->set_flashdata('success','Insert  thành công');
							 redirect(admin_url('chucvu'));
						}
						else
						{
							$this->session->set_flashdata('error','Lỗi không thể insert dữ liệu');

						}

					}
					else
					{
						$this->session->set_flashdata('error','Mã chức vụ đã bị trùng .');
					}

				}

			}


			$data['temp'] = 'admin/dulieu/chucvu/add';
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

			 // lấy ra thông tin chucvu mới id
			 $list = $this->ChucvuModel->get_info($id);

			 // kiểm tra 
			  if(!$list)
		        {
		            $this->session->set_flashdata('error','Không tồn tại chức vụ .');

		            redirect(admin_url('chucvu'));
		        }

		    if($this->input->post())
		    {
		      	// kiểm tra giá trị tên chucvu
				$this->form_validation->set_rules('tenchucvu','Nhập vào tên chức vụ ','required');

				// kiểm tra giá trị mã chucvu
				$this->form_validation->set_rules('machucvu','Nhập vào mã chức vụ ','required');


				if($this->form_validation->run())
				{

					// gán giá trị tên chucvu
					$tenchucvu = $this->input ->post('tenchucvu');

					$machucvu = $this->input ->post('machucvu');

					if ($list->machucvu == $machucvu ) 
					{
						$data = array();
						
					}
					else
					{
						$input = array();
						$input['where'] = array('machucvu' => $machucvu);
						$data = $this->ChucvuModel->get_list($input);

					}
					

					if(empty($data))
					{

						$machucvu = $this->input ->post('machucvu');
						// lưu vào mảng data ;
						$data = array(
									'machucvu' 		=> $machucvu,
									'tenchucvu' 	=> $tenchucvu,
									'nguoithaotac'  => $maGV,
									);

						//kiểm tra và chạy câu lệnh inser 

						if($this->ChucvuModel->update($id,$data))
						{
							 $this->session->set_flashdata('success','Update  thành công');
							 redirect(admin_url('chucvu'));
						}
						else
						{
							$this->session->set_flashdata('error','Lỗi không thể update dữ liệu');
							
							

						}
					}
					else
					{
						$this->session->set_flashdata('error','Lỗi không thể update dữ liệu , mã chức vụ đã trùng');
							//redirect(admin_url('chucvu/edit'));
					}
					
				
				}

		     
			}

			$data['list'] = $list;

			$data['temp'] = 'admin/dulieu/chucvu/edit';
			$this->load->view('admin/main',$data);
		}


		/*
			Xóa chucvu 
		*/

		function delete()
	    {
	        $id = $this->uri->rsegment(3);

	        $maGV = isset_user($this->session->userdata('userdata'));

			settype($id, "int");
	        
	        if ($this->ChucvuModel->delete($id)) {
	        	# code...
	        	$this->session->set_flashdata('success','Delet thành công ');

	        	redirect(admin_url('chucvu'));
	        }
	        else
	        {
	        	
	        	$this->session->set_flashdata('error',' Lỗi không thể xóa dữ liệu ');

	        	redirect(admin_url('chucvu'));
	        }
	        
	    }



	    // tìm kiếm theo tên
        function search()
        {
           
           $key = $this->input->get('key-search');
            

            $this->data['key'] = trim($key);
            $input = array();
            $input['like'] = array('tenchucvu',$key);
         
            $list = $this->ChucvuModel->get_list($input);
            

            $data['list'] = $list;
            // hiển thị ra phần view
           	$data['temp'] = 'admin/dulieu/chucvu/index';
            $this->load->view('admin/main',$data);	
        }

	}
 ?>