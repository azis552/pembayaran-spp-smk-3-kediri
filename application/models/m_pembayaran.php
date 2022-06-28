<?php if(!defined('BASEPATH')) exit('No direct script allowed');
class M_pembayaran extends CI_Model{
    public function insertPembayaran()
	{
		$keterangan = $_POST['keterangan'];
		$nominal = $_POST['nominal'];
		$status = $_POST['status'];
		$insert = $this->db->query('insert into tb_data_pembayaran (keterangan,nominal,status) values ("'.$keterangan.'","'.$nominal.'","'.$status.'")');
		if($insert){
			return true;
		}else{
			return false;
		}

	}
	public function dataPembayaran()
	{
		$this->db->select('*');
		$this->db->from('tb_data_pembayaran');
		$data = $this->db->get()->result();
		return $data;
	}
	public function aktivasiPembayaran()
	{
		$kelas = $_POST['kelas'];
		$nisn = $_POST['nisn'];
		;
		$id_pembayaran = $_POST['pembayaran'];
		if($kelas == "null" && $nisn != null){
			$data = $this->db->query("insert into tb_tagihan (nisn,id_pembayaran) values ('".$nisn."','".$id_pembayaran."')");
		}elseif($nisn == "null" && $kelas != null){
			$siswa = $this->db->query("select * from tb_siswa where kelas='".$kelas."'")->result();
			foreach($siswa as $i){
				$data = $this->db->query("insert into tb_tagihan (nisn,id_pembayaran) values ('".$i->nisn."','".$id_pembayaran."')");
			}
		}
		if($data){
			return true;
		}else{
			return false;
		}

	}
	public function tagihanPembayaran()
	{
		$data = $this->db->query('select tb_siswa.nisn,nama,kelas,keterangan,nominal from tb_siswa,tb_data_pembayaran,tb_tagihan where tb_siswa.nisn = tb_tagihan.nisn and tb_tagihan.id_pembayaran = tb_data_pembayaran.id');
		return $data->result();
	}
	public function updateTagihan($nisn,$order_id)
	{
		$data = $this->db->query('update tb_tagihan set order_id="'.$order_id.'" where nisn="'.$nisn.'"');
		
	}
	public function historyPembayaran()
	{
		$data = $this->db->query('SELECT tb_bayar.`order_id`, tb_siswa.`nama`,keterangan,nominal,gross_amount,payment_type,transaction_time,bank,va_number,pdf_url,status_code
		FROM tb_siswa,tb_data_pembayaran,tb_tagihan,tb_bayar
		WHERE tb_siswa.`nisn` = tb_tagihan.`nisn`
		AND tb_tagihan.`id_pembayaran` = tb_data_pembayaran.`id`
		AND tb_tagihan.`order_id` = `tb_bayar`.`order_id`');
		return $data->result();
	}
	
}
