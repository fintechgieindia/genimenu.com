<!-- Premium Brown Luxury Navbar for Geni Menu (Deep Chocolate & Champagne Beige Theme) -->
<style>
  :root {
    --geni-nav-bg: #32180F;
    --geni-nav-bg-scrolled: #27130D;
    --geni-nav-secondary-brown: #4A291B;
    --geni-nav-coffee: #603A28;
    --geni-nav-caramel: #C58B50;
    --geni-nav-champagne: #F2C58D;
    --geni-nav-warm-white: #FFF8F0;
    --geni-nav-text-sec: #E4D3C4;
    --geni-nav-border: rgba(197, 139, 80, 0.22);
    --geni-nav-border-scrolled: rgba(197, 139, 80, 0.35);
  }

  .geni-pos-nav {
    position: sticky;
    top: 0;
    left: 0;
    right: 0;
    z-index: 9999;
    background: rgba(50, 24, 15, 0.88) !important;
    backdrop-filter: blur(16px);
    -webkit-backdrop-filter: blur(16px);
    border-bottom: 1px solid var(--geni-nav-border) !important;
    box-shadow: 0 4px 20px rgba(20, 10, 6, 0.35) !important;
    font-family: 'Glacial Indifference', -apple-system, BlinkMacSystemFont, system-ui, sans-serif;
    color: var(--geni-nav-warm-white);
    -webkit-font-smoothing: antialiased;
    transition: background 0.3s cubic-bezier(0.16, 1, 0.3, 1),
                border-color 0.3s cubic-bezier(0.16, 1, 0.3, 1),
                box-shadow 0.3s cubic-bezier(0.16, 1, 0.3, 1);
  }

  /* Fixed Navigation for pages with hero section */
  body.has-hero-nav .geni-pos-nav {
    position: fixed;
    top: 0;
    left: 0;
    right: 0;
    background: rgba(50, 24, 15, 0.82) !important;
  }

  body.has-hero-nav .geni-pos-nav:not(.is-scrolled) {
    background: rgba(50, 24, 15, 0.82) !important;
    border-bottom: 1px solid var(--geni-nav-border) !important;
    box-shadow: 0 4px 24px rgba(20, 10, 6, 0.3) !important;
  }

  /* When Scrolled (scrollY > 30): persistent luxury deep chocolate navbar */
  .geni-pos-nav.is-scrolled,
  body.has-hero-nav .geni-pos-nav.is-scrolled {
    background: rgba(39, 19, 13, 0.98) !important;
    backdrop-filter: blur(16px) !important;
    -webkit-backdrop-filter: blur(16px) !important;
    border-bottom: 1px solid var(--geni-nav-border-scrolled) !important;
    box-shadow: 0 8px 32px rgba(10, 5, 3, 0.55) !important;
  }

  .geni-pos-nav * {
    box-sizing: border-box;
  }

  .geni-pos-nav .nav-wrap {
    max-width: 1260px;
    margin: 0 auto;
    padding: 0 28px;
    height: 68px;
    display: flex;
    align-items: center;
    justify-content: space-between;
    gap: 20px;
  }

  /* --- Left Brand Logo Area --- */
  .geni-pos-nav .nav-brand {
    display: inline-flex;
    align-items: center;
    gap: 14px;
    text-decoration: none;
    flex-shrink: 0;
    transition: opacity 0.2s ease, transform 0.2s ease;
  }

  .geni-pos-nav .nav-brand:hover {
    opacity: 0.96;
    transform: scale(1.01);
  }

  .geni-pos-nav .brand-logo-img {
    height: 38px;
    width: auto;
    object-fit: contain;
    display: block;
  }

  .geni-pos-nav .brand-divider {
    width: 1px;
    height: 26px;
    background: rgba(197, 139, 80, 0.35);
    flex-shrink: 0;
  }

  .geni-pos-nav .brand-tagline {
    display: flex;
    flex-direction: column;
    justify-content: center;
    font-size: 10.5px;
    line-height: 1.25;
    font-weight: 500;
    color: var(--geni-nav-text-sec);
    letter-spacing: 0.2px;
    text-align: left;
    white-space: nowrap;
  }

  .geni-pos-nav .brand-tagline span:first-child {
    color: #F8EADB;
  }

  /* --- Navigation Links --- */
  .geni-pos-nav .nav-center-menu {
    display: flex;
    align-items: center;
    gap: 8px;
    list-style: none;
    margin: 0;
    padding: 0;
  }

  .geni-pos-nav .nav-menu-item {
    position: relative;
  }

  .geni-pos-nav .nav-menu-link,
  .geni-pos-nav .nav-menu-btn {
    display: inline-flex;
    align-items: center;
    gap: 6px;
    font-size: 15.5px;
    font-weight: 500;
    letter-spacing: 0.15px;
    color: var(--geni-nav-warm-white);
    text-decoration: none;
    background: transparent;
    border: none;
    padding: 10px 16px;
    border-radius: 6px;
    cursor: pointer;
    white-space: nowrap;
    position: relative;
    transition: color 0.2s ease, background 0.2s ease;
  }

  .geni-pos-nav .nav-menu-link:hover,
  .geni-pos-nav .nav-menu-btn:hover {
    color: var(--geni-nav-champagne);
    background: rgba(242, 197, 141, 0.08);
  }

  /* Elegant underline active state as shown in reference design */
  .geni-pos-nav .nav-menu-link.nav-active {
    color: var(--geni-nav-champagne) !important;
    font-weight: 600 !important;
  }

  .geni-pos-nav .nav-menu-link.nav-active::after {
    content: '';
    position: absolute;
    bottom: 2px;
    left: 16px;
    right: 16px;
    height: 2px;
    background: linear-gradient(90deg, #C58B50 0%, #F2C58D 50%, #C58B50 100%);
    border-radius: 2px;
    box-shadow: 0 0 8px rgba(242, 197, 141, 0.6);
  }

  .geni-pos-nav .chevron-icon {
    width: 9px;
    height: 9px;
    transition: transform 0.2s ease;
    opacity: 0.8;
    stroke: var(--geni-nav-champagne);
  }

  .geni-pos-nav .nav-menu-item:hover .chevron-icon {
    transform: rotate(180deg);
    opacity: 1;
  }

  /* --- Right CTA & Utilities Group --- */
  .geni-pos-nav .nav-cta-group {
    display: flex;
    align-items: center;
    gap: 14px;
    flex-shrink: 0;
  }

  /* Language Switcher */
  .geni-pos-nav .nav-lang-dropdown {
    position: relative;
    display: inline-flex;
    align-items: center;
  }

  .geni-pos-nav .btn-lang-toggle {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    width: 34px;
    height: 34px;
    padding: 0;
    background: rgba(74, 41, 27, 0.6);
    border: 1px solid rgba(197, 139, 80, 0.38);
    border-radius: 50%;
    font-family: inherit;
    font-size: 13px;
    font-weight: 600;
    color: var(--geni-nav-champagne);
    cursor: pointer;
    transition: all 0.2s ease;
  }

  .geni-pos-nav .btn-lang-toggle:hover,
  .geni-pos-nav .nav-lang-dropdown.is-open .btn-lang-toggle {
    background: rgba(197, 139, 80, 0.25);
    border-color: var(--geni-nav-champagne);
    color: #FFFFFF;
    box-shadow: 0 0 12px rgba(242, 197, 141, 0.3);
  }

  .geni-pos-nav .lang-globe-icon {
    width: 17px;
    height: 17px;
  }

  .geni-pos-nav .lang-dropdown-menu {
    position: absolute;
    top: calc(100% + 10px);
    right: 0;
    width: 290px;
    max-height: 440px;
    background: #27130D;
    border: 1px solid rgba(197, 139, 80, 0.35);
    border-radius: 12px;
    box-shadow: 0 16px 40px rgba(0, 0, 0, 0.55), 0 0 20px rgba(197, 139, 80, 0.12);
    display: none;
    flex-direction: column;
    overflow: hidden;
    z-index: 10000;
  }

  .geni-pos-nav .nav-lang-dropdown.is-open .lang-dropdown-menu {
    display: flex;
  }

  .geni-pos-nav .lang-dropdown-header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 12px 14px 10px;
    border-bottom: 1px solid rgba(197, 139, 80, 0.2);
    font-size: 12px;
    font-weight: 700;
    letter-spacing: 0.5px;
    text-transform: uppercase;
    color: var(--geni-nav-champagne);
  }

  .geni-pos-nav .lang-search-box {
    display: flex;
    align-items: center;
    gap: 8px;
    padding: 8px 12px;
    margin: 8px 10px 4px;
    background: #32180F;
    border: 1px solid rgba(197, 139, 80, 0.25);
    border-radius: 8px;
  }

  .geni-pos-nav .lang-search-svg {
    width: 14px;
    height: 14px;
    color: var(--geni-nav-caramel);
    flex-shrink: 0;
  }

  .geni-pos-nav .lang-search-input {
    width: 100%;
    background: transparent;
    border: none;
    outline: none;
    font-size: 12.5px;
    color: var(--geni-nav-warm-white);
    font-family: inherit;
  }

  .geni-pos-nav .lang-search-input::placeholder {
    color: rgba(228, 211, 196, 0.5);
  }

  .geni-pos-nav .lang-options-scroll {
    overflow-y: auto;
    max-height: 310px;
    padding: 6px 6px 10px;
  }

  .geni-pos-nav .lang-options-scroll::-webkit-scrollbar {
    width: 5px;
  }
  .geni-pos-nav .lang-options-scroll::-webkit-scrollbar-thumb {
    background: rgba(197, 139, 80, 0.3);
    border-radius: 3px;
  }

  .geni-pos-nav .lang-group-header {
    font-size: 10px;
    font-weight: 700;
    text-transform: uppercase;
    letter-spacing: 0.8px;
    color: var(--geni-nav-caramel);
    padding: 8px 10px 4px;
  }

  .geni-pos-nav .lang-item {
    display: flex;
    align-items: center;
    justify-content: space-between;
    width: 100%;
    padding: 8px 10px;
    background: transparent;
    border: none;
    border-radius: 6px;
    cursor: pointer;
    color: var(--geni-nav-warm-white);
    font-family: inherit;
    text-align: left;
    transition: background 0.15s ease, color 0.15s ease;
  }

  .geni-pos-nav .lang-item:hover {
    background: rgba(197, 139, 80, 0.18);
    color: var(--geni-nav-champagne);
  }

  .geni-pos-nav .lang-item.is-active {
    background: rgba(197, 139, 80, 0.25);
    color: var(--geni-nav-champagne);
  }

  .geni-pos-nav .lang-item-left {
    display: inline-flex;
    align-items: center;
    gap: 9px;
  }

  .geni-pos-nav .lang-flag {
    font-size: 15px;
    line-height: 1;
  }

  .geni-pos-nav .lang-names {
    display: inline-flex;
    flex-direction: column;
    line-height: 1.2;
  }

  .geni-pos-nav .lang-native {
    font-size: 13px;
    font-weight: 600;
  }

  .geni-pos-nav .lang-english {
    font-size: 10.5px;
    color: var(--geni-nav-text-sec);
    opacity: 0.75;
  }

  .geni-pos-nav .lang-check {
    width: 14px;
    height: 14px;
    color: var(--geni-nav-champagne);
    opacity: 0;
  }

  .geni-pos-nav .lang-item.is-active .lang-check {
    opacity: 1;
  }

  /* --- CTA Button: Sign Up (Primary Rounded Pill in Champagne Beige) --- */
  .geni-pos-nav .btn-signup-pill {
    display: inline-flex;
    align-items: center;
    gap: 8px;
    background: linear-gradient(135deg, #F2C58D 0%, #E8BA80 100%) !important;
    color: #32180F !important;
    font-family: 'Glacial Indifference', system-ui, sans-serif;
    font-size: 13px;
    font-weight: 600;
    letter-spacing: 0.2px;
    text-decoration: none;
    padding: 8.5px 20px;
    border-radius: 9999px;
    border: none !important;
    box-shadow: 0 4px 16px rgba(242, 197, 141, 0.25) !important;
    cursor: pointer;
    white-space: nowrap;
    transition: all 0.22s cubic-bezier(0.16, 1, 0.3, 1);
  }

  .geni-pos-nav .btn-signup-pill:hover {
    background: linear-gradient(135deg, #FFF8F0 0%, #F2C58D 100%) !important;
    color: #27130D !important;
    transform: translateY(-1.5px);
    box-shadow: 0 6px 22px rgba(242, 197, 141, 0.42) !important;
  }

  /* --- CTA Button: Login (Ghost Pill) --- */
  .geni-pos-nav .btn-signin {
    display: inline-flex;
    align-items: center;
    background: transparent !important;
    border: 1.5px solid rgba(242, 197, 141, 0.45) !important;
    color: var(--geni-nav-warm-white) !important;
    font-family: 'Glacial Indifference', system-ui, sans-serif;
    font-size: 13px;
    font-weight: 500;
    text-decoration: none;
    padding: 7.5px 16px;
    border-radius: 9999px;
    cursor: pointer;
    white-space: nowrap;
    transition: all 0.2s ease;
  }

  .geni-pos-nav .btn-signin:hover {
    background: rgba(242, 197, 141, 0.12) !important;
    border-color: var(--geni-nav-champagne) !important;
    color: var(--geni-nav-champagne) !important;
  }

  /* --- Hamburger Menu Button (Mobile/Tablet) --- */
  .geni-pos-nav .nav-burger-btn {
    display: none;
    flex-direction: column;
    justify-content: center;
    gap: 5px;
    width: 40px;
    height: 40px;
    padding: 8px;
    background: rgba(74, 41, 27, 0.5);
    border: 1px solid rgba(197, 139, 80, 0.3);
    border-radius: 8px;
    cursor: pointer;
    transition: all 0.2s ease;
  }

  .geni-pos-nav .nav-burger-btn:hover {
    background: rgba(197, 139, 80, 0.2);
    border-color: var(--geni-nav-champagne);
  }

  .geni-pos-nav .nav-burger-btn span {
    display: block;
    width: 100%;
    height: 2px;
    background: var(--geni-nav-warm-white);
    border-radius: 2px;
    transition: all 0.25s ease;
  }

  .geni-pos-nav .nav-burger-btn.is-active span:nth-child(1) {
    transform: translateY(7px) rotate(45deg);
    background: var(--geni-nav-champagne);
  }
  .geni-pos-nav .nav-burger-btn.is-active span:nth-child(2) {
    opacity: 0;
  }
  .geni-pos-nav .nav-burger-btn.is-active span:nth-child(3) {
    transform: translateY(-7px) rotate(-45deg);
    background: var(--geni-nav-champagne);
  }

  /* --- Mobile Drawer Panel --- */
  .geni-pos-nav .mobile-panel {
    display: none;
    position: fixed;
    top: 72px;
    left: 0;
    right: 0;
    bottom: 0;
    background: rgba(39, 19, 13, 0.98);
    backdrop-filter: blur(18px);
    -webkit-backdrop-filter: blur(18px);
    border-top: 1px solid rgba(197, 139, 80, 0.25);
    padding: 24px;
    overflow-y: auto;
    z-index: 9998;
    flex-direction: column;
    justify-content: space-between;
  }

  .geni-pos-nav .mobile-panel.is-open {
    display: flex;
  }

  .geni-pos-nav .mobile-list {
    list-style: none;
    margin: 0;
    padding: 0;
    display: flex;
    flex-direction: column;
    gap: 4px;
  }

  .geni-pos-nav .mobile-direct-link {
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding: 14px 16px;
    color: var(--geni-nav-warm-white);
    font-size: 16px;
    font-weight: 600;
    text-decoration: none;
    border-radius: 8px;
    border-bottom: 1px solid rgba(197, 139, 80, 0.12);
    transition: background 0.18s ease, color 0.18s ease;
  }

  .geni-pos-nav .mobile-direct-link:hover {
    background: rgba(197, 139, 80, 0.15);
    color: var(--geni-nav-champagne);
  }

  .geni-pos-nav .mobile-actions {
    margin-top: 24px;
    padding-top: 20px;
    border-top: 1px solid rgba(197, 139, 80, 0.25);
    display: flex;
    flex-direction: column;
    gap: 12px;
  }

  .geni-pos-nav .mobile-lang-box {
    margin-bottom: 8px;
  }

  .geni-pos-nav .mobile-lang-label {
    display: flex;
    align-items: center;
    gap: 8px;
    font-size: 12px;
    font-weight: 700;
    color: var(--geni-nav-champagne);
    letter-spacing: 0.5px;
    text-transform: uppercase;
    margin-bottom: 6px;
  }

  .geni-pos-nav .mobile-lang-select {
    width: 100%;
    padding: 10px 14px;
    background: #32180F;
    border: 1px solid rgba(197, 139, 80, 0.35);
    border-radius: 8px;
    color: var(--geni-nav-warm-white);
    font-size: 14px;
    font-family: inherit;
    outline: none;
  }

  /* Responsive Breakpoints */
  @media (max-width: 991px) {
    .geni-pos-nav .nav-center-menu {
      display: none;
    }
    .geni-pos-nav .nav-burger-btn {
      display: flex;
    }
    .geni-pos-nav .brand-tagline {
      display: none;
    }
    .geni-pos-nav .brand-divider {
      display: none;
    }
  }

  @media (max-width: 600px) {
    .geni-pos-nav .nav-wrap {
      padding: 0 16px;
      height: 64px;
    }
    .geni-pos-nav .brand-logo-img {
      height: 32px !important;
    }
    .geni-pos-nav .btn-signup-pill {
      padding: 8px 16px;
      font-size: 12.5px;
    }
    .geni-pos-nav .btn-signin {
      padding: 7px 14px;
      font-size: 12.5px;
    }
    .geni-pos-nav .mobile-panel {
      top: 64px;
    }
  }
</style>

<header class="geni-pos-nav">
  <div class="nav-wrap">

    <!-- Left side: Brand Logo + Tagline -->
    <a href="{{ route('home') }}" class="nav-brand" title="Geni Menu - Home">
      <img id="geniNavLogo"
           src="{{ asset('assets/images/geni-menu-logo-light.png') }}"
           data-dark="{{ asset('assets/images/geni-menu-logo-light.png') }}"
           data-light="{{ asset('assets/images/geni-menu-logo-light.png') }}"
           onerror="this.onerror=null;this.src='{{ asset('assets/images/geni-menu-logo-light.png') }}';"
           alt="Geni Menu" class="brand-logo-img">
      <div class="brand-divider" aria-hidden="true"></div>
      <div class="brand-tagline">
        <span>Restaurant Digital</span>
        <span>Menu Platform</span>
      </div>
    </a>

    <!-- Center/Right: Desktop Navigation Items (Preserved order & URLs) -->
    <ul class="nav-center-menu">
      <!-- 0. Home -->
      <li class="nav-menu-item">
        <a href="{{ route('home') }}" class="nav-menu-link {{ request()->routeIs('home') ? 'nav-active' : '' }}">Home</a>
      </li>

      <!-- 1. Features -->
      <li class="nav-menu-item">
        <a href="{{ route('features') }}" class="nav-menu-link {{ request()->routeIs('features') ? 'nav-active' : '' }}">Features</a>
      </li>

      <!-- 2. Solutions -->
      <li class="nav-menu-item">
        <a href="{{ route('solutions') }}" class="nav-menu-link {{ request()->routeIs('solutions*') ? 'nav-active' : '' }}">Solutions</a>
      </li>

      <!-- 3. Pricing -->
      <li class="nav-menu-item">
        <a href="{{ route('pricing') }}" class="nav-menu-link {{ request()->routeIs('pricing') ? 'nav-active' : '' }}">Pricing</a>
      </li>

      <!-- 4. About Us -->
      <li class="nav-menu-item">
        <a href="{{ route('about.us') }}" class="nav-menu-link {{ request()->routeIs('about.us') ? 'nav-active' : '' }}">About Us</a>
      </li>

      <!-- 5. Contact
      <li class="nav-menu-item">
        <a href="{{ route('contact.us') }}" class="nav-menu-link {{ request()->routeIs('contact.us') ? 'nav-active' : '' }}">Contact</a>
      </li> -->
<!-- 
      4. Contacts
      <li class="nav-menu-item">
        <a href="{{ route('contact.us') }}" class="nav-menu-link {{ request()->routeIs('contact.us*') ? 'nav-active' : '' }}">Contacts</a>
      </li> -->

      <!-- 5. Contact -->
      <li class="nav-menu-item">
        <a href="{{ route('contact.us') }}" class="nav-menu-link {{ request()->routeIs('contact.us') ? 'nav-active' : '' }}">Contact</a>
      </li>
    </ul>

    <!-- Right Side: Language Switcher + Sign Up + Login -->
    <div class="nav-cta-group">

      <!-- Language Switcher near Sign In -->
      <div class="nav-lang-dropdown notranslate" id="geniLangDropdown">
        <button type="button" class="btn-lang-toggle" id="btnLangToggle" aria-label="Select Language" aria-expanded="false" title="Change Language">
          <svg class="lang-globe-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
            <circle cx="12" cy="12" r="10"></circle>
            <line x1="2" y1="12" x2="22" y2="12"></line>
            <path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"></path>
          </svg>
          <span class="active-lang-code" id="activeLangLabel" style="display:none;">English</span>
        </button>

        <div class="lang-dropdown-menu notranslate" id="langDropdownMenu" role="menu">
          <div class="lang-dropdown-header">
            <span>Select Language</span>
            <span style="font-size: 10px; opacity: 0.8; font-weight: 700;">Global</span>
          </div>

          <!-- Quick Search Filter -->
          <div class="lang-search-box">
            <svg class="lang-search-svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
              <circle cx="11" cy="11" r="8"></circle>
              <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
            </svg>
            <input type="text" id="langSearchInput" class="lang-search-input" placeholder="Search language..." oninput="filterGeniLanguages(this.value)" autocomplete="off">
          </div>

          <div class="lang-options-scroll" id="langOptionsScroll">
            <div class="lang-group-header">International Languages</div>

            <button type="button" class="lang-item" data-code="en" data-name="english global" onclick="selectAppLanguage('en')">
              <span class="lang-item-left"><span class="lang-flag">🇺🇸</span><span class="lang-names"><span class="lang-native">English</span><span class="lang-english">Global English</span></span></span>
              <svg class="lang-check" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
            </button>

            <button type="button" class="lang-item" data-code="es" data-name="español spanish" onclick="selectAppLanguage('es')">
              <span class="lang-item-left"><span class="lang-flag">🇪🇸</span><span class="lang-names"><span class="lang-native">Español</span><span class="lang-english">Spanish</span></span></span>
              <svg class="lang-check" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
            </button>

            <button type="button" class="lang-item" data-code="fr" data-name="français french" onclick="selectAppLanguage('fr')">
              <span class="lang-item-left"><span class="lang-flag">🇫🇷</span><span class="lang-names"><span class="lang-native">Français</span><span class="lang-english">French</span></span></span>
              <svg class="lang-check" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
            </button>

            <button type="button" class="lang-item" data-code="de" data-name="deutsch german" onclick="selectAppLanguage('de')">
              <span class="lang-item-left"><span class="lang-flag">🇩🇪</span><span class="lang-names"><span class="lang-native">Deutsch</span><span class="lang-english">German</span></span></span>
              <svg class="lang-check" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
            </button>

            <button type="button" class="lang-item" data-code="ar" data-name="العربية arabic" onclick="selectAppLanguage('ar')">
              <span class="lang-item-left"><span class="lang-flag">🇦🇪</span><span class="lang-names"><span class="lang-native">العربية</span><span class="lang-english">Arabic</span></span></span>
              <svg class="lang-check" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
            </button>

            <button type="button" class="lang-item" data-code="pt" data-name="português portuguese" onclick="selectAppLanguage('pt')">
              <span class="lang-item-left"><span class="lang-flag">🇵🇹</span><span class="lang-names"><span class="lang-native">Português</span><span class="lang-english">Portuguese</span></span></span>
              <svg class="lang-check" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
            </button>

            <button type="button" class="lang-item" data-code="ru" data-name="русский russian" onclick="selectAppLanguage('ru')">
              <span class="lang-item-left"><span class="lang-flag">🇷🇺</span><span class="lang-names"><span class="lang-native">Русский</span><span class="lang-english">Russian</span></span></span>
              <svg class="lang-check" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
            </button>

            <button type="button" class="lang-item" data-code="zh-CN" data-name="简体中文 chinese" onclick="selectAppLanguage('zh-CN')">
              <span class="lang-item-left"><span class="lang-flag">🇨🇳</span><span class="lang-names"><span class="lang-native">简体中文</span><span class="lang-english">Chinese (Simplified)</span></span></span>
              <svg class="lang-check" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
            </button>

            <button type="button" class="lang-item" data-code="ja" data-name="日本語 japanese" onclick="selectAppLanguage('ja')">
              <span class="lang-item-left"><span class="lang-flag">🇯🇵</span><span class="lang-names"><span class="lang-native">日本語</span><span class="lang-english">Japanese</span></span></span>
              <svg class="lang-check" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
            </button>

            <button type="button" class="lang-item" data-code="ko" data-name="한국어 korean" onclick="selectAppLanguage('ko')">
              <span class="lang-item-left"><span class="lang-flag">🇰🇷</span><span class="lang-names"><span class="lang-native">한국어</span><span class="lang-english">Korean</span></span></span>
              <svg class="lang-check" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
            </button>

            <button type="button" class="lang-item" data-code="it" data-name="italiano italian" onclick="selectAppLanguage('it')">
              <span class="lang-item-left"><span class="lang-flag">🇮🇹</span><span class="lang-names"><span class="lang-native">Italiano</span><span class="lang-english">Italian</span></span></span>
              <svg class="lang-check" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
            </button>

            <button type="button" class="lang-item" data-code="nl" data-name="nederlands dutch" onclick="selectAppLanguage('nl')">
              <span class="lang-item-left"><span class="lang-flag">🇳🇱</span><span class="lang-names"><span class="lang-native">Nederlands</span><span class="lang-english">Dutch</span></span></span>
              <svg class="lang-check" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
            </button>

            <button type="button" class="lang-item" data-code="tr" data-name="türkçe turkish" onclick="selectAppLanguage('tr')">
              <span class="lang-item-left"><span class="lang-flag">🇹🇷</span><span class="lang-names"><span class="lang-native">Türkçe</span><span class="lang-english">Turkish</span></span></span>
              <svg class="lang-check" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
            </button>

            <button type="button" class="lang-item" data-code="id" data-name="bahasa indonesia indonesian" onclick="selectAppLanguage('id')">
              <span class="lang-item-left"><span class="lang-flag">🇮🇩</span><span class="lang-names"><span class="lang-native">Bahasa Indonesia</span><span class="lang-english">Indonesian</span></span></span>
              <svg class="lang-check" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
            </button>

            <button type="button" class="lang-item" data-code="vi" data-name="tiếng việt vietnamese" onclick="selectAppLanguage('vi')">
              <span class="lang-item-left"><span class="lang-flag">🇻🇳</span><span class="lang-names"><span class="lang-native">Tiếng Việt</span><span class="lang-english">Vietnamese</span></span></span>
              <svg class="lang-check" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
            </button>

            <button type="button" class="lang-item" data-code="th" data-name="ไทย thai" onclick="selectAppLanguage('th')">
              <span class="lang-item-left"><span class="lang-flag">🇹🇭</span><span class="lang-names"><span class="lang-native">ไทย</span><span class="lang-english">Thai</span></span></span>
              <svg class="lang-check" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
            </button>

            <button type="button" class="lang-item" data-code="pl" data-name="polski polish" onclick="selectAppLanguage('pl')">
              <span class="lang-item-left"><span class="lang-flag">🇵🇱</span><span class="lang-names"><span class="lang-native">Polski</span><span class="lang-english">Polish</span></span></span>
              <svg class="lang-check" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
            </button>

            <button type="button" class="lang-item" data-code="sv" data-name="svenska swedish" onclick="selectAppLanguage('sv')">
              <span class="lang-item-left"><span class="lang-flag">🇸🇪</span><span class="lang-names"><span class="lang-native">Svenska</span><span class="lang-english">Swedish</span></span></span>
              <svg class="lang-check" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
            </button>

            <div class="lang-group-header" style="margin-top: 6px;">Regional Languages</div>

            <button type="button" class="lang-item" data-code="ta" data-name="தமிழ் tamil" onclick="selectAppLanguage('ta')">
              <span class="lang-item-left"><span class="lang-flag">🇮🇳</span><span class="lang-names"><span class="lang-native">தமிழ்</span><span class="lang-english">Tamil</span></span></span>
              <svg class="lang-check" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
            </button>

            <button type="button" class="lang-item" data-code="hi" data-name="हिन्दी hindi" onclick="selectAppLanguage('hi')">
              <span class="lang-item-left"><span class="lang-flag">🇮🇳</span><span class="lang-names"><span class="lang-native">हिन्दी</span><span class="lang-english">Hindi</span></span></span>
              <svg class="lang-check" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
            </button>

            <button type="button" class="lang-item" data-code="ml" data-name="മലയാളം malayalam" onclick="selectAppLanguage('ml')">
              <span class="lang-item-left"><span class="lang-flag">🇮🇳</span><span class="lang-names"><span class="lang-native">മലയാളം</span><span class="lang-english">Malayalam</span></span></span>
              <svg class="lang-check" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
            </button>

            <button type="button" class="lang-item" data-code="te" data-name="తెలుగు telugu" onclick="selectAppLanguage('te')">
              <span class="lang-item-left"><span class="lang-flag">🇮🇳</span><span class="lang-names"><span class="lang-native">తెలుగు</span><span class="lang-english">Telugu</span></span></span>
              <svg class="lang-check" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
            </button>

            <button type="button" class="lang-item" data-code="kn" data-name="ಕನ್ನಡ kannada" onclick="selectAppLanguage('kn')">
              <span class="lang-item-left"><span class="lang-flag">🇮🇳</span><span class="lang-names"><span class="lang-native">ಕನ್ನಡ</span><span class="lang-english">Kannada</span></span></span>
              <svg class="lang-check" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
            </button>
          </div>
        </div>
      </div>

      <!-- Preserved CTA Button: Start Free Trial -->
      <a href="{{ route('restaurant_signup') }}" class="btn-signup-pill">
        <span>Start Free Trial</span>
        <span style="font-size: 15px;">&rarr;</span>
      </a>

      <!-- Preserved Auth Button: Login / Dashboard -->
      <a href="{{ route('login') }}" class="btn-signin">
        @if (user())
          @lang('menu.dashboard')
        @else
          Login
        @endif
      </a>

      <!-- Hamburger toggle for mobile/tablet -->
      <button type="button" class="nav-burger-btn" id="geniNavBurger" aria-label="Toggle Navigation">
        <span></span>
        <span></span>
        <span></span>
      </button>
    </div>

  </div>

  <!-- Mobile Drawer Menu (Preserves all items & actions) -->
  <div class="mobile-panel" id="geniMobilePanel">
    <ul class="mobile-list">
      <li class="mobile-list-item">
        <a href="{{ route('home') }}" class="mobile-direct-link" onclick="closeGeniMobile()">
          <span>Home</span>
          <span style="font-size: 14px; color: #F2C58D;">&rarr;</span>
        </a>
      </li>

      <li class="mobile-list-item">
        <a href="{{ route('features') }}" class="mobile-direct-link" onclick="closeGeniMobile()">
          <span>Features</span>
          <span style="font-size: 14px; color: #F2C58D;">&rarr;</span>
        </a>
      </li>

      <li class="mobile-list-item">
        <a href="{{ route('solutions') }}" class="mobile-direct-link" onclick="closeGeniMobile()">
          <span>Solutions</span>
          <span style="font-size: 14px; color: #F2C58D;">&rarr;</span>
        </a>
      </li>

      <li class="mobile-list-item">
        <a href="{{ route('pricing') }}" class="mobile-direct-link" onclick="closeGeniMobile()">
          <span>Pricing</span>
          <span style="font-size: 14px; color: #F2C58D;">&rarr;</span>
        </a>
      </li>

      <li class="mobile-list-item">
        <a href="{{ route('about.us') }}" class="mobile-direct-link" onclick="closeGeniMobile()">
          <span>About Us</span>
          <span style="font-size: 14px; color: #F2C58D;">&rarr;</span>
        </a>
      </li>

      <li class="mobile-list-item">
        <a href="{{ route('contact.us') }}" class="mobile-direct-link" onclick="closeGeniMobile()">
          <span>Contact</span>
          <span style="font-size: 14px; color: #F2C58D;">&rarr;</span>
        </a>
      </li>
<!-- 
      <li class="mobile-list-item">
        <a href="{{ route('contact.us') }}" class="mobile-direct-link" onclick="closeGeniMobile()">
          <span>Contacts</span>
          <span style="font-size: 14px; color: #F2C58D;">&rarr;</span>
        </a>
      </li> -->

      <li class="mobile-list-item">
        <a href="{{ route('contact.us') }}" class="mobile-direct-link" onclick="closeGeniMobile()">
          <span>Contact</span>
          <span style="font-size: 14px; color: #F2C58D;">&rarr;</span>
        </a>
      </li>
    </ul>

    <div class="mobile-actions">
      <!-- Mobile Language Switcher -->
      <div class="mobile-lang-box notranslate">
        <label for="mobileLangSelect" class="mobile-lang-label">
          <svg class="lang-globe-icon" viewBox="0 0 24 24" width="16" height="16" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
            <circle cx="12" cy="12" r="10"></circle>
            <line x1="2" y1="12" x2="22" y2="12"></line>
            <path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"></path>
          </svg>
          <span>Choose Language</span>
        </label>
        <select id="mobileLangSelect" class="mobile-lang-select" onchange="selectAppLanguage(this.value)">
          <optgroup label="International Languages">
            <option value="en">🇺🇸 English (Global)</option>
            <option value="es">🇪🇸 Español (Spanish)</option>
            <option value="fr">🇫🇷 Français (French)</option>
            <option value="de">🇩🇪 Deutsch (German)</option>
            <option value="ar">🇦🇪 العربية (Arabic)</option>
            <option value="pt">🇵🇹 Português (Portuguese)</option>
            <option value="ru">🇷🇺 Русский (Russian)</option>
            <option value="zh-CN">🇨🇳 简体中文 (Chinese)</option>
            <option value="ja">🇯🇵 日本語 (Japanese)</option>
            <option value="ko">🇰🇷 한국어 (Korean)</option>
            <option value="it">🇮🇹 Italiano (Italian)</option>
            <option value="nl">🇳🇱 Nederlands (Dutch)</option>
            <option value="tr">🇹🇷 Türkçe (Turkish)</option>
            <option value="id">🇮🇩 Bahasa Indonesia (Indonesian)</option>
            <option value="vi">🇻🇳 Tiếng Việt (Vietnamese)</option>
            <option value="th">🇹🇭 ไทย (Thai)</option>
            <option value="pl">🇵🇱 Polski (Polish)</option>
            <option value="sv">🇸🇪 Svenska (Swedish)</option>
          </optgroup>
          <optgroup label="Regional Languages">
            <option value="ta">🇮🇳 தமிழ் (Tamil)</option>
            <option value="hi">🇮🇳 हिन्दी (Hindi)</option>
            <option value="ml">🇮🇳 മലയാളം (Malayalam)</option>
            <option value="te">🇮🇳 తెలుగు (Telugu)</option>
            <option value="kn">🇮🇳 ಕನ್ನಡ (Kannada)</option>
          </optgroup>
        </select>
      </div>

      <a href="{{ route('restaurant_signup') }}"
         onclick="closeGeniMobile();"
         class="btn-signup-pill" style="width:100%;text-align:center;justify-content:center;padding:12px 20px;font-size:14px;border-radius:9999px;">
        <span>Start Free Trial</span>
        <span style="font-size: 15px; margin-left: 4px;">&rarr;</span>
      </a>

      <a href="{{ route('login') }}" class="btn-signin" style="display:block;text-align:center;padding:11px;font-weight:600;color:#FFF8F0;border:1.5px solid rgba(242,197,141,0.45);border-radius:9999px;">
        @if (user())
          @lang('menu.dashboard')
        @else
          Login
        @endif
      </a>
    </div>
  </div>
</header>

<script>
  // Geni Multi-lingual Frontend Engine
  var GENI_LANG_MAP = {
    'en': { name: 'English', native: 'English', flag: '🇺🇸' },
    'es': { name: 'Spanish', native: 'Español', flag: '🇪🇸' },
    'fr': { name: 'French', native: 'Français', flag: '🇫🇷' },
    'de': { name: 'German', native: 'Deutsch', flag: '🇩🇪' },
    'ar': { name: 'Arabic', native: 'العربية', flag: '🇦🇪', rtl: true },
    'pt': { name: 'Portuguese', native: 'Português', flag: '🇵🇹' },
    'ru': { name: 'Russian', native: 'Русский', flag: '🇷🇺' },
    'zh-CN': { name: 'Chinese', native: '简体中文', flag: '🇨🇳' },
    'ja': { name: 'Japanese', native: '日本語', flag: '🇯🇵' },
    'ko': { name: 'Korean', native: '한국어', flag: '🇰🇷' },
    'it': { name: 'Italian', native: 'Italiano', flag: '🇮🇹' },
    'nl': { name: 'Dutch', native: 'Nederlands', flag: '🇳🇱' },
    'tr': { name: 'Turkish', native: 'Türkçe', flag: '🇹🇷' },
    'id': { name: 'Indonesian', native: 'Bahasa Indonesia', flag: '🇮🇩' },
    'vi': { name: 'Vietnamese', native: 'Tiếng Việt', flag: '🇻🇳' },
    'th': { name: 'Thai', native: 'ไทย', flag: '🇹🇭' },
    'pl': { name: 'Polish', native: 'Polski', flag: '🇵🇱' },
    'sv': { name: 'Swedish', native: 'Svenska', flag: '🇸🇪' },
    'ta': { name: 'Tamil', native: 'தமிழ்', flag: '🇮🇳' },
    'hi': { name: 'Hindi', native: 'हिन्दी', flag: '🇮🇳' },
    'ml': { name: 'Malayalam', native: 'മലയാളം', flag: '🇮🇳' },
    'te': { name: 'Telugu', native: 'తెలుగు', flag: '🇮🇳' },
    'kn': { name: 'Kannada', native: 'ಕನ್ನಡ', flag: '🇮🇳' }
  };

  function filterGeniLanguages(query) {
    var q = (query || '').toLowerCase().trim();
    var items = document.querySelectorAll('#langOptionsScroll .lang-item');
    items.forEach(function(item) {
      var name = (item.getAttribute('data-name') || '').toLowerCase();
      var code = (item.getAttribute('data-code') || '').toLowerCase();
      if (!q || name.indexOf(q) !== -1 || code.indexOf(q) !== -1) {
        item.style.display = 'flex';
      } else {
        item.style.display = 'none';
      }
    });
  }

  function getSavedLanguage() {
    var m = document.cookie.match(/(?:^|;\s*)googtrans=([^;]+)/);
    if (m) {
      var parts = decodeURIComponent(m[1]).split('/');
      var c = parts[parts.length - 1];
      if (c && c !== 'auto' && GENI_LANG_MAP[c]) {
        return c;
      }
    }
    var ls = localStorage.getItem('geni_selected_locale');
    if (ls && GENI_LANG_MAP[ls]) {
      return ls;
    }
    return '{{ session("customer_locale") ?? app()->getLocale() ?? "en" }}';
  }

  function setLanguageCookies(lang) {
    var val = (lang === 'en') ? '/en/en' : ('/en/' + lang);
    var host = window.location.hostname;
    var delStr = '=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/;';
    document.cookie = 'googtrans' + delStr;
    document.cookie = 'googtrans' + delStr + ' domain=' + host + ';';
    if (host.indexOf('.') !== -1 && !/^\d+\.\d+\.\d+\.\d+$/.test(host)) {
      document.cookie = 'googtrans' + delStr + ' domain=.' + host + ';';
    }

    document.cookie = 'googtrans=' + val + '; path=/; SameSite=Lax';
    document.cookie = 'googtrans=' + val + '; domain=' + host + '; path=/; SameSite=Lax';
    if (host.indexOf('.') !== -1 && !/^\d+\.\d+\.\d+\.\d+$/.test(host)) {
      document.cookie = 'googtrans=' + val + '; domain=.' + host + '; path=/; SameSite=Lax';
    }
  }

  function selectAppLanguage(code) {
    if (!GENI_LANG_MAP[code]) {
      code = 'en';
    }
    localStorage.setItem('geni_selected_locale', code);
    setLanguageCookies(code);

    try {
      fetch('/change-locale/' + code, {
        method: 'GET',
        headers: { 'X-Requested-With': 'XMLHttpRequest' }
      }).catch(function() {});
    } catch(e) {}

    var combo = document.querySelector('.goog-te-combo');
    if (combo) {
      combo.value = code;
      combo.dispatchEvent(new Event('change'));
    }

    if (GENI_LANG_MAP[code].rtl) {
      document.documentElement.setAttribute('dir', 'rtl');
    } else {
      document.documentElement.setAttribute('dir', 'ltr');
    }

    closeLangMenu();
    setTimeout(function() {
      window.location.reload();
    }, 120);
  }

  function toggleLangMenu(e) {
    if (e) {
      e.preventDefault();
      e.stopPropagation();
    }
    var dropdown = document.getElementById('geniLangDropdown');
    var btn = document.getElementById('btnLangToggle');
    if (dropdown) {
      var isOpen = dropdown.classList.toggle('is-open');
      if (btn) btn.setAttribute('aria-expanded', isOpen ? 'true' : 'false');
      if (isOpen) {
        var inp = document.getElementById('langSearchInput');
        if (inp) {
          inp.value = '';
          filterGeniLanguages('');
          setTimeout(function() { inp.focus(); }, 60);
        }
      }
    }
  }

  function closeLangMenu() {
    var dropdown = document.getElementById('geniLangDropdown');
    var btn = document.getElementById('btnLangToggle');
    if (dropdown && dropdown.classList.contains('is-open')) {
      dropdown.classList.remove('is-open');
      if (btn) btn.setAttribute('aria-expanded', 'false');
    }
  }

  function initLanguageUI() {
    var current = getSavedLanguage();
    var labelEl = document.getElementById('activeLangLabel');
    if (labelEl && GENI_LANG_MAP[current]) {
      labelEl.textContent = GENI_LANG_MAP[current].native;
    }

    document.querySelectorAll('.lang-item').forEach(function(item) {
      if (item.getAttribute('data-code') === current) {
        item.classList.add('is-active');
      } else {
        item.classList.remove('is-active');
      }
    });

    var mobSelect = document.getElementById('mobileLangSelect');
    if (mobSelect) {
      mobSelect.value = current;
    }

    if (GENI_LANG_MAP[current] && GENI_LANG_MAP[current].rtl) {
      document.documentElement.setAttribute('dir', 'rtl');
    }

    var btn = document.getElementById('btnLangToggle');
    if (btn) {
      btn.addEventListener('click', toggleLangMenu);
    }

    document.addEventListener('click', function(e) {
      var dropdown = document.getElementById('geniLangDropdown');
      if (dropdown && !dropdown.contains(e.target)) {
        closeLangMenu();
      }
    });

    document.addEventListener('keydown', function(e) {
      if (e.key === 'Escape') {
        closeLangMenu();
      }
    });
  }

  function toggleGeniMobile() {
    var panel = document.getElementById('geniMobilePanel');
    var burger = document.getElementById('geniNavBurger');
    if (panel) {
      var isOpen = panel.classList.toggle('is-open');
      if (burger) {
        burger.classList.toggle('is-active', isOpen);
      }
      document.body.style.overflow = isOpen ? 'hidden' : '';
    }
  }

  function closeGeniMobile() {
    var panel = document.getElementById('geniMobilePanel');
    var burger = document.getElementById('geniNavBurger');
    if (panel) {
      panel.classList.remove('is-open');
    }
    if (burger) {
      burger.classList.remove('is-active');
    }
    document.body.style.overflow = '';
  }

  function handleNavScroll() {
    var nav = document.querySelector('.geni-pos-nav');
    if (!nav) return;
    if (window.scrollY > 30) {
      nav.classList.add('is-scrolled');
    } else {
      nav.classList.remove('is-scrolled');
    }
  }

  window.addEventListener('scroll', handleNavScroll, { passive: true });

  document.addEventListener('DOMContentLoaded', function () {
    if (document.querySelector('.hero') && !document.body.classList.contains('has-hero-nav')) {
      document.body.classList.add('has-hero-nav');
    }
    handleNavScroll();
    initLanguageUI();

    var burger = document.getElementById('geniNavBurger');
    if (burger) {
      burger.addEventListener('click', toggleGeniMobile);
    }
  });
</script>
