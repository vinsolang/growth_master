@extends('layout.app')
@section('title', 'Peer Advisory Groups')
@section('content')
    @component('components.navbar')

    @endcomponent
    <div class="space-y-10">
        <section class="relative w-full">
            <div class="w-full h-screen relative">
                <!-- Hero Image -->
                <img src="{{ asset('assets/membership_hero1.jpg') }}" class="w-full h-full object-cover" alt="Hero Image">

                <!-- Overlay Content -->
                <div class="absolute inset-0 flex flex-col justify-center items-start px-6 md:px-16 lg:px-24 text-white">

                    <h1
                        class="text-[22px] text-start md:text-[35px] lg:text-[45px] font-semibold max-w-[940px] leading-tight">
                        Peer Advisory Groups
                    </h1>

                    <p
                        class="text-[16px] text-start md:text-[18px] mt-5 lg:text-[25px] font-regular max-w-[940px] leading-tight">
                        Executive coaching alone can’t deliver what peer advisory groups provide.
                    </p>

                    <p
                        class="text-[16px] text-start mt-5 md:text-[18px] lg:text-[25px] font-regular max-w-[940px] leading-tight">
                        Our comprehensive platform for success features core elements that work together:
                        valuable perspectives from a trusted group of peers, professional guidance from an accomplished
                        business leader (advisor) and deep insights from subject matter experts.
                    </p>

                    <button
                        class="mt-6 py-5 px-7 bg-[#EDC11C] text-[#333333] hover:bg-[#003F5F] hover:text-white rounded font-semibold w-max">
                        JOIN A GROUP
                    </button>
                </div>
            </div>

            <div class="flex flex-col justify-center  items-center mt-10  gap-10">
                <h1 class="text-center text-[#000000] text-[20px] md:text-[30px] mt-10">A Proven, Comprehensive Path to
                    Success</h1>
                <p
                    class="text-start text-[#343434] mx-[40px] xl:mx-[250px] md:mx-[100px] font-regular text-[14px] md:text-[18px]">
                    You’ve reached a level of success where traditional business advice feels generic, and the stakes of
                    your decisions demand more than intuition. Executive coaching alone can’t deliver the transformation
                    that world-class leaders need.
                </p>
                <p
                    class="text-start text-[#343434] mx-[40px] xl:mx-[250px] md:mx-[100px] font-regular text-[14px] md:text-[18px]">
                    GrowthMaster is the authority in guided peer advisory coaching – a proven system purpose-built for deep
                    leadership transformation. No one else offers a more comprehensive method for making better decisions,
                    getting better outcomes and becoming a better leader.
                </p>
                <p
                    class="text-start text-[#343434] mx-[40px] xl:mx-[250px] md:mx-[100px] font-regular text-[14px] md:text-[18px]">
                    For more than 65 years, top executives and owners of small and mid-sized businesses have relied on our
                    unique coaching model. It’s a proven approach that helped member companies operate for 21+ years on
                    average, while most businesses fail within 5 years.
                </p>
            </div>

            <div class="relative mt-10 space-y-8">
                <h1 class="text-center text-[#000000] text-[20px] md:text-[30px] mt-14">Why Peer Advisory Groups Outperform
                    Solo Coaching</h1>
                <div class="flex flex-col md:flex-col lg:flex-row justify-center items-center gap-8">
                    {{-- Card 1 --}}
                    <div class="bg-[#003F5F] w-[380px] h-[600px] space-y-4 py-10">
                        <div class="flex justify-center items-center">
                            <img src="https://www.vistage.com/wp-content/uploads/2025/09/Group-91.png" alt="">
                        </div>
                        <div class="text-center text-[#edc01c] text-[22px] px-8 py-2">
                            <h2>Real-world guidance for high-stakes decisions</h2>
                        </div>
                        <div class="text-[#ffffff] text-[17px] text-left px-10 py-8">
                            <p>Whether you’re navigating your first major acquisition, preparing for succession or scaling
                                through economic uncertainty, you need guidance from experienced leaders who’ve faced
                                comparable challenges on their own leadership development path.</p>
                        </div>
                    </div>
                    {{-- Card 2 --}}
                    <div class="bg-[#003F5F] w-[380px] h-[600px] space-y-4 py-10">
                        <div class="flex justify-center items-center">
                            <img src="https://www.vistage.com/wp-content/uploads/2025/09/Group-84.png" alt="">
                        </div>
                        <div class="text-center text-[#edc01c] text-[22px] px-8 py-2">
                            <h2>Designed for your growth stage</h2>
                        </div>
                        <div class="text-[#ffffff] text-[17px] text-left px-10 py-8">
                            <p>GrowthMaster’s peer advisory groups are designed to support CEOs at different stages of
                                growth – from those managing their first $1M+ company to executives leading
                                multi-million-dollar enterprises – by providing a space where issues can be processed in a
                                group setting, giving you the benefit of collective insights from your peers.</p>
                        </div>
                    </div>
                    {{-- Card 3 --}}
                    <div class="bg-[#003F5F] w-[380px] h-[600px] space-y-4 py-10">
                        <div class="flex justify-center items-center">
                            <img src="https://www.vistage.com/wp-content/uploads/2025/09/Group-89.png" alt="">
                        </div>
                        <div class="text-center text-[#edc01c] text-[22px] px-8 py-2">
                            <h2>Highly selective membership at every stage</h2>
                        </div>
                        <div class="text-[#ffffff] text-[17px] text-left px-10 py-8">
                            <p>We vet members so that only those truly committed to the leadership climb and helping others
                                succeed gain membership.</p>
                        </div>
                    </div>
                </div>
                <div class="flex justify-center items-center mt-10">
                    <button class="group py-5 px-[25px] text-[16px] md:text-[18px] border-2 border-[#003F5F]
                                text-[#003F5F] bg-white rounded 
                                transition-all duration-300 ease-in-out
                                hover:bg-[#003F5F] hover:text-white font-semibold">
                        JOIN A GROUP

                        <span class="ms-3 transition-all duration-300 ease-in-out group-hover:text-white">
                            <i class="fa-solid fa-angle-right"></i>
                        </span>
                    </button>
                </div>
            </div>

            <div class="flex flex-col  justify-center items-center mt-10 gap-10">
                <h1 class="text-center text-[#000000] text-[20px] md:text-[30px] mt-10">
                    Why Peer Advisory Groups Outperform Traditional Consulting
                </h1>
                <p
                    class="text-start text-[#343434] mx-[40px] xl:mx-[250px] md:mx-[100px] font-regular text-[14px] md:text-[18px]">
                    Most business advice comes from people who’ve never carried your level of responsibility. Consultants
                    offer theoretical frameworks. Your internal team provides operational insight but lacks strategic
                    distance. Your GrowthMaster peers bring something different:
                    real-world experience making decisions that affect hundreds of employees and millions in revenue.
                </p>
                <p
                    class="text-start text-[#343434] mx-[40px] xl:mx-[250px] md:mx-[100px] font-regular text-[14px] md:text-[18px]">
                    When you’re evaluating a $10M acquisition or considering international expansion,
                    you need input from leaders who’ve carried the weight of decisions like these.
                    This isn’t about generic best practices. It’s about learning from executives who’ve already solved the
                    problems you’re facing.
                </p>
            </div>

            {{-- block Group Items --}}
            <div class="relative w-full space-y-12 py-8">
                {{-- blcok 1 --}}
                <div
                    class="flex flex-col md:flex-row justify-center items-center py-4 px-4 xl:py-16 xl:px-35 gap-8 bg-[#f5f2f2]">
                    {{-- image --}}
                    <div class="w-full md:w-1/2 flex md:hidden justify-items-start">
                        <img src="https://www.vistage.com/wp-content/uploads/2025/09/peer-group.webp" alt="">
                    </div>
                    {{-- text --}}
                    <div class="w-full md:w-1/2 space-y-3">
                        <h1 class="text-[#000000] text-[16px] md:text-[20px]">1. It Starts With the Group</h1>
                        <p class="text-start text-[#343434] font-regular text-[14px] md:text-[18px]">
                            At the heart of the Growthmaster experience is the confidential peer advisory group.
                            Once a month, you meet to work through challenges and opportunities with 10-15 high-caliber
                            executives from non-competing organizations. Each member brings fresh perspectives,
                            objective advice and their own experiences to help you reach higher growth
                        </p>
                        <a href="" class="text-[#003f5e] flex gap-2 font-semibold">
                            <button class="cursor-pointer hover:text-[#0c6c9b]">Learn more about Vistage Chairs</button>
                            <p class="arrow_r text-xl">&rarr;</p>
                        </a>
                    </div>
                    {{-- image --}}
                    <div class="hidden w-full md:w-1/2 md:flex justify-items-start">
                        <img src="https://www.vistage.com/wp-content/uploads/2025/09/peer-group.webp" alt="">
                    </div>
                </div>
                {{-- blcok 2 --}}
                <div class="flex flex-col md:flex-row justify-center items-center py-4 px-4 xl:py-16 xl:px-35 gap-8">
                    {{-- image --}}
                    <div class="w-full md:w-1/2 flex justify-items-start">
                        <img src="https://www.vistage.com/wp-content/uploads/2025/09/2025-chair-768x500.webp" alt="">
                    </div>
                    {{-- text --}}
                    <div class="w-full md:w-1/2 space-y-3">
                        <h1 class="text-[#000000] text-[16px] md:text-[20px]">2. A Trusted Guide Leads the Way</h1>
                        <p class="text-start text-[#343434] font-regular text-[14px] md:text-[18px]">
                            As a member, you have access to your own CEO Coach (Advisor). Mentors guide group
                            discussions using our proven framework for processing issues and keeping discussions focused.
                        </p>
                        <a href="" class="text-[#003f5e] flex gap-2 font-semibold">
                            <button class="cursor-pointer hover:text-[#0c6c9b]">Learn more about Vistage Chairs</button>
                            <p class="arrow_r text-xl">&rarr;</p>
                        </a>
                    </div>
                </div>
                {{-- blcok 3 --}}
                <div
                    class="flex flex-col md:flex-row justify-center items-center py-4 px-4 xl:py-16 xl:px-35 gap-8 bg-[#f5f2f2]">
                    {{-- image --}}
                    <div class="md:hidden w-full md:w-1/2 flex justify-items-start">
                        <img src="https://www.vistage.com/wp-content/uploads/2025/09/2025-Events-768x499.webp" alt="">
                    </div>
                    {{-- text --}}
                    <div class="w-full md:w-1/2 space-y-3">
                        <h1 class="text-[#000000] text-[16px] md:text-[20px]">3. Thought Leaders Keep You Current</h1>
                        <p class="text-start text-[#343434] font-regular text-[14px] md:text-[18px]">
                            During group meetings and through exclusive events and webinars, respected thought leaders
                            share their expertise on today’s most relevant topics. From HR to AI, tariffs and talent,
                            you’re continually kept up-to-speed on the issues that matter most.
                        </p>
                        <a href="" class="text-[#003f5e] flex gap-2">
                            <button>Learn more about Vistage speakers</button>
                            <p class="arrow_r">&rarr;</p>
                        </a>
                    </div>
                    {{-- image --}}
                    <div class="hidden w-full md:w-1/2 md:flex justify-items-start">
                        <img src="https://www.vistage.com/wp-content/uploads/2025/09/2025-Events-768x499.webp" alt="">
                    </div>
                </div>
                {{-- blcok 4 --}}
                <div class="flex flex-col md:flex-row justify-center items-center py-4 px-4 xl:py-16 xl:px-35 gap-8">
                    {{-- image --}}
                    <div class="w-full md:w-1/2 flex justify-items-start">
                        <img src="https://www.vistage.com/wp-content/uploads/2025/09/2025-Confidence-Index-768x500.webp"
                            alt="">
                    </div>
                    {{-- text --}}
                    <div class="w-full md:w-1/2 space-y-3">
                        <h1 class="text-[#000000] text-[16px] md:text-[20px]">4. Research Prompts Action</h1>
                        <p class="text-start text-[#343434] font-regular text-[14px] md:text-[18px]">
                            GRowthmaster Research collaborates with the top minds in business to create salient insights for
                            CEOs
                            and owners of small and midsize companies. Our thoughtful reports, analyses and online events
                            help you
                            make better decisions that drive better outcomes.
                        </p>
                        <a href="" class="text-[#003f5e] flex gap-2">
                            <button>Learn more about our research</button>
                            <p class="arrow_r">&rarr;</p>
                        </a>
                    </div>
                </div>
                {{-- blcok 5 --}}
                <div
                    class="flex flex-col md:flex-row justify-center items-center py-4 px-4 xl:py-16 xl:px-35 gap-8 bg-[#f5f2f2]">
                    {{-- image --}}
                    <div class="md:hidden w-full md:w-1/2 flex justify-items-start">
                        <img src="https://www.vistage.com/wp-content/uploads/2025/09/2025-Networks-768x499.webp" alt="">
                    </div>
                    {{-- text --}}
                    <div class="w-full md:w-1/2 space-y-3">
                        <h1 class="text-[#000000] text-[16px] md:text-[20px]">5. A Global Network Supports</h1>
                        <p class="text-start text-[#343434] font-regular text-[14px] md:text-[18px]">
                            Vistage has group locations in across the United States. Our local Chairs build strong,
                            trusted communities where leaders openly tackle challenges and grow.
                        </p>
                        <a href="" class="text-[#003f5e] flex gap-2">
                            <button>Learn more about Vistage networks</button>
                            <p class="arrow_r">&rarr;</p>
                        </a>
                    </div>
                    {{-- image --}}
                    <div class="hidden w-full md:w-1/2 md:flex justify-items-start">
                        <img src="https://www.vistage.com/wp-content/uploads/2025/09/2025-Networks-768x499.webp" alt="">
                    </div>
                </div>
                {{-- blcok 6 --}}
                <div class="flex flex-col md:flex-row justify-center items-center py-4 px-4 xl:py-16 xl:px-35 gap-8">
                    {{-- image --}}
                    <div class="w-full md:w-1/2 flex justify-items-start">
                        <img src="https://www.vistage.com/wp-content/uploads/2025/09/2025-Speaker-768x500.webp" alt="">
                    </div>
                    {{-- text --}}
                    <div class="w-full md:w-1/2 space-y-3">
                        <h1 class="text-[#000000] text-[16px] md:text-[20px]">6. Events Motivate, Inform and Connect</h1>
                        <p class="text-start text-[#343434] font-regular text-[14px] md:text-[18px]">
                            Grow your network with like-minded high achievers at local and regional events while garnering
                            fresh insights, timely perspectives and inspiration to bring back to your business.
                        </p>
                        <a href="" class="text-[#003f5e] flex gap-2">
                            <button>Learn more about Vistage events</button>
                            <p class="arrow_r">&rarr;</p>
                        </a>
                    </div>
                </div>
                {{-- Button --}}
                <div class="flex justify-center items-center mt-10">
                    <button class="group py-5 px-[25px] text-[16px] md:text-[18px] border-2 border-[#003F5F]
                                text-[#003F5F] bg-white rounded 
                                transition-all duration-300 ease-in-out
                                hover:bg-[#003F5F] hover:text-white font-semibold">
                    JOIN A GROUP

                    <span class="ms-3 transition-all duration-300 ease-in-out group-hover:text-white">
                        <i class="fa-solid fa-angle-right"></i>
                    </span>
                </button>
            </div>
            </div>

            <div class="relative w-full space-y-4">
                <h1 class="text-center text-[#000000] text-[20px] md:text-[30px] mt-10 px-6 xl:px-50 md:px-16">
                    What Makes Peer Advisory Groups More Effective Than Other Leadership Development
                </h1>
                <p
                    class="text-start text-[#343434] font-regular text-[14px] md:text-[18px] px-6 xl:px-50 md:px-16">
                    Peer advisory groups address the root challenge of leadership issues: the isolation that comes with executive responsibility. 
                    As the final decision-maker, you need more than advice from internal advisors or business coaches who lack executive experience
                </p>
                
                <!-- Accordion item (current element) 1 -->
                <div class="c-accordion__item py-4 px-6 md:px-16 xl:px-50">

                    <!-- Header -->
                    <div class="flex items-center justify-between cursor-pointer accordion-trigger"
                        aria-expanded="false"
                        aria-controls="accordion-panel-1"
                        id="accordion-trigger-1">

                        <h1 class="text-[#000000] text-[16px] md:text-[24px]">
                            The compound effect of multiple perspectives
                        </h1>

                        <!-- Icon -->
                        <div class="group flex items-center justify-center w-8 h-8">
                            <span class="plus block text-2xl">+</span>
                            <span class="minus hidden text-2xl">−</span>
                        </div>
                    </div>

                    <!-- Panel -->
                    <div
                        id="accordion-panel-1"
                        class="accordion-panel overflow-hidden max-h-0 opacity-0 transition-all duration-300 ease-in-out text-black mt-2"
                    >
                        <p class="py-4 text-[#343434] font-regular text-[14px] md:text-[18px]">
                            Solo coaching gives you one expert’s viewpoint. Your Growthmaster peer advisory group gives you 10-15 different
                            approaches to the same challenge. These leaders can help you see patterns and possibilities that only 
                            emerge when diverse experience converges on your specific situation.
                            Consider the CEO facing a potential acquisition. A consultant might provide due diligence frameworks. 
                            An executive coach might help with decision-making confidence. But your peer group includes executives who’ve 
                            acquired companies, been acquired, walked away from deals and lived with the consequences of each choice. 
                            That collective wisdom changes the quality of your decision-making process.
                        </p>
                    </div>

                </div>
                <!-- Accordion item (current element) 2 -->
                <div class="c-accordion__item py-4 px-6 md:px-16 xl:px-50">

                    <!-- Header -->
                    <div class="flex items-center justify-between cursor-pointer accordion-trigger"
                        aria-expanded="false"
                        aria-controls="accordion-panel-2"
                        id="accordion-trigger-2">

                        <h1 class="text-[#000000] text-[16px] md:text-[24px]">
                            Why accountability from peers outperforms other models
                        </h1>

                        <!-- Icon -->
                        <div class="group flex items-center justify-center w-8 h-8">
                            <span class="plus block text-2xl">+</span>
                            <span class="minus hidden text-2xl">−</span>
                        </div>
                    </div>

                    <!-- Panel -->
                    <div
                        id="accordion-panel-2"
                        class="accordion-panel overflow-hidden max-h-0 opacity-0 transition-all duration-300 ease-in-out text-black mt-2"
                    >
                        <p class="py-4 text-[#343434] font-regular text-[14px] md:text-[18px]">
                            Solo coaching gives you one expert’s viewpoint. Your Growthmaster peer advisory group gives you 10-15 different
                            approaches to the same challenge. These leaders can help you see patterns and possibilities that only 
                            emerge when diverse experience converges on your specific situation.
                            Consider the CEO facing a potential acquisition. A consultant might provide due diligence frameworks. 
                            An executive coach might help with decision-making confidence. But your peer group includes executives who’ve 
                            acquired companies, been acquired, walked away from deals and lived with the consequences of each choice. 
                            That collective wisdom changes the quality of your decision-making process.
                        </p>
                    </div>

                </div>
                <!-- Accordion item (current element) 3 -->
                <div class="c-accordion__item py-4 px-6 md:px-16 xl:px-50">

                    <!-- Header -->
                    <div class="flex items-center justify-between cursor-pointer accordion-trigger"
                        aria-expanded="false"
                        aria-controls="accordion-panel-3"
                        id="accordion-trigger-3">

                        <h1 class="text-[#000000] text-[16px] md:text-[24px]">
                            The safety of strategic vulnerability
                        </h1>

                        <!-- Icon -->
                        <div class="group flex items-center justify-center w-8 h-8">
                            <span class="plus block text-2xl">+</span>
                            <span class="minus hidden text-2xl">−</span>
                        </div>
                    </div>

                    <!-- Panel -->
                    <div
                        id="accordion-panel-3"
                        class="accordion-panel overflow-hidden max-h-0 opacity-0 transition-all duration-300 ease-in-out text-black mt-2"
                    >
                        <p class="py-4 text-[#343434] font-regular text-[14px] md:text-[18px]">
                            Solo coaching gives you one expert’s viewpoint. Your Growthmaster peer advisory group gives you 10-15 different
                            approaches to the same challenge. These leaders can help you see patterns and possibilities that only 
                            emerge when diverse experience converges on your specific situation.
                            Consider the CEO facing a potential acquisition. A consultant might provide due diligence frameworks. 
                            An executive coach might help with decision-making confidence. But your peer group includes executives who’ve 
                            acquired companies, been acquired, walked away from deals and lived with the consequences of each choice. 
                            That collective wisdom changes the quality of your decision-making process.
                        </p>
                    </div>

                </div>
                <!-- Accordion item (current element) 4 -->
                <div class="c-accordion__item py-4 px-6 md:px-16 xl:px-50">

                    <!-- Header -->
                    <div class="flex items-center justify-between cursor-pointer accordion-trigger"
                        aria-expanded="false"
                        aria-controls="accordion-panel-4"
                        id="accordion-trigger-4">

                        <h1 class="text-[#000000] text-[16px] md:text-[24px]">
                            Proven results across economic cycles
                        </h1>

                        <!-- Icon -->
                        <div class="group flex items-center justify-center w-8 h-8">
                            <span class="plus block text-2xl">+</span>
                            <span class="minus hidden text-2xl">−</span>
                        </div>
                    </div>

                    <!-- Panel -->
                    <div
                        id="accordion-panel-4"
                        class="accordion-panel overflow-hidden max-h-0 opacity-0 transition-all duration-300 ease-in-out text-black mt-2"
                    >
                        <p class="py-4 text-[#343434] font-regular text-[14px] md:text-[18px]">
                            Solo coaching gives you one expert’s viewpoint. Your Growthmaster peer advisory group gives you 10-15 different
                            approaches to the same challenge. These leaders can help you see patterns and possibilities that only 
                            emerge when diverse experience converges on your specific situation.
                        </p>
                    </div>

                </div>

            </div>

            {{-- Frequently asked questions --}}
            <div class="relative w-full">
                <h1 class="text-center text-[#000000] text-[20px] md:text-[30px] mt-10 px-6 xl:px-50 md:px-16">
                    Frequently asked questions
                </h1>
                <div id="faq-container" class="max-w-5xl mx-auto p-6 bg-white">
                    
                    <div class="cursor-pointer">
                        <button class="question-toggle cursor-pointer flex justify-between items-center w-full py-4 text-lg font-medium text-gray-900 focus:outline-none">
                            <span class="icon-indicator mr-3 text-xl text-gray-900">
                                
                            </span>
                            <span class="grow text-left">
                               What is a Growthmaster membership?
                            </span>
                        </button>
                        <div class="content px-10 pb-4 text-[#343434] overflow-hidden max-h-0 opacity-0 transition-all duration-300 ease-in-out">
                            <p>
                                As a Growthmaster member, you’re part of a group of other CEOs, business owners or key executives who are committed to helping each other make better decisions, get better results and become better leaders.
                            </p>
                        </div>
                    </div>

                    <div class="cursor-pointer">
                        <button class="question-toggle cursor-pointer flex justify-between items-center w-full py-4 text-lg font-medium text-gray-900 focus:outline-none">
                            <span class="icon-indicator mr-3 text-xl text-gray-900">
                                &#9654;
                            </span>
                            <span class="grow text-left">
                                How does Vistage work?
                            </span>
                        </button>
                        <div class="content px-10 pb-4 text-[#343434] overflow-hidden max-h-0 opacity-0 transition-all duration-300 ease-in-out">
                            <p>
                                Growthmaster members set aside one day each month to meet with their peer advisory group and work on the 
                                big-picture vision for their business and address issues that may be holding them back. That means they 
                                make time to tackle strategic plans, as well as challenges and opportunities. During the meeting, 
                                they help each other vet ideas, troubleshoot strategies and find solutions together. Meetings are facilitated by
                                an executive mentor who uses a proprietary method for keeping the conversations focused and productive.
                            </p>
                        </div>
                    </div>

                    <div class="cursor-pointer">
                        <button class="question-toggle cursor-pointer flex justify-between items-center w-full py-4 text-lg font-medium text-gray-900 focus:outline-none">
                            <span class="icon-indicator mr-3 text-xl text-black">
                                &#9654;
                            </span>
                            <span class="grow text-left">
                                Is Growthmaster good for networking?
                            </span>
                        </button>
                        <div class="content px-10 pb-4 text-[#343434] overflow-hidden max-h-0 opacity-0 transition-all duration-300 ease-in-out">
                            <p>
                                Growthmaster is much more than networking. It’s solving problems with a group of your peers in real-time. 
                                As a Vistage member, you also have access to Vistage Networks— a 24/7 online forum that helps you leverage the 
                                expertise of CEOs, business owners and executives around the world who share the same industry, affiliation, 
                                or area of interest. Members can connect online for 
                                feedback and critical advice, or meet in person at events featuring dynamic thought leaders.
                            </p>
                        </div>
                    </div>

                    <div class="cursor-pointer">
                        <button class="question-toggle cursor-pointer flex justify-between items-center w-full py-4 text-lg font-medium text-gray-900 focus:outline-none">
                            <span class="icon-indicator mr-3 text-xl">
                                &#9654;
                            </span>
                            <span class="grow text-left">
                                Is Growthmaster worth it?
                            </span>
                        </button>
                        <div class="content px-10 pb-4 text-[#343434] overflow-hidden max-h-0 opacity-0 transition-all duration-300 ease-in-out">
                            <p>
                                Our members think that Growthmaster is worth it. Growthmaster has helped top executives across 
                                the country since 2022. Today statistics have 
                                shown that they grow their businesses faster than non-members with comparable sized companies.
                            </p>
                        </div>
                    </div>

                    <div class="cursor-pointer">
                        <button class="question-toggle cursor-pointer flex justify-between items-center w-full py-4 text-lg font-medium text-gray-900 focus:outline-none">
                            <span class="icon-indicator mr-3 text-xl text-black">
                                &#9654;
                            </span>
                            <span class="grow text-left">
                                How can I join Vistage?
                            </span>
                        </button>
                        <div class="content px-10 pb-4 text-[#343434] overflow-hidden max-h-0 opacity-0 transition-all duration-300 ease-in-out">
                            <p>
                                Fill out an application to see if you qualify. If so, a Market Leader will be in touch 
                                to answer any questions, inform you of introductory events in your area and share exclusive content with you. 
                                You will also be matched with the right executive mentor and peer group in your area.
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

    
<script>
document.addEventListener('DOMContentLoaded', () => {
  document.querySelectorAll('.accordion-trigger').forEach(trigger => {

    trigger.addEventListener('click', () => {
      const panel = document.getElementById(trigger.getAttribute('aria-controls'));
      const isOpen = trigger.getAttribute('aria-expanded') === 'true';

      // Close all others (optional – remove if you want multiple open)
      document.querySelectorAll('.accordion-trigger').forEach(btn => {
        btn.setAttribute('aria-expanded', 'false');
        const otherPanel = document.getElementById(btn.getAttribute('aria-controls'));
        otherPanel.style.maxHeight = null;
        otherPanel.classList.remove('opacity-100');
        otherPanel.classList.add('opacity-0');

        btn.querySelector('.plus').classList.remove('hidden');
        btn.querySelector('.minus').classList.add('hidden');
      });

      if (!isOpen) {
        // Open
        trigger.setAttribute('aria-expanded', 'true');
        panel.style.maxHeight = panel.scrollHeight + "px";
        panel.classList.remove('opacity-0');
        panel.classList.add('opacity-100');

        trigger.querySelector('.plus').classList.add('hidden');
        trigger.querySelector('.minus').classList.remove('hidden');
      }
    });

  });
});
</script>
{{-- Frequently asked questions --}}
<script>
document.addEventListener('DOMContentLoaded', () => {
    const toggles = document.querySelectorAll('.question-toggle');

    toggles.forEach(toggle => {
        toggle.addEventListener('click', () => {
            const parentDiv = toggle.parentElement;
            const content = parentDiv.querySelector('.content');
            const icon = parentDiv.querySelector('.icon-indicator');

            const isOpen = content.classList.contains('max-h-[500px]');

            // Close all others
            toggles.forEach(otherToggle => {
                const otherContent = otherToggle.parentElement.querySelector('.content');
                const otherIcon = otherToggle.parentElement.querySelector('.icon-indicator');

                otherContent.classList.remove('max-h-[500px]', 'opacity-100');
                otherContent.classList.add('max-h-0', 'opacity-0');
                otherIcon.innerHTML = '&#9654;';
            });

            // Toggle current
            if (!isOpen) {
                content.classList.remove('max-h-0', 'opacity-0');
                content.classList.add('max-h-[500px]', 'opacity-100');
                icon.innerHTML = '&#9660;';
            } else {
                content.classList.remove('max-h-[500px]', 'opacity-100');
                content.classList.add('max-h-0', 'opacity-0');
                icon.innerHTML = '&#9654;';
            }
        });
    });
});
</script>


@endsection