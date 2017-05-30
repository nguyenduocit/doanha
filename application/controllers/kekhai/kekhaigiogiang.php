<?php 
	class KeKhaiGioGiang extends MY_Controller{

		public function __construct()
		{
			parent::__construct();
            $this->load->model('PhancongModel');
            $this->load->model('ChitietphancongModel');
            $this->load->model('QuydinhModel');
            $this->load->model('AdminModel');
            $this->load->model('BomonModel');
            $this->load->model('KekhaigiogiangbomonModel');

		}

		public function index()
		{
			
            $data = array();

            $data_year = $this ->ChitietphancongModel->getYear();

            

	      // lấy id được trả về
            $id = isset_user($this->session->userdata('userdata'));

            $input['where'] = array('maGV'=>$id);
            $list_giaovien = $this->AdminModel->get_list($input);
            
            foreach($list_giaovien as $val)
            {
                  $mabomon = $val->mabomon;
                  $makhoa = $val ->makhoa;
            	$input['where'] = array('mabomon' =>$val->mabomon);
            	$val->tenbomon = $this->BomonModel->get_list($input);
            }


            $data['data_year'] = $data_year;
            $data['list_giaovien'] = $list_giaovien;
            
            // llấy ra năm học
            $namhoc = $this ->input ->post('namhoc');
            $data['namhoc'] = $namhoc;

            // kiểm tra nếu năm học tồn tại
            if( isset($namhoc) && !empty($namhoc))
            {
            	$data['namhoc'] = $namhoc;

            	$input['where'] = array('maGV'=>$id);
            	$data_phancong = $this->PhancongModel->get_list($input);
                  if(!empty($data_phancong)){

                        // lấy ra danh sách các môn được phân công cho giáo viên 
                        foreach($data_phancong as $val){
                              $list = $this->ChitietphancongModel->KeKhaiGioGiang($val->maGV,$namhoc);
                        }

                        foreach($data_phancong as $val){
                              $list_hdk = $this->ChitietphancongModel->QuyDoiHoatDongKhac($val->maGV,$namhoc,'5');
                        }
                        
                       
                            foreach($list_hdk as $vals)
                            {
                                    $ssv =  $vals ->soTCTH;
                                    if($ssv > 0)
                                    {
                                        $ssv =  $vals ->soTCTH *2 ;
                                    }else
                                    {
                                        $ssv = 4;
                                    }

                                    $tonggiohdk[] = $ssv *2;


                            }
                        

                       

                        

                        
                        $input['where'] = array('namhoc'=>$namhoc ,'maGV'=>$id);
                        $sogiochuan = $this->QuydinhModel->get_list($input);

                        $data['sogiochuan'] = $sogiochuan;


                        if (isset($list) && !empty($list)) {
                              $stt = 0;
                              $tonggio = 0;
                              foreach ($list as  $value) { 
                                    $tongsotiet = $value ->soTCLT *15 + $value ->soTCTH * 45 ;

                                    if($value ->siso > 36)
                                   {
                                        $hs1 = 1.4;
                                   }
                                   elseif( 31 < $value ->siso && $value ->siso < 36)
                                   {
                                        $hs1 = 1.2;
                                   }
                                   elseif(26< $value ->siso  && $value ->siso < 31){

                                        $hs1 = 1.1;
                                   }elseif(20 < $value ->siso && $value ->siso < 26)
                                   {
                                        $hs1 = 1;
                                   }else{
                                        $hs1 = 0.8;
                                   }

                                   $hs2 = 1; 


                                    if($value ->soTCLT >=2)
                                    {
                                        $hs3 = 1.1;
                                    }elseif($value ->soTCLT <2)
                                    {
                                        $hs3 = 1;
                                    }

                                    if($value ->soTCTH >= 0)
                                    {
                                        $hs4 = 1;
                                    }elseif($value ->soTCTH = 0)
                                    {
                                        $hs4 = 0.6;
                                    }

                                    $tonggio =  $tongsotiet* $hs1*$hs2*$hs3*$hs4;

                                    $data_tonggio[] = $tonggio ;

                                    $siso[] = $value ->siso;

                                    $chamthi[] = $value ->siso * 4000;
                              }
                              // lấy ra tổng sĩ số .
                              if(!empty($siso))
                              {
                                    $tongsiso =  array_sum($siso);
                              }else{
                                    $tongsiso = 0;
                              }
                                    
                                    // lấy ra tổng số giờ đã thực hiện được 
                              if(isset($data_tonggio) && !empty($data_tonggio))
                                { 
                                    

                                    $tonggiothuhien = array_sum($data_tonggio); 
                                    
                                }else
                                { 

                                    $tonggiothuhien =  0;
                                } 

                              // tổng số giờ tiêu chuẩn của giáo viên 
                                    $sum = 0;
                                  if(isset($sogiochuan)&& !empty($sogiochuan))
                                  {
                                      foreach($sogiochuan as $val)
                                      {
                                           $sum = $sum + $val->sogiochuan;

                                          

                                      }

                                  }else{

                                  }

                              // kiểm tra nếu thông tin giáo viên tồn tại trong bảng KekhaigiogiangbomonModel
                              $input['where'] = array('idgv'=>$id , 'namhoc' =>$namhoc);
                              $data_gv = $this->KekhaigiogiangbomonModel->get_list($input);
                              if(empty($data_gv))
                              {
                                    $data = array(
                                                'idgv' =>$id,
                                                'siso' =>$tongsiso,
                                                'mabomon' => $mabomon,
                                                'makhoa' => $makhoa,
                                                'sogiotieuchuan'=>$sum,
                                                'sogiothuchien'=>$tonggiothuhien + array_sum($tonggiohdk),
                                                'namhoc'=>$namhoc,
                                          );

                                    if($this->KekhaigiogiangbomonModel->create($data))
                                    {
                                        
                                    }
                                    else
                                    {
                                       

                                    }
                              }else
                              {
                                    foreach($data_gv as $val ) 
                                    {
                                          $idbm = $val->id;
                                    }

                                    $data = array(
                                        'idgv' =>$id,
                                        'siso' =>$tongsiso,
                                        'mabomon' => $mabomon,
                                        'makhoa' => $makhoa,
                                        'sogiotieuchuan'=>$sum,
                                        'sogiothuchien'=>$tonggiothuhien + array_sum($tonggiohdk),
                                        'namhoc'=>$namhoc,
                                          );

                                    if($this->KekhaigiogiangbomonModel->update($idbm,$data))
                                    {
                                        
                                    }
                              }
                              
                        }
                              
                        
                  }
                  else{
                        $list = '';
                         $this->session->set_flashdata('error','Giáo viên chưa có dữ liệu phân công.');
                  }

                  
            	  
	               //$list_hdk = $this->KekhaigiogiangbomonModel->QuyDoiHoatDongKhac('4');
                 //pre($list_hdk);
	            
                  $data['list_hdk'] = $list_hdk;
                  $data['sogiochuan'] = $sogiochuan;
                  $data['data_year'] = $data_year;
                  $data['list_giaovien'] = $list_giaovien;
                  $data['list'] = $list;
              }

            $data['temp'] ="admin/dulieu/kekhaigiogiang/index";
            $this->load->view('admin/main',$data);
		}

    public function xuatExcel(){

      
            $data['temp'] ="admin/dulieu/kekhaigiogiang/xport";
            $this->load->view('admin/main',$data);
    }

	}
?>
