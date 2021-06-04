
// cookie;
 function values(){


var products = {
  "name": "",
  "value": 0,
  "quantity": 0,
  "weight": 0
};


   var data={
    "userData": {
      "Fname": "",
      "Lname": "",
      "Adress": "",
      "Postcode": "",
      "City": "",
      "Nummer": "",
      "country": "",
      "tax": ""
    },
    "products": [
     
    ]
  };
  data['products'][0]=products;
console.log(data['products']);


    return data;
  };
