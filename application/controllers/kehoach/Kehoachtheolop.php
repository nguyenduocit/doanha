<?php 
class Kehoachtheolop extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('ChuyennganhModel');
        $this->load->model('KehoachchungModel');
        $this->load->model('KehoachtheolopModel');
        $this->load->model('MonhocModel');
        $this->load->model('LopModel');
        $this->load->model('AdminModel');

    }


    public function index()
    {
        

            // load ra thư viện phân trang
                $this->load->library('pagination');

            // lấy ra tổng số các chuyên ngành
                $total_row = $this->KehoachtheolopModel->get_total();

                $config  = array();
                $config['total_rows'] =  $total_row; // tổng tất cả các sản phẩm trên website ;
                $config['base_url'] =  kehoach_url('kehoachtheolop/index'); // link hiển thị dữ lieeu danh sách sản phẩm
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
                    $list = $this->KehoachtheolopModel->get_list($input);
                // gán truyền danh sách các khoa sang view 
                    $data['list'] = $list;
                    
                   


                    $data['temp'] = 'admin/dulieu/kehoachtheolop/index';
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
            //pre($_REQUEST);
                    
            // kiểm tra giá trị mã
            $this->form_validation->set_rules('machuyennganh','Bạn cần chọn vào mã chuyên ngành ','required');



            $this->form_validation->set_rules('makehoachtheolop','Nhập vào mã kế hoạch ','required');

            if($this->form_validation->run())
            {
                // lấy ra mã kế hoạch theo lớp               
                $makehoachtheolops = $this ->input ->post('makehoachtheolop');

                // lấy ra mã kế hoạch chung
               

                // lấy giá trị mã chuyên ngành
                $machuyennganh = $this ->input ->post('machuyennganh');


                $hocky = $this ->input ->post('hocky');


                $namhoc = $this ->input ->post('namhoc');

                $solop = $this ->input ->post('solop');


                $malop = $this ->input ->post('lop');


                $monhoc = $this->input ->post('monhoc');

                $monhoc = json_encode($monhoc);


                //pre($monhoc);

               

                // lấy giá trị của activel 

                $activel = $this ->input ->post('active');



                // lây giá trị của mã khoa 

                $where = " makehoachtheolop = '".$makehoachtheolops."' OR malop = '".$malop."'";
                //pre($input);

                $data = $this->KehoachtheolopModel->get_or($where);

                //pre($data);
                if($solop == 0 or empty($solop))
                {
                    $this->session->set_flashdata('error',' Kế hoạch mở lớp đã hết hoặc chưa có kế hoạch mở lớp .');
                }
                else
                {


                

                    if(empty($data))
                    {
                                    

                        $data = array(
                                        'makehoachtheolop'  =>$makehoachtheolops,
                                        'machuyennganh'     =>$machuyennganh,
                                        'malop'             =>$malop,
                                        'monhoc'            =>$monhoc,
                                        'hocky'             => $hocky,
                                        'namhoc'            => $namhoc,
                                        'nguoithaothac'      => $maGV,
                                        'hienthi'           => $activel
                                        );

                        //pre($data);

                        //kiểm tra và chạy câu lệnh inser 

                        if($this->KehoachtheolopModel->create($data))
                        {
                            // gán số lớp bằng số lớp  - 1 
                            $solop = $solop -1;
                            $input = array();
                            $input['where'] = array('chuyennganh'=>$machuyennganh , 'hocky' => $hocky);

                            // lấy ra kế hoạch chung mới có mã chuyên ngành mới học ký vừa chọn

                            $list = $this->KehoachchungModel->get_list($input);

                            // lấy ra id của kế hoạch

                            foreach ($list as $key => $value) {
                                # code...
                                $id = $value ->id ;
                            }

                            $data = array(
                                            'solop' =>$solop
                                );
                            
                            $this->KehoachchungModel->update($id,$data);

                            $this->session->set_flashdata('success','Insert  thành công');
                            redirect(kehoach_url('kehoachtheolop'));
                        }
                        else
                        {
                            $this->session->set_flashdata('error','Lỗi không thể insert dữ liệu');

                        }

                    }
                    else
                    {
                        $this->session->set_flashdata('error','Mã kế hoạch đã tồn tại , lớp đã được xếp lịch .');
                    }
                }

            }
        }

       
        
        $list_chuyennganh = $this->ChuyennganhModel->get_list();
        $data['list_chuyennganh'] = $list_chuyennganh;

        $data['temp'] = 'admin/dulieu/kehoachtheolop/add';
        $this->load->view('admin/main',$data);  
    }


    /*
        lấy ra dữ liệu của bảng kế hoạch chung
    */
    public function data_khc()
    {
        if(isset($_POST['machuyennganh']))
        {
            $machuyennganh = $_POST['machuyennganh'];

        }

        if(isset($_POST['hocky']))
        {
            $hocky = $_POST['hocky'];

        }

        $input = array();
        $input['where'] = array('chuyennganh'=>$machuyennganh,'hocky'=>$hocky);

        $data = $this->KehoachchungModel->get_list($input);

        die(json_encode($data));
    }




    public function lop()
    {
        if(isset($_POST['machuyennganh']))
        {
            $machuyennganh = $_POST['machuyennganh'];

        }

        $input = array();
        $input['where'] = array('machuyennganh'=>$machuyennganh);

        $data = $this->LopModel->get_list($input);

        foreach ($data as  $value) {
            # code...
            
            echo '<option  id="'.$value ->malop.'" malop="'.$value ->malop.'"  value="'.$value ->malop.'">'.$value ->tenlop.'</option>';
        }
          
    }

    // láy ra danh sách môn học của chuyên ngành đó
    public function monhoc()
    {
        if(isset($_POST['machuyennganh']))
        {
            $machuyennganh = $_POST['machuyennganh'];

        }

        $input = array();
        $input['where'] = array('machuyennganh'=>$machuyennganh);

        $data = $this->MonhocModel->get_list($input);

        
        die(json_encode($data));
        
    }


    /*
                    Chỉnh sửa thông tin  bộ môn
    */

    public function edit()
    {
                    // lấy id được trả về
        $id =  $this->uri->rsegment(3);

        settype($id, "int");

        // kiểm tra có tồn tại giáo viên

            $maGV = isset_user($this->session->userdata('userdata'));

            $list = $this->KehoachtheolopModel->get_info($id);

            // kiểm tra 
                if(!$list)
                        {
                                $this->session->set_flashdata('error','Không tồn tại kế hoạch .');

                                redirect(kehoach_url('kehoachtheolop'));
                        }

            // kiểm tra khi người dùng kích vào  
        if($this->input->post())
        {
                        // kiểm tra giá trị mã
                $this->form_validation->set_rules('solop','Nhập vào số lớp ','required');


                $this->form_validation->set_rules('makehoachtheolop','Nhập vào mã kế hoạch ','required');

                        if($this->form_validation->run())
                        {
                            $makehoachtheolops = $this ->input ->post('makehoachtheolop');

                            // lấy giá trị tên lớp
                            $mahedaotao = $this ->input ->post('mahedaotao');

                            // lấy giá trị mã lớp
                            $makhoa = $this ->input ->post('makhoa');

                            // lấy giá trị sĩ số
                            $mabomon = $this ->input ->post('mabomon');



                            $hocky = $this ->input ->post('hocky');


                            $namhoc = $this ->input ->post('namhoc');

                            $solop = $this ->input ->post('solop');

                            // lấy giá trị của activel 

                            $activel = $this ->input ->post('active');


                                                    // lây giá trị của mã khoa 


                            if($list->makehoachtheolop == $makehoachtheolops )
                            {
                                            $data = array();
                            }else
                            {
                                $input = array();

                                $input['where'] = array('makehoachtheolop' =>$makehoachtheolops);

                                $data = $this->KehoachtheolopModel->get_list($input);


                            }

                                

                                if(empty($data))
                                {
                                    $makehoachtheolops = $this ->input ->post('makehoachtheolop');

                                    
    
                                    $data = array(
                                                                'makehoachtheolop'  =>$makehoachtheolops,
                                                                'hedaotao'        =>$mahedaotao,
                                                                'khoa'            =>$makhoa,
                                                                'bomon'           =>$mabomon,
                                                                'hocky'                 => $hocky,
                                                                'namhoc'          => $namhoc,
                                                                'solop'          => $solop,
                                                                'nguoithaotac'      => $maGV,
                                                                'hienthi'           => $activel
                                                                );

                                    //kiểm tra và chạy câu lệnh inser 

                                    if($this->kehoachtheolopModel->update($id,$data))
                                    {
                                                        $this->session->set_flashdata('success','Update  thành công');
                                                        redirect(kehoach_url('kehoachtheolop'));
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

        $data['list'] = $list;
        $data['temp'] = 'admin/dulieu/kehoachtheolop/edit';
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
        
        if ($this->KehoachtheolopModel->delete($id)) {
                        # code...
                        $this->session->set_flashdata('success','Delet thành công ');

                        redirect(kehoach_url('kehoachtheolop'));
        }
        else
        {
                        
                        $this->session->set_flashdata('error',' Lỗi không thể xóa dữ liệu ');

                        redirect(kehoach_url('kehoachtheolop'));
        }
                    
    }


    // tìm kiếm theo tên
    function search()
    {
                
        $key = $this->input->get('key-search');
        

        $this->data['key'] = trim($key);
        $input = array();
        $input['like'] = array('makehoachtheolop',$key);

        $list = $this->KehoachtheolopModel->get_list($input);
        

        $data['list'] = $list;
        // hiển thị ra phần view
        $data['temp'] = 'admin/dulieu/kehoachtheolop/index';
        $this->load->view('admin/main',$data);  
    }



}


?>