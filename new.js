function checkFormEntry() {
    document.getElementById("errorMessage").innerHTML = "";
    document.getElementById("successMessage").innerHTML = "";

    var errors = "";
    if (document.getElementById("fname").value.length < 3) {
        errors += "სახელი არ შეიძ₾ება იყოს ცარიელი.<br>";
    }

    if (document.getElementById("lname").value.length < 5) {
        errors += "გვარი უნდა იყოს არანაკლებ 3 ასოს<br>";
    }
    if (document.getElementById("extra").value == "") {
        errors += "გთხოვთ აირჩიოთ პაკეტი.<br>";
    }
    if (document.getElementById("room").value == "") {
        errors += "გთხოვთ აიღჩიოთ ოთახი.<br>";
    }
    if (document.getElementById("address").value.length < 5) {
        errors += "მისამართი უნდა იყოს ხუთ ასოზე მეტი.<br>";
    }
    if (document.getElementById("phone").value.length < 9) {
        errors += "ტელეფონის ნომერი უნდა იყოს 9 ციფრზე მეტი.<br>";
    }
    if (document.getElementById("amount").value.length < 3) {
        errors += "თანხა არუნდა იყოს მცირე 100 ლარზე <br>";
    }
    if (document.getElementById("card").value.length < 4) {
        errors += "გთხოვთ შეიყვანოთ სწორი მონაცემი ბარათის კოდი.<br>";
    }
    if (document.getElementById("email").value.length < 5) {
        errors += "შეიყვანე სწორი ელექტრონული მისამართი.<br>";
    }
    if (errors != "") {
        document.getElementById("errorMessage").innerHTML = errors;
    } else {
        window.location.href = "#";
    }
    return false;
}

document.getElementById("form").onsubmit = checkFormEntry;