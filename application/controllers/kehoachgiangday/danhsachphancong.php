<?php
	class DanhSachPhanCong extends MY_Controller
	{
		public function __construct()
		{
			
			parent::__construct();
            $this->load->model('PhancongModel');
            $this->load->model('ChitietphancongModel');
            $this->load->model('QuydinhModel');
            $this->load->model('AdminModel');
	        
		}

        public function index()
        {

            $maGV = isset_user($this->session->userdata('userdata'));
            
            $data_year = $this ->ChitietphancongModel->getYear();

            $data['data_year'] = $data_year;

            $hocky = $this ->input ->post('hocky');
            $namhoc = $this ->input ->post('namhoc');
            $data['hocky'] = 1;


            if(isset($hocky) && isset($namhoc) && !empty($hocky) && !empty($namhoc))
            {
                $data['hocky'] = $hocky;
                $data['namhoc'] = $namhoc;

                $data_phancong = $this->PhancongModel->chiTiet($namhoc,$hocky);
                
                foreach($data_phancong as $val)
                {
                    $input['where'] = array('maGV' =>$val->maGV ,'kyhoc' =>$hocky , 'namhoc'=>$namhoc);
                    $val->giochuan = $this->QuydinhModel->get_list($input);
                }


                $data['phancong'] = $data_phancong;
            }

            $data['temp'] ="admin/dulieu/danhsachphancong/index";
            $this->load->view('admin/main',$data);
        }


        public function showList()
        {
            // lấy id được trả về
            $id =  $this->uri->rsegment(3);
            $namhoc =  $this->uri->rsegment(4);
            $hocky =  $this->uri->rsegment(5);
            

            settype($id, "int");

            $data = array();
            $data['hocky'] = $hocky;
            $data['namhoc'] = $namhoc;
            // kiểm tra có tồn tại người dùng 
            $maGV = isset_user($this->session->userdata('userdata'));

            $idgv = $this->PhancongModel->get_info($id,'maGV');
            
            $input['where'] = array('maGV'=>$idgv ->maGV);
            $list_giaovien = $this->AdminModel->get_list($input);
            $data['list_giaovien'] = $list_giaovien;

             // lấy ra danh sách các môn được phân công cho giáo viên 
            $list = $this->ChitietphancongModel->getChiTietPhanCongs($id,$hocky,$namhoc);
            $data['list'] = $list;

           

            $data['temp'] ="admin/dulieu/danhsachphancong/chi-tiet-ke-hoach";
            $this->load->view('admin/main',$data);
        }
	
	   
	}



                    
 
?>