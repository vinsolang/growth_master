<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Growth Master Membership Application</title>
    @vite('resources/css/app.css')
</head>

<body>
    <form action="{{ route('memberships.store') }}" method="post">
        @csrf

        <div id="step-1" class="step bg-[#0b2642] md:h-[120vh] flex justify-center text-white py-4">
            <div class="w-full max-w-4xl text-center px-6 space-y-6">
                <a href="{{ route('home') }}">
                    <div class="w-40 h-40">
                        <img src="{{ asset('assets/logo.png') }}" alt="" class="rounded-full">
                    </div>
                </a>
                <div class="w-full flex justify-center py-12">
                    <div class="w-full max-w-2xl h-4 bg-gray-300 rounded-full relative">
                        <div class="h-4 bg-[#ffbf00] rounded-full w-[12%] flex items-center justify-end pr-2">
                            <span class="text-xs text-black font-semibold">12%</span>
                        </div>
                    </div>
                </div>
                <h2 class="text-4xl md:text-5xl font-light leading-tight">Are You Ready to Join a Growth Master?</h2>
                <p class="text-xl text-gray-300 max-w-3xl mx-auto text-left">
                    Growth Master is how business owners, founders, CEOs and executives make better decisions,
                    become better leaders and achieve greater outcomes through the power of guided peer advisory.
                </p>
                <p class="text-xl text-gray-300 max-w-3xl mx-auto text-left">
                    Please take 1-2 minutes to answer a few short questions and see if you're a good fit for an
                    open US group in your area.
                </p>
                <div class="pt-4">
                    <button data-next="2" type="button"
                        class="bg-[#ffbf00] text-black font-bold px-16 py-4 rounded-sm hover:bg-yellow-400 transition cursor-pointer text-xl">
                        Start
                    </button>
                </div>
            </div>
        </div>

        <div id="step-2" class="step hidden bg-[#0b2642] md:h-[120vh] justify-center text-white py-4">
            <div class="w-full max-w-4xl text-center px-6 space-y-6">
                <a href="{{ route('home') }}">
                    <div class="w-40 h-40">
                        <img src="{{ asset('assets/logo.png') }}" alt="" class="rounded-full">
                    </div>
                </a>
                <div class="w-full flex mt-20">
                    <div class="w-full max-w-2xl h-4 bg-gray-300 rounded-full relative">
                        <div class="h-4 bg-[#ffbf00] rounded-full w-[25%] flex items-center justify-end pr-2">
                            <span class="text-xs text-black font-semibold">25%</span>
                        </div>
                    </div>
                </div>
                <h2 class="text-2xl md:text-3xl font-semibold text-left">What should we call you?</h2>
                <div class="w-full flex flex-col space-y-4 font-medium placeholder:font-medium">
                    <input name="firstname" type="text" value="{{ old('firstname') }}" placeholder="First name*"
                        class="border border-[#c8bfbf] w-full max-w-2xl h-12 rounded-md bg-transparent px-4 placeholder:font-bold">
                    @error('firstname')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                    <input name="lastname" type="text" value="{{ old('lastname') }}" placeholder="Last name*"
                        class="border border-[#c8bfbf] w-full max-w-2xl h-12 rounded-md bg-transparent px-4 placeholder:font-bold">
                    @error('lastname')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>
                <div class="flex justify-start space-x-6">
                    <button data-prev="1" type="button"
                        class="text-[#c8bfbf] font-bold py-4 cursor-pointer text-xl">Previous</button>
                    <button data-next="3" type="button"
                        class="bg-[#ffbf00] text-black font-bold py-2 w-45 rounded-sm hover:bg-yellow-400 text-xl">Next</button>
                </div>
            </div>
        </div>

        <div id="step-3" class="step hidden bg-[#0b2642] md:h-[120vh] justify-center text-white py-4">
            <div class="w-full max-w-4xl text-center px-6 space-y-6">
                <a href="{{ route('home') }}">
                    <div class="w-40 h-40">
                        <img src="{{ asset('assets/logo.png') }}" alt="" class="rounded-full">
                    </div>
                </a>
                <div class="w-full flex mt-20">
                    <div class="w-full max-w-4xl h-4 bg-gray-300 rounded-full relative">
                        <div class="h-4 bg-[#ffbf00] rounded-full w-[37%] flex items-center justify-end pr-2">
                            <span class="text-xs text-black font-semibold">37%</span>
                        </div>
                    </div>
                </div>
                <h2 class="text-2xl text-left font-bold w-4xl">
                    What is your email? <br /><br />

                    Your business email works best. We’ll use this for all communication about your Vistage membership.
                </h2>
                <div>
                    <input type="email" name="email" placeholder="Business Email*"
                        class="border border-[#c8bfbf] w-full h-12 rounded-md bg-transparent px-4 placeholder:font-bold">
                </div>
                <div class="flex justify-start space-x-6">
                    <button data-prev="2" type="button" class="text-[#c8bfbf] font-bold py-4 text-xl">Previous</button>
                    <button data-next="4" type="button"
                        class="bg-[#ffbf00] text-black font-bold py-2 w-45 rounded-sm text-xl">Next</button>
                </div>
            </div>
        </div>

        <div id="step-4" class="step hidden bg-[#0b2642] md:h-[120vh] justify-center text-white py-4">
            <div class="w-full max-w-4xl text-center px-6 space-y-6">
                <a href="{{ route('home') }}">
                    <div class="w-40 h-40">
                        <img src="{{ asset('assets/logo.png') }}" alt="" class="rounded-full">
                    </div>
                </a>
                <div class="w-full flex mt-20">
                    <div class="w-full max-w-2xl h-4 bg-gray-300 rounded-full relative">
                        <div class="h-4 bg-[#ffbf00] rounded-full w-[50%] flex items-center justify-end pr-2">
                            <span class="text-xs text-black font-semibold">50%</span>
                        </div>
                    </div>
                </div>
                <h2 class="text-2xl text-left font-bold">What is your current company name and professional role?</h2>
                <div class="w-full flex flex-col space-y-4">
                    <input type="text" name="company" placeholder="Company*"
                        class="border border-[#c8bfbf] w-full max-w-2xl h-12 rounded-md bg-transparent px-4 font-bold">
                    <select name="role"
                        class="w-full max-w-2xl h-12 rounded-md border border-white bg-[#0b2642] text-white px-4 font-bold">
                        <option value="" selected disabled>Professional Role*</option>
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
                </div>
                <div class="flex justify-start space-x-6">
                    <button data-prev="3" type="button" class="text-[#c8bfbf] font-bold py-4 text-xl">Previous</button>
                    <button data-next="5" type="button"
                        class="bg-[#ffbf00] text-black font-bold py-2 w-45 rounded-sm text-xl">Next</button>
                </div>
            </div>
        </div>

        <div id="step-5" class="step hidden bg-[#0b2642] md:h-[120vh] justify-center text-white py-4">
            <div class="w-full max-w-4xl text-center px-6 space-y-6">
                <a href="{{ route('home') }}">
                    <div class="w-40 h-40">
                        <img src="{{ asset('assets/logo.png') }}" alt="" class="rounded-full">
                    </div>
                </a>
                <div class="w-full flex mt-20">
                    <div class="w-full max-w-4xl h-4 bg-gray-300 rounded-full relative">
                        <div class="h-4 bg-[#ffbf00] rounded-full w-[62%] flex items-center justify-end pr-2">
                            <span class="text-xs text-black font-semibold">62%</span>
                        </div>
                    </div>
                </div>
                <h2 class="text-2xl text-left font-bold w-4xl">Company’s most recent annual sales revenue?</h2>
                <select name="revenue"
                    class="w-full max-w-full h-12 rounded-md border border-white bg-[#0b2642] text-white px-4 font-bold">
                    <option value="" selected disabled>Recent annual sales revenue*</option>
                    <option value="Less than 500k" {{ old('revenue') == 'Less than 500k' ? 'selected' : '' }}>
                        Less than 500k</option>
                    <option value="500 - 999k" {{ old('revenue') == '500k' ? 'selected' : '' }}>500 - 999k
                    </option>
                    <option value="1-4 Million" {{ old('revenue') == '1-4 Million' ? 'selected' : '' }}>1-4
                        Million</option>
                    <option value="5-9 Million" {{ old('revenue') == '5-9 Million' ? 'selected' : '' }}>5-9
                        Million</option>
                    <option value="10-20 Million" {{ old('revenue') == '10-20 Million' ? 'selected' : '' }}>
                        10-20
                        Million</option>
                    <option value="21-49 Million" {{ old('revenue') == '21-49 Million' ? 'selected' : '' }}>
                        21-49
                        Million</option>
                    <option value="50-99 Million" {{ old('revenue') == '50-99 Million' ? 'selected' : '' }}>
                        50-99
                        Million</option>
                    <option value="100-249 Million" {{ old('revenue') == '100-249 Million' ? 'selected' : '' }}>
                        100-249 Million</option>
                    <option value="250-499 Million" {{ old('revenue') == '250-499 Million' ? 'selected' : '' }}>
                        250-499 Million</option>
                    <option value="500-999 Million" {{ old('revenue') == '500-999 Million' ? 'selected' : '' }}>
                        500-999 Million</option>
                </select>
                <div class="flex justify-start space-x-6">
                    <button data-prev="4" type="button" class="text-[#c8bfbf] font-bold py-4 text-xl">Previous</button>
                    <button data-next="6" type="button"
                        class="bg-[#ffbf00] text-black font-bold py-2 w-45 rounded-sm text-xl">Next</button>
                </div>
            </div>
        </div>

        <div id="step-6" class="step hidden bg-[#0b2642] md:h-[120vh] justify-center text-white py-4">
            <div class="w-full max-w-4xl text-center px-6 space-y-6">
                <a href="{{ route('home') }}">
                    <div class="w-40 h-40">
                        <img src="{{ asset('assets/logo.png') }}" alt="" class="rounded-full">
                    </div>
                </a>
                <div class="w-full flex mt-20">
                    <div class="w-full max-w-4xl h-4 bg-gray-300 rounded-full relative">
                        <div class="h-4 bg-[#ffbf00] rounded-full w-[75%] flex items-center justify-end pr-2">
                            <span class="text-xs text-black font-semibold">75%</span>
                        </div>
                    </div>
                </div>
                <h2 class="text-4xl text-left font-bold">What is your zip code?</h2>
                <input type="text" name="postal_code" placeholder="Postal Code*" maxlength="5"
                    class="border border-[#c8bfbf] w-full max-w-4xl h-12 rounded-md bg-transparent px-4 placeholder:font-bold">
                <div class="flex justify-start space-x-6">
                    <button data-prev="5" type="button" class="text-[#c8bfbf] font-bold py-4 text-xl">Previous</button>
                    <button data-next="7" type="button"
                        class="bg-[#ffbf00] text-black font-bold py-2 w-45 rounded-sm text-xl">Next</button>
                </div>
            </div>
        </div>

        <div id="step-7" class="step hidden bg-[#0b2642] md:h-[120vh] justify-center text-white py-4">
            <div class="w-full max-w-4xl text-center px-6 space-y-6">
                <a href="{{ route('home') }}">
                    <div class="w-40 h-40">
                        <img src="{{ asset('assets/logo.png') }}" alt="" class="rounded-full">
                    </div>
                </a>
                <div class="w-full flex mt-20">
                    <div class="w-full max-w-2xl h-4 bg-gray-300 rounded-full relative">
                        <div class="h-4 bg-[#ffbf00] rounded-full w-[87%] flex items-center justify-end pr-2">
                            <span class="text-xs text-black font-semibold">87%</span>
                        </div>
                    </div>
                </div>
                <h2 class="text-2xl text-left font-bold">Were you referred by someone in the Growth Master Community?
                </h2>
                <div class="flex flex-col items-start space-y-3 text-2xl font-bold">
                    <label class="flex items-center space-x-2"><input type="radio" name="referred" value="yes"
                            id="referYes">
                        <span>Yes</span></label>
                    <label class="flex items-center space-x-2"><input type="radio" name="referred" value="no"
                            id="referNo">
                        <span>No</span></label>
                </div>
                {{-- name of person referred --}}
                <div id="referFields" class="mt-4 space-y-4 hidden">
                    <div>
                        <input name="name_refer" type="text" value="{{ old('name_refer') }}"
                            placeholder="Name of the person who referred you"
                            class="border border-[#c8bfbf] w-full h-12 rounded-md px-4 focus:outline-none placeholder:font-bold">

                        @error('name_refer')
                            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <div>
                        <input name="email_refer" type="email" value="{{ old('email_refer') }}"
                            placeholder="Email of person who referred you"
                            class="border border-[#c8bfbf] w-full h-12 rounded-md px-4 focus:outline-none placeholder:font-bold">

                        @error('email_refer')
                            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
                <div class="flex justify-start space-x-6">
                    <button data-prev="6" type="button" class="text-[#c8bfbf] font-bold py-4 text-xl">Previous</button>
                    <button data-next="8" type="button"
                        class="bg-[#ffbf00] text-black font-bold py-2 w-45 rounded-sm text-xl">Next</button>
                </div>
            </div>
        </div>

        <div id="step-8" class="step hidden bg-[#0b2642] md:h-[120vh] justify-center text-white py-4">
            <div class="w-full max-w-4xl text-center px-6 space-y-6">
                <a href="{{ route('home') }}">
                    <div class="w-40 h-40">
                        <img src="{{ asset('assets/logo.png') }}" alt="" class="rounded-full">
                    </div>
                </a>
                <div class="w-full flex mt-20">
                    <div class="w-full max-w-4xl h-4 bg-gray-300 rounded-full relative">
                        <div class="h-4 bg-[#ffbf00] rounded-full w-full flex items-center justify-end pr-2">
                            <span class="text-xs text-black font-semibold">100%</span>
                        </div>
                    </div>
                </div>
                <h2 class="text-4xl text-left font-bold">What is your contact information?</h2>
                <input type="text" name="phone" placeholder="Mobile Phone*"
                    class="border border-[#c8bfbf] w-full max-w-4xl h-12 rounded-md bg-transparent px-4 placeholder:font-bold">
                <div class="flex justify-start space-x-6">
                    <button data-prev="7" type="button" class="text-[#c8bfbf] font-bold py-4 text-xl">Previous</button>
                    <button type="submit"
                        class="bg-[#ffbf00] text-black font-bold py-2 w-80 rounded-sm hover:bg-yellow-400 text-xl uppercase">
                        Become a Member
                    </button>
                </div>
            </div>
        </div>

    </form>
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

<script>
    document.addEventListener("DOMContentLoaded", () => {
        const steps = document.querySelectorAll(".step");

        function showStep(stepNumber) {
            steps.forEach(step => {
                step.classList.add("hidden");
                step.classList.remove("flex"); // Remove flex when hiding
            });

            const target = document.getElementById(`step-${stepNumber}`);
            if (target) {
                target.classList.remove("hidden");
                target.classList.add("flex"); // Add flex when showing
                target.scrollIntoView({ behavior: "smooth" });
            }
        }

        document.querySelectorAll("[data-next]").forEach(btn => {
            btn.addEventListener("click", () => {
                showStep(btn.dataset.next);
            });
        });

        document.querySelectorAll("[data-prev]").forEach(btn => {
            btn.addEventListener("click", () => {
                showStep(btn.dataset.prev);
            });
        });
    });
</script>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const yesRadio = document.querySelector('input[name="referred"][value="yes"]');
        const noRadio = document.querySelector('input[name="referred"][value="no"]');
        const referFields = document.getElementById('referFields');

        function toggleReferFields() {
            if (yesRadio.checked) {
                referFields.classList.remove('hidden');
            } else {
                referFields.classList.add('hidden');

                // optional: clear values when hidden
                referFields.querySelectorAll('input').forEach(input => {
                    input.value = '';
                });
            }
        }

        yesRadio.addEventListener('change', toggleReferFields);
        noRadio.addEventListener('change', toggleReferFields);

        // Keep state after validation error (Laravel old())
        toggleReferFields();
    });
</script>

{{-- Validition of input form --}}
<script>
document.addEventListener('DOMContentLoaded', () => {

    const steps = document.querySelectorAll('.step');

    function showStep(stepNumber) {
        steps.forEach(step => step.classList.add('hidden'));
        document.getElementById('step-' + stepNumber).classList.remove('hidden');
    }

    document.querySelectorAll('[data-next]').forEach(btn => {
        btn.addEventListener('click', () => {
            const currentStep = btn.closest('.step');
            const stepId = currentStep.id;

            // STEP-SPECIFIC VALIDATION
            if (!validateStep(stepId)) return;

            showStep(btn.dataset.next);
        });
    });

    document.querySelectorAll('[data-prev]').forEach(btn => {
        btn.addEventListener('click', () => {
            showStep(btn.dataset.prev);
        });
    });

    function validateStep(stepId) {

        const stepRules = {

            'step-2': () => {
                const first = document.querySelector('input[name="firstname"]');
                const last  = document.querySelector('input[name="lastname"]');

                if (!first.value.trim() || !last.value.trim()) {
                    alert('Please enter first and last name');
                    return false;
                }
                return true;
            },

            'step-7': () => {
                const yes = document.querySelector('input[name="referred"][value="yes"]');
                if (yes.checked) {
                    const name = document.querySelector('input[name="name_refer"]');
                    const email = document.querySelector('input[name="email_refer"]');

                    if (!name.value.trim() || !email.value.trim()) {
                        alert('Please enter referral name and email');
                        return false;
                    }
                }
                return true;
            }

            // 👉 add step-3, step-4, step-5 rules here if needed
        };

        return stepRules[stepId] ? stepRules[stepId]() : true;
    }

});
</script>

</html>