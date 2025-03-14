<!--
<iframe class="video" src="https://www.youtube.com/embed/h_3hPE_PPiA" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
-->


<!--
<iframe width="560" height="315" <?php 
echo 'src="https://www.youtube.com/embed/h_3hPE_PPiA" '
?>  title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
-->


<!--////////////////////-->
<iframe width="560" height="315" <?php 

$part_name = 1;
$mysqli = new mysqli('localhost', 'root', '', 'ok');
$sql = "select url from video where part_name = $part_name ";
//echo sql;
$result = mysqli_query($mysqli,$sql);
$catch = $result->fetch_assoc();
    echo $catch['url'];

?>  title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>






<?php
    /*
    require_once("mysql_connect.php");
    $sql="select* from video";
    $resulturl = mysqli_query($link,$sql);
    if($list1 = mysqli_fetch_array($resulturl))
        {echo $list1['url'];}
    */

    $mysqli = new mysqli('localhost', 'root', '', 'ok');
    $sql = "select* from video";
    $result = $mysqli->query($sql);
    $catch = $result->fetch_assoc();
    echo $catch['url'];


    $mysqli = new mysqli('localhost', 'root', '', 'ok');
    $sql = "select* from video";
    $result = mysqli_query($mysqli,$sql);
    $catch = $result->fetch_assoc();
    echo $catch['url'];
?>


