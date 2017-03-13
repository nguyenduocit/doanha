<?php 
	class Bomon extends MY_Controller
	{
		public function __construct()
		{
			parent::__construct();


			$this->load->model('BomonModel');
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
			$total_row = $this->BomonModel->get_total();

			$config  = array();
			$config['total_rows'] =  $total_row; // tổng tất cả các sản phẩm trên website ;
	        $config['base_url'] =  admin_url('bomon/index'); // link hiển thị dữ lieeu danh sách sản phẩm
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
        	$list = $this->BomonModel->get_list($input);
			// gán truyền danh sách các khoa sang view 
			$data['list'] = $list;


			$data['temp'] = 'admin/dulieu/bomon/index';
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

					$input = array();

					$input['where'] = array('mabomon' =>$mabomon);

					$data = $this->BomonModel->get_list($input);

					if(empty($data))
					{
						$mabomon = $this ->input ->post('mabomon');

						$data = array(
									'mabomon'		=>$mabomon,
									'tenbomon' 		=> $tenbomon,
									'viettat' 		=> $viettat,
									'makhoa' 		=> $makhoa,
									'nguoithaotac'  => $maGV,
									'hienthi'		=> $activel
									);

						//kiểm tra và chạy câu lệnh inser 

						if($this->BomonModel->create($data))
						{
							 $this->session->set_flashdata('success','Insert  thành công');
							 redirect(admin_url('bomon'));
						}
						else
						{
							$this->session->set_flashdata('error','Lỗi không thể insert dữ liệu');

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


			$data['temp'] = 'admin/dulieu/bomon/add';
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