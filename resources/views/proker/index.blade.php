<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/js/app.js')
    @vite('resources/css/app.css')
    @vite('resources/js/dropdown.js')
    <title>Document</title>
</head>
<body id="app" class="font-hind">
    <div class="font-hind">
        <x-navbar></x-navbar>
        <div class="relative w-screen h-[36em] overflow-hidden">
            <div class="absolute inset-0 bg-black bg-opacity-30"></div>
            <header class="absolute top-[30%] w-fit h-fit left-[22%] text-[3em] font-semibold text-light-primary tracking-[0.3em]">PROGRAM KERJA UDAYANA</header>
            <img class="mt-[-13em] min-w-full min-h-[50em]" src="{{ asset('images/cover.webp') }}" alt="">
        </div>
        <div class="absolute top-[20em] w-full">
            <div class="relative h-fit flex items-end justify-center space-x-10">
                <div class="h-[36em] w-[24em] bg-light-primary left-[6em] "></div>
                <div class="flex border-b-4 border-solid border-gray-300 w-3/5 pb-8 justify-between">
                    <div class="h-fit w-[40em] flex flex-col space-y-[2em]">
                        <div class="flex flex-col space-y-4">
                            <span class="text-[3em] font-semibold">
                                Nama Kepanitiaan
                            </span>
                            <div class="flex flex-col text-gray-400 text-xl space-y-2">
                                <span>
                                    Waktu Pelaksanaan
                                </span>
                                <span>
                                    Organisasi
                                </span>
                            </div>
                        </div>
                        <div class="space-x-4 text-lg font-semibold">
                            <button class="w-[11em] h-fit py-3 border-solid border-2 bg-dark-blue rounded-xl text-white hover:text-dark-blue hover:bg-transparent hover:border-dark-blue active:border-transparent">Daftar Panitia</button>
                            <button class="w-[11em] h-fit py-3  border-solid border-2 bg-light-blue rounded-xl text-white hover:text-light-blue hover:bg-transparent hover:border-light-blue active:border-transparent">Rekrutmen</button>
                            <button class="w-[11em] h-fit py-3 border-solid border-2 border-dark-blue rounded-xl text-dark-blue hover:bg-dark-blue hover:text-white active:text-dark-blue active:bg-transparent active:border-transparent">Jobdesk</button>
                        </div>
                    </div>
                    <div class="space-x-4 flex justify-center h-10">
                        <button class="bg-gray-300 rounded-md px-1 py-2">
                            <svg width="33" height="25" viewBox="0 0 33 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M25.2507 11.0416H22.334C21.9208 11.0416 21.5747 10.9016 21.2957 10.6216C21.0166 10.3416 20.8766 9.99549 20.8757 9.58327C20.8747 9.17105 21.0147 8.82493 21.2957 8.54493C21.5766 8.26493 21.9227 8.12493 22.334 8.12493H25.2507V5.20827C25.2507 4.79507 25.3907 4.44896 25.6707 4.16993C25.9507 3.89091 26.2968 3.75091 26.709 3.74993C27.1212 3.74896 27.4678 3.88896 27.7488 4.16993C28.0297 4.45091 28.1693 4.79702 28.1673 5.20827V8.12493H31.084C31.4972 8.12493 31.8438 8.26493 32.1238 8.54493C32.4038 8.82493 32.5433 9.17105 32.5423 9.58327C32.5413 9.99549 32.4013 10.3421 32.1223 10.6231C31.8433 10.904 31.4972 11.0435 31.084 11.0416H28.1673V13.9583C28.1673 14.3715 28.0273 14.7181 27.7473 14.9981C27.4673 15.2781 27.1212 15.4176 26.709 15.4166C26.2968 15.4156 25.9507 15.2756 25.6707 14.9966C25.3907 14.7176 25.2507 14.3715 25.2507 13.9583V11.0416ZM12.1257 12.4999C10.5215 12.4999 9.14822 11.9288 8.00586 10.7864C6.8635 9.64403 6.29232 8.27077 6.29232 6.6666C6.29232 5.06243 6.8635 3.68917 8.00586 2.54681C9.14822 1.40445 10.5215 0.833267 12.1257 0.833267C13.7298 0.833267 15.1031 1.40445 16.2454 2.54681C17.3878 3.68917 17.959 5.06243 17.959 6.6666C17.959 8.27077 17.3878 9.64403 16.2454 10.7864C15.1031 11.9288 13.7298 12.4999 12.1257 12.4999ZM0.458984 21.2499V20.0833C0.458984 19.2569 0.671901 18.4976 1.09773 17.8054C1.52357 17.1131 2.08843 16.5842 2.79232 16.2187C4.29926 15.4652 5.83051 14.9004 7.38607 14.5241C8.94162 14.1479 10.5215 13.9592 12.1257 13.9583C13.7298 13.9573 15.3097 14.1459 16.8652 14.5241C18.4208 14.9023 19.952 15.4672 21.459 16.2187C22.1638 16.5833 22.7292 17.1122 23.155 17.8054C23.5809 18.4985 23.7933 19.2579 23.7923 20.0833V21.2499C23.7923 22.052 23.507 22.7389 22.9363 23.3106C22.3656 23.8822 21.6787 24.1676 20.8757 24.1666H3.37565C2.57357 24.1666 1.88718 23.8813 1.31648 23.3106C0.74579 22.7399 0.459957 22.053 0.458984 21.2499Z" fill="#5C5C5C"/>
                            </svg>
                        </button>
                        <button class ="bg-gray-300 rounded-md px-1 py-[6px]">
                            <svg width="31" height="29" viewBox="0 0 31 29" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M15.4993 12.5833C13.8952 12.5833 12.5827 13.8958 12.5827 15.4999C12.5827 17.1041 13.8952 18.4166 15.4993 18.4166C17.1035 18.4166 18.416 17.1041 18.416 15.4999C18.416 13.8958 17.1035 12.5833 15.4993 12.5833ZM24.2493 15.4999C24.2493 10.6874 20.3118 6.74994 15.4993 6.74994C10.6868 6.74994 6.74935 10.6874 6.74935 15.4999C6.74935 18.7083 8.49935 21.4791 11.1243 23.0833L12.5827 20.6041C10.8327 19.5833 9.66602 17.6874 9.66602 15.6458C9.66602 12.4374 12.291 9.81244 15.4993 9.81244C18.7077 9.81244 21.3327 12.4374 21.3327 15.6458C21.3327 17.8333 20.166 19.7291 18.416 20.6041L19.8743 23.0833C22.4993 21.6249 24.2493 18.7083 24.2493 15.4999ZM15.4993 0.916611C7.47852 0.916611 0.916016 7.47911 0.916016 15.4999C0.916016 20.8958 3.83268 25.5624 8.20768 28.0416L9.66602 25.5624C6.16602 23.5208 3.83268 19.7291 3.83268 15.4999C3.83268 9.08328 9.08268 3.83328 15.4993 3.83328C21.916 3.83328 27.166 9.08328 27.166 15.4999C27.166 19.8749 24.8327 23.5208 21.3327 25.5624L22.791 28.0416C27.166 25.5624 30.0827 20.8958 30.0827 15.4999C30.0827 7.47911 23.5202 0.916611 15.4993 0.916611Z" fill="#5C5C5C"/>
                            </svg>
                        </button>
                        <button class="bg-gray-300 rounded-md px-1 py-1">
                            <a href="">
                                <svg width="31" height="31" viewBox="0 0 31 31" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M18.7193 5.04369C19.3805 5.24786 20.0124 5.51036 20.6152 5.83119L23.2883 4.22703C23.567 4.05985 23.8936 3.99057 24.2162 4.0302C24.5388 4.06984 24.839 4.2161 25.0689 4.44578L26.5535 5.93036C26.7832 6.16034 26.9295 6.46046 26.9691 6.78306C27.0087 7.10566 26.9394 7.43225 26.7723 7.71099L25.1681 10.3841C25.4889 10.9869 25.7514 11.6188 25.9556 12.2799L28.9787 13.0368C29.2941 13.1158 29.574 13.2979 29.774 13.5542C29.974 13.8105 30.0827 14.1263 30.0827 14.4514V16.5485C30.0827 16.8736 29.974 17.1894 29.774 17.4457C29.574 17.702 29.2941 17.8841 28.9787 17.9631L25.9556 18.7199C25.7514 19.3811 25.4889 20.013 25.1681 20.6158L26.7723 23.2889C26.9394 23.5676 27.0087 23.8942 26.9691 24.2168C26.9295 24.5394 26.7832 24.8395 26.5535 25.0695L25.0689 26.5541C24.839 26.7838 24.5388 26.93 24.2162 26.9697C23.8936 27.0093 23.567 26.94 23.2883 26.7729L20.6152 25.1687C20.0124 25.4895 19.3805 25.752 18.7193 25.9562L17.9625 28.9793C17.8835 29.2947 17.7014 29.5746 17.4451 29.7746C17.1888 29.9746 16.873 30.0833 16.5479 30.0833H14.4508C14.1257 30.0833 13.8099 29.9746 13.5536 29.7746C13.2973 29.5746 13.1152 29.2947 13.0362 28.9793L12.2793 25.9562C11.6241 25.7537 10.9894 25.49 10.3835 25.1687L7.71039 26.7729C7.43166 26.94 7.10506 27.0093 6.78246 26.9697C6.45986 26.93 6.15975 26.7838 5.92977 26.5541L4.44518 25.0695C4.21551 24.8395 4.06924 24.5394 4.02961 24.2168C3.98998 23.8942 4.05925 23.5676 4.22643 23.2889L5.8306 20.6158C5.50924 20.0099 5.24558 19.3752 5.0431 18.7199L2.01997 17.9631C1.70486 17.8841 1.42512 17.7022 1.22513 17.4462C1.02514 17.1902 0.916349 16.8748 0.916016 16.5499V14.4529C0.916024 14.1278 1.02466 13.812 1.22468 13.5557C1.42469 13.2994 1.70461 13.1173 2.01997 13.0383L5.0431 12.2814C5.24727 11.6203 5.50977 10.9883 5.8306 10.3856L4.22643 7.71244C4.05925 7.43371 3.98998 7.10712 4.02961 6.78451C4.06924 6.46191 4.21551 6.1618 4.44518 5.93182L5.92977 4.44578C6.15975 4.2161 6.45986 4.06984 6.78246 4.0302C7.10506 3.99057 7.43166 4.05985 7.71039 4.22703L10.3835 5.83119C10.9863 5.51036 11.6182 5.24786 12.2793 5.04369L13.0362 2.02057C13.1152 1.70545 13.2971 1.42571 13.5531 1.22572C13.8091 1.02573 14.1245 0.916944 14.4493 0.916611H16.5464C16.8715 0.916619 17.1873 1.02526 17.4436 1.22527C17.6999 1.42529 17.882 1.70521 17.961 2.02057L18.7193 5.04369ZM15.4993 21.3333C17.0464 21.3333 18.5302 20.7187 19.6241 19.6247C20.7181 18.5308 21.3327 17.047 21.3327 15.4999C21.3327 13.9528 20.7181 12.4691 19.6241 11.3752C18.5302 10.2812 17.0464 9.66661 15.4993 9.66661C13.9523 9.66661 12.4685 10.2812 11.3746 11.3752C10.2806 12.4691 9.66602 13.9528 9.66602 15.4999C9.66602 17.047 10.2806 18.5308 11.3746 19.6247C12.4685 20.7187 13.9523 21.3333 15.4993 21.3333Z" fill="#5C5C5C"/>
                                </svg>
                            </a>
                        </button>
                        <button>
                            <svg width="28" height="29" viewBox="0 0 28 29" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M21.2973 8.65594C21.6538 8.35902 22.1136 8.21583 22.5756 8.25783C23.0377 8.29984 23.4641 8.5236 23.7613 8.87994L27.4065 13.2549C27.6905 13.6128 27.8232 14.0676 27.7764 14.522C27.7296 14.9765 27.5069 15.3946 27.156 15.6871C26.805 15.9795 26.3536 16.1232 25.8981 16.0873C25.4427 16.0514 25.0193 15.8388 24.7185 15.4949L21.0733 11.1199C20.7764 10.7634 20.6332 10.3036 20.6752 9.84156C20.7172 9.37951 20.9409 8.95305 21.2973 8.65594Z" fill="#F24822"/>
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M21.2963 20.0939C20.9398 19.7971 20.7157 19.3707 20.6733 18.9087C20.631 18.4466 20.7739 17.9867 21.0706 17.6299L24.7176 13.2549C24.8626 13.0721 25.0428 12.9202 25.2474 12.8081C25.452 12.6959 25.677 12.6258 25.9091 12.6019C26.1413 12.578 26.3758 12.6007 26.599 12.6688C26.8222 12.7369 27.0295 12.8489 27.2088 12.9983C27.3881 13.1477 27.5356 13.3314 27.6428 13.5387C27.7501 13.7459 27.8147 13.9725 27.8331 14.2052C27.8514 14.4378 27.823 14.6717 27.7496 14.8932C27.6762 15.1147 27.5592 15.3193 27.4056 15.4949L23.7603 19.8699C23.4632 20.2263 23.0368 20.45 22.5747 20.492C22.1127 20.5341 21.6528 20.3909 21.2963 20.0939Z" fill="#F24822"/>
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M25.625 14.3749C25.625 14.8391 25.4406 15.2842 25.1124 15.6124C24.7842 15.9406 24.3391 16.1249 23.875 16.1249H12.5C12.0359 16.1249 11.5908 15.9406 11.2626 15.6124C10.9344 15.2842 10.75 14.8391 10.75 14.3749C10.75 13.9108 10.9344 13.4657 11.2626 13.1375C11.5908 12.8093 12.0359 12.6249 12.5 12.6249H23.875C24.3391 12.6249 24.7842 12.8093 25.1124 13.1375C25.4406 13.4657 25.625 13.9108 25.625 14.3749ZM0.25 2.12494C0.25 1.66081 0.434374 1.21569 0.762563 0.887502C1.09075 0.559313 1.53587 0.374939 2 0.374939H17.75C18.2141 0.374939 18.6592 0.559313 18.9874 0.887502C19.3156 1.21569 19.5 1.66081 19.5 2.12494C19.5 2.58907 19.3156 3.03419 18.9874 3.36238C18.6592 3.69056 18.2141 3.87494 17.75 3.87494H2C1.53587 3.87494 1.09075 3.69056 0.762563 3.36238C0.434374 3.03419 0.25 2.58907 0.25 2.12494ZM0.25 26.6249C0.25 26.1608 0.434374 25.7157 0.762563 25.3875C1.09075 25.0593 1.53587 24.8749 2 24.8749H17.75C18.2141 24.8749 18.6592 25.0593 18.9874 25.3875C19.3156 25.7157 19.5 26.1608 19.5 26.6249C19.5 27.0891 19.3156 27.5342 18.9874 27.8624C18.6592 28.1906 18.2141 28.3749 17.75 28.3749H2C1.53587 28.3749 1.09075 28.1906 0.762563 27.8624C0.434374 27.5342 0.25 27.0891 0.25 26.6249Z" fill="#F24822"/>
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M17.75 0.374939C18.2141 0.374939 18.6592 0.559313 18.9874 0.887502C19.3156 1.21569 19.5 1.66081 19.5 2.12494V9.12494C19.5 9.58907 19.3156 10.0342 18.9874 10.3624C18.6592 10.6906 18.2141 10.8749 17.75 10.8749C17.2859 10.8749 16.8408 10.6906 16.5126 10.3624C16.1844 10.0342 16 9.58907 16 9.12494V2.12494C16 1.66081 16.1844 1.21569 16.5126 0.887502C16.8408 0.559313 17.2859 0.374939 17.75 0.374939ZM17.75 17.8749C18.2141 17.8749 18.6592 18.0593 18.9874 18.3875C19.3156 18.7157 19.5 19.1608 19.5 19.6249V26.6249C19.5 27.0891 19.3156 27.5342 18.9874 27.8624C18.6592 28.1906 18.2141 28.3749 17.75 28.3749C17.2859 28.3749 16.8408 28.1906 16.5126 27.8624C16.1844 27.5342 16 27.0891 16 26.6249V19.6249C16 19.1608 16.1844 18.7157 16.5126 18.3875C16.8408 18.0593 17.2859 17.8749 17.75 17.8749ZM2 0.374939C2.46413 0.374939 2.90925 0.559313 3.23744 0.887502C3.56563 1.21569 3.75 1.66081 3.75 2.12494V26.6249C3.75 27.0891 3.56563 27.5342 3.23744 27.8624C2.90925 28.1906 2.46413 28.3749 2 28.3749C1.53587 28.3749 1.09075 28.1906 0.762563 27.8624C0.434374 27.5342 0.25 27.0891 0.25 26.6249V2.12494C0.25 1.66081 0.434374 1.21569 0.762563 0.887502C1.09075 0.559313 1.53587 0.374939 2 0.374939Z" fill="#F24822"/>
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <div class="h-screen">
        </div>
        <div class="bg-[#1e1e1e] pt-10 pb-40 px-44 w-full flex justify-between tracking-widest">
            <div class="flex items-center space-x-12">
                <img class="w-[12em]" src="{{ asset('images/udayana.webp') }}" alt="">
                <div class="text-light-primary space-y-10">
                    <span class="text-4xl font-semibold">Universitas Udayana</span>
                    <p class="w-[25em]">Jl. Kampus Udayana Bukit Jimbaran, Jimbaran, Kuta Selatan, Kabupaten Badung, Bali 80361</p>
                </div>
            </div>
            <div class="mt-24 text-light-primary space-y-10">
                <div class="flex flex-col">
                    <span class="text-4xl font-semibold pb-4">Contact</span>
                    <span>(0361) 701806</span>
                    <span>usdi@unud.ac.id</span>
                </div>
                <div class="flex flex-col space-y-4">
                    <span class="text-4xl font-semibold">Social Media</span>
                    <div class="flex space-x-2">
                        <a href="">
                            <svg width="35" height="35" viewBox="0 0 35 35" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                <rect width="35" height="35" fill="url(#pattern0_142_98)"/>
                                <defs>
                                    <pattern id="pattern0_142_98" patternContentUnits="objectBoundingBox" width="1" height="1">
                                        <use xlink:href="#image0_142_98" transform="scale(0.0111111)"/>
                                    </pattern>
                                    <image id="image0_142_98" width="90" height="90" xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAFoAAABaCAYAAAA4qEECAAAACXBIWXMAAAsTAAALEwEAmpwYAAAEyElEQVR4nO2cy29VVRSHLwOKjqsDCpiAMaKiWIsSHo1xaKLEKY8pCcrDmTiCONKgYUSBBhgCaqLgA5Uo8Q8wGA0+agLqEAExpcRabtvPrHQRSune99G1zzl37/0lN2lu2rXW+eV0nbXX3mfVaplMJpPJZDKZTCaTIsAC4AXgLeAU8AtwHbhFeYxpDD9rTBLb8xJrrdMAngEGgX/oHK4Dh4Cna1UHWAl8QWczCXwOPFWrGsB9wH6gTjzUgffk2mpVAHgE+IF4+R54uGyRVwFXiJ+/gTVlifwscIN0uAH0lZEurpIefwHLinzwSd5KlR+B+4sQWqqL1NkXWuQnIyvh2kU0WBlS6C/bDi0+Pg0lcq+ummJiDHgD6NHPbv2uGSaDLNe1dxEbu2e5ThG7WQ6G6MJ1UoOoWXpmuVa5s1tZyHRZCi2tThIRelGLNvothZaeLYmkjjdbtLHXUujTxMmY5uR2Hoa3+dhSaNkZKYOLwACwUauebmC+frr1u03yUAIulRTjT5ZCXysw8HHgBLC2xRjnAeuAk2qjKK5aCt3qv1O7nAUeNYj3MeCbgmL+z0blqcBD8y+w1SzgO3FvA0ZDB28ZcEiuyAaCWbD3xv5c6JauZbAhRV5uFqg/lQQT2zLQUOliVRO+HwJ2Al8BQ8BN/QzpdzuAJU3YWR0qjVRd6K0NfC4GjjVZQcjvHJVVXQObr6Ym9NkG/l4BRtrc19vQwPa5VIQe95VwwOvAxBzsy9/u8th/3LrOrqrQxxvcyXMR+TYTvjsb+IAEhF7rycntpAtfGulx+Fofu9AXZans8CEPPmuOeJbrf8Qs9ICnhAvRnxCbix0+D8cs9EaHfamTQ7Hd4XNzzEL3lrC7fsbhsy9mobsd9n8jHEMOnw/GLHSXw75ltTGTEc+GswlZ6CmGUxS622E/pw5joXsdQueHobHQmxxCS6szFK85fG6xcjCHZHFPUFYcdNhfEmjBUvcsWAZjFvqSZwku/WRrBj1L8D9jFlpY5/CxyPidmGFgocNXv6Gfygp90uPnRaMUIm3Slz1+PiQBocdls9Tja5dB43+nx/4Ko5535YUWvm7gb0ObaUTSxUseu5Kbv8WYKgstbGvgUw4dHmkyldS1iljYwGaQMrLqQo/K4ZYmfMvOy3Z9mf9X7YuM6M9npE52lXAz7KyR41spCo0eanHma8P4nwh5UNMyUAKLvdos2Nnv5KCnYS2DDc2oHG4xC/jOg29HqHQxnU48tntOzl0YxLsiRHVRxLHdIg+iTwDv65GAeS3ewf26GDGtk4s8iF7WqxW/6271Zt3jk9cpuvTzgH63RUs7s+MDZb5aEevLQhZ8ZCl0rK+/WbDHUuhYX+i0YL2l0At0LlzmbqRImG8mtPURqog4YCpyxGMk5sJksCGE2sTJTHE6iMjTmjNlDnCtCvXgIzWBd8u+ygrwTlCRp1Ug50mX7wobgSyzOnXYXmpcBpYWIvKMuaQpjcwclrnYhYo8Tey+RO7sy6WJPCONnI88Jy+tVQF9QO6LrPS7BbxtOgXMeKTmZx2+gpwEPrHY6Slq1v+AzoXrpAbRQNCZo6HQIVP9MrJMGuTABb2govYgZ2NMY7igMe3VGG27cJlMJpPJZDKZTCZT6xD+Bw8TuAekC6jrAAAAAElFTkSuQmCC"/>
                                </defs>
                            </svg>
                        </a>
                        <a href="">
                            <svg width="35" height="35" viewBox="0 0 35 35" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                <rect width="35" height="35" fill="url(#pattern0_142_99)"/>
                                <defs>
                                    <pattern id="pattern0_142_99" patternContentUnits="objectBoundingBox" width="1" height="1">
                                        <use xlink:href="#image0_142_99" transform="scale(0.0111111)"/>
                                    </pattern>
                                    <image id="image0_142_99" width="90" height="90" xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAFoAAABaCAYAAAA4qEECAAAACXBIWXMAAAsTAAALEwEAmpwYAAACSUlEQVR4nO3csWoVQRSH8VOZEBDRNlY2CoEgdr5BuhR5BUujlfgI1tZaBcRXsEtIEU1lrER7W0US0MpPRhZuhAmZvTNzZnT+vz7sme/O3ewGMmYiIiIiIiIiImLAKvAYOAbO+H+dAe+AR8CK60cP3AQ+MJ6TsHbPnTxi5POx6+/s6XYxul2P0OGePLq3HqFPW6+yA6ceoQVQaCcK7UShnSi0E4V2otALX4E94AFwF1gH1qYnp+vADeAWsAFsAa+ZQaH5E/gJcHXmY2v4GYVO9Am4s+T7gUIn+gxcW/YrrdBpfgL3lo2s0Ome50RW6DS/gNsKXd9hbmTt6DTPFNrHduKOvQ+8mZ6zs5X4cC8buDcbCTOHN8MfJS86Yuj1hJlflb7oiKHXEmb+WPqiw4W2tJm/tbjuiKGLU+iI8pkVOkqhC4inVejiEUsBXnY1G47MEXDQ1Wz1sjZYzN/r+sIMHgO5MSfhpWf6c2s/s9XL2mAxizVtMpPHUG7MCbDT3Wx1kjZazGJNT5nJYyg35gR40d1sdZI2WsxiTfvM5DFUV6zRzAododAFxMIqdAUK7cS0oxU6C52xRjPnVVToZAodkZ5PoS8UC6vQFSi0E9OOVugsdMYazZxXUaGTKXREej6FvlAsrEJXoNBOTDtaobPQGWs0c17Ff/A4NmsT+vtwBwxam9AuBwyGU2dHD/3QI/TKdBDqqKHfA1eqhz53rHEXsS1t3pKRL/0H0ho7ezfcr1r+grS0WXOEtR2F24XbThYRERERERERsb79Bvmh4UzwAuRsAAAAAElFTkSuQmCC"/>
                                </defs>
                            </svg>
                        </a>
                        <a href="">
                            <svg width="35" height="35" viewBox="0 0 35 35" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                <rect width="35" height="35" fill="url(#pattern0_142_100)"/>
                                <defs>
                                    <pattern id="pattern0_142_100" patternContentUnits="objectBoundingBox" width="1" height="1">
                                        <use xlink:href="#image0_142_100" transform="scale(0.0111111)"/>
                                    </pattern>
                                    <image id="image0_142_100" width="90" height="90" xlink:href="data:image/png;base64,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"/>
                                </defs>
                            </svg>
                        </a>
                        <a href="">
                            <svg width="35" height="35" viewBox="0 0 35 35" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                <rect width="35" height="35" fill="url(#pattern0_142_101)"/>
                                <defs>
                                    <pattern id="pattern0_142_101" patternContentUnits="objectBoundingBox" width="1" height="1">
                                        <use xlink:href="#image0_142_101" transform="scale(0.0111111)"/>
                                    </pattern>
                                    <image id="image0_142_101" width="90" height="90" xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAFoAAABaCAYAAAA4qEECAAAACXBIWXMAAAsTAAALEwEAmpwYAAADUElEQVR4nO3cO08UURjG8aOlFkoBCqKlH0AN1jbaKZDYGgoLE28YCwsKqcCPIGIksTJGYkG0UKMWRluovEVjB3grgHhL9G9OfDesXPccdmbO7D6/crM7855nZ2ZnZ868zomIiIiIiIiISF0AbcB+oBs4BwwDo8A48ASYAt4BM8BXYI5Fc/bajL1nyj4zbssYtmV22zraGvZrA1qAg0AfMAiMAY+A18B38ufX+cpqGLOa+qzGFpc6oAM4AlwERoCnwCzlM2u1j9hY/Jg6it7lTwG3ShpoqI92SPKHovY8At5h33YRu30qfgA3Mgsc6AE+FT3KhHwGeusd8kngd9EjS9Af4HQ9t2S/QFmZz6ZnoyHvtnNVWdsXYNdGgvbnmlKb0diQ9wC/alyJwE+gMyboC0ov2NmYoO+Hr6fpTcQE/b7pYwv3NibohYgVNbuFmKAlgoLOiYLOiYLOSZmCHijzD3FpgnaLd2xGynjFsFRBV9hN1WeUiAuVSqHAJuA48IESKG3QFcAW4BIwT8JcqFQLBTqBm6nejGiYoCuALuA5iXGhylAo/47fJ4BpEtGQQVcAW23WUeHTIFyo0hS6/B6nP34XxoUqTaErAA4Bk6Wov4giowpdvf7NdvzOdcpa0wVdAWwHrthUrvTqz6OouhRa+3j2ArfJWExhhXDZBj2RXP1ZF7SaDALWoWMldQxYP4ZrqePpnX+mJXcxxRbCbSxgP41Nf1hqERmw/oKHcmEB66JSLBd2mfQFiYnZHZMsFF34zzZodCurvtzygHVzNgvu/5APaLpBRpwm0ORmQFPCpHFO78pOQedEQSccdGnnKBdoLiZo36dIwryJCfpe4EqEuAc6zyu5YGdip1fpofusH7q3sH3vIMmyjUTVpG/f9EPW768U3xjFwu5NdXZ9w7T6qQpbzauybl61ZMv2u4hk1Y6tKux24HpeMzObssHgksB3+nNGayPZLC0z7+bWMnOdLf0w0A9ctfbCyTzAE8DX/NjG0G9jKi7YwJmcXTbzftB2uYfWWvgb+fPrfAk8sFouW22+xm2uUQGtwD7gmO2WQ8A14I5tWZVG3dPW6LD6qdl5e23a3jNpn7ljD+wP2TKP2jpaix6viIiIiIiIiIhrEH8BelVYxPQ3ygQAAAAASUVORK5CYII="/>
                                </defs>
                            </svg>
                        </a>
                        <a href="">
                            <svg width="35" height="35" viewBox="0 0 35 35" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                <rect width="35" height="35" fill="url(#pattern0_142_102)"/>
                                <defs>
                                    <pattern id="pattern0_142_102" patternContentUnits="objectBoundingBox" width="1" height="1">
                                        <use xlink:href="#image0_142_102" transform="scale(0.0111111)"/>
                                    </pattern>
                                    <image id="image0_142_102" width="90" height="90" xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAFoAAABaCAYAAAA4qEECAAAACXBIWXMAAAsTAAALEwEAmpwYAAACtUlEQVR4nO3cu2sUURiG8eMlRgTBS7zG2AgBsVdQK8FCrLVQxMJCBKP/gXZeQARRwVqMIGongoKtFxCMhdhpJVgEJG4U748MGWFZdmbO7mY+z5nz/iDd7sfuk+Gb3UkY50RERERERERExAFLgdPAC2CW5poFngOngGHTXz2wCXhNeqay9255JKcYuT12/Ud2vi5SN2EROtvJqXtmEbr1v99lAFoWoQVQaCMKbUShjSh04qGngbPALmArsA+4CfwiUiGGfgmsK5i1J9aPi6GF/gSsr5h3mAiFFvq8x7wFwFsiE1rovZ4zrxOZ0ELv8Jx5jsiEFvqQ58y7RCa00A885q0GPhOZ0EJnDlacCG8ToRBDf8//WLC4Y85a4A6RCjH0Px+AW8DVbKUAX4lYyKEbRaGNKPScb8B74A3wEfhNAqEvAhdKfm4UPO9RxfOudTx+BricfUkChjpe80JgM3AEeExDQy+qmLel4HknKp63oe2x2UfEkR7ew27gHQNwdQsw9Jk+38eafLUotKsOfb+fyG0zxoEvOqJLAMuAVW5AwBWFNgCMAT+1ow30829uyZwMC64C7geO5n/8XeE89XM93KUWGhgCLuVfUtpll16Pec44oNAV8shF/gA7PWZsV+gSwCjwoyLSPY85GxW6BHDcI9C0x5zlCl2iy/WOIis99nxPXN1COhkCk56vYcxjVk9X+FzdCCv0Q8/XMO4xq6f/A3R1I6zQTzxfwzaPWQpdRKF1RA9Oq2POPKRUaB8K3Z1OhuhTh3Z0Ga2O7rQ60OrQ6iij1dGdVgdaHVodsa2ORlJoIwptRKGNKLQRhW5Q6CjvrzHPZixC6waD2NxgMLvrbOpOWoQezm+EmqpXwJLaQ7fd1ngq0cijJpE7juyJbF81/ATZAp5m68LsSBYRERERERERcWH7Cy+jOyOAOZZ/AAAAAElFTkSuQmCC"/>
                                </defs>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
