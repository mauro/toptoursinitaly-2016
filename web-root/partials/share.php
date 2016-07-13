<?php
    $share_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
    $share_title = urlencode("Top Tours In Italy");
    if (isset($title)) $share_title = $title.' '.$share_title;
    $share_hashtag = "toptoursinitaly";
    $share_email_subject = urlencode("You might like this!");
    $share_email_message = urlencode("I saw this and thought of you...");
    $share_services = array( 'twitter', 'facebook', 'linkedin', 'google', 'print', 'email');
?>
<div id="share-buttons">
    
    <div id="share-buttons-title">Share</div>

    <?php if (in_array('facebook', $share_services)) : ?>
    <!-- Facebook -->
    <a href="http://www.facebook.com/sharer.php?u=<?php echo $share_link; ?>" target="_blank">
        <img src="/media/social/facebook.png" alt="Facebook" />
    </a>
    <?php endif; ?>

    <?php if (in_array('twitter', $share_services)) : ?>
    <!-- Twitter -->
    <a href="https://twitter.com/share?url=<?php echo $share_link; ?>&amp;text=<?php echo $share_title; ?>&amp;hashtags=<?php echo $share_hashtag; ?>" target="_blank">
        <img src="/media/social/twitter.png" alt="Twitter" />
    </a>
    <?php endif; ?>
    
    <?php if (in_array('google', $share_services)) : ?>
    <!-- Google+ -->
    <a href="https://plus.google.com/share?url=<?php echo $share_link; ?>" target="_blank">
        <img src="/media/social/google.png" alt="Google" />
    </a>
    <?php endif; ?>
    
    <?php if (in_array('linkedin', $share_services)) : ?>
    <!-- LinkedIn -->
    <a href="http://www.linkedin.com/shareArticle?mini=true&amp;url=<?php echo $share_link; ?>" target="_blank">
        <img src="/media/social/linkedin.png" alt="LinkedIn" />
    </a>
    <?php endif; ?>

    <?php if (in_array('buffer', $share_services)) : ?>
    <!-- Buffer -->
    <a href="https://bufferapp.com/add?url=<?php echo $share_link; ?>&amp;text=<?php echo $share_title; ?>" target="_blank">
        <img src="/media/social/buffer.png" alt="Buffer" />
    </a>
    <?php endif; ?>
    
    <?php if (in_array('digg', $share_services)) : ?>
    <!-- Digg -->
    <a href="http://www.digg.com/submit?url=<?php echo $share_link; ?>" target="_blank">
        <img src="/media/social/diggit.png" alt="Digg" />
    </a>
    <?php endif; ?>
    
    <?php if (in_array('email', $share_services)) : ?>
    <!-- Email -->
    <a href="mailto:?Subject=<?php echo $share_email_subject; ?>&amp;Body=<?php echo $share_email_message.' '.$share_link; ?>">
        <img src="/media/social/email.png" alt="Email" />
    </a>
    <?php endif; ?>
    
    <?php if (in_array('pinterest', $share_services)) : ?>
    <!-- Pinterest -->
    <a href="javascript:void((function()%7Bvar%20e=document.createElement('script');e.setAttribute('type','text/javascript');e.setAttribute('charset','UTF-8');e.setAttribute('src','http://assets.pinterest.com/js/pinmarklet.js?r='+Math.random()*99999999);document.body.appendChild(e)%7D)());">
        <img src="/media/social/pinterest.png" alt="Pinterest" />
    </a>
    <?php endif; ?>
    
    <?php if (in_array('print', $share_services)) : ?>
    <!-- Print -->
    <a href="javascript:;" onclick="window.print()">
        <img src="/media/social/print.png" alt="Print" />
    </a>
    <?php endif; ?>
    
    <?php if (in_array('reddit', $share_services)) : ?>
    <!-- Reddit -->
    <a href="http://reddit.com/submit?url=<?php echo $share_link; ?>&amp;title=<?php echo $share_title; ?>" target="_blank">
        <img src="/media/social/reddit.png" alt="Reddit" />
    </a>
    <?php endif; ?>
    
    <?php if (in_array('stumbleupon', $share_services)) : ?>
    <!-- StumbleUpon-->
    <a href="http://www.stumbleupon.com/submit?url=<?php echo $share_link; ?>&amp;title=<?php echo $share_title; ?>" target="_blank">
        <img src="/media/social/stumbleupon.png" alt="StumbleUpon" />
    </a>
    <?php endif; ?>
    
    <?php if (in_array('tumblr', $share_services)) : ?>
    <!-- Tumblr-->
    <a href="http://www.tumblr.com/share/link?url=<?php echo $share_link; ?>&amp;title=<?php echo $share_title; ?>" target="_blank">
        <img src="/media/social/tumblr.png" alt="Tumblr" />
    </a>
    <?php endif; ?>
    
    <?php if (in_array('vk', $share_services)) : ?>
    <!-- VK -->
    <a href="http://vkontakte.ru/share.php?url=<?php echo $share_link; ?>" target="_blank">
        <img src="/media/social/vk.png" alt="VK" />
    </a>
    <?php endif; ?>
    
    <?php if (in_array('yummly', $share_services)) : ?>
    <!-- Yummly -->
    <a href="http://www.yummly.com/urb/verify?url=<?php echo $share_link; ?>&amp;title=<?php echo $share_title; ?>" target="_blank">
        <img src="/media/social/yummly.png" alt="Yummly" />
    </a>
    <?php endif; ?>

</div>