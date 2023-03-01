<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Musico | Booking</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/filepond/4.30.4/filepond.min.css" />
    <x-load-styles></x-load-styles>
</head>

<body class="m-0 p-0 font-Merriweather_Sans">
    <div class="h-screen">
        <div class="absolute right-4 top-4 text-sm z-50 flex items-center gap-1">
            <a href="/" class="font-light">Home</a>
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                stroke="currentColor" class="w-3 h-3">
                <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
            </svg>
            <a ">Booking</a>
        </div>
        <div>
            <img src="{{ asset('img/DLXM_SESSION.png') }}" class="w-[45%] h-screen object-cover" alt="">
            {{-- A video can be here instead as well if available --}}
        </div>
        <div class="bg-primary/20 w-[55%] h-screen absolute right-0 top-0 p-20 pb-7 overflow-y-auto">
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
                <h1 class="text-[#8b7045] font-bold text-3xl tracking-[-0.03rem] pt-1 drop-shadow-md before:drop-shadow-md relative
                    before:absolute before:bg-[#423520] before:w-12 before:h-[0.1rem] before:-bottom-2">
                    Music Session Details
                </h1>
            </div>
            <form enctype="multipart/form-data" method="POST" action="{{route('booking.store')}}">
                @csrf
                <div class="flex flex-col items-center gap-2" id="music-session-details">
                    <div class="shadow-md bg-primary/30 w-[30rem] rounded-lg relative before:bg-primary
                        before:absolute before:h-full before:w-[0.3rem] before:left-0 before:top-0 before:rounded-tl-lg before:rounded-bl-lg ">
                        <div class="session-details-preview flex items-center px-3 py-4 cursor-pointer hover:bg-primary/40 transition-all duration-150 ease-linear rounded-tl-lg rounded-tr-lg">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-[1.4rem] h-[1.4rem] mr-3 svg-plus-transition">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
                            </svg>
                            <div>
                                <h2 class="text-[#423520] font-bold">Personally Composed</h2>
                                <p class="text-sm font-light">Is it your personally composed song?</p>
                            </div>
                        </div>
                        {{-- d1c2a7 --}}
                        <div class="text-sm mx-12 is-closed overflow-hidden" extended-height="20" id="form1">
                            <p class="text-[0.7rem] bg-red-600 p-1 text-white text-center font-light invisible my-1">Please fill out all fields</p>
                            <div class="flex flex-col gap-2">
                                <input type="text" name="nos_comp" placeholder="Name of Song" class="w-full placeholder-slate-600 rounded-lg focus:rounded-none text-sm font-light py-3 focus:ring-0 border-[#d1c2a7] border-[0.1rem] focus:border-[#8b7045] focus:outline-0 bg-white/30">
                                <input type="text" name="kos_comp" placeholder="Key" class="w-full placeholder-slate-600 rounded-lg focus:rounded-none text-sm font-light py-3 focus:ring-0 border-[#d1c2a7] border-[0.1rem] focus:border-[#8b7045] focus:outline-0 bg-white/30">
                                <span>Kindly attach an audio</span>
                                <ul class="list-disc ml-4 italic text-xs -mt-2">
                                    <li>upload a pre-recorded sample of your song</li>
                                    <li>mp3, mp4, wav, wma, aac formats alone are supported</li>
                                </ul>
                                <input type="file" name="audio_comp" id="audio_comp" >
                                {{-- <p class="file_upload_trigger flex items-center justify-center gap-2 cursor-pointer m-0 bg-primary w-36 font-bold py-4 rounded-md hover:shadow-lg transition-shadow duration-150 text-white">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M3 16.5v2.25A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75V16.5m-13.5-9L12 3m0 0l4.5 4.5M12 3v13.5" />
                                    </svg>
                                    <i class="fa fa-spinner fa-spin" style="font-size:20px;display:none;"></i>
                                    Upload Audio <span id="processing" class="hidden">Processing...</span>
                                </p> --}}
                                <button type="button" onclick="validateMusicSessionForm('form1')" class="mt-2 border-2 border-[#423520]/60 text-[#423520] hover:shadow-[inset_0px_0px_6px_#423520c2] hover:rounded-md transition-all duration-150 text-center text-base py-2 w-24 ml-auto form_finish">Finish</button>
                            </div>
                        </div>
                    </div>
                    <div class="shadow-md bg-primary/30 w-[30rem] rounded-lg relative before:bg-primary
                        before:absolute before:h-full before:w-[0.3rem] before:left-0 before:top-0 before:rounded-tl-lg before:rounded-bl-lg ">
                        <div class="session-details-preview flex items-center px-3 py-4 cursor-pointer hover:bg-primary/40 transition-all duration-150 ease-linear rounded-tl-lg rounded-tr-lg">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-[1.4rem] h-[1.4rem] mr-3 svg-plus-transition">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
                            </svg>
                            <div>
                                <h2 class="text-[#423520] font-bold">Medley</h2>
                                    <p class="text-sm font-light">Is it a worship medley?</p>
                            </div>
                        </div>
                        <div class="text-sm mx-12 is-closed flex flex-col gap-2 overflow-hidden" extended-height="28" id="form2">
                            <input type="text" name="nos1_med" placeholder="Name of Song (1)" class="w-full placeholder-slate-600 rounded-lg focus:rounded-none text-sm font-light py-3 focus:ring-0 border-[#d1c2a7] border-[0.1rem] focus:border-[#8b7045] focus:outline-0 bg-white/30">
                            <input type="text" name="nos2_med" placeholder="Name of Song (2)" class="w-full placeholder-slate-600 rounded-lg focus:rounded-none text-sm font-light py-3 focus:ring-0 border-[#d1c2a7] border-[0.1rem] focus:border-[#8b7045] focus:outline-0 bg-white/30">
                            <input type="text" name="nos3_med" placeholder="Name of Song (3)" class="w-full placeholder-slate-600 rounded-lg focus:rounded-none text-sm font-light py-3 focus:ring-0 border-[#d1c2a7] border-[0.1rem] focus:border-[#8b7045] focus:outline-0 bg-white/30">
                            <input type="text" name="nos4_med" placeholder="Name of Song (4)" class="w-full placeholder-slate-600 rounded-lg focus:rounded-none text-sm font-light py-3 focus:ring-0 border-[#d1c2a7] border-[0.1rem] focus:border-[#8b7045] focus:outline-0 bg-white/30">
                            <input type="text" name="nos5_med" placeholder="Key(s)" class="w-full placeholder-slate-600 rounded-lg focus:rounded-none text-sm font-light py-3 focus:ring-0 border-[#d1c2a7] border-[0.1rem] focus:border-[#8b7045] focus:outline-0 bg-white/30">
                            <span>Kindly attach an audio</span>
                            <ul class="list-disc ml-4 italic text-xs -mt-2">
                                <li>upload a pre-recorded sample of your song & the arrangement</li>
                                <li>mp3, ogg formats alone are supported</li>
                            </ul>
                            <input type="file" name="audio" id="audio" class="hidden">
                            <p class="file_upload_trigger flex items-center justify-center gap-2 cursor-pointer m-0 bg-primary w-36 font-bold py-4 rounded-md hover:shadow-lg transition-shadow duration-150 text-white">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M3 16.5v2.25A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75V16.5m-13.5-9L12 3m0 0l4.5 4.5M12 3v13.5" />
                                </svg>
                                Upload Audio
                            </p>
                            <button type="button" class="mt-2 border-2 border-[#423520]/60 text-[#423520] hover:shadow-[inset_0px_0px_6px_#423520c2] hover:rounded-md transition-all duration-150 text-center text-base py-2 w-24 ml-auto form_finish">Finish</button>
                        </div>
                    </div>
                    <div class="shadow-md bg-primary/30 w-[30rem] rounded-lg relative before:bg-primary
                        before:absolute before:h-full before:w-[0.3rem] before:left-0 before:top-0 before:rounded-tl-lg before:rounded-bl-lg ">
                        <div class="session-details-preview flex items-center px-3 py-4 cursor-pointer hover:bg-primary/40 transition-all duration-150 ease-linear rounded-tl-lg rounded-tr-lg">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-[1.4rem] h-[1.4rem] mr-3 svg-plus-transition">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
                            </svg>
                            <div>
                                <h2 class="text-[#423520] font-bold">Replicate Song</h2>
                                <p class="text-sm font-light">Do you want to replicate a song?</p>
                            </div>
                        </div>
                        <div class="text-sm mx-12 is-closed flex flex-col gap-2 overflow-hidden" extended-height="14.3" id="form3">
                            <input type="text" name="tos_rep" placeholder="Title of Song" class="w-full placeholder-slate-600 rounded-lg focus:rounded-none text-sm font-light py-3 focus:ring-0 border-[#d1c2a7] border-[0.1rem] focus:border-[#8b7045] focus:outline-0 bg-white/30">
                            <input type="text" name="kos_rep" placeholder="Key" class="w-full placeholder-slate-600 rounded-lg focus:rounded-none text-sm font-light py-3 focus:ring-0 border-[#d1c2a7] border-[0.1rem] focus:border-[#8b7045] focus:outline-0 bg-white/30">
                            <input type="text" name="composer_rep" placeholder="Composer" class="w-full placeholder-slate-600 rounded-lg focus:rounded-none text-sm font-light py-3 focus:ring-0 border-[#d1c2a7] border-[0.1rem] focus:border-[#8b7045] focus:outline-0 bg-white/30">
                            <button type="button" class="mt-2 border-2 border-[#423520]/60 text-[#423520] hover:shadow-[inset_0px_0px_6px_#423520c2] hover:rounded-md transition-all duration-150 text-center text-base py-2 w-24 ml-auto form_finish">Finish</button>
                        </div>
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

    <x-load-scripts></x-load-scripts>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/filepond/4.30.4/filepond.min.js"></script>
    <script>
        function validateMusicSessionForm(form) {
            let inputTexts = $(`#${form} input[type=text]`);
            let inputFile = $(`#${form} input[type=file]`)[0];
            let file = inputFile.files[0];
            let isReady = false;
            inputTexts.each(function(index, input) {
                if ($(this).val() === '') {
                    $(`#${form} > p:first-child`).removeClass('invisible');
                    setTimeout(() => {
                        $(`#${form} > p:first-child`).addClass('invisible');
                    }, 3000);
                    isReady = true;
                }
            })
            // if file is uploaded set is ready to true otherwise set to false and after that use the isready state to know when all fields are actually filled
        }




        // Get a reference to the file input element
        const inputElement = document.querySelector('#audio_comp');

        // Create a FilePond instance
        const pond = FilePond.create(inputElement);

        FilePond.setOptions({
            server: {
                process: '/tmp-upload',
                revert: '/tmp-delete',
                headers: {
                    'X-CSRF-TOKEN' : '{{ csrf_token() }}'
                }
            },
        });
    </script>
    <script></script>
</body>

</html>



{{--
    If they want flyer, upload picture and generate flyer for them to download
        - this is not going to be part of the form element filled for each option but on it's own and generate based on the option picked.
    --}}

{{-- Create links for all our videos --}}
{{-- Add Resolutions for our videos --}}


{{--
    Personally Composed : Is it a personally composed song?
        Name of song
        key
        attach audio
    --}}

{{--
    Medley : Is it a worship medley?
        Names of Songs
        Key
        attach audio
    --}}

{{--
    Do you want to replicate a song?
    Title of song
    Key
    Composer
    --}}


{{--
when u want to click on finish try and validate the form that pertains to

when either of the sub forms is active set the bg of the current hover to be
     --}}

     {{-- Add text shadow for the likes of music session details --}}
