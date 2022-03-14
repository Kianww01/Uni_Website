const detailsBtn = document.getElementById('detailsBtn');

// When the details button is pressed, go to submitDetails()
detailsBtn.addEventListener('click', submitDetails);

function submitDetails() {
    // Validation variables
    let checkCCNum = false;
    let checkExpDate = false;
    let checkSecCode = false;

    // Form Data
    const cardNum = document.getElementById('cardNum').value;
    const expMonth = document.getElementById('expMonth').value;
    const expYear = document.getElementById('expYear').value;
    const secCode = document.getElementById('securityCode').value;

    // Validate card number
    if (!validateCCNum(cardNum)) {
        alert("Invalid Card Num");
    } else {
        checkCCNum = true;
    }

    // Validate expiry date
    if (!validateExpDate(expMonth, expYear) || expMonth == 0 || expYear == 0) {
        alert("Invalid Exp Date");
    } else {
        checkExpDate = true;
    }

    // Validate security code
    if (!validateSecCode(secCode)) {
        alert("Invalid Security Code");
    } else {
        checkSecCode = true;
    }

    // If card number, expiry date and security code are valid, return 1
    if (checkCCNum == true && checkExpDate == true && checkSecCode == true) {
        document.getElementById('h').value = 1;
    } else {
        alert("Please recomplete the form");
        document.getElementById('h').value = -1;
    }
}

function validateCCNum(cardNum) {
    // Card Number validation using regex
    regexp = /^5[1-5][0-9]{14}$/;
    if (regexp.test(cardNum)) {
        return true;
    } else {
        return false;
    }
}

function validateExpDate(expMonth, expYear) {
    const expiryDate = new Date(expYear + '-' + expMonth + "-01");
    if (expiryDate < new Date()) {
        // Invalid Expiry
        return false;
    } else {
        // Valid Expiry
        return true;
    }
}

function validateSecCode(secCode) {
    // Security Code validation using regex
    regexp = /^[0-9]{3,4}$/;
    if (regexp.test(secCode)) {
        return true;
    } else {
        return false;
    }
}