const express = require("express");
const app = express();

app.use(express.static(__dirname + "/public"));

app.get("/", function(request, response)
{
    response.sendFile("public/index.html");
});

app.listen(3000, function(request, response)
{
    console.log("Server online.");
});