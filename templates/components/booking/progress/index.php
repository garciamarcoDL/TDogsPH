<?php

$currentStep = $currentStep ?? 1;

?>

<section class="booking-progress">

    <div class="container">

        <div class="progress-wrapper">

            <?php

            $steps = [

                1 => "Service",
                2 => "Schedule",
                3 => "Pet",
                4 => "Owner",
                5 => "Review"

            ];

            foreach($steps as $number => $title):

            ?>

                <div class="progress-item">

                    <div class="progress-circle <?= $currentStep >= $number ? 'active' : ''; ?>">

                        <?= $number; ?>

                    </div>

                    <span>

                        <?= $title; ?>

                    </span>

                </div>

                <?php if($number < count($steps)): ?>

                    <div class="progress-line <?= $currentStep > $number ? 'active' : ''; ?>"></div>

                <?php endif; ?>

            <?php endforeach; ?>

        </div>

    </div>

</section>