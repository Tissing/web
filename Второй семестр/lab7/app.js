const express = require('express');
const app = express();
const nodemailer = require('nodemailer');
const QRCode = require('qrcode');
const axios = require('axios');
const mysql = require('mysql');

app.use(express.static(__dirname + "/public"));

app.get('/', function(req, resp){
    response.sendFile("public/index.html");
});

app.get("/qrcode", async function(req, resp){
    const url = req.query.url;
  
    if (!url) {
      return resp.status(400).send('URL не указан.');
    }
  
    try {
      const qr = await QRCode.toDataURL(url);
      resp.send(`<img src="${qr}" />`);
    } catch (err) {
      resp.status(500).send('Ошибка при создании QR-кода.');
    }
});

app.get("/sendmessage", function(req, resp){
    const email = req.query.email;
    let transporter = nodemailer.createTransport({
        service: 'Gmail',
        auth: {
            user: '',
            pass: ''
        }
    }); 

    var mailOptions = {
        from: '',
        to: email,
        subject: 'Hello',
        html: '<h1>Test</h1>'
    };

    transporter.sendMail(mailOptions);
    resp.send(email);
});

app.get("/parse", async function(req, resp){
    const url = req.query.url;
    
    const response = await axios.get(url); 
    const res = response.data.match(/<span class=\"text-bold color-fg-default\">(.*)<\/span>/g);
    const str = "<span class=\"p-nickname vcard-username d-block\" itemprop=\"additionalName\">";
    let name = "";
    let i = response.data.indexOf(str) + str.length + 1;
    while(response.data[i] != '<'){
        name += response.data[i];
        i++;
    }
    name = name.trim();
    const followers = res[0].substring(res[0].indexOf(">") + 1, res[0].lastIndexOf("<"));
    const following = res[1].substring(res[1].indexOf(">") + 1, res[1].lastIndexOf("<"));
    
    const result = {
        name: name,
        followers: followers,
        following: following,
    };
    resp.send(result);



});

app.listen(3000, function(req, resp){
    console.log("Server online.")

});