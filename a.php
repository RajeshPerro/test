
<!DOCTYPE html>
<html>

<head>
		<!-- Meta -->
		<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
		<!-- End of Meta -->
		
		<!-- Page title -->
		<title>Health_Info</title>
		<!-- End of Page title -->
		
        
  		<script src="js/ajaxsbmt.js" type="text/javascript"></script>
		<script type="text/javascript" src="js/jquery-1.3.2.min.js"></script>

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
		</script>
      
	</head>
    <body>
	
          <form name="form1" method="post" action="b.php">
            <p >
            <strong>Division:</strong>
              <select name="div" id="EDP" style="width:150px" onChange="getDisName(this.value)">
                <option value="" selected="selected"> -- Select Division --</option>
                <?php
					include_once('dbcon.php');
                    $sql=mysql_query("SELECT * FROM io_division ORDER BY DivName");
                    while($data=mysql_fetch_array($sql))
                    {
						echo "<option value='$data[DivName]' >$data[DivName]</option>";
					}
                ?>
              </select>
             
            <strong>District:</strong>
              <select name="dis" id="Survey" style="width:150px;" class="DisName" onChange="getUpname(this.value)">
                <option value="">None</option>
              </select>       
             <form action="c.php" method="post">
                <strong>Upzilla:</strong>
                <select name="thana"id="Survey" style="width:150px;" class="thana" >
                <option value="">None</option>
              </select>
                </form> 
		</form>
             
     	</p>
	</body>
</html>