window.toggleFaq = function (btn) {
    const item = btn.closest(".faq-item");
    const isOpen = item.classList.contains("is-open");

    // close all
    document
        .querySelectorAll(".faq-item.is-open")
        .forEach((el) => el.classList.remove("is-open"));

    if (!isOpen) {
        item.classList.add("is-open");

        // update main image on left with crossfade
        const mainImg = document.getElementById("faqMainImg");
        const imgBadgeIcon = document.querySelector(".faq-img-badge-icon");
        const imgBadgeText = document.querySelector(
            ".faq-img-badge-text strong",
        );

        const newImg = item.dataset.img;
        const newIcon = item.dataset.badgeIcon;
        const newText = item.dataset.badgeText;

        if (newImg) {
            mainImg.style.opacity = "0";
            mainImg.style.transform = "scale(1.04)";
            mainImg.style.transition = "opacity 0.4s ease, transform 0.6s ease";

            setTimeout(() => {
                mainImg.src = newImg;
                mainImg.onload = () => {
                    mainImg.style.opacity = "1";
                    mainImg.style.transform = "scale(1)";
                };
            }, 200);
        }

        if (newIcon) imgBadgeIcon.textContent = newIcon;
        if (newText) imgBadgeText.textContent = newText;
    }
};
