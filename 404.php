<?php 
    $title = '404 - Not Found!';
    $body_class = 'not-found';
    include ('partials/header.php');
?>
    <div id="not-found" />
    <img src="/media/404.gif" />
    <h2>Top Tours In Italy by<br/>Nick Solipaca</h2>
    <h3>404 - Not Found</h3>
    <p><?php
        if (isset($error_message)) echo $error_message;
        else echo "If you don't know where you're going any road will get you there.";
    ?>
    </p>
    <a class="button" href="/">Back Home</a>
    </div>
</body>
</html>