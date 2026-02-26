
<?php $__env->startSection('title', $getMenu[0]->menu_6); ?>
<?php $__env->startSection('content'); ?>
    <style>
        .no-scrollbar::-webkit-scrollbar {
            display: none;
        }
        .no-scrollbar {
            -ms-overflow-style: none;
            scrollbar-width: none;
        }
    </style>
    <div id="eventPage" class="space-y-45">
        <?php $__env->startComponent('components.navbar'); ?>
        <?php echo $__env->renderComponent(); ?>

        <div class="space-y-96">
            <div class="relative w-full h-[80vh] md:h-screen top-16 py-24">
                <?php echo $__env->make('frontend.include.form', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
            </div>
            <div class="relative md:top-20 top-128">
                <?php $__env->startComponent('components.footer'); ?>
                <?php echo $__env->renderComponent(); ?>
            </div>
        </div>
    </div>
    <script>
        const btnPlay = document.getElementById("btn-play");
        const videoPopup = document.getElementById("video-popup");
        const videoPlayer = document.getElementById("video-player");
        const btnClose = document.getElementById("btn-close");

        // Open popup + autoplay
        btnPlay.addEventListener("click", () => {
            videoPopup.classList.remove("hidden");
            videoPlayer.play();
        });

        // Close popup using X button
        btnClose.addEventListener("click", () => {
            videoPlayer.pause();
            videoPopup.classList.add("hidden");
        });

        // Optional: Close when clicking background
        videoPopup.addEventListener("click", (e) => {
            if (e.target === videoPopup) {
                videoPlayer.pause();
                videoPopup.classList.add("hidden");
            }
        });
    </script>
    <script>
        const carousel = document.getElementById("carousel");
        const btnPrev = document.getElementById("btn-prev");
        const btnNext = document.getElementById("btn-next");

        btnNext.addEventListener("click", () => {
            carousel.scrollBy({ left: 300, behavior: "smooth" });
        });

        btnPrev.addEventListener("click", () => {
            carousel.scrollBy({ left: -300, behavior: "smooth" });
        });
    </script>

    
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const btn = document.getElementById('btn-join-event');
            const section = document.getElementById('section-join');

            btn.addEventListener('click', function () {
                section.scrollIntoView({
                    behavior: 'smooth',
                    block: 'start'
                });
            });
        });
    </script>



<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH D:\Seed Media\Growth_Master\resources\views/frontend/form-input-information/form.blade.php ENDPATH**/ ?>