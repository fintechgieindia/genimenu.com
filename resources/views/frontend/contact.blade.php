@php
    $meta = [
        'title' => 'Contact Geni Menu | Restaurant Management Software Support & Sales',
        'description' => 'Contact Geni Menu to discuss your restaurant software requirements, request a product demo, or get support for your existing setup.',
        'keywords' => 'contact Geni Menu, restaurant software demo, restaurant POS sales, Geni Menu support, restaurant billing software contact',
    ];
@endphp
@extends('layouts.frontend-master')

@section('content')

{{-- Google Fonts --}}
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@500;600;700&family=Glacial+Indifference:wght@400;700&family=Plus+Jakarta+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">

<style>
/* ==========================================================================
   GENI MENU CONTACT PAGE - EXACT REFERENCE DESIGN
   ========================================================================== */
:root {
  --geni-chocolate: #27130D;
  --geni-deep-brown: #2F1910;
  --geni-caramel: #B57E48;
  --geni-caramel-hover: #A06B37;
  --geni-champagne: #F2C58D;
  --geni-cream-bg: #FAF3EC;
  --geni-card-bg: #FFFFFF;
  --geni-pill-bg: #FAF5EF;
  --geni-pill-border: #E8D9CB;
  --geni-chk-border: #E8C9A9;
  --geni-input-border: #E5D7CA;
  --geni-text-dark: #27130D;
  --geni-text-muted: #705B50;
  --geni-text-placeholder: #A39284;
}

* { box-sizing: border-box; }

.contact-page-outer {
  width: 100%;
  overflow-x: hidden;
  background-color: var(--geni-cream-bg);
  background: linear-gradient(180deg, #F8F1E9 0%, #FAF3EC 100%);
  font-family: 'Glacial Indifference', 'Plus Jakarta Sans', -apple-system, BlinkMacSystemFont, sans-serif !important;
  color: var(--geni-text-dark);
}

/* ==========================================================================
   MAIN CONTACT SECTION (GET IN TOUCH + TELL US ABOUT YOUR BUSINESS)
   ========================================================================== */
.contact-main-sec {
  padding: 44px 0 56px;
  background-color: transparent;
}

.contact-container {
  max-width: 1240px;
  margin: 0 auto;
  padding: 0 24px;
}

.contact-layout-grid {
  display: grid;
  grid-template-columns: 390px 1fr;
  gap: 34px;
  align-items: start;
}

/* --------------------------------------------------------------------------
   LEFT COLUMN: GET IN TOUCH HEADING + 4 ROUNDED CARDS
   -------------------------------------------------------------------------- */
.c-left-col {
  display: flex;
  flex-direction: column;
}

.c-get-in-touch-heading {
  font-family: 'Cinzel', serif !important;
  font-size: 26px;
  font-weight: 700;
  color: var(--geni-chocolate);
  letter-spacing: 0.04em;
  text-transform: uppercase;
  margin: 0 0 22px 4px;
  line-height: 1.2;
}

.c-contact-stack {
  display: flex;
  flex-direction: column;
  gap: 16px;
}

.c-info-card-item {
    display: flex;
    align-items: center;
    gap: 24px;
    padding: 26px 28px;
    background: #FAF5EF;
    border: 1px solid var(--geni-chk-border);
    border-radius: 24px;
    text-decoration: none;
    color: inherit;
    transition: all 0.25s ease;
}

.c-info-card-item:hover {
  transform: translateY(-2px);
  border-color: var(--geni-caramel);
  box-shadow: 0 8px 24px rgba(39, 19, 13, 0.08);
}

/* Icon Containers */
.c-info-card-icon {
  width: 52px;
  height: 52px;
  border-radius: 16px;
  display: flex;
  align-items: center;
  justify-content: center;
  flex-shrink: 0;
  transition: all 0.25s ease;
}

/* Card 1: Filled caramel */
.c-info-card-item.c-icon-filled .c-info-card-icon {
  background: var(--geni-caramel);
  color: #FFFFFF;
}

/* Cards 2, 3, 4: Pale cream tint */
.c-info-card-item.c-icon-light .c-info-card-icon {
  background: #F5EDE3;
  color: var(--geni-caramel);
}

.c-info-card-item.c-icon-light:hover .c-info-card-icon {
  background: var(--geni-caramel);
  color: #FFFFFF;
}

.c-info-card-text {
  flex: 1;
  min-width: 0;
}

.c-info-card-lbl {
    font-size: 15px;
    font-weight: 900;
    letter-spacing: 0.06em;
    text-transform: uppercase;
    margin-bottom: 2px;
    color: var(--geni-caramel);
}

.c-info-card-val {
    font-size: 15.2px;
    font-weight: 700;
    word-break: break-word;
    color: var(--geni-chocolate);
}

/* --------------------------------------------------------------------------
   RIGHT COLUMN: ENQUIRY FORM CARD
   -------------------------------------------------------------------------- */
.c-form-card {
  background: #FFFFFF;
  border: 1.5px solid #EADBCE;
  border-radius: 24px;
  padding: 36px 40px 34px;
  box-shadow: 0 8px 28px rgba(39, 19, 13, 0.04);
}

.c-form-title {
  font-family: 'Cinzel', serif !important;
  font-size: clamp(22px, 2.2vw, 25px);
  color: var(--geni-chocolate);
  text-transform: uppercase;
  letter-spacing: 0.03em;
  font-weight: 600;
  margin: 0 0 6px 0;
  line-height: 1.25;
}

.c-form-subtitle {
  font-family: 'Glacial Indifference', 'Plus Jakarta Sans', sans-serif !important;
  font-size: 13.5px;
  color: var(--geni-text-muted);
  margin: 0 0 24px 0;
  font-weight: 400;
}

/* Form Groups & Inputs */
.fm-grp {
  margin-bottom: 18px;
}

.fm-grp label,
.feature-sec-label {
  display: block;
  font-family: 'Glacial Indifference', 'Plus Jakarta Sans', sans-serif !important;
  font-size: 13px;
  font-weight: 700;
  color: var(--geni-deep-brown);
  letter-spacing: 0.01em;
  margin-bottom: 6px;
}

.fm-grp label span {
  color: #DC2626;
  font-weight: 700;
}

.fm-grp input,
.fm-grp select,
.fm-grp textarea {
  width: 100%;
  height: 46px;
  padding: 0 16px;
  border: 1.5px solid var(--geni-input-border);
  border-radius: 10px;
  font-family: 'Glacial Indifference', 'Plus Jakarta Sans', sans-serif !important;
  font-size: 13.5px;
  color: var(--geni-text-dark);
  background: #FFFFFF;
  box-sizing: border-box;
  outline: none;
  transition: all 0.2s ease;
}

.fm-grp select {
  appearance: none;
  -webkit-appearance: none;
  background-image: url("data:image/svg+xml;charset=UTF-8,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24' fill='none' stroke='%23B57E48' stroke-width='2' stroke-linecap='round' stroke-linejoin='round'%3e%3cpolyline points='6 9 12 15 18 9'%3e%3c/polyline%3e%3c/svg%3e");
  background-repeat: no-repeat;
  background-position: right 14px center;
  background-size: 16px;
  padding-right: 38px;
  cursor: pointer;
}

.fm-grp input::placeholder,
.fm-grp textarea::placeholder {
  color: var(--geni-text-placeholder);
  font-size: 13px;
}

.fm-grp input:focus,
.fm-grp select:focus,
.fm-grp textarea:focus {
  outline: none;
  border-color: var(--geni-caramel);
  box-shadow: 0 0 0 3px rgba(181, 126, 72, 0.16);
  background: #FFFFFF;
}

.fm-grid-2 {
  display: grid;
  grid-template-columns: 1fr 1fr;
  gap: 16px;
  margin-bottom: 18px;
}

.fm-grid-outlets {
  display: grid;
  grid-template-columns: 1.35fr 1fr;
  gap: 16px;
  margin-bottom: 22px;
}

/* Feature Checkboxes Grid (3x3) */
.feature-sec-label {
  margin-top: 22px;
  margin-bottom: 10px;
  font-size: 13.5px;
}

.feature-grid {
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  gap: 10px;
  margin-bottom: 22px;
}

.feature-pill {
  position: relative;
  display: flex;
  align-items: center;
  gap: 10px;
  height: 44px;
  padding: 0 12px;
  background: var(--geni-pill-bg);
  border: 1px solid var(--geni-pill-border);
  border-radius: 10px;
  cursor: pointer;
  user-select: none;
  transition: all 0.2s ease;
  box-sizing: border-box;
}

.feature-pill:hover {
  background: #FFFFFF;
  border-color: var(--geni-caramel);
}

.feature-pill input[type="checkbox"] {
  position: absolute;
  opacity: 0;
  width: 0;
  height: 0;
  pointer-events: none;
}

.custom-chk {
  width: 17px;
  height: 17px;
  min-width: 17px;
  border: 1.5px solid #D5C2B0;
  border-radius: 4px;
  background: #FFFFFF;
  display: flex;
  align-items: center;
  justify-content: center;
  transition: all 0.2s ease;
  box-sizing: border-box;
}

.custom-chk svg {
  width: 11px;
  height: 11px;
  stroke: #FFFFFF;
  stroke-width: 2.5;
  display: none;
}

.feature-pill input[type="checkbox"]:checked ~ .custom-chk {
  background: var(--geni-caramel);
  border-color: var(--geni-caramel);
}

.feature-pill input[type="checkbox"]:checked ~ .custom-chk svg {
  display: block;
}

.feature-pill:has(input[type="checkbox"]:checked) {
  background: #FDF8F2;
  border-color: var(--geni-caramel);
}

.feature-text {
  font-family: 'Glacial Indifference', 'Plus Jakarta Sans', sans-serif !important;
  font-size: 12px;
  font-weight: 600;
  color: var(--geni-chocolate);
  line-height: 1.25;
  white-space: nowrap;
  overflow: hidden;
  text-overflow: ellipsis;
}

/* Message Input */
.fm-message-input {
  width: 100% !important;
  height: 52px !important;
  padding: 12px 16px !important;
  border: 1.5px solid var(--geni-input-border) !important;
  border-radius: 10px !important;
  font-family: 'Glacial Indifference', 'Plus Jakarta Sans', sans-serif !important;
  font-size: 13.5px !important;
  color: var(--geni-text-dark) !important;
  background: #FFFFFF !important;
  box-sizing: border-box !important;
  outline: none !important;
  transition: all 0.2s ease !important;
  resize: vertical;
}

.fm-message-input:focus {
  border-color: var(--geni-caramel) !important;
  box-shadow: 0 0 0 3px rgba(181, 126, 72, 0.16) !important;
}

/* Submit Button */
.fm-submit-btn {
  width: 100%;
  height: 50px;
  margin-top: 10px;
  margin-bottom: 12px;
  background-color: var(--geni-chocolate);
  color: #FFFFFF !important;
  border: 1.5px solid var(--geni-caramel);
  border-radius: 12px;
  font-family: 'Cinzel', serif !important;
  font-size: 14px;
  font-weight: 600;
  letter-spacing: 0.08em;
  text-transform: uppercase;
  cursor: pointer;
  box-shadow: 0 4px 14px rgba(39, 19, 13, 0.16);
  transition: all 0.25s ease;
  display: flex;
  align-items: center;
  justify-content: center;
  gap: 8px;
}

.fm-submit-btn:hover {
  background-color: var(--geni-deep-brown);
  border-color: var(--geni-champagne);
  transform: translateY(-1px);
  box-shadow: 0 6px 20px rgba(39, 19, 13, 0.25);
}

.fm-note-text {
  font-family: 'Glacial Indifference', 'Plus Jakarta Sans', sans-serif !important;
  font-size: 12.5px;
  color: var(--geni-text-muted);
  text-align: center;
  margin: 0;
}

/* Alerts */
.alert-success-box {
  background: #EDFDF5;
  color: #065F46;
  padding: 14px 18px;
  border-radius: 12px;
  margin-bottom: 20px;
  font-size: 13.5px;
  border: 1px solid #10B981;
}

.alert-error-box {
  background: #FEF2F2;
  color: #991B1B;
  padding: 14px 18px;
  border-radius: 12px;
  margin-bottom: 20px;
  font-size: 13.5px;
  border: 1px solid #EF4444;
}

/* ==========================================================================
   FULL-WIDTH GOOGLE MAP IMMEDIATELY ABOVE THE FOOTER
   ========================================================================== */
.contact-map-bottom-sec {
  width: 100% !important;
  height: 500px;
  position: relative;
  overflow: hidden;
  background-color: #EFE8E3;
  display: block;
  margin-top: 56px !important;
  margin-bottom: 0 !important;
  padding: 0 !important;
  box-sizing: border-box;
}

.contact-map-bottom-sec iframe {
  width: 100% !important;
  height: 100% !important;
  border: 0 !important;
  display: block !important;
  margin: 0 !important;
}

.map-address-overlay-card {
  position: absolute;
  top: 24px;
  left: 24px;
  z-index: 10;
  width: 330px;
  max-width: calc(100% - 48px);
  background: #FFFFFF;
  border-radius: 20px;
  padding: 22px 24px;
  box-shadow: 0 10px 30px rgba(39, 19, 13, 0.12), 0 2px 6px rgba(39, 19, 13, 0.04);
  border: 1px solid rgba(181, 126, 72, 0.25);
  box-sizing: border-box;
}

.map-card-badge {
  display: inline-flex;
  align-items: center;
  gap: 8px;
  font-family: 'Cinzel', serif !important;
  font-size: 11px;
  font-weight: 700;
  letter-spacing: 0.12em;
  text-transform: uppercase;
  color: var(--geni-caramel);
  background: #FAF3EC;
  border: 1px solid rgba(181, 126, 72, 0.3);
  padding: 5px 14px;
  border-radius: 999px;
  margin-bottom: 16px;
}

.map-card-badge-dot {
  width: 7px;
  height: 7px;
  border-radius: 50%;
  background-color: #D9383A;
  box-shadow: 0 0 0 4px #FCDAD8;
}

.map-overlay-content {
  display: flex;
  align-items: flex-start;
  gap: 12px;
}

.map-pin-icon {
  display: inline-flex;
  align-items: center;
  justify-content: center;
  width: 36px;
  height: 36px;
  border-radius: 50%;
  background: #F4ECE3;
  color: var(--geni-caramel);
  flex-shrink: 0;
  margin-top: 2px;
}

.map-pin-icon svg {
  width: 17px;
  height: 17px;
  fill: currentColor;
}

.map-overlay-details {
  flex: 1;
}

.map-overlay-company {
  font-family: 'Glacial Indifference', 'Plus Jakarta Sans', sans-serif !important;
  font-size: 20px;
  font-weight: 700;
  color: #27130D;
  margin: 0 0 8px 0;
  line-height: 1.2;
}

.map-overlay-address-text {
  font-family: 'Glacial Indifference', 'Plus Jakarta Sans', sans-serif !important;
  font-size: 14.5px;
  color: #27130D;
  line-height: 1.55;
  margin: 0;
}

.map-overlay-address-text strong {
  font-weight: 700;
  color: #27130D;
}

/* ==========================================================================
   RESPONSIVE DESIGN (Desktop, Tablet, Mobile)
   ========================================================================== */
@media (max-width: 1024px) {
  .contact-layout-grid {
    grid-template-columns: 1fr;
    gap: 30px;
  }
  .c-info-card-item {
    min-height: auto;
  }
  .feature-grid {
    grid-template-columns: repeat(2, 1fr);
  }
}

@media (max-width: 768px) {
  .contact-main-sec {
    padding: 30px 0 36px;
  }
  .contact-container {
    padding: 0 16px;
  }
  .c-get-in-touch-heading {
    font-size: 22px;
    margin-bottom: 16px;
  }
  .c-info-card-item {
    padding: 16px 18px;
    gap: 16px;
    border-radius: 18px;
  }
  .c-info-card-icon {
    width: 46px;
    height: 46px;
  }
  .c-form-card {
    padding: 24px 18px;
    border-radius: 18px;
  }
  .c-form-title {
    font-size: 20px;
  }
  .fm-grid-2,
  .fm-grid-outlets {
    grid-template-columns: 1fr;
    gap: 14px;
  }
  .feature-grid {
    grid-template-columns: 1fr;
    gap: 8px;
  }
  .contact-map-bottom-sec {
    height: 420px;
    margin-top: 36px !important;
  }
  .map-address-overlay-card {
    top: 14px;
    left: 14px;
    right: 14px;
    width: auto;
    max-width: calc(100% - 28px);
    padding: 16px;
  }
}
</style>

<div class="contact-page-outer">

    {{-- MAIN SECTION: GET IN TOUCH & ENQUIRY FORM --}}
    <section class="contact-main-sec" id="form">
        <div class="contact-container">
            <div class="contact-layout-grid">

                {{-- LEFT COLUMN: GET IN TOUCH + 4 CONTACT CARDS --}}
                <div class="c-left-col">
                    <h1 class="c-get-in-touch-heading">GET IN TOUCH</h1>

                    <div class="c-contact-stack">
                        {{-- 1. Sales --}}
                        <a href="mailto:business@wegeni.com" class="c-info-card-item c-icon-filled">
                            <div class="c-info-card-icon" aria-hidden="true">
                                <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path>
                                    <polyline points="22,6 12,13 2,6"></polyline>
                                </svg>
                            </div>
                            <div class="c-info-card-text">
                                <div class="c-info-card-lbl">SALES</div>
                                <div class="c-info-card-val">business@wegeni.com</div>
                            </div>
                        </a>

                        {{-- 2. Sales & Enquiries --}}
                        <a href="tel:+919788073000" class="c-info-card-item c-icon-light">
                            <div class="c-info-card-icon" aria-hidden="true">
                                <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path>
                                </svg>
                            </div>
                            <div class="c-info-card-text">
                                <div class="c-info-card-lbl">SALES & ENQUIRIES</div>
                                <div class="c-info-card-val">+91 97880 73000</div>
                            </div>
                        </a>

                        {{-- 3. Business Enquiries --}}
                        <a href="mailto:business@wegeni.com" class="c-info-card-item c-icon-light">
                            <div class="c-info-card-icon" aria-hidden="true">
                                <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M6 2L3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4z"></path>
                                    <line x1="3" y1="6" x2="21" y2="6"></line>
                                    <path d="M16 10a4 4 0 0 1-8 0"></path>
                                </svg>
                            </div>
                            <div class="c-info-card-text">
                                <div class="c-info-card-lbl">BUSINESS ENQUIRIES</div>
                                <div class="c-info-card-val">business@wegeni.com</div>
                            </div>
                        </a>

                        {{-- 4. Customer Support --}}
                        <a href="mailto:support@wegeni.com" class="c-info-card-item c-icon-light">
                            <div class="c-info-card-icon" aria-hidden="true">
                                <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M3 18v-6a9 9 0 0 1 18 0v6"></path>
                                    <path d="M21 19a2 2 0 0 1-2 2h-1a2 2 0 0 1-2-2v-3a2 2 0 0 1 2-2h3zM3 19a2 2 0 0 0 2 2h1a2 2 0 0 0 2-2v-3a2 2 0 0 0-2-2H3z"></path>
                                </svg>
                            </div>
                            <div class="c-info-card-text">
                                <div class="c-info-card-lbl">CUSTOMER SUPPORT</div>
                                <div class="c-info-card-val">support@wegeni.com</div>
                            </div>
                        </a>
                    </div>
                </div>

                {{-- RIGHT COLUMN: ENQUIRY FORM --}}
                <div class="c-form-card">
                    <h2 class="c-form-title">TELL US ABOUT YOUR BUSINESS</h2>
                    <p class="c-form-subtitle">Fill in your details and our team will get back to you.</p>

                    @if (session('success'))
                        <div class="alert-success-box">
                            <strong>Thanks for reaching out!</strong> {{ session('success') }}
                        </div>
                    @endif

                    @if ($errors->any())
                        <div class="alert-error-box">
                            <strong>Please fix the following errors:</strong>
                            <ul style="margin: 4px 0 0 16px; padding: 0;">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form action="{{ route('contact.submit') }}" method="POST" id="mainContactForm">
                        @csrf
                        
                        {{-- 1. Full Name --}}
                        <div class="fm-grp">
                            <label for="name">Full Name <span>*</span></label>
                            <input type="text" id="name" name="name" value="{{ old('name') }}" required placeholder="Enter your name">
                        </div>

                        {{-- 2. Business Name & Mobile Number --}}
                        <div class="fm-grid-2">
                            <div class="fm-grp" style="margin-bottom: 0;">
                                <label for="company">Business Name <span>*</span></label>
                                <input type="text" id="company" name="company" value="{{ old('company') }}" required placeholder="Enter your restaurant / business name">
                            </div>
                            <div class="fm-grp" style="margin-bottom: 0;">
                                <label for="phone">Mobile Number <span>*</span></label>
                                <input type="tel" id="phone" name="phone" value="{{ old('phone') }}" required placeholder="Enter your phone number">
                            </div>
                        </div>

                        {{-- 3. Email Address --}}
                        <div class="fm-grp">
                            <label for="email">Email Address <span>*</span></label>
                            <input type="email" id="email" name="email" value="{{ old('email') }}" required placeholder="Enter your email address">
                        </div>

                        {{-- 4. Business Type & Number of Outlets --}}
                        <div class="fm-grid-outlets">
                            <div class="fm-grp" style="margin-bottom: 0;">
                                <label for="subject">Business Type <span>*</span></label>
                                <select id="subject" name="subject" required>
                                    <option value="" disabled {{ old('subject') ? '' : 'selected' }}>Select your business type</option>
                                    <option value="Restaurant" {{ old('subject') == 'Restaurant' ? 'selected' : '' }}>Restaurant</option>
                                    <option value="Dine-in Restaurant" {{ old('subject') == 'Dine-in Restaurant' ? 'selected' : '' }}>Dine-in Restaurant</option>
                                    <option value="Multi-Cuisine Restaurant" {{ old('subject') == 'Multi-Cuisine Restaurant' ? 'selected' : '' }}>Multi-Cuisine Restaurant</option>
                                    <option value="QSR" {{ old('subject') == 'QSR' ? 'selected' : '' }}>QSR</option>
                                    <option value="Takeaway Restaurant" {{ old('subject') == 'Takeaway Restaurant' ? 'selected' : '' }}>Takeaway Restaurant</option>
                                    <option value="Bakery / Cake Shop" {{ old('subject') == 'Bakery / Cake Shop' ? 'selected' : '' }}>Bakery / Cake Shop</option>
                                    <option value="Sweet Shop" {{ old('subject') == 'Sweet Shop' ? 'selected' : '' }}>Sweet Shop</option>
                                    <option value="Juice Shop" {{ old('subject') == 'Juice Shop' ? 'selected' : '' }}>Juice Shop</option>
                                    <option value="Ice Cream Shop" {{ old('subject') == 'Ice Cream Shop' ? 'selected' : '' }}>Ice Cream Shop</option>
                                    <option value="Chaat Shop" {{ old('subject') == 'Chaat Shop' ? 'selected' : '' }}>Chaat Shop</option>
                                    <option value="Tea Shop" {{ old('subject') == 'Tea Shop' ? 'selected' : '' }}>Tea Shop</option>
                                    <option value="Bar / Brewery" {{ old('subject') == 'Bar / Brewery' ? 'selected' : '' }}>Bar / Brewery</option>
                                    <option value="Pizzeria" {{ old('subject') == 'Pizzeria' ? 'selected' : '' }}>Pizzeria</option>
                                    <option value="Café" {{ old('subject') == 'Café' ? 'selected' : '' }}>Café</option>
                                    <option value="College Canteen" {{ old('subject') == 'College Canteen' ? 'selected' : '' }}>College Canteen</option>
                                    <option value="Office Canteen" {{ old('subject') == 'Office Canteen' ? 'selected' : '' }}>Office Canteen</option>
                                    <option value="Other" {{ old('subject') == 'Other' ? 'selected' : '' }}>Other</option>
                                </select>
                            </div>
                            <div class="fm-grp" style="margin-bottom: 0;">
                                <label for="outlets">Number of Outlets</label>
                                <select id="outlets" name="outlets">
                                    <option value="1 Outlet" selected>1 Outlet</option>
                                    <option value="2 - 5 Outlets">2 - 5 Outlets</option>
                                    <option value="6 - 10 Outlets">6 - 10 Outlets</option>
                                    <option value="10+ Outlets">10+ Outlets</option>
                                </select>
                            </div>
                        </div>

                        {{-- 5. What Are You Looking For? (3x3 Checkbox Grid) --}}
                        <label class="feature-sec-label">What Are You Looking For?</label>
                        <div class="feature-grid">
                            {{-- Row 1 --}}
                            <label class="feature-pill">
                                <input type="checkbox" name="looking_for[]" value="Digital Menu">
                                <span class="custom-chk" aria-hidden="true">
                                    <svg viewBox="0 0 24 24" fill="none"><polyline points="20 6 9 17 4 12"></polyline></svg>
                                </span>
                                <span class="feature-text">Digital Menu</span>
                            </label>

                            <label class="feature-pill">
                                <input type="checkbox" name="looking_for[]" value="POS & Billing">
                                <span class="custom-chk" aria-hidden="true">
                                    <svg viewBox="0 0 24 24" fill="none"><polyline points="20 6 9 17 4 12"></polyline></svg>
                                </span>
                                <span class="feature-text">POS & Billing</span>
                            </label>

                            <label class="feature-pill">
                                <input type="checkbox" name="looking_for[]" value="Order Management">
                                <span class="custom-chk" aria-hidden="true">
                                    <svg viewBox="0 0 24 24" fill="none"><polyline points="20 6 9 17 4 12"></polyline></svg>
                                </span>
                                <span class="feature-text">Order Management</span>
                            </label>

                            {{-- Row 2 --}}
                            <label class="feature-pill">
                                <input type="checkbox" name="looking_for[]" value="Kitchen / KOT">
                                <span class="custom-chk" aria-hidden="true">
                                    <svg viewBox="0 0 24 24" fill="none"><polyline points="20 6 9 17 4 12"></polyline></svg>
                                </span>
                                <span class="feature-text">Kitchen / KOT</span>
                            </label>

                            <label class="feature-pill">
                                <input type="checkbox" name="looking_for[]" value="Table Management">
                                <span class="custom-chk" aria-hidden="true">
                                    <svg viewBox="0 0 24 24" fill="none"><polyline points="20 6 9 17 4 12"></polyline></svg>
                                </span>
                                <span class="feature-text">Table Management</span>
                            </label>

                            <label class="feature-pill">
                                <input type="checkbox" name="looking_for[]" value="Inventory">
                                <span class="custom-chk" aria-hidden="true">
                                    <svg viewBox="0 0 24 24" fill="none"><polyline points="20 6 9 17 4 12"></polyline></svg>
                                </span>
                                <span class="feature-text">Inventory</span>
                            </label>

                            {{-- Row 3 --}}
                            <label class="feature-pill">
                                <input type="checkbox" name="looking_for[]" value="Reports">
                                <span class="custom-chk" aria-hidden="true">
                                    <svg viewBox="0 0 24 24" fill="none"><polyline points="20 6 9 17 4 12"></polyline></svg>
                                </span>
                                <span class="feature-text">Reports</span>
                            </label>

                            <label class="feature-pill">
                                <input type="checkbox" name="looking_for[]" value="Multi-Branch Management">
                                <span class="custom-chk" aria-hidden="true">
                                    <svg viewBox="0 0 24 24" fill="none"><polyline points="20 6 9 17 4 12"></polyline></svg>
                                </span>
                                <span class="feature-text">Multi-Branch Management</span>
                            </label>

                            <label class="feature-pill">
                                <input type="checkbox" name="looking_for[]" value="Complete Restaurant Management">
                                <span class="custom-chk" aria-hidden="true">
                                    <svg viewBox="0 0 24 24" fill="none"><polyline points="20 6 9 17 4 12"></polyline></svg>
                                </span>
                                <span class="feature-text">Complete Restaurant Management</span>
                            </label>
                        </div>

                        {{-- 6. Message --}}
                        <div class="fm-grp" style="margin-bottom: 20px;">
                            <label for="formMessage">Message <span>*</span></label>
                            <input type="text" id="formMessage" name="message" class="fm-message-input" value="{{ old('message') }}" required placeholder="Tell us a little about your requirements...">
                        </div>

                        {{-- Hidden field to pack additional structured details if needed --}}
                        <input type="hidden" name="additional_details" id="additionalDetails" value="">

                        {{-- Submit Button --}}
                        <button type="submit" class="fm-submit-btn">SEND ENQUIRY &rarr;</button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    {{-- FULL-WIDTH GOOGLE MAP IMMEDIATELY ABOVE THE FOOTER --}}
    <section class="contact-map-bottom-sec" id="mapSection">
        {{-- Location / Address Details Overlay Card at TOP-LEFT CORNER --}}
        <div class="map-address-overlay-card">
            <div class="map-card-badge">
                <span class="map-card-badge-dot"></span>
                <span>OUR LOCATION</span>
            </div>

            <div class="map-overlay-content">
                <span class="map-pin-icon" aria-hidden="true">
                    <svg viewBox="0 0 24 24">
                        <path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5c-1.38 0-2.5-1.12-2.5-2.5s1.12-2.5 2.5-2.5 2.5 1.12 2.5 2.5-1.12 2.5-2.5 2.5z"/>
                    </svg>
                </span>
                <div class="map-overlay-details">
                    <h3 class="map-overlay-company">WeGeni</h3>
                    <p class="map-overlay-address-text">
                        166/1, Thiru Nagar Colony,<br>
                        Karur Bypass Road,<br>
                        <strong>Erode - 638002</strong>,<br>
                        Tamil Nadu, India.
                    </p>
                </div>
            </div>
        </div>

        {{-- Google Map Iframe (Full Width Edge-to-Edge) --}}
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3911.7589578112117!2d77.7214488!3d11.3283296!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ba96f001f35ab81%3A0xe54bb3dff4b130a0!2sWeGeni!5e0!3m2!1sen!2sin!4v1700000000000!5m2!1sen!2sin" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" title="WeGeni Office Location Map"></iframe>
    </section>

</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const contactForm = document.getElementById('mainContactForm');
    if (!contactForm) return;

    contactForm.addEventListener('submit', function(e) {
        const messageInput = document.getElementById('formMessage');
        const outletsSelect = document.getElementById('outlets');
        const checkedBoxes = Array.from(document.querySelectorAll('input[name="looking_for[]"]:checked')).map(cb => cb.value);

        let extraInfo = [];
        if (checkedBoxes.length > 0) {
            extraInfo.push('Looking For: ' + checkedBoxes.join(', '));
        }
        if (outletsSelect && outletsSelect.value) {
            extraInfo.push('Outlets: ' + outletsSelect.value);
        }

        if (extraInfo.length > 0) {
            const currentMessage = messageInput.value.trim();
            const tag = '[' + extraInfo.join(' | ') + ']';
            
            // Only append tag if it hasn't already been added
            if (!currentMessage.includes(extraInfo[0])) {
                if (currentMessage.length > 0) {
                    messageInput.value = currentMessage + ' ' + tag;
                } else {
                    messageInput.value = tag;
                }
            }
        }
    });
});
</script>

@endsection
