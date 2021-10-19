<?= $this->extend('user/template'); ?>
<?= $this->section('content'); ?>
<div class="pagination-centered mt-5 mb-5">
    <div id="index-form" class="index-form">
        <div id="index-accepted" class="index-accepted">
            <div class="index-accepted-content">
                <div class="text-center mb-3">
                    <img src="<?= base_url('/'); ?>/user/images/Poltek-UKM.png" class="index-form-content-logo-snmptn" alt="Logo">
                </div>
                <h1 class="index-form-content-title text-center">COMING SOON</h1>
                <h6 class="index-accepted-header-title-text text-center">PENGUMUMAN OPEN RECRUITMENT</h6>
                <h6 class="index-accepted-header-title-text text-center">UKM BAHASA PNUP</h6><br>
                <div id="clockdiv" class="mx-auto d-block">
                    <div>
                        <span class="days"></span>
                        <div class="smalltext">Days</div>
                    </div>
                    <div>
                        <span class="hours"></span>
                        <div class="smalltext">Hours</div>
                    </div>
                    <div>
                        <span class="minutes"></span>
                        <div class="smalltext">Minutes</div>
                    </div>
                    <div>
                        <span class="seconds"></span>
                        <div class="smalltext">Seconds</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <button type="button" class="btn btn-success swalDefaultSuccess" id="tes" hidden></button>

    <?= $this->endsection(); ?>
    <?= $this->section('script'); ?>
    <script>
        function getTimeRemaining(endtime) {
            const total = Date.parse(endtime) - Date.parse(new Date());
            const seconds = Math.floor((total / 1000) % 60);
            const minutes = Math.floor((total / 1000 / 60) % 60);
            const hours = Math.floor((total / (1000 * 60 * 60)) % 24);
            const days = Math.floor(total / (1000 * 60 * 60 * 24));

            return {
                total,
                days,
                hours,
                minutes,
                seconds
            };
        }

        function initializeClock(id, endtime) {
            const clock = document.getElementById(id);
            const daysSpan = clock.querySelector('.days');
            const hoursSpan = clock.querySelector('.hours');
            const minutesSpan = clock.querySelector('.minutes');
            const secondsSpan = clock.querySelector('.seconds');

            function updateClock() {
                const t = getTimeRemaining(endtime);

                daysSpan.innerHTML = t.days;
                hoursSpan.innerHTML = ('0' + t.hours).slice(-2);
                minutesSpan.innerHTML = ('0' + t.minutes).slice(-2);
                secondsSpan.innerHTML = ('0' + t.seconds).slice(-2);

                if (t.total <= 0) {
                    clearInterval(timeinterval);
                }
            }

            updateClock();
            const timeinterval = setInterval(updateClock, 1000);
        }

        const deadline = 'April 08 2021 10:46:00 GMT+0800';
        initializeClock('clockdiv', deadline);
    </script>
    <script>
        function ulang() {
            location.reload();
        }
        $(document).ready(function() {
            if (Date.parse(deadline) == Date.parse(new Date())) {
                ulang();
            }
        });
    </script>
    <?= $this->endsection(); ?>