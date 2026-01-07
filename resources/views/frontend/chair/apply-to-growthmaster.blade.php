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

        <div class="space-y-96">
            <div class="relative w-full h-[80vh] md:h-screen top-16 py-24">
                 <div>
                    <h1 class="text-[#000000] text-3xl md:text-5xl text-center font-semibold">
                        Become a Growth Master Chair
                    </h1>
                    <p class="text-[#333333] text-xl md:text-2xl text-center py-4 w-[60%] mx-auto">
                        Growth Master Chairs mentor high-integrity executives, 
                        helping them make better decisions, become better leaders and achieve better results.
                    </p>
                    <p class="text-[#333333] text-xl md:text-2xl text-center py-4 w-[60%] mx-auto">
                       To learn more about this role, complete this short form and upload your resume/CV/biography. 
                       Our Chair selection team will be in touch shortly.
                    </p>
                </div>
                @include('frontend.include.form')
            </div>
            <div class="relative lg:top-52 md:top-64 top-240">
                @component('components.footer')
                @endcomponent
            </div>
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