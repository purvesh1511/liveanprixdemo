// ============================================
// GLOBAL TOAST FUNCTION
// ============================================
window.showToast = function (message, type = "success") {
  const bgColor = type === "success" ? "#10b981" : "#ef4444";

  const icon =
    type === "success"
      ? '<i class="fas fa-check-circle mr-2"></i>'
      : '<i class="fas fa-exclamation-circle mr-2"></i>';

  const toast = $(`
        <div class="toast-message"
            style="
                position:fixed;
                bottom:30px;
                right:30px;
                background:${bgColor};
                color:white;
                padding:14px 22px;
                border-radius:14px;
                z-index:10000;
                display:flex;
                align-items:center;
                gap:8px;
                animation:slideIn .3s ease;
                box-shadow:0 4px 20px rgba(0,0,0,.25);
            ">
            ${icon}
            ${message}
        </div>
    `);

  $("body").append(toast);

  setTimeout(function () {
    toast.fadeOut(300, function () {
      $(this).remove();
    });
  }, 4000);
};

// Mobile menu toggle handled in header.php inline script

// ============================================
// EMAIL VALIDATION
// ============================================
function isValidEmail(email) {
  const regex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

  return regex.test(email);
}

// ============================================
// DOCUMENT READY
// ============================================
$(document).ready(function () {
  // ============================================
  // PORTFOLIO FILTER
  // ============================================
  let allProjects = $(".portfolio-card");
  let projectsToShow = 6;
  let currentFilter = "all";

  function initProjectVisibility() {
    allProjects.hide();

    if (currentFilter === "all") {
      allProjects.slice(0, projectsToShow).fadeIn();
    } else {
      allProjects
        .filter(`[data-category="${currentFilter}"]`)
        .slice(0, projectsToShow)
        .fadeIn();
    }

    updateLoadMoreButton();
  }

  $(".category-btn").on("click", function () {
    $(".category-btn").removeClass("active");

    $(this).addClass("active");

    currentFilter = $(this).data("filter");

    projectsToShow = 6;

    allProjects.hide();

    if (currentFilter === "all") {
      allProjects.slice(0, projectsToShow).fadeIn(400);
    } else {
      allProjects
        .filter(`[data-category="${currentFilter}"]`)
        .slice(0, projectsToShow)
        .fadeIn(400);
    }

    updateLoadMoreButton();

    $("html, body").animate(
      {
        scrollTop: $("#portfolio-grid").offset().top - 100,
      },
      500,
    );
  });

  $("#loadMoreBtn").on("click", function () {
    let filteredProjects =
      currentFilter === "all"
        ? allProjects
        : allProjects.filter(`[data-category="${currentFilter}"]`);

    let currentVisible = filteredProjects.filter(":visible").length;

    let remaining = filteredProjects.length - currentVisible;

    if (remaining > 0) {
      let toShow = Math.min(3, remaining);

      filteredProjects
        .slice(currentVisible, currentVisible + toShow)
        .fadeIn(400);

      projectsToShow += toShow;
    }

    updateLoadMoreButton();
  });

  function updateLoadMoreButton() {
    let total =
      currentFilter === "all"
        ? allProjects.length
        : allProjects.filter(`[data-category="${currentFilter}"]`).length;

    let visible = $(".portfolio-card:visible").length;

    if (visible >= total) {
      $("#loadMoreBtn").fadeOut();
    } else {
      $("#loadMoreBtn").fadeIn();
    }
  }

  initProjectVisibility();

  // ============================================
  // PORTFOLIO HOVER
  // ============================================
  $(".portfolio-card").hover(
    function () {
      $(this).find(".portfolio-image img").css("transform", "scale(1.1)");
    },

    function () {
      $(this).find(".portfolio-image img").css("transform", "scale(1)");
    },
  );

  // ============================================
  // HIRE FORM
  // ============================================
  $("#hireForm").on("submit", function (e) {
    e.preventDefault();

    const form = $(this);

    const name = $.trim(form.find('input[name="name"]').val());
    const email = $.trim(form.find('input[name="email"]').val());
    const service = form.find('select[name="service"]').val();
    const details = $.trim(form.find('textarea[name="details"]').val());

    if (name === "") {
      showToast("Please enter your full name.", "error");
      return;
    }

    if (!isValidEmail(email)) {
      showToast("Please enter valid email address.", "error");
      return;
    }

    if (!service) {
      showToast("Please select a service.", "error");
      return;
    }

    if (details === "") {
      showToast("Please enter project details.", "error");
      return;
    }

    const submitBtn = form.find('button[type="submit"]');

    if (submitBtn.prop("disabled")) return;

    const originalText = submitBtn.html();

    submitBtn
      .html('<span class="loading-spinner"></span> Submitting...')
      .prop("disabled", true);

    $.ajax({
      url: "hire_mail",
      type: "POST",
      dataType: "json",
      data: form.serialize(),

      success: function (response) {
        if (response.status === "success") {
          showToast(response.message || "Submitted successfully!", "success");
          form.trigger("reset");
        } else {
          showToast(response.message || "Failed to submit.", "error");
        }
      },

      error: function () {
        showToast("Something went wrong. Please try again.", "error");
      },

      complete: function () {
        submitBtn.html(originalText).prop("disabled", false);
      },
    });
  });

  // ============================================
  // CONTACT FORM
  // ============================================
  $('#contactForm textarea[name="message"]').on("input", function () {
    const length = $(this).val().length;

    $("#charCount").text(length);

    if (length > 2000) {
      $(this).addClass("border-red-500");

      $("#charCount").css("color", "#ef4444");
    } else {
      $(this).removeClass("border-red-500");

      $("#charCount").css("color", "#6b7280");
    }
  });

  $('#contactForm input[name="phone"]').on("input", function () {
    let value = $(this).val().replace(/\D/g, "");

    if (value.length > 10) {
      value = value.substring(0, 10);
    }

    if (value.length <= 3) {
      value = value;
    } else if (value.length <= 6) {
      value = value.slice(0, 3) + " " + value.slice(3);
    } else {
      value =
        value.slice(0, 3) + " " + value.slice(3, 6) + " " + value.slice(6, 10);
    }

    $(this).val(value);
  });

  $("#contactForm").on("submit", function (e) {
    e.preventDefault();

    const form = $(this);

    const name = form.find('input[name="name"]').val().trim();
    const email = form.find('input[name="email"]').val().trim();
    const message = form.find('textarea[name="message"]').val().trim();

    if (name === "") {
      showToast("Please enter your name.", "error");
      return;
    }

    if (!isValidEmail(email)) {
      showToast("Please enter valid email address.", "error");
      return;
    }

    if (message === "") {
      showToast("Please enter project details.", "error");
      return;
    }

    const submitBtn = form.find('button[type="submit"]');

    const originalText = submitBtn.html();

    submitBtn
      .html(
        `
            <span class="loading-spinner"></span>
            Sending...
        `,
      )
      .prop("disabled", true);

    $.ajax({
      url: "contact_submit",

      type: "POST",

      data: form.serialize(),

      dataType: "json",

      success: function (response) {
        if (response.status === "success") {
          showToast(response.message, "success");

          form.trigger("reset");

          $("#charCount").text("0");
        } else {
          showToast(response.message, "error");
        }
      },

      error: function () {
        showToast("Something went wrong. Please try again.", "error");
      },

      complete: function () {
        submitBtn.html(originalText).prop("disabled", false);
      },
    });
  });

  // ============================================
  // NEWSLETTER
  // ============================================
  $("#newsletterForm").on("submit", function (e) {
    e.preventDefault();

    const form = $(this);
    const email = form.find('input[name="email"]').val();

    if (!isValidEmail(email)) {
      showToast("Please enter valid email.", "error");
      return;
    }

    const submitBtn = form.find('button[type="submit"]');
    const originalText = submitBtn.html();

    submitBtn
      .html('<span class="loading-spinner"></span>')
      .prop("disabled", true);

    $.ajax({
      url: "subscribe_form",
      type: "POST",
      dataType: "json",
      data: form.serialize(),

      success: function (response) {
        if (response.status === "success") {
          showToast("Thank you for subscribing!", "success");
          form.trigger("reset");
        } else {
          showToast(response.message || "Error occurred", "error");
        }
      },

      error: function () {
        showToast("Something went wrong. Please try again.", "error");
      },

      complete: function () {
        submitBtn.html(originalText).prop("disabled", false);
      },
    });
  });

  // ============================================
  // BACK TO TOP
  // ============================================
  const backToTop = $(`
        <button class="back-to-top"
            style="
                position:fixed;
                bottom:30px;
                right:30px;
                width:50px;
                height:50px;
                border-radius:50%;
                background:linear-gradient(90deg,#00ffb3,#00b7ff);
                color:#000;
                border:none;
                cursor:pointer;
                display:none;
                z-index:999;
                box-shadow:0 4px 15px rgba(0,0,0,.2);
            ">
            <i class="fas fa-arrow-up"></i>
        </button>
    `);

  $("body").append(backToTop);

  $(window).on("scroll", function () {
    if ($(this).scrollTop() > 300) {
      backToTop.fadeIn();
    } else {
      backToTop.fadeOut();
    }
  });

  backToTop.on("click", function () {
    $("html, body").animate(
      {
        scrollTop: 0,
      },
      500,
    );
  });
});
