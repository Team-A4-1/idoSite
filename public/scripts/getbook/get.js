function get(){


var status;
    var xhttp = new XMLHttpRequest();
      xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
           var json = JSON.parse(xhttp.responseText);
           console.log(json);
           status = json['status'];
           delete json['status'];
          
         for(var i =0;i<Object.keys(json).length;i++){
            var  element = document.createElement("div");
           
            //title
            var  title = document.createElement("div");
            //main img
            var  img = document.createElement("img");

            //un orderd list atributes
            var atributes = document.createElement('ul');
            var height = document.createElement('li');
            var width = document.createElement('li');
            var depth = document.createElement('li');
            var price = document.createElement('li');




           

           //append data to title
            var titletext = document.createTextNode(json[i]['name']);
           //append img to img
             img.src=json[i]['imageLOWres'];
          
           height.innerText="height: "+json[i]['height'];
           width.innerText="width: "+json[i]['width'];
           depth.innerText="depth: "+json[i]['depth'];
           price.innerText="price: "+json[i]['price'];

            //append text
             title.appendChild(titletext)

           //append atributes
           atributes.appendChild(height); 
           atributes.appendChild(width); 
           atributes.appendChild(depth); 
           atributes.appendChild(price); 


           //append to main element
            element.appendChild(title); 
            element.appendChild(img); 
            element.appendChild(atributes); 



              document.getElementById('test').appendChild(element);

           };




        }
     
      };
var data ={
'post': true,
'data': {
  'name':'boek',
   'id':null
},
'atributes':{
  'asc':true,
  'results':0
}
};

// var data ={
//   'post': 'false',
//   'data': {
//     'search':'',
     
  
//   }
// }



      xhttp.open("POST", "private/products/data.php", true);
      var set = JSON.stringify(data);
      xhttp.send(set); 
    }