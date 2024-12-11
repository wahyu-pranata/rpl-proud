const dropdowns = document.querySelectorAll('.dropdown');

dropdowns.forEach(dropdown => {
    const select = dropdown.querySelector('.select');
    const dropdown_icon = dropdown.querySelector('.dropdown-icon');
    const options = dropdown.querySelector('.options');
    const option_lists = dropdown.querySelectorAll('ul li');
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
                otherDropdownIcon.src = 'icon/dropdown.png'; // Reset to default icon
            }
        });

        // Toggle the current dropdown
        select.classList.toggle('select-clicked');
        dropdown_icon.classList.toggle('dropdown-icon-rotate');
        options.classList.toggle('options-open');

        // Change the icon based on the state
        if (options.classList.contains('options-open')) {
            dropdown_icon.src = 'icon/dropdown-blue.png';
        } else {
            dropdown_icon.src = 'icon/dropdown.png';
        }
    });

    // Select the option
    option_lists.forEach(option_list => {
        option_list.addEventListener('click', () => {
            selected.innerText = option_list.innerText;
            select.classList.remove('select-clicked');
            dropdown_icon.src = 'icon/dropdown.png';
            dropdown_icon.classList.remove('dropdown-icon-rotate');
            options.classList.remove('options-open');

            // Remove active class from all options and add it to the selected option
            option_lists.forEach(option => {
                option.classList.remove('active');
            });
            option_list.classList.add('active');
        });
    });
});
