<?php
echo $this->Html->script([
    //ADMIN_JS.'jquery.min.js',
    ADMIN_BOOT_CSS.'bootstrap/js/bootstrap.min.js',
    ADMIN_BOOT_CSS.'bootstrap/js/bootstrapvalidator.min.js',
    ADMIN_JS.'customscrollbar.min.js',
    ADMIN_JS.'languageselction.js',
    ADMIN_JS.'benzichat.js',
    ADMIN_JS.'formvalidations.js',
    ADMIN_JS.'jquery.validate.min.js',
    ADMIN_JS.'common.js',

    ]);
?>

<?php
    if($controller == 'Users') {
        echo $this->Html->script([
            ADMIN_JS.'developer.js'
        ]);
    }

    if($controller == 'Customers') {
        echo $this->Html->script([
            ADMIN_JS.'jquery.dataTables.min.js'
        ]);
    }
?>




