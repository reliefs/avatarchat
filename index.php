<!doctype html>
<html>
<head>

<meta charset="utf-8">
<title>Untitled Document</title>
<link href="style.css" rel="stylesheet" type="text/css">
 <?php
  $mysqli = NEW MySQLi ('localhost','root','');
  
  $resultSet = $mysqli->query("SELECT * FROM users");
  ?>
</head>

<body>

<div class="room">
<div class="avatar"><br>
  <br>
  <br>
  <?php
  
  ?>
  <center>Brugernavn</center>
</div>
<div style="position:absolute; top:20px; left:0px;" class="chair">
</div>
<div style="position:absolute; top:20px; left:55px;" class="chair">
</div>
<div style="position:absolute; top:20px; left:110px;" class="chair">
</div>
<div style="position:absolute; top:20px; left:165px;" class="chair">
</div>
<div style="position:absolute; top:20px; left:220px;" class="chair">
</div>
<div style="position:absolute; top:20px; left:275px;" class="chair">
</div>
<div style="position:absolute; top:20px; left:330px;" class="chair">
</div>
<div style="position:absolute; top:20px; left:385px;" class="chair">
</div>
<div style="position:absolute; top:20px; left:440px;" class="chair">
</div>
<div style="position: absolute; top: 3px; left: 28px;" class="table"></div>
<div style="position:absolute; top:90px; left:0px;" class="chair">
</div>
<div style="position:absolute; top:90px; left:55px;" class="chair">
</div>
<div style="position:absolute; top:90px; left:110px;" class="chair">
</div>
<div style="position:absolute; top:90px; left:165px;" class="chair">
</div>
<div style="position:absolute; top:90px; left:220px;" class="chair">
</div>
<div style="position:absolute; top:90px; left:275px;" class="chair">
</div>
<div style="position:absolute; top:90px; left:330px;" class="chair">
</div>
<div style="position:absolute; top:90px; left:385px;" class="chair">
</div>
<div style="position:absolute; top:90px; left:440px;" class="chair">
</div>
<div style="position:absolute; top:160px; left:0px;" class="chair">
</div>
<div style="position:absolute; top:160px; left:55px;" class="chair">
</div>
<div style="position:absolute; top:160px; left:110px;" class="chair">
</div>
<div style="position:absolute; top:160px; left:165px;" class="chair">
</div>
<div style="position:absolute; top:160px; left:220px;" class="chair">
</div>
<div style="position:absolute; top:160px; left:275px;" class="chair">
</div>
<div style="position:absolute; top:160px; left:330px;" class="chair">
</div>
<div style="position:absolute; top:160px; left:385px;" class="chair">
</div>
<div style="position:absolute; top:160px; left:440px;" class="chair">
</div>
<div style="position:absolute; top:230px; left:0px;" class="chair">
</div>
<div style="position:absolute; top:230px; left:55px;" class="chair">
</div>
<div style="position:absolute; top:230px; left:110px;" class="chair">
</div>
<div style="position:absolute; top:230px; left:165px;" class="chair">
</div>
<div style="position:absolute; top:230px; left:220px;" class="chair">
</div>
<div style="position:absolute; top:230px; left:275px;" class="chair">
</div>
<div style="position:absolute; top:230px; left:330px;" class="chair">
</div>
<div style="position:absolute; top:230px; left:385px;" class="chair">
</div>
<div style="position:absolute; top:230px; left:440px;" class="chair">
</div>
<div style="position:absolute; top:300px; left:0px;" class="chair">
</div>
<div style="position:absolute; top:300px; left:55px;" class="chair">
</div>
<div style="position:absolute; top:300px; left:110px;" class="chair">
</div>
<div style="position:absolute; top:300px; left:165px;" class="chair">
</div>
<div style="position:absolute; top:300px; left:220px;" class="chair">
</div>
<div style="position:absolute; top:300px; left:275px;" class="chair">
</div>
<div style="position:absolute; top:300px; left:330px;" class="chair">
</div>
<div style="position:absolute; top:300px; left:385px;" class="chair">
</div>
<div style="position:absolute; top:300px; left:440px;" class="chair">






</div>
<script src="jquery-1.7.2.min.js"></script>
<script src="jquery-ui.js"></script>
<script src="java.js"></script>
<script type="text/javascript">
jQuery(".chair").click(function(){
    jQuery(".avatar").appendTo(jQuery(this));
});
</script>
</div>
</body>
</html>
