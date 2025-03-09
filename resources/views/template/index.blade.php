<!DOCTYPE html>
<html style="font-size: 16px" lang="en">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta charset="utf-8" />
    <meta
      name="keywords"
      content="We are a&nbsp;Web Design Agency, About Studio, 01, About Our Studio, 02, ​Custom Solutions, What Clients Say, 03, ​The Process For Success, Top web designing services, ​Looking to collaborate?
Get in touch to find out how we can help."
    />
    <meta name="description" content="" />
    <title>Home</title>
    <link rel="stylesheet" href="{{ asset('template/nicepage.css') }}" media="screen" />
    <link rel="stylesheet" href="{{ asset('template/index.css') }}" media="screen" />
    <script
      class="u-script"
      type="text/javascript"
      src="{{asset('js/template/jquery.js ')}}"
      defer=""
    ></script>
    <script
      class="u-script"
      type="text/javascript"
      src="{{asset('js/template/nicepage.js ')}}"
      defer=""
    ></script>
    <meta name="generator" content="Nicepage 7.5.2, nicepage.com" />
    <meta name="referrer" content="origin" />

    <link
      id="u-theme-google-font"
      rel="stylesheet"
      href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i"
    />
    <link
      id="u-page-google-font"
      rel="stylesheet"
      href="https://fonts.googleapis.com/css?family=Roboto+Condensed:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i|Oswald:200,300,400,500,600,700|Montserrat:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i"
    />
    <script type="application/ld+json">
      {
        "@context": "http://schema.org",
        "@type": "Organization",
        "name": "",
        "logo": "{{ asset('images/default-logo.png') }}"
      }
    </script>
    <meta name="theme-color" content="#478ac9" />
    <meta property="og:title" content="Home" />
    <meta property="og:type" content="website" />
    <meta data-intl-tel-input-cdn-path="intlTelInput/" />
  </head>
  <!-- data-home-page="Home.html"
    data-home-page-title="Home"
    data-path-to-root="./"
    data-include-products="false"
    data-lang="en" -->
  <body
    
    class="u-body u-xl-mode"
  >
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
            {{-- menu --}}
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
    <section
      class="u-align-center u-clearfix u-container-align-center u-section-1"
      id="carousel_0dcb"
    >
      <div
        class="data-layout-selected u-clearfix u-layout-wrap u-layout-wrap-1"
      >
        <div class="u-layout">
          <div class="u-layout-row">
            <div
              class="u-align-left u-container-align-left u-container-style u-layout-cell u-size-24-xl u-size-25-lg u-size-25-md u-size-25-sm u-size-25-xs u-layout-cell-1"
              data-animation-name="customAnimationIn"
              data-animation-duration="1500"
              data-animation-delay="250"
            >
              <div
                class="u-container-layout u-valign-middle u-container-layout-1"
              >
                <h6 class="u-text u-text-1">About Us</h6>
                <h2
                  class="u-text u-text-2"
                  data-animation-name="customAnimationIn"
                  data-animation-duration="1500"
                  data-animation-delay="500"
                >
                  <b>I’m a</b>
                  <span class="u-text-custom-color-4"
                    ><b>3D Modeler & Designer</b>
                  </span>
                </h2>
                <p class="u-text-custom-color-2">
                  Passionate about creating detailed and realistic 3D models
                   for various industries, and mechanical engineering.
                </p>
                <a
                  href="#"
                  class="u-active-black u-align-center u-border-2 u-border-active-black u-border-grey-75 u-border-hover-black u-btn u-btn-round u-button-style u-hover-black u-none u-radius-50 u-text-active-white u-text-hover-white u-btn-2"
                  data-animation-name="customAnimationIn"
                  data-animation-duration="1500"
                  data-animation-delay="500"
                  >contact Us</a
                >
              </div>
            </div>
            <div
              class="u-align-left u-container-align-left u-container-style u-image u-image-default u-layout-cell u-size-35-lg u-size-35-md u-size-35-sm u-size-35-xs u-size-36-xl u-image-1"
              data-image-width="1557"
              data-image-height="1000"
              data-animation-name="customAnimationIn"
              data-animation-duration="1500"
              data-animation-delay="500"
            >
              <div class="u-container-layout u-container-layout-2"></div>
            </div>
          </div>
        </div>
      </div>
      <div class="u-list u-list-1">
        <div class="u-repeater u-repeater-1">
          <div
            class="u-align-center-xs u-align-left-lg u-align-left-md u-align-left-sm u-align-left-xl u-container-style u-list-item u-repeater-item u-video-cover u-white"
          >
            <div
              class="u-container-layout u-similar-container u-valign-top u-container-layout-4"
            >
              <span
                class="u-file-icon u-icon u-text-custom-color-2 u-icon-2"
                data-animation-name="customAnimationIn"
                data-animation-duration="1500"
                data-animation-delay="750"
                ><svg fill="#00d0fe" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="-51.2 -51.2 614.40 614.40" enable-background="new 0 0 512 512" xml:space="preserve" stroke="#00d0fe" stroke-width="0.00512" transform="matrix(1, 0, 0, 1, 0, 0)rotate(0)"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round" stroke="#CCCCCC" stroke-width="4.096"></g><g id="SVGRepo_iconCarrier"> <g id="2069a460dcf28295e231f3111e03d6d7"> <path display="inline" d="M152.285,427.006L132.333,511.5H7.346l23.082-79.671C62.22,439.572,104.791,437.939,152.285,427.006z M404.659,298.054h-17.951h-16.236v17.094v16.663h34.188V298.054z M106.656,331.96H89.131v-50.723h97.573l32.713-138.507 l35.594,138.507h48.65V231.67h50.424v-99.142h0.281L319.721,0.5H155.406L41.452,393.785 c46.541,15.601,122.887,3.479,211.237-45.157H106.656V331.96z M504.654,298.054v33.757H454.23v48.714h-34.787l33.897,129.17 H313.724L280.185,379.19c9.59-4.944,19.172-10.18,28.703-15.751c3.797-2.223,7.463-4.455,11.16-6.687v-24.942h-52.039H123.473 v-16.663h-17.524v-17.094h17.524h59.267h76.595h61.14v-49.571h17.521h32.908v-52.937v-46.205h11.105h5.131h17.521v99.142h32.051 h17.521v49.571h32.903H504.654z M419.616,281.387h-64.528v65.386h64.528V281.387z"> </path> </g> </g></svg>
            </span>
              <h4
                class="u-custom-font u-font-roboto-condensed u-text u-text-5"
                data-animation-name="customAnimationIn"
                data-animation-duration="1500"
                data-animation-delay="750"
              >
                AutoCad
              </h4>
              <a
                href="#"
                class="u-border-1 u-border-active-grey-70 u-border-black u-border-hover-grey-70 u-border-no-left u-border-no-right u-border-no-top u-bottom-left-radius-0 u-bottom-right-radius-0 u-btn u-button-style u-none u-radius-0 u-text-active-palette-2-base u-text-body-color u-text-hover-palette-2-base u-top-left-radius-0 u-top-right-radius-0 u-btn-4"
                data-animation-name="customAnimationIn"
                data-animation-duration="1500"
                data-animation-delay="750"
                >more</a
              >
            </div>
          </div>
          <div
            class="u-align-center-xs u-align-left-lg u-align-left-md u-align-left-sm u-align-left-xl u-container-style u-list-item u-repeater-item u-video-cover u-white"
          >
            <div
              class="u-container-layout u-similar-container u-valign-top u-container-layout-6"
            >
              <span
                class="u-file-icon u-icon u-text-custom-color-2 u-icon-4"
                data-animation-name="customAnimationIn"
                data-animation-duration="1500"
                data-animation-delay="750"
                ><svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="80" height="80" viewBox="0,0,256,256">
                  <g fill="#00d0fe" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><g transform="scale(5.12,5.12)"><path d="M25.00195,1c-0.101,0 -23,7.13672 -23,7.13672v31.33594c0,0 0.24128,0.095 0.61328,0.25c0,0 22.26772,9.2793 22.38672,9.2793c0.119,0 22.38672,-9.2793 22.38672,-9.2793c0.372,-0.155 0.61328,-0.26172 0.61328,-0.26172v-31.32813c0,0 -22.899,-7.13281 -23,-7.13281zM25.00195,3.04883l18.6582,5.85156l-9.03125,2.83203l-9.62695,3.01953l-9.62891,-3.01953l-9.0293,-2.83203zM4.00195,10.26172l20,6.27148v29.96484l-20,-8.36328zM46.00195,10.26172v27.87305l-20,8.36328v-29.96484zM43.52734,15.80078l-2.10352,0.72461l-1.9043,14.4707l-2.37305,-12.99414l-1.85742,0.64063l-2.47266,14.9668l-2.04102,-13.41016l-2.30078,0.79297l3.07227,17.80859l2.18359,-0.89453l2.5,-14.57812l2.40625,12.56836l2.06836,-0.84766zM12.54492,18.09961c-0.15842,-0.00247 -0.31459,0.00378 -0.46484,0.01953c-0.598,0.062 -1.1072,0.25241 -1.5332,0.56641c-0.425,0.314 -0.75528,0.7413 -0.98828,1.2793c-0.233,0.537 -0.34766,1.16653 -0.34766,1.89453c0,0.736 0.11098,1.42727 0.33398,2.07227c0.224,0.645 0.53369,1.25413 0.92969,1.82813c0.398,0.575 0.87474,1.12253 1.42774,1.64453c0.556,0.523 1.16417,1.02958 1.82617,1.51758c0.607,0.452 1.10514,0.8588 1.49414,1.2168c0.389,0.358 0.69497,0.69848 0.91797,1.02148c0.223,0.323 0.37889,0.6458 0.46289,0.9668c0.084,0.321 0.125,0.66802 0.125,1.04102c0,0.744 -0.21644,1.26759 -0.64844,1.55859c-0.429,0.296 -1.07001,0.29037 -1.91602,-0.01562c-0.428,-0.154 -0.82536,-0.36124 -1.19336,-0.61523c-0.368,-0.254 -0.68608,-0.55992 -0.95508,-0.91992c-0.267,-0.359 -0.47686,-0.77128 -0.63086,-1.23828c-0.154,-0.467 -0.23047,-0.98655 -0.23047,-1.56055l-2.36328,-0.83203c0,0.958 0.15394,1.84702 0.46094,2.66602c0.307,0.822 0.7118,1.56361 1.2168,2.22461c0.507,0.664 1.08161,1.23203 1.72461,1.70703c0.645,0.476 1.30266,0.84089 1.97266,1.08789c0.756,0.279 1.44541,0.41706 2.06641,0.41406c0.623,-0.003 1.1547,-0.14001 1.5957,-0.41602c0.443,-0.276 0.78344,-0.68366 1.02344,-1.22266c0.241,-0.539 0.36133,-1.20233 0.36133,-1.98633c0,-0.742 -0.09616,-1.44061 -0.28516,-2.09961c-0.191,-0.657 -0.48109,-1.29048 -0.87109,-1.89648c-0.39,-0.604 -0.87789,-1.19167 -1.46289,-1.76367c-0.583,-0.569 -1.27055,-1.13998 -2.06055,-1.70898c-1.003,-0.723 -1.74452,-1.38895 -2.22851,-2.00195c-0.483,-0.61 -0.72461,-1.25273 -0.72461,-1.92773c0,-0.359 0.04948,-0.67517 0.14648,-0.95117c0.097,-0.277 0.25008,-0.4953 0.45508,-0.6543c0.204,-0.16 0.46148,-0.25134 0.77148,-0.27734c0.311,-0.026 0.68238,0.02902 1.10938,0.16602c0.455,0.145 0.84664,0.34647 1.18164,0.60547c0.335,0.259 0.61398,0.5593 0.83398,0.9043c0.22,0.346 0.38323,0.72572 0.49023,1.13672c0.108,0.411 0.16211,0.84106 0.16211,1.28906l2.47266,0.8125c0,-0.776 -0.11652,-1.54464 -0.35352,-2.30664c-0.237,-0.762 -0.57753,-1.47186 -1.01953,-2.13086c-0.441,-0.656 -0.97923,-1.23537 -1.61523,-1.73437c-0.634,-0.498 -1.34581,-0.86828 -2.13281,-1.11328c-0.5505,-0.17025 -1.06184,-0.26017 -1.53711,-0.26758z"></path></g></g>
                  </svg>
                </span>
              <h4
                class="u-custom-font u-font-roboto-condensed u-text u-text-7"
                data-animation-name="customAnimationIn"
                data-animation-duration="1500"
                data-animation-delay="750"
              >
                Solidworks
              </h4>
              <a
                href="#"
                class="u-border-1 u-border-active-grey-70 u-border-black u-border-hover-grey-70 u-border-no-left u-border-no-right u-border-no-top u-bottom-left-radius-0 u-bottom-right-radius-0 u-btn u-button-style u-none u-radius-0 u-text-active-palette-2-base u-text-body-color u-text-hover-palette-2-base u-top-left-radius-0 u-top-right-radius-0 u-btn-6"
                data-animation-name="customAnimationIn"
                data-animation-duration="1500"
                data-animation-delay="750"
                >more</a
              >
            </div>
          </div>
          <div
            class="u-align-center-xs u-align-left-lg u-align-left-md u-align-left-sm u-align-left-xl u-container-style u-list-item u-repeater-item u-video-cover u-white"
          >
            <div
              class="u-container-layout u-similar-container u-valign-top u-container-layout-5"
            >
              <span
                class="u-file-icon u-icon u-text-custom-color-2 u-icon-3"
                data-animation-name="customAnimationIn"
                data-animation-duration="1500"
                data-animation-delay="750"
                ><svg fill="#00d0fe" viewBox="0 0 24 24" role="img" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"><title>Autodesk icon</title><path d="m14.574 1.0203c-0.097-0.096997-0.29099-0.58198-0.97097-0.58198h-6.7038s0.97097 0.096997 1.36 1.068c0 0 1.069 2.5269 2.0399 4.9558 2.8179 6.6068 7.1898 17.099 7.1898 17.099h6.5108c0.097-0.097-9.3267-22.443-9.4247-22.54zm-8.8407 0.87497-5.3438 12.631c-0.29199 0.87497-0.097997 1.9439 1.457 1.9439h4.1779l3.6919-8.8417c-1.166-2.9149-2.1359-5.2478-2.1359-5.2478-0.096997-0.29199-0.38899-1.069-0.97197-1.069-0.58298 0-0.77698 0.48598-0.87397 0.58298zm-0.097997 15.643h-4.4689c-0.77698 0-1.166-0.48598-1.166-0.48598 0.77698 1.36 3.0119 5.6358 3.0119 5.6358 0.38899 0.48598 0.77698 0.77698 1.36 0.77698 1.263 0 3.2069-1.263 3.2069-1.263l7.4808-4.6639z"></path></g></svg></span>
              <h4
                class="u-custom-font u-font-roboto-condensed u-text u-text-6"
                data-animation-name="customAnimationIn"
                data-animation-duration="1500"
                data-animation-delay="750"
              >
                ArtCam
              </h4>
              <a
                href="#"
                class="u-border-1 u-border-active-grey-70 u-border-black u-border-hover-grey-70 u-border-no-left u-border-no-right u-border-no-top u-bottom-left-radius-0 u-bottom-right-radius-0 u-btn u-button-style u-none u-radius-0 u-text-active-palette-2-base u-text-body-color u-text-hover-palette-2-base u-top-left-radius-0 u-top-right-radius-0 u-btn-5"
                data-animation-name="customAnimationIn"
                data-animation-duration="1500"
                data-animation-delay="750"
                >more</a
              >
            </div>
          </div>
        </div>
      </div>
    </section>
    <section
      class="u-align-center u-clearfix u-container-align-center u-image u-section-2"
      id="carousel_451a"
      data-image-width="1980"
      data-image-height="1214"
    >
      <div
        class="u-clearfix u-sheet u-valign-middle-sm u-valign-middle-xs u-sheet-1"
      >
        <div
          class="u-align-center u-container-align-center u-container-style u-group u-group-1"
          data-animation-name="customAnimationIn"
          data-animation-duration="1750"
          data-animation-delay="500"
        >
          <div class="u-container-layout u-valign-middle">
            <h2 class="u-text u-text-1">About Me</h2>
            <p class="u-text u-text-2">
              I’m a 3D Modeler & Designer with expertise in AutoCAD, SolidWorks, and ArtCam.  
              I create precise engineering models and detailed artistic designs, bringing  
              ideas to life with accuracy and creativity.
            </p>
          </div>
        </div>
        <div
          class="data-layout-selected u-clearfix u-layout-custom-sm u-layout-custom-xs u-layout-wrap u-layout-wrap-1"
        >
          <div class="u-layout">
            <div class="u-layout-row">
              <div
                class="u-align-right u-container-align-right u-container-style u-layout-cell u-size-30-lg u-size-30-md u-size-30-sm u-size-30-xl u-size-60-xs u-layout-cell-1"
              >
                <div
                  class="u-container-layout u-valign-top u-container-layout-2"
                >
                  <a
                    href="#"
                    class="u-active-custom-color-2 u-border-2 u-border-custom-color-2 u-btn u-btn-round u-button-style u-grey-10 u-hover-custom-color-2 u-radius-50 u-text-active-white u-text-body-color u-text-hover-white u-btn-1"
                    data-animation-name="customAnimationIn"
                    data-animation-duration="1500"
                    data-animation-delay="500"
                    >Book a Call<br />
                  </a>
                </div>
              </div>
              <div
                class="u-container-style u-layout-cell u-size-30-lg u-size-30-md u-size-30-sm u-size-30-xl u-size-60-xs u-layout-cell-2"
              >
                <div
                  class="u-container-layout u-valign-top u-container-layout-3"
                >
                  <a
                    href="#"
                    class="u-active-grey-10 u-border-2 u-border-active-palette-2-base u-border-custom-color-4 u-border-hover-custom-color-2 u-btn u-btn-round u-button-style u-custom-color-2 u-hover-grey-10 u-radius-50 u-text-active-black u-text-hover-black u-btn-2"
                    data-animation-name="customAnimationIn"
                    data-animation-duration="1500"
                    data-animation-delay="500"
                  >
                    Our Works<br />
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="u-clearfix u-grey-10 u-section-3" id="sec-e948">
      <div class="u-clearfix u-layout-wrap u-layout-wrap-1">
        <div class="u-gutter-0 u-layout">
          <div class="u-layout-row">
            <div
              class="u-container-style u-image u-layout-cell u-size-31 u-image-1"
              data-image-width="1200"
              data-image-height="771"
              data-animation-name="customAnimationIn"
              data-animation-duration="1500"
              data-animation-delay="500"
            >
              <div class="u-container-layout u-container-layout-1"></div>
            </div>
            <div
              class="u-container-style u-hidden-sm u-hidden-xs u-layout-cell u-size-29 u-layout-cell-2"
            >
              <div class="u-container-layout u-container-layout-2"></div>
            </div>
          </div>
        </div>
      </div>
      <div
        class="data-layout-selected u-clearfix u-layout-wrap u-layout-wrap-2"
      >
        <div class="u-gutter-0 u-layout">
          <div class="u-layout-col">
            <div class="u-size-30 u-size-60-md">
              <div class="u-layout-row">
                <div
                  class="u-align-right u-container-align-right u-container-style u-layout-cell u-size-9 u-layout-cell-3"
                  data-animation-name="customAnimationIn"
                  data-animation-duration="1500"
                  data-animation-delay="500"
                >
                  <div
                    class="u-container-layout u-valign-top u-container-layout-3"
                  >
                    <h2
                      class="u-align-left u-custom-font u-font-oswald u-text u-text-custom-color-2 u-text-default u-text-1"
                    >
                      01
                    </h2>
                  </div>
                </div>
                <div
                  class="u-align-left u-container-align-left u-container-style u-layout-cell u-size-51 u-layout-cell-4"
                  data-animation-name="customAnimationIn"
                  data-animation-duration="1500"
                  data-animation-delay="500"
                >
                  <div
                    class="u-container-layout u-valign-top u-container-layout-4"
                  >
                    <h2 class="u-text u-text-2">About Me</h2>
                  </div>
                </div>
              </div>
            </div>
            <div class="u-size-30 u-size-60-md">
              <div class="u-layout-row">
                <div
                  class="u-align-left u-container-align-left u-container-style u-layout-cell u-size-31 u-layout-cell-5"
                  data-animation-name="customAnimationIn"
                  data-animation-duration="1750"
                  data-animation-delay="750"
                >
                  <div
                    class="u-container-layout u-valign-top u-container-layout-5"
                  >
                    <p class="u-spacing-20 u-text u-text-4">
                      <span style="font-weight: 700"></span>
                      I’m a 3D Modeler & Designer with expertise in AutoCAD, 
                      SolidWorks, and ArtCam. I create precise and detailed 
                      3D models for engineering, manufacturing, and artistic projects. 
                      My work includes designing mechanical parts, product prototypes, 
                      and CNC-ready models to bring ideas to reality.<br />
                    </p>
                  </div>
                </div>
                <div
                  class="u-align-left u-container-align-left u-container-style u-layout-cell u-radius-20 u-shape-round u-size-29 u-white u-layout-cell-6"
                  data-animation-name="customAnimationIn"
                  data-animation-duration="1500"
                  data-animation-delay="500"
                >
                  <div
                    class="u-container-layout u-valign-top u-container-layout-6"
                  >
                    <p class="u-spacing-20 u-text u-text-5">
                      <span style="font-weight: 700">01.</span> 3D Modeling<br />
                      <span style="font-weight: 700">02.</span> CAD Design<br />
                      <span style="font-weight: 700">03.</span> Product Visualization<br />
                      <span style="font-weight: 700">04.</span>&nbsp;CNC & CAM Preparation<br />
                      <span style="font-weight: 700">05.</span> Technical Drawings
                      <span style="font-weight: 700"> <br />06. </span> Custom 3D Solutions
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section
      class="u-clearfix u-image u-shading u-section-4"
      id="carousel_9907"
      data-image-width="1980"
      data-image-height="1112"
    >
      <div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
        <div
          class="data-layout-selected u-clearfix u-expanded-width u-layout-wrap u-layout-wrap-1"
        >
          <div class="u-layout">
            <div class="u-layout-row">
              <div
                class="u-align-right u-container-align-right u-container-style u-layout-cell u-size-24-lg u-size-24-xl u-size-31-md u-size-31-sm u-size-31-xs u-layout-cell-1"
                data-animation-name="customAnimationIn"
                data-animation-duration="1750"
              >
                <div
                  class="u-container-layout u-valign-top u-container-layout-1"
                >
                  <h3
                    class="u-align-left u-text u-text-body-alt-color u-text-1"
                  >
                  Your portfolio is more than just a collection of projects.
                  </h3>
                  <div
                    class="u-border-3 u-palette-5-dark-2 u-shape u-shape-circle u-shape-1"
                  ></div>
                </div>
              </div>
              <div
                class="u-align-justify u-container-style u-layout-cell u-shape-rectangle u-size-29-md u-size-29-sm u-size-29-xs u-size-36-lg u-size-36-xl u-layout-cell-2"
                data-animation-name="customAnimationIn"
                data-animation-duration="1750"
                data-animation-delay="500"
              >
                <div class="u-container-layout u-container-layout-2">
                  <p
                    class="u-text u-text-body-alt-color u-text-default u-text-2"
                  >
                  It’s a reflection of your creativity and expertise. Whether it's precise 
                  engineering models, product prototypes, or artistic designs, I bring concepts 
                  to life with detailed 3D modeling and CAD design.&nbsp;<br />
                    <br />From initial sketches to final renders,&nbsp; I ensure accuracy and quality in every 
                    project. My experience with AutoCAD, SolidWorks, and ArtCam allows me to create 
                    models optimized for manufacturing, CNC machining, and visualization.  
                    Let’s build something great together!
                  </p>
                  <a
                    href="#"
                    class="u-active-white u-align-center u-border-2 u-border-active-white u-border-hover-white u-border-white u-btn u-btn-round u-button-style u-hover-white u-none u-radius-50 u-text-active-palette-2-base u-text-hover-palette-2-base u-btn-1"
                    >contact Us</a
                  >
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section
      class="u-clearfix u-image u-section-5"
      id="carousel_d477"
      data-image-width="1980"
      data-image-height="1714"
    >
      <div
        class="data-layout-selected u-clearfix u-layout-wrap u-layout-wrap-1"
      >
        <div class="u-gutter-0 u-layout">
          <div class="u-layout-row">
            <div
              class="u-container-style u-hidden-sm u-hidden-xs u-layout-cell u-size-29 u-layout-cell-1"
            >
              <div class="u-container-layout u-container-layout-1"></div>
            </div>
            <div
              class="u-container-style u-image u-layout-cell u-size-31 u-image-1"
              data-image-width="1200"
              data-image-height="771"
              data-animation-name="customAnimationIn"
              data-animation-duration="1500"
              data-animation-delay="500"
            >
              <div class="u-container-layout u-container-layout-2"></div>
            </div>
          </div>
        </div>
      </div>
      <div
        class="data-layout-selected u-clearfix u-layout-wrap u-layout-wrap-2"
      >
        <div class="u-gutter-0 u-layout">
          <div class="u-layout-col">
            <div class="u-size-30 u-size-60-md">
              <div class="u-layout-row">
                <div
                  class="u-container-style u-layout-cell u-size-10-md u-size-10-sm u-size-10-xs u-size-9-lg u-size-9-xl u-layout-cell-3"
                  data-animation-name="customAnimationIn"
                  data-animation-duration="1500"
                  data-animation-delay="0"
                >
                  <div
                    class="u-container-layout u-valign-top u-container-layout-3"
                  >
                    <h2
                      class="u-custom-font u-font-oswald u-text u-text-custom-color-2 u-text-default u-text-1"
                    >
                      02
                    </h2>
                  </div>
                </div>
                <div
                  class="u-align-left u-container-align-left u-container-style u-layout-cell u-size-50-md u-size-50-sm u-size-50-xs u-size-51-lg u-size-51-xl u-layout-cell-4"
                  data-animation-name="customAnimationIn"
                  data-animation-duration="1500"
                  data-animation-delay="500"
                >
                  <div
                    class="u-container-layout u-valign-top u-container-layout-4"
                  >
                    <h2 class="u-text u-text-2">Custom 3D Solutions</h2>
                  </div>
                </div>
              </div>
            </div>
            <div class="u-size-30 u-size-60-md">
              <div class="u-layout-row">
                <div
                  class="u-align-left u-container-align-left u-container-style u-layout-cell u-size-31 u-layout-cell-5"
                >
                  <div
                    class="u-container-layout u-valign-top u-container-layout-5"
                  >
                    <p class="u-spacing-20 u-text u-text-4">
                      I provide customized 3D modeling solutions tailored to various industries, including 
                      manufacturing, engineering, product design, and CNC machining. Whether you need precise 
                      technical models, artistic designs, or production-ready files, I ensure accuracy and 
                      attention to detail in every project.  
                    </p>
                  </div>
                </div>
                <div
                  class="u-align-left u-container-align-left u-container-style u-layout-cell u-size-29 u-white u-layout-cell-6"
                >
                  <div class="u-container-layout u-container-layout-6">
                    <p class="u-text u-text-default u-text-5">
                      From concept to final rendering, I work closely with clients to bring their ideas to life 
                      using AutoCAD, SolidWorks, and ArtCam. Let's create something unique and functional together!
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    {{-- <section
      class="u-align-center u-clearfix u-container-align-center u-shading u-section-6"
      id="sec-e816"
    >
      <div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
        <h6
          class="u-text u-text-default u-text-1"
          data-animation-name="customAnimationIn"
          data-animation-duration="1750"
        >
          testimonials
        </h6>
        <h2
          class="u-text u-text-2"
          data-animation-name="customAnimationIn"
          data-animation-duration="1500"
        >
          What Clients Say<br />
        </h2>
        <p
          class="u-text u-text-3"
          data-animation-name="customAnimationIn"
          data-animation-duration="1500"
        >
          We place huge value on strong relationships and have seen the benefit
          they bring to our business. Customer feedback is vital in helping us
          to get it right.
        </p>
        <div class="u-expanded-width u-list u-list-1">
          <div class="u-repeater u-repeater-1">
            <div
              class="u-align-center u-container-align-center u-container-style u-list-item u-repeater-item u-shape-rectangle u-list-item-1"
              data-animation-name="customAnimationIn"
              data-animation-duration="1500"
            >
              <div
                class="u-container-layout u-similar-container u-valign-top u-container-layout-1"
              >
                <div
                  alt=""
                  class="u-border-5 u-border-white u-image u-image-circle u-image-1"
                  data-image-width="206"
                  data-image-height="206"
                  data-animation-name="customAnimationIn"
                  data-animation-duration="1000"
                  data-animation-delay="750"
                ></div>
                <p class="u-text u-text-palette-2-light-3 u-text-4">
                  Vitae suscipit tellus mauris a diam maecenas sed enim ut.
                  Mauris augue neque gravida in fermentum. Praesent semper
                  feugiat nibh sed pulvinar proin.
                </p>
                <h5 class="u-text u-text-5">Nat Reynolds</h5>
                <h6 class="u-text u-text-6">Chief Accountant</h6>
              </div>
            </div>
            <div
              class="u-align-center u-container-align-center u-container-style u-list-item u-repeater-item u-shape-rectangle u-list-item-2"
              data-animation-name="customAnimationIn"
              data-animation-duration="1500"
            >
              <div
                class="u-container-layout u-similar-container u-valign-top u-container-layout-2"
              >
                <div
                  alt=""
                  class="u-border-5 u-border-white u-image u-image-circle u-image-2"
                  data-image-width="206"
                  data-image-height="206"
                  data-animation-name="customAnimationIn"
                  data-animation-duration="1000"
                  data-animation-delay="750"
                ></div>
                <p class="u-text u-text-palette-2-light-3 u-text-7">
                  Pharetra vel turpis nunc eget lorem. Quisque id diam vel quam
                  elementum pulvinar etiam. Urna porttitor rhoncus dolor purus
                  non enim praesent.&nbsp;
                </p>
                <h5 class="u-text u-text-8">Celia Almeda</h5>
                <h6 class="u-text u-text-9">Secretary</h6>
              </div>
            </div>
            <div
              class="u-align-center u-container-align-center u-container-style u-list-item u-repeater-item u-shape-rectangle u-list-item-3"
              data-animation-name="customAnimationIn"
              data-animation-duration="1500"
            >
              <div
                class="u-container-layout u-similar-container u-valign-top u-container-layout-3"
              >
                <div
                  alt=""
                  class="u-border-5 u-border-white u-image u-image-circle u-image-3"
                  data-image-width="206"
                  data-image-height="206"
                  data-animation-name="customAnimationIn"
                  data-animation-duration="1000"
                  data-animation-delay="750"
                ></div>
                <p class="u-text u-text-palette-2-light-3 u-text-10">
                  Mauris augue neque gravida in fermentum. Praesent semper
                  feugiat nibh sed pulvinar proin. Nibh nisl dictumst vestibulum
                  rhoncus est pellentesque elit.
                </p>
                <h5 class="u-text u-text-11">Bob Roberts</h5>
                <h6 class="u-text u-text-12">Sales Manager</h6>
              </div>
            </div>
            <div
              class="u-align-center u-container-align-center u-container-style u-list-item u-repeater-item u-shape-rectangle u-list-item-4"
              data-animation-name="customAnimationIn"
              data-animation-duration="1500"
            >
              <div
                class="u-container-layout u-similar-container u-valign-top u-container-layout-4"
              >
                <div
                  alt=""
                  class="u-border-5 u-border-white u-image u-image-circle u-image-4"
                  data-image-width="206"
                  data-image-height="206"
                  data-animation-name="customAnimationIn"
                  data-animation-duration="1000"
                  data-animation-delay="750"
                ></div>
                <p class="u-text u-text-palette-2-light-3 u-text-13">
                  Mauris augue neque gravida in fermentum. Praesent semper
                  feugiat nibh sed pulvinar proin. Nibh nisl dictumst vestibulum
                  rhoncus est pellentesque elit.
                </p>
                <h5 class="u-text u-text-14">Paul Smith</h5>
                <h6 class="u-text u-text-15">Developer</h6>
              </div>
            </div>
            <div
              class="u-align-center u-container-align-center u-container-style u-list-item u-repeater-item u-shape-rectangle u-list-item-5"
              data-animation-name="customAnimationIn"
              data-animation-duration="1500"
            >
              <div
                class="u-container-layout u-similar-container u-valign-top u-container-layout-5"
              >
                <div
                  alt=""
                  class="u-border-5 u-border-white u-image u-image-circle u-image-5"
                  data-image-width="206"
                  data-image-height="206"
                  data-animation-name="customAnimationIn"
                  data-animation-duration="1000"
                  data-animation-delay="750"
                ></div>
                <p class="u-text u-text-palette-2-light-3 u-text-16">
                  Mauris augue neque gravida in fermentum. Praesent semper
                  feugiat nibh sed pulvinar proin. Nibh nisl dictumst vestibulum
                  rhoncus est pellentesque elit.
                </p>
                <h5 class="u-text u-text-17">Olga Jhonson</h5>
                <h6 class="u-text u-text-18">top manager</h6>
              </div>
            </div>
            <div
              class="u-align-center u-container-align-center u-container-style u-list-item u-repeater-item u-shape-rectangle u-list-item-6"
              data-animation-name="customAnimationIn"
              data-animation-duration="1500"
            >
              <div
                class="u-container-layout u-similar-container u-valign-top u-container-layout-6"
              >
                <div
                  alt=""
                  class="u-border-5 u-border-white u-image u-image-circle u-image-6"
                  data-image-width="206"
                  data-image-height="206"
                  data-animation-name="customAnimationIn"
                  data-animation-duration="1000"
                  data-animation-delay="750"
                ></div>
                <p class="u-text u-text-palette-2-light-3 u-text-19">
                  Mauris augue neque gravida in fermentum. Praesent semper
                  feugiat nibh sed pulvinar proin. Nibh nisl dictumst vestibulum
                  rhoncus est pellentesque elit.
                </p>
                <h5 class="u-text u-text-20">Paul Hudson</h5>
                <h6 class="u-text u-text-21">Web designer</h6>
              </div>
            </div>
          </div>
        </div>
        <p
          class="u-text u-text-default u-text-22"
          data-animation-name="customAnimationIn"
          data-animation-duration="1750"
          data-animation-delay="750"
        >
          Images from
          <a
            href="https://freepik.com/photos/people"
            class="u-active-none u-border-1 u-border-active-palette-2-light-2 u-border-hover-palette-2-light-2 u-border-no-left u-border-no-right u-border-no-top u-border-white u-bottom-left-radius-0 u-bottom-right-radius-0 u-btn u-button-link u-button-style u-hover-none u-none u-radius-0 u-text-body-alt-color u-top-left-radius-0 u-top-right-radius-0 u-btn-1"
            target="_blank"
            >Freepik</a
          >
        </p>
      </div>
    </section> --}}
    {{-- <section
      class="u-clearfix u-valign-middle u-white u-section-7"
      id="carousel_e2f6"
    >
      <div class="u-clearfix u-layout-wrap u-layout-wrap-1">
        <div class="u-gutter-0 u-layout">
          <div class="u-layout-row">
            <div
              class="u-container-style u-image u-layout-cell u-size-31 u-image-1"
              data-image-width="1200"
              data-image-height="771"
              data-animation-name="customAnimationIn"
              data-animation-duration="1750"
              data-animation-delay="500"
            >
              <div class="u-container-layout u-container-layout-1"></div>
            </div>
            <div
              class="u-container-style u-hidden-sm u-hidden-xs u-layout-cell u-size-29 u-layout-cell-2"
            >
              <div class="u-container-layout u-container-layout-2"></div>
            </div>
          </div>
        </div>
      </div>
      <div
        class="data-layout-selected u-clearfix u-layout-wrap u-layout-wrap-2"
      >
        <div class="u-gutter-0 u-layout">
          <div class="u-layout-col">
            <div class="u-size-30 u-size-60-md">
              <div class="u-layout-row">
                <div
                  class="u-align-right u-container-align-right u-container-style u-layout-cell u-size-9 u-layout-cell-3"
                  data-animation-name="customAnimationIn"
                  data-animation-duration="1750"
                  data-animation-delay="250"
                >
                  <div
                    class="u-container-layout u-valign-top u-container-layout-3"
                  >
                    <h2
                      class="u-align-left u-custom-font u-font-oswald u-text u-text-custom-color-2 u-text-default u-text-1"
                    >
                      0​3
                    </h2>
                  </div>
                </div>
                <div
                  class="u-align-left u-container-align-left u-container-style u-layout-cell u-size-51 u-layout-cell-4"
                  data-animation-name="customAnimationIn"
                  data-animation-duration="1750"
                  data-animation-delay="500"
                >
                  <div
                    class="u-container-layout u-valign-top u-container-layout-4"
                  >
                    <h2 class="u-text u-text-2">The Process For Success</h2>
                    <p class="u-text u-text-default u-text-3">
                      Image from
                      <a
                        href="https://www.freepik.com/photos/business"
                        class="u-active-none u-border-1 u-border-active-palette-2-base u-border-black u-border-hover-palette-2-base u-border-no-left u-border-no-right u-border-no-top u-bottom-left-radius-0 u-bottom-right-radius-0 u-btn u-button-link u-button-style u-hover-none u-none u-radius-0 u-text-body-color u-top-left-radius-0 u-top-right-radius-0 u-btn-1"
                        target="_blank"
                        >Freepik</a
                      >
                    </p>
                  </div>
                </div>
              </div>
            </div>
            <div class="u-size-30 u-size-60-md">
              <div class="u-layout-row">
                <div
                  class="u-align-left u-container-align-left u-container-style u-layout-cell u-size-31 u-layout-cell-5"
                  data-animation-name="customAnimationIn"
                  data-animation-duration="1500"
                  data-animation-delay="250"
                >
                  <div
                    class="u-container-layout u-valign-top u-container-layout-5"
                  >
                    <p class="u-spacing-20 u-text u-text-4">
                      <span style="font-weight: 700"></span>Ut enim ad minim
                      veniam, quis nostrud exercitation ullamco laboris nisi ut
                      aliquip ex ea commodo consequat. Duis aute irure dolor in
                      reprehenderit in voluptate velit esse cillum dolore eu
                      fugiat nulla pariatur. Excepteur sint occaecat cupidatat
                      non proident.<br />
                    </p>
                  </div>
                </div>
                <div
                  class="u-container-style u-layout-cell u-shape-round u-size-29 u-layout-cell-6"
                  data-animation-name="customAnimationIn"
                  data-animation-duration="1500"
                  data-animation-delay="500"
                >
                  <div class="u-container-layout u-container-layout-6">
                    <p class="u-text u-text-custom-color-4 u-text-5">
                      Nec feugiat nisl pretium fusce id. Justo laoreet sit amet
                      cursus sit amet. Porta non pulvinar neque laoreet
                      suspendisse interdum consectetur libero.
                    </p>
                    <ul
                      class="u-custom-font u-custom-list u-font-montserrat u-spacing-12 u-text u-text-6"
                    >
                      <li>
                        <div class="u-list-icon u-text-custom-color-4">
                          <svg
                            class="u-svg-content"
                            viewBox="0 0 415.994 415.994"
                            id="svg-2b0f"
                          >
                            <path
                              d="m391.645 193.946-352-192c-4.96-2.688-10.976-2.592-15.808.288-4.864 2.88-7.84 8.128-7.84 13.76v384c0 5.664 2.976 10.88 7.84 13.76 2.496 1.504 5.344 2.24 8.16 2.24 2.656 0 5.28-.672 7.648-1.984l352-192c5.152-2.752 8.352-8.16 8.352-14.016s-3.2-11.264-8.352-14.048z"
                              fill="currentColor"
                            ></path>
                          </svg>
                        </div>
                        Lorem ipsum dolor sit amet
                      </li>
                      <li>
                        <div class="u-list-icon u-text-custom-color-4">
                          <svg
                            class="u-svg-content"
                            viewBox="0 0 415.994 415.994"
                            id="svg-2b0f"
                          >
                            <path
                              d="m391.645 193.946-352-192c-4.96-2.688-10.976-2.592-15.808.288-4.864 2.88-7.84 8.128-7.84 13.76v384c0 5.664 2.976 10.88 7.84 13.76 2.496 1.504 5.344 2.24 8.16 2.24 2.656 0 5.28-.672 7.648-1.984l352-192c5.152-2.752 8.352-8.16 8.352-14.016s-3.2-11.264-8.352-14.048z"
                              fill="currentColor"
                            ></path>
                          </svg>
                        </div>
                        Excepteur sint occaecat
                      </li>
                      <li>
                        <div class="u-list-icon u-text-custom-color-4">
                          <svg
                            class="u-svg-content"
                            viewBox="0 0 415.994 415.994"
                            id="svg-2b0f"
                          >
                            <path
                              d="m391.645 193.946-352-192c-4.96-2.688-10.976-2.592-15.808.288-4.864 2.88-7.84 8.128-7.84 13.76v384c0 5.664 2.976 10.88 7.84 13.76 2.496 1.504 5.344 2.24 8.16 2.24 2.656 0 5.28-.672 7.648-1.984l352-192c5.152-2.752 8.352-8.16 8.352-14.016s-3.2-11.264-8.352-14.048z"
                              fill="currentColor"
                            ></path>
                          </svg>
                        </div>
                        Ut enim ad minim veniam
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section> --}}
    <section
      class="u-clearfix u-image u-section-8"
      id="carousel_900d"
      data-image-width="1980"
      data-image-height="1112"
    >
      <div
        class="u-expanded-width u-shape u-shape-rectangle u-white u-shape-1"
      ></div>
      <h2
        class="u-text u-text-body-color u-text-default u-text-1"
        data-animation-name="customAnimationIn"
        data-animation-duration="1750"
      >
      High-Quality 3D Modeling & Design
      </h2>
      <p
        class="u-text u-text-grey-40 u-text-2"
        data-animation-name="customAnimationIn"
        data-animation-duration="2000"
      >
      Bringing ideas to reality through precise 3D modeling and CAD design. Whether for engineering, manufacturing, or artistic projects, 
      I create models that meet the highest standards of accuracy and functionality.
      </p>
      <div class="u-list u-list-1">
        <div class="u-repeater u-repeater-1">
          <div
            class="u-container-style u-grey-80 u-list-item u-radius-20 u-repeater-item u-shape-round u-list-item-1"
            data-animation-name="customAnimationIn"
            data-animation-duration="2000"
            data-animation-delay="500"
          >
            <div
              class="u-container-layout u-similar-container u-valign-top u-container-layout-1"
            >
              <h3 class="u-text u-text-default u-text-3">01</h3>
              <h4 class="u-text u-text-default u-text-3">Engineering & Industrial Design</h4>
              <p class="u-text u-text-4">
                From mechanical components to full-scale industrial models, 
                I create precise 3D CAD designs that are ready for prototyping and production. 
                My experience with AutoCAD and SolidWorks ensures detailed and functional 
                models for real-world applications.
              </p>
            </div>
          </div>
          <div
            class="u-container-style u-grey-80 u-list-item u-radius-20 u-repeater-item u-shape-round u-list-item-2"
            data-animation-name="customAnimationIn"
            data-animation-duration="2000"
            data-animation-delay="500"
          >
            <div
              class="u-container-layout u-similar-container u-valign-top u-container-layout-2"
            >
              <h3 class="u-text u-text-default u-text-5">02</h3>
              <h4 class="u-text u-text-default u-text-3">CNC & CAM Optimization</h4>
              <p class="u-text u-text-6">
                I design 3D models specifically for CNC machining and other fabrication processes, 
                ensuring that every detail aligns with manufacturing constraints. Using ArtCam,
                 I prepare high-quality models for cutting, engraving, and milling.
              </p>
            </div>
          </div>
          <div
            class="u-container-style u-grey-80 u-list-item u-radius-20 u-repeater-item u-shape-round u-list-item-3"
            data-animation-name="customAnimationIn"
            data-animation-duration="2000"
            data-animation-delay="500"
          >
            <div
              class="u-container-layout u-similar-container u-valign-top u-container-layout-3"
            >
              <h3 class="u-text u-text-default u-text-7">03</h3>
              <h4 class="u-text u-text-default u-text-3">Custom 3D Solutions</h4>
              <p class="u-text u-text-8">
                Every project is unique, and I provide tailored 3D design solutions to meet specific 
                client needs. Whether it’s product visualization, architectural modeling, 
                or intricate artistic designs, I bring creativity and precision to every project.
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section
      class="u-clearfix u-container-align-center u-image u-section-9"
      id="sec-d58e"
      data-image-width="1980"
      data-image-height="1767"
    >
      <div
        class="u-clearfix u-sheet u-valign-middle-lg u-valign-middle-md u-valign-middle-xl u-sheet-1"
      >
        <div
          class="data-layout-selected u-clearfix u-expanded-width u-layout-wrap u-layout-wrap-1"
        >
          <div class="u-layout">
            <div class="u-layout-row">
              <div
                class="u-container-align-left u-container-style u-layout-cell u-size-26-md u-size-26-sm u-size-26-xs u-size-35-lg u-size-35-xl u-layout-cell-1"
                data-animation-name="customAnimationIn"
                data-animation-duration="1500"
              >
                <div
                  class="u-container-layout u-valign-top u-container-layout-1"
                >
                  <h2
                    class="u-align-left u-custom-font u-font-montserrat u-text u-text-body-alt-color u-text-1"
                    data-animation-name="slideIn"
                    data-animation-duration="2000"
                    data-animation-direction="Left"
                    data-animation-delay="500"
                  >
                    Looking to collaborate? <br />Get in touch to find out how
                    we can help.
                  </h2>
                </div>
              </div>
              <div
                class="u-align-left u-container-align-left u-container-style u-layout-cell u-size-25-lg u-size-25-xl u-size-34-md u-size-34-sm u-size-34-xs u-layout-cell-2"
                data-animation-name="customAnimationIn"
                data-animation-duration="1500"
                data-animation-direction=""
                data-animation-delay="500"
              >
                <div
                  class="u-container-layout u-valign-top u-container-layout-2"
                >
                  <h3
                    class="u-align-left u-custom-font u-font-montserrat u-text u-text-body-alt-color u-text-default u-text-2"
                  >
                    Get Started
                  </h3>
                  <p
                    class="u-align-left u-text u-text-body-alt-color u-text-default u-text-3"
                  >
                    We're here to help. Tell us a little about your project and
                    we'll be in touch.
                  </p>
                  <div class="u-form u-palette-5-dark-3 u-radius-20 u-form-1">
                    <form
                      action="https://forms.nicepagesrv.com/v2/form/process"
                      class="u-clearfix u-form-spacing-10 u-form-vertical u-inner-form"
                      source="email"
                      name="form"
                      style="padding: 40px"
                    >
                      <div class="u-form-group u-form-name">
                        <label
                          for="name-2137"
                          class="u-form-control-hidden u-label"
                        ></label>
                        <input
                          type="text"
                          placeholder="Enter your Name"
                          id="name-2137"
                          name="name"
                          class="u-input u-input-rectangle u-radius-20"
                          required=""
                        />
                      </div>
                      <div class="u-form-email u-form-group">
                        <label
                          for="email-2137"
                          class="u-form-control-hidden u-label"
                        ></label>
                        <input
                          type="email"
                          placeholder="Enter a valid email address"
                          id="email-2137"
                          name="email"
                          class="u-input u-input-rectangle u-radius-20"
                          required=""
                        />
                      </div>
                      <div class="u-form-group u-form-message">
                        <label
                          for="message-2137"
                          class="u-form-control-hidden u-label"
                        ></label>
                        <textarea
                          placeholder="Enter your message"
                          rows="4"
                          cols="50"
                          id="message-2137"
                          name="message"
                          class="u-input u-input-rectangle u-radius-20"
                          required=""
                        ></textarea>
                      </div>
                      <div class="u-align-left u-form-group u-form-submit">
                        <a
                          href="#"
                          class="u-active-white u-border-none u-btn u-btn-round u-btn-submit u-button-style u-custom-color-2 u-hover-white u-radius-20 u-text-active-palette-2-base u-text-hover-custom-color-4 u-btn-1"
                          >Submit</a
                        >
                        <input
                          type="submit"
                          value="submit"
                          class="u-form-control-hidden"
                        />
                      </div>
                      <div class="u-form-send-message u-form-send-success">
                        Thank you! Your message has been sent.
                      </div>
                      <div class="u-form-send-error u-form-send-message">
                        Unable to send your message. Please fix errors then try
                        again.
                      </div>
                      <input type="hidden" value="" name="recaptchaResponse" />
                      <input
                        type="hidden"
                        name="formServices"
                        value="463f2a8d-711e-ffbb-266c-a2171df6295a"
                      />
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <footer
      class="u-align-center u-clearfix u-container-align-center u-footer u-grey-80 u-footer"
      id="sec-063b"
    >
      <div class="u-clearfix u-sheet u-sheet-1">
        <p class="u-small-text u-text u-text-variant u-text-1">
          Sample text. Click to select the Text Element.
        </p>
      </div>
    </footer>
    <section class="u-backlink u-clearfix u-grey-80">
      <p class="u-text">
        <span>This site was created with the </span>
        <a
          class="u-link"
          href="https://nicepage.com/"
          target="_blank"
          rel="nofollow"
        >
          <span>Nicepage</span>
        </a>
      </p>
    </section>
  </body>
</html>
