<footer class="footer">
    <div class="container">
        <h3>Top Tours In Italy by Nick Solipaca</h3>
        <h6>Shore Excursions, Private Guided Tours, Transfers All Over Italy</h6>
        
        <?php include('share.php'); ?>
        
        <ul class="copyright">
            <li>Copyright © 2016 Nick Solipaca &bull; <a href="/privacy">Privacy Policy</a></li>
            <li><a href="http://ipassion.it/">Designed and Developed by iPassion</a></li>
            <li><small>Based on the Knight theme by <a href="http://bootstraptaste.com">BootstrapTaste</a></a>
        </ul>
    </div>
</footer>

<div id="cookies" style="display:none;">
    <p>This website uses cookies. By continuing to use this website, you consent to our use of these cookies. <a href="/privacy">More info</a> <a href="#" onclick="acceptPrivacyPolicy();" class="link">Accept</a></p>
</div>

<?php if (isset($_REQUEST['message'])) :?>
    <div id="alert"><h3><?php echo $_REQUEST['message']; ?> <a href="#" class="link" onclick="javascript:jQuery( '#alert' ).fadeOut();">Dismiss</a></h3></div>
<?php endif; ?>

<script type="text/javascript" src="/js/footer.js"></script>
<script type="text/javascript" src="/js/cookies.js"></script>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.6&appId=120804664665707";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
</body>
</html>