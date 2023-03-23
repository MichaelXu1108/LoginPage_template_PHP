<?php
/*
** filename: login.php
** description: 範例PHP網路應用程式登入頁
** author: Brian Tao | brian.tao@informc.com
** modification history:
**** 2017.07.20: created
*/

include_once("../library/config.php");
?>
<html>
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

  <title><?php echo $config['sys_title']; ?></title>
  <!-- <link rel="stylesheet" href="../css/global.css" />    -->
  <link href="../assets/css/bootstrap.min.css" rel="stylesheet">
  <link href="../assets/css/font-awesome.min.css" rel="stylesheet">
  <link href="../assets/css/style.css" rel="stylesheet"> 
  <link rel="stylesheet" href="https://cdn.staticfile.org/twitter-bootstrap/3.3.7/css/bootstrap.min.css">

</head>
<body>
<section class="form-02-main">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="_lk_de">
              <div class="form-03-main">
                <div class="logo">
                  <img src="../assets/images/user.png">
                </div>
                <h1 style="text-align:center;">後台管理系統</h1>
                <br>
                <p style="text-align:center;">測試可用帳號及密碼</p>
                <p style="text-align:center;">0001/0001, 0002/0002, 0003/0003, 0004/0004 或 0005/0005</p>

                <br>

                <form name="formLogin" id="formLogin" method="POST">
                  帳號 <input type="text" name="memId" id="memId" class="form-control _ge_de_ol" placeholder="輸入帳號" >
                  <br>
                  密碼 <input type="password" name="memPwd" id="memPwd" class="form-control _ge_de_ol" placeholder="輸入密碼">
                  <br>
                  <input type="submit" value="登入" class="_btn_04">
                </form>


                </div>

                <div class="form-group pt-0">
                  <div class="_social_04">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

<!-- js最適放置為 body tag 結束前 -->
<script src="../js/jquery-3.2.1.min.js"></script>
<script src="../js/login.js"></script>
<script src="https://cdn.staticfile.org/jquery/2.1.1/jquery.min.js"></script>
<script src="https://cdn.staticfile.org/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
</html>