$(document).ready( function() {

	$('.carousel').carousel({
        interval: 2000
    })
    // Logo
	var $logo=$('#logo');
    if (location.href.indexOf("#") != -1 && location.href.substr(location.href.indexOf("#"))!='#about') 
       	$logo.show();
    else
        $logo.hide();
    $('#showfluo').hide();
    $('#showmeteo').hide();
    $('#showalarme').hide();
    $('#showaffmoto').hide();
    $('#showskate').hide();
    $('#showclavier').hide();
    $('#showbtaudio').hide();
    $('#show3dprinter').hide();
    $('#showcalc').hide();
    $('#showrpi').hide();
    $('#showdomotique').hide();
	// Show logo 
	$('#tab-container .tab a').click(function() {
	  $logo.slideDown('slow');
	});
	// Hide logo
	$('#tab-about').click(function() {
	  $logo.slideUp('slow');
	});	
function animMeter(){
    $(".meter > span").each(function() {
                $(this)
                    .data("origWidth", $(this).width())
                    .width(0)
                    .animate({
                        width: $(this).data("origWidth")
                    }, 1200);
            });
}
animMeter();

      $('#tab-container').easytabs({
        animate			: true,
        updateHash		: true,
        transitionIn	: 'slideDown',
        transitionOut	: 'slideUp',
        animationSpeed	: 600,
        tabActiveClass	: 'active'}).bind('easytabs:midTransition', function(event, $clicked, $targetPanel){
            if($targetPanel.selector=='#resume'){
                    animMeter();
            }
        });
    });
function showHideProjects(cont){
    var $button='#btn'+cont;
    var $show ='#show'+cont;
    if($($show).is(':visible')){
        $($show).hide(); 
        $($button).text('Voir plus');
    }else{
        $($show).show(); 
        $($button).text('Voir moins');
    }
}