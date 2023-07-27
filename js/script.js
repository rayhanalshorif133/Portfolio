$(function () {
    handleNavBarToggle();
    handleBgGradientToR();
    handleTypeWriter();
});

const handleNavBarToggle = () => {
    $('.navbar-toggler').click(function () {
        if ($('.mobileSideBar').hasClass('hidden')) {
            $('.mobileSideBar').removeClass('hidden').hide().fadeIn(500);
            $('.backGroundShadow').removeClass('hidden').hide().fadeIn(500);
        } else {
            $('.mobileSideBar').fadeOut(500).addClass('hidden');
            $('.backGroundShadow').fadeOut(500).addClass('hidden');
        }
    });
    $('.backGroundShadow').click(function () {
        if ($('.mobileSideBar').hasClass('hidden')) {
            $('.mobileSideBar').removeClass('hidden').hide().fadeIn(500);
            $('.backGroundShadow').removeClass('hidden').hide().fadeIn(500);
        } else {
            $('.mobileSideBar').fadeOut(500).addClass('hidden');
            $('.backGroundShadow').fadeOut(500).addClass('hidden');
        }
    });
}

const handleBgGradientToR = () => {
    const bgGradientFromAndTo = ['from-sky-500 to-indigo-500', 'from-cyan-500 to-blue-500', 'from-violet-500 to-fuchsia-500', 'from-purple-500 to-pink-500']
    setInterval(() => {
        const random = Math.floor(Math.random() * bgGradientFromAndTo.length);
        const bgGradient = bgGradientFromAndTo[random];
        var from = $(".largeProfileImage").attr('class').split(' ').find(c => c.startsWith('from'));
        var to = $(".largeProfileImage").attr('class').split(' ').find(c => c.startsWith('to'));
        $(".largeProfileImage").removeClass(from).removeClass(to);
        $(".largeProfileImage").addClass(bgGradient);
    }, 1000);
}

const handleTypeWriter = () => {

    var app = document.getElementById('designationTypeWriter');

    var typewriter = new Typewriter(app, {
        loop: true,
        typingSpeed: 100,
        deleteSpeed: 100,
        delay: 100,
        cursor: '|',
        strings: ['Full Stack Developer', 'Professional Coder']

    });

    typewriter.typeString('Full Stack Developer')
        .pauseFor(2500)
        .deleteAll()
        .typeString('Professional Coder')
        .pauseFor(2500)
        .start();
}

