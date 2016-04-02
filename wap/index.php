<?php
include_once('lib/tbs_class.php');
include_once('param.php');


function show(){
	global $connect;
	$TBS=new clsTinyButStrong;
	$TBS->LoadTemplate('liste.wml');
	$sql="select * from shopping where Valider=0";
	$TBS->MergeBlock('lst',$connect,$sql);

	header("Content-type: text/vnd.wap.wml");  

	header("Expires: Mon, 26 Jul 1997 05:00:00 GMT");              
	// expires in the past
	header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");   
	// Last modified, right now
	header("Cache-Control: no-cache, must-revalidate");              
	// Prevent caching, HTTP/1.1
	header("Pragma: no-cache");                                
	// Prevent caching, HTTP/1.0


	$TBS->Show();
}

function delete(){
	global $connect;
	$sql="truncate shopping;";
	mysql_query($sql);

}

function buy($id){
	global $connect;
	$sql="update shopping set Valider=-1 where id=".$id;
	mysql_query($sql);

}

function add($id, $desc, $state){
	global $connect;
	$sql="insert into shopping(id, description, Valider) values (".$id.", '";
	$sql=$sql.$desc."', ".$state.");";
	mysql_query($sql);
	

}
$connect=mysql_connect($mysql_host,$mysql_user,$mysql_passwd);
mysql_select_db($mysql_base,$connect);

if(isset($_GET['action'])){

	switch($_GET['action']){
		case 'delete':
			delete();				 
			break;
		case 'buy':
			buy($_GET['id']);
			show();
			break;
		case 'add':
			add($_GET["id"],$_GET['desc'],$_GET['state']);
			break;
		default:
			show();
			break;
	}
}else{
	show();
	break;

}

?>
