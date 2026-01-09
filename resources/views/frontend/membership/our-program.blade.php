@extends('layout.app')
@section('title', 'Executive Coaching Services & Leadership Programs')
@section('content')
    @component('components.navbar')

    @endcomponent
    <div class="space-y-10">
        <section class="relative w-full">
            <div class="w-full h-[110vh] md:h-screen relative">
                <!-- Hero Image -->
                <img src="{{ asset('https://www.vistage.com/wp-content/uploads/2025/09/2025-programs-hero-2048x849.webp') }}" class="w-full h-full object-cover" alt="Hero Image">
                <div class="absolute inset-0 bg-black/40 w-full h-full"></div>
                <!-- Overlay Content -->
                <div class="absolute inset-0 flex flex-col justify-center items-start px-6 md:px-40 md:py-20 md:top-30 text-white">

                    <h1
                        class="text-[30px] md:w-3xl text-start md:text-[35px] font-semibold max-w-[940px] leading-tight">
                        Executive Coaching Services & Leadership Programs
                    </h1>

                    <p
                        class="text-[16px] md:w-2xl text-start md:text-[18px] mt-5 font-regular max-w-[940px] leading-tight">
                        Whether you’re a CEO seeking strategic peer advisory or looking to strengthen your leadership team, GrowthMaster offers programs designed for varying levels of responsibility and organizational complexity.
                    </p>

                    <p
                        class="text-[16px] md:w-2xl text-start mt-5 md:text-[18px] font-regular max-w-[940px] leading-tight">
                        All programs offer the same foundational benefits of the GrowthMaster platform and professionally facilitated peer groups, but the context and scale of the challenges discussed are aligned with your business revenue and role.
                    </p>
                    <p
                        class="text-[16px] md:w-2xl text-start mt-5 md:text-[18px] font-regular max-w-[940px] leading-tight">
                        Find the right program fit for you and your team.
                    </p>

                    <a href="#program-form">
                        <button
                        class="mt-6 py-5 px-7 bg-[#68875d] text-[#ffffff] hover:bg-[#003F5F] hover:text-white rounded font-semibold w-max">
                        JOIN A PROGRAM
                    </button>
                    </a>
                </div>
            </div>
        </section>
        <div class="text-[#333333] text-4xl font-2xl text-center space-y-8">
            <h1>Programs for CEOs, Presidents, Founders, & Owners</h1>
            <p class="text-xl font-normal max-w-5xl mx-auto text-left">Designed for CEOs, Presidents, Founders, Owners, or first-time CEOs, these GrowthMaster programs provide unparalleled peer advisory and executive coaching for leaders navigating the complexities of business.</p>
            <p class="text-xl font-normal max-w-5xl mx-auto text-left">They are ideal for those with a formal management team and established departments, processes, and systems in place. Our members are driven by a desire to learn, identify and resolve blind spots, and significantly enhance their leadership ability.</p>
            <h1>How GrowthMaster Helped Karen Norheim Define Her CEO Journey</h1>
            {{-- Video --}}
            <div class="flex justify-center items-center">
                <video src="{{ asset('assets/vedo.mp4') }}"></video>
            </div>
            {{-- Button Join out Programs --}}
            <div class="flex justify-center items-center mt-10">
               <a href="#program-form">
                 <button class="group py-5 px-[25px] text-[16px] md:text-[18px] border-2 border-[#68875d]
                            text-[#68875d] bg-white rounded 
                            transition-all duration-300 ease-in-out
                            hover:bg-[#68875d] hover:text-white font-semibold">
                    JOIN A PROGRAM

                    <span class="ms-3 transition-all duration-300 ease-in-out group-hover:text-white">
                        <i class="fa-solid fa-angle-right"></i>
                    </span>
                </button>
               </a>
            </div>
        </div>
        {{-- Block post about Our Program --}}
        <div class="relative w-full">

            @foreach ($showProgram as $index => $program)

                <div
                    class="flex flex-col md:flex-row justify-center items-center
                        py-4 px-4 xl:py-16 xl:px-35 gap-8
                        {{ $index % 2 === 0 ? 'bg-[#f5f2f2]' : '' }}">

                    {{-- MOBILE IMAGE (top) --}}
                    <div class="md:hidden w-full md:w-1/2 flex">
                        <img src="{{ asset('assets/our_program/' . $program->image) }}" alt="">
                    </div>

                    {{-- DESKTOP IMAGE LEFT (odd block) --}}
                    @if ($index % 2 !== 0)
                        <div class="hidden md:flex w-full md:w-1/2">
                            <img src="{{ asset('assets/our_program/' . $program->image) }}" alt="">
                        </div>
                    @endif

                    {{-- TEXT --}}
                    <div class="w-full md:w-1/2 space-y-4 md:space-y-8">
                        <h3 class="text-[#333333] text-[16px] md:text-[20px]">
                            {{ $program->audience }}
                        </h3>

                        <h1 class="text-[#333333] text-[30px] lg:text-[35px]">
                            {{ $program->title }}
                        </h1>

                        <p class="text-[#343434] text-[14px] md:text-[18px]">
                            {{ $program->description }}
                        </p>

                        @if ($program->button_text)
                            <a href="{{ $program->button_link ?? '#' }}"
                            class="text-[#003f5e] flex gap-2 font-semibold text-[16px] md:text-[18px]">
                                <span class="hover:text-[#0c6c9b]">
                                    {{ $program->button_text }}
                                </span>
                                <span class="text-xl">&rarr;</span>
                            </a>
                        @endif
                    </div>

                    {{-- DESKTOP IMAGE RIGHT (even block) --}}
                    @if ($index % 2 === 0)
                        <div class="hidden md:flex w-full md:w-1/2">
                            <img src="{{ asset('assets/our_program/' . $program->image) }}" alt="">
                        </div>
                    @endif

                </div>

            @endforeach

        </div>

        {{-- Elevate Your Team with Leadership Development Programs --}}
        <section class="w-full bg-[#003f5e] py-16 px-4 md:px-12 lg:px-24">
            <!-- Title -->
            <h1 class="text-[28px] md:text-[36px] lg:text-[42px] font-semibold leading-tight text-center text-[#ffffff]">
                Elevate Your Team with Leadership Development Programs
            </h1>
            <div class="max-w-6xl mx-auto text-white space-y-10 py-6">

                <!-- Intro paragraph -->
                <p class="text-[16px] md:text-[18px] leading-relaxed max-w-4xl">
                    For CEOs who want to accelerate growth and protect their business, 
                    Leadership Development Programs drive the transformation of employees throughout their organization.
                </p>

                <!-- Highlight line -->
                <h2 class="text-[#f5c400] text-[20px] md:text-[22px] font-semibold">
                    Strengthen leadership at every level of your organization
                </h2>

                <!-- Description -->
                <p class="text-[16px] md:text-[18px] leading-relaxed max-w-5xl">
                    Adapted from the proven Vistage model for how world-class leaders learn, each program is purpose-built to 
                    develop employees based on your goals and deliver measurable results through guided peer advisory, 
                    coaching, and curated education.
                </p>

                <!-- Sub heading -->
                <h3 class="text-[#f5c400] text-[18px] md:text-[20px] font-semibold">
                    Match development to leadership responsibility for:
                </h3>

                <!-- Bullet list -->
                <ul class="list-disc pl-6 space-y-4 text-[16px] md:text-[18px] max-w-4xl">
                    <li>
                        Senior executives who need strategic thinking skills beyond their functional expertise
                    </li>
                    <li>
                        Experienced managers ready to lead complex initiatives and develop others
                    </li>
                    <li>
                        Rising stars who show potential but need comprehensive leadership training
                    </li>
                    <li>
                        Entire teams requiring aligned leadership culture and collaborative skills
                    </li>
                </ul>

            </div>
        </section>
        {{-- Join 45,000 Leaders Who’ve Chosen Strategic Accountability --}}
        <section class="relative w-full">
            <h1 class="text-center text-[#000000] text-[20px] md:text-[30px] mt-10 px-6 xl:px-50 md:px-16">
                Join 45,000 Leaders Who’ve Chosen Strategic Accountability Over Going It Alone
            </h1>
            <p class="text-[#343434] text-lg max-w-[70%] mx-auto text-left">
                Being at the top doesn’t have to mean leading in isolation. Whether you need peer insights for high-stakes decisions or want to develop your team’s leadership capabilities, 
                Growth Master provides a structured support system that transforms how you lead and how your organization performs.
            </p>

             <div class="max-w-6xl mx-auto mt-12 border border-gray-300">
                <!-- Header -->
                <div class="grid grid-cols-2">
                    <div class="bg-[#003A57] py-5 text-center border-r border-gray-300">
                        <h2 class="text-[#FFC300] text-xl font-bold">
                            The Investment
                        </h2>
                    </div>
                    <div class="bg-[#003A57] py-5 text-center">
                        <h2 class="text-[#FFC300] text-xl font-bold">
                            The Results
                        </h2>
                    </div>
                </div>

                <!-- Row 1 -->
                <div class="grid grid-cols-2 border-t border-gray-300 text-lg">
                    <div class="p-6 border-r border-gray-300 text-gray-900">
                        Strategic peer advisory and professional executive coaching.
                    </div>
                    <div class="p-6 text-gray-900">
                        Vistage members grow their companies 2.2x faster than non-members.
                    </div>
                </div>

                <!-- Row 2 (Gray background) -->
                <div class="grid grid-cols-2 bg-gray-100 border-t border-gray-300 text-lg">
                    <div class="p-6 border-r border-gray-300 text-gray-900">
                        Proven frameworks for complex decision-making facilitation.
                    </div>
                    <div class="p-6 text-gray-900">
                        Member businesses operate 4x longer than the average U.S. company.
                    </div>
                </div>

                <!-- Row 3 -->
                <div class="grid grid-cols-2 border-t border-gray-300 text-lg">
                    <div class="p-6 border-r border-gray-300 text-gray-900">
                        Leadership development at every organizational level.
                    </div>
                    <div class="p-6 text-gray-900">
                        Proven guidance that generates ROI through improved outcomes.
                    </div>
                </div>
            </div>

        </section>
        {{-- Frequently asked questions --}}
        <div class="relative w-full">
            @include('frontend.include.faqs')
        </div>
        {{-- From Contact --}}
        <section class="relative w-full">
            <div class="space-y-4" id="program-form">
                <h1 class="text-center text-[#000000] text-[20px] md:text-[30px] mt-10 px-6 xl:px-50 md:px-16">
                    Become a Growth Master Member
                </h1>
                <p class="text-[#333333] text-lg md:text-xl text-left max-w-[60%] mx-auto">
                    With Vistage you’re joining a powerful community of high-caliber executives who challenge each other, 
                    inspire each other and share their perspectives 
                    to help each other make better decisions, become better leaders and achieve better outcomes.
                </p>
                <p class="text-[#333333] text-lg md:text-xl text-center">
                    Take your success to a new level. Complete the form below to find out if you qualify.
                </p>
            </div>
            <div class="py-6">
                @include('frontend.include.form')
            </div>
        </section>
        <div>
            @component('components.footer')

            @endcomponent
        </div>
    </div>
@endsection




