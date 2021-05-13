let contactInput = document.getElementsByClassName("contact-input");
let contactMessage = document.getElementsByClassName("contact-text-2");
let submit = document.getElementsByClassName("contact-btn"); 




function mailSend(){
var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
     error(this.responseText);
    }
    else{
      error("ajax error"+this.readyState+" "+this.status);

    }
   
  };
  xhttp.open("POST", "../../../private/mail.php", true);
  xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  xhttp.send("ca=Henry&cn=Ford"); 
  xhttp.send();
}