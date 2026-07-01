<?php

$pageTitle = "Book Appointment | TDogsPH";

include '../../templates/layouts/header.php';

include '../../templates/layouts/navbar.php';

?>

<main>

    <?php include '../../templates/components/booking/hero/index.php'; ?>

    <?php include '../../templates/components/booking/service-selection/index.php'; ?>

    <?php include '../../templates/components/booking/schedule/index.php'; ?>

    <?php include '../../templates/components/booking/pet-information/index.php'; ?>

    <?php include '../../templates/components/booking/owner-information/index.php'; ?>

    <?php include '../../templates/components/booking/review/index.php'; ?>

</main>

<?php

include '../../templates/layouts/footer.php';

?>