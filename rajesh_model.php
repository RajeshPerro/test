<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>

<?php
//error_reporting(0);
session_start();
class connect
{
    var $host;
    var $user;
    var $pass;
    var $db;
    public $connect;

    public function connection($hostname, $username, $passwoard, $database)
    {
        $this->host = $hostname;
        $this->user = $username;
        $this->pass = $passwoard;
        $this->db = $database;
        $connect = new PDO("mysql:host=$this->host;dbname=$this->db", $this->user, $this->pass, array(
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"
        ));
        $connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $connect->setAttribute(PDO::ATTR_PERSISTENT, true);

        return $connect;
    }
}


class test
{


    public function loginpage($db_user,$db_pass,$db_name,$table, $username, $passworard)
    {
        $con_user=$db_user; $con_pass=$db_pass; $con_name=$db_name;
        $connection_object=new connect();
        if(!empty($con_user) && !empty($con_pass))
        {
            $dbcon=$connection_object->connection('localhost',$con_user,$con_pass,$con_name);
        }
        else
        {
            $dbcon=$connection_object->connection('localhost','root','',$con_name);

        }

        $sql = "select * from $table where `userName`='$username'";
        $data = $dbcon->query($sql);
        $row = $data->fetch(PDO::FETCH_ASSOC);

        //$query = mysql_query($sql);
        //$row = mysql_fetch_array($query);
        trim($dbuser = $row['userName']);
        trim($dbpass = $row['password']);
        //$entyppass=md5($passworard);
        //echo "<br>".$username.$passworard."from";

        if (($dbpass != "" && $dbuser != "") && $dbuser == $username && $dbpass == $passworard) {
            $_SESSION['user'] = $dbuser;
            echo("<script>location.href='registration_view.php'</script>");
        } else {
            $string = ' Sorry! Try again.\n Username or Password is Wrong.';
            echo "<script>alert(\"$string\")</script>";
            echo("<script>location.href='index2.php'</script>");
        }
    }


    //Data Insert Start


    //Data Insert Start
    public function data_insert($post,$table,$db_user,$db_pass,$db_name)//withoutFile
    {

        $con_user=$db_user; $con_pass=$db_pass; $con_name=$db_name;

        $colum="";
        $values="";
        $limit=count($post) ;
        $allvalues = "";
        $i=0;
        foreach($post as $name=> $value)
        {
            if($i==0)
            {
                $colum.="`".$name."`";
                $values.="'".$value."'";

            }
            else
            {
                $colum.=",`".$name."`";$values.=",'".$value."'";
            }
        $i++;
        }
        $colum;
        $values;

        $allvalues.=$values;
        $sql="insert into $table ($colum)values($allvalues)";
       // exit;

        $connection_object=new connect();
        if(!empty($con_user) && !empty($con_pass))
        {
            $dbcon=$connection_object->connection('localhost',$con_user,$con_pass,$con_name);
        }
        else
        {
            $dbcon=$connection_object->connection('localhost','root','',$con_name);

        }

        $preparedStatement =$dbcon->prepare($sql);

        $preparedStatement->execute(array('$colum' => '$allvalues'));
//        if(  $preparedStatement->execute(array('$colum' => '$allvalues')))
//        {
//            echo "<script>alert('তথ্যটি সংরক্ষন করা হয়েছে ।')</script>";
//            echo("<script>location.href='../index.php'</script>");
//        }
//        else
//        {
//            echo "<script>alert('আপনার তথ্যটি সংরক্ষন করা সম্ভব হয়নি ।')</script>";
//
//            echo("<script>location.href='index.php'</script>");
//        }

    }

//SMS Sending

    public function send_sms($mobile="",$msg)
    {
        $mob_len = strlen($mobile);
        if($mob_len != 11)
            echo "";
        if($mob_len<=13 and $mob_len >= 11)
        {
            if($mob_len == 11)
                $mobile = '88'.$mobile;
            $valid = substr($mobile, 0, 3);
            if($valid == '880'){
                //$msg = $_POST['msg'];
                $msg = str_replace(' ','+',$msg);
                $msg = str_replace('$','%24',$msg);
                $msg = str_replace('%','%25',$msg);
                $msg = str_replace('^','%5E',$msg);
                $msg = str_replace('&','%26',$msg);
                $msg = str_replace('=','%3D',$msg);
                $msg = str_replace('\n','%5Cn',$msg);
                //echo "</br>".$msg."</br>";

                /*$data['mobile']=$mobile;
                $data['msg']=$msg;
                $this->db->insert('log_sms', $data); */

                $ApiURL ='http://api2.planetgroupbd.com/api/sendsms/plain?user=dinb&password=DinSMS01&sender=din_board&SMSText='.$msg.'&GSM='.$mobile;

                //$ApiURL ='http://api.planetgroupbd.com/planetapi.php?user=dinb&pass=DinSMS01&num='.$mobile.'&senderid=din_board&msg='.$msg;
                // create a new cURL resource
                $ch = curl_init();

                // set URL and other appropriate options
                curl_setopt($ch, CURLOPT_URL, $ApiURL);
                curl_setopt($ch, CURLOPT_HEADER, 0);

                // grab URL and pass it to the browser
                curl_exec($ch);

                // close cURL resource, and free up system resources

                curl_close($ch);
//			 echo header('location:registration_view.php');

            }
            else{
                echo "<script> alert('মোবাইল নম্বর টি সঠিক নয়।')</script>";
                echo("<script>location.href='registration_view.php'</script>");
            }

        }
    }
//SMS sending END
    public function data_insert_withfile($post,$file,$table,$db_user,$db_pass,$db_name)
    {

        $con_user=$db_user; $con_pass=$db_pass; $con_name=$db_name;

        $colum="";
        $values="";
        $limit=count($post) ;
        $image='image';
        $allvalues="";
        $i=0;
        foreach($post as $name=> $value)
        {
            if($i==0)
            {
                $colum.="`".$name."`";
                $values.="'".$value."'";

            }
            else
            {
                $colum.=",`".$name."`";$values.=",'".$value."'";
            }
            if($i==($limit-1))
            {
                $colum.=",`".$image."`";
            }
            $i++;
        }
        $colum;
        $values;
        $j=0;
        $imgvalues="";
        $allimge="";
        $Server='http://'.$_SERVER['HTTP_HOST'];
        foreach ($_FILES['image']['tmp_name'] as $key =>$tmp_name)
        {
            $name=trim($_FILES['image']['name'][$key]);
            echo $target="Image/";
            $target=$target.$_FILES['image']['name'][$key];
            if($j==0){$imgvalues.=$name;}
            else
            {$imgvalues.=";".$name; }
            $j++;
            move_uploaded_file($tmp_name,$target);
        }
        $allimge=",'".$imgvalues."'";
        $colum;
        $allvalues.=$values.$allimge;
        $sql="insert into $table ($colum)values($allvalues)";

        $connection_object=new connect();
        if(!empty($con_user) && !empty($con_pass))
        {
            $dbcon=$connection_object->connection('localhost',$con_user,$con_pass,$con_name);
        }
        else
        {
            $dbcon=$connection_object->connection('localhost','root','',$con_name);

        }

        $preparedStatement =$dbcon->prepare($sql);


        if(  $preparedStatement->execute(array('$colum' => '$allvalues')))
        {
            echo "<script>alert('তথ্যটি সংরক্ষন করা হয়েছে ।')</script>";
            echo("<script>location.href='index.php'</script>");
        }
        else
        {
            echo "<script>alert('আপনার তথ্যটি সংরক্ষন করা সম্ভব হয়নি ।')</script>";

            echo("<script>location.href='index.php'</script>");
        }

    }


    //Data Insert End

    public function data_insert_wife($post, $file, $table, $db_user, $db_pass, $db_name)
    {

        $con_user = $db_user;
        $con_pass = $db_pass;
        $con_name = $db_name;

        $colum = "";
        $values = "";
        $limit = count($post);
        $image = 'image';
        $allvalues = "";
        $i = 0;
        foreach ($post as $name => $value) {
            if ($i == 0) {
                $colum .= "`" . $name . "`";
                $values .= "'" . $value . "'";

            } else {
                $colum .= ",`" . $name . "`";
                $values .= ",'" . $value . "'";
            }
            if ($i == ($limit - 1)) {
                $colum .= ",`" . $image . "`";
            }
            $i++;
        }
        $colum;
        $values;
        $j = 0;
        $imgvalues = "";
        $allimge = "";
        foreach ($_FILES['image']['tmp_name'] as $key => $tmp_name) {
            $name = trim($_FILES['image']['name'][$key]);
            $target = "Image/";
            $target = $target . $_FILES['image']['name'][$key];
            if ($j == 0) {
                $imgvalues .= $name;
            } else {
                $imgvalues .= ";" . $name;
            }
            $j++;
            move_uploaded_file($tmp_name, $target);
        }
        $allimge = ",'" . $imgvalues . "'";
        $colum;
        $allvalues .= $values . $allimge;
        $sql = "insert into $table ($colum)values($allvalues)";
        //exit;
        $connection_object = new connect();
        if (!empty($con_user) && !empty($con_pass)) {
            $dbcon = $connection_object->connection('localhost', $con_user, $con_pass, $con_name);
        } else {
            $dbcon = $connection_object->connection('localhost', 'firoz', 'firoz', $con_name);

        }

        $preparedStatement = $dbcon->prepare($sql);

        // $preparedStatement->execute(array('$colum' => '$allvalues'));
        if ($preparedStatement->execute(array('$colum' => '$allvalues'))) {
            echo "<script>alert('তথ্যটি সংরক্ষন করা হয়েছে ।')</script>";
            echo("<script>location.href='../step2E.php'</script>");



        } else {
            echo "<script>alert('আপনার তথ্যটি সংরক্ষন করা সম্ভব হয়নি ।')</script>";

            echo("<script>location.href='wife.php'</script>");
        }

    }


    public function data_insert_kid($post, $file, $table, $db_user, $db_pass, $db_name)
    {

        $con_user = $db_user;
        $con_pass = $db_pass;
        $con_name = $db_name;

        $colum = "";
        $values = "";
        $limit = count($post);
        $image = 'image';
        $allvalues = "";
        $i = 0;
        foreach ($post as $name => $value) {
            if ($i == 0) {
                $colum .= "`" . $name . "`";
                $values .= "'" . $value . "'";

            } else {
                $colum .= ",`" . $name . "`";
                $values .= ",'" . $value . "'";
            }
            if ($i == ($limit - 1)) {
                $colum .= ",`" . $image . "`";
            }
            $i++;
        }
        $colum;
        $values;
        $j = 0;
        $imgvalues = "";
        $allimge = "";
        foreach ($_FILES['image']['tmp_name'] as $key => $tmp_name) {
            $name = trim($_FILES['image']['name'][$key]);
            $target = "Image/";
            $target = $target . $_FILES['image']['name'][$key];
            if ($j == 0) {
                $imgvalues .= $name;
            } else {
                $imgvalues .= ";" . $name;
            }
            $j++;
            move_uploaded_file($tmp_name, $target);
        }
        $allimge = ",'" . $imgvalues . "'";
        $colum;
        $allvalues .= $values . $allimge;
       $sql = "insert into $table ($colum)values($allvalues)";
        //exit;
        $connection_object = new connect();
        if (!empty($con_user) && !empty($con_pass)) {
            $dbcon = $connection_object->connection('localhost', $con_user, $con_pass, $con_name);
        } else {
            $dbcon = $connection_object->connection('localhost', 'firoz', 'firoz', $con_name);

        }

        $preparedStatement = $dbcon->prepare($sql);

        //  $preparedStatement->execute(array('$colum' => '$allvalues'));
        if ($preparedStatement->execute(array('$colum' => '$allvalues'))) {
            echo "<script>alert('তথ্যটি সংরক্ষন করা হয়েছে ।')</script>";
            echo("<script>location.href='../step3E.php'</script>");
        } else {
            echo "<script>alert('আপনার তথ্যটি সংরক্ষন করা সম্ভব হয়নি ।')</script>";

            echo("<script>location.href='../step3E.php'</script>");
        }

    }


    //Data Insert End


    public function DataView($sql_select, $users, $passwords, $dbName)
    {
        $sql = $sql_select;
        $con_user = $users;
        $con_pass = $passwords;
        $con_name = $dbName;
        $connection_object = new connect();

        if (!empty($con_user) && !empty($con_pass)) {
            $dbcon = $connection_object->connection('localhost', $con_user, $con_pass, $con_name);
        } else {
            $dbcon = $connection_object->connection('localhost', 'root', '', $con_name);

        }
        $data = $dbcon->query($sql);
        // $dbcon->exec("SET character_set_results=utf8");
        while ($row = $data->fetch(PDO::FETCH_ASSOC)) {
            $xx[] = $row;

        }
        return $xx;

    }

    public function DataView2($sql_select, $users, $passwords, $dbName)
    {
        $sql = $sql_select;
        $con_user = $users;
        $con_pass = $passwords;
        $con_name = $dbName;
        $connection_object = new connect();

        if (!empty($con_user) && !empty($con_pass)) {
            $dbcon = $connection_object->connection('localhost', $con_user, $con_pass, $con_name);
        } else {
            $dbcon = $connection_object->connection('localhost', 'firoz', 'firoz', $con_name);

        }
        $data = $dbcon->query($sql);
        // $dbcon->exec("SET character_set_results=utf8");
        while ($row = $data->fetch(PDO::FETCH_ASSOC)) {
            $xx[] = $row;

        }
        return $xx;

    }


 public function Data_Update($post,$id,$table,$db_user,$db_pass,$db_name)//withoutFile
    {

        $con_user=$db_user; $con_pass=$db_pass; $con_name=$db_name;

        $img=$_FILES['image']['name'];
        $chekval="";
        foreach($img as $a=>$chekval)
        {
            $chekval;
        }
        $chekval;
        $colum="";
        $limit=count($post);
        $image='image';
        $allvalues="";
        $i=0;
        foreach($post as $name=> $value)
        {
            if($i==0)
            {
                $colum.="`".$name."`='".$value."'";
            }
            else
            {
                $colum.=",`".$name."`='".$value."'";
            }
            if(($i==($limit-1))and($chekval!=""))
            {
                $colum.=",`".$image."`=";
            }

            $i++;
        }
        $colum;
        $j=0;
        $imgvalues="";
        $allimge="";
        foreach ($_FILES['image']['tmp_name'] as $key =>$tmp_name)
        {
            $name=trim($_FILES['image']['name'][$key]);
            $target="documents/";
            $target=$target.$_FILES['image']['name'][$key];
            if($j==0)
            {
                $imgvalues.=$name;
            }
            else
            {
                $imgvalues.=";".$name;
            }
            $j++;
            move_uploaded_file($tmp_name,$target);
        }

        if($chekval=="")
        {

            $allvalues=$colum;
        }
        else
        {
            $allimge="'".$imgvalues."'";
            $allvalues.=$colum.$allimge;
        }
        $sql="update $table set $allvalues where id=$id";
        // exit;

        $connection_object=new connect();
        if(!empty($con_user) && !empty($con_pass))
        {
            $dbcon=$connection_object->connection('localhost',$con_user,$con_pass,$con_name);
        }
        else
        {
            $dbcon=$connection_object->connection('localhost','root','',$con_name);

        }

        $preparedStatement =$dbcon->prepare($sql);

        $preparedStatement->execute(array('$colum' => '$allvalues'));


 }

 public function DeleteData($users, $passwords, $dbName, $table, $id)
    {
        $con_user = $users;
        $con_pass = $passwords;
        $con_name = $dbName;
        $connection_object = new connect();
        if (!empty($con_user) && !empty($con_pass)) {
            $dbcon = $connection_object->connection('localhost', $con_user, $con_pass, $con_name);
        } else {
            $dbcon = $connection_object->connection('localhost', 'firoz', 'firoz', $con_name);

        }
        $sql = "delete from $table where `id`=$id";
        //$query=mysql_query($sql);
        $deleteStatement = $dbcon->prepare($sql);

        if ($deleteStatement->execute(array(':id' => $id))) {
            echo "<script> alert('তথ্যটি ডিলিট করা হয়েছে ।')</script>";
            echo("<script>location.href='enter.php'</script>");
        } else {

            echo "<script> alert('আপনার ডিলিট করা সম্ভব হয়নি ।')</script>";
            echo("<script>location.href='enter.php'</script>");
        }

    }


}

//All Class Objects.... :)
$raj_modelobject = new test();
mysql_query("SET character_set_client=utf8"); //for inserting Bangla in DB
mysql_query("SET character_set_connection=utf8"); //for inserting bangla in DB
mysql_query("SET character_set_results=utf8");
?>
