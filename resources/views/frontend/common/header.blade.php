<header id="mainHeader" class="scroll-header bg-white">
  <nav class="navbar navbar-expand-xl navbar-light p-0 m-0">
    <div class="d-flex justify-content-between justify-content-xl-start pe-2 p-xl-0 navbar-width">
      <div
        class="d-flex justify-content-center align-items-center navbar-logo-section">
        <img
          src="{{ asset('frontend/images/Black_Sedan_logo.png') }}"
          alt=""
          class="ms-4 ms-md-5 navbar-logo"
        />
      </div>
      <div class="d-xl-none d-flex align-items-center gap-2">
        <button
          class="shadow-none border-0 navbar-toggler"
          type="button"
          aria-label="Toggle navigation">
          <input type="checkbox" id="menu_checkbox" />
          <label for="menu_checkbox">
            <div></div>
            <div></div>
            <div></div>
          </label>
        </button>
        <div class="d-flex align-items-center gap-1">
          <!-- Chauffeur Dropdown -->
          <div class="dropdown">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTqafzhnwwYzuOTjTlaYMeQ7hxQLy_Wq8dnQg&s" class="dropdown-btn" onclick="toggleDropdown()">
            <div class="dropdown-content" id="dropdownContent">
                <a href="#">Rides</a>
                <a href="#">Account</a>
                <a href="#">Logout</a>
            </div>
          </div>
          <!-- Customer Dropdown -->
          <div class="dropdown">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTqafzhnwwYzuOTjTlaYMeQ7hxQLy_Wq8dnQg&s" class="dropdown-btn" onclick="toggleDropdown()">
            <div class="dropdown-content" id="dropdownContent">
                <a href="#">Rides</a>
                <a href="#">Account</a>
                <a href="#">Logout</a>
            </div>
          </div>
            <a href="#" class="btn-4 rounded"><span class="fw-bold">Book Now</span>
            </a>
            <a href="#" class="btn-4 rounded"><span class="fw-bold">Sign In</span>
            </a>
          </div>
        </div>
      </div>
      <div
        class="shadow bg-white h-screen collapse navbar-collapse"
        id="navbarNav">
        <div
          class="d-flex justify-content-center align-items-center navbar-logo-section pt-4 ms-3"
        >
          <img
            src="{{ asset('frontend/images/Black_Sedan_logo.png') }}"
            alt=""
            class="ms-5 navbar-logo"
          />
        </div>
        <ul class="navbar-nav mt-4 px-3">
          <li class="nav-item border-bottom py-3">
            <a class="p-0 nav-link" aria-current="page" href="#">Home</a>
          </li>
          <li class="nav-item border-bottom py-3">
            <a class="p-0 nav-link" aria-current="page" href="#"
              >About Us</a
            >
          </li>
          <li class="nav-item border-bottom py-3">
            <a class="p-0 nav-link" aria-current="page" href="#"
              >Our Services</a
            >
          </li>
          <li class="nav-item border-bottom py-3">
            <a class="p-0 nav-link" aria-current="page" href="#"
              >Our Fleet</a
            >
          </li>
          <li class="nav-item border-bottom py-3">
            <a class="p-0 nav-link" aria-current="page" href="#"
              >Far Estimator</a
            >
          </li>
          <li class="nav-item border-bottom py-3">
            <a class="p-0 nav-link" aria-current="page" href="#"
              >Contact Us</a
            >
          </li>
        </ul>
      </div>
      <div class="d-none d-xl-flex flex-column align-items-start ms-5">
        <div
          class="py-3 d-flex align-items-center gap-5 navbar-top-section"
          >
          <div>
            <p class="mb-0">Black Sedan Limousine Services</p>
          </div>
          <div class="d-flex align-items-center gap-4">
            <div class="d-flex align-items-center gap-1 ms-5">
              <span class="fa fa-phone phone-icon icon" aria-hidden="true">
              </span>
              <p class="mb-0">Dispatch Line 24/7 +1 825-735-55381</p>
            </div>
            <div class="d-flex align-items-center gap-1 ms-2">
              <span class="fa fa-envelope icon" aria-hidden="true"> </span>
              <a href="mailto:info@blacksedans.ca"></a>
              <p class="mb-0">Email us at: info@blacksedans.ca</p>
            </div>
          </div>
        </div>
        <div class="d-flex align-items-center justify-content-between w-100 navbar-bottom-section">
          <ul class="gap-4 py-4 navbar-nav">
            <li class="position-relative nav-item">
              <a class="p-0 nav-link" aria-current="page" href="#">Home</a>
              <span class="link-bg"></span>
            </li>
            <li class="position-relative nav-item">
              <a class="p-0 nav-link" href="#">About</a>
              <span class="link-bg"></span>
            </li>
            <li class="position-relative nav-item">
              <a class="p-0 nav-link" href="#">Services</a>
              <span class="link-bg"></span>
            </li>
            <li class="position-relative nav-item">
              <a class="p-0 nav-link" href="#">Fleet</a>
              <span class="link-bg"></span>
            </li>
            <li class="position-relative nav-item">
              <a class="p-0 nav-link" href="#">Fare Estimator</a>
              <span class="link-bg"></span>
            </li>
            <li class="position-relative nav-item">
              <a class="p-0 nav-link" href="#">Contact</a>
              <span class="link-bg"></span>
            </li>
          </ul>
          <div class="d-flex align-items-center gap-2">
            <!-- Chauffeur Dropdown -->
            <div class="dropdown">
              <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTqafzhnwwYzuOTjTlaYMeQ7hxQLy_Wq8dnQg&s" class="dropdown-btn" onclick="toggleDropdown()">
              <div class="dropdown-content" id="dropdownContent">
                  <a href="#">Rides</a>
                  <a href="#">Account</a>
                  <a href="#">Logout</a>
              </div>
            </div>
            <!-- Customer Dropdown -->
            <div class="dropdown">
              <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTqafzhnwwYzuOTjTlaYMeQ7hxQLy_Wq8dnQg&s" class="dropdown-btn" onclick="toggleDropdown()">
              <div class="dropdown-content" id="dropdownContent">
                  <a href="#">Rides</a>
                  <a href="#">Account</a>
                  <a href="#">Logout</a>
              </div>
            </div>
              <a href="#" class="btn-4 rounded"><span class="fw-bold">Book Now</span>
              </a>
              <a href="#" class="btn-4 rounded"><span class="fw-bold">Sign In</span>
              </a>
            </div>
          </div>
        </div>
      </div>
      
    </div>
  </nav>
</header>

<script>

  let lastScrollY = 0;

  window.addEventListener('scroll', function () {
      const header = document.getElementById('mainHeader');
      const currentScrollY = window.scrollY;

      if (currentScrollY === 0) {
          // When at the top of the page, keep the navbar visible
          header.style.transform = 'translateY(0)';
          header.style.position = 'relative';
      } else if (currentScrollY > 50 && currentScrollY < 600) {
          // When scrolling down and past 50px, hide the navbar
          header.style.transform = 'translateY(-100%)'; // Move the navbar out of view
          header.style.position = 'relative';
      } else if (currentScrollY > 600) {
          // When scrolling up and not at the top, show the navbar
          header.style.transform = 'translateY(0)'; // Bring the navbar back into view
          header.style.position = 'sticky';
      }

      lastScrollY = currentScrollY;
  });

  function toggleDropdown() {
      var dropdownContent = document.getElementById('dropdownContent');
      if (dropdownContent.style.display === 'block') {
          dropdownContent.style.display = 'none';
      } else {
          dropdownContent.style.display = 'block';
      }
  }

  // Close the dropdown if the user clicks outside of it
  window.onclick = function(event) {
      if (!event.target.matches('.dropdown-btn')) {
          var dropdowns = document.getElementsByClassName('dropdown-content');
          for (var i = 0; i < dropdowns.length; i++) {
              var openDropdown = dropdowns[i];
              if (openDropdown.style.display === 'block') {
                  openDropdown.style.display = 'none';
              }
          }
      }
  }
</script>

<style>
  #mainHeader {
    top: 0; /* Initially visible */
    width: 100%;
    transform: translateY(0); /* Default position */
    transition: transform 0.5s ease-in-out; /* Smooth transition effect */
    z-index: 100000;
  }

  .link-bg {
    display: none; /* Initially hidden */
  }
</style>