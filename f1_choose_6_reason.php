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
            <img src="./image/f1_title.png" style="width:100%;">
        </button>
        <!--功能標題-->
        <table>
            <tr>
                <td>
                    <img src="./image/waterdrop.png" style="width:85%;">
                </td>
                <td>
                    <p class="function_title">請問您是什麼原因造成有這樣的症狀呢？(可複選)</p>
                </td>
            </tr>
        </table>    
        <!--內容開始-->
        <form method="get" action="f1_choose_6_reason2.php">  
            <!--選單-->
            <select name="f1_reason" id="details" size="5" multiple="multiple" 
                style="width:88%; height: 88%;margin-left:20px; margin-top:20px; font-size:20px; font-family:DFKai-sb;">
                <option value="1">憋尿</option>
                <option value="2">水分攝取不足</option>
                <option value="3">水分攝取過多</option>
                <option value="4">尿道感染病史</option>
                <option value="5">骨盆底肌肉功能失調</option>
                <option value="6">膀胱發炎</option>
                <option value="7">攝取過多咖啡因</option>
                <option value="8">攝取過多糖分</option> 
                <option value="9">攝取過多酒精</option> 
            </select>
            <!--其他：-->
            <div class="container" style="margin-top: 20px;">
                <div class="row">
                    <div class="col " 
                        style="padding: 0px; font-size:20px; font-family:DFKai-sb; text-align:center; margin-left: 25px;margin-top: 5px;">
                        其他：
                    </div>
                    <div class="col" style="padding: 0px; margin-right: 50px;">
                        <input class="form-control" type="text" maxlength="15" style="padding: 5px;" >
                    </div>
                </div>
            </div>
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
                        <button class="change_page_btn" onclick="javascript:location.href='f1_choose_5_change.php'">上一頁</button>
                    </div>
                </div>    
            </div>
    </body>
</html>