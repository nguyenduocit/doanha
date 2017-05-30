<?php 
class Kehoachtheolop extends MY_Controller
{
    public function __construct()
    {
        /*
            Load ra các model 
        */
        parent::__construct();
        $this->load->model('ChuyennganhModel');
        $this->load->model('KehoachtheolopModel');
        $this->load->model('ChitietkehoachtheolopModel');
        $this->load->model('MonhocModel');
        $this->load->model('HedaotaoModel');
        $this->load->model('LopModel');
        $this->load->model('AdminModel');

    }

    /*
        Lấy ra danh sách kế hoạch
    */
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
                        

                // lấy ra danh sách khoa 
                    $list = $this->KehoachtheolopModel->getKeHoachTheoLop($segment ,$config['per_page']);
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
                    
            // kiểm tra giá trị form người dùng đã nhập 
            $this->form_validation->set_rules('machuyennganh','Bạn cần chọn vào mã chuyên ngành ','required');
            $this->form_validation->set_rules('lop','Bạn cần chọn lớp  ','required');
            $this->form_validation->set_rules('makehoachtheolop','Nhập vào mã kế hoạch ','required');
            $this->form_validation->set_rules('mahedaotao','Chọn mã hệ đào tạo ','required');
            
            

            if($this->form_validation->run())
            {
                // lấy ra dữ liệu từ form             
                $makehoachtheolops = $this ->input ->post('makehoachtheolop');
               
                $machuyennganh = $this ->input ->post('machuyennganh');

                $namhoc = $this ->input ->post('namhoc');

                $malop = $this ->input ->post('lop');

                $mahedaotao = $this ->input ->post('mahedaotao');

                $activel = $this ->input ->post('active');

               



                // lây giá trị của mã khoa 

                $where = " makehoachtheolop = '".$makehoachtheolops."' OR malop = '".$malop."'";

                $data = $this->KehoachtheolopModel->get_or($where);

              
                    if(empty($data))
                    {
                                    

                        $data = array(
                                        'makehoachtheolop'  =>$makehoachtheolops,
                                        'machuyennganh'     =>$machuyennganh,
                                        'malop'             =>$malop,
                                        'mahedaotao'        =>$mahedaotao,
                                        'namhoc'            => $namhoc,
                                        'nguoithaotac'      => $maGV,
                                        
                                       
                                        );


                        //pre($data);

                        //kiểm tra và chạy câu lệnh inser 

                        if($this->KehoachtheolopModel->create($data))
                        {

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

        $list_hedaotao = $this->HedaotaoModel->get_list();
        $data['list_hedaotao'] = $list_hedaotao;
        
        $list_chuyennganh = $this->ChuyennganhModel->get_list();
        $data['list_chuyennganh'] = $list_chuyennganh;

        $data['temp'] = 'admin/dulieu/kehoachtheolop/add';
        $this->load->view('admin/main',$data);  
    }

    /*
        add kế hoạch theo lớp
    */
    public function addKeHoachLop()
    {
        // id lớp trả về 
        $id =  $this->uri->rsegment(3);
        settype($id,"int");

        // kiểm tra có tồn tại người dùng 
        $maGV = isset_user($this->session->userdata('userdata'));

        $input= array();
        $input['where'] = array('id' =>$id);

        // lấy ra thông tin lớp cần lập kế hoạch
        $list_kehoachtheolop = $this->KehoachtheolopModel->get_list($input);
        

        $data['list_kehoachtheolop'] = $list_kehoachtheolop;

        // nếu kế hoạch của lớp  k tồn tại
        if(!$list_kehoachtheolop)
        {
            $this->session->set_flashdata('error','Không tồn tại kế hoạch - không thể lập kế hoạch cho chuyên ngành .');
            // chuyển về trang kế hoạch chung
            redirect(kehoach_url('kehoachtheolop'));
        }

        foreach ($list_kehoachtheolop as  $value) 
        {
            $makehoachtheolop = $value->makehoachtheolop;
            $malop            = $value ->malop;
            $mahedaotao       = $value ->mahedaotao;
            $namhoc          = $value ->namhoc;
          
           
        }
      
        if($this->input->post())
        {
            $this->form_validation->set_rules('machuyennganhs','Bạn cần chọn vào mã chuyên ngành ','required');
            $this->form_validation->set_rules('hocky','Bạn cần chọn học kỳ  ','required');
            $this->form_validation->set_rules('monhoc','Chọn môn học ','required');
            if($this->form_validation->run())
            {
                
                
                $mamonhoc = $this->input->post('monhoc');
                $hocky = $this->input->post('hocky');

                $data = array(

                    'makehoachtheolop' => $makehoachtheolop,
                    'mamonhoc '        => $mamonhoc,
                    'malop'            => $malop,
                    'hocky'            =>  $hocky,
                    'namhoc'            =>  $namhoc,
                    'nguoithaotac'     =>  $maGV

                    );


                 if($this->ChitietkehoachtheolopModel->create($data))
                    {

                        $this->session->set_flashdata('success','Insert  thành công');
                        redirect(kehoach_url('kehoachtheolop/addKeHoachLop/').$id);
                    }
                    else
                    {
                        $this->session->set_flashdata('error','Lỗi không thể insert dữ liệu');

                    }

            }
        }
        
        // xuất dữ liệu 
        

        $input['where'] = array('malop' =>$malop);
        // lấy ra thông tin lớp cần lập kế hoạch
        $lop = $this->LopModel->get_list($input);

        // gửi thông tin lớp qua view
        $data['lop'] = $lop;


        // lấy ra dữ liệu về hệ đào tạo 
        $input['where'] = array('mahedaotao ' =>$mahedaotao);
        // lấy ra thông tin lớp cần lập kế hoạch
        $hedaotao = $this->HedaotaoModel->get_list($input);
        // gửi thông tin lớp qua view
        $data['hedaotao'] = $hedaotao;

        $list_chuyennganh = $this->ChuyennganhModel->get_list();
        $data['list_chuyennganh'] = $list_chuyennganh;

        $list_monhoc = $this->MonhocModel->get_list();
        $data['list_monhoc'] = $list_monhoc;

        $list = $this->ChitietkehoachtheolopModel->viewChitietKeHoachLop($makehoachtheolop);
        $data['list'] = $list;

        // lưu dữ liệu tên giáo viên giảng dạy vào mảng
        foreach ($list as $key => $value) {
            # code...
            $where = array('maGV' =>$value->giaovien);
            $value->tengiaovien = $this->AdminModel->get_info_rule($where ,'hoten');
        }

        $data['temp'] = 'admin/dulieu/kehoachtheolop/addkehoachlop';
        $this->load->view('admin/main',$data);  

    }

    /*
        Lấy ra danh sách kế hoạch theo lớp
    */
 public function viewKeHoachLop()
    {
        // id lớp trả về 
        $id =  $this->uri->rsegment(3);
        settype($id,"int");

        // kiểm tra có tồn tại người dùng 
        $maGV = isset_user($this->session->userdata('userdata'));

        $input= array();
        
        

        // lấy ra thông tin lớp cần lập kế hoạch
        $list_kehoachtheolop = $this->KehoachtheolopModel->get_list($input);
        

        $data['list_kehoachtheolop'] = $list_kehoachtheolop;

        // nếu kế hoạch của lớp  k tồn tại
        if(!$list_kehoachtheolop)
        {
            $this->session->set_flashdata('error','Không tồn tại kế hoạch - không thể lập kế hoạch cho chuyên ngành .');
            // chuyển về trang kế hoạch chung
            redirect(kehoach_url('kehoachtheolop'));
        }

        foreach ($list_kehoachtheolop as  $value) 
        {
            $makehoachtheolop = $value->makehoachtheolop;
           $malop            = $value ->malop;
           $mahedaotao       = $value ->mahedaotao;
            $data['namhoc'] = $value->namhoc;
           
        }

     
        // xuất dữ liệu 
        $input['where'] = array('malop' =>$malop);
        // lấy ra thông tin lớp cần lập kế hoạch
        $lop = $this->LopModel->get_list($input);

        // gửi thông tin lớp qua view
        $data['lop'] = $lop;


        // lấy ra dữ liệu về hệ đào tạo 
        $input['where'] = array('mahedaotao ' =>$mahedaotao);
        // lấy ra thông tin lớp cần lập kế hoạch
        $hedaotao = $this->HedaotaoModel->get_list($input);
        // gửi thông tin lớp qua view
        $data['hedaotao'] = $hedaotao;
      
        $list = $this->ChitietkehoachtheolopModel->viewChitietKeHoachLop($makehoachtheolop);
        //pre($list);
        $data['list'] = $list;

        // lưu dữ liệu tên giáo viên giảng dạy vào mảng
        foreach ($list as $key => $value) {
            # code...
            $where = array('maGV' =>$value->giaovien);
            $value->tengiaovien = $this->AdminModel->get_info_rule($where ,'hoten');
        }

        $data['temp'] = 'admin/dulieu/kehoachtheolop/chitietkhlop';
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

        foreach ($data as  $value) {
            # code...
            
            echo '<option  id="'.$value ->mamonhoc.'" malop="'.$value ->mamonhoc.'"  value="'.$value ->mamonhoc.'">'.$value ->tenmonhoc.'</option>';
        }
       
        
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

            // lấy ra dữ liệu  bảng kế hoạch theo lớp gửi qua from edit 
            $list = $this->KehoachtheolopModel->get_info($id);

            // kiểm tra 
                if(!$list)
                {
                        $this->session->set_flashdata('error','Không tồn tại kế hoạch .');

                        redirect(kehoach_url('kehoachtheolop'));
                }
            // lấy mã chuyên ngành
            $machuyennganh = $list ->machuyennganh;

            $input = array();
            $input['where'] = array('machuyennganh'=>$machuyennganh);

            // lấy dữ liệu từ bảng lớp với mã chuyên ngành có đc 
            $list_lop = $this->LopModel->get_list($input);

            $data['list_lop'] = $list_lop;

            $input['where'] = array('machuyennganh'=>$machuyennganh);
            // lấy ra dữ liệu từ bảng môn học mới mã chuyên ngành cho trước 
            $list_monhoc = $this->MonhocModel->get_list($input);

            $data['list_monhoc'] = $list_monhoc;

            

            // kiểm tra khi người dùng kích vào  
        if($this->input->post())
        {
            // kiểm tra giá trị form người dùng đã nhập 
            $this->form_validation->set_rules('machuyennganh','Bạn cần chọn vào mã chuyên ngành ','required');
            $this->form_validation->set_rules('lop','Bạn cần chọn lớp  ','required');
            $this->form_validation->set_rules('makehoachtheolop','Nhập vào mã kế hoạch ','required');
            $this->form_validation->set_rules('mahedaotao','Chọn mã hệ đào tạo ','required');
            
            if($this->form_validation->run())
            {
                 // lấy ra dữ liệu từ form             
                $makehoachtheolops = $this ->input ->post('makehoachtheolop');
               
                $machuyennganh = $this ->input ->post('machuyennganh');

                $namhoc = $this ->input ->post('namhoc');

                $malop = $this ->input ->post('lop');

                $mahedaotao = $this ->input ->post('mahedaotao');

                $activel = $this ->input ->post('active');

                


                // kiểm tra xem mã kế hoạch có bị trùng hay không
                if($list->makehoachtheolop == $makehoachtheolops )
                {
                    $data = array();
                }else
                {
                    $input = array();

                    $input['where'] = array('makehoachtheolop' =>$makehoachtheolops);

                    $data = $this->KehoachtheolopModel->get_list($input);


                }

                    // nếu mảng trống ta thực hiện update
                    if(empty($data))
                    {
                        $makehoachtheolops = $this ->input ->post('makehoachtheolop');

                        

                         $data = array(
                                        'makehoachtheolop'  =>$makehoachtheolops,
                                        'machuyennganh'     =>$machuyennganh,
                                        'malop'             =>$malop,
                                        'mahedaotao'        =>$mahedaotao,
                                        'namhoc'            => $namhoc,
                                        'nguoithaotac'      => $maGV,
                                        
                                        
                                        );

                        //kiểm tra và chạy câu lệnh update

                        if($this->KehoachtheolopModel->update($id,$data))
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
        
        // lấy ra danh sách chuyên ngành
        $list_chuyennganh = $this->ChuyennganhModel->get_list();
        $data['list_chuyennganh'] = $list_chuyennganh;


        $data['list'] = $list;
        $data['temp'] = 'admin/dulieu/kehoachtheolop/edit';
        $this->load->view('admin/main',$data);   
    }


    /*
         Xóa thông tin 
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


    function delete_Ajax()
    {
        $id = $_POST['id'];

        $maGV = isset_user($this->session->userdata('userdata'));

        settype($id, "int");
        
        
        if ($this->ChitietkehoachtheolopModel->delete($id)) {
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

        $list = $this->KehoachtheolopModel->seachKeHoachTheoLop($key);
        

        $data['list'] = $list;
        // hiển thị ra phần view
        $data['temp'] = 'admin/dulieu/kehoachtheolop/index';
        $this->load->view('admin/main',$data);  
    }


    function search_view()
    {

        $key = $this->input->get('key-search');
        

        $key = trim($key);

        $list = $this->ChitietkehoachtheolopModel->seach_view($key);
        

        $data['list'] = $list;
        // hiển thị ra phần view
        $data['temp'] = 'admin/dulieu/kehoachtheolop/chitietkhlop';
        $this->load->view('admin/main',$data);  

    }



}


?>