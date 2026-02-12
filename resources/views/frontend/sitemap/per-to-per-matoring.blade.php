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
                  @if(!empty($getBanner) && $getBanner[13]->title === 'per-to-per')
                    <img 
                        src="{{ asset('assets/banner/' . $getBanner[13]->image) }}"
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
                   @if(!empty($getBanner) && $getBanner[13]->title === 'per-to-per')
                            {{ $getBanner[13]->name }}
                            @endif
                </h1>

                <p
                    class="text-[12px] md:text-[18px] font-medium max-w-[940px] leading-tight mb-3 md:px-10 xl:px-12 md:py-4">
                    @if(!empty($getBanner) && $getBanner[13]->title === 'per-to-per')
                            {!! nl2br(e(value: $getBanner[13]->content)) !!}
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
                  Choosing between peer-to-peer mentoring and one-to-one coaching means understanding how each approach supports your decision-making process. While both may provide access to experienced business guidance, 
                  they vary significantly in how they generate insights and accountability.
                </p>
                <p class="max-w-5xl mx-auto text-left text-[#343434] font-regular text-[17px] md:text-[20px] px-4">
                   The comparison below examines five key factors that impact your experience and outcomes:
                   <ul class="max-w-5xl mx-auto list-disc pl-6 space-y-3 text-gray-700">
                        <li>Source of Expertise: Who provides guidance and what drives their recommendations?</li>
                        <li>Discussion Format: How are conversations structured and facilitated?</li>
                        <li>Accountability Structure: What mechanisms ensure follow-through on commitments?</li>
                        <li>Confidentiality Environment: How is sensitive business information protected?</li>
                        <li>Outcome Measurement: How are progress and results tracked over time?</li>
                    </ul>
                </p>
            </div>

           <div class="max-w-5xl mx-auto">
                 {{-- Table --}}
            <table class="border-collapse border border-gray-400 w-full max-w-5xl mx-auto text-left">
                <thead class="bg-[#68875d] text-[#ffffff]">
                    <tr>
                        <th class="border border-gray-300 py-3 px-4 text-center text-[14px] md:text-[20px] lg:text-[24px] font-semibold">
                            What Matters to You
                        </th>
                        <th class="border border-gray-300 py-3 px-4 text-center text-[14px] md:text-[20px] lg:text-[24px] font-semibold">
                            Growth Master Peer-to-Peer Mentoring
                        </th>
                        <th class="border border-gray-300 py-3 px-4 text-center text-[14px] md:text-[20px] lg:text-[24px] font-semibold">
                            One-to-One Coaching
                        </th>
                    </tr>
                </thead>

                <tbody class="text-[13px] md:text-[16px] leading-relaxed">
                    <tr>
                        <td class="border border-gray-300 py-3 px-4">Source of Expertise</td>
                        <td class="border border-gray-300 py-3 px-4">
                            You receive input from 12-16 CEOs managing companies generating $5M to $1B+ in revenue. 
                            Each brings current, real-world experience from non-competing industries.
                        </td>
                        <td class="border border-gray-300 py-3 px-4">
                            You work with a coach who provides guidance based on their consulting experience, 
                            past executive roles, or specialized expertise in specific business functions.
                        </td>
                    </tr>

                    <tr>
                        <td class="border border-gray-300 py-3 px-4">Discussion Format</td>
                        <td class="border border-gray-300 py-3 px-4">
                            Monthly full-day sessions are led by accomplished Chairs who facilitate structured issue-processing discussions. 
                            You present real challenges and receive multiple perspectives from fellow CEOs.
                        </td>
                        <td class="border border-gray-300 py-3 px-4">
                            Typically, meetings are one-to-one advisory sessions where you discuss challenges 
                            and receive recommendations based on the 
                            advisor’s analysis and singular experience.
                        </td>
                    </tr>

                    <tr>
                        <td class="border border-gray-300 py-3 px-4">
                            Accountability Structure
                        </td>
                        <td class="border border-gray-300 py-3 px-4">
                            Peer accountability operates through monthly progress reports to your group. 
                            Fellow CEOs track your execution on critical initiatives because they understand the stakes involved.
                        </td>
                        <td class="border border-gray-300 py-3 px-4">
                            Accountability depends on your individual relationship with advisors, 
                            who may check progress through scheduled follow-ups or periodic reviews.
                        </td>
                    </tr>

                    <tr>
                        <td class="border border-gray-300 py-3 px-4">Confidentiality Environment</td>
                        <td class="border border-gray-300 py-3 px-4">
                            100% confidential setting with CEOs from non-competing companies allows 
                            open discussion of sensitive issues like succession planning, 
                            partnership disputes, or major strategic pivots.
                        </td>
                        <td class="border border-gray-300 py-3 px-4">
                            Individual advisory relationships provide confidentiality within the advisor-client structure.
                        </td>
                    </tr>

                    <tr>
                        <td class="border border-gray-300 py-3 px-4">
                            Outcome Measurement
                        </td>
                        <td class="border border-gray-300 py-3 px-4">
                            Members set specific business goals and report measurable results. 
                            Note that companies led by Growth Master members stay in business over 21 years on average, 
                            compared to 5 years for typical companies.
                        </td>
                        <td class="border border-gray-300 py-3 px-4">
                            Measurement approaches vary by advisor, with some tracking specific metrics while others 
                            focus on general business improvement or strategic milestone achievement.
                        </td>
                    </tr>
                </tbody>
            </table>

           </div>

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

             <div class="space-y-3">
                <h1 class="text-center text-[#000000] text-[20px] md:text-[30px] mt-10">
                    How Peer-to-Peer Mentoring Differs From One-to-One Coaching Relationships
                </h1>
                <p class="max-w-5xl mx-auto text-left text-[#343434] font-regular text-[17px] md:text-[20px] px-4">
                  Successful executives increasingly recognize that peer-to-peer mentoring provides insights that traditional 
                  advisory relationships cannot replicate. When you’re evaluating major decisions, perspectives from multiple CEOs 
                  who’ve faced similar choices often reveal options and risks that a single advisor might miss.
                </p>
            </div>
            
            <div class="relative mt-10 space-y-8">
                <div class="flex flex-col md:flex-col lg:flex-row justify-center items-center gap-8">
                    {{-- Card 1 --}}
                    <div class="bg-[#68875d] w-[380px] h-[600px] space-y-4 py-10">
                        <div class="flex justify-center items-center">
                            <img src="https://www.vistage.com/wp-content/uploads/2025/09/icon-diverse.png" alt="">
                        </div>
                        <div class="text-center text-[#ffffff] text-[22px] px-8 py-2">
                            <h2>You Get Diverse Perspectives on Complex Decisions</h2>
                        </div>
                        <div class="text-[#ffffff] text-[17px] text-left px-10 py-8">
                            <p>
                                When you’re considering an acquisition or international expansion, 
                                input from 12 CEOs who’ve made comparable investments provides a depth of insight that no single advisor can match. 
                                Each peer brings lessons from their own successes and mistakes.
                            </p>
                        </div>
                    </div>
                    {{-- Card 2 --}}
                    <div class="bg-[#68875d] w-[380px] h-[600px] space-y-4 py-10">
                        <div class="flex justify-center items-center">
                            <img src="https://www.vistage.com/wp-content/uploads/2025/09/icon-Weight.png" alt="">
                        </div>
                        <div class="text-center text-[#ffffff] text-[22px] px-8 py-2">
                            <h2>Fellow CEOs Understand the Weight of Your Decisions</h2>
                        </div>
                        <div class="text-[#ffffff] text-[17px] text-left px-10 py-8">
                            <p>
                                Traditional advisors offer recommendations, but they don’t carry the personal financial 
                                risk of your choices. Your peer-to-peer mentoring group consists of leaders who understand what 
                                it means to make decisions that affect hundreds of employees and millions in revenue.
                            </p>
                        </div>
                    </div>
                    {{-- Card 3 --}}
                    <div class="bg-[#68875d] w-[380px] h-[600px] space-y-4 py-10">
                        <div class="flex justify-center items-center">
                            <img src="https://www.vistage.com/wp-content/uploads/2025/09/iconTime-2x.png" alt="">
                        </div>
                        <div class="text-center text-[#ffffff] text-[22px] px-8 py-2">
                            <h2>Real-time Relevance from Active Operators</h2>
                        </div>
                        <div class="text-[#ffffff] text-[17px] text-left px-10 py-8">
                            <p>
                                Unlike retired executives or consultants who work across multiple clients, 
                                your peer mentoring group includes CEOs currently navigating today’s market conditions. 
                                They share insights about supply chain disruptions, labor challenges, 
                                and economic uncertainty because they’re managing these issues right now.
                            </p>
                        </div>
                    </div>
                </div>
            </div>

             <div class="space-y-3">
                <h1 class="text-center text-[#000000] text-[20px] md:text-[30px] mt-10">
                    What Other CEOs Actually Say in Peer-to-Peer Mentoring Sessions
                </h1>
                <p class="max-w-5xl mx-auto text-left text-[#343434] font-regular text-[17px] md:text-[20px] px-4">
                  Understanding the tone and content of real peer discussions helps you anticipate what group participation feels like. 
                  These conversations differ significantly from board meetings or internal strategy sessions.
                </p>
            </div>

            {{-- Block Image for poster --}}
            <div class="lg:ml-28">
                @php
                    $cards = [
                        [
                            'image' => 'https://cac-center.edu.kh/wp-content/uploads/2025/05/475764412_610434131608942_8875000787547266503_n-768x512.jpg',
                            'text' => '
                                -> “I’m considering firing my CFO, but he’s been with me for eight years. How do I handle this transition?” 
                                -> “Our biggest client represents 40% of revenue and wants to renegotiate terms. What leverage do I actually have?” 
                                -> “My business partner wants to retire, but we’ve never discussed valuation. Where do I start?” 
                                -> “I’m thinking about acquiring our main competitor, but the price seems high. Has anyone done something similar?” 
                            ',
                            'title' => 'Typical challenges brought to group sessions:'
                        ],
                        [
                            'image' => 'https://cac-center.edu.kh/wp-content/uploads/2025/05/475764412_610434131608942_8875000787547266503_n-768x512.jpg',
                            'text' => '
                                -> Istead of generic advice, you get specific insights: “I faced the exact same situation in 2019. Here’s what I learned about timing the announcement…”
                                -> Or, “My attorney suggested this approach for partnership transitions, and it saved us six months of negotiation.” 
                                -> The tone is collaborative, not competitive: 
                                -> CEOs quickly realize that helping others solve problems often reveals solutions to their own challenges. 
                                -> The group becomes a strategic resource rather than a judgment panel.
                            ',
                            'title' => 'Typical challenges brought to group sessions:'
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
                                <h1 class="text-[#000000] lg:text-3xl text-2xl font-semibold text-left px-4 md:px-12">
                                    {{ $card['title'] }}
                                </h1>
                                <p class="text-left text-[#454545] md:text-xl text-[14px] px-4 md:px-12">
                                    {!! nl2br(e($card['text'])) !!}
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