(function () {
    window.onscroll = function () {
        var header_navbar = document.querySelector(".WebPageHeader-area");
        var sticky = header_navbar.offsetTop;
        if (window.pageYOffset > sticky) {
            header_navbar.classList.add("sticky");
        } else {
            header_navbar.classList.remove("sticky");
        }
        var backToTo = document.querySelector(".SiteScroll-top");
        if (document.body.scrollTop > 50 || document.documentElement.scrollTop > 50) {
            backToTo.style.display = "flex";
        } else {
            backToTo.style.display = "none";
        }
    };
    let navbarToggler = document.querySelector(".WebPageHeader-mobile");
    navbarToggler.addEventListener('click', function () {
        navbarToggler.classList.toggle("active");
    });
})();

