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

    // Show  Digits and Operation on Display
    function appendToDisplay(input) {
        display.value += input;
    }

    // Clear Full Display
    function clearDisplay() {
        display.value = "";
    }

    // Clear Last Digit on the Display
    function clearLastDigit() {
        display.value = display.value.slice(0, -1);
    }

    // Main function for the math Operation 
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

    // Subtraction Operation
    if (value.includes("-")) {
        const parts = value.split("-");
        const num1 = parseFloat(parts[0]);
        const num2 = parseFloat(parts[1]);
        display.value = num1 - num2;
        return;
    }
    
    // Multiplication Operation
    if (value.includes("*")) {
        const parts = value.split("*");
        const num1 = parseFloat(parts[0]);
        const num2 = parseFloat(parts[1]);
        display.value = num1 * num2;
        return;
    }

    // Division Operation
    if (value.includes("/")) {
        const parts = value.split("/");
        const num1 = parseFloat(parts[0]);
        const num2 = parseFloat(parts[1]);

        if (num2 === 0) {
            display.value = "Error";
            return;
        }

        display.value = num1 / num2;
        return;
    }
    // If no operator found
    display.value = "Error";
}


});
