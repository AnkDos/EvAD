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
    $img=trim($_POST['myFile']);
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
    <title>Simple Sidebar - Start Bootstrap Template</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
     <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>

    <!-- Custom CSS -->
    <link href="css/simple-sidebar.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->



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
                        Start Bootstrap
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
                    <a href="#">Overview</a>
                </li>
                <li>
                    <a href="#">Events</a>
                </li>
                <li>
                    <a href="#">About</a>
                </li>
                <li>
                    <a href="#">Services</a>
                </li>
                <li>
                    <a href="#">Contact</a>
                </li>
            </ul>
        </div>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->








        <div id="page-content-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1>Simple Sidebar</h1>
                        <p>This template has a responsive menu toggling system. The menu will appear collapsed on smaller screens, and will appear non-collapsed on larger screens. When toggled using the button below, the menu will appear/disappear. On small screens, the page content will be pushed off canvas.</p>
                        <p>Make sure to keep all page content within the <code>#page-content-wrapper</code>.</p>
                        
                       <div id="divfix"> <a href="#menu-toggle" class="btn btn-default" id="menu-toggle">Toggle Menu</a> </div>
                    </div>
             </div>
    <!-- /#wrapper -->

<?php
if(!isset($_GET['pe']))
{
?>

<center>
<div class="card">
  <img src="img_avatar.png" alt="Avatar" style="width:100%">
  <div class="container">
    <h4><b>John Doe</b></h4> 
   <h6> <p>Architect & Engineer :  jijidfiiofh f</p>
    
    <p>Architect & Engineer :  jijidfiiofh k;jii ffiouri wior i iu isoyiyou Iui esuioi io hi hiohtuiohdsuohuhuh suyudshuhuhguh uuoh oiohsdui hoi yf</p>
    
    <p>Architect & Engineer :  jijidfiiofh f</p> 
    <p><a href="#menu-toggle" class="btn btn-default" id="menu-toggle">Visit The Site</a></p>
  </h6>
  </div>
</div>
<div class="card">
  <img src="img_avatar.png" alt="Avatar" style="width:100%">
  <div class="container">
    <h4><b>John Doe</b></h4> 
    <p>Architect & Engineer</p> 
  </div>
</div>
</center>
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


<h3>Using CSS to style an HTML Form</h3>

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
  <input type="file" name="myFile">
<div class="col-md-6 ">
    <label for="lname">Submitted by(Email)</label>
   <input type="email" id="lname" name="sb" placeholder="Your last name.." required>
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

</body>

</html>
