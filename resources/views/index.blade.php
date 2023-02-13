<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Musico</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>

<body class="font-Candara">
    {{-- https://www.behance.net/gallery/161315413/Cinema-Website-Design?tracking_source=search_projects%7Cmovie+website+landing+page --}}
    {{-- https://www.pinterest.com/pin/42995371436341271/ --}}

    <div
        class="relative bg-[url('http://musico.com.ng/img/young-man-and-woman-recording-music-singing.jpg')] w-full h-screen bg-cover bg-no-repeat text-white
        before:absolute before:top-0 before:left-0 before:z-10 before:bg-[linear-gradient(180deg,rgb(0_0_0/0.9),rgb(0_0_0/0.7))] before:w-full before:h-screen">
        <div class="relative z-50">
            {{-- Social Media container --}}
            <div class="flex justify-end gap-2 items-center py-3 border-border_primary border-b-[0.1rem] px-[18%]">
                <a href="">
                    <img src="{{ asset('Icons/facebook-icon.png') }}" class="w-4" alt="Facebook Icon" />
                </a>
                <a href="">
                    <img src="{{ asset('Icons/twitter-icon.png') }}" class="w-4" alt="Twitter Icon" />
                </a>
                <a href="">
                    <img src="{{ asset('Icons/linkedin-icon.png') }}" class="w-4" alt="LinkedIn Icon" />
                </a>
                <a href="">
                    <img src="{{ asset('Icons/google-icon.png') }}" class="w-4" class="Google Plus Icon" />
                </a>
            </div>
            {{-- Navigation Links  and Brand Logo --}}
            <div class="px-[18%] flex justify-between items-center">
                <div>
                    <img src="{{ asset('img/Musico--logo.png') }}" class="w-20" alt="">
                </div>
                <div class="font-bold text-sm flex gap-8 items-center">
                    <a href=""
                        class="relative before:absolute before:-left-[10px] before:-top-[30px] before:w-[calc(100%+20px)] before:bg-primary before:h-[0.3rem]">HOME</a>
                    <a href="">ABOUT US</a>
                    <a href="">BOOKINGS</a>
                    <a href="">PRODUCTION</a>
                    <a href="">CONTACT US</a>
                </div>
            </div>
        </div>
        <div class="absolute top-1/2 z-50 -translate-y-1/2 left-1/2 -translate-x-1/2 flex flex-col items-center">
            <div>
                <img src="{{ asset('img/Musico_logo.png') }}" alt="">
            </div>
            <div class="mt-3 text-center">
                <h1 class="font-extrabold text-5xl">MUSICO REMEDY</h1>
                <p class="uppercase tracking-[0.4em] text-3xl text-[#c7c8c9] font-Encode_Sans_SC font-[100]">studios</p>
                <p class="mt-3 text-[1.1rem] w-[32rem] leading-[1.4rem] text-[#c7c8c9]">
                    Top Recording Studios, Mixing & Mastering Engineers, Producers. Work with musicians who understand
                    that the best art comes from the best environment.
                </p>
            </div>
        </div>
        <div
            class="absolute z-50 bottom-0 grid grid-cols-3 gap-8 border-t-[0.1rem] border-border_primary py-7 px-[18%]">
            <p class="font-bold leading-[1.2rem]">So ask questions, get answers, know we are here to help you</p>
            <p
                class="flex flex-col before:absolute before:top-0 before:left-0 before:bg-primary before:h-full before:w-[0.2rem] relative pl-3 leading-[1rem] justify-center">
                <span>Call Us</span>
                <span>(001) 123-4567</span>
            </p>
            <p
                class="flex flex-col before:absolute before:top-0 before:left-0 before:bg-primary before:h-full before:w-[0.2rem] relative pl-3 leading-[1rem] justify-center">
                <span>Email Us</span>
                <span>sales@musicoremedystudios.com</span>
            </p>
        </div>
    </div>

    {{-- Videos Overview Section --}}
    {{-- Image Aspect Ration - 256px x 256px --}}
    <div class="bg-[#191b1f]">
        <div class="pt-16 px-[5%] text-center">
            <h1
                class="text-white inline-block font-semibold font-Encode_Sans_SC text-3xl relative
                before:absolute before:border-t-[0.125rem] before:border-b-[0.125rem] before:border-r-[20rem] before:border-t-transparent before:border-b-transparent before:border-r-white before:w-0 before:h-0 before:right-[calc(100%+1.5rem)] before:top-1/2
                after:absolute after:border-t-[0.125rem] after:border-b-[0.125rem] after:border-l-[20rem] after:border-t-transparent after:border-b-transparent after:border-r-white after:w-0 after:h-0 after:left-[calc(100%+1.5rem)] after:top-1/2
                ">Previous Sessions
            </h1>
        </div>
        <div class="relative py-28">
            <div class="absolute bottom-0 right-[5%] my-8">
                <a href="{{route('booking.one')}}" class="block uppercase bg-primary text-[#191b1f] text-xs font-bold mx-auto w-[12rem] mt-8 px-10 py-4 border-2 border-primary hover:text-primary hover:bg-transparent hover:shadow-[0px_0px_7px_0px_#bd9a616e,0px_0px_12px_0px_#bd9a616e] transition-shadow duration-150 ease-in-out">
                    Book Session Now</a>
            </div>
            <img src="{{ asset('Icons/music-icon.png') }}"
                class="absolute right-12 top-36 animate-music_icon_movement"
                alt="">
            <img src="{{ asset('Icons/music-icon.png') }}"
                class="absolute left-12 top-64 animate-music_icon_movement"
                alt="">
            <img src="{{ asset('Icons/music-icon.png') }}"
                class="absolute left-[calc(50%-2rem)] top-10 animate-music_icon_movement" alt="">
            <img src="{{ asset('Icons/music-icon.png') }}"
                class="absolute right-12 bottom-56 animate-music_icon_movement" alt="">
            <img src="{{ asset('Icons/music-icon.png') }}"
                class="absolute left-12 bottom-24 animate-music_icon_movement" alt="">
            <div class="flex items-center justify-center gap-6 flex-wrap px-[5%]">
                <div class="bg-[#1f2125] rounded-xl w-[16rem] relative z-50 group overflow-hidden">
                    <div class="h-[16rem] w-[16rem] object-cover overflow-hidden shadow-[0px_7px_12px_0px_#d1b3813b]">
                        <a href="">
                            <img src="{{ asset('img/Filmcraft Studio Gear.jfif') }}"
                                class="h-full w-full object-cover rounded-t-xl group-hover:scale-[1.05] transition-all duration-500 ease-linear"
                                alt="">
                        </a>
                    </div>
                    <div class="p-4">
                        <p class="text-[#797f84] text-sm">Feb. 3rd 2023</p>
                        <a href="" class="hover:underline decoration-white underline-offset-2 decoration-1">
                            <h1 class="capitalize mt-1 text-white font-bold text-xl leading-6">wings belongs on planes
                                not racing
                                cars...</h1>
                        </a>
                        <span class="bg-[#292b30] w-full h-[0.05rem] block mt-[1.2rem]"></span>
                        <div class="pt-2 flex items-center justify-around">
                            <div class="flex items-center gap-2">
                                <button>
                                    <img src="{{ asset('Icons/love-icon-red.png') }}" class="w-4" alt="">
                                </button>
                                <p class="text-[#bdbdbd] text-sm">2K</p>
                            </div>
                            <div class="flex items-center gap-2 relative">
                                <img src="{{ asset('Icons/eye-icon.png') }}" class="w-4" alt="">
                                <span class="block absolute bg-[#4c4c54] w-[0.1rem] h-[calc(100%+0.1rem)] rotate-[20deg] translate-x-[0.45rem]"></span>
                                <p class="text-[#bdbdbd] text-sm">1K</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="bg-[#1f2125] rounded-xl w-[16rem] relative z-50 group overflow-hidden">
                    <div class="h-[16rem] w-[16rem] object-cover overflow-hidden shadow-[0px_7px_12px_0px_#d1b3813b]">
                        <a href="">
                            <img src="{{ asset('img/DLXM_SESSION.png') }}"
                                class="h-full w-full object-cover rounded-t-xl group-hover:scale-[1.05] transition-all duration-500 ease-linear"
                                alt="">
                        </a>
                    </div>
                    <div class="p-4">
                        <p class="text-[#797f84] text-sm">Feb. 3rd 2023</p>
                        <a href="" class="hover:underline decoration-white underline-offset-2 decoration-1">
                            <h1 class="capitalize mt-1 text-white font-bold text-xl leading-6">wings belongs on planes
                                not racing
                                cars...</h1>
                        </a>
                        <span class="bg-[#292b30] w-full h-[0.05rem] block mt-[1.2rem]"></span>
                        <div class="pt-2 flex items-center justify-around">
                            <div class="flex items-center gap-2">
                                <button>
                                    <img src="{{ asset('Icons/love-icon-red.png') }}" class="w-4" alt="">
                                </button>
                                <p class="text-[#bdbdbd] text-sm">24K</p>
                            </div>
                            <div class="flex items-center gap-2">
                                <img src="{{ asset('Icons/eye-icon.png') }}" class="w-4" alt="">
                                <p class="text-[#bdbdbd] text-sm">30K</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="bg-[#1f2125] rounded-xl w-[16rem] relative z-50 group overflow-hidden">
                    <div class="h-[16rem] w-[16rem] object-cover overflow-hidden shadow-[0px_7px_12px_0px_#d1b3813b]">
                        <a href="">
                            <img src="{{ asset('img/Yulia😍.jfif') }}"
                                class="h-full w-full object-cover rounded-t-xl group-hover:scale-[1.05] transition-all duration-500 ease-linear"
                                alt="">
                        </a>
                    </div>
                    <div class="p-4">
                        <p class="text-[#797f84] text-sm">Feb. 3rd 2023</p>
                        <a href="" class="hover:underline decoration-white underline-offset-2 decoration-1">
                            <h1 class="capitalize mt-1 text-white font-bold text-xl leading-6">wings belongs on planes
                                not racing
                                cars...</h1>
                        </a>
                        <span class="bg-[#292b30] w-full h-[0.05rem] block mt-[1.2rem]"></span>
                        <div class="pt-2 flex items-center justify-around">
                            <div class="flex items-center gap-2">
                                <button>
                                    <img src="{{ asset('Icons/love-icon.png') }}" class="w-4" alt="">
                                </button>
                                <p class="text-[#bdbdbd] text-sm">0</p>
                            </div>
                            <div class="flex items-center gap-2">
                                <img src="{{ asset('Icons/eye-icon.png') }}" class="w-4" alt="">
                                <p class="text-[#bdbdbd] text-sm">501</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="bg-[#1f2125] rounded-xl w-[16rem] relative z-50 group overflow-hidden">
                    <div class="h-[16rem] w-[16rem] object-cover overflow-hidden shadow-[0px_7px_12px_0px_#d1b3813b]">
                        <a href="">
                            <img src="{{ asset('img/Filmcraft Studio Gear.jfif') }}"
                                class="h-full w-full object-cover rounded-t-xl group-hover:scale-[1.05] transition-all duration-500 ease-linear"
                                alt="">
                        </a>
                    </div>
                    <div class="p-4">
                        <p class="text-[#797f84] text-sm">Feb. 3rd 2023</p>
                        <a href="" class="hover:underline decoration-white underline-offset-2 decoration-1">
                            <h1 class="capitalize mt-1 text-white font-bold text-xl leading-6">wings belongs on planes
                                not racing
                                cars...</h1>
                        </a>
                        <span class="bg-[#292b30] w-full h-[0.05rem] block mt-[1.2rem]"></span>
                        <div class="pt-2 flex items-center justify-around">
                            <div class="flex items-center gap-2">
                                <button>
                                    <img src="{{ asset('Icons/love-icon-red.png') }}" class="w-4" alt="">
                                </button>
                                <p class="text-[#bdbdbd] text-sm">19.6K</p>
                            </div>
                            <div class="flex items-center gap-2">
                                <img src="{{ asset('Icons/eye-icon.png') }}" class="w-4" alt="">
                                <p class="text-[#bdbdbd] text-sm">21.1K</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="bg-[#1f2125] rounded-xl w-[16rem] relative z-50 group overflow-hidden">
                    <div class="h-[16rem] w-[16rem] object-cover overflow-hidden shadow-[0px_7px_12px_0px_#d1b3813b]">
                        <a href="">
                            <img src="{{ asset('img/young-man-and-woman-recording-music-singing.jpg') }}"
                                class="h-full w-full object-cover rounded-t-xl group-hover:scale-[1.05] transition-all duration-500 ease-linear"
                                alt="">
                        </a>
                    </div>
                    <div class="p-4">
                        <p class="text-[#797f84] text-sm">Feb. 3rd 2023</p>
                        <a href="" class="hover:underline decoration-white underline-offset-2 decoration-1">
                            <h1 class="capitalize mt-1 text-white font-bold text-xl leading-6">wings belongs on planes
                                not racing
                                cars...</h1>
                        </a>
                        <span class="bg-[#292b30] w-full h-[0.05rem] block mt-[1.2rem]"></span>
                        <div class="pt-2 flex items-center justify-around">
                            <div class="flex items-center gap-2">
                                <button>
                                    <img src="{{ asset('Icons/love-icon-red.png') }}" class="w-4" alt="">
                                </button>
                                <p class="text-[#bdbdbd] text-sm">910.5K</p>
                            </div>
                            <div class="flex items-center gap-2">
                                <img src="{{ asset('Icons/eye-icon.png') }}" class="w-4" alt="">
                                <p class="text-[#bdbdbd] text-sm">1.1M</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="bg-[#1f2125] rounded-xl w-[16rem] relative z-50 group overflow-hidden">
                    <div class="h-[16rem] w-[16rem] object-cover overflow-hidden shadow-[0px_7px_12px_0px_#d1b3813b]">
                        <a href="">
                            <img src="{{ asset('img/download (4).jfif') }}"
                                class="h-full w-full object-cover rounded-t-xl group-hover:scale-[1.05] transition-all duration-500 ease-linear"
                                alt="">
                        </a>
                    </div>
                    <div class="p-4">
                        <p class="text-[#797f84] text-sm">Feb. 3rd 2023</p>
                        <a href="" class="hover:underline decoration-white underline-offset-2 decoration-1">
                            <h1 class="capitalize mt-1 text-white font-bold text-xl leading-6">wings belongs on planes
                                not racing
                                cars...</h1>
                        </a>
                        <span class="bg-[#292b30] w-full h-[0.05rem] block mt-[1.2rem]"></span>
                        <div class="pt-2 flex items-center justify-around">
                            <div class="flex items-center gap-2">
                                <button>
                                    <img src="{{ asset('Icons/love-icon-red.png') }}" class="w-4" alt="">
                                </button>
                                <p class="text-[#bdbdbd] text-sm">12</p>
                            </div>
                            <div class="flex items-center gap-2">
                                <img src="{{ asset('Icons/eye-icon.png') }}" class="w-4" alt="">
                                <p class="text-[#bdbdbd] text-sm">50</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="bg-[#1f2125] rounded-xl w-[16rem] relative z-50 group overflow-hidden">
                    <div class="h-[16rem] w-[16rem] object-cover overflow-hidden shadow-[0px_7px_12px_0px_#d1b3813b]">
                        <a href="">
                            <img src="{{ asset('img/Yulia😍.jfif') }}"
                                class="h-full w-full object-cover rounded-t-xl group-hover:scale-[1.05] transition-all duration-500 ease-linear"
                                alt="">
                        </a>
                    </div>
                    <div class="p-4">
                        <p class="text-[#797f84] text-sm">Feb. 3rd 2023</p>
                        <a href="" class="hover:underline decoration-white underline-offset-2 decoration-1">
                            <h1 class="capitalize mt-1 text-white font-bold text-xl leading-6">wings belongs on planes
                                not racing
                                cars...</h1>
                        </a>
                        <span class="bg-[#292b30] w-full h-[0.05rem] block mt-[1.2rem]"></span>
                        <div class="pt-2 flex items-center justify-around">
                            <div class="flex items-center gap-2">
                                <button>
                                    <img src="{{ asset('Icons/love-icon-red.png') }}" class="w-4" alt="">
                                </button>
                                <p class="text-[#bdbdbd] text-sm">43</p>
                            </div>
                            <div class="flex items-center gap-2">
                                <img src="{{ asset('Icons/eye-icon.png') }}" class="w-4" alt="">
                                <p class="text-[#bdbdbd] text-sm">243</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Abouet Us --}}
    <div class="relative w-full bg-[#0d0d0d] px-[18%]">
        <span class="absolute z- top-0 left-[18%] bg-primary h-full w-[20rem]"></span>
        <div class="py-16 relative z-10">
            <h1 class="text-7xl text-primary font-Encode_Sans_SC font-[100] tracking-[0.1em] pl-[22rem]">ABOUT <span
                    class="font-extrabold font-Encode_Sans_SC">US</span></h1>
            <div class="flex justify-between items-center ml-8 mt-4">
                <img src="{{ asset('img/young-man-and-woman-recording-music-singing.jpg') }}"
                    class="w-[47.5%] border-[#0d0d0d] border-[1px] p-[0.6rem]" alt="">
                <div class="w-[47.5%] text-[#c7c8c9]">
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit repellat voluptate nemo ipsum
                        omnis culpa possimus, minima, vero tenetur odio necessitatibus in exercitationem sunt,
                        nobis ex esse hic dolorem cumque laboriosam aut dolorum provident!
                    </p>
                    <p class="mt-4">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit repellat voluptate nemo ipsum
                        omnis culpa possimus, minima, vero tenetur odio necessitatibus in exercitationem sunt,
                        nobis ex esse hic dolorem cumque laboriosam aut dolorum provident!
                    </p>
                </div>
            </div>
            <a href=""
                class="border-2 border-primary text-primary text-xs font-bold block ml-auto w-40 mt-10 px-10 py-4 hover:shadow-[0px_0px_7px_0px_#bd9a616e,0px_0px_12px_0px_#bd9a616e] transition-shadow duration-150 ease-linear">LEARN
                MORE</a>
        </div>
    </div>

    <div class="bg-[#181818]">
        <div class="py-28 px-[18%] text-right text-[#181818]">
            <h1 class="uppercase relative z-20">
                <span
                    class="before:bg-primary before:h-[17rem] before:w-56 before:absolute before:right-0 before:-z-10"></span>
                <span
                    class="font-Encode_Sans_SC font-[100] block pt-[3.5rem] leading-[0.6em] pr-3 text-[4rem]">Need</span>
                <span
                    class="font-Encode_Sans_SC font-extrabold -translate-x-[0.65rem] block text-[4rem] tracking-wider">
                    <span class="text-primary">Quality Produc</span>tion?
                </span>
                <span class="w-[26rem] -translate-x-[230px] ml-auto block leading-[1.1rem]">
                    <span class="text-[#c7c8c9]">W</span><span class="lowercase text-[#c7c8c9]">e deliver the very
                        best service and amenitites signed artists and independent musicians.</span>
                </span>
            </h1>
            <a href="{{route('booking.one')}}"
                class="border-2 border-primary text-primary text-xs font-bold block mr-auto w-[12rem] mt-8 px-10 py-4 hover:shadow-[0px_0px_7px_0px_#bd9a616e,0px_0px_12px_0px_#bd9a616e] transition-shadow duration-150 ease-linear">BOOK
                SESSION NOW</a>
        </div>
        <div class="border-border_primary border-t-[0.1rem] py-8">
            <div class="w-[31rem] mx-auto">
                <div class="flex justify-between items-center font-bold text-sm text-white">
                    <a href="">
                        <div class="flex items-center gap-1">
                            <img src="{{ asset('Icons/facebook-icon.png') }}" class="w-4" alt="">
                            <h2>FACEBOOK</h2>
                        </div>
                    </a>
                    <a href="">
                        <div class="flex items-center gap-1">
                            <img src="{{ asset('Icons/twitter-icon.png') }}" class="w-4" alt="">
                            <h2>TWITTER</h2>
                        </div>
                    </a>
                    <a href="">
                        <div class="flex items-center gap-1">
                            <img src="{{ asset('Icons/google-icon.png') }}" class="w-4" alt="">
                            <h2>GOOGLE</h2>
                        </div>
                    </a>
                    <a href="">
                        <div class="flex items-center gap-1">
                            <img src="{{ asset('Icons/linkedin-icon.png') }}" class="w-4" alt="">
                            <h2>LINKEDIN</h2>
                        </div>
                    </a>
                </div>
                <div class="flex flex-col items-center mt-10">
                    <img src="{{ asset('img/Musico_logo.png') }}" class="w-32" alt="">
                    <div class="mt-3 text-center text-[#fff] font-bold text-sm">
                        <h1 class="font-extrabold text-4xl">MUSICO REMEDY</h1>
                        <p class="uppercase tracking-[0.4em] text-2xl text-[#c7c8c9] font-Encode_Sans_SC font-[100]">
                            studios</p>
                        <div class="mt-6 w-[20rem] mx-auto flex justify-between">
                            <div class="flex items-center gap-4">
                                <img src="{{ asset('Icons/phone-icon-white.png') }}" class="w-4" alt="">
                                <p>202-425-6700</p>
                            </div>
                            <div class="flex items-center gap-4">
                                <img src="{{ asset('Icons/telephone-icon-white.png') }}" class="w-4"
                                    alt="">
                                <p>202-425-6700</p>
                            </div>
                        </div>
                        <div class="mt-4 flex items-center gap-4">
                            <img src="{{ asset('Icons/network-icon-white.png') }}" class="w-4" alt="">
                            <p class="uppercase">4600 north park avenue, suite 100, chevy chase, maryland 20815</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="bg-[#0d0d0d] px-[15%] py-3 text-sm flex justify-between text-white">
        <p>&copy; 2023 <span class="font-bold">Musico Remedy Studio.</span> All rights reserved.</p>
        <p>Powered by <span class="font-bold">codegod</span></p>
    </div>

</body>

</html>
