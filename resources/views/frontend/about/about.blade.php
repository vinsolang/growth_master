@extends('layout.app')
@section('title', 'About Growth Master')
@section('content')
    <div id="eventPage" class="space-y-45">
        @component('components.navbar')
        @endcomponent

        <div class="relative w-full h-[40vh] md:h-screen top-40">

            <!-- Background Image (NO padding!) -->
            <img src="https://cac-center.edu.kh/wp-content/uploads/2017/12/476130730_610434091608946_2648315335922836771_n-1280x800.jpg"
                class="w-full h-full object-cover px-4 md:px-8 xl:px-12">

            <!-- Dark overlay (matches image exactly) -->
            {{-- <div class="absolute inset-0 bg-black/50 w-[95%] h-full object-cover md:px-10 xl:px-20"></div> --}}

            <!-- Text content (padding allowed here) -->
            <div class="absolute inset-0 flex flex-col justify-center items-start px-8 md:px-16 lg:px-24 text-white bg-black/50">

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
            {{-- <!-- BUTTON SECTION --> --}}
            {{-- <div id="growthMenuWrapper" class="relative">
                @include('frontend.about.button-section-menu-about')
            </div> --}}

            {{-- Growth Master Events Types --}}
            <div class="space-y-6">
                {{-- Title --}}
                <h1 class="text-[#000000] max-w-7xl mx-auto text-left text-3xl md:text-4xl xl:text-5xl px-4">
                    Helping high-integrity leaders make great decisions that benefit their companies, families and communities.
                </h1>
                <p class="max-w-7xl mx-auto text-left text-[#343434] font-regular text-[17px] md:text-[20px] px-4">
                    Growth Master is the world’s largest executive coaching organization for small and midsize businesses.
                    For more than 65 years we’ve been helping CEOs, business owners and key executives solve their toughest
                    challenges through a comprehensive approach to success. At the heart of our proven formula is
                    confidential peer advisory groups and executive coaching sessions.
                </p>
            </div>
            {{-- Logo --}}
            {{-- <div class="w-64 h-64 mx-auto">
                <img src="{{ asset('assets/logo.png') }}" alt="LOGO" class="object-cover">
            </div> --}}

            {{-- @@@@  --}}
            {{-- <div class="bg-[#124d6b] gap-10 md:gap-10 lg:gap-20 xl:gap-20 p-12">
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
            </div> --}}

            {{-- Vision, Mission, Care value --}}
            <div class="py-12">
                @include('frontend.include.vis-mis-core')
            </div>


            {{-- <div class="py-2">
                <h1 class="text-[#000000] max-w-7xl mx-auto text-center text-3xl md:text-4xl xl:text-5xl px-4">
                    The Growth Master story: 65 years of cultivating success
                </h1>
              
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
                <div class="flex flex-col justify-center items-center py-12 max-w-[80%] mx-auto lg:space-y-0 space-y-6">
                    @foreach($cards as $index => $card)

                        <div class="flex flex-col lg:flex-row items-center lg:space-y-0 space-y-4">

                            
                            <div class="lg:w-[40%] w-full lg:h-[350px] order-1
                                {{ $index % 2 == 0 ? 'lg:order-1' : 'lg:order-2' }}
                            ">
                                <img src="{{ $card['image'] }}"
                                    class="w-full h-full object-cover">
                            </div>

                            <div class="flex justify-center items-center bg-[#ededed] lg:w-[60%] w-full lg:h-[480px] order-2
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
             --}}
            {{-- Powers performance --}}
            {{-- <div class="space-y-10">
                <h1 class="text-[#000000] md:max-w-7xl mx-auto md:text-left text-center text-3xl md:text-4xl xl:text-5xl px-4">
                    Growth Master powers performance
                </h1>
                <p class="max-w-7xl mx-auto text-left text-[#343434] font-regular text-[17px] md:text-[20px] px-4">
                    Growth Master CEO members grew their annual revenue on average by 4.6% in 2020, while nonmembers with 
                    comparable small and midsize businesses saw revenue decrease by 4.7% according to an analysis 
                    of Dun & Bradstreet data.
                </p>

                @php
                    $videos = [
                    [
                        'video' => 'https://www.vistage.com/wp-content/uploads/2019/09/Bob-nourse-with-original-vistage-group-1957.jpg',
                        'text'  => 'It started simply enough: Businessman Bob Nourse brought together several Milwaukee-area executives in 1957 to help each other solve their businesses challenges. He made sure they were from non-competing industries and kept conversations confidential. He also brought in business experts to share their insights.',
                        'title' => 'Mark Marmo',
                        'name' => 'CEO, Deep Well Services'

                    ],
                    [
                        'video' => 'https://www.vistage.com/wp-content/uploads/2019/09/Bob-nourse-with-original-vistage-group-1957.jpg',
                        'text'  => 'It started simply enough: Businessman Bob Nourse brought together several Milwaukee-area executives in 1957 to help each other solve their businesses challenges. He made sure they were from non-competing industries and kept conversations confidential. He also brought in business experts to share their insights.',
                        'title' => 'Mark Marmo',
                        'name' => 'CEO, Deep Well Services'
                    ],
                    
                ];
                @endphp
                <div class="flex flex-col justify-center items-center py-12 max-w-[80%] mx-auto lg:space-y-0 space-y-6">
                    @foreach($videos as $index => $video)

                        <div class="flex flex-col lg:flex-row items-center lg:space-y-0 space-y-4">

                            <div class="relative lg:left-10 lg:w-[40%] w-full lg:h-[350px] order-1
                               
                            ">
                                <img src="{{ $video['video'] }}"
                                    class="w-full h-full object-cover">
                            </div>

                          
                            <div class="flex flex-col justify-center bg-[#ededed] lg:w-[60%] w-full lg:h-[480px] order-2 space-y-6 lg:py-0 py-6
                               
                            ">
                                <p class="text-left lg:max-w-[70%] mx-auto text-[#000000] md:text-xl text-[18px] px-4">
                                    {{ $video['text'] }}
                                </p>
                                
                                <div class="bg-[#edc01c] h-1 w-24 lg:ml-[138px] lg:mt-0 ml-4"></div>
                                <div class="lg:ml-[138px] space-y-4 lg:px-0 px-4">
                                    <h1 class="text-2xl font-semibold">{{ $video['title'] }}</h1>
                                    <p class="text-[#454545] md:text-xl text-[18px]">{{ $video['name'] }}</p>
                                </div>
                            </div>

                        </div>
                    @endforeach
                </div>
            </div> --}}
        

            {{-- Inquire About Membership --}}
            <div class="space-y-6">
                <h1 class="text-[#000000] md:max-w-7xl mx-auto md:text-left text-center text-3xl md:text-4xl xl:text-5xl px-4">
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