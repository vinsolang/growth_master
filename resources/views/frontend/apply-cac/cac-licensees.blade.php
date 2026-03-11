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
                @if(!empty($getBanner) && $getBanner[24]->title === 'Become a Licensee')
                    <img src="{{ asset('assets/banner/' . $getBanner[24]->image) }}" class="w-full h-full object-cover"
                        alt="Hero Image">
                @endif

                <!-- Overlay Content -->
                <div
                    class="absolute inset-0 flex flex-col justify-center items-start px-6 md:px-16 lg:px-24 text-white md:bg-none bg-black/50">

                    <h1
                        class="text-[22px] text-start md:text-[35px] lg:text-[45px] font-semibold max-w-[940px] leading-tight">
                        @if(!empty($getBanner) && $getBanner[24]->title === 'Become a Licensee')
                            {{ $getBanner[24]->name }}
                        @endif
                    </h1>

                    <p
                        class="text-[16px] text-start md:text-[18px] mt-5 lg:text-[25px] font-medium max-w-[940px] leading-tight">
                        @if(!empty($getBanner) && $getBanner[24]->title === 'Become a Licensee')
                            {!! nl2br(e(value: $getBanner[24]->content)) !!}
                        @endif
                    </p>

                    <div class="mt-14">
                        <a href="#licensees" class="bg-[#e8000c] text-white font-semibold tracking-widest px-10 py-4">
                            Apply to be a Licensee
                        </a>
                    </div>
                </div>
            </div>

            <div class="flex flex-col justify-center items-center mt-10 gap-2 py-4">
                <h1 class="text-center text-blue-900 text-[20px] md:text-[30px]">
                   {{ $getTextLicen[0]->title_1 }}
                </h1>
                <p
                    class="text-start text-blue-900 mx-[40px] xl:mx-[250px] md:mx-[100px] font-regular text-[14px] md:text-[18px]">
                    {!! nl2br($getTextLicen[0]->desc_1) !!}
                </p>
            </div>

            <div class="w-full h-auto text-blue-900">
                <h1 class="text-center text-[20px] md:text-[35px] mt-10 pb-6">{{ $getTextLicen[0]->title_2 }}</h1>
                <div class="max-w-4xl mx-auto grid grid-cols-1 md:grid-cols-2 gap-8 text-lg">
                </div>
            </div>

            <section class="bg-gray-200 py-20">
                <div class="max-w-7xl mx-auto px-6">

                    <div class="grid lg:grid-cols-2 gap-16 items-center">

                        <!-- Left Image -->
                        <div>
                            <img src="{{ asset($getTextLicen[0]->img) }}"
                                class="w-full h-[650px] object-cover">
                        </div>

                        <!-- Right Content -->
                        <div class="grid md:grid-cols-2 gap-x-12 gap-y-14">

                            <!-- Item 1 -->
                            <div>
                                <div class="w-14 h-14 bg-[#0c4a63] rounded-full flex items-center justify-center mb-4">
                                    <!-- SVG -->
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-7 h-7 text-white" fill="currentColor"
                                        viewBox="0 0 24 24">
                                        <path d="M12 1a4 4 0 00-4 4v2H6v2h12V7h-2V5a4 4 0 00-4-4zM8 9v11h8V9" />
                                    </svg>
                                </div>

                                <h3 class="text-2xl text-blue-900 mb-3">
                                    {{ $getTextLicen[0]->t_1 }}
                                </h3>

                                <p class="text-blue-900 leading-relaxed">
                                    {!! nl2br($getTextLicen[0]->d_1) !!}
                                </p>
                            </div>

                            <!-- Item 2 -->
                            <div>
                                <div class="w-14 h-14 bg-[#0c4a63] rounded-full flex items-center justify-center mb-4">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-7 h-7 text-white" fill="currentColor"
                                        viewBox="0 0 24 24">
                                        <path
                                            d="M12 2C8 2 5 5 5 9c0 5 7 13 7 13s7-8 7-13c0-4-3-7-7-7zm0 9a2 2 0 110-4 2 2 0 010 4z" />
                                    </svg>
                                </div>

                                <h3 class="text-2xl text-blue-900 mb-3">
                                   {{ $getTextLicen[0]->t_2 }}
                                </h3>

                                <p class="text-blue-900 leading-relaxed">
                                       {!! nl2br($getTextLicen[0]->d_2) !!}
                                </p>
                            </div>

                            <!-- Item 3 -->
                            <div>
                                <div class="w-14 h-14 bg-[#0c4a63] rounded-full flex items-center justify-center mb-4">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-7 h-7 text-white" fill="currentColor"
                                        viewBox="0 0 24 24">
                                        <path
                                            d="M12 21s-6-4.35-9-7.5A5.5 5.5 0 0112 6a5.5 5.5 0 019 7.5C18 16.65 12 21 12 21z" />
                                    </svg>
                                </div>

                                <h3 class="text-2xl text-blue-900 mb-3">
                                   {{ $getTextLicen[0]->t_3 }}
                                </h3>

                                <p class="text-blue-900 leading-relaxed">
                                    {!! nl2br($getTextLicen[0]->d_3) !!}
                                </p>
                            </div>

                            <!-- Item 4 -->
                            <div>
                                <div class="w-14 h-14 bg-[#0c4a63] rounded-full flex items-center justify-center mb-4">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-7 h-7 text-white" fill="currentColor"
                                        viewBox="0 0 24 24">
                                        <path d="M13 2l-2 7h4l-2 7 6-9h-4l2-5z" />
                                    </svg>
                                </div>

                                <h3 class="text-2xl text-blue-900 mb-3">
                                   {{ $getTextLicen[0]->t_4 }}
                                </h3>

                                <p class="text-blue-900 leading-relaxed">
                                      {!! nl2br($getTextLicen[0]->d_4) !!}
                                </p>
                            </div>

                        </div>

                    </div>

                </div>
            </section>

            <section class="bg-gray-200 py-16">

                <div class="max-w-5xl mx-auto text-center px-6">

                    <h2 class="text-3xl text-blue-900 mb-6">
                          {!! nl2br($getTextLicen[0]->title_3) !!}
                    </h2>

                    <p class="text-blue-900 leading-relaxed">
                          {!! nl2br($getTextLicen[0]->desc_3) !!}
                    </p>

                </div>


                <!-- Blue Section -->
                <div class="bg-[#bgbgbg] mt-16 py-16">

                    <div class="max-w-6xl mx-auto px-6 grid md:grid-cols-2 gap-16 relative">

                        <!-- Vertical Divider -->
                        <div class="hidden md:block absolute left-1/2 top-0 h-full w-[2px] bg-[#1f3d4a]"></div>

                        <!-- Left Content -->
                        <div class="pr-8 text-blue-900 text-lg">
                               {!! $getTextLicen[0]->desc_4 !!}
                        </div>


                        <!-- Right Content -->
                        <div class="pl-8 text-blue-900 text-lg">

                            {{-- <h3 class="text-2xl text-blue-900 mb-6">
                                Does this describe you?
                            </h3>

                            <ul class="space-y-5">

                                <li class="flex items-start gap-3">
                                    <span class="text-[#e8000c] text-xl">✓</span>
                                    <p class="text-blue-900">
                                        Individual entrepreneur or business leader who is highly committed to the
                                        peer-to-peer learning model.
                                    </p>
                                </li>

                                <li class="flex items-start gap-3">
                                    <span class="text-[#e8000c] text-xl">✓</span>
                                    <p class="text-blue-900">
                                        Have sufficient financial and operational resources and at least 90% of your
                                        personal time to invest.
                                    </p>
                                </li>

                                <li class="flex items-start gap-3">
                                    <span class="text-[#e8000c] text-xl">✓</span>
                                    <p class="text-blue-900">
                                        Fluent in English with a deep understanding of your local market which includes a
                                        large network of potential Chairs, members and expert speakers.
                                    </p>
                                </li>

                            </ul> --}}
                            {!! $getTextLicen[0]->desc_5 !!}

                        </div>

                    </div>
                </div>

            </section>

            <section class="py-16">
                <div class="max-w-6xl mx-auto px-6">

                    <!-- Title -->
                    <div class="text-center mb-12">
                        <h2 class="text-3xl font-semibold text-blue-900">{{ $getTextLicen[0]->title_meet }}</h2>
                        <p class="mt-4 text-blue-900 max-w-2xl mx-auto">
                            {!! nl2br($getTextLicen[0]->desc_meet) !!}
                        </p>
                    </div>

                    <!-- Cards -->
                    <div class="grid md:grid-cols-1 gap-8">

                        <!-- Card 1 -->
                        <div class="bg-white border border-blue-900 rounded-lg p-10 text-center relative">

                            <img src="{{ asset($getTextLicen[0]->profile) }}"
                                class="w-48 h-44 mx-auto rounded-md object-cover">

                            <h3 class="text-xl text-blue-900 font-semibold mt-4">{{ $getTextLicen[0]->name }}</h3>

                            <div class="w-10 h-1 bg-[#e8000c] mx-auto my-2"></div>

                            <p class="text-sm font-semibold text-blue-900">
                                {!! nl2br($getTextLicen[0]->positioin) !!}
                            </p>

                            <p class="mt-6 text-blue-900 leading-relaxed">
                               {!! nl2br($getTextLicen[0]->desc_him) !!}
                            </p>

                            <!-- Quote Icon -->
                            <div
                                class="absolute -bottom-6 left-1/2 transform -translate-x-1/2 bg-blue-900 p-3 rounded-full">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-white" fill="currentColor"
                                    viewBox="0 0 24 24">
                                    <path
                                        d="M7.17 6A5 5 0 002 11v7h7v-7H5a3 3 0 013-3h1V6H7.17zm10 0A5 5 0 0012 11v7h7v-7h-4a3 3 0 013-3h1V6h-1.83z" />
                                </svg>
                            </div>

                        </div>

                    </div>
                </div>
            </section>

            <div class="flex flex-col justify-center items-center gap-2 py-4">
                <h1 class="text-center text-blue-900 text-[20px] md:text-[30px]">
                   {{ $getTextLicen[0]->title_final }}
                </h1>
                <p
                    class="text-start text-blue-900 mx-[40px] xl:mx-[250px] md:mx-[100px] font-regular text-[14px] md:text-[18px]">
                    {!! nl2br($getTextLicen[0]->desc_final) !!}
                </p>
            </div>


            <div id="licensees">
                <form action="{{ route('chair.contact.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="max-w-7xl mx-auto p-6 text-blue-900" id="chair-form">
                        <hr class="mb-6 w-1/2 border-gray-300">

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-x-10 gap-y-6">

                            <!-- First Name -->
                            <div>
                                <input name="firstname" type="text" value="{{ old('firstname') }}"
                                    class="w-full h-12 bg-[#e9eff2] rounded-md px-4 focus:outline-none"
                                    placeholder="First name*">
                                @error('firstname')
                                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                                @enderror
                            </div>

                            <!-- Last Name -->
                            <div>
                                <input type="text" name="lastname" value="{{ old('lastname') }}"
                                    class="w-full h-12 bg-[#e9eff2] rounded-md px-4 focus:outline-none"
                                    placeholder="Last name*">
                                @error('lastname')
                                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                                @enderror
                            </div>

                            <!-- Business Email -->
                            <div>
                                <input type="email" name="email" value="{{ old('email') }}"
                                    class="w-full h-12 bg-[#e9eff2] rounded-md px-4 focus:outline-none"
                                    placeholder="Email Address">
                                @error('email')
                                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                                @enderror
                            </div>

                            <!-- Mobile Phone -->
                            <div>
                                <input type="tel" name="phone" value="{{ old('phone') }}"
                                    class="w-full h-12 bg-[#e9eff2] rounded-md px-4 focus:outline-none"
                                    placeholder="Phone*">
                                @error('phone')
                                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                                @enderror
                            </div>
                            <select name="member_status" id=""
                                class="w-full h-12 bg-[#e9eff2] text-gray-600 rounded-md px-4 focus:outline-none font-semibold">
                                <option value="">Former/Current Growth Master Member*</option>
                                <option value="yes">Yes</option>
                                <option value="no">No</option>
                            </select>
                            <select name="executive_experience" id=""
                                class="w-full h-12 bg-[#e9eff2] text-gray-600 rounded-md px-4 focus:outline-none font-semibold">
                                <option value="">C-level executive experience*</option>
                                <option value="0-10">0-10</option>
                                <option value="16-20">16-20</option>
                                <option value="20+">20+</option>
                            </select>
                            <select name="staff"
                                class="w-full h-12 bg-[#e9eff2] text-gray-600 rounded-md px-4 focus:outline-none font-semibold">

                                <option value="">Most employees managed*</option>

                                <option value="1-5" {{ old('staff') == '1-5' ? 'selected' : '' }}>1 - 5</option>
                                <option value="6-10" {{ old('staff') == '6-10' ? 'selected' : '' }}>6 - 10</option>
                                <option value="11-20" {{ old('staff') == '11-20' ? 'selected' : '' }}>11 - 20</option>
                                <option value="21-40" {{ old('staff') == '21-40' ? 'selected' : '' }}>21 - 40</option>
                                <option value="41-70" {{ old('staff') == '41-70' ? 'selected' : '' }}>41 - 70</option>
                                <option value="71-100" {{ old('staff') == '71-100' ? 'selected' : '' }}>71 - 100</option>
                                <option value="100 Above" {{ old('staff') == '100 Above' ? 'selected' : '' }}>100 Above
                                </option>
                            </select>
                        </div>
                        <hr class="bg-[#333333] w-full mt-8">
                        <div class="py-6 md:w-[50%]">
                            <label for="">Pleaser provide a link to your LinkedIn Profile.</label>
                            <input type="text" name="link" value="{{ old('link') }}"
                                class="w-full h-12 bg-[#e9eff2] rounded-md px-4 focus:outline-none"
                                placeholder="https://linkedin.com">
                            @error('link')
                                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                            @enderror
                        </div>
                        <p class="text-blue-900 text-lg">OR</p>
                        <div class="py-6 md:w-[50%]">
                            <label for="">Upload your resume or executive bio:</label>
                            <input type="file" name="cv" value="{{ old('cv') }}"
                                class="w-full h-12 bg-[#e9eff2] rounded-md px-4 focus:outline-none">
                            @error('cv')
                                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                            @enderror
                            <label for="">Max. file size: 20 MB.</label>
                        </div>
                        <div class="py-6 md:w-[50%]">
                            <textarea name="comment" id="" placeholder="comments"
                                class="w-full bg-[#e9eff2] rounded-md px-4 focus:outline-none" rows="6"></textarea>
                            @error('comment')
                                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                            @enderror
                        </div>
                        <p class="text-blue-900 text-lg">*Indicates Response Required</p>
                    </div>

                    <div class="flex justify-center text-xl mt-10 pb-10">
                        <button type="submit"
                            class="inline-flex items-center justify-center w-72 h-14 bg-red-600 text-white hover:bg-blue-900 font-semibold uppercase cursor-pointer">
                            Become a member
                        </button>
                    </div>
                </form>
            </div>
            <div>
                @component('components.footer')

                @endcomponent
            </div>
    </div>

@endsection