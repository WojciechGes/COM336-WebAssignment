const scrollToTopBtn = document.querySelector("#scroll-to-top");

window.addEventListener("scroll", function(){
    if(window.pageYOffset > 20) {
        scrollToTopBtn.style.display = "block";
    } else {
        scrollToTopBtn.style.display = "none";
    }
});

scrollToTopBtn.addEventListener("click", function() {
    window.scrollTo({top: 0, behavior: "smooth"});
})