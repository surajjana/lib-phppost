<?php  

require_once('post.php');

$arr_data = array('username' => 'admin', 'pwd' => 'admin' );

$url = 'http://rock.herokuapp.com/login';

$obj = new PostData;

$obj->setData($url,$arr_data);

$res = $obj->setPost();

var_dump(json_decode($res));

?>