<?php  

require_once('post.php');

$arr_data = array('class_id' => 'BMSIT_CSE_7_B' );

$url = 'http://rockstat-echo.herokuapp.com/stu_classfac';

$obj = new PostData;

$obj->setData($url,$arr_data);

$res = $obj->setPost();

var_dump(json_decode($res));

?>