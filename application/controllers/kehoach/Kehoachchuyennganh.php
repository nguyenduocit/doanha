<?php 
class Kehoachchuyennganh extends MY_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('ChuyennganhModel');
		$this->load->model('KehoachchungModel');
		$this->load->model('KehoachchuyennganhModel');
		$this->load->model('MonhocModel');
		$this->load->model('HedaotaoModel');
		$this->load->model('AdminModel');

	}


	public function view()
	{
		// lấy giá trị id mã kế hoạch chung 
		$id =  $this->uri->rsegment(3);
		
		$input  = array();
		$input['where'] = array('makehoachchung' => $id);

		// kiểm tra xem kế hoạch chung có tồn tại
		$list_kehoachchung = $this->KehoachchungModel->get_list($input);
		
		// nếu kế hoạch chung k tồn tại
		if(!$list_kehoachchung)
		{
			$this->session->set_flashdata('error','Không tồn tại kế hoạch - không thể lập kế hoạch cho chuyên ngành .');
			// chuyển về trang kế hoạch chung
			redirect(kehoach_url('kehoachchung'));
		}
		// lấy ra giá trị của mã chuyên ngành
		foreach ($list_kehoachchung as $value)
		{
			$machuyennganhs = $value ->chuyennganh;
			$mahedaotao = $value ->mahedaotao;
		}
		// lấy ra thông tin hệ đào tạo
		$input['where'] = array('mahedaotao' => $mahedaotao);
		$list_hedaotao = $this->HedaotaoModel->get_list($input);

		$data['list_hedaotao'] = $list_hedaotao;
		
		// lấy ra thông tin chuyên ngành 
		$input['where'] = array('machuyennganh' =>$machuyennganhs);
		$list_chuyennganh = $this->ChuyennganhModel->get_list($input);

		$data['list_chuyennganh'] = $list_chuyennganh;
			//lấy ra thông tin môn học 
			$list_monhoc = $this->MonhocModel->get_list();
			$data['list_monhoc'] = $list_monhoc;
			//lấy ra dữ liệu có trùng mã chuyên ngành
			$list = $this->KehoachchuyennganhModel->get_join_detail($machuyennganhs);
			// lưu dữ liệu tên giáo viên giảng dạy vào mảng
			foreach ($list as $key => $value) {
				# code...
				$where = array('maGV' =>$value->giaovien);
				$value->tengiaovien = $this->AdminModel->get_info_rule($where ,'hoten');
			}
			//pre($list);
			$data['list'] = $list;
			$data['temp'] = 'admin/dulieu/kehoachchuyennganh/index';
			$this->load->view('admin/main',$data);  
		

	}


	public function add()
	{
		// lấy giá trị id mã kế hoạch chung 
		$id =  $this->uri->rsegment(3);
		
		$input  = array();
		$input['where'] = array('makehoachchung' => $id);

		// kiểm tra xem kế hoạch chung có tồn tại
		$list_kehoachchung = $this->KehoachchungModel->get_list($input);
		
		// nếu kế hoạch chung k tồn tại
		if(!$list_kehoachchung)
		{
			$this->session->set_flashdata('error','Không tồn tại kế hoạch - không thể lập kế hoạch cho chuyên ngành .');
			// chuyển về trang kế hoạch chung
			redirect(kehoach_url('kehoachchung'));
		}
		// lấy ra giá trị của mã chuyên ngành
		foreach ($list_kehoachchung as $value)
		{
			$machuyennganhs = $value ->chuyennganh;
			$mahedaotao = $value ->mahedaotao;
		}
		// lấy ra thông tin hệ đào tạo
		$input['where'] = array('mahedaotao' => $mahedaotao);
		$list_hedaotao = $this->HedaotaoModel->get_list($input);

		$data['list_hedaotao'] = $list_hedaotao;
		
		// lấy ra thông tin chuyên ngành 
		$input['where'] = array('machuyennganh' =>$machuyennganhs);
		$list_chuyennganh = $this->ChuyennganhModel->get_list($input);
		

		// kiểm tra khi người dùng nhấn thêm dữ liệu
		if($this->input->post())
		{
			// validate các trường nhập từ form 
			$this->form_validation->set_rules('hocky','Bạn cần chọn học kỳ. ','required');
			$this->form_validation->set_rules('mamonhoc','Bạn cần chọn môn học. ','required');
			
			// chạy câu lệnh validate
			if($this->form_validation->run())
			{
				// gán dữ liệu

				$machuyennganh = $this ->input ->post('machuyennganh');

				$hocky = $this ->input ->post('hocky');

				$mamonhoc = $this ->input ->post('mamonhoc');

				// Lưu vào mảng dữ liệu
				$data = array(
						'makehoachchung' => $id,
						'machuyennganh' => $machuyennganh,
						'mamonhoc'		=>$mamonhoc,
						'hocky'			=>$hocky
						);
				


				//kiểm tra và chạy câu lệnh inser 

				if($this->KehoachchuyennganhModel->create($data))
				{
					$this->session->set_flashdata('success','Thêm  thành công');
					redirect(kehoach_url('kehoachchuyennganh/add/').$id);
					
				}
				else
				{
					$this->session->set_flashdata('error','Lỗi không thể update dữ liệu');

				}

					
			}
		}
			
			$data['list_chuyennganh'] = $list_chuyennganh;
			//lấy ra thông tin môn học 
			$list_monhoc = $this->MonhocModel->get_list();
			$data['list_monhoc'] = $list_monhoc;
			//lấy ra dữ liệu có trùng mã chuyên ngành
			$list = $this->KehoachchuyennganhModel->get_join_detail($machuyennganhs);
			// lưu dữ liệu tên giáo viên giảng dạy vào mảng
			foreach ($list as $key => $value) {
				# code...
				$where = array('maGV' =>$value->giaovien);
				$value->tengiaovien = $this->AdminModel->get_info_rule($where ,'hoten');
			}
			//pre($list);
			$data['list'] = $list;
			$data['temp'] = 'admin/dulieu/kehoachchuyennganh/add';
			$this->load->view('admin/main',$data);  
	}


	function delete()
	{
		 $id = $_POST['id'];

		$maGV = isset_user($this->session->userdata('userdata'));

		settype($id, "int");
		
		
		if ($this->KehoachchuyennganhModel->delete($id)) {
			//code...
			// $this->session->set_flashdata('success','Delet thành công ');

			// redirect(kehoach_url('kehoachchuyennganh'));
		}
		else
		{
						
			// $this->session->set_flashdata('error',' Lỗi không thể xóa dữ liệu ');

			// redirect(kehoach_url('kehoachchuyennganh'));
		}
					
	}


}


?>