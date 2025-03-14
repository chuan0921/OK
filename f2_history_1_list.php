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
            <img src="./image/f2_title.png" style="width:100%;">
        </button>
        <!--功能標題-->
        <table>
            <tr>
                <td>
                    <img src="./image/waterdrop.png" style="width:85%;">
                </td>
                <td>
                    <p class="function_title">看診清單</p>
                </td>
            </tr>
        </table>
        <!--內容開始-->
        <table class="history_page" width=100% style="TEXT-ALIGN:CENTER;">
            <TR style="background-color:#e8b8ac; border-color:#e8b8ac; border-width: 1px;">
                <TH colspan=2>個人資訊</TH>
            </TR>
            <TR style="text-align:left ;">
               <TD style="border-color:#e8b8ac; border-width: 1px; border-left-color: #fff4e9;">過敏藥物</TD>
               <TD style="border-color:#e8b8ac; border-width: 1px; border-right-color: #fff4e9;">MEFETON F.C.</TD>
            </TR>  
            <TR style="text-align:left ;">
                <TD style="border-color:#e8b8ac; border-width: 1px; border-left-color: #fff4e9;">家族史</TD>
                <TD style="border-color:#e8b8ac; border-width: 1px; border-right-color: #fff4e9;">心臟病</TD>
            </TR>  
            <TR style="text-align:left ;">
                <TD style="border-color:#e8b8ac; border-width: 1px; border-left-color: #fff4e9;">特殊疾病</TD>
                <TD style="border-color:#e8b8ac; border-width: 1px; border-right-color: #fff4e9;">妥瑞氏症</TD>
            </TR>  
            <TR style="text-align:left ;">
                <TD style="border-color:#e8b8ac; border-width: 1px; border-left-color: #fff4e9;">目前用藥</TD>
                <TD style="border-color:#e8b8ac; border-width: 1px; border-right-color: #fff4e9;">無</TD>
            </TR>  
            <TR style="text-align:left ;">
                <TD style="border-color:#e8b8ac; border-width: 1px; border-left-color: #fff4e9;">過去病史</TD>
                <TD style="border-color:#e8b8ac; border-width: 1px; border-right-color: #fff4e9;">蕁麻疹</TD>
            </TR>  
            <TR style="text-align:left ;">
                <TD style="border-color:#e8b8ac; border-width: 1px; border-left-color: #fff4e9; border-bottom-color:#fff4e9;">住院史</TD>
                <TD style="border-color:#e8b8ac; border-width: 1px; border-right-color: #fff4e9; border-bottom-color:#fff4e9;">無</TD>
            </TR>
        </table>
        <table BORDER=0 class="history_page" WIDTH=100% STYLE="TEXT-ALIGN:CENTER">
            <TR style="background-color:#e8b8ac;">
                <TH>歷史紀錄</TH>
            </TR>
            <!--跑回圈要整個TR去跑-->
            <TR style="text-align:center ;"STYLE="TEXT-ALIGN:CENTER;">
                <TD style="border-color:#fff4e9; border-width: 1px; border-top-color:#e8b8ac;">
                    <button class="date_btn" onclick="javascript:location.href='f2_history_2_record.php'">2022年12月02日</button>
                </TD>
            </TR>
            <TR style="text-align:center ;"STYLE="TEXT-ALIGN:CENTER;">
                <TD style="border-color:#fff4e9; border-width: 1px; border-top-color:#e8b8ac;">
                    <button class="date_btn" onclick="javascript:location.href='f2_history_2_record.php'">2022年12月01日</button>
                </TD>
            </TR>
            <TR style="text-align:center ;"STYLE="TEXT-ALIGN:CENTER;">
                <TD style="border-color:#fff4e9; border-width: 1px; border-top-color:#e8b8ac;">
                    <button class="date_btn" onclick="javascript:location.href='f2_history_2_record.php'">2022年11月29日</button>
                </TD>
            </TR>
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