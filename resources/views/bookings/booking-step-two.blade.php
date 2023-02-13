<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Musico | Booking</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>

<body class="overflow-hidden m-0 p-0 font-Merriweather_Sans">
    <div class="h-screen">
        <div class="absolute right-4 top-4 text-sm z-50 flex items-center gap-1">
            <a href="/" class="font-light">Home</a>
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-3 h-3">
                <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
            </svg>
            <a ">Booking</a>
        </div>
        <div>
            <img src="{{ asset('img/DLXM_SESSION.png') }}" class="w-[45%] h-screen object-cover" alt="">
            {{-- A video can be here instead as well if available --}}
        </div>
        <div class="bg-primary/20 w-[55%] h-screen absolute right-0 top-0 p-20">
            <div class="text-xs flex items-center justify-between w-[30rem] font-light">
                <div class="flex items-center">
                    <p class="bg-primary/30 px-4 py-2 rounded-lg mr-2">1</p>
                    <p>Personal Details</p>
                </div>
                <div class="flex items-center font-semibold">
                    <p class="bg-primary px-4 py-2 rounded-lg mr-2 text-white">2</p>
                    <p>Music Session Details</p>
                </div>
                <div class="flex items-center ">
                    <p class="bg-primary/30 px-4 py-2 rounded-lg mr-2">3</p>
                    <p>Payment Details</p>
                </div>
            </div>
            <div class="bg-primary/40 w-full h-[0.05rem] mt-6"></div>
            <div class="pt-10 pb-8">
                <h4 class="text-[#d1c2a7]">Step 2/3</h4>
                <h1 class="text-[#8b7045] font-bold text-3xl tracking-[-0.03rem] pt-1 relative before:absolute before:bg-[#423520] before:w-12 before:h-[0.1rem] before:-bottom-2">
                    Music Session Details
                </h1>
            </div>
            <form action="">
                <div class="grid grid-cols-2 gap-x-7 gap-y-4 text-sm">
                    <div>
                        <label for="firstname" class="text-[#423520]">First Name</label>
                        <input type="text" id="firstname" name="firstname" class="mt-1 block w-full py-2 px-3 rounded-md bg-transparent border-[#d1c2a7] border-[0.1rem] focus:border-[#8b7045] focus:outline-0">
                    </div>
                    <div>
                        <label for="lastname" class="text-[#423520]">Last Name</label>
                        <input type="text" id="lastname" name="lastname" class="mt-1 block w-full py-2 px-3 rounded-md bg-transparent border-[#d1c2a7] border-[0.1rem] focus:border-[#8b7045] focus:outline-0">
                    </div>
                    <div>
                        <label for="dob" class="text-[#423520]">Date of Birth</label>
                        <input type="date" id="dob" name="dob" class="mt-1 block w-full py-2 px-3 rounded-md bg-transparent border-[#d1c2a7] border-[0.1rem] focus:border-[#8b7045] focus:outline-0">
                    </div>
                    <div>
                        <label for="email" class="text-[#423520]">Email Address</label>
                        <input type="email" id="email" name="email" class="mt-1 block w-full py-2 px-3 rounded-md bg-transparent border-[#d1c2a7] border-[0.1rem] focus:border-[#8b7045] focus:outline-0">
                    </div>
                    <div class="col-span-2">
                        <label for="address" class="text-[#423520]">Nature Of Song</label>
                        <textarea placeholder="" name="address" id="address" rows="2" class="mt-1 block w-full py-2 px-3 rounded-md bg-transparent border-[#d1c2a7] border-[0.1rem] focus:border-[#8b7045] focus:outline-0"></textarea>
                    </div>
                </div>
                <div class="bg-primary/40 w-full h-[0.05rem] mt-10"></div>
                <div class="flex justify-between">
                    <button type="submit" class="bg-[#8b7045] text-white text-sm w-36 h-12 rounded-lg mt-7 hover:shadow-xl">Previous Step</button>
                    <button type="submit" class="bg-[#8b7045] text-white text-sm w-36 h-12 rounded-lg mt-7 hover:shadow-xl">Next Step</button>
                </div>
            </form>
        </div>
    </div>
</body>

</html>
