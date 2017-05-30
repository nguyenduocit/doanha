<?php
	class Chitietphancong extends MY_Controller
	{
		public function __construct()
		{
			
			parent::__construct();
            $this->load->model('PhancongModel');
            $this->load->model('ChitietkehoachtheolopModel');
            $this->load->model('KehoachtheolopModel');
            $this->load->model('LopModel');
            $this->load->model('MonhocModel');
            $this->load->model('ChitietphancongModel');
            $this->load->model('AdminModel');
	        
		}

		// lấy ra danh sách các môn phân công
		public function showList()
		{
			// lấy id được trả về
            $id =  $this->uri->rsegment(3);

            settype($id, "int");

            $data = array();
            // kiểm tra có tồn tại người dùng 
            $maGV = isset_user($this->session->userdata('userdata'));

            $idgv = $this->PhancongModel->get_info($id,'maGV');
            
            $input['where'] = array('maGV'=>$idgv ->maGV);
            $list_giaovien = $this->AdminModel->get_list($input);
            $data['list_giaovien'] = $list_giaovien;

             // lấy ra danh sách các môn được phân công cho giáo viên 
            $list = $this->ChitietphancongModel->getChiTietPhanCong($id);
            $data['list'] = $list;

           

			$data['temp'] ="admin/dulieu/chitietphancong/chi-tiet-phan-cong";
			$this->load->view('admin/main',$data);
		}



        // Thêm dữ liệu vào bảng phân công
        public function add()
        {

            // lấy id được trả về
            $id =  $this->uri->rsegment(3);

            settype($id, "int");

            $data = array();
            // kiểm tra có tồn tại người dùng 
            $maGV = isset_user($this->session->userdata('userdata'));

            // lấy học kỳ 
            $hocky = $this->PhancongModel->get_info($id,'hocky');
            $data['hocky'] = $hocky;


            $idgv = $this->PhancongModel->get_info($id,'maGV');


            
            $input['where'] = array('maGV'=>$idgv ->maGV);
            $list_giaovien = $this->AdminModel->get_list($input);
            $data['list_giaovien'] = $list_giaovien;
            //pre($list_giaovien);

            // kiểm tra khi người dùng kích vào thêm mới 
            if($this->input->post())
            {
                // kiểm tra giá trị của form không được bỏ trống
                $this->form_validation->set_rules('lop','Chọn lớp phân công','required');
                $this->form_validation->set_rules('hocky','Chọn học kỳ ','required');
                $this->form_validation->set_rules('monhoc','Chọn học môn học ','required');

               


                if($this->form_validation->run())
                {
                   
                    $lop = $this ->input ->post('lop');
                    $monhoc = $this ->input ->post('monhoc');
                    $hocky = $this ->input ->post('hocky');
                    $namhoc = $this ->input ->post('namhoc');

                    
                   // kiểm tra xem môn học có bị trùng
                    $input = array();

                    $input['where'] = array('maphancong'=>$id,'mamon' =>$monhoc,'hocky'=>$hocky,'malop'=>$lop);

                    $data = $this->ChitietphancongModel->get_list($input);

                    // nếu mã quy định không bị trùng tiến hành insert vào csdl
                    if(empty($data))
                    {
                        // lấy ra thông tin môn học 
                        $input['where'] = array('mamonhoc' => $monhoc);
                        $data_monhoc = $this->MonhocModel->get_list($input); 

                        // tính toán số giờ của giáo viên
                       foreach($data_monhoc as $val)
                       {
                             $gio = $val->soTCLT *15 + $val->soTCTH * 45;
                       }

                        $input['where'] = array('id'=>$id);
                        $phan_cong_time = $this->PhancongModel->get_list($input);
                        // lấy ra số giờ hiện tại
                       foreach ($phan_cong_time as $key => $value) {
                           # code...
                           $sogio = $value->time;
                       }

                        $update_gio = $sogio + $gio;


                        $datas = array('time' =>$update_gio);

                        $phan_cong_time = $this->PhancongModel->update($id,$datas);
                        

                        
                        $data = array(
                                    'maphancong  '  =>$id,
                                    'mamon'        => $monhoc,
                                    'malop'        => $lop,
                                    'hocky'        => $hocky,
                                    'namhoc'        => $namhoc,
                                    'nguoithaotac'  => $maGV
                                    );

                        //kiểm tra và chạy câu lệnh inser 

                        if($this->ChitietphancongModel->create($data))
                        {
                            // gửi thông báo
                             $this->session->set_flashdata('success','Insert  thành công');
                             // chuyển về trang hiển thị danh sách quy định
                             redirect(kehoachgiangday_url('chitietphancong/add/'.$id));
                        }
                        else
                        {
                            $this->session->set_flashdata('error','Lỗi không thể insert dữ liệu');

                        }

                    }
                    else
                    {
                        $this->session->set_flashdata('error','Môn học của lớp đã được phân công .');
                        redirect(kehoachgiangday_url('chitietphancong/add/'.$id));
                    }

                }
            }

            // lấy ra dữ liệu của bảng admin

            $input['where'] = array('duyet' => 1);
            $lop = $this->KehoachtheolopModel->get_list($input);
            if(!empty($lop))
            {
                foreach($lop  as $value)
                {
                    $where = array('malop' => $value ->malop);
                    $lops[] = $this->LopModel->get_info_rule($where,'*');
                }

            }else
            {
                $lops[] = array();
            }
           
            $data['lop'] = $lops;


            // lấy ra danh sách các môn được phân công cho giáo viên 
            $list = $this->ChitietphancongModel->getChiTietPhanCong($id);
            $data['list'] = $list;
            //pre($list);
           
            $data['temp'] ="admin/dulieu/chitietphancong/add";
            $this->load->view('admin/main',$data);
        }

        // lấy ra danh sách các môn học của lớp 
        public function listMon()
        {
            // lấy ra mã lớp và học kỳ 
            $lop = isset($_POST['lop']) ? $_POST['lop'] : false;
            $hocky = isset($_POST['hocky']) ? $_POST['hocky'] : false;
            // lấy ra list môn học của lớp đã đc phân công
            $list_mon = $this->ChitietkehoachtheolopModel->listMon($lop,$hocky);
            foreach($list_mon as $value)
            {
                echo " <option value = '".$value->mamonhoc."'>".$value->tenmonhoc."</option>";
            }    

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

    function delete_Ajax()
    {
        $id = $_POST['id'];

        $maGV = isset_user($this->session->userdata('userdata'));

        settype($id, "int");
        
        
        if ($this->ChitietphancongModel->delete($id)) {
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