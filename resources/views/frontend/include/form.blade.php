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
                    Business email <span class="text-orange-500">*</span>
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
                    Mobile phone <span class="text-orange-500">*</span>
                </label>
                <input type="tel" name="phone" value="{{ old('phone') }}"
                    class="w-full h-12 bg-[#e9eff2] rounded-md px-4 focus:outline-none">
                @error('phone')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <!-- Postal Code -->
            <div>
                <label class="block text-sm font-medium mb-2">
                    Postal Code <span class="text-orange-500">*</span>
                </label>
                <input type="text" name="postal_code" value="{{ old('postal_code') }}"
                    class="w-full h-12 bg-[#e9eff2] rounded-md px-4 focus:outline-none">
                @error('postal_code')
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
                    Company <span class="text-orange-500">*</span>
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

            <!-- Revenue -->
            <div class="space-y-8">
                <label class="flex items-center text-sm font-medium mb-2 gap-1">
                    Recent annual sales revenue <span class="text-orange-500">*</span>
                    <span
                        class="w-4 h-4 flex items-center justify-center text-xs text-white bg-gray-600 rounded-full cursor-pointer">?</span>
                </label>
                <select name="revenue"
                    class="w-full h-12 bg-[#e9eff2] text-gray-600 rounded-md px-4 focus:outline-none font-semibold">
                    <option value="">Please select</option>
                    <option value="Less than 500k" {{ old('revenue') == 'Less than 500k' ? 'selected' : '' }}>
                        Less than 500k</option>
                    <option value="500 - 999k" {{ old('role') == '500k' ? 'selected' : '' }}>500 - 999k
                    </option>
                    <option value="1-4 Million" {{ old('role') == '1-4 Million' ? 'selected' : '' }}>1-4
                        Million</option>
                    <option value="5-9 Million" {{ old('role') == '5-9 Million' ? 'selected' : '' }}>5-9
                        Million</option>
                    <option value="10-20 Million" {{ old('role') == '10-20 Million' ? 'selected' : '' }}>
                        10-20
                        Million</option>
                    <option value="21-49 Million" {{ old('role') == '21-49 Million' ? 'selected' : '' }}>
                        21-49
                        Million</option>
                    <option value="50-99 Million" {{ old('role') == '50-99 Million' ? 'selected' : '' }}>
                        50-99
                        Million</option>
                    <option value="100-249 Million" {{ old('role') == '100-249 Million' ? 'selected' : '' }}>
                        100-249 Million</option>
                    <option value="250-499 Million" {{ old('role') == '250-499 Million' ? 'selected' : '' }}>
                        250-499 Million</option>
                    <option value="500-999 Million" {{ old('role') == '500-999 Million' ? 'selected' : '' }}>
                        500-999 Million</option>
                </select>
                @error('revenue')
                    <p class="text-red-500 text-sm">{{ $message }}</p>
                @enderror
                {{--Question --}}
                <hr class="mb-6 border-gray-300">
                <select name="source" id="sourceSelect"
                    class="w-full h-12 bg-[#e9eff2] text-gray-600 rounded-md px-4 focus:outline-none font-semibold">
                    <option value="">How did you hear about Growth Master?</option>
                    <option value="member">I was referred by another Growth Master Member</option>
                    <option value="chair">I was referred by a Growth Master Chair</option>
                    <option value="speaker">I was referred by a Growth Master Speaker</option>
                    <option>I found Growth Master on Google</option>
                    <option>I saw an ad on social media</option>
                    <option>Other</option>
                </select>
                {{-- name of person referred --}}
                <div id="referFields" class="mt-4 space-y-4 hidden">
                    <div>
                        <input name="name_refer" type="text" value="{{ old('name_refer') }}"
                            placeholder="Name of the person who referred you"
                            class="w-full h-12 bg-[#e9eff2] rounded-md px-4 focus:outline-none">

                        @error('name_refer')
                            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <div>
                        <input name="email_refer" type="email" value="{{ old('email_refer') }}"
                            placeholder="Email of person who referred you"
                            class="w-full h-12 bg-[#e9eff2] rounded-md px-4 focus:outline-none">

                        @error('email_refer')
                            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                </div>

                @error('revenue')
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
            class="inline-flex items-center justify-center w-72 h-14 bg-[#edc01c] font-semibold uppercase cursor-pointer">
            Become a member
        </button>
    </div>
</form>