    // Function to format the amount input
    function formatAmountInput() {
        // Get the input element
        var amountInput = document.getElementById('amountInput');

        // Get the current value of the input
        var value = amountInput.value;

        // Remove non-numeric characters from the input
        var numericValue = value.replace(/[^0-9.]/g, '');

        // Format the numeric value with commas for thousands separator
        var formattedValue = numericValue.replace(/\B(?=(\d{3})+(?!\d))/g, ",");

        // Set the formatted value back to the input
        amountInput.value = formattedValue;
    }

    // Add event listener to the amount input
    document.getElementById('amountInput').addEventListener('input', formatAmountInput);

    // Add event listener to the "No collateral" checkbox
    document.getElementById('noCollateralCheckbox').addEventListener('change', function() {
        // Get the additional data container
        var additionalData = document.getElementById('additionalData');
        // Get the collateral select container
        var collateralSelectContainer = document.getElementById('collateralSelectContainer');

        // Toggle visibility of the additional data container based on the checkbox state
        additionalData.style.display = this.checked ? 'block' : 'none';
        // Toggle visibility of the collateral select container based on the checkbox state
        collateralSelectContainer.style.display = this.checked ? 'none' : 'block';
    });

    // for downpayment pintig palay
    document.addEventListener("DOMContentLoaded", function() {
        var downPaymentCheckbox = document.getElementById("downPaymentCheckbox");
        var downPaymentAmount = document.getElementById("downPaymentAmount");

        downPaymentCheckbox.addEventListener("change", function() {
            if (this.checked) {
                downPaymentAmount.style.display = "block";
            } else {
                downPaymentAmount.style.display = "none";
            }
        });
    });
