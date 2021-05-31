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
async function F() {
var  yeet = await get(data);
return yeet;
}

var values = F();

