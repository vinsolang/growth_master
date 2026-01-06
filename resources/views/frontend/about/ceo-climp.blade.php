@extends('layout.app')
@section('title', 'About Growth Master')
@section('content')
    <div id="eventPage" class="space-y-45">
        @component('components.navbar')
        @endcomponent

        <div class="relative w-full h-[40vh] md:h-screen top-40">

            <!-- Background Image (NO padding!) -->
            <img src="https://www.vistage.com/wp-content/uploads/2020/10/climb-hero.jpg"
                class="w-full h-full object-cover px-4 md:px-8 xl:px-12">

            <!-- Dark overlay (matches image exactly) -->
            {{-- <div class="absolute inset-0 bg-black/50 w-[95%] h-full object-cover md:px-10 xl:px-20"></div> --}}

            <!-- Text content (padding allowed here) -->
            <div class="absolute inset-0 flex flex-col justify-center items-start px-8 md:px-16 lg:px-24 text-white">

                <h1 class="text-[16px] md:text-[18px] lg:text-[25px] font-normal mb-3 md:px-10 xl:px-12 lg:-mt-4">
                    What Is the Climb?
                </h1>

                <p
                    class="text-[25px] md:text-[45px] lg:text-[55px] font-semibold max-w-[940px] leading-tight mb-3 md:px-10 xl:px-12 md:py-20">
                    Endless. Limitless. The Journey of a Vistage leader is life-long.
                </p>
            </div>
        </div>
        <div class="space-y-10">
            {{-- Growth Master Events Types --}}
            <div class="space-y-6">
                <p class="max-w-7xl mx-auto text-left text-[#343434] font-regular text-[17px] md:text-[20px] px-4">
                    The journey to true leadership isn’t easy. Like climbing Denali, K2 or Everest, it’s the challenge of a
                    lifetime. It’s for those with enough grit and commitment to do what only a few can do.
                </p>
                <p class="max-w-7xl mx-auto text-left text-[#343434] font-regular text-[17px] md:text-[20px] px-4">
                    While each CEO’s journey up the mountain is their own…They don’t have to do it alone.
                </p>
                <p class="max-w-7xl mx-auto text-left text-[#343434] font-regular text-[17px] md:text-[20px] px-4">
                    While your next leadership peak is yours to define, our process helps you get there.
                </p>
            </div>
            {{-- Logo --}}
            <div class="text-[#000000] max-w-7xl mx-auto text-center text-3xl md:text-4xl xl:text-5xl px-4">
                <h1>Growth Master knows this climb.</h1>
            </div>

            <div class="flex flex-col md:flex-row justify-center items-center gap-8">
                <!-- Card 1 -->
                <div class="w-full md:max-w-sm lg:h-[500px] bg-white rounded-lg shadow-md overflow-hidden border border-gray-200">
                    <!-- Image -->
                    <div class="h-[220px] w-full overflow-hidden">
                        <img src="https://www.vistage.com/wp-content/uploads/2020/10/a-history-of-success.jpg" alt="Growing faster"
                            class="w-full h-full object-cover" />
                    </div>

                    <!-- Content -->
                    <div class="p-6">
                        <h3 class="text-[#003a5d] font-bold text-xl leading-snug mb-4">
                            Helping CEOs climb for 65 years
                        </h3>

                        <p class="text-gray-600 text-base leading-relaxed">
                           We’ve seen this climb over and over for more than 65 years. 
                           Brave men and women running SMB companies against all odds. 
                           Helping each other be better.
                        </p>
                    </div>
                </div>

                <!-- Card 2 -->
                <div class="w-full md:max-w-sm lg:h-[500px] bg-white rounded-lg shadow-md overflow-hidden border border-gray-200">
                    <!-- Image -->
                    <div class="h-[220px] w-full overflow-hidden">
                        <img src="https://www.vistage.com/wp-content/uploads/2020/10/shared-path.jpg" alt="Growing faster"
                            class="w-full h-full object-cover" />
                    </div>

                    <!-- Content -->
                    <div class="p-6">
                        <h3 class="text-[#003a5d] font-bold text-xl leading-snug mb-4">
                           More than 45,000 other CEOs climb with you
                        </h3>

                        <p class="text-gray-600 text-base leading-relaxed">
                           Vistage leaders step up to help one another, applying core beliefs, 
                           insights and best practices that have made their climbs more successful. 
                           Follow in the footsteps of 45,000+ business leaders worldwide.
                        </p>
                    </div>
                </div>

                <!-- Card 3 -->
                <div class="w-full md:max-w-sm lg:h-[500px] bg-white rounded-lg shadow-md overflow-hidden border border-gray-200">
                    <!-- Image -->
                    <div class="h-[220px] w-full overflow-hidden">
                        <img src="https://www.vistage.com/wp-content/uploads/2020/10/climb-business-sky.jpg" alt="Growing faster"
                            class="w-full h-full object-cover" />
                    </div>

                    <!-- Content -->
                    <div class="p-6">
                        <h3 class="text-[#003a5d] font-bold text-xl leading-snug mb-4">
                            Growing 4.6% faster and climbing higher
                        </h3>

                        <p class="text-gray-600 text-base leading-relaxed">
                            Vistage CEO members grew their annual revenue on average by
                            <span class="font-semibold text-gray-700">4.6%</span> in 2020,
                            while nonmembers with comparable small and midsize businesses
                            saw revenue decrease by
                            <span class="font-semibold text-gray-700">4.7%</span>.
                        </p>
                    </div>
                </div>

            </div>

            {{-- Form Contact information --}}
            <div>
                @include('frontend.include.form')
            </div>

            @component('components.footer')
            @endcomponent
        </div>
    </div>

    <script>
        document.addEventListener("DOMContentLoaded", () => {
            const menu = document.getElementById("growthMenu");
            const wrapper = document.getElementById("growthMenuWrapper");
            const offsetTop = wrapper.offsetTop;

            window.addEventListener("scroll", () => {
                if (window.scrollY >= offsetTop - 64) {
                    menu.classList.add(
                        "fixed",
                        "top-24",
                        "left-0",
                        "w-full",
                        "z-40",
                        "shadow-md"
                    );
                } else {
                    menu.classList.remove(
                        "fixed",
                        "top-24",
                        "left-0",
                        "w-full",
                        "z-40",
                        "shadow-md"
                    );
                }
            });
        });
    </script>

@endsection