
           document.addEventListener("DOMContentLoaded",function(){
    const slides = document.getElementById("slides");
    const totalSlides = slides.children.length;
    let index = 0;

    function showSlide(i) {
        index = (i + totalSlides) % totalSlides;
        slides.style.transform = `translateX(-${index * 100}%)`;
    }
    function nextSlide() {
        showSlide(index + 1);
    }
    function prevSlide() {
        showSlide(index - 1);
    }

    // Attach event listeners to navigation buttons
    const prevBtn = document.getElementById("prevBtn");
    const nextBtn = document.getElementById("nextBtn");
    if (prevBtn && nextBtn) {
        prevBtn.addEventListener("click", prevSlide);
        nextBtn.addEventListener("click", nextSlide);
    }

    // Auto slide every 4 seconds
    setInterval(() => {
        nextSlide();
    }, 4000);

    // Initialize first slide
    showSlide(index);

    console.log("Carousel script running");
});
