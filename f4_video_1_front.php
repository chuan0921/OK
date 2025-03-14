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
        <!--內容開始-->
        <div class="btn-group" role="group" aria-label="Basic radio toggle button group" style="margin-left: 35%;margin-top: 10px; margin-bottom: 10px; font-family:DFKai-sb;">
            <input type="radio" class="btn-check" name="btnradio" id="btnradio1" autocomplete="off" onclick="javascript:location.href='f4_video_1_front.php'" checked>
            <label class="btn btn-outline-primary" for="btnradio1">正面</label>

            <input type="radio" class="btn-check" name="btnradio" id="btnradio2" autocomplete="off" onclick="javascript:location.href='f4_video_1_back.php'">
            <label class="btn btn-outline-primary" for="btnradio2">背面</label>
        </div>
        <!--選擇身體部位-->
        <div class="container" style="height:300px">
            <div class="row">
                <div class="col-3">
                    <div class="row " style="justify-content:center;">
                        <div class="col-3" style="padding : 0px;">
                            <input type="checkbox" class="choose_btn" style="width:85%; margin: 2px;"></input>
                        </div>
                        <div class="col-9" style="padding : 0px; text-align:center;">
                            <p class="choose_btn">頭部</p>
                        </div>
                    </div>
                    <div class="row " style="justify-content:center; margin-top: 20px;">
                        <div class="col-3" style="padding : 0px;">
                            <input type="checkbox" class="choose_btn" style="width:85%; margin: 2px;"></input>
                        </div>
                        <div class="col-9" style="padding : 0px; text-align:center; ">
                            <p class="choose_btn">頸部</p>
                        </div>
                    </div>
                    <div class="row " style="justify-content:center; margin-top: 5px;">
                        <div class="col-3" style="padding : 0px;">
                            <input type="checkbox" class="choose_btn" style="width:85%; margin: 2px;"></input>
                        </div>
                        <div class="col-9" style="padding : 0px; text-align:center;">
                            <p class="choose_btn">胸部</p>
                        </div>
                    </div>
                    <div class="row " style="justify-content:center; margin-top: 5px;">
                        <div class="col-3" style="padding : 0px;">
                            <input type="checkbox" class="choose_btn" style="width:85%; margin: 2px;"></input>
                        </div>
                        <div class="col-9" style="padding : 0px; text-align:center;">
                            <p class="choose_btn">腹部</p>
                        </div>
                    </div>
                    <div class="row " style="justify-content:center; margin-top: 15px;">
                        <div class="col-3" style="padding : 0px;">
                            <input type="checkbox" class="choose_btn" style="width:85%; margin: 2px;"></input>
                        </div>
                        <div class="col-9" style="padding : 0px; text-align:center;">
                            <p class="choose_btn">下腹</p>
                        </div>
                    </div>
                    <div class="row " style="justify-content:center; margin-top: 30px;">
                        <div class="col-3" style="padding : 0px;">
                            <input type="checkbox" class="choose_btn" style="width:85%; margin: 2px;"></input>
                        </div>
                        <div class="col-9" style="padding : 0px; text-align:center;">
                            <p class="choose_btn">足部</p>
                        </div>
                    </div>
                </div>
                <div class="col-9">
                    <div class="row">
                        <div class="col-8">
                            <div class="row">
                                <img src="./image/body_front.png" style="height:100%;padding : 0px; margin-top: 15px;">
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="row " style="justify-content:center;">
                                <div class="col-3" style="padding : 0px;">
                                    <input type="checkbox" class="choose_btn" style="width:85%; margin: 2px;"></input>
                                </div>
                                <div class="col-9" style="padding : 0px; text-align:center;">
                                    <p class="choose_btn">全身</p>
                                </div>
                            </div>
                            <div class="row" style="justify-content:center;">
                                <div class="col-3" style="padding : 0px;">
                                    <input type="checkbox" class="choose_btn" style="width:85%; margin: 2px;"></input>
                                </div>
                                <div class="col-9" style="padding : 0px; text-align:center;">
                                    <p class="choose_btn">皮膚</p>
                                </div>
                            </div>
                            <div class="row" style="justify-content:center;">
                                <div class="col-3" style="padding : 0px;">
                                    <input type="checkbox" class="choose_btn" style="width:85%; margin: 2px;"></input>
                                </div>
                                <div class="col-9" style="padding : 0px; text-align:center;">
                                    <p class="choose_btn">心理</p>
                                </div>
                            </div>
                            <div class="row" style="justify-content:center; margin-top: 30px;">
                                <div class="col-3" style="padding : 0px;">
                                    <input type="checkbox" class="choose_btn" style="width:85%; margin: 2px;"></input>
                                </div>
                                <div class="col-9" style="padding : 0px; text-align:center;">
                                    <p class="choose_btn">心肺</p>
                                </div>
                            </div>
                            <div class="row" style="justify-content:center; margin-top: 10px;">
                                <div class="col-3" style="padding : 0px;">
                                    <input type="checkbox" class="choose_btn" style="width:85%; margin: 2px;"></input>
                                </div>
                                <div class="col-9" style="padding : 0px; text-align:center;">
                                    <p class="choose_btn">手部</p>
                                </div>
                            </div>
                            <div class="row" style="justify-content:center; margin-top: 40px;">
                                <div class="col-3" style="padding : 0px;">
                                    <input type="checkbox" class="choose_btn" style="width:85%; margin: 2px;"></input>
                                </div>
                                <div class="col-9" style="padding : 0px; text-align:center;">
                                    <p class="choose_btn">腿部</p>
                                </div>
                            </div>
                        </div>
                    </div> 
                </div>
            </div>
        </div>
        <!--內容結束-->
        <!--上一頁 下一頁-->
        <div class="container" style="margin-top:15px;">
                <div class="row">
                    <div class="col" style="padding-left:37%; padding-right:37%;">
                        <button class="change_page_btn" onclick="javascript:location.href='f4_video_2_symptom.php'">下一頁</button>
                    </div>
                </div>
            </div>
        </form><!--form結束--> 
            <div class="container">
                <div class="row">
                    <div class="col" style="padding-left:37%; padding-right:37%;">
                        <button class="change_page_btn" onclick="javascript:location.href='home.php'">上一頁</button>
                    </div>
                </div>    
            </div> 
    </body>
</html>