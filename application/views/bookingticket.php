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
    <style>
        .bg1{
    background-image: url(../img/3.jpg);
    background-size: cover;
}
#form{
    background-color: #000;
    height:550px;
    width:700px;
    margin:auto;
    padding:20px;
    opacity: 0.7;

}
#form h3{
    border-bottom: 2px solid #3399ff;
    width:210px;
    padding: 5px;
}
::placeholder{
    color:#fff
}
#input #group{
    width:300px;
    margin:5px;
    border-top: none;
    border-left: none;
    border-right: none;
    outline: none;
    background: transparent;
    color:#fff
}
#input2 #group{
    width:195px;
    margin:5px;
    border-top: none;
    border-left: none;
    border-right: none;
    outline: none;
    background: transparent;
    color:#fff
}
#input3 #group{
    margin-left: 50px;
}
#input4 #group{
    width:300px;
    margin:5px;
    border-top: none;
    border-left: none;
    border-right: none;
    outline: none;
    background: transparent;
    color:#fff
}
#input4 #group1{
    width:615px;
    margin:5px;
    border-top: none;
    border-left: none;
    border-right: none;
    outline: none;
    background: transparent;
    color:#fff
}
#input5 h3{
    border-bottom: 2px solid #3399ff;
    width:220px;
    padding: 5px;
}
#input6 #group{
    width:300px;
    margin:5px;
    border-top: none;
    border-left: none;
    border-right: none;
    outline: none;
    background: transparent;
    color:#fff
}
#input6 #group1{
    width:615px;
    margin:5px;
    border-top: none;
    border-left: none;
    border-right: none;
    outline: none;
    background: transparent;
    color:#fff
}
    </style>
<body class="bg1">
<!------header section---->
<!--container-->
<div class="container">
<!----form---->
        <form class="form-group" method="post" action="<?php echo base_url()?>main/bookinsrt">
            <h1 class="text-center text-white">Airline Booking Form</h1>

            <div id="form">
                <h3 class="text-white">Booking Details</h3>
        

            <div id="input">
                 <?php
if($n->num_rows()>0)
{
foreach($n->result() as $row)
{
?>
                <input type="text" name="from" id="group" required="" value="<?php echo $row->flyfrom;?>">
                <input type="text" name="to" id="group" required="" value="<?php echo $row->flyto;?>">
                <input type="text"  name="date" id="group" required="" placeholder="Departure Date" value="<?php echo $row->date;?>">
                <input type="text"  name="flightid" id="group" required="" value="<?php echo $row->flightid;?>">
                <!-- <input type="text" id="group" placeholder="Departure Time"> -->
                <!-- <select name="airline" id="group" style="background: black;">
                    <option value="">Preffered Airline</option>
                    <option value="indigo">IndiGo</option>
                    <option value="airindia">AirIndia</option>
                    <option value="spacejet">SpaceJet</option>
                </select> -->
                 <input type="text"  name="airline" id="group" required="" placeholder="Prefered airline" value="<?php echo $row->cname;?>">
                <select name="seating"  id="group" style="background: black;">
                    <option value="">Preffered Seating</option>
                    <option value="economy">Economy Class</option>
                    <option value="business">Business Class</option>
                    <option value="first">First Class</option>
                </select>
                <select name="usertype" required="" id="group" style="background: black;">
                    <option value="">Preffered group</option>
                    <option value="adult">Adult</option>
                    <option value="seniour">Seniour citizen(above 60)</option>
                    <option value="infant">infant(0-2)</option>
                </select>
                </div>
               <!--  <div id="input2">
                    <input type="number" name="adult" id="group" placeholder="Adult">
                    <input type="number" name="child" id="group" placeholder="Children(2-11years)">
                    <input type="number"name="infant" id="group" placeholder="infant(under 2years)">
                    <input type="number" name="senior" id="group" placeholder="senior citizen">
                </div> -->
               
                <!-- <div id="input4">
                    
                    <input type="text" id="group1" placeholder="Any Message">
                </div> -->
                <div id="input5">
                    <h3 class="text-white">Personal Details</h3>
                </div>
                <div id="input6">
                    <input name="name"type="text" id="group" required="" maxlength="30" pattern="[a-zA-Z]+" placeholder="Full Name">
                    <input name="phone" type="number" id="group" placeholder="Phone Number" required pattern="[6-9]{1}[0-9]{9}">
                    <input name="email" type="email" id="group1" placeholder="Email">
                </div>
                <input type="hidden" name="f_id" value="<?php echo $row->f_id;?>">
                <button name="submit" type="submit" class="btn btn-warning text-white">Submit Form</button>
                <button type="reset" class="btn btn-primary">Clear Form</button>
            </div>
            <?php
        }
    }
    ?>
        </form>
    </div>
</body>

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

