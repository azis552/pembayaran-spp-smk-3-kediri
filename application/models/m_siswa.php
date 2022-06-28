<?php if(!defined('BASEPATH')) exit('No direct script allowed');
class M_siswa extends CI_Model{
    function get_all_column(){
        return $this->db->query("SHOW FULL COLUMNS FROM tb_siswa WHERE COMMENT LIKE 'show'")->result();
    }
	function get_siswa($query = null){
		return $this->db->query("select ".$query."from tb_siswa")->result();
	}
	function get_kelas($query = null){
		return $this->db->query("select ".$query."from tb_siswa group by kelas")->result();
	}
	public function dataSiswa($nisn)
	{
		return $this->db->query("select * from tb_siswa where nisn='".$nisn."'")->result();
	}
	
	
}
