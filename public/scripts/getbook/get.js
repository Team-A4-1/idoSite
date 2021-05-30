function get(){



    var xhttp = new XMLHttpRequest();
      xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
          var json = JSON.parse(xhttp.responseText);
          console.log(json);
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