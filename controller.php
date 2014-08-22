


<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php

include('rajesh_model.php');


//Registration Page Data Insert
 if(isset($_POST['name']) )//Mandatory field name
{   $post=$_POST;
    $user = 'root';
    $pass = "";
    $dbname='doctor';



     $raj_modelobject->data_insert($post,'patients',$user,$pass,$dbname);//model's function Name(postdata,file,TableName)
    echo("<script>alert('Successfully Saved!')</script>");
    echo("<script>location.href='index.php'</script>");




}


if(isset($_POST['dr_name']) )//Mandatory field name
{   $post=$_POST;
    $user = 'root';
    $pass = "";
    $dbname='doctor';

    $dr_id=$_POST['dr_id'];
   echo $_SESSION['id']=$dr_id;

    $raj_modelobject->data_insert($post,'add_doctor',$user,$pass,$dbname);//model's function Name(postdata,file,TableName)
    echo("<script>alert('Successfully Saved!')</script>");
    echo("<script>location.href='admin/time_table.php'</script>");




}


if(!empty($_POST['dr_id']) )//Mandatory field name
{   $post=$_POST;
    $user = 'root';
    $pass = "";
    $dbname='doctor';

//    $dr_id=$_POST['dr_id'];
//    $_SESSION['id']=$dr_id;

    $raj_modelobject->data_insert($post,'time_table',$user,$pass,$dbname);//model's function Name(postdata,file,TableName)
    echo("<script>alert('Successfully Saved!')</script>");
    echo("<script>location.href='admin/time_table.php'</script>");




}


?>