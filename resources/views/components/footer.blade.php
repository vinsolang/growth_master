<section class="relative w-full">
    <div class="w-full h-auto bg-[#003F5F] flex flex-col px-4 py-8 xl:px-45 xl:py-30 md:px-6 md:py-24 space-y-12">
        <div class="space-y-8">
            {{-- logo --}}
            <div>
                <img src="{{ asset('assets/logo.png') }}" alt="" class="w-24 h-24 rounded-full">
            </div>
            {{-- menu of footer --}}
            <div class="grid grid-cols-1 md:grid-cols-3 xl:grid-cols-5 gap-y-6 text-[#ffffff] font-meduim">
                <div class="space-y-2">
                    <h1 class="italic text-gray-400 font-meduim text-[14px]">Explore Growth Master:</h1>
                    <ul class="space-y-2 text-[14px]">
                        <li><a href="{{ route('membership') }}">Membership</a></li>
                        <li><a href="{{ route('chair.growth') }}">Chair</a></li>
                        <li><a href="{{ route('events') }}">Events</a></li>
                    </ul>
                </div>
                <div class="space-y-2">
                    <h1 class="italic text-gray-400 font-meduim text-[14px]">Learn About Growth Master:</h1>
                    <ul class="space-y-2 text-[14px]">
                        <li><a href="{{ route('about') }}">About Growth Master</a></li>
                        <li><a href="{{ route('what.is.growth') }}">What is Growth Master</a></li>
                        <li><a href="">Worldwide Locations</a></li>
                        <li><a href="">Careers</a></li>
                    </ul>
                </div>
                <div class="space-y-2">
                    <h1 class="italic text-gray-400 font-meduim text-[14px]">Apply for Growth Master:</h1>
                    <ul class="space-y-2 text-[14px]">
                        <li><a href="{{ route('home') }}#member-form">Become a Member</a></li>
                        <li><a href="">Become a Mentor</a></li>
                        <li><a href="">Become a Speaker</a></li>
                        <li><a href="">Become a Licensee</a></li>
                        <li><a href="">Become a Sponsor</a></li>
                        <li><a href="">Referral Program</a></li>
                    </ul>
                </div>
                <div class="space-y-2">
                    <h1 class="italic text-gray-400 font-meduim text-[14px]">Popular Events Joined by CEO </h1>
                    <ul class="space-y-2 text-[14px]">
                        {{-- <li><a href="">Finance for Non-finance </a></li> --}}
                        <li><a href="">Tariffs Resource Center</a>
                        <li><a href="">Free Executive Coaching Course</a></li>
                        <li><a href="{{ route('ceo.climp') }}">CEO Climb Events</a></li>
                        <li><a href="{{ route('Laws.of.eadership') }}">The CEO’s 7 Laws of Leadership</a></li>
                        <li><a href="">Leadership Resource & PDFs</a></li>
                        <li><a href="">Diversity and Inclusion</a></li>
                    </ul>
                </div>
                <div class="space-y-2">
                    <h1 class="font-bold text-[14px]">Growthmaster Headquarter’s Address </h1>
                    <div class="space-y-2 text-[14px]">
                        <p class="italic">
                            2 <sup>nd</sup> Floor, LSI Building (#03), Friendship Hanoi-Phnom Penh Blvd., 
                            (Street 1019), Phnom Penh Thmey, Khan Sen Sok, Phnom Penh City, Kingdom of Cambodia.
                        </p>
                        <p class="font-bold">Hours</p>
                        <p>Everyday: 8:00AM–5:00PM</p>
                        <p class="font-bold">Tel:</p>
                        <p>015 55 44 41 / 012 401 909</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="space-y-4">
            {{-- Icon socail media --}}
            <div class="flex space-x-4 justify-start">
                <div class="w-[30px] h-[30px] rounded-full bg-gray-600">
                    <img src="https://www.vistage.com/wp-content/themes/vistage/dist/img/instagram.svg" alt="" class="w-full h-full object-cover">
                </div>
                <div class="w-[30px] h-[30px] rounded-full bg-gray-600">
                    <img src="https://www.vistage.com/wp-content/themes/vistage/dist/img/facebook.svg" alt="" class="w-full h-full object-cover">
                </div>
                <div class="w-[30px] h-[30px] rounded-full bg-gray-600">
                    <img src="https://www.vistage.com/wp-content/themes/vistage/dist/img/youtube.svg" alt="" class="w-full h-full object-cover">
                </div>
            </div>
            {{-- Line white --}}
            <div>
                <div class="w-full h-0.5 bg-[#ffffff]"></div>
            </div>
            {{-- copy right --}}
            <div class="flex flex-col lg:flex-row gap-x-8 text-[#ffffff] font-meduim text-[14px]">
                <p class="font-bold">© 2025 Growthmaster Headquarter’s Address</p>
                <p>Privacy Policy</p>
                <p>Confidentiality Pledge</p>
                <p>Terms of Use</p>
                <p>Contact Us</p>
                <p>Sitemap</p>
            </div>
        </div>
    </div>
</section>