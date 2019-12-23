const header = document.querySelector('header');
const section = document.querySelector('section');

let requestURL = 'https://api.privatbank.ua/p24api/pubinfo?json&exchange&coursid=5';
let request = new XMLHttpRequest();

request.open('GET', requestURL);
request.responseType = 'json';
request.send();

request.onload = function() {
    const currency = request.response;
    showCurrency(currency);
}

function showCurrency(jsonObj) {
    for(let i = 0; i < 4; i++) {
        const myP = document.createElement('p');
        myP.textContent = jsonObj[i].ccy + ' - ' + jsonObj[i].base_ccy + ': ' + jsonObj[i].sale;
        section.appendChild(myP);
    }
}
