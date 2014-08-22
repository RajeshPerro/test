


<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php

include('rajesh_model.php');
error_reporting(0);



if(isset($_POST['id']) )//Mandatory field name
{   $post=$_POST;
    $ID=$_POST['id'];
    $user = 'B@se_de_d@toS';
    $pass = "Ultr@secret0";
    $dbname='doctor';



    $raj_modelobject->Data_Update($post,$ID,'add_doctor',$user,$pass,$dbname);//model's function Name(postdata,file,TableName)
    echo("<script>alert('Successfully Updated!')</script>");
    echo("<script>location.href='admin/admin.php'</script>");




}




?>