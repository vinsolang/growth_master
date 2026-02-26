@extends('layout.app')
@section('title', $getMenu[0]->menu_8)
@section('content')
    @component('components.navbar')

    @endcomponent
    <style>
          .ck-content ul {
        list-style-type: disc;
        padding-left: 1.5rem;
    }

    .ck-content ol {
        list-style-type: decimal;
        padding-left: 1.5rem;
    }
    </style>
    <style>
.custom-program-table table {
    width: 100%;
    border-collapse: collapse;
}

.custom-program-table th,
.custom-program-table td {
    border: 1px solid #d1d5db;
    width: 50%;
}

/* Header row (works even without <th>) */
.custom-program-table table tr:first-child td,
.custom-program-table table tr:first-child th {
    background-color: #2A2D79 !important;
    color: white;
    font-weight: 600;
    text-align: center;
    padding: 20px;
    font-size: 20px;
}

/* Body rows */
.custom-program-table table tr:not(:first-child) td {
    background-color: #DBDBDB;
    padding: 32px 28px;
    font-size: 18px;
    color: #2A2D79;
}


</style>

    <div class="space-y-10">
        <section class="relative w-full">
            <div class="w-full h-[110vh] md:h-screen relative">
                <!-- Hero Image -->
                {{-- <img src="https://cac-center.edu.kh/wp-content/uploads/2025/05/DSC08045-scaled.jpg" class="w-full h-full object-cover" alt="Hero Image"> --}}
                @if(!empty($getBanner) && $getBanner[3]->title === 'our program')
                    <img 
                        src="{{ asset('assets/banner/' . $getBanner[3]->image) }}"
                        class="w-full h-full object-cover"
                        alt="Hero Image"
                    >
                @endif


                <div class="absolute inset-0 bg-black/40 w-full h-full"></div>
                <!-- Overlay Content -->
                <div class="absolute inset-0 flex flex-col justify-center items-start px-6 md:px-40 md:py-20 md:top-20 text-white bg-black/50">

                    <h1
                        class="text-[30px] md:w-3xl text-start md:text-[35px] font-semibold max-w-[940px] leading-tight">
                        @if(!empty($getBanner) && $getBanner[3]->title === 'our program')
                            {{ $getBanner[3]->name }}
                            @endif
                    </h1>

                    <p
                        class="text-[16px] md:w-2xl text-start md:text-[18px] mt-5 font-regular max-w-[940px] leading-tight">
                         @if(!empty($getBanner) && $getBanner[3]->title === 'our program')
                          
                                {!! nl2br(e(value: $getBanner[3]->content )) !!}
                            @endif
                    </p>


                    <a href="#program-form">
                        <button
                        class="mt-6 py-5 px-7 bg-red-600 text-white hover:bg-blue-900 hover:text-white rounded font-semibold w-max">
                        JOIN A PROGRAM
                    </button>
                    </a>
                </div>
            </div>
        </section>
        <div class="text-blue-900 text-4xl font-2xl text-center space-y-8">
            <h1>{{ $getContentProgram[0]->title }}</h1>
            <p class="text-blue-900 text-xl font-normal max-w-5xl mx-auto text-left">
                {!! nl2br(e($getContentProgram[0]->description)) !!}
            </p>
            <h1>{{ $getContentProgram[0]->title_1 }}</h1>
            {{-- Video --}}
            <div class="flex justify-center items-center">
                <img src="{{ asset($getContentProgram[0]->image) }}" alt="">
            </div>
            {{-- Button Join out Programs --}}
            <div class="flex justify-center items-center mt-10">
               <a href="#program-form">
                 <button class="group py-3 px-[25px] text-[16px] md:text-[18px] border-2 border-[#D82129]
        text-[#D82129] bg-white rounded 
        transition-all duration-300 ease-in-out
        hover:bg-[#D82129] hover:text-white font-semibold">
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
                        {{ $index % 2 === 0 ? 'bg-[#DBDBDB]' : '' }}">

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
                        <h3 class="text-blue-900 text-[16px] md:text-[20px]">
                            {{ $program->audience }}
                        </h3>

                        <h1 class="text-blue-900 text-[30px] lg:text-[35px]">
                            {{ $program->title }}
                        </h1>

                        <p class="text-blue-900 text-[14px] md:text-[18px]">
                            {!! nl2br( $program->description) !!}
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
        <section class="w-full bg-[#2A2D79] py-16 px-4 md:px-12 lg:px-24">
            <!-- Title -->
            <h1 class="text-[28px] md:text-[36px] lg:text-[42px] font-semibold leading-tight text-center text-[#ffffff]">
                {{ $getContentProgram[0]->title_2 }}
            </h1>
            <div class="max-w-6xl mx-auto text-white space-y-10 py-6">

                <!-- Intro paragraph -->
                <p class="text-[16px] md:text-[18px] leading-relaxed max-w-4xl">
                    {!! $getContentProgram[0]->description_2 !!}
                </p>

            </div>
        </section>
        {{-- Join 45,000 Leaders Who’ve Chosen Strategic Accountability --}}
        <section class="relative w-full">
            <h1 class="text-center text-blue-900 text-[20px] md:text-[30px] mt-10 px-6 xl:px-50 md:px-16">
                {{ $getContentProgram[0]->title_3 }}
            </h1>
            <p class="text-blue-900 text-lg max-w-[70%] mx-auto text-left">
                 {!! nl2br(e($getContentProgram[0]->description_3)) !!}
            </p>

             <div class="max-w-6xl mx-auto mt-12 border border-gray-300 custom-program-table">
                {!! $getContentProgram[0]->table !!}
            </div>

        </section>
        {{-- Frequently asked questions --}}
        <div class="relative w-full">
            @include('frontend.include.faqs')
        </div>
        {{-- From Contact --}}
        <section class="relative w-full">
            @include('frontend.include.form')
        </section>
        <div>
            @component('components.footer')

            @endcomponent
        </div>
    </div>
@endsection




