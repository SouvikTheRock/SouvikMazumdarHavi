function validate(){
    var password=document.getElementById("pswd").value;
    var reppassword=document.getElementById("reppswd").value;
    var letter = /[a-zA-Z]/;
    var number = /[0-9]/;
    var special= /[ `!@#$%^&*()_+\-=\[\]{};':"\\|,.<>\/?~]/;
    var letter = document.getElementById("letter");
    var capital = document.getElementById("capital");
    var number = document.getElementById("number");
    var length = document.getElementById("length");
    if(password!=reppassword){
        alert("Passwords Doesn't Match");
        return false;
    }
if (password.length < 8 || !letter.test(password) || !number.test(password) || !special.test(password)) {
    if (password.length < 8) {
        alert("Please make sure password is longer than 8 characters.")
        return false;
    }
    if (!letter.test(password)) {
        alert("Please make sure Password Includes an UpperCase and LowerCase character")
        return false;
    }
    if (!number.test(password)) {
        alert("Please make sure Password Includes a Digit")
        return false;
    }
    if (!special.test(password)) {
        alert("Please make sure Password Includes a Special Character")
        return false;
     }
     }
   
}
