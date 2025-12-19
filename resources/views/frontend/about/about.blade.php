@extends('layout.app')

@section('content')
    <div id="eventPage" class="space-y-45">
        @component('components.navbar')
        @endcomponent

        <div class="relative w-full h-[40vh] md:h-screen top-40">

            <!-- Background Image (NO padding!) -->
            <img src="https://www.vistage.com/wp-content/uploads/2019/09/HERO2020-18.jpg"
                class="w-full h-full object-cover px-4 md:px-8 xl:px-12">

            <!-- Dark overlay (matches image exactly) -->
            {{-- <div class="absolute inset-0 bg-black/50 w-[95%] h-full object-cover md:px-10 xl:px-20"></div> --}}

            <!-- Text content (padding allowed here) -->
            <div class="absolute inset-0 flex flex-col justify-center items-start px-8 md:px-16 lg:px-24 text-white">

                <h1 class="text-[16px] md:text-[18px] lg:text-[25px] font-normal mb-3 md:px-10 xl:px-12 lg:-mt-4">
                    About Growth Master
                </h1>

                <p
                    class="text-[25px] md:text-[45px] lg:text-[55px] font-semibold max-w-[940px] leading-tight mb-3 md:px-10 xl:px-12 md:py-20">
                    A model for success that CEOs have relied on for 65 years.
                </p>

            </div>
        </div>
        <div class="space-y-10">
            <!-- SPACER for navbar -->
            <div class=""></div>
            {{-- Type of About Growth Master --}}
            <!-- BUTTON SECTION -->
            <div id="growthMenuWrapper" class="relative">
                <div id="growthMenu"
                    class="py-4 flex flex-wrap justify-center items-center space-x-4 gap-y-4 overflow-x-auto bg-white transition-all duration-300">
                    
                    <a href="#" class="border-2 border-[#124d6b] text-[#124d6b] hover:text-white hover:bg-[#124d6b] p-3 font-medium">
                        About Growth Master
                    </a>
                    <a href="#" class="border-2 border-[#124d6b] text-[#124d6b] hover:text-white hover:bg-[#124d6b] p-3 font-medium">
                        What is Growth Master
                    </a>
                    <a href="#" class="border-2 border-[#124d6b] text-[#124d6b] hover:text-white hover:bg-[#124d6b] p-3 font-medium">
                        Leadership Laws
                    </a>
                    <a href="#" class="border-2 border-[#124d6b] text-[#124d6b] hover:text-white hover:bg-[#124d6b] p-3 font-medium">
                        The CEO's Climb
                    </a>
                    <a href="#" class="border-2 border-[#124d6b] text-[#124d6b] hover:text-white hover:bg-[#124d6b] p-3 font-medium">
                        Executive Team
                    </a>
                    <a href="#" class="border-2 border-[#124d6b] text-[#124d6b] hover:text-white hover:bg-[#124d6b] p-3 font-medium">
                        Board
                    </a>
                    <a href="#" class="border-2 border-[#124d6b] text-[#124d6b] hover:text-white hover:bg-[#124d6b] p-3 font-medium">
                        Locations
                    </a>
                    <a href="#" class="border-2 border-[#124d6b] text-[#124d6b] hover:text-white hover:bg-[#124d6b] p-3 font-medium">
                        Press
                    </a>
                    <a href="#" class="border-2 border-[#124d6b] text-[#124d6b] hover:text-white hover:bg-[#124d6b] p-3 font-medium">
                        Careers
                    </a>
                </div>
            </div>

            {{-- Vistage Events Types --}}
            <div class="space-y-6">
                {{-- Title --}}
                <h1 class="text-[#000000] max-w-7xl mx-auto text-left text-3xl md:text-4xl xl:text-5xl px-4">
                    Helping high-integrity leaders make great decisions that benefit their companies, families and communities.
                </h1>
                <p class="max-w-7xl mx-auto text-left text-[#343434] font-regular text-[17px] md:text-[20px] px-4">
                    Vistage is the world’s largest executive coaching organization for small and midsize businesses.
                    For more than 65 years we’ve been helping CEOs, business owners and key executives solve their toughest
                    challenges through a comprehensive approach to success. At the heart of our proven formula is
                    confidential peer advisory groups and executive coaching sessions.
                </p>
            </div>
            {{-- Logo --}}
            <div class="w-64 h-64 mx-auto">
                <img src="{{ asset('assets/logo.png') }}" alt="LOGO" class="object-cover">
            </div>

            {{-- @@@@  --}}
            <div class="bg-[#124d6b] gap-10 md:gap-10 lg:gap-20 xl:gap-20 p-12">
                <div class="text-white py-12 px-4 sm:px-6 lg:px-8">
                    <div class="max-w-7xl mx-auto">
                        <div class="grid grid-cols-1 gap-12 md:grid-cols-3 lg:gap-80 md:gap-20">

                            <div class="text-center">
                                <h2 class="text-4xl sm:text-6xl font-semibold text-white mb-2">
                                45,000
                                </h2>
                                <p class="text-xl sm:text-2xl font-semibold tracking-wide mb-4">
                                member
                                </p>
                                <p class="bg-[#edc01c] w-12 h-0.5 flex mx-auto">
                                </p>
                            </div>

                            <div class="text-center">
                                <h2 class="text-4xl sm:text-6xl font-semibold text-white mb-2">
                                40
                                </h2>
                                <p class="text-xl sm:text-2xl font-semibold tracking-wide mb-4">
                                countries
                                </p>
                                <p class="bg-[#edc01c] w-12 h-0.5 flex mx-auto"></p>
                            </div>

                            <div class="text-center">
                                <h2 class="text-4xl sm:text-6xl font-semibold text-white mb-2">
                                65+
                                </h2>
                                <p class="text-xl sm:text-2xl font-semibold tracking-wide mb-4">
                                years
                                </p>
                                <p class="bg-[#edc01c] w-12 h-0.5 flex mx-auto"></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="py-2">
                <h1 class="text-[#000000] max-w-7xl mx-auto text-center text-3xl md:text-4xl xl:text-5xl px-4">
                    The Vistage story: 65 years of cultivating success
                </h1>
                {{-- Growth Master of story --}}
                @php
                    $cards = [
                    [
                        'image' => 'https://www.vistage.com/wp-content/uploads/2019/09/Bob-nourse-with-original-vistage-group-1957.jpg',
                        'text'  => 'It started simply enough: Businessman Bob Nourse brought together several Milwaukee-area executives in 1957 to help each other solve their businesses challenges. He made sure they were from non-competing industries and kept conversations confidential. He also brought in business experts to share their insights.'
                    ],
                    [
                        'image' => 'https://www.vistage.com/wp-content/uploads/2019/09/Richard-wong-on-mount-everest-summit.jpg',
                        'text'  => 'Nourse’s formula spurred such remarkable success that it wasn’t long before his Midwestern business became a thriving international company with 45,000 members in 40 countries.'
                    ],
                    [
                        'image' => 'https://www.vistage.com/wp-content/uploads/2019/09/VES-group-back-of-female-CEO-audience-member.jpg',
                        'text'  => 'Nourse’s formula spurred such remarkable success that it wasn’t long before his Midwestern business became a thriving international company with 45,000 members in 40 countries.'
                    ],
                ];
                @endphp
                <div class="flex flex-col justify-center items-center py-12 max-w-[80%] mx-auto">
                    @foreach($cards as $index => $card)

                        <div class="flex flex-col lg:flex-row items-center">

                            {{-- IMAGE --}}
                            <div class="lg:w-[40%] lg:h-[350px] order-1
                                {{ $index % 2 == 0 ? 'lg:order-1' : 'lg:order-2' }}
                            ">
                                <img src="{{ $card['image'] }}"
                                    class="w-full h-full object-cover">
                            </div>

                            {{-- TEXT --}}
                            <div class="flex justify-center items-center bg-[#ededed] lg:w-[60%] lg:h-[480px] order-2
                                {{ $index % 2 == 0 ? 'lg:order-2' : 'lg:order-1' }}
                            ">
                                <p class="text-left lg:max-w-[70%] mx-auto text-[#454545] md:text-xl text-[18px] px-4">
                                    {{ $card['text'] }}
                                </p>
                            </div>

                        </div>

                    @endforeach
                </div>
            </div>

            {{-- Powers performance --}}
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