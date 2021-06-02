
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
  
  
  let list = document.getElementsByClassName('books__list')[0];
  
  function addbook(img, name,author,price){
      let html=  '<li class="books__item">'+
      '<div class="books__content">'+
          '<img class="books__img" src="'+img+'" alt="Book-cover">'+
          '<div class="books__title"><h2>'+name+'</h2></div>'+
          '<div class="books__author">'+author+'</div>'+
          '<div class="books__price">$'+price+'</div>'+
          '<button type="submit" class="books__btn">'+
           'ADD TO CARD'+
          '</button>'+
      '</div>'+
  '</li>';
                      return html;
  }
  
  

  
  

  
  
  function get(data){
     list.innerHTML="";
      var status;
          var xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function() {
              if (this.readyState == 4 && this.status == 200) {
                 json = JSON.parse(xhttp.responseText);
                 status = json['status'];
                 delete json['status'];
                 console.log(json[0]);
                 for( i=0;i<Object.keys(json).length;i++){
                    console.log(addbook(json[i]['imageHIGHres'],json[i]['name'],json[i]['author'],json[i]['price']));
                list.innerHTML+=addbook(json[i]['imageHIGHres'],json[i]['name'],json[i]['author'],json[i]['price']);
                }
              }
           
            };
   
  
            xhttp.open("POST", "/private/products/data.php", true);
            var set = JSON.stringify(data);
            xhttp.send(set); 
  
          }
  
  get(data);
        