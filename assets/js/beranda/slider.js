document.addEventListener("DOMContentLoaded", function () {
    let currentBanner = 0;
    const banners = document.querySelectorAll(".banner");

    function showBanner(index) {
        banners.forEach((banner, i) => {
            if (i === index) {
                banner.style.display = "block";
            } else {
                banner.style.display = "none";
            }
        });
    }

    function nextBanner() {
        currentBanner = (currentBanner + 1) % banners.length;
        showBanner(currentBanner);
    }

    setInterval(nextBanner, 5000);

    showBanner(currentBanner);
});
