

var request = new XMLHttpRequest();


request.open("GET", "http://127.0.0.1:8000/api/artistes/1", false);

request.send(null);


console.log(request.responseText);




document.getElementById('json').textContent = JSON.stringify(request.responseText, undefined, 2);




