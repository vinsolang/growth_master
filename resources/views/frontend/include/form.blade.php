<form action="{{ route('memberships.store') }}" method="post">
    @csrf
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
    <div class="flex justify-center text-xl mt-10">
        <button type="submit"
            class="inline-flex items-center justify-center w-72 h-14 bg-[#68875d] text-[#ffffff] font-semibold uppercase cursor-pointer">
            Become a member
        </button>
    </div>
</form>



<!-- Postal Code -->
{{-- <div class="hidden">
    <label class="block text-sm font-medium mb-2">
        Postal Code <span class="text-orange-500">*</span>
    </label>
    <input type="text" name="postal_code" value="{{ old('postal_code') }}"
        class="w-full h-12 bg-[#e9eff2] rounded-md px-4 focus:outline-none">
    @error('postal_code')
        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
    @enderror
</div> --}}