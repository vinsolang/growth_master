@extends('layout.app')
@section('title', 'Growth Master | Per-to-Per')
@section('content')
    <div id="eventPage" class="space-y-45">
        @component('components.navbar')
        @endcomponent

        <div class="relative w-full h-[40vh] md:h-screen top-24">

            <!-- Background Image (NO padding!) -->
            {{-- <img
                src="https://cac-center.edu.kh/wp-content/uploads/2017/12/476341864_610433894942299_7957939987115653297_n-1024x682.jpg"
                class="w-full h-full object-cover px-4 md:px-8 xl:px-12"> --}}
            @if(!empty($getBanner) && $getBanner[15]->title === 'Small Business Program')
                <img src="{{ asset('assets/banner/' . $getBanner[15]->image) }}"
                    class="w-full h-full object-cover px-4 md:px-8 xl:px-12" alt="Hero Image">
            @endif

            <!-- Dark overlay (matches image exactly) -->
            {{-- <div class="absolute inset-0 bg-black/50 w-[95%] h-full object-cover md:px-10 xl:px-20"></div> --}}

            <!-- Text content (padding allowed here) -->
            <div
                class="absolute inset-0 flex flex-col justify-center items-start px-8 md:px-16 lg:px-24 text-white space-y-4 bg-black/50">

                <h1 class="text-[18px] md:text-[20px] lg:text-[35px] font-normal mb-3 md:px-10 xl:px-12 lg:-mt-4">
                    @if(!empty($getBanner) && $getBanner[15]->title === 'Small Business Program')
                        {{ $getBanner[15]->name }}
                    @endif
                </h1>

                <p
                    class="text-[12px] md:text-[18px] font-medium max-w-[940px] leading-tight mb-3 md:px-10 xl:px-12 md:py-4">
                    @if(!empty($getBanner) && $getBanner[15]->title === 'Small Business Program')
                        {!! nl2br(e(value: $getBanner[15]->content)) !!}
                    @endif
                </p>
            </div>
        </div>
        <div class="space-y-10">
            <div class="space-y-6">
                <p class="max-w-5xl mx-auto text-left text-[#343434] font-regular text-[17px] md:text-[20px] px-4">
                    When running a small business you face new challenges every day. Your resources are stretched,
                    competition is fierce and you have to keep up with a constantly changing marketplace.
                </p>
                <p class="max-w-5xl mx-auto text-left text-[#343434] font-regular text-[17px] md:text-[20px] px-4">
                    The Growth Master Small Business program gives you a forum to rise above the urgent and focus on what’s
                    most critical: tough,
                    strategic decisions that will drive your business forward and grow it faster.
                </p>
            </div>

            <section class="relative w-full min-h-screen">

                <!-- Background Image -->
                <img src="https://www.vistage.com/wp-content/uploads/2019/09/2020-Hero-Three-business-professionals-having-small-meeting-on-a-couch-1024x524.jpg"
                    class="absolute inset-0 w-full h-full object-cover" alt="">

                <!-- Dark Blue Overlay -->
                <div class="absolute inset-0 bg-[#68875d]/90"></div>

                <!-- Content -->
                <div class="relative max-w-6xl mx-auto px-8 py-20 text-white">

                    <!-- Title -->
                    <h2 class="text-xl font-semibold mb-12">
                        Designed for the challenges of small business owners.
                    </h2>

                    <!-- Grid Layout -->
                    <div class="grid md:grid-cols-3">

                        <!-- LEFT SIDE (Challenges) -->
                        <div class="space-y-12">

                            <!-- Item -->
                            <div>
                                <p class="font-semibold italic mb-2">Challenge:</p>
                                <p class="text-lg leading-relaxed text-gray-200">
                                    You make all of the important decisions on your own and worry that you are missing
                                    something.
                                </p>
                            </div>

                            <div>
                                <p class="font-semibold italic mb-2">Challenge:</p>
                                <p class="text-lg leading-relaxed text-gray-200">
                                    You are doing it all, and your business is limited by your capacity.
                                </p>
                            </div>

                            <div>
                                <p class="font-semibold italic mb-2">Challenge:</p>
                                <p class="text-lg leading-relaxed text-gray-200">
                                    You’re mired in day-to-day operations with a limited staff, stretched resources and no
                                    time for big-picture strategy.
                                </p>
                            </div>

                            <div>
                                <p class="font-semibold italic mb-2">Challenge:</p>
                                <p class="text-lg leading-relaxed text-gray-200">
                                    You struggle to find, develop and retain the right employees to build a productive and
                                    positive company culture.
                                </p>
                            </div>

                        </div>
                         <!-- CENTER ARROWS -->
                        <div class="hidden md:flex flex-col justify-between items-center py-2">
                            
                            <div class="text-[#ffffff] text-8xl">→</div>
                            <div class="text-[#ffffff] text-8xl">→</div>
                            <div class="text-[#ffffff] text-8xl">→</div>
                            <div class="text-[#ffffff] text-8xl">→</div>

                        </div>
                        <!-- RIGHT SIDE (Solutions) -->
                        <div class="space-y-12">

                            <div>
                                <p class="font-semibold mb-2">Solution:</p>
                                <p class="text-lg leading-relaxed text-gray-200">
                                    Get unbiased, confidential guidance from an experienced Growth Master Chair and group of peers
                                    who have faced similar challenges.
                                </p>
                            </div>

                            <div>
                                <p class="font-semibold mb-2">Solution:</p>
                                <p class="text-lg leading-relaxed text-gray-200">
                                    Learn how to bring structure, systems and processes to your operations to create
                                    sustainable growth and give you leverage.
                                </p>
                            </div>

                            <div>
                                <p class="font-semibold mb-2">Solution:</p>
                                <p class="text-lg leading-relaxed text-gray-200">
                                    Free yourself up by working on your business with CEOs who have faced similar challenges
                                    and with guidance from an executive coach.
                                </p>
                            </div>

                            <div>
                                <p class="font-semibold mb-2">Solution:</p>
                                <p class="text-lg leading-relaxed text-gray-200">
                                    Access expert resources to implement business strategies around hiring, managing and
                                    engaging employees.
                                </p>
                            </div>

                        </div>

                    </div>

                </div>

            </section>

            {{-- Button Become a member --}}
            <div class="flex justify-center items-center mt-10 px-8 md:px-16 lg:px-12">
                <a href="{{ route('home') }}#member-form"
                    class="group py-3 px-[25px] text-[16px] md:text-[18px] bg-[#68875d]
                    text-[#ffffff] rounded 
                    transition-all duration-300 ease-in-out
                    hover:bg-[#68875d] hover:text-white font-semibold">

                    Become A Member

                    <span class="ms-3 transition-all duration-300 ease-in-out group-hover:text-white">
                        <i class="fa-solid fa-angle-right"></i>
                    </span>
                </a>
            </div>

            {{-- Inquire About Membership --}}
            <div class="space-y-6">
                <h1
                    class="text-[#000000] md:max-w-7xl mx-auto md:text-left text-center text-3xl md:text-4xl xl:text-5xl px-4">
                    Inquire About Membership
                </h1>
                <p class="max-w-7xl mx-auto text-left text-[#343434] font-regular text-[17px] md:text-[20px] px-4">
                    With Growth Master you’re joining a powerful community of high-caliber
                    executives who challenge each other, inspire each other and share
                    their perspectives to help each other make better decisions,
                    become better leaders and achieve better outcomes.
                </p>
                <p class="max-w-7xl mx-auto text-left text-[#343434] font-regular text-[17px] md:text-[20px] px-4">
                    Take your success to a new level. Complete the form below to find out if you qualify.
                </p>
                {{-- Form Contact information --}}
                <div>
                   @include('frontend.include.form')
                </div>
            </div>
            {{-- Frequently asked questions --}}
        <div class="relative w-full">
            @include('frontend.include.faqs')
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
    <script>
        document.addEventListener("DOMContentLoaded", () => {
            if (sessionStorage.getItem("scrollPos")) {
                window.scrollTo(0, sessionStorage.getItem("scrollPos"));
                sessionStorage.removeItem("scrollPos");
            }

            document.querySelector("form")?.addEventListener("submit", () => {
                sessionStorage.setItem("scrollPos", window.scrollY);
            });
        });
    </script>
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            const sourceSelect = document.getElementById("sourceSelect");
            const referFields = document.getElementById("referFields");

            const referralSources = ['member', 'chair', 'speaker', 'google', 'media'];

            function toggleReferFields() {
                if (referralSources.includes(sourceSelect.value)) {
                    referFields.classList.remove("hidden");
                } else {
                    referFields.classList.add("hidden");
                }
            }

            // On change
            sourceSelect.addEventListener("change", toggleReferFields);

            // On page load (for validation errors)
            toggleReferFields();
        });
    </script>



@endsection