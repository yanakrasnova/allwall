function price() {
    var num1, num2, num3, error1, error2, result;
    num1 = document.getElementById('n1').value;
    num1 = parseFloat(num1);
    num2 = document.getElementById('n2').value;
    num2 = parseFloat(num2);
    num3 = document.getElementById('n3').value;
    result = "Стоимость: " + num1 * num2 * num3 + " грн за полотно";
    error1 = "Введите длину!";
    error2 = "Введите ширину!";
    if (!isNaN(num1) && !isNaN(num2) > 0) document.getElementById("out").innerHTML = result;
    else if (isNaN(num1)) document.getElementById("out").innerHTML = error1;
    else if (isNaN(num2)) document.getElementById("out").innerHTML = error2;
}

function openForm() {
    document.getElementById("myForm").style.display = "block";
}

function closeForm() {
    document.getElementById("myForm").style.display = "none";
}

