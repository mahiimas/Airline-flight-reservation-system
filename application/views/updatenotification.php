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
        </head>
<style>
{
padding:0px;
margin:0px;
}

</style>
<body>
<form method="post" action="<?php echo base_url()?>main/adminupdate">

<?php
if(isset($user_data))
{
foreach($user_data->result() as $row1)
{
?>
<fieldset>
<table class="table table-striped table-info">
     
Notification
<textarea name="notification"><?php echo $row1->notification;?></textarea></br></br>
<input type="hidden" name="n_id" value="<?php echo $row1->n_id;?>">
<input type="submit" value="update" name="update">
<?php
}
}?>


</table>
</fieldset>
</form>
</body>
</html>

