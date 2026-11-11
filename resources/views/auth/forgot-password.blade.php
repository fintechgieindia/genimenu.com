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
  .forget-split-page {
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
  .forget-visual-panel {
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

  .forget-visual-bg {
    position: absolute;
    inset: 0;
    background-image: url('{{ asset('assets/images/home/forget.png') }}');
    background-size: cover;
    background-position: center;
    transform: scale(1.02);
  }

  .forget-visual-overlay {
    position: absolute;
    inset: 0;
    background: linear-gradient(180deg, rgba(31, 22, 16, 0.70) 0%, rgba(31, 22, 16, 0.88) 100%);
  }

  .forget-visual-content {
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

  .forget-visual-top {
    text-align: center;
  }

  .forget-visual-heading {
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

  .forget-visual-desc {
    font-family: 'Glacial Indifference', sans-serif !important;
    font-size: 13.5px;
    line-height: 1.5;
    color: rgba(255, 255, 255, 0.85);
    margin: 0;
    text-align: center;
  }

  /* Frosted Highlights */
  .forget-visual-subheading {
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

  .forget-highlights-list {
    display: flex;
    flex-direction: column;
    gap: 12px;
  }

  .forget-highlight-card {
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

  .forget-highlight-card:hover {
    background: rgba(255, 255, 255, 0.14);
    transform: translateY(-2px);
  }

  .forget-highlight-icon-wrap {
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

  .forget-highlight-info {
    display: flex;
    flex-direction: column;
    gap: 3px;
    min-width: 0;
  }

  .forget-highlight-title {
    font-family: 'Glacial Indifference', sans-serif !important;
    font-size: 14px;
    font-weight: 700;
    color: #FAF4ED;
    line-height: 1.25;
  }

  .forget-highlight-desc {
    font-family: 'Glacial Indifference', sans-serif !important;
    font-size: 12px;
    color: rgba(255, 255, 255, 0.75);
    line-height: 1.4;
  }

  /* Contact / Assistance Box */
  .forget-contact-card {
    background: rgba(255, 255, 255, 0.08);
    backdrop-filter: blur(14px);
    -webkit-backdrop-filter: blur(14px);
    border: 1px solid rgba(255, 255, 255, 0.18);
    border-radius: 14px;
    padding: 14px 18px;
  }

  .forget-contact-header {
    margin-bottom: 10px;
  }

  .forget-contact-title {
    font-family: 'Cinzel', serif !important;
    font-size: 13px !important;
    font-weight: 700 !important;
    text-transform: uppercase !important;
    color: #FAF4ED;
    letter-spacing: 0.4px;
    margin: 0 0 3px;
  }

  .forget-contact-sub {
    font-family: 'Glacial Indifference', sans-serif !important;
    font-size: 11.5px;
    color: rgba(255, 255, 255, 0.75);
    margin: 0;
  }

  .forget-contact-tile {
    display: flex;
    align-items: center;
    gap: 12px;
    background: rgba(0, 0, 0, 0.28);
    padding: 9px 14px;
    border-radius: 10px;
    border: 1px solid rgba(255, 255, 255, 0.10);
    transition: background 0.2s ease, border-color 0.2s ease;
  }

  .forget-contact-tile:hover {
    background: rgba(0, 0, 0, 0.38);
    border-color: rgba(242, 197, 141, 0.4);
  }

  .forget-contact-icon {
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

  .forget-contact-info {
    display: flex;
    flex-direction: column;
    gap: 2px;
    min-width: 0;
  }

  .forget-contact-label {
    font-family: 'Glacial Indifference', sans-serif !important;
    font-size: 11px;
    font-weight: 600;
    color: rgba(255, 255, 255, 0.72);
    line-height: 1.2;
  }

  .forget-contact-link {
    color: #F2C58D;
    text-decoration: none;
    font-weight: 700;
    font-size: 13px;
    white-space: nowrap;
    transition: color 0.18s;
    line-height: 1.25;
  }

  .forget-contact-link:hover {
    color: #FFFFFF;
    text-decoration: underline;
  }

  /* ---------------- RIGHT FORM PANEL ---------------- */
  .forget-form-panel {
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

  .forget-panel-inner {
    max-width: 440px;
    width: 100%;
    margin: auto;
    padding: 0;
  }

  /* Centered Brand Logo */
  .forget-brand-logo {
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 12px;
    text-decoration: none;
    margin: 0 auto 20px auto;
    width: fit-content;
  }

  .forget-brand-logo img {
    height: 42px;
    width: auto;
    object-fit: contain;
    flex-shrink: 0;
  }

  .forget-brand-text {
    display: flex;
    flex-direction: column;
    line-height: 1.15;
  }

  .forget-brand-name {
    font-family: 'Cinzel', serif !important;
    font-size: 20px !important;
    font-weight: 700 !important;
    text-transform: uppercase !important;
    color: #32180F !important;
    letter-spacing: 0.5px;
  }

  .forget-brand-name span {
    color: #B45309;
  }

  /* Centered Heading Area */
  .forget-heading-area {
    margin-bottom: 22px;
    text-align: center;
  }

  .forget-title {
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

  .forget-subtitle {
    font-family: 'Glacial Indifference', sans-serif !important;
    font-size: 13px !important;
    color: #6E6157;
    line-height: 1.45;
    margin: 0;
    text-align: center;
  }

  /* Status and Alerts */
  .forget-status-box {
    background: #ECFDF5;
    border: 1px solid #A7F3D0;
    border-radius: 10px;
    padding: 10px 14px;
    margin-bottom: 16px;
    font-size: 12.5px;
    color: #065F46;
    font-family: 'Glacial Indifference', sans-serif !important;
    text-align: center;
  }

  .forget-alert-box {
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

  .forget-alert-box svg {
    width: 16px;
    height: 16px;
    flex-shrink: 0;
    margin-top: 1px;
  }

  /* Field Groups */
  .forget-field {
    margin-bottom: 18px;
  }

  .forget-field label {
    display: block;
    font-family: 'Glacial Indifference', sans-serif !important;
    font-size: 12.5px;
    font-weight: 600;
    color: #21160F;
    margin-bottom: 5px;
  }

  .forget-input-wrap {
    position: relative;
    display: flex;
    align-items: center;
  }

  .forget-input-icon {
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

  .forget-input-icon svg {
    width: 16px;
    height: 16px;
  }

  .forget-input {
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

  .forget-input::placeholder {
    color: #9C8E82;
  }

  .forget-input:focus {
    border-color: #876039;
    box-shadow: 0 0 0 3px rgba(135, 96, 57, 0.15);
  }

  /* Submit Button */
  .forget-submit-btn {
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

  .forget-submit-btn:hover:not(:disabled) {
    background: #6f4e2d;
    transform: translateY(-1px);
    box-shadow: 0 6px 18px rgba(135, 96, 57, 0.35);
  }

  .forget-submit-btn:active:not(:disabled) {
    transform: translateY(0);
  }

  .forget-submit-btn:disabled {
    opacity: 0.65;
    cursor: not-allowed;
  }

  @keyframes forget-spin {
    from { transform: rotate(0deg); }
    to { transform: rotate(360deg); }
  }

  .animate-spin {
    animation: forget-spin 1s linear infinite;
  }

  /* Bottom navigation links */
  .forget-nav-links {
    margin-top: 18px;
    display: flex;
    flex-direction: column;
    align-items: center;
    gap: 10px;
    font-family: 'Glacial Indifference', sans-serif !important;
  }

  .forget-back-link {
    color: #876039;
    font-weight: 700;
    font-size: 13px;
    text-decoration: none;
    transition: color 0.18s;
  }

  .forget-back-link:hover {
    color: #6f4e2d;
    text-decoration: underline;
  }

  .forget-home-link {
    font-size: 12px;
    font-weight: 500;
    color: #8C7C71;
    text-decoration: none;
    transition: color 0.18s;
  }

  .forget-home-link:hover {
    color: #876039;
  }

  /* Minimal Footer */
  .forget-panel-footer {
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

  .forget-footer-links {
    display: flex;
    gap: 12px;
  }

  .forget-footer-links a {
    color: #8C7C71;
    text-decoration: none;
  }

  .forget-footer-links a:hover {
    color: #876039;
  }

  /* ---------------- RESPONSIVE STYLES ---------------- */
  @media (max-width: 1024px) {
    .forget-visual-panel {
      flex: 0 0 38%;
      padding: 24px;
    }
    .forget-form-panel {
      padding: 20px 24px;
    }
  }

  @media (max-width: 860px) {
    .forget-split-page {
      height: auto;
      min-height: 100vh;
      max-height: none;
      overflow: visible;
      flex-direction: column;
    }
    .forget-visual-panel {
      display: none;
    }
    .forget-form-panel {
      height: auto;
      flex: 1 1 auto;
      padding: 24px 16px;
      min-height: 100vh;
      justify-content: flex-start;
    }
  }
</style>

<div class="forget-split-page">

  {{-- 1. LEFT VISUAL PANEL --}}
  <div class="forget-visual-panel">
    <div class="forget-visual-bg"></div>
    <div class="forget-visual-overlay"></div>

    <div class="forget-visual-content">
      {{-- Top Header Section --}}
      <div class="forget-visual-top">
        <h1 class="forget-visual-heading">Reset Your Password</h1>
        <p class="forget-visual-desc">
          Regain access to your Geni Menu account safely and effortlessly.
        </p>
      </div>

      {{-- Middle Highlight Section --}}
      <div class="forget-visual-highlights-section">
        <div class="forget-visual-subheading">
          <svg style="width:13px; height:13px;" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
          <span>KEY HIGHLIGHTS</span>
        </div>

        <div class="forget-highlights-list">
          <div class="forget-highlight-card">
            <div class="forget-highlight-icon-wrap">
              <svg viewBox="0 0 24 24" style="width:18px; height:18px;" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path></svg>
            </div>
            <div class="forget-highlight-info">
              <span class="forget-highlight-title">Secure Verification</span>
              <span class="forget-highlight-desc">Receive a personalized, encrypted reset link directly to your registered email.</span>
            </div>
          </div>

          <div class="forget-highlight-card">
            <div class="forget-highlight-icon-wrap">
              <svg viewBox="0 0 24 24" style="width:18px; height:18px;" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"></circle><polyline points="12 6 12 12 16 14"></polyline></svg>
            </div>
            <div class="forget-highlight-info">
              <span class="forget-highlight-title">Instant Recovery</span>
              <span class="forget-highlight-desc">Reset your credentials within minutes and get back to managing your restaurant.</span>
            </div>
          </div>
        </div>
      </div>

      {{-- Bottom Contact / Assistance Section --}}
      <div class="forget-contact-card">
        <div class="forget-contact-header">
          <h3 class="forget-contact-title">Need Assistance? We're Here to Help.</h3>
          <p class="forget-contact-sub">Connect with our support team for guidance and assistance.</p>
        </div>

        <div class="forget-contact-tile">
          <div class="forget-contact-icon">
            <svg viewBox="0 0 24 24" style="width:16px; height:16px;" fill="none" stroke="currentColor" stroke-width="2"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline points="22,6 12,13 2,6"></polyline></svg>
          </div>
          <div class="forget-contact-info">
            <span class="forget-contact-label">Email Support</span>
            <a href="mailto:support@genimenu.com" class="forget-contact-link">support@genimenu.com</a>
          </div>
        </div>
      </div>
    </div>
  </div>

  {{-- 2. RIGHT FORM PANEL --}}
  <div class="forget-form-panel">
    <div class="forget-panel-inner">

      {{-- Logo (Centered) --}}
      <a href="{{ url('/') }}" class="forget-brand-logo" title="Geni Menu">
        <img src="https://menu.wegeni.com/user-uploads/logo/22afe8e48716500b5a2730bca0ede64a.png"
             onerror="this.src='{{ asset('assets/images/geni-menu-logo-light.png') }}'"
             alt="Geni Menu Logo">
        <span class="forget-brand-text">
          <span class="forget-brand-name">Geni <span>Menu</span></span>
        </span>
      </a>

      {{-- Heading Area (Centered) --}}
      <div class="forget-heading-area">
        <h1 class="forget-title">Forgot Your Password?</h1>
        <p class="forget-subtitle">
          No problem. Enter your email address and we’ll send you a password reset link to get back into your account.
        </p>
      </div>

      {{-- Status message --}}
      @session('status')
        <div class="forget-status-box">
          {{ $value }}
        </div>
      @endsession

      {{-- Validation errors --}}
      @if ($errors->any())
        <div class="forget-alert-box">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><line x1="12" y1="8" x2="12" y2="12"/><line x1="12" y1="16" x2="12.01" y2="16"/></svg>
          <div>
            @foreach ($errors->all() as $error)
              <div>{{ $error }}</div>
            @endforeach
          </div>
        </div>
      @endif

      {{-- Password Reset Form --}}
      <form method="POST" action="{{ route('password.email') }}" id="forgetForm">
        @csrf

        {{-- Email Field --}}
        <div class="forget-field">
          <label for="email">Email Address</label>
          <div class="forget-input-wrap">
            <span class="forget-input-icon">
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="4" width="18" height="16" rx="2"/><path d="m22 7-8.97 5.7a1.94 1.94 0 0 1-2.06 0L2 7"/></svg>
            </span>
            <input id="email"
                   class="forget-input"
                   type="email"
                   name="email"
                   value="{{ old('email') }}"
                   placeholder="Enter your registered email address"
                   required
                   autofocus
                   autocomplete="username">
          </div>
        </div>

        {{-- Submit Button --}}
        <button type="submit" class="forget-submit-btn" id="forgetSubmitBtn">
          <span id="btnText">Send Password Reset Link &rarr;</span>
          <span id="btnLoading" style="display:none; align-items:center; gap:8px;">
            <svg class="animate-spin" style="width:16px; height:16px;" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
              <circle cx="12" cy="12" r="10" stroke-opacity="0.25"></circle>
              <path d="M12 2a10 10 0 0 1 10 10" stroke-linecap="round"></path>
            </svg>
            <span>Sending link...</span>
          </span>
        </button>

        {{-- Nav Links --}}
        <div class="forget-nav-links">
          <a href="{{ route('login') }}" class="forget-back-link">
            &larr; Back to Sign In
          </a>
          <a href="{{ url('/') }}" class="forget-home-link">
            &larr; Go To Home
          </a>
        </div>

      </form>
    </div>

    {{-- Minimal Footer --}}
    <div class="forget-panel-footer">
      <span>&copy; {{ date('Y') }} Geni Menu. All rights reserved.</span>
      <div class="forget-footer-links">
        <a href="{{ Route::has('privacy.policy') ? route('privacy.policy') : (Route::has('privacy-and-policy') ? route('privacy-and-policy') : url('/privacy-policy')) }}">Privacy Policy</a>
        <span>&bull;</span>
        <a href="{{ Route::has('terms.conditions') ? route('terms.conditions') : (Route::has('terms-and-conditions') ? route('terms-and-conditions') : url('/terms-and-conditions')) }}">Terms &amp; Conditions</a>
      </div>
    </div>
  </div>

</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
  var form = document.getElementById('forgetForm');
  var submitBtn = document.getElementById('forgetSubmitBtn');
  var btnText = document.getElementById('btnText');
  var btnLoading = document.getElementById('btnLoading');

  if (form && submitBtn) {
    form.addEventListener('submit', function(e) {
      var emailField = document.getElementById('email');
      if (emailField.value && emailField.checkValidity()) {
        submitBtn.disabled = true;
        btnText.style.display = 'none';
        btnLoading.style.display = 'inline-flex';
      }
    });
  }
});
</script>
</x-auth-layout>
