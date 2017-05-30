<?php 
	class KeKhaiGioGiangKhoa extends MY_Controller{

		public function __construct()
		{
			parent::__construct();
            $this->load->model('PhancongModel');
            $this->load->model('ChitietphancongModel');
            $this->load->model('QuydinhModel');
            $this->load->model('AdminModel');
            $this->load->model('KhoaModel');
            $this->load->model('KekhaigiogiangbomonModel');
            
		}

		public function index()
		{
			$data_year = $this ->ChitietphancongModel->getYear();
			
			$data['data_year'] = $data_year;

			$list_khoa = $this->KhoaModel->get_list();

			$data['list_khoa'] = $list_khoa;

			$namhoc = $this ->input ->post('namhoc');

			$khoa = $this ->input ->post('makhoa');

			if(isset($namhoc) && isset($khoa) && !empty($khoa) && !empty($namhoc))
			{
				$data['namhoc'] = $namhoc;

				$input['where'] = array('makhoa' =>$khoa);
				$tenkhoa = $this->KhoaModel->get_list($input);

				$data['tenkhoa'] = $tenkhoa;
				$list = $this->KekhaigiogiangbomonModel->KeKhaiGioGiangkhoa($khoa,$namhoc);;
				$data['list'] = $list;
				

			}

			
			$data['namhoc'] = $namhoc;
			
			$data['temp'] ="admin/dulieu/kekhaigiogiangkhoa/index";
                  $this->load->view('admin/main',$data);
		}
	}
?>
