@php
    $meta = [
        'title' => 'Get a Free Demo & Pricing | Geni Menu — Restaurant Management Software',
        'description' => 'Discover how Geni Menu can make your food business smarter and more efficient. Submit your enquiry to get a free demo and pricing.',
        'keywords' => 'Geni Menu demo, restaurant software demo, Geni Menu pricing, restaurant management enquiry, Geni Menu contact, restaurant POS demo',
    ];
@endphp
@extends('layouts.frontend-master')

@section('content')

{{-- Google reCAPTCHA v2 Script --}}
<script src="https://www.google.com/recaptcha/api.js" async defer></script>

<style>
@import url('https://fonts.googleapis.com/css2?family=Cinzel:wght@400;500;600;700&display=swap');
@import url('https://fonts.cdnfonts.com/css/glacial-indifference-2');

*, *::before, *::after { box-sizing: border-box; }
html { scroll-behavior: smooth; }

:root {
  --amber:      #C58B50; /* Luxury Caramel */
  --amber-dark: #8C4D15;
  --amber-bg:   rgba(242, 197, 141, 0.28);
  --champagne:  #F2C58D;
  --navy:       #32180F; /* Deep Chocolate */
  --chocolate:  #27130D;
  --slate:      #6B5549; /* Warm brown-muted */
  --slate-lt:   #8C7568;
  --bg:         #FFF8F0; /* Warm Cream */
  --bg-soft:    #FAF4ED; /* Warm Ivory soft surface */
  --line:       rgba(197, 139, 80, 0.25); /* Warm luxury border */
  --green-bg:   #D1FAE5;
  --red:        #EF4444;
  --red-bg:     #FEE2E2;
  --shadow-lg:  0 20px 60px rgba(50, 24, 15, 0.08), 0 4px 16px rgba(50, 24, 15, 0.04);
}

body {
  margin: 0;
  font: 400 15px/1.65 'Glacial Indifference', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif !important;
  color: var(--navy);
  background: var(--bg) !important;
  overflow-x: hidden;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
}

h1 {
  margin: 0;
  font-family: 'Cinzel', serif;
  font-weight: 700;
  letter-spacing: 0.03em;
  text-transform: uppercase;
  line-height: 1.18;
  color: var(--navy);
}
h2,h3,h4 {
  margin: 0;
  font-family: 'Cinzel', serif;
  font-weight: 600;
  letter-spacing: 0.02em;
  line-height: 1.2;
  color: var(--navy);
}
p {
  margin: 0;
  color: var(--slate);
  font-size: 15.5px;
  font-family: 'Glacial Indifference', system-ui, sans-serif;
  line-height: 1.65;
}
a { color: inherit; text-decoration: none; }

/* All form controls font inheritance */
select, option, optgroup, input, textarea, button {
  font-family: 'Glacial Indifference', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif !important;
}

select option, select optgroup {
  font-family: 'Glacial Indifference', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif !important;
  font-size: 13.5px;
  color: #32180F;
  background: #ffffff;
}

select optgroup {
  font-weight: 700;
  color: #8C4D15;
  background: #FAF4ED;
}

/* Page wrapper */
.eq-page {
  min-height: 100vh;
  padding: clamp(24px, 3.5vw, 44px) 16px clamp(32px, 4vw, 56px);
  display: flex;
  flex-direction: column;
  align-items: center;
  background-color: var(--bg);
  background-image: radial-gradient(circle at 50% 0%, rgba(242, 197, 141, 0.22) 0%, rgba(255, 248, 240, 0) 70%);
}

/* Header */
.eq-header { text-align: center; max-width: 520px; margin-bottom: 22px; }
.eq-header h1 { font-size: clamp(21px, 3vw, 27px); margin-bottom: 7px; }
.eq-header p { font-size: 14.5px; max-width: 460px; margin: 0 auto; line-height: 1.55; }

/* Form Card */
.eq-card {
  background: #ffffff;
  border: 1.5px solid rgba(197, 139, 80, 0.22);
  border-radius: 18px;
  padding: clamp(20px, 3.5vw, 32px) clamp(18px, 3.5vw, 32px);
  box-shadow: 0 16px 50px rgba(50, 24, 15, 0.07), 0 4px 14px rgba(50, 24, 15, 0.03);
  width: 100%;
  max-width: 560px;
}

/* Alerts */
.alert-success {
  background: var(--green-bg); color: #065f46;
  padding: 14px 16px; border-radius: 12px; margin-bottom: 20px;
  border: 1px solid #6EE7B7; display: flex; align-items: flex-start; gap: 10px;
  font-size: 13.5px;
}
.alert-success svg { width: 18px; height: 18px; flex-shrink: 0; margin-top: 2px; stroke: currentColor; fill: none; stroke-width: 2; stroke-linecap: round; stroke-linejoin: round; }
.alert-success strong { display: block; font-size: 14px; margin-bottom: 3px; }
.alert-success p  { font-size: 13.5px; color: #047857; margin: 0; }
.alert-success a  { color: #065f46; font-weight: 600; text-decoration: underline; margin-top: 6px; display: inline-block; }

/* Thank You State */
.eq-thankyou-box {
  text-align: center;
  padding: 16px 8px 12px;
  animation: eqPopIn .35s cubic-bezier(0.16, 1, 0.3, 1);
}

.eq-thankyou-icon-wrap {
  position: relative;
  width: 72px;
  height: 72px;
  margin: 0 auto 18px;
  display: grid;
  place-items: center;
}

.eq-thankyou-pulse {
  position: absolute;
  inset: -6px;
  border-radius: 50%;
  background: radial-gradient(circle, rgba(16, 185, 129, 0.22) 0%, rgba(242, 197, 141, 0.15) 70%, transparent 100%);
  animation: eqPulse 2.4s ease-in-out infinite;
}

@keyframes eqPulse {
  0%, 100% { transform: scale(0.95); opacity: 0.6; }
  50% { transform: scale(1.15); opacity: 1; }
}

.eq-thankyou-icon {
  position: relative;
  width: 64px;
  height: 64px;
  border-radius: 50%;
  background: linear-gradient(135deg, #10B981 0%, #059669 100%);
  color: #ffffff;
  display: grid;
  place-items: center;
  box-shadow: 0 10px 25px rgba(16, 185, 129, 0.32), 0 0 0 4px rgba(255, 255, 255, 0.9);
}

.eq-thankyou-icon svg {
  width: 32px;
  height: 32px;
  stroke: #ffffff;
}

.eq-thankyou-badge {
  display: inline-block;
  font-family: 'Cinzel', serif;
  font-size: 11px;
  font-weight: 700;
  letter-spacing: 0.14em;
  text-transform: uppercase;
  color: #8C4D15;
  background: rgba(242, 197, 141, 0.30);
  border: 1px solid rgba(197, 139, 80, 0.35);
  padding: 4px 14px;
  border-radius: 99px;
  margin-bottom: 14px;
}

.eq-thankyou-headline {
  font-family: 'Cinzel', serif;
  font-size: clamp(20px, 3.2vw, 24px);
  font-weight: 700;
  letter-spacing: 0.02em;
  color: #32180F;
  line-height: 1.35;
  margin: 0 0 14px;
}

.eq-thankyou-desc {
  font-family: 'Glacial Indifference', -apple-system, sans-serif !important;
  font-size: 14.5px;
  line-height: 1.65;
  color: #6B5549;
  max-width: 440px;
  margin: 0 auto 24px;
}

.eq-thankyou-actions {
  display: flex;
  flex-direction: column;
  align-items: center;
  gap: 12px;
}

.eq-thankyou-btn {
  display: inline-flex;
  align-items: center;
  justify-content: center;
  gap: 9px;
  padding: 12.5px 28px;
  border-radius: 9999px;
  background: linear-gradient(135deg, #F2C58D 0%, #E8BA80 100%);
  color: #32180F;
  font-family: 'Glacial Indifference', -apple-system, sans-serif !important;
  font-size: 14px;
  font-weight: 700;
  letter-spacing: 0.04em;
  text-decoration: none;
  box-shadow: 0 6px 20px rgba(242, 197, 141, 0.40);
  transition: all .25s ease;
}

.eq-thankyou-btn:hover {
  transform: translateY(-2px);
  box-shadow: 0 10px 26px rgba(242, 197, 141, 0.52);
  background: linear-gradient(135deg, #F5CD99 0%, #EDB56F 100%);
  color: #32180F;
}

.eq-thankyou-btn svg {
  width: 16px;
  height: 16px;
  stroke: #32180F;
  transition: transform .2s ease;
}

.eq-thankyou-btn:hover svg {
  transform: translateX(3px);
}

.eq-thankyou-sublink {
  font-family: 'Glacial Indifference', sans-serif !important;
  font-size: 12.5px;
  font-weight: 600;
  color: #8C4D15;
  text-decoration: underline;
  transition: color .2s ease;
}

.eq-thankyou-sublink:hover {
  color: #32180F;
}

.alert-error {
  background: var(--red-bg); color: #991b1b;
  padding: 12px 16px; border-radius: 12px; margin-bottom: 18px;
  border: 1px solid #FCA5A5; font-size: 13.5px;
}
.alert-error strong { display: block; margin-bottom: 6px; font-size: 14px; }
.alert-error ul { padding-left: 18px; list-style: disc; display: flex; flex-direction: column; gap: 3px; margin: 0; }

/* Form groups */
.fg { margin-bottom: 13px; }
.fg label { display: block; font-size: 12.5px; font-weight: 700; color: var(--navy); margin-bottom: 5px; letter-spacing: 0.01em; }
.fg label .req { color: var(--red); margin-left: 2px; }
.fg label .opt { font-weight: 400; font-size: 11.5px; color: var(--slate-lt); margin-left: 4px; }

.fg input, .fg select, .fg textarea {
  width: 100%; padding: 10px 13px;
  border: 1.5px solid var(--line); border-radius: 9px;
  font: 400 14px 'Glacial Indifference', -apple-system, sans-serif !important; color: var(--navy);
  background: #fff; transition: border-color .2s, box-shadow .2s;
  appearance: none; -webkit-appearance: none;
}
.fg input::placeholder, .fg textarea::placeholder { color: #A89587; }
.fg input:focus, .fg select:focus, .fg textarea:focus,
.phone-input-group:focus-within,
.eq-dropdown-trigger:focus,
.eq-multiselect-wrap.is-open .eq-dropdown-trigger {
  outline: none; border-color: var(--amber);
  box-shadow: 0 0 0 3.5px rgba(197, 139, 80, 0.15);
}
.fg textarea { resize: vertical; min-height: 72px; line-height: 1.5; }

/* Validation feedback */
.fg.has-error input,
.fg.has-error select,
.fg.has-error textarea,
.fg.has-error .phone-input-group {
  border-color: #EF4444 !important;
  background-color: #FFFBFB !important;
  box-shadow: 0 0 0 3.5px rgba(239, 68, 68, 0.15) !important;
}

.fg.has-error label {
  color: #DC2626;
}

.fg-err-msg {
  display: none;
  font-family: 'Glacial Indifference', -apple-system, sans-serif !important;
  font-size: 12px;
  font-weight: 600;
  color: #DC2626;
  margin-top: 5px;
  align-items: center;
  gap: 5px;
}

.fg-err-msg svg {
  flex-shrink: 0;
  width: 13px;
  height: 13px;
  stroke: #DC2626;
}

.fg.has-error .fg-err-msg {
  display: flex;
  animation: eqShake .25s ease-in-out;
}

@keyframes eqShake {
  0%, 100% { transform: translateX(0); }
  25% { transform: translateX(-4px); }
  75% { transform: translateX(4px); }
}

/* Success feedback */
.fg.has-success input,
.fg.has-success select,
.fg.has-success textarea {
  border-color: #10B981 !important;
  background-color: #F6FDF9 !important;
  box-shadow: 0 0 0 3.5px rgba(16, 185, 129, 0.15) !important;
}

.fg.has-success label {
  color: #047857;
}

.fg-success-msg {
  display: none;
  font-family: 'Glacial Indifference', -apple-system, sans-serif !important;
  font-size: 12px;
  font-weight: 600;
  color: #059669;
  margin-top: 5px;
  align-items: center;
  gap: 5px;
}

.fg-success-msg svg {
  flex-shrink: 0;
  width: 13px;
  height: 13px;
  stroke: #059669;
}

.fg.has-success .fg-success-msg {
  display: flex;
  animation: eqPopIn .2s ease-out;
}

@keyframes eqPopIn {
  from { opacity: 0; transform: translateY(-2px); }
  to { opacity: 1; transform: translateY(0); }
}

.fg-row { display: grid; grid-template-columns: 1fr 1fr; gap: 11px; }

/* Select arrow */
.sw { position: relative; }
.sw::after {
  content: ''; position: absolute; right: 13px; top: 50%; transform: translateY(-50%);
  border: 4.5px solid transparent; border-top-color: var(--slate);
  pointer-events: none; margin-top: 2px;
}
.sw select { padding-right: 32px; cursor: pointer; }

/* Phone Input Group with Country Code */
.phone-input-group {
  display: flex;
  align-items: stretch;
  background: #ffffff;
  border: 1.5px solid var(--line);
  border-radius: 9px;
  transition: border-color .2s, box-shadow .2s;
  overflow: hidden;
  position: relative;
}

.phone-code-wrap {
  position: relative;
  flex: 0 0 auto;
  min-width: 110px;
  max-width: 135px;
  background: var(--bg-soft);
  border-right: 1.5px solid var(--line);
  display: flex;
  align-items: center;
}

.phone-code-select {
  width: 100%;
  height: 100%;
  min-height: 40px;
  padding: 9px 24px 9px 10px;
  font: 600 12.5px 'Glacial Indifference', -apple-system, sans-serif !important;
  color: var(--navy);
  background: transparent;
  border: none;
  outline: none;
  cursor: pointer;
  appearance: none;
  -webkit-appearance: none;
}

.phone-code-arrow {
  position: absolute;
  right: 9px;
  top: 50%;
  transform: translateY(-50%);
  width: 0;
  height: 0;
  border-left: 3.5px solid transparent;
  border-right: 3.5px solid transparent;
  border-top: 4.5px solid var(--slate);
  pointer-events: none;
}

.phone-input-group input[type="tel"] {
  flex: 1;
  min-width: 0;
  border: none !important;
  border-radius: 0 !important;
  box-shadow: none !important;
  padding: 10px 13px;
  background: transparent;
  font: 400 14px 'Glacial Indifference', -apple-system, sans-serif !important;
  color: var(--navy);
}

.phone-input-group input[type="tel"]:focus {
  outline: none;
  box-shadow: none;
}

/* Checkboxes Multi-Select Dropdown */
.eq-multiselect-wrap {
  position: relative;
  margin-bottom: 14px;
}

.chk-title { font-size: 12.5px; font-weight: 700; color: var(--navy); margin-bottom: 5px; display: flex; align-items: center; justify-content: space-between; }

.eq-dropdown-box {
  position: relative;
  width: 100%;
}

.eq-dropdown-trigger {
  width: 100%;
  padding: 10px 13px;
  border: 1.5px solid var(--line);
  border-radius: 9px;
  font: 400 14px 'Glacial Indifference', -apple-system, sans-serif !important;
  color: var(--navy);
  background: #fff;
  cursor: pointer;
  display: flex;
  align-items: center;
  justify-content: space-between;
  text-align: left;
  transition: border-color .2s, box-shadow .2s;
  user-select: none;
}

.eq-trigger-left {
  display: flex;
  align-items: center;
  gap: 8px;
  overflow: hidden;
  flex: 1;
  min-width: 0;
}

.eq-trigger-badge {
  background: var(--amber);
  color: #fff;
  font-family: 'Glacial Indifference', sans-serif !important;
  font-size: 11px;
  font-weight: 700;
  padding: 2px 7px;
  border-radius: 99px;
  flex-shrink: 0;
}

.eq-trigger-text {
  white-space: nowrap;
  overflow: hidden;
  text-overflow: ellipsis;
  color: #A89587;
  font-family: 'Glacial Indifference', sans-serif !important;
  font-size: 14px;
}

.eq-trigger-text.has-selection {
  color: var(--navy);
  font-weight: 600;
}

.eq-dropdown-chevron {
  width: 15px;
  height: 15px;
  stroke: var(--slate);
  transition: transform .22s ease;
  flex-shrink: 0;
  margin-left: 8px;
}

.eq-multiselect-wrap.is-open .eq-dropdown-chevron {
  transform: rotate(180deg);
  stroke: var(--amber);
}

/* Dropdown Menu */
.eq-dropdown-menu {
  position: absolute;
  top: calc(100% + 5px);
  left: 0;
  right: 0;
  background: #ffffff;
  border: 1.5px solid var(--line);
  border-radius: 12px;
  box-shadow: 0 14px 40px rgba(50, 24, 15, 0.12);
  z-index: 1000;
  display: none;
  overflow: hidden;
  animation: eqDdFadeIn .18s ease-out;
}

@keyframes eqDdFadeIn {
  from { opacity: 0; transform: translateY(-4px); }
  to { opacity: 1; transform: translateY(0); }
}

.eq-multiselect-wrap.is-open .eq-dropdown-menu {
  display: block;
}

.eq-dropdown-header {
  display: flex;
  align-items: center;
  justify-content: space-between;
  padding: 9px 12px;
  background: var(--bg-soft);
  border-bottom: 1px solid var(--line);
}

.eq-dd-count {
  font-family: 'Glacial Indifference', sans-serif !important;
  font-size: 12px;
  font-weight: 600;
  color: var(--slate);
}

.eq-dd-clear-btn {
  background: transparent;
  border: none;
  color: #8C4D15;
  font-family: 'Glacial Indifference', sans-serif !important;
  font-size: 12px;
  font-weight: 700;
  cursor: pointer;
  padding: 0;
  transition: color .18s;
}

.eq-dd-clear-btn:hover {
  color: var(--navy);
  text-decoration: underline;
}

.eq-dropdown-list {
  max-height: 220px;
  overflow-y: auto;
  padding: 5px;
}

.eq-dropdown-list::-webkit-scrollbar {
  width: 5px;
}
.eq-dropdown-list::-webkit-scrollbar-thumb {
  background: #D9C8BA;
  border-radius: 3px;
}

/* Dropdown Item */
.eq-dd-item {
  display: flex;
  align-items: center;
  gap: 9px;
  padding: 7px 10px;
  border-radius: 7px;
  cursor: pointer;
  transition: background .15s ease;
  user-select: none;
  font-family: 'Glacial Indifference', -apple-system, sans-serif !important;
  font-size: 13.5px;
  color: var(--navy);
  margin-bottom: 2px;
}

.eq-dd-item:hover {
  background: #FAF4ED;
}

.eq-dd-item:has(input[type="checkbox"]:checked),
.eq-dd-item.is-selected {
  background: var(--amber-bg);
  color: var(--amber-dark);
  font-weight: 600;
}

.eq-dd-item input[type="checkbox"] {
  position: absolute;
  opacity: 0;
  width: 0;
  height: 0;
  pointer-events: none;
}

.eq-dd-custom-chk {
  width: 17px;
  height: 17px;
  border: 1.5px solid var(--line);
  border-radius: 4px;
  background: #fff;
  display: flex;
  align-items: center;
  justify-content: center;
  flex-shrink: 0;
  transition: all .15s ease;
}

.eq-dd-custom-chk svg {
  width: 10px;
  height: 10px;
  stroke: #fff;
  opacity: 0;
  transform: scale(0.6);
  transition: all .15s ease;
}

.eq-dd-item input[type="checkbox"]:checked ~ .eq-dd-custom-chk,
.eq-dd-item.is-selected .eq-dd-custom-chk {
  background: var(--amber);
  border-color: var(--amber);
}

.eq-dd-item input[type="checkbox"]:checked ~ .eq-dd-custom-chk svg,
.eq-dd-item.is-selected .eq-dd-custom-chk svg {
  opacity: 1;
  transform: scale(1);
}

.eq-dd-item input[type="checkbox"]:checked ~ .eq-dd-label-text {
  color: var(--amber-dark);
  font-weight: 600;
}

.eq-dd-label-text {
  flex: 1;
  font-family: 'Glacial Indifference', -apple-system, sans-serif !important;
  font-size: 13.5px;
  line-height: 1.35;
}

/* Divider */
.eq-divider { border: none; border-top: 1px solid var(--line); margin: 15px 0; }

/* Submit */
.eq-submit {
  width: 100%;
  padding: 12.5px 24px;
  border: none;
  border-radius: 9999px;
  background: linear-gradient(135deg, #F2C58D 0%, #E8BA80 100%);
  color: #32180F;
  font-family: 'Glacial Indifference', -apple-system, sans-serif !important;
  font-size: 13.5px;
  font-weight: 700;
  letter-spacing: 0.04em;
  text-transform: uppercase;
  cursor: pointer;
  display: flex;
  align-items: center;
  justify-content: center;
  gap: 9px;
  box-shadow: 0 5px 18px rgba(242, 197, 141, 0.35);
  transition: all .25s ease;
}
.eq-submit:hover {
  transform: translateY(-2px);
  box-shadow: 0 8px 24px rgba(242, 197, 141, 0.45);
  background: linear-gradient(135deg, #F5CD99 0%, #EDB56F 100%);
}
.eq-submit:active { transform: translateY(0); }
.eq-submit svg { width: 16px; height: 16px; stroke: #32180F; fill: none; stroke-width: 2.2; stroke-linecap: round; stroke-linejoin: round; }

/* reCAPTCHA Box */
.eq-recaptcha-wrap {
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;
  margin: 12px 0 16px;
}
.eq-recaptcha-wrap .g-recaptcha {
  display: inline-block;
  min-height: 78px;
}
@media (max-width: 480px) {
  .eq-recaptcha-wrap .g-recaptcha {
    transform: scale(0.88);
    transform-origin: center center;
  }
}

/* Trust Strip */
.eq-trust-strip {
  margin-top: 18px;
  max-width: 560px;
  width: 100%;
  text-align: center;
  padding: 13px 18px;
  background: rgba(255, 255, 255, 0.70);
  border: 1px dashed rgba(197, 139, 80, 0.35);
  border-radius: 13px;
  box-shadow: 0 4px 14px rgba(50, 24, 15, 0.03);
}
.eq-trust-headline {
  font-family: 'Cinzel', serif;
  font-size: 13px;
  font-weight: 700;
  letter-spacing: 0.08em;
  text-transform: uppercase;
  color: #32180F;
  margin-bottom: 7px;
}
.eq-trust-items {
  display: flex;
  align-items: center;
  justify-content: center;
  gap: 12px;
  flex-wrap: wrap;
}
.eq-trust-item {
  display: inline-flex;
  align-items: center;
  gap: 6px;
  font-family: 'Glacial Indifference', -apple-system, sans-serif !important;
  font-size: 12.5px;
  font-weight: 600;
  color: #6B5549;
}
.eq-trust-item svg {
  width: 14px;
  height: 14px;
  stroke: #8C4D15;
  flex-shrink: 0;
}
.eq-trust-dot {
  color: rgba(197, 139, 80, 0.60);
  font-size: 11px;
}
@media (max-width: 480px) {
  .eq-trust-items { flex-direction: column; gap: 5px; }
  .eq-trust-dot { display: none; }
}

/* Privacy */
.eq-privacy { margin-top: 12px; max-width: 560px; width: 100%; }
.eq-privacy-inner {
  display: flex; align-items: flex-start; gap: 10px;
  background: var(--bg-soft); border: 1.5px solid var(--line);
  border-radius: 12px; padding: 12px 16px;
}
.eq-privacy-icon {
  width: 30px; height: 30px; flex-shrink: 0; border-radius: 7px;
  background: rgba(242, 197, 141, 0.30); color: #8C4D15; display: grid; place-items: center;
}
.eq-privacy-icon svg { width: 15px; height: 15px; stroke: currentColor; fill: none; stroke-width: 2; stroke-linecap: round; stroke-linejoin: round; }
.eq-privacy p { font-size: 12.5px; color: var(--slate); line-height: 1.5; font-family: 'Glacial Indifference', sans-serif !important; }
.eq-privacy a { color: #8C4D15; font-weight: 600; text-decoration: underline; }
.eq-privacy a:hover { color: var(--navy); }

/* Immediate Assistance Section */
.eq-assistance {
  margin-top: 26px;
  max-width: 560px;
  width: 100%;
}

.eq-assist-title {
  font-family: 'Cinzel', serif;
  font-size: 13.5px;
  font-weight: 700;
  letter-spacing: 0.08em;
  text-transform: uppercase;
  color: #32180F;
  text-align: center;
  margin-bottom: 14px;
  display: flex;
  align-items: center;
  justify-content: center;
  gap: 12px;
}
.eq-assist-title::before,
.eq-assist-title::after {
  content: '';
  height: 1px;
  flex: 1;
  background: linear-gradient(90deg, transparent, rgba(197, 139, 80, 0.35));
}
.eq-assist-title::after {
  background: linear-gradient(90deg, rgba(197, 139, 80, 0.35), transparent);
}

.eq-assist-grid {
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  gap: 10px;
}

.eq-assist-card {
  background: #ffffff;
  border: 1.5px solid rgba(197, 139, 80, 0.22);
  border-radius: 14px;
  padding: 15px 10px;
  text-align: center;
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;
  text-decoration: none;
  box-shadow: 0 4px 14px rgba(50, 24, 15, 0.03);
  transition: all .25s ease;
}

.eq-assist-card:hover {
  transform: translateY(-2px);
  border-color: #C58B50;
  box-shadow: 0 8px 24px rgba(50, 24, 15, 0.08);
  background: #FFFAF5;
}

.eq-assist-icon {
  width: 36px;
  height: 36px;
  border-radius: 50%;
  display: grid;
  place-items: center;
  margin-bottom: 8px;
  transition: all .2s ease;
  flex-shrink: 0;
}

.eq-icon-mail {
  background: rgba(242, 197, 141, 0.30);
  color: #8C4D15;
}
.eq-icon-mail svg { width: 17px; height: 17px; stroke: #8C4D15; }

.eq-icon-wa {
  background: rgba(37, 211, 102, 0.12);
  color: #128C7E;
}
.eq-icon-wa svg { width: 18px; height: 18px; fill: #128C7E; }

.eq-icon-call {
  background: rgba(197, 139, 80, 0.18);
  color: #8C4D15;
}
.eq-icon-call svg { width: 16px; height: 16px; stroke: #8C4D15; }

.eq-assist-card:hover .eq-assist-icon {
  transform: scale(1.08);
}

.eq-assist-info {
  display: flex;
  flex-direction: column;
  align-items: center;
}

.eq-assist-card h4 {
  font-family: 'Cinzel', serif;
  font-size: 12.5px;
  font-weight: 700;
  letter-spacing: 0.03em;
  color: #32180F;
  margin: 0 0 3px;
}

.eq-assist-card p {
  font-family: 'Glacial Indifference', sans-serif !important;
  font-size: 11px;
  line-height: 1.35;
  color: #8C7568;
  margin: 0 0 8px;
}

.eq-assist-val {
  font-family: 'Glacial Indifference', sans-serif !important;
  font-size: 12px;
  font-weight: 700;
  color: #8C4D15;
  white-space: nowrap;
  overflow: hidden;
  text-overflow: ellipsis;
  max-width: 100%;
}

@media (max-width: 540px) {
  .eq-assist-grid {
    grid-template-columns: 1fr;
    gap: 8px;
  }
  .eq-assist-card {
    flex-direction: row;
    text-align: left;
    padding: 12px 14px;
    gap: 12px;
  }
  .eq-assist-icon {
    margin-bottom: 0;
  }
  .eq-assist-info {
    align-items: flex-start;
    flex: 1;
    min-width: 0;
  }
  .eq-assist-card p {
    margin-bottom: 4px;
  }
}

@media (max-width: 600px) {
  .fg-row { grid-template-columns: 1fr; gap: 13px; }
  .eq-card { border-radius: 16px; padding: 18px 16px; }
}
@keyframes eq-spin { to { transform: rotate(360deg); } }
</style>

<div class="eq-page">

  {{-- Header --}}
  <div class="eq-header">
    @if (session('success') || request()->has('success') || request()->has('submitted'))
      <h1>Thank You</h1>
      <p>Your enquiry has been received. Our team will get back to you shortly.</p>
    @else
      <h1>Get a Free Demo & Pricing</h1>
      <p>Discover how Geni Menu can make your food business smarter and more efficient.</p>
    @endif
  </div>

  {{-- Form Card --}}
  <div class="eq-card">

    @if (session('success') || request()->has('success') || request()->has('submitted'))
      <div class="eq-thankyou-box">
        <div class="eq-thankyou-icon-wrap">
          <div class="eq-thankyou-pulse"></div>
          <div class="eq-thankyou-icon">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
              <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path>
              <polyline points="22 4 12 14.01 9 11.01"></polyline>
            </svg>
          </div>
        </div>

        <span class="eq-thankyou-badge">Thank You</span>
        <h2 class="eq-thankyou-headline">Thank You for Getting in Touch with Geni Menu!</h2>
        <p class="eq-thankyou-desc">Your enquiry has been successfully submitted. The Geni Menu team will review your details and get back to you shortly.</p>

        <div class="eq-thankyou-actions">
          <a href="{{ url('/') }}" class="eq-thankyou-btn">
            Back to Geni Menu
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round">
              <line x1="5" y1="12" x2="19" y2="12"></line>
              <polyline points="12 5 19 12 12 19"></polyline>
            </svg>
          </a>
          <a href="{{ route('enquiry') }}" class="eq-thankyou-sublink">Submit another enquiry</a>
        </div>
      </div>
    @else

    @if (session('error'))
      <div class="alert-error">
        <strong>Submission Notice:</strong>
        <p style="margin: 0;">{{ session('error') }}</p>
      </div>
    @endif

    @if ($errors->any())
      <div class="alert-error">
        <strong>Please fix the following errors:</strong>
        <ul>
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

    <form action="{{ route('contact.submit') }}" method="POST" id="eq-form" novalidate>
      @csrf
      <input type="hidden" name="form_type" value="enquiry">

      <div class="fg" id="fg_name">
        <label for="eq_name">Full Name <span class="req">*</span></label>
        <input type="text" id="eq_name" name="name" value="{{ old('name') }}" placeholder="Enter your full name" required autocomplete="name">
        <span class="fg-err-msg" id="err_name">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"></circle><line x1="12" y1="8" x2="12" y2="12"></line><line x1="12" y1="16" x2="12.01" y2="16"></line></svg>
          <span class="err-txt">Full Name should contain only letters and spaces (no numbers).</span>
        </span>
      </div>

      <div class="fg-row">
        <div class="fg" id="fg_company">
          <label for="eq_company">Business Name <span class="req">*</span></label>
          <input type="text" id="eq_company" name="company" value="{{ old('company') }}" placeholder="Restaurant / business name" required autocomplete="organization">
          <span class="fg-err-msg" id="err_company">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"></circle><line x1="12" y1="8" x2="12" y2="12"></line><line x1="12" y1="16" x2="12.01" y2="16"></line></svg>
            <span class="err-txt">Please enter your restaurant or business name.</span>
          </span>
        </div>
        <div class="fg" id="fg_email">
          <label for="eq_email">Business Email <span class="req">*</span></label>
          <input type="email" id="eq_email" name="email" value="{{ old('email') }}" placeholder="your@company.com" required autocomplete="email">
          <span class="fg-err-msg" id="err_email">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"></circle><line x1="12" y1="8" x2="12" y2="12"></line><line x1="12" y1="16" x2="12.01" y2="16"></line></svg>
            <span class="err-txt">Please enter a valid email address.</span>
          </span>
          <span class="fg-success-msg" id="succ_email">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"></circle><polyline points="9 12 11.5 14.5 15.5 9.5"></polyline></svg>
            <span class="succ-txt">Valid email address.</span>
          </span>
        </div>
      </div>

      <div class="fg-row">
        <div class="fg" id="fg_country">
          <label for="eq_country">Country <span class="req">*</span></label>
          <div class="sw">
            <select id="eq_country" name="country" required>
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
          </div>
          <span class="fg-err-msg" id="err_country">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"></circle><line x1="12" y1="8" x2="12" y2="12"></line><line x1="12" y1="16" x2="12.01" y2="16"></line></svg>
            <span class="err-txt">Please select your country.</span>
          </span>
        </div>

        <div class="fg" id="fg_phone">
          <label for="eq_phone_num">Phone Number <span class="req">*</span></label>
          <div class="phone-input-group">
            <div class="phone-code-wrap">
              <select id="eq_phone_code" name="phone_code" class="phone-code-select" aria-label="Country Code">
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
              <span class="phone-code-arrow" aria-hidden="true"></span>
            </div>
            <input type="tel" id="eq_phone_num" name="phone_number" value="{{ old('phone_number', old('phone')) }}" placeholder="98765 43210" required autocomplete="tel-national">
            <input type="hidden" id="eq_phone" name="phone" value="{{ old('phone') }}">
          </div>
          <span class="fg-err-msg" id="err_phone">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"></circle><line x1="12" y1="8" x2="12" y2="12"></line><line x1="12" y1="16" x2="12.01" y2="16"></line></svg>
            <span class="err-txt">Phone number should contain only digits (no letters allowed).</span>
          </span>
        </div>
      </div>

      <div class="fg-row">
        <div class="fg" id="fg_subject">
          <label for="eq_subject">Business Type <span class="req">*</span></label>
          <div class="sw">
            <select id="eq_subject" name="subject" required>
              <option value="">Select business type</option>
              <option value="Restaurant"               {{ old('subject')=='Restaurant'               ?'selected':'' }}>Restaurant</option>
              <option value="Dine-in Restaurant"       {{ old('subject')=='Dine-in Restaurant'       ?'selected':'' }}>Dine-in Restaurant</option>
              <option value="Multi-Cuisine Restaurant" {{ old('subject')=='Multi-Cuisine Restaurant' ?'selected':'' }}>Multi-Cuisine Restaurant</option>
              <option value="QSR"                      {{ old('subject')=='QSR'                      ?'selected':'' }}>QSR</option>
              <option value="Takeaway Restaurant"      {{ old('subject')=='Takeaway Restaurant'      ?'selected':'' }}>Takeaway Restaurant</option>
              <option value="Bakery / Cake Shop"       {{ old('subject')=='Bakery / Cake Shop'       ?'selected':'' }}>Bakery / Cake Shop</option>
              <option value="Sweet Shop"               {{ old('subject')=='Sweet Shop'               ?'selected':'' }}>Sweet Shop</option>
              <option value="Juice Shop"               {{ old('subject')=='Juice Shop'               ?'selected':'' }}>Juice Shop</option>
              <option value="Ice Cream Shop"           {{ old('subject')=='Ice Cream Shop'           ?'selected':'' }}>Ice Cream Shop</option>
              <option value="Chaat Shop"               {{ old('subject')=='Chaat Shop'               ?'selected':'' }}>Chaat Shop</option>
              <option value="Tea Shop"                 {{ old('subject')=='Tea Shop'                 ?'selected':'' }}>Tea Shop</option>
              <option value="Bar / Brewery"            {{ old('subject')=='Bar / Brewery'            ?'selected':'' }}>Bar / Brewery</option>
              <option value="Pizzeria"                 {{ old('subject')=='Pizzeria'                 ?'selected':'' }}>Pizzeria</option>
              <option value="Cafe"                     {{ old('subject')=='Cafe'                     ?'selected':'' }}>Cafe</option>
              <option value="College Canteen"          {{ old('subject')=='College Canteen'          ?'selected':'' }}>College Canteen</option>
              <option value="Office Canteen"           {{ old('subject')=='Office Canteen'           ?'selected':'' }}>Office Canteen</option>
              <option value="Other"                    {{ old('subject')=='Other'                    ?'selected':'' }}>Other</option>
            </select>
          </div>
          <span class="fg-err-msg" id="err_subject">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"></circle><line x1="12" y1="8" x2="12" y2="12"></line><line x1="12" y1="16" x2="12.01" y2="16"></line></svg>
            <span class="err-txt">Please select your business type.</span>
          </span>
        </div>
        <div class="fg">
          <label for="eq_designation">Number of Outlets <span class="opt">(optional)</span></label>
          <div class="sw">
            <select id="eq_designation" name="designation">
              <option value="1 Outlet"     {{ old('designation')=='1 Outlet'    ?'selected':'' }}>1 Outlet</option>
              <option value="2-5 Outlets"  {{ old('designation')=='2-5 Outlets' ?'selected':'' }}>2-5 Outlets</option>
              <option value="6-10 Outlets" {{ old('designation')=='6-10 Outlets'?'selected':'' }}>6-10 Outlets</option>
              <option value="10+ Outlets"  {{ old('designation')=='10+ Outlets' ?'selected':'' }}>10+ Outlets</option>
            </select>
          </div>
        </div>
      </div>

      {{-- Website URL (Optional) --}}
      <div class="fg" id="fg_website">
        <label for="eq_website">Website URL <span class="opt">(optional)</span></label>
        <input type="url" id="eq_website" name="website" value="{{ old('website') }}" placeholder="https://yourrestaurant.com" autocomplete="url">
      </div>

      {{-- Interested In (Multi-Select Checkbox Dropdown) --}}
      <div class="fg eq-multiselect-wrap" id="eqMultiSelect">
        <label for="eq_req_btn" class="chk-title">
          <span>Interested In</span>
          <span style="font-weight:400;font-size:12px;color:var(--slate-lt);">(Select all that apply)</span>
        </label>

        <div class="eq-dropdown-box">
          <button type="button" class="eq-dropdown-trigger" id="eq_req_btn" aria-haspopup="listbox" aria-expanded="false">
            <span class="eq-trigger-left">
              <span class="eq-trigger-badge" id="eqTriggerBadge" style="display:none;">0</span>
              <span class="eq-trigger-text" id="eqTriggerText">Select what you are interested in...</span>
            </span>
            <svg class="eq-dropdown-chevron" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round">
              <polyline points="6 9 12 15 18 9"></polyline>
            </svg>
          </button>

          <div class="eq-dropdown-menu" id="eqDropdownMenu" role="listbox">
            <div class="eq-dropdown-header">
              <span class="eq-dd-count" id="eqDdCount">0 selected</span>
              <button type="button" class="eq-dd-clear-btn" id="eqDdClearBtn">Clear</button>
            </div>

            <div class="eq-dropdown-list">
              @php $oldReqs = old('requirements', []); @endphp
              @php
                $reqOptions = [
                  'Digital Menu',
                  'POS & Billing',
                  'Order Management',
                  'Kitchen / KOT',
                  'Table Management',
                  'Inventory',
                  'Reports',
                  'Multi-Branch Management',
                  'Complete Restaurant Management'
                ];
              @endphp

              @foreach ($reqOptions as $r)
                <label class="eq-dd-item {{ in_array($r, $oldReqs) ? 'is-selected' : '' }}">
                  <input type="checkbox" name="requirements[]" value="{{ $r }}" {{ in_array($r, $oldReqs) ? 'checked' : '' }}>
                  <span class="eq-dd-custom-chk" aria-hidden="true">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round">
                      <polyline points="20 6 9 17 4 12"></polyline>
                    </svg>
                  </span>
                  <span class="eq-dd-label-text">{{ $r }}</span>
                </label>
              @endforeach
            </div>
          </div>
        </div>
      </div>

      <hr class="eq-divider">

      <div class="fg" id="fg_message">
        <label for="eq_message">Message <span class="req">*</span></label>
        <textarea id="eq_message" name="message" rows="4" placeholder="Tell us about your requirements or any questions you have..." required>{{ old('message') }}</textarea>
        <span class="fg-err-msg" id="err_message">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"></circle><line x1="12" y1="8" x2="12" y2="12"></line><line x1="12" y1="16" x2="12.01" y2="16"></line></svg>
          <span class="err-txt">Please enter your message (at least 10 characters).</span>
        </span>
      </div>

      {{-- Google reCAPTCHA v2 ("I'm not a robot") --}}
      <div class="fg eq-recaptcha-wrap" id="grpEqRecaptcha">
        <div class="g-recaptcha" data-sitekey="{{ config('services.recaptcha.site_key', '6LeIxAcTAAAAAJcZVRqyHh71UMIEGNQ_MXjiZKhI') }}" data-callback="onEqRecaptchaSuccess"></div>
        <span class="fg-err-msg" id="errEqRecaptcha" style="display: none; justify-content: center; margin-top: 6px;">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"></circle><line x1="12" y1="8" x2="12" y2="12"></line><line x1="12" y1="16" x2="12.01" y2="16"></line></svg>
          <span class="err-txt">Please verify that you are not a robot.</span>
        </span>
        @error('g-recaptcha-response')
          <span class="fg-err-msg" style="display: flex; justify-content: center; margin-top: 6px;">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"></circle><line x1="12" y1="8" x2="12" y2="12"></line><line x1="12" y1="16" x2="12.01" y2="16"></line></svg>
            <span class="err-txt">{{ $message }}</span>
          </span>
        @enderror
      </div>

      <button type="submit" class="eq-submit" id="eq-btn">
        <svg viewBox="0 0 24 24"><line x1="22" y1="2" x2="11" y2="13"/><polygon points="22 2 15 22 11 13 2 9 22 2"/></svg>
        Submit Enquiry
      </button>
    </form>
    @endif
  </div>

  {{-- Trust & Reassurance Strip --}}
  <div class="eq-trust-strip">
    <div class="eq-trust-headline">Simple. Secure. Hassle-free.</div>
    <div class="eq-trust-items">
      <div class="eq-trust-item">
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round">
          <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
          <circle cx="9" cy="7" r="4"></circle>
          <path d="M23 21v-2a4 4 0 0 0-3-3.87"></path>
          <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
        </svg>
        <span>Direct communication with our team</span>
      </div>
      <span class="eq-trust-dot" aria-hidden="true">•</span>
      <div class="eq-trust-item">
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round">
          <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path>
          <polyline points="9 12 11 14 15 10"></polyline>
        </svg>
        <span>No unwanted messages</span>
      </div>
    </div>
  </div>

  {{-- Privacy Policy Footer --}}
  <div class="eq-privacy">
    <div class="eq-privacy-inner">
      <div class="eq-privacy-icon">
        <svg viewBox="0 0 24 24"><rect x="3" y="11" width="18" height="11" rx="2" ry="2"/><path d="M7 11V7a5 5 0 0 1 10 0v4"/></svg>
      </div>
      <p>
        By submitting this form, you agree to Geni Menu's
        <a href="{{ route('privacy.policy') }}" target="_blank">Privacy Policy</a>.
        Your information is kept confidential and will only be used to respond to your enquiry. We do not share your data with third parties.
      </p>
    </div>
  </div>

  {{-- Immediate Assistance Section --}}
  <div class="eq-assistance">
    <div class="eq-assist-title">Need Immediate Assistance?</div>
    <div class="eq-assist-grid">
      {{-- Email Us --}}
      <a href="mailto:genimenuglobal@gmail.com" class="eq-assist-card">
        <div class="eq-assist-icon eq-icon-mail" aria-hidden="true">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
            <rect x="2" y="4" width="20" height="16" rx="2"></rect>
            <path d="m22 7-8.97 5.7a1.94 1.94 0 0 1-2.06 0L2 7"></path>
          </svg>
        </div>
        <div class="eq-assist-info">
          <h4>Email Us</h4>
          <p>For enquiries and business support</p>
          <span class="eq-assist-val">genimenuglobal@gmail.com</span>
        </div>
      </a>

      {{-- WhatsApp Us --}}
      <a href="https://wa.me/918667205661" target="_blank" rel="noopener" class="eq-assist-card">
        <div class="eq-assist-icon eq-icon-wa" aria-hidden="true">
          <svg viewBox="0 0 24 24" fill="currentColor">
            <path d="M12.04 2c-5.46 0-9.91 4.45-9.91 9.91 0 1.75.46 3.45 1.32 4.95L2.05 22l5.25-1.38c1.45.79 3.08 1.21 4.74 1.21 5.46 0 9.91-4.45 9.91-9.91 0-2.65-1.03-5.14-2.9-7.01A9.82 9.82 0 0 0 12.04 2m.01 1.67c2.2 0 4.26.86 5.82 2.42a8.23 8.23 0 0 1 2.41 5.83c0 4.54-3.7 8.24-8.24 8.24-1.42 0-2.82-.37-4.05-1.08l-.29-.17-3.13.82.84-3.05-.19-.3a8.16 8.16 0 0 1-1.25-4.46c0-4.54 3.7-8.24 8.24-8.24m4.52 11.66c-.25-.13-1.47-.72-1.7-.81-.23-.08-.39-.13-.56.13-.17.25-.64.81-.79.97-.14.17-.29.19-.54.06-.25-.13-1.06-.39-2.02-1.24-.74-.66-1.24-1.47-1.39-1.72-.14-.25-.02-.39.11-.51.11-.11.25-.29.37-.43.13-.15.17-.25.25-.42.08-.17.04-.31-.02-.44-.06-.13-.56-1.35-.77-1.85-.2-.49-.41-.42-.56-.43h-.48c-.17 0-.44.06-.67.31-.23.25-.88.86-.88 2.1s.9 2.44 1.03 2.61c.13.17 1.77 2.7 4.29 3.79.6.26 1.07.41 1.44.53.6.19 1.15.16 1.58.1.48-.07 1.47-.6 1.68-1.18.21-.58.21-1.07.14-1.18-.06-.1-.23-.17-.48-.29z"/>
          </svg>
        </div>
        <div class="eq-assist-info">
          <h4>WhatsApp Us</h4>
          <p>Chat with our team directly</p>
          <span class="eq-assist-val">+91 86672 05661</span>
        </div>
      </a>

      {{-- Call Us --}}
      <a href="tel:+918667205661" class="eq-assist-card">
        <div class="eq-assist-icon eq-icon-call" aria-hidden="true">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
            <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path>
          </svg>
        </div>
        <div class="eq-assist-info">
          <h4>Call Us</h4>
          <p>Speak with our team</p>
          <span class="eq-assist-val">+91 86672 05661</span>
        </div>
      </a>
    </div>
  </div>

</div>

<script>
(function () {
  // Multi-select dropdown logic
  var wrap = document.getElementById('eqMultiSelect');
  var triggerBtn = document.getElementById('eq_req_btn');
  var triggerText = document.getElementById('eqTriggerText');
  var triggerBadge = document.getElementById('eqTriggerBadge');
  var ddCount = document.getElementById('eqDdCount');
  var clearBtn = document.getElementById('eqDdClearBtn');

  function updateMultiSelectUI() {
    if (!wrap) return;
    var checkedBoxes = wrap.querySelectorAll('.eq-dd-item input[type="checkbox"]:checked');
    var count = checkedBoxes.length;
    var values = [];
    checkedBoxes.forEach(function (chk) {
      values.push(chk.value);
    });

    if (count === 0) {
      triggerText.textContent = 'Select what you are interested in...';
      triggerText.classList.remove('has-selection');
      triggerBadge.style.display = 'none';
      if (ddCount) ddCount.textContent = '0 selected';
    } else if (count === 1) {
      triggerText.textContent = values[0];
      triggerText.classList.add('has-selection');
      triggerBadge.textContent = '1';
      triggerBadge.style.display = 'inline-block';
      if (ddCount) ddCount.textContent = '1 selected';
    } else {
      triggerText.textContent = values[0] + ', ' + values[1] + (count > 2 ? ' (+' + (count - 2) + ' more)' : '');
      triggerText.classList.add('has-selection');
      triggerBadge.textContent = count;
      triggerBadge.style.display = 'inline-block';
      if (ddCount) ddCount.textContent = count + ' selected';
    }
  }

  if (wrap && triggerBtn) {
    // Toggle dropdown
    triggerBtn.addEventListener('click', function (e) {
      e.preventDefault();
      e.stopPropagation();
      var isOpen = wrap.classList.toggle('is-open');
      triggerBtn.setAttribute('aria-expanded', isOpen ? 'true' : 'false');
    });

    // Close when clicking outside
    document.addEventListener('click', function (e) {
      if (!wrap.contains(e.target)) {
        wrap.classList.remove('is-open');
        triggerBtn.setAttribute('aria-expanded', 'false');
      }
    });

    // Handle checkbox change
    wrap.querySelectorAll('.eq-dd-item input[type="checkbox"]').forEach(function (chk) {
      chk.addEventListener('change', function () {
        var item = chk.closest('.eq-dd-item');
        if (item) {
          item.classList.toggle('is-selected', chk.checked);
        }
        updateMultiSelectUI();
      });
    });

    // Clear all selections
    if (clearBtn) {
      clearBtn.addEventListener('click', function (e) {
        e.preventDefault();
        e.stopPropagation();
        wrap.querySelectorAll('.eq-dd-item').forEach(function (item) {
          var chk = item.querySelector('input[type="checkbox"]');
          if (chk) {
            chk.checked = false;
            item.classList.remove('is-selected');
          }
        });
        updateMultiSelectUI();
      });
    }

    // Initialize UI on page load
    updateMultiSelectUI();
  }

  // Country & Mobile Phone Sync
  var countrySel    = document.getElementById('eq_country');
  var phoneCodeSel  = document.getElementById('eq_phone_code');
  var phoneNumInput = document.getElementById('eq_phone_num');
  var phoneHidden   = document.getElementById('eq_phone');

  function syncPhone() {
    if (!phoneHidden) return;
    var code = phoneCodeSel ? phoneCodeSel.value : '';
    var num  = phoneNumInput ? phoneNumInput.value.trim() : '';
    phoneHidden.value = num ? (code ? (code + ' ' + num) : num) : '';
  }

  if (countrySel && phoneCodeSel) {
    countrySel.addEventListener('change', function () {
      var opt = countrySel.options[countrySel.selectedIndex];
      if (!opt) return;
      var cCode = opt.getAttribute('data-code');
      var pCode = opt.getAttribute('data-phonecode');

      // Sync the phone code dropdown
      for (var i = 0; i < phoneCodeSel.options.length; i++) {
        var pOpt = phoneCodeSel.options[i];
        if (pOpt.getAttribute('data-code') === cCode || pOpt.value === pCode) {
          phoneCodeSel.selectedIndex = i;
          break;
        }
      }
      syncPhone();
    });

    phoneCodeSel.addEventListener('change', function () {
      syncPhone();
    });
  }

  if (phoneNumInput) {
    phoneNumInput.addEventListener('input', syncPhone);
  }

  // Initial sync
  syncPhone();

  // Dynamic Inline Field Validation & Error Display for ALL fields
  var form          = document.getElementById('eq-form');
  var btn           = document.getElementById('eq-btn');

  var nameInput     = document.getElementById('eq_name');
  var fgName        = document.getElementById('fg_name');
  var errNameTxt    = fgName ? fgName.querySelector('.err-txt') : null;

  var companyInput  = document.getElementById('eq_company');
  var fgCompany     = document.getElementById('fg_company');
  var errCompanyTxt = fgCompany ? fgCompany.querySelector('.err-txt') : null;

  var emailInput    = document.getElementById('eq_email');
  var fgEmail       = document.getElementById('fg_email');
  var errEmailTxt   = fgEmail ? fgEmail.querySelector('.err-txt') : null;

  var countrySel    = document.getElementById('eq_country');
  var fgCountry     = document.getElementById('fg_country');
  var errCountryTxt = fgCountry ? fgCountry.querySelector('.err-txt') : null;

  var phoneNumInput = document.getElementById('eq_phone_num');
  var fgPhone       = document.getElementById('fg_phone');
  var errPhoneTxt   = fgPhone ? fgPhone.querySelector('.err-txt') : null;

  var subjectSel    = document.getElementById('eq_subject');
  var fgSubject     = document.getElementById('fg_subject');
  var errSubjectTxt = fgSubject ? fgSubject.querySelector('.err-txt') : null;

  var messageInput  = document.getElementById('eq_message');
  var fgMessage     = document.getElementById('fg_message');
  var errMessageTxt = fgMessage ? fgMessage.querySelector('.err-txt') : null;

  // 1. Full Name Validation
  function validateName(showRequired) {
    if (!nameInput || !fgName) return true;
    var val = nameInput.value.trim();

    if (!val) {
      if (showRequired) {
        if (errNameTxt) errNameTxt.textContent = 'Please enter your full name.';
        fgName.classList.add('has-error');
        return false;
      }
      fgName.classList.remove('has-error');
      return true;
    }

    if (/[0-9]/.test(val)) {
      if (errNameTxt) errNameTxt.textContent = 'Numbers are not allowed in Full Name. Please use letters only.';
      fgName.classList.add('has-error');
      return false;
    }

    if (/[^a-zA-Z\s\.\'\-]/.test(val)) {
      if (errNameTxt) errNameTxt.textContent = 'Special characters are not allowed in Name.';
      fgName.classList.add('has-error');
      return false;
    }

    if (val.length < 2) {
      if (errNameTxt) errNameTxt.textContent = 'Full Name must be at least 2 characters.';
      fgName.classList.add('has-error');
      return false;
    }

    fgName.classList.remove('has-error');
    return true;
  }

  // 2. Business Name Validation
  function validateCompany(showRequired) {
    if (!companyInput || !fgCompany) return true;
    var val = companyInput.value.trim();

    if (!val) {
      if (showRequired) {
        if (errCompanyTxt) errCompanyTxt.textContent = 'Please enter your restaurant or business name.';
        fgCompany.classList.add('has-error');
        return false;
      }
      fgCompany.classList.remove('has-error');
      return true;
    }

    if (val.length < 2) {
      if (errCompanyTxt) errCompanyTxt.textContent = 'Business Name must be at least 2 characters.';
      fgCompany.classList.add('has-error');
      return false;
    }

    fgCompany.classList.remove('has-error');
    return true;
  }

  // 3. Email Address Validation
  // Requirements:
  // - Required: Email address cannot be empty.
  // - Valid Format: Must follow name@example.com.
  // - No Spaces: Spaces are not allowed.
  // - Valid Domain: Must include a valid domain extension (e.g. .com, .in, .net).
  // - Error Message: "Please enter a valid email address."
  // - Success: "Valid email address."
  var emailRegex = /^[a-zA-Z0-9._%+\-]+@[a-zA-Z0-9.\-]+\.[a-zA-Z]{2,}$/;

  function validateEmail(showRequired) {
    if (!emailInput || !fgEmail) return true;
    var rawVal = emailInput.value;
    var val = rawVal.trim();

    // 1. Required: Business email cannot be empty.
    if (!val) {
      fgEmail.classList.remove('has-success');
      if (showRequired) {
        if (errEmailTxt) errEmailTxt.textContent = 'Business email cannot be empty.';
        fgEmail.classList.add('has-error');
        return false;
      }
      fgEmail.classList.remove('has-error');
      return false;
    }

    // 2. No Spaces: Spaces are not allowed.
    if (/\s/.test(rawVal)) {
      if (errEmailTxt) errEmailTxt.textContent = 'Please enter a valid email address.';
      fgEmail.classList.remove('has-success');
      fgEmail.classList.add('has-error');
      return false;
    }

    // 3. Valid Format & Valid Domain: Must follow name@example.com with valid extension
    if (!emailRegex.test(rawVal)) {
      if (errEmailTxt) errEmailTxt.textContent = 'Please enter a valid email address.';
      fgEmail.classList.remove('has-success');
      fgEmail.classList.add('has-error');
      return false;
    }

    // 4. Success: "Valid email address."
    fgEmail.classList.remove('has-error');
    fgEmail.classList.add('has-success');
    return true;
  }

  // 4. Country Selection Validation
  function validateCountry(showRequired) {
    if (!countrySel || !fgCountry) return true;
    var val = countrySel.value.trim();

    if (!val) {
      if (showRequired) {
        if (errCountryTxt) errCountryTxt.textContent = 'Please select your country.';
        fgCountry.classList.add('has-error');
        return false;
      }
      fgCountry.classList.remove('has-error');
      return true;
    }

    fgCountry.classList.remove('has-error');
    return true;
  }

  // 5. Phone Number Validation
  function validatePhone(showRequired) {
    if (!phoneNumInput || !fgPhone) return true;
    var val = phoneNumInput.value.trim();

    if (!val) {
      if (showRequired) {
        if (errPhoneTxt) errPhoneTxt.textContent = 'Please enter your phone number.';
        fgPhone.classList.add('has-error');
        return false;
      }
      fgPhone.classList.remove('has-error');
      return true;
    }

    if (/[a-zA-Z]/.test(val)) {
      if (errPhoneTxt) errPhoneTxt.textContent = 'Letters are not allowed in Phone Number. Enter numbers only.';
      fgPhone.classList.add('has-error');
      return false;
    }

    if (/[^0-9\s\-]/.test(val)) {
      if (errPhoneTxt) errPhoneTxt.textContent = 'Only numbers (0-9) are allowed in Phone Number.';
      fgPhone.classList.add('has-error');
      return false;
    }

    var digitsOnly = val.replace(/[\s\-]/g, '');
    if (digitsOnly.length < 7) {
      if (errPhoneTxt) errPhoneTxt.textContent = 'Phone Number must be at least 7 digits.';
      fgPhone.classList.add('has-error');
      return false;
    }

    if (digitsOnly.length > 15) {
      if (errPhoneTxt) errPhoneTxt.textContent = 'Phone Number cannot exceed 15 digits.';
      fgPhone.classList.add('has-error');
      return false;
    }

    fgPhone.classList.remove('has-error');
    return true;
  }

  // 6. Business Type Validation
  function validateSubject(showRequired) {
    if (!subjectSel || !fgSubject) return true;
    var val = subjectSel.value.trim();

    if (!val) {
      if (showRequired) {
        if (errSubjectTxt) errSubjectTxt.textContent = 'Please select your business type.';
        fgSubject.classList.add('has-error');
        return false;
      }
      fgSubject.classList.remove('has-error');
      return true;
    }

    fgSubject.classList.remove('has-error');
    return true;
  }

  // 7. Message Validation
  function validateMessage(showRequired) {
    if (!messageInput || !fgMessage) return true;
    var val = messageInput.value.trim();

    if (!val) {
      if (showRequired) {
        if (errMessageTxt) errMessageTxt.textContent = 'Please enter your message or requirements.';
        fgMessage.classList.add('has-error');
        return false;
      }
      fgMessage.classList.remove('has-error');
      return true;
    }

    if (val.length < 10) {
      if (errMessageTxt) errMessageTxt.textContent = 'Please write at least 10 characters so we can understand your requirements.';
      fgMessage.classList.add('has-error');
      return false;
    }

    fgMessage.classList.remove('has-error');
    return true;
  }

  // Attach live event listeners
  if (nameInput) {
    nameInput.addEventListener('input', function () { validateName(false); });
    nameInput.addEventListener('blur', function () { if (nameInput.value.trim()) validateName(false); });
  }

  if (companyInput) {
    companyInput.addEventListener('input', function () { validateCompany(false); });
    companyInput.addEventListener('blur', function () { if (companyInput.value.trim()) validateCompany(false); });
  }

  if (emailInput) {
    emailInput.addEventListener('input', function () {
      var rawVal = emailInput.value;
      if (!rawVal) {
        fgEmail.classList.remove('has-success');
        if (fgEmail.classList.contains('has-error')) {
          if (errEmailTxt) errEmailTxt.textContent = 'Business email cannot be empty.';
        }
        return;
      }

      // If spaces are typed anywhere, immediately trigger error
      if (/\s/.test(rawVal)) {
        if (errEmailTxt) errEmailTxt.textContent = 'Please enter a valid email address.';
        fgEmail.classList.remove('has-success');
        fgEmail.classList.add('has-error');
        return;
      }

      // Real-time success check when format & domain extension match
      if (emailRegex.test(rawVal)) {
        fgEmail.classList.remove('has-error');
        fgEmail.classList.add('has-success');
      } else {
        fgEmail.classList.remove('has-success');
        if (fgEmail.classList.contains('has-error')) {
          if (errEmailTxt) errEmailTxt.textContent = 'Please enter a valid email address.';
        }
      }
    });

    emailInput.addEventListener('blur', function () {
      if (emailInput.value.trim().length > 0 || fgEmail.classList.contains('has-error')) {
        validateEmail(true);
      }
    });
  }

  if (countrySel) {
    countrySel.addEventListener('change', function () { validateCountry(false); });
  }

  if (phoneNumInput) {
    phoneNumInput.addEventListener('input', function () { syncPhone(); validatePhone(false); });
    phoneNumInput.addEventListener('blur', function () { if (phoneNumInput.value.trim()) validatePhone(false); });
  }

  if (subjectSel) {
    subjectSel.addEventListener('change', function () { validateSubject(false); });
  }

  if (messageInput) {
    messageInput.addEventListener('input', function () {
      if (fgMessage.classList.contains('has-error')) validateMessage(false);
    });
    messageInput.addEventListener('blur', function () { if (messageInput.value.trim()) validateMessage(false); });
  }

  // reCAPTCHA validation
  window.onEqRecaptchaSuccess = function() {
    var err = document.getElementById('errEqRecaptcha');
    if (err) err.style.display = 'none';
  };

  function validateRecaptcha(showRequired) {
    var err = document.getElementById('errEqRecaptcha');
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

  // Form Submit Handler
  if (form && btn) {
    form.addEventListener('submit', function (e) {
      var isNameValid      = validateName(true);
      var isCompanyValid   = validateCompany(true);
      var isEmailValid     = validateEmail(true);
      var isCountryValid   = validateCountry(true);
      var isPhoneValid     = validatePhone(true);
      var isSubjectValid   = validateSubject(true);
      var isMessageValid   = validateMessage(true);
      var isRecaptchaValid = validateRecaptcha(true);

      var allValid = isNameValid && isCompanyValid && isEmailValid && isCountryValid && isPhoneValid && isSubjectValid && isMessageValid && isRecaptchaValid;

      if (!allValid) {
        e.preventDefault();

        // Focus first invalid element
        if (!isNameValid) {
          nameInput.focus();
        } else if (!isCompanyValid) {
          companyInput.focus();
        } else if (!isEmailValid) {
          emailInput.focus();
        } else if (!isCountryValid) {
          countrySel.focus();
        } else if (!isPhoneValid) {
          phoneNumInput.focus();
        } else if (!isSubjectValid) {
          subjectSel.focus();
        } else if (!isMessageValid) {
          messageInput.focus();
        }

        return false;
      }

      syncPhone();
      btn.disabled = true;
      btn.innerHTML = '<svg viewBox="0 0 24 24" style="width:17px;height:17px;stroke:currentColor;fill:none;stroke-width:2.2;stroke-linecap:round;animation:eq-spin 1s linear infinite"><circle cx="12" cy="12" r="9" stroke-dasharray="56" stroke-dashoffset="18" opacity=".35"/><path d="M12 3a9 9 0 0 1 9 9"/></svg> Submitting...';
    });
  }
})();
</script>

@endsection
