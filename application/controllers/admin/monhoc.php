<?php 
	class Monhoc extends MY_Controller
	{
		public function __construct()
		{
			parent::__construct();


			$this->load->model('BomonModel');
			$this->load->model('ChuyennganhModel');
			$this->load->model('HedaotaoModel');
			$this->load->model('LoaimonModel');
			$this->load->model('MonhocModel');
			$this->load->model('AdminModel');
			 //kiểm tra dữ liệu

	        $this->load->library('form_validation');
	        $this->load->helper('form');
		}


		public function index()
		{
			// load ra thư viện phân trang
			 $this->load->library('pagination');
			
			 // lấy ra tổng số các chuyên ngành
			$total_row = $this->MonhocModel->get_total();

			$config  = array();
			$config['total_rows'] =  $total_row; // tổng tất cả các sản phẩm trên website ;
	        $config['base_url'] =  admin_url('monhoc/index'); // link hiển thị dữ lieeu danh sách sản phẩm
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
        	$list = $this->MonhocModel->get_list($input);
			// gán truyền danh sách các khoa sang view 
			$data['list'] = $list;


			$data['temp'] = 'admin/dulieu/monhoc/index';
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
				
				$this->form_validation->set_rules('tenmonhoc','Nhập vào tên môn học','required');

				$this->form_validation->set_rules('mamonhoc','Nhập vào mã môn học','required');
				
				$this->form_validation->set_rules('soTCTH','Nhập vào số tín chỉ thực hành ','required');

				$this->form_validation->set_rules('soTCLT','Nhập vào số tín chỉ lý thuyết  ','required');
				$this->form_validation->set_rules('tengiaovien','Bạn cần chọn giáo viên  ','required');


				if($this->form_validation->run())
				{
					// lấy dữ liệu từ form

					$tenmonhoc = $this->input ->post('tenmonhoc');

					$mamonhoc = $this->input ->post('mamonhoc');

					$mahedaotao = $this->input ->post('mahedaotao');

					$machuyennganh = $this ->input ->post('machuyennganh');

					$mabomon = $this ->input ->post('mabomon');

					$maloaimon = $this ->input ->post('maloaimon');

					$tengiaovien = $this ->input ->post('tengiaovien');

					$soTCTH = $this ->input ->post('soTCTH');

					$soTCLT= $this ->input ->post('soTCLT');

					$activel = $this ->input ->post('active');		

					// kiểm tra nếu mã môn học bị trùng
					$input = array();

					$input['where'] = array('mamonhoc' =>$mamonhoc);

					$data = $this->MonhocModel->get_list($input);

					if(empty($data))
					{
				
						$data = array(
									'mamonhoc'			=>$mamonhoc,
									'tenmonhoc'			=>$tenmonhoc,
									'mahedaotao'		=>$mahedaotao,
									'soTCLT'			=>$soTCLT,
									'soTCTH' 			=>$soTCTH,
									'machuyennganh' 	=> $machuyennganh,
									'maloaimon'  		=> $maloaimon,
									'giaovien'  		=> $tengiaovien,
									'TCM'  				=> $TCM,
									'nguoithaotac'  	=> $maGV,
									'hienthi'			=> $activel
									);

						//kiểm tra và chạy câu lệnh inser 

						if($this->MonhocModel->create($data))
						{
							 $this->session->set_flashdata('success','Insert  thành công');
							 redirect(admin_url('monhoc'));
						}
						else
						{
							$this->session->set_flashdata('error','Lỗi không thể insert dữ liệu');

						}

					}
					else
					{
						$this->session->set_flashdata('error',' Mã Môn học đã bị trùng .
						 .');
					}

				}
			}
			// list ra danh sách dữ liệu của các bảng 
			$list_hedaotao = $this->HedaotaoModel->get_list();
			$data['list_hedaotao'] = $list_hedaotao;

			$list_chuyennganh = $this->ChuyennganhModel->get_list();
			$data['list_chuyennganh'] = $list_chuyennganh;

			$list_loaimon = $this->LoaimonModel->get_list();
			$data['list_loaimon'] = $list_loaimon;

			$list_giaovien = $this->AdminModel->get_list();
			$data['list_giaovien'] = $list_giaovien;


			$data['temp'] = 'admin/dulieu/monhoc/add';
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

			// kiểm tra có tồn tại môn học 

			 $maGV = isset_user($this->session->userdata('userdata'));

			 $list = $this->MonhocModel->get_info($id);

			 // kiểm tra 
			  if(!$list)
		        {
		            $this->session->set_flashdata('error','Không tồn tại lớp .');

		            redirect(admin_url('lop'));
		        }

		     // kiểm tra khi người dùng kích vào  
			if($this->input->post())
			{

				$this->form_validation->set_rules('tenmonhoc','Nhập vào tên môn học','required');

				
				$this->form_validation->set_rules('mamonhoc','Nhập vào mã môn học','required');

				
				$this->form_validation->set_rules('soTCTH','Nhập vào số tín chỉ thực hành ','required');


				$this->form_validation->set_rules('soTCLT','Nhập vào số tín chỉ lý thuyết  ','required');

				if($this->form_validation->run())
				{
					// lấy ra giá trị form
					$tenmonhoc = $this->input ->post('tenmonhoc');

					$mamonhoc = $this->input ->post('mamonhoc');

					$mahedaotao = $this->input ->post('mahedaotao');

					$machuyennganh = $this ->input ->post('machuyennganh');

					$mabomon = $this ->input ->post('mabomon');

					$maloaimon = $this ->input ->post('maloaimon');

					$tengiaovien = $this ->input ->post('tengiaovien');

					$soTCTH = $this ->input ->post('soTCTH');

					$soTCLT= $this ->input ->post('soTCLT');

					$TCM= $this ->input ->post('TCM');

					$activel = $this ->input ->post('active');

					// kiểm tra nếu mã môn học bị trùng
					if($list->mamonhoc == $mamonhoc )
					{
						$data = array();
					}else
					{
						$input = array();

						$input['where'] = array('mamonhoc ' =>$mamonhoc );

						$data = $this->MonhocModel->get_list($input);


					}
					// nếu mã môn học k bị trùng gán dữ liệu

					if(empty($data))
					{
						$mamonhoc = $this ->input ->post('mamonhoc');
				
						$data = array(
									'mamonhoc'			=>$mamonhoc,
									'tenmonhoc'			=>$tenmonhoc,
									'mahedaotao'		=>$mahedaotao,
									'soTCLT'			=>$soTCLT,
									'soTCTH' 			=>$soTCTH,
									'machuyennganh' 	=> $machuyennganh,
									'maloaimon'  		=> $maloaimon,
									'giaovien'  		=> $tengiaovien,
									'TCM'  				=> $TCM,
									'nguoithaotac'  	=> $maGV,
									'hienthi'			=> $activel
									);

						//pre($data);

						//kiểm tra và chạy câu lệnh inser 

						if($this->MonhocModel->update($id,$data))
						{
							 $this->session->set_flashdata('success','Update  thành công');
							 redirect(admin_url('monhoc'));
						}
						else
						{
							$this->session->set_flashdata('error','Lỗi không thể update dữ liệu');

						}

					}
					else
					{
						$this->session->set_flashdata('error','Mã môn học đã tồn tại .');
					}

				}
			}

			// lấy ra danh sách dữ liệu của các bảng
			$list_hedaotao = $this->HedaotaoModel->get_list();
			$data['list_hedaotao'] = $list_hedaotao;

			$list_chuyennganh = $this->ChuyennganhModel->get_list();
			$data['list_chuyennganh'] = $list_chuyennganh;

			$list_loaimon = $this->LoaimonModel->get_list();
			$data['list_loaimon'] = $list_loaimon;

			$list_giaovien = $this->AdminModel->get_list();
			$data['list_giaovien'] = $list_giaovien;


			$data['list'] = $list;
			$data['temp'] = 'admin/dulieu/monhoc/edit';
			$this->load->view('admin/main',$data);	
		}


		/*
			Xóa thông tin  môn học
		*/

		function delete()
	    {
	        $id = $this->uri->rsegment(3);

	        $maGV = isset_user($this->session->userdata('userdata'));

			settype($id, "int");
	        
	        if ($this->MonhocModel->delete($id)) {
	        	# code...
	        	$this->session->set_flashdata('success','Delet thành công ');

	        	redirect(admin_url('monhoc'));
	        }
	        else
	        {
	        	
	        	$this->session->set_flashdata('error',' Lỗi không thể xóa dữ liệu ');

	        	redirect(admin_url('monhoc'));
	        }
	        
	    }


	    // tìm kiếm theo tên
        function search()
        {
           
           $key = $this->input->get('key-search');
            

            $this->data['key'] = trim($key);
            $input = array();
            $input['like'] = array('tenmonhoc',$key);
         
            $list = $this->MonhocModel->get_list($input);
            

            $data['list'] = $list;
         
            // hiển thị ra phần view
           	$data['temp'] = 'admin/dulieu/monhoc/index';
            $this->load->view('admin/main',$data);	
        }



	}


?>