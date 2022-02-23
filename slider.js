var i = 0;
var imagefiles = ['1.jpg', '2.jpeg', '3.jpeg', '4.jpg', '5.jpg', '6.jpg'];
window.setInterval(startSlider, 3000);

function startSlider()

{

    document.getElementById("topimg").src = "images/home/" + imagefiles[i];
    i++;
    if (i > 5) { i = 0 }

}

var today = new Date();
var element = document.getElementById("date").innerHTML = today.toDateString();

var hour = today.getHours();
var greet;
if (hour >= 17) {
    greet = " საღამომშვიდობისა";
} else if (hour >= 12) {
    greet = " შუადღემშვიდობისა";
} else {
    greet = " დილამშვიდობისა";
}

document.getElementById("greets").innerHTML = greet;
var footer1 = 'დაისვენე ჩვენთან და გახადე ცხოვრება უკეთესი';
var footer2 = 'Copyright © 2021';

document.getElementById("footer1").innerHTML = footer1;
document.getElementById("footer2").innerHTML = footer2;