
var data ={
  'post': true,
  'data': {
    'name':null,
     'id':null
  },
  'atributes':{
    'asc':true,
    'results':0
  }
  };




function addbook(img, name,price,id){
    let html= '<li class="best-sellers__item">'+
    '<div class="best-sellers__card">'+
        '<div class="best-sellers__card-content">'+
            '<div class="best-sellers__card-img">'+
                '<img src="'+img+'" alt="'+name+'">'+
               '</div>'+
               '<div class="best-sellers__title">'+
                   name+
                '</div>'+
                '<div class="best-sellers__stars">'+
                    '</div>'+
                    '<div class="best-sellers__price">'+price+',-'+
                    '</div>'+
                    '<button type="submit" id="button'+id+'" class="best-sellers__btn">ADD TO CARD</button>'+
                    '</div>'+
                    '</div>'+
                    '</li>';
                    return html;
}


function makeBestcell(values){
  let bestSeller= document.getElementsByClassName('best-sellers__list'); 
  let amount =Object.keys(values).length;
  bestSeller[0].innerHTML=null;
  if(amount>10){
    amount=10;
  }
  for( i=0;i<amount;i++){
    console.log(values);
    bestSeller[0].innerHTML+=addbook(values[i]['imageHIGHres'],values[i]['name'],values[i]['price'],values[i]['id']);
  }
}


function makeRandom(values){
  //
  let random= document.getElementsByClassName('random__list'); 
  random[0].innerHTML=null;
  let amount =Object.keys(values).length;

  var i;
  for( i=0;i<amount;i++){
    var randomnum = Math.floor(Math.random() * (amount - 0)+0);
    console.log(randomnum);
  random[0].innerHTML+=addbook(values[randomnum]['imageHIGHres'],values[randomnum]['name'],values[randomnum]['price'],values[randomnum]['id']);
  }
}


function get(data){
   
    var status;
        var xhttp = new XMLHttpRequest();
          xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
               json = JSON.parse(xhttp.responseText);
               status = json['status'];
               delete json['status'];
               makeRandom(json);
               makeBestcell(json);
               
            }
         
          };
 

          xhttp.open("POST", "/private/products/data.php", true);
          var set = JSON.stringify(data);
          xhttp.send(set); 

        }

get(data);
      