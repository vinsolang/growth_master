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

                    <a href="{{ route('home') }}#member-form">
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
            <a href="{{ route('home') }}#member-form"
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
            <a href="{{ route('home') }}#member-form"
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

        {{-- Section  --}}
        <div class="max-w-7xl mx-auto bg-amber-200 text-left">

            <div class="flex">
                <div class="flex justify-center items-center bg-[#00233d] w-[25%] h-40">
                    <h1 class="text-[#edc01c] text-xl md:text-3xl md:w-[90%]">Strategic Decision Velocity</h1>
                </div>
                <div class="flex justify-center items-center bg-[#003f5e] w-[75%] h-40">
                    <p class="text-white text-[16px] md:text-xl md:w-[90%]">
                       In our guided peer-to-peer setting, solve challenges faster 
                       using proven frameworks that move from problem identification 
                       to measurable action. By reducing “analysis paralysis” and discussing your 
                       situation from multiple angles with other talented leaders, 
                       you’ll feel more confident and grounded in your choices.
                    </p>
                </div>
            </div>

            <div class="flex">
                <div class="flex justify-center items-center bg-[#00233d] w-[25%] h-40">
                    <h1 class="text-[#edc01c] text-xl md:text-3xl md:w-[90%]">Risk Assessment & Blind Spot Identification</h1>
                </div>
                <div class="flex justify-center items-center bg-[#003f5e] w-[75%] h-40">
                    <p class="text-white text-[16px] md:text-xl md:w-[90%]">
                        Peers spot potential pitfalls and opportunities you might miss when you’re too close to the problem, 
                        drawing from their own experience navigating situations like yours.
                    </p>
                </div>
            </div>

            <div class="flex">
                <div class="flex justify-center items-center bg-[#00233d] w-[25%] h-40">
                    <h1 class="text-[#edc01c] text-xl md:text-3xl md:w-[90%]">Leadership Team Development</h1>
                </div>
                <div class="flex justify-center items-center bg-[#003f5e] w-[75%] h-40">
                    <p class="text-white text-[16px] md:text-xl md:w-[90%]">
                        Valuable insights from peers can help you build a high-performing executive team with the right roles to 
                        help you achieve your vision and navigate leadership transitions more effectively.
                    </p>
                </div>
            </div>

            <div class="flex">
                <div class="flex justify-center items-center bg-[#00233d] w-[25%] h-40">
                    <h1 class="text-[#edc01c] text-xl md:text-3xl md:w-[90%]">Market Expansion & Growth Challenges</h1>
                </div>
                <div class="flex justify-center items-center bg-[#003f5e] w-[75%] h-40">
                    <p class="text-white text-[16px] md:text-xl md:w-[90%]">
                        When you’re considering new markets or scaling operations, fellow CEOs can share obstacles they 
                        encountered and the specific moves that actually worked versus what looked good on paper.
                    </p>
                </div>
            </div>

            <div class="flex">
                <div class="flex justify-center items-center bg-[#00233d] w-[25%] h-40">
                    <h1 class="text-[#edc01c] text-xl md:text-3xl md:w-[90%]">Crisis Navigation & Pivoting</h1>
                </div>
                <div class="flex justify-center items-center bg-[#003f5e] w-[75%] h-40">
                    <p class="text-white text-[16px] md:text-xl md:w-[90%]">
                       Crisis moments demand immediate action when the usual playbook doesn’t apply. 
                       CEOs who’ve weathered major disruptions understand what it 
                       takes to make tough calls while preserving operations and eventually emerging stronger.
                    </p>
                </div>
            </div>
        </div>

        {{-- What to Evaluate When Choosing an Exclusive Peer Group --}}
        <div class="py-12 max-w-7xl mx-auto space-y-6 text-center">
            <h1 class="text-[#000000] lg:text-4xl text-2xl font-semibold">
                What to Evaluate When Choosing an Exclusive Peer Group
            </h1>
            <p class="leading-relaxed text-xl text-[#333333] text-left mx-auto max-w-4xl px-6">
                Your time is your most valuable asset. Exclusive peer groups protect that investment by surrounding you with leaders 
                whose experience directly applies to your current challenges and can guide critical decisions.
            </p>

            <p class="leading-relaxed text-xl text-[#333333] text-left mx-auto max-w-4xl px-6">
                Vistage built its entire model around this principle. Every element from member 
                selection to meeting structure maximizes the strategic value of your time commitment.
            </p>

            {{-- Card Element --}}
        <div class="py-8 max-w-8xl mx-auto space-x-4 space-y-6 grid grid-cols-1 lg:grid-cols-3 h-auto px-4 gap-x-8">
            {{-- Card 1 --}}
            <div class="bg-[#f5f2f2] p-8 max-w-4xl w-full">
                <h1 class="text-[#003f5e] text-2xl xl:text-xl font-bold mb-4 text-center">
                    Group Composition Standards
                </h1>
                <p class="text-[#333333] text-lg leading-relaxed text-left">
                    You need clear revenue thresholds and leadership requirements to ensure you’re working with peers at relevant operational stages.
                    <br>
                    Growth Master limits membership to CEOs of $5M+ companies with additional vetting for experience and commitment.
                </p>
            </div>

            {{-- Card 2 --}}
            <div class="bg-[#f5f2f2] p-8 max-w-4xl w-full">
                <h1 class="text-[#003f5e] text-2xl xl:text-xl font-bold mb-4 text-left">
                    Professional Facilitation
                </h1>
                <p class="text-[#333333] text-lg leading-relaxed text-left">
                    You need skilled facilitators with real-world executive experience,
                    not peer-led discussions that lack structure and methodology.
                    <br>
                    Growth Master Chairs bring 10+ years of executive experience with P&L responsibility, 
                    plus comprehensive development in proven facilitation methods.
                </p>
            </div>
            {{-- card 3 --}}
            <div class="bg-[#f5f2f2] p-8 max-w-4xl w-full">
                <h1 class="text-[#003f5e] text-2xl xl:text-xl font-bold mb-4 text-left">
                    Accountability Systems
                </h1>
                <p class="text-[#333333] text-lg leading-relaxed text-left">
                    You need formal goal-setting and progress tracking that creates follow-through on key initiatives.
                    <br>
                    With Growth Master, you get monthly progress reviews and peer accountability in both group and one-to-one coaching sessions.
                </p>
            </div>
            <!-- Card 4 -->
            <div class="bg-[#f5f2f2] p-8 max-w-4xl w-full">
                <h1 class="text-[#003f5e] text-2xl xl:text-xl font-bold mb-4 text-left">
                    Time Investment Design
                </h1>
                <p class="text-[#333333] text-lg leading-relaxed text-left">
                   Weekly meetings can disrupt your schedule and dilute focus, while quarterly (or fewer) 
                   sessions don’t provide enough consistency to produce meaningful growth.
                   <br>
                   Growth Master strikes the right balance with monthly full-day sessions, 
                   plus individual coaching sessions with your Chair.
                </p>
            </div>
            {{-- Card 5 --}}
            <div class="bg-[#f5f2f2] p-8 max-w-4xl w-full">
                <h1 class="text-[#003f5e] text-2xl xl:text-xl font-bold mb-4 text-left">
                    Member Diversity
                </h1>
                <p class="text-[#333333] text-lg leading-relaxed text-left">
                    Peer groups with industry and experience variety 
                    bring fresh perspectives and prevent stale conversations or echo chambers.
                    <br>
                    Vistage groups include non-competing companies across diverse industries, 
                    with global network access when specialized expertise is needed.
                </p>
            </div>

            {{-- Card 6 --}}
            <div class="bg-[#f5f2f2] p-8 max-w-4xl w-full">
                <h1 class="text-[#003f5e] text-xl xl:text-xl font-bold mb-4 text-left">
                    Proven Track Record
                </h1>
                <p class="text-[#333333] text-lg leading-relaxed text-left">
                    You need evidence of sustained outcomes and member satisfaction over time, beyond testimonials.
                    <br>
                    Vistage has a 65-year history, with members staying in business 4x longer than average, plus documented achievement metrics.
                </p>
            </div>
        </div>
        </div>
        {{-- Button Become a member --}}
        <div class="flex justify-center items-center mt-10">
            <a href="{{ route('home') }}#member-form"
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
        {{-- Why High-Performing CEOs Choose GrowthMaster --}}
        <section class="bg-[#0b3f5c] text-white py-20">
        <div class="max-w-7xl mx-auto px-6">

            <!-- Heading -->
            <h2 class="text-3xl md:text-4xl font-semibold text-center mb-6">
            Why High-Performing CEOs Choose Growth Master
            </h2>

            <!-- Intro Text -->
            <p class="text-center max-w-4xl mx-auto text-lg leading-relaxed text-gray-200 mb-6">
            High-performing CEOs choose Growth Master because they’ve reached a point where traditional support systems
            no longer serve their needs. They recognize they can’t navigate every challenge alone and feel
            overwhelmed by the isolation of leadership.
            </p>

            <p class="text-center max-w-4xl mx-auto text-lg leading-relaxed text-gray-200 mb-16">
            Growth Master provides the elite peer environment where serious leaders tackle their biggest challenges together.
            You might recognize these signs if you’re ready for this level of leadership support:
            </p>

            <!-- Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-x-20 gap-y-16">

                <!-- Item 1 -->
                <div class="gap-6 relative left-8">
                    <div class="flex justify-start items-center space-x-2">
                        <div class="w-12 h-12">
                            <img src="{{ asset('assets/img-icon/1.png') }}" alt="" class="w-full h-full object-cover">
                        </div>
                        <h3 class="text-yellow-400 font-semibold mb-2">
                            Objective Insight for Critical Decisions
                        </h3>
                    </div>
                    <div>
                        <p class="text-lg text-gray-200 leading-relaxed">
                            You’re second-guessing major decisions because your team won’t challenge your ideas or those advising
                            you either cannot do so objectively or don’t understand the full scope of what’s at stake for your
                            employees, customers and personal financial security.
                        </p>
                    </div>
                </div>

                <!-- Item 2 -->
                <div class="gap-6 relative left-8">
                    <div class="flex justify-start items-center space-x-2">
                        <div class="w-12 h-12">
                            <img src="{{ asset('assets/img-icon/2.png') }}" alt="" class="w-full h-full object-cover">
                        </div>
                        <h3 class="text-yellow-400 font-semibold mb-2">
                            Confidence in Major Transitions
                        </h3>
                    </div>
                    <div>
                        <p class="text-lg text-gray-200 leading-relaxed">
                            You’re facing a significant strategic transition like selling the business, bringing in private
                            equity or expanding internationally, and need perspectives from CEOs who’ve navigated these decisions
                            successfully.
                        </p>
                    </div>
                </div>
                <!-- Item 3 -->
                <div class="gap-6 relative left-8">
                    <div class="flex justify-start items-center space-x-2">
                        <div class="w-12 h-12">
                            <img src="{{ asset('assets/img-icon/3.png') }}" alt="" class="w-full h-full object-cover">
                        </div>
                        <h3 class="text-yellow-400 font-semibold mb-2">
                            Stronger Voices at the Table
                        </h3>
                    </div>
                    <div>
                        <p class="text-lg text-gray-200 leading-relaxed">
                            You’ve outgrown your current board or advisory relationships and need input from operators who are
                            actively managing similar challenges rather than offering theoretical guidance.
                        </p>
                    </div>
                </div>

                <!-- Item 4 -->
                <div class="gap-6 relative left-8">
                    <div class="flex justify-start items-center space-x-2">
                        <div class="w-12 h-12">
                            <img src="{{ asset('assets/img-icon/4.png') }}" alt="" class="w-full h-full object-cover">
                        </div>
                        <h3 class="text-yellow-400 font-semibold mb-2">
                           Guidance from Seasoned Leaders
                        </h3>
                    </div>
                    <div>
                        <p class="text-lg text-gray-200 leading-relaxed">
                           You’re frustrated with facilitators who’ve never carried P&L responsibility and lack development
                            in proven methodologies that consistently drive results.
                        </p>
                    </div>
                </div>

                <!-- Item 5 -->
                <div class="gap-6 relative left-8">
                    <div class="flex justify-start items-center space-x-2">
                        <div class="w-12 h-12">
                            <img src="{{ asset('assets/img-icon/5.png') }}" alt="" class="w-full h-full object-cover">
                        </div>
                        <h3 class="text-yellow-400 font-semibold mb-2">
                            Clarity Through Proven Frameworks
                        </h3>
                    </div>
                    <div>
                        <p class="text-lg text-gray-200 leading-relaxed">
                           You want structured frameworks for processing complex issues rather than open-ended discussions
                            that fail to reach actionable conclusions.
                        </p>
                    </div>
                </div>

                <!-- Item 6 -->
                <div class="gap-6 relative left-8">
                    <div class="flex justify-start items-center space-x-2">
                        <div class="w-12 h-12">
                            <img src="{{ asset('assets/img-icon/6.png') }}" alt="" class="w-full h-full object-cover">
                        </div>
                        <h3 class="text-yellow-400 font-semibold mb-2">
                             Accountability that Drives Results
                        </h3>
                    </div>
                    <div>
                        <p class="text-lg text-gray-200 leading-relaxed">
                            You’re tired of setting goals and then drifting because you need follow-through and accountability
                            systems that actually drive execution on your most critical initiatives.
                        </p>
                    </div>
                </div>

            </div>
        </div>
        </section>

        <div>
            @component('components.footer')

            @endcomponent
        </div>
    </div>
@endsection




