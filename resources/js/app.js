import { CountUp } from 'countup.js';

document.addEventListener('DOMContentLoaded', () => {
    
    const options = {
        decimalPlaces: 0, // No decimal places
        separator: ',',   // Add comma as a thousand separator
        duration: 4,      // Speed (duration in seconds)
        useEasing: true,  // Easing function for smooth counting
    };
    // Initializing the count-up animations
    const studentsCountUp = new CountUp('students', 2812, options);
    const nationalitiesCountUp = new CountUp('nationalities', 127, options);
    const unitsCountUp = new CountUp('units', 14, options);
    const professorsCountUp = new CountUp('professors', 379, options);

    // Start the animations
    studentsCountUp.start();
    nationalitiesCountUp.start();
    unitsCountUp.start();
    professorsCountUp.start();
});

document.addEventListener("DOMContentLoaded", function () {
    var header = document.querySelector("header");
    // var body = document.getElementById("carouselExampleFade");
    var prevScrollPos = window.pageYOffset;

    window.addEventListener("scroll", function () {
        var currentScrollPos = window.pageYOffset;

        if (prevScrollPos > currentScrollPos) {
            header.classList.remove("sticky");
            // body.style.marginTop = "0";
        } else {
            header.classList.add("sticky");
            // body.style.marginTop = "155px";
        }
        prevScrollPos = currentScrollPos;
    });
});
