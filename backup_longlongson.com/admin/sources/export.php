<?php	if(!defined('_source')) die("Error");
	

	// Bat dau export excel
	/** PHPExcel */
	include 'PHPExcel.php';
	/** PHPExcel_Writer_Excel */
	include 'PHPExcel/Writer/Excel5.php';
	// Create new PHPExcel object
	$objPHPExcel = new PHPExcel();
	
	// Set properties
	$objPHPExcel->getProperties()->setCreator("Nguyen Thanh Tam");
	$objPHPExcel->getProperties()->setLastModifiedBy("Nguyen Thanh Tam");
	$objPHPExcel->getProperties()->setTitle("Office 2007 XLSX Test Document");
	$objPHPExcel->getProperties()->setSubject("Office 2007 XLSX Test Document");
	$objPHPExcel->getProperties()->setDescription("Document for Office 2007 XLSX, generated using PHP classes.");
	
	
	// Add some data
	$objPHPExcel->setActiveSheetIndex(0);
	$objPHPExcel->setActiveSheetIndex( 0 )->mergeCells( 'A1:L1' );
	$objPHPExcel->getActiveSheet()->getRowDimension( '1' )->setRowHeight( 42 );
	$objPHPExcel->getActiveSheet()->getRowDimension( '2' )->setRowHeight( 25 );
	
	$objPHPExcel->getActiveSheet()->getStyle( 'A1' )->applyFromArray( array( 'font' => array( 'color' => array( 'rgb' => 'e97d13' ),'name' => 'Tahoma', 'bold' => true, 'italic' => false, 'size' => 14 ), 'alignment' => array( 'horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_CENTER, 'vertical' => PHPExcel_Style_Alignment::VERTICAL_CENTER, 'wrap' => true ),'fill' => array('type' => PHPExcel_Style_Fill::FILL_SOLID,'color' => array('rgb'=>'c2def0'))));
	
	$objPHPExcel->getActiveSheet()->getColumnDimension( 'A' )->setWidth( 30 );
	$objPHPExcel->getActiveSheet()->getColumnDimension( 'B' )->setWidth( 30 );
	$objPHPExcel->getActiveSheet()->getColumnDimension( 'C' )->setWidth( 30 );
	$objPHPExcel->getActiveSheet()->getColumnDimension( 'D' )->setWidth( 30 );
	$objPHPExcel->getActiveSheet()->getColumnDimension( 'E' )->setWidth( 30 );
	$objPHPExcel->getActiveSheet()->getColumnDimension( 'F' )->setWidth( 30 );
	$objPHPExcel->getActiveSheet()->getColumnDimension( 'G' )->setWidth( 30 );
	$objPHPExcel->getActiveSheet()->getColumnDimension( 'H' )->setWidth( 30 );
	$objPHPExcel->getActiveSheet()->getColumnDimension( 'I' )->setWidth( 30 );
	$objPHPExcel->getActiveSheet()->getColumnDimension( 'J' )->setWidth( 30 );
	$objPHPExcel->getActiveSheet()->getColumnDimension( 'K' )->setWidth( 30 );
	$objPHPExcel->getActiveSheet()->getColumnDimension( 'L' )->setWidth( 30 );
	
	   
	$objPHPExcel->setActiveSheetIndex( 0 )->setCellValue( 'A1', 'DANH SÁCH ĐƠN HÀNG' );
	
		$objPHPExcel->setActiveSheetIndex( 0 )->setCellValue( 'A2', 'Mã đơn hàng' )->setCellValue( 'B2', 'Mã vận đơn' )->setCellValue( 'C2', 'Phí dịch vụ' )->setCellValue( 'D2', 'Thành viên' )->setCellValue( 'E2', 'Họ tên' )->setCellValue( 'F2', 'Email' )->setCellValue( 'G2', 'Điện thoại' )->setCellValue( 'H2', 'Địa chỉ' )->setCellValue( 'I2', 'Nội dung' )->setCellValue( 'J2', 'Số tiền' )->setCellValue( 'K2', 'Tình trạng' )->setCellValue( 'L2', 'Tình trạng giao hàng' );
		
		$objPHPExcel->getActiveSheet()->getStyle( 'A2' )->applyFromArray( array( 'font' => array( 'color' => array( 'rgb' => 'FFFFFF' ), 'name' => 'Tahoma', 'bold' => false, 'italic' => false, 'size' => 12 ), 'alignment' => array( 'horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_CENTER, 'vertical' => PHPExcel_Style_Alignment::VERTICAL_CENTER, 'wrap' => true ),'fill' => array('type' => PHPExcel_Style_Fill::FILL_SOLID,'color' => array('rgb'=>'0D8BF9'))));
	 
	   $objPHPExcel->getActiveSheet()->getStyle( 'B2' )->applyFromArray( array( 'font' => array( 'color' => array( 'rgb' => 'FFFFFF' ), 'name' => 'Tahoma', 'bold' => false, 'italic' => false, 'size' => 12 ), 'alignment' => array( 'horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_CENTER, 'vertical' => PHPExcel_Style_Alignment::VERTICAL_CENTER, 'wrap' => true ),'fill' => array('type' => PHPExcel_Style_Fill::FILL_SOLID,'color' => array('rgb'=>'0D8BF9'))));
	   
	   $objPHPExcel->getActiveSheet()->getStyle( 'C2' )->applyFromArray( array( 'font' => array( 'color' => array( 'rgb' => 'FFFFFF' ), 'name' => 'Tahoma', 'bold' => false, 'italic' => false, 'size' => 12 ), 'alignment' => array( 'horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_CENTER, 'vertical' => PHPExcel_Style_Alignment::VERTICAL_CENTER, 'wrap' => true ),'fill' => array('type' => PHPExcel_Style_Fill::FILL_SOLID,'color' => array('rgb'=>'0D8BF9'))));
	   
	   $objPHPExcel->getActiveSheet()->getStyle( 'D2' )->applyFromArray( array( 'font' => array( 'color' => array( 'rgb' => 'FFFFFF' ), 'name' => 'Tahoma', 'bold' => false, 'italic' => false, 'size' => 12 ), 'alignment' => array( 'horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_CENTER, 'vertical' => PHPExcel_Style_Alignment::VERTICAL_CENTER, 'wrap' => true ),'fill' => array('type' => PHPExcel_Style_Fill::FILL_SOLID,'color' => array('rgb'=>'0D8BF9'))));
	   
	   $objPHPExcel->getActiveSheet()->getStyle( 'E2' )->applyFromArray( array( 'font' => array( 'color' => array( 'rgb' => 'FFFFFF' ), 'name' => 'Tahoma', 'bold' => false, 'italic' => false, 'size' => 12 ), 'alignment' => array( 'horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_CENTER, 'vertical' => PHPExcel_Style_Alignment::VERTICAL_CENTER, 'wrap' => true ),'fill' => array('type' => PHPExcel_Style_Fill::FILL_SOLID,'color' => array('rgb'=>'0D8BF9'))));
	  
	  $objPHPExcel->getActiveSheet()->getStyle( 'F2' )->applyFromArray( array( 'font' => array( 'color' => array( 'rgb' => 'FFFFFF' ), 'name' => 'Tahoma', 'bold' => false, 'italic' => false, 'size' => 12 ), 'alignment' => array( 'horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_CENTER, 'vertical' => PHPExcel_Style_Alignment::VERTICAL_CENTER, 'wrap' => true ),'fill' => array('type' => PHPExcel_Style_Fill::FILL_SOLID,'color' => array('rgb'=>'0D8BF9'))));
	  
	  $objPHPExcel->getActiveSheet()->getStyle( 'G2' )->applyFromArray( array( 'font' => array( 'color' => array( 'rgb' => 'FFFFFF' ), 'name' => 'Tahoma', 'bold' => false, 'italic' => false, 'size' => 12 ), 'alignment' => array( 'horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_CENTER, 'vertical' => PHPExcel_Style_Alignment::VERTICAL_CENTER, 'wrap' => true ),'fill' => array('type' => PHPExcel_Style_Fill::FILL_SOLID,'color' => array('rgb'=>'0D8BF9'))));

	  $objPHPExcel->getActiveSheet()->getStyle( 'H2' )->applyFromArray( array( 'font' => array( 'color' => array( 'rgb' => 'FFFFFF' ), 'name' => 'Tahoma', 'bold' => false, 'italic' => false, 'size' => 12 ), 'alignment' => array( 'horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_CENTER, 'vertical' => PHPExcel_Style_Alignment::VERTICAL_CENTER, 'wrap' => true ),'fill' => array('type' => PHPExcel_Style_Fill::FILL_SOLID,'color' => array('rgb'=>'0D8BF9'))));
	  $objPHPExcel->getActiveSheet()->getStyle( 'I2' )->applyFromArray( array( 'font' => array( 'color' => array( 'rgb' => 'FFFFFF' ), 'name' => 'Tahoma', 'bold' => false, 'italic' => false, 'size' => 12 ), 'alignment' => array( 'horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_CENTER, 'vertical' => PHPExcel_Style_Alignment::VERTICAL_CENTER, 'wrap' => true ),'fill' => array('type' => PHPExcel_Style_Fill::FILL_SOLID,'color' => array('rgb'=>'0D8BF9'))));
	  $objPHPExcel->getActiveSheet()->getStyle( 'J2' )->applyFromArray( array( 'font' => array( 'color' => array( 'rgb' => 'FFFFFF' ), 'name' => 'Tahoma', 'bold' => false, 'italic' => false, 'size' => 12 ), 'alignment' => array( 'horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_CENTER, 'vertical' => PHPExcel_Style_Alignment::VERTICAL_CENTER, 'wrap' => true ),'fill' => array('type' => PHPExcel_Style_Fill::FILL_SOLID,'color' => array('rgb'=>'0D8BF9'))));
	  $objPHPExcel->getActiveSheet()->getStyle( 'K2' )->applyFromArray( array( 'font' => array( 'color' => array( 'rgb' => 'FFFFFF' ), 'name' => 'Tahoma', 'bold' => false, 'italic' => false, 'size' => 12 ), 'alignment' => array( 'horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_CENTER, 'vertical' => PHPExcel_Style_Alignment::VERTICAL_CENTER, 'wrap' => true ),'fill' => array('type' => PHPExcel_Style_Fill::FILL_SOLID,'color' => array('rgb'=>'0D8BF9'))));
	  $objPHPExcel->getActiveSheet()->getStyle( 'L2' )->applyFromArray( array( 'font' => array( 'color' => array( 'rgb' => 'FFFFFF' ), 'name' => 'Tahoma', 'bold' => false, 'italic' => false, 'size' => 12 ), 'alignment' => array( 'horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_CENTER, 'vertical' => PHPExcel_Style_Alignment::VERTICAL_CENTER, 'wrap' => true ),'fill' => array('type' => PHPExcel_Style_Fill::FILL_SOLID,'color' => array('rgb'=>'0D8BF9'))));
		
		$vitri=3;
		
		$d->reset();
		$sql="select * from table_donhang order by id desc";
		$d->query($sql);
		$result=$d->result_array();	
		for($j=0,$count=count($result);$j<$count;$j++) { 
		
		if($result[$j]['id_tv']>0)
		{
			$tmptv=get_info($result[$j]['id_tv'],'thanhvien');
			$thanhvien=$tmptv['username'];
		}
		else
		{
			$thanhvien='Khách vãng lai';
		}

		$sql="select trangthai from #_tinhtrang where id= '".$result[$j]['trangthai']."' ";
		$d->query($sql);
		$tmptt=$d->fetch_array();
		$trangthai=$tmptt['trangthai'];

		$objPHPExcel->setActiveSheetIndex( 0 )->setCellValue( 'A'.$vitri,$result[$j]['madonhang'])->setCellValue( 'B'.$vitri,$result[$j]['OrderCode'] )->setCellValue( 'C'.$vitri, $result[$j]['TotalFee'])->setCellValue('D'.$vitri, $thanhvien)->setCellValue('E'.$vitri, $result[$j]['hoten'])->setCellValue('F'.$vitri, $result[$j]['email'])->setCellValue('G'.$vitri, $result[$j]['dienthoai'])->setCellValue('H'.$vitri, $result[$j]['diachi'])->setCellValue('I'.$vitri, $result[$j]['noidung'])->setCellValue('J'.$vitri, $result[$j]['tonggia'])->setCellValue('K'.$vitri, $trangthai)->setCellValue('L'.$vitri, $result[$j]['CurrentStatus']);
			
		$objPHPExcel->getActiveSheet()->getStyle( 'A'.$vitri )->applyFromArray( array( 'alignment' => array( 'horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_CENTER, 'vertical' => PHPExcel_Style_Alignment::VERTICAL_CENTER, 'wrap' => true ) ) );
		$objPHPExcel->getActiveSheet()->getStyle( 'B'.$vitri )->applyFromArray( array( 'alignment' => array( 'horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_CENTER, 'vertical' => PHPExcel_Style_Alignment::VERTICAL_CENTER, 'wrap' => true ) ) );
		$objPHPExcel->getActiveSheet()->getStyle( 'C'.$vitri )->applyFromArray( array( 'alignment' => array( 'horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_CENTER, 'vertical' => PHPExcel_Style_Alignment::VERTICAL_CENTER, 'wrap' => true ) ) );
		$objPHPExcel->getActiveSheet()->getStyle( 'D'.$vitri )->applyFromArray( array( 'alignment' => array( 'horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_CENTER, 'vertical' => PHPExcel_Style_Alignment::VERTICAL_CENTER, 'wrap' => true ) ) );
		$objPHPExcel->getActiveSheet()->getStyle( 'E'.$vitri )->applyFromArray( array( 'alignment' => array( 'horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_CENTER, 'vertical' => PHPExcel_Style_Alignment::VERTICAL_CENTER, 'wrap' => true ) ) );
		$objPHPExcel->getActiveSheet()->getStyle( 'F'.$vitri )->applyFromArray( array( 'alignment' => array( 'horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_CENTER, 'vertical' => PHPExcel_Style_Alignment::VERTICAL_CENTER, 'wrap' => true ) ) );
		$objPHPExcel->getActiveSheet()->getStyle( 'G'.$vitri )->applyFromArray( array( 'alignment' => array( 'horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_CENTER, 'vertical' => PHPExcel_Style_Alignment::VERTICAL_CENTER, 'wrap' => true ) ) );
		$objPHPExcel->getActiveSheet()->getStyle( 'H'.$vitri )->applyFromArray( array( 'alignment' => array( 'horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_CENTER, 'vertical' => PHPExcel_Style_Alignment::VERTICAL_CENTER, 'wrap' => true ) ) );
		$objPHPExcel->getActiveSheet()->getStyle( 'I'.$vitri )->applyFromArray( array( 'alignment' => array( 'horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_CENTER, 'vertical' => PHPExcel_Style_Alignment::VERTICAL_CENTER, 'wrap' => true ) ) );
		$objPHPExcel->getActiveSheet()->getStyle( 'J'.$vitri )->applyFromArray( array( 'alignment' => array( 'horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_CENTER, 'vertical' => PHPExcel_Style_Alignment::VERTICAL_CENTER, 'wrap' => true ) ) );
		$objPHPExcel->getActiveSheet()->getStyle( 'K'.$vitri )->applyFromArray( array( 'alignment' => array( 'horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_CENTER, 'vertical' => PHPExcel_Style_Alignment::VERTICAL_CENTER, 'wrap' => true ) ) );
		$objPHPExcel->getActiveSheet()->getStyle( 'L'.$vitri )->applyFromArray( array( 'alignment' => array( 'horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_CENTER, 'vertical' => PHPExcel_Style_Alignment::VERTICAL_CENTER, 'wrap' => true ) ) );
		$objPHPExcel->getActiveSheet()->getStyle('C'.$vitri)->getNumberFormat()->setFormatCode("#,##0 _€");
		$objPHPExcel->getActiveSheet()->getStyle('J'.$vitri)->getNumberFormat()->setFormatCode("#,##0 _€");
		$objPHPExcel->getActiveSheet()->getStyle('B'.$vitri)->getNumberFormat()->setFormatCode('0000');
		$vitri++;	
		}

		
	// Rename sheet
	$objPHPExcel->getActiveSheet()->setTitle('Danh sach don hang');
	
			
	// Save Excel 2007 file
	//$objWriter = new PHPExcel_Writer_Excel5($objPHPExcel);
	//$objWriter->save(str_replace('.php', '.xls', __FILE__));
	
	//Redirect output to a client’s web browser (Excel5)
	  header( 'Content-Type: application/vnd.ms-excel' );
	  header( 'Content-Disposition: attachment;filename="danhsachdonhang_'.date('d_m_Y').'.xls"' );
	  header( 'Cache-Control: max-age=0' );

	  $objWriter = new PHPExcel_Writer_Excel5($objPHPExcel);
	  $objWriter->save( 'php://output' );	
		
?>