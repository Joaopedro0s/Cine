  const config = {
    images: typeof imagesFromServer !== 'undefined' ? imagesFromServer : [],
    interval: 5000,
    transitionDuration: 0.8,
  };

  const carrossel = document.getElementById('carrossel');
  let currentSlide = 0;
  let slideInterval;

  function createSlides() {
    config.images.forEach((image, index) => {
      const slide = document.createElement('div');
      slide.className = 'carrossel-slide';
      slide.style.backgroundImage = `url('${image}')`;

      if (index === 0) {
        slide.classList.add('active');
      }

      carrossel.appendChild(slide);
    });
  }

  function createIndicators() {
    const indicatorsContainer = document.querySelector('.carrossel-indicators');
    config.images.forEach((_, index) => {
      const btn = document.createElement('button');
      btn.addEventListener('click', () => goToSlide(index));
      if (index === 0) btn.classList.add('active');
      indicatorsContainer.appendChild(btn);
    });
  }

  function updateSlides() {
    const slides = document.querySelectorAll('.carrossel-slide');
    const totalSlides = slides.length;

    slides.forEach((slide, index) => {
      slide.classList.remove('prev', 'active', 'next');

      let prevIndex = (currentSlide - 1 + totalSlides) % totalSlides;
      let nextIndex = (currentSlide + 1) % totalSlides;

      if (index === currentSlide) {
        slide.classList.add('active');
      } else if (index === nextIndex) {
        slide.classList.add('next');
      } else if (index === prevIndex) {
        slide.classList.add('prev');
      }
    });

    updateIndicators();
  }

  function updateIndicators() {
    const indicators = document.querySelectorAll('.carrossel-indicators button');
    indicators.forEach((btn, idx) => {
      btn.classList.toggle('active', idx === currentSlide);
    });
  }

  function goToSlide(index) {
    currentSlide = (index + config.images.length) % config.images.length;
    updateSlides();
    resetInterval();
  }

  function nextSlide() {
    currentSlide = (currentSlide + 1) % config.images.length;
    updateSlides();
  }

  function prevSlide() {
    currentSlide = (currentSlide - 1 + config.images.length) % config.images.length;
    updateSlides();
  }

  function startInterval() {
    slideInterval = setInterval(nextSlide, config.interval);
  }

  function resetInterval() {
    clearInterval(slideInterval);
    startInterval();
  }

  function initCarrossel() {
    if (config.images.length === 0) return;

    createSlides();
    createIndicators();
    startInterval();

    document.querySelector('.carrossel-controle.next').addEventListener('click', nextSlide);
    document.querySelector('.carrossel-controle.prev').addEventListener('click', prevSlide);

    carrossel.addEventListener('mouseenter', () => clearInterval(slideInterval));
    carrossel.addEventListener('mouseleave', startInterval);
  }

  document.addEventListener('DOMContentLoaded', initCarrossel);

  
