var cookie =getCookie('products');

      var decoded = JSON.parse(cookie);


  function addbook(img,name,price,weight,amount,maxamount){
    let html=   
    '<div class="cart__list">'+
    '<div class="cart__left">'+
        '<img class="cart__img" src="'+img+'" alt="Book-cover">'+
    '</div>'+
    '<div class="cart__center">'+
        '<p>'+name+'</p>'+

        '<label for="cars">Choose amount:</label>'+
        '<input type="number" min=1  max='+maxamount+ ' value='+amount+' id="amount">'+
        '<p>Weight: '+weight+'</p>'+
    '</div>'+
    '<div class="cart__right">'+
        '<p><i class="fas fa-trash-alt"></i>€'+price+'</p>'+
    '</div>'+
    '</div>';
                    return html;
}

var totalweight;


let cart = document.getElementsByClassName('list')[0];
cart.innerHTML=null;
function get(data,value){
   
      var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
          if (this.readyState == 4 && this.status == 200) {
              json = JSON.parse(xhttp.responseText);
             status = json['status'];
             delete json['status'];
             totalweight+=parseInt(json[0]['price']);

             let html =addbook(json[0]['imageLOWres'],json[0]['name'],json[0]['price'],json[0]['weight'],value,json[0]['amount']);
             cart.innerHTML+= html;
         
       
         }
        }

        xhttp.open("POST", "/private/products/data.php", true);
        var set = JSON.stringify(data);
        xhttp.send(set); 

      
    };




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

