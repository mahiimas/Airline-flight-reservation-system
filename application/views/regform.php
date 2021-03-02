<!DOCTYPE html>
<html>
    <head>
        <title>Assignment2</title>
            <meta charset=utf-8>
            <meta name="viewport" content="width=device-width,initial-scale=1">
            <!---Fontawesome--->
            <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
            <!---Bootstrap5----->
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
            <!---custom style---->
            <link rel="stylesheet" href="../css/styl.css">
    </head>
    <style>
      .bg
      {
        background-image: url('../img/p6.jpg');
        background-size: cover;
      }
    </style>
<body class="bg">
<!-- main section start -->
<section class="">
  <li class="nav-item "><a href="<?php echo base_url()?>main/index"><button type="button" class="btn btn-success" id="">Home</button></a></li>
<div class="container ">
<div class="row">
<div class="col-6">
  
</div>

<div class="col-6 py-3 mt-4 text-right">
<h3 class="text-dark h2 text-center">REGISTRATION</h3>
<!-- <img src="img/sg.jpg" alt="sample" class="img-fluid img">
 --><!-- </div> -->
<!-- <div class="col-6 box1"> -->
  

<form action="<?php echo base_url()?>main/reg" method="POST" class="border  border-2 border-light p-5 rounded-bottom rounded bg-dark">

  <div class="row">
    <div class="col-10 mb-3">
      <input type="text" class="form-control" placeholder="First name" name="fname" required maxlength="25" pattern="[a-zA-Z]+" >
       
    </div>
  </div>
  <div class="row">
      <div class="col-10 mb-3">
            <input type="text" class="form-control" placeholder="Last name" name="lname"required maxlength="25" pattern="[a-zA-Z]+" >
          </div>
        </div>
        <div class="row mb-3">
    <div class="col-10">
      <input type="number" class="form-control" placeholder="age"  name="age" required="">
    </div>
  </div>
<div class="mb-3">
<input class="form-check-input" name="gender" type="radio"  value="female"id=female>
<label class="form-check-label " for=female  >female</label>
<input class="form-check-input" name="gender" value="male" type="radio" id=male>
<label class="form-check-label " for="male" >male</label>
</div>
<div class="mb-3">
  <textarea class="form-control" placeholder="address" rows="3" name="address" required></textarea>
</div>
<div class="row mb-3">
    <div class="col-10">
      <input type="text" class="form-control" placeholder="phone-no" name="phone" required pattern="[6-9]{1}[0-9]{9}">
    </div>
  </div>
  
  <div class="row mb-3">
    <div class="col-10">
      <input type="email" class="form-control" placeholder="email" name="email" required >
    </div>
  </div>
  <div class="row mb-3">
    <div class="col-10">
      <input type="password" class="form-control" placeholder="password" name="password" required pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" >
    </div>
  </div>
  <input type="submit" name="submit" class="btn btn-warning" value="sign-up">

  <a href="<?php echo base_url()?>main/index">Sign-In</a>
 
  </form>
 
</div>

</div>
</div>
</section>
<!-- main section end -->


<script src="js/jquery.js"></script>
<script src="js/script.js"></script>
</body>
</html>