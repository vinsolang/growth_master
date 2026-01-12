@extends('layout.app')
@section('title', 'Become an Execurtive | GrowthMaster')
@section('content')
    @component('components.navbar')
    @endcomponent
    <div class=" w-full h-[80vh] relative  ">
        <!-- Video Banner -->
        <video src="https://www.vistage.com/wp-content/uploads/2025/05/bg-chair-info.mp4" autoplay loop muted
            class="w-full h-full object-cover">
        </video>

        <!-- Overlay Content -->
        <div class="absolute inset-0 flex flex-col justify-center items-start px-6 md:px-16 lg:px-24 text-white">

            <h1 class="text-[22px] text-left md:text-[35px] lg:text-[45px] font-semibold max-w-[940px] leading-tight">
                Become an Executive Coach
            </h1>
            <p class="leading-relaxed text-xl max-w-3xl text-[#ffffff] text-left">
                Ready to become an executive coach? Join Growth Master as a Chair to turn hard-won CEO experience into lasting
                impact—guide leaders, enjoy schedule freedom and build your legacy.
            </p>

            <a href="{{ route('application') }}">
                <button
                    class="mt-6 py-5 px-8 bg-[#68875d] text-[#ffffff] hover:bg-[#003F5F] hover:text-white rounded font-semibold leading-relaxed tracking-widest uppercase">
                    lead a group
                </button>
            </a>
        </div>
    </div>
    {{-- Block Image for poster --}}
    <div class="">
        @php
            $cards = [
                [
                    'image' => 'https://www.vistage.com/wp-content/uploads/2025/07/Now-build-leaders.webp',
                    'text' => 'Becoming a Growth Master Chair represents the pinnacle of executive coaching—a prestigious role reserved for accomplished leaders who understand what it means to carry P&L responsibility, lead through uncertainty and guide others through the challenges you’ve already mastered.',
                    'title' => 'You’ve built companies. Now build leaders.'
                ],
                [
                    'image' => 'https://www.vistage.com/wp-content/uploads/2025/07/The-Most-Rewarding-Path-Beyond-The-C-Suite.webp',
                    'text' => 'Unlike generic coaching certifications that treat everyone the same, the Growth Master Chair role is designed specifically for executives who’ve walked the path today’s CEOs are navigating. You’re not learning to coach from textbooks—you’re sharing hard-won experience with business leaders who face the same pressures you once conquered.',
                    'title' => 'The Most Rewarding Path Beyond The C-Suite'
                ],
            ];
        @endphp
        <div class="flex justify-center items-center min-h-screen">
            <div class="flex flex-col space-y-7 w-full max-w-8xl">
                @foreach($cards as $index => $card)

                    <div
                        class="flex flex-col lg:flex-row justify-center items-center lg:space-y-0 space-y-8 w-full px-4 lg:px-24">

                        {{-- TEXT --}}
                        <div class="flex flex-col justify-center items-start lg:w-1/2 w-full lg:h-[400px] order-2 space-y-10 md:py-0 py-4
                                                    {{ $index % 2 == 0 ? 'lg:order-1' : 'lg:order-2' }}">
                            <h1 class="text-[#000000] lg:text-5xl text-2xl font-semibold text-left px-4 md:px-12">
                                {{ $card['title'] }}
                            </h1>
                            <p class="text-left text-[#454545] md:text-xl text-[18px] px-4 md:px-12">
                                {{ $card['text'] }}
                            </p>
                        </div>

                        {{-- IMAGE --}}
                        <div class="lg:w-1/2 w-full lg:h-[90%] order-1 lg:py-4
                                                    {{ $index % 2 == 0 ? 'lg:order-2' : 'lg:order-1' }}">
                            <img src="{{ $card['image'] }}" class="w-full h-full object-cover">
                        </div>

                    </div>

                @endforeach
            </div>
        </div>

    </div>

    <div class="py-12 max-w-7xl mx-auto space-y-6 text-center">
        <h1 class="text-[#000000] lg:text-4xl text-2xl font-semibold">
            Why Accomplished Executives Choose the Chair Role
        </h1>
        <p class="leading-relaxed text-xl text-[#333333] text-left mx-auto max-w-4xl">
            Successful leaders don’t transition to coaching for surface-level reasons. The decision typically stems from
            deeper motivations that go beyond traditional career advancement.
        </p>

        {{-- Card Element --}}
        <div class="py-8 max-w-8xl mx-auto space-x-4 space-y-6 grid grid-cols-1 lg:grid-cols-3 h-auto px-4 gap-x-8">
            {{-- Card 1 --}}
            <div class="bg-[#f5f2f2] p-8 max-w-4xl w-full">
                <h1 class="text-[#000000] text-2xl xl:text-2xl font-bold mb-4 text-center">
                    Beyond Financial Success
                </h1>
                <p class="text-[#333333] text-lg leading-relaxed text-left">
                    don’t just want a financially rewarding role,
                    but are seeking something deeper: the ability to create lasting impact in other leaders’
                    lives while building a career that offers both flexibility and fulfillment.
                    After reaching traditional markers of success,
                    many find themselves asking whether their work truly matters beyond the bottom line.
                </p>
            </div>

            {{-- Card 2 --}}
            <div class="bg-[#f5f2f2] p-8 max-w-4xl w-full">
                <h1 class="text-[#000000] text-2xl xl:text-2xl font-bold mb-4 text-left">
                    The Need for Purpose
                </h1>
                <p class="text-[#333333] text-lg leading-relaxed text-left">
                    After years of building businesses, many executives crave
                    work that feels meaningful on a personal level. You’ve spent
                    decades focused on one organization’s growth. Now you can
                    multiply that impact across dozens of companies and hundreds
                    of employees. Coaching allows you to see direct
                    results from your guidance—watching other leaders grow,
                    make better decisions and transform their organizations.
                </p>
            </div>
            {{-- card 3 --}}
            <div class="bg-[#f5f2f2] p-8 max-w-4xl w-full">
                <h1 class="text-[#000000] text-2xl xl:text-2xl font-bold mb-4 text-left">
                    The “What’s Next?” Moment
                </h1>
                <p class="text-[#333333] text-lg leading-relaxed text-left">
                    Whether you’ve sold your company, reached retirement
                    age but aren’t ready to retire or simply feel you’ve
                    accomplished what you set out to do in traditional business,
                    the Chair role offers a compelling answer to “what
                    comes next?” You have too much energy to step away entirely,
                    and you don’t want your hard-earned lessons to go to waste.
                </p>
            </div>
            <!-- Card 4 -->
            <div class="bg-[#f5f2f2] p-8 max-w-4xl w-full">
                <h1 class="text-[#000000] text-2xl xl:text-2xl font-bold mb-4 text-left">
                    Intellectual Challenge Without Operational Stress
                </h1>
                <p class="text-[#333333] text-lg leading-relaxed text-left">
                    As a Chair, you face complex strategic challenges daily,
                    but without the weight of execution on your shoulders.
                    You get to think at the highest level while helping others
                    navigate their operational realities. There’s no HR drama,
                    no cash flow stress, no operational fires to fight—just pure
                    strategic thinking and leadership development.
                </p>
            </div>

            <!-- Card 5 -->
            <div class="bg-[#f5f2f2] p-8 max-w-4xl w-full">
                <h1 class="text-[#000000] text-2xl xl:text-2xl font-bold mb-4 text-left">
                    The Desire to Make an Impact
                </h1>
                <p class="text-[#333333] text-lg leading-relaxed text-left">
                    After benefiting from mentors and advisors throughout your career,
                    becoming a Chair lets you pay that forward. You remember the moments when someone’s guidance changed
                    your trajectory.
                    Now you can be that person for other leaders navigating challenges you’ve already solved.
                </p>
            </div>
            {{-- Card 6 --}}
            <div class="bg-[#f5f2f2] p-8 max-w-4xl w-full">
                <h1 class="text-[#000000] text-2xl xl:text-2xl font-bold mb-4 text-left">
                    Lifestyle Flexibility
                </h1>
                <p class="text-[#333333] text-lg leading-relaxed text-left">
                    The Chair role offers something rare for high-impact work:
                    control over your schedule. You can build your practice around how you want to live,
                    whether that means extended travel, family commitments or pursuing other interests.
                    Many Chairs structure their calendar with dedicated time blocks for family and volunteering
                    while maintaining a fulfilling professional practice.
                </p>
            </div>

            {{-- Card 7 --}}
            <div class="bg-[#f5f2f2] p-8 max-w-4xl w-full">
                <h1 class="text-[#000000] text-2xl xl:text-2xl font-bold mb-4 text-left">
                    Find Your Community
                </h1>
                <p class="text-[#333333] text-lg leading-relaxed text-left">
                    Executive roles can be isolating. As a Chair, you join a community of
                    fellow coaches who understand the weight of leadership. You’re surrounded by
                    people who’ve walked similar paths and share your commitment to developing others.
                    The camaraderie among Chairs often becomes one of the most unexpected benefits of the role.
                </p>
            </div>
        </div>
    </div>

    <div class="py-12 max-w-7xl mx-auto space-y-6 text-center">
        <h1 class="text-[#000000] lg:text-4xl text-2xl font-semibold">
            Your Role as a GrowthMaster Chair
        </h1>
        <p class="leading-relaxed text-xl text-[#333333] text-left mx-auto max-w-4xl">
            As a Growth Master Chair, you’ll work directly with CEOs to help them make better decisions and achieve measurable
            growth.
            The role combines facilitation and coaching with relationship-building in a structured framework.
        </p>

        <div class="max-8xl mx-auto bg-amber-200 text-left">

            <div class="flex">
                <div class="flex justify-center items-center bg-[#608544] w-[25%] h-40">
                    <h1 class="text-[#ffffff] text-xl md:text-3xl md:w-[90%]">Monthly Group Meetings</h1>
                </div>
                <div class="flex justify-center items-center bg-[#608544]/90 w-[75%] h-40">
                    <p class="text-white text-[16px] md:text-xl md:w-[90%]">
                        Facilitate full-day sessions with up to 18 CEOs from non-competing companies,
                        guiding structured problem-solving discussions where real business decisions get made.
                    </p>
                </div>
            </div>

            <div class="flex">
                <div class="flex justify-center items-center bg-[#608544] w-[25%] h-40">
                    <h1 class="text-[#ffffff] text-xl md:text-3xl md:w-[90%]">One-on-One Coaching</h1>
                </div>
                <div class="flex justify-center items-center bg-[#608544]/90 w-[75%] h-40">
                    <p class="text-white text-[16px] md:text-xl md:w-[90%]">
                        Meet privately with each member monthly for personalized executive coaching on their most
                        challenging leadership issues.
                    </p>
                </div>
            </div>

            <div class="flex">
                <div class="flex justify-center items-center bg-[#608544] w-[25%] h-40">
                    <h1 class="text-[#ffffff] text-xl md:text-3xl md:w-[90%]">Peer Group Development</h1>
                </div>
                <div class="flex justify-center items-center bg-[#608544]/90 w-[75%] h-40">
                    <p class="text-white text-[16px] md:text-xl md:w-[90%]">
                        With Growth Master support and guidance, you’ll strategically build your group by evaluating and selecting
                        high-caliber executives who contribute to strong group dynamics and cultural alignment.
                    </p>
                </div>
            </div>

            <div class="flex">
                <div class="flex justify-center items-center bg-[#608544] w-[25%] h-40">
                    <h1 class="text-[#ffffff] text-xl md:text-3xl md:w-[90%]">Ongoing Learning</h1>
                </div>
                <div class="flex justify-center items-center bg-[#608544]/90 w-[75%] h-40">
                    <p class="text-white text-[16px] md:text-xl md:w-[90%]">
                        Participate in Chair development events to collaborate with fellow Chairs and stay current with
                        business trends through expert speaker programs.
                    </p>
                </div>
            </div>
        </div>
    </div>


    <div class="py-12 max-w-7xl mx-auto space-y-6 text-center">
        <h1 class="text-[#000000] lg:text-4xl text-2xl font-semibold">
            Why Chairs Choose GrowthMaster Over Going Solo
        </h1>
        <p class="leading-relaxed text-xl text-[#333333] text-left mx-auto max-w-4xl px-6">
            While many accomplished executives consider independent coaching,
            the Growth Master platform offers distinct advantages that accelerate success and reduce risk.
        </p>

        {{-- Card Element --}}
        <div class="py-8 max-w-8xl mx-auto space-x-4 space-y-6 grid grid-cols-1 md:grid-cols-2 h-auto px-4 gap-x-8">
            {{-- Card 1 --}}
            <div class="bg-[#f5f2f2] p-8 max-w-4xl w-full">
                <h1 class="text-[#000000] text-2xl xl:text-2xl font-bold mb-4 text-left">
                    Proven Methodology
                </h1>
                <p class="text-[#333333] text-lg leading-relaxed text-left">
                    Instead of creating your own coaching framework, you get access to 65+
                    years of refined processes that consistently produce results. The issue-processing model, group dynamics
                    and accountability
                    systems are all tested and proven to help CEOs make better decisions and drive measurable business
                    outcomes.
                </p>
            </div>

            {{-- Card 2 --}}
            <div class="bg-[#f5f2f2] p-8 max-w-4xl w-full">
                <h1 class="text-[#000000] text-2xl xl:text-2xl font-bold mb-4 text-left">
                    Built-in Credibility
                </h1>
                <p class="text-[#333333] text-lg leading-relaxed text-left">
                    The Growth Master brand opens doors that would take years to open as an independent coach.
                    CEOs know what Growth Master represents — 65 years of proven leadership development,
                    coaching 250k business leaders — which accelerates your ability to build a quality practice.
                </p>
            </div>
            {{-- card 3 --}}
            <div class="bg-[#f5f2f2] p-8 max-w-4xl w-full">
                <h1 class="text-[#000000] text-2xl xl:text-2xl font-bold mb-4 text-left">
                    Comprehensive Learning
                </h1>
                <p class="text-[#333333] text-lg leading-relaxed text-left">
                    You don’t have to have all the answers. The Chair Academy provides intensive
                    preparation for your new role. You’ll learn facilitation techniques and coaching methodologies,
                    plus business development approaches specifically designed for executive-level work.
                </p>
            </div>
            <!-- Card 4 -->
            <div class="bg-[#f5f2f2] p-8 max-w-4xl w-full">
                <h1 class="text-[#000000] text-2xl xl:text-2xl font-bold mb-4 text-left">
                    Ongoing Support System
                </h1>
                <p class="text-[#333333] text-lg leading-relaxed text-left">
                    You’re not operating in isolation. The Chair community provides continuous support and shared resources,
                    with access to first-party research and proprietary data normally
                    only available to CEOs of Fortune 500 companies. You have experienced colleagues to turn to whenever
                    needed.
                </p>
            </div>

            <!-- Card 5 -->
            <div class="bg-[#f5f2f2] p-8 max-w-4xl w-full">
                <h1 class="text-[#000000] text-2xl xl:text-2xl font-bold mb-4 text-left">
                    Established Infrastructure
                </h1>
                <p class="text-[#333333] text-lg leading-relaxed text-left">
                    GrowthMaster handles marketing and administration, including back-office functions,
                    allowing you to focus on what you do best: working with leaders.
                    This eliminates the overhead of building a consulting practice from scratch.
                </p>
            </div>
        </div>
    </div>

    <section class="bg-[#68875d] text-white py-20 px-6">
        <div class="max-w-7xl mx-auto">

            <!-- HEADER -->
            <div class="text-center max-w-4xl mx-auto mb-20">
                <h1 class="text-4xl md:text-5xl font-semibold mb-6">
                    Run Your Practice. On Your Terms.
                </h1>
                <p class="text-lg md:text-xl text-white/90 leading-relaxed">
                    As a Growth Master Chair, you’ll create a lasting legacy while building a coaching
                    practice that offers complete schedule flexibility.
                </p>
            </div>

            <!-- CONTENT GRID -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-x-20 gap-y-16">

                <!-- ITEM 1 -->
                <div class="flex gap-6">
                    <div class="shrink-0 text-white text-4xl">
                        <!-- ICON -->
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-12 h-12" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                d="M15 7a3 3 0 11-6 0 3 3 0 016 0zM12 14v7m-6 0h12" />
                        </svg>
                    </div>
                    <div>
                        <h3 class="text-[#ffffff] text-xl font-semibold mb-3">
                            Own Your Practice:
                        </h3>
                        <p class="text-white/90 leading-relaxed">
                            You operate as an independent contractor, building a practice that
                            suits your ambition. The larger your groups, the greater your income
                            potential.
                        </p>
                    </div>
                </div>

                <!-- ITEM 2 -->
                <div class="flex gap-6">
                    <div class="shrink-0 text-white text-4xl">
                        <!-- ICON -->
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-12 h-12" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                d="M9 12h6m-6 4h6m-6-8h6M5 20h14a2 2 0 002-2V6a2 2 0 00-2-2H9l-4 4v10a2 2 0 002 2z" />
                        </svg>
                    </div>
                    <div>
                        <h3 class="text-[#ffffff] text-xl font-semibold mb-3">
                            Lasting Legacy:
                        </h3>
                        <p class="text-white/90 leading-relaxed">
                            Create deep, lasting impact by elevating dozens of business leaders
                            and lifting up your community— influence that extends far beyond
                            your direct involvement.
                        </p>
                    </div>
                </div>

                <!-- ITEM 3 -->
                <div class="flex gap-6">
                    <div class="shrink-0 text-white text-4xl">
                        <!-- ICON -->
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-12 h-12" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                d="M12 8c1.657 0 3-1.343 3-3S13.657 2 12 2 9 3.343 9 5s1.343 3 3 3zM6 22v-2a6 6 0 0112 0v2" />
                        </svg>
                    </div>
                    <div>
                        <h3 class="text-[#ffffff] text-xl font-semibold mb-3">
                            Sustained Income & Freedom:
                        </h3>
                        <p class="text-white/90 leading-relaxed">
                            Build a practice that can generate income well into your retirement
                            years with the flexibility to structure your schedule around your
                            life priorities.
                        </p>
                    </div>
                </div>

                <!-- ITEM 4 -->
                <div class="flex gap-6">
                    <div class="shrink-0 text-white text-4xl">
                        <!-- ICON -->
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-12 h-12" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                d="M12 12a4 4 0 100-8 4 4 0 000 8zM2 20h20M4 20a8 8 0 0116 0" />
                        </svg>
                    </div>
                    <div>
                        <h3 class="text-[#ffffff] text-xl font-semibold mb-3">
                            World-Class Support:
                        </h3>
                        <p class="text-white/90 leading-relaxed">
                            Access proven methodologies, comprehensive development and
                            ongoing support that eliminates the trial-and-error of building
                            an independent practice.
                        </p>
                    </div>
                </div>

            </div>
        </div>
    </section>

    {{-- Chair Contact Form --}}
    <section>
        <h1 class="text-[#000000] text-2xl md:text-4xl text-center font-semibold py-6">
            Apply to Become a Growth Master Chair
        </h1>
        <p class="text-md md:text-lg text-[#333333] max-w-4xl mx-auto">
            Growth Master Chairs mentor high-integrity executives, helping them make better decisions, 
            become better leaders and achieve better results. To learn more about this opportunity, 
            complete this short form and upload your resume/CV/biography. Our Chair selection team will contact you.
        </p>
        <div class="max-w-4xl mx-auto py-6">
            <!-- Preferred Experience -->
            <h2 class="text-2xl text-gray-900 mb-4">
                Most Chairs have these qualities:
            </h2>

            <ul class="list-disc pl-6 space-y-3 text-[#333333] leading-relaxed text-md md:text-lg">
                <li>P&L responsibility exceeding $5 million</li>
                <li>10+ years of executive experience</li>
                <li>25+ people leader</li>
                <li>Strong business acumen, communication skills, high EQ</li>
                <li>Availability and drive to build their own business</li>
            </ul>
        </div>

        <div id="">
            <form action="{{ route('chair.contact.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="max-w-7xl mx-auto p-6" id="chair-form">
                    <!-- ================= Chair Contact Form ================= -->
                    <h2 class="text-xl font-semibold mb-2">Chair Contact Form</h2>
                    <hr class="mb-6 w-1/2 border-gray-300">

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-x-10 gap-y-6">

                        <!-- First Name -->
                        <div>
                            <input name="firstname" type="text" value="{{ old('firstname') }}"
                                class="w-full h-12 bg-[#e9eff2] rounded-md px-4 focus:outline-none" placeholder="First name*">
                            @error('firstname')
                                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                            @enderror
                        </div>

                        <!-- Last Name -->
                        <div>
                            <input type="text" name="lastname" value="{{ old('lastname') }}"
                                class="w-full h-12 bg-[#e9eff2] rounded-md px-4 focus:outline-none" placeholder="Last name*">
                            @error('lastname')
                                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                            @enderror
                        </div>

                        <!-- Business Email -->
                        <div>
                            <input type="email" name="email" value="{{ old('email') }}"
                                class="w-full h-12 bg-[#e9eff2] rounded-md px-4 focus:outline-none" placeholder="Email Address">
                            @error('email')
                                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                            @enderror
                        </div>

                        <!-- Mobile Phone -->
                        <div>
                            <input type="tel" name="phone" value="{{ old('phone') }}"
                                class="w-full h-12 bg-[#e9eff2] rounded-md px-4 focus:outline-none" placeholder="Phone*">
                            @error('phone')
                                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                            @enderror
                        </div>
                        <select name="member_status" id="" class="w-full h-12 bg-[#e9eff2] text-gray-600 rounded-md px-4 focus:outline-none font-semibold">
                            <option value="">Former/Current Growth Master Member*</option>
                            <option value="yes">Yes</option>
                            <option value="no">No</option>
                        </select>
                        <select name="executive_experience" id="" class="w-full h-12 bg-[#e9eff2] text-gray-600 rounded-md px-4 focus:outline-none font-semibold">
                            <option value="">C-level executive experience*</option>
                            <option value="0-10">0-10</option>
                            <option value="16-20">16-20</option>
                            <option value="20+">20+</option>
                        </select>
                        <select name="staff"
                            class="w-full h-12 bg-[#e9eff2] text-gray-600 rounded-md px-4 focus:outline-none font-semibold">
                            
                            <option value="">Most employees managed*</option>

                            <option value="1-5" {{ old('staff') == '1-5' ? 'selected' : '' }}>1 - 5</option>
                            <option value="6-10" {{ old('staff') == '6-10' ? 'selected' : '' }}>6 - 10</option>
                            <option value="11-20" {{ old('staff') == '11-20' ? 'selected' : '' }}>11 - 20</option>
                            <option value="21-40" {{ old('staff') == '21-40' ? 'selected' : '' }}>21 - 40</option>
                            <option value="41-70" {{ old('staff') == '41-70' ? 'selected' : '' }}>41 - 70</option>
                            <option value="71-100" {{ old('staff') == '71-100' ? 'selected' : '' }}>71 - 100</option>
                            <option value="100 Above" {{ old('staff') == '100 Above' ? 'selected' : '' }}>100 Above</option>
                        </select>
                    </div>
                    <hr class="bg-[#333333] w-full mt-8">
                    <div class="py-6 md:w-[50%]">
                        <label for="">Pleaser provide a link to your LinkedIn Profile.</label>
                        <input type="text" name="link" value="{{ old('link') }}"
                            class="w-full h-12 bg-[#e9eff2] rounded-md px-4 focus:outline-none" placeholder="https://linkedin.com">
                        @error('link')
                            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                    <p class="text-[#333333] text-lg">OR</p>
                    <div class="py-6 md:w-[50%]">
                        <label for="">Upload your resume or executive bio:</label>
                        <input type="file" name="cv" value="{{ old('cv') }}"
                            class="w-full h-12 bg-[#e9eff2] rounded-md px-4 focus:outline-none">
                        @error('cv')
                            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                        @enderror
                        <label for="">Max. file size: 20 MB.</label>
                    </div>
                    <div class="py-6 md:w-[50%]">
                        <textarea name="comment" id="" placeholder="comments" class="w-full bg-[#e9eff2] rounded-md px-4 focus:outline-none" rows="6"></textarea>
                        @error('comment')
                            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                    <p class="text-[#333333] text-lg">*Indicates Response Required</p>
                </div>

                <div class="flex justify-center text-xl mt-10">
                    <button type="submit"
                        class="inline-flex items-center justify-center w-72 h-14 bg-[#68875d] text-[#ffffff] font-semibold uppercase cursor-pointer">
                        Become a member
                    </button>
                </div>
            </form>
        </div>
    </section>

    {{-- Title --}}
    <div class="text-[#000000] max-w-7xl mx-auto text-center text-3xl md:text-4xl xl:text-4xl px-4 py-8">
        <h1>Growth Master Chairs Help Leaders Reach Their Full Potential.</h1>
    </div>
    <div class="text-[#000000] max-w-7xl mx-auto text-center text-2xl md:text-3xl xl:text-3xl px-4">
        <h1>In return, they make a lifelong impact, enjoy limitless rewards and leave a lasting legacy.</h1>
    </div>

    {{-- @@@ --}}
    <section class="max-w-[90%] mx-auto px-6 py-16">
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-10 items-start">

            <!-- LEFT CARD -->
            <div class="bg-white rounded-lg shadow-md border border-gray-200 p-10 text-center">
                <!-- Avatar -->
                <div class="flex justify-center mb-6">
                    <img
                        src="{{ asset('assets/profile/1.png') }}"
                        alt="Ola Sage"
                        class="w-64 h-64 rounded-full object-cover"
                    />
                </div>

                <!-- Name -->
                <h2 class="text-2xl font-semibold text-gray-900 mb-2">
                   san rithy
                </h2>

                <!-- Meta -->
                <p class="text-gray-700 font-medium">
                    Founder, Cambodia Accounting Club(CAC) <br />
                    Shareholder, Acclime
                </p>
                <p class="text-gray-700 mb-8">
                    Gowth Master Chair since 2019
                </p>

                <!-- Quote -->
                <p class="text-gray-600 text-lg leading-relaxed italic">
                    “When I thought about retiring, I realized I still wanted to be
                    involved in business. Being an executive coaching is not just
                    something I do – it’s part of who I am.”
                </p>
            </div>

            <!-- RIGHT VIDEO -->
            <div class="lg:col-span-2">
                <div class="relative rounded-lg overflow-hidden shadow-lg bg-black">
                    <video
                        controls
                        class="w-full h-[480px] object-cover"
                        poster="https://cac-center.edu.kh/wp-content/uploads/2017/12/476130730_610434091608946_2648315335922836771_n-1280x800.jpg"
                    >
                        <source src="{{ asset('assets/profile-chair.mp4') }}" type="video/mp4">
                        Your browser does not support the video tag.
                    </video>
                </div>

                <!-- Caption -->
                <p class="mt-4 text-gray-800 text-2xl font-semibold">
                    San Rithy,  Growth Master Chair since 2006
                </p>
                <p class="mt-4 text-gray-800 text-xl font-normal">
                    “As a Growth Master Chair you help CEOs become better leaders, make better decisions and achieve better results.”
                </p>
            </div>

        </div>
    </section>




   <div class="py-16">
     @component('components.footer')

    @endcomponent
   </div>
<script>
    document.querySelector('input[name="cv"]').addEventListener('change', e => {
    const file = e.target.files[0];
    if (file && file.size > 20 * 1024 * 1024) {
        alert('File must be under 20MB');
        e.target.value = '';
    }
});

</script>
@endsection



{{-- <select name="staff"
                            class="w-full h-12 bg-[#e9eff2] text-gray-600 rounded-md px-4 focus:outline-none font-semibold">
                            
                            <option value="">Select Country*</option>

                            <option value="1-5" {{ old('staff') == '1-5' ? 'selected' : '' }}>1 - 5</option>
                            <option value="6-10" {{ old('staff') == '6-10' ? 'selected' : '' }}>6 - 10</option>
                            <option value="11-20" {{ old('staff') == '11-20' ? 'selected' : '' }}>11 - 20</option>
                            <option value="21-40" {{ old('staff') == '21-40' ? 'selected' : '' }}>21 - 40</option>
                            <option value="41-70" {{ old('staff') == '41-70' ? 'selected' : '' }}>41 - 70</option>
                            <option value="71-100" {{ old('staff') == '71-100' ? 'selected' : '' }}>71 - 100</option>
                            <option value="100 Above" {{ old('staff') == '100 Above' ? 'selected' : '' }}>100 Above</option>
                        </select> --}}