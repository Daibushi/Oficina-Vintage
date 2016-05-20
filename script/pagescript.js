$(document).ready(function(){
    $('[data-toggle="popover"]').popover();   
});

$(document).ready(function(){
    $("#produto").hover(function(){
        $(this).animate('bounce', {times:2}, 200);
    });
});