<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1" />
  <title>Testimonials - Infinite Loop Slider</title>

  <style>
    /* ========== Your ORIGINAL Styles (kept as close as possible) ========== */

    /* ===================================
       CLIENT TESTIMONIAL SECTION - FULLY RESPONSIVE
       =================================== */

    .client-testimonial-section {
      background: linear-gradient(135deg, #E3F2F7 0%, #D0E8F0 100%);
      padding: 80px 0;
      position: relative;
    font-family: 'Montserrat';
    }

    .testimonial-viewport {
      max-width: 1800px;
      margin: 0 auto;
      padding: 0 0;
      overflow: hidden; /* viewport hides overflow for sliding */
    }

    /* Track (flex row of slides) */
    .testimonial-track {
      display: flex;
      transition: transform 0.6s ease-in-out;
      will-change: transform;
    }

    /* Each slide (use same .testimonial-card structure) */
  /* FIX: Prevent overlapping text */
.testimonial-card {
  overflow: hidden !important;
  position: relative;
  background: linear-gradient(135deg, #E3F2F7 0%, #D0E8F0 100%);
}


    /* Left Side - Logo Card */
    .testimonial-left {
      flex: 0 0 380px;
    }

    .company-logo {
      width: 100%;
      height: auto;
      padding: 0px 35px;
      object-fit: contain;
      max-height: 275px;
      display: block;
    }

    /* Right Side - Testimonial Text */
    .testimonial-right {
      flex: 1;
      display: flex;
      flex-direction: column;
      justify-content: space-between;
      padding-top: 10px;
    }

    .testimonial-text {
    font-family: 'Montserrat';
      font-size: 1.05rem;
      color: #000000;
      line-height: 1.9;
      margin: 0 0 40px 0;
      font-weight: 400;
      text-align: justify;
    }

    /* Pagination Dots (bars) */
    .testimonial-pagination {
      display: flex;
      gap: 10px;
      align-items: center;
      justify-content: center;
      padding-top: 10px;
    }

    .dot {
      width: 50px;
      height: 4px;
      background: #C0D4DD;
      border-radius: 2px;
      cursor: pointer;
      transition: all 0.3s ease;
    }

    .dot.active {
      background: #4A9DBF;
      width: 70px;
    }

    .dot:hover {
      background: #6BB3D0;
      transform: scaleY(1.2);
    }

    /* Responsive rules kept (trimmed to important ones) */
    @media (max-width: 1400px) {
      .testimonial-viewport { padding: 0 80px; }
      .testimonial-card { gap: 50px; }
      .testimonial-left { flex: 0 0 350px; }
      .company-logo { padding: 45px 35px; max-height: 160px; }
      .testimonial-text { font-size: 1.02rem; }
    }

    @media (max-width: 1200px) {
      .testimonial-viewport { padding: 0 60px; }
      .testimonial-card { gap: 40px; }
      .testimonial-left { flex: 0 0 320px; }
      .company-logo { padding: 40px 30px; max-height: 150px; }
      .testimonial-text { font-size: 1rem; line-height: 1.85; }
    }

    @media (max-width: 992px) {
      .client-testimonial-section { padding: 70px 0; }
      .testimonial-viewport { padding: 0 50px; }
      .testimonial-card { flex-direction: column; gap: 40px; align-items: center; }
      .testimonial-left { flex: 0 0 auto; width: 100%; max-width: 400px; }
      .company-logo { padding: 50px 40px; max-height: 160px; }
      .testimonial-text { text-align: left; margin-bottom: 35px; }
    }

    @media (max-width: 768px) {
      .client-testimonial-section { padding: 60px 0; }
      .testimonial-viewport { padding: 0 30px; }
      .testimonial-card { gap: 35px; }
      .company-logo { padding: 40px 30px; max-height: 140px; }
      .testimonial-text { font-size: 0.98rem; line-height: 1.8; margin-bottom: 30px; }
      .dot { width: 40px; height: 3px; }
      .dot.active { width: 60px; }
    }

    @media (max-width: 640px) {
      .client-testimonial-section { padding: 50px 0; }
      .testimonial-viewport { padding: 0 25px; }
      .company-logo { padding: 35px 25px; max-height: 120px; }
      .testimonial-text { font-size: 0.95rem; line-height: 1.75; margin-bottom: 28px; }
    }

    @media (max-width: 480px) {
      .client-testimonial-section { padding: 40px 0; }
      .testimonial-viewport { padding: 0 20px; }
      .company-logo { padding: 30px 20px; max-height: 110px; }
      .testimonial-text { font-size: 0.92rem; line-height: 1.7; margin-bottom: 25px; }
      .dot { width: 35px; height: 3px; }
      .dot.active { width: 50px; }
    }

  </style>
</head>
<body>

  <!-- CLIENT TESTIMONIAL SECTION -->
  <section class="client-testimonial-section">
    <div class="testimonial-viewport" id="testimonial-viewport">

      <!-- TRACK: slides will be appended here (originals + clones) -->
      <div class="testimonial-track" id="testimonial-track">

        <!-- Slide 1 -->
        <div class="testimonial-card" data-index="0">
          <div class="testimonial-left">
            <div class="company-logo-card">
              <img src="assets/images/wipro_logo.png" alt="Wipro Logo" class="company-logo">
            </div>
          </div>

          <div class="testimonial-right">
            <p class="testimonial-text">
              ProHance bridges this gap by providing visibility into how employees spend their time each day, 
              helping us strengthen our culture of continuous improvement by eliminating hidden inefficiencies. 
              At the same time, it supports employee well-being through better workload balancing and the ability 
              to proactively identify employees who need assistance (workload analysis). The real-time view enables 
              timely interventions when needed. ProHance has now been well-adopted within the organization and has 
              become our day-to-day partner.
            </p>
          </div>
        </div>

        <!-- Slide 2 -->
        <div class="testimonial-card" data-index="1">
          <div class="testimonial-left">
            <div class="company-logo-card">
              <img src="assets/images/wipro_logo.png" alt="TCS Logo" class="company-logo">
            </div>
          </div>

          <div class="testimonial-right">
            <p class="testimonial-text">
              ProHance helps us identify workload distribution issues and improve employee well-being
              through data-driven insights and balanced work planning. The dashboard and alerts make it very
              easy for managers to take timely action.
            </p>
          </div>
        </div>

        <!-- Slide 3 -->
        <div class="testimonial-card" data-index="2">
          <div class="testimonial-left">
            <div class="company-logo-card">
              <img src="assets/images/wipro_logo.png" alt="Infosys Logo" class="company-logo">
            </div>
          </div>

          <div class="testimonial-right">
            <p class="testimonial-text">
              The real-time visibility offered by ProHance has improved decision-making and allowed us
              to eliminate hidden inefficiencies. We can now measure impact of process changes quickly.
            </p>
          </div>
        </div>

        <!-- End initial slides -->
      </div>

      <!-- Pagination Dots -->
      <div class="testimonial-pagination" id="testimonial-dots" aria-hidden="false">
        <div class="dot active" data-dot="0" role="button" tabindex="0"></div>
        <div class="dot" data-dot="1" role="button" tabindex="0"></div>
        <div class="dot" data-dot="2" role="button" tabindex="0"></div>
      </div>

    </div>
  </section>

  <script>
    /**
     * Infinite slider with clones (single-file).
     * Auto-advance every 3 seconds. Pause on hover. Dots sync + clickable.
     *
     * Assumptions:
     * - There are 3 original slides inside #testimonial-track initially.
     * - Images referenced by src must exist at specified paths.
     */

    (function () {
      const track = document.getElementById('testimonial-track');
      const viewport = document.getElementById('testimonial-viewport');
      const dotsContainer = document.getElementById('testimonial-dots');
      const dots = Array.from(dotsContainer.querySelectorAll('.dot'));

      // Read initial slides
      const slides = Array.from(track.children);
      const originalCount = slides.length;

      // Clone last and first to create infinite loop
      const firstClone = slides[0].cloneNode(true);
      const lastClone = slides[slides.length - 1].cloneNode(true);

      // mark clones (optional)
      firstClone.classList.add('clone');
      lastClone.classList.add('clone');

      // append and prepend clones to track
      track.appendChild(firstClone);
      track.insertBefore(lastClone, track.firstChild);

      // Now track children: [lastClone, slide0, slide1, slide2, firstClone]
      let allSlides = Array.from(track.children);

      // Function to set each slide width to match viewport width
      function setSlideWidths() {
        const viewportWidth = viewport.clientWidth;
        allSlides.forEach(slide => {
          slide.style.width = viewportWidth + 'px';
        });
        // Set track width accordingly
        track.style.width = (allSlides.length * viewport.clientWidth) + 'px';
      }

      // Initial sizing
      setSlideWidths();

      // Recalculate on resize
      window.addEventListener('resize', () => {
        setSlideWidths();
        // adjust transform to the current index after resize
        moveToIndex(currentIndex, false);
      });

      // Start at index 1 (because 0 is lastClone)
      let currentIndex = 1;
      let isAnimating = false;
      const slideCount = originalCount; // 3 in your case
      const autoplayDelay = 3000;
      let autoplayTimer = null;

      // Move track to index (with transition)
      function moveToIndex(index, withTransition = true) {
        const width = viewport.clientWidth;
        if (withTransition) {
          track.style.transition = 'transform 0.3s ease-in-out';
        } else {
          track.style.transition = 'none';
        }
        const offset = -index * width;
        track.style.transform = `translateX(${offset}px)`;
      }

      // Jump (no transition) to specific index, used for clone boundary jump
      function jumpToIndex(index) {
        currentIndex = index;
        moveToIndex(currentIndex, false);
      }

      // Update dots (map visible slide to original index 0..2)
      function updateDotsByCurrentIndex() {
        // visible originals are at indices 1..slideCount
        let visibleOriginalIndex = (currentIndex - 1);
        if (visibleOriginalIndex < 0) visibleOriginalIndex = slideCount - 1;
        if (visibleOriginalIndex >= slideCount) visibleOriginalIndex = 0;
        dots.forEach(d => d.classList.remove('active'));
        const dotToActivate = dots[visibleOriginalIndex];
        if (dotToActivate) dotToActivate.classList.add('active');
      }

      // Advance to next slide
      function nextSlide() {
        if (isAnimating) return;
        isAnimating = true;
        currentIndex++;
        moveToIndex(currentIndex, true);
      }

      // Go to prev slide (not required but handy)
      function prevSlide() {
        if (isAnimating) return;
        isAnimating = true;
        currentIndex--;
        moveToIndex(currentIndex, true);
      }

      // Hook transitionend to manage clones
      track.addEventListener('transitionend', () => {
        isAnimating = false;
        // If we moved to firstClone (which is at index slideCount + 1)
        if (currentIndex === slideCount + 1) {
          // jump to real first slide (index 1)
          jumpToIndex(1);
        }
        // If we moved to lastClone (index 0)
        if (currentIndex === 0) {
          // jump to real last slide (index slideCount)
          jumpToIndex(slideCount);
        }
        updateDotsByCurrentIndex();
      });

      // Dots click handling
      dots.forEach(dot => {
        dot.addEventListener('click', () => {
          const dotIndex = Number(dot.getAttribute('data-dot')); // 0..2
          // Move to dotIndex -> that corresponds to currentIndex = dotIndex + 1
          currentIndex = dotIndex + 1;
          moveToIndex(currentIndex, true);
          resetAutoplay();
        });

        // keyboard accessible
        dot.addEventListener('keydown', (e) => {
          if (e.key === 'Enter' || e.key === ' ') {
            e.preventDefault();
            dot.click();
          }
        });
      });

      // Autoplay
      function startAutoplay() {
        stopAutoplay();
        autoplayTimer = setInterval(() => {
          nextSlide();
        }, autoplayDelay);
      }

      function stopAutoplay() {
        if (autoplayTimer) {
          clearInterval(autoplayTimer);
          autoplayTimer = null;
        }
      }

      function resetAutoplay() {
        stopAutoplay();
        startAutoplay();
      }

      // Pause on hover
      viewport.addEventListener('mouseenter', stopAutoplay);
      viewport.addEventListener('mouseleave', startAutoplay);

      // Initialize position (jump to index 1 so first real slide visible)
      jumpToIndex(1);
      updateDotsByCurrentIndex();
      startAutoplay();

      // expose some helper methods to window for debugging (optional)
      window._testimonial = {
        next: nextSlide,
        prev: prevSlide,
        goTo: (i) => { currentIndex = i + 1; moveToIndex(currentIndex, true); resetAutoplay(); }
      };
    })();
  </script>

</body>
</html>
