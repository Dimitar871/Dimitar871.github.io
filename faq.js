

document.addEventListener("DOMContentLoaded", function () {
    const faqItems = document.querySelectorAll(".faq-question");

    faqItems.forEach(item => {
        item.addEventListener("click", function () {
            const answer = this.nextElementSibling;
            if (answer.style.maxHeight) {
                answer.style.maxHeight = null;  // Collapses the answer
            } else {
                answer.style.maxHeight = answer.scrollHeight + "px";  // Expands the answer
            }
        });
    });
});