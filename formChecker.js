// Email and password check are already handled by the html inputs
// Checks to make sure the quantity sections aren't empty and that shipping option is picked

function formChecker() {
    let isValid = true;
    let murakamiQuantity = document.getElementById("murakami");
    let gaimanQuantity = document.getElementById("gaiman");
    let tolkeinQuantity = document.getElementById("tolkein");

    if (murakamiQuantity == "" || murakamiQuantity.value < 0) {
        isValid = false;
    }
    else if (gaimanQuantity == "" || gaimanQuantity.value < 0) {
        isValid = false;
    }
    else if (tolkeinQuantity == "" || tolkeinQuantity.value < 0) {
        isValid = false;
    }
    
    if (isValid) {
        document.getElementById("frontend").submit();
    }
    
}