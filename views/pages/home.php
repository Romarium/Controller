<?php
use app\services\Page;
?>

<!doctype html>
<html lang="en">
<?php
Page::component('head');
?>
<body>
<?php
Page::component('navbar');
?>
<div class="card text-center">
    <div class="card-header">
        Hello
    </div>
    <div class="card-body">
        <h5 class="card-title">Special title treatment</h5>
        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
        <a href="/login" class="btn btn-primary">Sign In</a>
    </div>
</div>
</body>
</html>
