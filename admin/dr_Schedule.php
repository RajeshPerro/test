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
    <center>
        <table class="table3 border1_b">
            <thead>
                <th>
                    ID
                </th>
                <th>
                    Name
                </th>
                <th>
                    Department
                </th>
                <th>
                   Specialization
                </th>
            </thead>
    <?php
    include '../rajesh_model.php';
    error_reporting(0);
    $user = 'B@se_de_d@toS';
    $pass = "Ultr@secret0";
    $dbname='doctor';
    $dr_id=$_POST['dr_id'];
    $sql="SELECT * FROM add_doctor WHERE dr_id=$dr_id";
    $data_view=$raj_modelobject->DataView($sql,$user,$pass,$dbname);

    if(empty($data_view))
    {
        echo("<script>alert('Sorry! You have no Schedule.')</script>");
        echo("<script>location.href='admin.php'</script>");

    }
    else{
    foreach($data_view as $row)
    {


    ?>

            <tr>

                <td>
                    <?php echo $row['dr_id']; ?>
                </td>

                <td>
                    <?php echo $row['dr_name']; ?>
                </td>
                <td>
                    <?php echo $row['department']; ?>
                </td>
                <td>
                    <?php echo $row['s_area']; ?>
                </td>
            </tr>

            <?php }}?>
        </table>
        <div style="width: inherit; height: 25px; font-size: 20px; font-weight: bold; border: inset; text-align: center;
         color: #FFFFFF; margin-top: 15px; background-color: #388DBE;">
            Your Duty Details
        </div>
        <table class="table3 font1" style="margin-top: 15px;">
        <thead>
        <th>SL/No</th>
        <th>
            Date
        </th>
        <th>Morning Shift</th>
        <th>Day Shift</th>
        <th>Evening Shift</th>

        </thead>
            <?php
            $user = 'B@se_de_d@toS';
            $pass = "Ultr@secret0";
            $dbname='doctor';
            $dr_id=$_POST['dr_id'];
            $sql2="SELECT * FROM time_table WHERE dr_id=$dr_id";
            $sql3="SELECT * FROM patients WHERE dr_id=$dr_id";
            $data_view2=$raj_modelobject->DataView($sql2,$user,$pass,$dbname);
            $data_view3=$raj_modelobject->DataView($sql3,$user,$pass,$dbname);
            $i=1;
            foreach($data_view2 as $row2){



            ?>
            <tr>
                <td>
                 <?php echo $i++; ?>
                </td>
                <td><?php echo $row2['avail_date'] ?></td>
                <td><?php echo $row2['mr_hour'].":".$row2['mr_min']." ".$row2['mr_ap'] ?></td>
                <td><?php echo $row2['dy_hour'].":".$row2['dy_min']." ".$row2['dy_ap'] ?></td>
                <td><?php echo $row2['ev_hour'].":".$row2['ev_min']." ".$row2['ev_ap'] ?></td>
            </tr>
            <?php
            }
           ?>

        </table>
        <div style=" background-color: #388DBE; width: inherit; height: 25px; font-size: 20px; font-weight: bold; border: inset;
         text-align: center; color: #FFFFFF; margin-top: 15px;">
            Your Patients Details
        </div>
        <table class="table3 font1" style="margin-top: 20px; margin-bottom: 20px;">
            <thead>
            <th>SL/No</th>
            <th>Appointment Date</th>
            <th>Appointment Time</th>
            <th>
                Name
            </th>
            <th>Age</th>
            <th>Country</th>
            <th>Mobile No</th>
            </thead>
            <?php
            $user = 'B@se_de_d@toS';
            $pass = "Ultr@secret0";
            $dbname='doctor';
            $dr_id=$_POST['dr_id'];

            $sql3="SELECT * FROM patients WHERE dr_id=$dr_id";

            $data_view3=$raj_modelobject->DataView($sql3,$user,$pass,$dbname);
            $i=1;
            foreach($data_view3 as $row3){



            ?>
            <tr>
                <td><?php echo $i++?></td>
                <td><?php echo $row3['ap_date']?></td>
                <td><?php echo $row3['ap_time']?></td>
                <td><?php echo $row3['mr'].$row3['name']?></td>
                <td><?php echo $row3['age']?></td>
                <td><?php echo $row3['country']?></td>
                <td><?php echo $row3['mobile']?></td>
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