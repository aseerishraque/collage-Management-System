<?php
$c=mysqli_connect("localhost","root","","database") or die("No Connection");
	$msg="";
	$opr="";
	if(isset($_GET['opr']))
	$opr=$_GET['opr'];
	
if(isset($_GET['rs_id']))
	$id=$_GET['rs_id'];
	
	if($opr=="del")
{
	$del_sql=mysqli_query($c,"DELETE FROM facuties_tbl WHERE faculties_id=$id");
	if($del_sql) {
        echo "<div>"
            . "<div class='alert alert-success col-md-6 col-md-offset-3'>"
            . "<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;"
            . "</button>"
            . "<strong>Sucess!</strong> Record Deleted"
            . "</div>"
            . "</div>";
    }
	else
		$msg="Could not Delete :".mysqli_error();	
			
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>::. Build Bright University .::</title>
<link rel="stylesheet" type="text/css" href="css/style_view.css" />
</head>

<body>
<div class="col-md-12  view-form-style">
    <div class="col-md-12 entry-head margin-20b">
        <h4 class="left">Faculties View</h4>
        <a class="btn btn-primary right" href="?tag=faculties_entry">Add New Faculty</a>
    </div>
    <form role="form" data-toggle="validator" method="post" class="form-horizontal">
        <div class="form-group">
            <div class="col-md-9 col-md-offset-1     col-xs-9 col-sm-10">
                <input type="text" class="form-control" name="searchtxt" Placeholder="Enter name for search" autocomplete="off"/></div>
            <input type="submit" name="btnsearch" value="Search" class="btn btn-info"/>
        </div>
    </form>
<div class="table-responsive">
	<form method="post">
        <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Faculties Name</th>
            <th width="250px">Note</th>
            <th colspan="2">Operation</th>
      	</tr>
        
         <?php
		 $key="";
	if(isset($_POST['searchtxt']))
		$key=$_POST['searchtxt'];
	
	if($key !="")
		$sql_sel=mysqli_query($c,"SElECT * FROM facuties_tbl WHERE faculties_name  like '%$key%' ");
	else
    		$sql_sel=mysqli_query($c,"SELECT * FROM facuties_tbl");
			
			
			$i=0;
    while($row=mysqli_fetch_array($sql_sel)){
    $i++;
    $color=($i%2==0)?"lightblue":"white";
    	?>
      <tr bgcolor="<?php echo $color?>">
            <td><?php echo $i;?></td>
            <td><?php echo $row['faculties_name'];?></td>
            <td><?php echo $row['note'];?></td>
            <td align="center"><a href="?tag=faculties_entry&opr=upd&rs_id=<?php echo $row['faculties_id'];?>" title="Upate"><img src="picture/update.png" /></a></td>
            <td align="center"><a href="?tag=view_faculties&opr=del&rs_id=<?php echo $row['faculties_id'];?>" title="Delete"><img src="picture/delete.png" /></a></td>
        </tr>
    <?php	
    }
    ?>
   	</table>
 	</form>
</div><!--end of content_input -->
</body>
</html>