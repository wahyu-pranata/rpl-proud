{{-- to use the broadcast, you need to add pop up button like this --}}
{{-- <button id="pop" class="relative" onclick="popUp()">pop</button> --}}
<div id="broadcast" class="z-[9999] fixed font-hind h-screen w-screen hidden justify-center items-center bg-black bg-opacity-30">
    <form method="POST" enctype="multipart/form-data" class="space-y-2">
        <div class="flex bg-dark-blue justify-between items-center px-4 w-[50em] h-[2em] rounded-lg border-2 border-solid border-dark-secondary">
            <span class="text-light-primary">New Broadcast</span>
            <svg id="close-button" class="stroke-red-500" width="29" height="30" viewBox="0 0 29 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M21.9292 22.0713L7.78706 7.92915" stroke-width="4" stroke-linecap="round"/>
                <path d="M7.78662 22.0713L21.9288 7.92915" stroke-width="4" stroke-linecap="round"/>
            </svg>
        </div>
        <div class="w-[50em] bg-white border-2 border-dark-primary px-5 py-1 rounded-xl">
            <div class="w-full">
                <x-input-field id="subjek" type='text'>Subjek</x-input-field>
            </div>
            <div class="input-box">
                <textarea required class="w-full h-[20em] resize-none rounded-lg border-solid border-2 border-gray-primary hover:border-dark-secondary focus:border-light-blue" name="description" id="desc" cols="30" rows="10" placeholder=" "></textarea>
                <label class="input-label" for="desc">Description</label>
            </div>
            <div class="flex flex-col">
                <div class="input-box">
                    <label class="file-label" for="files">Select File</label>
                    <div id="upload-button" class="upload-button">
                        <svg width="17" height="18" viewBox="0 0 17 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M7.45817 13.1667V4.67716L4.74984 7.3855L3.2915 5.87508L8.49984 0.666748L13.7082 5.87508L12.2498 7.3855L9.5415 4.67716V13.1667H7.45817ZM2.24984 17.3334C1.67692 17.3334 1.18664 17.1296 0.779004 16.722C0.371365 16.3143 0.167198 15.8237 0.166504 15.2501V12.1251H2.24984V15.2501H14.7498V12.1251H16.8332V15.2501C16.8332 15.823 16.6294 16.3136 16.2217 16.722C15.8141 17.1303 15.3234 17.3341 14.7498 17.3334H2.24984Z" fill="#679CE4"/>
                        </svg>
                        <label class="file-name" for="">Upload File</label>
                    </div>
                    <input id="upload-input" class="file-input" type="file" accept=".jpg, .jpeg, .png, .pdf"  onchange="addFile(this)">
                </div>
                <div id="fileListContainer" class="h-[10em] w-fit overflow-y-auto pr-2 space-y-2">
                    <p class="text-gray-500">No files uploaded yet</p>
                </div>
            </div>
            <div class="flex justify-end items-end">
                <div class="mb-[10px]">
                    <div class="flex justify-center items-center my-[1em]">
                        <button type='submit' class="group shadow-none outline-none w-fit h-fit border-2 border-solid border-dark-blue py-[0.65em] px-[1em] rounded-lg text-light-primary text-base font-semibold hover:bg-dark-blue active:bg-transparent active:border-transparent active:text-dark-blue">
                            <svg class="" width="20" height="21" viewBox="0 0 20 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path class="group-hover:fill-white group-active:fill-dark-blue" d="M18.0401 0.823441C19.0561 0.468441 20.0321 1.44444 19.6771 2.46044L13.7521 19.3904C13.3671 20.4884 11.8371 20.5504 11.3651 19.4874L8.5061 13.0554L12.5301 9.03044C12.6626 8.88827 12.7347 8.70022 12.7313 8.50592C12.7278 8.31162 12.6491 8.12623 12.5117 7.98882C12.3743 7.85141 12.1889 7.77269 11.9946 7.76927C11.8003 7.76584 11.6123 7.83796 11.4701 7.97044L7.4451 11.9944L1.0131 9.13544C-0.0499011 8.66244 0.0130987 7.13344 1.1101 6.74844L18.0401 0.823441Z" fill="#2D4970"/>
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>
<script>
    const broadcast = document.getElementById('broadcast');
    const closeButton = document.getElementById('close-button');
    const uploadButton = document.getElementById('upload-button');
    const fileInput = document.getElementById('upload-input');
    const fileListContainer = document.getElementById('fileListContainer');
    let uploadedFiles = []; // Store files here

    uploadButton.addEventListener('click', () => {
        fileInput.click();
    });

    closeButton.addEventListener('click', () => {
        broadcast.classList.remove('flex');
        broadcast.classList.add('hidden');
    });

    function popUp(){
        broadcast.classList.remove('hidden');
        broadcast.classList.add('flex');
    }

    function addFile(input) {
        const files = input.files;
        if (files.length > 0) {
            for (const file of files) {
                const fileId = uploadedFiles.length;
                uploadedFiles.push(file);

                // Extract file extension
                const fileExtension = file.name.split('.').pop(); // Get the text after the last '.'

                // Create file preview
                const fileItem = document.createElement('div');
                fileItem.className = "flex items-center space-x-4 bg-gray-100 p-3 rounded-md shadow";
                fileItem.dataset.fileId = fileId;

                fileItem.innerHTML = `
                    <div class="w-[18em] h-fit py-2 px-4 flex justify-between items-center rounded-lg">
                        <div class="w-full flex justify-between items-center pr-2">
                            <span class="truncate max-w-[12em] overflow-hidden text-ellipsis whitespace-nowrap" title="${file.name}">${file.name}</span>
                            <span class="text-gray-500 text-sm ml-2">(${fileExtension})</span>
                        </div>
                        <button onclick="removeFile(${fileId})" type="button" class="bg-red-500 px-2 py-1 rounded-md text-white">-</button>
                    </div>
                `;

                fileListContainer.appendChild(fileItem);
            }

            input.value = ""; // Reset input for the next selection

            // Remove placeholder if present
            fileListContainer.querySelector('p')?.remove();
        }
    }

    function removeFile(fileId) {
        uploadedFiles[fileId] = null;

        const fileItem = document.querySelector(`[data-file-id="${fileId}"]`);
        if (fileItem) {
            fileItem.remove();
        }

        if (!uploadedFiles.some(file => file !== null)) {
            const placeholder = document.createElement('p');
            placeholder.textContent = "No files uploaded yet";
            placeholder.className = "text-gray-500";
            fileListContainer.appendChild(placeholder);
        }
    }
</script>
