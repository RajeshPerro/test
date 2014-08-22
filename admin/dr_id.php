<!DOCTYPE html>
<html>
<head>

    <link  rel="stylesheet" type="text/css" href="../css/route2.css">
    <link  rel="stylesheet" type="text/css" href="../css/main.css">

    <link rel="stylesheet" href="../../_static/js/dojo/../dijit/themes/claro/claro.css">

    <script>dojoConfig = {async: true, parseOnLoad: true}</script>
    <script src='../../_static/js/dojo/dojo.js'></script>

    <script>
        require(["dojo/parser", "dijit/form/ValidationTextBox"]);
    </script>


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
        <form method="post" action="dr_Schedule.php">
        <table class="table1">
            <tr>
                <td>
                   Enter Your Doctor's ID:
                </td>

                <td>
                    <input class="input2" placeholder="Id Given by Hospital" type="text" name="dr_id"
                           required="true"
                           data-dojo-type="dijit/form/ValidationTextBox"
                           data-dojo-props="regExp:'\\d{}', invalidMessage:'Invalid.'">
                </td>
                <td>
                    <input class="button1" type="submit" value="Enter">
                </td>
            </tr>

        </table>
        </form>
    </center>
</div>
<div style="float: left; width: 100%; height:auto;">
    <?php include'footer.php'; ?>
</div>

</body>

</html>