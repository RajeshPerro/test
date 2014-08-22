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
        <table class="table1">

            <?php
            include '../rajesh_model.php';
            $user = 'B@se_de_d@toS';
            $pass = "Ultr@secret0";
            $dbname='doctor';
            $Id=$_GET['id'];
            $Sql_Select="SELECT * FROM add_doctor WHERE id=$Id";
            $Data_View=$raj_modelobject->DataView($Sql_Select,$user,$pass,$dbname);
            foreach($Data_View as $row2){


            ?>
         <form method="post" action="../controller2.php">
            <tr>
                <td>
                    Doctor's ID:
                </td>
                <td>
                    <input type="hidden" name="id" value="<?php echo $row2['id']?>">
                    <input class="input1" spellcheck="false" value="<?php echo $row2['dr_id']?>"
                    type="text" name="dr_id">
                </td>
                <td>
                    Doctor's Name:
                </td>
                <td>
                    <input class="input1" spellcheck="false" value="<?php echo $row2['dr_name']?>"
                           type="text" name="dr_name">
                </td>
            </tr>
                <tr>
                    <td>
                        Specialised Area:
                    </td>
                    <td>
                        <input class="input1" spellcheck="false" value="<?php echo $row2['s_area']?>"
                               type="text" name="s_area">
                    </td>
                    <td>
                        Available Date:
                    </td>
                    <td>
                        <input class="input1" spellcheck="false" value="<?php echo $row2['date']?>"
                               type="text" name="date">
                    </td>
                </tr>
                <tr>
                    <td>
                        Special Symptoms:
                    </td>
                    <td>
                        <input class="input1" spellcheck="false" value="<?php echo $row2['symptoms']?>"
                               type="text" name="symptoms">
                    </td>
                    <td>
                       Current Status:
                    </td>
                    <td>
                        <select class="select1" name="status">
                            <option value="1">Active</option>
                            <option value="0">Inactive</option>
                        </select>
                    </td>
                </tr>
                <tr >
                    <td></td>
                    <td colspan="3" style="font-size: 25px; color: #000000; font-weight: bold;">

                        Start Time

                    </td>
                </tr>
                <tr>

                    <td>
                      Hour:<input class="input1" spellcheck="false" value="<?php echo $row2['hour']?>"
                               type="text" name="hour">
                    </td>
                    <td>
                        Minute:<input class="input1" spellcheck="false" value="<?php echo $row2['min']?>"
                                    type="text" name="min">
                    </td>
                    <td>
                        AM/PM:<input class="input1" spellcheck="false" value="<?php echo $row2['ap']?>"
                               type="text" name="ap">
                    </td>
                </tr>


                <tr >
                    <td></td>
                    <td colspan="3" style="font-size: 25px; color: #000000; font-weight: bold;">

                        End Time

                    </td>
                </tr>
                <tr>

                    <td>
                        Hour:<input class="input1" spellcheck="false" value="<?php echo $row2['end_hour']?>"
                                    type="text" name="end_hour">
                    </td>
                    <td>
                        Minute:<input class="input1" spellcheck="false" value="<?php echo $row2['end_min']?>"
                                      type="text" name="end_min">
                    </td>
                    <td>
                        AM/PM:<input class="input1" spellcheck="false" value="<?php echo $row2['end_ap']?>"
                                     type="text" name="end_ap">
                    </td>
                </tr>

            <?php }?>
        </table>
        <input value="Update" type="submit" class="button1">
        </form>
    </center>
</div>
<div style="float: left; width: 100%; height:auto;">
    <?php include'footer.php'; ?>
</div>

</body>

</html>