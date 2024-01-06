let data = require('./file.json');
let string = JSON.stringify(data);
let res = JSON.parse(string);
for (var key in res){
    var value = res[key];
    console.log(key + ": " + value);
}