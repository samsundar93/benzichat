<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <link rel="shortcut icon" href="images/favicon.ico" />

    <title>Benzichat</title>

    <?=
    $this->Html->meta('icon')
    ?>

    <script>
        var baseUrl = "<?php echo ADMIN_BASE_URL; ?>/benziadmin";
    </script>

    <!--Include CSS files-->
    <?=
    $this->element('backend/css')
    ?>

</head>
<body>

    <?php if($logginUser){ ?>
        <header id="header">
            <?php
            //echo $this->element('backend/header');
            ?>
        </header>
        <?php echo $this->element('backend/leftside'); ?>
    <?php } ?>
    <!--BODY CONTENT START-->
    <?php
    echo $this->Flash->render();
    ?>

    <?=
    $this->fetch('content')
    ?>

    <?= $this->element('backend/js') ?>
</body>
</html>