<?php
defined('BASEPATH') OR exit('No direct script access allowed');
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
class Backend extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */
	// Dashboard
	function __construct(){
		parent::__construct();
        $this->load->model("m_laporan");
		$this->load->model("m_siswa");
		$this->load->model("m_pembayaran");
    }
	public function index()
	{
		$sidebar['menu'] = "";
		$sidebar['page'] = "dashboard";
		$this->load->view('template/header');
		$this->load->view('template/sidebar',$sidebar);
		$this->load->view('pages/dashboard',$data=null);
		$this->load->view('template/footer');
	}
	// end Dashboar
	// data siswa
	public function data_siswa()
	{
		$column = $this->m_siswa->get_all_column();
		$query ="";
		$query1 ="";
		$no1= 1;
		$no2 = 1;
		foreach($column as $c){
			if($no2<count($column)){
			$query .= $c->Field." ,";
			}else{
				$query .= $c->Field." ";
			}
			$no2++;
		}
		foreach($column as $d){
			if($no1<count($column)){
			$query1 .= "'" .$d->Field."', ";
			}else{
				$query1 .= "'" . $d->Field."'";
			}
			$no1++;
		}
		$data['siswa'] = $this->m_siswa->get_siswa($query);


		
		

		$sidebar['menu'] = "data master";
		$sidebar['page'] = "data siswa";
		$this->load->view('template/header');
		$this->load->view('template/sidebar',$sidebar);
		$this->load->view('pages/data_master/data_siswa',$data);
		$this->load->view('template/footer');
	}
	public function data_pembayaran()
	{
		
		$data['pembayaran'] = $this->m_pembayaran->dataPembayaran();
		$sidebar['menu'] = "data master";
		$sidebar['page'] = "data pembayaran";
		$this->load->view('template/header');
		$this->load->view('template/sidebar',$sidebar);
		$this->load->view('pages/data_master/data_pembayaran',$data);
		$this->load->view('template/footer');
	}
	public function tambah_pembayaran()
	{
		$insert = $this->m_pembayaran->insertPembayaran();
		if($insert== true){
			redirect('backend/data_pembayaran');
		}else{
			redirect('backend/data_pembayaran');
		}
	}
	public function data_kelas()
	{
		$sidebar['menu'] = "data master";
		$sidebar['page'] = "data kelas";
		$this->load->view('template/header');
		$this->load->view('template/sidebar',$sidebar);
		$this->load->view('pages/data_master/data_kelas',$data=null);
		$this->load->view('template/footer');
	}
	// end data siswa
	// pembayaran
	public function aktivasi_pembayaran()
	{
		$column = $this->m_siswa->get_all_column();
		$query ="";
		$query1 ="";
		$no1= 1;
		$no2 = 1;
		foreach($column as $c){
			if($no2<count($column)){
			$query .= $c->Field." ,";
			}else{
				$query .= $c->Field." ";
			}
			$no2++;
		}
		foreach($column as $d){
			if($no1<count($column)){
			$query1 .= "'" .$d->Field."', ";
			}else{
				$query1 .= "'" . $d->Field."'";
			}
			$no1++;
		}
		$data['siswa'] = $this->m_siswa->get_siswa($query);
		$data['kelas'] = $this->m_siswa->get_kelas($query);
		$data['pembayaran'] = $this->m_pembayaran->dataPembayaran();
	
		$sidebar['menu'] = "pembayaran";
		$sidebar['page'] = "aktivasi_pembayaran";
		$this->load->view('template/header');
		$this->load->view('template/sidebar',$sidebar);
		$this->load->view('pages/pembayaran/aktivasi',$data);
		$this->load->view('template/footer');
	}
	public function aktivasiPembayaran()
	{
		$aktivasi = $this->m_pembayaran->aktivasiPembayaran();
		if($aktivasi == true){
			redirect('backend/tagihan_pembayaran');
		}else{
			redirect('backend/tagihan_pembayaran');
		}
	}
	public function tagihan_pembayaran()
	{
		$data['tagihan'] = $this->m_pembayaran->tagihanPembayaran();
		$sidebar['menu'] = "pembayaran";
		$sidebar['page'] = "Tagihan_pembayaran";
		$this->load->view('template/header');
		$this->load->view('template/sidebar',$sidebar);
		$this->load->view('pages/pembayaran/tagihan',$data);
		$this->load->view('template/footer');
	}
	public function history_pembayaran()
	{
		$data['history'] = $this->m_pembayaran->historyPembayaran();
		$sidebar['menu'] = "pembayaran";
		$sidebar['page'] = "History_pembayaran";
		$this->load->view('template/header');
		$this->load->view('template/sidebar',$sidebar);
		$this->load->view('pages/pembayaran/history',$data);
		$this->load->view('template/footer');
	}
	// end pembayaran

	// laporan

	public function laporan()
	{
		$sidebar['menu'] = "laporan";
		$sidebar['page'] = "laporan_pembayaran";
		$this->load->view('template/header');
		$this->load->view('template/sidebar',$sidebar);
		$this->load->view('pages/laporan/laporan_keuangan',$data=null);
		$this->load->view('template/footer');
	}
	public function export(){
		$data = $this->m_laporan->get_template();
		$spreadsheet = new Spreadsheet();
		$sheet = $spreadsheet->getActiveSheet();
		$huruf = 'A';
		$num = '1';
	
		foreach($data as $i){
			$sheet->setCellValue($huruf.$num, $i->Field);
			$huruf++;
			
		}
		
		$writer = new Xlsx($spreadsheet);
		$filename = 'name-of-the-generated-file';
		header('Content-Type: application/vnd.ms-excel');
		header('Content-Disposition: attachment;filename="'. $filename .'.xlsx"');
		header('Cache-Control: max-age=0');
		$writer->save('php://output'); // download file
		}
	public function import(){
		
		
		if(isset($_FILES['upload_file']['name'])) {
		$arr_file = explode('.', $_FILES['upload_file']['name']);
		$extension = end($arr_file);
		if('csv' == $extension) {     
			$reader = new \PhpOffice\PhpSpreadsheet\Reader\Csv();
		  } else if('xls' == $extension) {     
			$reader = new \PhpOffice\PhpSpreadsheet\Reader\Xls();
		  } else     
			$reader = new \PhpOffice\PhpSpreadsheet\Reader\Xlsx();
		$spreadsheet = $reader->load($_FILES['upload_file']['tmp_name']);
		$sheetData = $spreadsheet->getActiveSheet()->toArray();
		
		$insert = 0;
		  $gagal = 0;
		for($i = 3;$i < count($sheetData);$i++)
			{
				$query1 = "insert ignore into tb_siswa values (";
				for($j = 0; $j < count($sheetData[$i]);$j++){
					if(count($sheetData[$i]) - $j == 1){
						$query1 .= '"'.$sheetData[$i][$j].'"';
					}else{
						$query1 .= '"'.$sheetData[$i][$j].'",';
					}
				}
				$query3 = ")";
				$query = $query1.$query3;	
				$import = $this->m_laporan->import_data($query);
				if($import){
					$insert++;
				}else{
					$gagal++;
				}
			}
			echo "<pre>";
			print_r("berhasil input : ".$insert."gagal : ".$gagal);
		}
	}
	public function read_siswa()
	{
	
   
	}
}
