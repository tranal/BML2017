<?php 
class my extends CI_Controller//自定义控制器
{
	public function __construct()
	{
		 parent::__construct(); //调用父类构造函数                   
		  $this->load->model('users');  //加载一项操作
	}
    public function ligong()
    {
  	echo 'this is my.php/ligong method!';
      $bm['hello']='world';
      $bm['lets']='go';
 

    $first=$this->users->huoqu();
    $result=$first->result();
    $bm['username']=$result[0]->user;
      $this->load->view('red', $bm);
    }
}
?>