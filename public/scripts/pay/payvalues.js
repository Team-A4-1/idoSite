





// cookie;
 function values(){
let Fnamefield= document.getElementById("fname");
let Lnamefield= document.getElementById("lname");
let adressfield= document.getElementById("fname");
let postcodefield= document.getElementById("postcode");
let cityfield= document.getElementById("city");
let nummerfield= document.getElementById("nummer");
let country = document.getElementById("country");


  var send={
    "Fname": "test",
    "Lname": "asdadad",
    "Adress": adressfield.values,
    "Postcode": "1606DD",
    "City": "adads",
    "Nummer": nummerfield.values,
    "country": "adasd",
    "tax": "ads"
};


console.log(send);

    return send;
  };
