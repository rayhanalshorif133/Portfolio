$(function () {
    $(window).mousemove(function (e) {
        var x = e.pageX;
        var y = e.pageY;
        handlePointerRingCursor(x, y);
    });
    handleSideBarSettings();
    choiceColorStyleTextColorHandle();
    handleBgColor();
    collectionOfCursorHandler();
});

const collectionOfCursorHandler = () => {
    const cursors = ['normal','pointer_dot_ring'];
    $(".collectionOfCursor div").click(function () {
        var cursor = $(this).attr("data-cursor");
        if(cursor == "normal"){
            $('#pointer-ring').remove();
            $('#pointer-dot').remove();
            $(document.body).css('cursor', 'default');
        }else if(cursor == "pointer_dot_ring"){
            handlePointerDotRingCursor();
        }
    });
}

const handlePointerDotRingCursor = () => {
    $(document.body).css('cursor', 'none');
    $(document.body).append('<div id="pointer-ring"></div>');
    $(document.body).append('<div id="pointer-dot"></div>');
    $(window).mousemove(function (e) {
        var x = e.pageX;
        var y = e.pageY;
        handlePointerRingCursor(x, y);
    });
}


const handleBgColor = () => {

    var colors = ['red', 'orange', 'lime', 'yellow', 'blue', 'indigo', 'purple', 'cyan', 'pink', 'teal', 'green', 'gray', 'violet', 'fuchsia', 'rose'];
    var html = '';
    colors.forEach(color => {
        html += '<div class="bg-' + color + '-500 w-8 h-8 rounded-full m-2"></div>';
    });

    $(".collectionOfBgColors").html(html);

    $(".collectionOfBgColors div").click(function () {
        var color = $(this).attr('class').split(' ').find(c => c.startsWith('bg'));
        $(document.body).removeClass();
        $(document.body).addClass(color);
        console.log(color);
    });
}

const choiceColorStyleTextColorHandle = () => {
    const colors = ['red', 'orange', 'lime', 'yellow', 'blue', 'indigo', 'purple', 'cyan'];
    setInterval(function () {
        const randomColor = colors[Math.floor(Math.random() * colors.length)];
        var color = 'text-' + randomColor + '-500';
        // choice_color_style find text*
        var text = $('.choice_color_style').attr('class').split(' ').find(c => c.endsWith('500'));
        $('.choice_color_style').removeClass(text);
        $('.choice_color_style').addClass(color);
    }, 3000);
}

const handlePointerRingCursor = (x, y) => {
    setTimeout(function () {
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
    $(".sidebar_settings").click(function () {
        $(".sidebar").toggleClass("active");
        if ($(".sidebar").hasClass("active")) {
            var sidebarWidth = 0;
            setInterval(function () {
                if (sidebarWidth < 16) {
                    sidebarWidth = sidebarWidth + 1;
                    $(".sidebar").css('width', sidebarWidth + "%");
                }
            }, 30);
            $(".sidebar .content").toggleClass('hidden');
        } else {
            var sidebarWidth = 15;
            setInterval(function () {
                if (sidebarWidth != 0) {
                    sidebarWidth = sidebarWidth - 1;
                    $(".sidebar").css('width', sidebarWidth + "%");
                }
            }, 30);
            setTimeout(function () {
                $(".sidebar .content").toggleClass('hidden');
            }, 450);
        }
    });
};