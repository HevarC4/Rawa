<header class="u-clearfix u-header u-header" id="sec-aee0">
    <div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
      <a href="#" class="u-image u-logo u-image-1">
        <img
          src="{{ asset('images/default-1logo.png')}}"
          class="u-logo-image u-logo-image-1"
        />
      </a>
      <nav
        class="u-menu u-menu-hamburger u-offcanvas u-menu-1"
        data-responsive-from="XL"
      >
      <div
      class="menu-collapse"
      style="font-size: 1rem; letter-spacing: 0px; font-weight: 700"
    >
      <a
        class="u-button-style u-custom-border u-custom-border-color u-custom-borders u-custom-left-right-menu-spacing u-custom-padding-bottom u-custom-text-active-color u-custom-text-color u-custom-top-bottom-menu-spacing u-hamburger-link u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base"
        href="#"
        @click="open = !open"
      >
        <svg class="u-svg-link" viewBox="0 0 24 24">
          <use xlink:href="#menu-hamburger"></use>
        </svg>
        <svg
          class="u-svg-content"
          version="1.1"
          id="menu-hamburger"
          viewBox="0 0 16 16"
          x="0px"
          y="0px"
          xmlns:xlink="http://www.w3.org/1999/xlink"
          xmlns="http://www.w3.org/2000/svg"
        >
          <g>
            <rect y="1" width="16" height="2"></rect>
            <rect y="7" width="16" height="2"></rect>
            <rect y="13" width="16" height="2"></rect>
          </g>
        </svg>
      </a>
    </div>
        <div class="u-custom-menu u-nav-container">
          <ul class="u-nav u-spacing-20 u-unstyled u-nav-1">
            <li class="u-nav-item">
              <a
                class="u-button-style u-nav-link u-text-active-palette-1-base u-text-grey-90 u-text-hover-palette-2-base"
                href="./"
                style="padding: 10px"
                >Home</a
              >
            </li>
            <li class="u-nav-item">
              <a
                class="u-button-style u-nav-link u-text-active-palette-1-base u-text-grey-90 u-text-hover-palette-2-base"
                href="About.html"
                style="padding: 10px"
                >About Us</a
              >
            </li>
            <li class="u-nav-item">
              <a
                class="u-button-style u-nav-link u-text-active-palette-1-base u-text-grey-90 u-text-hover-palette-2-base"
                href="Contact.html"
                style="padding: 10px"
                >Contact Us Page</a
              >
            </li>
            <li class="u-nav-item">
              <a
                class="u-button-style u-nav-link u-text-active-palette-1-base u-text-grey-90 u-text-hover-palette-2-base"
                href="Page-1.html"
                style="padding: 10px"
                >Our Works</a
              >
            </li>
          </ul>
        </div>
        <div class="u-custom-menu u-nav-container-collapse">
          <div
            class="u-black u-container-style u-inner-container-layout u-opacity u-opacity-95 u-sidenav"
          >
          <!-- menu -->
          <div 
          class="u-inner-container-layout u-sidenav-overflow fixed top-0 right-0 bg-white shadow-md w-64 h-full transition-transform transform"
          x-show="open"
          x-transition:enter="transition ease-out duration-200"
          x-transition:enter-start="opacity-0 translate-x-full"
          x-transition:enter-end="opacity-100 translate-x-0"
          x-transition:leave="transition ease-in duration-200"
          x-transition:leave-start="opacity-100 translate-x-0"
          x-transition:leave-end="opacity-0 translate-x-full"
        >
          <!-- Close Button -->
          <div class="u-menu-close absolute top-2 right-2 cursor-pointer text-2xl" @click="open = false">
            {{-- &times; --}}
          </div>
      
          <!-- Navigation Links -->
          <ul class="u-align-center u-nav u-popupmenu-items u-unstyled u-nav-2">
            <li class="u-nav-item">
              <a class="u-button-style u-nav-link" href="./">Home</a>
            </li>
            <li class="u-nav-item">
              <a class="u-button-style u-nav-link" href="About.html">About Us</a>
            </li>
            <li class="u-nav-item">
              <a class="u-button-style u-nav-link" href="Contact.html">Contact Us</a>
            </li>
            <li class="u-nav-item">
              <a class="u-button-style u-nav-link" href="Page-1.html">Our Works</a>
            </li>
          </ul>
        </div>
          </div>
          <div class="u-black u-menu-overlay u-opacity u-opacity-70"></div>
        </div>
      </nav>
    </div>
  </header>