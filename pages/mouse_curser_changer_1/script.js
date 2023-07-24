$(function(){
    $(window).mousemove(function(e){
        var x = e.pageX;
        var y = e.pageY;
        var w = $(window).width();
        var h = $(window).height();
        // move the pointer-ring


        $('#pointer-ring').css({
            'left': x,
            'top': y,
            'transition': 'translate(-'+x+'px, -'+y+'px) 1s ease-in-out'
        });

        // move the pointer
        $('#pointer-dot').css({
            'left': x,
            'top': y,
            'transition': 'translate(-'+x+'px, -'+y+'px) 1s ease-in-out'
        });

    });
});