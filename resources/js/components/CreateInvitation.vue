
<template>
    <dialog ref="broadcastRef" id="broadcast" class="z-[9999] fixed font-hind top-0  h-screen w-screen justify-center items-center bg-black bg-opacity-30">
        <form ref="broadcastForm" id="broadcastForm" method="POST" enctype="multipart/form-data" class="space-y-2">
            <div class="flex bg-dark-blue justify-between items-center px-4 w-[50em] h-[2em] rounded-lg border-2 border-solid border-dark-secondary">
                <span class="text-light-primary">New Invitation untuk Posisi Koordinator {{ division.name }}</span>
                <button type="button" @click="$refs.broadcastRef.classList.remove('flex')" id="close-button">
                    <svg class="stroke-red-500" width="29" height="30" viewBox="0 0 29 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M21.9292 22.0713L7.78706 7.92915" stroke-width="4" stroke-linecap="round"/>
                        <path d="M7.78662 22.0713L21.9288 7.92915" stroke-width="4" stroke-linecap="round"/>
                    </svg>
                </button>
            </div>
            <div class="w-[50em] bg-white border-2 border-dark-primary p-6 rounded-xl">
                <div class="w-full">
                    <div class="input-box relative">
                        <input required type="text" id="subjekBroadcast" name="title" :value="`Undangan menjadi Koordinator (${division.name}) dalam ${eventName}`"
                            class="block px-2.5 pb-2.5 pt-4 w-full text-sm rounded-lg border-2 border-gray-500 hover:border-black appearance-none dark:border-gray-500 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                            placeholder=" " />
                        <label for="subjekBroadcast"
                            class="absolute text-sm text-gray-500 dark:text-gray-500 duration-300 transform -translate-y-4 scale-75 top-2 origin-[0] bg-white px-2 peer-focus:px-2 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto start-1">
                            Subjek
                        </label>
                    </div>
                </div>
                <div class="input-box relative mt-4">
                    <textarea id="bodyBroadcast" name="body" rows="10" :value="eventDescription"
                    class="block px-2.5 pb-2.5 pt-4 w-full resize-none text-sm rounded-lg border-2 border-gray-500 hover:border-black appearance-none dark:border-gray-500 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                    placeholder=" "></textarea>
                    <label for="bodyBroadcast"
                    class="absolute text-sm text-gray-500 dark:text-gray-500 duration-300 transform -translate-y-4 scale-75 top-2 origin-[0] bg-white px-2 peer-focus:px-2 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-5 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto start-1">
                    Deskripsi Kegiatan</label>
                </div>
                <div class="w-full mt-4">
                    <div class="input-box relative">
                        <input required type="email" id="targetEmail" name="target_user_email"
                            class="block px-2.5 pb-2.5 pt-4 w-full text-sm rounded-lg border-2 border-gray-500 hover:border-black appearance-none dark:border-gray-500 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                            placeholder=" " />
                        <label for="targetEmail"
                            class="absolute text-sm text-gray-500 dark:text-gray-500 duration-300 transform -translate-y-4 scale-75 top-2 origin-[0] bg-white px-2 peer-focus:px-2 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto start-1">
                            Email Address
                        </label>
                    </div>
                </div>
                <div class="flex flex-col mt-6">
                    <div class="input-box group max-w-fit" x-data="">
                        <label class="file-label my-[0.5em]" for="uploadInput">Attachments</label>
                        <div class="upload-button group-hover:bg-light-blue text-ellipsis max-w-full w-fit h-[3.2em] border-solid border-light-blue border-2 flex items-center justify-between rounded-lg px-[1em] text-light-blue space-x-2 mb-3 mt-2 active:border-transparent">
                            <svg width="17" height="18" viewBox="0 0 17 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M7.45817 13.1667V4.67716L4.74984 7.3855L3.2915 5.87508L8.49984 0.666748L13.7082 5.87508L12.2498 7.3855L9.5415 4.67716V13.1667H7.45817ZM2.24984 17.3334C1.67692 17.3334 1.18664 17.1296 0.779004 16.722C0.371365 16.3143 0.167198 15.8237 0.166504 15.2501V12.1251H2.24984V15.2501H14.7498V12.1251H16.8332V15.2501C16.8332 15.823 16.6294 16.3136 16.2217 16.722C15.8141 17.1303 15.3234 17.3341 14.7498 17.3334H2.24984Z" fill="#679CE4"
                                class="group-hover:fill-light-primary"
                                />
                            </svg>
                            <label class="file-name group-hover:text-light-primary" for="uploadInput">Upload File</label>
                        </div>
                        <input ref="broadcastFileInput" id="uploadInput" @change="addFile($refs.broadcastFileInput)" class="file-input hidden" required type="file">
                    </div>
                    <div ref="fileListContainer" class="h-[10em] w-fit overflow-y-auto pr-2 space-y-2">
                        <p v-if="uploadedFiles.length === 0" class="text-gray-500">No files uploaded yet</p>
                        <div class="w-[18em] h-fit py-2 px-4 flex justify-between items-center rounded-lg" v-for="(uploadedFile, index) in uploadedFiles">
                            <div class="w-full flex justify-between items-center pr-2">
                                <span class="truncate max-w-[12em] overflow-hidden text-ellipsis whitespace-nowrap" :title="uploadedFile.name">{{ uploadedFile.name }}</span>
                                <span class="text-gray-500 text-sm ml-2">({{ uploadedFile.name.split('.').pop() }})</span>
                            </div>
                            <button @click="removeFile(index)" type="button" class="bg-red-500 px-2 py-1 rounded-md text-white">-</button>
                        </div>
                    </div>
                </div>
                <div class="flex justify-end items-end">
                    <div class="mb-[10px]">
                        <div class="flex justify-center items-center my-[1em]">
                            <button type='button' @click="storeInvitation('/storeInvitation')" class="group shadow-none outline-none w-fit h-fit border-2 border-solid border-dark-blue py-[0.65em] px-[1em] rounded-lg text-light-primary text-base font-semibold hover:bg-dark-blue active:bg-transparent active:border-transparent active:text-dark-blue">
                                <svg class="" width="20" height="21" viewBox="0 0 20 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path class="group-hover:fill-white group-active:fill-dark-blue" d="M18.0401 0.823441C19.0561 0.468441 20.0321 1.44444 19.6771 2.46044L13.7521 19.3904C13.3671 20.4884 11.8371 20.5504 11.3651 19.4874L8.5061 13.0554L12.5301 9.03044C12.6626 8.88827 12.7347 8.70022 12.7313 8.50592C12.7278 8.31162 12.6491 8.12623 12.5117 7.98882C12.3743 7.85141 12.1889 7.77269 11.9946 7.76927C11.8003 7.76584 11.6123 7.83796 11.4701 7.97044L7.4451 11.9944L1.0131 9.13544C-0.0499011 8.66244 0.0130987 7.13344 1.1101 6.74844L18.0401 0.823441Z" fill="#2D4970"/>
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </dialog>
    <button type="button" @click="$refs.broadcastRef.classList.add('flex')" :class="`${openButtonClass}`">
        <!-- BUTTON SLOT -->
        <slot></slot>
    </button>

</template>

<script setup>
import { ref } from 'vue';
import axios from 'axios';

    const props = defineProps(["openButtonClass", "division", "eventName", "eventId", "eventDescription", "roleName"])

    let uploadedFiles = ref([]); // Store files here
    const broadcastForm = ref('broadcastForm')

    function addFile(input) {
        const files = input.files;
        if (files.length > 0) {
            for (const file of files) {
                uploadedFiles.value.push(file);
            }
        }
    }

    function removeFile(fileId) {
        uploadedFiles.value.splice(fileId, 1)
    }

    const storeInvitation = async (route) => {
        const formData = new FormData(broadcastForm.value)

        for (const file of uploadedFiles.value) {
            formData.append("attachments[]", file, file.name)
        }
        formData.append('event_division_id', props.division.id)
        formData.append('event_id', props.eventId)
        formData.append('role_name', props.roleName)

        await axios({
            method: 'post',
            url: '/storeInvitation',
            data: formData,
        })

    };

</script>
