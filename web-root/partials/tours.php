<?php
    require_once(dirname(dirname(__FILE__)).'/data/functions.php');
    $tours = get_tours();
?>
<section class="main-section paddind" id="Portfolio"><!--main-section-start-->
	<div class="container">
    	<h2>Tours &amp; Transfers</h2>
    	<h6>Our fluent English speaking drivers and certified guides will tour you and your friends through the beauties of Italy.<br/>Our Luxury Limousines and Vans can accommodate <b>up to 8 people</b>.</h6>
      <div class="portfolioFilter">  
        <ul class="Portfolio-nav wow fadeIn delay-02s">
        	<li><a href="#" data-filter="*">All</a></li>
        	<li><a href="#" data-filter=".featured" class="current">Featured</a></li>
            <li><a href="#" data-filter=".rome" >Rome &amp; Vatican</a></li>
            <li><a href="#" data-filter=".airport" >Fiumicino &amp; Ciampino Airports</a></li>
            <li><a href="#" data-filter=".shore-excursion" >Shore Excursions</a></li>
            <li><a href="#" data-filter=".latium" >From Rome</a></li>
            <li><a href="#" data-filter=".naples" >From Naples</a></li>
            <li><a href="#" data-filter=".tuscany" >From Livorno</a></li>
            <li><a href="#" data-filter=".tuscany" >Tuscany</a></li>
            <li><a href="#" data-filter=".full-day" >Full-Day</a></li>
            <li><a href="#" data-filter=".half-day" >Half-Day</a></li>
        </ul>
       </div> 
        
	</div>
    <div class="portfolioContainer wow fadeInUp delay-04s">
        <?php
            foreach ($tours as $tour) : 
        ?>
                <div class="Portfolio-box <?php echo $tour['tags']; ?>">
                	<a href="/tour/<?php echo $tour['slug']; ?>"><img src="/media/tours/<?php echo $tour['slug']; ?>-560x460.jpg" alt="Airport Transfers" title="<?php echo $tour['credits']; ?>"></a>	
                	<h3><a href="/tour/<?php echo $tour['slug']; ?>"><?php echo $tour['title']; ?></a></h3>
                    <p><?php echo $tour['description']; ?></p>
                </div>
        <?php endforeach; ?>
    </div>
</section><!--main-section-end-->
