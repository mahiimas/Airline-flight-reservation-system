<!DOCTYPE html>
<html>
    <head>
        <title>Afrs</title>
            <meta charset=utf-8>
            <meta name="viewport" content="width=device-width,initial-scale=1">
            <!---Fontawesome--->
            <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
            <!---Bootstrap5----->
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
            <!---custom style---->
            <link rel="stylesheet" href="../css/style.css">
    </head>
		<style> table,th,tr,td{
			
            border:2px solid black;
            border-collapse:collapse;
            padding: 10px;
            margin:auto;
		}
	</style>
	</head>
	<body>

		<nav class="navbar navbar-expand-lg bgtop bg-light">
		<div class="container">
			<img src="../img/logo1.jpg">
			<img src="../img/logo1.jpg">
			<img src="../img/logo1.jpg">
			<img src="../img/logo1.jpg">
			<div>
					<ul class="navbar-nav">
					<a href="<?php echo base_url()?>main/index" class="nav-link">HOME </a>
			
					</ul>
		    </div>
		</div>	
	</nav>
	<h1 class="text-center">Flight Details</h1>
		<form method="post" action="">
			<table class="table table-bordered table-info table-striped">
			<thead>
			  <!-- <tr>	
				<th>company name</th>
				<th>flight id</th>
				<th>departure time</th>
				<th> arrival time</th>
				</tr>	
			  	<?php

			  		// if($n->num_rows()>0)
			  		{
			  			// foreach($n->result() as $row)
			  			{
			  				?>
			  				<tr>
			  					// <td><?php echo $row->cname;?></td>
			  					// <td><?php echo $row->flightid;?></td>
			  					// <td><?php echo $row->dtime;?></td>
			  					// <td><?php echo $row->atime;?></td>
			  				</tr>
			                <?php
			            }
			        }?> -->
			        <tr>
<th>Company Name</th>
<th>Flight ID</th>
<th>From</th>
<th>To</th>
<th>Departure Time</th>
<th>Arrival Time</th>
<th>Economic Seat</th>
<th>Bussiness Seat</th>
<th>First Class Seat</th>
<th>Date</th>
<th>Economic Cost</th>
<th>Bussiness Cost</th>
<th>First Class Cost</th>
<th>Booking</th>





</tr>
</thead>
<?php
if($n->num_rows()>0)
{
foreach($n->result() as $row)
{
?>
<tr>
<td><?php echo $row->cname;?></td>
<td><?php echo $row->flightid;?></td>
<td><?php echo $row->flyfrom;?></td>
<td><?php echo $row->flyto;?></td>
<td><?php echo $row->dtime;?></td>
<td><?php echo $row->atime;?></td>
<td><?php echo $row->eseat;?></td>
<td><?php echo $row->bseat;?></td>
<td><?php echo $row->fseat;?></td>
<td><?php echo $row->date;?></td>
<td><?php echo $row->ecost;?></td>

<td><?php echo $row->bcost;?></td>
<td><?php echo $row->fcost;?></td>
<td><a href="<?php echo base_url()?>main/idsave/<?php echo $row->f_id;?>" class="btn btn-info" role="button">BOOK NOW</td>
</tr>
<?php
}
}
else
{
?>
<tr>
<td>No data found</td>
</tr>
<?php
}

?>



			</thead>
		</table>
	</form>
	<!---Jquery--->
<script
  src="https://code.jquery.com/jquery-3.5.1.js"integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc="
  crossorigin="anonymous">
</script>

<!---Popper---->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous">
</script>

<!---Custom Js-->
<script src="js/script.js">
</script>
	</body>	
</html>  