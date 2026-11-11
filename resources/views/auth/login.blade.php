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

  /* Global Container - Strictly 100vh with NO scroll on desktop */
  .login-split-page {
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
  .login-visual-panel {
    flex: 0 0 45%;
    height: 100vh;
    position: relative;
    background: #1F1610;
    overflow: hidden;
    display: flex;
    flex-direction: column;
    justify-content: center;
    padding: 38px 42px;
    color: #FFFFFF;
    font-family: 'Glacial Indifference', sans-serif !important;
  }

  .login-visual-bg {
    position: absolute;
    inset: 0;
    background-image: url('{{ asset('assets/images/home/login.png') }}');
    background-size: cover;
    background-position: center;
    transform: scale(1.02);
  }

  .login-visual-overlay {
    position: absolute;
    inset: 0;
    background: linear-gradient(180deg, rgba(31, 22, 16, 0.70) 0%, rgba(31, 22, 16, 0.88) 100%);
  }

  .login-visual-content {
    position: relative;
    z-index: 2;
    height: 100%;
    display: flex;
    flex-direction: column;
    justify-content: space-between;
    gap: 20px;
    max-width: 480px;
    margin: 0 auto;
    width: 100%;
    padding: 36px 0 14px 0;
  }

  .login-visual-top {
    text-align: center;
  }

  .login-visual-heading {
    font-family: 'Cinzel', serif !important;
    font-size: 23px !important;
    font-weight: 700 !important;
    text-transform: uppercase !important;
    color: #FFFFFF;
    letter-spacing: 0.5px;
    line-height: 1.25;
    margin: 0 0 10px;
    text-align: center;
  }

  .login-visual-desc {
    font-family: 'Glacial Indifference', sans-serif !important;
    font-size: 13.5px;
    line-height: 1.5;
    color: rgba(255, 255, 255, 0.85);
    margin: 0;
    text-align: center;
  }

  .login-visual-subheading {
    font-family: 'Cinzel', serif !important;
    font-size: 11.5px !important;
    font-weight: 700 !important;
    text-transform: uppercase !important;
    letter-spacing: 0.8px;
    color: #F2C58D;
    margin-bottom: 14px;
    display: flex;
    align-items: center;
    gap: 7px;
  }

  .login-highlights-list {
    display: flex;
    flex-direction: column;
    gap: 12px;
  }

  .login-highlight-card {
    display: flex;
    align-items: center;
    gap: 14px;
    padding: 12px 16px;
    background: rgba(255, 255, 255, 0.08);
    backdrop-filter: blur(14px);
    -webkit-backdrop-filter: blur(14px);
    border: 1px solid rgba(255, 255, 255, 0.16);
    border-radius: 12px;
    transition: transform 0.2s ease, background 0.2s ease;
  }

  .login-highlight-card:hover {
    background: rgba(255, 255, 255, 0.14);
    transform: translateY(-2px);
  }

  .login-highlight-icon-wrap {
    width: 36px;
    height: 36px;
    border-radius: 10px;
    background: rgba(242, 197, 141, 0.18);
    border: 1px solid rgba(242, 197, 141, 0.35);
    color: #F2C58D;
    display: flex;
    align-items: center;
    justify-content: center;
    flex-shrink: 0;
  }

  .login-highlight-info {
    display: flex;
    flex-direction: column;
    gap: 2px;
    min-width: 0;
  }

  .login-highlight-title {
    font-family: 'Glacial Indifference', sans-serif !important;
    font-size: 13.5px;
    font-weight: 700;
    color: #FAF4ED;
    line-height: 1.25;
  }

  .login-highlight-desc {
    font-family: 'Glacial Indifference', sans-serif !important;
    font-size: 12px;
    color: rgba(255, 255, 255, 0.72);
    line-height: 1.35;
  }

  /* Quick Contact Box */
  .login-contact-card {
    background: rgba(255, 255, 255, 0.08);
    backdrop-filter: blur(14px);
    -webkit-backdrop-filter: blur(14px);
    border: 1px solid rgba(255, 255, 255, 0.18);
    border-radius: 14px;
    padding: 14px 18px;
  }

  .login-contact-header {
    margin-bottom: 10px;
  }

  .login-contact-title {
    font-family: 'Cinzel', serif !important;
    font-size: 13px !important;
    font-weight: 700 !important;
    text-transform: uppercase !important;
    color: #FAF4ED;
    letter-spacing: 0.4px;
    margin: 0 0 3px;
  }

  .login-contact-sub {
    font-family: 'Glacial Indifference', sans-serif !important;
    font-size: 11.5px;
    color: rgba(255, 255, 255, 0.75);
    margin: 0;
  }

  .login-contact-tile {
    display: flex;
    align-items: center;
    gap: 12px;
    background: rgba(0, 0, 0, 0.28);
    padding: 9px 14px;
    border-radius: 10px;
    border: 1px solid rgba(255, 255, 255, 0.10);
    transition: background 0.2s ease, border-color 0.2s ease;
  }

  .login-contact-tile:hover {
    background: rgba(0, 0, 0, 0.38);
    border-color: rgba(242, 197, 141, 0.4);
  }

  .login-contact-icon {
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
  }

  .login-contact-info {
    display: flex;
    flex-direction: column;
    gap: 2px;
    min-width: 0;
  }

  .login-contact-label {
    font-family: 'Glacial Indifference', sans-serif !important;
    font-size: 11px;
    font-weight: 600;
    color: rgba(255, 255, 255, 0.72);
    line-height: 1.2;
  }

  .login-contact-link {
    color: #F2C58D;
    text-decoration: none;
    font-weight: 700;
    font-size: 13px;
    white-space: nowrap;
    transition: color 0.18s;
    line-height: 1.25;
  }

  .login-contact-link:hover {
    color: #FFFFFF;
    text-decoration: underline;
  }

  /* ---------------- RIGHT FORM PANEL ---------------- */
  .login-form-panel {
    flex: 1 1 55%;
    height: 100vh;
    display: flex;
    flex-direction: column;
    justify-content: center;
    padding: 24px 38px;
    background: #FFFFFF;
    overflow-y: auto;
    font-family: 'Glacial Indifference', sans-serif !important;
  }

  .login-panel-inner {
    max-width: 440px;
    width: 100%;
    margin: auto;
    padding: 0;
  }

  /* Centered Brand Logo */
  .login-brand-logo {
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 12px;
    text-decoration: none;
    margin: 0 auto 20px auto;
    width: fit-content;
  }

  .login-brand-logo img {
    height: 42px;
    width: auto;
    object-fit: contain;
    flex-shrink: 0;
  }

  .login-brand-text {
    display: flex;
    flex-direction: column;
    line-height: 1.15;
  }

  .login-brand-name {
    font-family: 'Cinzel', serif !important;
    font-size: 20px !important;
    font-weight: 700 !important;
    text-transform: uppercase !important;
    color: #32180F !important;
    letter-spacing: 0.5px;
  }

  .login-brand-name span {
    color: #B45309;
  }

  /* Centered Heading Area */
  .login-heading-area {
    margin-bottom: 22px;
    text-align: center;
  }

  .login-title {
    font-family: 'Cinzel', serif !important;
    font-size: 20px !important;
    font-weight: 700 !important;
    text-transform: uppercase !important;
    letter-spacing: 0.5px !important;
    color: #32180F !important;
    line-height: 1.25 !important;
    margin: 0 0 6px !important;
    text-align: center !important;
  }

  .login-subtitle {
    font-family: 'Glacial Indifference', sans-serif !important;
    font-size: 13px !important;
    color: #6E6157;
    line-height: 1.45;
    margin: 0;
    text-align: center;
  }

  /* Alerts */
  .login-alert-box {
    background: #FEF2F2;
    border: 1px solid #FCA5A5;
    border-radius: 10px;
    padding: 10px 14px;
    margin-bottom: 16px;
    display: flex;
    align-items: flex-start;
    gap: 8px;
    font-size: 12px;
    color: #991B1B;
    font-family: 'Glacial Indifference', sans-serif !important;
  }

  .login-alert-box svg {
    width: 16px;
    height: 16px;
    flex-shrink: 0;
    margin-top: 1px;
  }

  .login-status-box {
    background: #ECFDF5;
    border: 1px solid #A7F3D0;
    border-radius: 10px;
    padding: 10px 14px;
    margin-bottom: 16px;
    font-size: 12.5px;
    color: #065F46;
    font-family: 'Glacial Indifference', sans-serif !important;
  }

  /* Field Groups */
  .login-field {
    margin-bottom: 16px;
  }

  .login-field label {
    display: block;
    font-family: 'Glacial Indifference', sans-serif !important;
    font-size: 12.5px;
    font-weight: 600;
    color: #21160F;
    margin-bottom: 5px;
  }

  .login-input-wrap {
    position: relative;
    display: flex;
    align-items: center;
  }

  .login-input-icon {
    position: absolute;
    left: 14px;
    color: #8C7C71;
    pointer-events: none;
    width: 16px;
    height: 16px;
    display: flex;
    align-items: center;
    justify-content: center;
  }

  .login-input-icon svg {
    width: 16px;
    height: 16px;
  }

  .login-input {
    width: 100%;
    height: 42px;
    padding: 0 14px 0 40px;
    background: #FFFFFF;
    border: 1.5px solid #E8DFD5;
    border-radius: 10px;
    font-size: 13.5px;
    color: #21160F;
    outline: none;
    transition: all 0.2s ease;
    font-family: 'Glacial Indifference', sans-serif !important;
  }

  .login-input::placeholder {
    color: #9C8E82;
  }

  .login-input:focus {
    border-color: #876039;
    box-shadow: 0 0 0 3px rgba(135, 96, 57, 0.15);
  }

  .login-input.has-error {
    border-color: #EF4444;
  }

  /* Password eye toggle */
  .login-pw-toggle {
    position: absolute;
    right: 10px;
    background: transparent;
    border: none;
    padding: 6px;
    cursor: pointer;
    color: #8C7C71;
    display: flex;
    align-items: center;
    justify-content: center;
    border-radius: 6px;
    transition: color 0.18s;
  }

  .login-pw-toggle:hover {
    color: #876039;
  }

  .login-pw-toggle svg {
    width: 18px;
    height: 18px;
  }

  /* Remember & Forgot row */
  .login-options-row {
    display: flex;
    align-items: center;
    justify-content: space-between;
    margin-bottom: 20px;
    font-family: 'Glacial Indifference', sans-serif !important;
    font-size: 12.5px;
  }

  .login-remember-label {
    display: inline-flex;
    align-items: center;
    gap: 7px;
    color: #6E6157;
    cursor: pointer;
    user-select: none;
  }

  .login-checkbox {
    width: 16px;
    height: 16px;
    border-radius: 4px;
    border: 1.5px solid #E8DFD5;
    accent-color: #876039;
    cursor: pointer;
  }

  .login-forgot-link {
    color: #876039;
    font-weight: 600;
    text-decoration: none;
    transition: color 0.18s;
  }

  .login-forgot-link:hover {
    color: #6f4e2d;
    text-decoration: underline;
  }

  /* Submit Button */
  .login-submit-btn {
    width: 100%;
    height: 44px;
    background: #876039;
    color: #FFFFFF;
    border: none;
    border-radius: 9999px;
    font-family: 'Cinzel', serif !important;
    font-size: 13.5px !important;
    font-weight: 700 !important;
    text-transform: uppercase !important;
    letter-spacing: 0.6px;
    cursor: pointer;
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 8px;
    transition: all 0.2s ease;
    box-shadow: 0 4px 14px rgba(135, 96, 57, 0.25);
  }

  .login-submit-btn:hover:not(:disabled) {
    background: #6f4e2d;
    transform: translateY(-1px);
    box-shadow: 0 6px 18px rgba(135, 96, 57, 0.35);
  }

  .login-submit-btn:active:not(:disabled) {
    transform: translateY(0);
  }

  .login-submit-btn:disabled {
    opacity: 0.65;
    cursor: not-allowed;
  }

  @keyframes login-spin {
    from { transform: rotate(0deg); }
    to { transform: rotate(360deg); }
  }

  .animate-spin {
    animation: login-spin 1s linear infinite;
  }

  /* Prompts & Links */
  .login-register-prompt {
    margin-top: 16px;
    text-align: center;
    font-size: 13px;
    color: #6E6157;
    font-family: 'Glacial Indifference', sans-serif !important;
  }

  .login-register-link {
    color: #876039;
    font-weight: 700;
    text-decoration: none;
    margin-left: 4px;
    transition: color 0.18s;
  }

  .login-register-link:hover {
    color: #6f4e2d;
    text-decoration: underline;
  }

  .login-home-row {
    margin-top: 10px;
    text-align: center;
  }

  .login-home-link {
    display: inline-flex;
    align-items: center;
    gap: 6px;
    font-size: 12px;
    font-weight: 500;
    color: #8C7C71;
    text-decoration: none;
    transition: color 0.18s;
    font-family: 'Glacial Indifference', sans-serif !important;
  }

  .login-home-link:hover {
    color: #876039;
  }

  /* Minimal Footer */
  .login-panel-footer {
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

  .login-footer-links {
    display: flex;
    gap: 12px;
  }

  .login-footer-links a {
    color: #8C7C71;
    text-decoration: none;
  }

  .login-footer-links a:hover {
    color: #876039;
  }

  /* ---------------- RESPONSIVE STYLES ---------------- */
  @media (max-width: 1024px) {
    .login-visual-panel {
      flex: 0 0 38%;
    }
    .login-form-panel {
      padding: 20px 24px;
    }
  }

  @media (max-width: 860px) {
    .login-split-page {
      height: auto;
      min-height: 100vh;
      max-height: none;
      overflow: visible;
      flex-direction: column;
    }
    .login-visual-panel {
      display: none;
    }
    .login-form-panel {
      height: auto;
      flex: 1 1 auto;
      padding: 24px 16px;
      min-height: 100vh;
      justify-content: flex-start;
    }
  }
</style>

<div class="login-split-page">

  {{-- 1. LEFT VISUAL PANEL (Restaurant Management Showcase) --}}
  <div class="login-visual-panel">
    <div class="login-visual-bg"></div>
    <div class="login-visual-overlay"></div>

    <div class="login-visual-content">
      {{-- Top Header Section --}}
      <div class="login-visual-top">
        <h1 class="login-visual-heading">Log in to Your Geni Menu Account</h1>
        <p class="login-visual-desc">
          Access your restaurant dashboard, manage menus, orders and insights in one place.
        </p>
      </div>

      {{-- Key Highlights Section --}}
      <div class="login-visual-highlights-section">
        <div class="login-visual-subheading">
          <svg style="width:13px; height:13px;" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
          <span>KEY HIGHLIGHTS</span>
        </div>

        <div class="login-highlights-list">
          {{-- Highlight 1 --}}
          <div class="login-highlight-card">
            <div class="login-highlight-icon-wrap">
              <svg viewBox="0 0 24 24" style="width:17px; height:17px;" fill="none" stroke="currentColor" stroke-width="2"><path d="M4 6h16M4 12h10M4 18h14"></path><circle cx="18" cy="12" r="2"></circle></svg>
            </div>
            <div class="login-highlight-info">
              <span class="login-highlight-title">Manage Your Menu</span>
              <span class="login-highlight-desc">Add, update and organize items easily.</span>
            </div>
          </div>

          {{-- Highlight 2 --}}
          <div class="login-highlight-card">
            <div class="login-highlight-icon-wrap">
              <svg viewBox="0 0 24 24" style="width:17px; height:17px;" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="11" width="18" height="11" rx="2" ry="2"></rect><path d="M7 11V7a5 5 0 0 1 10 0v4"></path></svg>
            </div>
            <div class="login-highlight-info">
              <span class="login-highlight-title">Secure &amp; Always On</span>
              <span class="login-highlight-desc">Access your data anytime, anywhere.</span>
            </div>
          </div>
        </div>
      </div>

      {{-- Bottom Contact / Assistance Section --}}
      <div class="login-contact-card">
        <div class="login-contact-header">
          <h3 class="login-contact-title">Need Assistance? We're Here to Help.</h3>
          <p class="login-contact-sub">Connect with our support team for guidance and assistance.</p>
        </div>

        <div class="login-contact-tile">
          <div class="login-contact-icon">
            <svg viewBox="0 0 24 24" style="width:16px; height:16px;" fill="none" stroke="currentColor" stroke-width="2"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline points="22,6 12,13 2,6"></polyline></svg>
          </div>
          <div class="login-contact-info">
            <span class="login-contact-label">Email Support</span>
            <a href="mailto:support@genimenu.com" class="login-contact-link">support@genimenu.com</a>
          </div>
        </div>
      </div>
    </div>
  </div>

  {{-- 2. RIGHT FORM PANEL --}}
  <div class="login-form-panel">
    <div class="login-panel-inner">

      {{-- Logo (Centered) --}}
      <a href="{{ url('/') }}" class="login-brand-logo" title="Geni Menu">
        <img src="https://menu.wegeni.com/user-uploads/logo/22afe8e48716500b5a2730bca0ede64a.png"
             onerror="this.src='{{ asset('assets/images/geni-menu-logo-light.png') }}'"
             alt="Geni Menu Logo">
        <span class="login-brand-text">
          <span class="login-brand-name">Geni <span>Menu</span></span>
        </span>
      </a>

      {{-- Heading Area (Centered) --}}
      <div class="login-heading-area">
        <h1 class="login-title">Welcome Back</h1>
        <p class="login-subtitle">Sign in to access and manage your restaurant menu with ease.</p>
      </div>

      {{-- Error State --}}
      @if (isset($errors) && $errors->any())
        <div class="login-alert-box">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><line x1="12" y1="8" x2="12" y2="12"/><line x1="12" y1="16" x2="12.01" y2="16"/></svg>
          <div>
            <strong>Unable to sign in</strong><br>
            <span>The email or password you entered is incorrect. Please check your details and try again.</span>
          </div>
        </div>
      @endif

      {{-- Session Status --}}
      @session('status')
        <div class="login-status-box">
          {{ $value }}
        </div>
      @endsession

      {{-- Login Form --}}
      <form method="POST" action="{{ route('login') }}" id="loginForm">
        @csrf

        {{-- Email Field --}}
        <div class="login-field">
          <label for="email">Email Address</label>
          <div class="login-input-wrap">
            <span class="login-input-icon">
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="4" width="18" height="16" rx="2"/><path d="m22 7-8.97 5.7a1.94 1.94 0 0 1-2.06 0L2 7"/></svg>
            </span>
            <input id="email"
                   class="login-input @error('email') has-error @enderror"
                   type="email"
                   name="email"
                   value="{{ old('email') }}"
                   placeholder="Enter your email address"
                   required
                   autofocus
                   autocomplete="username">
          </div>
        </div>

        {{-- Password Field --}}
        <div class="login-field">
          <label for="password">Password</label>
          <div class="login-input-wrap">
            <span class="login-input-icon">
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="11" width="18" height="11" rx="2" ry="2"/><path d="M7 11V7a5 5 0 0 1 10 0v4"/></svg>
            </span>
            <input id="password"
                   class="login-input @error('password') has-error @enderror"
                   type="password"
                   name="password"
                   placeholder="Enter your password"
                   required
                   autocomplete="current-password">
            <button type="button"
                    class="login-pw-toggle"
                    id="togglePasswordBtn"
                    aria-label="Toggle password visibility">
              <svg id="pwEyeIcon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"/><circle cx="12" cy="12" r="3"/></svg>
              <svg id="pwEyeOffIcon" style="display:none;" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M17.94 17.94A10.07 10.07 0 0 1 12 20c-7 0-11-8-11-8a18.45 18.45 0 0 1 5.06-5.94M9.9 4.24A9.12 9.12 0 0 1 12 4c7 0 11 8 11 8a18.5 18.5 0 0 1-2.16 3.19m-6.72-1.07a3 3 0 1 1-4.24-4.24"/><line x1="1" y1="1" x2="23" y2="23"/></svg>
            </button>
          </div>
        </div>

        {{-- Remember Me & Forgot Password --}}
        <div class="login-options-row">
          <label for="remember_me" class="login-remember-label">
            <input type="checkbox" id="remember_me" name="remember" class="login-checkbox">
            <span>Remember me</span>
          </label>

          <a href="{{ route('password.request') }}" class="login-forgot-link">
            Forgot password?
          </a>
        </div>

        {{-- Submit Button --}}
        <button type="submit" class="login-submit-btn" id="loginSubmitBtn">
          <span id="btnText">Sign In &rarr;</span>
          <span id="btnLoading" style="display:none; align-items:center; gap:8px;">
            <svg class="animate-spin" style="width:16px; height:16px;" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
              <circle cx="12" cy="12" r="10" stroke-opacity="0.25"></circle>
              <path d="M12 2a10 10 0 0 1 10 10" stroke-linecap="round"></path>
            </svg>
            <span>Signing in...</span>
          </span>
        </button>

        {{-- Create Account Link --}}
        <div class="login-register-prompt">
          <span>Are you new here?</span>
          <a href="{{ route('restaurant_signup') }}" class="login-register-link">Create an account &rarr;</a>
        </div>

        {{-- Back to Home --}}
        <div class="login-home-row">
          <a href="{{ url('/') }}" class="login-home-link">
            &larr; Go To Home
          </a>
        </div>

      </form>
    </div>

    {{-- Minimal Footer --}}
    <div class="login-panel-footer">
      <span>&copy; {{ date('Y') }} Geni Menu. All rights reserved.</span>
      <div class="login-footer-links">
        <a href="{{ Route::has('privacy.policy') ? route('privacy.policy') : (Route::has('privacy-and-policy') ? route('privacy-and-policy') : url('/privacy-policy')) }}">Privacy Policy</a>
        <span>&bull;</span>
        <a href="{{ Route::has('terms.conditions') ? route('terms.conditions') : (Route::has('terms-and-conditions') ? route('terms-and-conditions') : url('/terms-and-conditions')) }}">Terms &amp; Conditions</a>
      </div>
    </div>
  </div>

</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
  // 1. Password Visibility Toggle
  var pwInput = document.getElementById('password');
  var toggleBtn = document.getElementById('togglePasswordBtn');
  var eyeIcon = document.getElementById('pwEyeIcon');
  var eyeOffIcon = document.getElementById('pwEyeOffIcon');

  if (toggleBtn && pwInput) {
    toggleBtn.addEventListener('click', function() {
      if (pwInput.type === 'password') {
        pwInput.type = 'text';
        eyeIcon.style.display = 'none';
        eyeOffIcon.style.display = 'block';
      } else {
        pwInput.type = 'password';
        eyeIcon.style.display = 'block';
        eyeOffIcon.style.display = 'none';
      }
    });
  }

  // 2. Form Submit Loading State & Duplicate Prevention
  var loginForm = document.getElementById('loginForm');
  var submitBtn = document.getElementById('loginSubmitBtn');
  var btnText = document.getElementById('btnText');
  var btnLoading = document.getElementById('btnLoading');

  if (loginForm && submitBtn) {
    loginForm.addEventListener('submit', function(e) {
      var emailField = document.getElementById('email');
      var pwField = document.getElementById('password');

      if (emailField.value && pwField.value) {
        submitBtn.disabled = true;
        btnText.style.display = 'none';
        btnLoading.style.display = 'inline-flex';
      }
    });
  }
});
</script>
</x-auth-layout>
