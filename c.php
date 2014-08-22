<?php
	include_once('dbcon.php');
	
	$thana=$_GET['upzilla'];
	//echo $thana;	//echo $EDPId; exit;
	if($thana!='')
	{
		$Sql=
		mysql_query(
		"SELECT avail_date FROM time_table, add_doctor  Where time_table.dr_id=add_doctor.dr_id and add_doctor.dr_id='$thana'")

		or die(mysql_error());
		
		
		$flag=0;				
		while($result=mysql_fetch_array($Sql))
		{
                                 if($flag==0)
                                {
                                    echo "<option>--Select--</option>";
                                    $flag=1;
                                }
			echo "<option value='$result[0]'  >$result[0]</option>";
		}

	}

?>