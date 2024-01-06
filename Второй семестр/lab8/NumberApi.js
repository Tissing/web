const axios = require("axios");

async function getNumberFact(num){
    const response = await axios.get(`http://numbersapi.com/${num}`);
    return response.data;
}

async function getRandomNumberFact(){
    const response = await axios.get(`http://numbersapi.com/random`);
    return response.data;
}

module.exports = {getNumberFact, getRandomNumberFact};
