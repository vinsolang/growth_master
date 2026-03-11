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
                @if(!empty($getBanner) && $getBanner[25]->title === 'Become a Sponsor')
                    <img src="{{ asset('assets/banner/' . $getBanner[25]->image) }}" class="w-full h-full object-cover"
                        alt="Hero Image">
                @endif

                <!-- Overlay Content -->
                <div
                    class="absolute inset-0 flex flex-col justify-center items-start px-6 md:px-16 lg:px-24 text-white md:bg-none bg-black/50">

                    <h1
                        class="text-[22px] text-start md:text-[35px] lg:text-[45px] font-semibold max-w-[940px] leading-tight">
                        @if(!empty($getBanner) && $getBanner[25]->title === 'Become a Sponsor')
                            {{ $getBanner[25]->name }}
                        @endif
                    </h1>

                    <p
                        class="text-[16px] text-start md:text-[18px] mt-5 lg:text-[25px] font-medium max-w-[940px] leading-tight">
                        @if(!empty($getBanner) && $getBanner[25]->title === 'Become a Sponsor')
                            {!! nl2br(e(value: $getBanner[25]->content)) !!}
                        @endif
                    </p>
                </div>
            </div>

            <div class="flex flex-col justify-center items-center mt-10 gap-2 py-4">
                <p
                    class="text-start text-blue-900 mx-[40px] xl:mx-[250px] md:mx-[100px] font-regular text-[14px] md:text-[18px]">
                   {!! $getTextSopnser[0]->desc_1 !!}
            </div>

            <div class="w-full h-auto text-blue-900">
                <h1 class="text-center text-[20px] md:text-[35px] mt-10 pb-6">{{ $getTextSopnser[0]->title_1 }}</h1>
                <div class="max-w-4xl mx-auto grid grid-cols-1 md:grid-cols-2 gap-8 text-lg">
                </div>
            </div>

            <section class="bg-gray-200 py-20">
                <div class="max-w-7xl mx-auto px-6">

                    <div class="grid lg:grid-cols-2 gap-16 items-center">

                        <!-- Left Image -->
                        <div>
                            <img src="{{ asset($getTextSopnser[0]->img) }}"
                                class="w-full h-[650px] object-cover">
                        </div>

                        <!-- Right Content -->
                        <div class="grid md:grid-cols-2 gap-x-12 gap-y-14">

                            <!-- Item 1 -->
                            <div>
                                <div class="w-14 h-14 bg-[#0c4a63] rounded-full flex items-center justify-center mb-4">
                                    <!-- SVG -->
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="white" viewBox="0 0 24 24" class="w-8 h-8">
                                    <path d="M21 7l-5-4-4 4-4-4-5 4v10l5 4 4-4 4 4 5-4V7zm-9 5l-2-2 1-1 1 1 3-3 1 1-4 4z"/>
                                    </svg>
                                </div>

                                <p class="text-gray-700 leading-relaxed">
                                    {!! $getTextSopnser[0]->d_1 !!}
                                </p>
                            </div>

                            <!-- Item 2 -->
                            <div>
                                <div class="w-14 h-14 bg-[#0c4a63] rounded-full flex items-center justify-center mb-4">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="white" viewBox="0 0 24 24" class="w-8 h-8">
                                    <path d="M12 2C8 2 5 3.8 5 6s3 4 7 4 7-1.8 7-4-3-4-7-4zm0 6c-4 0-7-1.8-7-4v4c0 2.2 3 4 7 4s7-1.8 7-4V4c0 2.2-3 4-7 4zm0 4c-4 0-7-1.8-7-4v4c0 2.2 3 4 7 4s7-1.8 7-4v-4c0 2.2-3 4-7 4z"/>
                                    </svg>
                                </div>

                                <p class="text-gray-700 leading-relaxed">
                                    {!! $getTextSopnser[0]->d_2 !!}
                                </p>
                            </div>

                            <!-- Item 3 -->
                            <div>
                                <div class="w-14 h-14 bg-[#0c4a63] rounded-full flex items-center justify-center mb-4">
                                   <svg xmlns="http://www.w3.org/2000/svg" fill="white" viewBox="0 0 24 24" class="w-8 h-8">
                                    <path d="M12 12c2.2 0 4-1.8 4-4s-1.8-4-4-4-4 1.8-4 4 1.8 4 4 4zm-7 8v-1c0-2.7 5.3-4 7-4s7 1.3 7 4v1H5z"/>
                                    </svg>
                                </div>

                                <p class="text-gray-700 leading-relaxed">
                                     {!! $getTextSopnser[0]->d_3 !!}
                                </p>
                            </div>

                            <!-- Item 4 -->
                            <div>
                                <div class="w-14 h-14 bg-[#0c4a63] rounded-full flex items-center justify-center mb-4">
                                   <svg xmlns="http://www.w3.org/2000/svg" fill="white" viewBox="0 0 24 24" class="w-8 h-8">
                                    <path d="M16 11c1.7 0 3-1.3 3-3s-1.3-3-3-3-3 1.3-3 3 1.3 3 3 3zM8 11c1.7 0 3-1.3 3-3S9.7 5 8 5 5 6.3 5 8s1.3 3 3 3zm0 2c-2.7 0-8 1.3-8 4v2h10v-2c0-1.5.8-2.8 2-3.6C10.8 13.1 9.4 13 8 13zm8 0c-.3 0-.7 0-1 .1 1.2.8 2 2.1 2 3.6v2h7v-2c0-2.7-5.3-4-8-4z"/>
                                    </svg>
                                </div>

                                <p class="text-gray-700 leading-relaxed">
                                     {!! $getTextSopnser[0]->d_4 !!}
                                </p>
                            </div>

                        </div>

                    </div>

                </div>
            </section>

            <div class="py-6 text-blue-900">
                <form action="{{ route('memberships.store') }}" method="post">
                    @csrf
                    <div class="max-w-7xl mx-auto p-6">
                        <!-- ================= Contact Information ================= -->
                        <h2 class="text-xl font-semibold mb-2">
                            {!! nl2br($getTextSopnser[0]->title_form) !!}
                        </h2>
                        <hr class="mb-6 w-1/2 border-gray-300">

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-x-10 gap-y-6">

                            <!-- First Name -->
                            <div>
                                <label class="block text-sm font-medium mb-2">
                                    First name <span class="text-orange-500">*</span>
                                </label>
                                <input name="firstname" type="text" value="{{ old('firstname') }}"
                                    class="w-full h-12 bg-[#e9eff2] rounded-md px-4 focus:outline-none">
                                @error('firstname')
                                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                                @enderror
                            </div>

                            <!-- Last Name -->
                            <div>
                                <label class="block text-sm font-medium mb-2">
                                    Last name <span class="text-orange-500">*</span>
                                </label>
                                <input type="text" name="lastname" value="{{ old('lastname') }}"
                                    class="w-full h-12 bg-[#e9eff2] rounded-md px-4 focus:outline-none">
                                @error('lastname')
                                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                                @enderror
                            </div>

                            <!-- Business Email -->
                            <div>
                                <label class="block text-sm font-medium mb-2">
                                    Email Address<span class="text-orange-500">*</span>
                                </label>
                                <input type="email" name="email" value="{{ old('email') }}"
                                    class="w-full h-12 bg-[#e9eff2] rounded-md px-4 focus:outline-none">
                                @error('email')
                                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                                @enderror
                            </div>

                            <!-- Mobile Phone -->
                            <div>
                                <label class="block text-sm font-medium mb-2">
                                    Phone Number<span class="text-orange-500">*</span>
                                </label>
                                <input type="tel" name="phone" value="{{ old('phone') }}"
                                    class="w-full h-12 bg-[#e9eff2] rounded-md px-4 focus:outline-none">
                                @error('phone')
                                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                                @enderror
                            </div>

                        </div>

                        <!-- ================= Company Information ================= -->
                        <h2 class="text-xl font-semibold mt-12 mb-2">Company Information</h2>
                        <hr class="mb-6 w-1/2 border-gray-300">

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-x-10 gap-y-6">

                            <!-- Company -->
                            <div>
                                <label class="block text-sm font-medium mb-2">
                                    Company Name<span class="text-orange-500">*</span>
                                </label>
                                <input type="text" name="company" value="{{ old('company') }}"
                                    class="w-full h-12 bg-[#e9eff2] rounded-md px-4 focus:outline-none">
                                @error('company')
                                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                                @enderror
                            </div>

                            <!-- Professional Role -->
                            <div>
                                <label class="flex items-center text-sm font-medium mb-2 gap-1">
                                    Professional Role <span class="text-orange-500">*</span>
                                    <span
                                        class="w-4 h-4 flex items-center justify-center text-xs text-white bg-gray-600 rounded-full cursor-pointer">?</span>
                                </label>
                                <select name="role"
                                    class="w-full h-12 bg-[#e9eff2] text-gray-600 rounded-md px-4 focus:outline-none font-semibold">
                                    <option value="">Please select</option>
                                    <option value="Founder/Owner" {{ old('role') == 'Founder/Owner' ? 'selected' : '' }}>
                                        Founder/Owner</option>
                                    <option value="Chief Executive/President/GM" {{ old('role') == 'Chief Executive/President/GM' ? 'selected' : '' }}>Chief Executive/President/GM
                                    </option>
                                    <option value="C-level (non-CEO), Executive VP" {{ old('role') == 'C-level (non-CEO), Executive VP' ? 'selected' : '' }}>C-level (non-CEO), Executive VP</option>
                                    <option value="Vice President/Division Head" {{ old('role') == 'Vice President/Division Head' ? 'selected' : '' }}>Vice President/Division Head
                                    </option>
                                    <option value="Director" {{ old('role') == 'Director' ? 'selected' : '' }}>Director
                                    </option>
                                    <option value="Manager" {{ old('role') == 'Manager' ? 'selected' : '' }}>Manager
                                    </option>
                                    <option value="Consultant/Business Development/Sales" {{ old('role') == 'Consultant/Business Development/Sales' ? 'selected' : '' }}>
                                        Consultant/Business Development/Sales</option>
                                    <option value="Other (non-managerial)" {{ old('role') == 'Other (non-managerial)' ? 'selected' : '' }}>Other (non-managerial)</option>
                                </select>
                                @error('role')
                                    <p class="text-red-500 text-sm">{{ $message }}</p>
                                @enderror
                            </div>

                            <!-- staff -->
                            <div class="space-y-8">
                                <label class="flex items-center text-sm font-medium mb-2 gap-1">
                                    How many staffs do you have?  <span class="text-orange-500">*</span>
                                    <span
                                        class="w-4 h-4 flex items-center justify-center text-xs text-white bg-gray-600 rounded-full cursor-pointer">?</span>
                                </label>
                                <select name="staff"
                                    class="w-full h-12 bg-[#e9eff2] text-gray-600 rounded-md px-4 focus:outline-none font-semibold">
                                    
                                    <option value="">Please select</option>

                                    <option value="1-5" {{ old('staff') == '1-5' ? 'selected' : '' }}>1 - 5</option>
                                    <option value="6-10" {{ old('staff') == '6-10' ? 'selected' : '' }}>6 - 10</option>
                                    <option value="11-20" {{ old('staff') == '11-20' ? 'selected' : '' }}>11 - 20</option>
                                    <option value="21-40" {{ old('staff') == '21-40' ? 'selected' : '' }}>21 - 40</option>
                                    <option value="41-70" {{ old('staff') == '41-70' ? 'selected' : '' }}>41 - 70</option>
                                    <option value="71-100" {{ old('staff') == '71-100' ? 'selected' : '' }}>71 - 100</option>
                                    <option value="100 Above" {{ old('staff') == '100 Above' ? 'selected' : '' }}>100 Above</option>
                                </select>
                                @error('staff')
                                    <p class="text-red-500 text-sm">{{ $message }}</p>
                                @enderror
                                {{--Question --}}
                                <hr class="mb-6 border-gray-300">
                                <select name="source" id="sourceSelect"
                                    class="w-full h-12 bg-[#e9eff2] text-gray-600 rounded-md px-4 focus:outline-none font-semibold">

                                    <option value="">How do you learn about Growth Master?</option>

                                    <option value="Recommend by Friends" {{ old('source') == 'Recommend by Friends' ? 'selected' : '' }}>
                                        Recommend by Friends
                                    </option>

                                    <option value="Social Media" {{ old('source') == 'Social Media' ? 'selected' : '' }}>
                                        Social Media
                                    </option>

                                    <option value="Joined Events" {{ old('source') == 'Joined Events' ? 'selected' : '' }}>
                                        Joined Events
                                    </option>
                                </select>
                                @error('source')
                                    <p class="text-red-500 text-sm">{{ $message }}</p>
                                @enderror
                                <hr class="mb-6 border-gray-300">
                                <p class="text-gray-600 rounded-md px-4 font-semibold">
                                    * Indicates Response Required <br />
                                    Message and data rates may apply.
                                </p>
                            </div>

                        </div>

                    </div>
                    {{-- Button Become a Member --}}
                    {{-- <div class="flex justify-center text-xl">
                        <a href="#"
                            class="inline-flex items-center justify-center w-72 h-14 bg-[#edc01c] font-semibold tracking-wider uppercase">
                            Become a member
                        </a>
                    </div> --}}
                    <div class="flex justify-center text-xl pt-10">
                        <button type="submit"
                            class="inline-flex items-center justify-center w-72 h-14 bg-red-600 hover:bg-blue-900 text-[#ffffff] font-semibold uppercase cursor-pointer">
                            Become a member 
                        </button>
                    </div>
                </form>

            </div>

            <section class="py-12">
                <h1 class="text-center text-blue-900 text-[20px] md:text-[35px] mt-10 pb-6">{{ $getTextSopnser[0]->title_logo }}</h1>
                 <div class="flex flex-wrap justify-center items-center space-x-6 md:px-0 px-4">

                    @foreach ($getTextSopnser as $items)

                        @if($items->logo_img)
                            @foreach ($items->logo_img as $logo)
                                <div class="w-40 h-32 md:w-48 md:h-48">
                                    <img src="{{ asset($logo) }}" alt="logo" class="w-full h-full object-cover">
                                </div>
                            @endforeach
                        @endif

                    @endforeach

                </div>
            </section>

            <div>
                @component('components.footer')

                @endcomponent
            </div>
    </div>

@endsection