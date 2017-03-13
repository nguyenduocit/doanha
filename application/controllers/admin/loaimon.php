<?php 

    class Loaimon extends MY_Controller
    {
        public function __construct()
        {
            parent::__construct();
            $this->load->library('form_validation');
            $this->load->helper('form');
            $this->load->model("LoaimonModel");
            $this->load->helper("url");
        }
        public function index()
        {
            /**
             * phân trang
             */
           
            $this->load->library('pagination');


            $total_rows = $this->LoaimonModel->get_total();

            $config = array();
            $config['base_url']    = admin_url('loaimon/index');
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

            $list = $this->LoaimonModel->get_list($input);
            $this->data['list'] = $list;

            $this->data['temp']  = 'admin/dulieu/loaimon/index';
            $this->load->view('admin/main',$this->data);
        }

        public function add ()
        {
            // kiểm tra có tồn tại người dùng 
            $maGV = isset_user($this->session->userdata('userdata'));


            $this->form_validation->set_rules('maloaimon','Mã loại môn','required');
            $this->form_validation->set_rules('tenloaimon','Tên loại môn','required');
            $this->form_validation->set_rules('quydoi','Quy đổi','required');

            if($this->input->post())
            {
                $maloaimon  = $this->input->post('maloaimon');
                $tenloaimon = $this->input->post('tenloaimon');
                $quydoi     = $this->input->post('quydoi');

                if ($this->check_ma() == FALSE)
                {
                    $this->session->set_flashdata("error","Mã loại môn đã tồn tại.");
                    redirect(admin_url('loaimon/add'));
                }

                if($this->form_validation->run())
                {
                    $data = array(
                        'maloaimon'    => $maloaimon,
                        'tenloaimon'   => $tenloaimon,
                        'quydoi'       => $quydoi,
                        'nguoithaotac' => $maGV
                    );

                    if($this->LoaimonModel->create($data))
                    {
                        $this->session->set_flashdata("success","Thêm mới thành công");
                    }
                    else
                    {
                         $this->session->set_flashdata("error","Thêm mới thất bại");
                    }
                    redirect(admin_url('loaimon'));
                }
            }
            $this->data['temp'] = 'admin/dulieu/loaimon/add';
            $this->load->view('admin/main',$this->data);
        }

        public function edit()
        {
            // lấy id được trả về
            $id =  $this->uri->rsegment(3);

            settype($id, "int");

            // kiểm tra có tồn tại giáo viên

             $maGV = isset_user($this->session->userdata('userdata'));

             $list = $this->LoaimonModel->get_info($id);

             // kiểm tra 
              if(!$list)
                {
                    $this->session->set_flashdata('error','Không tồn tại môn .');

                    redirect(admin_url('loaimon'));
                }


                if($this->input->post())
                {
                    $this->form_validation->set_rules('maloaimon','Mã loại môn','required');
                    $this->form_validation->set_rules('tenloaimon','Tên loại môn','required');
                    $this->form_validation->set_rules('quydoi','Quy đổi','required');

                    if($this->form_validation->run())
                    {
                        
                        $maloaimon  = $this->input->post('maloaimon');
                        $tenloaimon = $this->input->post('tenloaimon');
                        $quydoi     = $this->input->post('quydoi');

                        if($list->maloaimon == $maloaimon )
                            {
                                $data = array();
                            }else
                            {
                                $input = array();

                                $input['where'] = array('maloaimon' =>$maloaimon);

                                $data = $this->LoaimonModel->get_list($input);


                            }
                        if(empty($data))
                        {
                            $data = array(
                                        'maloaimon'    => $maloaimon,
                                        'tenloaimon'   => $tenloaimon,
                                        'quydoi'       => $quydoi,
                                        'nguoithaotac' => $maGV
                                    );
                            //kiểm tra và chạy câu lệnh inser 

                            if($this->LoaimonModel->update($id,$data))
                            {
                                 $this->session->set_flashdata('success','Update  thành công');
                                 redirect(admin_url('loaimon'));
                            }
                            else
                            {
                                $this->session->set_flashdata('error','Lỗi không thể update dữ liệu');

                            }
                        }else
                        {

                            
                             $this->session->set_flashdata('error','Mã loại môn đã tôn tại');



                        }
                    }
                }

            $data['list'] = $list;
            $data['temp']  = 'admin/dulieu/loaimon/edit';
            $this->load->view('admin/main',$data);
        }

        public function delete()
        {
            $id = $this->uri->rsegment(3);

            $maGV = isset_user($this->session->userdata('userdata'));

            settype($id, "int");
            
            if ($this->LoaimonModel->delete($id)) {
                # code...
                $this->session->set_flashdata('success','Delet thành công ');
                redirect(admin_url('loaimon'));
            }
            else
            {
                $this->session->set_flashdata('error',' Lỗi không thể xóa dữ liệu ');
                redirect(admin_url('loaimon'));
            }
        }

        private function check_ma()
        {
            $maloaimon  = $this->input->post('maloaimon');
            $flag  = $this->LoaimonModel->getOneFlag(array("maloaimon" => $maloaimon));
            if($flag == TRUE)
            {
                return true;
            } 
            return false;
        }
    }

 ?>