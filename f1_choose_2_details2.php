<html>
	<?php
		date_default_timezone_set('Asia/Taipei');
		$f1_details_get =  $_GET["f1_details"];
		require_once("mysql_connect.php");
		$time = date("Y-m-d H:i:s");
        echo $f1_details_get;
        //echo $time;

        /*
        //之前sql查詢
		insert into f4_record2 values ('.$time.','.$body1.','.$body2.','.$body3.','.$body4.','.$body5.','.$body6.',.$pain.)
        //之前php語法
        "insert into f4_record2 values ('".$time."','".$body1."','".$body2."','".$body3."','".$body4."','".$body5."','".$body6."',".$pain.")"
        //sql查詢
        insert into f4_record_2_symptom values ('.$time.',.$pain.)
        //之前php語法
        "insert into f4_record_2_symptom values ('".$time."',".$pain.")"
        */

		$sql_insert="insert into f1_record_2_details values ('".$time."',".$f1_details_get.")";
        echo $sql_insert;
        mysql_query($sql_insert);
		//echo "<script>alert('儲存成功')</script>";
	?>
	<meta charset="utf8">
    <meta http-equiv="refresh" content="0;url=f1_choose_3_symptom.php">
	<?php
		session_start();
		$_SESSION['F1_details'] = $_GET["f1_details"];
        echo $_SESSION['F1_details'];
    ?>
</html>
