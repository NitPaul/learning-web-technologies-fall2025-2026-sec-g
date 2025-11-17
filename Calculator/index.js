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

    function calculate() {
    const value = display.value;

    // Parcentage Operation
    if (value.endsWith("%")) {
        const number = parseFloat(value.slice(0, -1));
        display.value = number / 100;
        return;
    }

        // Addition Operation
    if (value.includes("+")) {
        const parts = value.split("+");
        const num1 = parseFloat(parts[0]);
        const num2 = parseFloat(parts[1]);
        display.value = num1 + num2;
        return;
    }

    // If no operator found
    display.value = "Error";
}


});
