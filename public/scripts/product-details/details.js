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