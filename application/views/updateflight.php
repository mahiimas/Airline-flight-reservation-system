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

  <li> <a href="<?php echo base_url()?>main/logout">LOGOUT</a></li>
</ul>
</nav>

<form method="post" action="<?php echo base_url()?>main/updatedetails" class="form-control">
<?php
if(isset($user_data))
{
foreach($user_data->result()as $row1)
{
?>
<center>
<table class="table table-success">
<tr>
<td>Company Name:</td>
<td><input type="text" name="cname" class="form-control " value="<?php echo $row1->cname;?>"></td>
</tr>
<tr>
<td>Flight ID:</td>
<td><input type="text" name="flightid" class="form-control" value="<?php echo $row1->flightid;?>"></td>
</tr>
<tr>
<td>From:</td>
<td><input type="text" name="flyfrom" class="form-control" value="<?php echo $row1->flyfrom;?>"></td>
</tr>
<tr>
<td>To:</td>
<td><input type="text" name="flyto" class="form-control" value="<?php echo $row1->flyto;?>"></td>
</tr>
<tr>
<td>Departure Time:</td>
<td><input type="text" name="dtime" class="form-control" value="<?php echo $row1->dtime;?>"></td>
</tr>
<tr>
<td>Arrival Time:</td>
<td><input type="text" name="atime" class="form-control" value="<?php echo $row1->atime;?>"></td>
</tr>
<tr>
<td>Economic Seat:</td>
<td><input type="text" name="eseat" class="form-control" value="<?php echo $row1->eseat;?>"></td>
</tr>
<tr>
<td>Bussiness Seat:</td>
<td><input type="text" name="bseat" class="form-control" value="<?php echo $row1->bseat;?>"></td>
</tr>
<tr>
<td>First Class Seat:</td>
<td><input type="text" name="fseat" class="form-control" value="<?php echo $row1->fseat;?>"></td>
</tr>
<tr>
<td>Date:</td>
<td><input type="te" name="date" class="form-control" value="<?php echo $row1->date;?>"></td>
</tr>
<tr>
<td>Economic Cost:</td>
<td><input type="text" name="ecost" class="form-control" value="<?php echo $row1->ecost;?>"></td>
</tr>
<tr>
<td>Bussiness Cost:</td>
<td><input type="text" name="bcost" class="form-control" value="<?php echo $row1->bcost;?>"></td>
</tr>
<tr>
<td>First Class Cost:</td>
<td><input type="text" name="fcost" class="form-control" value="<?php echo $row1->fcost;?>"></td>
</tr>



<input type="hidden" name="f_id" value="<?php echo $row1->f_id;?>">

</tr>
</table>
<td><input type="submit" class="btn btn-dark  btn-sm" name="update" value="update" style="width: 80px;" ></td>
</center>
<?php
}
}
else{
?>

<table class="table table-striped table-hover table-info table-bordered">
<thead>
<h3 class="text-center h2">FLIGHT DETAILS</h3>
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
<th>Action</th>
<th>Action</th>




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
<input type="hidden" name="id" value="<?php echo $row->f_id;?>">
<td><a href="<?php echo base_url()?>main/updatedetails/<?php echo $row->f_id;?>">Update</a></td>
<td><a href="<?php echo base_url()?>main/deletedetails/<?php echo $row->f_id;?>">Delete</a></td>
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
}
?>


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