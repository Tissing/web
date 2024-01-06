const express = require("express");
const app = express();
const numApi = require('./NumberApi');
const nodemailer = require('nodemailer');


app.use(express.static(__dirname + "/public"));

app.get("/", (request, response) => {
    response.sendFile("index.html");
});

app.get("/apiRandom", async (req, resp) => {
    const fact = await numApi.getRandomNumberFact();
    console.log(fact);
    resp.send(fact);
});

app.get("/api", async (req, resp) => {
    const fact = await numApi.getNumberFact(req.query.num);
    console.log(fact);
    resp.send(fact);
});

app.get("/mail", function(req, resp) {
    let transporter = nodemailer.createTransport({
        service: 'Gmail',
        auth: {
            user: '',
            pass: ''
        }
    }); 

    var mailOptions = {
        from: '',
        to: '',
        subject: 'Hello',
        html: '<h1>Test</h1>'
    };

    transporter.sendMail(mailOptions);
    resp.send('Письмо отправлено!');
});

app.listen(3000, function(request, response)
{
    console.log("Server online.");
});

