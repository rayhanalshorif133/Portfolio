$(function(){
    $(window).mousemove(function(e){
        var x = e.pageX;
        var y = e.pageY;
        // move the pointer-ring


        setTimeout(function(){
            $('#pointer-ring').css({
                'left': x,
                'top': y, 
            });
        }, 100);

        // move the pointer
        $('#pointer-dot').css({
            'left': x,
            'top': y,
        });

    });
});