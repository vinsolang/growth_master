<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Growth Master Membership Application</title>
    @vite('resources/css/app.css')
</head>

<body>
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
            <div class="w-40 h-40"><img src="{{ asset('assets/logo.png') }}" class="rounded-full"></div>
            <div class="w-full flex mt-20">
                <div class="w-full max-w-2xl h-4 bg-gray-300 rounded-full relative">
                    <div class="h-4 bg-[#ffbf00] rounded-full w-[25%] flex items-center justify-end pr-2">
                        <span class="text-xs text-black font-semibold">25%</span>
                    </div>
                </div>
            </div>
            <h2 class="text-2xl md:text-3xl font-semibold text-left">What should we call you?</h2>
            <div class="w-full flex flex-col space-y-4 font-medium placeholder:font-medium">
                <input type="text" name="first_name" placeholder="First name*"
                    class="border border-[#c8bfbf] w-full max-w-2xl h-12 rounded-md bg-transparent px-4">
                <input type="text" name="last_name" placeholder="Last name*"
                    class="border border-[#c8bfbf] w-full max-w-2xl h-12 rounded-md bg-transparent px-4">
            </div>
            <div class="flex justify-start space-x-6">
                <button data-prev="1" type="button" class="text-[#c8bfbf] font-bold py-4 cursor-pointer text-xl">Previous</button>
                <button data-next="3" type="button"
                    class="bg-[#ffbf00] text-black font-bold py-2 w-45 rounded-sm hover:bg-yellow-400 text-xl">Next</button>
            </div>
        </div>
    </div>

    <div id="step-3" class="step hidden bg-[#0b2642] md:h-[120vh] justify-center text-white py-4">
        <div class="w-full max-w-4xl text-center px-6 space-y-6">
            <div class="w-40 h-40"><img src="{{ asset('assets/logo.png') }}" class="rounded-full"></div>
            <div class="w-full flex mt-20">
                <div class="w-full max-w-2xl h-4 bg-gray-300 rounded-full relative">
                    <div class="h-4 bg-[#ffbf00] rounded-full w-[37%] flex items-center justify-end pr-2">
                        <span class="text-xs text-black font-semibold">37%</span>
                    </div>
                </div>
            </div>
            <h2 class="text-2xl text-left font-light leading-tight">What is your email?</h2>
            <div>
                <input type="email" name="business_email" placeholder="Business Email*"
                class="border border-[#c8bfbf] w-full max-w-2xl h-12 rounded-md bg-transparent px-4">
            </div>
            <div class="flex justify-start space-x-6">
                <button data-prev="2" class="text-[#c8bfbf] font-bold py-4 text-xl">Previous</button>
                <button data-next="4"
                    class="bg-[#ffbf00] text-black font-bold py-2 w-45 rounded-sm text-xl">Next</button>
            </div>
        </div>
    </div>

    <div id="step-4" class="step hidden bg-[#0b2642] md:h-[120vh] justify-center text-white py-4">
        <div class="w-full max-w-4xl text-center px-6 space-y-6">
            <div class="w-40 h-40"><img src="{{ asset('assets/logo.png') }}" class="rounded-full"></div>
            <div class="w-full flex mt-20">
                <div class="w-full max-w-2xl h-4 bg-gray-300 rounded-full relative">
                    <div class="h-4 bg-[#ffbf00] rounded-full w-[50%] flex items-center justify-end pr-2">
                        <span class="text-xs text-black font-semibold">50%</span>
                    </div>
                </div>
            </div>
            <h2 class="text-2xl text-left font-light">What is your current company name and professional role?</h2>
            <div class="w-full flex flex-col space-y-4">
                <input type="text" name="company" placeholder="Company*"
                    class="border border-[#c8bfbf] w-full max-w-2xl h-12 rounded-md bg-transparent px-4">
                <select name="profesional_role"
                    class="w-full max-w-2xl h-12 rounded-md border border-white bg-[#0b2642] text-white px-4">
                    <option value="" selected disabled>Professional Role*</option>
                    <option>Founder / Owner</option>
                    <option>Chief Executive / President / GM</option>
                </select>
            </div>
            <div class="flex justify-start space-x-6">
                <button data-prev="3" class="text-[#c8bfbf] font-bold py-4 text-xl">Previous</button>
                <button data-next="5"
                    class="bg-[#ffbf00] text-black font-bold py-2 w-45 rounded-sm text-xl">Next</button>
            </div>
        </div>
    </div>

    <div id="step-5" class="step hidden bg-[#0b2642] md:h-[120vh] justify-center text-white py-4">
        <div class="w-full max-w-4xl text-center px-6 space-y-6">
            <div class="w-40 h-40"><img src="{{ asset('assets/logo.png') }}" class="rounded-full"></div>
            <div class="w-full flex mt-20">
                <div class="w-full max-w-2xl h-4 bg-gray-300 rounded-full relative">
                    <div class="h-4 bg-[#ffbf00] rounded-full w-[62%] flex items-center justify-end pr-2">
                        <span class="text-xs text-black font-semibold">62%</span>
                    </div>
                </div>
            </div>
            <h2 class="text-2xl text-left font-light">Company’s most recent annual sales revenue?</h2>
            <select name="revenue"
                class="w-full max-w-2xl h-12 rounded-md border border-white bg-[#0b2642] text-white px-4">
                <option value="" selected disabled>Recent annual sales revenue*</option>
                <option>Less then 500k</option>
                <option>1-4 Million</option>
            </select>
            <div class="flex justify-start space-x-6">
                <button data-prev="4" class="text-[#c8bfbf] font-bold py-4 text-xl">Previous</button>
                <button data-next="6"
                    class="bg-[#ffbf00] text-black font-bold py-2 w-45 rounded-sm text-xl">Next</button>
            </div>
        </div>
    </div>

    <div id="step-6" class="step hidden bg-[#0b2642] md:h-[120vh] justify-center text-white py-4">
        <div class="w-full max-w-4xl text-center px-6 space-y-6">
            <div class="w-40 h-40"><img src="{{ asset('assets/logo.png') }}" class="rounded-full"></div>
            <div class="w-full flex mt-20">
                <div class="w-full max-w-2xl h-4 bg-gray-300 rounded-full relative">
                    <div class="h-4 bg-[#ffbf00] rounded-full w-[75%] flex items-center justify-end pr-2">
                        <span class="text-xs text-black font-semibold">75%</span>
                    </div>
                </div>
            </div>
            <h2 class="text-2xl text-left font-light">What is your zip code?</h2>
            <input type="text" name="zip" placeholder="Postal Code*" maxlength="5"
                class="border border-[#c8bfbf] w-full max-w-2xl h-12 rounded-md bg-transparent px-4">
            <div class="flex justify-start space-x-6">
                <button data-prev="5" class="text-[#c8bfbf] font-bold py-4 text-xl">Previous</button>
                <button data-next="7"
                    class="bg-[#ffbf00] text-black font-bold py-2 w-45 rounded-sm text-xl">Next</button>
            </div>
        </div>
    </div>

    <div id="step-7" class="step hidden bg-[#0b2642] md:h-[120vh] justify-center text-white py-4">
        <div class="w-full max-w-4xl text-center px-6 space-y-6">
            <div class="w-40 h-40"><img src="{{ asset('assets/logo.png') }}" class="rounded-full"></div>
            <div class="w-full flex mt-20">
                <div class="w-full max-w-2xl h-4 bg-gray-300 rounded-full relative">
                    <div class="h-4 bg-[#ffbf00] rounded-full w-[87%] flex items-center justify-end pr-2">
                        <span class="text-xs text-black font-semibold">87%</span>
                    </div>
                </div>
            </div>
            <h2 class="text-2xl text-left font-light">Were you referred by someone in the Growth Master Community?</h2>
            <div class="flex flex-col items-start space-y-3">
                <label class="flex items-center space-x-2"><input type="radio" name="referred" value="yes">
                    <span>Yes</span></label>
                <label class="flex items-center space-x-2"><input type="radio" name="referred" value="no">
                    <span>No</span></label>
            </div>
            <div class="flex justify-start space-x-6">
                <button data-prev="6" class="text-[#c8bfbf] font-bold py-4 text-xl">Previous</button>
                <button data-next="8"
                    class="bg-[#ffbf00] text-black font-bold py-2 w-45 rounded-sm text-xl">Next</button>
            </div>
        </div>
    </div>

    <div id="step-8" class="step hidden bg-[#0b2642] md:h-[120vh] justify-center text-white py-4">
        <div class="w-full max-w-4xl text-center px-6 space-y-6">
            <div class="w-40 h-40"><img src="{{ asset('assets/logo.png') }}" class="rounded-full"></div>
            <div class="w-full flex mt-20">
                <div class="w-full max-w-2xl h-4 bg-gray-300 rounded-full relative">
                    <div class="h-4 bg-[#ffbf00] rounded-full w-full flex items-center justify-end pr-2">
                        <span class="text-xs text-black font-semibold">100%</span>
                    </div>
                </div>
            </div>
            <h2 class="text-2xl text-left font-light">What is your contact information?</h2>
            <input type="text" name="phone" placeholder="Mobile Phone*"
                class="border border-[#c8bfbf] w-full max-w-2xl h-12 rounded-md bg-transparent px-4">
            <div class="flex justify-start space-x-6">
                <button data-prev="7" class="text-[#c8bfbf] font-bold py-4 text-xl">Previous</button>
                <button type="submit"
                    class="bg-[#ffbf00] text-black font-bold py-2 w-80 rounded-sm hover:bg-yellow-400 text-xl uppercase">
                    Become a Member
                </button>
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

</html>