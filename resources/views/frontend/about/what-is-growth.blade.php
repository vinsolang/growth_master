@extends('layout.app')
@section('title', 'What is Growth Master?')
@section('content')
    <div id="eventPage" class="space-y-45">
        @component('components.navbar')
        @endcomponent

        <div class="relative w-full h-[40vh] md:h-screen top-40">

            <!-- Background Image (NO padding!) -->
            <img src="https://www.vistage.com/wp-content/uploads/2020/05/Group-of-executives-laugh-at-table-during-business-meeting.jpg"
                class="w-full h-full object-cover px-4 md:px-8 xl:px-12">

            <!-- Dark overlay (matches image exactly) -->
            {{-- <div class="absolute inset-0 bg-black/50 w-[95%] h-full object-cover md:px-10 xl:px-20"></div> --}}

            <!-- Text content (padding allowed here) -->
            <div class="absolute inset-0 flex flex-col justify-center items-start px-8 md:px-16 lg:px-24 text-white">

                <h1 class="text-[16px] md:text-[18px] lg:text-[25px] font-normal mb-3 md:px-10 xl:px-12 lg:-mt-4">
                    What is Growth Master?
                </h1>

                <p
                    class="text-[25px] md:text-[45px] lg:text-[55px] font-semibold max-w-[940px] leading-tight mb-3 md:px-10 xl:px-12 md:py-20">
                    Growth Master helps CEOs make better decisions by bringing leaders together.
                </p>

            </div>
        </div>
        <div class="space-y-10">
            <!-- SPACER for navbar -->
            <div class=""></div>
            {{-- Type of About Growth Master --}}
            <!-- BUTTON SECTION -->
            <div id="growthMenuWrapper" class="relative">
                @include('frontend.about.button-section-menu-about')
            </div>

            {{-- Growth Master Events Types --}}
            <div class="space-y-6">
                {{-- Title --}}
                <h1 class="text-[#000000] max-w-7xl mx-auto text-left text-3xl md:text-4xl xl:text-5xl px-4">
                    Helping high-integrity leaders make great decisions that benefit their companies, families and communities.
                </h1>
                <p class="max-w-7xl mx-auto text-left text-[#343434] font-regular text-[17px] md:text-[20px] px-4">
                    Growth Master is the world’s largest executive coaching organization for small and midsize businesses.
                    For more than 65 years we’ve been helping CEOs, business owners and key executives solve their toughest
                    challenges through a comprehensive approach to success. At the heart of our proven formula is
                    confidential peer advisory groups and executive coaching sessions.
                </p>
            </div>
            {{-- Logo --}}
            <div class="w-64 h-64 mx-auto">
                <img src="{{ asset('assets/logo.png') }}" alt="LOGO" class="object-cover">
            </div>

            {{-- @@@@  --}}
            <div class="bg-[#124d6b] gap-10 md:gap-10 lg:gap-20 xl:gap-20 p-12">
                <div class="text-white py-12 px-4 sm:px-6 lg:px-8">
                    <div class="max-w-7xl mx-auto">
                        <div class="grid grid-cols-1 gap-12 md:grid-cols-3 lg:gap-80 md:gap-20">

                            <div class="text-center">
                                <h2 class="text-4xl sm:text-6xl font-semibold text-white mb-2">
                                45,000
                                </h2>
                                <p class="text-xl sm:text-2xl font-semibold tracking-wide mb-4">
                                member
                                </p>
                                <p class="bg-[#edc01c] w-12 h-0.5 flex mx-auto">
                                </p>
                            </div>

                            <div class="text-center">
                                <h2 class="text-4xl sm:text-6xl font-semibold text-white mb-2">
                                40
                                </h2>
                                <p class="text-xl sm:text-2xl font-semibold tracking-wide mb-4">
                                countries
                                </p>
                                <p class="bg-[#edc01c] w-12 h-0.5 flex mx-auto"></p>
                            </div>

                            <div class="text-center">
                                <h2 class="text-4xl sm:text-6xl font-semibold text-white mb-2">
                                65+
                                </h2>
                                <p class="text-xl sm:text-2xl font-semibold tracking-wide mb-4">
                                years
                                </p>
                                <p class="bg-[#edc01c] w-12 h-0.5 flex mx-auto"></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="py-2">
                <h1 class="text-[#000000] max-w-7xl mx-auto text-center text-3xl md:text-4xl xl:text-5xl px-4">
                    The Growth Master story: 65 years of cultivating success
                </h1>
                {{-- Growth Master of story --}}
                @php
                    $cards = [
                    [
                        'image' => 'https://www.vistage.com/wp-content/uploads/2019/09/Bob-nourse-with-original-vistage-group-1957.jpg',
                        'text'  => 'It started simply enough: Businessman Bob Nourse brought together several Milwaukee-area executives in 1957 to help each other solve their businesses challenges. He made sure they were from non-competing industries and kept conversations confidential. He also brought in business experts to share their insights.'
                    ],
                    [
                        'image' => 'https://www.vistage.com/wp-content/uploads/2019/09/Richard-wong-on-mount-everest-summit.jpg',
                        'text'  => 'Nourse’s formula spurred such remarkable success that it wasn’t long before his Midwestern business became a thriving international company with 45,000 members in 40 countries.'
                    ],
                    [
                        'image' => 'https://www.vistage.com/wp-content/uploads/2019/09/VES-group-back-of-female-CEO-audience-member.jpg',
                        'text'  => 'Nourse’s formula spurred such remarkable success that it wasn’t long before his Midwestern business became a thriving international company with 45,000 members in 40 countries.'
                    ],
                ];
                @endphp
                <div class="flex flex-col justify-center items-center py-12 max-w-[80%] mx-auto lg:space-y-0 space-y-6">
                    @foreach($cards as $index => $card)

                        <div class="flex flex-col lg:flex-row items-center lg:space-y-0 space-y-4">

                            {{-- IMAGE --}}
                            <div class="lg:w-[40%] w-full lg:h-[350px] order-1
                                {{ $index % 2 == 0 ? 'lg:order-1' : 'lg:order-2' }}
                            ">
                                <img src="{{ $card['image'] }}"
                                    class="w-full h-full object-cover">
                            </div>

                            {{-- TEXT --}}
                            <div class="flex justify-center items-center bg-[#ededed] lg:w-[60%] w-full lg:h-[480px] order-2
                                {{ $index % 2 == 0 ? 'lg:order-2' : 'lg:order-1' }}
                            ">
                                <p class="text-left lg:max-w-[70%] mx-auto text-[#454545] md:text-xl text-[18px] px-4">
                                    {{ $card['text'] }}
                                </p>
                            </div>

                        </div>

                    @endforeach
                </div>
            </div>
            
            {{-- Powers performance --}}
            <div class="space-y-10">
                <h1 class="text-[#000000] md:max-w-7xl mx-auto md:text-left text-center text-3xl md:text-4xl xl:text-5xl px-4">
                    Growth Master powers performance
                </h1>
                <p class="max-w-7xl mx-auto text-left text-[#343434] font-regular text-[17px] md:text-[20px] px-4">
                    Vistage CEO members grew their annual revenue on average by 4.6% in 2020, while nonmembers with 
                    comparable small and midsize businesses saw revenue decrease by 4.7% according to an analysis 
                    of Dun & Bradstreet data.
                </p>

                {{-- Video --}}
                @php
                    $videos = [
                    [
                        'video' => 'https://www.vistage.com/wp-content/uploads/2019/09/Bob-nourse-with-original-vistage-group-1957.jpg',
                        'text'  => 'It started simply enough: Businessman Bob Nourse brought together several Milwaukee-area executives in 1957 to help each other solve their businesses challenges. He made sure they were from non-competing industries and kept conversations confidential. He also brought in business experts to share their insights.',
                        'title' => 'Mark Marmo',
                        'name' => 'CEO, Deep Well Services'

                    ],
                    [
                        'video' => 'https://www.vistage.com/wp-content/uploads/2019/09/Bob-nourse-with-original-vistage-group-1957.jpg',
                        'text'  => 'It started simply enough: Businessman Bob Nourse brought together several Milwaukee-area executives in 1957 to help each other solve their businesses challenges. He made sure they were from non-competing industries and kept conversations confidential. He also brought in business experts to share their insights.',
                        'title' => 'Mark Marmo',
                        'name' => 'CEO, Deep Well Services'
                    ],
                    
                ];
                @endphp
                <div class="flex flex-col justify-center items-center py-12 max-w-[80%] mx-auto lg:space-y-0 space-y-6">
                    @foreach($videos as $index => $video)

                        <div class="flex flex-col lg:flex-row items-center lg:space-y-0 space-y-4">

                            {{-- video --}}
                            <div class="relative lg:left-10 lg:w-[40%] w-full lg:h-[350px] order-1
                               
                            ">
                                <img src="{{ $video['video'] }}"
                                    class="w-full h-full object-cover">
                            </div>

                            {{-- TEXT --}}
                            <div class="flex flex-col justify-center bg-[#ededed] lg:w-[60%] w-full lg:h-[480px] order-2 space-y-6 lg:py-0 py-6
                               
                            ">
                                <p class="text-left lg:max-w-[70%] mx-auto text-[#000000] md:text-xl text-[18px] px-4">
                                    {{ $video['text'] }}
                                </p>
                                {{-- link yellow --}}
                                <div class="bg-[#edc01c] h-1 w-24 lg:ml-[138px] lg:mt-0 ml-4"></div>
                                <div class="lg:ml-[138px] space-y-4 lg:px-0 px-4">
                                    <h1 class="text-2xl font-semibold">{{ $video['title'] }}</h1>
                                    <p class="text-[#454545] md:text-xl text-[18px]">{{ $video['name'] }}</p>
                                </div>
                            </div>

                        </div>
                    @endforeach
                </div>
            </div>

            {{-- Our Members at a Glance --}}
            <div class="space-y-6">
                <h1 class="text-[#000000] md:max-w-7xl mx-auto md:text-left text-center text-3xl md:text-4xl xl:text-5xl px-4">
                     Our Members at a Glance
                </h1>
                <p class="max-w-7xl mx-auto text-left text-[#343434] font-regular text-[17px] md:text-[20px] px-4">
                    Growth Master members represent nearly every industry across a range of small to large businesses. 
                    This diversity is key to furnishing advisory boards of members from non-competing industries, 
                    and providing you with relevant expertise, regardless of your industry or company size.
                </p>
                {{-- image member --}}
                <div class="w-[90%] md:w-[70%] mx-auto">
                    <img src="https://www.vistage.com/wp-content/uploads/2019/09/Our-members-at-a-glance.jpg" alt="" class="w-full object-cover">
                </div>
            </div>

            {{-- Inquire About Membership --}}
            <div class="space-y-6">
                <h1 class="text-[#000000] md:max-w-7xl mx-auto md:text-left text-center text-3xl md:text-4xl xl:text-5xl px-4">
                    Inquire About Membership
                </h1>
                <p class="max-w-7xl mx-auto text-left text-[#343434] font-regular text-[17px] md:text-[20px] px-4">
                    With Vistage you’re joining a powerful community of high-caliber 
                    executives who challenge each other, inspire each other and share 
                    their perspectives to help each other make better decisions, 
                    become better leaders and achieve better outcomes.
                </p>
                <p class="max-w-7xl mx-auto text-left text-[#343434] font-regular text-[17px] md:text-[20px] px-4">
                    Take your success to a new level. Complete the form below to find out if you qualify.
                </p>
                {{-- Form Contact information --}}
                <div>
                    <form action="">
                        <div class="max-w-7xl mx-auto p-6">
                            <!-- ================= Contact Information ================= -->
                            <h2 class="text-xl font-semibold mb-2">Contact Information</h2>
                            <hr class="mb-6 w-1/2 border-gray-300">

                            <div class="grid grid-cols-1 md:grid-cols-2 gap-x-10 gap-y-6">

                                <!-- First Name -->
                                <div>
                                    <label class="block text-sm font-medium mb-2">
                                        First name <span class="text-orange-500">*</span>
                                    </label>
                                    <input type="text" name="firstname"
                                        class="w-full h-12 bg-[#e9eff2] rounded-md px-4 focus:outline-none">
                                </div>

                                <!-- Last Name -->
                                <div>
                                    <label class="block text-sm font-medium mb-2">
                                        Last name <span class="text-orange-500">*</span>
                                    </label>
                                    <input type="text" name="lastname"
                                        class="w-full h-12 bg-[#e9eff2] rounded-md px-4 focus:outline-none">
                                </div>

                                <!-- Business Email -->
                                <div>
                                    <label class="block text-sm font-medium mb-2">
                                        Business email <span class="text-orange-500">*</span>
                                    </label>
                                    <input type="email" name="email"
                                        class="w-full h-12 bg-[#e9eff2] rounded-md px-4 focus:outline-none">
                                </div>

                                <!-- Mobile Phone -->
                                <div>
                                    <label class="block text-sm font-medium mb-2">
                                        Mobile phone <span class="text-orange-500">*</span>
                                    </label>
                                    <input type="tel" name="phone"
                                        class="w-full h-12 bg-[#e9eff2] rounded-md px-4 focus:outline-none">
                                </div>

                                <!-- Postal Code -->
                                <div>
                                    <label class="block text-sm font-medium mb-2">
                                        Postal Code <span class="text-orange-500">*</span>
                                    </label>
                                    <input type="text" name="code"
                                        class="w-full h-12 bg-[#e9eff2] rounded-md px-4 focus:outline-none">
                                </div>

                            </div>

                            <!-- ================= Company Information ================= -->
                            <h2 class="text-xl font-semibold mt-12 mb-2">Company Information</h2>
                            <hr class="mb-6 w-1/2 border-gray-300">

                            <div class="grid grid-cols-1 md:grid-cols-2 gap-x-10 gap-y-6">

                                <!-- Company -->
                                <div>
                                    <label class="block text-sm font-medium mb-2">
                                        Company <span class="text-orange-500">*</span>
                                    </label>
                                    <input type="text" name="compay"
                                        class="w-full h-12 bg-[#e9eff2] rounded-md px-4 focus:outline-none">
                                </div>

                                <!-- Professional Role -->
                                <div>
                                    <label class="flex items-center text-sm font-medium mb-2 gap-1">
                                        Professional Role <span class="text-orange-500">*</span>
                                        <span class="w-4 h-4 flex items-center justify-center text-xs text-white bg-gray-600 rounded-full cursor-pointer">?</span>
                                    </label>
                                    <select class="w-full h-12 bg-[#e9eff2] text-gray-600 rounded-md px-4 focus:outline-none font-semibold">
                                        <option value="">Please select</option>
                                        <option value="">Founder/Owner</option>
                                        <option value="">Chief Executive/President/GM</option>
                                        <option value="">C-level (non-CEO), Executive VP</option>
                                        <option value="">Vice President/Division Head</option>
                                        <option value="">Director</option>
                                        <option value="">Manager</option>
                                        <option value="">Consultant/Business Development/Sales</option>
                                        <option value="">Other (non-managerial)</option>
                                    </select>
                                </div>

                                <!-- Revenue -->
                                <div class="space-y-8">
                                    <label class="flex items-center text-sm font-medium mb-2 gap-1">
                                        Recent annual sales revenue <span class="text-orange-500">*</span>
                                        <span class="w-4 h-4 flex items-center justify-center text-xs text-white bg-gray-600 rounded-full cursor-pointer">?</span>
                                    </label>
                                    <select class="w-full h-12 bg-[#e9eff2] text-gray-600 rounded-md px-4 focus:outline-none font-semibold">
                                        <option value="">Please select</option>
                                        <option value="">Less than 500k</option>
                                        <option value="">500 - 999k</option>
                                        <option value="">1-4 Million</option>
                                        <option value="">5-9 Million</option>
                                        <option value="">10-20 Million</option>
                                        <option value="">21-49 Million</option>
                                        <option value="">50-99 Million</option>
                                        <option value="">100-249 Million</option>
                                        <option value="">250-499 Million</option>
                                        <option value="">500-999 Million</option>
                                        <option value="">500-999 Million</option>
                                    </select>
                                    {{--Question --}}
                                    <hr class="mb-6 border-gray-300">
                                    <select class="w-full h-12 bg-[#e9eff2] text-gray-600 rounded-md px-4 focus:outline-none font-semibold">
                                        <option value="">How did you hear about Growth Master?</option>
                                        <option value="">I was referred by another Growth Master Member</option>
                                        <option value="">I was referred by a Growth Master Chair</option>
                                        <option value="">I was referred by a Growth Master Speaker</option>
                                        <option value="">I found Growth Master on Google</option>
                                        <option value="">I saw an ad on social media</option>
                                        <option value="">Other</option>
                                    </select>
                                    <hr class="mb-6 border-gray-300">
                                    <p class="text-gray-600 rounded-md px-4 font-semibold"> 
                                        * Indicates Response Required <br/>
                                         Message and data rates may apply.
                                    </p>
                                </div>

                            </div>
                           
                        </div>
                        {{-- Button Become a Member --}}
                        <div class="flex justify-center text-xl">
                            <a href="#" class="inline-flex items-center justify-center w-72 h-14 bg-[#edc01c] font-semibold tracking-wider uppercase">
                                Become a member
                            </a>
                        </div>
                    </form>
                </div>
            </div>
            @component('components.footer')
            @endcomponent
        </div>
    </div>

<script>
document.addEventListener("DOMContentLoaded", () => {
    const menu = document.getElementById("growthMenu");
    const wrapper = document.getElementById("growthMenuWrapper");
    const offsetTop = wrapper.offsetTop;

    window.addEventListener("scroll", () => {
        if (window.scrollY >= offsetTop - 64) {
            menu.classList.add(
                "fixed",
                "top-24",
                "left-0",
                "w-full",
                "z-40",
                "shadow-md"
            );
        } else {
            menu.classList.remove(
                "fixed",
                "top-24",
                "left-0",
                "w-full",
                "z-40",
                "shadow-md"
            );
        }
    });
});
</script>

@endsection