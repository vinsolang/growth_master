@extends('layout.app')
@section('title', 'Growth Master Reviews')
@section('content')
    @component('components.navbar')

    @endcomponent
    <style>
.custom-program-table table {
    width: 100%;
    border-collapse: collapse;
    table-layout: fixed; /* force equal width */
}

.custom-program-table th,
.custom-program-table td {
    border: 1px solid #d1d5db;
    width: 50%;
    word-wrap: break-word; /* prevent overflow */
}

/* Header row */
.custom-program-table table tr:first-child td,
.custom-program-table table tr:first-child th {
    background-color: #68875d !important;
    color: white;
    font-weight: 600;
    text-align: center;
    padding: 20px;
    font-size: 20px;
}

/* Body rows */
.custom-program-table table tr:not(:first-child) td {
    background-color: #f3f4f6;
    padding: 32px 28px;
    font-size: 18px;
    color: #1f2937;
}


</style>

    <div class="space-y-10">
        <section class="relative w-full">
            <div class="w-full h-[110vh] md:h-screen relative">
                <!-- Hero Image -->
                {{-- <img src="https://cac-center.edu.kh/wp-content/uploads/2017/12/IMG_3422-1600x800.jpg" class="w-full h-full object-cover" alt="Hero Image"> --}}
                @if(!empty($getBanner) && $getBanner[5]->title === 'exclusive peer group')
                    <img 
                        src="{{ asset('assets/banner/' . $getBanner[5]->image) }}"
                        class="w-full h-full object-cover"
                        alt="Hero Image"
                    >
                @endif
                <div class="absolute inset-0 bg-black/40 w-full h-full"></div>
                <!-- Overlay Content -->
                <div class="absolute inset-0 flex flex-col justify-center items-start px-6 md:px-40 md:py-20 md:top-30 text-white">

                    <h1
                        class="text-[30px] md:w-3xl text-start md:text-[35px] font-semibold max-w-[940px] leading-tight">
                        @if(!empty($getBanner) && $getBanner[5]->title === 'exclusive peer group')
                            {{ $getBanner[5]->name }}
                            @endif
                    </h1>

                    <p
                        class="text-[16px] md:w-2xl text-start md:text-[18px] mt-5 font-regular max-w-[940px] leading-tight">
                          @if(!empty($getBanner) && $getBanner[5]->title === 'exclusive peer group')
                            {!! nl2br(e(value: $getBanner[5]->content)) !!}
                            @endif
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
        <div class="flex flex-col justify-center items-center bg-[#68875d] w-full md:h-[300px] h-auto text-[#ffffff] text-4xl font-2xl text-center space-y-8">
            <h1 class="text-[22px] md:text-3xl px-8 py-4">{{ $getContent[0]->title }}</h1>
            <p class="text-[18px] md:text-xl font-normal max-w-5xl mx-auto text-left px-4 py-4">
                 {!! nl2br(e($getContent[0]->description)) !!}
            </p>
        </div>
        {{-- Block Card Shadow --}}
        <div class="relative w-full py-12">
            <p class="text-[#333333] text-[18px] md:text-xl font-normal max-w-5xl mx-auto text-left px-4 py-4">
                {!! nl2br(e($getContent[0]->description_1)) !!}
            </p>
        </div>

        {{-- Table --}}
       
        <div class="max-w-6xl mx-auto mt-12 border border-gray-300 custom-program-table">
            {!! $getContent[0]->table !!}
        </div>
        {{-- Button Become a member --}}
        <div class="flex justify-center items-center mt-10">
            <a href="{{ route('home') }}#member-form"
                class="group py-3 px-[25px] text-[16px] md:text-[18px] border-2 border-[#68875d]
                text-[#000000] bg-white rounded 
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
            <h1 class="text-[#000000] text-2xl md:text-4xl text-center py-6">{{ $getContent[0]->title_2 }}</h1>
            <p class="text-[#333333] text-xl md:2xl text-center py-4">
                 {!! nl2br(e($getContent[0]->description_2)) !!}
            </p>
            {{-- section text and image --}}
            @php
                $showProgram = [
                    [
                         'desc' => $getContent[0]->desc_card1 ?? '',
                        'image' => asset( $getContent[0]->img_card1 ?? ''),
                    ],
                    [
                         'desc' => $getContent[0]->desc_card2 ?? '',
                        'image' => asset( $getContent[0]->img_card2 ?? ''),
                    ],
                ];
            @endphp

            <div class="relative w-full">

                @foreach ($showProgram as $index => $program)

                    <div
                        class="flex flex-col md:flex-row justify-center items-center py-4 px-4 xl:py-16 xl:px-35 gap-8">

                        {{-- MOBILE IMAGE (top) --}}
                        <div class="md:hidden w-full md:w-1/2 flex">
                            <img src="{{ $program['image'] }}" alt="">
                        </div>

                        {{-- DESKTOP IMAGE LEFT (odd block) --}}
                        @if ($index % 2 !== 0)
                            <div class="hidden md:flex w-full md:w-1/2">

                                <img src="{{ $program['image'] }}" alt="">
                            </div>
                        @endif

                        {{-- TEXT --}}
                        <div class="w-full md:w-1/2 space-y-4 md:space-y-8">

                            <p class="text-[#343434] text-[16px] md:text-[18px]">
                                {!! $program['desc'] !!}
                            </p>
                        </div>

                        {{-- DESKTOP IMAGE RIGHT (even block) --}}
                        @if ($index % 2 === 0)
                            <div class="hidden md:flex w-full md:w-1/2">

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
                text-[#000000] bg-white rounded 
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
                <div class="flex justify-center items-center bg-[#68875d] w-[25%] h-40">
                    <h1 class="text-[#ffffff] text-xl md:text-3xl md:w-[90%]">{{ $getContent[0]->title_t1 }}</h1>
                </div>
                <div class="flex justify-center items-center bg-[#68875d]/95 w-[75%] h-40">
                    <p class="text-white text-[16px] md:text-xl md:w-[90%]">
                       {!! nl2br(e($getContent[0]->desc_t1)) !!}
                    </p>
                </div>
            </div>

            <div class="flex">
                <div class="flex justify-center items-center bg-[#68875d] w-[25%] h-40">
                    <h1 class="text-[#ffffff] text-xl md:text-3xl md:w-[90%]">{{ $getContent[0]->title_t2 }}</h1>
                </div>
                <div class="flex justify-center items-center bg-[#68875d]/95 w-[75%] h-40">
                    <p class="text-white text-[16px] md:text-xl md:w-[90%]">
                       {!! nl2br(e($getContent[0]->desc_t2)) !!}
                    </p>
                </div>
            </div>

            <div class="flex">
                <div class="flex justify-center items-center bg-[#68875d] w-[25%] h-40">
                    <h1 class="text-[#ffffff] text-xl md:text-3xl md:w-[90%]">{{ $getContent[0]->title_t3 }}</h1>
                </div>
                <div class="flex justify-center items-center bg-[#68875d]/95 w-[75%] h-40">
                    <p class="text-white text-[16px] md:text-xl md:w-[90%]">
                        {!! nl2br(e($getContent[0]->desc_t3)) !!}
                    </p>
                </div>
            </div>

            <div class="flex">
                <div class="flex justify-center items-center bg-[#68875d] w-[25%] h-40">
                    <h1 class="text-[#ffffff] text-xl md:text-3xl md:w-[90%]">{{ $getContent[0]->title_t4 }}</h1>
                </div>
                <div class="flex justify-center items-center bg-[#68875d]/95 w-[75%] h-40">
                    <p class="text-white text-[16px] md:text-xl md:w-[90%]">
                        {!! nl2br(e($getContent[0]->desc_t4)) !!}
                    </p>
                </div>
            </div>

            <div class="flex">
                <div class="flex justify-center items-center bg-[#68875d] w-[25%] h-40">
                    <h1 class="text-[#ffffff] text-xl md:text-3xl md:w-[90%]">{{ $getContent[0]->title_t5 }}</h1>
                </div>
                <div class="flex justify-center items-center bg-[#68875d]/95 w-[75%] h-40">
                    <p class="text-white text-[16px] md:text-xl md:w-[90%]">
                      {!! nl2br(e($getContent[0]->desc_t5)) !!}
                    </p>
                </div>
            </div>
        </div>

        {{-- What to Evaluate When Choosing an Exclusive Peer Group --}}
        <div class="py-12 max-w-7xl mx-auto space-y-6 text-center">
            <h1 class="text-[#000000] lg:text-4xl text-2xl font-semibold">
                {{ $getContent[0]->title_3 }}
            </h1>
            <p class="leading-relaxed text-xl text-[#333333] text-left mx-auto max-w-6xl px-6">
                {!! nl2br(e($getContent[0]->description_3)) !!}
            </p>

            {{-- Card Element --}}
        <div class="py-8 max-w-8xl mx-auto space-x-4 space-y-6 grid grid-cols-1 lg:grid-cols-3 h-auto px-4 gap-x-8">
            {{-- Card 1 --}}
            <div class="bg-[#f5f2f2] p-8 max-w-4xl w-full">
                <h1 class="text-[#000000] text-2xl xl:text-xl font-bold mb-4 text-center">
                     {{ $getContent[0]->title_c1 }}
                </h1>
                <p class="text-[#333333] text-lg leading-relaxed text-left">
                     {{ $getContent[0]->desc_c1 }}
                </p>
            </div>

            {{-- Card 2 --}}
            <div class="bg-[#f5f2f2] p-8 max-w-4xl w-full">
                <h1 class="text-[#000000] text-2xl xl:text-xl font-bold mb-4 text-left">
                    {{ $getContent[0]->title_c2 }}
                </h1>
                <p class="text-[#333333] text-lg leading-relaxed text-left">
                   {{ $getContent[0]->desc_c2 }}
                </p>
            </div>
            {{-- card 3 --}}
            <div class="bg-[#f5f2f2] p-8 max-w-4xl w-full">
                <h1 class="text-[#000000] text-2xl xl:text-xl font-bold mb-4 text-left">
                    {{ $getContent[0]->title_c3 }}
                </h1>
                <p class="text-[#333333] text-lg leading-relaxed text-left">
                   {{ $getContent[0]->desc_c3 }}
                </p>
            </div>
            <!-- Card 4 -->
            <div class="bg-[#f5f2f2] p-8 max-w-4xl w-full">
                <h1 class="text-[#000000] text-2xl xl:text-xl font-bold mb-4 text-left">
                     {{ $getContent[0]->title_c4 }}
                </h1>
                <p class="text-[#333333] text-lg leading-relaxed text-left">
                   {{ $getContent[0]->desc_c4 }}
                </p>
            </div>
            {{-- Card 5 --}}
            <div class="bg-[#f5f2f2] p-8 max-w-4xl w-full">
                <h1 class="text-[#000000] text-2xl xl:text-xl font-bold mb-4 text-left">
                    {{ $getContent[0]->title_c5 }}
                </h1>
                <p class="text-[#333333] text-lg leading-relaxed text-left">
                    {{ $getContent[0]->desc_c5 }}
                </p>
            </div>

            {{-- Card 6 --}}
            <div class="bg-[#f5f2f2] p-8 max-w-4xl w-full">
                <h1 class="text-[#000000] text-xl xl:text-xl font-bold mb-4 text-left">
                    {{ $getContent[0]->title_c6 }}
                </h1>
                <p class="text-[#333333] text-lg leading-relaxed text-left">
                     {{ $getContent[0]->desc_c6 }}
                </p>
            </div>
        </div>
        </div>
        {{-- Button Become a member --}}
        <div class="flex justify-center items-center mt-10">
            <a href="{{ route('home') }}#member-form"
                class="group py-3 px-[25px] text-[16px] md:text-[18px] border-2 border-[#68875d]
                text-[#000000] bg-white rounded 
                transition-all duration-300 ease-in-out
                hover:bg-[#68875d] hover:text-white font-semibold">

                Become A Member

                <span class="ms-3 transition-all duration-300 ease-in-out group-hover:text-white">
                    <i class="fa-solid fa-angle-right"></i>
                </span>
            </a>
        </div>
        {{-- Why High-Performing CEOs Choose GrowthMaster --}}
        <section class="bg-[#68875d] text-white py-20">
        <div class="max-w-7xl mx-auto px-6">

            <!-- Heading -->
            <h2 class="text-3xl md:text-4xl font-semibold text-center mb-6">
             {{ $getContent[0]->title_4 }}
            </h2>

            <!-- Intro Text -->
            <p class="text-left max-w-6xl mx-auto text-lg leading-relaxed text-gray-200 mb-6">
            {!! nl2br(e($getContent[0]->description_4)) !!}
            </p>

            <!-- Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-x-20 gap-y-16">

                <!-- Item 1 -->
                <div class="gap-6 relative left-8">
                    <div class="flex justify-start items-center space-x-2">
                        <div class="w-12 h-12">
                            {{-- <img src="{{ asset('assets/img-icon/1.png') }}" alt="" class="w-full h-full object-cover"> --}}
                        </div>
                        <h3 class="text-[#ffffff] font-semibold mb-2">
                             {{ $getContent[0]->title_g1 }}
                        </h3>
                    </div>
                    <div>
                        <p class="text-lg text-gray-200 leading-relaxed">
                            {!! nl2br(e($getContent[0]->desc_g1)) !!}
                        </p>
                    </div>
                </div>

                <!-- Item 2 -->
                <div class="gap-6 relative left-8">
                    <div class="flex justify-start items-center space-x-2">
                        <div class="w-12 h-12">
                            {{-- <img src="{{ asset('assets/img-icon/2.png') }}" alt="" class="w-full h-full object-cover"> --}}
                        </div>
                        <h3 class="text-[#ffffff] font-semibold mb-2">
                           {{ $getContent[0]->title_g2 }}
                        </h3>
                    </div>
                    <div>
                        <p class="text-lg text-gray-200 leading-relaxed">
                            {!! nl2br(e($getContent[0]->desc_g2)) !!}
                        </p>
                    </div>
                </div>
                <!-- Item 3 -->
                <div class="gap-6 relative left-8">
                    <div class="flex justify-start items-center space-x-2">
                        <div class="w-12 h-12">
                            {{-- <img src="{{ asset('assets/img-icon/3.png') }}" alt="" class="w-full h-full object-cover"> --}}
                        </div>
                        <h3 class="text-[#ffffff] font-semibold mb-2">
                           {{ $getContent[0]->title_g3 }}
                        </h3>
                    </div>
                    <div>
                        <p class="text-lg text-gray-200 leading-relaxed">
                            {!! nl2br(e($getContent[0]->desc_g3)) !!}
                        </p>
                    </div>
                </div>

                <!-- Item 4 -->
                <div class="gap-6 relative left-8">
                    <div class="flex justify-start items-center space-x-2">
                        <div class="w-12 h-12">
                            {{-- <img src="{{ asset('assets/img-icon/4.png') }}" alt="" class="w-full h-full object-cover"> --}}
                        </div>
                        <h3 class="text-[#ffffff] font-semibold mb-2">
                          {{ $getContent[0]->title_g4 }}
                        </h3>
                    </div>
                    <div>
                        <p class="text-lg text-gray-200 leading-relaxed">
                          {!! nl2br(e($getContent[0]->desc_g4)) !!}
                        </p>
                    </div>
                </div>

                <!-- Item 5 -->
                <div class="gap-6 relative left-8">
                    <div class="flex justify-start items-center space-x-2">
                        <div class="w-12 h-12">
                            {{-- <img src="{{ asset('assets/img-icon/5.png') }}" alt="" class="w-full h-full object-cover"> --}}
                        </div>
                        <h3 class="text-[#ffffff] font-semibold mb-2">
                            {{ $getContent[0]->title_g5 }}
                        </h3>
                    </div>
                    <div>
                        <p class="text-lg text-gray-200 leading-relaxed">
                           {!! nl2br(e($getContent[0]->desc_g5)) !!}
                        </p>
                    </div>
                </div>

                <!-- Item 6 -->
                <div class="gap-6 relative left-8">
                    <div class="flex justify-start items-center space-x-2">
                        <div class="w-12 h-12">
                            {{-- <img src="{{ asset('assets/img-icon/6.png') }}" alt="" class="w-full h-full object-cover"> --}}
                        </div>
                        <h3 class="text-[#ffffff] font-semibold mb-2">
                            {{ $getContent[0]->title_g6 }}
                        </h3>
                    </div>
                    <div>
                        <p class="text-lg text-gray-200 leading-relaxed">
                            {!! nl2br(e($getContent[0]->desc_g6)) !!}
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




