<?php 

    class Hedaotao extends MY_Controller
    {
        public function __construct()
        {
            parent::__construct();
            $this->load->library('form_validation');
            $this->load->helper('form');
            $this->load->model("HedaotaoModel");
            $this->load->helper("url");
        }

        public function index()
        {
            $input = array();   
            
            
            // khởi tạo phân trang
            $this->load->library('pagination');
            $total_rows = $this->HedaotaoModel->get_total();
            // $controller = $this->uri->segment(3);
            // _debug($controller); die();
            $config = array();
            $config['base_url']    = admin_url('hedaotao/index');
            $config['total_rows']  = $total_rows;
            $config['per_page']    = 10;
            $config['uri_segment'] = 4;
            $config['next_link']   = "Next";
            $config['prev_link']   = "Previous";
            $this->pagination->initialize($config);


            $segment = $this->uri->segment(4);
            $segment = intval($segment);
            $input = array();
            $input['limit'] = array($config['per_page'],$segment );

            // lấy ra danh sách khoa 
            $list = $this->HedaotaoModel->get_list($input);
            // gán truyền danh sách các khoa sang view 
            $data['list'] = $list;

            $this->data['list'] = $list;
            $this->data['temp']  = 'admin/dulieu/hedaotao/index';

            $this->load->view('admin/main',$this->data);
        }

        public function add()
        {
            $maGV = isset_user($this->session->userdata('userdata'));



            // kiểm tra có tồn tại người dùng 
            

            if($this->input->post())
            {

                $this->form_validation->set_rules('mahedaotao','Mã hệ đào tao','required');



                $this->form_validation->set_rules('tenhedaotao','Tên hệ đào tao','required');
                

               


                if($this->form_validation->run())
                {

                    $mahedaotao  = $this->input->post('mahedaotao');
                    $tenhedaotao = $this->input->post('tenhedaotao');
                    $active      = $this->input->post('active');
                    $soky        = $this->input->post('soky');
                    $heso        = $this->input->post('heso');

                     if ($this->check_ma() == FALSE)
                        {
                            $this->session->set_flashdata("error","Mã hệ đào tạo đã tồn tại");
                            redirect(admin_url('hedaotao/add'));
                        }

                    $data = array(
                        'mahedaotao'  => $mahedaotao,
                        'tenhedaotao' => $tenhedaotao,
                        'hienthi'      => $active,
                        'soky'        => $soky,
                        'hs2'         => $heso,
                        'nguoithaotac'=> $maGV
                    );

                    if($this->HedaotaoModel->create($data))
                    {
                        $this->session->set_flashdata("success","Thêm mới thành công");
                    }
                    else
                    {
                         $this->session->set_flashdata("error","Thêm mới thất bại");
                    }
                    redirect(admin_url('hedaotao'));
                    /**
                     * thêm mới 
                     */
                }
                
            }

            $data['temp'] = 'admin/dulieu/hedaotao/add';
            $this->load->view('admin/main',$data);
        }

        public function edit()
        {

             // kiểm tra có tồn tại người dùng 
            $maGV = isset_user($this->session->userdata('userdata'));


            // lấy id được trả về
            $id =  $this->uri->rsegment(3);

            // kiểm tra có tồn tại của mã  hệ đào tạo theo id

            $hedaotaoEdit = $this->HedaotaoModel->get_info($id);
            
            // kiểm tra 
            if(!$hedaotaoEdit)
            {
                $this->session->set_flashdata('error','Không tồn hệ đào tạo trong CSDL .');
                redirect(admin_url('hedaotao'));
            }

            $this->form_validation->set_rules('mahedaotao','Mã hệ đào tao','required');
            $this->form_validation->set_rules('tenhedaotao','Tên hệ đào tao','required');

            if($this->input->post())
            {
                $mahedaotao  = $this->input->post('mahedaotao');
                $tenhedaotao = $this->input->post('tenhedaotao');
                $active      = $this->input->post('active');
                $soky        = $this->input->post('soky');
                $heso        = $this->input->post('heso');

                if($this->form_validation->run())
                {
                    $data = array(
                        'tenhedaotao' => $tenhedaotao,
                        'hienthi'      => $active,
                        'soky'        => $soky,
                        'hs2'         => $heso,
                        'nguoithaotac'=> $maGV
                    );

                    if ($mahedaotao == $hedaotaoEdit->mahedaotao)
                    {
                        $data['mahedaotao']  = $mahedaotao;
                    }
                    else
                    {
                        if ($this->check_ma() == FALSE)
                        {
                            $this->session->set_flashdata("error","Mã hệ đào tạo đã tồn tại");
                            redirect(admin_url('hedaotao/edit/').$id);
                        }
                        else
                        {
                            $data['mahedaotao']  = $mahedaotao;
                        }
                    }

                    if($this->HedaotaoModel->update($id,$data))
                    {
                         $this->session->set_flashdata('success','Update  thành công');
                         redirect(admin_url('hedaotao'));
                    }
                    else
                    {
                        $this->session->set_flashdata('error','Lỗi không thể update dữ liệu');
                        redirect(admin_url('hedaotao/edit'));

                    }
                }
            }



            $data['hedaotaoEdit'] = $hedaotaoEdit;
            $data['temp'] = 'admin/dulieu/hedaotao/edit';
            $this->load->view('admin/main',$data);


        }

        public function delete()
        {
            // lấy id cần xóa
            $id = $this->uri->rsegment(3);

            settype($id, "int");
            
            if ($this->HedaotaoModel->delete($id)) {
                # code...
                $this->session->set_flashdata('success','Delet thành công ');
                redirect(admin_url('hedaotao'));
            }
            else
            {
                $this->session->set_flashdata('error',' Lỗi không thể xóa dữ liệu ');
                redirect(admin_url('hedaotao'));
            }

        }

        private function check_ma()
        {
            $mahedaotao  = $this->input->post('mahedaotao');
            $flag  = $this->HedaotaoModel->getOneFlag(array("mahedaotao" => $mahedaotao));
            if($flag == TRUE)
            {
                return true;
            } 
            return false;
        }

        // tìm kiếm theo tên
        function search()
        {
           
           $key = $this->input->get('key-search');
            

            $this->data['key'] = trim($key);
            $input = array();
            $input['like'] = array('tenhedaotao',$key);
         
            $list = $this->HedaotaoModel->get_list($input);
            

            $data['list'] = $list;
            // hiển thị ra phần view
            $data['temp'] = 'admin/dulieu/hedaotao/index';
            $this->load->view('admin/main',$data);  
        }
    }

 ?>