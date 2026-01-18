@extends('layout.app')
@section('title', 'CEO’s 7 Laws of Leadership')
@section('content')
    <div id="eventPage" class="space-y-45">
        @component('components.navbar')
        @endcomponent

        <div class="relative w-full h-[40vh] md:h-screen top-40">

            <!-- Background Image (NO padding!) -->
            <img src="https://cac-center.edu.kh/wp-content/uploads/2017/12/476341864_610433894942299_7957939987115653297_n-1024x682.jpg"
                class="w-full h-full object-cover px-4 md:px-8 xl:px-12">

            <!-- Dark overlay (matches image exactly) -->
            {{-- <div class="absolute inset-0 bg-black/50 w-[95%] h-full object-cover md:px-10 xl:px-20"></div> --}}

            <!-- Text content (padding allowed here) -->
            <div
                class="absolute inset-0 flex flex-col justify-center items-start px-8 md:px-16 lg:px-24 text-white space-y-4 bg-black/50">

                <h1 class="text-[18px] md:text-[20px] lg:text-[25px] font-normal mb-3 md:px-10 xl:px-12 lg:-mt-4">
                    About Growth Master
                </h1>

                <p
                    class="text-[25px] md:text-[50px] lg:text-[60px] font-semibold max-w-[940px] leading-tight mb-3 md:px-10 xl:px-12 md:py-4">
                    Living the CEO’s 7 Laws of Leadership
                </p>

                <h1 class="text-[18px] md:text-[20px] lg:text-[25px] font-bold mb-3 md:px-10 xl:px-12 lg:-mt-4">
                    If you’re ready for the climb of a lifetime, use these leadership laws to guide your decisions
                </h1>
                {{-- Buuton Free for PDF --}}
                <div class="flex flex-col justify-center items-center mt-10 md:px-10 xl:px-12">
                    <button class="group py-6 px-12 text-[16px] md:text-[18px] border border-[#003F5F]
                                text-[#000000] font-semibold bg-white rounded-t 
                                transition-all duration-300 ease-in-out
                                hover:bg-[#003F5F] hover:text-white">

                        Free PDF Guide
                        <span class="ms-3 transition-all duration-300 ease-in-out group-hover:text-white">
                            <i class="fa-solid fa-angle-right"></i>
                        </span>
                    </button>
                    <div class="bg-amber-500 h-1 rounded-t w-full"></div>
                </div>
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
                <p class="max-w-7xl mx-auto text-left text-[#343434] font-regular text-[17px] md:text-[20px] px-4">
                    At Growth Master, these leadership laws guide our organization’s members and leaders. As a CEO,
                    you are in the business of making decisions and it’s the outcome of those decisions that define your
                    success.
                    So how do you rise to the challenge day after day, year over year?
                </p>
                <p class="max-w-7xl mx-auto text-left text-[#343434] font-regular text-[17px] md:text-[20px] px-4">
                    This leadership path has been traveled by 250,000+ top performing business leaders for more than 65
                    years.
                    It requires a daily climb, constant rigor and a lifelong commitment.
                    But the journey is well worth the effort, for it will bring you to peaks you never thought possible.
                </p>
                <p
                    class="max-w-7xl mx-auto text-left text-[#333333] font-bold font-regular text-[17px] md:text-[20px] px-4">
                    These 7 fundamental truths are how world-class leaders and peak
                    performers take their businesses — and their lives — to a whole new level:
                </p>
            </div>
            {{-- Block Image for poster --}}
            <div class="lg:ml-28">
                @php
                    $cards = [
                        [
                            'image' => 'https://cac-center.edu.kh/wp-content/uploads/2025/05/475764412_610434131608942_8875000787547266503_n-768x512.jpg',
                            'text' => 'Great leaders pursue leadership excellence with the commitment of a world-class athlete. They know it’s a challenging, continuous journey that requires hard work and determined attention.

                                                                            They reject shortcuts and take ownership of their development.

                                                                            They bring rigor and grit, working hard to hone their expertise and committing their whole selves to continual improvement. They push themselves to learn more, grow further and reach higher elevations.
                                                                            ',
                            'title' => '1. Reject shortcuts'
                        ],
                        [
                            'image' => 'https://cac-center.edu.kh/wp-content/uploads/2025/05/475764412_610434131608942_8875000787547266503_n-768x512.jpg',
                            'text' => 'Successful leaders routinely carve out time and space away from everyday business issues to reflect, acquire new knowledge and focus on strategy.

This discipline allows them to gain the clarity and perspective they need to navigate the day-to-day challenges while keeping their company on course for long-term success.

They fight the instinct to always be in “go” mode, forcing themselves to take time for thoughtful decisions.',
                            'title' => '2. Create space to work on the business'
                        ],
                    ];
                @endphp
                <div class="flex flex-col space-y-7">
                    @foreach($cards as $index => $card)

                        <div
                            class="flex flex-col lg:flex-row justify-center items-center lg:space-y-0 space-y-8 bg-[#d9ebf4] w-full lg:w-[90%] md:h-[700px]">

                            {{-- TEXT --}}
                            <div class="flex flex-col justify-center items-start lg:w-1/2 w-full lg:h-[480px] order-2 space-y-10 md:py-0 py-4
                                                {{ $index % 2 == 0 ? 'lg:order-1' : 'lg:order-2' }}
                                            ">
                                <h1 class="text-[#000000] lg:text-5xl text-2xl font-semibold text-left px-4 md:px-12">
                                    {{ $card['title'] }}
                                </h1>
                                <p class="text-left text-[#454545] md:text-xl text-[14px] px-4 md:px-12">
                                    {{ $card['text'] }}
                                </p>
                            </div>
                            {{-- IMAGE --}}
                            <div class="lg:w-1/2 w-full lg:h-[90%] order-1 lg:py-4
                                                {{ $index % 2 == 0 ? 'lg:order-2' : 'lg:order-1' }}
                                            ">
                                <img src="{{ $card['image'] }}" class="w-full h-full object-cover">
                            </div>

                        </div>

                    @endforeach
                </div>
            </div>

            {{-- Powers performance --}}
            {{-- <div class="space-y-10">
                <h1
                    class="text-[#000000] md:max-w-7xl mx-auto md:text-left text-center text-3xl md:text-4xl xl:text-5xl px-4">
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
                            'text' => 'It started simply enough: Businessman Bob Nourse brought together several Milwaukee-area executives in 1957 to help each other solve their businesses challenges. He made sure they were from non-competing industries and kept conversations confidential. He also brought in business experts to share their insights.',
                            'title' => 'Mark Marmo',
                            'name' => 'CEO, Deep Well Services'

                        ],
                        [
                            'video' => 'https://www.vistage.com/wp-content/uploads/2019/09/Bob-nourse-with-original-vistage-group-1957.jpg',
                            'text' => 'It started simply enough: Businessman Bob Nourse brought together several Milwaukee-area executives in 1957 to help each other solve their businesses challenges. He made sure they were from non-competing industries and kept conversations confidential. He also brought in business experts to share their insights.',
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
                                <img src="{{ $video['video'] }}" class="w-full h-full object-cover">
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

            {{-- Our Members at a Glance --}}
            {{-- <div class="space-y-6">
                <h1
                    class="text-[#000000] md:max-w-7xl mx-auto md:text-left text-center text-3xl md:text-4xl xl:text-5xl px-4">
                    Our Members at a Glance
                </h1>
                <p class="max-w-7xl mx-auto text-left text-[#343434] font-regular text-[17px] md:text-[20px] px-4">
                    Growth Master members represent nearly every industry across a range of small to large businesses.
                    This diversity is key to furnishing advisory boards of members from non-competing industries,
                    and providing you with relevant expertise, regardless of your industry or company size.
                </p>
                
                <div class="w-[90%] md:w-[70%] mx-auto">
                    <img src="https://www.vistage.com/wp-content/uploads/2019/09/Our-members-at-a-glance.jpg" alt=""
                        class="w-full object-cover">
                </div>
            </div> --}}

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

    const referralSources = ['member', 'chair', 'speaker','google','media'];

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