<?php
    echo $this->Html->css([
        ADMIN_BOOT_CSS.'bootstrap/css/bootstrap.min.css',
        ADMIN_BOOT_CSS.'bootstrap/css/bootstrap-theme.min.css',
        ADMIN_CSS.'benzichat.css',
        ADMIN_CSS.'font-awesome.min.css',
    ]);
    echo $this->Html->script([
        'https://maps.googleapis.com/maps/api/js?key=AIzaSyAzYAo0kwVA0qTj7iPEedXbAoBx03UI9Lg&libraries=places&region=IN'

    ]);

    echo $this->Html->script([
        ADMIN_JS.'jquery.min.js'
    ]);

    if($controller == 'Customers') {
        echo $this->Html->css([
            ADMIN_CSS.'jquery.dataTables.min.css'
        ]);
    }
?>




