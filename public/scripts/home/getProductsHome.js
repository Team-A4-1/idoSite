
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




function makeRandom(values){
  let amount =Object.keys(values).length;
  let random = Math.floor(Math.random() * amount );
  var i;
  for( i=0;i<4;i++){

  let bestSeller= document.getElementsByClassName('random__list'); 
  bestSeller.innerHTML=addbook(values[i]['img'],values[i]['name'],value[i]['price'],value[i]['id']);
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
               
               
            }
         
          };
 

          xhttp.open("POST", "/private/products/data.php", true);
          var set = JSON.stringify(data);
          xhttp.send(set); 

        }

get(data);
      