<?php 
class Kehoachchung extends MY_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('ChuyennganhModel');
		$this->load->model('HedaotaoModel');
		$this->load->model('BomonModel');
		$this->load->model('KhoaModel');
		$this->load->model('KehoachchungModel');
		$this->load->model('AdminModel');

	}


	public function index()
	{
		

			// load ra thư viện phân trang
				$this->load->library('pagination');

			// lấy ra tổng số các chuyên ngành
				$total_row = $this->KehoachchungModel->get_total();

				$config  = array();
				$config['total_rows'] =  $total_row; // tổng tất cả các sản phẩm trên website ;
				$config['base_url'] =  kehoach_url('kehoachchung/index'); // link hiển thị dữ lieeu danh sách sản phẩm
				$config['per_page'] = 10; // số sản phẩm hiển thị trên 1 trang
				$config['uri_segment'] = 4; // phân đoạn hiển thị số trnag
				$config['next_link']= 'Next' ; //Nhãn tên của nút Next
				$config['prev_link']= 'Previous' ; //Nhãn tên của nút Previous
				// khởi tạo cấu hình phân trang
				$this->pagination->initialize($config);

				$segment = $this->uri->segment(4);
				$segment = intval($segment);
				
				// lấy ra danh sách khoa 
				$list = $this->KehoachchungModel->get_join($segment,$config['per_page']);
			// gán truyền danh sách các khoa sang view 
				$data['list'] = $list;

				

				$data['temp'] = 'admin/dulieu/kehoachchung/index';
				$this->load->view('admin/main',$data);  
	}


	/*
		Thêm mới  kế hoạch
	*/

	public function add()
	{

		// kiểm tra có tồn tại người dùng 
		$maGV = isset_user($this->session->userdata('userdata'));


		// kiểm tra khi người dùng kích vào thêm mới 
		if($this->input->post())
		{

			$this->form_validation->set_rules('makehoachchung','Nhập vào mã kế hoạch ','required');

			$this->form_validation->set_rules('mahedaotao','Chọn hệ đào tạo ','required');

			$this->form_validation->set_rules('makhoa','Chọn khoa cần lập  ','required');

			$this->form_validation->set_rules('mabomon','Chọn bộ môn cần lập ','required');

			$this->form_validation->set_rules('machuyennganh','Chọn chuyên ngành cần lập ','required');


			if($this->form_validation->run())
			{
							
				$makehoachchungs = $this ->input ->post('makehoachchung');

				// lấy giá trị tên lớp
				$mahedaotao = $this ->input ->post('mahedaotao');

				// lấy giá trị mã lớp
				$makhoa = $this ->input ->post('makhoa');

				// lấy giá trị sĩ số
				$mabomon = $this ->input ->post('mabomon');


				$machuyennganh = $this ->input ->post('machuyennganh');

				$namhoc = $this ->input ->post('namhoc');

				// lấy giá trị của activel 

				$input = array();
				
				$input['where'] = array('makehoachchung' =>$makehoachchungs);
				//pre($input);

				$data = $this->KehoachchungModel->get_list($input);
		

				if(empty($data))
				{
								

					$data = array(
									'makehoachchung'  	=>$makehoachchungs,
									'mahedaotao'        =>$mahedaotao,
									'khoa'            	=>$makhoa,
									'bomon'           	=>$mabomon,
									'chuyennganh'   	=>$machuyennganh,
									'namhoc'          	=> $namhoc,
									'nguoithaotac'    	=> $maGV
									);

					

					//kiểm tra và chạy câu lệnh inser 

					if($this->KehoachchungModel->create($data))
					{
							$this->session->set_flashdata('success','Insert  thành công');
							redirect(kehoach_url('kehoachchung'));
					}
					else
					{
						$this->session->set_flashdata('error','Lỗi không thể insert dữ liệu');

					}

				}
				else
				{
					$this->session->set_flashdata('error','Mã kế hoạch đã tồn tại .');
				}

			}
		}

		$list_hedaotao = $this->HedaotaoModel->get_list();
		$data['list_hedaotao'] = $list_hedaotao;


		$list_bomon = $this->BomonModel->get_list();
		$data['list_bomon'] = $list_bomon;

		
		$list_khoa = $this->KhoaModel->get_list();
		$data['list_khoa'] = $list_khoa;


		$data['temp'] = 'admin/dulieu/kehoachchung/add';
		$this->load->view('admin/main',$data);  
	}


	
	/*
		lấy ra danh sách bộ môn bằng ajax
	*/
	public function bomon()
	{
	


		if(isset($_POST['makhoa']))
		{
			$makhoa = $_POST['makhoa'];

		}

		$input = array();
		$input['where'] = array('makhoa'=>$makhoa);

		$data = $this->BomonModel->get_list($input);

		foreach ($data as  $value) {
			# code...
			
			echo '<option   id="'.$value ->mabomon.'" mabomon="'.$value ->mabomon.'"  value="'.$value ->mabomon.'">'.$value ->tenbomon.'</option>';
		}
	}



	/*
		lấy ra dánh sách chuyên ngành bằng ajax
	*/

	public function nganh()
	{
		
		if(isset($_POST['mabomon']))
		{
			$mabomon = $_POST['mabomon'];

		}

		$input = array();
		$input['where'] = array('mabomon'=>$mabomon);

		$data = $this->ChuyennganhModel->get_list($input);

		foreach ($data as  $value) {
			# code...
			
			echo '<option id="'.$value ->machuyennganh.'" chuyennganh="'.$value ->machuyennganh.'"  value="'.$value ->machuyennganh.'">'.$value ->tenchuyennganh.'</option>';
		}
	}
	



	/*
		Chỉnh sửa kế hoạch chuyên ngành
	*/

	public function edit()
	{
		// lấy id được trả về
		$id =  $this->uri->rsegment(3);

		settype($id, "int");

		// kiểm tra có tồn tại kế hoạch trả về 

			$maGV = isset_user($this->session->userdata('userdata'));

			$list = $this->KehoachchungModel->get_info($id);

			// kiểm tra 
				if(!$list)
				{
					$this->session->set_flashdata('error','Không tồn tại kế hoạch .');

					redirect(kehoach_url('kehoachchung'));
				}

			// kiểm tra khi người dùng kích vào  
		if($this->input->post())
		{
			$this->form_validation->set_rules('makehoachchung','Nhập vào mã kế hoạch ','required');

			$this->form_validation->set_rules('mahedaotao','Chọn hệ đào tạo ','required');

			$this->form_validation->set_rules('makhoa','Chọn khoa cần lập  ','required');

			$this->form_validation->set_rules('mabomon','Chọn bộ môn cần lập ','required');

			$this->form_validation->set_rules('machuyennganh','Chọn chuyên ngành cần lập ','required');

			if($this->form_validation->run())
			{

				$makehoachchungs = $this ->input ->post('makehoachchung');

				// lấy giá trị tên lớp
				$mahedaotao = $this ->input ->post('mahedaotao');

				// lấy giá trị mã lớp
				$makhoa = $this ->input ->post('makhoa');

				// lấy giá trị sĩ số
				$mabomon = $this ->input ->post('mabomon');


				$machuyennganh = $this ->input ->post('machuyennganh');


				$namhoc = $this ->input ->post('namhoc');
 

				// kiem tra nếu người dùng nhập mã kế hoạc trùng mới mã kế hoạc trong cơ sở dữ liệu thì k cho update
				if($list->makehoachchung == $makehoachchungs )
				{
					$data = array();
				}else
				{
					$input = array();

					$input['where'] = array('makehoachchung' =>$makehoachchungs);

					$data = $this->KehoachchungModel->get_list($input);


				}

					

					if(empty($data))
					{
						$makehoachchungs = $this ->input ->post('makehoachchung');

						

						$data = array(
								'makehoachchung'  =>$makehoachchungs,
								'mahedaotao'        =>$mahedaotao,
								'khoa'            =>$makhoa,
								'bomon'           =>$mabomon,
								'namhoc'          => $namhoc,
								'nguoithaotac'    => $maGV
								
								);

						//kiểm tra và chạy câu lệnh inser 

						if($this->KehoachchungModel->update($id,$data))
						{
							$this->session->set_flashdata('success','Update  thành công');
							redirect(kehoach_url('kehoachchung'));
						}
						else
						{
							$this->session->set_flashdata('error','Lỗi không thể update dữ liệu');

						}

					}
					else
					{
						$this->session->set_flashdata('error','Mã kế hoạch đã tồn tại  .');
					}

			}
		}

		$list_hedaotao = $this->HedaotaoModel->get_list();
		$data['list_hedaotao'] = $list_hedaotao;


		$list_bomon = $this->BomonModel->get_list();
		$data['list_bomon'] = $list_bomon;

		
		$list_khoa = $this->KhoaModel->get_list();
		$data['list_khoa'] = $list_khoa;

		$list_chuyennganh = $this->ChuyennganhModel->get_list();
		$data['list_chuyennganh'] = $list_chuyennganh;

		$data['list'] = $list;
		$data['temp'] = 'admin/dulieu/kehoachchung/edit';
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
		
		if ($this->KehoachchungModel->delete($id)) {
			# code...
			$this->session->set_flashdata('success','Delet thành công ');

			redirect(kehoach_url('kehoachchung'));
		}
		else
		{
						
			$this->session->set_flashdata('error',' Lỗi không thể xóa dữ liệu ');

			redirect(kehoach_url('kehoachchung'));
		}
					
	}


	// tìm kiếm theo tên
	function search()
	{
				
		$key = $this->input->get('key-search');
		

		$key = trim($key);
		

		$list = $this->KehoachchungModel->get_Join_Seach($key);
		

		$data['list'] = $list;
		// hiển thị ra phần view
		$data['temp'] = 'admin/dulieu/kehoachchung/index';
		$this->load->view('admin/main',$data);  
	}



}


?>