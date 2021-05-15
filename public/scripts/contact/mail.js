let contactInput = document.getElementsByClassName("contact-input");
let contactMessage = document.getElementsByClassName("contact-textarea");

let submit = document.getElementsByClassName("contact-btn")[0]; 

submit.onClick= function(){ mailSend(
  contactInput[1],contactInput[0],contactMessage[0]
   )
};






function mailSend(clientAdress,clientName,clientMessage){

  console.log('test');


var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
    //  error(this.responseText);
    }
    else if(this.status>200){
      // error("ajax error"+this.readyState+" "+this.status);

    }
   
  };
  xhttp.open("POST", "private/mail/mail.php", true);
  xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  xhttp.send("ca="+clientAdress+"&cn="+clientName+"&cm="+clientMessage); 
}