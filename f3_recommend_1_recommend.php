<!doctype html>
<html>
    <head>
        <meta charset='utf-8'>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="./style.css"/>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
        <title>OK</title>
        <link rel="shortcut icon" href="./image/blackOK.ico" type="image/x-icon">
    </head>
    <body class="bg_color">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
        <button class="function_title_btn" onclick="javascript:location.href='home.php'">
            <img src="./image/f3_title.png" style="width:100%;">
        </button>
        <!--功能標題-->
        <table>
            <tr>
                <td>
                    <img src="./image/waterdrop.png" style="width:85%;">
                </td>
                <td>
                    <p class="function_title">推薦科別</p>
                </td>
            </tr>
        </table>
        <!--內容開始-->
        <button class="recommend_page_btn" onclick="javascript:location.href='f3_recommend_2_symptom.php'">感染科</button>
        <button class="recommend_page_btn" onclick="javascript:location.href='f3_recommend_2_symptom.php'">腎臟內科</button>
        <table class="history_page" width=100% style="TEXT-ALIGN:CENTER;">
            <tr style="background-color:#e8b8ac;">
                <th>歷史紀錄</th><th>症狀</th>
            </tr>
            <!--跑回圈要整個TR去跑-->
            <tr style="text-align:center ;">
                <td style="border-color:#e8b8ac; border-width: 1px; border-left-color: #fff4e9;">2022年12月02日</td>
                <td style="border-color:#e8b8ac; border-width: 1px; border-right-color: #fff4e9;">膀胱脹痛</td>
            </tr>  
            <tr style="text-align:center ;">
                <td style="border-color:#e8b8ac; border-width: 1px; border-left-color: #fff4e9;">2022年12月01日</td>
                <td style="border-color:#e8b8ac; border-width: 1px; border-right-color: #fff4e9;">膀胱脹痛</td>
            </tr> 
            <tr style="text-align:center ;">
                <td style="border-color:#e8b8ac; border-width: 1px; border-left-color: #fff4e9;">2022年11月29日</td>
                <td style="border-color:#e8b8ac; border-width: 1px; border-right-color: #fff4e9;">排尿困難</td>
            </tr> 
        </table>
        <!--內容結束-->
        <!--上一頁 下一頁-->
        <div class="container">
            <div class="row">
                <div class="col" style="margin-left: 30%;">
                    <button class="change_page_btn" onclick="javascript:location.href='home.php'">上一頁</button>
                </div>
            </div>    
        </div> 
    </body>
</html>