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
    <div id="eventPage" class="">
        @component('components.navbar')
        @endcomponent

        <section class="py-40">
        <h1 class="text-[#000000] text-2xl md:text-4xl text-center font-semibold py-6 px-4">
            Apply to Become a Growth Master Chair
        </h1>
        <p class="text-md md:text-lg text-[#333333] max-w-4xl mx-auto px-4">
            Growth Master Chairs mentor high-integrity executives, helping them make better decisions, 
            become better leaders and achieve better results. To learn more about this opportunity, 
            complete this short form and upload your resume/CV/biography. Our Chair selection team will contact you.
        </p>
        <div class="max-w-4xl mx-auto py-6 px-4">
            <!-- Preferred Experience -->
            <h2 class="text-2xl text-gray-900 mb-4">
                Most Chairs have these qualities:
            </h2>

            <ul class="list-disc pl-6 space-y-3 text-[#333333] leading-relaxed text-md md:text-lg">
                <li>P&L responsibility exceeding $5 million</li>
                <li>10+ years of executive experience</li>
                <li>25+ people leader</li>
                <li>Strong business acumen, communication skills, high EQ</li>
                <li>Availability and drive to build their own business</li>
            </ul>
        </div>

        <div id="">
            <form action="{{ route('chair.contact.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="max-w-7xl mx-auto p-6" id="chair-form">
                    <!-- ================= Chair Contact Form ================= -->
                    <h2 class="text-xl font-semibold mb-2">Chair Contact Form</h2>
                    <hr class="mb-6 w-1/2 border-gray-300">

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-x-10 gap-y-6">

                        <!-- First Name -->
                        <div>
                            <input name="firstname" type="text" value="{{ old('firstname') }}"
                                class="w-full h-12 bg-[#e9eff2] rounded-md px-4 focus:outline-none" placeholder="First name*">
                            @error('firstname')
                                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                            @enderror
                        </div>

                        <!-- Last Name -->
                        <div>
                            <input type="text" name="lastname" value="{{ old('lastname') }}"
                                class="w-full h-12 bg-[#e9eff2] rounded-md px-4 focus:outline-none" placeholder="Last name*">
                            @error('lastname')
                                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                            @enderror
                        </div>

                        <!-- Business Email -->
                        <div>
                            <input type="email" name="email" value="{{ old('email') }}"
                                class="w-full h-12 bg-[#e9eff2] rounded-md px-4 focus:outline-none" placeholder="Email Address">
                            @error('email')
                                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                            @enderror
                        </div>

                        <!-- Mobile Phone -->
                        <div>
                            <input type="tel" name="phone" value="{{ old('phone') }}"
                                class="w-full h-12 bg-[#e9eff2] rounded-md px-4 focus:outline-none" placeholder="Phone*">
                            @error('phone')
                                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                            @enderror
                        </div>
                        <select name="member_status" id="" class="w-full h-12 bg-[#e9eff2] text-gray-600 rounded-md px-4 focus:outline-none font-semibold">
                            <option value="">Former/Current Growth Master Member*</option>
                            <option value="yes">Yes</option>
                            <option value="no">No</option>
                        </select>
                        <select name="executive_experience" id="" class="w-full h-12 bg-[#e9eff2] text-gray-600 rounded-md px-4 focus:outline-none font-semibold">
                            <option value="">C-level executive experience*</option>
                            <option value="0-10">0-10</option>
                            <option value="16-20">16-20</option>
                            <option value="20+">20+</option>
                        </select>
                        <select name="staff"
                            class="w-full h-12 bg-[#e9eff2] text-gray-600 rounded-md px-4 focus:outline-none font-semibold">
                            
                            <option value="">Most employees managed*</option>

                            <option value="1-5" {{ old('staff') == '1-5' ? 'selected' : '' }}>1 - 5</option>
                            <option value="6-10" {{ old('staff') == '6-10' ? 'selected' : '' }}>6 - 10</option>
                            <option value="11-20" {{ old('staff') == '11-20' ? 'selected' : '' }}>11 - 20</option>
                            <option value="21-40" {{ old('staff') == '21-40' ? 'selected' : '' }}>21 - 40</option>
                            <option value="41-70" {{ old('staff') == '41-70' ? 'selected' : '' }}>41 - 70</option>
                            <option value="71-100" {{ old('staff') == '71-100' ? 'selected' : '' }}>71 - 100</option>
                            <option value="100 Above" {{ old('staff') == '100 Above' ? 'selected' : '' }}>100 Above</option>
                        </select>
                    </div>
                    <hr class="bg-[#333333] w-full mt-8">
                    <div class="py-6 md:w-[50%]">
                        <label for="">Pleaser provide a link to your LinkedIn Profile.</label>
                        <input type="text" name="link" value="{{ old('link') }}"
                            class="w-full h-12 bg-[#e9eff2] rounded-md px-4 focus:outline-none" placeholder="https://linkedin.com">
                        @error('link')
                            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                    <p class="text-[#333333] text-lg">OR</p>
                    <div class="py-6 md:w-[50%]">
                        <label for="">Upload your resume or executive bio:</label>
                        <input type="file" name="cv" value="{{ old('cv') }}"
                            class="w-full h-12 bg-[#e9eff2] rounded-md px-4 focus:outline-none">
                        @error('cv')
                            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                        @enderror
                        <label for="">Max. file size: 20 MB.</label>
                    </div>
                    <div class="py-6 md:w-[50%]">
                        <textarea name="comment" id="" placeholder="comments" class="w-full bg-[#e9eff2] rounded-md px-4 focus:outline-none" rows="6"></textarea>
                        @error('comment')
                            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                    <p class="text-[#333333] text-lg">*Indicates Response Required</p>
                </div>

                <div class="flex justify-center text-xl mt-10">
                    <button type="submit"
                        class="inline-flex items-center justify-center w-72 h-14 bg-[#68875d] text-[#ffffff] font-semibold uppercase cursor-pointer">
                        Become a member
                    </button>
                </div>
            </form>
        </div>
        <div class="py-24">
             @component('components.footer')
            @endcomponent
        </div>
    </section>
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