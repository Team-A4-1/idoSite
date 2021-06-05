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


let Name = document.getElementById('title');
let author = document.getElementById('author');
let tabdata = document.getElementById('tabdata');
let img = document.getElementById('image');
let tumb = document.getElementsByClassName('thumbnails');
let addCart = document.getElementById('addCart');
let input = document.getElementById('amount_togle');

var inputVal=1;
console.log(inputVal);

input.addEventListener("input",function(){
 inputVal = parseInt(input.value);
 console.log(inputVal);
}
);

addCart.addEventListener('click',function(){

  var cookie =getCookie('products');

  var cookielist = [{
    'id':id,
    'amount':inputVal
  } 
];
  if(cookie ==""){
  var json = JSON.stringify(cookielist);
  setCookie('products',json,10);
  }
  else{
    var decoded = JSON.parse(cookie);
    console.log(decoded);
    var size = Object.keys(decoded).length;
    var a=size;
    var New = true;
    var objId =0;
    console.log(id);
for(j=0;j<a;j++){
  console.log(decoded[j]['id']+" "+id);
  if(decoded[j]['id']==id){
      New=false;
      a=j;
  }
    objId=j;


}
if(New){
  console.log(size);
  decoded[size]={'id':id,'amount':inputVal};
}
else{
  var value = decoded[objId]['amount'];
  decoded[objId]['amount']=inputVal;
}

    setCookie('products',JSON.stringify(decoded),10);  
  }
  window.location.href = "/shoppingcart";  
});

function get(data){
   
  var status;
      var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
          if (this.readyState == 4 && this.status == 200) {
              json = JSON.parse(xhttp.responseText);
             status = json['status'];
             delete json['status'];
             console.log(json);
              Name.innerText=json[0]['name'];
              author.innerText=json[0]['author'];
              price.innerText=json[0]['price'];
              height.innerText=json[0]['height'];
              amount.innerText=json[0]['amount'];
              weight.innerText=json[0]['weight'];
              width.innerText=json[0]['width'];
              depth.innerText=json[0]['depth'];
              tabdata.innerText=json[0]['text'];
              img.src=json[0]['imageHIGHres'];
              input.max=json[0]['amount'];
          }
       
        };


        xhttp.open("POST", "/private/products/data.php", true);
        var set = JSON.stringify(data);
        xhttp.send(set); 

      }
      get(data);