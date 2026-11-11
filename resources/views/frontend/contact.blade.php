@php
    $meta = [
        'title' => 'Contact Geni Menu | Restaurant Management Software Support & Sales',
        'description' => 'Contact Geni Menu to discuss your restaurant software requirements, request a product demo, or get support for your existing setup.',
        'keywords' => 'contact Geni Menu, restaurant software demo, restaurant POS sales, Geni Menu support, restaurant billing software contact',
    ];
@endphp
@extends('layouts.frontend-master')

@section('content')

{{-- Fonts: Cinzel & Glacial Indifference --}}
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@400;500;600;700&display=swap" rel="stylesheet">
<link href="https://fonts.cdnfonts.com/css/glacial-indifference-2" rel="stylesheet">
{{-- Google reCAPTCHA v2 Script --}}
<script src="https://www.google.com/recaptcha/api.js" async defer></script>

<style>
/* ==========================================================================
   GENI MENU CONTACT PAGE - LUXURY EDITORIAL DESIGN
   - Headings: Cinzel Regular (400), Uppercase
   - Body: Glacial Indifference Regular (400)
   - Compact, Sleek Form & Map Pin Card
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

body {
  background: var(--geni-cream-bg, #FAF3EC) !important;
  font-family: 'Glacial Indifference', sans-serif !important;
  font-weight: 400 !important;
}

* { box-sizing: border-box; }

.contact-page-outer {
  width: 100%;
  overflow-x: hidden;
  background-color: var(--geni-cream-bg);
  background: linear-gradient(180deg, #F8F1E9 0%, #FAF3EC 100%);
  font-family: 'Glacial Indifference', sans-serif !important;
  font-weight: 400 !important;
  color: var(--geni-text-dark);
}

/* ==========================================================================
   MAIN CONTACT SECTION (GET IN TOUCH + ENQUIRY FORM)
   ========================================================================== */
.contact-main-sec {
  padding: 68px 0 60px;
  background-color: transparent;
}

.contact-container {
  max-width: 1120px;
  margin: 0 auto;
  padding: 0 20px;
}

.contact-layout-grid {
  display: grid;
  grid-template-columns: 340px minmax(0, 640px);
  justify-content: center;
  gap: 26px;
  align-items: start;
}

/* --------------------------------------------------------------------------
   LEFT COLUMN: GET IN TOUCH HEADING + 4 ROUNDED CARDS
   -------------------------------------------------------------------------- */
.c-left-col {
  display: flex;
  flex-direction: column;
}

.c-left-header-wrap {
  height: 50px;
  margin-bottom: 14px;
  display: flex;
  flex-direction: column;
  justify-content: flex-start;
}

.c-get-in-touch-heading {
  font-family: 'Cinzel', serif !important;
  font-size: 21px;
  font-weight: 400 !important;
  color: var(--geni-chocolate);
  letter-spacing: 0.05em;
  text-transform: uppercase !important;
  margin: 0;
  text-align: center !important;
  line-height: 1.2;
}

.c-contact-stack {
  display: flex;
  flex-direction: column;
  gap: 11px;
}

.c-info-card-item {
  display: flex;
  align-items: center;
  gap: 14px;
  padding: 14px 18px;
  background: #FAF5EF;
  border: 1px solid var(--geni-chk-border);
  border-radius: 14px;
  text-decoration: none;
  color: inherit;
  transition: all 0.22s ease;
}

.c-info-card-item:hover {
  transform: translateY(-2px);
  border-color: var(--geni-caramel);
  box-shadow: 0 6px 20px rgba(39, 19, 13, 0.08);
}

/* Icon Containers */
.c-info-card-icon {
  width: 40px;
  height: 40px;
  border-radius: 11px;
  display: flex;
  align-items: center;
  justify-content: center;
  flex-shrink: 0;
  transition: all 0.22s ease;
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
  font-family: 'Cinzel', serif !important;
  font-size: 11px;
  font-weight: 400 !important;
  letter-spacing: 0.08em;
  text-transform: uppercase !important;
  margin-bottom: 2px;
  color: var(--geni-caramel);
}

.c-info-card-val {
  font-family: 'Glacial Indifference', sans-serif !important;
  font-size: 13.5px;
  font-weight: 400 !important;
  word-break: break-word;
  color: var(--geni-chocolate);
  line-height: 1.35;
}

/* Address Card specific styles */
.c-info-card-item.c-card-address {
  align-items: flex-start;
  padding: 13px 18px;
}

.c-info-card-item.c-card-address .c-info-card-icon {
  margin-top: 2px;
}

.c-info-address-val {
  font-family: 'Glacial Indifference', sans-serif !important;
  font-size: 12px !important;
  font-weight: 400 !important;
  line-height: 1.4 !important;
  color: var(--geni-chocolate);
}

.c-info-address-val strong {
  font-weight: 700 !important;
  color: #27130D;
  display: block;
  margin-bottom: 2px;
  font-size: 12.5px;
}

/* --------------------------------------------------------------------------
   RIGHT COLUMN: HEADER (OUTSIDE) + ENQUIRY FORM CARD
   -------------------------------------------------------------------------- */
.c-right-col {
  display: flex;
  flex-direction: column;
}

.c-form-header-wrap {
  min-height: 50px;
  margin-bottom: 14px;
  text-align: center !important;
  display: flex;
  flex-direction: column;
  justify-content: flex-start;
}

.c-form-title {
  font-family: 'Cinzel', serif !important;
  font-size: 21px;
  color: var(--geni-chocolate);
  text-transform: uppercase !important;
  letter-spacing: 0.05em;
  font-weight: 400 !important;
  margin: 0 0 5px 0;
  text-align: center !important;
  line-height: 1.2;
}

.c-form-subtitle {
  font-family: 'Glacial Indifference', sans-serif !important;
  font-size: 13.5px;
  color: var(--geni-text-muted);
  margin: 0;
  text-align: center !important;
  font-weight: 400 !important;
  line-height: 1.45;
}

.c-form-card {
  background: #FFFFFF;
  border: 1.5px solid #EADBCE;
  border-radius: 18px;
  padding: 24px 28px 22px;
  box-shadow: 0 6px 22px rgba(39, 19, 13, 0.04);
}

/* Form Groups & Inputs */
.fm-grp {
  margin-bottom: 12px;
}

.fm-grp label,
.feature-sec-label {
  display: block;
  font-family: 'Glacial Indifference', sans-serif !important;
  font-size: 12px;
  font-weight: 400 !important;
  color: var(--geni-deep-brown);
  letter-spacing: 0.01em;
  margin-bottom: 4px;
}

.fm-grp label span {
  color: #DC2626;
  font-weight: 700;
}

.fm-grp input,
.fm-grp select {
  width: 100%;
  height: 40px;
  padding: 0 13px;
  border: 1.5px solid var(--geni-input-border);
  border-radius: 8px;
  font-family: 'Glacial Indifference', sans-serif !important;
  font-size: 13px;
  font-weight: 400 !important;
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
  background-position: right 12px center;
  background-size: 14px;
  padding-right: 34px;
  cursor: pointer;
}

.fm-grp input::placeholder,
.fm-grp textarea::placeholder {
  color: var(--geni-text-placeholder);
  font-size: 12.5px;
  font-family: 'Glacial Indifference', sans-serif !important;
  font-weight: 400 !important;
}

.fm-grp input:focus,
.fm-grp select:focus,
.fm-grp textarea:focus {
  outline: none;
  border-color: var(--geni-caramel);
  box-shadow: 0 0 0 3px rgba(181, 126, 72, 0.14);
  background: #FFFFFF;
}

.fm-grid-2 {
  display: grid;
  grid-template-columns: 1fr 1fr;
  gap: 12px;
  margin-bottom: 12px;
}

/* Phone Input Group */
.c-phone-group {
  display: flex;
  align-items: stretch;
  background: #ffffff;
  border: 1.5px solid var(--geni-input-border);
  border-radius: 8px;
  transition: all 0.2s ease;
  overflow: hidden;
  position: relative;
  height: 40px;
}

.c-phone-group:focus-within {
  border-color: var(--geni-caramel);
  box-shadow: 0 0 0 3px rgba(181, 126, 72, 0.14);
}

.c-phone-code-wrap {
  position: relative;
  flex: 0 0 auto;
  min-width: 95px;
  max-width: 120px;
  background: #FAF5EF;
  border-right: 1.5px solid var(--geni-input-border);
  display: flex;
  align-items: center;
}

.c-phone-code-select {
  width: 100%;
  height: 100%;
  padding: 0 20px 0 9px;
  font-family: 'Glacial Indifference', sans-serif !important;
  font-size: 12.5px;
  font-weight: 400 !important;
  color: var(--geni-text-dark);
  background: transparent;
  border: none;
  outline: none;
  cursor: pointer;
  appearance: none;
  -webkit-appearance: none;
}

.c-phone-code-arrow {
  position: absolute;
  right: 8px;
  top: 50%;
  transform: translateY(-50%);
  width: 0;
  height: 0;
  border-left: 3.5px solid transparent;
  border-right: 3.5px solid transparent;
  border-top: 4px solid var(--geni-text-muted);
  pointer-events: none;
}

.c-phone-group input[type="tel"] {
  flex: 1;
  min-width: 0;
  height: 100%;
  border: none !important;
  border-radius: 0 !important;
  box-shadow: none !important;
  padding: 0 12px;
  background: transparent;
  font-family: 'Glacial Indifference', sans-serif !important;
  font-size: 13px;
  font-weight: 400 !important;
  color: var(--geni-text-dark);
}

.c-phone-group input[type="tel"]:focus {
  outline: none;
  box-shadow: none;
}

/* Message Textarea */
.fm-message-textarea {
  width: 100% !important;
  min-height: 85px !important;
  padding: 9px 13px !important;
  border: 1.5px solid var(--geni-input-border) !important;
  border-radius: 8px !important;
  font-family: 'Glacial Indifference', sans-serif !important;
  font-size: 13px !important;
  font-weight: 400 !important;
  color: var(--geni-text-dark) !important;
  background: #FFFFFF !important;
  box-sizing: border-box !important;
  outline: none !important;
  transition: all 0.2s ease !important;
  resize: vertical;
  line-height: 1.45;
}

.fm-message-textarea:focus {
  border-color: var(--geni-caramel) !important;
  box-shadow: 0 0 0 3px rgba(181, 126, 72, 0.14) !important;
}

/* Validation Feedback */
.fm-grp.has-error input,
.fm-grp.has-error select,
.fm-grp.has-error textarea,
.fm-grp.has-error .c-phone-group {
  border-color: #EF4444 !important;
  background-color: #FFFBFB !important;
  box-shadow: 0 0 0 3px rgba(239, 68, 68, 0.14) !important;
}

.fm-grp.has-error label {
  color: #DC2626;
}

.c-err-msg {
  display: none;
  font-family: 'Glacial Indifference', sans-serif !important;
  font-size: 11.5px;
  font-weight: 400 !important;
  color: #DC2626;
  margin-top: 4px;
  align-items: center;
  gap: 5px;
}

.c-err-msg svg {
  width: 12px;
  height: 12px;
  stroke: #DC2626;
  flex-shrink: 0;
}

.fm-grp.has-error .c-err-msg {
  display: flex;
  animation: cShake .25s ease-in-out;
}

@keyframes cShake {
  0%, 100% { transform: translateX(0); }
  25% { transform: translateX(-4px); }
  75% { transform: translateX(4px); }
}

.fm-grp.has-success input,
.fm-grp.has-success select,
.fm-grp.has-success textarea {
  border-color: #10B981 !important;
  background-color: #F6FDF9 !important;
  box-shadow: 0 0 0 3px rgba(16, 185, 129, 0.14) !important;
}

.c-succ-msg {
  display: none;
  font-family: 'Glacial Indifference', sans-serif !important;
  font-size: 11.5px;
  font-weight: 400 !important;
  color: #059669;
  margin-top: 4px;
  align-items: center;
  gap: 5px;
}

.c-succ-msg svg {
  width: 12px;
  height: 12px;
  stroke: #059669;
  flex-shrink: 0;
}

.fm-grp.has-success .c-succ-msg {
  display: flex;
}

/* reCAPTCHA Box */
.fm-recaptcha-wrap {
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;
  margin: 8px 0 12px;
}

.fm-recaptcha-wrap .g-recaptcha {
  display: inline-block;
  min-height: 78px;
}

@media (max-width: 480px) {
  .fm-recaptcha-wrap .g-recaptcha {
    transform: scale(0.88);
    transform-origin: center center;
  }
}

/* Submit Button */
.fm-submit-btn {
  width: 100%;
  height: 42px;
  margin-top: 6px;
  margin-bottom: 10px;
  background-color: var(--geni-chocolate);
  color: #FFFFFF !important;
  border: 1.5px solid var(--geni-caramel);
  border-radius: 9px;
  font-family: 'Cinzel', serif !important;
  font-size: 13px;
  font-weight: 400 !important;
  letter-spacing: 0.08em;
  text-transform: uppercase !important;
  cursor: pointer;
  box-shadow: 0 4px 14px rgba(39, 19, 13, 0.16);
  transition: all 0.22s ease;
  display: flex;
  align-items: center;
  justify-content: center;
  gap: 8px;
}

.fm-submit-btn:hover {
  background-color: var(--geni-deep-brown);
  border-color: var(--geni-champagne);
  transform: translateY(-1px);
  box-shadow: 0 6px 18px rgba(39, 19, 13, 0.22);
}

.fm-note-text {
  font-family: 'Glacial Indifference', sans-serif !important;
  font-size: 11.5px;
  font-weight: 400 !important;
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

/* Contact Form Thank You State */
.c-thankyou-box {
  text-align: center;
  padding: 38px 20px 32px;
  animation: cPopIn .35s cubic-bezier(0.16, 1, 0.3, 1);
}

@keyframes cPopIn {
  from { opacity: 0; transform: scale(0.96) translateY(8px); }
  to   { opacity: 1; transform: scale(1) translateY(0); }
}

.c-thankyou-icon-wrap {
  position: relative;
  width: 76px;
  height: 76px;
  margin: 0 auto 20px;
  display: grid;
  place-items: center;
}

.c-thankyou-pulse {
  position: absolute;
  inset: -6px;
  border-radius: 50%;
  background: radial-gradient(circle, rgba(16, 185, 129, 0.24) 0%, rgba(242, 197, 141, 0.15) 70%, transparent 100%);
  animation: cPulse 2.4s ease-in-out infinite;
}

@keyframes cPulse {
  0%, 100% { transform: scale(0.95); opacity: 0.6; }
  50% { transform: scale(1.15); opacity: 1; }
}

.c-thankyou-icon {
  position: relative;
  width: 66px;
  height: 66px;
  border-radius: 50%;
  background: linear-gradient(135deg, #10B981 0%, #059669 100%);
  color: #ffffff;
  display: grid;
  place-items: center;
  box-shadow: 0 10px 25px rgba(16, 185, 129, 0.32), 0 0 0 4px rgba(255, 255, 255, 0.95);
}

.c-thankyou-icon svg {
  width: 32px;
  height: 32px;
  stroke: #ffffff;
}

.c-thankyou-badge {
  display: inline-block;
  font-family: 'Cinzel', serif;
  font-size: 11px;
  font-weight: 700;
  letter-spacing: 0.14em;
  text-transform: uppercase;
  color: #8C4D15;
  background: rgba(242, 197, 141, 0.30);
  border: 1px solid rgba(197, 139, 80, 0.35);
  padding: 4px 16px;
  border-radius: 99px;
  margin-bottom: 16px;
}

.c-thankyou-headline {
  font-family: 'Cinzel', serif;
  font-size: clamp(21px, 3.2vw, 25px);
  font-weight: 700;
  letter-spacing: 0.02em;
  color: #32180F;
  line-height: 1.35;
  margin: 0 0 14px;
}

.c-thankyou-desc {
  font-family: 'Glacial Indifference', -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, sans-serif !important;
  font-size: 15px;
  line-height: 1.65;
  color: #6B5549;
  max-width: 460px;
  margin: 0 auto 30px;
}

.c-thankyou-actions {
  display: flex;
  flex-direction: row;
  align-items: center;
  justify-content: center;
  flex-wrap: wrap;
  gap: 14px;
}

.c-thankyou-btn {
  display: inline-flex;
  align-items: center;
  justify-content: center;
  gap: 8px;
  padding: 12.5px 26px;
  border-radius: 9999px;
  font-family: 'Glacial Indifference', -apple-system, sans-serif !important;
  font-size: 14px;
  font-weight: 700;
  letter-spacing: 0.03em;
  text-decoration: none;
  transition: all .25s ease;
  cursor: pointer;
}

.c-thankyou-btn svg {
  width: 15px;
  height: 15px;
  transition: transform .2s ease;
}

.c-thankyou-btn:hover svg {
  transform: translateX(4px);
}

.c-thankyou-btn-primary {
  background: linear-gradient(135deg, #F2C58D 0%, #E8BA80 100%);
  color: #32180F;
  box-shadow: 0 6px 20px rgba(242, 197, 141, 0.40);
  border: 1px solid rgba(197, 139, 80, 0.45);
}

.c-thankyou-btn-primary:hover {
  transform: translateY(-2px);
  box-shadow: 0 10px 24px rgba(242, 197, 141, 0.52);
  background: linear-gradient(135deg, #F5CD99 0%, #EDB56F 100%);
  color: #32180F;
}

.c-thankyou-btn-secondary {
  background: #FFFDF9;
  color: #8C4D15;
  border: 1.5px solid rgba(197, 139, 80, 0.45);
  box-shadow: 0 3px 12px rgba(50, 24, 15, 0.05);
}

.c-thankyou-btn-secondary:hover {
  transform: translateY(-2px);
  background: rgba(242, 197, 141, 0.15);
  border-color: #C58B50;
  color: #32180F;
  box-shadow: 0 6px 18px rgba(197, 139, 80, 0.22);
}

@media (max-width: 540px) {
  .c-thankyou-actions {
    flex-direction: column;
    width: 100%;
  }
  .c-thankyou-btn {
    width: 100%;
  }
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
   CONTACT HERO SECTION (MATCHES REFERENCE IMAGE)
   ========================================================================== */
.contact-hero-sec {
  background: linear-gradient(180deg, #2E150C 0%, #1F0D07 100%);
  padding: 145px 20px 90px;
  text-align: center;
  position: relative;
  border-bottom: 1px solid rgba(197, 139, 80, 0.22);
}

.contact-hero-badge {
  display: inline-block;
  font-family: 'Cinzel', serif !important;
  font-size: 10.5px;
  font-weight: 400 !important;
  letter-spacing: 0.16em;
  text-transform: uppercase !important;
  color: #D4A373;
  background: rgba(197, 139, 80, 0.08);
  border: 1px solid rgba(197, 139, 80, 0.4);
  padding: 5px 16px;
  border-radius: 999px;
  margin-bottom: 16px;
}

.contact-hero-title {
  font-family: 'Cinzel', serif !important;
  font-size: clamp(28px, 4vw, 38px);
  font-weight: 400 !important;
  letter-spacing: 0.04em;
  color: #FFFFFF;
  text-transform: uppercase !important;
  margin: 0 0 14px 0;
  line-height: 1.2;
}

.contact-hero-desc {
  font-family: 'Glacial Indifference', sans-serif !important;
  font-size: 15px;
  font-weight: 400 !important;
  color: rgba(255, 255, 255, 0.85);
  line-height: 1.6;
  max-width: 660px;
  margin: 0 auto;
}

/* ==========================================================================
   FULL-WIDTH GOOGLE MAP IMMEDIATELY ABOVE THE FOOTER
   ========================================================================== */
.contact-map-bottom-sec {
  width: 100% !important;
  height: 440px;
  position: relative;
  overflow: hidden;
  background-color: #EFE8E3;
  display: block;
  margin-top: 44px !important;
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

/* Compact Floating Map Pin / Address Card */
.map-address-overlay-card {
  position: absolute;
  top: 18px;
  left: 20px;
  z-index: 10;
  width: 280px;
  max-width: calc(100% - 40px);
  background: #FFFFFF;
  border-radius: 13px;
  padding: 13px 15px;
  box-shadow: 0 8px 24px rgba(39, 19, 13, 0.14), 0 2px 6px rgba(39, 19, 13, 0.04);
  border: 1.5px solid rgba(181, 126, 72, 0.28);
  box-sizing: border-box;
}

.map-overlay-heading {
  font-family: 'Cinzel', serif !important;
  font-size: 13px;
  font-weight: 400 !important;
  letter-spacing: 0.06em;
  color: var(--geni-chocolate);
  margin: 0 0 5px 0;
  text-transform: uppercase !important;
  line-height: 1.25;
}

.map-card-badge {
  display: inline-flex;
  align-items: center;
  gap: 5px;
  font-family: 'Cinzel', serif !important;
  font-size: 8.5px;
  font-weight: 400 !important;
  letter-spacing: 0.12em;
  text-transform: uppercase !important;
  color: var(--geni-caramel);
  background: #FAF3EC;
  border: 1px solid rgba(181, 126, 72, 0.3);
  padding: 2px 7px;
  border-radius: 999px;
  margin-bottom: 7px;
}

.map-card-badge-dot {
  width: 5px;
  height: 5px;
  border-radius: 50%;
  background-color: #D9383A;
  box-shadow: 0 0 0 3px #FCDAD8;
}

.map-overlay-content {
  display: flex;
  align-items: flex-start;
  gap: 8px;
}

.map-pin-icon {
  display: inline-flex;
  align-items: center;
  justify-content: center;
  width: 22px;
  height: 22px;
  border-radius: 50%;
  background: #F4ECE3;
  color: var(--geni-caramel);
  flex-shrink: 0;
  margin-top: 1px;
}

.map-pin-icon svg {
  width: 12px;
  height: 12px;
  fill: currentColor;
}

.map-overlay-details {
  flex: 1;
}

.map-overlay-company {
  font-family: 'Glacial Indifference', sans-serif !important;
  font-size: 11.5px;
  font-weight: 700 !important;
  color: #27130D;
  margin: 0 0 3px 0;
  line-height: 1.25;
}

.map-overlay-address-text {
  font-family: 'Glacial Indifference', sans-serif !important;
  font-size: 10.5px;
  font-weight: 400 !important;
  color: #27130D;
  line-height: 1.4;
  margin: 0;
}

.map-overlay-address-text strong {
  font-weight: 700;
  color: #27130D;
}

.map-directions-link {
  display: inline-flex;
  align-items: center;
  gap: 4px;
  font-family: 'Glacial Indifference', sans-serif !important;
  font-size: 11px;
  font-weight: 700;
  color: #8C4D15;
  text-decoration: underline;
  margin-top: 6px;
  transition: color 0.2s ease;
}
.map-directions-link:hover {
  color: #32180F;
}

/* ==========================================================================
   RESPONSIVE DESIGN (Desktop, Tablet, Mobile)
   ========================================================================== */
@media (max-width: 1024px) {
  .contact-layout-grid {
    grid-template-columns: 1fr;
    gap: 24px;
  }
  .c-left-header-wrap,
  .c-form-header-wrap {
    height: auto !important;
    min-height: auto !important;
    margin-bottom: 12px;
  }
  .c-info-card-item {
    min-height: auto;
  }
  .feature-grid {
    grid-template-columns: repeat(2, 1fr);
  }
}

@media (max-width: 768px) {
  .contact-hero-sec {
    padding: 120px 16px 55px;
  }
  .contact-hero-title {
    font-size: 26px;
  }
  .contact-hero-desc {
    font-size: 13.5px;
  }
  .contact-main-sec {
    padding: 44px 0 36px;
  }
  .contact-container {
    padding: 0 14px;
  }
  .c-get-in-touch-heading {
    font-size: 18px;
    margin-bottom: 12px;
  }
  .c-info-card-item {
    padding: 12px 14px;
    gap: 12px;
    border-radius: 12px;
  }
  .c-info-card-icon {
    width: 36px;
    height: 36px;
  }
  .c-form-card {
    padding: 18px 16px;
    border-radius: 14px;
  }
  .c-form-title {
    font-size: 17px;
  }
  .fm-grid-2,
  .fm-grid-outlets {
    grid-template-columns: 1fr;
    gap: 10px;
  }
  .feature-grid {
    grid-template-columns: 1fr;
    gap: 8px;
  }
  .contact-map-bottom-sec {
    height: 380px;
    margin-top: 30px !important;
  }
  .map-address-overlay-card {
    top: 10px;
    left: 10px;
    right: 10px;
    width: auto;
    max-width: calc(100% - 20px);
    padding: 10px 12px;
    border-radius: 10px;
  }
  .map-overlay-heading {
    font-size: 12px;
    margin-bottom: 4px;
  }
}
</style>

<div class="contact-page-outer">

    {{-- 1. CONTACT HERO SECTION --}}
    <section class="contact-hero-sec">
        <h1 class="contact-hero-title">LET'S CONNECT</h1>
        <p class="contact-hero-desc">Have a question or need assistance? Get in touch with the Geni Menu team. We're here to help with your queries and provide the information you need.</p>
    </section>

    {{-- 2. MAIN SECTION: GET IN TOUCH & ENQUIRY FORM --}}
    <section class="contact-main-sec" id="form">
        <div class="contact-container">
            <div class="contact-layout-grid">

                {{-- LEFT COLUMN: GET IN TOUCH + 5 CONTACT CARDS --}}
                <div class="c-left-col">
                    <div class="c-left-header-wrap">
                        <h1 class="c-get-in-touch-heading">GET IN TOUCH</h1>
                    </div>

                    <div class="c-contact-stack">
                        {{-- 1. Business Enquiries --}}
                        <a href="mailto:genimenuglobal@gmail.com" class="c-info-card-item c-icon-filled">
                            <div class="c-info-card-icon" aria-hidden="true">
                                <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path>
                                    <polyline points="22,6 12,13 2,6"></polyline>
                                </svg>
                            </div>
                            <div class="c-info-card-text">
                                <div class="c-info-card-lbl">BUSINESS ENQUIRIES</div>
                                <div class="c-info-card-val">genimenuglobal@gmail.com</div>
                            </div>
                        </a>

                        {{-- 2. Contact Number --}}
                        <a href="tel:+918667205661" class="c-info-card-item c-icon-light">
                            <div class="c-info-card-icon" aria-hidden="true">
                                <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path>
                                </svg>
                            </div>
                            <div class="c-info-card-text">
                                <div class="c-info-card-lbl">CONTACT NUMBER</div>
                                <div class="c-info-card-val">+91 86672 05661</div>
                            </div>
                        </a>

                        {{-- 3. Customer Support --}}
                        <a href="mailto:support@genimenu.com" class="c-info-card-item c-icon-light">
                            <div class="c-info-card-icon" aria-hidden="true">
                                <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M3 18v-6a9 9 0 0 1 18 0v6"></path>
                                    <path d="M21 19a2 2 0 0 1-2 2h-1a2 2 0 0 1-2-2v-3a2 2 0 0 1 2-2h3zM3 19a2 2 0 0 0 2 2h1a2 2 0 0 0 2-2v-3a2 2 0 0 0-2-2H3z"></path>
                                </svg>
                            </div>
                            <div class="c-info-card-text">
                                <div class="c-info-card-lbl">CUSTOMER SUPPORT</div>
                                <div class="c-info-card-val">support@genimenu.com</div>
                            </div>
                        </a>

                        {{-- 4. Customer Support Phone --}}
                        <a href="tel:+919047555066" class="c-info-card-item c-icon-light">
                            <div class="c-info-card-icon" aria-hidden="true">
                                <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path>
                                </svg>
                            </div>
                            <div class="c-info-card-text">
                                <div class="c-info-card-lbl">CUSTOMER SUPPORT</div>
                                <div class="c-info-card-val">+91 90475 55066</div>
                            </div>
                        </a>

                        {{-- 5. Office Address --}}
                        <a href="#mapSection" class="c-info-card-item c-icon-light c-card-address">
                            <div class="c-info-card-icon" aria-hidden="true">
                                <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path>
                                    <circle cx="12" cy="10" r="3"></circle>
                                </svg>
                            </div>
                            <div class="c-info-card-text">
                                <div class="c-info-card-lbl">OFFICE ADDRESS</div>
                                <div class="c-info-address-val">
                                    <strong>WeGeni - IT Services & Consulting Pvt. Ltd</strong>
                                    13/9, 2nd Floor, HDFC Bank Upstairs,<br>
                                    West Car Street, Tiruchengode,<br>
                                    Namakkal, Tamil Nadu - 637211, India
                                </div>
                            </div>
                        </a>
                    </div>
                </div>

                {{-- RIGHT COLUMN: FORM HEADER (OUTSIDE) + ENQUIRY FORM CARD --}}
                <div class="c-right-col">
                    @if (session('success') || request()->has('success') || request()->has('submitted'))
                        <div class="c-form-card">
                            <div class="c-thankyou-box">
                                <div class="c-thankyou-icon-wrap">
                                    <div class="c-thankyou-pulse"></div>
                                    <div class="c-thankyou-icon">
                                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                                            <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path>
                                            <polyline points="22 4 12 14.01 9 11.01"></polyline>
                                        </svg>
                                    </div>
                                </div>

                                <span class="c-thankyou-badge">Thank You</span>
                                <h2 class="c-thankyou-headline">Thank You for Contacting Geni Menu!</h2>
                                <p class="c-thankyou-desc">Your message has been successfully submitted. Our team has received your message and will get back to you shortly.</p>

                                <div class="c-thankyou-actions">
                                    <a href="{{ url('/') }}" class="c-thankyou-btn c-thankyou-btn-primary">
                                        Back to Home &rarr;
                                    </a>
                                    <a href="{{ route('contact.us') }}" class="c-thankyou-btn c-thankyou-btn-secondary">
                                        Send Another Message &rarr;
                                    </a>
                                </div>
                            </div>
                        </div>
                    @else
                        <div class="c-form-header-wrap">
                            <h2 class="c-form-title">SEND US A MESSAGE</h2>
                            <p class="c-form-subtitle">Fill in your details and our team will get back to you shortly.</p>
                        </div>

                        <div class="c-form-card">

                        @if (session('error'))
                            <div class="alert-error-box">
                                <strong>Notice:</strong> {{ session('error') }}
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

                    @php
                        $allCountriesList = \App\Models\Country::orderBy('countries_name')->get();
                        $priorityCodes = ['IN', 'AE', 'US', 'GB', 'SG', 'MY', 'SA', 'QA', 'CA', 'AU'];
                        $priorityCountries = $allCountriesList->whereIn('countries_code', $priorityCodes)->sortBy(function($c) use ($priorityCodes) {
                            return array_search($c->countries_code, $priorityCodes);
                        });
                        $selectedCountry = old('country', old('address', 'India'));
                        $selectedPhoneCode = old('phone_code', '+91');
                    @endphp

                    <form action="{{ route('contact.submit') }}" method="POST" id="mainContactForm" novalidate>
                        @csrf
                        <input type="hidden" name="form_type" value="contact">
                        
                        {{-- Row 1: Full Name & Email Address --}}
                        <div class="fm-grid-2">
                            <div class="fm-grp" id="grp_name" style="margin-bottom: 0;">
                                <label for="c_name">Full Name <span>*</span></label>
                                <input type="text" id="c_name" name="name" value="{{ old('name') }}" required placeholder="Enter your full name" autocomplete="name">
                                <span class="c-err-msg">
                                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"></circle><line x1="12" y1="8" x2="12" y2="12"></line><line x1="12" y1="16" x2="12.01" y2="16"></line></svg>
                                    <span class="err-txt">Please enter your full name.</span>
                                </span>
                            </div>

                            <div class="fm-grp" id="grp_email" style="margin-bottom: 0;">
                                <label for="c_email">Email Address <span>*</span></label>
                                <input type="email" id="c_email" name="email" value="{{ old('email') }}" required placeholder="name@example.com" autocomplete="email">
                                <span class="c-err-msg">
                                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"></circle><line x1="12" y1="8" x2="12" y2="12"></line><line x1="12" y1="16" x2="12.01" y2="16"></line></svg>
                                    <span class="err-txt">Please enter a valid email address.</span>
                                </span>
                                <span class="c-succ-msg">
                                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"></circle><polyline points="9 12 11.5 14.5 15.5 9.5"></polyline></svg>
                                    <span class="succ-txt">Valid email address.</span>
                                </span>
                            </div>
                        </div>

                        {{-- Row 2: Country & Phone Number --}}
                        <div class="fm-grid-2">
                            <div class="fm-grp" id="grp_country" style="margin-bottom: 0;">
                                <label for="c_country">Country <span>*</span></label>
                                <select id="c_country" name="country" required>
                                    <option value="">Select your country</option>
                                    <optgroup label="Popular Countries">
                                        @foreach ($priorityCountries as $c)
                                            <option value="{{ $c->countries_name }}" data-code="{{ $c->countries_code }}" data-phonecode="+{{ $c->phonecode }}" {{ ($selectedCountry == $c->countries_name) ? 'selected' : '' }}>
                                                {{ $c->countries_name }}
                                            </option>
                                        @endforeach
                                    </optgroup>
                                    <optgroup label="All Countries">
                                        @foreach ($allCountriesList as $c)
                                            @if (!in_array($c->countries_code, $priorityCodes))
                                                <option value="{{ $c->countries_name }}" data-code="{{ $c->countries_code }}" data-phonecode="+{{ $c->phonecode }}" {{ ($selectedCountry == $c->countries_name) ? 'selected' : '' }}>
                                                    {{ $c->countries_name }}
                                                </option>
                                            @endif
                                        @endforeach
                                    </optgroup>
                                </select>
                                <span class="c-err-msg">
                                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"></circle><line x1="12" y1="8" x2="12" y2="12"></line><line x1="12" y1="16" x2="12.01" y2="16"></line></svg>
                                    <span class="err-txt">Please select your country.</span>
                                </span>
                            </div>

                            <div class="fm-grp" id="grp_phone" style="margin-bottom: 0;">
                                <label for="c_phone_num">Phone Number <span>*</span></label>
                                <div class="c-phone-group">
                                    <div class="c-phone-code-wrap">
                                        <select id="c_phone_code" name="phone_code" class="c-phone-code-select" aria-label="Country Code">
                                            <optgroup label="Popular">
                                                @foreach ($priorityCountries as $c)
                                                    <option value="+{{ $c->phonecode }}" data-code="{{ $c->countries_code }}" data-country="{{ $c->countries_name }}" {{ ($selectedPhoneCode == '+'.$c->phonecode && ($selectedCountry == $c->countries_name || ($c->countries_code == 'IN' && $selectedCountry == 'India'))) ? 'selected' : '' }}>
                                                        +{{ $c->phonecode }} ({{ $c->countries_code }})
                                                    </option>
                                                @endforeach
                                            </optgroup>
                                            <optgroup label="All Countries">
                                                @foreach ($allCountriesList as $c)
                                                    @if (!in_array($c->countries_code, $priorityCodes))
                                                        <option value="+{{ $c->phonecode }}" data-code="{{ $c->countries_code }}" data-country="{{ $c->countries_name }}" {{ ($selectedPhoneCode == '+'.$c->phonecode && $selectedCountry == $c->countries_name) ? 'selected' : '' }}>
                                                            +{{ $c->phonecode }} ({{ $c->countries_code }})
                                                        </option>
                                                    @endif
                                                @endforeach
                                            </optgroup>
                                        </select>
                                        <span class="c-phone-code-arrow" aria-hidden="true"></span>
                                    </div>
                                    <input type="tel" id="c_phone_num" name="phone_number" value="{{ old('phone_number', old('phone')) }}" placeholder="98765 43210" required autocomplete="tel-national">
                                    <input type="hidden" id="c_phone" name="phone" value="{{ old('phone') }}">
                                </div>
                                <span class="c-err-msg">
                                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"></circle><line x1="12" y1="8" x2="12" y2="12"></line><line x1="12" y1="16" x2="12.01" y2="16"></line></svg>
                                    <span class="err-txt">Please enter your phone number.</span>
                                </span>
                            </div>
                        </div>

                        {{-- Row 3: Subject --}}
                        <div class="fm-grp" id="grp_subject">
                            <label for="c_subject">Subject <span>*</span></label>
                            <select id="c_subject" name="subject" required>
                                <option value="" disabled {{ old('subject') ? '' : 'selected' }}>Select a subject</option>
                                <option value="General Enquiry"     {{ old('subject') == 'General Enquiry'     ? 'selected' : '' }}>General Enquiry</option>
                                <option value="Product Information" {{ old('subject') == 'Product Information' ? 'selected' : '' }}>Product Information</option>
                                <option value="Request a Demo"      {{ old('subject') == 'Request a Demo'      ? 'selected' : '' }}>Request a Demo</option>
                                <option value="Pricing Enquiry"     {{ old('subject') == 'Pricing Enquiry'     ? 'selected' : '' }}>Pricing Enquiry</option>
                                <option value="Technical Support"   {{ old('subject') == 'Technical Support'   ? 'selected' : '' }}>Technical Support</option>
                                <option value="Partnership"         {{ old('subject') == 'Partnership'         ? 'selected' : '' }}>Partnership</option>
                                <option value="Other"               {{ old('subject') == 'Other'               ? 'selected' : '' }}>Other</option>
                            </select>
                            <span class="c-err-msg">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"></circle><line x1="12" y1="8" x2="12" y2="12"></line><line x1="12" y1="16" x2="12.01" y2="16"></line></svg>
                                <span class="err-txt">Please select a subject.</span>
                            </span>
                        </div>

                        {{-- Row 4: Message --}}
                        <div class="fm-grp" id="grp_message" style="margin-bottom: 14px;">
                            <label for="c_message">Message <span>*</span></label>
                            <textarea id="c_message" name="message" rows="4" class="fm-message-textarea" required placeholder="Write your message here...">{{ old('message') }}</textarea>
                            <span class="c-err-msg">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"></circle><line x1="12" y1="8" x2="12" y2="12"></line><line x1="12" y1="16" x2="12.01" y2="16"></line></svg>
                                <span class="err-txt">Please enter your message (at least 10 characters).</span>
                            </span>
                        </div>

                        {{-- Google reCAPTCHA v2 ("I'm not a robot") --}}
                        <div class="fm-grp fm-recaptcha-wrap" id="grpRecaptcha">
                            <div class="g-recaptcha" data-sitekey="{{ config('services.recaptcha.site_key', '6LeIxAcTAAAAAJcZVRqyHh71UMIEGNQ_MXjiZKhI') }}" data-callback="onContactRecaptchaSuccess"></div>
                            <span class="c-err-msg" id="errRecaptcha" style="display: none; justify-content: center; margin-top: 6px;">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"></circle><line x1="12" y1="8" x2="12" y2="12"></line><line x1="12" y1="16" x2="12.01" y2="16"></line></svg>
                                <span id="errRecaptchaTxt">Please verify that you are not a robot.</span>
                            </span>
                            @error('g-recaptcha-response')
                                <span class="c-err-msg" style="display: flex; justify-content: center; margin-top: 6px;">
                                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"></circle><line x1="12" y1="8" x2="12" y2="12"></line><line x1="12" y1="16" x2="12.01" y2="16"></line></svg>
                                    <span>{{ $message }}</span>
                                </span>
                            @enderror
                        </div>

                        {{-- Submit Button --}}
                        <button type="submit" class="fm-submit-btn" id="c_submit_btn">
                            Send Message &rarr;
                        </button>

                        {{-- Privacy Note --}}
                        <p class="fm-note-text">
                            Your information will only be used to respond to your enquiry.
                        </p>
                    </form>
                </div>
                @endif
            </div>
            </div>
        </div>
    </section>

    {{-- FULL-WIDTH GOOGLE MAP IMMEDIATELY ABOVE THE FOOTER --}}
    <section class="contact-map-bottom-sec" id="mapSection">
        {{-- Location / Address Details Overlay Card at TOP-LEFT CORNER --}}
        <div class="map-address-overlay-card">
            <div class="map-overlay-heading">VISIT OUR OFFICE</div>
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
                    <h3 class="map-overlay-company">WeGeni - IT Services & Consulting Pvt. Ltd</h3>
                    <p class="map-overlay-address-text">
                        13/9, 2nd Floor, HDFC Bank Upstairs,<br>
                        West Car Street, Tiruchengode,<br>
                        <strong>Namakkal, Tamil Nadu - 637211</strong>, India.
                    </p>
                    <a href="https://www.google.com/maps/search/?api=1&query=11.37976%2C77.89532+(WeGeni+-+IT+Services+%26+Consulting+Pvt.+Ltd)" 
                       target="_blank" 
                       rel="noopener noreferrer"
                       class="map-directions-link">
                        Open in Google Maps &rarr;
                    </a>
                </div>
            </div>
        </div>

        {{-- Google Map Iframe (Full Width Edge-to-Edge with prominent location pin for WeGeni) --}}
        <iframe src="https://maps.google.com/maps?q=11.37976,77.89532+(WeGeni+-+IT+Services+%26+Consulting+Pvt.+Ltd)&t=m&z=18&output=embed" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" title="WeGeni Office Location Map"></iframe>
    </section>

</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    var form          = document.getElementById('mainContactForm');
    var btn           = document.getElementById('c_submit_btn');
    if (!form) return;

    var nameInput     = document.getElementById('c_name');
    var grpName       = document.getElementById('grp_name');
    var errNameTxt    = grpName ? grpName.querySelector('.err-txt') : null;

    var emailInput    = document.getElementById('c_email');
    var grpEmail      = document.getElementById('grp_email');
    var errEmailTxt   = grpEmail ? grpEmail.querySelector('.err-txt') : null;

    var countrySel    = document.getElementById('c_country');
    var grpCountry    = document.getElementById('grp_country');
    var errCountryTxt = grpCountry ? grpCountry.querySelector('.err-txt') : null;

    var phoneCodeSel  = document.getElementById('c_phone_code');
    var phoneNumInput = document.getElementById('c_phone_num');
    var phoneHidden   = document.getElementById('c_phone');
    var grpPhone      = document.getElementById('grp_phone');
    var errPhoneTxt   = grpPhone ? grpPhone.querySelector('.err-txt') : null;

    var subjectSel    = document.getElementById('c_subject');
    var grpSubject    = document.getElementById('grp_subject');
    var errSubjectTxt = grpSubject ? grpSubject.querySelector('.err-txt') : null;

    var messageInput  = document.getElementById('c_message');
    var grpMessage    = document.getElementById('grp_message');
    var errMessageTxt = grpMessage ? grpMessage.querySelector('.err-txt') : null;

    function syncPhone() {
        if (!phoneCodeSel || !phoneNumInput || !phoneHidden) return;
        var code = phoneCodeSel.value.trim();
        var num = phoneNumInput.value.trim();
        phoneHidden.value = num ? (code + ' ' + num) : '';
    }

    if (countrySel && phoneCodeSel) {
        countrySel.addEventListener('change', function () {
            var opt = countrySel.options[countrySel.selectedIndex];
            if (!opt) return;
            var cCode = opt.getAttribute('data-code');
            var pCode = opt.getAttribute('data-phonecode');
            for (var i = 0; i < phoneCodeSel.options.length; i++) {
                var pOpt = phoneCodeSel.options[i];
                if (pOpt.getAttribute('data-code') === cCode || pOpt.value === pCode) {
                    phoneCodeSel.selectedIndex = i;
                    break;
                }
            }
            syncPhone();
            validateCountry(false);
        });

        phoneCodeSel.addEventListener('change', function () {
            syncPhone();
        });
    }

    if (phoneNumInput) {
        phoneNumInput.addEventListener('input', function () {
            syncPhone();
            validatePhone(false);
        });
        phoneNumInput.addEventListener('blur', function () {
            if (phoneNumInput.value.trim()) validatePhone(false);
        });
    }

    syncPhone();

    // 1. Name Validation
    function validateName(showRequired) {
        if (!nameInput || !grpName) return true;
        var val = nameInput.value.trim();
        if (!val) {
            if (showRequired) {
                if (errNameTxt) errNameTxt.textContent = 'Please enter your full name.';
                grpName.classList.add('has-error');
                return false;
            }
            grpName.classList.remove('has-error');
            return true;
        }
        if (/[0-9]/.test(val)) {
            if (errNameTxt) errNameTxt.textContent = 'Numbers are not allowed in Full Name. Use letters only.';
            grpName.classList.add('has-error');
            return false;
        }
        if (val.length < 2) {
            if (errNameTxt) errNameTxt.textContent = 'Full Name must be at least 2 characters.';
            grpName.classList.add('has-error');
            return false;
        }
        grpName.classList.remove('has-error');
        return true;
    }

    // 2. Email Validation
    var emailRegex = /^[a-zA-Z0-9._%+\-]+@[a-zA-Z0-9.\-]+\.[a-zA-Z]{2,}$/;
    function validateEmail(showRequired) {
        if (!emailInput || !grpEmail) return true;
        var rawVal = emailInput.value;
        var val = rawVal.trim();
        if (!val) {
            grpEmail.classList.remove('has-success');
            if (showRequired) {
                if (errEmailTxt) errEmailTxt.textContent = 'Email address cannot be empty.';
                grpEmail.classList.add('has-error');
                return false;
            }
            grpEmail.classList.remove('has-error');
            return false;
        }
        if (/\s/.test(rawVal)) {
            if (errEmailTxt) errEmailTxt.textContent = 'Spaces are not allowed in email address.';
            grpEmail.classList.remove('has-success');
            grpEmail.classList.add('has-error');
            return false;
        }
        if (!emailRegex.test(rawVal)) {
            if (errEmailTxt) errEmailTxt.textContent = 'Please enter a valid email address.';
            grpEmail.classList.remove('has-success');
            grpEmail.classList.add('has-error');
            return false;
        }
        grpEmail.classList.remove('has-error');
        grpEmail.classList.add('has-success');
        return true;
    }

    // 3. Country Validation
    function validateCountry(showRequired) {
        if (!countrySel || !grpCountry) return true;
        var val = countrySel.value.trim();
        if (!val) {
            if (showRequired) {
                if (errCountryTxt) errCountryTxt.textContent = 'Please select your country.';
                grpCountry.classList.add('has-error');
                return false;
            }
            grpCountry.classList.remove('has-error');
            return true;
        }
        grpCountry.classList.remove('has-error');
        return true;
    }

    // 4. Phone Validation
    function validatePhone(showRequired) {
        if (!phoneNumInput || !grpPhone) return true;
        var val = phoneNumInput.value.trim();
        if (!val) {
            if (showRequired) {
                if (errPhoneTxt) errPhoneTxt.textContent = 'Please enter your phone number.';
                grpPhone.classList.add('has-error');
                return false;
            }
            grpPhone.classList.remove('has-error');
            return true;
        }
        if (/[a-zA-Z]/.test(val)) {
            if (errPhoneTxt) errPhoneTxt.textContent = 'Letters are not allowed in Phone Number.';
            grpPhone.classList.add('has-error');
            return false;
        }
        var digitsOnly = val.replace(/[\s\-]/g, '');
        if (digitsOnly.length < 7) {
            if (errPhoneTxt) errPhoneTxt.textContent = 'Phone Number must be at least 7 digits.';
            grpPhone.classList.add('has-error');
            return false;
        }
        grpPhone.classList.remove('has-error');
        return true;
    }

    // 5. Subject Validation
    function validateSubject(showRequired) {
        if (!subjectSel || !grpSubject) return true;
        var val = subjectSel.value.trim();
        if (!val) {
            if (showRequired) {
                if (errSubjectTxt) errSubjectTxt.textContent = 'Please select a subject.';
                grpSubject.classList.add('has-error');
                return false;
            }
            grpSubject.classList.remove('has-error');
            return true;
        }
        grpSubject.classList.remove('has-error');
        return true;
    }

    // 6. Message Validation
    function validateMessage(showRequired) {
        if (!messageInput || !grpMessage) return true;
        var val = messageInput.value.trim();
        if (!val) {
            if (showRequired) {
                if (errMessageTxt) errMessageTxt.textContent = 'Please enter your message.';
                grpMessage.classList.add('has-error');
                return false;
            }
            grpMessage.classList.remove('has-error');
            return true;
        }
        if (val.length < 10) {
            if (errMessageTxt) errMessageTxt.textContent = 'Please write at least 10 characters.';
            grpMessage.classList.add('has-error');
            return false;
        }
        grpMessage.classList.remove('has-error');
        return true;
    }

    // Live Listeners
    if (nameInput) {
        nameInput.addEventListener('input', function () { validateName(false); });
        nameInput.addEventListener('blur', function () { if (nameInput.value.trim()) validateName(false); });
    }

    if (emailInput) {
        emailInput.addEventListener('input', function () {
            var rawVal = emailInput.value;
            if (!rawVal) {
                grpEmail.classList.remove('has-success');
                if (grpEmail.classList.contains('has-error') && errEmailTxt) {
                    errEmailTxt.textContent = 'Email address cannot be empty.';
                }
                return;
            }
            if (emailRegex.test(rawVal)) {
                grpEmail.classList.remove('has-error');
                grpEmail.classList.add('has-success');
            } else {
                grpEmail.classList.remove('has-success');
                if (grpEmail.classList.contains('has-error') && errEmailTxt) {
                    errEmailTxt.textContent = 'Please enter a valid email address.';
                }
            }
        });
        emailInput.addEventListener('blur', function () {
            if (emailInput.value.trim().length > 0 || grpEmail.classList.contains('has-error')) {
                validateEmail(true);
            }
        });
    }

    if (subjectSel) {
        subjectSel.addEventListener('change', function () { validateSubject(false); });
    }

    if (messageInput) {
        messageInput.addEventListener('input', function () {
            if (grpMessage.classList.contains('has-error')) validateMessage(false);
        });
        messageInput.addEventListener('blur', function () {
            if (messageInput.value.trim()) validateMessage(false);
        });
    }

    // reCAPTCHA validation
    window.onContactRecaptchaSuccess = function() {
        var err = document.getElementById('errRecaptcha');
        if (err) err.style.display = 'none';
    };

    function validateRecaptcha(showRequired) {
        var err = document.getElementById('errRecaptcha');
        var response = (typeof grecaptcha !== 'undefined') ? grecaptcha.getResponse() : '';
        if (!response) {
            if (showRequired && err) {
                err.style.display = 'flex';
            }
            return false;
        }
        if (err) err.style.display = 'none';
        return true;
    }

    // Submit handler
    if (form && btn) {
        form.addEventListener('submit', function (e) {
            var isNameValid      = validateName(true);
            var isEmailValid     = validateEmail(true);
            var isCountryValid   = validateCountry(true);
            var isPhoneValid     = validatePhone(true);
            var isSubjectValid   = validateSubject(true);
            var isMessageValid   = validateMessage(true);
            var isRecaptchaValid = validateRecaptcha(true);

            var allValid = isNameValid && isEmailValid && isCountryValid && isPhoneValid && isSubjectValid && isMessageValid && isRecaptchaValid;

            if (!allValid) {
                e.preventDefault();
                if (!isNameValid) nameInput.focus();
                else if (!isEmailValid) emailInput.focus();
                else if (!isCountryValid) countrySel.focus();
                else if (!isPhoneValid) phoneNumInput.focus();
                else if (!isSubjectValid) subjectSel.focus();
                else if (!isMessageValid) messageInput.focus();
                return false;
            }

            syncPhone();
            btn.disabled = true;
            btn.innerHTML = 'Sending...';
        });
    }
});
</script>

@endsection
