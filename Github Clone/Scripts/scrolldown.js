var lastScrollTop = 0;

window.addEventListener("scroll", () => { 
    var st = window.pageYOffset || document.documentElement.scrollTop; // Credits: "https://github.com/qeremy/so/blob/master/so.dom.js#L426"
 
    if (st > lastScrollTop) {
        //this.document.getElementById("repo").style.top = 0;
    }
    else if (st < lastScrollTop) {
         //this.document.getElementById("repo").style.top = 20;
    }
 
    lastScrollTop = st <= 0 ? 0 : st;
 }, false);  
