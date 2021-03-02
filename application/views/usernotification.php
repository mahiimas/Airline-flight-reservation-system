<!DOCTYPE html>
<html>
<head>
<title>Afrs</title>
</head>
<meta charset=utf-8>
            <meta name="viewport" content="width=device-width,initial-scale=1">

             <!---Fontawesome--->
            <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
            <!---Bootstrap5----->
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
<style>

fieldset{
width:500px;
height: 400px;

}

      .bg
      {
        background-image: url('../img/n.jpg');
        background-size: cover;
      }

{
padding:0px;
margin:0px;
}

.menubar
{
background-color:black;
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
.row
{

display:flex;
}
</style>
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

  <li> <a href="<?php echo base_url()?>main/logout">LOGOUT</a>
</ul>
</nav>
<div><h1 style="color: red;text-align: center">FLIGHT NOTIFICATIONS</h1></div>
<form method="post" action="">


<table>
<tr>
<table border="1" class="table table-bordered table-striped table-primary">
<thead>
<tr>
<th> Flight Name</th>
<th>Notification</th>
<th> Date</th>


</thead></tr>
<?php
if($n->num_rows()>0)
{
foreach($n->result() as $row)
{
?>
<tr>

<td><?php echo $row->cname;?></td>
<td><?php echo $row->notification;?></td>
<td><?php echo $row->currentdate?></td>

</tr>
<?php
}
}

    ?>
</table>
</fieldset>
</form>
</body>
</html>

