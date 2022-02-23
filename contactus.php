<?php
session_start();
if (!isset($_COOKIE['admin'])){// tu cookies ukve mkvdaria
    echo '<script language="javascript">';
    echo 'alert("თქვენს სესიას ვადა გაუვიდა გთხოვთ თავიდან შემოხვიდეთ რათა იხილოთ ეს გვერდი")';
    echo "<script> location.href='signin.php'; </script>";
    }
  else setcookie('admin','abc',time()+650);//tu moxda ganaxleba  raime aqtivoba mashin dro gaxangrdzlibvdes 10 wutit

if(isset($_SESSION['user']))
{

}
else echo' <p style="position:absolute;background-color:gray; border:2px solid gray;border-radius:8px;"><a style="color:green;"href="signin.php">შეხედე როგორც სტუმარმა</a> </p>';

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
    <title>კავშირები</title>
    <link rel="Stylesheet" href="style/site.css">
    <link rel="icon" href="images/logo/logomgzavrebi.png">

</head>

<body style= "overflow-x: hidden;">

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
        <input type="submit" style="position:absolute;left:85%;top:3%; width:130px;height:30px; background-color:gray;border-radius:15px; " name="logout"  class="logout" value="logout">
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
                    <font color="#ABABAB" size="5"><span>სასტუმრო მგზავრები </span></font>
                </td>
                <td width="500" height="50" align="right">
                    <font color="#ABABAB" size="5"><span id="date"></span><span id="greets"></span></font>
                </td>
            </tr>
        </table>



        <!--<img class="img" src="images/map.jpg" alt="map">-->
        <div class="map" style="margin-top: 30px;">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d47628.40304554406!2d43.49289828863544!3d41.746941672257066!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x404316197e7e1f63%3A0x74a1b8db49722b50!2sBakuriani!5e0!3m2!1sen!2sge!4v1638606173539!5m2!1sen!2sge"
                width="43%" height="450px" style="border:0; border-radius: 20px;" allowfullscreen="" loading="lazy"></iframe>

            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d23880.803733364388!2d41.55513147895146!3d41.5670701805335!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x406790222d4761b9%3A0xed10bb454d7d9558!2sGonio!5e0!3m2!1sen!2sge!4v1640802126029!5m2!1sen!2sge"
                width="43%" height="450" style="border:0; border-radius: 20px; margin-left: 100px;;" allowfullscreen="" loading="lazy"></iframe>

        </div> <br/>
        <div id="search" style="margin-bottom: 30px; margin-top:20px;border-radius: 15px;">
            <form action="http://maps.google.com/maps" method="get" target="_blank">
                <label for="saddr">იპოვე გზა ჩვენს სასტუმრომდე</label>
                <input style="border-radius: 15px;" type="text" name="saddr" />
                <input type="hidden" name="daddr" value="350 5th Ave New York, NY 10018 (Empire State Building)" />
                <input style="border-radius: 15px;" type="submit" value="Get directions" />
            </form>
        </div>


        <section class="contactus">

            <div id="box0">
                გზავრები ბაკურიანი: წაქაძის ქუჩა #1 მდებარეობა : სასტუმრო მდებარეობს ბაკურიანის ცენტრში, კოხტა გორის გადასახვევთან კომპლექსიდან სულ რაღაც 2 კილომეტრშია ე.წ 25 მეტრიანი სასრიალო ტრასა, კოხტა გორის საბაგირომდე 600 მეტრში. თბილისსა და ბაკურიანს შორის მანძილი
                180კმ-ია, ხოლო ბორჯომიდან ის მხოლოდ 30კმ-შია. მგზავრები ბაკურიანი - თავისი უნიკალური კლიმატური პირობების წყალობით, საუკეთესო დასასვენებელი ადგილია როგორც ზამთრის სეზონზე ასევე ზაფხულში! ის ერთნაირად მომხიბვლელია როგორც ოჯახების დასვენებისათვის,
                ასევე სპორტისა და ბუნების მოყვარული ახალგაზრდებისათვის კომპლექსი მოიცავს 8 მოქმედ კორპუსს და 27 კოტეჯს.
            </div>
            <div id="box1">
                მგზავრები გონიო: ქ.ბათუმი, გონიოს დასახლება მდებარეობა : სასტუმრო მდებარეობს გონიოს ცენტრში, აქვს ულამაზესი სანაპირო, სასტუმრო კეთილმოწყობილია ყველაფრით, რაც დაგეხმარებათ გაატაროთ ზღაპრული დასვენება. მგზავრები გონიო - უნიკალურია თავისი სილამაზით. სასტუმროს
                ტერიტორიაზე გვაქვს ყველაფერი, როგორც ბარი ისე რესტორანიც. დაგვიკავშირდით - (+995) 571 900-905.ქ.ბათუმი,გონიოს დასახლება (+995) 571 900-905

            </div>

        </section>
        <section>

            <div class="infoclass">
                სტანდარტი 95 $ <br/>ლუქსი 110 $<br/> ლუქსი + 120 $<br/> აპარტამენტი 130 $ <br/>კოტეჯი 190 $<br/> ხის კოტეჯი 165 $<br/> ფასში შედის : საუნა, აუზი, ბავშთა გასართობი ცენტრი<br/> სასტუმროს ტერიტორიაზე: რესორანი, ბარი, მაღაზია, თონე, საკონფერენციო
                დარბაზი,ბილიარდი სამჯერადი კვება 15 USD ერთ ადამიანზე (შვედური მაგიდა).<br/>ნომერში არის ინტერნეტი, WI-FI, ტელევიზია, გათბობა, კონდიცირება, მაცივარი <br/>მომსახურება: დილის საუზმე, გაღვიძების სერვისი, დაუთოება, სამრეცხაო, პარკინგი.<br/>                სხვა სერვისი: ბარი, რესტორანი, დახურული საცურაო აუზი.


            </div>
        </section>

        <!-- <div id="search">
            <form action="http://maps.google.com/maps" method="get" target="_blank">
                <label for="saddr">იპოვე გზა ჩვენს სასტუმრომდე</label>
                <input type="text" name="saddr" />
                <input type="hidden" name="daddr" value="350 5th Ave New York, NY 10018 (Empire State Building)" />
                <input type="submit" value="Get directions" />
            </form>
       < -->

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
    </div>

</body>

</html>