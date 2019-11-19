

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


var quiz_step = 1;

document.getElementById('close_quiz').onclick = function() {
    var article_quiz =  document.getElementById("article_quiz");
    article_quiz.className = 'article_quiz dismissed';
}
document.getElementById('prev_step').onclick = function() {
    if (quiz_step > 1) {
        var step =  document.getElementById("quiz_step_"+ quiz_step);
        step.className = 'step';
        quiz_step--;
        var next_step =  document.getElementById("quiz_step_"+ quiz_step);
        next_step.className = 'step active';
    }
}

document.getElementById('skip').onclick = function() {
    var step =  document.getElementById("quiz_step_"+ quiz_step);
    step.className = 'step';
    quiz_step++;
    if (quiz_step < 6) {
        var next_step =  document.getElementById("quiz_step_"+ quiz_step);
        next_step.className = 'step active';
    } else {
        var article_quiz =  document.getElementById("article_quiz");
        article_quiz.className = 'article_quiz dismissed';
    }
}

document.getElementById('next_step').onclick = function() {
    var step =  document.getElementById("quiz_step_"+ quiz_step);
    step.className = 'step';
    quiz_step++;
    if (quiz_step < 6) {
        var next_step =  document.getElementById("quiz_step_"+ quiz_step);
        next_step.className = 'step active';
    } else {
        var article_quiz =  document.getElementById("article_quiz");
        article_quiz.className = 'article_quiz dismissed';
    }
}