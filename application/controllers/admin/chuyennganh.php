<?php 
	class Chuyennganh extends MY_Controller
	{
		public function __construct()
		{
			parent::__construct();


			$this->load->model('BomonModel');
			$this->load->model('ChuyennganhModel');
			 //kiểm tra dữ liệu

	        $this->load->library('form_validation');
	        $this->load->helper('form');
		}


		public function index()
		{
			// load ra thư viện phân trang
			 $this->load->library('pagination');
			
			 // lấy ra tổng số các chuyên ngành
			$total_row = $this->BomonModel->get_total();

			$config  = array();
			$config['total_rows'] =  $total_row; // tổng tất cả các sản phẩm trên website ;
	        $config['base_url'] =  admin_url('chuyennganh/index'); // link hiển thị dữ lieeu danh sách sản phẩm
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
        	$list = $this->ChuyennganhModel->get_list($input);
			// gán truyền danh sách các khoa sang view 
			$data['list'] = $list;


			$data['temp'] = 'admin/dulieu/chuyennganh/index';
			$this->load->view('admin/main',$data);	
		}


		/*
			Thêm mới bộ môn
		*/

		public function add()
		{

			$data = array();

			// kiểm tra có tồn tại người dùng 
			$maGV = isset_user($this->session->userdata('userdata'));


			// kiểm tra khi người dùng kích vào thêm mới 
			if($this->input->post())
			{
				// kiểm tra giá trị tên 
				$this->form_validation->set_rules('tenchuyennganh','Nhập vào tên chuyên ngành ','required');

				// kiểm tra giá trị mã
				$this->form_validation->set_rules('machuyennganh','Nhập vào mã chuyên ngành ','required');
				$this->form_validation->set_rules('mabomon','Chọn bộ môn ','required');


				if($this->form_validation->run())
				{
					// gán giá trị tên 
					$tenchuyennganh = $this->input ->post('tenchuyennganh');

					// gán giá trị mã 

					$machuyennganh = $this ->input ->post('machuyennganh');

					// lấy giá trị của activel 

					$activel = $this ->input ->post('active');

					// lây giá trị của mã khoa 
					$mabomon = $this ->input ->post('mabomon');

					$input = array();

					$input['where'] = array('machuyennganh' =>$machuyennganh);

					$data = $this->ChuyennganhModel->get_list($input);

					if(empty($data))
					{
						$machuyennganh = $this ->input ->post('machuyennganh');

						// lưu vào mảng data ;
						 //`machuyennganh`, `tenchuyennganh`, `mabomon`, `nguoithaotac`, `hienthi`, `created_at`, `updated_at`
				
						$data = array(
									'machuyennganh'		=>$machuyennganh,
									'tenchuyennganh' 	=> $tenchuyennganh,
									'mabomon' 			=> $mabomon,
									'nguoithaotac'  	=> $maGV,
									'hienthi'			=> $activel
									);

						//kiểm tra và chạy câu lệnh inser 

						if($this->ChuyennganhModel->create($data))
						{
							 $this->session->set_flashdata('success','Insert  thành công');
							 redirect(admin_url('chuyennganh'));
						}
						else
						{
							$this->session->set_flashdata('error','Lỗi không thể insert dữ liệu');

						}

					}
					else
					{
						$this->session->set_flashdata('error','Mã Chuyên ngành đã bị trùng .');
					}

				}
			}

			$list_bomon = $this->BomonModel->get_list();
			$data['list_bomon'] = $list_bomon;


			$data['temp'] = 'admin/dulieu/chuyennganh/add';
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

			 $list = $this->ChuyennganhModel->get_info($id);

			 // kiểm tra 
			  if(!$list)
		        {
		            $this->session->set_flashdata('error','Không tồn tại chuyên ngành .');

		            redirect(admin_url('chuyennganh'));
		        }

		     // kiểm tra khi người dùng kích vào  
			if($this->input->post())
			{
				// kiểm tra giá trị tên 
				$this->form_validation->set_rules('tenchuyennganh','Nhập vào tên chuyên ngành ','required');

				// kiểm tra giá trị mã
				$this->form_validation->set_rules('machuyennganh','Nhập vào mã chuyên ngành ','required');

				$this->form_validation->set_rules('mabomon','Chọn bộ môn ','required');


				if($this->form_validation->run())
				{
					// gán giá trị tên 
					$tenchuyennganh = $this->input ->post('tenchuyennganh');

					// gán giá trị mã 

					$machuyennganh = $this ->input ->post('machuyennganh');

					// lấy giá trị của activel 

					$activel = $this ->input ->post('active');

					// lây giá trị của mã khoa 
					$mabomon = $this ->input ->post('mabomon');


					if($list->machuyennganh == $machuyennganh )
					{
						$data = array();
					}else
					{
						$input = array();

						$input['where'] = array('machuyennganh' =>$machuyennganh);

						$data = $this->ChuyennganhModel->get_list($input);


					}

					

					if(empty($data))
					{
						$chuyennganh = $this ->input ->post('machuyennganh');

						// lưu vào mảng data ;
						 //`machuyennganh`, `tenchuyennganh`, `mabomon`, `nguoithaotac`, `hienthi`, `created_at`, `updated_at`
				
						$data = array(
									'machuyennganh'		=>$machuyennganh,
									'tenchuyennganh' 	=> $tenchuyennganh,
									'mabomon' 			=> $mabomon,
									'nguoithaotac'  	=> $maGV,
									'hienthi'			=> $activel
									);

						//kiểm tra và chạy câu lệnh inser 

						if($this->ChuyennganhModel->update($id,$data))
						{
							 $this->session->set_flashdata('success','Update  thành công');
							 redirect(admin_url('chuyennganh'));
						}
						else
						{
							$this->session->set_flashdata('error','Lỗi không thể update dữ liệu');

						}

					}
					else
					{
						$this->session->set_flashdata('error','Mã chuyên ngành đã bị trùng .');
					}

				}
			}

			$list_bomon = $this->BomonModel->get_list();
			$data['list_bomon'] = $list_bomon;

			$data['list'] = $list;


			$data['temp'] = 'admin/dulieu/chuyennganh/edit';
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
	        
	        if ($this->ChuyennganhModel->delete($id)) {
	        	# code...
	        	$this->session->set_flashdata('success','Delet thành công ');

	        	redirect(admin_url('chuyennganh'));
	        }
	        else
	        {
	        	
	        	$this->session->set_flashdata('error',' Lỗi không thể xóa dữ liệu ');

	        	redirect(admin_url('chuyennganh'));
	        }
	        
	    }


	    function search()
        {
           
            $key = $this->input->post('key-search');
            

            $this->data['key'] = trim($key);
            $input = array();
            $input['like'] = array('tenchuyennganh',$key);
         
            $list = $this->ChuyennganhModel->get_list($input);

            $data['list'] = $list;
            // hiển thị ra phần view
           	$data['temp'] = 'admin/dulieu/chuyennganh/index';
            $this->load->view('admin/main',$data);	
        }


	}


?>