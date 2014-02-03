// Initial status of each animation
var fiDevicesStatus = 'pre';

$(document).ready(function(){
    // Call triggers on scroll
    $(window).scroll(fiScrollTriggers);
	modalWindow();
});

function modalWindow() {
	if($('body').hasClass('front')) {
  		$('.md-overlay').addClass('md-show');
	}
}

// Scroll triggers
function fiScrollTriggers(){
    // Increment scroll position
    var scrollPos = $(document).scrollTop();
    
    // Set starting positions
    var fiDevicesPos = ( $('#fi-header-devices').offset().top - 400 );
    
    // Devices
    if(scrollPos >= fiDevicesPos && fiDevicesStatus == 'pre') {
        headerDevicesIn();
    }
    if(scrollPos < fiDevicesPos && fiDevicesStatus == 'post') {
        headerDevicesOut();
    }
    
}

// Initial devices animation
function headerDevicesIn() {
    $('#fi-header-devices img').each(function(){
        var imgHeight = $(this).attr('data-height');
        var imgWidth = $(this).attr('data-width');
        $(this).stop().animate({ 'height' : imgHeight , 'width' : imgWidth , 'top' : 0 , 'right' : 0 }, 650, 'easeOutBack', function(){
        });    
    });
    fiDevicesStatus = 'post';
}
function headerDevicesOut() {
        $('#fi-header-devices img').each(function(){
            $(this).stop().animate({ 'height' : 0 , 'width' : 0 , 'top' : '50%' , 'right' : '50%' }, 350, 'easeOutBack');
        });
    fiDevicesStatus = 'pre';
}