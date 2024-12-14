<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inbox</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-white box-border h-screen">
    <div class="flex flex-col h-full">
        <!-- header -->
        <x-pageheader
            :tabs="[
                ['label' => 'Inbox',
                 'icon_paths' => [
                    'M14 6C15.6569 6 17 4.65685 17 3C17 1.34315 15.6569 0 14 0C12.3431 0 11 1.34315 11 3C11 4.65685 12.3431 6 14 6Z',
                    'M18.958 8.75001C18.958 7.71168 19.1811 6.7273 19.5734 5.83334H8.74967C7.14113 5.83334 5.83301 7.14147 5.83301 8.75001V26.25C5.83301 27.8586 7.14113 29.1667 8.74967 29.1667H26.2497C27.8582 29.1667 29.1663 27.8586 29.1663 26.25V15.4263C28.2469 15.8301 27.2539 16.0396 26.2497 16.0417C24.3158 16.0417 22.4611 15.2734 21.0937 13.906C19.7262 12.5385 18.958 10.6839 18.958 8.75001Z' 
                    ],
                 'icon_class' => 'select-tab'
                ]
            ]"
            dbtop="Bayu Fadjar Dwi Putra"
            dbbottom="2308561080"
         />

        <!-- Search bar and filters -->
        <div class="flex items-center justify-between px-6 py-4">
            <div class="relative">
                <input
                    type="text"
                    placeholder="Search"
                    class="border rounded-md pl-10 pr-4 py-2 w-72 focus:outline-none focus:ring-2 focus:ring-blue-400"
                />
                <!-- Search icon -->
                <svg
                    class="absolute left-3 top-2.5 w-5 h-5 text-gray-400"
                    fill="none"
                    stroke="currentColor"
                    viewBox="0 0 24 24"
                    xmlns="http://www.w3.org/2000/svg"
                >
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-4.35-4.35"></path>
                    <circle cx="10.5" cy="10.5" r="7.5"></circle>
                </svg>
            </div>

            <div class="flex gap-4">
                <select class="border rounded-md py-2 px-4">
                    <option>Dari</option>
                </select>
                <select class="border rounded-md py-2 px-4">
                    <option>Tanggal</option>
                </select>
            </div>
        </div>

        <!-- Table -->
        <div class="overflow-y-auto">
            <table class="w-full text-sm text-left">
                <tbody>
                    @for ($i = 0; $i < 10; $i++)
                        <tr class="group cursor-pointer border-b hover:bg-gray-100">
                            <!-- Icon -->
                            <td class="py-3 px-4 w-12">
                                <svg class="w-6 h-6 text-gray-500" fill="currentColor" viewBox="0 0 24 24">
                                    <path
                                        d="M3 5a2 2 0 012-2h14a2 2 0 012 2v14a2 2 0 01-2 2H5a2 2 0 01-2-2V5zm4.5 4a2.5 2.5 0 000 5h8a2.5 2.5 0 000-5h-8z"
                                    ></path>
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
                                <div class="flex justify-end gap-2">
                                    <!-- Placeholder Icon 1 -->
                                    <svg class="w-5 h-5 text-blue-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                            stroke-width="2"
                                            d="M3 10h11M9 21V3M17 16l4-4m0 0l-4-4m4 4H9"
                                        ></path>
                                    </svg>
                                    <!-- Placeholder Icon 2 -->
                                    <svg class="w-5 h-5 text-red-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                            stroke-width="2"
                                            d="M6 18L18 6M6 6l12 12"
                                        ></path>
                                    </svg>
                                </div>
                            </td>
                        </tr>
                    @endfor
                </tbody>
            </table>
        </div>
    </div>
</body>
