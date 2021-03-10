

const userAction = async () => {
    const response = await fetch('http://127.0.0.1:8000/api/artistes');
    const myJson = await response.json(); //extract JSON from the http response
    // do something with myJson
    console.log(myJson);
    document.getElementById('json').textContent = JSON.stringify(myJson, undefined, 2);
}

userAction();


var data = {
    "data": {
        "x": "1",
        "y": "1",
        "url": "http://url.com"
    },
    "event": "start",
    "show": 1,
    "id": 54485485
}


//document.getElementById('json').textContent = JSON.stringify(request.responseText, undefined, 2);




