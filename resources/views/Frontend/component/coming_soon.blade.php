<section id="coming-soon-section" class="coming-soon-section">
    <div class="auto-container">
        <div class="outer-box">
            <div class="time-counter">
                <div class="time-countdown clearfix" data-countdown="08/02/2024 18:00:00"></div>
            </div>
        </div>
    </div>
</section>


@section('js')
    <script>
        // Get the countdown element and target section
        const countdownElement = document.querySelector('.time-countdown');
        const comingSoonSection = document.getElementById('coming-soon-section');

        // Function to check if the countdown is over
        function isCountdownOver() {
            const targetDate = new Date(countdownElement.getAttribute('data-countdown')).getTime();
            const currentTime = new Date().getTime();
            return currentTime >= targetDate;
        }

        // Check if the countdown is over and hide the section if needed
        function checkCountdownAndHide() {
            if (isCountdownOver()) {
                comingSoonSection.style.display = 'none';
            }
        }

        // Check if the countdown is over on page load
        checkCountdownAndHide();

        // Function to handle the countdown and hide the section when it's over
        function updateCountdown() {
            if (isCountdownOver()) {
                comingSoonSection.style.display = 'none';
            }
        }

        // Update countdown every second
        setInterval(updateCountdown, 1000);
    </script>
@endsection
