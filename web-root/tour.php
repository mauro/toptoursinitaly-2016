<?php 
    require_once('data/functions.php');
    if (!isset($_REQUEST['slug'])) {
        not_found();
    }
    $tour = get_tour($_REQUEST['slug']);
    if (empty($tour)) {
        not_found('We offer no tour by the name "'.$_REQUEST['slug'].'".<br/>Please check our Private Guided Tours to learn more.');
    } else {
        $title = $tour['title'];
    }
    include ('partials/header.php');
?>
<div id="topbar" class="wow fadeInDown">
    <h3>Top Tours In Italy by Nick Solipaca</h3>
</div>
<header id="tour-header" class="slide" style="background-image: url('/media/tours/<?php echo $tour['slug']; ?>.jpg');">
    <div class="tour-header-content">
        <div class="container">
            <h2 class="wow fadeInDown delay-03s"><em><?php echo $tour['title']; ?></em></h2>
            <h3 class="wow fadeInDown delay-05s"><?php echo $tour['description']; ?></h3>
            <a href="#contact" class="link wow bounceInUp delay-09s">
                <i class="fa fa-email"></i> Get a Quote
            </a>
        </div>
    </div>
    <div id="tripadvisor"><a href="/#excellence"><img src="/media/excellent-tripadvisor.png" alt=""></a></div>    
    <div id="scrolldown"><a href="#tour-page"><i class="fa fa-chevron-circle-down"></i></a></div>
</header>
<?php 
    include ('partials/nav-pages.php');
?>
<section id="tour-page" class="page main-section">
    <div class="container">
        <h2><em><?php echo $tour['title']; ?></em></h2>
        <h3><?php echo $tour['description']; ?></h3>
        <div class="content">
            <?php echo htmlize($tour['content']); ?>

            <?php include('partials/share.php'); ?>
        </div>
    </div>
</section>
<div class="alternatebg">
<?php 
    $redirect = '/tour/'.$tour['slug'];
    include ('partials/contact.php');
?>
</div>
<?php
    include ('partials/tours.php');
?>

<div class="c-logo-part go-to-blog">
    <div class="container">
        <p><a href="https://www.tripadvisor.it/Attraction_Review-g187791-d4458769-Reviews-Top_Tours_in_Italy_Private_Day_Tours-Rome_Lazio.html" target="_blank"><img src="/media/excellent-tripadvisor.png" width="200" align="right"/></a>
    </div>
</div>
<?php 
    include ('partials/footer.php');

?>