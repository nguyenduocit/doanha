<?php
	class Duyetkehoachdt extends MY_Controller
	{
		public function __construct()
		{
			
			parent::__construct();
	        $this->load->model('ChuyennganhModel');
	        $this->load->model('KehoachtheolopModel');
	        $this->load->model('ChitietkehoachtheolopModel');
	        $this->load->model('MonhocModel');
	        $this->load->model('HedaotaoModel');
	        $this->load->model('LopModel');
	        $this->load->model('AdminModel');
		}

		// lấy ra danh sách
		public function index()
		{
			
            // load ra thư viện phân trang
                $this->load->library('pagination');

            // lấy ra tổng số các chuyên ngành
            $total_row = $this->KehoachtheolopModel->get_total();

            $config  = array();
            $config['total_rows'] =  $total_row; // tổng tất cả các sản phẩm trên website ;
            $config['base_url'] =  kehoach_url('duyetkehoach/index'); // link hiển thị dữ lieeu danh sách sản phẩm
            $config['per_page'] =  10; // số sản phẩm hiển thị trên 1 trang
            $config['uri_segment'] = 4; // phân đoạn hiển thị số trnag
            $config['next_link']= 'Next' ; //Nhãn tên của nút Next
            $config['prev_link']= 'Previous' ; //Nhãn tên của nút Previous
            // khởi tạo cấu hình phân trang
            $this->pagination->initialize($config);

            $segment = $this->uri->segment(4);
            $segment = intval($segment);
                    

            // lấy ra danh sách khoa 
            $list = $this->KehoachtheolopModel->getKeHoachTheoLop($segment ,$config['per_page']);


            // gán truyền danh sách các khoa sang view 
                
            $data['list'] = $list;

			$data['temp'] ="admin/dulieu/duyetkehoach/index";
			$this->load->view('admin/main',$data);
		}
		

		public function duyetKeHoach()
		{
			$id = $_POST['id'];
			$makehoach = $_POST['makehoach'];

			$data = array(
				'duyet' =>$id
				);

			if($this->KehoachtheolopModel->update($makehoach,$data))
			{

			}

		}



		// tìm kiếm theo tên
    function search()
    {
                
        $key = $this->input->get('key-search');
        

        $key = trim($key);

        $list = $this->KehoachtheolopModel->seachKeHoachTheoLop($key);
        

        $data['list'] = $list;
        // hiển thị ra phần view
        $data['temp'] = 'admin/dulieu/duyetkehoach/index';
        $this->load->view('admin/main',$data);  
    }


   function search_view()
    {
                
        $key = $this->input->get('key-search');
        

        $key = trim($key);

        $list = $this->ChitietkehoachtheolopModel->seachKeHoachTheoLop($key);
        

        $data['list'] = $list;
        // hiển thị ra phần view
        $data['temp'] = 'admin/dulieu/duyetkehoach/index';
        $this->load->view('admin/main',$data);  
    }




	


	   
	}
?>