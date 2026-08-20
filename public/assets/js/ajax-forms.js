// ============================================
// GLOBAL TOAST FUNCTION
// ============================================
window.showToast = function(message, type) {
    type = type || 'success';
    var bgColor = type === 'success' ? '#10b981' : '#ef4444';
    var icon = type === 'success'
        ? '<i class="fas fa-check-circle mr-2"></i>'
        : '<i class="fas fa-exclamation-circle mr-2"></i>';

    var toast = document.createElement('div');
    toast.className = 'toast-message';
    toast.style.cssText = 'position:fixed;bottom:30px;right:30px;background:' + bgColor + ';color:white;padding:14px 22px;border-radius:14px;z-index:10000;display:flex;align-items:center;gap:8px;animation:slideIn .3s ease;box-shadow:0 4px 20px rgba(0,0,0,.25);';
    toast.innerHTML = icon + message;
    document.body.appendChild(toast);

    setTimeout(function() {
        toast.style.opacity = '0';
        toast.style.transition = 'opacity 0.3s';
        setTimeout(function() { toast.remove(); }, 300);
    }, 4000);
};

// ============================================
// EMAIL VALIDATION
// ============================================
function isValidEmail(email) {
    return /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email);
}

// ============================================
// DOCUMENT READY
// ============================================
document.addEventListener('DOMContentLoaded', function() {

    // ============================================
    // PORTFOLIO FILTER
    // ============================================
    var allProjects = document.querySelectorAll('.portfolio-card');
    var projectsToShow = 6;
    var currentFilter = 'all';

    function initProjectVisibility() {
        allProjects.forEach(function(card) { card.style.display = 'none'; });
        var filtered = currentFilter === 'all'
            ? allProjects
            : document.querySelectorAll('.portfolio-card[data-category="' + currentFilter + '"]');

        for (var i = 0; i < Math.min(projectsToShow, filtered.length); i++) {
            filtered[i].style.display = '';
        }
        updateLoadMoreButton();
    }

    document.querySelectorAll('.category-btn').forEach(function(btn) {
        btn.addEventListener('click', function() {
            document.querySelectorAll('.category-btn').forEach(function(b) { b.classList.remove('active'); });
            this.classList.add('active');
            currentFilter = this.getAttribute('data-filter');
            projectsToShow = 6;
            initProjectVisibility();
        });
    });

    var loadMoreBtn = document.getElementById('loadMoreBtn');
    if (loadMoreBtn) {
        loadMoreBtn.addEventListener('click', function() {
            var filtered = currentFilter === 'all'
                ? allProjects
                : document.querySelectorAll('.portfolio-card[data-category="' + currentFilter + '"]');
            var visible = document.querySelectorAll('.portfolio-card[style=""],.portfolio-card:not([style])');

            var currentVisible = 0;
            filtered.forEach(function(c) { if (c.style.display !== 'none') currentVisible++; });

            var remaining = filtered.length - currentVisible;
            if (remaining > 0) {
                var toShow = Math.min(3, remaining);
                for (var i = currentVisible; i < currentVisible + toShow; i++) {
                    filtered[i].style.display = '';
                }
                projectsToShow += toShow;
            }
            updateLoadMoreButton();
        });
    }

    function updateLoadMoreButton() {
        var btn = document.getElementById('loadMoreBtn');
        if (!btn) return;
        var filtered = currentFilter === 'all'
            ? allProjects
            : document.querySelectorAll('.portfolio-card[data-category="' + currentFilter + '"]');
        var visible = 0;
        filtered.forEach(function(c) { if (c.style.display !== 'none') visible++; });
        btn.style.display = visible >= filtered.length ? 'none' : '';
    }

    if (allProjects.length > 0) initProjectVisibility();

    // ============================================
    // HIRE FORM (AJAX)
    // ============================================
    var hireForm = document.getElementById('hireForm');
    if (hireForm) {
        hireForm.addEventListener('submit', function(e) {
            e.preventDefault();
            var form = this;
            var name = form.querySelector('input[name="name"]').value.trim();
            var email = form.querySelector('input[name="email"]').value.trim();
            var service = form.querySelector('select[name="service"]').value;
            var details = form.querySelector('textarea[name="details"]').value.trim();

            if (!name) { showToast('Please enter your full name.', 'error'); return; }
            if (!isValidEmail(email)) { showToast('Please enter valid email address.', 'error'); return; }
            if (!service) { showToast('Please select a service.', 'error'); return; }
            if (!details) { showToast('Please enter project details.', 'error'); return; }

            var submitBtn = form.querySelector('button[type="submit"]');
            if (submitBtn.disabled) return;
            var originalText = submitBtn.innerHTML;
            submitBtn.innerHTML = '<i class="fas fa-spinner fa-spin mr-2"></i> Submitting...';
            submitBtn.disabled = true;

            var xhr = new XMLHttpRequest();
            xhr.open('POST', '/hire/submit', true);
            xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
            xhr.setRequestHeader('X-Requested-With', 'XMLHttpRequest');
            xhr.responseType = 'json';

            var formData = new FormData(form);
            var params = new URLSearchParams(formData).toString();
            xhr.send(params);

            xhr.onload = function() {
                var response = xhr.response || {};
                if (xhr.status === 200 && response.status === 'success') {
                    showToast(response.message || 'Submitted successfully!', 'success');
                    form.reset();
                } else {
                    var msg = response.message || 'Failed to submit.';
                    if (response.errors) {
                        var firstError = Object.values(response.errors)[0];
                        if (firstError && firstError[0]) msg = firstError[0];
                    }
                    showToast(msg, 'error');
                }
            };
            xhr.onerror = function() {
                showToast('Something went wrong. Please try again.', 'error');
            };
            xhr.onloadend = function() {
                submitBtn.innerHTML = originalText;
                submitBtn.disabled = false;
            };
        });
    }

    // ============================================
    // CONTACT FORM (AJAX)
    // ============================================
    var contactForm = document.getElementById('contactForm');
    if (contactForm) {
        // Character counter
        var messageField = contactForm.querySelector('textarea[name="message"]');
        var charCount = document.getElementById('charCount');
        if (messageField && charCount) {
            messageField.addEventListener('input', function() {
                var len = this.value.length;
                charCount.textContent = len;
                if (len > 2000) {
                    this.classList.add('border-red-500');
                    charCount.style.color = '#ef4444';
                } else {
                    this.classList.remove('border-red-500');
                    charCount.style.color = '#6b7280';
                }
            });
        }

        // Phone formatting
        var phoneField = contactForm.querySelector('input[name="phone"]');
        if (phoneField) {
            phoneField.addEventListener('input', function() {
                var value = this.value.replace(/\D/g, '');
                if (value.length > 10) value = value.substring(0, 10);
                if (value.length > 6) {
                    value = value.slice(0, 3) + ' ' + value.slice(3, 6) + ' ' + value.slice(6);
                } else if (value.length > 3) {
                    value = value.slice(0, 3) + ' ' + value.slice(3);
                }
                this.value = value;
            });
        }

        contactForm.addEventListener('submit', function(e) {
            e.preventDefault();
            var form = this;
            var name = form.querySelector('input[name="name"]').value.trim();
            var email = form.querySelector('input[name="email"]').value.trim();
            var message = form.querySelector('textarea[name="message"]').value.trim();

            if (!name) { showToast('Please enter your name.', 'error'); return; }
            if (!isValidEmail(email)) { showToast('Please enter valid email address.', 'error'); return; }
            if (!message) { showToast('Please enter project details.', 'error'); return; }

            var submitBtn = form.querySelector('button[type="submit"]');
            var originalText = submitBtn.innerHTML;
            submitBtn.innerHTML = '<i class="fas fa-spinner fa-spin mr-2"></i> Sending...';
            submitBtn.disabled = true;

            var xhr = new XMLHttpRequest();
            xhr.open('POST', '/contact/submit', true);
            xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
            xhr.setRequestHeader('X-Requested-With', 'XMLHttpRequest');
            xhr.responseType = 'json';

            var formData = new FormData(form);
            var params = new URLSearchParams(formData).toString();
            xhr.send(params);

            xhr.onload = function() {
                var response = xhr.response || {};
                if (xhr.status === 200 && response.status === 'success') {
                    showToast(response.message || 'Message sent successfully!', 'success');
                    form.reset();
                    if (charCount) charCount.textContent = '0';
                } else {
                    var msg = response.message || 'Failed to send message.';
                    if (response.errors) {
                        var firstError = Object.values(response.errors)[0];
                        if (firstError && firstError[0]) msg = firstError[0];
                    }
                    showToast(msg, 'error');
                }
            };
            xhr.onerror = function() {
                showToast('Something went wrong. Please try again.', 'error');
            };
            xhr.onloadend = function() {
                submitBtn.innerHTML = originalText;
                submitBtn.disabled = false;
            };
        });
    }

    // ============================================
    // NEWSLETTER FORM (AJAX)
    // ============================================
    document.querySelectorAll('#newsletter-form, #newsletterForm').forEach(function(form) {
        form.addEventListener('submit', function(e) {
            e.preventDefault();
            var formEl = this;
            var email = formEl.querySelector('input[name="email"]').value.trim();

            if (!isValidEmail(email)) { showToast('Please enter valid email.', 'error'); return; }

            var submitBtn = formEl.querySelector('button[type="submit"]');
            var originalText = submitBtn.innerHTML;
            submitBtn.innerHTML = '<i class="fas fa-spinner fa-spin"></i>';
            submitBtn.disabled = true;

            var xhr = new XMLHttpRequest();
            xhr.open('POST', '/newsletter/subscribe', true);
            xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
            xhr.setRequestHeader('X-Requested-With', 'XMLHttpRequest');
            xhr.responseType = 'json';

            var formData = new FormData(formEl);
            var params = new URLSearchParams(formData).toString();
            xhr.send(params);

            xhr.onload = function() {
                var response = xhr.response || {};
                if (xhr.status === 200 && response.status === 'success') {
                    showToast(response.message || 'Thank you for subscribing!', 'success');
                    formEl.reset();
                } else {
                    showToast(response.message || 'Error occurred.', 'error');
                }
            };
            xhr.onerror = function() {
                showToast('Something went wrong. Please try again.', 'error');
            };
            xhr.onloadend = function() {
                submitBtn.innerHTML = originalText;
                submitBtn.disabled = false;
            };
        });
    });

    // ============================================
    // BACK TO TOP
    // ============================================
    var backToTop = document.createElement('button');
    backToTop.className = 'back-to-top';
    backToTop.style.cssText = 'position:fixed;bottom:90px;right:30px;width:50px;height:50px;border-radius:50%;background:linear-gradient(90deg,#00ffb3,#00b7ff);color:#000;border:none;cursor:pointer;display:none;z-index:999;box-shadow:0 4px 15px rgba(0,0,0,.2);';
    backToTop.innerHTML = '<i class="fas fa-arrow-up"></i>';
    document.body.appendChild(backToTop);

    window.addEventListener('scroll', function() {
        backToTop.style.display = window.scrollY > 300 ? 'block' : 'none';
    });

    backToTop.addEventListener('click', function() {
        window.scrollTo({ top: 0, behavior: 'smooth' });
    });
});
