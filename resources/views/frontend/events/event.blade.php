@extends('layout.app')
@section('title', 'Event')
@section('content')
    <div id="eventPage" class="space-y-45">
        @component('components.navbar')
        @endcomponent

        <div class="relative w-full h-[40vh] md:h-[100vh] top-40">

            <!-- Background Image (NO padding!) -->
            <img src="{{ asset('assets/event.png') }}" class="w-full h-full object-cover px-4 md:px-8 xl:px-12">

            <!-- Dark overlay (matches image exactly) -->
            {{-- <div class="absolute inset-0 bg-black/50 w-[95%] h-full object-cover md:px-10 xl:px-20"></div> --}}

            <!-- Text content (padding allowed here) -->
            <div class="absolute inset-0 flex flex-col justify-center items-start px-8 md:px-16 lg:px-24 text-white">

                <h1 class="text-[16px] md:text-[18px] lg:text-[25px] font-normal mb-3 md:px-10 xl:px-12">
                    Growth Master Events
                </h1>

                <p
                    class="text-[22px] md:text-[35px] lg:text-[45px] font-semibold max-w-[940px] leading-tight mb-3 md:px-10 xl:px-12">
                    Anchor your leadership climb with regional and national Growth Master events.
                </p>

            </div>
        </div>
        <div class="space-y-10">
            {{-- Text --}}
            <div class="text-[#333333] px-4 md:px-8 xl:px-12">
                <p>The hardest climb is not Denali, K2 or even Everest. It isn’t at 24,000 feet. The hardest climb lies deep
                    within. It’s the mental climb. Gain an insider’s edge to power your ascent with events purpose-built for
                    driven CEOs and business owners. Learn from subject-matter experts and build connections with
                    high-impact business leaders at Growth Master events.</p>
            </div>

            {{-- Growth Master Events Types --}}
            <div class="space-y-6">
                {{-- Title --}}
                <h1 class="text-[#000000] text-center text-3xl md:text-4xl xl:text-5xl">Growth Master Events Types</h1>
                <div class="flex justify-center items-center">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-x-10 gap-y-1">

                        <div class="bg-[#124d6b] py-14 px-8 space-y-4 w-[480px] h-auto xl:h-[500px]">
                            <div class="flex space-x-1">
                                <div class="w-14 h-14 rounded-full bg-gray-400">
                                    <img src="" alt="" class="w-full h-full object-cover rounded-full">
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
                                <p class="text-base leading-relaxed text-[#ffffff]">
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

                        <div class="bg-[#124d6b] py-14 px-8 space-y-4 w-[480px] h-auto xl:h-[500px]">
                            <div class="flex space-x-1">
                                <div class="w-14 h-14 rounded-full bg-gray-400">
                                    <img src="https://www.vistage.com/wp-content/uploads/2021/01/Event-Icon-Guest-100.png" alt="" class="w-full h-full object-cover rounded-full">
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
                                <p class="text-base leading-relaxed text-[#ffffff]">
                                    Gain insights, make connections, and elevate your leadership at a Vistage Executive
                                    Summit.
                                    These exclusive in-person events bring together members and qualified candidates for
                                    market
                                </p>
                            </div>
                        </div>

                        <div class="bg-[#124d6b] py-14 px-8 space-y-4 w-[480px] h-auto xl:h-[500px]">
                            <div class="flex space-x-1">
                                <div class="w-14 h-14 rounded-full bg-gray-400">
                                    <img src="" alt="" class="w-full h-full object-cover rounded-full">
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
                                <p class="text-base leading-relaxed text-[#ffffff]">
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

                        <div class="bg-[#124d6b] py-14 px-8 space-y-4 w-[480px] h-auto xl:h-[500px]">
                            <div class="flex space-x-1">
                                <div class="w-14 h-14 rounded-full bg-gray-400">
                                    <img src="https://www.vistage.com/wp-content/uploads/2021/01/Event-Icon-Member-100.png" alt="" class="w-full h-full object-cover rounded-full">
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
                                <p class="text-base leading-relaxed text-[#ffffff]">
                                    Gain insights, make connections, and elevate your leadership at a Vistage Executive
                                    Summit.
                                    These exclusive in-person events bring together members and qualified candidates for
                                    market
                                </p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            {{-- Regions --}}
            <div class="space-y-6">
                {{-- Title --}}
                <h1 class="text-[#000000] text-center text-3xl md:text-4xl xl:text-5xl">Regions</h1>
                {{-- image --}}
                <div class="w-[60%] h-[450px] bg-gray-300 mx-auto">
                    <img src="" alt="" class="w-full h-full object-cover">
                </div>
            </div>

            {{-- Event Calendar --}}
            <div class="space-y-6">
                {{-- Title --}}
                <h1 class="text-[#000000] text-center text-3xl md:text-4xl xl:text-5xl">Event Calendar</h1>
                {{-- Seclect for filter Event and Regions --}}
                <div class="flex flex-col md:flex-row justify-center items-center">
                    {{-- Fillter Events --}}
                    <div class="flex space-x-4 p-4 bg-white">
                        <div class="relative group">
                            <!-- Button -->
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

                            <!-- Dropdown Menu -->
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
                    {{-- Fliiter Region --}}
                    <div class="flex space-x-4 p-4 bg-white">
                        <div class="relative group">
                            <!-- Button -->
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

                            <!-- Dropdown Menu -->
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
            </div>

            {{-- Day --}}
            <div class="text-[#003f5e] font-semibold text-2xl px-12">
                <button class="cursor-pointer flex gap-8">
                    <h1 class="text-4xl font-normal">< ></h1>
                    <h1>Today</h1>
                </button>
                {{-- Block Of Event 1--}}
                <div class="space-y-6">
                    {{-- Line --}}
                    <div class="flex justify-between items-center">
                        <div class="bg-gray-500 h-[0.8px] w-[25%] md:w-[38%]"></div>
                        <div class="text-center text-[#333333] text-xl">
                            <h1>December 2025</h1>
                        </div>
                        <div class="bg-gray-500 h-[0.8px] w-[25%] md:w-[38%]"></div>
                    </div>
                    <div class="space-y-4">
                        <div class="border-[2px] border-[#e6ecf0] h-auto xl:h-[400px] flex md:flex-row flex-col space-x-16">
                            {{-- image --}}
                            <div class="w-full lg:w-1/4 bg-gray-600 relative">
                                <img src="{{ asset('assets/city.jpeg') }}" alt="" class="w-full h-full object-cover">
                                <div class="absolute inset-0 w-full h-full bg-[#082f42]/70"></div>
                                <p class="absolute inset-0 flex items-center justify-center text-white font-semibold text-center px-3 bg-black/40">
                                    12 <br>
                                    Dec | Fri <br>
                                    8:00 am - 9:30 am PST <br><br>
                                    Virtual Event
                                </p>
                            </div>
                            {{-- text --}}
                            <div class="relative grid w-full lg:w-[60%] py-10 lg:px-0 px-4 gap-y-12">
                                <div class="flex items-center space-x-2">
                                    <h2 class="uppercase text-[16px] text-[#141826] tracking-widest">Growth Executive Summits</h2>
                                    <div class="bg-[#edc01c] h-1 w-1/14"></div>
                                </div>
                                <div>
                                    <h1 class="text-[#141826] text-3xl">Austin Executive Summit</h1>
                                </div>
                                <div>
                                    <p class="text-[#141826] font-normal text-[16px]">Every decision, obstacle, and success has shaped the leader you are today. The Vistage Executive Summit is your day to build on that experience through expert insights, meaningful peer connection, and practical tools that drive growth.</p>
                                </div>
                                {{-- Button --}}
                                <div>
                                    <button class="cursor-pointer text-xl font-medium text-[#003f5e]">Read More</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- Block Of Event 2--}}
                <div class="space-y-6">
                    {{-- Line --}}
                    <div class="flex justify-between items-center">
                        <div class="bg-gray-500 h-[0.8px] w-[25%] md:w-[38%]"></div>
                        <div class="text-center text-[#333333] text-xl">
                            <h1>December 2025</h1>
                        </div>
                        <div class="bg-gray-500 h-[0.8px] w-[25%] md:w-[38%]"></div>
                    </div>
                    <div class="space-y-4">
                        <div class="border-[2px] border-[#e6ecf0] h-auto xl:h-[400px] flex md:flex-row flex-col space-x-16">
                            {{-- image --}}
                            <div class="w-full lg:w-1/4 bg-gray-600 relative">
                                <img src="{{ asset('assets/city.jpeg') }}" alt="" class="w-full h-full object-cover">
                                <div class="absolute inset-0 w-full h-full bg-[#082f42]/70"></div>
                                <p class="absolute inset-0 flex items-center justify-center text-white font-semibold text-center px-3 bg-black/40">
                                    12 <br>
                                    Dec | Fri <br>
                                    8:00 am - 9:30 am PST <br><br>
                                    Virtual Event
                                </p>
                            </div>
                            {{-- text --}}
                            <div class="relative grid w-full lg:w-[60%] py-10 lg:px-0 px-4 gap-y-12">
                                <div class="flex items-center space-x-2">
                                    <h2 class="uppercase text-[16px] text-[#141826] tracking-widest">Growth Executive Summits</h2>
                                    <div class="bg-[#edc01c] h-1 w-1/14"></div>
                                </div>
                                <div>
                                    <h1 class="text-[#141826] text-3xl">Austin Executive Summit</h1>
                                </div>
                                <div>
                                    <p class="text-[#141826] font-normal text-[16px]">Every decision, obstacle, and success has shaped the leader you are today. The Vistage Executive Summit is your day to build on that experience through expert insights, meaningful peer connection, and practical tools that drive growth.</p>
                                </div>
                                {{-- Button --}}
                                <div>
                                    <button class="cursor-pointer text-xl font-medium text-[#003f5e]">Read More</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- Block Of Event 3--}}
                <div class="space-y-6">
                    {{-- Line --}}
                    <div class="flex justify-between items-center">
                        <div class="bg-gray-500 h-[0.8px] w-[25%] md:w-[38%]"></div>
                        <div class="text-center text-[#333333] text-xl">
                            <h1>December 2025</h1>
                        </div>
                        <div class="bg-gray-500 h-[0.8px] w-[25%] md:w-[38%]"></div>
                    </div>
                    <div class="space-y-4">
                        <div class="border-[2px] border-[#e6ecf0] h-auto xl:h-[400px] flex md:flex-row flex-col space-x-16">
                            {{-- image --}}
                            <div class="w-full lg:w-1/4 bg-gray-600 relative">
                                <img src="{{ asset('assets/city.jpeg') }}" alt="" class="w-full h-full object-cover">
                                <div class="absolute inset-0 w-full h-full bg-[#082f42]/70"></div>
                                <p class="absolute inset-0 flex items-center justify-center text-white font-semibold text-center px-3 bg-black/40">
                                    12 <br>
                                    Dec | Fri <br>
                                    8:00 am - 9:30 am PST <br><br>
                                    Virtual Event
                                </p>
                            </div>
                            {{-- text --}}
                            <div class="relative grid w-full lg:w-[60%] py-10 lg:px-0 px-4 gap-y-12">
                                <div class="flex items-center space-x-2">
                                    <h2 class="uppercase text-[16px] text-[#141826] tracking-widest">Growth Executive Summits</h2>
                                    <div class="bg-[#edc01c] h-1 w-1/14"></div>
                                </div>
                                <div>
                                    <h1 class="text-[#141826] text-3xl">Austin Executive Summit</h1>
                                </div>
                                <div>
                                    <p class="text-[#141826] font-normal text-[16px]">Every decision, obstacle, and success has shaped the leader you are today. The Vistage Executive Summit is your day to build on that experience through expert insights, meaningful peer connection, and practical tools that drive growth.</p>
                                </div>
                                {{-- Button --}}
                                <div>
                                    <button class="cursor-pointer text-xl font-medium text-[#003f5e]">Read More</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- Block Of Event 4--}}
                <div class="space-y-6">
                    {{-- Line --}}
                    <div class="flex justify-between items-center">
                        <div class="bg-gray-500 h-[0.8px] w-[25%] md:w-[38%]"></div>
                        <div class="text-center text-[#333333] text-xl">
                            <h1>December 2025</h1>
                        </div>
                        <div class="bg-gray-500 h-[0.8px] w-[25%] md:w-[38%]"></div>
                    </div>
                    <div class="space-y-4">
                        <div class="border-[2px] border-[#e6ecf0] h-auto xl:h-[400px] flex md:flex-row flex-col space-x-16">
                            {{-- image --}}
                            <div class="w-full lg:w-1/4 bg-gray-600 relative">
                                <img src="{{ asset('assets/city.jpeg') }}" alt="" class="w-full h-full object-cover">
                                <div class="absolute inset-0 w-full h-full bg-[#082f42]/70"></div>
                                <p class="absolute inset-0 flex items-center justify-center text-white font-semibold text-center px-3 bg-black/40">
                                    12 <br>
                                    Dec | Fri <br>
                                    8:00 am - 9:30 am PST <br><br>
                                    Virtual Event
                                </p>
                            </div>
                            {{-- text --}}
                            <div class="relative grid w-full lg:w-[60%] py-10 lg:px-0 px-4 gap-y-12">
                                <div class="flex items-center space-x-2">
                                    <h2 class="uppercase text-[16px] text-[#141826] tracking-widest">Growth Executive Summits</h2>
                                    <div class="bg-[#edc01c] h-1 w-1/14"></div>
                                </div>
                                <div>
                                    <h1 class="text-[#141826] text-3xl">Austin Executive Summit</h1>
                                </div>
                                <div>
                                    <p class="text-[#141826] font-normal text-[16px]">Every decision, obstacle, and success has shaped the leader you are today. The Vistage Executive Summit is your day to build on that experience through expert insights, meaningful peer connection, and practical tools that drive growth.</p>
                                </div>
                                {{-- Button --}}
                                <div>
                                    <button class="cursor-pointer text-xl font-medium text-[#003f5e]">Read More</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- Block Of Event 5--}}
                <div class="space-y-6">
                    {{-- Line --}}
                    <div class="flex justify-between items-center">
                        <div class="bg-gray-500 h-[0.8px] w-[25%] md:w-[38%]"></div>
                        <div class="text-center text-[#333333] text-xl">
                            <h1>December 2025</h1>
                        </div>
                        <div class="bg-gray-500 h-[0.8px] w-[25%] md:w-[38%]"></div>
                    </div>
                    <div class="space-y-4">
                        <div class="border-[2px] border-[#e6ecf0] h-auto xl:h-[400px] flex md:flex-row flex-col space-x-16">
                            {{-- image --}}
                            <div class="w-full lg:w-1/4 bg-gray-600 relative">
                                <img src="{{ asset('assets/city.jpeg') }}" alt="" class="w-full h-full object-cover">
                                <div class="absolute inset-0 w-full h-full bg-[#082f42]/70"></div>
                                <p class="absolute inset-0 flex items-center justify-center text-white font-semibold text-center px-3 bg-black/40">
                                    12 <br>
                                    Dec | Fri <br>
                                    8:00 am - 9:30 am PST <br><br>
                                    Virtual Event
                                </p>
                            </div>
                            {{-- text --}}
                            <div class="relative grid w-full lg:w-[60%] py-10 lg:px-0 px-4 gap-y-12">
                                <div class="flex items-center space-x-2">
                                    <h2 class="uppercase text-[16px] text-[#141826] tracking-widest">Growth Executive Summits</h2>
                                    <div class="bg-[#edc01c] h-1 w-1/14"></div>
                                </div>
                                <div>
                                    <h1 class="text-[#141826] text-3xl">Austin Executive Summit</h1>
                                </div>
                                <div>
                                    <p class="text-[#141826] font-normal text-[16px]">Every decision, obstacle, and success has shaped the leader you are today. The Vistage Executive Summit is your day to build on that experience through expert insights, meaningful peer connection, and practical tools that drive growth.</p>
                                </div>
                                {{-- Button --}}
                                <div>
                                    <button class="cursor-pointer text-xl font-medium text-[#003f5e]">Read More</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- Button Back and Next --}}
            <div class="flex justify-between px-12 text-[#003f5e] text-[16px] md:text-xl font-semibold">
                <a href="">
                    <button>Previous Events</button>
                </a>
                <a href="" class="flex md:hidden">
                    <button>Today</button>
                </a>
                <a href="">
                    <button>Next Events</button>
                </a>
            </div>
            @component('components.footer')
            @endcomponent
        </div>
    </div>
@endsection