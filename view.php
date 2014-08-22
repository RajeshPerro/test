
<html>
<head>

    <?php include'header.php'; ?>
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <link rel="stylesheet" type="text/css" href="css/route2.css">
    <link rel="stylesheet" type="text/css" href="date/datepickr.css">


    <link rel="stylesheet" href="../../_static/js/dojo/../dijit/themes/claro/claro.css">

    <script>dojoConfig = {async: true, parseOnLoad: true}</script>
    <script src='../../_static/js/dojo/dojo.js'></script>

    <script>
        require(["dojo/parser", "dijit/form/ValidationTextBox"]);
    </script>


</head>


<body>

<div class="c_body border1 ">
<div style="width: 100%; text-align: center; color:white; font-size: 20px; background-color:#3390CA; height: 30px;" >
   Register's Data
</div>

<table class="table3" style="margin-top: 25px;">

    <?php
    include 'rajesh_model.php';
    $mobile=$_POST['mobile'];
    //$mobile='01714905039';
    $user = 'B@se_de_d@toS';
    $pass = "Ultr@secret0";
    $dbname='doctor';
    $sqlSelect="SELECT * FROM patients WHERE mobile=$mobile";
    $dataView=$raj_modelobject->DataView($sqlSelect,$user,$pass,$dbname);
    if(empty($dataView))
    {
        echo "<script>alert('Sorry No data Found')</script>";
        echo "<script>window.location='index.php'</script>";

    }
    else{


    foreach($dataView as $row)
    {


    ?>
<tbody>

<tr>

    <td colspan="" style="text-align: left;">
        <a style="font-size: 20px;" href="javascript:print()">Print</a>
    </td>
</tr>
    <tr>
        <td>
             Name of the Patient

        </td>
        <td>
            <?php echo $row['mr'].$row['name']?>
        </td>
        <td>
            Father/Husband Name
        </td>
        <td>
            <?php echo $row['father']?>
        </td>
        </tr>
<tr>
    <td>
        Gender

    </td>
        <td>
            <?php echo $row['gender']?>
        </td>
    <td>
        Date of Birth

    </td>
        <td>
            <?php echo $row['dob']?>
        </td>
    </tr>

<tr><td>
        Age

    </td>
        <td>
            <?php echo $row['age']?>
        </td>
    <td>Nationality


    </td>
        <td>
            <?php echo $row['nationality']?>
        </td>
    </tr>
<tr><td>Religion


    </td>
        <td>
            <?php echo $row['religion']?>
        </td>
    <td>Occupation

    </td>
        <td>
            <?php echo $row['occupation']?>
        </td>
    </tr>
<tr><td>Permanent Address

    </td>
        <td>
            <?php echo $row['parmanent_address']?>
        </td>
    <td>Street

    </td>
        <td>
            <?php echo $row['street']?>
        </td>
    </tr>
<tr>
    <td>Pincode

    </td>
        <td>
            <?php echo $row['pincode']?>
        </td>
    <td>District

    </td>
        <td>
            <?php echo $row['district']?>
        </td>
    </tr>
<tr> <td>taluk_name

    </td>
    <td>
            <?php echo $row['taluk_name']?>
        </td>


    </tr>

<tr>
    <td style="color: orangered; font-size: 17px;">
        Department:
    </td>
    <td style="color: lightseagreen; font-size: 17px;">
        <?php echo $row['dis_department']?>
    </td>
    <td style="color: orangered; font-size: 17px;">
        Doctors Name:
    </td>
    <td style="color: lightseagreen; font-size: 17px;">
        <?php echo $row['drName']?>
    </td>
</tr>
<tr>
    <td style="color: orangered; font-size: 17px;">
        Appointment Date:
    </td>
    <td style="color: lightseagreen; font-size: 17px;">
        <?php echo $row['ap_date']?>
    </td>
    <td style="color: orangered; font-size: 17px;">
        Appointment Time:
    </td>
    <td style="color: lightseagreen; font-size: 17px;">
        <?php echo $row['ap_time']?>
    </td>
</tr>
</tbody>
    <?php }}?>
</table>
    <?php include 'footer.php';?>
</div>


</body>


</html>