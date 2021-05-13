function error(message){
 


        //popup
        let popup = document.createElement("DIV");
        let header = document.getElementsByClassName('header')[0];

 //remove popup before making new one
 popup.remove();

        console.error(message);


        var element, name, arr;
        element = popup;
        name = "popup";
        arr = element.className.split(" ");
        if (arr.indexOf(name) == -1) {
          element.className += "" + name;
        }
     
      popup.innerHTML ="<h2>error!</h2><br><p>"+message+"</p>";
      document.body.insertBefore(popup,header);
        // document.body.appendChild(popup);

        window.addEventListener("click",function(){
          popup.remove();
        });

}
