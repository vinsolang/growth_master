<div class=" w-full h-[80vh] relative  ">
    <!-- Hero Image -->
    <img src="{{ asset('assets/hero.jpg') }}" class="w-full h-full object-cover" alt="Hero Image">

    <!-- Overlay Content -->
    <div class="absolute inset-0 flex flex-col justify-center items-center px-6 md:px-16 lg:px-24 text-white">

        <h1 class="text-[22px] text-center md:text-[35px] lg:text-[45px] font-semibold max-w-[940px] leading-tight">
            Transform your business & your life.
            Join the world leader in CEO peer advisory & coaching.
        </h1>

        <a href="{{ route('application') }}">
            <button
            class="mt-6 py-5 px-8 bg-[#EDC11C] text-[#333333] hover:bg-[#003F5F] hover:text-white rounded font-semibold leading-relaxed tracking-widest">
            BECOME A MEMBER
        </button>
        </a>
    </div>
</div>

<div class="bg-[#003F5F] w-full relative -z-1">
    <h1 class="text-[25px] text-center md:text-[30px] lg:text-[35px] mx-auto max-w-280 p-10 text-white">
        Don’t let isolation stall you. Grow faster and outlast the competition with growthmasters.
    </h1>

    <div class="flex flex-col md:flex-row justify-center items-center gap-10 md:gap-10 lg:gap-20 xl:gap-20 pb-20 px-5">
        <div class="text-white py-12 px-4 sm:px-6 lg:px-8">
            <div class="max-w-7xl mx-auto">
                <div class="grid grid-cols-1 gap-12 md:grid-cols-3 md:gap-20">

                    <div class="text-center">
                        <h2 class="text-4xl sm:text-6xl font-semibold text-yellow-400 mb-2">
                            65+
                        </h2>
                        <p class="text-xl sm:text-2xl font-semibold uppercase tracking-wide mb-4">
                            Years
                        </p>
                        <p class="text-base leading-relaxed text-[#ffffff] max-w-70 mx-auto text-left">
                            Since 1957, Vistage has helped 250,000 leaders reach new levels of success.
                        </p>
                    </div>

                    <div class="text-center">
                        <h2 class="text-4xl sm:text-6xl font-semibold text-yellow-400 mb-2">
                            40
                        </h2>
                        <p class="text-xl sm:text-2xl font-semibold uppercase tracking-wide mb-4">
                            Countries
                        </p>
                        <p class="text-base leading-relaxed text-[#ffffff] max-w-70 mx-auto text-left">
                            Today, 45,000 leaders count on a local and global network of peers for guidance and
                            perspective.
                        </p>
                    </div>

                    <div class="text-center">
                        <h2 class="text-4xl sm:text-6xl font-semibold text-yellow-400 mb-2">
                            4x
                        </h2>
                        <p class="text-xl sm:text-2xl font-semibold uppercase tracking-wide mb-4">
                            Longer
                        </p>
                        <p class="text-base leading-relaxed text-[#ffffff] max-w-70 mx-auto text-left">
                            There's a reason Vistage member businesses average 21+ years, while most U.S. businesses
                            fail within 5 years.
                        </p>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>

{{-- Vision, Mission, Care value --}}
<div class="py-12">
    <div class="max-w-6xl mx-auto flex flex-col md:flex-row justify-center items-center space-x-6 space-y-12 px-4">
        {{-- Vision --}}
        <div class="space-y-2 relative top-4">
            <img src="{{ asset('assets/icon/vission.png') }}" alt="" class="w-24 h-24">
            <h1 class="text-3xl md:text-4xl font-bold text-left text-gray-800">Vision</h1>
            <p class="max-w-xl text-xl text-[#333333]">
                To be the one-stop network that translates financial intelligence into 360-degree operational mastery,
                enabling Small and Medium Enterprises (SMEs) to achieve verifiable, sustainable growth.
            </p>
        </div>
        {{-- Mission --}}
        <div class="space-y-2">
            <img src="{{ asset('assets/icon/image.png') }}" alt="" class="w-24 h-24">
            <h1 class="text-3xl md:text-4xl font-bold text-left text-gray-800">Mission</h1>
            <p class="max-w-xl text-xl text-[#333333]">
                To empower members by providing an integrated suite of tools that seamlessly
                connects financial health analytics with strategic insights across Sales, Operations,
                and Human Resource Management (HRM), ensuring targeted, profitable growth.
            </p>
        </div>
    </div>
    <section class="max-w-6xl mx-auto py-16 px-6">

        <!-- Title -->
        <div class="flex items-center justify-center gap-4 mb-12">
            <img src="{{ asset('assets/icon/value.png') }}"
                alt="Core Values Icon"
                class="w-24 h-24">

            <h1 class="text-3xl md:text-4xl font-bold text-gray-800">
                Core Values: SHARE</span>
            </h1>
        </div>

        <!-- Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">

            <!-- S -->
            <div class="bg-white rounded-2xl p-6 hover:shadow-xl transition">
                <h2 class="text-2xl font-bold text-gray-800 mb-3">S – Support</h2>
                <p class="text-xl text-[#333333]">
                    Lift each other up.
                </p>
            </div>

            <!-- H -->
            <div class="bg-white rounded-2xl p-6 hover:shadow-xl transition">
                <h2 class="text-2xl font-bold text-gray-800 mb-3">H – Humility</h2>
                <p class="text-xl text-[#333333]">
                   Embrace a growth mindset. There are new things to learn from one another.
                </p>
            </div>

            <!-- A -->
            <div class="bg-white rounded-2xl p-6 hover:shadow-xl transition">
                <h2 class="text-2xl font-bold text-gray-800 mb-3">A – Advocate</h2>
                <p class="text-xl text-[#333333]">
                    Promote each other's businesses and services.
                </p>
            </div>

            <!-- R -->
            <div class="bg-white rounded-2xl p-6 hover:shadow-xl transition">
                <h2 class="text-2xl font-bold text-gray-800 mb-3">R – Responsibility</h2>
                <p class="text-xl text-[#333333]">
                    We are all in. 
                </p>
            </div>

            <!-- E -->
            <div class="bg-white rounded-2xl p-6 hover:shadow-xl transition md:col-span-2 lg:col-span-1">
                <h2 class="text-2xl font-bold text-gray-800 mb-3">E – Empower</h2>
                <p class="text-xl text-[#333333]">
                    Help each other rise to the challenge.
                </p>
            </div>

        </div>

        <!-- Tagline -->
        <div class="mt-16 text-center">
            <p class="text-red-600 text-xl font-semibold italic">
                Our Tagline: Sharing is the seed of receiving. 
            </p>
            <p class="text-red-600 text-xl font-semibold italic mt-2">
                Sharing is growing…
            </p>
            <p class="text-red-600 text-xl font-bold mt-4">
                Digitalize your business Lead the market.
            </p>
        </div>

    </section>

</div>
{{-- Team Memeder --}}

<div class="py-12">
    <h1 class="text-[#000000] text-center text-3xl md:text-4xl xl:text-5xl">Real Growth Stories From Growth Master
        Members</h1>
</div>
<div class="grid grid-cols-1 lg:grid-cols-3 min-h-screen py-12 px-16 max-w-8xl mx-auto space-x-6 space-y-6">

    <div
        class="group relative h-[900px] md:h-[800px] bg-[#0b2642] shadow-2xl overflow-hidden rounded-lg cursor-pointer">

        <div class="absolute inset-0 flex flex-col transition-opacity duration-500 group-hover:opacity-0">
            <div class="relative h-3/4 w-full">
                <img src="{{ asset('assets/profile/1765335726-founder.jpg') }}" alt="Sean Forman"
                    class="w-full h-full object-cover object-top" />
                <div class="absolute inset-0 bg-gradient-to-t from-[#0b2642] via-transparent to-transparent">
                </div>
            </div>

            <div class="p-8 pt-0">
                <h2 class="text-[#e6b34b] text-xl font-bold uppercase tracking-wider">san rithy</h2>
                <p class="text-white text-lg leading-tight">Founder, Cambodia Accounting Club(CAC)</p>
                <p class="text-white text-lg leading-tight">Shareholder, Acclime</p>
            </div>
        </div>

        <div
            class="absolute inset-0 flex flex-col justify-center p-8 bg-[#0b2642] opacity-0 transition-opacity duration-500 group-hover:opacity-100">
            <div class="border-l-4 border-[#e6b34b] pl-4">
                <h1 class="font-bold uppercase text-white">short bio:</h1>
                <p class="text-white text-lg leading-relaxed">
                    Mr. SAN Rithy is a Certified Public Accountant (CPA) and an esteemed member of both the KICPAA and
                    IPA Australia. Besides being a shareholder of
                    Acclime, a leading international corporate services firm, co-founder of Cambodia Accounting Club
                    (CAC) which has more than 1000 menbers, he is also recognized
                    as an SME coach in shaping family business to next level.
                </p>
                <p class="text-white text-lg leading-relaxed mt-4">
                    With over <span class="font-bold">20 years </span> of experience in accounting, Taxation, and
                    Financial Management, Mr. Rithy has also spent more than a decade
                    advancing <span class="font-bold">Human Resource Development</span> across industries. His ability
                    to distill complex financial and operational
                    challenges into actionable strategies has earned him recognition as a trusted <span
                        class="font-bold">Speaker, Trainer,</span> and <span class="font-bold">SME Investor.</span>
                </p>
            </div>

            <div class="mt-8 pt-4 border-t border-white/20">
                <h1 class="font-bold uppercase text-white">highlight</h1>
                <p class="text-[#ffffff] text-md">
                    One of this most notable achievements includes leading the transformation of a locally owned
                    business into a globally
                    integrated enterprise under this <span class="font-bold">Acclime</span> brand demonstrating his
                    vission, strategic acument,
                    and commitment to excellence
                </p>
            </div>
        </div>
    </div>

    <div
        class="group relative h-[900px] md:h-[800px] bg-[#0b2642] shadow-2xl overflow-hidden rounded-lg cursor-pointer">

        <div class="absolute inset-0 flex flex-col transition-opacity duration-500 group-hover:opacity-0">
            <div class="relative h-3/4 w-full">
                <img src="{{ asset('assets/profile/DSC05890(2).jpg') }}" alt="Sean Forman"
                    class="w-full h-full object-cover object-top" />
                <div class="absolute inset-0 bg-gradient-to-t from-[#0b2642] via-transparent to-transparent">
                </div>
            </div>

            <div class="p-8 pt-0">
                <h2 class="text-[#e6b34b] text-xl font-bold uppercase tracking-wider">san rithy</h2>
                <p class="text-white text-lg leading-tight">Founder, Cambodia Accounting Club(CAC)</p>
                <p class="text-white text-lg leading-tight">Shareholder, Acclime</p>
            </div>
        </div>

        <div
            class="absolute inset-0 flex flex-col justify-center p-8 bg-[#0b2642] opacity-0 transition-opacity duration-500 group-hover:opacity-100">
            <div class="border-l-4 border-[#e6b34b] pl-4">
                <h1 class="font-bold uppercase text-white">short bio:</h1>
                <p class="text-white text-lg leading-relaxed">
                    Mr. SAN Rithy is a Certified Public Accountant (CPA) and an esteemed member of both the KICPAA and
                    IPA Australia. Besides being a shareholder of
                    Acclime, a leading international corporate services firm, co-founder of Cambodia Accounting Club
                    (CAC) which has more than 1000 menbers, he is also recognized
                    as an SME coach in shaping family business to next level.
                </p>
                <p class="text-white text-lg leading-relaxed mt-4">
                    With over <span class="font-bold">20 years </span> of experience in accounting, Taxation, and
                    Financial Management, Mr. Rithy has also spent more than a decade
                    advancing <span class="font-bold">Human Resource Development</span> across industries. His ability
                    to distill complex financial and operational
                    challenges into actionable strategies has earned him recognition as a trusted <span
                        class="font-bold">Speaker, Trainer,</span> and <span class="font-bold">SME Investor.</span>
                </p>
            </div>

            <div class="mt-8 pt-4 border-t border-white/20">
                <h1 class="font-bold uppercase text-white">highlight</h1>
                <p class="text-[#ffffff] text-md">
                    One of this most notable achievements includes leading the transformation of a locally owned
                    business into a globally
                    integrated enterprise under this <span class="font-bold">Acclime</span> brand demonstrating his
                    vission, strategic acument,
                    and commitment to excellence
                </p>
            </div>
        </div>
    </div>

    <div
        class="group relative h-[900px] md:h-[800px] bg-[#0b2642] shadow-2xl overflow-hidden rounded-lg cursor-pointer">

        <div class="absolute inset-0 flex flex-col transition-opacity duration-500 group-hover:opacity-0">
            <div class="relative h-3/4 w-full">
                <img src="{{ asset('assets/profile/DSC05883.jpg') }}" alt="Sean Forman"
                    class="w-full h-full object-cover object-top" />
                <div class="absolute inset-0 bg-gradient-to-t from-[#0b2642] via-transparent to-transparent">
                </div>
            </div>

            <div class="p-8 pt-0">
                <h2 class="text-[#e6b34b] text-xl font-bold uppercase tracking-wider">san rithy</h2>
                <p class="text-white text-lg leading-tight">Founder, Cambodia Accounting Club(CAC)</p>
                <p class="text-white text-lg leading-tight">Shareholder, Acclime</p>
            </div>
        </div>

        <div
            class="absolute inset-0 flex flex-col justify-center p-8 bg-[#0b2642] opacity-0 transition-opacity duration-500 group-hover:opacity-100">
            <div class="border-l-4 border-[#e6b34b] pl-4">
                <h1 class="font-bold uppercase text-white">short bio:</h1>
                <p class="text-white text-lg leading-relaxed">
                    Mr. SAN Rithy is a Certified Public Accountant (CPA) and an esteemed member of both the KICPAA and
                    IPA Australia. Besides being a shareholder of
                    Acclime, a leading international corporate services firm, co-founder of Cambodia Accounting Club
                    (CAC) which has more than 1000 menbers, he is also recognized
                    as an SME coach in shaping family business to next level.
                </p>
                <p class="text-white text-lg leading-relaxed mt-4">
                    With over <span class="font-bold">20 years </span> of experience in accounting, Taxation, and
                    Financial Management, Mr. Rithy has also spent more than a decade
                    advancing <span class="font-bold">Human Resource Development</span> across industries. His ability
                    to distill complex financial and operational
                    challenges into actionable strategies has earned him recognition as a trusted <span
                        class="font-bold">Speaker, Trainer,</span> and <span class="font-bold">SME Investor.</span>
                </p>
            </div>

            <div class="mt-8 pt-4 border-t border-white/20">
                <h1 class="font-bold uppercase text-white">highlight</h1>
                <p class="text-[#ffffff] text-md">
                    One of this most notable achievements includes leading the transformation of a locally owned
                    business into a globally
                    integrated enterprise under this <span class="font-bold">Acclime</span> brand demonstrating his
                    vission, strategic acument,
                    and commitment to excellence
                </p>
            </div>
        </div>
    </div>

    <div
        class="group relative h-[900px] md:h-[800px] bg-[#0b2642] shadow-2xl overflow-hidden rounded-lg cursor-pointer">

        <div class="absolute inset-0 flex flex-col transition-opacity duration-500 group-hover:opacity-0">
            <div class="relative h-3/4 w-full">
                <img src="{{ asset('assets/profile/DSC03933(5).jpg') }}" alt="Sean Forman"
                    class="w-full h-full object-cover object-top" />
                <div class="absolute inset-0 bg-gradient-to-t from-[#0b2642] via-transparent to-transparent">
                </div>
            </div>

            <div class="p-8 pt-0">
                <h2 class="text-[#e6b34b] text-xl font-bold uppercase tracking-wider">san rithy</h2>
                <p class="text-white text-lg leading-tight">Founder, Cambodia Accounting Club(CAC)</p>
                <p class="text-white text-lg leading-tight">Shareholder, Acclime</p>
            </div>
        </div>

        <div
            class="absolute inset-0 flex flex-col justify-center p-8 bg-[#0b2642] opacity-0 transition-opacity duration-500 group-hover:opacity-100">
            <div class="border-l-4 border-[#e6b34b] pl-4">
                <h1 class="font-bold uppercase text-white">short bio:</h1>
                <p class="text-white text-lg leading-relaxed">
                    Mr. SAN Rithy is a Certified Public Accountant (CPA) and an esteemed member of both the KICPAA and
                    IPA Australia. Besides being a shareholder of
                    Acclime, a leading international corporate services firm, co-founder of Cambodia Accounting Club
                    (CAC) which has more than 1000 menbers, he is also recognized
                    as an SME coach in shaping family business to next level.
                </p>
                <p class="text-white text-lg leading-relaxed mt-4">
                    With over <span class="font-bold">20 years </span> of experience in accounting, Taxation, and
                    Financial Management, Mr. Rithy has also spent more than a decade
                    advancing <span class="font-bold">Human Resource Development</span> across industries. His ability
                    to distill complex financial and operational
                    challenges into actionable strategies has earned him recognition as a trusted <span
                        class="font-bold">Speaker, Trainer,</span> and <span class="font-bold">SME Investor.</span>
                </p>
            </div>

            <div class="mt-8 pt-4 border-t border-white/20">
                <h1 class="font-bold uppercase text-white">highlight</h1>
                <p class="text-[#ffffff] text-md">
                    One of this most notable achievements includes leading the transformation of a locally owned
                    business into a globally
                    integrated enterprise under this <span class="font-bold">Acclime</span> brand demonstrating his
                    vission, strategic acument,
                    and commitment to excellence
                </p>
            </div>
        </div>
    </div>

    <div
        class="group relative h-[900px] md:h-[800px] bg-[#0b2642] shadow-2xl overflow-hidden rounded-lg cursor-pointer">

        <div class="absolute inset-0 flex flex-col transition-opacity duration-500 group-hover:opacity-0">
            <div class="relative h-3/4 w-full">
                <img src="{{ asset('assets/profile/AR508340(4).jpg') }}" alt="Sean Forman"
                    class="w-full h-full object-cover object-top" />
                <div class="absolute inset-0 bg-gradient-to-t from-[#0b2642] via-transparent to-transparent">
                </div>
            </div>

            <div class="p-8 pt-0">
                <h2 class="text-[#e6b34b] text-xl font-bold uppercase tracking-wider">san rithy</h2>
                <p class="text-white text-lg leading-tight">Founder, Cambodia Accounting Club(CAC)</p>
                <p class="text-white text-lg leading-tight">Shareholder, Acclime</p>
            </div>
        </div>

        <div
            class="absolute inset-0 flex flex-col justify-center p-8 bg-[#0b2642] opacity-0 transition-opacity duration-500 group-hover:opacity-100">
            <div class="border-l-4 border-[#e6b34b] pl-4">
                <h1 class="font-bold uppercase text-white">short bio:</h1>
                <p class="text-white text-lg leading-relaxed">
                    Mr. SAN Rithy is a Certified Public Accountant (CPA) and an esteemed member of both the KICPAA and
                    IPA Australia. Besides being a shareholder of
                    Acclime, a leading international corporate services firm, co-founder of Cambodia Accounting Club
                    (CAC) which has more than 1000 menbers, he is also recognized
                    as an SME coach in shaping family business to next level.
                </p>
                <p class="text-white text-lg leading-relaxed mt-4">
                    With over <span class="font-bold">20 years </span> of experience in accounting, Taxation, and
                    Financial Management, Mr. Rithy has also spent more than a decade
                    advancing <span class="font-bold">Human Resource Development</span> across industries. His ability
                    to distill complex financial and operational
                    challenges into actionable strategies has earned him recognition as a trusted <span
                        class="font-bold">Speaker, Trainer,</span> and <span class="font-bold">SME Investor.</span>
                </p>
            </div>

            <div class="mt-8 pt-4 border-t border-white/20">
                <h1 class="font-bold uppercase text-white">highlight</h1>
                <p class="text-[#ffffff] text-md">
                    One of this most notable achievements includes leading the transformation of a locally owned
                    business into a globally
                    integrated enterprise under this <span class="font-bold">Acclime</span> brand demonstrating his
                    vission, strategic acument,
                    and commitment to excellence
                </p>
            </div>
        </div>
    </div>
</div>