function error(message){
        //popup
        let popup = document.createElement("DIV");

        var element, name, arr;
        element = document.getElementById("myDIV");
        name = "popup";
        arr = element.className.split(" ");
        if (arr.indexOf(name) == -1) {
          element.className += " " + name;
        }

        popup.innerHTML ="<h1>"+message+"</h1>";
        document.body.appendChild(popup);
}