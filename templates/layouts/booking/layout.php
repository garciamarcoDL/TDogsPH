<?php

$pageTitle = $pageTitle ?? 'Booking | TDogsPH';

$currentStep = $currentStep ?? 1;

$content = $content ?? '';

include __DIR__ . '/../header.php';
include __DIR__ . '/../navbar.php';

?>

<main class="booking-page">

    <?php include __DIR__ . '/../../components/booking/progress/index.php'; ?>

    <section class="booking-layout">

        <div class="container">

            <div class="row g-5">

                <!-- LEFT COLUMN -->

                <div class="col-lg-8">

                    <?php

                    if($content && file_exists($content)){

                        include $content;

                    }

                    ?>

                </div>

                <!-- RIGHT COLUMN -->

                <div class="col-lg-4">

                    <?php include __DIR__ . '/../../components/booking/summary/index.php'; ?>

                </div>

            </div>

        </div>

    </section>

</main>

<?php

include __DIR__ . '/../footer.php';

?>