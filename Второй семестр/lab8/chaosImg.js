const jimp = require('jimp');

async function chaosedImage(path){
    let image = await jimp.read(path);
    image.invert();
    image.dither565();
    image.rotate(90);
    image.writeAsync(path);
}

module.exports = {chaosedImage};

chaosedImage('./public/cat.jpg');
console.log('Изображение изменено');

