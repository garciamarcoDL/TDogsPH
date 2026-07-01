<?php

$pageTitle = "Our Story | TDogsPH";

$currentPage = "our-story.php";

/*
|--------------------------------------------------------------------------
| Layouts
|--------------------------------------------------------------------------
*/

require_once __DIR__ . "/../layouts/header.php";

require_once __DIR__ . "/../layouts/navbar.php";

/*
|--------------------------------------------------------------------------
| Components
|--------------------------------------------------------------------------
*/

require_once __DIR__ . "/../components/our-story/hero/index.php";

require_once __DIR__ . "/../components/our-story/story/index.php";

require_once __DIR__ . "/../components/our-story/inspirations/index.php";

require_once __DIR__ . "/../components/our-story/promise/index.php";

/*
|--------------------------------------------------------------------------
| Footer
|--------------------------------------------------------------------------
*/

require_once __DIR__ . "/../layouts/footer.php";