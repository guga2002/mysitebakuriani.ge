<?php
session_start();
if(isset($_POST['submit']))
{
    $_SESSION['user']="hello welcome";
    setcookie('admin','guga',time()+650);//gamoviyenebt imistvis rom gavakontrolot saitze yofnis dro
}
else unset($_SESSION['user']);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="გურამ აფხაზავა">
    <meta name="keywords" content="HTML, CSS, JavaScript,Jqury,PHP">
    <meta name="description" content="my project for web development">
    <title>ავტორიზაცია</title>
    <link rel="Stylesheet" href="style/site.css">
    <link rel="icon" href="images/logo/logomgzavrebi.png">
</head>

<body>
    <header>
        <!-- <a href="index.html">
            <img src="images/crystall.jpg" height="230px" width="250px" style="border-radius: 30px;">

        </a> -->
        
       <div style="none" class="shesvla"><a href="signin.php"> შესვლა</a></div>
        <div class="registracia"> <a href="registracia.php">რეგისტრაცია</a></div>
        
        

    
    
    </header>
    <div id="page">
        <div id="p1">
            <table height="50px" width="1205px" cellpadding="" cellspacing="">
                <tr>
                <tr>
                    <td>
                        <a href="index.php">მთავარი</a>
                    </td>
                    
                    <?php  
if(isset($_SESSION['user']))
{
echo '<td><a href="aboutus.php" target="_blank">ჩვენს შესახებ</a></td>';
}
else echo '<td><a href="signin.php" target="_blank">ჩვენს შესახებ</a></td>';
                   
                   ?>
                    <?php  
if(isset($_SESSION['user']))
{
echo '<td><a href="news.php" target="_blank">სიახლეები</a></td>';
}
else echo '<td><a href="signin.php" target="_blank">სიახლეები</a></td>';
                   
                   ?>
                    <?php  
if(isset($_SESSION['user']))
{
echo '<td><a href="javshani.php">დაჯავშნე ტური</a></td>';
}
else echo '<td><a href="signin.php">დაჯავშნე ტური</a></td>';
                   
                   ?>

<?php  
if(isset($_SESSION['user']))
{
echo ' <td><a href="contactus.php">კონტაქტი</a></td>';
}
else echo '<td><a href="signin.php">კონტაქტი</a></td>';
                   
                   ?>
                </tr>
            </table>
        </div>
        <table height="50px" width="1200px" border="0">
            <tr>
                <td width="500" height="50" align="left">
                    <font color="#ABABAB" size="5"><span>სასტუმრო მგზავრები</span></font>
                </td>
                <td width="500" height="50" align="right">
                    <font color="#ABABAB" size="5"><span id="date"></span><span id="greets"></span></font>
                </td>
            </tr>
        </table>
        <div class="clk">

            <center>
                <h1> შეავსეთ ავტორიზაციის ფორმა </h1>
            </center>
            <form method="post">
                <div class="container">
                    <center>
                        <label>ელ.ფოსტა: </label>
                        <br/>
                        <input type="text" id="login" placeholder="შეიყვანეთ ელ.ფოსტა" name="username" required>
                        <br/>
                        <br/>
                        <label>პაროლი : </label>
                        <br/>
                        <input type="password" id="password" placeholder="შეიყვანეთ პაროლი" name="password" required>
                        <br/>
                        <br/>
                        <label for="sign">ადმინისტრატორი</label>
                        <input type="radio" id="sign" name="add" value="admin">
                        
                        <label for="sign">მომხმარებელი</label>
                        <input type="radio" id="sign" name="add" value="user">
                        <br/>
                        <input type="reset" class="cancelbtn" value="გაუქმება">
                        <br/>
                        <input type="submit" value="შესვლა" id="gugaapkhazava" name="submit">
                        <br/>
                        <a href="#"> დაგავიწყდა პაროლი? </a></center>
                </div>
            </form>
        </div>

        <div class="fix">
            <div class="footer">
                <div class="coin">
                    <a href="https://www.viber.com/" target="_blank"><img src="images/logo/vb.png" width="30" height="30"></img>
                    </a>
                    <a href="https://www.twitter.com/" target="_blank"><img src="images/logo/twt.png" width="30" height="30"></img>
                    </a>
                    <a href="https://www.facebook.com/" target="_blank"><img src="images/logo/fb.png" width="30" height="30"></img>
                    </a>
                    <a href="https://www.instagram.com/" target="_blank"><img src="images/logo/in.jpg" width="30" height="30"></img>
                    </a>
                    <a href="https://www.snapchat.com/" target="_blank"><img src="images/logo/sc.png" width="30" height="30"></img>
                    </a>
                </div>

                <h4 id="footer1"></h4>
                <h4 id="footer2"></h4>
            </div>
        </div>

        <script src="slider.js"></script>
        <script src="new.js"></script>
    </div>

</body>

</html>

<?php

if(isset($_POST['submit']) )
{

 $asd=$_POST['add'];

if($asd=="admin")
{
   $file=fopen("admindata.txt","r");
   $em=$_POST['username'];
  $ps=$_POST['password'];
   while($row = fgets($file)) {
  $num = explode("/", $row);
  $email=$num[4];
  $email=trim($email);
  $pass=$num[5];
  $pass=trim($pass);
  if($pass==$ps && $email==$em)
  {
    setcookie('adminis','thatisvalue',time()+550);
    echo "<script> location.href='admintools.php'; </script>";
    exit;
  }
  
    
  }
   
  
  echo '<script language="javascript">';
  echo 'alert("პაროლი ან ემაილი არის არასწორი ,სცადეთ თავიდან")';
  echo '</script>';
  
  }


if($asd=="user")
{

 $file=fopen("datai.txt","r");
 $em=$_POST['username'];
$ps=$_POST['password'];
 while($row = fgets($file)) {
$num = explode("/", $row);
$email=$num[4];
$email=trim($email);
$pass=$num[5];
$pass=trim($pass);
if($pass==$ps && $email==$em)
{
    echo "<script> location.href='news.php'; </script>";
    exit;
}
  
}

echo '<script language="javascript">';
echo 'alert("პაროლი ან ემაილი არის არასწორი ,სცადეთ თავიდან")';
echo '</script>';

}
}
else echo "";

?>