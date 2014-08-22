<html>
<head>
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <link rel="stylesheet" type="text/css" href="css/route2.css">
    <link rel="stylesheet" type="text/css" href="date/datepickr.css">

    <script src="ajax_js/ajaxsbmt.js" type="text/javascript"></script>
    <script type="text/javascript" src="ajax_js/jquery-1.3.2.min.js"></script>

    <!-- End of Libraries -->
    <script language="javascript1.1" type="text/javascript">
        function getDisName(getDisName)
        {
            //alert(getDisName);
            $.ajax
            ({
                type: "GET",
                url: "b.php",
                data: "district="+getDisName,
                success: function(data) {$(".DisName").empty().append(data);}
            });
        }
        function getUpname(getUpname)
        {

            $.ajax
            ({
                type: "GET",
                url: "c.php",
                data: "upzilla="+getUpname,
                success: function(data) {$(".thana").empty().append(data);}
            });
        }

        function getTime(getTime)
        {

            $.ajax
            ({
                type: "GET",
                url: "d.php",
                data: "dr_time="+getTime,
                success: function(data) {$(".time").empty().append(data);}
            });
        }

    </script>

</head>
<?php include "header.php"
?>
<body>

<div class="c_body border1">
<div style="width: 100%; text-align: center; color: white; font-size: 20px; background-color: #3390CA; height: 30px;" >
    Registration Form

</div>
<form method="post" action="registration.php">
<table class="table1 font1" style="padding: 5px; margin-top: 25px;margin-left: 100px;">

    <tbody>
    <tr>

        <td></td>
        <td></td>
        <td style="color: #29B780; font-size: 22px;"> This is a Demo Form</td>
        <td></td>
        <td></td>
    </tr>
    <tr>

        <td></td>
        <td></td>

        <td></td>
        <td></td>
    </tr>

<tr>
    <form name="form1" method="post" action="b.php">
        <td>
            Department Name:
        </td>
        <td>
<!--            <input class="input1" name="dept_name">-->

            <select class="input1 dept" name="div" id="EDP"  onChange="getDisName(this.value)">
                <option value="" selected="selected">----Select Department----</option>
                <?php
                include_once('dbcon.php');
                $sql=mysql_query("SELECT * FROM add_doctor GROUP BY department");
                while($data=mysql_fetch_array($sql))
                {
                    echo "<option value='$data[department]' >$data[department]</option>";
                }
                ?>
            </select>

        </td>
        <td>
            Doctors Name:
        </td>
        <td>
            <select  name="dis"  id="Survey" style="width:150px;" class="DisName input1" onChange="getUpname(this.value)">
                <option value="">None</option>
            </select>

        </td>
    </tr>
    <tr>
        <td>
            Appoinment Date:
        </td>
        <td>
<!--            <input class="input1" name="ap_date" id="datepick">-->

            <form action="c.php" method="post">

                <select name="thana"id="Survey"  class="thana input1" onchange="getTime(this.value)" >
                    <option value="">None</option>
                </select>
            </form>
        </td>
</form>


</tr>
</tbody>
</table>




<input class="button1" VALUE="Next" type="submit" style="float: right; margin: 10px;">

</form>

</div>
<div style="margin-left: 1px;">
    <?php include "footer.php"?>
</div>
</body>

<script type="text/javascript" src="date/datepickr.min.js"></script>
<script type="text/javascript">
    new datepickr('datepick', {
        'dateFormat': 'Y-m-d'});

</script>
</html>