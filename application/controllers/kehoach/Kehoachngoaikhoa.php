<?php 
	class Kehoachngoaikhoa extends MY_Controller
	{
		public function __construct()
		{
			parent::__construct();
			$this->load->model('LopModel');
            $this->load->model('MonhocModel');
            $this->load->model('KehoachngoaikhoaModel');
            $this->load->model('AdminModel');
		}

		public function index()
		{

			$list  = $this->KehoachngoaikhoaModel->showKeHoachNgoaiKhoa();
			//pre($list);
			$data['list'] = $list;
			$data['temp'] = 'admin/dulieu/kehoachngoaikhoa/index';
			$this->load->view('admin/main',$data);

		}

		public function add()
		{

			$maGV = isset_user($this->session->userdata('userdata'));


			if($this->input->post())
            {
            	$this->form_validation->set_rules('giaovien','Chọn giáo viên phân công','required');
            	$this->form_validation->set_rules('lop','Chọn lớp phân công','required');
            	$this->form_validation->set_rules('hocky','Chọn học kỳ ','required');
                $this->form_validation->set_rules('monhoc','Chọn học môn học ','required');
                if($this->form_validation->run())
                {
                	$giaovien = $this ->input ->post('giaovien');
                	$lop = $this ->input ->post('lop');
                    $monhoc = $this ->input ->post('monhoc');
                    $hocky = $this ->input ->post('hocky');
                    $namhoc = $this ->input ->post('namhoc');

                    $data = array(
                    		'magv' =>$giaovien,
                    		'malop' =>$lop,
                    		'hocky' =>$hocky,
                    		'mamon' =>$monhoc,
                    		'namhoc' =>$namhoc,
                    		'nguoithaotac' =>$maGV,

                    	);

                    if($this->KehoachngoaikhoaModel->create($data))
                        {
                            // gửi thông báo
                            $this->session->set_flashdata('success','Insert  thành công');
                            redirect(kehoach_url('kehoachngoaikhoa'));
                             
                        }
                        else
                        {
                            $this->session->set_flashdata('error','Lỗi không thể insert dữ liệu');

                        }

                }
            }

			$list_giaovien = $this->AdminModel->get_list();
			$data['list_giaovien'] = $list_giaovien;

			$lop = $this->LopModel->get_list();
			$data['lop'] = $lop;

			$input['where'] = array('maloaimon' =>1);
			$monhoc = $this->MonhocModel->get_list($input);
			$data['monhoc'] = $monhoc;

			$data['temp'] = 'admin/dulieu/kehoachngoaikhoa/add';
			$this->load->view('admin/main',$data);
		}

		public function edit()
		{
			$id = $this->uri->rsegment(3);

	        $maGV = isset_user($this->session->userdata('userdata'));

	        settype($id, "int");

	        $list = $this->KehoachngoaikhoaModel->get_info($id);


			// kiểm tra 
				if(!$list)
				{
					$this->session->set_flashdata('error','Không tồn tại kế hoạch .');

					redirect(kehoach_url('kehoachngoaikhoa'));
				}
				 $data['list'] =  $list;

			if($this->input->post())
            {
            	$this->form_validation->set_rules('giaovien','Chọn giáo viên phân công','required');
            	$this->form_validation->set_rules('lop','Chọn lớp phân công','required');
            	$this->form_validation->set_rules('hocky','Chọn học kỳ ','required');
                $this->form_validation->set_rules('monhoc','Chọn học môn học ','required');
                if($this->form_validation->run())
                {
                	$giaovien = $this ->input ->post('giaovien');
                	$lop = $this ->input ->post('lop');
                    $monhoc = $this ->input ->post('monhoc');
                    $hocky = $this ->input ->post('hocky');
                    $namhoc = $this ->input ->post('namhoc');

                    $data = array(
                    		'magv' =>$giaovien,
                    		'malop' =>$lop,
                    		'hocky' =>$hocky,
                    		'mamon' =>$monhoc,
                    		'namhoc' =>$namhoc,
                    		'nguoithaotac' =>$maGV,

                    	);

                    if($this->KehoachngoaikhoaModel->update($id,$data))
                        {
                            // gửi thông báo
                            $this->session->set_flashdata('success','Update thành công');
                            redirect(kehoach_url('kehoachngoaikhoa'));
                             
                        }
                        else
                        {
                            $this->session->set_flashdata('error','Lỗi không thể update dữ liệu');

                        }

                }
            }

			$list_giaovien = $this->AdminModel->get_list();
			$data['list_giaovien'] = $list_giaovien;

			$lop = $this->LopModel->get_list();
			$data['lop'] = $lop;

			$input['where'] = array('maloaimon' =>1);
			$monhoc = $this->MonhocModel->get_list($input);
			$data['monhoc'] = $monhoc;

			$data['temp'] = 'admin/dulieu/kehoachngoaikhoa/edit';
			$this->load->view('admin/main',$data);
		}
	}
?>