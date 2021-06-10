let name = document.getElementById('fname');
var cookie =getCookie('products');

var decoded = JSON.parse(cookie);

let orderlist = document.getElementById('orders');

function addbook(img, name,price,amount,weight){
    let html= ' <div class="order__list">'+
    '<div class="order__left">'+
        '<img class="order__img" src="'+img+'" alt="Book-cover">'+
    '</div>'+
    '<div class="order__center">'+
        '<p>'+name+'</p>'+
        '<p>X '+amount+'</p>'+
        '<p>Weight: '+weight+'</p>'+
    '</div>'+
    '<div class="order__right">'+
        '<p> € '+price+'</p>'+
    '</div>'+
'</div>';
                    return html;
}
let countrysugestion= document.getElementsByClassName('payment__country')[0];

var sugestionElement = document.getElementById('sugestion');  

 function getCountry(CName){
    


  test =  fetch('https://restcountries.eu/rest/v2/name/'+CName)
    .then(response =>   response.json()) 
    .then(repos => { 
    console.log(repos[0]['alpha2Code']);
    console.log(repos[0]['alpha3Code']);
    console.log(repos[0]['name']);
    sessionStorage.alpha2Code=repos[0]['alpha2Code'];
    sessionStorage.alpha3Code=repos[0]['alpha3Code'];

    sugestionElement.innerHTML="";

    sugestionElement.innerHTML= repos[0]['name'];


});


};
var priceTotal= 0;
country.addEventListener('keyup',  function (){
  getCountry(country.value);
  
 
});

country.addEventListener('focusout',  function (){
if (sugestionElement!=null){
  sugestionElement.remove();
}

});










function get(data,amount){
   
    var status;
        var xhttp = new XMLHttpRequest();
          xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                json = JSON.parse(xhttp.responseText);
               status = json['status'];
               delete json['status'];
               console.log(json);
               priceTotal+=(json[0]['weight']*amount);
                var weight = json[0]['weight']*amount;
                orderlist.innerHTML+= addbook(json[0]['imageLOWres'], json[0]['name'],json[0]['price'],amount,weight);
            
            }
         
          };
  
  
          xhttp.open("POST", "/private/products/data.php", true);
          var set = JSON.stringify(data);
          xhttp.send(set); 
  
        }

     
        function getall (){
            orderlist.innerHTML= "";

            for(i=0;i< Object.keys(decoded).length;i++){
                var id=decoded[i]['id'];
            var amount = decoded[i]['amount'];
                var data ={
                    'post': true,
                    'data': {
                      'name':null,
                       'id':id
                    },
                    'atributes':{
                      'asc':true,
                      'results':0
                    }
                    };
                  get(data,amount);
            }
         }
            getall();