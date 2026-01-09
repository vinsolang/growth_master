@extends('layout.app')
@section('title', 'Executive Coaching Qualifitions')
@section('content')
    <div id="eventPage" class="space-y-45">
        @component('components.navbar')
        @endcomponent

        <div class="relative w-full h-[40vh] md:h-screen top-40">

            <!-- Background Image (NO padding!) -->
            <img src="https://www.vistage.com/wp-content/uploads/2019/09/HERO2020-2.jpg"
                class="w-full h-full object-cover px-4 md:px-8 xl:px-12">

            <!-- Dark overlay (matches image exactly) -->
            {{-- <div class="absolute inset-0 bg-black/50 w-[95%] h-full object-cover md:px-10 xl:px-20"></div> --}}

            <!-- Text content (padding allowed here) -->
            <div class="absolute inset-0 flex flex-col justify-center items-start px-8 md:px-16 lg:px-24 text-white">

                <h1 class="text-[16px] md:text-[18px] lg:text-[25px] font-normal mb-3 md:px-10 xl:px-12">
                    CEO Coaching Qualifications
                </h1>

                <p
                    class="text-[22px] md:text-[45px] lg:text-[55px] font-semibold max-w-[940px] leading-tight mb-3 md:px-10 xl:px-12">
                    Do you have what it takes?
                </p>

            </div>
        </div>
        <div class="space-y-10">
            {{-- Growth Master Events Types --}}
            <div class="space-y-6">
                {{-- Title --}}
                <h1 class="text-[#000000] text-center text-3xl md:text-4xl xl:text-5xl">
                    Join an elite group of executive mentors
                </h1>
                <p class="max-w-7xl mx-auto text-left text-[#343434] font-regular text-[17px] md:text-[20px] px-4">
                    Growth Master Chairs come with strong financial acumen, superb management skills and an innate entrepreneurial
                    spirit.
                    They’ve realized the kind of success to which most only aspire.
                    Now, they have the opportunity to greatly impact the lives of other business leaders in their
                    communities.
                </p>
            </div>

            <div class="w-full min-h-[500px] xl:h-[600px] md:h-[785px] flex justify-center items-center">

                <!-- IMAGE WRAPPER -->
                <div class="relative w-full lg:h-full h-[800px] px-4 xl:px-12">
                    <img src="https://www.vistage.com/wp-content/uploads/2019/09/2020-Hero-Small-group-in-business-meeting-at-a-couch.jpg"
                        alt="" class="hidden md:flex w-full h-[400px] md:h-full object-cover rounded-lg" />

                    <!-- OVERLAY -->
                    <div class="md:absolute inset-0 flex justify-center items-center px-4">
                        <div class="bg-[#003f5e]/95 w-full xl:w-[85%] xl:h-[85%] h-auto 
                           px-6 md:px-12 lg:px-20 rounded-lg py-12">

                            <!-- Title -->
                            <h2 class="text-white text-2xl md:text-3xl lg:text-4xl font-semibold mb-8 md:mb-12">
                                Chair Qualifications
                            </h2>

                            <!-- Grid -->
                            <div class="grid grid-cols-1 xl:grid-cols-2 gap-x-4 lg:gap-x-16 gap-y-8 md:gap-y-12">

                                <!-- Item -->
                                <div class="flex items-start space-x-6">
                                    <div class="w-12 h-12 md:w-12 md:h-12 rounded-full bg-white
                                       flex items-center justify-center
                                       text-[#0b2642] text-lg md:text-xl font-bold">
                                        1
                                    </div>
                                    <p class="text-white text-base md:text-lg leading-relaxed max-w-md">
                                        <span class="font-semibold">10+ years of C-level experience</span> with
                                        $5M+ P&amp;L responsibility
                                    </p>
                                </div>

                                <div class="flex items-start space-x-6">
                                    <div
                                        class="w-12 h-12 md:w-14 md:h-14 rounded-full bg-white flex items-center justify-center text-[#0b2642] font-bold">
                                        4
                                    </div>
                                    <p class="text-white text-base md:text-lg leading-relaxed max-w-md">
                                        Availability and drive to embark on building your own business.
                                    </p>
                                </div>

                                <div class="flex items-start space-x-6">
                                    <div
                                        class="w-12 h-12 md:w-14 md:h-14 rounded-full bg-white flex items-center justify-center text-[#0b2642] font-bold">
                                        2
                                    </div>
                                    <p class="text-white text-base md:text-lg leading-relaxed max-w-md">
                                        Have a passion for mentoring others.
                                    </p>
                                </div>

                                <div class="flex items-start space-x-6">
                                    <div
                                        class="w-12 h-12 md:w-14 md:h-14 rounded-full bg-white flex items-center justify-center text-[#0b2642] font-bold">
                                        5
                                    </div>
                                    <p class="text-white text-base md:text-lg leading-relaxed max-w-md">
                                        Have the ability to listen to—and challenge—CEOs and senior executives.
                                    </p>
                                </div>

                                <div class="flex items-start space-x-6">
                                    <div
                                        class="w-12 h-12 md:w-14 md:h-14 rounded-full bg-white flex items-center justify-center text-[#0b2642] font-bold">
                                        3
                                    </div>
                                    <p class="text-white text-base md:text-lg leading-relaxed max-w-md">
                                        Be experienced in leading a high-performing team.
                                    </p>
                                </div>

                                <div class="flex items-start space-x-6">
                                    <div
                                        class="w-12 h-12 md:w-14 md:h-14 rounded-full bg-white flex items-center justify-center text-[#0b2642] font-bold">
                                        6
                                    </div>
                                    <p class="text-white text-base md:text-lg leading-relaxed max-w-md">
                                        Have achieved great success and are driven to give back.
                                    </p>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

            </div>




        </div>
    </div>
    <div class="xl:mt-2 lg:mt-32 md:mt-52 -mt-12">
        @component('components.footer')
            @endcomponent
    </div>
@endsection