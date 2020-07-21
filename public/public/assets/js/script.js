function methodPay($method) {
    let holdForm = document.querySelector('#hold_form');
    let masterCard = document.querySelector('#master-card');
    let btc = document.querySelector('#btcid');
    let masterCardForm = document.querySelector('.masterCardForm');
    let bitcoinForm = document.querySelector('.bitcoinForm');
    let submit_btn = document.querySelector('#submit-btn');
    let master_message= document.querySelector('.master_message');
    let btc_message= document.querySelector('.btc_message');

    switch ($method) {
        case "master_card":
            holdForm.style.display = "block";
            btc.style.opacity = 0.2;
            masterCard.style.opacity = 1;
            // Dispay master card forms
            masterCardForm.style.display = "block";
            master_message.innerHTML = "This is supported in Nigeria only";
            bitcoinForm.style.display = "none";
            submit_btn.style.display = "block";
            break;
        case "btc":
            holdForm.style.display = "block";
            masterCard.style.opacity = 0.2;
            btc.style.opacity = 1;
            // Display bitcoin form
            bitcoinForm.style.display = "block";
            btc_message.innerHTML = "This is a General Selection";
            masterCardForm.style.display = "none";
            submit_btn.style.display = "block";
            break;
    }
}

//Function for toggle profile details

//Set status to be false

let toggleProfileStatus = false;
let togglePaymentStatus = false;
let toggleValidIdStatus = false;
let toggleKinStatus = false;

//get document query selector

let profile_container = document.querySelector('#profile-container');
let payment_container = document.querySelector('#payment-container');
let valid_id_container = document.querySelector('#valid_id_container');
let kin_container = document.querySelector('#kin-container');

let profile_info = document.querySelector('#profile-info');
let payment_info = document.querySelector('#payment-info');
let kin_info = document.querySelector('#kin-info');
let valid_id_info = document.querySelector('#valid_id_info');

let profileStat = document.querySelector('#profilestat');
let paymentStat = document.querySelector('#paymentStat');
let validStat = document.querySelector('#validStat');
let kinStat = document.querySelector('#kinStat');

//Function that handls the request

function toggleViewProperties($request) {
   switch ($request) {
       case "profile":
           if (toggleProfileStatus === false) {
               profile_container.style.height = "500px";
               profile_info.style.visibility = "visible";
               profileStat.innerHTML = "Close";
               toggleProfileStatus = true;
           } else {
               profile_info.style.visibility = "hidden";
               profile_container.style.height = "50px";
               profileStat.innerHTML = "Open";
               toggleProfileStatus = false;
           }
           break;
       case "payment":
           if (togglePaymentStatus === false) {
               paymentStat.innerHTML = "Close";
               payment_container.style.height = "320px";
               payment_info.style.visibility = "visible";
               togglePaymentStatus = true;
           } else {
               payment_info.style.visibility = "hidden";
               payment_container.style.height = "50px";
               paymentStat.innerHTML = "Open";
               togglePaymentStatus = false;
           }
           break;
       case "valid_id":
           if (toggleValidIdStatus === false) {
               validStat.innerHTML = "Close";
               valid_id_container.style.height = "250px";
               valid_id_info.style.visibility = "visible";
               toggleValidIdStatus = true;
           } else {
               validStat.innerHTML = "Open";
               valid_id_container.style.height = "50px";
               valid_id_info.style.visibility = "hidden";
               toggleValidIdStatus = false;
           }
           break;
       case "kin":
            if (toggleKinStatus === false) {
                kinStat.innerHTML = "Close";
                kin_container.style.height = "300px";
                kin_info.style.visibility = "visible";
                toggleKinStatus = true;
            } else {
                kinStat.innerHTML = "Open";
                kin_container.style.height = "50px";
                kin_info.style.visibility = "hidden";
                toggleKinStatus = false;
            }
           break
   }
}


//input
