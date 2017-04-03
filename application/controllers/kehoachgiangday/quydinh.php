<?php
	class Quydinh extends MY_Controller
	{
		public function __construct()
		{
			parent::__construct();
			$this->load->model('QuydinhModel');
		}

		public function index()
		{

			// load ra thư viện phân trang
			$this->load->library('pagination');
			
			 // lấy ra tổng số các khoa 
			$total_row = $this->QuydinhModel->get_total();

			$config  = array();
			$config['total_rows'] =  $total_row; // tổng tất cả các sản phẩm trên website ;
	        $config['base_url'] =  kehoachgiangday_url('quydinh/index'); // link hiển thị dữ lieeu danh sách sản phẩm
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
        	$list = $this->QuydinhModel->get_list($input);
			// gán truyền danh sách các khoa sang view 
			$data['list'] = $list;

			$data['temp'] ="admin/dulieu/quydinh/index";
			$this->load->view('admin/main',$data);
		}
	}
?>