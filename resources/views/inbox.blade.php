<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inbox</title>
    <script src="https://cdn.tailwindcss.com"></script>
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
</head>
<body id="app" class="bg-white box-border h-screen">
    <div class="flex flex-col h-full">
        <!-- header -->
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

        <!-- Search bar and filters -->
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

        <!-- Select Options -->
        <div class="flex gap-4 px-6 pb-6">
            <select class="border hover:border-2 hover:border-black focus:border-2 focus:border-light-blue bg-white rounded-md py-2 px-4 h-10">
                <option>Dari</option>
            </select>
            <select class="border hover:border-2 hover:border-black focus:border-2 focus:border-light-blue bg-white rounded-md py-2 px-4 h-10">
                <option>Tanggal</option>
            </select>
        </div>

        <!-- Table -->
        <div id="inbox-table" class="flex-1 relative px-6 pb-6 h-[70%]">
            <div class="w-full h-full bg-gray-200 rounded-lg shadow-md overflow-hidden overflow-y-scroll">
                <table class="w-full">
                    @for ($i = 0; $i < 20; $i++)
                        <tr class="group cursor-pointer hover:bg-blue-200 border-b-2 border-white">
                            <!-- Icon -->
                            <td class="py-3 px-8 w-12">
                                <svg width="28" height="25" viewBox="0 0 28 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M27.7778 9.69444V22.2222C27.7778 23.75 26.5278 25 25 25H2.77778C1.25 25 0 23.75 0 22.2222L0.0138889 5.55556C0.0138889 4.02778 1.25 2.77778 2.77778 2.77778H16.8056C16.7222 3.22222 16.6667 3.69444 16.6667 4.16667C16.6667 4.63889 16.7222 5.11111 16.8056 5.55556H2.77778L13.8889 12.5L18.9861 9.31944C19.6389 9.91667 20.4028 10.375 21.25 10.6806L13.8889 15.2778L2.77778 8.33333V22.2222H25V10.9722C26.0278 10.7639 26.9722 10.3056 27.7778 9.69444ZM19.4444 4.16667C19.4444 6.47222 21.3056 8.33333 23.6111 8.33333C25.9167 8.33333 27.7778 6.47222 27.7778 4.16667C27.7778 1.86111 25.9167 0 23.6111 0C21.3056 0 19.4444 1.86111 19.4444 4.16667Z" fill="#434343"/>
                                </svg>
                            </td>

                            <!-- Subject -->
                            <td class="py-3 px-4 font-medium text-gray-700">
                                Organisasi
                            </td>
                            <td class="py-3 px-4 text-gray-500">
                                <span class="font-semibold text-gray-700">Subject</span>
                                - Lorem ipsum dolor sit amet consectetur. Quis vitae asnkas edhi hihi du i los juojop
                            </td>

                            <!-- Date -->
                            <td class="py-3 px-4 text-gray-500 text-right">
                                23 Aug
                            </td>

                            <!-- Icons on Hover -->
                            <td class="py-3 px-4 hidden group-hover:table-cell text-right">
                                <div class="flex justify-end gap-6 mr-8">
                                    <!-- Placeholder Icon 1 -->
                                    <svg width="25" height="26" viewBox="0 0 25 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M1.77734 5.8H4.20159M4.20159 5.8H23.5955M4.20159 5.8V22.6C4.20159 23.2365 4.457 23.847 4.91163 24.2971C5.36626 24.7471 5.98288 25 6.62583 25H18.747C19.39 25 20.0066 24.7471 20.4612 24.2971C20.9159 23.847 21.1713 23.2365 21.1713 22.6V5.8M7.83795 5.8V3.4C7.83795 2.76348 8.09336 2.15303 8.54799 1.70294C9.00263 1.25286 9.61924 1 10.2622 1H15.1107C15.7536 1 16.3702 1.25286 16.8249 1.70294C17.2795 2.15303 17.5349 2.76348 17.5349 3.4V5.8M10.2622 11.8V19M15.1107 11.8V19" stroke="#434343" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                    <!-- Placeholder Icon 2 -->
                                    <svg width="28" height="25" viewBox="0 0 28 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M12.4185 0.447434C12.823 0.177495 13.2937 0.0236085 13.7795 0.0025061C14.2654 -0.0185963 14.7477 0.0938925 15.174 0.327743L15.3695 0.447434L26.0087 7.53978C26.342 7.76189 26.6209 8.05642 26.8244 8.40137C27.028 8.74633 27.151 9.13281 27.1843 9.53196L27.1937 9.75272V22.3402C27.1939 23.0112 26.9404 23.6576 26.4842 24.1496C26.0279 24.6416 25.4025 24.943 24.7333 24.9934L24.5339 25H3.2555C2.58446 25.0002 1.93815 24.7468 1.44611 24.2905C0.954071 23.8342 0.65268 23.2088 0.602353 22.5397L0.595703 22.3402V9.75272C0.59571 9.3523 0.686129 8.95703 0.860215 8.59643C1.0343 8.23582 1.28756 7.91917 1.60111 7.67011L1.78064 7.53978L12.4185 0.447434ZM24.5339 11.5255L15.0012 17.8824C14.6735 18.1008 14.2885 18.2174 13.8947 18.2174C13.5009 18.2174 13.1159 18.1008 12.7882 17.8824L3.2555 11.5241V22.3402H24.5339V11.5255ZM13.8947 2.66038L4.32341 9.04123L13.8947 15.4221L23.466 9.04123L13.8947 2.66038Z" fill="#434343"/>
                                    </svg>
                                </div>
                            </td>
                        </tr>
                    @endfor
                </table>
            </div>
        </div>
    </div>
@stack('scripts')
</body>
