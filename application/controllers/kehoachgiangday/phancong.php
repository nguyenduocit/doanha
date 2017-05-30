<?php
	class Phancong extends MY_Controller
	{
		public function __construct()
		{
			
			parent::__construct();
            $this->load->model('PhancongModel');
            $this->load->model('AdminModel');
	        
		}

		// lấy ra danh sách
		public function index()
		{
			
            // load ra thư viện phân trang
            $this->load->library('pagination');

            // lấy ra tổng số các chuyên ngành
            $total_row = $this->PhancongModel->get_total();

            $config  = array();
            $config['total_rows'] =  $total_row; // tổng tất cả các sản phẩm trên website ;
            $config['base_url'] =  kehoachgiangday_url('phancong/index'); // link hiển thị dữ lieeu danh sách sản phẩm
            $config['per_page'] =  10; // số sản phẩm hiển thị trên 1 trang
            $config['uri_segment'] = 4; // phân đoạn hiển thị số trnag
            $config['next_link']= 'Next' ; //Nhãn tên của nút Next
            $config['prev_link']= 'Previous' ; //Nhãn tên của nút Previous
            // khởi tạo cấu hình phân trang
            $this->pagination->initialize($config);

            $segment = $this->uri->segment(4);
            $segment = intval($segment);
                    

            // lấy ra danh sách khoa 
            $list = $this->PhancongModel->viewPhanCong($segment ,$config['per_page']);

            //pre($list);


            // gán truyền danh sách các khoa sang view 
                
            $data['list'] = $list;
            
            foreach ($list as $key => $value) {
                # code...
                $where = array('maGV' =>$value->nguoithaotac);
                $value->tengiaovien = $this->AdminModel->get_info_rule($where,'hoten');
            }
            //pre($list);

			$data['temp'] ="admin/dulieu/phancong/index";
			$this->load->view('admin/main',$data);
		}



        // Thêm dữ liệu vào bảng phân công
        public function add()
        {
            $data = array();
            // kiểm tra có tồn tại người dùng 
            $maGV = isset_user($this->session->userdata('userdata'));

            // kiểm tra khi người dùng kích vào thêm mới 
            if($this->input->post())
            {
                // kiểm tra giá trị của form không được bỏ trống
                $this->form_validation->set_rules('tengiaovien','Chọn giáo viên cần phân công ','required');
                $this->form_validation->set_rules('hocky','Chọn học kỳ cần phân công ','required');

               


                if($this->form_validation->run())
                {
                   
                    $tengiaovien = $this ->input ->post('tengiaovien');
                    $hocky = $this ->input ->post('hocky');
                    $namhoc = $this ->input ->post('namhoc');

                
                    // kiểm tra xem mã quy định có bị trùng
                    $input = array();

                    $input['where'] = array('maGV' =>$tengiaovien,'hocky'=>$hocky);

                    $data = $this->PhancongModel->get_list($input);

                    // nếu mã quy định không bị trùng tiến hành insert vào csdl
                    if(empty($data))
                    {
                        
                        $data = array(
                                    'maGV'          =>$tengiaovien,
                                    'hocky'          =>$hocky,
                                    'namhoc'        => $namhoc,
                                    'nguoithaotac'  => $maGV
                                    );

                        //kiểm tra và chạy câu lệnh inser 

                        if($this->PhancongModel->create($data))
                        {
                            // gửi thông báo
                             $this->session->set_flashdata('success','Insert  thành công');
                             // chuyển về trang hiển thị danh sách quy định
                             redirect(kehoachgiangday_url('phancong'));
                        }
                        else
                        {
                            $this->session->set_flashdata('error','Lỗi không thể insert dữ liệu');

                        }

                    }
                    else
                    {
                        $this->session->set_flashdata('error','Giáo viên đã được phân công .');
                    }

                }
            }

            // lấy ra dữ liệu của bảng admin
            $list_giaovien = $this->AdminModel->get_list();
            $data['list_giaovien'] = $list_giaovien;


            $data['temp'] ="admin/dulieu/phancong/add";
            $this->load->view('admin/main',$data);
        }

		
        function delete()
    {
        $id = $this->uri->rsegment(3);

        $maGV = isset_user($this->session->userdata('userdata'));

        settype($id, "int");
        
        if ($this->PhancongModel->delete($id)) {
            # code...
            $this->session->set_flashdata('success','Delet thành công ');

            redirect(kehoachgiangday_url('phancong'));
        }
        else
        {
                        
            $this->session->set_flashdata('error',' Lỗi không thể xóa dữ liệu ');

            redirect(kehoachgiangday_url('phancong'));
        }
                    
    }


    // tìm kiếm theo tên
    function search()
    {
                
        $key = $this->input->get('key-search');
        

        $key = trim($key);
        

        $list = $this->PhancongModel->viewPhanCong(0,100,$key);
        foreach ($list as $key => $value) {
                # code...
                $where = array('maGV' =>$value->nguoithaotac);
                $value->tengiaovien = $this->AdminModel->get_info_rule($where ,'hoten');
            }
        

        $data['list'] = $list;
        // hiển thị ra phần view
        $data['temp'] = 'admin/dulieu/phancong/index';
        $this->load->view('admin/main',$data);  
    }



	
	   
	}
?>