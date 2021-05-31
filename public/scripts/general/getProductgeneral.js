console.log("eyo you managed to get me in your html");
function get(data){
    var data ={
        'post': true,
        'data': {
          'name':'',
           'id':null
        },
        'atributes':{
          'asc':true,
          'results':0
        }
        };

    var status;
        var xhttp = new XMLHttpRequest();
          xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
               var json = JSON.parse(xhttp.responseText);
               console.log(json);
               status = json['status'];
               delete json['status'];
            
                return json;
            }
         
          };
 
    
          xhttp.open("POST", "private/products/data.php", true);
          var set = JSON.stringify(data);
          xhttp.send(set); 
        }