<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Email View</title>
    <script src="https://cdn.tailwindcss.com"></script>
    @vite('resources/css/app.css')
</head>
<body class="bg-white box-border h-screen">
    <!-- Full Page Container -->
    <div class="flex flex-col h-full">

        <!-- Page Header -->
        <x-pageheader
            :tabs="[
                ['label' => 'Inbox',
                 'icon_path' => 'M14 6C15.6569 6 17 4.65685 17 3C17 1.34315 15.6569 0 14 0C12.3431 0 11 1.34315 11 3C11 4.65685 12.3431 6 14 6Z',
                 'icon_class' => 'select-tab'
                ]
            ]"
            dbtop="Bayu Fadjar Dwi Putra"
            dbbottom="2308561080"
        />

        <div class="flex items-center justify-between px-6 py-6">
            <!-- Search Bar and Checkbox -->
            <div class="relative flex items-center gap-4">
                <!-- Search Input -->
                <div class="relative">
                    <input
                        type="text"
                        placeholder="Search"
                        class="border rounded-md pl-10 pr-4 py-2 h-10 w-72 hover:border-2 hover:border-black focus:border-2 focus:border-light-blue"
                    />
                    <!-- Search Icon -->
                    <svg
                        class="absolute left-3 top-1/2 transform -translate-y-1/2 w-5 h-5 text-gray-400"
                        fill="none"
                        stroke="currentColor"
                        viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg"
                    >
                        <circle cx="10.5" cy="10.5" r="7.5" stroke-width="2" stroke-linecap="round"></circle>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-4.35-4.35"></path>
                    </svg>
                </div>
        
                <!-- Checkbox (same height as the input field) -->
                <label class="inline-flex items-center cursor-pointer">
                    <input type="checkbox" class="hidden peer" />
                    <div class="h-6 w-6 px-1 py-1 border-2 border-gray-500 rounded-md flex items-center justify-center hover:border-black peer-checked:bg-light-blue peer-checked:border-light-blue">
                        <svg width="25" height="25" viewBox="0 0 25 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M2.67383 10.5631L10.0422 20.5631L22.6738 2.14209" stroke="white" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </div>
                </label>
        
                <!-- Additional Icon -->
                <button class="h-6 w-6 items-center">
                    <svg width="23" height="23" viewBox="0 0 22 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M10.8151 23.5C7.79585 23.5 5.23854 22.3859 3.14313 20.1578C1.04771 17.9297 0 15.2104 0 12C0 8.78958 1.04771 6.07031 3.14313 3.84219C5.23854 1.61406 7.79585 0.5 10.8151 0.5C12.3697 0.5 13.8568 0.841646 15.2763 1.52494C16.6957 2.20727 17.9124 3.18333 18.9263 4.45312V1.9375C18.9263 1.53021 19.0561 1.18856 19.3157 0.912563C19.5743 0.637521 19.8952 0.5 20.2782 0.5C20.6613 0.5 20.9821 0.637521 21.2408 0.912563C21.5003 1.18856 21.6301 1.53021 21.6301 1.9375V9.125C21.6301 9.53229 21.5003 9.87346 21.2408 10.1485C20.9821 10.4245 20.6613 10.5625 20.2782 10.5625H13.5188C13.1358 10.5625 12.8149 10.4245 12.5563 10.1485C12.2967 9.87346 12.1669 9.53229 12.1669 9.125C12.1669 8.71771 12.2967 8.37606 12.5563 8.10006C12.8149 7.82502 13.1358 7.6875 13.5188 7.6875H17.8448C17.1238 6.34583 16.1383 5.29167 14.8883 4.525C13.6373 3.75833 12.2796 3.375 10.8151 3.375C8.56192 3.375 6.64675 4.21354 5.06956 5.89062C3.49236 7.56771 2.70376 9.60417 2.70376 12C2.70376 14.3958 3.49236 16.4323 5.06956 18.1094C6.64675 19.7865 8.56192 20.625 10.8151 20.625C12.3697 20.625 13.8063 20.1875 15.1249 19.3126C16.4425 18.4386 17.428 17.2708 18.0814 15.8094C18.1941 15.5458 18.3802 15.3245 18.6397 15.1452C18.8984 14.9651 19.1629 14.875 19.4333 14.875C19.9515 14.875 20.3404 15.0667 20.6 15.45C20.8586 15.8333 20.8866 16.2646 20.6838 16.7437C19.8276 18.7802 18.5095 20.4151 16.7295 21.6485C14.9496 22.8828 12.9781 23.5 10.8151 23.5Z" fill="#656565"/>
                    </svg>
                </button>
            </div>
        </div>
        <!-- Email Content -->
        <div class="flex flex-col flex-1 px-6 space-y-6">
            <!-- Header with Actions -->
            <div class="flex items-center justify-between py-1">
                <!-- Back Icon -->
                <button class="flex items-center gap-2 text-gray-600 hover:text-gray-900">
                    <svg width="30" height="30" viewBox="0 0 27 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M19.5322 25L7.46771 13.6452L19.5322 3" stroke="#1E1E1E" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/>
                     </svg>
                    {{-- <span class="font-medium">Back to Inbox</span> --}}
                </button>

                <!-- Delete Icon -->
                <button class="">
                    <svg width="30" height="30" viewBox="0 0 25 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M1.77734 5.8H4.20159M4.20159 5.8H23.5955M4.20159 5.8V22.6C4.20159 23.2365 4.457 23.847 4.91163 24.2971C5.36626 24.7471 5.98288 25 6.62583 25H18.747C19.39 25 20.0066 24.7471 20.4612 24.2971C20.9159 23.847 21.1713 23.2365 21.1713 22.6V5.8M7.83795 5.8V3.4C7.83795 2.76348 8.09336 2.15303 8.54799 1.70294C9.00263 1.25286 9.61924 1 10.2622 1H15.1107C15.7536 1 16.3702 1.25286 16.8249 1.70294C17.2795 2.15303 17.5349 2.76348 17.5349 3.4V5.8M10.2622 11.8V19M15.1107 11.8V19" stroke="#434343" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </button>
            </div>

            <div class="bg-gray-200 rounded-lg p-6 space-y-6 shadow-md">
                <!-- Sender Info -->
                <div class="flex items-center gap-4 pb-4">
                    <!-- Profile Picture -->
                    <img src="https://via.placeholder.com/50" alt="Profile Picture" class="w-12 h-12 rounded-full">

                    <!-- Sender Details -->
                    <div>
                        <h3 class="font-semibold text-lg text-gray-800">Sender Name</h3>
                        <p class="text-gray-600 text-sm">sender@example.com</p>
                    </div>

                    <!-- Date Sent -->
                    <span class="ml-auto text-gray-500 text-sm">23 Aug 2024, 10:30 AM</span>
                </div>

                <!-- Email Subject -->
                <h2 class="text-2xl font-bold text-gray-900">Email Subject Title</h2>

                <!-- Email Content -->
                <div class="text-gray-700 leading-relaxed space-y-4">
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur lacinia tortor ac justo hendrerit, sit amet vestibulum turpis accumsan. Donec quis orci non arcu ullamcorper sagittis at sit amet justo.
                    </p>
                    <p>
                        Quisque vestibulum, justo nec ullamcorper vestibulum, mauris ligula ullamcorper dui, eget feugiat ligula ligula ut ligula. Praesent malesuada elit ac enim hendrerit, et sagittis ex luctus. Integer sollicitudin erat vitae lorem tincidunt sollicitudin.
                    </p>
                    <p>
                        Sed accumsan consectetur nisl, at convallis ex suscipit eget. Ut id interdum risus. Duis non fringilla ex. Fusce bibendum ligula vel magna consectetur, at tristique ligula dignissim.
                    </p>
                </div>

                <!-- Attachments -->
                <div class="space-y-2">
                    <h4 class="font-semibold text-gray-800">Attachments</h4>
                    <div class="flex gap-4">
                        <!-- Attachment 1 -->
                        <div class="flex flex-col items-center">
                            <img src="https://via.placeholder.com/80" alt="Attachment" class="w-20 h-20 rounded-md shadow">
                            <span class="text-xs mt-1 text-gray-600">file1.pdf</span>
                        </div>

                        <!-- Attachment 2 -->
                        <div class="flex flex-col items-center">
                            <img src="https://via.placeholder.com/80" alt="Attachment" class="w-20 h-20 rounded-md shadow">
                            <span class="text-xs mt-1 text-gray-600">image.png</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
