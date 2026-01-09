@extends('layout.app')
@section('title', 'Growth Master Reviews')
@section('content')
    @component('components.navbar')

    @endcomponent
    <div class="space-y-10">
        <section class="relative w-full">
            <div class="w-full h-[110vh] md:h-screen relative">
                <!-- Hero Image -->
                <img src="{{ asset('https://cac-center.edu.kh/wp-content/uploads/2025/05/DSC07389-59-768x512.jpg') }}" class="w-full h-full object-cover" alt="Hero Image">
                <div class="absolute inset-0 bg-black/40 w-full h-full"></div>
                <!-- Overlay Content -->
                <div class="absolute inset-0 flex flex-col justify-center items-start px-6 md:px-40 md:py-20 md:top-30 text-white">

                    <h1
                        class="text-[30px] md:w-3xl text-start md:text-[35px] font-semibold max-w-[940px] leading-tight">
                        Growth Master Reviews
                    </h1>

                    <p
                        class="text-[16px] md:w-2xl text-start md:text-[18px] mt-5 font-regular max-w-[940px] leading-tight">
                        Real stories from CEOs who’ve been where you are.
                    </p>

                    <p
                        class="text-[16px] md:w-2xl text-start mt-5 md:text-[18px] font-regular max-w-[940px] leading-tight">
                        Whether you’re a CEO scaling a team rapidly, navigating your first leadership role or steering through crisis, the reviews below come from Vistage members who faced the same crossroads you’re experiencing now.
                    </p>

                    <a href="#review-form">
                        <button
                        class="mt-6 py-6 px-8 bg-[#68875d] text-[#FFFFFF] hover:bg-[#003F5F] hover:text-white rounded font-bold w-max uppercase tracking-widest">
                        BECOME A MEMBER
                    </button>
                    </a>
                </div>
            </div>
        </section>
        <div class="text-[#333333] text-4xl font-2xl text-center space-y-8">
            <h1>Scaling CEOs: From $5M to $25M and Beyond</h1>
            <p class="text-xl font-normal max-w-5xl mx-auto text-left">
                When your company hits the $5M mark, everything changes. You can’t be everywhere at once anymore, 
                but letting go feels impossible. You need systems, processes and people who can execute your vision without 
                constant oversight. Most importantly, 
                you need strategic guidance from leaders who’ve successfully navigated this exact transition.
            </p>
        </div>
        {{-- Block Card Shadow --}}
        <div class="relative w-full ">
            <div class="flex justify-center items-center">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-8 place-items-center max-w-8xl mx-auto md:px-40">
                    {{-- Card Shadow 1 --}}
                    <div class="shadow-2xl bg-[#003f5e] text-white px-10 py-16 space-y-6">
                        <h1 class="text-[#edc01c] text-2xl font-semibold">THE ACQUISITION ROUTE</h1>
                        <p class="text-lg">
                            Sean Forman hit a home run, creating Sports Reference, a leader in sports data. 
                            Today, his business is used in front offices and cited by media giants like ESPN. 
                            Moreover, he acquired the sports version of Wordle, Immaculate Grid, growing their total audience to more than 20 
                            million unique users each month and their revenue by 350% over the last three years.
                        </p>
                        <div class="text-2xl font-semibold">
                            <h2>Sean Forman</h2>
                            <h3>President</h3>
                            <h3>Sports Reference, LLC.</h3>
                        </div>
                    </div>
                    {{-- Card Shadow 2 --}}
                    <div class="bg-white shadow-[0_12px_30px_rgba(0,0,0,0.25)] p-10 px-10 py-16 space-y-6">
                        <h1 class="text-[#003f5e] text-2xl font-semibold">THE 700% GROWTH STORY</h1>
                        <p class="text-lg text-[#333333]">
                            Sean Forman hit a home run, creating Sports Reference, a leader in sports data. 
                            Today, his business is used in front offices and cited by media giants like ESPN. 
                            Moreover, he acquired the sports version of Wordle, Immaculate Grid, growing their total audience to more than 20 
                            million unique users each month and their revenue by 350% over the last three years.
                        </p>
                        <div class="flex space-x-6 text-2xl font-semibold text-gray-500">
                            {{-- Profile --}}
                            <div class="w-24 h-24 rounded-full">
                                <img src="https://www.vistage.com/wp-content/uploads/2025/09/Ed-Barry.png" alt="" class="w-full h-full object-cover">
                            </div>
                            <div>
                                <h2 class="text-[#003f5e]">Sean Forman</h2>
                                <h3>President</h3>
                                <h3>Sports Reference, LLC.</h3>
                            </div>
                        </div>
                    </div>
                    {{-- Card Shadow 3 --}}
                    <div class="bg-white shadow-[0_12px_30px_rgba(0,0,0,0.25)] p-10 px-10 py-16 space-y-6">
                        <h1 class="text-[#003f5e] text-2xl font-semibold">THE 700% GROWTH STORY</h1>
                        <p class="text-lg text-[#333333]">
                            Sean Forman hit a home run, creating Sports Reference, a leader in sports data. 
                            Today, his business is used in front offices and cited by media giants like ESPN. 
                            Moreover, he acquired the sports version of Wordle, Immaculate Grid, growing their total audience to more than 20 
                            million unique users each month and their revenue by 350% over the last three years.
                        </p>
                        <div class="flex space-x-6 text-2xl font-semibold text-gray-500">
                            {{-- Profile --}}
                            <div class="w-24 h-24 rounded-full">
                                <img src="https://www.vistage.com/wp-content/uploads/2025/09/Alicia-McLaughlin.png" alt="" class="w-full h-full object-cover">
                            </div>
                            <div>
                                <h2 class="text-[#003f5e]">Sean Forman</h2>
                                <h3>President</h3>
                                <h3>Sports Reference, LLC.</h3>
                            </div>
                        </div>
                    </div>
                    {{-- Card Shadow 4 --}}
                    <div class="shadow-2xl bg-[#003f5e] text-white px-10 py-16 space-y-6">
                        <h1 class="text-[#edc01c] text-2xl font-semibold">THE ACQUISITION ROUTE</h1>
                        <p class="text-lg">
                            Sean Forman hit a home run, creating Sports Reference, a leader in sports data. 
                            Today, his business is used in front offices and cited by media giants like ESPN. 
                            Moreover, he acquired the sports version of Wordle, Immaculate Grid, growing their total audience to more than 20 
                            million unique users each month and their revenue by 350% over the last three years.
                        </p>
                        <div class="text-2xl font-semibold">
                            <h2>Sean Forman</h2>
                            <h3>President</h3>
                            <h3>Sports Reference, LLC.</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- Frequently asked questions --}}
        <div class="relative w-full">
            @include('frontend.include.faqs')
        </div>
        {{-- From Contact --}}
        <section class="relative w-full">
            <div class="space-y-4" id="review-form">
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




