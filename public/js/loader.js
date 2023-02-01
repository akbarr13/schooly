const body = document.getElementsByTagName("body")[0];
if (/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent)) {
    // true for mobile device
    body.style.opacity = "0%";
} else {
    // false for not mobile device
    body.style.opacity = "100%"
}
const loader = document.querySelector(".loader");
const mainContent = document.querySelector(".main-content");

window.addEventListener("load", function () {
    setTimeout(function () {
        loader.style.display = "none";
        let i = 0;
        if (i <= 100) {
            setInterval(function () {
                i += 10;
                mainContent.style.opacity = `${i}%`;
            }, 30)
        }

    }, 1000);
});