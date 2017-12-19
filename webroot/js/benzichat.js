// Loading Progress bar
function showprogressbar() {
        $(".loadingProgress").css("display", "block");
    }
    // show the icon when the page is unloaded
$(window).on('beforeunload', function(event) {
    $(".loadingProgress").css("display", "block");
});

// hide the icon when the page is fully loaded
$(window).on('load', function(event) {
    $(".loadingProgress").css("display", "none");
});
$(window).on('resize', function() {
     
});
// Menu toggle actions
$("#menuToggle,#menuCloseToggle,.sidebarTransparent").click(function(e) {
    e.preventDefault();
    $("#wrapper").toggleClass("toggled");
});  
// Tab Manual Trigger
$('.cancelStoreBtn').click(function() {
    $('.addStoreTab a').html("<i class='fa fa-fw fa-plus'></i> Add Store");
    $('.nav-tabs > .active').prev('li').find('a').trigger('click');
});
$('.storeEditButton').click(function() {
    $('.addStoreTab a').html("<i class='fa fa-fw fa-pencil-square-o'></i> Edit Store");
    $('.nav-tabs > .active').next('li').find('a').trigger('click');
});  
// Slider animation pause
$('#myCarousel .item iframe').on('click', function(){
    $('#errorRemedyCarousel').carousel('pause');
}); 
// table Scoll Bar with fixed header 
(function($) {
    $(window).on("load", function() {
        $(".storeListTableOuter .panelScrollBarDiv").mCustomScrollbar({
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







// table Scoll Bar with fixed header 
(function($) {
    $(window).on("load", function() {
        $("#termsConditionsID .termsConditionsDiv").mCustomScrollbar({
            setHeight: 320,
            theme: "dark-3"
        });   
		$(".settingTableOuter .panelScrollBarDiv").mCustomScrollbar({
            setHeight: 280,
            theme: "dark-3"
        }); 
    });
}(jQuery)); 
 