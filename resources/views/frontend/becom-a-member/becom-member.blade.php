<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Vistage</title>
    @vite('resources/css/app.css')
</head>

<body>
    {{-- Start --}}
    <div class="bg-[#0b2642] md:h-[120vh] flex justify-center text-white py-4">
        <div class="w-full max-w-4xl text-center px-6 space-y-6">

            <!-- Logo -->
            <div class="w-40 h-40">
                <img src="{{ asset('assets/logo.png') }}" alt="" class="rounded-full">
            </div>

            <!-- Progress Bar -->
            <div class="w-full flex justify-center">
                <div class="w-full max-w-2xl h-4 bg-gray-300 rounded-full relative">
                    <div class="h-4 bg-[#ffbf00] rounded-full w-[12%] flex items-center justify-end pr-2">
                        <span class="text-xs text-black font-semibold">12%</span>
                    </div>
                </div>
            </div>

            <!-- Title -->
            <h2 class="text-4xl md:text-5xl font-light leading-tight">
                Are You Ready to Join a Vistage<br class="hidden md:block">
                Group?
            </h2>

            <!-- Description -->
            <p class="text-xl text-gray-300 max-w-3xl mx-auto text-left">
                Vistage is how business owners, founders, CEOs and executives make better
                decisions, become better leaders and achieve greater outcomes through the
                power of guided peer advisory.
            </p>

            <p class="text-xl text-gray-300 max-w-3xl mx-auto text-left">
                Please take 1–2 minutes to answer a few short questions and see if you're
                a good fit for an open US group in your area.
            </p>

            <!-- Button -->
            <div class="pt-4">
                <button class="bg-[#ffbf00] text-black font-bold px-16 py-4 rounded-sm
                            hover:bg-yellow-400 transition cursor-pointer text-xl">
                    Start
                </button>
            </div>

        </div>
    </div>

    {{-- Input Full name Next--}}
    <div class=" bg-[#0b2642] md:h-[120vh] flex justify-center text-white py-4">
        <div class="w-full max-w-4xl text-center px-6 space-y-6">

            <!-- Logo -->
            <div class="w-40 h-40">
                <img src="{{ asset('assets/logo.png') }}" alt="" class="rounded-full">
            </div>

            <!-- Progress Bar -->
            <div class="w-full flex mt-20">
                <div class="w-full max-w-2xl h-4 bg-gray-300 rounded-full relative">
                    <div class="h-4 bg-[#ffbf00] rounded-full w-[25%] flex items-center justify-end pr-2">
                        <span class="text-xs text-black font-semibold">25%</span>
                    </div>
                </div>
            </div>

            <!-- Title -->
            <h2 class="text-2xl md:text-3xl text-left font-light leading-tight">
                What should we call you?
            </h2>
            {{-- input First Name and Last Name --}}
            <div class="w-full flex flex-col space-y-4">
                <input type="text" name="first_name" id="first_name" placeholder="First name*"
                    class="border border-[#c8bfbf] w-full max-w-2xl h-12 rounded-md placeholder:font-bold placeholder:text-xl placeholder:text-white placeholder:px-4">
                <input type="text" name="last_name" id="last_name" placeholder="Last name*"
                    class="border border-[#c8bfbf] w-full max-w-2xl h-12 rounded-md placeholder:font-bold placeholder:text-xl placeholder:text-white placeholder:px-4">
            </div>
            <!-- Button -->
            <div class="flex justify-start space-x-6">
                <button class="text-[#c8bfbf] font-bold py-4 rounded-sm cursor-pointer text-xl">
                    Previous
                </button>
                <button class="bg-[#ffbf00] text-black font-bold py-2 w-45 rounded-sm
                            hover:bg-yellow-400 transition cursor-pointer text-xl">
                    Next
                </button>
            </div>

        </div>
    </div>

    {{-- Input Full Email Address Next--}}
    <div class=" bg-[#0b2642] md:h-[120vh] flex justify-center text-white py-4">
        <div class="w-full max-w-4xl text-center px-6 space-y-6">

            <!-- Logo -->
            <div class="w-40 h-40">
                <img src="{{ asset('assets/logo.png') }}" alt="" class="rounded-full">
            </div>

            <!-- Progress Bar -->
            <div class="w-full flex mt-20">
                <div class="w-full max-w-2xl h-4 bg-gray-300 rounded-full relative">
                    <div class="h-4 bg-[#ffbf00] rounded-full w-[37%] flex items-center justify-end pr-2">
                        <span class="text-xs text-black font-semibold">37%</span>
                    </div>
                </div>
            </div>

            <!-- Title -->
            <h2 class="text-2xl max-w-2xl md:text-3xl text-left font-light leading-tight">
                What is your email?
            </h2>
            <h2 class="text-2xl max-w-2xl md:text-3xl text-left font-light leading-tight">
                Your business email works best. We’ll use this for all communication about your Vistage membership.
            </h2>
            {{-- input First Name and Last Name --}}
            <div class="w-full flex flex-col space-y-4">
                <input type="email" name="business_email" id="business_email" placeholder="Business Email*"
                    class="border border-[#c8bfbf] w-full max-w-2xl h-12 rounded-md placeholder:font-bold placeholder:text-xl placeholder:text-white placeholder:px-4">
            </div>
            <!-- Button -->
            <div class="flex justify-start space-x-6">
                <button class="text-[#c8bfbf] font-bold py-4 rounded-sm cursor-pointer text-xl">
                    Previous
                </button>
                <button class="bg-[#ffbf00] text-black font-bold py-2 w-45 rounded-sm
                            hover:bg-yellow-400 transition cursor-pointer text-xl">
                    Next
                </button>
            </div>

        </div>
    </div>

    {{-- Your business email works best --}}
    <div class=" bg-[#0b2642] md:h-[120vh] flex justify-center text-white py-4">
        <div class="w-full max-w-4xl text-center px-6 space-y-6">

            <!-- Logo -->
            <div class="w-40 h-40">
                <img src="{{ asset('assets/logo.png') }}" alt="" class="rounded-full">
            </div>

            <!-- Progress Bar -->
            <div class="w-full flex mt-20">
                <div class="w-full max-w-2xl h-4 bg-gray-300 rounded-full relative">
                    <div class="h-4 bg-[#ffbf00] rounded-full w-[50%] flex items-center justify-end pr-2">
                        <span class="text-xs text-black font-semibold">50%</span>
                    </div>
                </div>
            </div>

            <!-- Title -->
            <h2 class="text-2xl max-w-2xl md:text-3xl text-left font-light leading-tight">
                What is your current company name and professional role there?
            </h2>
            {{-- input First Name and Last Name --}}
            <div class="w-full flex flex-col space-y-4">
                <input type="text" name="company" id="company" placeholder="Company*"
                    class="border border-[#c8bfbf] w-full max-w-2xl h-12 rounded-md placeholder:font-bold placeholder:text-xl placeholder:text-white placeholder:px-4">
                <!-- Container to better control width/layout -->
                <div class="w-full max-w-2xl">
                    <select id="input_185_9" name="profesional_role" class="
                        appearance-none
                        w-full h-12
                        rounded-md
                        border border-white
                        pl-3 pr-10
                        cursor-pointer
                        transition
                        focus:outline-none focus:ring-2 focus:ring-blue-500

                        bg-[#0b2642] text-white            /* DEFAULT STATE */
                        px-4
                        text-xl
                        font-bold

                        bg-[url(\" data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='24' height='24'
                        viewBox='0 0 24 24' fill='none' stroke='white' stroke-width='2.5' stroke-linecap='round'
                        stroke-linejoin='round' %3E%3Cpolyline points='6 9 12 15 18 9' %3E%3C/polyline%3E%3C/svg%3E\")]
                        data-[selected=true]:bg-[url(\"data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg'
                        width='24' height='24' viewBox='0 0 24 24' fill='none' stroke='%23496a8c' stroke-width='2.5'
                        stroke-linecap='round' stroke-linejoin='round' %3E%3Cpolyline points='6 9 12 15 18 9'
                        %3E%3C/polyline%3E%3C/svg%3E\")] bg-no-repeat bg-[length:1.5em] bg-[right_0.5rem_center] "
                    >
                        <option value="" selected disabled>Professional Role*</option>
                        <option>Founder / Owner</option>
                        <option>Chief Executive / President / GM</option>
                        <option>C-level (non-CEO), Executive VP</option>
                        <option>Vice President / Division Head</option>
                        <option>Director</option>
                        <option>Manager</option>
                        <option>Consultant / Business Development / Sales</option>
                        <option>Other (non-managerial)</option>
                    </select>
                </div>


            </div>
            <!-- Button -->
            <div class=" flex justify-start space-x-6">
                        <button class="text-[#c8bfbf] font-bold py-4 rounded-sm cursor-pointer text-xl">
                            Previous
                        </button>
                        <button class="bg-[#ffbf00] text-black font-bold py-2 w-45 rounded-sm
                            hover:bg-yellow-400 transition cursor-pointer text-xl">
                            Next
                        </button>
                </div>

            </div>
        </div>

    {{-- Please select the option that best describes--}}
    <div class=" bg-[#0b2642] md:h-[120vh] flex justify-center text-white py-4">
        <div class="w-full max-w-4xl text-center px-6 space-y-6">

            <!-- Logo -->
            <div class="w-40 h-40">
                <img src="{{ asset('assets/logo.png') }}" alt="" class="rounded-full">
            </div>

            <!-- Progress Bar -->
            <div class="w-full flex mt-20">
                <div class="w-full max-w-2xl h-4 bg-gray-300 rounded-full relative">
                    <div class="h-4 bg-[#ffbf00] rounded-full w-[62%] flex items-center justify-end pr-2">
                        <span class="text-xs text-black font-semibold">62%</span>
                    </div>
                </div>
            </div>

            <!-- Title -->
            <h2 class="text-2xl max-w-2xl md:text-3xl text-left font-light leading-tight">
                Please select the option that best describes your company’s most recent annual sales revenue.
                Choosing the correct revenue will help us determine the best group to place you in.
            </h2>
            {{-- input First Name and Last Name --}}
            <div class="w-full flex flex-col space-y-4">
                <!-- Container to better control width/layout -->
                <div class="w-full max-w-2xl">
                    <select id="input_185_9" name="profesional_role" class="
                    appearance-none
                    w-full h-12
                    rounded-md
                    border border-white
                    pl-3 pr-10
                    cursor-pointer
                    transition
                    focus:outline-none focus:ring-2 focus:ring-blue-500

                    bg-[#0b2642] text-white            /* DEFAULT STATE */
                    px-4
                    text-xl
                    font-medium

                    bg-[url(\" data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='24' height='24'
                        viewBox='0 0 24 24' fill='none' stroke='white' stroke-width='2.5' stroke-linecap='round'
                        stroke-linejoin='round' %3E%3Cpolyline points='6 9 12 15 18 9'
                        %3E%3C/polyline%3E%3C/svg%3E\")] data-[selected=true]:bg-[url(\"data:image/svg+xml,%3Csvg
                        xmlns='http://www.w3.org/2000/svg' width='24' height='24' viewBox='0 0 24 24' fill='none'
                        stroke='%23496a8c' stroke-width='2.5' stroke-linecap='round' stroke-linejoin='round'
                        %3E%3Cpolyline points='6 9 12 15 18 9' %3E%3C/polyline%3E%3C/svg%3E\")] bg-no-repeat
                        bg-[length:1.5em] bg-[right_0.5rem_center] "
                >
                    <option value="" selected disabled>Recent annual sales revenue*</option>
                    <option>Less then 500k</option>
                    <option>500-999k</option>
                    <option>1-4 Million</option>
                    <option>5-9 Million</option>
                    <option>10-20 Million</option>
                    <option>21-49 Million</option>
                    <option>50-99 Million</option>
                    <option>100-249 Million</option>
                    <option>250-499 Million</option>
                    <option>500-999 Million</option>
                    <option>1+ Billion</option>
                </select>
            </div>


            </div>
        <!-- Button -->
        <div class=" flex justify-start space-x-6">
                        <button class="text-[#c8bfbf] font-bold py-4 rounded-sm cursor-pointer text-xl">
                            Previous
                        </button>
                        <button class="bg-[#ffbf00] text-black font-bold py-2 w-45 rounded-sm
                        hover:bg-yellow-400 transition cursor-pointer text-xl">
                            Next
                        </button>
                </div>

            </div>
        </div>
        
    {{-- What is your zip code? --}}
    <div class=" bg-[#0b2642] md:h-[120vh] flex justify-center text-white py-4">
        <div class="w-full max-w-4xl text-center px-6 space-y-6">

            <!-- Logo -->
            <div class="w-40 h-40">
                <img src="{{ asset('assets/logo.png') }}" alt="" class="rounded-full">
            </div>

            <!-- Progress Bar -->
            <div class="w-full flex mt-20">
                <div class="w-full max-w-2xl h-4 bg-gray-300 rounded-full relative">
                    <div class="h-4 bg-[#ffbf00] rounded-full w-[75%] flex items-center justify-end pr-2">
                        <span class="text-xs text-black font-semibold">75%</span>
                    </div>
                </div>
            </div>

            <!-- Title -->
            <h2 class="text-2xl max-w-2xl md:text-3xl text-left font-light leading-tight">
                What is your zip code?
            </h2>

            <h2 class="text-2xl max-w-2xl md:text-3xl text-left font-light leading-tight">
                We use your location to determine if you’re a match for the closest Vistage groups to you. Your
                Vistage Group will meet once a month in your local area in the US.
            </h2>
            {{-- input First Name and Last Name --}}
            <div class="w-full flex flex-col space-y-4">
                <input type="text" name="company" id="company" inputmode="numeric" placeholder="Postal Code*"
                    maxlength="5" class="border border-[#c8bfbf] w-full max-w-2xl h-12
                    text-xl font-medium px-4 rounded-md
                    placeholder:font-medium focus:outline-none">
            </div>
            <!-- Button -->
            <div class=" flex justify-start space-x-6">
                <button class="text-[#c8bfbf] font-bold py-4 rounded-sm cursor-pointer text-xl">
                    Previous
                </button>
                <button class="bg-[#ffbf00] text-black font-bold py-2 w-45 rounded-sm
                    hover:bg-yellow-400 transition cursor-pointer text-xl">
                    Next
                </button>
            </div>

        </div>
    </div>

    {{-- Were you referred by someone in the Vistage Community? --}}
    <div class=" bg-[#0b2642] md:h-[120vh] flex justify-center text-white py-4">
        <div class="w-full max-w-4xl text-center px-6 space-y-6">

            <!-- Logo -->
            <div class="w-40 h-40">
                <img src="{{ asset('assets/logo.png') }}" alt="" class="rounded-full">
            </div>

            <!-- Progress Bar -->
            <div class="w-full flex mt-20">
                <div class="w-full max-w-2xl h-4 bg-gray-300 rounded-full relative">
                    <div class="h-4 bg-[#ffbf00] rounded-full w-[87%] flex items-center justify-end pr-2">
                        <span class="text-xs text-black font-semibold">87%</span>
                    </div>
                </div>
            </div>

            <!-- Title -->
            <h2 class="text-2xl max-w-2xl md:text-3xl text-left font-light leading-tight">
                Were you referred by someone in the Growth Master Community?
            </h2>
            {{-- Radio --}}
            <div class="flex flex-col items-start space-y-3 text-xl max-w-2xl">
                <label class="flex items-center space-x-2 cursor-pointer">
                    <input type="radio" name="referred" value="yes" class="accent-yellow-400">
                    <span>Yes</span>
                </label>

                <label class="flex items-center space-x-2 cursor-pointer">
                    <input type="radio" name="referred" value="no" class="accent-yellow-400">
                    <span>No</span>
                </label>
            </div>


            {{-- input First Name and Last Name --}}
            <div class="w-full flex flex-col space-y-4">
                <!-- Container to better control width/layout -->
                <div class="w-full max-w-2xl">
                    <div id="referralSelectWrapper" class="hidden w-full max-w-2xl mt-6">
                        <select
                            id="referralSelect"
                            class="
                            appearance-none w-full h-12 rounded-md
                            border border-white pl-3 pr-14 cursor-pointer
                            bg-[#0b2642] text-white text-xl font-medium px-4
                            focus:outline-none focus:ring-2 focus:ring-blue-500

                            bg-[url(\"data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='24' height='24' viewBox='0 0 24 24' fill='none' stroke='white' stroke-width='2.5' stroke-linecap='round' stroke-linejoin='round'%3E%3Cpolyline points='6 9 12 15 18 9'%3E%3C/polyline%3E%3C/svg%3E\")]
                            bg-no-repeat bg-[length:1.25em] bg-[right_3rem_center]
                            "
                        >
                            <option value="" selected disabled>Who referred you?</option>
                            <option value="member">Growth Master member</option>
                            <option value="chair">Growth Master Chair</option>
                            <option value="speaker">Growth Master Speaker</option>
                        </select>

                        <!-- Right button -->
                        <button
                            type="button"
                            class="absolute inset-y-0 right-0 w-12 flex items-center justify-center
                                border-l border-white text-white hover:bg-white/10 transition"
                            aria-label="Open select"
                            onclick="document.getElementById('referralSelect').focus()"
                        >
                            ▼
                        </button>
                    </div>


                <div id="referralInputs" class="hidden py-4 space-y-4 text-xl max-w-2xl">
                    <input
                        type="text"
                        placeholder="Name of the person who referred you"
                        class="border border-[#c8bfbf] w-full h-12 rounded-md
                            placeholder:font-medium placeholder:text-white px-4 bg-transparent text-white"
                    >
                    <input
                        type="email"
                        placeholder="Email of person who referred you"
                        class="border border-[#c8bfbf] w-full h-12 rounded-md
                            placeholder:font-medium placeholder:text-white px-4 bg-transparent text-white"
                    >
                </div>
            </div>


            </div>
            <!-- Button -->
            <div class=" flex justify-start space-x-6">
                <button class="text-[#c8bfbf] font-bold py-4 rounded-sm cursor-pointer text-xl">
                    Previous
                </button>
                <button class="bg-[#ffbf00] text-black font-bold py-2 w-45 rounded-sm
                    hover:bg-yellow-400 transition cursor-pointer text-xl">
                    Next
                </button>
            </div>

        </div>
    </div>

    {{-- Contact Information --}}
    <div class=" bg-[#0b2642] md:h-[120vh] flex justify-center text-white py-4">
        <div class="w-full max-w-4xl text-center px-6 space-y-6">

            <!-- Logo -->
            <div class="w-40 h-40">
                <img src="{{ asset('assets/logo.png') }}" alt="" class="rounded-full">
            </div>

            <!-- Progress Bar -->
            <div class="w-full flex mt-20">
                <div class="w-full max-w-2xl h-4 bg-gray-300 rounded-full relative">
                    <div class="h-4 bg-[#ffbf00] rounded-full w-full flex items-center justify-end pr-2">
                        <span class="text-xs text-black font-semibold">100%</span>
                    </div>
                </div>
            </div>

            <!-- Title -->
            <h2 class="text-2xl max-w-2xl md:text-3xl text-left font-light leading-tight">
                What is your contact information?
            </h2>

            <h2 class="text-2xl max-w-2xl md:text-3xl text-left font-light leading-tight">
                If your application is approved, we’ll reach out to schedule your interview and learn more about your goals.
            </h2>
            {{-- input First Name and Last Name --}}
            <div class="w-full flex flex-col space-y-4">
                <input type="text" name="company" id="company" inputmode="numeric" placeholder="Mobile Phone*"
                    class="border border-[#c8bfbf] w-full max-w-2xl h-12
                    text-xl font-medium px-4 rounded-md
                    placeholder:font-medium focus:outline-none">
            </div>
            <!-- Button -->
            <div class=" flex justify-start space-x-6">
                <button class="text-[#c8bfbf] font-bold py-4 rounded-sm cursor-pointer text-xl">
                    Previous
                </button>
                <a href="{{ route('sucess') }}" class="bg-[#ffbf00] text-black font-bold py-2 w-80 rounded-sm
                    hover:bg-yellow-400 transition cursor-pointer text-xl uppercase flex justify-center items-center">
                    become a member
                </a>
            </div>

        </div>
    </div>

</body>
<script>
    document.addEventListener("DOMContentLoaded", () => {
        const select = document.getElementById("input_185_9");

        const updateState = () => {
            select.dataset.selected = select.value !== "";
        };

        updateState();
        select.addEventListener("change", updateState);
    });
</script>

{{-- Condition about choose button radio Yes or No --}}
<script>
document.addEventListener("DOMContentLoaded", () => {
    const radios = document.querySelectorAll('input[name="referred"]');
    const selectWrapper = document.getElementById("referralSelectWrapper");
    const select = document.getElementById("referralSelect");
    const inputs = document.getElementById("referralInputs");

    radios.forEach(radio => {
        radio.addEventListener("change", () => {
            if (radio.value === "yes") {
                selectWrapper.classList.remove("hidden");
            } else {
                selectWrapper.classList.add("hidden");
                inputs.classList.add("hidden");
                select.selectedIndex = 0;
            }
        });
    });

    select.addEventListener("change", () => {
        if (select.value) {
            inputs.classList.remove("hidden");
        } else {
            inputs.classList.add("hidden");
        }
    });
});
</script>

</html>