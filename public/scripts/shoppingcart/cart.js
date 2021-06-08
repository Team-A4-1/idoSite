var cookie =getCookie('products');
if(cookie!=null||!empty||cookie!="")
{
    var decoded = JSON.parse(cookie);
}

let money = document.getElementsByClassName('summary__right')[0];
let Continue = document.getElementsByClassName('summary__btn')[0];
let weightTag =document.getElementsByClassName('summary_weight')[0];
let priceTotalTaxtag =document.getElementsByClassName('totaltax');
let itemsAmount =document.getElementsByClassName('summary__left');


Continue.addEventListener('click',function (){
document.location='/payment';
});




function deletecookie(id){
    var decoded = JSON.parse(cookie);
    console.log(decoded);
    var size = Object.keys(decoded).length;
    console.log(id);
    decoded.splice(id, 1);

    console.log(decoded);

    if(empty(decoded)){
        setCookie('products',JSON.stringify(decoded),0);  

    }
    else{
        setCookie('products',JSON.stringify(decoded),10);  

    }
document.getElementById(id).remove;

getall();
}

function taxcalc(total){
    return taxtotal =total
}

  function addbook(img,name,price,weight,amount,maxamount,id){
    let html=   
    '<div class="cart__list" id='+id+'>'+
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
        '<p><i id="trash" onclick="deletecookie('+id+')" class="fas fa-trash-alt"></i>€'+price+'</p>'+
    '</div>'+
    '</div>';
                    return html;
}

var totalweight=0;
var totalprice=0;
var totalamount=0;

let cart = document.getElementsByClassName('list')[0];
cart.innerHTML=null;
function get(data,value,j){
   
      var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
          if (this.readyState == 4 && this.status == 200) {
              json = JSON.parse(xhttp.responseText);
             status = json['status'];
             delete json['status'];
             totalweight+=parseInt((json[0]['weight'])*value);
             totalprice+=(parseInt(json[0]['price'])*value);


             let html =addbook(json[0]['imageLOWres'],json[0]['name'],json[0]['price'],json[0]['weight'],value,json[0]['amount'],j);
             cart.innerHTML+= html;
             money.innerHTML="€ "+totalprice;
             weightTag.innerHTML="Total weight: "+totalweight+" Grams";
             priceTotalTaxtag[0].innerHTML='€ '+taxcalc(totalprice);
             priceTotalTaxtag[1].innerHTML='€ '+taxcalc(totalprice);
             console.log(html);
             

            }
        }

        xhttp.open("POST", "/private/products/data.php", true);
        var set = JSON.stringify(data);
        xhttp.send(set); 

      
    };



function getall (){
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
        totalamount+=amount;
        itemsAmount[0].innerHTML='Subtotal: '+totalamount+' items';
      get(data,amount,i);
}
}
getall();