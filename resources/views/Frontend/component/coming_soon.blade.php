<section id="coming-soon-section" class="coming-soon-section csm-modern">
    <div class="auto-container">
        <div class="outer-box">
            <div class="csm-label">Festival Begins In</div>
            <div class="time-counter">
                <div class="time-countdown clearfix" data-countdown="07/31/2026 18:00:00"></div>
            </div>
        </div>
    </div>
</section>

<style>
    .csm-modern {
        padding: 34px 0;
        background: linear-gradient(120deg, #120318 0%, #3a0f3d 50%, #7a1650 100%);
    }
    .csm-modern .outer-box {
        display: flex;
        flex-direction: column;
        align-items: center;
        gap: 18px;
    }
    .csm-label {
        font-size: 12px;
        font-weight: 700;
        letter-spacing: 3px;
        text-transform: uppercase;
        color: rgba(255, 255, 255, 0.55);
    }

    .csm-modern .time-countdown {
        display: flex;
        align-items: stretch;
        justify-content: center;
        gap: 14px;
        flex-wrap: wrap;
    }
    .csm-modern .time-countdown .counter-column {
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        gap: 4px;
        min-width: 84px;
        padding: 16px 10px;
        border-radius: 14px;
        background: rgba(255, 255, 255, 0.06);
        border: 1px solid rgba(255, 255, 255, 0.12);
        color: rgba(255, 255, 255, 0.65);
        font-size: 11px;
        font-weight: 700;
        letter-spacing: 0.5px;
        text-transform: uppercase;
    }
    .csm-modern .time-countdown .counter-column .count {
        font-size: 34px;
        font-weight: 800;
        color: #ffffff;
        line-height: 1;
        font-variant-numeric: tabular-nums;
    }

    @media (max-width: 767px) {
        .csm-modern .time-countdown { gap: 10px; }
        .csm-modern .time-countdown .counter-column { min-width: 70px; padding: 12px 8px; }
        .csm-modern .time-countdown .counter-column .count { font-size: 26px; }
    }
    @media (max-width: 420px) {
        .csm-modern .time-countdown .counter-column { min-width: 58px; padding: 10px 4px; font-size: 9px; }
        .csm-modern .time-countdown .counter-column .count { font-size: 20px; }
    }
</style>

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
