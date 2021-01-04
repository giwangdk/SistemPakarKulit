<?php
include 'koneksi.php';
if(isset($_POST['submit'])){

	$qry='select id from tb_gejala where ';
	array_pop($_POST);
	$rule_input=array();
	foreach ($_POST as $where) {
		$qry.=$where."=1 and ";
		array_push($rule_input,$where);
	}
	$qry.="1=1";
	$data=mysqli_query($kon,$qry);
	$id='';

	$db_rule=mysqli_query($kon,"select * from tb_gejala");
	while ($d=mysqli_fetch_array($db_rule)) {
		$arr_rule[]=$d;
	}
	
	$rule=array();
	for ($i=0; $i <sizeof($arr_rule) ; $i++) { 
		$key=array_keys($arr_rule[$i]);
		$val=$arr_rule[$i];
		$sub_rule=array();
		for($j=3;$j<(sizeof($key));$j+=2){
			if($val[$key[$j]]==1)
				$sub_rule[]=$key[$j];
		}
		$rule[]=$sub_rule;
	}
	$status=false;


	for ($i=0; $i <sizeof($rule); $i++) {
		$result=($rule_input==$rule[$i]);
		if ($result) {
			$status=true;
		}
	}

	if($status==true){
		while ($d=mysqli_fetch_array($data)) {
			$id=$d['id'];
		}
		$cari_penyakit="select * from tb_penyakit where id=$id";
		$db=mysqli_query($kon,$cari_penyakit);
		while ($d=mysqli_fetch_array($db)) {
			$penyakit=$d['penyakit'];
			$info=$d['info'];
			$solusi=$d['solusi'];
			include 'hasil.php';
		}

	}else{
		include 'error.php';
	}
}
?>
