const mobileScreen = window.matchMedia("(max-width: 990px )");
$(document).ready(function () {
    $(".menu-toggle").click(function () {
        if (mobileScreen.matches) {
            $(".dashboard-nav").toggleClass("mobile-show");
        } else {
            $(".dashboard").toggleClass("dashboard-compact");
        }
    });
});

function toggleHamburger(x) {
    if (x.innerHTML == "menu") {
        x.innerHTML = "arrow_back_ios"
    } else {
        x.innerHTML = "menu"
    }
}

