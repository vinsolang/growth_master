@extends('layout.app')
@section('title', 'Become a Speaker')
@section('content')
    @component('components.navbar')

    @endcomponent
    <div class="space-y-10">
        <section class="relative w-full">
            <div class="w-full h-screen relative">
                <!-- Hero Image -->
                {{-- <img
                    src="https://cac-center.edu.kh/wp-content/uploads/2025/05/379185291_301310172521341_6205432678662828896_n-1600x800.jpg"
                    class="w-full h-full object-cover" alt="Hero Image"> --}}
                @if(!empty($getBanner) && $getBanner[26]->title === 'Referral Program')
                    <img src="{{ asset('assets/banner/' . $getBanner[26]->image) }}" class="w-full h-full object-cover"
                        alt="Hero Image">
                @endif

                <!-- Overlay Content -->
                <div
                    class="absolute inset-0 flex flex-col justify-center items-start px-6 md:px-16 lg:px-24 text-white md:bg-none bg-black/50">

                   <h1
                        class="text-[22px] text-start md:text-[35px] lg:text-[45px] font-semibold max-w-[940px] leading-tight">
                        @if(!empty($getBanner) 
                            && $getBanner[26]->title === 'Referral Program' 
                            && $getBanner[26]->name !== 'N/A')
                            {{ $getBanner[26]->name }}
                        @endif
                    </h1>

                    <p
                        class="text-[16px] text-start md:text-[18px] mt-5 lg:text-[25px] font-medium max-w-[940px] leading-tight">
                        @if(!empty($getBanner) 
                            && $getBanner[26]->title === 'Referral Program' 
                            && $getBanner[26]->content !== 'N/A')
                            {!! nl2br(e($getBanner[26]->content)) !!}
                        @endif
                    </p>

                </div>
            </div>

            <div class="max-w-6xl mx-auto text-lg text-blue-900 flex flex-col justify-center items-center mt-10 gap-2 py-4">
                {!!  $getTextProgram->desc_1 !!}
            </div>
            <div class="w-full px-4 pb-10">
    
                @php
                    $images = $getTextProgram->img_json ?? [];
                    $titles = $getTextProgram->title_json ?? [];
                @endphp

                <div class="flex flex-wrap justify-center gap-2">

                    @foreach($images as $index => $image)
                    <div class="relative w-64 h-40 md:w-80 md:h-72 overflow-hidden shadow-lg group">

                        <!-- Image -->
                        <img 
                            src="{{ asset($image) }}" 
                            class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110"
                            alt="">

                        <!-- Overlay -->
                        <div class="absolute inset-0 bg-black/50 flex items-center justify-center">

                            <span class="text-white text-lg font-semibold text-center px-3 uppercase">
                                {{ $titles[$index] ?? '' }}
                            </span>

                        </div>

                    </div>
                    @endforeach

                </div>

            </div>

            <div>
                @component('components.footer')

                @endcomponent
            </div>
    </div>


@endsection