function error(message){
        //popup
        let popup = document.createElement("DIV");
        let header = document.getElementsByClassName('header')[0];



        var element, name, arr;
        element = popup;
        name = "popup";
        arr = element.className.split(" ");
        if (arr.indexOf(name) == -1) {
          element.className += "" + name;
        }
     
      popup.innerHTML ="<h1>"+message+"</h1>";
      document.body.insertBefore(popup,header);
        // document.body.appendChild(popup);

        let body = document.body;
        body.onclick();

}
