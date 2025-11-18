// script.js
document.addEventListener('DOMContentLoaded', function() {
    // ===== NAVBAR SCROLL EFFECT =====
    const navbar = document.querySelector('.navbar-fancy');
    if (navbar) {
        window.addEventListener('scroll', function() {
            if (window.scrollY > 50) {
                navbar.classList.add('scrolled');
            } else {
                navbar.classList.remove('scrolled');
            }
        });
    }

    // ===== ACTIVE NAV LINK BASED ON CURRENT PAGE =====
    const currentPage = window.location.pathname.split('/').pop() || 'index.php';
    const navLinks = document.querySelectorAll('.nav-link');
    
    navLinks.forEach(link => {
        const linkHref = link.getAttribute('href');
        if (linkHref === currentPage) {
            link.classList.add('active');
        } else if (currentPage === 'index.php' && (linkHref === 'index.php' || linkHref === './')) {
            link.classList.add('active');
        }
    });

    // ===== MOBILE MENU TOGGLE =====
    const hamburger = document.querySelector('.hamburger-menu');
    const menuWrapper = document.querySelector('.menu-wrapper');
    
    if (hamburger && menuWrapper) {
        hamburger.addEventListener('click', function() {
            menuWrapper.classList.toggle('active');
            hamburger.classList.toggle('active');
        });
    }

    // ===== DROPDOWN MENU FOR MOBILE =====
    const dropdowns = document.querySelectorAll('.dropdown');
    dropdowns.forEach(dropdown => {
        const toggle = dropdown.querySelector('.dropdown-toggle');
        if (toggle) {
            toggle.addEventListener('click', function(e) {
                if (window.innerWidth <= 992) {
                    e.preventDefault();
                    dropdown.classList.toggle('active');
                }
            });
        }
    });

    // ===== BACK TO TOP BUTTON =====
    const backToTop = document.querySelector('.back-to-top');
    if (backToTop) {
        window.addEventListener('scroll', function() {
            if (window.scrollY > 300) {
                backToTop.classList.add('show');
            } else {
                backToTop.classList.remove('show');
            }
        });

        backToTop.addEventListener('click', function(e) {
            e.preventDefault();
            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });
        });
    }

    // ===== SMOOTH SCROLL FOR NAV LINKS =====
    const allNavLinks = document.querySelectorAll('.nav-link');
    allNavLinks.forEach(link => {
        link.addEventListener('click', function(e) {
            // Close mobile menu if open
            if (window.innerWidth <= 992 && menuWrapper) {
                menuWrapper.classList.remove('active');
                hamburger.classList.remove('active');
            }
            
            // Handle internal page links
            if (this.getAttribute('href').startsWith('#')) {
                e.preventDefault();
                const targetId = this.getAttribute('href');
                const targetElement = document.querySelector(targetId);
                
                if (targetElement) {
                    const offsetTop = targetElement.offsetTop - 80;
                    window.scrollTo({
                        top: offsetTop,
                        behavior: 'smooth'
                    });
                }
            }
        });
    });

    // ===== COUNTER ANIMATION =====
    const counters = document.querySelectorAll('.counter');
    const speed = 200;

    const startCounter = () => {
        counters.forEach(counter => {
            const updateCount = () => {
                const target = +counter.getAttribute('data-target');
                const count = +counter.innerText.replace(/,/g, '');
                const increment = target / speed;

                if (count < target) {
                    counter.innerText = Math.ceil(count + increment).toLocaleString();
                    setTimeout(updateCount, 10);
                } else {
                    counter.innerText = target.toLocaleString();
                }
            };
            updateCount();
        });
    };

    // ===== INTERSECTION OBSERVER FOR ANIMATIONS =====
    const observerOptions = {
        threshold: 0.1,
        rootMargin: '0px 0px -50px 0px'
    };

    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('animated');
                
                // Start counter when statistik section is in view
                if (entry.target.id === 'statistik') {
                    startCounter();
                }
            }
        });
    }, observerOptions);

    // Observe all animated elements
    const animatedElements = document.querySelectorAll('.animate-fade-in-up, .animate-fade-in-left, .animate-fade-in-right, .animate-zoom-in');
    animatedElements.forEach(el => {
        observer.observe(el);
    });

    // ===== GALLERY FUNCTIONALITY =====
    const mainImage = document.querySelector('.profil-gallery .main-image');
    const thumbnails = document.querySelectorAll('.profil-gallery .thumbnail');
    const prevBtn = document.querySelector('.profil-gallery .prev-btn');
    const nextBtn = document.querySelector('.profil-gallery .next-btn');
    
    if (mainImage && thumbnails.length > 0) {
        let currentImageIndex = 0;
        
        // Set active thumbnail
        function setActiveThumbnail(index) {
            thumbnails.forEach(thumb => thumb.classList.remove('active'));
            thumbnails[index].classList.add('active');
        }
        
        // Change main image
        function changeMainImage(index) {
            mainImage.style.opacity = 0;
            setTimeout(() => {
                mainImage.src = thumbnails[index].src;
                mainImage.alt = thumbnails[index].alt;
                mainImage.style.opacity = 1;
                currentImageIndex = index;
                setActiveThumbnail(index);
            }, 300);
        }
        
        // Thumbnail click event
        thumbnails.forEach((thumb, index) => {
            thumb.addEventListener('click', () => {
                changeMainImage(index);
            });
        });
        
        // Previous button
        if (prevBtn) {
            prevBtn.addEventListener('click', () => {
                let newIndex = currentImageIndex - 1;
                if (newIndex < 0) newIndex = thumbnails.length - 1;
                changeMainImage(newIndex);
            });
        }
        
        // Next button
        if (nextBtn) {
            nextBtn.addEventListener('click', () => {
                let newIndex = currentImageIndex + 1;
                if (newIndex >= thumbnails.length) newIndex = 0;
                changeMainImage(newIndex);
            });
        }
    }

    // ===== GALLERY MODAL =====
    const galleryItems = document.querySelectorAll('.galeri-item');
    const modal = document.getElementById('image-modal');
    const modalImg = document.getElementById('modal-image');
    const modalClose = document.querySelector('.modal-close');

    if (galleryItems.length > 0 && modal && modalImg) {
        galleryItems.forEach(item => {
            item.addEventListener('click', function() {
                modal.style.display = 'block';
                modalImg.src = this.querySelector('img').src;
                modalImg.alt = this.querySelector('img').alt;
            });
        });

        if (modalClose) {
            modalClose.addEventListener('click', function() {
                modal.style.display = 'none';
            });
        }

        window.addEventListener('click', function(e) {
            if (e.target === modal) {
                modal.style.display = 'none';
            }
        });
    }

    // ===== THEME SWITCHER =====
    const themeSwitcher = document.querySelector('.theme-switcher');
    if (themeSwitcher) {
        const themeIcon = themeSwitcher.querySelector('i');
        
        // Check for saved theme preference or default to light
        const currentTheme = localStorage.getItem('theme') || 'light';
        if (currentTheme === 'dark') {
            document.body.classList.add('dark-mode');
            themeIcon.classList.remove('fa-moon');
            themeIcon.classList.add('fa-sun');
        }
        
        themeSwitcher.addEventListener('click', function() {
            document.body.classList.toggle('dark-mode');
            
            if (document.body.classList.contains('dark-mode')) {
                localStorage.setItem('theme', 'dark');
                themeIcon.classList.remove('fa-moon');
                themeIcon.classList.add('fa-sun');
            } else {
                localStorage.setItem('theme', 'light');
                themeIcon.classList.remove('fa-sun');
                themeIcon.classList.add('fa-moon');
            }
        });
    }

    // ===== FORM SUBMISSION =====
    const contactForm = document.getElementById('contact-form');
    if (contactForm) {
        contactForm.addEventListener('submit', function(e) {
            e.preventDefault();
            
            // Get form data
            const formData = new FormData(this);
            
            // Simple validation
            let isValid = true;
            const inputs = this.querySelectorAll('input, textarea');
            inputs.forEach(input => {
                if (!input.value.trim()) {
                    isValid = false;
                    input.style.borderColor = 'red';
                } else {
                    input.style.borderColor = '';
                }
            });
            
            if (isValid) {
                // Show success message
                alert('Pesan Anda telah berhasil dikirim! Terima kasih.');
                this.reset();
            } else {
                alert('Harap isi semua field yang diperlukan.');
            }
        });
    }

    // ===== HERO TYPING EFFECT =====
    const heroTitle = document.querySelector('.hero h1');
    if (heroTitle) {
        const text = heroTitle.textContent;
        heroTitle.textContent = '';
        
        let i = 0;
        function typeWriter() {
            if (i < text.length) {
                heroTitle.textContent += text.charAt(i);
                i++;
                setTimeout(typeWriter, 100);
            }
        }
        
        // Start typing after a short delay
        setTimeout(typeWriter, 500);
    }
});

// JavaScript untuk navigasi tab pada halaman Visi & Misi
document.addEventListener('DOMContentLoaded', function() {
    // Tab functionality
    const tabButtons = document.querySelectorAll('.tab-button');
    const tabPanes = document.querySelectorAll('.tab-pane');
    
    tabButtons.forEach(button => {
        button.addEventListener('click', function() {
            const targetTab = this.getAttribute('data-tab');
            
            // Remove active class from all buttons and panes
            tabButtons.forEach(btn => btn.classList.remove('active'));
            tabPanes.forEach(pane => pane.classList.remove('active'));
            
            // Add active class to current button and pane
            this.classList.add('active');
            document.getElementById(targetTab).classList.add('active');
        });
    });
    
    // Animation on scroll
    const observerOptions = {
        threshold: 0.1,
        rootMargin: '0px 0px -50px 0px'
    };
    
    const observer = new IntersectionObserver(function(entries) {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.style.opacity = 1;
                entry.target.style.transform = 'translateY(0)';
            }
        });
    }, observerOptions);
    
    // Observe animated elements
    document.querySelectorAll('.animate-fade-in-up').forEach(el => {
        el.style.opacity = 0;
        el.style.transform = 'translateY(30px)';
        el.style.transition = 'opacity 0.6s ease, transform 0.6s ease';
        observer.observe(el);
    });
});