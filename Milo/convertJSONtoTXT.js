// //fonction pour récup les données dans le map.json
// var request = new XMLHttpRequest();
// request.open("GET", "map.json", false);
// request.send(null)
// var json = JSON.parse(request.responseText);
// // console.log(json)


// // chargement de la map depuis le json
// let maze = json.map
// const ROWS = json.SizeY
// const COLS = json.SizeX

// var file = new ActiveXObject("Scripting.FileSystemObject");
// var a = file.CreateTextFile("map.txt", true);
// a.WriteLine("Salut cppFrance !");
// a.Close();


// const fs = require('fs')
  
// // Data which will write in a file.
// let data = "Learning how to write in a file."
  
// // Write data in 'Output.txt' .
// fs.writeFile('Output.txt', data, (err) => {
      
//     // In case of a error throw err.
//     if (err) throw err;
// })




var blob = new Blob(["Hello, world!"], {type: "text/plain;charset=utf-8"});
FileSaver.saveAs(blob, "map.txt");