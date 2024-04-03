function teamAlert() {
       alert("This page is upto date")
}
// custom cursor
new kursor({
       type: 1,
       color: '#B71347',
       removeDefaultCursor: true,
});
// sticky navbar 
window.onscroll = function() {stickey_navbar()}
let navbar = document.getElementById("navbar");

function stickey_navbar() {
       if (window.scrollY > 0) {
              navbar.classList.add("sticky")
       }else{
            navbar.classList.remove("sticky")  
       }
}