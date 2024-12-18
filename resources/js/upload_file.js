document.addEventListener('DOMContentLoaded', () => {
    const fileInputs = document.querySelectorAll('.file-input');
    const uploadButtons = document.querySelectorAll('.upload-button');
    const fileLabels = document.querySelectorAll('.file-name');

    uploadButtons.forEach((button, index) => {
        const fileInput = fileInputs[index];
        const fileLabel = fileLabels[index];

        button.addEventListener('click', () => {
            fileInput.click();
        });

        fileInput.addEventListener('change', (event) => {
            const file = event.target.files[0];
            const fileName = file ? file.name : 'Upload File';

            const maxFileNameLength = 30;
            const truncatedFileName =
                fileName.length > maxFileNameLength
                    ? `${fileName.slice(0, 15)}...${fileName.slice(-10)}`
                    : fileName;

            fileLabel.textContent = truncatedFileName;
        });
    });
});
