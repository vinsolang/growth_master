@extends('layout.app')
@section('title', 'About Growth Master')
@section('content')
    <div id="eventPage" class="space-y-45">
        @component('components.navbar')
        @endcomponent

        <div class="relative w-full h-[40vh] md:h-screen top-40">

            <!-- Background Image (NO padding!) -->
            <img src="https://www.vistage.com/wp-content/uploads/2024/04/hero-meet-vistage-chairs.jpg"
                class="w-full h-full object-cover px-4 md:px-8 xl:px-12">

            <!-- Dark overlay (matches image exactly) -->
            {{-- <div class="absolute inset-0 bg-black/50 w-[95%] h-full object-cover md:px-10 xl:px-20"></div> --}}

            <!-- Text content (padding allowed here) -->
            <div class="absolute inset-0 flex flex-col justify-center items-start px-8 md:px-16 lg:px-24 text-white">

                <h1 class="text-[16px] md:text-[18px] lg:text-[25px] font-normal mb-3 md:px-10 xl:px-12 lg:-mt-4">
                    Meet our CEO coaches
                </h1>

                <p
                    class="text-[25px] md:text-[45px] lg:text-[55px] font-semibold max-w-[940px] leading-tight mb-3 md:px-10 xl:px-12 md:py-20">
                    Guiding business leaders to greater success.
                </p>
            </div>
        </div>
        <div class="space-y-10">
            {{-- Title --}}
            <div class="text-[#000000] max-w-7xl mx-auto text-center text-3xl md:text-4xl xl:text-5xl px-4">
                <h1>Growth Master Chairs Help Leaders Reach Their Full Potential.</h1>
            </div>
            <div class="text-[#000000] max-w-7xl mx-auto text-center text-2xl md:text-3xl xl:text-3xl px-4">
                <h1>In return, they make a lifelong impact, enjoy limitless rewards and leave a lasting legacy.</h1>
            </div>

            {{-- @@@ --}}
            <section class="max-w-[90%] mx-auto px-6 py-16">
                <div class="grid grid-cols-1 lg:grid-cols-3 gap-10 items-start">

                    <!-- LEFT CARD -->
                    <div class="bg-white rounded-lg shadow-md border border-gray-200 p-10 text-center">
                        <!-- Avatar -->
                        <div class="flex justify-center mb-6">
                            <img
                                src="https://www.vistage.com/wp-content/uploads/2025/05/Ola-Sage-200.jpg"
                                alt="Ola Sage"
                                class="w-28 h-28 rounded-full object-cover"
                            />
                        </div>

                        <!-- Name -->
                        <h2 class="text-2xl font-semibold text-gray-900 mb-2">
                            Ola Sage
                        </h2>

                        <!-- Meta -->
                        <p class="text-gray-700 font-medium">
                            Silver Spring, Maryland
                        </p>
                        <p class="text-gray-700 mb-8">
                            Gowth Master Chair since 2019
                        </p>

                        <!-- Quote -->
                        <p class="text-gray-600 text-lg leading-relaxed italic">
                            “When I thought about retiring, I realized I still wanted to be
                            involved in business. Being an executive coaching is not just
                            something I do – it’s part of who I am.”
                        </p>
                    </div>

                    <!-- RIGHT VIDEO -->
                    <div class="lg:col-span-2">
                        <div class="relative rounded-lg overflow-hidden shadow-lg bg-black">
                            <video
                                controls
                                class="w-full h-[480px] object-cover"
                                poster="https://i.vimeocdn.com/video/1678179469-87c455e18540e5d997366d2f6f6e7be17280986af11ceb58fcfacce0fbc41cea-d?mw=1200&mh=675&q=70"
                            >
                                <source src="{{ asset('assets/profile-chair.mp4') }}" type="video/mp4">
                                Your browser does not support the video tag.
                            </video>
                        </div>

                        <!-- Caption -->
                        <p class="mt-4 text-gray-800 text-2xl font-semibold">
                            John Trakselis, Chicago, IL Growth Master Chair since 2006
                        </p>
                        <p class="mt-4 text-gray-800 text-xl font-normal">
                            “As a Growth Master Chair you help CEOs become better leaders, make better decisions and achieve better results.”
                        </p>
                    </div>

                </div>
            </section>

            <section class="max-w-[90%] mx-auto ">
                
            </section>

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