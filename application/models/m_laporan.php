<?php if(!defined('BASEPATH')) exit('No direct script allowed');
class M_laporan extends CI_Model{
    function get_all(){
        return $this->db->get("tb_siswa")->result_array();
    }
	public function get_template()
	{
		$data = $this->db->query('SHOW FIELDS FROM tb_siswa')->result();
		return $data;
	}
	public function import_data($query)
	{
		
		if ($this->db->query($query)) {
		
		}
	}
}
