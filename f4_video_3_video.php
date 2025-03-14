<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="./style.css"/>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
        <title>Old Care, OK!</title>
        <link rel="shortcut icon" href="./image/blackOK.ico" type="image/x-icon">
    </head>
    <body class="bg_color">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
        <button class="function_title_btn" onclick="javascript:location.href='home.php'">
            <img src="./image/f4_title.png" style="width:100%;">
        </button>
        <table>
            <tr>
                <td>
                    <img src="./image/waterdrop.png" style="width:85%;">
                </td>
                <td>
                    <p class="function_title">舒緩症狀影片</p>
                </td>
            </tr>
        </table>    
        <!--嵌入yt影片-->
        <!--
        <iframe class="video" src="https://www.youtube.com/embed/h_3hPE_PPiA" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        -->
        
        <iframe class="video" 
            <?php 
                session_start();
                //echo $_SESSION['F4_symptom'];
                $symptom_session = $_SESSION['F4_symptom'];
                //echo $symptom_session;
                $mysqli = new mysqli('localhost', 'root', '', 'ok');
                $sql = "select url from f4_video where symptom = $symptom_session ";
                echo sql;
                $result = mysqli_query($mysqli,$sql);
                $catch = $result->fetch_assoc();
                    echo $catch['url'];
            ?>  
        title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen>
        </iframe>


        <!--上一頁 下一頁-->
        <div class="container">
            <div class="row">
                <div class="col" style="margin-left: 30%;">
                    <button class="change_page_btn" onclick="javascript:location.href='f4_video_2_symptom.php'">上一頁</button>
                </div>
            </div>    
        </div> 
    </body>
</html>