// Loading Progress bar
function showprogressbar() {
        $(".loadingProgress").css("display", "block");
}
function hideprogressbar() {
    $(".loadingProgress").css("display", "none");
}
    // show the icon when the page is unloaded
$(window).on('beforeunload', function(event) {
    $(".loadingProgress").css("display", "block");
}); 
// show the icon when the page is unloaded
$(window).on('beforeunload', function () { 
});

// hide the icon when the page is fully loaded
$(window).on('load', function () {
    hideprogressbar();
    //$('#loginErrorModal').modal('hide');
});
$(window).on('resize', function() { 
});
// Menu toggle actions
$("#menuToggle,#menuCloseToggle,.sidebarTransparent").click(function(e) {
    e.preventDefault();
    $("#wrapper").toggleClass("toggled");
}); 
 
// Tab Manual Trigger
$('.cancelCompanyBtn').click(function() {
    $('.addCompanyTab a').html("<i class='fa fa-fw fa-plus'></i> Add Company");
    $('.nav-tabs > .active').prev('li').find('a').trigger('click');
});
$('.companyEditButton').click(function() {
    $('.addCompanyTab a').html("<i class='fa fa-fw fa-pencil-square-o'></i> Edit Company");
    $('.nav-tabs > .active').next('li').find('a').trigger('click');
});

$(document).ready(function () { 
	// Login Validation 
	$("#homeLoginBtn").on("click", function(){
		window.location.href="home.html"; 
	});	 
	// V1.0 Function 
	// Current date and time
	var today = new Date(); 
	// What happens next depends on whether you want UTC or locale time...
	// assuming locale time in this example...
	$('#time').html( today.getHours() + ':' + today.getMinutes());
	//$('#weekday').html(today.toDateString().substring(0,3));
	$('#date').html( ( "DD MM YY", today ).toDateString() );
	
});
// Language selected value append
$(".languageSel .dropdown-menu li a").on("click", function() {
	var selText = $(this).text();
	$(this).parents('#navbar').find('#languageSelectedBtn').html(selText + '<b class="caret"></b>');
});  
// Checkbox multiple selection validate
(function($) {
    $.fn.checkAll = function(options) {
        var options = $.extend({
            scope: 'form, #allBrandName',
            onMasterClick: null,
            onScopeChange: null
        }, options);

        return this.each(function() {

            var $master_checkbox = $(this),
                $scope = options.scope instanceof jQuery ? options.scope : $master_checkbox.closest(options.scope);

            $master_checkbox.on('click', function(e) {

                if ($master_checkbox.is(':checked'))
                    $scope.find('input[type="checkbox"]').not($master_checkbox).prop('checked', true).trigger('change'); 
                else
                    $scope.find('input[type="checkbox"]').not($master_checkbox).prop('checked', false).trigger('change'); 

                if (typeof options.onMasterClick === 'function')
                    options.onMasterClick($master_checkbox, $scope);
            });

            $scope.on('change', 'input[type="checkbox"]', function(e) {

                var $changed_checkbox = $(this);

                if ($changed_checkbox.is($master_checkbox))
                    return;

                if (typeof options.onScopeChange === 'function')
                    options.onScopeChange($master_checkbox, $changed_checkbox, $scope);

                if (!$changed_checkbox.is(':checked')) {
                    $master_checkbox.prop('checked', false);
					$("#userManagementTable .btn").removeAttr('disabled', 'disabled');
					$(".showBeforeCheckAll").removeAttr('disabled', 'disabled');
					$(".hideBeforeCheckAll").attr('disabled', 'disabled');
                    return; 
                }

                if ($scope.find('input[type="checkbox"]').not($master_checkbox).not(':checked').length === 0)
                    $master_checkbox.prop('checked', true);
					$("#userManagementTable .btn").attr('disabled', 'disabled');
					$(".showBeforeCheckAll").attr('disabled', 'disabled');
					$(".hideBeforeCheckAll").removeAttr('disabled', 'disabled'); 
            });
        });
    };

}(jQuery));
// Slider animation pause
$('#myCarousel .item iframe').on('click', function(){
    $('#errorRemedyCarousel').carousel('pause');
}); 
// table Scoll Bar with fixed header 
(function($) {
    $(window).on("load", function() {
        $(".companyListTableOuter .panelScrollBarDiv").mCustomScrollbar({
            setHeight: 460,
            theme: "dark-3"
        });  
    });
}(jQuery)); 

// Notification settings 

$('.btn-toggle').click(function() {
    $(this).find('.btn').toggleClass('active');      
    if ($(this).find('.btn-primary').size()>0) {
    	$(this).find('.btn').toggleClass('btn-primary');
    }     
    $(this).find('.btn').toggleClass('btn-default'); 	
});

$(document).ready(function () {
    $(".companyEmailID a").click(function () { 
        setTimeout(function () {
            hideprogressbar();
        }, 1500);
    })
});