<!-- <ul class="navbar-nav mr-auto">   
    <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="#">tests</a>
    </li>
</ul> -->
<?php



?>
<ul class="navbar-nav mr-auto">
    <?php
    foreach ($navbarLinks as $link) {
        echo "<li class=\"nav-item\">
        <a class=\"nav-link\" href=\"$link[slug]\">Link<span class=\"sr-only\">(current)</span></a>
    </li>";
        
    }
    ?>
</ul>

<!-- echo 'li class="nav-item active">
        <a class="nav-link" href="$link">$link <span class="sr-only">(current)</span></a>
    </li>'; -->
    