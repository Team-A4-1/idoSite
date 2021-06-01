
let bestSeller= document.getElementsByClassName('best-sellers__list'); 

bestSeller.innerHTML =addbook();


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
                    '<span class="fa fa-star checked">'+
                    '</span>'+
                    '<span class="fa fa-star checked">'+
                    '</span>'+
                    '<span class="fa fa-star checked">'+
                    '</span>'+
                    '<span class="fa fa-star">'+
                    '</span>'+
                    '<span class="fa fa-star">'+
                    '</span>'+
                    '</div>'+
                    '<div class="best-sellers__price">'+price+',-'+
                    '</div>'+
                    '<button type="submit" id="button'+id+'" class="best-sellers__btn">ADD TO CARD</button>'+
                    '</div>'+
                    '</div>'+
                    '</li>';
                    return html;
}



var data ={
    'post': true,
    'data': {
      'name':null,
       'id':2
    },
    'atributes':{
      'asc':true,
      'results':0
    }
    };





function get(data){
   
    var status;
        var xhttp = new XMLHttpRequest();
          xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                json = JSON.parse(xhttp.responseText);
               status = json['status'];
               delete json['status'];
               return json;

            }
         
          };
 

          xhttp.open("POST", "/private/products/data.php", true);
          var set = JSON.stringify(data);
          xhttp.send(set); 

        }


        