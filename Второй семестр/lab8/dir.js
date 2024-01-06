const fs = require('fs');
dir = process.argv[2];
fs.readdir(dir, (err, files) => {
    if (err) throw err;
    console.log(files);
});