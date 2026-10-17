<!-- Premium Sticky Navbar for Geni Menu -->
<style>
  .geni-pos-nav {
    position: sticky;
    top: 0;
    left: 0;
    right: 0;
    z-index: 9999;
    background: rgba(255, 255, 255, 0.94);
    backdrop-filter: blur(12px);
    -webkit-backdrop-filter: blur(12px);
    border-bottom: 1px solid #E3E8EE;
    box-shadow: none !important;
    font-family: 'Plus Jakarta Sans', system-ui, -apple-system, sans-serif;
    color: #0A2540;
    -webkit-font-smoothing: antialiased;
    transition: background 0.3s ease, border-color 0.3s ease, box-shadow 0.3s ease, backdrop-filter 0.3s ease;
  }

  /* --- Fixed Transparent Overlay Over Hero Section (Homepage Top) --- */
  body.has-hero-nav .geni-pos-nav {
    position: fixed;
    top: 0;
    left: 0;
    right: 0;
  }

  body.has-hero-nav .geni-pos-nav:not(.is-scrolled) {
    background: linear-gradient(180deg, rgba(8, 20, 36, 0.70) 0%, rgba(8, 20, 36, 0.20) 75%, transparent 100%) !important;
    backdrop-filter: blur(2px) !important;
    -webkit-backdrop-filter: blur(2px) !important;
    border-bottom: 1px solid rgba(255, 255, 255, 0.12) !important;
    box-shadow: none !important;
  }



  /* Nav Links in transparent hero state */
  body.has-hero-nav .geni-pos-nav:not(.is-scrolled) .nav-menu-link {
    color: rgba(255, 255, 255, 0.94) !important;
    text-shadow: 0 1px 3px rgba(0, 0, 0, 0.55);
  }
  body.has-hero-nav .geni-pos-nav:not(.is-scrolled) .nav-menu-link:hover,
  body.has-hero-nav .geni-pos-nav:not(.is-scrolled) .nav-menu-link.nav-active {
    color: #FDE68A !important;
    background: rgba(255, 255, 255, 0.12);
  }

  /* Language toggle button in transparent hero state */
  body.has-hero-nav .geni-pos-nav:not(.is-scrolled) .btn-lang-toggle {
    background: rgba(255, 255, 255, 0.14) !important;
    border-color: rgba(255, 255, 255, 0.3) !important;
    color: #FFFFFF !important;
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.3) !important;
  }
  body.has-hero-nav .geni-pos-nav:not(.is-scrolled) .btn-lang-toggle .lang-globe-icon {
    color: #FDE68A !important;
  }
  body.has-hero-nav .geni-pos-nav:not(.is-scrolled) .btn-lang-toggle:hover,
  body.has-hero-nav .geni-pos-nav:not(.is-scrolled) .nav-lang-dropdown.is-open .btn-lang-toggle {
    background: rgba(255, 255, 255, 0.25) !important;
    border-color: rgba(255, 255, 255, 0.5) !important;
  }

  /* Sign in link in transparent hero state */
  body.has-hero-nav .geni-pos-nav:not(.is-scrolled) .btn-signin {
    color: #FFFFFF !important;
    text-shadow: 0 1px 3px rgba(0, 0, 0, 0.55);
  }
  body.has-hero-nav .geni-pos-nav:not(.is-scrolled) .btn-signin:hover {
    color: #FDE68A !important;
  }

  /* Sign up pill in transparent hero state */
  body.has-hero-nav .geni-pos-nav:not(.is-scrolled) .btn-signup-pill {
    background: #FFFFFF !important;
    color: #0A2540 !important;
    box-shadow: 0 4px 18px rgba(0, 0, 0, 0.45) !important;
    font-weight: 700;
  }
  body.has-hero-nav .geni-pos-nav:not(.is-scrolled) .btn-signup-pill:hover {
    background: #FEF3C7 !important;
    color: #0A2540 !important;
    transform: translateY(-1px);
    box-shadow: 0 6px 22px rgba(0, 0, 0, 0.55) !important;
  }

  /* Mobile burger button in transparent hero state */
  body.has-hero-nav .geni-pos-nav:not(.is-scrolled) .nav-burger-btn span {
    background: #FFFFFF !important;
  }

  /* When Scrolled (scrollY > 30): exact current white sticky navbar */
  .geni-pos-nav.is-scrolled {
    background: rgba(255, 255, 255, 0.96) !important;
    backdrop-filter: blur(12px) !important;
    -webkit-backdrop-filter: blur(12px) !important;
    border-bottom: 1px solid #E3E8EE !important;
    box-shadow: 0 4px 20px rgba(10, 37, 64, 0.08) !important;
  }

  .geni-pos-nav * {
    box-sizing: border-box;
  }

  .geni-pos-nav .nav-wrap {
    max-width: 1240px;
    margin: 0 auto;
    padding: 0 24px;
    height: 68px;
    display: flex;
    align-items: center;
    justify-content: space-between;
    gap: 16px;
  }

  /* --- Brand Logo (Geni Menu) --- */
  .geni-pos-nav .nav-brand {
    display: inline-flex;
    align-items: center;
    gap: 11px;
    text-decoration: none;
    flex-shrink: 0;
  }

  .geni-pos-nav .brand-logo-img {
    height: 44px;
    width: auto;
    object-fit: contain;
    display: block;
  }

  .geni-pos-nav .brand-icon-box {
    width: 36px;
    height: 36px;
    display: flex;
    align-items: center;
    justify-content: center;
    flex-shrink: 0;
  }

  .geni-pos-nav .brand-icon-box svg {
    width: 100%;
    height: 100%;
    display: block;
  }

  .geni-pos-nav .brand-name-group {
    display: flex;
    flex-direction: column;
    line-height: 1.15;
  }

  .geni-pos-nav .brand-title {
    font-family: 'Plus Jakarta Sans', system-ui, -apple-system, sans-serif;
    font-size: 21px;
    font-weight: 700;
    color: #0A2540;
    letter-spacing: -0.03em;
    display: inline-flex;
    align-items: center;
    gap: 4px;
  }

  .geni-pos-nav .brand-highlight {
    color: #B45309;
    font-weight: 500;
  }

  .geni-pos-nav .brand-tag {
    font-size: 10px;
    font-weight: 600;
    color: #8B8177;
    letter-spacing: 0.5px;
    text-transform: uppercase;
    margin-top: 1px;
  }

  /* --- Left Brand + Navigation Section --- */
  .geni-pos-nav .nav-left {
    display: flex;
    align-items: center;
    gap: 36px;
  }

  /* Links & Dropdowns */
  .geni-pos-nav .nav-menu {
    display: flex;
    align-items: center;
    gap: 24px;
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
    gap: 5px;
    font-size: 14.5px;
    font-weight: 600;
    color: #0A2540;
    text-decoration: none;
    background: transparent;
    border: none;
    padding: 10px 0;
    cursor: pointer;
    white-space: nowrap;
    transition: color 0.18s ease;
  }

  .geni-pos-nav .nav-menu-link:hover,
  .geni-pos-nav .nav-menu-btn:hover,
  .geni-pos-nav .nav-menu-item:hover .nav-menu-btn {
    color: #B45309;
  }

  .geni-pos-nav .nav-menu-link.nav-active {
    color: #B45309;
    font-weight: 700;
  }

  .geni-pos-nav .chevron-icon {
    width: 9px;
    height: 9px;
    transition: transform 0.2s ease;
    opacity: 0.75;
  }

  .geni-pos-nav .nav-menu-item:hover .chevron-icon {
    transform: rotate(180deg);
    opacity: 1;
    stroke: #B45309;
  }

  /* Dropdown panel */
  .geni-pos-nav .nav-dropdown {
    position: absolute;
    top: 100%;
    left: 50%;
    transform: translateX(-50%) translateY(8px);
    background: #ffffff;
    border: 1px solid #ebebeb;
    border-radius: 12px;
    box-shadow: 0 14px 40px rgba(0, 0, 0, 0.1), 0 4px 12px rgba(0, 0, 0, 0.04);
    opacity: 0;
    visibility: hidden;
    pointer-events: none;
    transition: opacity 0.2s cubic-bezier(0.16, 1, 0.3, 1), transform 0.2s cubic-bezier(0.16, 1, 0.3, 1), visibility 0.2s;
    z-index: 100;
    padding: 12px 8px;
  }

  /* Invisible hover bridge */
  .geni-pos-nav .nav-dropdown::before {
    content: "";
    position: absolute;
    top: -12px;
    left: 0;
    right: 0;
    height: 12px;
  }

  .geni-pos-nav .nav-menu-item:hover .nav-dropdown,
  .geni-pos-nav .nav-menu-item:focus-within .nav-dropdown {
    opacity: 1;
    visibility: visible;
    pointer-events: auto;
    transform: translateX(-50%) translateY(2px);
  }

  /* Features mega dropdown centered horizontally relative to its menu item */
  .geni-pos-nav .nav-dropdown.dropdown-features {
    width: 820px;
    padding: 18px;
    left: 50%;
    transform: translateX(-50%) translateY(8px);
  }

  .geni-pos-nav .nav-menu-item:hover .nav-dropdown.dropdown-features,
  .geni-pos-nav .nav-menu-item:focus-within .nav-dropdown.dropdown-features {
    transform: translateX(-50%) translateY(2px);
  }

  /* Rightmost dropdown alignment */
  .geni-pos-nav .nav-menu-item:last-child .nav-dropdown {
    left: auto;
    right: -20px;
    transform: translateY(8px);
  }

  .geni-pos-nav .nav-menu-item:last-child:hover .nav-dropdown,
  .geni-pos-nav .nav-menu-item:last-child:focus-within .nav-dropdown {
    transform: translateY(2px);
  }

  .geni-pos-nav .dropdown-grid {
    display: grid;
    grid-template-columns: 1fr 1fr 1fr;
    gap: 12px;
  }

  .geni-pos-nav .dropdown-card {
    display: flex;
    gap: 12px;
    padding: 10px 12px;
    border-radius: 8px;
    text-decoration: none;
    color: inherit;
    transition: background 0.15s ease, transform 0.15s ease;
  }

  .geni-pos-nav .dropdown-card:hover {
    background: #f9f9fb;
    transform: translateX(2px);
  }

  .geni-pos-nav .dropdown-card .card-icon {
    width: 38px;
    height: 38px;
    border-radius: 8px;
    background: #fdfaf6;
    color: #9C6F3E;
    display: flex;
    align-items: center;
    justify-content: center;
    flex-shrink: 0;
    border: 1px solid rgba(156, 111, 62, 0.15);
  }

  .geni-pos-nav .dropdown-card .card-icon svg {
    width: 20px;
    height: 20px;
    fill: none;
    stroke: currentColor;
    stroke-width: 1.8;
    stroke-linecap: round;
    stroke-linejoin: round;
  }

  .geni-pos-nav .dropdown-card .card-title {
    font-size: 14px;
    font-weight: 700;
    color: #0A2540;
    margin-bottom: 2px;
  }

  .geni-pos-nav .dropdown-card .card-desc {
    font-size: 12px;
    color: #6E6157;
    line-height: 1.4;
  }

  .geni-pos-nav .dropdown-footer {
    margin-top: 14px;
    padding-top: 12px;
    border-top: 1px solid #E3E8EE;
    display: flex;
    justify-content: space-between;
    align-items: center;
  }

  .geni-pos-nav .dropdown-footer a {
    font-size: 13px;
    font-weight: 600;
    color: #B45309;
    text-decoration: none;
  }

  .geni-pos-nav .dropdown-footer a:hover {
    text-decoration: underline;
  }

  /* Simple dropdown */
  .geni-pos-nav .nav-dropdown.dropdown-simple {
    width: 290px;
    padding: 8px;
    border: 1px solid #E3E8EE;
  }

  .geni-pos-nav .dropdown-link-item {
    display: flex;
    align-items: center;
    gap: 12px;
    padding: 10px 12px;
    border-radius: 8px;
    text-decoration: none;
    color: inherit;
    transition: background 0.15s ease;
  }

  .geni-pos-nav .dropdown-link-item:hover {
    background: #FAF7F2;
  }

  .geni-pos-nav .dropdown-link-item .item-icon {
    width: 36px;
    height: 36px;
    border-radius: 8px;
    background: #FAF7F2;
    color: #B45309;
    display: flex;
    align-items: center;
    justify-content: center;
    flex-shrink: 0;
    border: 1px solid rgba(135, 96, 57, 0.18);
  }

  .geni-pos-nav .dropdown-link-item .item-icon svg {
    width: 18px;
    height: 18px;
    fill: none;
    stroke: currentColor;
    stroke-width: 1.8;
    stroke-linecap: round;
    stroke-linejoin: round;
  }

  .geni-pos-nav .dropdown-link-item .item-title {
    font-size: 13.5px;
    font-weight: 600;
    color: #0A2540;
    display: block;
  }

  .geni-pos-nav .dropdown-link-item .item-sub {
    font-size: 11.5px;
    color: #6E6157;
    display: block;
    margin-top: 1px;
  }

  /* Suppress Google Translate top banner & body offset */
  body > .skiptranslate,
  body > iframe.skiptranslate,
  iframe.skiptranslate,
  .goog-te-banner-frame,
  .goog-te-banner-frame.skiptranslate,
  iframe.goog-te-banner-frame,
  .goog-te-balloon-frame,
  .goog-te-banner,
  body > iframe[id*=":"] {
    display: none !important;
    visibility: hidden !important;
    height: 0px !important;
    width: 0px !important;
    opacity: 0 !important;
    pointer-events: none !important;
    border: none !important;
    position: absolute !important;
    top: -9999px !important;
    left: -9999px !important;
    margin: 0 !important;
    padding: 0 !important;
  }

  html, body {
    top: 0px !important;
    position: static !important;
  }

  /* --- Language Switcher Dropdown (Near Sign In) --- */
  .geni-pos-nav .nav-lang-dropdown {
    position: relative;
    display: inline-flex;
    align-items: center;
  }

  .geni-pos-nav .btn-lang-toggle {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    width: 38px;
    height: 38px;
    padding: 0;
    background: #FAF7F2;
    border: 1px solid rgba(135, 96, 57, 0.22);
    border-radius: 50%;
    font-family: inherit;
    font-size: 13px;
    font-weight: 600;
    color: #0A2540;
    cursor: pointer;
    line-height: 1;
    transition: all 0.2s cubic-bezier(0.16, 1, 0.3, 1);
    user-select: none;
    outline: none;
  }

  .geni-pos-nav .btn-lang-toggle:hover,
  .geni-pos-nav .btn-lang-toggle:focus-visible,
  .geni-pos-nav .nav-lang-dropdown.is-open .btn-lang-toggle {
    background: #F4EFE6;
    border-color: #B45309;
    color: #B45309;
    box-shadow: 0 2px 8px rgba(135, 96, 57, 0.12);
  }

  .geni-pos-nav .lang-globe-icon {
    width: 18px;
    height: 18px;
    flex-shrink: 0;
    color: #B45309;
    transition: transform 0.3s ease;
  }

  .geni-pos-nav .btn-lang-toggle:hover .lang-globe-icon {
    transform: rotate(20deg);
  }

  .geni-pos-nav .btn-lang-toggle .active-lang-code,
  .geni-pos-nav .btn-lang-toggle .lang-chevron {
    display: none !important;
  }

  /* Language Dropdown Menu */
  .geni-pos-nav .lang-dropdown-menu {
    position: absolute;
    top: calc(100% + 10px);
    right: 0;
    min-width: 275px;
    max-width: 320px;
    background: #FFFFFF;
    border: 1px solid #E3E8EE;
    border-radius: 14px;
    box-shadow: 0 16px 40px -8px rgba(10, 37, 64, 0.18), 0 0 0 1px rgba(10, 37, 64, 0.04);
    padding: 8px;
    z-index: 10002;
    display: none;
    flex-direction: column;
    animation: geniDropFade 0.18s cubic-bezier(0.16, 1, 0.3, 1) forwards;
  }

  @keyframes geniDropFade {
    from {
      opacity: 0;
      transform: translateY(-6px) scale(0.98);
    }
    to {
      opacity: 1;
      transform: translateY(0) scale(1);
    }
  }

  .geni-pos-nav .nav-lang-dropdown.is-open .lang-dropdown-menu {
    display: flex;
  }

  .geni-pos-nav .lang-dropdown-header {
    padding: 6px 10px 8px;
    font-size: 11px;
    font-weight: 700;
    text-transform: uppercase;
    letter-spacing: 0.7px;
    color: #6E6157;
    border-bottom: 1px solid #F0ECE6;
    margin-bottom: 6px;
    display: flex;
    align-items: center;
    justify-content: space-between;
  }

  /* Search input */
  .geni-pos-nav .lang-search-box {
    position: relative;
    padding: 0 2px 8px;
  }
  .geni-pos-nav .lang-search-svg {
    position: absolute;
    left: 11px;
    top: 50%;
    transform: translateY(calc(-50% - 4px));
    width: 14px;
    height: 14px;
    color: #8C7E72;
    pointer-events: none;
  }
  .geni-pos-nav .lang-search-input {
    width: 100%;
    padding: 7px 10px 7px 32px;
    background: #FAF7F2;
    border: 1px solid #E3E8EE;
    border-radius: 8px;
    font-family: inherit;
    font-size: 12.5px;
    color: #0A2540;
    outline: none;
    transition: all 0.15s ease;
  }
  .geni-pos-nav .lang-search-input:focus {
    background: #FFFFFF;
    border-color: #B45309;
    box-shadow: 0 0 0 2px rgba(180, 83, 9, 0.12);
  }

  .geni-pos-nav .lang-group-header {
    font-size: 10px;
    font-weight: 700;
    text-transform: uppercase;
    letter-spacing: 0.7px;
    color: #9C6F3E;
    padding: 6px 10px 4px;
  }

  .geni-pos-nav .lang-options-scroll {
    overflow-y: auto;
    max-height: 320px;
    padding-right: 2px;
  }

  .geni-pos-nav .lang-options-scroll::-webkit-scrollbar {
    width: 5px;
  }
  .geni-pos-nav .lang-options-scroll::-webkit-scrollbar-thumb {
    background: #D9D2C7;
    border-radius: 4px;
  }

  .geni-pos-nav .lang-item {
    display: flex;
    align-items: center;
    justify-content: space-between;
    gap: 10px;
    width: 100%;
    padding: 8px 10px;
    background: transparent;
    border: none;
    border-radius: 8px;
    font-family: inherit;
    text-align: left;
    cursor: pointer;
    transition: background 0.15s ease, color 0.15s ease;
    color: #0A2540;
    user-select: none;
    outline: none;
  }

  .geni-pos-nav .lang-item:hover {
    background: #FAF7F2;
    color: #B45309;
  }

  .geni-pos-nav .lang-item.is-active {
    background: #F4EFE6;
    color: #B45309;
    font-weight: 600;
  }

  .geni-pos-nav .lang-item-left {
    display: inline-flex;
    align-items: center;
    gap: 10px;
  }

  .geni-pos-nav .lang-flag {
    font-size: 16px;
    line-height: 1;
    display: inline-block;
  }

  .geni-pos-nav .lang-names {
    display: flex;
    flex-direction: column;
    line-height: 1.25;
  }

  .geni-pos-nav .lang-native {
    font-size: 13.5px;
    font-weight: 600;
    color: inherit;
  }

  .geni-pos-nav .lang-english {
    font-size: 11px;
    color: #6E6157;
  }

  .geni-pos-nav .lang-check {
    width: 16px;
    height: 16px;
    color: #B45309;
    opacity: 0;
    transform: scale(0.7);
    transition: all 0.15s ease;
  }

  .geni-pos-nav .lang-item.is-active .lang-check {
    opacity: 1;
    transform: scale(1);
  }

  /* Mobile Drawer Language Box */
  .geni-pos-nav .mobile-lang-box {
    background: #FAF7F2;
    border: 1px solid #E3E8EE;
    border-radius: 10px;
    padding: 10px 14px;
    margin-bottom: 6px;
  }
  .geni-pos-nav .mobile-lang-label {
    display: flex;
    align-items: center;
    gap: 8px;
    font-size: 11.5px;
    font-weight: 700;
    color: #6E6157;
    text-transform: uppercase;
    letter-spacing: 0.5px;
    margin-bottom: 8px;
  }
  .geni-pos-nav .mobile-lang-select {
    width: 100%;
    padding: 9px 12px;
    background: #FFFFFF;
    border: 1px solid #D9D2C7;
    border-radius: 8px;
    font-family: inherit;
    font-size: 14px;
    font-weight: 600;
    color: #0A2540;
    outline: none;
    cursor: pointer;
  }

  /* --- Right CTA Action Group --- */
  .geni-pos-nav .nav-cta-group {
    display: inline-flex;
    align-items: center;
    gap: 16px;
    flex-shrink: 0;
  }

  .geni-pos-nav .btn-signin {
    font-size: 14px;
    font-weight: 600;
    color: #0A2540;
    text-decoration: none;
    transition: color 0.18s ease;
  }

  .geni-pos-nav .btn-signin:hover {
    color: #B45309;
  }

  /* Geni Menu Sign Up Now pill button */
  .geni-pos-nav .btn-signup-pill {
    background: #0A2540;
    color: #ffffff !important;
    text-decoration: none;
    padding: 9px 24px;
    border-radius: 9999px;
    font-size: 14px;
    font-weight: 600;
    letter-spacing: -0.1px;
    display: inline-flex;
    align-items: center;
    justify-content: center;
    border: none;
    cursor: pointer;
    box-shadow: 0 3px 12px rgba(135, 96, 57, 0.28);
    transition: background 0.18s ease, transform 0.18s ease, box-shadow 0.18s ease;
    white-space: nowrap;
  }

  .geni-pos-nav .btn-signup-pill:hover {
    background: #1A365D;
    transform: translateY(-1px);
    box-shadow: 0 5px 16px rgba(135, 96, 57, 0.38);
  }

  /* Hamburger for mobile */
  .geni-pos-nav .nav-burger-btn {
    display: none;
    background: transparent;
    border: none;
    cursor: pointer;
    padding: 8px 6px;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    gap: 5px;
    width: 38px;
    height: 38px;
    border-radius: 8px;
    transition: background 0.2s ease;
  }

  .geni-pos-nav .nav-burger-btn:hover {
    background: rgba(135, 96, 57, 0.08);
  }

  .geni-pos-nav .nav-burger-btn span {
    display: block;
    width: 22px;
    height: 2px;
    background: #0A2540;
    border-radius: 2px;
    transition: transform 0.25s ease, opacity 0.25s ease, background 0.25s ease;
  }

  .geni-pos-nav .nav-burger-btn.is-active span:nth-child(1) {
    transform: translateY(7px) rotate(45deg);
  }

  .geni-pos-nav .nav-burger-btn.is-active span:nth-child(2) {
    opacity: 0;
  }

  .geni-pos-nav .nav-burger-btn.is-active span:nth-child(3) {
    transform: translateY(-7px) rotate(-45deg);
  }

  /* Mobile Drawer */
  .geni-pos-nav .mobile-panel {
    display: none;
    position: fixed;
    top: 68px;
    left: 0;
    right: 0;
    bottom: 0;
    background: #ffffff;
    overflow-y: auto;
    -webkit-overflow-scrolling: touch;
    padding: 20px 20px 40px;
    z-index: 9998;
    border-top: 1px solid #E3E8EE;
    box-shadow: 0 10px 30px rgba(33, 22, 15, 0.1);
  }

  .geni-pos-nav .mobile-panel.is-open {
    display: block;
  }

  .geni-pos-nav .mobile-list {
    list-style: none;
    margin: 0;
    padding: 0;
  }

  .geni-pos-nav .mobile-list-item {
    border-bottom: 1px solid rgba(135, 96, 57, 0.1);
  }

  .geni-pos-nav .mobile-direct-link,
  .geni-pos-nav .mobile-accordion-btn {
    display: flex;
    align-items: center;
    justify-content: space-between;
    width: 100%;
    padding: 14px 4px;
    font-size: 15px;
    font-weight: 600;
    color: #0A2540;
    text-decoration: none;
    background: transparent;
    border: none;
    cursor: pointer;
    font-family: inherit;
    text-align: left;
  }

  .geni-pos-nav .mobile-chevron {
    width: 16px;
    height: 16px;
    transition: transform 0.25s ease;
    color: #8C7C71;
  }

  .geni-pos-nav .mobile-list-item.is-expanded .mobile-chevron {
    transform: rotate(90deg);
    color: #B45309;
  }

  .geni-pos-nav .mobile-sub-menu {
    display: none;
    padding: 4px 0 14px 8px;
    flex-direction: column;
    gap: 6px;
  }

  .geni-pos-nav .mobile-list-item.is-expanded .mobile-sub-menu {
    display: flex;
  }

  .geni-pos-nav .mobile-sub-link {
    font-size: 13.5px;
    color: #6E6157;
    text-decoration: none;
    display: flex;
    align-items: center;
    gap: 10px;
    padding: 7px 10px;
    border-radius: 8px;
    transition: background 0.15s ease, color 0.15s ease;
  }

  .geni-pos-nav .mobile-sub-link:active,
  .geni-pos-nav .mobile-sub-link:hover {
    background: #FAF7F2;
    color: #B45309;
  }

  .geni-pos-nav .mobile-sub-link svg {
    width: 17px;
    height: 17px;
    fill: none;
    stroke: currentColor;
    stroke-width: 1.8;
    stroke-linecap: round;
    stroke-linejoin: round;
    color: #B45309;
    flex-shrink: 0;
  }

  .geni-pos-nav .mobile-actions {
    margin-top: 24px;
    display: flex;
    flex-direction: column;
    gap: 12px;
  }

  /* Responsive queries */
  @media (max-width: 1080px) {
    .geni-pos-nav .nav-menu {
      display: none;
    }

    .geni-pos-nav .btn-signin {
      display: none;
    }

    .geni-pos-nav .btn-lang-toggle .active-lang-code,
    .geni-pos-nav .btn-lang-toggle .lang-chevron {
      display: none;
    }

    .geni-pos-nav .btn-lang-toggle {
      padding: 8px 9px;
      border-radius: 50%;
    }

    .geni-pos-nav .nav-burger-btn {
      display: flex;
    }
  }

  @media (max-width: 640px) {
    .geni-pos-nav .nav-wrap {
      height: 62px;
      padding: 0 14px;
      gap: 10px;
    }

    .geni-pos-nav .mobile-panel {
      top: 62px;
      padding: 16px 16px 36px;
    }

    .geni-pos-nav .nav-brand .brand-logo-img {
      height: 34px !important;
    }

    .geni-pos-nav .btn-signup-pill {
      padding: 7px 14px;
      font-size: 12.5px;
    }
  }

  @media (max-width: 360px) {
    .geni-pos-nav .nav-wrap {
      padding: 0 10px;
      gap: 6px;
    }

    .geni-pos-nav .nav-brand .brand-logo-img {
      height: 30px !important;
    }

    .geni-pos-nav .btn-signup-pill {
      padding: 6px 10px;
      font-size: 11.5px;
    }
  }
</style>

<header class="geni-pos-nav">
  <div class="nav-wrap">

    <!-- Left side: Brand Logo + Nav Items (Features, Pricing, Solutions, Resources) -->
    <div class="nav-left">
      <!-- Brand Logo: Geni Menu (Click to Home) -->
      <a href="{{ route('home') }}" class="nav-brand" title="Geni Menu - Home">
        <img id="geniNavLogo"
             src="{{ asset('assets/images/geni-menu-logo-light.png') }}"
             data-dark="{{ asset('assets/images/geni-menu-logo.png') }}"
             data-light="{{ asset('assets/images/geni-menu-logo-light.png') }}"
             onerror="this.onerror=null;this.src='{{ asset('assets/images/geni-menu-logo.png') }}';"
             alt="Geni Menu" class="brand-logo-img" style="height: 44px; width: auto; object-fit: contain;">
      </a>

      <!-- Desktop Nav Items -->
      <ul class="nav-menu">

        <!-- 1. Features -->
        <li class="nav-menu-item">
          <a href="{{ route('features') }}" class="nav-menu-link {{ request()->routeIs('features') ? 'nav-active' : '' }}">Features</a>
        </li>

        <!-- 2. Pricing -->
        <li class="nav-menu-item">
          <a href="{{ route('pricing') }}" class="nav-menu-link {{ request()->routeIs('pricing') ? 'nav-active' : '' }}">Pricing</a>
        </li>

        <!-- 3. Solutions -->
        <li class="nav-menu-item">
          <a href="{{ route('solutions') }}" class="nav-menu-link {{ request()->routeIs('solutions*') ? 'nav-active' : '' }}">Solutions</a>
        </li>

        {{-- 4. Resources ⌵ (Hidden) --}}
        {{--
        <li class="nav-menu-item">
          <button type="button" class="nav-menu-btn" aria-haspopup="true">
            <span>Resources</span>
            <svg class="chevron-icon" viewBox="0 0 10 6" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
              <path d="M1 1L5 5L9 1"/>
            </svg>
          </button>
          <div class="nav-dropdown dropdown-simple">
            <a href="{{ route('how-it-works') }}" class="dropdown-link-item">
              <span class="item-icon"><svg viewBox="0 0 24 24"><circle cx="6" cy="12" r="3"/><circle cx="18" cy="6" r="3"/><circle cx="18" cy="18" r="3"/><path d="M9 10.5l6-3M9 13.5l6 3"/></svg></span>
              <div>
                <span class="item-title">How It Works</span>
                <span class="item-sub">Complete 7-step operational loop</span>
              </div>
            </a>
            <a href="{{ route('faq-help') }}" class="dropdown-link-item">
              <span class="item-icon"><svg viewBox="0 0 24 24"><circle cx="12" cy="12" r="10"/><path d="M9.09 9a3 3 0 0 1 5.83 1c0 2-3 3-3 3"/><line x1="12" y1="17" x2="12.01" y2="17"/></svg></span>
              <div>
                <span class="item-title">FAQ & Help</span>
                <span class="item-sub">Setup, printers & hardware guides</span>
              </div>
            </a>
            <a href="{{ route('contact.us') }}" class="dropdown-link-item">
              <span class="item-icon"><svg viewBox="0 0 24 24"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg></span>
              <div>
                <span class="item-title">Contact Support</span>
                <span class="item-sub">Get help from restaurant specialists</span>
              </div>
            </a>
            <a href="{{ route('terms-and-conditions') }}" class="dropdown-link-item">
              <span class="item-icon"><svg viewBox="0 0 24 24"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/><polyline points="14 2 14 8 20 8"/><line x1="16" y1="13" x2="8" y2="13"/><line x1="16" y1="17" x2="8" y2="17"/><polyline points="10 9 9 9 8 9"/></svg></span>
              <div>
                <span class="item-title">Terms & Privacy</span>
                <span class="item-sub">Cloud security & SLA policies</span>
              </div>
            </a>
          </div>
        </li>
        --}}

      </ul>
    </div>

    <!-- Right Side: Language Switcher + Sign In + "Sign Up Now" Pill -->
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
          <svg class="lang-chevron" viewBox="0 0 12 12" fill="currentColor" style="display:none;">
            <path d="M2.22 4.47a.75.75 0 0 1 1.06 0L6 7.19l2.72-2.72a.75.75 0 1 1 1.06 1.06l-3.25 3.25a.75.75 0 0 1-1.06 0L2.22 5.53a.75.75 0 0 1 0-1.06z"/>
          </svg>
        </button>

        <div class="lang-dropdown-menu notranslate" id="langDropdownMenu" role="menu">
          <div class="lang-dropdown-header">
            <span>Select Language</span>
            <span style="font-size: 10px; opacity: 0.7; font-weight: 600;">Global</span>
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

      <a href="{{ route('login') }}" class="btn-signin">
        @if (user())
          @lang('menu.dashboard')
        @else
          Sign In
        @endif
      </a>

      <a href="{{ route('restaurant_signup') }}" class="btn-signup-pill">
        Sign Up Now
      </a>

      <!-- Hamburger toggle for mobile/tablet -->
      <button type="button" class="nav-burger-btn" id="geniNavBurger" aria-label="Toggle Navigation">
        <span></span>
        <span></span>
        <span></span>
      </button>
    </div>

  </div>

  <!-- Mobile Drawer Menu -->
  <div class="mobile-panel" id="geniMobilePanel">

    <ul class="mobile-list">

      <li class="mobile-list-item">
        <a href="{{ route('features') }}" class="mobile-direct-link" onclick="closeGeniMobile()">
          <span>Features</span>
          <span style="font-size: 13px; color: #9C6F3E;">&rarr;</span>
        </a>
      </li>

      <li class="mobile-list-item">
        <a href="{{ route('pricing') }}" class="mobile-direct-link" onclick="closeGeniMobile()">
          <span>Pricing</span>
          <span style="font-size: 13px; color: #9C6F3E;">&rarr;</span>
        </a>
      </li>

      <li class="mobile-list-item">
        <a href="{{ route('solutions') }}" class="mobile-direct-link" onclick="closeGeniMobile()">
          <span>Solutions</span>
          <span style="font-size: 13px; color: #9C6F3E;">&rarr;</span>
        </a>
      </li>

      {{-- Resources (Hidden) --}}
      {{--
      <li class="mobile-list-item" id="mobItemResources">
        <button type="button" class="mobile-accordion-btn" onclick="toggleMobSubmenu('mobItemResources')">
          <span>Resources</span>
          <svg class="mobile-chevron" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="9 18 15 12 9 6"></polyline></svg>
        </button>
        <div class="mobile-sub-menu">
          <a href="{{ route('how-it-works') }}" class="mobile-sub-link" onclick="closeGeniMobile()"><svg viewBox="0 0 24 24"><circle cx="6" cy="12" r="3"/><circle cx="18" cy="6" r="3"/><circle cx="18" cy="18" r="3"/><path d="M9 10.5l6-3M9 13.5l6 3"/></svg> How It Works</a>
          <a href="{{ route('faq-help') }}" class="mobile-sub-link" onclick="closeGeniMobile()"><svg viewBox="0 0 24 24"><circle cx="12" cy="12" r="10"/><path d="M9.09 9a3 3 0 0 1 5.83 1c0 2-3 3-3 3"/><line x1="12" y1="17" x2="12.01" y2="17"/></svg> FAQ & Help</a>
          <a href="{{ route('contact.us') }}" class="mobile-sub-link" onclick="closeGeniMobile()"><svg viewBox="0 0 24 24"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg> Contact Support</a>
          <a href="{{ route('terms-and-conditions') }}" class="mobile-sub-link" onclick="closeGeniMobile()"><svg viewBox="0 0 24 24"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/><polyline points="14 2 14 8 20 8"/><line x1="16" y1="13" x2="8" y2="13"/><line x1="16" y1="17" x2="8" y2="17"/><polyline points="10 9 9 9 8 9"/></svg> Terms & Policies</a>
        </div>
      </li>
      --}}

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
         class="btn-signup-pill" style="width:100%;text-align:center;padding:12px 20px;font-size:14px;">
        Sign Up Now
      </a>

      <a href="{{ route('login') }}" class="btn-signin" style="display:block;text-align:center;padding:12px;font-weight:600;color:#2A2420;">
        @if (user())
          @lang('menu.dashboard')
        @else
          Sign In to Your Restaurant &rarr;
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
    // 1. Check googtrans cookie
    var m = document.cookie.match(/(?:^|;\s*)googtrans=([^;]+)/);
    if (m) {
      var parts = decodeURIComponent(m[1]).split('/');
      var c = parts[parts.length - 1];
      if (c && c !== 'auto' && GENI_LANG_MAP[c]) {
        return c;
      }
    }
    // 2. Check localStorage
    var ls = localStorage.getItem('geni_selected_locale');
    if (ls && GENI_LANG_MAP[ls]) {
      return ls;
    }
    // 3. Fallback to session / default
    return '{{ session("customer_locale") ?? app()->getLocale() ?? "en" }}';
  }

  function setLanguageCookies(lang) {
    var val = (lang === 'en') ? '/en/en' : ('/en/' + lang);
    var host = window.location.hostname;

    // Remove old cookies
    var delStr = '=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/;';
    document.cookie = 'googtrans' + delStr;
    document.cookie = 'googtrans' + delStr + ' domain=' + host + ';';
    if (host.indexOf('.') !== -1 && !/^\d+\.\d+\.\d+\.\d+$/.test(host)) {
      document.cookie = 'googtrans' + delStr + ' domain=.' + host + ';';
    }

    // Set new cookie across variations
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

    // Sync with Laravel backend session via AJAX
    try {
      fetch('/change-locale/' + code, {
        method: 'GET',
        headers: { 'X-Requested-With': 'XMLHttpRequest' }
      }).catch(function() {});
    } catch(e) {}

    // Trigger Google Translate live combobox if already rendered
    var combo = document.querySelector('.goog-te-combo');
    if (combo) {
      combo.value = code;
      combo.dispatchEvent(new Event('change'));
    }

    // Handle RTL
    if (GENI_LANG_MAP[code].rtl) {
      document.documentElement.setAttribute('dir', 'rtl');
    } else {
      document.documentElement.setAttribute('dir', 'ltr');
    }

    // Close dropdown
    closeLangMenu();

    // Reload page smoothly to translate all full-page content
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

    // Update active label
    var labelEl = document.getElementById('activeLangLabel');
    if (labelEl && GENI_LANG_MAP[current]) {
      labelEl.textContent = GENI_LANG_MAP[current].native;
    }

    // Update active item in dropdown
    document.querySelectorAll('.lang-item').forEach(function(item) {
      if (item.getAttribute('data-code') === current) {
        item.classList.add('is-active');
      } else {
        item.classList.remove('is-active');
      }
    });

    // Update mobile select
    var mobSelect = document.getElementById('mobileLangSelect');
    if (mobSelect) {
      mobSelect.value = current;
    }

    // Set RTL if Arabic
    if (GENI_LANG_MAP[current] && GENI_LANG_MAP[current].rtl) {
      document.documentElement.setAttribute('dir', 'rtl');
    }

    // Attach click toggle
    var btn = document.getElementById('btnLangToggle');
    if (btn) {
      btn.addEventListener('click', toggleLangMenu);
    }

    // Close on outside click
    document.addEventListener('click', function(e) {
      var dropdown = document.getElementById('geniLangDropdown');
      if (dropdown && !dropdown.contains(e.target)) {
        closeLangMenu();
      }
    });

    // Close on ESC key
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

  function toggleMobSubmenu(itemId) {
    var item = document.getElementById(itemId);
    if (item) {
      item.classList.toggle('is-expanded');
    }
  }

  function handleNavScroll() {
    var nav = document.querySelector('.geni-pos-nav');
    var logo = document.getElementById('geniNavLogo');
    if (!nav) return;
    var isHomeWithHero = document.body.classList.contains('has-hero-nav');
    if (window.scrollY > 30 || !isHomeWithHero) {
      nav.classList.add('is-scrolled');
      if (logo && logo.dataset.dark && !logo.src.endsWith('geni-menu-logo.png')) {
        logo.src = logo.dataset.dark;
      }
    } else {
      nav.classList.remove('is-scrolled');
      if (logo && logo.dataset.light && !logo.src.endsWith('geni-menu-logo-light.png')) {
        logo.src = logo.dataset.light;
      }
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
