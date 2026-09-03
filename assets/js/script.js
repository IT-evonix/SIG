// Header Menu Start
const openBtn = document.querySelector(".open-btn");
const closeBtn = document.querySelector(".close-btn");
const navMenu = document.querySelector(".nav-menu");

// OPEN MENU
function openMenu() {
  if (!navMenu) return;

  navMenu.classList.add("active");

  if (openBtn) openBtn.style.display = "none";
  if (closeBtn) closeBtn.style.display = "block";

  // lock scroll
  const scrollY = window.scrollY;
  document.body.dataset.scrollY = scrollY;

  document.body.style.position = "fixed";
  document.body.style.top = `-${scrollY}px`;
  document.body.style.left = "0";
  document.body.style.right = "0";
  document.body.style.width = "100%";

  // reset submenu
  document.querySelectorAll(".submenu").forEach(sub => {
    sub.style.display = "none";
  });

  document.querySelectorAll(".submenu-toggle").forEach(icon => {
    icon.innerHTML = "+";
  });

  document.querySelectorAll(".has-submenu").forEach(li => {
    li.classList.remove("open");
  });
}

// CLOSE MENU
function closeMenu() {
  if (!navMenu) return;

  navMenu.classList.remove("active");

  if (openBtn) openBtn.style.display = "block";
  if (closeBtn) closeBtn.style.display = "none";

  // get saved scroll
  const scrollY = parseInt(document.body.dataset.scrollY || "0");

  document.body.style.position = "";
  document.body.style.top = "";
  document.body.style.left = "";
  document.body.style.right = "";
  document.body.style.width = "";

  window.scrollTo({
    top: scrollY,
    behavior: "instant"
  });
}

// EVENTS
if (openBtn) openBtn.addEventListener("click", openMenu);
if (closeBtn) closeBtn.addEventListener("click", closeMenu);

// SUBMENU
document.querySelectorAll(".submenu-toggle").forEach(toggle => {
  toggle.addEventListener("click", function (e) {
    if (window.innerWidth < 992) {
      e.preventDefault();
      e.stopPropagation();

      const parent = this.closest(".has-submenu");
      if (!parent) return;

      const submenu = parent.querySelector(":scope > .submenu");
      if (!submenu) return;

      const siblings = parent.parentElement.children;

      Array.from(siblings).forEach(item => {
        if (item !== parent && item.classList.contains("has-submenu")) {
          item.classList.remove("open");

          const sub = item.querySelector(":scope > .submenu");
          const icon = item.querySelector(".submenu-toggle");

          if (sub) sub.style.display = "none";
          if (icon) icon.innerHTML = "+";
        }
      });

      parent.classList.toggle("open");

      if (parent.classList.contains("open")) {
        submenu.style.display = "block";
        this.innerHTML = "−";
      } else {
        submenu.style.display = "none";
        this.innerHTML = "+";
      }
    }
  });
});
// Header Menu End
// NUMBER ANIMATION START
document.addEventListener("DOMContentLoaded", () => {
    const section = document.querySelector(".legacy_section");
    const counters = document.querySelectorAll(".legacy_listing_number");

    if (!section || !counters.length) return;

    const observer = new IntersectionObserver(([entry]) => {
        if (!entry.isIntersecting) return;

        counters.forEach((counter, i) => {
            const target = +counter.dataset.target;
            const duration = 3000;
            const start = performance.now();

            setTimeout(() => {
                const update = (time) => {
                    const progress = Math.min((time - start) / duration, 1);
                    const eased = 1 - Math.pow(1 - progress, 3);

                    counter.textContent =
                        Math.floor(target * eased).toLocaleString() + "+";

                    if (progress < 1) requestAnimationFrame(update);
                };

                requestAnimationFrame(update);
            }, i * 100);
        });

        observer.disconnect();
    }, { threshold: 0.3 });

    observer.observe(section);
});
// NUMBER ANIMATION ENDS

// Sticky header start
    const header = document.getElementById('my_header');
    const sentinel = document.getElementById('scroll-sentinel');

    const observer = new IntersectionObserver(
        ([entry]) => {
            if (!entry.isIntersecting) {
                header.classList.add('sticky');
            } else {
                header.classList.remove('sticky');
            }
        }
    );

    observer.observe(sentinel);
// Sticky header ends

// Header height CSS variable start
if (header) {
    new ResizeObserver(() => {
        document.documentElement.style.setProperty(
            '--header-height',
            `${header.offsetHeight}px`
        );
    }).observe(header);
}
// Header height CSS variable ends

// Program offered mobile slider start
(function () {
    const slider = document.getElementById('programSlider');
    const prevBtn = document.getElementById('programPrev');
    const nextBtn = document.getElementById('programNext');

    if (!slider || !prevBtn || !nextBtn) return;

    function getCardScrollAmount() {
        const card = slider.querySelector('.program_offered_listing');
        if (!card) return 0;
        const style = window.getComputedStyle(slider);
        const gap = parseFloat(style.columnGap || style.gap) || 0;
        return card.offsetWidth + gap;
    }

    function updateNavState() {
        const maxScroll = slider.scrollWidth - slider.clientWidth;
        prevBtn.disabled = slider.scrollLeft <= 0;
        nextBtn.disabled = slider.scrollLeft >= maxScroll - 1;
    }

    prevBtn.addEventListener('click', () => {
        slider.scrollBy({ left: -getCardScrollAmount(), behavior: 'smooth' });
    });

    nextBtn.addEventListener('click', () => {
        slider.scrollBy({ left: getCardScrollAmount(), behavior: 'smooth' });
    });

    slider.addEventListener('scroll', () => {
        window.requestAnimationFrame(updateNavState);
    }, { passive: true });

    window.addEventListener('resize', updateNavState);

    updateNavState();
})();
// Program offered mobile slider ends
// Inner Menu heading height start 
const innerMenuHeading = document.getElementById('inner_menu_heading_id');

if (innerMenuHeading) {
    new ResizeObserver(() => {
        document.documentElement.style.setProperty(
            '--inner-menu-heading-height',
            `${innerMenuHeading.offsetHeight}px`
        );
    }).observe(innerMenuHeading);
}
// Inner Menu heading height ends
