@extends('layout.app')
@section('title', $getMenu[0]->menu_11)
@section('content')
    <div id="eventPage" class="space-y-45">
        @component('components.navbar')
        @endcomponent

        <div class="relative w-full h-[40vh] md:h-screen top-40">

            <!-- Background Image (NO padding!) -->
            {{-- <img src="{{ asset('assets/event.png') }}" class="w-full h-full object-cover px-4 md:px-8 xl:px-12"> --}}
            @if(!empty($getBanner) && $getBanner[6]->title === 'event')
                    <img 
                        src="{{ asset('assets/banner/' . $getBanner[6]->image) }}"
                        class="w-full h-full object-cover px-4 md:px-8 xl:px-12"
                        alt="Hero Image"
                    >
                @endif

            <!-- Dark overlay (matches image exactly) -->
            {{-- <div class="absolute inset-0 bg-black/50 w-[95%] h-full object-cover md:px-10 xl:px-20"></div> --}}

            <!-- Text content (padding allowed here) -->
            <div class="absolute inset-0 flex flex-col justify-center items-start px-8 md:px-16 lg:px-24 text-white">

                <h1 class="text-[16px] md:text-[18px] lg:text-[25px] font-normal mb-3 md:px-10 xl:px-12">
                    @if(!empty($getBanner) && $getBanner[6]->title === 'event')
                            {{ $getBanner[6]->name }}
                            @endif
                </h1>

                <p
                    class="text-[22px] md:text-[35px] lg:text-[45px] font-semibold max-w-[940px] leading-tight mb-3 md:px-10 xl:px-12">
                     @if(!empty($getBanner) && $getBanner[6]->title === 'event')
                            {!! nl2br(e(value: $getBanner[6]->content)) !!}
                            @endif
                </p>

            </div>
        </div>
        <div class="space-y-10">
            {{-- Text --}}
            {{-- <div class="text-[#333333] px-4 md:px-8 xl:px-12">
                <p>The hardest climb is not Denali, K2 or even Everest. It isn’t at 24,000 feet. The hardest climb lies deep
                    within. It’s the mental climb. Gain an insider’s edge to power your ascent with events purpose-built for
                    driven CEOs and business owners. Learn from subject-matter experts and build connections with
                    high-impact business leaders at Growth Master events.</p>
            </div> --}}

            {{-- Growth Master Events Types --}}
            <div class="space-y-6">
                {{-- Title --}}
                <h1 class="text-blue-900 text-center text-3xl md:text-4xl xl:text-5xl py-6">{{ $getEventsex[0]->title_event_1 }}</h1>
                <div class="flex justify-center items-center">
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 max-w-7xl mx-auto">

                        @foreach ($getEventsex as $items)
                            <div class="bg-[#2a2d78] py-12 px-8 space-y-4 h-auto">
                            <div class="flex space-x-1">
                                <div class="w-14 h-14 rounded-full bg-gray-400">
                                    <img src="{{ asset($items->image) }}" alt="" class="w-full h-full object-cover rounded-full">
                                </div>
                                <div>
                                    <p class="text-[10px] text-white">{{ $items->name }}</p>
                                    <h2 class="text-xl sm:text-1xl font-semibold text-white">{{ $items->type }}</h2>
                                    <p class="text-[10px] text-white">events</p>
                                </div>
                            </div>
                            <div class="text-white text-2xl">
                                <h2>{{ $items->title }}</h2>
                            </div>
                            <div class="">
                                <p class="text-md md:text-lg leading-relaxed text-[#ffffff]">
                                   {!! nl2br($items->description) !!}
                                </p>
                            </div>
                        </div>
                        @endforeach
                        
{{-- 
                        <div class="bg-[#2a2d78] py-12 px-8 space-y-4 h-auto">
                            <div class="flex space-x-1">
                                <div class="w-14 h-14 rounded-full bg-gray-400">
                                    <img src="{{ asset('assets/img-icon/g.png') }}" alt="" class="w-full h-full object-cover rounded-full">
                                </div>
                                <div>
                                    <p class="text-[10px] text-white">Growth Master</p>
                                    <h2 class="text-xl sm:text-1xl font-semibold text-white">Guest</h2>
                                    <p class="text-[10px] text-white">events</p>
                                </div>
                            </div>
                            <div class="text-white text-2xl">
                                <h2>Growth Master Executive Summits</h2>
                            </div>
                            <div class="">
                                <p class="text-md md:text-lg leading-relaxed text-[#ffffff]">
                                    Gain insights, make connections, and elevate your leadership at a Vistage Executive
                                    Summit.
                                    These exclusive in-person events bring together members and qualified candidates for
                                    market
                                </p>
                            </div>
                        </div>

                        <div class="bg-[#2a2d78] py-12 px-8 space-y-4 h-auto">
                            <div class="flex space-x-1">
                                <div class="w-14 h-14 rounded-full bg-gray-400">
                                    <img src="{{ asset('assets/img-icon/m.png') }}" alt="" class="w-full h-full object-cover rounded-full">
                                </div>
                                <div>
                                    <p class="text-[10px] text-white">Growth Master</p>
                                    <h2 class="text-xl sm:text-1xl font-semibold text-white">Member</h2>
                                    <p class="text-[10px] text-white">events</p>
                                </div>
                            </div>
                            <div class="text-white text-2xl">
                                <h2>Growth Master Executive Summits</h2>
                            </div>
                            <div class="">
                                <p class="text-md md:text-lg leading-relaxed text-[#ffffff]">
                                    Gain insights, make connections, and elevate your leadership at a Vistage Executive
                                    Summit.
                                    These exclusive in-person events bring together members and qualified candidates for
                                    market
                                    forecasting from economic experts and Vistage Research, targeted learning breakouts with
                                    industry leaders,
                                    and high-impact peer networking. Walk away with actionable strategies,
                                    fresh perspectives, and a stronger connection to your greater Vistage community.
                                </p>
                            </div>
                        </div>

                        <div class="bg-[#2a2d78] py-12 px-8 space-y-4 h-auto">
                            <div class="flex space-x-1">
                                <div class="w-14 h-14 rounded-full bg-gray-400">
                                    <img src="{{ asset('assets/img-icon/g.png') }}" alt="" class="w-full h-full object-cover rounded-full">
                                </div>
                                <div>
                                    <p class="text-[10px] text-white">Growth Master</p>
                                    <h2 class="text-xl sm:text-1xl font-semibold text-white">Guest</h2>
                                    <p class="text-[10px] text-white">events</p>
                                </div>
                            </div>
                            <div class="text-white text-2xl">
                                <h2>Growth Master Executive Summits</h2>
                            </div>
                            <div class="">
                                <p class="text-md md:text-lg leading-relaxed text-[#ffffff]">
                                    Gain insights, make connections, and elevate your leadership at a Vistage Executive
                                    Summit.
                                    These exclusive in-person events bring together members and qualified candidates for
                                    market
                                </p>
                            </div>
                        </div>

                        <div class="bg-[#2a2d78] py-12 px-8 space-y-4 h-auto">
                            <div class="flex space-x-1">
                                <div class="w-14 h-14 rounded-full bg-gray-400">
                                    <img src="{{ asset('assets/img-icon/g.png') }}" alt="" class="w-full h-full object-cover rounded-full">
                                </div>
                                <div>
                                    <p class="text-[10px] text-white">Growth Master</p>
                                    <h2 class="text-xl sm:text-1xl font-semibold text-white">Guest</h2>
                                    <p class="text-[10px] text-white">events</p>
                                </div>
                            </div>
                            <div class="text-white text-2xl">
                                <h2>Growth Master Executive Summits</h2>
                            </div>
                            <div class="">
                                <p class="text-md md:text-lg leading-relaxed text-[#ffffff]">
                                    Gain insights, make connections, and elevate your leadership at a Vistage Executive
                                    Summit.
                                    These exclusive in-person events bring together members and qualified candidates for
                                    market
                                </p>
                            </div>
                        </div>

                        <div class="bg-[#2a2d78] py-12 px-8 space-y-4 h-auto">
                            <div class="flex space-x-1">
                                <div class="w-14 h-14 rounded-full bg-gray-400">
                                    <img src="{{ asset('assets/img-icon/g.png') }}" alt="" class="w-full h-full object-cover rounded-full">
                                </div>
                                <div>
                                    <p class="text-[10px] text-white">Growth Master</p>
                                    <h2 class="text-xl sm:text-1xl font-semibold text-white">Guest</h2>
                                    <p class="text-[10px] text-white">events</p>
                                </div>
                            </div>
                            <div class="text-white text-2xl">
                                <h2>Growth Master Executive Summits</h2>
                            </div>
                            <div class="">
                                <p class="text-md md:text-lg leading-relaxed text-[#ffffff]">
                                    Gain insights, make connections, and elevate your leadership at a Vistage Executive
                                    Summit.
                                    These exclusive in-person events bring together members and qualified candidates for
                                    market
                                </p>
                            </div>
                        </div> --}}

                    </div>
                </div>
            </div>

            {{-- Event Calendar --}}
            {{-- <div class="space-y-6">

                <h1 class="text-[#000000] text-center text-3xl md:text-4xl xl:text-5xl">Event Calendar</h1>
                
                <div class="flex flex-col md:flex-row justify-center items-center">
                    
                    <div class="flex space-x-4 p-4 bg-white">
                        <div class="relative group">
                            
                            <div
                                class="border border-[#003f5e] p-5 px-4 rounded-md cursor-pointer flex items-center justify-between md:w-[220px]">
                                <span class="text-[#003f5e] font-semibold text-sm">
                                    Filter by event type
                                </span>
                                <svg class="w-4 h-4 text-[#003f5e] ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7">
                                    </path>
                                </svg>
                            </div>

                           
                            <div
                                class="absolute left-0 mt-2 z-10 bg-white border border-gray-300 shadow-md w-full opacity-0 group-hover:opacity-100 group-hover:visible invisible transition-all duration-200">
                                <ul class="text-sm text-[#003f5e]">

                                    <li class="px-4 py-2 hover:bg-gray-500 cursor-pointer hover:text-white">
                                        Filter type by event
                                    </li>

                                    <li class="px-4 py-2 hover:bg-gray-500 cursor-pointer hover:text-white">
                                        CEO Social
                                    </li>

                                    <li class="px-4 py-2 hover:bg-gray-500 cursor-pointer hover:text-white">
                                        Experience of Growth Master
                                    </li>

                                </ul>
                            </div>

                        </div>
                    </div>
                    
                    <div class="flex space-x-4 p-4 bg-white">
                        <div class="relative group">
                            
                            <div
                                class="border border-[#003f5e] p-5 px-4 rounded-md cursor-pointer flex items-center justify-between min-w-[220px]">
                                <span class="text-[#003f5e] font-semibold text-sm">
                                    Filter by event type
                                </span>
                                <svg class="w-4 h-4 text-[#003f5e] ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7">
                                    </path>
                                </svg>
                            </div>

                            
                            <div
                                class="absolute left-0 mt-2 z-10 bg-white border border-gray-300 shadow-md w-full opacity-0 group-hover:opacity-100 group-hover:visible invisible transition-all duration-200">
                                <ul class="text-sm text-[#003f5e]">

                                    <li class="px-4 py-2 hover:bg-gray-500 cursor-pointer hover:text-white">
                                        Filter type by event
                                    </li>

                                    <li class="px-4 py-2 hover:bg-gray-500 cursor-pointer hover:text-white">
                                        CEO Social
                                    </li>

                                    <li class="px-4 py-2 hover:bg-gray-500 cursor-pointer hover:text-white">
                                        Experience of Growth Master
                                    </li>

                                </ul>
                            </div>

                        </div>

                    </div>
                </div>
            </div> --}}

            {{-- Section Event  --}}
            <div class="text-[#003f5e] font-semibold text-2xl px-12">
                {{-- <button class="cursor-pointer flex gap-8">
                    <h1 class="text-4xl font-normal">< ></h1>
                    <h1>Today</h1>
                </button> --}}
            <h1 class="text-blue-900 text-center text-3xl md:text-4xl xl:text-5xl py-6" id="event-sections">{{ $getEventsex[0]->title_event_2 }}</h1>
                @php $globalIndex = 0; @endphp

                @foreach ($showEvents as $month => $events)

                    <div class="space-y-6">

                        {{-- Month Title --}}
                        <div class="flex justify-between items-center">
                            <div class="bg-[#DBDBDB] h-[0.8px] w-[25%] md:w-[38%]"></div>

                            <div class="text-center text-blue-900 text-xl md:text-2xl lg:text-4xl">
                                <h1>{{ $month }}</h1>
                            </div>

                            <div class="bg-[#DBDBDB] h-[0.8px] w-[25%] md:w-[38%]"></div>
                        </div>

                        {{-- Events Under This Month --}}
                        @foreach ($events as $items)

                            <div class="border-2 border-[#DBDBDB] h-auto xl:h-[400px] flex flex-col md:flex-row
                                {{ $globalIndex % 2 === 1 ? 'md:flex-row-reverse' : '' }}">

                                {{-- Image --}}
                                <div class="w-full md:w-1/4 bg-[#DBDBDB] relative">
                                    <img src="{{ asset($items->image) }}" class="w-full h-full object-cover">

                                    <p class="absolute inset-0 flex flex-col items-center justify-center
                                            text-white font-semibold text-center px-3 bg-black/50">
                                        {{ $items->event_date->format('l') }} <br>
                                        {{ $items->event_date->format('d') }} |
                                        {{ $items->event_date->format('M') }} |
                                        {{ $items->event_date->format('Y') }}<br>
                                        {{ $items->event_time }} <br><br>
                                        {{ $items->event_type }}
                                    </p>
                                </div>

                                {{-- Text --}}
                                <div class="grid w-full md:w-[60%] py-10 px-4 md:px-10 gap-y-8">
                                    <div class="flex items-center space-x-2">
                                        <h2 class="uppercase text-[16px] text-blue-900 tracking-widest">
                                            {{ $items->category }}
                                        </h2>
                                        <div class="bg-[#2A2D79] h-1 w-6"></div>
                                    </div>

                                    <h1 class="text-blue-900 text-3xl font-semibold">
                                        {{ $items->title }}
                                    </h1>

                                    <p class="text-blue-900 font-normal text-lg leading-relaxed">
                                        {{ $items->description }}
                                    </p>

                                    
                                    @if($items->slug)
                                        <a href="{{ route('events.details', ['slug' => $items->slug]) }}#details" target="_blank">
                                            Read More →
                                        </a>
                                    @endif
                                   
                                </div>

                            </div>

                            {{-- Increase Global Index --}}
                            @php $globalIndex++; @endphp

                        @endforeach

                    </div>

                @endforeach
            </div>
            {{-- Button Back and Next --}}
            {{-- <div class="flex justify-between px-12 text-[#003f5e] text-[16px] md:text-xl font-semibold">
                <a href="">
                    <button>Previous Events</button>
                </a>
                <a href="" class="flex md:hidden">
                    <button>Today</button>
                </a>
                <a href="">
                    <button>Next Events</button>
                </a>
            </div> --}}
            @component('components.footer')
            @endcomponent
        </div>
    </div>
@endsection