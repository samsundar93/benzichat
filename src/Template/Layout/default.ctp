<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <link rel="shortcut icon" href="images/favicon.ico" />

    <title>Benzichat</title>
    <!-- Bootstrap Core CSS -->
    <?=
    $this->element('css')
    ?>

</head>

<body>
    <?php
        echo $this->element('header');
    ?>

    <?php
        echo $this->Flash->render();
    ?>

    <?=
    $this->fetch('content')
    ?>
    <?= $this->element('js') ?>
    <!-- Start of LiveChat (www.livechatinc.com) code -->
    <script type="text/javascript">
        window.__lc = window.__lc || {};
        window.__lc.license = 9352575;
        (function() {
            var lc = document.createElement('script'); lc.type = 'text/javascript'; lc.async = true;
            lc.src = ('https:' == document.location.protocol ? 'https://' : 'http://') + 'cdn.livechatinc.com/tracking.js';
            var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(lc, s);
        })();
    </script>
    <!-- End of LiveChat code -->
</body>

</html>