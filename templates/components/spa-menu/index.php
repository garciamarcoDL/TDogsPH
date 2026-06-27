<?php

$services = require __DIR__ . '/../../../app/Data/services.php';

?>

<section id="spa-menu" class="spa-menu">

<div class="container">

<div class="text-center mb-5">

<span class="section-tag">

Spa Menu

</span>

<h2>

Pamper Your Best Friend

</h2>

<p>

Choose from our premium grooming and wellness services.

</p>

</div>

<div class="row g-4">

<?php foreach($services as $service): ?>

<div class="col-lg-4 col-md-6">

<div class="spa-card">

<div class="spa-icon">

<i class="<?= $service['icon']; ?>"></i>

</div>

<h3>

<?= htmlspecialchars($service['title']); ?>

</h3>

<div class="price">

Starting From

<strong>

₱<?= number_format($service['price']); ?>

</strong>

</div>

<div class="duration">

<i class="fa-regular fa-clock"></i>

<?= htmlspecialchars($service['duration']); ?>

</div>

<p>

<?= htmlspecialchars($service['description']); ?>

</p>

<a href="#" class="reserve-btn">

Reserve Spot

<i class="fa-solid fa-arrow-right"></i>

</a>

</div>

</div>

<?php endforeach; ?>

</div>

</div>

</section>