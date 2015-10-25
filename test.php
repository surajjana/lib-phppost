<?php  

require_once('post.php');

$arr_data = array('username' => '1BY12CS077');

$url = 'http://rockstat-echo.herokuapp.com/stu_data';

$obj = new PostData;

$obj->setData($url,$arr_data);

$res = $obj->setPost();

var_dump(json_decode($res));

?>
