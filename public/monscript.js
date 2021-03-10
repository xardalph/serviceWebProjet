var request = new XMLHttpRequest();

request.open("GET", "http://127.0.0.1:8000/api/artistes", false);
request.send(null);



console.log(request.responseText);
document.getElementById("json").textContent = JSON.stringify(request.responseText, undefined, 2);


var node = document.createElement("LI");                 // Create a <li> node
var textnode = document.createTextNode("Water");         // Create a text node
node.appendChild(textnode);                              // Append the text to <li>

toto = document.getElementById("ALLTHEDATA");
toto.innerhtml += (textnode);
