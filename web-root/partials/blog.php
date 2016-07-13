<section class="main-section client-part" id="blog"><!--main-section client-part-start-->
	<div class="container" id="blog-posts">
		<h2>Recently on our Blog</h2>
	</div>
</section><!--main-section client-part-end-->
<!--c-logo-part-start-->
<div class="c-logo-part go-to-blog">
	<div class="container">
    	<h3><a href="/blog">Read more travel advice and news on Top Troust In Italy's blog <i class="fa fa-arrow-right"></i></a></h3>
	</div>
</div>

<!--c-logo-part-end-->
<script type="text/javascript">
// Get Recent Blog Posts Through WordPress.com JSON API
    function getBlogPosts() {
        jQuery.getJSON("http://toptoursinitaly.net/blog/wp-json/wp/v2/posts?filter[posts_per_page]=4", function(data) {
            var items = [];
            var limited_text = "";
            jQuery.each(data, function(key,post) {
                limited_text = jQuery(post.content.rendered).text().split(' ').slice(0,39).join(' ');
                items.push('<div class="col-sm-3"><h3>'+post.title.rendered+'</h3><div class="post-content">'+limited_text+'...</div><div class="read-more-link"><a href="'+post.link+'">Read More <i class="fa fa-arrow-right"></i></a></div></div>');
                });
            jQuery(items.join("")).appendTo('#blog-posts');
        });
    }
// Use the get blog posts function

	$(document).ready(getBlogPosts());
</script>