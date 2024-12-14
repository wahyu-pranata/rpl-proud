document.addEventListener('DOMContentLoaded', () => {
    // Select all file inputs, labels, and upload buttons
    const fileInputs = document.querySelectorAll('.file-input');
    const uploadButtons = document.querySelectorAll('.upload-button');
    const fileLabels = document.querySelectorAll('.file-name');

    uploadButtons.forEach((button, index) => {
        const fileInput = fileInputs[index]; // Corresponding file input
        const fileLabel = fileLabels[index]; // Corresponding label

        button.addEventListener('click', () => {
            fileInput.click();
        });

        fileInput.addEventListener('change', (event) => {
            const file = event.target.files[0];
            const fileName = file ? file.name : 'Upload File';
            const fileType = file ? file.type.split('/').pop() : '';
            const baseFileName = fileName ? fileName.slice(0, fileName.lastIndexOf('.')) : '';
            const extension = fileType ? ' (' + fileType + ')' : '';

            // Truncate the file name
            const truncatedFileName = baseFileName.length > 10 ? `${baseFileName.slice(0, 10)}...${extension}` : `${baseFileName}${extension}`;

            // Update the label text
            fileLabel.textContent = truncatedFileName;
        });
    });
});
