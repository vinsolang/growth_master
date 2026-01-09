<style>
  .icon-indicator {
      color: black;
  }
</style>

<h1 class="text-center text-[#000000] text-[20px] md:text-[30px] mt-10 px-6 xl:px-50 md:px-16">
    Frequently asked questions
</h1>
<div id="faq-container" class="max-w-5xl mx-auto p-6 bg-white">
    @foreach ($showFAQs as $item)
        <div class="cursor-pointer">
            <button
                class="question-toggle cursor-pointer flex justify-between items-center w-full py-4 text-lg font-medium text-gray-900 focus:outline-none">
                <span class="icon-indicator mr-3 text-xl text-gray-900">

                </span>
                <span class="grow text-left">
                    {{ $item->question }}
                </span>
            </button>
            <div
                class="content px-10 pb-4 text-[#343434] overflow-hidden max-h-0 opacity-0 transition-all duration-300 ease-in-out">
                <p>
                    {{ $item->answer }}
                </p>
            </div>
        </div>
    @endforeach
</div>

{{-- Frequently asked questions --}}
<script>
document.addEventListener('DOMContentLoaded', () => {
    const toggles = document.querySelectorAll('.question-toggle');

    toggles.forEach(toggle => {
        toggle.addEventListener('click', () => {
            const parentDiv = toggle.parentElement;
            const content = parentDiv.querySelector('.content');
            const icon = parentDiv.querySelector('.icon-indicator');

            const isOpen = content.classList.contains('max-h-[500px]');

            // Close all others
            toggles.forEach(otherToggle => {
                const otherContent = otherToggle.parentElement.querySelector('.content');
                const otherIcon = otherToggle.parentElement.querySelector('.icon-indicator');

                otherContent.classList.remove('max-h-[500px]', 'opacity-100');
                otherContent.classList.add('max-h-0', 'opacity-0');
                otherIcon.innerHTML = '&#9654;';
            });

            // Toggle current
            if (!isOpen) {
                content.classList.remove('max-h-0', 'opacity-0');
                content.classList.add('max-h-[500px]', 'opacity-100');
                icon.innerHTML = '&#9660;';
            } else {
                content.classList.remove('max-h-[500px]', 'opacity-100');
                content.classList.add('max-h-0', 'opacity-0');
                icon.innerHTML = '&#9654;';
            }
        });
    });
});
</script>

