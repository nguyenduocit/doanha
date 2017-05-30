<?php 
	class KeKhaiGioGiangBM extends MY_Controller{

		public function __construct()
		{
			parent::__construct();
            $this->load->model('PhancongModel');
            $this->load->model('ChitietphancongModel');
            $this->load->model('QuydinhModel');
            $this->load->model('AdminModel');
            $this->load->model('BomonModel');
            $this->load->model('KekhaigiogiangbomonModel');
		}

		public function index()
		{
			$data_year = $this ->ChitietphancongModel->getYear();
			
			$data['data_year'] = $data_year;

			$list_bomon = $this->BomonModel->get_list();

			$data['list_bomon'] = $list_bomon;

			$namhoc = $this ->input ->post('namhoc');

			$mabomon = $this ->input ->post('mabomon');

			

			if(isset($namhoc) && isset($mabomon) && !empty($mabomon) && !empty($namhoc))
			{

				$data['namhoc'] = $namhoc;

				$input['where'] = array('mabomon' =>$mabomon);
				$tenbomon = $this->BomonModel->get_list($input);

				$data['tenbomon'] = $tenbomon;
				

				$list = $this->KekhaigiogiangbomonModel->KeKhaiGioGiangBM($mabomon,$namhoc);;
				$data['list'] = $list;
				//pre($list);

			}

			
			
			

			$data['temp'] ="admin/dulieu/kekhaigiogiangbm/index";
                  $this->load->view('admin/main',$data);
		}
	}
?>
