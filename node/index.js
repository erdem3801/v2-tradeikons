 

const fs = require("fs");

fs.readFile('v1.json', "utf8", (err, response) => {
  if (err) {
    console.error(err);
    return;
  }
  const data = JSON.parse( response);
  console.log(data); // your JSON file content as object
});