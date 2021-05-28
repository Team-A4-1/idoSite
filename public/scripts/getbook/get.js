function get(){



    var xhttp = new XMLHttpRequest();
      xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
          var json = JSON.parse(xhttp.responseText);
          console.log(json);
        }
     
      };
var data ={
'post': 'false',
'data': "",
'atributes':""

};

      xhttp.open("POST", "private/products/data.php", true);
      var set = JSON.stringify(data);
      xhttp.send(set); 
    }