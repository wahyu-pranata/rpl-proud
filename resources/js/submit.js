document.getElementById('myForm').addEventListener('submit', function (event) {
    const dropdowns = document.querySelectorAll('.dropdown'); // Select all dropdowns

    let isValid = true; // Assume form is valid

    dropdowns.forEach(dropdown => {
        const selected = dropdown.querySelector('.selected').innerText;

        // Check if the dropdown is still set to the default value
        if (selected === 'None') {
            isValid = false;

            // Highlight the dropdown with an error style (optional)
            dropdown.querySelector('.select').classList.add('error');
        } else {
            // Remove the error style if a valid option is selected
            dropdown.querySelector('.select').classList.remove('error');
        }
    });

    if (!isValid) {
        event.preventDefault(); // Stop form submission
        alert('Please select an option from the dropdown.');
    }
});
