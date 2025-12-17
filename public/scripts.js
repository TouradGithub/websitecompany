
    let currentSlide = 0;
    const heroSlides = document.querySelectorAll('.hero-slide');
    const indicators = document.querySelectorAll('.hero-indicators .indicator');

    function showSlide(n) {
    heroSlides.forEach(slide => slide.classList.remove('active'));
    indicators.forEach(ind => ind.classList.remove('active'));

    if (n >= heroSlides.length) currentSlide = 0;
    if (n < 0) currentSlide = heroSlides.length - 1;

    heroSlides[currentSlide].classList.add('active');
    indicators[currentSlide].classList.add('active');
}

    function nextSlide() {
    currentSlide++;
    showSlide(currentSlide);
}

    // Auto slide every 6 seconds (matches the zoom animation duration)
    setInterval(nextSlide, 6000);

    // Indicator click
    indicators.forEach((indicator, index) => {
    indicator.addEventListener('click', () => {
        currentSlide = index;
        showSlide(currentSlide);
    });
});

    // Tabs functionality
    const tabs = document.querySelectorAll('.tab');
    const tabContents = document.querySelectorAll('.tab-content');

    tabs.forEach(tab => {
    tab.addEventListener('click', () => {
        const tabName = tab.dataset.tab;

        tabs.forEach(t => t.classList.remove('active'));
        tabContents.forEach(content => content.classList.remove('active'));

        tab.classList.add('active');
        document.querySelector(`[data-content="${tabName}"]`).classList.add('active');
    });
});

    // Gallery Slider
    let galleryIndex = 0;
    const sliderWrapper = document.querySelector('.slider-wrapper');
    const slides = document.querySelectorAll('.slide');
    const prevBtn = document.querySelector('.slider-nav.prev');
    const nextBtn = document.querySelector('.slider-nav.next');

    function updateGallery() {
    sliderWrapper.style.transform = `translateX(-${galleryIndex * 100}%)`;
}

    prevBtn.addEventListener('click', () => {
    galleryIndex = (galleryIndex - 1 + slides.length) % slides.length;
    updateGallery();
});

    nextBtn.addEventListener('click', () => {
    galleryIndex = (galleryIndex + 1) % slides.length;
    updateGallery();
});

    // Auto slide gallery
    setInterval(() => {
    galleryIndex = (galleryIndex + 1) % slides.length;
    updateGallery();
}, 4000);

    // Testimonials Slider
    let testimonialIndex = 0;
    const testimonials = document.querySelectorAll('.testimonial');

    function showTestimonial() {
    testimonials.forEach(t => t.classList.remove('active'));
    testimonials[testimonialIndex].classList.add('active');
    testimonialIndex = (testimonialIndex + 1) % testimonials.length;
}

    setInterval(showTestimonial, 6000);

    // Contact Form Handler

