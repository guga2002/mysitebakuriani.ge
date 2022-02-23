<?php
session_start();
if (!isset($_COOKIE['admin'])){// tu cookies ukve mkvdaria
    echo '<script language="javascript">';
    echo 'alert("თქვენს სესიას ვადა გაუვიდა გთხოვთ თავიდან შემოხვიდეთ რათა იხილოთ ეს გვერდი")';
    echo "<script> location.href='signin.php'; </script>";
    }
     else setcookie('admin','abc',time()+650);//tu moxda ganaxleba  raime aqtivoba mashin dro gaxangrdzlibvdes 10 wutit

if(isset($_POST['submit']))
{
    $to_email = $_POST['email'];
    $subject = "you just booked our trip";
    $body = "our trip would be start soon ,if have any question just ask me";
    $headers = "From: sender email";
    
    if (mail($to_email, $subject, $body, $headers)) {
        echo "Email successfully sent to $to_email...";
    } else {
        echo "Email sending failed...";
    }

    
    echo '<script language="javascript">';
echo 'alert("თქვენს წარმატებით დაჯავშნეთ ტური სიახლეს იხილავთ თქვენს ელექტონულ ფოსტაზე")';
echo '</script>';
    echo "<script> location.href='index.php'; </script>";
    exit;

}

if(isset($_SESSION['user']))
{
  
}
else echo' <p style="position:absolute;background-color:gray; border:2px solid gray;border-radius:8px;"><a style="color:green;"href="signin.php">შედი საიტზე</a> </p>';

?>



    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="author" content="გურამ აფხაზავა">
        <meta name="keywords" content="HTML, CSS, JavaScript,Jqury,PHP">
        <meta name="description" content="my project for web development">
        <link href="style/site.css" type="text/css" rel="stylesheet" />
        <link rel="icon" href="images/logo/logomgzavrebi.png">
        <title>ჯავშანი</title>
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
            <div id="P1">
                <table height="50px" width="1205px" cellpadding="" cellspacing="">
                    <tr>
                        <td><a href="index.php">მთავარი<a></td>
               
                <?php  
if(isset($_SESSION['user']))
{
echo ' <td><a href="aboutus.php">ჩვენს შესახებ<a></td>';
}
else echo ' <td><a href="signin.php">ჩვენს შესახებ<a></td>';
                   
                   ?>
                <?php  
if(isset($_SESSION['user']))
{
echo '<td><a href="news.php" target="_blank">სიახლეები</a></td>'; } else echo '
                        <td><a href="signin.php" target="_blank">სიახლეები</a></td>'; ?>
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
echo '  <td><a href="contactus.php">კონტაქტი<a></td>';
}
else echo '  <td><a href="signin.php">კონტაქტი<a></td>';
                   
                   ?>

                    </tr>
                </table>
            </div>
            <table height="50px" width="1200px" border="0">
                <tr>
                    <td width="500" height="50" align="left">
                        <font color="#ABABAB" size="5"><span>სასტუმრო მგზავრები </span></font>
                    </td>
                    <td width="500" height="50" align="right">
                        <font color="#ABABAB" size="5"><span id="date"></span><span id="greets"></span></font>
                    </td>
                </tr>
            </table>


            <div class="javshani">
                <form id="form" action="" method="post">
                    <fieldset>

                        <div class="fix1">
                            <legend>დაჯავშნე დასასვენებელი ადგილი</legend>
                            <label for="fname"> სახელი: 				
				</label>
                            <br/>
                            <input id="fname" type="text" name="firstname">
                            <br/>
                            <label for="Iname"> გვარი : 
								</label>
                            <br/>
                            <input id="lname" type="text" name="lastname"> <br/>
                            <label for="address"> მისამართი : 
							
				</label>
                            <br/>
                            <input id="address" type="text" name="address"> <br/>
                            <label for="phone"> ტელეფონი : 		
				</label>
                            <br/>
                            <input id="phone" type="number" name="Phone"> <br/>
                            <label for="email"> იმეილი : 			
				</label><br/>
                            <input id="email" type="email" name="email"><br/>
                            <label for="room">ოთახი : </label>
                            <br/>
                            <select id="room" name="level">
					<option value="">აირჩიეთ ოთახი</option>
					<option value="deluxe">ერთკაციანი ოთახი</option>
					<option value="sdeluxe">ორკაციანი ოთახი</option>
					<option value="royal">სამეფო ოთახი</option>
					<option value="BS">ბიზნეს ოთახი</option>
					<option value="Honey">წყვილისთვის მყუდრო ოთახი</option>
					</select>
                            <br/>
                            <label for="ext">დამატებით : </label>
                            <br/>
                            <select id="extra" name="level">
					<option value="">აირჩიეთ პაკეტი</option>
					<option value="bunjee">თხილამურებით გასერნება</option>
					<option value="Trekking">კინო</option>
					<option value="Rafting">ექსკურსია</option>
					<option value="Camping">გართობა</option>
					<option value="paragliding">პარაშუტით გადმოხტომა</option>
					<option value="boating">საბაგირო</option>
					<option value="Zip-Flyer">საქორწინო წვეულება</option>
					<option value="Jungle safari">სხვა</option>
					
					</select>
                            <br/>
                            <p>
                                <label>
    გადახდა:
</label>
                                <br/>
                                <input type="radio" name="payment" value="yes" /> ვიზა ქარდ
                                <label>
<input type="radio" name="payment" value="yes"/> მასტერ ქარდ
</label>
                                <input type="radio" name="payment" value="no" /> ფეიფალი
                                </label>
                            </p>
                            <br/>
                            <label for="card"> ბარათის კოდი :		
				</label><br>
                            <input id="card" type="number" name="card">
                            <br/>
                            <label for="amount"> გადასახდელი თანხა : 
            </label>
                            <br/>
                            <input id="amount" type="number" name="amount">
                            <br/><br/>
                            <input type="submit" value="დაჯავშნე ახლავე" name="submit">

                            <br />
                            <br/>
                            <p class="log"> <a href="signin.php">შესვლა </a></p>
                            <p id="errorMessage" class="error">
                            </p>


                            <p id="successMessage" class="success">
                            </p>

                        </div>

                    </fieldset>

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
            <script src="new.js"></script>
            <script src="slider.js"></script>
        </div>
    </body>

    </html>