@extends('layout.app')
@section('title', 'Event Details')
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
            <!-- Back Link -->
            <div id="event-sections" class="px-4 md:px-32 text-xl md:text-2xl">
                <a href="{{ route('events') }}#event-sections" class="text-red-600 hover:text-green-700 font-semibold underline">
                    ← Back
                </a>
            </div>

            {{-- Title Event Overview --}}
            <div id="details">
                <div class="max-w-7xl mx-auto px-4 md:px-8">
                    <h1 class="text-blue-900 text-3xl md:text-4xl xl:text-5xl py-6">{{ $showEventsdetails->title_overview }}</h1>
                </div>
                <div class="bg-[#dbdbdb] max-w-7xl mx-auto h-auto p-8">
                    <div class="flex justify-center items-center text-left px-2 md:px-8">
                        <p class="text-blue-900 text-lg md:text-xl font-normal max-w-4xl mx-auto text-leftpt-4 md:pt-8">
                            {!! nl2br($showEventsdetails->description_overview) !!}
                        </p>
                    </div>
                    <div class="w-full h-[300px] rounded-xl px-2 md:px-12 pt-4 md:pt-8">
                        <img src="{{ asset($showEventsdetails->img_details) }}" alt="" class="w-full h-full object-cover">
                    </div>

                    <div class="max-w-7xl mx-auto pt-4 md:pt-8 text-left grid grid-cols-1 md:grid-cols-2 gap-2 md:gap-8 px-2 md:px-12 text-blue-900 text-lg md:text-xl font-normal">
                        <div class="">
                            
                            <p>{!! nl2br($showEventsdetails->content_card_1) !!}</p>

                        </div>
                        <div class="">
                            <p>{!! nl2br($showEventsdetails->content_card_2) !!}</p>
                        </div>
                        <div class="">
                            <p>{!! nl2br($showEventsdetails->content_card_3) !!}</p>
                        </div>
                        <div class="">
                            <p>{!! nl2br($showEventsdetails->content_card_4) !!}</p>
                        </div>
                    </div>

                    <div class="max-w-7xl mx-auto pt-4 md:pt-8 flex flex-col md:flex-row md:gap-8 px-2 md:px-12 md:space-y-0 space-y-4 space-x-0 md:space-x-4">
                        @foreach ($showEventsdetails->img_limit_3 ?? [] as $img)
                            <div class="w-full h-[220px]">
                                <img src="{{ asset($img) }}" class="w-full h-full object-cover rounded-lg">
                            </div>
                        @endforeach
                    </div>

                    <div class="text-left pt-4 md:pt-8 px-2 md:px-12 space-y-2">
                        <p class="text-blue-900 text-lg md:text-xl font-normal text-left pt-4 md:pt-8">
                            {!! nl2br($showEventsdetails->desc_overview) !!}
                        </p>

                        <div class="flex justify-center items-center">
                            <div class="bg-[#d82129] w-40 h-12 flex justify-center items-center rounded-full text-white">
                                <a href="#form-contact">Register Now</a>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="max-w-7xl mx-auto px-4 md:px-8">
                    <h1 class="text-blue-900 text-3xl md:text-4xl xl:text-5xl py-6">{{ $showEventsdetails->title_details }}</h1>
                </div>

                <div class="max-w-7xl mx-auto h-auto space-y-8">

                @if(!empty($showEventsdetails->name_details))
                    @foreach ((array)$showEventsdetails->name_details as $index => $name)

                    <div class="w-full">
                        <div class="bg-[#dbdbdb] w-full h-1"></div>

                        <div class="pt-2 flex md:flex-row flex-col md:space-x-4">

                            {{-- Image --}}
                            <div class="flex flex-col items-center space-y-1">
                                <div class="w-64 h-64">
                                    <img src="{{ asset($showEventsdetails->profile_image[$index] ?? '') }}"
                                        class="w-full h-full object-cover">
                                </div>

                                <button onclick="openBio({{ $index }})"
                                    class="border border-[#d82129] text-blue-900 w-32 h-10 cursor-pointer">
                                    Bio
                                </button>
                            </div>

                            {{-- Text --}}
                            <div class="space-y-2">
                                <h1 class="text-blue-900 text-2xl font-medium">
                                    {{ $name }}
                                </h1>

                                <p class="text-blue-900 line-clamp-7" id="desc-{{ $index }}">
                                    {!! nl2br($showEventsdetails->position_details[$index] ?? '') !!}
                                </p>

                                <button onclick="toggleText({{ $index }})"
                                    id="toggleBtn-{{ $index }}"
                                    class="text-red-600">
                                    Read More
                                </button>
                            </div>

                        </div>
                    </div>

                    {{-- BIO MODAL --}}
                    <div id="bioModal-{{ $index }}"
                        class="fixed inset-0 bg-black/50 hidden items-center justify-center z-50">

                        <div class="bg-white max-w-6xl mx-auto p-6 rounded-lg relative">

                            <button onclick="closeBio({{ $index }})"
                                class="absolute top-2 right-3 text-xl cursor-pointer">
                                ×
                            </button>

                            <h2 class="text-xl font-semibold mb-4">
                                {{ $name }}
                            </h2>

                            <p class="text-gray-700">
                                {!! nl2br($showEventsdetails->bio_details[$index] ?? '') !!}
                            </p>

                        </div>
                    </div>

                    @endforeach
                @endif

                </div>

                <div class="flex justify-center items-center">
                    <div class="bg-[#d82129] w-40 h-12 rounded-full flex justify-center items-center text-white mt-4">
                        <a href="#form-contact">Register Now</a>
                    </div>
                </div>

                {{-- Agenda --}}
                <div class="max-w-7xl mx-auto px-4 md:px-8">
                    <h1 class="text-blue-900 text-3xl md:text-4xl xl:text-5xl py-6 mt-4">{{ $showEventsdetails->title_agenda }}</h1>
                </div>
                
                <div class="max-w-7xl mx-auto h-auto space-y-8 px-2 md:px-0">

                   

                    @if(!empty($showEventsdetails->agenda_items))
                        @foreach ($showEventsdetails->agenda_items as $agenda)


                            <div class="w-full">
                                <div class="bg-[#dbdbdb] w-full h-1"></div>

                                <div class="pt-2 flex space-x-4">
                                    <div class="flex justify-center items-center space-x-16">

                                        <p class="text-blue-900 text-lg md:text-xl font-medium">
                                            {{ $agenda['date'] ?? '' }}
                                        </p>

                                        <p class="text-blue-900 text-lg md:text-xl font-normal">
                                            {{ $agenda['title'] ?? '' }}
                                        </p>

                                    </div>
                                </div>
                            </div>
                           @endforeach
                        @endif
                   

                    <div class="w-full">
                        <div class="bg-[#dbdbdb] w-full h-1"></div>
                    </div>

                </div>
                 <div class="flex justify-center items-center">
                    <div class="bg-[#d82129] w-40 h-12 rounded-full flex justify-center items-center text-white mt-4">
                        <a href="#form-contact">Register Now</a>
                    </div>
                </div>


                {{-- Breakout sessions --}}

                <div class="max-w-7xl mx-auto px-4 md:px-8">
                    <h1 class="text-blue-900 text-3xl md:text-4xl xl:text-5xl py-6 mt-4">{{ $showEventsdetails->title_breakout }}</h1>
                </div>
                <div class="max-w-7xl mx-auto space-y-4">

                  

                         @if(!empty($showEventsdetails->breakout_items))
                        @foreach ($showEventsdetails->breakout_items as $break)
                                    {{-- Item --}}
                                    <div>
                                        {{-- Item line Final --}}
                                        <div class="w-full">
                                            <div class="bg-[#dbdbdb] w-full h-1"></div>
                                        </div>
                                        <div class="flex md:flex-row flex-col justify-between items-start md:space-y-0 space-y-2 space-x-6 px-0 md:px-4 mt-6">
                                            <div class="px-2 md:px-0">
                                                <p class="text-blue-900 w-40 text-lg md:text-xl font-medium"> {{ $break['date'] ?? '' }}</p>
                                            </div>
                                            <div class="px-2 md:px-0">
                                                <p class="text-blue-900 text-lg md:text-xl w-lg max-w-lg mx-auto">
                                                   {!! nl2br($break['description'] ?? '') !!}
                                                </p>
                                            </div>
                                            <div class="w-full md:w-72 h-52 px-2 md:px-0">
                                                <img src="{{ asset($break['profile'] ?? '') }}" alt="" class="w-full h-full lg:object-cover object-contain">
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                        @endif
                   

                    {{-- Item line Final --}}
                    <div class="w-full mt-6">
                        <div class="bg-[#dbdbdb] w-full h-1"></div>
                    </div>
                </div>

                <div class="flex justify-center items-center">
                    <div class="bg-[#d82129] w-40 h-12 rounded-full flex justify-center items-center text-white mt-4">
                        <a href="#form-contact">Register Now</a>
                    </div>
                </div>




                <div class="max-w-7xl mx-auto px-4 md:px-8">
                    <h1 class="text-blue-900 text-3xl md:text-4xl xl:text-5xl py-6 mt-4">{{ $showEventsdetails->title_sponsor }}</h1>
                </div>
                <div class="max-w-7xl mx-auto">
                    {{-- Item line Final --}}
                    <div class="w-full mt-6">
                        <div class="bg-[#dbdbdb] w-full h-1"></div>
                    </div>
                    <div class="flex space-x-6 md:flex-row flex-wrap">

                        @if(!empty($showEventsdetails->sponsor_logos))
                            @foreach ($showEventsdetails->sponsor_logos as $logo)

                                <img src="{{ asset($logo) }}"
                                    class="w-24 h-24 md:w-32 md:h-32 object-cover mt-4">

                            @endforeach
                        @endif

                        </div>
                </div>



                <div class="max-w-7xl mx-auto px-4 md:px-8">
                    <h1 class="text-blue-900 text-3xl md:text-4xl xl:text-5xl py-6 mt-4">{{ $showEventsdetails->title_location }}</h1>
                </div>
                <div class="w-full h-[300px] max-w-7xl mx-auto px-4 md:px-8">
                    <iframe 
                        src="{{ $showEventsdetails->location_link }}" 
                        style="border:0;" 
                        class="w-full h-full object-cover"
                        allowfullscreen="" 
                        loading="lazy" 
                        referrerpolicy="no-referrer-when-downgrade">
                    </iframe>
                </div>


                <div class="max-w-7xl mx-auto px-4 md:px-8" id="form-contact">
                    <h1 class="text-blue-900 text-3xl md:text-4xl xl:text-5xl py-6 mt-4">Register Now</h1>
                </div>
                <div class="max-w-7xl mx-auto px-4 md:px-8 bg-[#dbdbdb]">
                    @include('frontend.include.form')
                </div>


            </div>
         
            @component('components.footer')
            @endcomponent
        </div>
    </div>

<script>
    function openBio(index) {
    const modal = document.getElementById("bioModal-" + index);
    modal.classList.remove("hidden");
    modal.classList.add("flex");
}

function closeBio(index) {
    const modal = document.getElementById("bioModal-" + index);
    modal.classList.add("hidden");
}
</script>
<script>
function toggleText(index) {
    const desc = document.getElementById("desc-" + index);
    const btn = document.getElementById("toggleBtn-" + index);

    if (desc.classList.contains("line-clamp-7")) {
        desc.classList.remove("line-clamp-7");
        btn.innerText = "Read Less";
    } else {
        desc.classList.add("line-clamp-7");
        btn.innerText = "Read More";
    }
}
</script>
@endsection