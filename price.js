let price = 0.00;
const FinalButton = document.getElementById('Final')

function updatePrice() {
    if (document.getElementById("nail1").checked == true) {
        price += 10;
    }
    if (document.getElementById("nail2").checked == true) {
        price += 9;
    }
    if (document.getElementById("nail3").checked == true) {
        price += 8;
    }
    if (document.getElementById("nail4").checked == true) {
        price += 7;
    }
    document.getElementById('total').value = price;
    FinalButton.disabled = true
}

if (FinalButton.disabled == true)
    {
        FinalButton.classList.add('hide');
    }
