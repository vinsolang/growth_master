@extends('layout.app')
@section('title', 'Growth Master | Per-to-Per')
@section('content')
    <div id="eventPage" class="space-y-45">
        @component('components.navbar')
        @endcomponent

        <div class="relative w-full h-[40vh] md:h-screen top-24">

            <!-- Background Image (NO padding!) -->
            {{-- <img src="https://cac-center.edu.kh/wp-content/uploads/2017/12/476341864_610433894942299_7957939987115653297_n-1024x682.jpg"
                class="w-full h-full object-cover px-4 md:px-8 xl:px-12"> --}}
                  @if(!empty($getBanner) && $getBanner[14]->title === 'Chief Executive Coaching Program')
                    <img 
                        src="{{ asset('assets/banner/' . $getBanner[14]->image) }}"
                        class="w-full h-full object-cover px-4 md:px-8 xl:px-12"
                        alt="Hero Image"
                    >
                @endif

            <!-- Dark overlay (matches image exactly) -->
            {{-- <div class="absolute inset-0 bg-black/50 w-[95%] h-full object-cover md:px-10 xl:px-20"></div> --}}

            <!-- Text content (padding allowed here) -->
            <div
                class="absolute inset-0 flex flex-col justify-center items-start px-8 md:px-16 lg:px-24 text-white space-y-4 bg-black/50">

                <h1 class="text-[18px] md:text-[20px] lg:text-[30px] font-normal mb-3 md:px-10 xl:px-12 lg:-mt-4">
                   @if(!empty($getBanner) && $getBanner[14]->title === 'Chief Executive Coaching Program')
                            {{ $getBanner[14]->name }}
                            @endif
                </h1>

                <p
                    class="text-[12px] md:text-[18px] font-medium max-w-[940px] leading-tight mb-3 md:px-10 xl:px-12 md:py-4">
                    @if(!empty($getBanner) && $getBanner[14]->title === 'Chief Executive Coaching Program')
                            {!! nl2br(e(value: $getBanner[14]->content)) !!}
                    @endif
                </p>

              
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
            </div>
        </div>
        <div class="space-y-10">
            <!-- SPACER for navbar -->
            <div class="">
                <h1 class="text-center text-[#000000] text-[20px] md:text-[30px] mt-10">
                    How Peer-to-Peer Mentoring Differs From One-to-One Coaching Relationships
                </h1>
            </div>
            <div class="space-y-6">
                <p class="max-w-5xl mx-auto text-left text-[#343434] font-regular text-[17px] md:text-[20px] px-4">
                As the owner, founder, or president of a $5M+ company, you know the weight of responsibility that comes with your role. 
                The decisions you make determine not just the direction of your business, but the livelihoods of employees, 
                the trust of customers and the confidence of investors. Yet many leaders at your level find themselves operating in isolation, surrounded by 
                stakeholders with competing agendas but lacking a confidential space to test their thinking with true peers.
                </p>
                <p class="max-w-5xl mx-auto text-left text-[#343434] font-regular text-[17px] md:text-[20px] px-4">
                 As the world’s largest CEO coaching and peer advisory organization with more than 45,000 members across 40 countries, 
                 Growth Master has a 65+ year track record of helping leaders like you make better decisions and achieve measurable outcomes.
                </p>
            </div>

            <div class="space-y-3">
                <h1 class="text-center text-[#000000] text-[20px] md:text-[30px] mt-10">
                    What You Gain Through the Chief Executive Program
                </h1>
                <p class="max-w-4xl mx-auto text-left text-[#343434] font-regular text-[17px] md:text-[20px] px-4">
                  The program is structured to provide you with the right balance of peer support, 
                  expert coaching and actionable insights.
                </p>
            </div>
            
            <section class="bg-white py-16">
                <div class="max-w-6xl mx-auto px-6">
                    
                    <!-- Grid -->
                    <div class="grid md:grid-cols-2 gap-10">
                        
                        <!-- Card 1 -->
                        <div class="bg-[#f3f3f3] p-12 text-center">
                            <!-- Icon -->
                            <div class="flex justify-center mb-6">
                                <svg class="w-12 h-12 text-[#0d3b4f]" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M16 11c1.66 0 3-1.79 3-4s-1.34-4-3-4-3 1.79-3 4 1.34 4 3 4zM8 11c1.66 0 3-1.79 3-4S9.66 3 8 3 5 4.79 5 7s1.34 4 3 4zm0 2c-2.67 0-8 1.34-8 4v2h10v-2c0-2.66-5.33-4-8-4zm8 0c-.29 0-.62.02-.97.05 1.16.84 1.97 1.98 1.97 3.45v2H24v-2c0-2.66-5.33-4-8-4z"/>
                                </svg>
                            </div>

                            <h3 class="text-xl font-semibold text-[#0d3b4f] mb-4">
                                Peer Advisory Group Meetings
                            </h3>

                            <p class="text-gray-700 leading-relaxed text-[15px] text-left">
                                You’ll meet monthly with 12-16 CEOs from non-competing companies. In these full-day sessions, you’ll process your most pressing issues, from scaling operations to talent management to succession planning, in a confidential environment. Members often describe these sessions as the single most valuable day of their month because they leave with fresh perspectives and actionable solutions they couldn’t see on their own.
                            </p>
                        </div>

                        <!-- Card 2 -->
                        <div class="bg-[#f3f3f3] p-12 text-center">
                            <div class="flex justify-center mb-6">
                                <svg class="w-12 h-12 text-[#0d3b4f]" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M12 12c2.21 0 4-1.79 4-4S14.21 4 12 4 8 5.79 8 8s1.79 4 4 4zm-7 8v-1c0-2.67 5.33-4 7-4s7 1.33 7 4v1H5z"/>
                                </svg>
                            </div>

                            <h3 class="text-xl font-semibold text-[#0d3b4f] mb-4">
                                World-Class Speakers & Events
                            </h3>

                            <p class="text-gray-700 leading-relaxed text-[15px] text-left">
                                Through workshops and regional events, you’ll hear directly from subject matter experts on topics ranging from M&A integration to talent retention. Many members describe these speaker sessions as “game changers” that directly inform strategic pivots and operational improvements.
                            </p>
                        </div>

                        <!-- Card 3 -->
                        <div class="bg-[#f3f3f3] p-12 text-center">
                            <div class="flex justify-center mb-6">
                                <svg class="w-12 h-12 text-[#0d3b4f]" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M12 2l4 4h-3v6h-2V6H8l4-4zm6 13v5H6v-5H4v7h16v-7h-2z"/>
                                </svg>
                            </div>

                            <h3 class="text-xl font-semibold text-[#0d3b4f] mb-4">
                                A Trusted Guide Leads the Way
                            </h3>

                            <p class="text-gray-700 leading-relaxed text-[15px] text-left">
                                Each month, you’ll meet one-on-one with your Growth Master Chair, a former CEO or senior executive developed in the Growth Master coaching methodology. These conversations focus on personal leadership growth, helping you identify blind spots, navigate sensitive decisions, and stay accountable to the goals you set for yourself and your business.
                            </p>
                        </div>

                        <!-- Card 4 -->
                        <div class="bg-[#f3f3f3] p-12 text-center">
                            <div class="flex justify-center mb-6">
                                <svg class="w-12 h-12 text-[#0d3b4f]" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M12 2a5 5 0 015 5h3v2h-3a5 5 0 01-10 0H4V7h3a5 5 0 015-5zm0 14a3 3 0 00-3 3v3h6v-3a3 3 0 00-3-3z"/>
                                </svg>
                            </div>

                            <h3 class="text-xl font-semibold text-[#0d3b4f] mb-4">
                                Specialized Growth Master Networks
                            </h3>

                            <p class="text-gray-700 leading-relaxed text-[15px] text-left">
                                You’ll have access to online communities organized by industry, function, or geography. Whether you’re navigating supply chain challenges, preparing for digital transformation or exploring international expansion, you can tap into real-time answers from leaders who’ve been there before.
                            </p>
                        </div>

                    </div>
                </div>
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