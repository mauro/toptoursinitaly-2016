<?php
    require_once('data/functions.php');
    $testimonials = get_testimonials();
    include ('partials/header.php');
?>
<header id="page-header">
	<h1 class="wow fadeInDown delay-08s">
		Top Tours In Italy<br/><small>by</small> Nick Solipaca
	</h1>
</header>
<?php 
    include ('partials/nav-pages.php');
?>
<section id="testimonials-page" class="page main-section alabaster">
<div class="container">
<h2><em>Testimonials</em></h2>
    <h6>Here you can read just a few of the many letters of praise and thanks we get from our awesome customers from all over the world, after they decided to use our limousine service.</h6>

    <div class="testimonials-list">

    <?php foreach ($testimonials as $testimonial) :
            $date = new DateTime($testimonial['date']);
    ?>
        <div class="list-item">
            <h4 class="author">From: <?php echo $testimonial['author']; ?> on <?php echo $date->format('M d, Y'); ?></h4>
            <p><?php echo htmlize($testimonial['review']); ?></p>
    	</div>
    <?php endforeach; ?>

    </div>
</div>
</section>
<div class="c-logo-part go-to-blog">
    <div class="container">
        <p><a href="https://www.tripadvisor.it/Attraction_Review-g187791-d4458769-Reviews-Top_Tours_in_Italy_Private_Day_Tours-Rome_Lazio.html" target="_blank"><img src="media/excellent-tripadvisor.png" width="200" align="right"/></a> If you are a current or former Top Tours In Italy customer and would like to share your service experience with our firm, we would love to hear about it from you! <a href="https://www.tripadvisor.it/UserReview-g187791-d4458769-ehttp%3A__2F____2F__www__2E__tripadvisor__2E__it__2F__Attraction__5F__Review__2D__g187791__2D__d4458769__2D__Reviews__2D__Top__5F__Tours__5F__in__5F__Italy__5F__Private__5F__Day__5F__Tours__2D__Rome__5F__Lazio__2E__html-Top_Tours_in_Italy_Private_Day_Tours-Rome_Lazio.html" target="_blank">Please conside rating us on TripAdvisor!</a></p>
    </div>
</div>
<?php 
    include ('partials/footer.php');

?>