@extends('layout.app')
@section('title', 'Growth Master Reviews')
@section('content')
    @component('components.navbar')

    @endcomponent
    <div class="space-y-10">
        <section class="relative w-full">
            <div class="w-full h-[110vh] md:h-screen relative">
                <!-- Hero Image -->
                <img src="{{ asset('https://www.vistage.com/wp-content/uploads/2025/08/bg-exclusive-peer-groups-2048x999.webp') }}" class="w-full h-full object-cover" alt="Hero Image">
                <div class="absolute inset-0 bg-black/40 w-full h-full"></div>
                <!-- Overlay Content -->
                <div class="absolute inset-0 flex flex-col justify-center items-start px-6 md:px-40 md:py-20 md:top-30 text-white">

                    <h1
                        class="text-[30px] md:w-3xl text-start md:text-[35px] font-semibold max-w-[940px] leading-tight">
                        Exclusive CEO Peer Groups from Growth Master
                    </h1>

                    <p
                        class="text-[16px] md:w-2xl text-start md:text-[18px] mt-5 font-regular max-w-[940px] leading-tight">
                        As a CEO leading a $5M+ company, you need strategic input from peers who understand the leadership climb
                    </p>

                    <a href="{{ route('form.input') }}">
                        <button
                        class="mt-6 py-6 px-8 bg-[#68875d] text-[#FFFFFF] hover:bg-[#003F5F] hover:text-white rounded font-bold w-max uppercase tracking-widest">
                        BECOME A MEMBER
                    </button>
                    </a>
                </div>
            </div>
        </section>
        <div class="flex flex-col justify-center items-center bg-[#003f5e] w-full md:h-[300px] h-auto text-[#ffffff] text-4xl font-2xl text-center space-y-8">
            <h1 class="text-[22px] md:text-3xl px-8 py-4">The Best Exclusive Peer Groups for CEOs of $5M+ Companies</h1>
            <p class="text-[18px] md:text-xl font-normal max-w-5xl mx-auto text-left px-4 py-4">
                Conventional networking events and business groups do not address the issues many CEOs face. 
                You need more than casual connections and surface-level conversations when facing critical business decisions. 
                That’s why Growth Master structures peer groups differently.
            </p>
        </div>
        {{-- Block Card Shadow --}}
        <div class="relative w-full py-12">
            <p class="text-[#333333] text-[18px] md:text-xl font-normal max-w-5xl mx-auto text-left px-4 py-4">
               The world’s most ambitious leaders understand that reaching the top requires learning the way world-class leaders do: 
               through guided peer advisory coaching. When you’re leading a company, the decisions you make ripple 
               through hundreds of employees and affect millions in revenue. Yet you’re making these high-stakes choices primarily in isolation, 
               without input from peers who’ve navigated comparable situations with their own capital at risk.
            </p>
            <p class="text-[#333333] text-[18px] md:text-xl font-normal max-w-5xl mx-auto text-left px-4 py-4">
               Exclusivity in peer groups serves a practical purpose: It filters for leaders who face similar operational 
               challenges. The most innovative business leaders in your community are likely already meeting monthly in a Vistage group. 
               This is how world-class leaders learn and grow together — working through major acquisitions, 
               international expansion and leadership restructuring in person with executives who’ve made similar decisions.
            </p>
            <p class="text-[#333333] text-[18px] md:text-xl font-normal max-w-5xl mx-auto text-left px-4 py-4">
               This face-to-face collaboration ensures that every conversation addresses challenges at your operational level,
                not through a screen but around a table with leaders with whom you can build lasting relationships.
            </p>
        </div>

        {{-- Table --}}
        <section class="w-full overflow-x-auto">
            <div class="max-w-7xl mx-auto">

                <table class="w-full border-collapse">
                    <!-- Header -->
                    <thead>
                        <tr class="bg-[#003f5e] text-[#f5c400] text-center">
                            <th class="px-6 py-6 text-[20px] font-semibold border border-white">
                                What Matters to You
                            </th>
                            <th class="px-6 py-6 text-[20px] font-semibold border border-white">
                                The Growth Master Approach
                            </th>
                            <th class="px-6 py-6 text-[20px] font-semibold border border-white">
                                Other Exclusive Peer Group Approaches
                            </th>
                        </tr>
                    </thead>

                    <!-- Body -->
                    <tbody class="text-[#333333] font-medium">
                        <!-- Row 1 -->
                        <tr>
                            <td class="px-6 py-6 text-[18px] font-medium border">
                                Other Exclusive Peer Group Approaches
                            </td>
                            <td class="px-6 py-6 text-[16px] leading-relaxed border">
                                Peers include only CEOs, business owners and founders from non-competing companies,
                                ensuring discussions stay confidential and relevant to your operational complexity.
                            </td>
                            <td class="px-6 py-6 text-[16px] leading-relaxed border">
                                Varying admission standards can include members across different revenue levels
                                and leadership stages.
                            </td>
                        </tr>

                        <!-- Row 2 -->
                        <tr>
                            <td class="px-6 py-6 text-[18px] font-medium border">
                                Professional Facilitation
                            </td>
                            <td class="px-6 py-6 text-[16px] leading-relaxed border">
                                Accomplished Chairs lead meetings leveraging 10+ years of executive experience.
                                Your Chair guides group interactions using a proven framework called issue
                                processing to drive action, not just conversation.
                            </td>
                            <td class="px-6 py-6 text-[16px] leading-relaxed border">
                                Many groups rely on peer-led discussions without experienced facilitation,
                                which can lack structure.
                            </td>
                        </tr>

                        <!-- Row 3 -->
                        <tr>
                            <td class="px-6 py-6 text-[18px] font-medium border">
                                Strategic Accountability
                            </td>
                            <td class="px-6 py-6 text-[16px] leading-relaxed border">
                                Formal accountability systems within your peer group and through one-on-ones
                                with your Chair help you track specific business goals and measure progress on
                                critical initiatives.
                            </td>
                            <td class="px-6 py-6 text-[16px] leading-relaxed border">
                                Focus typically centers on relationship-building and experience sharing without
                                structured outcome measurement.
                            </td>
                        </tr>
                        <!-- Row 4 -->
                        <tr>
                            <td class="px-6 py-6 text-[18px] font-medium border">
                                Confidentiality Structure
                            </td>
                            <td class="px-6 py-6 text-[16px] leading-relaxed border">
                                Members come from non-competing companies, and meetings are 100% 
                                confidential so that you can discuss sensitive issues openly without competitive intelligence concerns.
                            </td>
                            <td class="px-6 py-6 text-[16px] leading-relaxed border">
                                Groups may include members from overlapping markets, 
                                limiting the ability to build trust and have in-depth, candid discussions.
                            </td>
                        </tr>
                        <!-- Row 5 -->
                        <tr>
                            <td class="px-6 py-6 text-[18px] font-medium border">
                                Time Investment Design
                            </td>
                            <td class="px-6 py-6 text-[16px] leading-relaxed border">
                                Monthly full-day sessions focus on the issues that impact you the most, 
                                maximizing the value of your time commitment.
                            </td>
                            <td class="px-6 py-6 text-[16px] leading-relaxed border">
                                Meeting frequency and format vary widely, often emphasizing social interaction over strategic work.
                            </td>
                        </tr>
                        <!-- Row 6 -->
                        <tr>
                            <td class="px-6 py-6 text-[18px] font-medium border">
                                Local Community & Live Interaction
                            </td>
                            <td class="px-6 py-6 text-[16px] leading-relaxed border">
                               Groups meet in person in your local market, building relationships with fellow CEOs who understand your 
                               geographic business environment and can become trusted advisors beyond formal meetings.
                            </td>
                            <td class="px-6 py-6 text-[16px] leading-relaxed border">
                                Many groups operate virtually or draw members 
                                from distant markets, limiting relationship depth and local business relevance.
                            </td>
                        </tr>
                        <!-- Row 7 -->
                        <tr>
                            <td class="px-6 py-6 text-[18px] font-medium border">
                                Access to Broader Expertise
                            </td>
                            <td class="px-6 py-6 text-[16px] leading-relaxed border">
                               Growth Master has a global network of 45,000 members across 40 countries, 
                               providing specific industry insights when you need specialized expertise.
                            </td>
                            <td class="px-6 py-6 text-[16px] leading-relaxed border">
                                Network access varies, sometimes including global connections and other times limited to regional chapters.
                            </td>
                        </tr>
                    </tbody>
                </table>

            </div>
        </section>
        {{-- Button Become a member --}}
        <div class="flex justify-center items-center mt-10">
            <a href="{{ route('form.input') }}"
                class="group py-3 px-[25px] text-[16px] md:text-[18px] border-2 border-[#68875d]
                text-[#003F5F] bg-white rounded 
                transition-all duration-300 ease-in-out
                hover:bg-[#68875d] hover:text-white font-semibold">

                Become A Member

                <span class="ms-3 transition-all duration-300 ease-in-out group-hover:text-white">
                    <i class="fa-solid fa-angle-right"></i>
                </span>
            </a>
        </div>
        {{-- Signs You’re Ready for an Exclusive Peer Group --}}
        <section class="relative w-full">
            <h1 class="text-[#000000] text-2xl md:text-4xl text-center py-6">Signs You’re Ready for an Exclusive Peer Group</h1>
            <p class="text-[#333333] text-xl md:2xl text-center py-4">
                You’ve likely reached the point where an exclusive peer 
                group makes strategic sense if you recognize these situations in your leadership experience:
            </p>
            {{-- section text and image --}}
            @php
                $showProgram = [
                    [
                        'title1' => 'You lack structured accountability for your biggest initiatives.',
                        'title2' => 'You’re making critical decisions without comparable perspectives.',
                        'title3' => '',
                        'desc1' => 'Your board meetings and internal team discussions don’t provide the external perspective and follow-through that drives execution on essential goals.',
                        'desc2' => 'Your C-suite team may struggle to grasp ownership decisions or refuse to provide unfiltered feedback. You need input from owners who understand that one wrong choice could cost jobs, derail growth or jeopardize everything you’ve built.',
                        'desc3' => '',
                        'image' => 'https://www.vistage.com/wp-content/uploads/2025/08/board-meeting.webp'
                    ],
                    [
                        'title1' => 'Your revenue and operational complexity demand peer-level input.',
                        'title2' => 'Confidentiality limits your ability to seek advice.',
                        'title3' => 'You’re working late into the night because you can’t delegate effectively.',
                        'desc1' => 'When you’re managing $5M+ in annual revenue with dozens of employees, your decisions carry weight that most business advisors haven’t experienced firsthand.',
                        'desc2' => 'The sensitive nature of your business challenges requires a trusted environment where you can discuss issues openly without competitive risk.',
                        'desc3' => 'When you believe you need to handle everything personally, you create a bottleneck that limits your company’s growth and leaves you exhausted from operational details rather than focusing on strategic leadership.',
                        'image' => 'https://www.vistage.com/wp-content/uploads/2025/08/revenue-5m.webp'
                    ],
                ]; 
            @endphp
            <div class="relative w-full">

                @foreach ($showProgram as $index => $program)

                    <div
                        class="flex flex-col md:flex-row justify-center items-center py-4 px-4 xl:py-16 xl:px-35 gap-8">

                        {{-- MOBILE IMAGE (top) --}}
                        <div class="md:hidden w-full md:w-1/2 flex">
                            {{-- <img src="{{ asset('assets/our_program/' . $program->image) }}" alt=""> --}}
                            <img src="{{ $program['image'] }}" alt="">
                        </div>

                        {{-- DESKTOP IMAGE LEFT (odd block) --}}
                        @if ($index % 2 !== 0)
                            <div class="hidden md:flex w-full md:w-1/2">
                                {{-- <img src="{{ asset('assets/our_program/' . $program->image) }}" alt=""> --}}
                                <img src="{{ $program['image'] }}" alt="">
                            </div>
                        @endif

                        {{-- TEXT --}}
                        <div class="w-full md:w-1/2 space-y-4 md:space-y-8">
                            {{-- <h1 class="text-[#333333] text-[30px] lg:text-[35px]">
                                {{ $program->title }}
                            </h1>

                            <p class="text-[#343434] text-[14px] md:text-[18px]">
                                {{ $program->description }}
                            </p> --}}
                            <h1 class="text-[#333333] text-xl md:text-2xl">
                                {{ $program['title1']}}
                            </h1>

                            <p class="text-[#343434] text-[16px] md:text-[18px]">
                                {{ $program['desc1'] }}
                            </p>
                             <h1 class="text-[#333333] text-xl md:text-2xl">
                                {{ $program['title2']}}
                            </h1>

                            <p class="text-[#343434] text-[16px] md:text-[18px]">
                                {{ $program['desc2'] }}
                            </p>
                             <h1 class="text-[#333333] text-xl md:text-2xl">
                                {{ $program['title3']}}
                            </h1>

                            <p class="text-[#343434] text-[16px] md:text-[18px]">
                                {{ $program['desc3'] }}
                            </p>
                        </div>

                        {{-- DESKTOP IMAGE RIGHT (even block) --}}
                        @if ($index % 2 === 0)
                            <div class="hidden md:flex w-full md:w-1/2">
                                {{-- <img src="{{ asset('assets/our_program/' . $program->image) }}" alt=""> --}}
                                <img src="{{ $program['image'] }}" alt="">
                            </div>
                        @endif

                    </div>

                @endforeach

            </div>

        </section>

        {{-- Button Become a member --}}
        <div class="flex justify-center items-center mt-10">
            <a href="{{ route('form.input') }}"
                class="group py-3 px-[25px] text-[16px] md:text-[18px] border-2 border-[#68875d]
                text-[#003F5F] bg-white rounded 
                transition-all duration-300 ease-in-out
                hover:bg-[#68875d] hover:text-white font-semibold">

                Become A Member

                <span class="ms-3 transition-all duration-300 ease-in-out group-hover:text-white">
                    <i class="fa-solid fa-angle-right"></i>
                </span>
            </a>
        </div>

        <div>
            @component('components.footer')

            @endcomponent
        </div>
    </div>
@endsection




