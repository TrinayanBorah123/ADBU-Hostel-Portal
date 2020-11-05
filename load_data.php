<?php
include('db.php');
$id=$_POST['id'];
$type=$_POST['type'];

if($type=='room'){
	$sql="select id,room from room where type_id='$id'";
}
$stmt=$con->prepare($sql);
$stmt->execute();
$arr=$stmt->fetchAll(PDO::FETCH_ASSOC);
$html='';
foreach($arr as $list){
	$html.='<option value='.$list['id'].'>'.$list['room'].'</option>';
}
echo $html;
?>
