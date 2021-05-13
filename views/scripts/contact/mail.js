let contactInput = document.getElementsByClassName("contact-input");
let contactMessage = document.getElementsByClassName("contact-text-2");
let submit = document.getElementsByClassName("contact-btn"); 





var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {


    }
    else{
      error("ajax error"+this.readyState+" "+this.status);

    }
  };
//   xhttp.open("GET", "ajax_info.txt", true);
//   xhttp.send();

