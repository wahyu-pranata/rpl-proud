const dropdowns = document.querySelectorAll('.dropdown');

dropdowns.forEach(dropdown => {
    const select = dropdown.querySelector('.select');
    const dropdownIcon = dropdown.querySelector('.dropdown-icon');
    const options = dropdown.querySelector('.options');
    const optionLists = dropdown.querySelectorAll('ul li');
    const selected = dropdown.querySelector('.selected');
    const defaultText = selected.innerText;
    let selectedValue = null;

    select.addEventListener('click', (event) => {
        event.stopPropagation(); // Prevent closing dropdown when clicking inside

        // Close all other dropdowns
        dropdowns.forEach(otherDropdown => {
            if (otherDropdown !== dropdown) {
                const otherSelect = otherDropdown.querySelector('.select');
                const otherDropdownIcon = otherDropdown.querySelector('.dropdown-icon');
                const otherOptions = otherDropdown.querySelector('.options');

                otherSelect.classList.remove('select-clicked');
                otherDropdownIcon.classList.remove('dropdown-icon-rotate');
                otherOptions.classList.remove('options-open');
                otherDropdownIcon.style.stroke = ''; // Reset stroke for other dropdowns
            }
        });

        // Toggle the current dropdown
        select.classList.toggle('select-clicked');
        dropdownIcon.classList.toggle('dropdown-icon-rotate');
        options.classList.toggle('options-open');

        // Change stroke to blue if the dropdown is open
        if (options.classList.contains('options-open')) {
            dropdownIcon.style.stroke = '#679CE4';
        } else {
            dropdownIcon.style.stroke = ''; // Reset stroke when dropdown is closed
        }
    });

    // Select an option
    optionLists.forEach(optionList => {
        optionList.addEventListener('click', (event) => {
            event.stopPropagation(); // Prevent the document click listener from triggering
            selected.innerText = optionList.innerText; // Update selected text
            selectedValue = optionList.getAttribute("data-value"); // Store the selected value

            select.classList.remove('select-clicked');
            dropdownIcon.classList.remove('dropdown-icon-rotate');
            options.classList.remove('options-open');

            // Remove active class from all options and add it to the selected option
            optionLists.forEach(option => {
                option.classList.remove('active');
            });
            optionList.classList.add('active');

            // Reset stroke color
            dropdownIcon.style.stroke = '';
        });
    });

    // Reset dropdown when clicking outside
    document.addEventListener('click', (event) => {
        if (!dropdown.contains(event.target)) {
            if (options.classList.contains('options-open')) {
                selected.innerText = defaultText; // Reset to default text only if no option was selected
                select.classList.remove('select-clicked');
                dropdownIcon.classList.remove('dropdown-icon-rotate');
                options.classList.remove('options-open');
                dropdownIcon.style.stroke = ''; // Reset stroke
                selectedValue = null;

                optionLists.forEach(option => {
                    option.classList.remove('active');
                });
            }
        }
    });
});
