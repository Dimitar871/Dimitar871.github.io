function toggleAnswer(event) {
    const answer = event.currentTarget.nextElementSibling;
    answer.classList.toggle('hidden'); // Show the answer
    answer.classList.toggle('opacity-0'); // Start hidden
    answer.classList.toggle('opacity-100'); // Fully visible
    answer.classList.toggle('transition-opacity'); // Apply transition for opacity
    answer.classList.toggle('duration-500'); // Duration for the transition
}