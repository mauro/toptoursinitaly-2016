<?php 
    $title = "Tours";
    include ('partials/header.php');
    include ('partials/video.php');
    include ('partials/nav-pages.php');
?>
<?php
    include ('partials/tours.php');
?>

<div class="c-logo-part go-to-blog">
    <div class="container">
        <p><a href="https://www.tripadvisor.it/Attraction_Review-g187791-d4458769-Reviews-Top_Tours_in_Italy_Private_Day_Tours-Rome_Lazio.html" target="_blank"><img src="/media/excellent-tripadvisor.png" width="200" align="right"/></a>
    </div>
</div>
<div class="alternatebg">
<?php 
    $redirect = '/tour/'.$tour['slug'];
    include ('partials/contact.php');
?>
</div>
<?php 
    include ('partials/footer.php');

?>