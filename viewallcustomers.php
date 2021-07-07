<!DOCTYPE html>
<html>
  <head>
      <link rel="stylesheet"href="bootstrap/css/bootstrap.min.css"type="text/css">
      <script type="text/javascript" src="bootstrap/jquery-3.5.1.min.js"></script>
      <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
      <link href="css/index.css"rel="stylesheet"type="text/css">
    <title>Banking System</title>
  </head>
    <body>
    <nav class="navbar navbar-inverse navbar-fixed-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>                        
                    </button>
                    <a href="index.php" class="navbar-brand" href="#">Basic Banking System</a>
                  
                </div>
                <div class="collapse navbar-collapse" id="myNavbar">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="index.php"><span class="glyphicon glyphicon-home"></span> Home</a></li>
                        <li><a href="viewallcustomers.php"><span class="glyphicon glyphicon-user"></span> User</a></li>
                        <li><a href="transfermoney.php"><span class="glyphicon glyphicon-log-in"></span>Transfer Money</a></li>

                    </ul>
        </div>
      </div>
    </nav>
    
<?php
include 'config.php';
$sql = "SELECT * FROM users";
$result = mysqli_query($conn,$sql);
?>
<div class="containers">
<div class="eleven">
  <h2>View Customers Details</h2>
</div>  
<div class="row">
<div class="col">
<div class="table-responsive-sm">
                    <table class="table table-hover table-sm table-striped table-condensed table-bordered" style="border-color:black;">
                        <thead style="color : black;">
<tr>
<th scope="col" class="text-center py-2">Id</th>
<th scope="col" class="text-center py-2">Name</th>
<th scope="col" class="text-center py-2">Details</th>
</tr>
</thead>
<tbody>
<?php 
while($rows=mysqli_fetch_assoc($result))
{
?>
<tr>
<td class="py-2"><?php echo $rows['id'] ?></td>
<td class="py-2"><?php echo $rows['name']?></td>
<td><a href="viewone.php?id= <?php echo $rows['id'] ;?>"> <button type="button" class="btn" style="background-color : #e3c946;">View Details</button></a></td> 
</a></td> 
</tr>
<?php
}
?>

</tbody>
</table>
</div>
</div>
</div> 
</div>
<footer class="footer">
        <div class="container">
           <center>
            <p>“Copyright ©PradnyaTawar. All Rights Reserved | Contact Us: +91 7350284384”.</p>
            </center>
        </div>
    </footer>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script> 
</body>
</html>