<?php 
//luu cac thong tin member vao file excel
// $this->load->view('PHPExcel');
  base_url().'view/admin/dulieu/kekhaigiogiang/PHPExcel.php';

$objPHPExcel = new PHPExcel();
	if($this->session->userdata('excel')){
		$excel = $this->session->userdata('excel'); 
		

	}
	

$objPHPExcel->setActiveSheetIndex(0)
->setCellValue('A1', 'STT')
->setCellValue('B1', 'Học phần')
->setCellValue('C1', 'Học kỳ')
->setCellValue('D1', 'Số TC/ĐVHT')
->setCellValue('E1', 'Số tiết')
->setCellValue('F1', 'Mã lớp')
->setCellValue('G1', 'Sĩ số')
->setCellValue('H1', 'Hệ số 1 (theo sĩ số)')
->setCellValue('I1', 'Hệ số 2 (ĐH/ CĐ/ TC/ VHVL)')
->setCellValue('J1', 'Hệ số 3 (TC/NC))')
->setCellValue('K1', 'Hệ số 4 (LT/TH)')
->setCellValue('L1', 'Số giờ được tính ')
->setCellValue('M1', 'Thanh toán tiền ra đề, coi thi, chấm bài')
;


//pre($excel);
$i = 2;
// echo $excel['STT'];
//session_destroy();
foreach ( $excel as $key=> $row)
{
	// echo $row;
	//  $row['STT'];
	$objPHPExcel->setActiveSheetIndex(0)
	->setCellValue('A'.$i, $row['STT'])
	->setCellValue('B'.$i, $row['tenmonhoc'])
	->setCellValue('C'.$i, $row['hocky']);
	$i++;
}
$objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel2007');
$full_path = 'D:\data.xlsx';	
$objWriter->save($full_path);
?> 


	
	
