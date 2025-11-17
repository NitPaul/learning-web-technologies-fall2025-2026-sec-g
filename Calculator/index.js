document.addEventListener("DOMContentLoaded", () => {
    const display = document.getElementById("display");

    const buttons = document.querySelectorAll("button");

    buttons.forEach(button => {

        button.addEventListener("click", () => {

            const value = button.textContent;
            if (value === "C") {
                clearDisplay();
            } 
            else if (value === "CE") {
                clearLastDigit();
            } 
            else if (value === "=") {
                calculate();
            } 
            else {
                appendToDisplay(value);
            }

        });

    });

    
    function appendToDisplay(input) {
        display.value += input;
    }

    function clearDisplay() {
        display.value = "";
    }

    function clearLastDigit() {
        display.value = display.value.slice(0, -1);
    }

});
