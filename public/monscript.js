

const userAction = async () => {
    const response = await fetch('http://127.0.0.1:8000/api/artistes/2');
    const myJson = await response.json();

    console.log(myJson);
    document.getElementById('json').textContent = JSON.stringify(myJson, undefined, 2);
}

userAction();


