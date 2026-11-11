<div class="signup-wizard-container">
<style>
  .signup-wizard-container {
    width: 100%;
    color: #21160F;
    font-family: 'Glacial Indifference', sans-serif !important;
  }

  /* Two Column Grid for clean spacious layout */
  .signup-grid-2 {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 16px 20px;
    align-items: start;
  }

  @media (max-width: 640px) {
    .signup-grid-2 {
      grid-template-columns: 1fr;
      gap: 12px;
    }
  }

  /* Stepper Progress Bar */
  .signup-stepper {
    display: flex;
    align-items: center;
    justify-content: space-between;
    margin-bottom: 22px;
    padding: 10px 18px;
    background: #FAF4ED;
    border: 1px solid rgba(135, 96, 57, 0.16);
    border-radius: 12px;
  }

  .signup-step-item {
    display: flex;
    align-items: center;
    gap: 9px;
    font-size: 12px;
    font-weight: 600;
    font-family: 'Glacial Indifference', sans-serif !important;
  }

  .signup-step-num {
    width: 24px;
    height: 24px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    font-family: 'Cinzel', serif !important;
    font-size: 11px;
    font-weight: 700;
    transition: all 0.2s ease;
  }

  .signup-step-item.active .signup-step-num {
    background: #876039;
    color: #FFFFFF;
    box-shadow: 0 2px 8px rgba(135, 96, 57, 0.35);
  }

  .signup-step-item.active .signup-step-text {
    color: #21160F;
  }

  .signup-step-item.inactive .signup-step-num {
    background: #E8DFD5;
    color: #8C7C71;
  }

  .signup-step-item.inactive .signup-step-text {
    color: #9C8E82;
  }

  .signup-step-divider {
    flex: 1;
    height: 2px;
    background: #E8DFD5;
    margin: 0 12px;
    border-radius: 2px;
  }

  .signup-step-divider.filled {
    background: #876039;
  }

  /* Heading */
  .signup-header {
    margin-bottom: 22px;
    text-align: center;
  }

  .signup-title {
    font-family: 'Cinzel', serif !important;
    font-size: 19px !important;
    font-weight: 700 !important;
    text-transform: uppercase !important;
    letter-spacing: 0.5px !important;
    color: #32180F !important;
    line-height: 1.25 !important;
    margin: 0 0 5px !important;
    text-align: center !important;
  }

  .signup-subtitle {
    font-family: 'Glacial Indifference', sans-serif !important;
    font-size: 13px !important;
    color: #6E6157;
    line-height: 1.45;
    margin: 0;
    text-align: center;
  }

  /* Alerts */
  .signup-alert-error {
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

  .signup-alert-success {
    background: #ECFDF5;
    border: 1px solid #A7F3D0;
    border-radius: 10px;
    padding: 10px 14px;
    margin-bottom: 16px;
    display: flex;
    align-items: flex-start;
    gap: 8px;
    font-size: 12px;
    color: #065F46;
    font-family: 'Glacial Indifference', sans-serif !important;
  }

  /* Form Elements */
  .signup-field {
    margin-bottom: 16px;
  }

  .signup-label {
    display: block;
    font-family: 'Glacial Indifference', sans-serif !important;
    font-size: 12.5px !important;
    font-weight: 600 !important;
    color: #32180F !important;
    margin-bottom: 6px;
  }

  .signup-label-sub {
    font-size: 10.5px !important;
    font-weight: 400;
    color: #8C7C71;
    margin-left: 3px;
  }

  .signup-input-wrap {
    position: relative;
    display: flex;
    align-items: center;
  }

  .signup-input-icon {
    position: absolute;
    left: 12px;
    color: #9C8E82;
    pointer-events: none;
    width: 16px;
    height: 16px;
    display: flex;
    align-items: center;
    justify-content: center;
    z-index: 2;
  }

  .signup-input-icon svg {
    width: 16px;
    height: 16px;
  }

  .signup-input {
    width: 100%;
    height: 42px !important;
    padding: 0 14px 0 40px !important;
    background: #FFFFFF;
    border: 1.5px solid #E8DFD5;
    border-radius: 10px !important;
    font-size: 13.5px !important;
    color: #21160F;
    outline: none;
    transition: all 0.2s ease;
    font-family: 'Glacial Indifference', sans-serif !important;
  }

  .signup-input::placeholder {
    color: #9C8E82;
  }

  .signup-input:focus {
    border-color: #876039;
    box-shadow: 0 0 0 3px rgba(135, 96, 57, 0.15);
  }

  .signup-textarea {
    width: 100%;
    min-height: 64px !important;
    padding: 10px 14px 10px 40px !important;
    background: #FFFFFF;
    border: 1.5px solid #E8DFD5;
    border-radius: 10px !important;
    font-size: 13px !important;
    color: #21160F;
    outline: none;
    transition: all 0.2s ease;
    font-family: 'Glacial Indifference', sans-serif !important;
    resize: vertical;
  }

  .signup-textarea:focus {
    border-color: #876039;
    box-shadow: 0 0 0 3px rgba(135, 96, 57, 0.15);
  }

  .signup-select {
    width: 100%;
    height: 42px !important;
    padding: 0 28px 0 40px !important;
    background: #FFFFFF;
    border: 1.5px solid #E8DFD5;
    border-radius: 10px !important;
    font-size: 13px !important;
    color: #21160F;
    outline: none;
    transition: all 0.2s ease;
    font-family: 'Glacial Indifference', sans-serif !important;
    appearance: none;
    cursor: pointer;
  }

  .signup-select:focus {
    border-color: #876039;
    box-shadow: 0 0 0 3px rgba(135, 96, 57, 0.15);
  }

  .signup-select-arrow {
    position: absolute;
    right: 12px;
    color: #8C7C71;
    pointer-events: none;
    width: 14px;
    height: 14px;
  }

  .signup-pw-toggle {
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

  .signup-pw-toggle:hover {
    color: #876039;
  }

  .signup-error-text {
    font-family: 'Glacial Indifference', sans-serif !important;
    font-size: 11px !important;
    color: #DC2626;
    margin-top: 3px;
    display: flex;
    align-items: center;
    gap: 4px;
  }

  /* Phone Group */
  .signup-phone-group {
    display: flex;
    gap: 8px;
    align-items: stretch;
  }

  .signup-phone-code-btn {
    height: 42px !important;
    padding: 0 10px !important;
    background: #FFFFFF;
    border: 1.5px solid #E8DFD5;
    border-radius: 10px !important;
    font-size: 12.5px !important;
    font-weight: 500;
    color: #21160F;
    font-family: 'Glacial Indifference', sans-serif !important;
    display: flex;
    align-items: center;
    gap: 6px;
    cursor: pointer;
    transition: all 0.2s ease;
    white-space: nowrap;
    min-width: 80px;
    flex-shrink: 0;
  }

  .signup-phone-code-btn:focus,
  .signup-phone-code-btn:hover {
    border-color: #876039;
  }

  .signup-phone-number-wrap {
    flex: 1;
    min-width: 0;
    position: relative;
  }

  .signup-phone-number-wrap .signup-input {
    padding-left: 14px !important;
  }

  /* Checkbox styling */
  .signup-checkbox-row {
    display: flex;
    align-items: flex-start;
    gap: 8px;
    margin-top: 10px;
  }

  .signup-checkbox {
    width: 16px;
    height: 16px;
    border-radius: 4px;
    border: 1.5px solid #E8DFD5;
    accent-color: #876039;
    cursor: pointer;
    margin-top: 2px;
    flex-shrink: 0;
  }

  .signup-checkbox-label {
    font-family: 'Glacial Indifference', sans-serif !important;
    font-size: 12px !important;
    color: #6E6157;
    line-height: 1.45;
    cursor: pointer;
    user-select: none;
  }

  .signup-checkbox-label a {
    color: #876039;
    font-weight: 600;
    text-decoration: underline;
  }

  .signup-checkbox-label a:hover {
    color: #6f4e2d;
  }

  /* Submit Button */
  .signup-submit-btn {
    width: 100%;
    height: 44px !important;
    background: #876039 !important;
    color: #FFFFFF !important;
    border: none;
    border-radius: 9999px !important;
    font-family: 'Cinzel', serif !important;
    font-size: 13.5px !important;
    font-weight: 700 !important;
    text-transform: uppercase !important;
    letter-spacing: 0.6px !important;
    cursor: pointer;
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 8px;
    transition: all 0.2s ease;
    box-shadow: 0 4px 14px rgba(135, 96, 57, 0.25);
    margin-top: 20px;
  }

  .signup-submit-btn:hover:not(:disabled) {
    background: #6f4e2d !important;
    transform: translateY(-1px);
    box-shadow: 0 6px 18px rgba(135, 96, 57, 0.35);
  }

  .signup-submit-btn:active:not(:disabled) {
    transform: translateY(0);
  }

  .signup-submit-btn:disabled {
    opacity: 0.65;
    cursor: not-allowed;
  }

  .signup-btn-loading {
    display: none;
    align-items: center;
    justify-content: center;
    gap: 8px;
  }

  @keyframes signup-spin {
    from { transform: rotate(0deg); }
    to { transform: rotate(360deg); }
  }

  .animate-spin {
    animation: signup-spin 1s linear infinite;
  }

  /* Back Button */
  .signup-back-btn {
    height: 44px !important;
    padding: 0 20px !important;
    background: #F8F5EF;
    color: #6E6157;
    border: 1.5px solid #E8DFD5;
    border-radius: 9999px !important;
    font-size: 13px !important;
    font-weight: 600;
    cursor: pointer;
    display: inline-flex;
    align-items: center;
    justify-content: center;
    gap: 6px;
    transition: all 0.2s ease;
    font-family: 'Glacial Indifference', sans-serif !important;
  }

  .signup-back-btn:hover {
    background: #EFE4D6;
    color: #21160F;
    border-color: #876039;
  }

  /* Bottom Links */
  .signup-login-prompt {
    margin-top: 16px;
    text-align: center;
    font-size: 13px !important;
    color: #6E6157;
    font-family: 'Glacial Indifference', sans-serif !important;
  }

  .signup-login-link {
    color: #876039;
    font-weight: 600;
    text-decoration: none;
    margin-left: 4px;
    transition: color 0.18s;
  }

  .signup-login-link:hover {
    color: #6f4e2d;
    text-decoration: underline;
  }

  .signup-home-row {
    margin-top: 10px;
    text-align: center;
  }

  .signup-home-link {
    display: inline-flex;
    align-items: center;
    gap: 6px;
    font-size: 12px !important;
    font-weight: 500;
    color: #8C7C71;
    text-decoration: none;
    transition: color 0.18s;
    font-family: 'Glacial Indifference', sans-serif !important;
  }

  .signup-home-link:hover {
    color: #876039;
  }
</style>



  {{-- Global Alerts --}}
  @if (session()->has('message'))
    <div class="signup-alert-success">
      <svg style="width:18px; height:18px; flex-shrink:0; margin-top:2px;" viewBox="0 0 20 20" fill="currentColor">
        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
      </svg>
      <div>{{ session('message') }}</div>
    </div>
  @endif

  @if (session()->has('error'))
    <div class="signup-alert-error">
      <svg style="width:18px; height:18px; flex-shrink:0; margin-top:2px;" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><line x1="12" y1="8" x2="12" y2="12"/><line x1="12" y1="16" x2="12.01" y2="16"/></svg>
      <div>{{ session('error') }}</div>
    </div>
  @endif

  @error('signup_error')
    <div class="signup-alert-error">
      <svg style="width:18px; height:18px; flex-shrink:0; margin-top:2px;" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><line x1="12" y1="8" x2="12" y2="12"/><line x1="12" y1="16" x2="12.01" y2="16"/></svg>
      <div>{{ $message }}</div>
    </div>
  @enderror

  {{-- ============================================================ --}}
  {{-- STEP 1: USER & RESTAURANT BASIC DETAILS                      --}}
  {{-- ============================================================ --}}
  @if ($showUserForm)
    <form wire:submit="submitForm">
      @csrf

      <div class="signup-header">
        <h1 class="signup-title">Let’s Get You Started.</h1>
        <p class="signup-subtitle">Create your account and take the first step toward managing your business with ease.</p>
      </div>

      {{-- Row 1: Restaurant Name & Full Name in same line --}}
      <div class="signup-grid-2">
        {{-- Restaurant Name --}}
        <div class="signup-field">
          <label for="restaurantName" class="signup-label">
            {{ __('modules.restaurant.name') }}
            <span class="signup-label-sub">(Restaurant, Cafe, Bakery)</span>
          </label>
          <div class="signup-input-wrap">
            <span class="signup-input-icon">
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"/><polyline points="9 22 9 12 15 12 15 22"/></svg>
            </span>
            <input id="restaurantName"
                   class="signup-input"
                   type="text"
                   wire:model='restaurantName'
                   placeholder="e.g. The Royal Spice Bistro"
                   required
                   autofocus />
          </div>
          @error('restaurantName')
            <div class="signup-error-text">
              <span>&bull;</span> <span>{{ $message }}</span>
            </div>
          @enderror
        </div>

        {{-- Full Name --}}
        <div class="signup-field">
          <label for="fullName" class="signup-label">{{ __('app.fullName') }} <span class="signup-label-sub">(Owner or Manager)</span></label>
          <div class="signup-input-wrap">
            <span class="signup-input-icon">
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"/><circle cx="12" cy="7" r="4"/></svg>
            </span>
            <input id="fullName"
                   class="signup-input"
                   type="text"
                   wire:model='fullName'
                   placeholder="e.g. Rahul Sharma"
                   required />
          </div>
          @error('fullName')
            <div class="signup-error-text">
              <span>&bull;</span> <span>{{ $message }}</span>
            </div>
          @enderror
        </div>
      </div>

      {{-- Subdomain Module Support --}}
      @includeIf('subdomain::include.register-subdomain')

      {{-- Row 2: Email Address & Mobile Phone in same line --}}
      <div class="signup-grid-2">
        {{-- Email Address --}}
        <div class="signup-field">
          <label for="email" class="signup-label">{{ __('app.email') }} <span class="signup-label-sub">(For sign in)</span></label>
          <div class="signup-input-wrap">
            <span class="signup-input-icon">
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="4" width="18" height="16" rx="2"/><path d="m22 7-8.97 5.7a1.94 1.94 0 0 1-2.06 0L2 7"/></svg>
            </span>
            <input id="email"
                   class="signup-input"
                   type="email"
                   wire:model='email'
                   placeholder="name@restaurant.com"
                   required
                   autocomplete="username" />
          </div>
          @error('email')
            <div class="signup-error-text">
              <span>&bull;</span> <span>{{ $message }}</span>
            </div>
          @enderror
        </div>

        {{-- Mobile Phone with Country Code --}}
        <div class="signup-field">
          <label for="restaurantPhoneNumber" class="signup-label" style="display:flex; justify-content:space-between; align-items:center;">
            <span>{{ __('modules.settings.phone') }}</span>
            @if($phoneCodeDetected && $restaurantPhoneCode)
              <span style="font-size: 11px; color: #059669; font-weight: 500; display:inline-flex; align-items:center; gap:3px;">
                <span>🌍</span> +{{ $restaurantPhoneCode }} detected
              </span>
            @endif
          </label>

          <div class="signup-phone-group">
            <!-- Phone Code Dropdown -->
            <div x-data="{ isOpen: @entangle('phoneCodeIsOpen').live }" @click.away="isOpen = false" class="relative" style="position: relative;">
              <button type="button"
                      @click="!{{ $phoneVerified ? 'true' : 'false' }} && (isOpen = !isOpen)"
                      class="signup-phone-code-btn"
                      :class="{ 'opacity-50 cursor-not-allowed': {{ $phoneVerified ? 'true' : 'false' }} }">
                <span>+{{ $restaurantPhoneCode ?: '91' }}</span>
                <svg style="width:12px; height:12px; color:#8C7C71;" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                </svg>
              </button>

              <!-- Search Dropdown List -->
              <ul x-show="isOpen && !{{ $phoneVerified ? 'true' : 'false' }}"
                  x-transition
                  x-cloak
                  style="position:absolute; top:calc(100% + 4px); left:0; width:220px; z-index:50; background:#FFFFFF; border:1px solid #E8DFD5; border-radius:10px; box-shadow:0 10px 25px rgba(0,0,0,0.12); max-height:200px; overflow-y:auto; padding:4px 0; margin:0; list-style:none;">
                <li style="padding:4px 8px; position:sticky; top:0; background:#FFFFFF; z-index:2; border-bottom:1px solid #F1E9DF;">
                  <input wire:model.live.debounce.300ms="phoneCodeSearch"
                         class="signup-input"
                         style="height:32px; padding:0 8px; font-size:11.5px;"
                         type="text"
                         placeholder="{{ __('placeholders.search') }} code..." />
                </li>
                @forelse ($phonecodes as $phonecode)
                  <li @click="$wire.selectPhoneCode('{{ $phonecode }}')"
                      wire:key="phone-code-{{ $phonecode }}"
                      style="padding:6px 12px; font-size:12px; color:#21160F; cursor:pointer; display:flex; align-items:center; justify-content:space-between; transition:background 0.15s;"
                      onmouseover="this.style.background='#FAF4ED'"
                      onmouseout="this.style.background='transparent'">
                    <span>+{{ $phonecode }}</span>
                    @if($phonecode === $restaurantPhoneCode)
                      <span style="color:#876039; font-weight:700;">✓</span>
                    @endif
                  </li>
                @empty
                  <li style="padding:8px 12px; font-size:11.5px; color:#8C7C71;">
                    {{ __('modules.settings.noPhoneCodesFound') }}
                  </li>
                @endforelse
              </ul>
            </div>

            <!-- Phone Number Input -->
            <div class="signup-phone-number-wrap">
              <input id="restaurantPhoneNumber"
                     class="signup-input"
                     type="tel"
                     wire:model='restaurantPhoneNumber'
                     placeholder="e.g. 9876543210"
                     :disabled="{{ $phoneVerified ? 'true' : 'false' }}"
                     required />
            </div>

            <!-- SMS Verification Button if enabled -->
            @if($this->isPhoneVerificationEnabled() && !$phoneVerified && !$showOtpField)
              <button type="button"
                      wire:click="sendOtp"
                      wire:loading.attr="disabled"
                      style="height:36px; padding:0 12px; background:#876039; color:#FFFFFF; border:none; border-radius:8px; font-size:11.5px; font-weight:600; cursor:pointer; white-space:nowrap; font-family:'Glacial Indifference', sans-serif;">
                <span wire:loading.remove wire:target="sendOtp">{{ __('sms::modules.restaurant.verify') }}</span>
                <span wire:loading wire:target="sendOtp">{{ __('sms::modules.restaurant.sending') }}</span>
              </button>
            @endif
          </div>

          @if($phoneVerified)
            <div style="margin-top:4px; display:flex; align-items:center; gap:4px; font-size:11.5px; color:#059669; font-weight:600;">
              <svg style="width:14px; height:14px;" fill="currentColor" viewBox="0 0 20 20">
                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
              </svg>
              <span>{{ __('sms::modules.restaurant.verified') }}</span>
            </div>
          @endif

          @error('restaurantPhoneCode') <div class="signup-error-text"><span>&bull;</span> <span>{{ $message }}</span></div> @enderror
          @error('restaurantPhoneNumber') <div class="signup-error-text"><span>&bull;</span> <span>{{ $message }}</span></div> @enderror
          @error('phone_verification') <div class="signup-error-text"><span>&bull;</span> <span>{{ $message }}</span></div> @enderror
          @error('otp_send') <div class="signup-error-text"><span>&bull;</span> <span>{{ $message }}</span></div> @enderror
          @error('phone_verification_required') <div class="signup-error-text"><span>&bull;</span> <span>{{ $message }}</span></div> @enderror

          <!-- OTP Verification Box -->
          @if($showOtpField && !$phoneVerified)
            <div style="margin-top:8px; padding:10px; background:#FAF4ED; border:1px solid #E8DFD5; border-radius:8px; font-family:'Glacial Indifference', sans-serif;">
              <p style="font-size:11.5px; font-weight:600; color:#21160F; margin:0 0 2px;">{{ __('sms::modules.restaurant.verificationCodeSent') }}</p>
              <p style="font-size:11px; color:#6E6157; margin:0 0 6px;">
                {{ __('sms::modules.restaurant.pleaseEnterThe4DigitCodeSentTo') }} +{{ $restaurantPhoneCode }} {{ $restaurantPhoneNumber }}
              </p>
              <div style="display:flex; align-items:center; gap:6px; flex-wrap:wrap;">
                <input id="otpCode"
                       class="signup-input"
                       style="width:90px; height:34px; text-align:center; font-size:14px; font-weight:700; letter-spacing:0.25em; padding:0 4px;"
                       type="text"
                       wire:model='otpCode'
                       placeholder="----"
                       maxlength="4"
                       autocomplete="one-time-code" />

                <button type="button"
                        wire:click="verifyOtp"
                        wire:loading.attr="disabled"
                        style="height:34px; padding:0 12px; background:#876039; color:#FFFFFF; border:none; border-radius:8px; font-size:11.5px; font-weight:600; cursor:pointer; font-family:'Glacial Indifference', sans-serif;">
                  <span wire:loading.remove wire:target="verifyOtp">{{ __('sms::modules.restaurant.verifyCode') }}</span>
                  <span wire:loading wire:target="verifyOtp">{{ __('sms::modules.restaurant.verifying') }}</span>
                </button>

                <button type="button"
                        wire:click="sendOtp"
                        wire:loading.attr="disabled"
                        style="background:transparent; border:none; font-size:11px; color:#876039; text-decoration:underline; cursor:pointer; font-weight:600; font-family:'Glacial Indifference', sans-serif;">
                  <span wire:loading.remove wire:target="sendOtp">{{ __('sms::modules.restaurant.resendCode') }}</span>
                  <span wire:loading wire:target="sendOtp">{{ __('sms::modules.restaurant.sending') }}</span>
                </button>
              </div>
              @error('otp_verification')
                <div class="signup-error-text" style="margin-top:4px;"><span>&bull;</span> <span>{{ $message }}</span></div>
              @enderror
            </div>
          @endif
        </div>
      </div>

      {{-- Password with Eye Toggle --}}
      <div class="signup-field" x-data="{ showPw: false }">
        <label for="password" class="signup-label">{{ __('modules.staff.password') }}</label>
        <div class="signup-input-wrap">
          <span class="signup-input-icon">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="11" width="18" height="11" rx="2" ry="2"/><path d="M7 11V7a5 5 0 0 1 10 0v4"/></svg>
          </span>
          <input id="password"
                 class="signup-input"
                 :type="showPw ? 'text' : 'password'"
                 wire:model='password'
                 placeholder="Create a secure password"
                 required
                 autocomplete="new-password" />
          <button type="button"
                  class="signup-pw-toggle"
                  @click="showPw = !showPw"
                  aria-label="Toggle password visibility">
            <svg x-show="!showPw" viewBox="0 0 24 24" style="width:18px; height:18px;" fill="none" stroke="currentColor" stroke-width="2"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"/><circle cx="12" cy="12" r="3"/></svg>
            <svg x-show="showPw" x-cloak viewBox="0 0 24 24" style="width:18px; height:18px;" fill="none" stroke="currentColor" stroke-width="2"><path d="M17.94 17.94A10.07 10.07 0 0 1 12 20c-7 0-11-8-11-8a18.45 18.45 0 0 1 5.06-5.94M9.9 4.24A9.12 9.12 0 0 1 12 4c7 0 11 8 11 8a18.5 18.5 0 0 1-2.16 3.19m-6.72-1.07a3 3 0 1 1-4.24-4.24"/><line x1="1" y1="1" x2="23" y2="23"/></svg>
          </button>
        </div>
        @error('password')
          <div class="signup-error-text">
            <span>&bull;</span> <span>{{ $message }}</span>
          </div>
        @enderror
      </div>

      {{-- Terms & Conditions Checkbox --}}
      @if(global_setting()->show_privacy_consent_checkbox)
        <div class="signup-checkbox-row">
          <input type="checkbox"
                 id="termsAndPrivacy"
                 class="signup-checkbox"
                 wire:model.live="termsAndPrivacy" />
          <label for="termsAndPrivacy" class="signup-checkbox-label">
            {{ __('I accept the') }}
            <a href="{{ Route::has('terms.conditions') ? route('terms.conditions') : (Route::has('terms-and-conditions') ? route('terms-and-conditions') : url('/terms-and-conditions')) }}" target="_blank">
              {{ __('Terms & Conditions') }}
            </a>
            {{ __('and') }}
            @if(global_setting()->privacy_policy_link)
              <a href="{{ global_setting()->privacy_policy_link }}" target="_blank">{{ __('Privacy Policy') }}</a>
            @else
              <a href="{{ Route::has('privacy.policy') ? route('privacy.policy') : (Route::has('privacy-and-policy') ? route('privacy-and-policy') : url('/privacy-policy')) }}" target="_blank">{{ __('Privacy Policy') }}</a>
            @endif
          </label>
        </div>
        @error('termsAndPrivacy')
          <div class="signup-error-text"><span>&bull;</span> <span>{{ $message }}</span></div>
        @enderror

        <div class="signup-checkbox-row">
          <input type="checkbox"
                 id="marketingEmails"
                 class="signup-checkbox"
                 wire:model.live="marketingEmails" />
          <label for="marketingEmails" class="signup-checkbox-label">
            {{ __('I agree to receive helpful product updates and onboarding emails.') }}
          </label>
        </div>
      @endif

      @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
        <div class="signup-checkbox-row">
          <input type="checkbox" id="terms" name="terms" class="signup-checkbox" required />
          <label for="terms" class="signup-checkbox-label">
            {!! __('I agree to the :terms_of_service and :privacy_policy', [
                'terms_of_service' => '<a target="_blank" href="' . route('terms.show') . '">' . __('Terms of Service') . '</a>',
                'privacy_policy' => '<a target="_blank" href="' . (global_setting()->privacy_policy_link ?: route('policy.show')) . '">' . __('Privacy Policy') . '</a>',
            ]) !!}
          </label>
        </div>
      @endif

      {{-- Submit to Next Step --}}
      <button type="submit"
              class="signup-submit-btn"
              wire:target="submitForm"
              wire:loading.attr="disabled">
        <span wire:loading.remove wire:target="submitForm">Continue to Branch Details &rarr;</span>
        <span wire:loading.flex wire:target="submitForm" class="signup-btn-loading">
          <svg class="animate-spin" style="width:16px; height:16px;" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
            <circle cx="12" cy="12" r="10" stroke-opacity="0.25"></circle>
            <path d="M12 2a10 10 0 0 1 10 10" stroke-linecap="round"></path>
          </svg>
          <span>Validating details...</span>
        </span>
      </button>

      {{-- Already Registered / Back to Login --}}
      <div class="signup-login-prompt">
        <span>Already have an account?</span>
        <a href="{{ route('login') }}" class="signup-login-link">Sign In &rarr;</a>
      </div>

      {{-- Back to Home --}}
      <div class="signup-home-row">
        <a href="{{ url('/') }}" class="signup-home-link">
          &larr; Go To Home
        </a>
      </div>

    </form>
  @endif


  {{-- ============================================================ --}}
  {{-- STEP 2: RESTAURANT BRANCH & LOCATION DETAILS                 --}}
  {{-- ============================================================ --}}
  @if ($showBranchForm)
    <form wire:submit="submitForm2">
      @csrf

      <div class="signup-header">
        <h2 class="signup-title">Restaurant Branch Details</h2>
        <p class="signup-subtitle">Set up your first outlet location to begin organizing tables and orders.</p>
      </div>

      {{-- Branch Name & Country in one row --}}
      <div class="signup-grid-2">
        {{-- Branch Name --}}
        <div class="signup-field">
          <label for="branchName" class="signup-label">{{ __('modules.settings.branchName') }} <span class="signup-label-sub">(e.g. Main Branch)</span></label>
          <div class="signup-input-wrap">
            <span class="signup-input-icon">
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M3 21h18M5 21V7l8-4v18M19 21V11l-6-3M9 9h1M9 13h1M9 17h1"/></svg>
            </span>
            <input id="branchName"
                   class="signup-input"
                   type="text"
                   wire:model='branchName'
                   placeholder="e.g. Main Branch"
                   required
                   autofocus />
          </div>
          @error('branchName')
            <div class="signup-error-text">
              <span>&bull;</span> <span>{{ $message }}</span>
            </div>
          @enderror
        </div>

        {{-- Country Selection --}}
        <div class="signup-field">
          <label for="restaurantCountry" class="signup-label">{{ __('modules.settings.restaurantCountry') }}</label>
          <div class="signup-input-wrap">
            <span class="signup-input-icon">
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><line x1="2" y1="12" x2="22" y2="12"/><path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"/></svg>
            </span>
            <select id="restaurantCountry"
                    class="signup-select"
                    wire:model.live="country">
              @foreach ($countries as $item)
                <option value="{{ $item->id }}">{{ $item->countries_name }}</option>
              @endforeach
            </select>
            <span class="signup-select-arrow">
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="6 9 12 15 18 9"/></svg>
            </span>
          </div>
          @error('country')
            <div class="signup-error-text">
              <span>&bull;</span> <span>{{ $message }}</span>
            </div>
          @enderror
        </div>
      </div>

      {{-- Address --}}
      <div class="signup-field">
        <label for="address" class="signup-label">{{ __('modules.settings.branchAddress') }}</label>
        <div class="signup-input-wrap" style="align-items: flex-start;">
          <span class="signup-input-icon" style="top: 10px;">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/><circle cx="12" cy="10" r="3"/></svg>
          </span>
          <textarea id="address"
                    class="signup-textarea"
                    rows="2"
                    wire:model='address'
                    placeholder="Enter street address, building, floor, city..."
                    required></textarea>
        </div>
        @error('address')
          <div class="signup-error-text">
            <span>&bull;</span> <span>{{ $message }}</span>
          </div>
        @enderror
      </div>

      {{-- Buttons Row: Back & Submit --}}
      <div style="display:flex; gap:12px; align-items:center; margin-top:24px;">
        <button type="button"
                wire:click="$set('showUserForm', true); $set('showBranchForm', false);"
                class="signup-back-btn">
          &larr; Back
        </button>

        <button type="submit"
                class="signup-submit-btn"
                style="margin-top:0; flex:1;"
                wire:target="submitForm2"
                wire:loading.attr="disabled">
          <span wire:loading.remove wire:target="submitForm2">Complete Registration &rarr;</span>
          <span wire:loading.flex wire:target="submitForm2" class="signup-btn-loading">
            <svg class="animate-spin" style="width:16px; height:16px;" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
              <circle cx="12" cy="12" r="10" stroke-opacity="0.25"></circle>
              <path d="M12 2a10 10 0 0 1 10 10" stroke-linecap="round"></path>
            </svg>
            <span>Setting up your restaurant...</span>
          </span>
        </button>
      </div>

      {{-- Already Registered / Back to Login --}}
      <div class="signup-login-prompt">
        <span>Already have an account?</span>
        <a href="{{ route('login') }}" class="signup-login-link">Sign In &rarr;</a>
      </div>

      {{-- Back to Home --}}
      <div class="signup-home-row">
        <a href="{{ url('/') }}" class="signup-home-link">
          &larr; Go To Home
        </a>
      </div>

    </form>
  @endif

</div>
