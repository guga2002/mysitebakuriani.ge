<?php
session_start();
// aq agar chavsvi is kodi romelic gamoagdebs umoqmedonbis dros radgan es  gverdi xelmisawvdomia araavtorizebuli momxmareblebistvisac
// if (!isset($_COOKIE['admin'])){// tu cookies ukve mkvdaria
//     echo '<script language="javascript">';
//     echo 'alert("თქვენს სესიას ვადა გაუვიდა გთხოვთ თავიდან შემოხვიდეთ რათა იხილოთ ეს გვერდი")';
//     echo "<script> location.href='signin.php'; </script>";
//     }
//      else setcookie('admin','abc',time()+650);//tu moxda ganaxleba  raime aqtivoba mashin dro gaxangrdzlibvdes 10 wutit

if(isset($_SESSION['user']))
{
}
else echo' <p style="position:absolute;background-color:gray; border:2px solid gray;border-radius:8px;"><a style="color:#b2d6e6;"href="signin.php">შედი როგორც ადმინმა</a> </p>';

$x=1;
                if(isset($_COOKIE['mtvleli1']))
                {
                                $x=$_COOKIE['mtvleli1'];
                                $x=$x+1;
                                setcookie('mtvleli1',$x,time()+3600);
                }  
                 else
                 {   setcookie('mtvleli1',1);
                  echo "<p><font color=gray style='position:absolute;left:35%;font-size:20px;font-style=italic;'></font></p>";
                }
                echo "<p><font color=gray style='position:absolute;left:35%;font-size:20px;font-style=italic;'>თქვენ ჩვენს გვერდს ეწვიეთ $x ჯერ</font></p>";
                 if($x>100)
                 {
                   echo"<p><font color=#29648A style='position:absolute;font-weight:bold;left:33%;top:5%;font-size:20px;font-style=italic;'>ერთგულ მომხმარებლებზე  აქციები გვაქვს :) <3</font></p>";
                 }

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
        <title>გურამ აფხაზავა</title>
        <link href="style/site.css" type="text/css" rel="stylesheet" />
        <link rel="icon" href="images/logo/logomgzavrebi.png">
        
    </head>

    <body>


        <header>
            <!-- <a href="index.html">
            <img src="images/crystall.jpg" height="230px" width="250px" style="border-radius: 30px;">
        </a> -->
            <div class="shesvla"><a href="signin.php"> შესვლა</a></div>
            <div class="registracia"> <a href="registracia.php">რეგისტრაცია</a></div>
            <?php 
        if(isset($_SESSION['user'])){
       
            echo '<style>.shesvla { display:none;}</style>';
            echo '<style>.registracia { display:none;}</style>';
        }
       else  echo '<style>.shesvla {display:}</style>';
       ?>
            <form action="" method="post">
                <input type="submit" style="position:absolute;left:85%;top:3%; width:130px;height:30px; background-color:gray;border-radius:15px; " name="logout" class="logout" value="logout">
            </form>
            <?php
     if(!isset($_SESSION['user']))
     {
        echo '<style>.logout { display:none;}</style>';
     }
if(isset($_POST['logout']))
{
    echo "<script> location.href='signin.php'; </script>";
    echo "<script> location.href='signin.php'; </script>";
    exit;
    
}

 ?>
        </header>
        <div id="page">
            <div id="p1">
                <table height="50px" width="1205px" cellpadding="" cellspacing="">
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
else echo ' <td><a href="signin.php">კონტაქტი</a></td>';
                   
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

            <img id="topimg" src="images/home/1.jpg " height="450px " width="1000px " />
            <h1 align="center " class="mnish " margin-top="5px "> მნიშვნელოვანი ადგილები </h1>
            <!-- <hr> -->
            <div class="div4">
                <h1 align="center"><a href="javshani.php ">მგზავრები გონიოში</a></h1>
                <img style="border-radius: 8px;" src="images/logo/gonio.jpg" height="200px " width="300px ">
                <p align="center"> დაჯავშნე ახლავე და გაატარე დაუვიწყარი დრო.</p>
            </div>
            <div class="div4">
                <h1 align="center"><a href="javshani.php ">ტური ბაკურიანში</a></h1>
                <img style="border-radius: 8px;" src="images/bakuriani ori.jpg" height="200px " width="300px ">
                <p align="center ">სასტუმრო მგზავრები გთავაზობთ ერთ კვირიან ტურს 2+1 აქციით... </p>
            </div>
            <div class="div4">
                <h1 align="center"><a href="javshani.php ">გართობა ბაკურიანში</a></h1>
                <img style="border-radius: 8px;" src="images/ბაკურიანი.jpg " height="200px " width="300px ">
                <p align="center"> გაატარე ზამთარი ბაკურიანში და გახადე ცხოვრება მარტივი...</p>
            </div>
            <div class="div4">
                <h1 align="center"><a href="javshani.php">გრანდიოზული აქცია</a></h1>
                <img style="border-radius: 8px;" src="images/gonio2.jpg " height="200px " width="300px ">
                <p align="center">
                    ივლისის შეთავაზება 2+1 სტუმარზე 4 დღე/3 ღამით გონიოს სასტუმროში...</p>
            </div>
            <br/>
            <br/>
            <br/>
            <div class="fix">
                <div class="footer">
                    <div class="coin">
                        <a href="https://www.viber.com/ " target="_blank "><img src="images/logo/vb.png " width="30" height="30"></img>
                        </a>
                        <a href="https://www.twitter.com/ " target="_blank "><img src="images/logo/twt.png " width="30" height="30"></img>
                        </a>
                        <a href="https://www.facebook.com/ " target="_blank "><img src="images/logo/fb.png " width="30" height="30"></img>
                        </a>
                        <a href="https://www.instagram.com/ " target="_blank "><img src="images/logo/in.jpg " width="30" height="30"></img>
                        </a>
                        <a href="https://www.snapchat.com/ " target="_blank "><img src="images/logo/sc.png " width="30" height="30"></img>
                        </a>
                    </div>
                    <h4 id="footer1"></h4>
                    <h4 id="footer2"></h4>


                </div>

                <script src="slider.js"></script>
            </div>
        </div>
    </body>

    </html>