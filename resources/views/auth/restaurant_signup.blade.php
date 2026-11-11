<x-auth-layout>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">
<link href="https://fonts.cdnfonts.com/css/glacial-indifference-2" rel="stylesheet">

<style>
  @import url('https://fonts.googleapis.com/css2?family=Cinzel:wght@400;500;600;700;800;900&display=swap');
  @import url('https://fonts.cdnfonts.com/css/glacial-indifference-2');

  :root {
    --brand-primary: #876039;
    --brand-primary-hover: #6f4e2d;
    --brand-cream: #F8F5EF;
    --brand-cream-light: #FAF4ED;
    --brand-ink: #21160F;
    --brand-mute: #6E6157;
    --brand-border: #E8DFD5;
  }

  .signup-split-page {
    height: 100vh;
    min-height: 100vh;
    max-height: 100vh;
    overflow: hidden;
    display: flex;
    background: #FFFFFF;
    font-family: 'Glacial Indifference', system-ui, -apple-system, sans-serif !important;
    color: var(--brand-ink);
  }

  /* ---------------- LEFT VISUAL PANEL ---------------- */
  .signup-visual-panel {
    flex: 0 0 45%;
    height: 100vh;
    position: relative;
    background: #1F1610;
    overflow: hidden;
    display: flex;
    flex-direction: column;
    justify-content: space-between;
    padding: 38px 40px;
    color: #FFFFFF;
    font-family: 'Glacial Indifference', sans-serif !important;
  }

  .signup-visual-bg {
    position: absolute;
    inset: 0;
    background-image: url('{{ asset('assets/images/home/register.png') }}');
    background-size: cover;
    background-position: center;
    transform: scale(1.02);
  }

  .signup-visual-overlay {
    position: absolute;
    inset: 0;
    background: linear-gradient(180deg, rgba(31, 22, 16, 0.72) 0%, rgba(31, 22, 16, 0.92) 100%);
  }

  .signup-visual-content {
    position: relative;
    z-index: 2;
    height: 100%;
    display: flex;
    flex-direction: column;
    justify-content: space-between;
    gap: 20px;
  }

  .signup-visual-badge {
    display: inline-flex;
    align-items: center;
    gap: 8px;
    padding: 6px 14px;
    background: rgba(255, 255, 255, 0.12);
    border: 1px solid rgba(255, 255, 255, 0.22);
    border-radius: 9999px;
    font-family: 'Cinzel', serif !important;
    font-size: 11px;
    font-weight: 600;
    letter-spacing: 0.8px;
    text-transform: uppercase !important;
    color: #FAF4ED;
    backdrop-filter: blur(8px);
    margin-bottom: 12px;
    width: fit-content;
  }

  .signup-visual-badge-dot {
    width: 6px;
    height: 6px;
    border-radius: 50%;
    background: #10B981;
    box-shadow: 0 0 6px #10B981;
  }

  .signup-visual-top {
    text-align: center;
  }

  .signup-visual-heading {
    font-family: 'Cinzel', serif !important;
    font-size: 24px !important;
    font-weight: 700 !important;
    text-transform: uppercase !important;
    color: #FFFFFF;
    letter-spacing: 0.5px;
    line-height: 1.25;
    margin: 0 0 8px;
  }

  .signup-visual-desc {
    font-family: 'Glacial Indifference', sans-serif !important;
    font-size: 13.5px;
    line-height: 1.5;
    color: rgba(255, 255, 255, 0.85);
    margin: 0;
  }

  .signup-visual-subheading {
    font-family: 'Cinzel', serif !important;
    font-size: 11.5px !important;
    font-weight: 700 !important;
    text-transform: uppercase !important;
    letter-spacing: 0.8px;
    color: #F2C58D;
    margin-bottom: 12px;
    display: flex;
    align-items: center;
    gap: 7px;
  }

  /* Key Benefits Cards */
  .signup-benefits-grid {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 12px 14px;
  }

  .signup-benefit-card {
    display: flex;
    align-items: center;
    gap: 12px;
    padding: 10px 14px;
    background: rgba(255, 255, 255, 0.08);
    backdrop-filter: blur(12px);
    -webkit-backdrop-filter: blur(12px);
    border: 1px solid rgba(255, 255, 255, 0.16);
    border-radius: 12px;
    transition: transform 0.2s ease, background 0.2s ease;
  }

  .signup-benefit-card:hover {
    background: rgba(255, 255, 255, 0.14);
    transform: translateY(-2px);
  }

  .signup-benefit-card.span-2 {
    grid-column: span 2;
  }

  .signup-benefit-icon-wrap {
    width: 34px;
    height: 34px;
    border-radius: 10px;
    background: rgba(242, 197, 141, 0.18);
    border: 1px solid rgba(242, 197, 141, 0.35);
    color: #F2C58D;
    display: flex;
    align-items: center;
    justify-content: center;
    flex-shrink: 0;
  }

  .signup-benefit-text {
    font-family: 'Glacial Indifference', sans-serif !important;
    font-size: 13px;
    color: #FAF4ED;
    font-weight: 600;
    line-height: 1.25;
  }

  /* Quick Contact Box */
  .signup-contact-card {
    background: rgba(255, 255, 255, 0.08);
    backdrop-filter: blur(14px);
    -webkit-backdrop-filter: blur(14px);
    border: 1px solid rgba(255, 255, 255, 0.18);
    border-radius: 14px;
    padding: 16px 18px;
  }

  .signup-contact-header {
    margin-bottom: 12px;
  }

  .signup-contact-title {
    font-family: 'Cinzel', serif !important;
    font-size: 13px !important;
    font-weight: 700 !important;
    text-transform: uppercase !important;
    color: #FAF4ED;
    letter-spacing: 0.4px;
    margin: 0 0 3px;
  }

  .signup-contact-sub {
    font-family: 'Glacial Indifference', sans-serif !important;
    font-size: 11.5px;
    color: rgba(255, 255, 255, 0.75);
    margin: 0;
  }

  .signup-contact-rows {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 12px;
  }

  @media (max-width: 1150px) {
    .signup-contact-rows {
      grid-template-columns: 1fr;
      gap: 10px;
    }
  }

  .signup-contact-tile {
    display: flex;
    align-items: center;
    gap: 12px;
    background: rgba(0, 0, 0, 0.28);
    padding: 10px 14px;
    border-radius: 10px;
    border: 1px solid rgba(255, 255, 255, 0.10);
    transition: background 0.2s ease, border-color 0.2s ease;
  }

  .signup-contact-tile:hover {
    background: rgba(0, 0, 0, 0.38);
    border-color: rgba(242, 197, 141, 0.4);
  }

  .signup-contact-icon {
    width: 32px;
    height: 32px;
    border-radius: 50%;
    background: rgba(242, 197, 141, 0.2);
    border: 1px solid rgba(242, 197, 141, 0.35);
    color: #F2C58D;
    display: flex;
    align-items: center;
    justify-content: center;
    flex-shrink: 0;
    margin-top: 1px;
  }

  .signup-contact-info {
    display: flex;
    flex-direction: column;
    gap: 2px;
  }

  .signup-contact-label {
    font-family: 'Glacial Indifference', sans-serif !important;
    font-size: 11.5px;
    font-weight: 600;
    color: rgba(255, 255, 255, 0.72);
    line-height: 1.2;
  }

  .signup-contact-link {
    color: #F2C58D;
    text-decoration: none;
    font-weight: 700;
    font-size: 12.5px;
    white-space: nowrap;
    transition: color 0.18s;
    line-height: 1.25;
  }

  .signup-contact-link:hover {
    color: #FFFFFF;
    text-decoration: underline;
  }

  .signup-contact-desc {
    font-family: 'Glacial Indifference', sans-serif !important;
    font-size: 10.5px;
    color: rgba(255, 255, 255, 0.68);
    line-height: 1.3;
  }

  /* Bottom Tagline */
  .signup-visual-footer {
    border-top: 1px solid rgba(255, 255, 255, 0.18);
    padding-top: 14px;
    margin-top: 0;
  }

  .signup-visual-tagline {
    font-family: 'Cinzel', serif !important;
    font-size: 13px !important;
    font-weight: 700 !important;
    text-transform: uppercase !important;
    letter-spacing: 0.8px;
    color: #F2C58D;
    margin: 0;
    text-align: center;
  }

  /* ---------------- RIGHT FORM PANEL ---------------- */
  .signup-form-panel {
    flex: 1 1 58%;
    height: 100vh;
    display: flex;
    flex-direction: column;
    justify-content: center;
    padding: 24px 38px;
    background: #FFFFFF;
    overflow-y: auto;
    font-family: 'Glacial Indifference', sans-serif !important;
  }

  .signup-panel-inner {
    max-width: 580px;
    width: 100%;
    margin: auto;
    padding: 0;
  }

  .signup-brand-logo {
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 12px;
    text-decoration: none;
    margin: 0 auto 22px auto;
    width: fit-content;
  }

  .signup-brand-logo img {
    height: 42px;
    width: auto;
    object-fit: contain;
    flex-shrink: 0;
  }

  .signup-brand-text {
    display: flex;
    flex-direction: column;
    line-height: 1.15;
  }

  .signup-brand-name {
    font-family: 'Cinzel', serif !important;
    font-size: 20px !important;
    font-weight: 700 !important;
    text-transform: uppercase !important;
    color: #32180F !important;
    letter-spacing: 0.5px;
  }

  .signup-brand-name span {
    color: #B45309;
  }

  .signup-brand-tagline {
    font-family: 'Glacial Indifference', sans-serif !important;
    font-size: 10px;
    font-weight: 700;
    color: #8B8177;
    letter-spacing: 0.6px;
    text-transform: uppercase;
    margin-top: 1px;
  }

  /* Minimal Footer */
  .signup-panel-footer {
    margin-top: 22px;
    padding-top: 14px;
    border-top: 1px solid #F1E9DF;
    display: flex;
    align-items: center;
    justify-content: space-between;
    font-family: 'Glacial Indifference', sans-serif !important;
    font-size: 11.5px;
    color: #8C7C71;
    flex-wrap: wrap;
    gap: 10px;
  }

  .signup-footer-links {
    display: flex;
    gap: 12px;
  }

  .signup-footer-links a {
    color: #8C7C71;
    text-decoration: none;
  }

  .signup-footer-links a:hover {
    color: var(--brand-primary);
  }

  /* ---------------- RESPONSIVE STYLES ---------------- */
  @media (max-width: 1024px) {
    .signup-visual-panel {
      flex: 0 0 36%;
      padding: 24px;
    }
    .signup-form-panel {
      padding: 16px 20px;
    }
  }

  @media (max-width: 860px) {
    .signup-split-page {
      height: auto;
      min-height: 100vh;
      max-height: none;
      overflow: visible;
      flex-direction: column;
    }
    .signup-visual-panel {
      display: none; /* Focus on onboarding form on mobile */
    }
    .signup-form-panel {
      height: auto;
      flex: 1 1 auto;
      padding: 24px 16px;
      min-height: 100vh;
      justify-content: flex-start;
    }
    .signup-panel-inner {
      padding: 0;
      max-width: 100%;
    }
  }
</style>

<div class="signup-split-page">

  {{-- 1. LEFT VISUAL PANEL (Restaurant Management Showcase) --}}
  <div class="signup-visual-panel">
    <div class="signup-visual-bg"></div>
    <div class="signup-visual-overlay"></div>

    <div class="signup-visual-content">
      {{-- 1. Top Brand / Heading Section --}}
      <div class="signup-visual-top">
        <h1 class="signup-visual-heading">Create Your Geni Menu Account</h1>

        <p class="signup-visual-desc">
          Get your digital menu live in minutes.
        </p>
      </div>

      {{-- 2. Key Benefits Section --}}
      <div class="signup-visual-benefits-section">
        <div class="signup-visual-subheading">
          <svg style="width:13px; height:13px;" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
          <span>KEY BENEFITS</span>
        </div>

        <div class="signup-benefits-grid">
          <div class="signup-benefit-card">
            <div class="signup-benefit-icon-wrap">
              <svg viewBox="0 0 24 24" style="width:17px; height:17px;" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="3" width="7" height="7" rx="1.5"></rect><rect x="14" y="3" width="7" height="7" rx="1.5"></rect><rect x="14" y="14" width="7" height="7" rx="1.5"></rect><rect x="3" y="14" width="7" height="7" rx="1.5"></rect></svg>
            </div>
            <span class="signup-benefit-text">QR Digital Menu</span>
          </div>

          <div class="signup-benefit-card">
            <div class="signup-benefit-icon-wrap">
              <svg viewBox="0 0 24 24" style="width:17px; height:17px;" fill="none" stroke="currentColor" stroke-width="2"><path d="M4 6h16M4 12h10M4 18h14"></path><circle cx="18" cy="12" r="2"></circle></svg>
            </div>
            <span class="signup-benefit-text">Easy Menu Management</span>
          </div>

          <div class="signup-benefit-card">
            <div class="signup-benefit-icon-wrap">
              <svg viewBox="0 0 24 24" style="width:17px; height:17px;" fill="none" stroke="currentColor" stroke-width="2"><path d="M21.5 2v6h-6M21.34 15.57a10 10 0 1 1-.57-8.38l5.67-5.67"></path></svg>
            </div>
            <span class="signup-benefit-text">Real-Time Menu Updates</span>
          </div>

          <div class="signup-benefit-card">
            <div class="signup-benefit-icon-wrap">
              <svg viewBox="0 0 24 24" style="width:17px; height:17px;" fill="none" stroke="currentColor" stroke-width="2"><line x1="18" y1="20" x2="18" y2="10"></line><line x1="12" y1="20" x2="12" y2="4"></line><line x1="6" y1="20" x2="6" y2="14"></line></svg>
            </div>
            <span class="signup-benefit-text">Sales &amp; Menu Insights</span>
          </div>

          <div class="signup-benefit-card span-2">
            <div class="signup-benefit-icon-wrap">
              <svg viewBox="0 0 24 24" style="width:17px; height:17px;" fill="none" stroke="currentColor" stroke-width="2"><path d="M18 10h-1.26A8 8 0 1 0 9 20h9a5 5 0 0 0 0-10z"></path></svg>
            </div>
            <span class="signup-benefit-text">Cloud-Based Access</span>
          </div>
        </div>
      </div>

      {{-- 3. Quick Contact Section --}}
      <div class="signup-contact-card">
        <div class="signup-contact-header">
          <h3 class="signup-contact-title">Need Assistance? We're Here to Help.</h3>
          <p class="signup-contact-sub">Have questions about Geni Menu? Get in touch with our team.</p>
        </div>

        <div class="signup-contact-rows">
          {{-- Phone Tile --}}
          <div class="signup-contact-tile">
            <div class="signup-contact-icon">
              <svg viewBox="0 0 24 24" style="width:15px; height:15px;" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path></svg>
            </div>
            <div class="signup-contact-info">
              <span class="signup-contact-label">Quick Contact</span>
              <a href="tel:+918667205661" class="signup-contact-link">+9186672 05661</a>
            </div>
          </div>

          {{-- Email Tile --}}
          <div class="signup-contact-tile">
            <div class="signup-contact-icon">
              <svg viewBox="0 0 24 24" style="width:15px; height:15px;" fill="none" stroke="currentColor" stroke-width="2"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline points="22,6 12,13 2,6"></polyline></svg>
            </div>
            <div class="signup-contact-info">
              <span class="signup-contact-label">Email Us</span>
              <a href="mailto:genimenuglobal@gmail.com" class="signup-contact-link">genimenuglobal@gmail.com</a>
            </div>
          </div>
        </div>
      </div>


    </div>
  </div>

  {{-- 2. RIGHT FORM PANEL (Livewire Signup Wizard) --}}
  <div class="signup-form-panel">
    <div class="signup-panel-inner">

      {{-- Logo --}}
      <a href="{{ url('/') }}" class="signup-brand-logo" title="Geni Menu">
        <img src="https://menu.wegeni.com/user-uploads/logo/22afe8e48716500b5a2730bca0ede64a.png"
             onerror="this.src='{{ asset('assets/images/geni-menu-logo-light.png') }}'"
             alt="Geni Menu Logo">
        <span class="signup-brand-text">
          <span class="signup-brand-name">Geni <span>Menu</span></span>
        </span>
      </a>

      {{-- Reactive Livewire Form --}}
      @livewire('forms.restaurantSignup')

      {{-- Minimal Footer --}}
      <div class="signup-panel-footer">
        <span>&copy; {{ date('Y') }} Geni Menu. All rights reserved.</span>
        <div class="signup-footer-links">
          <a href="{{ Route::has('privacy.policy') ? route('privacy.policy') : (Route::has('privacy-and-policy') ? route('privacy-and-policy') : url('/privacy-policy')) }}">Privacy Policy</a>
          <span>&bull;</span>
          <a href="{{ Route::has('terms.conditions') ? route('terms.conditions') : (Route::has('terms-and-conditions') ? route('terms-and-conditions') : url('/terms-and-conditions')) }}">Terms &amp; Conditions</a>
        </div>
      </div>

    </div>
  </div>

</div>
</x-auth-layout>
