if( window.scrollY + 96 > (section_7.offsetTop  + 200 )) {
    var st = window.pageYOffset || document.documentElement.scrollTop; // Credits: "https://github.com/qeremy/so/blob/master/so.dom.js#L426"
    var step = 1;
    var icon = document.getElementById('section_icon');
    var step1 = document.getElementById('step_1');
    var step2 = document.getElementById('step_2');
    var step3 = document.getElementById('step_3');
    var step4 = document.getElementById('step_4');
    if (st > lastScrollTop){
        var el = document.getElementById('body');
        el.className = el.className + ' noScroll';
        var isMoving=false;
        function handleWheelEvent() {
            if (isMoving) return;
            moveSteps();
        }
        document.addEventListener("wheel", handleWheelEvent, true);
        function moveSteps() {
            isMoving = true;
            if (step === 1) {
                step1.className = 'mj-step';
                step2.className = 'mj-step active';   
                icon.className = 'section_icon step_2 hide-on-mobile'; 
            }
            if (step === 2) {
                step2.className = 'mj-step';
                step3.className = 'mj-step active';  
                icon.className = 'section_icon step_3 hide-on-mobile';  
            }
            
            if (step === 3) {
                step3.className = 'mj-step';
                step4.className = 'mj-step active';    
                icon.className = 'section_icon step_4 hide-on-mobile';
            }
            if (step === 4) {
                step4.className = 'mj-step';
                step1.className = 'mj-step active';  
                icon.className = 'section_icon step_1 hide-on-mobile';
                if (isMoving === true) {
                    document.getElementById("section_8").scrollIntoView({ 
                        behavior: 'smooth' 
                    });
                }
                document.removeEventListener("wheel", handleWheelEvent, true);
            }
            setTimeout(function() {
                isMoving=false;
                step++;
                if (step > 4) {
                    el.className = ' '; 
                    document.removeEventListener("wheel", handleWheelEvent, true);
                }
            }, 1000);
        }
    } else {
        step = 1;
        step4.className = 'mj-step';
        step1.className = 'mj-step active'; 
        icon.className = 'section_icon step_1 hide-on-mobile'; 
        document.removeEventListener("wheel", handleWheelEvent, true);
    }
}