@extends('layout.app')

@section('content')
    <style>
        .no-scrollbar::-webkit-scrollbar {
            display: none;
        }
        .no-scrollbar {
            -ms-overflow-style: none;
            scrollbar-width: none;
        }
    </style>
    <div id="eventPage" class="space-y-45">
        @component('components.navbar')
        @endcomponent

        <div class="relative w-full top-40">
            <h1 class="text-[#000000] text-4xl md:text-4xl font-semibold xl:text-5xl px-8 md:px-12 w-1/2 md:w-full">Upcoming webinars</h1>
        </div>

        <div class="space-y-6">
            <p class="text-[#141826] font-normal text-[20px] py-10 px-8 md:px-12">Stay tuned for upcoming webinars!</p>
            <a href="" class="cursor-pointer">
                <h1 class="text-[#000000] hover:text-blue-600 text-4xl md:text-4xl font-semibold xl:text-5xl px-8 md:px-12 w-100 md:w-full">View all Webinars On-Demand</h1>
            </a>
            {{-- Block card element --}}
            <div class="relative w-full py-10 px-8 md:px-12 grid gap-10">
                {{-- Black 1 --}}
                <div class="border-1 flex md:flex-row flex-col justify-between items-center border-[#e6ecf0] w-full h-auto xl:w-[70%] md:h-50 rounded-md">
                    <div class="min-w-[30%] h-full">
                        <img src="https://myvistage.com/hub/wp-content/uploads/sites/4/2025/08/Business-Trends-2026-Blog-1024x686-1.jpg" alt="" class="w-full h-full object-cover rounded-md">
                    </div>
                    <div class="w-full md:w-[65%] h-full space-x-6 py-6 px-2">
                        {{-- text --}}
                        <div class="relative grid gap-2 text-[#003f5e]">
                            <div class="flex md:flex-row flex-col md:items-center md:justify-between">
                                <div class="flex space-x-2 items-center">
                                    <a href="#" class="uppercase text-[14px] font-semibold">
                                        <h2 class="hover:text-blue-600">Economic / Future Trends</h2>
                                    </a>
                                    <div class="bg-[#edc01c] w-16 h-1 mr-2"></div>
                                </div>
                                <a href="#" class="flex items-end bg-[#e6ecf0] w-40 h-12 rounded-sm">
                                    <button class="w-full h-full font-semibold hover:text-blue-600">Webinar On- <br/> Demand</button>
                                </a>
                            </div>
                            <div>
                                <a href="#">
                                    <h1 class="text-xl font-bold hover:text-blue-600">Business Trends for 2026 and Beyond</h1>
                                </a>
                            </div>
                            <div class="flex items-center w-full gap-x-10">
                                <!-- Left text -->
                                <a href="#">
                                    <p class="font-normal text-[14px] shrink-0 hover:text-blue-600">
                                    Joe Galvin
                                    </p>
                                </a>

                                <!-- Right text -->
                                <p class="font-normal text-[14px] ml-auto text-right">
                                    <a href="#" class="hover:text-blue-600">artificial intelligence,</a>
                                    <a href="#" class="hover:text-blue-600">Economic / Future Trends,</a>
                                    <a href="#" class="hover:text-blue-600">Strategic Planning</a>
                                </p>
                            </div>
                            <div class="italic text-[12px] text-[#000000]">November 7, 2025</div>
                        </div>
                    </div>
                </div>
                {{-- Block 2 --}}
                <div class="border flex md:flex-row flex-col justify-between items-center border-[#e6ecf0] w-full h-auto xl:w-[70%] md:h-50 rounded-md">
                    <div class="min-w-[30%] h-full">
                        <img src="https://myvistage.com/hub/wp-content/uploads/sites/4/2025/08/Business-Trends-2026-Blog-1024x686-1.jpg" alt="" class="w-full h-full object-cover rounded-md">
                    </div>
                    <div class="w-full md:w-[65%] h-full space-x-6 py-6 px-2">
                        {{-- text --}}
                        <div class="relative grid gap-2 text-[#003f5e]">
                            <div class="flex md:flex-row flex-col md:items-center md:justify-between">
                                <div class="flex space-x-2 items-center">
                                    <a href="#" class="uppercase text-[14px] font-semibold">
                                        <h2 class="hover:text-blue-600">Economic / Future Trends</h2>
                                    </a>
                                    <div class="bg-[#edc01c] w-16 h-1 mr-2"></div>
                                </div>
                                <a href="#" class="flex items-end bg-[#e6ecf0] w-40 h-12 rounded-sm">
                                    <button class="w-full h-full font-semibold hover:text-blue-600">Webinar On- <br/> Demand</button>
                                </a>
                            </div>
                            <div>
                                <a href="#">
                                    <h1 class="text-xl font-bold hover:text-blue-600">Business Trends for 2026 and Beyond</h1>
                                </a>
                            </div>
                            <div class="flex items-center w-full gap-x-10">
                                <!-- Left text -->
                                <a href="#">
                                    <p class="font-normal text-[14px] shrink-0 hover:text-blue-600">
                                    Joe Galvin
                                    </p>
                                </a>

                                <!-- Right text -->
                                <p class="font-normal text-[14px] ml-auto text-right">
                                    <a href="#" class="hover:text-blue-600">artificial intelligence,</a>
                                    <a href="#" class="hover:text-blue-600">Economic / Future Trends,</a>
                                    <a href="#" class="hover:text-blue-600">Strategic Planning</a>
                                </p>
                            </div>
                            <div class="italic text-[12px] text-[#000000]">November 7, 2025</div>
                        </div>
                    </div>
                </div>
                {{-- Block 3 --}}
                <div class="border flex md:flex-row flex-col justify-between items-center border-[#e6ecf0] w-full h-auto xl:w-[70%] md:h-50 rounded-md">
                    <div class="min-w-[30%] h-full">
                        <img src="https://myvistage.com/hub/wp-content/uploads/sites/4/2025/08/Business-Trends-2026-Blog-1024x686-1.jpg" alt="" class="w-full h-full object-cover rounded-md">
                    </div>
                    <div class="w-full md:w-[65%] h-full space-x-6 py-6 px-2">
                        {{-- text --}}
                        <div class="relative grid gap-2 text-[#003f5e]">
                            <div class="flex md:flex-row flex-col md:items-center md:justify-between">
                                <div class="flex space-x-2 items-center">
                                    <a href="#" class="uppercase text-[14px] font-semibold">
                                        <h2 class="hover:text-blue-600">Economic / Future Trends</h2>
                                    </a>
                                    <div class="bg-[#edc01c] w-16 h-1 mr-2"></div>
                                </div>
                                <a href="#" class="flex items-end bg-[#e6ecf0] w-40 h-12 rounded-sm">
                                    <button class="w-full h-full font-semibold hover:text-blue-600">Webinar On- <br/> Demand</button>
                                </a>
                            </div>
                            <div>
                                <a href="#">
                                    <h1 class="text-xl font-bold hover:text-blue-600">Business Trends for 2026 and Beyond</h1>
                                </a>
                            </div>
                            <div class="flex items-center w-full gap-x-10">
                                <!-- Left text -->
                                <a href="#">
                                    <p class="font-normal text-[14px] shrink-0 hover:text-blue-600">
                                    Joe Galvin
                                    </p>
                                </a>

                                <!-- Right text -->
                                <p class="font-normal text-[14px] ml-auto text-right">
                                    <a href="#" class="hover:text-blue-600">artificial intelligence,</a>
                                    <a href="#" class="hover:text-blue-600">Economic / Future Trends,</a>
                                    <a href="#" class="hover:text-blue-600">Strategic Planning</a>
                                </p>
                            </div>
                            <div class="italic text-[12px] text-[#000000]">November 7, 2025</div>
                        </div>
                    </div>
                </div>
            </div>
            @component('components.footer')
            @endcomponent
        </div>
    </div>
@endsection