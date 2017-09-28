<?php 
class users extends CI_Model
{
	public function __construct()
	{
		$this->load->database();//数据库
	}
	public function huoqu()
	{
		$a=$this->db->get('users');//get 后加表名字
		return $a;
	}
}
 ?>
