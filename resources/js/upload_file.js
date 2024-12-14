document.addEventListener('DOMContentLoaded', () => {
    const fileInput = document.getElementById('bukti');
    const fileLabel = document.querySelector('.file-name');
    const uploadButton = document.querySelector('.upload-button');

    uploadButton.addEventListener('click', () => {
        fileInput.click();
    });

    fileInput.addEventListener('change', (event) => {
        const file = event.target.files[0]; // Get the first selected file
        const fileName = file ? file.name : 'No file selected';
        const fileType = file ? file.type.split('/').pop() : ''; // Get the file type (e.g., 'jpeg', 'pdf')

        const baseFileName = fileName ? fileName.slice(0, fileName.lastIndexOf('.')) : '';
        const extension = fileType ? ' (' + fileType + ')' : '';

        // Combine the truncated name with the extension
        const truncatedFileName = baseFileName.length > 10 ? `${baseFileName.slice(0, 10)}...${extension}` : `${baseFileName}${extension}`;

        // Update the label text with the file name and type
        fileLabel.textContent = truncatedFileName;
    });
});
