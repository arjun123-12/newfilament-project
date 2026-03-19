// Sticky header scroll effect
let lastScroll = 0;

window.addEventListener("scroll", () => {
    const header = document.querySelector(".site-header");
    const scrolled = window.scrollY > 50;

    header.classList.toggle("scrolled", scrolled);

    // Hide/show on scroll direction
    const currentScroll = window.scrollY;
    if (scrolled) {
        if (currentScroll > lastScroll && currentScroll > 200) {
            header.style.transform = "translateY(-100%)";
        } else {
            header.style.transform = "translateY(0)";
        }
    } else {
        header.style.transform = "translateY(0)";
    }
    lastScroll = currentScroll;
});

// Hamburger mobile menu
const hamburger = document.getElementById("hamburger");
const navMobile = document.getElementById("nav-mobile");

if (hamburger && navMobile) {
    hamburger.addEventListener("click", () => {
        hamburger.classList.toggle("open");
        navMobile.classList.toggle("open");
    });
}

// Close mobile menu on link click
document.querySelectorAll(".mob-link").forEach((link) => {
    link.addEventListener("click", () => {
        hamburger.classList.remove("open");
        navMobile.classList.remove("open");
    });
});

// Smooth scroll for anchor links
document.querySelectorAll('a[href^="#"]').forEach((anchor) => {
    anchor.addEventListener("click", (e) => {
        e.preventDefault();
        const target = document.querySelector(anchor.getAttribute("href"));
        if (target) {
            target.scrollIntoView({ behavior: "smooth", block: "start" });
        }
    });
});
