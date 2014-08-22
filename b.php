<?php
	include_once('dbcon.php');
	
	$district=$_GET['district'];


//exit;
	if($district!='')
	{
		$Sql=
		mysql_query(
		"SELECT dr_name,dr_id FROM add_doctor
		 WHERE department = '$district'")
		or die(mysql_error());
						
		$flag=0;				
		while($DistName=mysql_fetch_array($Sql))
		{
                                 if($flag==0)
                                {
                                    echo "<option>--Select--</option>";
                                    $flag=1;
                                }
			echo " <option value='$DistName[1]' >$DistName[0]</option>";
		}
	}
		

?>