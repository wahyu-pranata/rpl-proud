{{-- How to use? --}}
{{-- <x-navbar>('guest', 'admin' or 'mahasiswa' or set it empty for default)</x-navbar> --}}

@props(['auth' => 'anonymous'])
<nav class="flex w-full min-h-[76px] fixed items-center justify-between bg-white px-10 shadow z-10">
    <a href="/" class="text-xl font-bold text-dark-secondary">Proud</a>
    {{-- tabs --}}

    @php
        $navs = [
            'mahasiswa' =>[
                'inbox'=>[
                    'viewbox'=>'0 0 26 26',
                    'paths'=>[
                        'M21.2502 9.125C23.6664 9.125 25.6252 7.16625 25.6252 4.75C25.6252 2.33375 23.6664 0.375 21.2502 0.375C18.8339 0.375 16.8752 2.33375 16.8752 4.75C16.8752 7.16625 18.8339 9.125 21.2502 9.125Z',
                        'M13.9585 4.75C13.9585 3.71167 14.1816 2.72729 14.5739 1.83333H3.75016C2.14162 1.83333 0.833496 3.14146 0.833496 4.75V22.25C0.833496 23.8585 2.14162 25.1667 3.75016 25.1667H21.2502C22.8587 25.1667 24.1668 23.8585 24.1668 22.25V11.4262C23.2474 11.83 22.2544 12.0396 21.2502 12.0417C19.3163 12.0417 17.4616 11.2734 16.0942 9.90599C14.7267 8.53853 13.9585 6.68387 13.9585 4.75Z'
                    ],
                    'direction'=>'',
                    'label'=>'Inbox'
                ],
            ],
            'admin'=>[
                'broadcast'=>[
                    'viewbox'=>'0 0 31 29',
                    'paths'=>[
                        'M15.5003 12.5832C13.8962 12.5832 12.5837 13.8957 12.5837 15.4998C12.5837 17.104 13.8962 18.4165 15.5003 18.4165C17.1045 18.4165 18.417 17.104 18.417 15.4998C18.417 13.8957 17.1045 12.5832 15.5003 12.5832ZM24.2503 15.4998C24.2503 10.6873 20.3128 6.74984 15.5003 6.74984C10.6878 6.74984 6.75033 10.6873 6.75033 15.4998C6.75033 18.7082 8.50033 21.479 11.1253 23.0832L12.5837 20.604C10.8337 19.5832 9.66699 17.6873 9.66699 15.6457C9.66699 12.4373 12.292 9.81234 15.5003 9.81234C18.7087 9.81234 21.3337 12.4373 21.3337 15.6457C21.3337 17.8332 20.167 19.729 18.417 20.604L19.8753 23.0832C22.5003 21.6248 24.2503 18.7082 24.2503 15.4998ZM15.5003 0.916504C7.47949 0.916504 0.916992 7.479 0.916992 15.4998C0.916992 20.8957 3.83366 25.5623 8.20866 28.0415L9.66699 25.5623C6.16699 23.5207 3.83366 19.729 3.83366 15.4998C3.83366 9.08317 9.08366 3.83317 15.5003 3.83317C21.917 3.83317 27.167 9.08317 27.167 15.4998C27.167 19.8748 24.8337 23.5207 21.3337 25.5623L22.792 28.0415C27.167 25.5623 30.0837 20.8957 30.0837 15.4998C30.0837 7.479 23.5212 0.916504 15.5003 0.916504Z'
                        ],
                    'direction'=>'',
                    'label'=>'Broadcast'
                ],
                'data_mhs'=>[
                    'viewbox'=>'0 0 35 29',
                    'paths'=>[
                        'M4.77225 2.83275C3.4545 2.83275 2.387 3.8775 2.387 5.16725V23.8328C2.387 25.1225 3.4545 26.1672 4.77225 26.1672H30.2278C31.5455 26.1672 32.613 25.1225 32.613 23.8328V5.16725C32.613 3.8775 31.5455 2.83275 30.2278 2.83275H4.77225ZM30.2278 0.5C32.8633 0.5 35 2.5895 35 5.16725V23.8328C35 26.4105 32.8633 28.5 30.2278 28.5H4.77225C2.13675 28.5 0 26.4105 0 23.8328V5.16725C0 2.5895 2.13675 0.5 4.77225 0.5H30.2278ZM14.2922 19.9827H7C6.84496 19.9809 6.69107 20.0096 6.54715 20.0673C6.40322 20.125 6.27208 20.2105 6.16123 20.3189C6.05038 20.4273 5.96199 20.5565 5.90112 20.6991C5.84025 20.8417 5.8081 20.995 5.8065 21.15C5.8065 21.794 6.34025 22.3172 7 22.3172H14.2922C14.4471 22.3189 14.6008 22.29 14.7446 22.2322C14.8883 22.1744 15.0192 22.0889 15.1299 21.9805C15.2406 21.8721 15.3288 21.7429 15.3895 21.6005C15.4503 21.458 15.4824 21.3049 15.484 21.15C15.4824 20.9951 15.4503 20.842 15.3895 20.6995C15.3288 20.5571 15.2406 20.4279 15.1299 20.3195C15.0192 20.2111 14.8883 20.1256 14.7446 20.0678C14.6008 20.01 14.4471 19.9811 14.2922 19.9827ZM24.0625 6.33275C21.3955 6.33275 19.2237 8.417 19.2237 11C19.2237 12.3527 19.8188 13.569 20.7708 14.4212C18.9683 15.4852 17.766 17.4015 17.766 19.5908C17.766 20.2155 17.864 20.8298 18.0548 21.416C18.256 22.0285 18.928 22.368 19.5545 22.172C19.7024 22.1277 19.8399 22.0544 19.9591 21.9564C20.0783 21.8583 20.1768 21.7375 20.2488 21.601C20.3208 21.4645 20.3649 21.315 20.3785 21.1612C20.3921 21.0075 20.3749 20.8525 20.328 20.7055C20.2098 20.3458 20.1507 19.9694 20.153 19.5908C20.153 17.5345 21.8978 15.858 24.0625 15.858C26.2272 15.858 27.9737 17.5345 27.9737 19.5908C27.9737 19.8941 27.937 20.1892 27.8635 20.4762C27.8266 20.6262 27.8199 20.7821 27.8438 20.9347C27.8676 21.0873 27.9216 21.2336 28.0025 21.3652C28.0835 21.4968 28.1897 21.611 28.3152 21.7011C28.4406 21.7912 28.5827 21.8555 28.7333 21.8902C29.0376 21.9666 29.3598 21.9202 29.6302 21.7611C29.9007 21.602 30.0977 21.3429 30.1788 21.0398C30.2989 20.5661 30.359 20.0831 30.359 19.5908C30.359 17.4015 29.1567 15.4853 27.3542 14.4178C28.3062 13.569 28.9012 12.3527 28.9012 11C28.9012 8.417 26.7313 6.33275 24.0625 6.33275ZM14.2922 13.8578H7C6.84496 13.8559 6.69107 13.8846 6.54715 13.9423C6.40322 14 6.27208 14.0855 6.16123 14.1939C6.05038 14.3023 5.96199 14.4315 5.90112 14.5741C5.84025 14.7167 5.8081 14.87 5.8065 15.025C5.8065 15.669 6.34025 16.1923 7 16.1923H14.2922C14.4471 16.1939 14.6008 16.165 14.7446 16.1072C14.8883 16.0494 15.0192 15.9639 15.1299 15.8555C15.2406 15.7471 15.3288 15.6179 15.3895 15.4755C15.4503 15.333 15.4824 15.1799 15.484 15.025C15.4824 14.8701 15.4503 14.717 15.3895 14.5745C15.3288 14.4321 15.2406 14.3029 15.1299 14.1945C15.0192 14.0861 14.8883 14.0006 14.7446 13.9428C14.6008 13.885 14.4471 13.8561 14.2922 13.8578ZM24.0625 8.66725C25.4223 8.66725 26.516 9.71725 26.516 11C26.516 12.2845 25.4223 13.3328 24.0625 13.3328C22.7027 13.3328 21.609 12.2828 21.609 11C21.609 9.7155 22.7027 8.66725 24.0625 8.66725ZM14.2922 7.73275H7C6.84496 7.7309 6.69107 7.75964 6.54715 7.81732C6.40322 7.87501 6.27208 7.9605 6.16123 8.06891C6.05038 8.17733 5.96199 8.30653 5.90112 8.44914C5.84025 8.59175 5.8081 8.74496 5.8065 8.9C5.8065 9.544 6.34025 10.0673 7 10.0673H14.2922C14.4471 10.0689 14.6008 10.04 14.7446 9.98217C14.8883 9.92439 15.0192 9.83885 15.1299 9.73046C15.2406 9.62207 15.3288 9.49294 15.3895 9.35045C15.4503 9.20796 15.4824 9.0549 15.484 8.9C15.4824 8.7451 15.4503 8.59204 15.3895 8.44955C15.3288 8.30705 15.2406 8.17793 15.1299 8.06954C15.0192 7.96115 14.8883 7.87562 14.7446 7.81783C14.6008 7.76004 14.4471 7.73113 14.2922 7.73275Z'
                        ],
                    'direction'=>'',
                    'label'=>'Mahasiswa'
                ],
            ]
        ];
    @endphp
    <div class="flex items-center space-x-12">
        <div class="flex items-center space-x-6">
            @auth
                @if (auth()->user()->type == 'organization')
                <a href="" class="flex py-7 px-2 group">
                    <svg class="w-6 mr-3 fill-dark-secondary group-hover:fill-light-blue" viewBox="0 0 31 29" xmlns="http://www.w3.org/2000/svg">
                        <path d="M15.4998 12.5832C13.8957 12.5832 12.5832 13.8957 12.5832 15.4998C12.5832 17.104 13.8957 18.4165 15.4998 18.4165C17.104 18.4165 18.4165 17.104 18.4165 15.4998C18.4165 13.8957 17.104 12.5832 15.4998 12.5832ZM24.2498 15.4998C24.2498 10.6873 20.3123 6.74984 15.4998 6.74984C10.6873 6.74984 6.74984 10.6873 6.74984 15.4998C6.74984 18.7082 8.49984 21.479 11.1248 23.0832L12.5832 20.604C10.8332 19.5832 9.6665 17.6873 9.6665 15.6457C9.6665 12.4373 12.2915 9.81234 15.4998 9.81234C18.7082 9.81234 21.3332 12.4373 21.3332 15.6457C21.3332 17.8332 20.1665 19.729 18.4165 20.604L19.8748 23.0832C22.4998 21.6248 24.2498 18.7082 24.2498 15.4998ZM15.4998 0.916504C7.479 0.916504 0.916504 7.479 0.916504 15.4998C0.916504 20.8957 3.83317 25.5623 8.20817 28.0415L9.6665 25.5623C6.1665 23.5207 3.83317 19.729 3.83317 15.4998C3.83317 9.08317 9.08317 3.83317 15.4998 3.83317C21.9165 3.83317 27.1665 9.08317 27.1665 15.4998C27.1665 19.8748 24.8332 23.5207 21.3332 25.5623L22.7915 28.0415C27.1665 25.5623 30.0832 20.8957 30.0832 15.4998C30.0832 7.479 23.5207 0.916504 15.4998 0.916504Z"/>
                    </svg>
                    <span class="text-lg font-medium text-dark-secondary group-hover:text-light-blue" for="">Broadcast</span>
                </a>
                <a href="" class="flex py-7 px-2 group">
                    <svg class="w-6 mr-3 fill-dark-secondary group-hover:fill-light-blue" viewBox="0 0 35 29" xmlns="http://www.w3.org/2000/svg">
                        <path d="M4.77225 2.83275C3.4545 2.83275 2.387 3.8775 2.387 5.16725V23.8328C2.387 25.1225 3.4545 26.1672 4.77225 26.1672H30.2278C31.5455 26.1672 32.613 25.1225 32.613 23.8328V5.16725C32.613 3.8775 31.5455 2.83275 30.2278 2.83275H4.77225ZM30.2278 0.5C32.8633 0.5 35 2.5895 35 5.16725V23.8328C35 26.4105 32.8633 28.5 30.2278 28.5H4.77225C2.13675 28.5 0 26.4105 0 23.8328V5.16725C0 2.5895 2.13675 0.5 4.77225 0.5H30.2278ZM14.2922 19.9827H7C6.84496 19.9809 6.69107 20.0096 6.54715 20.0673C6.40322 20.125 6.27208 20.2105 6.16123 20.3189C6.05038 20.4273 5.96199 20.5565 5.90112 20.6991C5.84025 20.8417 5.8081 20.995 5.8065 21.15C5.8065 21.794 6.34025 22.3172 7 22.3172H14.2922C14.4471 22.3189 14.6008 22.29 14.7446 22.2322C14.8883 22.1744 15.0192 22.0889 15.1299 21.9805C15.2406 21.8721 15.3288 21.7429 15.3895 21.6005C15.4503 21.458 15.4824 21.3049 15.484 21.15C15.4824 20.9951 15.4503 20.842 15.3895 20.6995C15.3288 20.5571 15.2406 20.4279 15.1299 20.3195C15.0192 20.2111 14.8883 20.1256 14.7446 20.0678C14.6008 20.01 14.4471 19.9811 14.2922 19.9827ZM24.0625 6.33275C21.3955 6.33275 19.2237 8.417 19.2237 11C19.2237 12.3527 19.8188 13.569 20.7708 14.4212C18.9683 15.4852 17.766 17.4015 17.766 19.5908C17.766 20.2155 17.864 20.8298 18.0548 21.416C18.256 22.0285 18.928 22.368 19.5545 22.172C19.7024 22.1277 19.8399 22.0544 19.9591 21.9564C20.0783 21.8583 20.1768 21.7375 20.2488 21.601C20.3208 21.4645 20.3649 21.315 20.3785 21.1612C20.3921 21.0075 20.3749 20.8525 20.328 20.7055C20.2098 20.3458 20.1507 19.9694 20.153 19.5908C20.153 17.5345 21.8978 15.858 24.0625 15.858C26.2272 15.858 27.9737 17.5345 27.9737 19.5908C27.9737 19.8941 27.937 20.1892 27.8635 20.4762C27.8266 20.6262 27.8199 20.7821 27.8438 20.9347C27.8676 21.0873 27.9216 21.2336 28.0025 21.3652C28.0835 21.4968 28.1897 21.611 28.3152 21.7011C28.4406 21.7912 28.5827 21.8555 28.7333 21.8902C29.0376 21.9666 29.3598 21.9202 29.6302 21.7611C29.9007 21.602 30.0977 21.3429 30.1788 21.0398C30.2989 20.5661 30.359 20.0831 30.359 19.5908C30.359 17.4015 29.1567 15.4853 27.3542 14.4178C28.3062 13.569 28.9012 12.3527 28.9012 11C28.9012 8.417 26.7313 6.33275 24.0625 6.33275ZM14.2922 13.8578H7C6.84496 13.8559 6.69107 13.8846 6.54715 13.9423C6.40322 14 6.27208 14.0855 6.16123 14.1939C6.05038 14.3023 5.96199 14.4315 5.90112 14.5741C5.84025 14.7167 5.8081 14.87 5.8065 15.025C5.8065 15.669 6.34025 16.1923 7 16.1923H14.2922C14.4471 16.1939 14.6008 16.165 14.7446 16.1072C14.8883 16.0494 15.0192 15.9639 15.1299 15.8555C15.2406 15.7471 15.3288 15.6179 15.3895 15.4755C15.4503 15.333 15.4824 15.1799 15.484 15.025C15.4824 14.8701 15.4503 14.717 15.3895 14.5745C15.3288 14.4321 15.2406 14.3029 15.1299 14.1945C15.0192 14.0861 14.8883 14.0006 14.7446 13.9428C14.6008 13.885 14.4471 13.8561 14.2922 13.8578ZM24.0625 8.66725C25.4223 8.66725 26.516 9.71725 26.516 11C26.516 12.2845 25.4223 13.3328 24.0625 13.3328C22.7027 13.3328 21.609 12.2828 21.609 11C21.609 9.7155 22.7027 8.66725 24.0625 8.66725ZM14.2922 7.73275H7C6.84496 7.7309 6.69107 7.75964 6.54715 7.81732C6.40322 7.87501 6.27208 7.9605 6.16123 8.06891C6.05038 8.17733 5.96199 8.30653 5.90112 8.44914C5.84025 8.59175 5.8081 8.74496 5.8065 8.9C5.8065 9.544 6.34025 10.0673 7 10.0673H14.2922C14.4471 10.0689 14.6008 10.04 14.7446 9.98217C14.8883 9.92439 15.0192 9.83885 15.1299 9.73046C15.2406 9.62207 15.3288 9.49294 15.3895 9.35045C15.4503 9.20796 15.4824 9.0549 15.484 8.9C15.4824 8.7451 15.4503 8.59204 15.3895 8.44955C15.3288 8.30705 15.2406 8.17793 15.1299 8.06954C15.0192 7.96115 14.8883 7.87562 14.7446 7.81783C14.6008 7.76004 14.4471 7.73113 14.2922 7.73275Z"/>
                    </svg>
                    <span class="text-lg font-medium text-dark-secondary group-hover:text-light-blue" for="">Mahasiswa</span>
                </a>
                @endif
                @if (auth()->user()->type == 'student')
                <a href="" class="flex py-7 px-2 group">
                    <svg class="w-6 mr-3 fill-dark-secondary group-hover:fill-light-blue" viewBox="0 0 26 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M21.2497 9.125C23.6659 9.125 25.6247 7.16625 25.6247 4.75C25.6247 2.33375 23.6659 0.375 21.2497 0.375C18.8334 0.375 16.8747 2.33375 16.8747 4.75C16.8747 7.16625 18.8334 9.125 21.2497 9.125Z"/>
                        <path d="M13.958 4.75C13.958 3.71167 14.1811 2.72729 14.5734 1.83333H3.74967C2.14113 1.83333 0.833008 3.14146 0.833008 4.75V22.25C0.833008 23.8585 2.14113 25.1667 3.74967 25.1667H21.2497C22.8582 25.1667 24.1663 23.8585 24.1663 22.25V11.4262C23.2469 11.83 22.2539 12.0396 21.2497 12.0417C19.3158 12.0417 17.4611 11.2734 16.0937 9.90599C14.7262 8.53853 13.958 6.68387 13.958 4.75Z"/>
                    </svg>
                    <span class="text-lg font-medium text-dark-secondary group-hover:text-light-blue" for="">Inbox</span>
                </a>
                @endif
            </div>
            <a href="dashboard" class="flex py-4 items-center space-x-2 unselect-tab group">
                <div class="text-end group-hover:text-light-blue">
                    <div class="font-bold">{{ Auth::user()->name }}</div>
                    @if (Auth::user()->type == "student")
                    <div class="text-sm text-dark-primary group-hover:text-light-blue">{{ Auth::user()->studentDetails->nim }}</div>
                    @else
                    <div class="text-sm text-dark-primary group-hover:text-light-blue">{{ Auth::user()->email }}</div>
                    @endif
                </div>
                <div class="w-[52px] h-[52px] bg-gray-300 rounded-full group-hover:border-light-blue border-solid border-2 border-transparent"></div> <!-- Placeholder -->
            </a>
            @endauth
        @guest
            @if (Route::current()->getName() != 'login')
            <a href="/login">
                <x-primary-button type='button'>Login</x-primary-button>
            </a>

            @endif
        @endguest
    </div>
</nav>

