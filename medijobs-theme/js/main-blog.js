

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
if(document.getElementById('close_quiz')) {
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
    
            var cariera = document.querySelector('[name="step-1"]').value;
            var oras = document.querySelector('[name="oras"]').value;
            var aniExperienta = document.querySelector('[name="ani"]').value;
            var profesia = document.querySelector('[name="profesia"]').value;
            var checkboxes = document.getElementsByName('step-4[]');
            var aspecte = "";
            for (var i=0, n=checkboxes.length;i<n;i++) 
            {
                if (checkboxes[i].checked) 
                {
                    aspecte += ","+checkboxes[i].value;
                }
            }
            if (aspecte) aspecte = aspecte.substring(1);
            var email =  document.querySelector('[name="email"]').value;
    
            var payload = {
                cariera: cariera,
                oras: oras,
                ani_experienta: aniExperienta,
                profesia: profesia,
                aspecte: aspecte,
                email:email
            }
            console.log(payload);
    
        }
    }
}


var queue = [];
function checking(id){
   queue.push(id)
   if (queue.length === 4){
    queue[0].checked = false
    queue.shift()
   }
}