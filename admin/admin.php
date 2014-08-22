<?php
error_reporting(0);
session_destroy();
?>


<!DOCTYPE html>
<html>
<head>

    <link  rel="stylesheet" type="text/css" href="../css/route2.css">
    <link  rel="stylesheet" type="text/css" href="../css/main.css">

    <title>
        Admin Panel
    </title>
    <?php include'header2.php'; ?>


</head>
<body>
<div style="float: left; width: 100%; height:33px; background-color: #DDDDDD;">
<?php include 'menu.php'; ?>
</div>
<div class="c_body border1" style="margin-top:10px;" >
    <center>
<table style="text-align:center; margin-top: 100px; font-size: 50px; color:#0A7EC5; ">
<tr>
    <td>
        Welcome to Admin Panel.
    </td>
</tr>
</table>
    </center>
</div>
<div style="float: left; width: 100%; height:auto;">
    <?php include'footer.php'; ?>
</div>

</body>

</html>