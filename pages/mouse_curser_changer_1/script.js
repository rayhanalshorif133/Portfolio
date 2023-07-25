$(function(){
    $(window).mousemove(function(e){
        var x = e.pageX;
        var y = e.pageY;
        handlePointerRingCursor(x,y);
    });
    handleSideBarSettings();
});

const handlePointerRingCursor = (x,y) => {
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
}

const handleSideBarSettings = () => {
    $(".sidebar_settings").click(function(){
        $(".sidebar").toggleClass("active");
        if($(".sidebar").hasClass("active")){
            var sidebarWidth = 0;
            setInterval(function(){
                if(sidebarWidth < 16){
                    sidebarWidth = sidebarWidth + 1;
                    $(".sidebar").css('width', sidebarWidth + "%");
                }
            }, 30);
            $(".sidebar .content").toggleClass('hidden');
        }else{
            var sidebarWidth = 15;
            setInterval(function(){
                if(sidebarWidth != 0){
                    sidebarWidth = sidebarWidth - 1;
                    $(".sidebar").css('width', sidebarWidth + "%");
                }
            }, 30);
            setTimeout(function(){
                $(".sidebar .content").toggleClass('hidden');
            }, 450);
        }
    });
};