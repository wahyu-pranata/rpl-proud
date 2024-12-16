const dropdowns = document.querySelectorAll('.dropdown');

dropdowns.forEach(dropdown => {
    const select = dropdown.querySelector('.select');
    const dropdownIcon = dropdown.querySelector('.dropdown-icon');
    const options = dropdown.querySelector('.options');
    const optionLists = dropdown.querySelectorAll('ul li');
    const selected = dropdown.querySelector('.selected');

    // Toggle the dropdown
    select.addEventListener('click', () => {
        // Close all other dropdowns
        dropdowns.forEach(otherDropdown => {
            if (otherDropdown !== dropdown) {
                const otherSelect = otherDropdown.querySelector('.select');
                const otherDropdownIcon = otherDropdown.querySelector('.dropdown-icon');
                const otherOptions = otherDropdown.querySelector('.options');

                otherSelect.classList.remove('select-clicked');
                otherDropdownIcon.classList.remove('dropdown-icon-rotate');
                otherOptions.classList.remove('options-open');
                otherDropdownIcon.style.stroke = '';  // Reset stroke for other dropdowns
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
            dropdownIcon.style.stroke = '';  // Reset stroke when dropdown is closed
        }
    });

    // Select the option
    optionLists.forEach(optionList => {
        optionList.addEventListener('click', () => {
            selected.innerText = optionList.innerText;
            select.classList.remove('select-clicked');
            dropdownIcon.classList.remove('dropdown-icon-rotate');
            options.classList.remove('options-open');

            // Remove active class from all options and add it to the selected option
            optionLists.forEach(option => {
                option.classList.remove('active');
            });
            optionList.classList.add('active');
        });
    });

    // Hover effect when mouse enters the dropdown
    dropdown.addEventListener('mouseover', () => {
        if (!options.classList.contains('options-open')) {
            dropdownIcon.style.stroke = '#030303';  // Change stroke to black when dropdown is hovered but not open
        }
    });

    // Reset stroke when mouse leaves
    dropdown.addEventListener('mouseout', () => {
        if (!options.classList.contains('options-open')) {
            dropdownIcon.style.stroke = '';  // Reset stroke when mouse leaves and dropdown is not open
        }
    });

    select.addEventListener('click', () => {
        if (!options.classList.contains('options-open')) {
            dropdownIcon.style.stroke = '#030303';  // Reset stroke when dropdown is closed
        }
    });
});
