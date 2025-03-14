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
        <!--功能標題-->
        <table>
            <tr>
                <td>
                    <img src="./image/waterdrop.png" style="width:85%;">
                </td>
                <td>
                    <p class="function_title">請您選擇想緩解不適的症狀</p>
                </td>
            </tr>
        </table> 
        <!--內容開始-->
        <form method="get" action="f4_video_2_symptom2.php">  
            <!--選單-->
            <select name="f4_symptom" id="details" size="5" multiple="multiple" 
                style="width:88%; height: 88%;margin-left:20px; margin-top:20px; font-size:20px; font-family:DFKai-sb;">
                <option value="1">肌肉抽蓄</option>
                <option value="2">肌肉張力異常</option>
                <option value="3">大小腿有抽筋感</option>
                <option value="4">大小腿有酸痛感</option>
                <option value="5">大小腿有麻痺感</option>
                <option value="6">大小腿有腫脹感</option>
            </select>
        
        <!--內容結束-->   
            <!--上一頁 下一頁-->
            <div class="container" style="margin-top:15px;">
                <div class="row">
                    <div class="col" style="padding-left:37%; padding-right:37%;">
                        <button class="change_page_btn" >下一頁</button>
                    </div>
                </div>
            </div>
        </form><!--form結束--> 
            <div class="container">
                <div class="row">
                    <div class="col" style="padding-left:37%; padding-right:37%;">
                        <button class="change_page_btn" onclick="javascript:location.href='f4_video_1_front.php'">上一頁</button>
                    </div>
                </div>    
            </div> 
    </body>
</html>