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
		 *
{
padding:0px;
margin:0px;
}

.menubar
{
background-color:blue;
text-align:center;

}
.menubar ul
{
list-style:none;
display:inline-flex;
padding:15px;

}
.menubar ul li a
{
text-decoration:none;
color:white;
padding:15px;
}
.menubar ul li
{
padding:10px;

}
.menubar ul li a:hover
{
background-color:green;
border-radius:10px;

}
.submenu
{
display:none;
}
.menubar ul li:hover .submenu
{
display:block;
position:absolute;
background-color:black;
border-radius:10px;

}
.menubar ul li:hover .submenu ul
{
display:block;
}
.submenu ul li
{
border-bottom:2px solid green;
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
						<!-- <li class="nav-item "><button type="button" class="btn btn-light" id="">FAQs</button></li>
						<li class="nav-item"><button type="button" class="btn btn-light" id="">About</button></li>
						<li class="nav-item"><button type="button" class="btn btn-light">Contact</button></li>
			 -->
					</ul>
		    </div>
		</div>	
	</nav>
	<nav class="menubar navbar-light">

<ul>
<li> <a href="<?php echo base_url()?>main/adminhome">HOME </a></li>
<li> <a href="#">ADD</a>
<div class="submenu">
<ul>
<li> <a href="<?php echo base_url()?>main/addflight">Add Flight Details</a></li>
<li> <a href="<?php echo base_url()?>main/airport">Add Airport</a></li>
<li> <a href="<?php echo base_url()?>main/notification">Add Flight Status</a></li>
</ul>
</div>
</li>

<li> <a href="#">VIEW</a>
<div class="submenu">
<ul>
<li> <a href="<?php echo base_url()?>main/reguserview">Registered User</a></li>
<li> <a href="<?php echo base_url()?>main/viewbooking">Bookings</a></li>
<li> <a href="<?php echo base_url()?>main/updateflight">Flight details</a></li>
<li> <a href="<?php echo base_url()?>main/viewnotification">Flight Status</a></li>
</ul>
</div>
</li>
<li> <a href="#">PAYMENT DETAILS</a>
  <li> <a href="<?php echo base_url()?>main/logout">LOGOUT</a>
</ul>
</nav>


	<h1 class="text-center">Booking</h1>
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
<th>Booking id</th>
<th>Flight id</th>
<th>Flight Name</th>
<th>From</th>
<th>To</th>
<th>Seating</th>
<th>Usertype</th>
<th>Time</th>
<th>name</th>
<th>Phone</th>
<th>Email</th>
<th>cost</th>
</tr>
</thead>
<?php
if($n->num_rows()>0)
{
foreach($n->result() as $row)
{
?>
<tr>
<td><?php echo $row->bookingid;?></td>
<td><?php echo $row->flightid;?></td>
<td><?php echo $row->cname;?></td>
<td><?php echo $row->flyfrom;?></td>
<td><?php echo $row->flyto;?></td>
<td><?php echo $row->seating;?></td>
<td><?php echo $row->utype;?></td>
<td><?php echo $row->dtime;?></td>
<td><?php echo $row->name;?></td>
<td><?php echo $row->phone;?></td>
<td><?php echo $row->email;?></td>
<td><?php echo $row->amount;?></td>
<?php
}
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