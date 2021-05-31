let contactInput = document.getElementsByClassName("contact-input");
let contactMessage = document.getElementsByClassName("contact-textarea");

let submit = document.getElementsByClassName("contact-btn")[0]; 

submit.addEventListener('click', function(){
  console.log('test');
  if(contactInput[0].value!=""&&contactInput[1].value!=""&&contactMessage[0].value!=""){

      mailSend(contactInput[1].value,contactInput[0].value,contactMessage[0].value)
     }
  
  else{
  window.alert("please fill in all the fields");
  }
  }
);






function mailSend(clientAdress,clientName,clientMessage){



var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
     error(this.responseText);
    }
    else if(this.status>200){
      error("ajax error"+this.readyState+" "+this.status);

    }
   
  };
  xhttp.open("POST", "private/mail/mail.php", true);
  xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  xhttp.send("ca="+clientAdress+"&cn="+clientName+"&cm="+clientMessage); 
}