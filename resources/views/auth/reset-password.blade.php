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
  .reset-split-page {
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
  .reset-visual-panel {
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

  .reset-visual-bg {
    position: absolute;
    inset: 0;
    background-image: url('{{ asset('assets/images/home/forget.png') }}');
    background-size: cover;
    background-position: center;
    transform: scale(1.02);
  }

  .reset-visual-overlay {
    position: absolute;
    inset: 0;
    background: linear-gradient(180deg, rgba(31, 22, 16, 0.70) 0%, rgba(31, 22, 16, 0.88) 100%);
  }

  .reset-visual-content {
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

  .reset-visual-top {
    text-align: center;
  }

  .reset-visual-heading {
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

  .reset-visual-desc {
    font-family: 'Glacial Indifference', sans-serif !important;
    font-size: 13.5px;
    line-height: 1.5;
    color: rgba(255, 255, 255, 0.85);
    margin: 0;
    text-align: center;
  }

  /* Frosted Highlights */
  .reset-visual-subheading {
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

  .reset-highlights-list {
    display: flex;
    flex-direction: column;
    gap: 12px;
  }

  .reset-highlight-card {
    display: flex;
    align-items: center;
    gap: 14px;
    padding: 14px 18px;
    background: rgba(255, 255, 255, 0.08);
    backdrop-filter: blur(14px);
    -webkit-backdrop-filter: blur(14px);
    border: 1px solid rgba(255, 255, 255, 0.16);
    border-radius: 12px;
    transition: transform 0.2s ease, background 0.2s ease;
  }

  .reset-highlight-card:hover {
    background: rgba(255, 255, 255, 0.14);
    transform: translateY(-2px);
  }

  .reset-highlight-icon-wrap {
    width: 38px;
    height: 38px;
    border-radius: 10px;
    background: rgba(242, 197, 141, 0.18);
    border: 1px solid rgba(242, 197, 141, 0.35);
    color: #F2C58D;
    display: flex;
    align-items: center;
    justify-content: center;
    flex-shrink: 0;
  }

  .reset-highlight-info {
    display: flex;
    flex-direction: column;
    gap: 3px;
    min-width: 0;
  }

  .reset-highlight-title {
    font-family: 'Glacial Indifference', sans-serif !important;
    font-size: 14px;
    font-weight: 700;
    color: #FAF4ED;
    line-height: 1.25;
  }

  .reset-highlight-desc {
    font-family: 'Glacial Indifference', sans-serif !important;
    font-size: 12px;
    color: rgba(255, 255, 255, 0.75);
    line-height: 1.4;
  }

  /* Contact / Assistance Box */
  .reset-contact-card {
    background: rgba(255, 255, 255, 0.08);
    backdrop-filter: blur(14px);
    -webkit-backdrop-filter: blur(14px);
    border: 1px solid rgba(255, 255, 255, 0.18);
    border-radius: 14px;
    padding: 14px 18px;
  }

  .reset-contact-header {
    margin-bottom: 10px;
  }

  .reset-contact-title {
    font-family: 'Cinzel', serif !important;
    font-size: 13px !important;
    font-weight: 700 !important;
    text-transform: uppercase !important;
    color: #FAF4ED;
    letter-spacing: 0.4px;
    margin: 0 0 3px;
  }

  .reset-contact-sub {
    font-family: 'Glacial Indifference', sans-serif !important;
    font-size: 11.5px;
    color: rgba(255, 255, 255, 0.75);
    margin: 0;
  }

  .reset-contact-tile {
    display: flex;
    align-items: center;
    gap: 12px;
    background: rgba(0, 0, 0, 0.28);
    padding: 9px 14px;
    border-radius: 10px;
    border: 1px solid rgba(255, 255, 255, 0.10);
    transition: background 0.2s ease, border-color 0.2s ease;
  }

  .reset-contact-tile:hover {
    background: rgba(0, 0, 0, 0.38);
    border-color: rgba(242, 197, 141, 0.4);
  }

  .reset-contact-icon {
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

  .reset-contact-info {
    display: flex;
    flex-direction: column;
    gap: 2px;
    min-width: 0;
  }

  .reset-contact-label {
    font-family: 'Glacial Indifference', sans-serif !important;
    font-size: 11px;
    font-weight: 600;
    color: rgba(255, 255, 255, 0.72);
    line-height: 1.2;
  }

  .reset-contact-link {
    color: #F2C58D;
    text-decoration: none;
    font-weight: 700;
    font-size: 13px;
    white-space: nowrap;
    transition: color 0.18s;
    line-height: 1.25;
  }

  .reset-contact-link:hover {
    color: #FFFFFF;
    text-decoration: underline;
  }

  /* ---------------- RIGHT FORM PANEL ---------------- */
  .reset-form-panel {
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

  .reset-panel-inner {
    max-width: 440px;
    width: 100%;
    margin: auto;
    padding: 0;
  }

  /* Centered Brand Logo */
  .reset-brand-logo {
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 12px;
    text-decoration: none;
    margin: 0 auto 16px auto;
    width: fit-content;
  }

  .reset-brand-logo img {
    height: 42px;
    width: auto;
    object-fit: contain;
    flex-shrink: 0;
  }

  .reset-brand-text {
    display: flex;
    flex-direction: column;
    line-height: 1.15;
  }

  .reset-brand-name {
    font-family: 'Cinzel', serif !important;
    font-size: 20px !important;
    font-weight: 700 !important;
    text-transform: uppercase !important;
    color: #32180F !important;
    letter-spacing: 0.5px;
  }

  .reset-brand-name span {
    color: #B45309;
  }

  /* Centered Heading Area */
  .reset-heading-area {
    margin-bottom: 18px;
    text-align: center;
  }

  .reset-title {
    font-family: 'Cinzel', serif !important;
    font-size: 20px !important;
    font-weight: 700 !important;
    text-transform: uppercase !important;
    letter-spacing: 0.5px !important;
    color: #32180F !important;
    line-height: 1.25 !important;
    margin: 0 0 5px !important;
    text-align: center !important;
  }

  .reset-subtitle {
    font-family: 'Glacial Indifference', sans-serif !important;
    font-size: 13px !important;
    color: #6E6157;
    line-height: 1.45;
    margin: 0;
    text-align: center;
  }

  /* Alerts */
  .reset-alert-box {
    background: #FEF2F2;
    border: 1px solid #FCA5A5;
    border-radius: 10px;
    padding: 10px 14px;
    margin-bottom: 14px;
    display: flex;
    align-items: flex-start;
    gap: 8px;
    font-size: 12px;
    color: #991B1B;
    font-family: 'Glacial Indifference', sans-serif !important;
  }

  .reset-alert-box svg {
    width: 16px;
    height: 16px;
    flex-shrink: 0;
    margin-top: 1px;
  }

  /* Field Groups */
  .reset-field {
    margin-bottom: 14px;
  }

  .reset-field label {
    display: block;
    font-family: 'Glacial Indifference', sans-serif !important;
    font-size: 12.5px;
    font-weight: 600;
    color: #21160F;
    margin-bottom: 4px;
  }

  .reset-input-wrap {
    position: relative;
    display: flex;
    align-items: center;
  }

  .reset-input-icon {
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

  .reset-input-icon svg {
    width: 16px;
    height: 16px;
  }

  .reset-input {
    width: 100%;
    height: 40px;
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

  .reset-input::placeholder {
    color: #9C8E82;
  }

  .reset-input:focus {
    border-color: #876039;
    box-shadow: 0 0 0 3px rgba(135, 96, 57, 0.15);
  }

  /* Password eye toggle */
  .reset-pw-toggle {
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

  .reset-pw-toggle:hover {
    color: #876039;
  }

  .reset-pw-toggle svg {
    width: 18px;
    height: 18px;
  }

  /* Submit Button */
  .reset-submit-btn {
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
    margin-top: 6px;
  }

  .reset-submit-btn:hover:not(:disabled) {
    background: #6f4e2d;
    transform: translateY(-1px);
    box-shadow: 0 6px 18px rgba(135, 96, 57, 0.35);
  }

  .reset-submit-btn:active:not(:disabled) {
    transform: translateY(0);
  }

  .reset-submit-btn:disabled {
    opacity: 0.65;
    cursor: not-allowed;
  }

  @keyframes reset-spin {
    from { transform: rotate(0deg); }
    to { transform: rotate(360deg); }
  }

  .animate-spin {
    animation: reset-spin 1s linear infinite;
  }

  /* Nav Links */
  .reset-nav-links {
    margin-top: 14px;
    display: flex;
    flex-direction: column;
    align-items: center;
    gap: 8px;
    font-family: 'Glacial Indifference', sans-serif !important;
  }

  .reset-back-link {
    color: #876039;
    font-weight: 700;
    font-size: 13px;
    text-decoration: none;
    transition: color 0.18s;
  }

  .reset-back-link:hover {
    color: #6f4e2d;
    text-decoration: underline;
  }

  .reset-home-link {
    font-size: 12px;
    font-weight: 500;
    color: #8C7C71;
    text-decoration: none;
    transition: color 0.18s;
  }

  .reset-home-link:hover {
    color: #876039;
  }

  /* Minimal Footer */
  .reset-panel-footer {
    margin-top: 18px;
    padding-top: 12px;
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

  .reset-footer-links {
    display: flex;
    gap: 12px;
  }

  .reset-footer-links a {
    color: #8C7C71;
    text-decoration: none;
  }

  .reset-footer-links a:hover {
    color: #876039;
  }

  /* ---------------- RESPONSIVE STYLES ---------------- */
  @media (max-width: 1024px) {
    .reset-visual-panel {
      flex: 0 0 38%;
      padding: 24px;
    }
    .reset-form-panel {
      padding: 20px 24px;
    }
  }

  @media (max-width: 860px) {
    .reset-split-page {
      height: auto;
      min-height: 100vh;
      max-height: none;
      overflow: visible;
      flex-direction: column;
    }
    .reset-visual-panel {
      display: none;
    }
    .reset-form-panel {
      height: auto;
      flex: 1 1 auto;
      padding: 24px 16px;
      min-height: 100vh;
      justify-content: flex-start;
    }
  }
</style>

<div class="reset-split-page">

  {{-- 1. LEFT VISUAL PANEL --}}
  <div class="reset-visual-panel">
    <div class="reset-visual-bg"></div>
    <div class="reset-visual-overlay"></div>

    <div class="reset-visual-content">
      {{-- Top Header Section --}}
      <div class="reset-visual-top">
        <h1 class="reset-visual-heading">Set a New Password</h1>
        <p class="reset-visual-desc">
          Create a strong password to protect your Geni Menu restaurant account.
        </p>
      </div>

      {{-- Middle Highlight Section --}}
      <div class="reset-visual-highlights-section">
        <div class="reset-visual-subheading">
          <svg style="width:13px; height:13px;" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
          <span>KEY HIGHLIGHTS</span>
        </div>

        <div class="reset-highlights-list">
          <div class="reset-highlight-card">
            <div class="reset-highlight-icon-wrap">
              <svg viewBox="0 0 24 24" style="width:18px; height:18px;" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="11" width="18" height="11" rx="2" ry="2"></rect><path d="M7 11V7a5 5 0 0 1 10 0v4"></path></svg>
            </div>
            <div class="reset-highlight-info">
              <span class="reset-highlight-title">Password Security</span>
              <span class="reset-highlight-desc">Use at least 8 characters with letters, numbers, and special symbols for maximum safety.</span>
            </div>
          </div>

          <div class="reset-highlight-card">
            <div class="reset-highlight-icon-wrap">
              <svg viewBox="0 0 24 24" style="width:18px; height:18px;" fill="none" stroke="currentColor" stroke-width="2"><path d="M13 2L3 14h9l-1 8 10-12h-9l1-8z"></path></svg>
            </div>
            <div class="reset-highlight-info">
              <span class="reset-highlight-title">Instant Access</span>
              <span class="reset-highlight-desc">Once updated, you can immediately sign in and resume managing your restaurant menu.</span>
            </div>
          </div>
        </div>
      </div>

      {{-- Bottom Contact / Assistance Section --}}
      <div class="reset-contact-card">
        <div class="reset-contact-header">
          <h3 class="reset-contact-title">Need Assistance? We're Here to Help.</h3>
          <p class="reset-contact-sub">Connect with our support team for guidance and assistance.</p>
        </div>

        <div class="reset-contact-tile">
          <div class="reset-contact-icon">
            <svg viewBox="0 0 24 24" style="width:16px; height:16px;" fill="none" stroke="currentColor" stroke-width="2"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline points="22,6 12,13 2,6"></polyline></svg>
          </div>
          <div class="reset-contact-info">
            <span class="reset-contact-label">Email Support</span>
            <a href="mailto:support@genimenu.com" class="reset-contact-link">support@genimenu.com</a>
          </div>
        </div>
      </div>
    </div>
  </div>

  {{-- 2. RIGHT FORM PANEL --}}
  <div class="reset-form-panel">
    <div class="reset-panel-inner">

      {{-- Logo (Centered) --}}
      <a href="{{ url('/') }}" class="reset-brand-logo" title="Geni Menu">
        <img src="https://menu.wegeni.com/user-uploads/logo/22afe8e48716500b5a2730bca0ede64a.png"
             onerror="this.src='{{ asset('assets/images/geni-menu-logo-light.png') }}'"
             alt="Geni Menu Logo">
        <span class="reset-brand-text">
          <span class="reset-brand-name">Geni <span>Menu</span></span>
        </span>
      </a>

      {{-- Heading Area (Centered) --}}
      <div class="reset-heading-area">
        <h1 class="reset-title">Create a New Password</h1>
        <p class="reset-subtitle">
          Choose a new password to secure your account and get back to managing your restaurant with ease.
        </p>
      </div>

      {{-- Validation errors --}}
      @if ($errors->any())
        <div class="reset-alert-box">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><line x1="12" y1="8" x2="12" y2="12"/><line x1="12" y1="16" x2="12.01" y2="16"/></svg>
          <div>
            @foreach ($errors->all() as $error)
              <div>{{ $error }}</div>
            @endforeach
          </div>
        </div>
      @endif

      {{-- Password Reset Form --}}
      <form method="POST" action="{{ route('password.update') }}" id="resetForm">
        @csrf

        <input type="hidden" name="token" value="{{ $request->route('token') }}">

        {{-- Email Field --}}
        <div class="reset-field">
          <label for="email">{{ __('app.email') }}</label>
          <div class="reset-input-wrap">
            <span class="reset-input-icon">
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="4" width="18" height="16" rx="2"/><path d="m22 7-8.97 5.7a1.94 1.94 0 0 1-2.06 0L2 7"/></svg>
            </span>
            <input id="email"
                   class="reset-input"
                   type="email"
                   name="email"
                   value="{{ old('email', $request->email) }}"
                   placeholder="Enter your email address"
                   required
                   autofocus
                   autocomplete="username">
          </div>
        </div>

        {{-- Password Field --}}
        <div class="reset-field">
          <label for="password">{{ __('app.password') }}</label>
          <div class="reset-input-wrap">
            <span class="reset-input-icon">
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="11" width="18" height="11" rx="2" ry="2"/><path d="M7 11V7a5 5 0 0 1 10 0v4"/></svg>
            </span>
            <input id="password"
                   class="reset-input"
                   type="password"
                   name="password"
                   placeholder="Enter new password"
                   required
                   autocomplete="new-password">
            <button type="button"
                    class="reset-pw-toggle"
                    id="togglePwBtn"
                    aria-label="Toggle password visibility">
              <svg id="pwEyeIcon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"/><circle cx="12" cy="12" r="3"/></svg>
              <svg id="pwEyeOffIcon" style="display:none;" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M17.94 17.94A10.07 10.07 0 0 1 12 20c-7 0-11-8-11-8a18.45 18.45 0 0 1 5.06-5.94M9.9 4.24A9.12 9.12 0 0 1 12 4c7 0 11 8 11 8a18.5 18.5 0 0 1-2.16 3.19m-6.72-1.07a3 3 0 1 1-4.24-4.24"/><line x1="1" y1="1" x2="23" y2="23"/></svg>
            </button>
          </div>
        </div>

        {{-- Confirm Password Field --}}
        <div class="reset-field">
          <label for="password_confirmation">{{ __('modules.profile.confirmPassword') }}</label>
          <div class="reset-input-wrap">
            <span class="reset-input-icon">
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
            </span>
            <input id="password_confirmation"
                   class="reset-input"
                   type="password"
                   name="password_confirmation"
                   placeholder="Confirm new password"
                   required
                   autocomplete="new-password">
            <button type="button"
                    class="reset-pw-toggle"
                    id="toggleConfirmPwBtn"
                    aria-label="Toggle password confirmation visibility">
              <svg id="confirmEyeIcon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"/><circle cx="12" cy="12" r="3"/></svg>
              <svg id="confirmEyeOffIcon" style="display:none;" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M17.94 17.94A10.07 10.07 0 0 1 12 20c-7 0-11-8-11-8a18.45 18.45 0 0 1 5.06-5.94M9.9 4.24A9.12 9.12 0 0 1 12 4c7 0 11 8 11 8a18.5 18.5 0 0 1-2.16 3.19m-6.72-1.07a3 3 0 1 1-4.24-4.24"/><line x1="1" y1="1" x2="23" y2="23"/></svg>
            </button>
          </div>
        </div>

        {{-- Submit Button --}}
        <button type="submit" class="reset-submit-btn" id="resetSubmitBtn">
          <span id="btnText">{{ __('messages.resetPassword') }} &rarr;</span>
          <span id="btnLoading" style="display:none; align-items:center; gap:8px;">
            <svg class="animate-spin" style="width:16px; height:16px;" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
              <circle cx="12" cy="12" r="10" stroke-opacity="0.25"></circle>
              <path d="M12 2a10 10 0 0 1 10 10" stroke-linecap="round"></path>
            </svg>
            <span>Updating password...</span>
          </span>
        </button>

        {{-- Nav Links --}}
        <div class="reset-nav-links">
          <a href="{{ route('login') }}" class="reset-back-link">
            &larr; Back to Sign In
          </a>
          <a href="{{ url('/') }}" class="reset-home-link">
            &larr; Go To Home
          </a>
        </div>

      </form>
    </div>

    {{-- Minimal Footer --}}
    <div class="reset-panel-footer">
      <span>&copy; {{ date('Y') }} Geni Menu. All rights reserved.</span>
      <div class="reset-footer-links">
        <a href="{{ Route::has('privacy.policy') ? route('privacy.policy') : (Route::has('privacy-and-policy') ? route('privacy-and-policy') : url('/privacy-policy')) }}">Privacy Policy</a>
        <span>&bull;</span>
        <a href="{{ Route::has('terms.conditions') ? route('terms.conditions') : (Route::has('terms-and-conditions') ? route('terms-and-conditions') : url('/terms-and-conditions')) }}">Terms &amp; Conditions</a>
      </div>
    </div>
  </div>

</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
  // Password Visibility Toggle
  function setupPwToggle(inputId, btnId, eyeId, eyeOffId) {
    var input = document.getElementById(inputId);
    var btn = document.getElementById(btnId);
    var eye = document.getElementById(eyeId);
    var eyeOff = document.getElementById(eyeOffId);

    if (btn && input) {
      btn.addEventListener('click', function() {
        if (input.type === 'password') {
          input.type = 'text';
          if (eye) eye.style.display = 'none';
          if (eyeOff) eyeOff.style.display = 'block';
        } else {
          input.type = 'password';
          if (eye) eye.style.display = 'block';
          if (eyeOff) eyeOff.style.display = 'none';
        }
      });
    }
  }

  setupPwToggle('password', 'togglePwBtn', 'pwEyeIcon', 'pwEyeOffIcon');
  setupPwToggle('password_confirmation', 'toggleConfirmPwBtn', 'confirmEyeIcon', 'confirmEyeOffIcon');

  var form = document.getElementById('resetForm');
  var submitBtn = document.getElementById('resetSubmitBtn');
  var btnText = document.getElementById('btnText');
  var btnLoading = document.getElementById('btnLoading');

  if (form && submitBtn) {
    form.addEventListener('submit', function(e) {
      var pw = document.getElementById('password');
      var pwConfirm = document.getElementById('password_confirmation');
      if (pw.value && pwConfirm.value) {
        submitBtn.disabled = true;
        btnText.style.display = 'none';
        btnLoading.style.display = 'inline-flex';
      }
    });
  }
});
</script>
</x-auth-layout>
