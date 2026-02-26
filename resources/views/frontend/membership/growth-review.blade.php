@extends('layout.app')
@section('title', $getMenu[0]->menu_4)
@section('content')
    @component('components.navbar')

    @endcomponent
    <div class="space-y-10">
        <section class="relative w-full">
            <div class="w-full h-[110vh] md:h-screen relative">
                <!-- Hero Image -->
                {{-- <img src="https://cac-center.edu.kh/wp-content/uploads/2025/05/DSC07389-59-768x512.jpg" class="w-full h-full object-cover" alt="Hero Image"> --}}
                @if(!empty($getBanner) && $getBanner[4]->title === 'growthmaster review')
                    <img 
                        src="{{ asset('assets/banner/' . $getBanner[4]->image) }}"
                        class="w-full h-full object-cover"
                        alt="Hero Image"
                    >
                @endif
                <div class="absolute inset-0 bg-black/40 w-full h-full"></div>
                <!-- Overlay Content -->
                <div class="absolute inset-0 flex flex-col justify-center items-start px-6 md:px-40 md:py-20 md:top-30 text-white">

                    <h1
                        class="text-[30px] md:w-3xl text-start md:text-[35px] font-semibold max-w-[940px] leading-tight">
                         @if(!empty($getBanner) && $getBanner[4]->title === 'growthmaster review')
                            {{ $getBanner[4]->name }}
                            @endif
                    </h1>

                    <p
                        class="text-[16px] md:w-2xl text-start md:text-[18px] mt-5 font-regular max-w-[940px] leading-tight">
                          @if(!empty($getBanner) && $getBanner[4]->title === 'growthmaster review')
                            {!! nl2br(e(value: $getBanner[4]->content)) !!}
                            @endif
                    </p>

                   

                    <a href="#review-form">
                        <button
                        class="mt-6 py-6 px-8 bg-red-600 text-white hover:bg-blue-900 hover:text-white rounded font-bold w-max uppercase tracking-widest">
                        BECOME A MEMBER
                    </button>
                    </a>
                </div>
            </div>
        </section>
        <div class="text-blue-900 text-4xl font-2xl text-center space-y-8">
            <h1>{{ $getContent[0]->title }}</h1>
            <p class="text-blue-900 text-xl font-normal max-w-5xl mx-auto text-left">
                {!! nl2br(e($getContent[0]->description)) !!}
            </p>
        </div>
        {{-- Block Card Shadow --}}
        <div class="relative w-full ">
            <div class="flex justify-center items-center">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-8 place-items-center max-w-8xl mx-auto md:px-40">
                    {{-- Card Shadow 1 --}}
                    <div class="shadow-2xl bg-[#2A2D79] text-white px-10 py-16 space-y-6">
                        <h1 class="text-[#ffffff] text-2xl font-semibold uppercase">{{ $getContent[0]->title_card_1 }}</h1>
                        <p class="text-lg">
                           {!! nl2br(e($getContent[0]->desc_card_1)) !!}
                        </p>
                        <div class="text-2xl font-semibold">
                            <h2 class="uppercase">{{ $getContent[0]->name_card_1 }}</h2>
                            <p class="text-xl">{!! nl2br(e($getContent[0]->positioin_card_1)) !!}</p>
                        </div>
                    </div>
                    {{-- Card Shadow 2 --}}
                    <div class="bg-white shadow-[0_12px_30px_rgba(0,0,0,0.25)] p-10 px-10 py-16 space-y-6">
                        <h1 class="text-blue-900 text-2xl font-semibold uppercase">{{ $getContent[0]->title_card_2 }}</h1>
                        <p class="text-lg text-blue-900">
                            {!! nl2br(e($getContent[0]->desc_card_2)) !!}
                        </p>
                        <div class="flex space-x-6 text-2xl font-semibold text-gray-500">
                            {{-- Profile --}}
                            <div class="w-20 h-20 rounded-full">
                                <img src="{{ asset($getContent[0]->profile_card_2) }}" alt="" class="w-full h-full rounded-full object-cover">
                            </div>
                            <div>
                                <h2 class="text-blue-900 uppercase">{{ $getContent[0]->name_card_2 }}</h2>
                                <p class="text-xl text-blue-900">{!! nl2br(e($getContent[0]->positioin_card_2)) !!}</p>
                            </div>
                        </div>
                    </div>
                    {{-- Card Shadow 3 --}}
                    <div class="bg-white shadow-[0_12px_30px_rgba(0,0,0,0.25)] p-10 px-10 py-16 space-y-6">
                        <h1 class="text-blue-900 text-2xl font-semibold uppercase">{{ $getContent[0]->title_card_3 }}</h1>
                        <p class="text-lg text-blue-900">
                            {!! nl2br(e($getContent[0]->desc_card_3)) !!}
                        </p>
                        <div class="flex space-x-6 text-2xl font-semibold text-gray-500">
                            {{-- Profile --}}
                            <div class="w-20 h-20 rounded-full">
                                <img src="{{ asset($getContent[0]->profile_card_3) }}" alt="" class="w-full h-full object-cover">
                            </div>
                            <div>
                               <h2 class="text-[#003f5e] uppercase">{{ $getContent[0]->name_card_3 }}</h2>
                                <p class="text-xl text-blue-900">{!! nl2br(e($getContent[0]->positioin_card_3)) !!}</p>
                            </div>
                        </div>
                    </div>
                    {{-- Card Shadow 4 --}}
                    <div class="shadow-2xl bg-[#2A2D79] text-white px-10 py-16 space-y-6">
                        <h1 class="text-[#ffffff] text-2xl font-semibold uppercase">{{ $getContent[0]->title_card_4 }}</h1>
                        <p class="text-lg">
                           {!! nl2br(e($getContent[0]->desc_card_4)) !!}
                        </p>
                        <div class="text-2xl font-semibold">
                            <h2 class="text-[#ffffff] uppercase">{{ $getContent[0]->name_card_4 }}</h2>
                            <p class="text-xl">{!! nl2br(e($getContent[0]->positioin_card_4)) !!}</p>
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
           
                @include('frontend.include.form')
          
        </section>
        <div>
            @component('components.footer')

            @endcomponent
        </div>
    </div>
@endsection




