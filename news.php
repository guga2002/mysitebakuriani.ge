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
        <meta name="viewport" content="width, initial-scale=1.0">
        <meta name="author" content="გურამ აფხაზავა">
        <meta name="keywords" content="HTML, CSS, JavaScript,Jqury,PHP">
        <meta name="description" content="my project for web development">
        <title>სიახლეები</title>
        <link rel="Stylesheet" href="style/site.css">
        <link rel="icon" href="images/logo/logomgzavrebi.png">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="jsformanu.js"></script>
        <style>
            @keyframes morbenalik {
                0% {
                    top: 3%;
                    left:100%;
                }
                50% {
                    top: 3%;
                    left: 50%;
                }
                100% {
                   
                    top: 3%;
                    left: -100%;
                }
            }

            .morbenali {
                /* background-color:gray; */
                width:100%;
                height: 28px;
                border-radius: 10px;
                box-shadow: 2px 3px 5px gray;
                overflow: hidden;
                background: rgb(180, 142, 58);
                background: linear-gradient(16deg, rgba(180, 142, 58, 1) 0%, rgba(185, 182, 170, 0.639093137254902) 50%, rgba(252, 176, 69, 1) 100%);
            }
            
            .morbenali .morbenali2 {
                position: relative;
                animation: morbenalik linear 30s infinite;
                font-weight: bold;
            }
        </style>
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
                <button id="guga"> მეინიუ</button>
                <div id="content">
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

            <center>
                <h1>იხილეთ სიახლეები</h1>
            </center>

        <div class="morbenali">
            <div class="morbenali2">
             გახდი იღბლიანი სტუმარი, მხოლოდ ამ კვირაში ყოველ 30-ე სტუმარზე გვაქვს სპეციალური შემოთავაზება ,გარდა ამისა დაჯავშნე ონლაინ და მიიღე ღიმილები მგზავრი ბარათზე...
            </div>
        </div>

            <div class="news">
                <div id="news1">
                    <img src="../site/images/bakurianinews.jpg" width:100px height:100px alt=""> 🏡მგზავრების უბანი საგურამოში სახლი#1 ▪64.8კვ.მ. ▪40კვ.მ.(1ლი სართ.) ▪10კვ.მ.(მე2 სართ.) ▪12.85 ტერასა თეთრი კარკასი 59.000აშშ დოლარი რემონტით 69.000აშშ დოლარი
                    ავეჯით 77.000აშშ დოლარი ❤კერძო სახლის შეძენისას თქვენ ხდებით მრავალფეროვანი ინფრასტრუქტურის მფლობელი ▪5 ჰა დაცული ტერიტორია ▪საცურაო აუზები ▪სათამაშო მოედნები ▪დასასვენებელი პარკები ▪კაფე რესტორანი ▪პარკინგი 📩დეტალური ინფორმაციისთვის
                    მოგვწერეთ ან 📞 596 860 001
                </div>
                <div id="news2">
                    <img src="../site/images/news2.jpg" alt=""> 🧐 საცხოვრებლად თუ სააგარაკეთ? 👉 ორივე შემთხვევაში საუკეთესო არჩევანია! სახლის საერთო ფართი: 98,1 კვ/მ მიწის ნაკვეთის ფართი: 239 კვ/მ საძინებლები: 3 სველი წერტილი: 2 🚘ყველა სახლს მოყვება
                    2 საპარკინგე ადგილი საჩუქრად ⭐️კერძო სახლი შეძენისას თქვენ ხდებით მრავალფეროვანი ინფრასტრუქტურის მფლობელი : ▪️საცურაო აუზები( მათ შორის ერთი საბავშვო) ▪️სათამაშო მოედნები (ფეხბურთის კალათბურთის, ჩოგბურთის) ▪️დასასვენებელი პარკები ▪️საბავშვო
                    მოედანი ▪️კაფე-რესტორანი ▪️პარკინგი 📩დეტალური ინფორმაციისთვის მოგვწერეთ პირადში ან ☎️ დაგვირეკეთ 596 860 001
                </div>
                <div id="news3">
                    <img src="../site/images/news3.jpg" alt=""> 🏡 ეძებეთ მყუდრო და კომფორტულ კერძო სახლს თბილისიდან 20წთ.ში? 🏡შეიძინეთ კერძო სახლის ბინის ფასად მგზავრების უბანი საგურამოში - Mgzavrebi Saguramo -ში და ისარგებლეთ გადახდის საუკეთესო პირობებით;
                    ☑3 და მეტ შვილიანი ოჯახების იპოთეკური სესხი სახელმწიფოს მიერ 8%ით სუბსიდირდება; გაძლევთ გახდეთ მრავალფეროვანი ინფრასტრუქტურის მფლობელიც: ☑საცურაო აუზები ☑ფეხბურთის, კალათბურთის, ჩოგბურთის მოედნები ☑სარეკრეაციო ზონა ☑საბავშვო მოედნები
                    ☑კაფე-რესტორანი ☑პარკინგი პროექტი დაფინანსებულია "ვითიბი ჯორჯიას" ბანკის მიერ. დეტალებისთვის 📩მოგვწერეთ პირადში ან 📞დაგვირეკეთ: +995 591 860 001



                </div>
            </div>

            <div class="news">
                <div id="news1">
                    <img src="../site/images/news4.jpg" width:100px height:100px alt=""> 💫ისარგებლეთ ახალი სერვისით "მგზავრები" გონიო-ს კომპლექსში. ✨💥ჩაიტარეთ მასაჟის პროცედურები და განიტვირთეთ. 💫"მგზავრები"-ს დამსვენებლებს გთავაზობთ 20%-იან ფასდაკლებას
                    ყველა სახის მასაჟის პროცედურაზე. ✔️დეტალური ინფორმაციის მისაღებად დაგვიკავშირდით: 📞+995 555 21 06 96
                </div>
                <div id="news2">
                    <img src="../site/images/news5.jpg" alt=""> 🔊სპეცილური შეთავაზება "მგზავრები" გონიოსგან! 💫☀️იქირავეთ კეთილმოწყობილი აპარტამენტები ზაფხულის მთელ სეზონზე 3000 ლარად. 💥ადგილი,სადაც მუდამ ხალისია. ⭐️მგზავრების კომპლექსი აერთიანებს:
                    📍ორ ღია საცურაო აუზს 📍კვების რამდენიმე ობიექტს 📍სათამაშო მოედანს 📍ბავშვთა გასართობ სივრცეს 📍დაცულ და მოწესრიგებულ სანაპიროს 📍ღია კინოთეატრს ✔️დეტალური ინფორმაციის მისაღებად დაგვიკავშირდით: ☎️+995 599 35 85 55
                </div>
                <div id="news3">
                    <img src="../site/images/news6.jpg" alt=""> 🌴 გაატარე დაუვიწყარი ზაფხული გონიოში ☀️ ✨ მგზავრების კომპლექსში თქვენ დაგხვდებათ: 🏊‍♀️ ღია საცურაო აუზი 🌭 კვების რამდენიმე ობიექტი ⚽️ სათამაშო მოედანი 🏖 დაცული და მოწესრიგებული სანაპირო
                    ზოლი 🧸 საბავშვო ოთახი 🎥 ღია კინოთეატრი 🌴 მოგვწერეთ, მიიღეთ სრულყოფილი ინფორმაცია და დაჯავშნეთ აპარტამენტი მარტივად 👇


                </div>
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
        </div>
    </body>

    </html>
   