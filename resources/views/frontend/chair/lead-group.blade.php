@extends('layout.app')

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
                Ready to become an executive coach? Join Vistage as a Chair to turn hard-won CEO experience into lasting
                impact—guide leaders, enjoy schedule freedom and build your legacy.
            </p>

            <a href="{{ route('application') }}">
                <button
                    class="mt-6 py-5 px-8 bg-[#EDC11C] text-[#333333] hover:bg-[#003F5F] hover:text-white rounded font-semibold leading-relaxed tracking-widest uppercase">
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
                    'text' => 'Becoming a Vistage Chair represents the pinnacle of executive coaching—a prestigious role reserved for accomplished leaders who understand what it means to carry P&L responsibility, lead through uncertainty and guide others through the challenges you’ve already mastered.',
                    'title' => 'You’ve built companies. Now build leaders.'
                ],
                [
                    'image' => 'https://www.vistage.com/wp-content/uploads/2025/07/The-Most-Rewarding-Path-Beyond-The-C-Suite.webp',
                    'text' => 'Unlike generic coaching certifications that treat everyone the same, the Vistage Chair role is designed specifically for executives who’ve walked the path today’s CEOs are navigating. You’re not learning to coach from textbooks—you’re sharing hard-won experience with business leaders who face the same pressures you once conquered.',
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
        <div class="py-8 max-w-8xl mx-auto space-x-4 space-y-6 grid grid-cols-1 lg:grid-cols-3 h-auto px-4 gap-x-8">~
            {{-- Card 1 --}}
            <div
                class="bg-[#f5f2f2] p-8 max-w-4xl w-full">
                <h1 class="text-[#003f5e] text-2xl xl:text-2xl font-bold mb-4 text-center">
                    Beyond Financial Success
                </h1>
                <p class="text-[#333333] text-lg leading-relaxed text-center">
                    don’t just want a financially rewarding role,
                    but are seeking something deeper: the ability to create lasting impact in other leaders’
                    lives while building a career that offers both flexibility and fulfillment.
                    After reaching traditional markers of success,
                    many find themselves asking whether their work truly matters beyond the bottom line.
                </p>
            </div>

            {{-- Card 2 --}}
            <div
                class="bg-[#f5f2f2] p-8 max-w-4xl w-full">
                <h1 class="text-[#003f5e] text-2xl xl:text-2xl font-bold mb-4 text-center">
                    The Need for Purpose
                </h1>
                <p class="text-[#333333] text-lg leading-relaxed text-center">
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
            <div
                class="bg-[#f5f2f2] p-8 max-w-4xl w-full">
                <h1 class="text-[#003f5e] text-2xl xl:text-2xl font-bold mb-4 text-center">
                    The “What’s Next?” Moment
                </h1>
                <p class="text-[#333333] text-lg leading-relaxed text-center">
                    Whether you’ve sold your company, reached retirement
                    age but aren’t ready to retire or simply feel you’ve
                    accomplished what you set out to do in traditional business,
                    the Chair role offers a compelling answer to “what
                    comes next?” You have too much energy to step away entirely,
                    and you don’t want your hard-earned lessons to go to waste.
                </p>
            </div>
            <!-- Card 4 -->
            <div
                class="bg-[#f5f2f2] p-8 max-w-4xl w-full">
                <h1 class="text-[#003f5e] text-2xl xl:text-2xl font-bold mb-4 text-center">
                    Intellectual Challenge Without Operational Stress
                </h1>
                <p class="text-[#333333] text-lg leading-relaxed text-center">
                    As a Chair, you face complex strategic challenges daily,
                    but without the weight of execution on your shoulders.
                    You get to think at the highest level while helping others
                    navigate their operational realities. There’s no HR drama,
                    no cash flow stress, no operational fires to fight—just pure
                    strategic thinking and leadership development.
                </p>
            </div>

            <!-- Card 5 -->
            <div
                class="bg-[#f5f2f2] p-8 max-w-4xl w-full">
                <h1 class="text-[#003f5e] text-2xl xl:text-2xl font-bold mb-4 text-center">
                    The Desire to Make an Impact
                </h1>
                <p class="text-[#333333] text-lg leading-relaxed text-center">
                    After benefiting from mentors and advisors throughout your career,
                    becoming a Chair lets you pay that forward. You remember the moments when someone’s guidance changed
                    your trajectory.
                    Now you can be that person for other leaders navigating challenges you’ve already solved.
                </p>
            </div>
            {{-- Card 6 --}}
            <div
                class="bg-[#f5f2f2] p-8 max-w-4xl w-full">
                <h1 class="text-[#003f5e] text-2xl xl:text-2xl font-bold mb-4 text-center">
                    Lifestyle Flexibility
                </h1>
                <p class="text-[#333333] text-lg leading-relaxed text-center">
                    The Chair role offers something rare for high-impact work:
                    control over your schedule. You can build your practice around how you want to live,
                    whether that means extended travel, family commitments or pursuing other interests.
                    Many Chairs structure their calendar with dedicated time blocks for family and volunteering
                    while maintaining a fulfilling professional practice.
                </p>
            </div>

            {{-- Card 7 --}}
            <div
                class="bg-[#f5f2f2] p-8 max-w-4xl w-full">
                <h1 class="text-[#003f5e] text-2xl xl:text-2xl font-bold mb-4 text-center">
                    Find Your Community
                </h1>
                <p class="text-[#333333] text-lg leading-relaxed text-center">
                    Executive roles can be isolating. As a Chair, you join a community of
                    fellow coaches who understand the weight of leadership. You’re surrounded by
                    people who’ve walked similar paths and share your commitment to developing others.
                    The camaraderie among Chairs often becomes one of the most unexpected benefits of the role.
                </p>
            </div>
        </div>
    </div>
    @component('components.footer')

    @endcomponent
@endsection