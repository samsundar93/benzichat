$(document).ready(function () {
    
    //Clear All Fields
    $("#btnReset").on("click", function () {
        $(".form-control").val("");
        var body = $("html, body");
        body.stop().animate({ scrollTop: 0 }, '500', 'swing', function () {
        });
    }); 

    $(".dropdown-menu li a").click(function() {
        var selText = $(this).text();
        $(this).parents('.dropdown').find('.dropdown-toggle').html(selText + ' <span class="caret"></span>');
    });

});


