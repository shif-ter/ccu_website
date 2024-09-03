import { CountUp } from 'countup.js';

// COUNT UP
document.addEventListener('DOMContentLoaded', () => {
    
    const options = {
        decimalPlaces: 0, // No decimal places
        separator: ',',   // Add comma as a thousand separator
        duration: 5,      // Speed (duration in seconds)
        useEasing: true,  // Easing function for smooth counting
    };
    // Initializing the count-up animations
    const studentsCountUp = new CountUp('students', 2812, options);
    const nationalitiesCountUp = new CountUp('nationalities', 127, options);
    const unitsCountUp = new CountUp('units', 14, options);
    const professorsCountUp = new CountUp('professors', 379, options);

    // Function start count up
    const startCountUp = () => {
        studentsCountUp.start();
        nationalitiesCountUp.start();
        unitsCountUp.start();
        professorsCountUp.start();
    };

    const counterSection = document.querySelector('.counter');
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                startCountUp();
                observer.unobserve(counterSection);
            }
        })
    })
    observer.observe(counterSection);
});


// STICKY SCROLL

document.addEventListener("DOMContentLoaded", function () { 
    var header = document.querySelector("header");
    var body = document.getElementById("carouselExampleFade");
    var prevScrollPos = window.pageYOffset;

    window.addEventListener("scroll", function () {
        var currentScrollPos = window.pageYOffset;

        if (currentScrollPos <= 150) {
            header.style.position = "relative";
        } else {
            header.style.position = "fixed";
            header.style.top = "";
            if (prevScrollPos < currentScrollPos) {
                header.classList.remove("sticky");
            } else {
                header.classList.add("sticky");
            }
        }

        prevScrollPos = currentScrollPos;
    });
});



// CAROUSEL
document.addEventListener('DOMContentLoaded', function () {
    const nextButton = document.getElementById('nextButton');
    const prevButton = document.getElementById('prevButton');
    const carouselItems = document.querySelectorAll('.carousel-item .black-background');
    const btnContent = document.querySelectorAll('.animations .button-container .btn');
    const titleContent = document.querySelectorAll('.animations .title .text');
    const mainContent = document.querySelectorAll('.animations .main .text');

    nextButton.addEventListener('click', function () {
        carouselItems.forEach(item => {
            item.classList.remove('slide-right');
            item.classList.add('slide-left');
        });
        btnContent.classList.remove('move-bottom');
        btnContent.classList.add('move-top');

        titleContent.classList.remove('move-bottom');
        titleContent.classList.add('move-top');

        mainContent.classList.remove('move-bottom');
        mainContent.classList.add('move-top');
    });

    prevButton.addEventListener('click', function () {
        carouselItems.forEach(item => {
            item.classList.remove('slide-left');
            item.classList.add('slide-right');
        });
        mainContent.classList.add('move-bottom');
        mainContent.classList.remove('move-top');

        titleContent.classList.add('move-bottom');
        titleContent.classList.remove('move-top');

        btnContent.classList.add('move-bottom');
        btnContent.classList.remove('move-top');
    });
});
