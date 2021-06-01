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
              tabdata.innerText=json[0]['text'];
              img.src=json[0]['imageHIGHres'];
          }
       
        };


        xhttp.open("POST", "/private/products/data.php", true);
        var set = JSON.stringify(data);
        xhttp.send(set); 

      }
      get(data);