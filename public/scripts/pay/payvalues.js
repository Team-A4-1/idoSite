





// cookie;
 function values(){
let Fnamefield= document.getElementById("fname");
let Lnamefield= document.getElementById("lname");
let adressfield= document.getElementById("adress");
let postcodefield= document.getElementById("postcode");
let cityfield= document.getElementById("city");
let nummerfield= document.getElementById("nummer");
let country = document.getElementById("country");




 console.log(adressfield.value);
  var send={
    "Fname": Fnamefield.value,
    "Lname": Lnamefield.value,
    "Adress": adressfield.value,
    "Postcode": postcodefield.value,
    "City": cityfield.value,
    "Nummer": nummerfield.value,
    "country":sessionStorage['alpha2Code'],
    "tax": "ads"
};


console.log(send);

    return send;
  };
