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
else echo' <p style="position:absolute;background-color:gray; border:2px solid gray;border-radius:8px;"><a style="color:green;"href="signin.php">შედი საიტზე</a> </p>';

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width, initial-scale=1.0">
    <meta name="author" content="გურამ აფხაზავა">
    <meta name="keywords" content="HTML, CSS, JavaScript,Jqury,PHP">
    <meta name="description" content="my project for web development">
    <title>ჩვენს შესახებ</title>
    <link rel="Stylesheet" href="style/site.css">
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
        <br/>

        <div id="shesaxeb">
            <h2>მოკლე ინფორმაცია ჩვენს შესახებ</h2>
            <p>
                სასტუმრო მგზავრები ერთ-ერთი საუკეთესოა თავისი მომსახურეობით. თუ გნებავთ ისეთი დასვენება, რომლის შესახებ დიდხანს ისაუბრებთ აღფრთოვანებით, გვეწვიეთ ჩვენ. აქ თქვენ დაგხვდებათ ულამაზესი გარემო, უსაყვარლესი გუნდი, რომელიც ყველაფერს იზამს იმისთვის, რომ თქვენი
                დასვენება იყოს დაუვიწყარი, სავსე ბედნიერი მომენტებით. ჩვენი სასტუმრო მდებარეობს ორგან: ბაკურიანსა და გონიოში, აქედან გამომდინარე გაქვთ არჩევანი გაატაროთ დრო ზღვაზე და გაირუჯოთ ან ბაკურიანში შეიგრძნოთ ნამდვილი ქართული მთების სილამაზე.
                გვეწვიეთ, ნამდვილად არ ინანებთ...
            </p>


        </div>
        <div id="video1">
            <iframe width="500" height="350" style="border:1px solid white; border-radius: 20px;" src="https://www.youtube.com/embed/WLCZ5LEDpj0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                allowfullscreen></iframe>
        </div>
        <div id="video2">
            <iframe width="500" height="350" style="border:1px solid white;border-radius: 20px;" src="https://www.youtube.com/embed/BIzCoY7swvs" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                allowfullscreen></iframe>
        </div>
        <br/>

        <!-- <div id="backgroundbox">
            <div class="box">
                <div class="txt1">
                    <center id="sata">მოკლე ინფორმაცია ბაკურიანზე</center>
                    <p id="paragraf">ბაკურიანი — დაბა ბორჯომის მუნიციპალიტეტში. თემის ცენტრი (დასახლებები: ბაკურიანი, ბაკურიანის ანდეზიტი, დიდი მიტარბი, მაჭარწყალი, პატარა მიტარბი, თორი, წინუბანი). წარმოადგენს ბორჯომი-ბაკურიანის სარკინიგზო ხაზის ბოლო პუნქტს. ბაკურიანში
                        აღმოჩენილია მეგალითური კულტურის ნაშთი, შემორჩენილია ადრინდელი ფეოდალური ხანის საკულტო ნაგებობა „პანტნარის ტაძარი“. ბაკურიანი პოპულარული სამთო და სათხილამურო კურორტია. ბაკურიანი მდებარეობს თრიალეთის ქედის ჩრდილოეთ კალთაზე, მდინარე
                        ბაკურიანისწყლის (გუჯარეთისწყლის შენაკადი) ნაპირას, ზღვის დონიდან 1700 მ, ბორჯომიდან 30 კმ. ბაკურიანი გაშლილია ე. წ. ბაკურიანის ქვაბულის ძირზე, რომელიც ვულკან მუხერიდან ამონთხეული ლავით არის აგებული. ჰავა ზღვის ნოტიოდან ზომიერად
                        ნოტიო კონტინენტურისაკენ გარდამავალია, ზამთარი - ცივი, თოვლიანი, ზაფხული - ხანგრძლივი.
                    </p>
                </div>
                <div class="txt2">
                    <center id="sata">ჩვენს შესახებ</center>
                    <p id="paragraf">გვერდი შეიქმნა 2021 წელს შემქმნელიguram Apkhazava , გვერდის მიზანია გაგვაცნოს მეტი კურორტ ბაკურიანის შესახებ და მოგვაწოდოს დამატებითი ინფორმაცია , ასევე გვთავაზობს დავჯავშნოთ წინასწარ ოთახები ტურები და სხვა... ახლა კი მოკლედ მოგიყვებით
                        რას გთავაზობთ ბაკურიანში: ბაკურიანი ცნობილი სამთო-კლიმატური კურორტი და საერთაშორისო მნიშვნელობის სამთო-სათხილამურო ცენტრია. 1932 წელს გაიხსნა პირველი სათხილამურო ბაზა. ბაკურიანიდან კოხტაგორის მთაზე (1,3 კმ) და ცხრაწყაროს უღელტეხილზე
                        (3,5 კმ) გაყვანილია საბაგირო გზები, აგებულია სათხილამურო ტრამპლინები. დიდველის სათხილამურო გზებზე მოქმედებს ხელოვნური გათოვლიანება. მოქმედებს კინოთეატრი. ფაქტორებია: მთის ჰავა, მზის ხანგრძლივი ნათება (2052 სთ წელიწადში) და ულტრაიისფერი
                        სხივების მაღალი რადიაცია. სამედიცინო ჩვენება: ლიმფადენიტი, სასუნთქ ორგანოთა ქრონიკული არატუბერკულოზური დაავადებანი, სისხლნაკლებობა.
                    </p>
                </div>
            </div> -->

    </div>
    <br/>
    <br/>

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