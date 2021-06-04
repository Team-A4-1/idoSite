let name = document.getElementById('fname');


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






function get(data){
   
    var status;
        var xhttp = new XMLHttpRequest();
          xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                json = JSON.parse(xhttp.responseText);
               status = json['status'];
               delete json['status'];
               console.log(json);
              
            }
         
          };
  
  
          xhttp.open("POST", "/private/products/data.php", true);
          var set = JSON.stringify(data);
          xhttp.send(set); 
  
        }
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
                  get(data);
            }
            }
            getall();