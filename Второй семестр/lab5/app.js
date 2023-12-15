const express = require("express");
const app = express();
//const axios = require('axios');

app.use(express.static(__dirname + "/public"));

app.get("/", function(request, response)
{
    response.sendFile("public/index.html");
});

// app.get("/api/:num", async function(request, response) {
//     const num = request.params.num;
//     try{
//         console.log(num);
//         const resp = await axios.get(`http://numbersapi.com/${num}`);
//         response.json(resp.data);
//     } catch (ex) {
//         console.log(ex);
//     }
// });

app.listen(3000, function(request, response)
{
    console.log("Server online.");
});