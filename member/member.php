<?php
/*
** filename: member.php
** description: 範例PHP網路應用程式會員資料頁
** author: Brian Tao | brian.tao@informc.com
** modification history:
**** 2017.07.20: created
*/

include_once("../library/config.php");
?>
<html>
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

  <title><?php echo $config['sys_title']; ?></title>
  <!-- <link rel="stylesheet" href="../css/global.css" />     -->
  <!-- <link href="../assets/css/bootstrap.min.css" rel="stylesheet"> -->
  <link href="../assets/css/font-awesome.min.css" rel="stylesheet">
  <link href="../assets/css/style.css" rel="stylesheet"> 
  <link rel="stylesheet" href="https://cdn.staticfile.org/twitter-bootstrap/3.3.7/css/bootstrap.min.css">
 
</head>
<body>

<!-- （Modal） -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">
					&times;
				</button>
				<h4 class="modal-title" id="myModalLabel">
          新增調薪紀錄
				</h4>
			</div>
			<div class="modal-body">
        <form method="post" action="process-member.php" >
        調整後薪資<br>
          <input type="text" name="salary" class="form-control _ge_de_ol">
          <br>
        調薪原因<br>
          <input type="text" name="reason" class="form-control _ge_de_ol">
          <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">取消
				  </button>
          <input type="submit" name="save" value="送出" class="btn btn-primary" data-dismiss="modal">
          </div>
        </form>

			</div>

		</div><!-- /.modal-content -->
	</div><!-- /.modal -->
</div>

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
                <p style="text-align:center;" id="header">&nbsp;>測試可用帳號及密碼</p>

                <br>

                員工編號 <input  type="text" name="memId" id="memId" class="form-control _ge_de_ol" readOnly >
                <br>
                員工姓名 <input type="text" name="memName" id="memName" class="form-control _ge_de_ol" >
                <br>
                密碼（若需修改密碼再填寫） <input type="password" name="memPwd" id="memPwd" class="form-control _ge_de_ol">
                <br>
                職稱 <input type="text" name="title" id="title" class="form-control _ge_de_ol" readOnly>
                <br>
                資料更新時間 <input type="text" name="lastModified" id="lastModified"  class="form-control _ge_de_ol" readOnly>

                
              <br>

                <input type="hidden" name="action" value="saveData" class="_btn_04">
                <input type="submit" name="save" value="儲存" class="_btn_04">
                <input type="button" id="loadSalary" value="檢視歷史調薪紀錄" class="_btn_04">
                <input type="button" id="addSalary" value="新增調薪紀錄" class="_btn_04" data-toggle="modal" data-target="#myModal">
                <input type="button" id="logout" value="登出" class="_btn_04">

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

</div>




<div id="salaryTable" style="background-color: white;"></div>
<!-- js最適放置為 body tag 結束前 -->
<script src="../js/jquery-3.2.1.min.js"></script>
<script src="../js/member.js"></script>
<script src="https://cdn.staticfile.org/jquery/2.1.1/jquery.min.js"></script>
<script src="https://cdn.staticfile.org/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
</html>