/* checkout form js*/
$('.form').hide();
$('#vis').fadeIn({
    width: '200px'
}, 300);


$('.link').click(function() {
    $('.form').hide();       
    $('.form[data-link=' + $(this).data('link') + ']').fadeIn({
        width: '200px'
    }, 300);
    $(this).addClass('active');
});

var mobile = (/iphone|ipod|android|blackberry|mini|windows\sce|palm/i.test(navigator.userAgent.toLowerCase()));  

if (mobile) { 
    $('#currentProduct').hide();  
} 
