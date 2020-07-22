let starterContainer = document.querySelector('#starterContainer')
let advanceContainer = document.querySelector('#advanceContainer')
let ultimateContainer = document.querySelector('#ultimateContainer')
let selectPaymentMethod = document.querySelector('#selectPaymentMethod')
let knowWhatToChoose = document.querySelector('#knowWhatToChoose')

//Variable for account form and message

let bankInput = document.querySelector('#bankInput');
let bankMessage = document.querySelector('#bankMessage');
let bankSuccessMessage = document.querySelector('#bankSuccessMessage');
let bankBtn = document.querySelector('#bankBtn');


function  investPlan($plan) {
    switch ($plan) {
        case "starter":
            starterContainer.style.opacity = "1";
            advanceContainer.style.opacity = "0.2";
            ultimateContainer.style.opacity = "0.2";
            selectPaymentMethod.style.visibility = "visible";
            knowWhatToChoose.value = "Starter";
            bankMessage.style.display = "none";
            bankInput.style.border = "1px solid gray";
            bankInput.value = "";
            bankSuccessMessage.style.display = "none";
            bankBtn.style.display = "none";
            break;
        case "advance":
            advanceContainer.style.opacity = "1";
            starterContainer.style.opacity = "0.2";
            ultimateContainer.style.opacity = "0.2";
            selectPaymentMethod.style.visibility = "visible";
            knowWhatToChoose.value = "Advance";
            bankMessage.style.display = "none";
            bankInput.style.border = "1px solid gray";
            bankInput.value = "";
            bankSuccessMessage.style.display = "none";
            bankBtn.style.display = "none";
            break;
        case "ultimate":
            ultimateContainer.style.opacity = "1";
            advanceContainer.style.opacity = "0.2";
            starterContainer.style.opacity = "0.2";
            selectPaymentMethod.style.visibility = "visible";
            knowWhatToChoose.value = "Ultimate";
            bankMessage.style.display = "none";
            bankInput.style.border = "1px solid gray";
            bankInput.value = "";
            bankSuccessMessage.style.display = "none";
            bankBtn.style.display = "none";
            break;
    }
}

//Select Payment GateWay
let bankForm = document.querySelector('#bankForm');
let bitcoinForm = document.querySelector('#bitcoinForm');
let bankImg = document.querySelector('#bankImg');
let bitcoinImg = document.querySelector('#bitcoinImg');

function depositOption($deposit) {
    switch ($deposit) {
        case "bank":
            bankForm.style.display = "block";
            bankImg.style.opacity = "1";
            bitcoinImg.style.opacity = "0.2";
            bitcoinForm.style.display = "none";
            break
        case "btc":
            bitcoinImg.style.opacity = "1";
            bankImg.style.opacity = "0.2";
            bitcoinForm.style.display = "block";
            bankForm.style.display = "none";
            break
    }
}


function makeDepositBank() {
    if (knowWhatToChoose.value === "Starter") {
        //Code to run for the starter plan
        if (bankInput.value < 128.87 || bankInput.value > 927.84) {
            bankMessage.style.display = "block";
            bankSuccessMessage.style.display = "none";
            bankInput.style.border = "1px solid red";
            bankMessage.innerHTML = "Your value must be greater than $"+bankInput.value + " and not more than $927.84";
            bankBtn.style.display = "none";
        } else {
            bankSuccessMessage.style.display = "block";
            bankMessage.style.display = "none";
            bankInput.style.border = "2px solid green";
            bankSuccessMessage.innerHTML = "Value accepted";
            bankBtn.style.display = "block";
        }

    } else if (knowWhatToChoose.value === "Advance") {
        //    Code to run for the advance plan
        if (bankInput.value < 128.87  || bankInput.value > 9278.35) {
            bankMessage.style.display = "block";
            bankSuccessMessage.style.display = "none";
            bankInput.style.border = "1px solid red";
            bankMessage.innerHTML = "Your value must be greater than $"+bankInput.value + " and not more than $9,278.35";
            bankBtn.style.display = "none";
        } else {
            bankSuccessMessage.style.display = "block";
            bankMessage.style.display = "none";
            bankInput.style.border = "2px solid green";
            bankSuccessMessage.innerHTML = "Value accepted";
            bankBtn.style.display = "block";
        }
    } else if (knowWhatToChoose.value === "Ultimate") {
        //    Code to run for the advance plan
        if (bankInput.value < 128.87  || bankInput.value > 92783.50) {
            bankMessage.style.display = "block";
            bankSuccessMessage.style.display = "none";
            bankInput.style.border = "1px solid red";
            bankMessage.innerHTML = "Your value must be greater than $"+bankInput.value + " and not more than $92783.50";
            bankBtn.style.display = "none";
        } else {
            bankSuccessMessage.style.display = "block";
            bankMessage.style.display = "none";
            bankInput.style.border = "2px solid green";
            bankSuccessMessage.innerHTML = "Value accepted";
            bankBtn.style.display = "block";
        }
    }
}


const button = document.querySelector('#bankBtnPop');
button.addEventListener('click', () => { ddoptinbox.openclose('open') });
button.click();



