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
    <div style="width: 100%; height: 40px; background-color: #1C94C4; text-align: center; font-size: 30px; color: #ffffff">
        Your Schedule
    </div>
    <table class="table3 border1_b">
        <tr style="text-align: center;">
            <th>
                Doctor's ID
            </th>
            <th>
                Status
            </th>
            <th>
                Doctor's Name
            </th>
            <th>
                Department
            </th>
            <th>
                Specialised Area
            </th>

            <th>
                Action
            </th>
        </tr>
    <?php
    include '../rajesh_model.php';
    error_reporting(0);
    $user = 'B@se_de_d@toS';
    $pass = "Ultr@secret0";
    $dbname='doctor';
    //$dr_id=$_POST['dr_id'];
    $sql="SELECT * FROM add_doctor";
    $data_view=$raj_modelobject->DataView($sql,$user,$pass,$dbname);


    foreach($data_view as $row)
    {


    ?>
    <center>

            <tr>

                <td>
                    <?php echo $row['dr_id']; ?>
                </td>
                <td><?php
                    if($row['status']==1)
                    {
                        echo "Active";
                    }
                    else{
                        echo "In-active";
                    }
                    ?></td>
                <td>
                    <?php echo $row['dr_name']; ?>
                </td>



                <td>
                    <?php echo $row['department']; ?>
                </td>

                <td>
                    <?php echo $row['s_area']; ?>
                </td>



                <td>
<!--                    <a href="dr_edit.php?id=--><?php //echo $row['id']?><!--">Edit</a>-->
                    <a onClick="return confirm('Are you sure?')" href="delete.php?dr_id=<?php echo $row['dr_id']?>">Delete</a>
                </td>
            </tr>
            <?php }?>
        </table>
    </center>
</div>
<div style="float: left; width: 100%; height:auto;">
    <?php include'footer.php'; ?>
</div>

</body>

</html>