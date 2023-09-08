
function incrementCounter(id, endValue) {
    let currentCount = 0;
    const element = document.getElementById(id);
    const interval = setInterval(function () {
        if (currentCount >= endValue) {
            clearInterval(interval);
        } else {
            currentCount++;
            element.textContent = currentCount + "+";
        }
    }, 10);
}
incrementCounter("successCount", 560);
incrementCounter("tutorsCount", 750);
incrementCounter("scheduledCount", 710);
incrementCounter("coursesCount", 640);


function ScrollToTop() {
    window.scrollTo({
        top: 0,
        behavior: "smooth"
    });
}