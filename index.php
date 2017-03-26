<?php 

include 'dbconnect.php';

define("UPLOAD_DIR", "/var/www/html/Event Resources/uploads/");


if(isset($_POST['btn']))
{
    $en=trim($_POST['en']);
    $uv=trim($_POST['uv']);
    $cty=trim($_POST['cty']);
    $ws=trim($_POST['ws']);
    $desc=trim($_POST['ta']);
    $img=trim($_POST['hi']);
   
    $sb=trim($_POST['sb']);
    $dte=trim($_POST['date']);
    $do=mysql_query("insert into EveDe (eventname,id,college,City,Website,descb,img,sub_by,dte) Values ('$en','','$uv','$cty','$ws','$desc','$img','$sb','$dte')");   
    
    
    
    $myFile = $_FILES["myFile"];
if ($myFile["error"] !== UPLOAD_ERR_OK) {
echo "<p>An error occurred.</p>";
exit;
}
// ensure a safe filename
$name = preg_replace("/[^A-Z0-9._-]/i", "_", $myFile["name"]);
// don't overwrite an existing file
$i = 0;
$parts = pathinfo($name);
while (file_exists(UPLOAD_DIR . $name)) {
$i++;
$name = $parts["filename"] . "-" . $i . "." . $parts["extension"];
}
// preserve file from temporary directory
$success = move_uploaded_file($myFile["tmp_name"],
UPLOAD_DIR . $name);
if (!$success) {
echo "<p>Unable to save file.</p>";
exit;
}

if($sucess)
{

echo "Uploaded Sucessfully";

}

// set proper permissions on the new file
chmod(UPLOAD_DIR . $name, 0644);

   }



?>



<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, shrink-to-fit=no, initial-scale=2">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>EvAD</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
     <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>

    <!-- Custom CSS -->
    <link href="css/simple-sidebar.css" rel="stylesheet">

  



</head>

<body>

<style>
.card {
    box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
    transition: 0.3s;
    width: 40%;
}

.card:hover {
    box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
}

.container {
    padding: 18px 20px;
}
</style>
<style>

#divfix {
       bottom: 0;
       right: 0;
       position: fixed;
       z-index: 3000;
        }
</style>
    <div id="wrapper">

        <!-- Sidebar -->
        <div id="sidebar-wrapper">
            <ul class="sidebar-nav">
                <li class="sidebar-brand">
                    <a href="#">
                       Menu 
                    </a>
                </li>
               
            <?php
if(!isset($_GET['pe']))
{
?>
                <li>
                    <a href="?pe">Publish Event</a>
                </li>
                <?
}else{
                ?>
                <li>
                    <a href="?#">Check Events</a>
                </li>
                <?}?>
                
                <li>
               Search Event:
               
               
                </li>
                <li>
                    <a href="#">Subscribe</a>
                </li>
                <li>
                    <a href="#">Search Events</a>
                </li>
                <li>
                    <a href="#">About</a>
                </li>
                
            </ul>
        </div>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->








        <div id="page-content-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1>EvAD</h1>
                        <p>EvAD Helps you to post the adds about any event which is going around SRM university.</p>
                        <p>Every Small events /Seminar or Workshop Details are here so that you could'nt miss anything. </p>
                        
                        <p>You can see the events adds posted by other department OR you can post your own add for free. </p>
                        <p>Subscribe to the website using your email and we'll keep you updated by sending mails. </p>
                        
                        
                       <div id="divfix"> <a href="#menu-toggle" class="btn btn-default" id="menu-toggle">Toggle Menu</a> </div>
                    </div>
             </div>
    <!-- /#wrapper -->

<?php
if(!isset($_GET['pe']))
{
?>

<?
$va=mysql_query("select * from EveDe");
while($fet=mysql_fetch_array($va))
{
    
$ena=$fet['eventname'];
$clg=$fet['college'];
$cy=$fet['City'];
$ws=$fet['Website'];
$de=$fet['descb'];
$im=$fet['img'];
$s=$fet['sub_by'];
$dt=$fet['dte'];
?>


<center>
<div class="card">
  <img src="uploads/<?php echo $im;?>" alt="Avatar" style="width:100%">
  <div class="container">
    <h4><b><?php echo $ena;?></b></h4> 
   <h6> <p>College & City :  <?php echo $clg;?> and <?php echo $cy;?></p>
    
    <p>Description : <?php echo $de;?>  </p>
    
    <p>Date : <?php echo $dt;?></p>
    <p>Submitted By :  <?php echo $s;?></p> 
    <p><a href="<?php echo $ws;?>" target="_blank" class="btn btn-default" id="menu-toggle">Visit The Site</a></p>
  </h6>
  </div>
</div>
</center>

<?}?>
<?php
}
else{
    
?>




<style>
input[type=text], select {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}



input[type=email], select {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}

input[type=submit] {
    width: 50%;
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

input[type=submit]:hover {
    background-color: #45a049;
}

div {
    border-radius: 5px;
    background-color: #f2f2f2;
    padding: 20px;
}
</style>


<h3>Fill The  Form and Publish your Event Add :)</h3>

  <form method="post" enctype="multipart/form-data">
<div class="col-md-6 col-offset-3">

    <label for="fname">Event Name</label>
    <input type="text" id="fname" name="en" required >

    <label for="lname">College/Univ</label>
    <input type="text" id="lname" name="uv" required>
  </div>
  <div class="col-md-6">

 <label for="fname">City</label>
    <input type="text" id="fname" name="cty" Value="Chennai" readonly >

    <label for="lname">Website of the Event</label>
    <input type="text" id="lname" name="ws" placeholder="Your last name.." >
  
</div>

<div class="col-md-6 col-offset-3">
    <label for="lname">Description</label>
<textarea rows="4" cols="50" name="ta" required></textarea>
</div>

<div class="col-md-6 ">
  <?include 'datepick.html';?>
  <label for="lname">Upload Adv Image</label>
  <input type="file" name="myFile" id="mf" onchange="alertFilename()">
<div class="col-md-6 ">
    <label for="lname">Submitted by(Email)</label>
   <input type="email" id="lname" name="sb" placeholder="Your last name.." required></input>
   <input type="text" id="mytext" name="hi" value="">
 </div>

<div class="col-md-6 col-offset-3">

    <input type="submit" value="Submit" name='btn'>
  </form>
</div>











<?}?>

            </div>
        </div>
        <!-- /#page-content-wrapper -->

</div>    




    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
    
 <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

    <!-- Menu Toggle Script -->
    <script>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
    </script>
      <script>
  $( function() {
    $( "#datepicker" ).datepicker();
  } );
  </script>
  
  
  <script type="text/javascript">
            function alertFilename()
            {
                var thefile = document.getElementById('mf');
               // alert(thefile.value);
                document.getElementById("mytext").value = thefile.value;
            }
        </script>
  
</body>

</html>
