
  function addbook(img,name,price,weight,amount,maxamount){
    let html=   
    '<div class="cart__list">'+
    '<div class="cart__left">'+
        '<img class="cart__img" src="'+img+'" alt="Book-cover">'+
    '</div>'+
    '<div class="cart__center">'+
        '<p>'+name+'</p>'+

        '<label for="cars">Choose amount:</label>'+
        '<select name="amount" id="amount">'+
            '<option value="volvo">1</option>+
            '<option value="saab">2</option>'+
            '<option value="opel">3</option>'+
            '<option value="audi">4</option>'+
        '</select>'+
        '<p>Weight: 100gr</p>'+
    '</div>'+
    '<div class="cart__right">'+
        '<p><i class="fas fa-trash-alt"></i>$ 11.40</p>'+
    '</div>'+
    '</div>';
                    return html;
}
function get(data){
   
      var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
          if (this.readyState == 4 && this.status == 200) {
              json = JSON.parse(xhttp.responseText);
             status = json['status'];
             delete json['status'];
             let cart = document.getElementsByClassName['cart__content'];
             let html =addbook();
            cart.innerHTML+= html;
         
       
         }
        }

        xhttp.open("POST", "/private/products/data.php", true);
        var set = JSON.stringify(data);
        xhttp.send(set); 

      
    };



      var cookie =getCookie('products');

      var decoded = JSON.parse(cookie);

for(i=0;i< Object.keys(decoded).length;i++){
    var id=decoded[i]['id'];

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

