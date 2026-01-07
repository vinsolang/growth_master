@extends('layout.app')
@section('title', 'Growth Master CEO CLIMB EVENTS')
@section('content')
    <style>
        .no-scrollbar::-webkit-scrollbar {
            display: none;
        }
        .no-scrollbar {
            -ms-overflow-style: none;
            scrollbar-width: none;
        }
    </style>
    <div id="eventPage" class="space-y-45">
        @component('components.navbar')
        @endcomponent

        <div class="relative w-full h-[80vh] md:h-screen top-40">
            <img src="https://www.vistage.com/wp-content/uploads/2022/06/Climb-event-hero-raw-2048x873.jpg" alt=""
                class="w-full h-full object-cover">

            <!-- Text content -->
            <div
                class="absolute inset-0 flex flex-col justify-center items-center px-8 md:px-16 lg:px-24 text-white space-y-4">

                <h1 class="text-center font-bold text-7xl">Growth Master</h1>

                <p class="uppercase tracking-[0.5em] md:tracking-[0.8em] text-center text-3xl font-stretch-50%">
                    CEO CLIMB EVENTS
                </p>

                <!-- Play button -->
                <button class="cursor-pointer" id="btn-play">
                    <img src="https://www.vistage.com/wp-content/uploads/2022/06/btn-play.png" alt="">
                </button>

                <!-- Popup video (hidden by default) -->
                <div id="video-popup" class="hidden absolute inset-0 bg-black/80 flex items-center justify-center">

                    <!-- Close button -->
                    <button id="btn-close"
                        class="absolute top-6 right-6 text-white text-4xl font-medium hover:text-gray-300">
                        &times;
                    </button>

                    <video id="video-player" class="w-[90%] md:w-[70%] rounded-lg shadow-xl" controls>
                        <source src="{{ asset('assets/vedo.mp4') }}" type="video/mp4">
                    </video>
                </div>

            </div>
        </div>

        <div class="space-y-6">
            <div class="text-[#000000] text-4xl md:text-5xl text-center md:w-5xl mx-auto py-8 space-y-10">
                <h1>Discover Where Top CEOs Go for Powerful Insights & Inspiration</h1>
                <button id="btn-join-event" type="button"
                    class="cursor-pointer py-4 px-6 text-xl bg-[#68875d] text-[#ffffff] rounded font-semibold leading-relaxed tracking-[0.4rem] uppercase">
                    Join a Climb Event
                </button>
            </div>
            {{-- Card All --}}
            <div class="flex flex-col md:flex-row justify-between items-start px-6 md:min-h-[400px] gap-6">

                <!-- Card 1 -->
                <div
                    class="bg-white shadow-sm overflow-hidden w-full md:w-1/3 xl:h-full lg:h-75 md:h-90">
                    <img src="https://www.vistage.com/wp-content/uploads/2022/06/Engagin-Virtual-Experience.jpg"
                        class="w-full h-56 object-cover" alt="">

                    <div class="p-5">
                        <h2 class="uppercase text-[#003f5e] font-semibold text-center text-lg leading-relaxed">
                            Engaging 90-Minute Virtual Experience
                        </h2>
                    </div>
                </div>

                <!-- Card 2 -->
                <div
                    class="bg-white shadow-sm overflow-hidden w-full md:w-1/3 xl:h-full lg:h-75 md:h-90">
                    <img src="https://www.vistage.com/wp-content/uploads/2022/06/Engagin-Virtual-Experience.jpg"
                        class="w-full h-56 object-cover" alt="">

                    <div class="p-5">
                        <h2 class="uppercase text-[#003f5e] font-semibold text-center text-lg leading-relaxed">
                            Virtual Experience
                        </h2>
                    </div>
                </div>

                <!-- Card 3 -->
                <div
                    class="bg-white shadow-sm overflow-hidden w-full md:w-1/3 xl:h-full lg:h-75 md:h-90">
                    <img src="https://www.vistage.com/wp-content/uploads/2022/06/Engagin-Virtual-Experience.jpg"
                        class="w-full h-56 object-cover" alt="">

                    <div class="p-5">
                        <h2 class="uppercase text-[#003f5e] font-semibold text-center text-lg leading-relaxed">
                            Engaging
                        </h2>
                    </div>
                </div>

            </div>

            {{-- Block card event clime --}}
            <div class="bg-[#003f5e] w-full h-auto text-white py-8" id="section-join">
                <h1 class="text-5xl text-center py-16">Attend the Next CEO Climb Event</h1>
                <h4 class="text-xl text-center">Choose your event below and sign up on the next page to secure your spot.</h4>
                {{-- Block Event --}}
                <div class="py-20">
                    {{-- Card Event 1 --}}
                    <div class="space-y-4 mt-10 px-16">
                        {{-- Date --}}
                            <h1 class="text-[#edc01c] text-5xl text-center font-semibold">December 2025</h1>
                        <div class="h-auto xl:h-[350px] flex md:flex-row flex-col space-x-16">
                            {{-- image --}}
                            <div class="w-full lg:w-1/4 bg-gray-600 relative">
                                <img src="{{ asset('assets/city.jpeg') }}" alt="" class="w-full h-full object-cover">
                                <div class="absolute inset-0 w-full h-full bg-[#082f42]/70"></div>
                                <p class="absolute inset-0 flex flex-col items-center justify-center text-white font-bold text-2xl text-center px-3 bg-black/40">
                                    12 <br>
                                    Dec | Fri <br>
                                    8:00 am - 9:30 am PST <br><br>
                                    <span class="font-normal text-xl">Virtual Event</span>
                                </p>
                            </div>
                            {{-- text --}}
                            <div class="relative grid w-full lg:w-[60%] py-10 lg:px-0 px-4 gap-y-6">
                                <div class="flex items-center space-x-2">
                                    <h2 class="uppercase text-[16px] tracking-widest">Growth Executive Summits</h2>
                                    <div class="bg-[#edc01c] h-1 w-1/14"></div>
                                </div>
                                <div>
                                    <h1 class="text-3xl">CEO Climb Event: The Science of Calm, Confident Leadership</h1>
                                </div>
                                <div>
                                    <p class="font-normal text-[16px]">Every decision, obstacle, and success has shaped the leader you are today. The Vistage Executive Summit is your day to build on that experience through expert insights, meaningful peer connection, and practical tools that drive growth.</p>
                                </div>
                                {{-- Button --}}
                                <div>
                                    <button class="cursor-pointer text-xl font-medium">Read More</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- Card Event 2 --}}
                    <div class="space-y-4 mt-10 px-16">
                        {{-- Date --}}
                            <h1 class="text-[#edc01c] text-5xl text-center font-semibold">December 2025</h1>
                        <div class="h-auto xl:h-[350px] flex md:flex-row flex-col space-x-16">
                            {{-- image --}}
                            <div class="w-full lg:w-1/4 bg-gray-600 relative">
                                <img src="{{ asset('assets/city.jpeg') }}" alt="" class="w-full h-full object-cover">
                                <div class="absolute inset-0 w-full h-full bg-[#082f42]/70"></div>
                                <p class="absolute inset-0 flex flex-col items-center justify-center text-white font-bold text-2xl text-center px-3 bg-black/40">
                                    12 <br>
                                    Dec | Fri <br>
                                    8:00 am - 9:30 am PST <br><br>
                                    <span class="font-normal text-xl">Virtual Event</span>
                                </p>
                            </div>
                            {{-- text --}}
                            <div class="relative grid w-full lg:w-[60%] py-10 lg:px-0 px-4 gap-y-6">
                                <div class="flex items-center space-x-2">
                                    <h2 class="uppercase text-[16px] tracking-widest">Growth Executive Summits</h2>
                                    <div class="bg-[#edc01c] h-1 w-1/14"></div>
                                </div>
                                <div>
                                    <h1 class="text-3xl">CEO Climb Event: The Science of Calm, Confident Leadership</h1>
                                </div>
                                <div>
                                    <p class="font-normal text-[16px]">Every decision, obstacle, and success has shaped the leader you are today. The Vistage Executive Summit is your day to build on that experience through expert insights, meaningful peer connection, and practical tools that drive growth.</p>
                                </div>
                                {{-- Button --}}
                                <div>
                                    <button class="cursor-pointer text-xl font-medium">Read More</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
            {{-- CEO Climb Guests --}}
            <div>
                <h1 class="text-[#000000] text-center text-3xl md:text-4xl xl:text-5xl">Past Vistage CEO Climb Guests</h1>
            </div>
            <div class="relative w-full overflow-hidden group">

                <!-- Left Button -->
                <button id="btn-prev"
                    class="absolute left-2 top-1/2 -translate-y-1/2 bg-gray-500 text-white font-bold shadow-md w-10 h-10 
                        rounded-full flex items-center justify-center z-10 
                        hover:scale-110 transition
                        opacity-0 group-hover:opacity-100 md:ml-12">
                    &lt;
                </button>

                <!-- Right Button -->
                <button id="btn-next"
                    class="absolute right-2 top-1/2 -translate-y-1/2 bg-gray-500 text-white font-bold shadow-md w-10 h-10 
                        rounded-full flex items-center justify-center z-10 
                        hover:scale-110 transition
                        opacity-0 group-hover:opacity-100 md:mr-12">
                    &gt;
                </button>

                <!-- Carousel -->
                <div id="carousel" class="flex gap-1 overflow-x-auto scroll-smooth no-scrollbar py-6 md:px-10 justify-center items-center">
                    <!-- CARD 1 -->
                    <div class="flex flex-col items-center w-full md:w-70 shrink-0">
                        <img src="https://www.vistage.com/wp-content/uploads/2022/07/Aaron-Davis.jpg"
                            class="w-full md:w-70 h-50 object-cover">
                        <p class="text-center font-semibold mt-2">Aaron Davis</p>
                    </div>

                    <!-- CARD 2 -->
                    <div class="flex flex-col items-center w-full md:w-70 shrink-0">
                        <img src="https://www.vistage.com/wp-content/uploads/2022/07/Aaron-Davis.jpg"
                            class="w-full md:w-70 h-50 object-cover">
                        <p class="text-center font-semibold mt-2">Alison Levine</p>
                    </div>

                    <!-- CARD 3 -->
                    <div class="flex flex-col items-center w-full md:w-70 shrink-0">
                        <img src="https://www.vistage.com/wp-content/uploads/2022/07/Aaron-Davis.jpg"
                            class="w-full md:w-70 h-50 object-cover">
                        <p class="text-center font-semibold mt-2">AmyK Hutchens</p>
                    </div>

                    <!-- CARD 4 -->
                    <div class="flex flex-col items-center w-full md:w-70 shrink-0">
                        <img src="https://www.vistage.com/wp-content/uploads/2022/07/Aaron-Davis.jpg"
                            class="w-full md:w-70 h-50 object-cover">
                        <p class="text-center font-semibold mt-2">Antarctic Mike</p>
                    </div>

                    <!-- CARD 5 -->
                    <div class="flex flex-col items-center w-full md:w-70 shrink-0">
                        <img src="https://www.vistage.com/wp-content/uploads/2022/07/Aaron-Davis.jpg"
                            class="w-full md:w-70 h-50 object-cover">
                        <p class="text-center font-semibold mt-2">Brett Pyle</p>
                    </div>

                </div>
            </div>


            @component('components.footer')
            @endcomponent
        </div>
    </div>
    <script>
        const btnPlay = document.getElementById("btn-play");
        const videoPopup = document.getElementById("video-popup");
        const videoPlayer = document.getElementById("video-player");
        const btnClose = document.getElementById("btn-close");

        // Open popup + autoplay
        btnPlay.addEventListener("click", () => {
            videoPopup.classList.remove("hidden");
            videoPlayer.play();
        });

        // Close popup using X button
        btnClose.addEventListener("click", () => {
            videoPlayer.pause();
            videoPopup.classList.add("hidden");
        });

        // Optional: Close when clicking background
        videoPopup.addEventListener("click", (e) => {
            if (e.target === videoPopup) {
                videoPlayer.pause();
                videoPopup.classList.add("hidden");
            }
        });
    </script>
    <script>
        const carousel = document.getElementById("carousel");
        const btnPrev = document.getElementById("btn-prev");
        const btnNext = document.getElementById("btn-next");

        btnNext.addEventListener("click", () => {
            carousel.scrollBy({ left: 300, behavior: "smooth" });
        });

        btnPrev.addEventListener("click", () => {
            carousel.scrollBy({ left: -300, behavior: "smooth" });
        });
    </script>

    {{-- Button Join for clim Event --}}
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const btn = document.getElementById('btn-join-event');
            const section = document.getElementById('section-join');

            btn.addEventListener('click', function () {
                section.scrollIntoView({
                    behavior: 'smooth',
                    block: 'start'
                });
            });
        });
    </script>



@endsection