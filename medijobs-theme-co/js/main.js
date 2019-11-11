var x, i, j, selElmnt, a, b, c;
/*look for any elements with the class "mj-select":*/
x = document.getElementsByClassName("mj-select");
for (i = 0; i < x.length; i++) {
    selElmnt = x[i].getElementsByTagName("select")[0];
    /*for each element, create a new DIV that will act as the selected item:*/
    a = document.createElement("DIV");
    a.setAttribute("class", "select-selected");
    a.innerHTML = selElmnt.options[selElmnt.selectedIndex].innerHTML;
    x[i].appendChild(a);
    /*for each element, create a new DIV that will contain the option list:*/
    b = document.createElement("DIV");
    b.setAttribute("class", "select-items select-hide");
    for (j = 1; j < selElmnt.length; j++) {
        /*for each option in the original select element,
        create a new DIV that will act as an option item:*/
        c = document.createElement("DIV");
        c.innerHTML = selElmnt.options[j].innerHTML;
        c.addEventListener("click", function(e) {
            /*when an item is clicked, update the original select box,
            and the selected item:*/
            var y, i, k, s, h;
            s = this.parentNode.parentNode.getElementsByTagName("select")[0];
            h = this.parentNode.previousSibling;
            for (i = 0; i < s.length; i++) {
                if (s.options[i].innerHTML == this.innerHTML) {
                    s.selectedIndex = i;
                    h.innerHTML = this.innerHTML;
                    y = this.parentNode.getElementsByClassName("same-as-selected");
                    for (k = 0; k < y.length; k++) {
                        y[k].removeAttribute("class");
                    }
                    this.setAttribute("class", "same-as-selected");
                    break;
                }
            }
            h.click();
        });
        b.appendChild(c);
    }
    x[i].appendChild(b);
    a.addEventListener("click", function(e) {
        /*when the select box is clicked, close any other select boxes,
        and open/close the current select box:*/
        e.stopPropagation();
        closeAllSelect(this);
        this.nextSibling.classList.toggle("select-hide");
        this.classList.toggle("select-arrow-active");
    });
}
function closeAllSelect(elmnt) {
    /*a function that will close all select boxes in the document,
    except the current select box:*/
    var x, y, i, arrNo = [];
    x = document.getElementsByClassName("select-items");
    y = document.getElementsByClassName("select-selected");
    for (i = 0; i < y.length; i++) {
        if (elmnt == y[i]) {
            arrNo.push(i)
        } else {
            y[i].classList.remove("select-arrow-active");
        }
    }
    for (i = 0; i < x.length; i++) {
        if (arrNo.indexOf(i)) {
            x[i].classList.add("select-hide");
        }
    }
}
/*if the user clicks anywhere outside the select box,
then close all select boxes:*/
document.addEventListener("click", closeAllSelect);

document.getElementById('langSwitcher').onclick = function(ev) {
    
    var className = ' ' + langSwitcher.className + ' ';
    
    if ( ~className.indexOf(' open ') ) {
        this.className = className.replace(' open ', ' ');
    } else {
        this.className += ' open';
    }
    ev.stopPropagation();         
}

if(localStorage.getItem('cookie_notifier')) {
    var el = document.getElementById('cookie_notifier');
    el.className = 'cookie_notifier dismissed';
}

document.getElementById('dismiss').onclick = function() {
    var el = document.getElementById('cookie_notifier');
    el.className = 'cookie_notifier dismissed';
    localStorage.setItem('cookie_notifier','dismissed');
}
document.getElementById('body').onclick = function() {
    var el = document.getElementById('langSwitcher');
    if (el.className.indexOf(' open ')) {
        el.className = 'mj-lang-switcher btn-group';
    }
}
document.getElementById('close-form').onclick = function() {
    var el = document.getElementById('form');
    if (el.className.indexOf('open')) {
        el.className = el.className.replace('open','');
    } 
}
document.getElementById('open-form').onclick = function() {
    var el = document.getElementById('form');
    el.className = el.className + ' open'
}

document.getElementById('ql_section_1').onclick = function() {
    document.getElementById("section_1").scrollIntoView({ 
        behavior: 'smooth' 
    });
}
document.getElementById('ql_section_2').onclick = function() {
    document.getElementById("section_2").scrollIntoView({ 
        behavior: 'smooth' 
    });
}
document.getElementById('ql_section_3').onclick = function() {
    document.getElementById("section_3").scrollIntoView({ 
        behavior: 'smooth' 
    });
}
document.getElementById('ql_section_4').onclick = function() {
    document.getElementById("section_4").scrollIntoView({ 
        behavior: 'smooth' 
    });
}

document.getElementById('ql_section_6').onclick = function() {
    document.getElementById("section_6").scrollIntoView({ 
        behavior: 'smooth' 
    });
}
document.getElementById('ql_section_7').onclick = function() {
    document.getElementById("section_7").scrollIntoView({ 
        behavior: 'smooth' 
    });
}



if(getWidth() > 1000) {
    var lastScrollTop = 0;
    window.addEventListener("scroll", function(e) {
        var header = document.getElementById("header");
        var form = document.getElementById("form");
        if( window.scrollY > 130) {
            header.className = 'mj-header shadow';
        } else {
            header.className = 'mj-header';
        }
        if( window.scrollY > 6400) {
            form.className = 'mj-register_form mj-form absolute';
        } else {
            form.className = 'mj-register_form mj-form ';
        }
        var section_1 = document.getElementById("section_1");
        var el_section_1 = document.getElementById('ql_section_1');
        var section_2 = document.getElementById("section_2");
        var el_section_2 = document.getElementById('ql_section_2');
        
        var section_3 = document.getElementById("section_3");
        var el_section_3 = document.getElementById('ql_section_3');
        
        var section_4 = document.getElementById("section_4");
        var el_section_4 = document.getElementById('ql_section_4');
        
        var section_5 = document.getElementById("section_5");
        var el_section_5 = document.getElementById('ql_section_5');
        
        var section_6 = document.getElementById("section_6");
        var el_section_6 = document.getElementById('ql_section_6');
        
        var section_7 = document.getElementById("section_7");
        var el_section_7 = document.getElementById('ql_section_7');
        
        var section_9 = document.getElementById("section_9");
        var el_section_9 = document.getElementById('ql_section_9');
        
        var section_10 = document.getElementById("section_10");
        var el_section_10 = document.getElementById('ql_section_10');
        
        if (window.scrollY > (section_1.offsetTop - 250) && window.scrollY + 96  <= (section_2.offsetTop )) {
            el_section_1.className = el_section_1.className + ' active';
        } else {
            el_section_1.className = 'quick_link';
        }
        
        
        if (window.scrollY + 96 > (section_2.offsetTop - 30) && window.scrollY + 96  <= (section_3.offsetTop )) {
            el_section_2.className = el_section_2.className + ' active';
        } else {
            el_section_2.className = 'quick_link';
        }
        
        if (window.scrollY + 96 > (section_3.offsetTop - 30) && window.scrollY + 96  <= (section_4.offsetTop )) {
            el_section_3.className = el_section_3.className + ' active';
        } else {
            el_section_3.className = 'quick_link';
        }
        
        if (window.scrollY + 96 > (section_4.offsetTop - 30) && window.scrollY + 96  <= (section_6.offsetTop )) {
            el_section_4.className = el_section_4.className + ' active';
        } else {
            el_section_4.className = 'quick_link';
        }
        
        if (window.scrollY + 96 > (section_6.offsetTop - 30) && window.scrollY + 96  <= (section_7.offsetTop )) {
            el_section_6.className = el_section_6.className + ' active';
        } else {
            el_section_6.className = 'quick_link';
        }
        
        if (window.scrollY + 96 > (section_7.offsetTop - 30) && window.scrollY + 96  <= (section_9.offsetTop )) {
            el_section_7.className = el_section_7.className + ' active';
            // if( window.scrollY + 96 > (section_7.offsetTop  + 200 )) {
            //     var st = window.pageYOffset || document.documentElement.scrollTop; // Credits: "https://github.com/qeremy/so/blob/master/so.dom.js#L426"
            //     var step = 1;
            //     var step1 = document.getElementById('step_1');
            //     var step2 = document.getElementById('step_2');
            //     var step3 = document.getElementById('step_3');
            //     var step4 = document.getElementById('step_4');
            //     if (st > lastScrollTop){
            //         var el = document.getElementById('body');
            //         el.className = el.className + ' noScroll';
            //         var isMoving=false;
            //         function handleWheelEvent() {
            //             if (isMoving) return;
            //             moveSteps();
            //         }
            //         document.addEventListener("wheel", handleWheelEvent, true);
            //         function moveSteps() {
            //             isMoving = true;
            //             if (step === 1) {
            //                 step1.className = 'mj-step';
            //                 step2.className = 'mj-step active';    
            //             }
            //             if (step === 2) {
            //                 step2.className = 'mj-step';
            //                 step3.className = 'mj-step active';    
            //             }
                        
            //             if (step === 3) {
            //                 step3.className = 'mj-step';
            //                 step4.className = 'mj-step active';    
            //             }
            //             if (step === 4) {
            //                 step4.className = 'mj-step';
            //                 step1.className = 'mj-step active';  
            //                 document.getElementById("section_9").scrollIntoView({ 
            //                     behavior: 'smooth' 
            //                 });
            //                 document.removeEventListener("wheel", handleWheelEvent, true);
            //             }
            //             setTimeout(function() {
            //                 isMoving=false;
            //                 step++;
            //                 if (step > 4) {
            //                     el.className = ' '; 
            //                     document.removeEventListener("wheel", handleWheelEvent, true);
            //                 }
            //             }, 2000);
            //         }
            //     } else {
            //         step = 1;
            //         step4.className = 'mj-step';
            //         step1.className = 'mj-step active';  
            //         document.removeEventListener("wheel", handleWheelEvent, true);
            //     }
            // }
            
        } else {
            el_section_7.className = 'quick_link';
        }
        
        
        if (window.scrollY + 96 > (section_9.offsetTop - 30) && window.scrollY + 96 < (section_9.offsetTop + section_9.offsetHeight )) {
            el_section_9.className = el_section_9.className + ' active';
        } else {
            el_section_9.className = 'quick_link';
        }
        lastScrollTop = st <= 0 ? 0 : st; // For Mobile or negative scrolling
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
    
const Http = new XMLHttpRequest();
const url='https://app.medijobs.ro/api/stats';
Http.open("GET", url);
Http.send();

Http.onreadystatechange = (e) => {
    console.log(Http.responseText)
}