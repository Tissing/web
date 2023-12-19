const express = require('express');
const hbs = require('hbs');
const pug = require('pug');
const ejs = require('ejs');
const app = express();

hbs.registerPartials(__dirname + "/views/partials");

app.use(express.static(__dirname + "/public"));

app.get("/", function(request, response) {
    response.sendFile("public/index.html");
});

app.get("/about_me", function(req, resp){
    resp.render('about.hbs');
});

app.get("/about_me/pug", function(req, resp){
    resp.render('pug/about_me.pug');
});

app.get("/about_me/EJS", function(req, resp){
    resp.render('about_me.ejs');
});

app.listen(3000, function(req, resp){
    console.log("Server online.")
});