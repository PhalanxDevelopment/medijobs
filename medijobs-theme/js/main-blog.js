

if(localStorage.getItem('cookie_notifier')) {
    var el = document.getElementById('cookie_notifier');
    el.className = 'cookie_notifier dismissed';
}

document.getElementById('dismiss').onclick = function() {
    var el = document.getElementById('cookie_notifier');
    el.className = 'cookie_notifier dismissed';
    localStorage.setItem('cookie_notifier','dismissed');
}

if(getWidth() > 1000) {
    var header = document.getElementById("header");
    var headerClass = header.className;
    var lastScrollTop = 0;
    window.addEventListener("scroll", function(e) {
        var form = document.getElementById("form");
        if( window.scrollY > 130) {
            header.className = headerClass + ' shadow';
        } else {
            header.className = headerClass;
        }
    });
}
function getWidth() {
    return Math.max(
        document.body.scrollWidth,
        document.documentElement.scrollWidth,
        document.body.offsetWidth,
        document.documentElement.offsetWidth,
        document.documentElement.clientWidth
        );
}
