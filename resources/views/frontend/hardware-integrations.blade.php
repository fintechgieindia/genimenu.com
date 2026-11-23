@php
    $meta = $meta ?? [
        'title' => 'Hardware & Integrations | Swiggy Zomato POS, UPI QR & Kiosks | Geni Menu',
        'description' => 'Connect hardware & apps: Swiggy Zomato integrated POS, UPI QR billing, WhatsApp billing, self-ordering kiosks, touchscreen POS, thermal receipt & KOT printers.',
        'keywords' => 'restaurants, hotels, menu, canteen, food, software, Swiggy Zomato integrated POS, restaurant POS with UPI QR billing, WhatsApp billing software for restaurants, QR code digital menu ordering India, food truck billing machine and software, self-ordering kiosk software for restaurants, touchscreen POS, receipt printer, KOT printer, cash drawer, Geni Menu hardware'
    ];
@endphp

@extends('layouts.frontend-master')

@section('content')

{{-- Google Fonts & Glacial Indifference CDN --}}
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@400;500;600;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://fonts.cdnfonts.com/css/glacial-indifference-2">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

<style>
/* ==========================================================================
   GENI MENU — HARDWARE & INTEGRATIONS PAGE
   - Palette: Primary Chocolate (#27130D, #32180F), Deep Brown (#451D0C),
              Dark Coffee (#572A13), Warm Ivory (#FFF4E5), Cream (#FFF8F0),
              Light Cream / Card (#FAF4ED, #FCE8D2), Champagne Gold (#F2C58D, #F5B947),
              Accent Gold (#E99A24, #C58B50)
   - Fonts: 'Cinzel', serif (Headings & Eyebrows: Regular 400, Uppercase)
            'Glacial Indifference', sans-serif (Body & Buttons: Regular 400, Buttons 700)
   ========================================================================== */

:root {
  --hw-chocolate: #27130D;
  --hw-primary-chocolate: #32180F;
  --hw-deep-brown: #451D0C;
  --hw-dark-coffee: #572A13;
  --hw-warm-ivory: #FFF4E5;
  --hw-cream: #FFF8F0;
  --hw-cream-card: #FAF4ED;
  --hw-cream-alt: #F6EDE2;
  --hw-light-cream: #FCE8D2;
  --hw-champagne: #F2C58D;
  --hw-champagne-gold: #F5B947;
  --hw-accent-gold: #E99A24;
  --hw-caramel: #C58B50;
  --hw-text-dark: #2A170F;
  --hw-text-muted: #6B5549;
  --hw-text-light: #FFF8F0;
  --hw-text-sec-light: #E4D3C4;
  --hw-border: rgba(197, 139, 80, 0.22);
  --hw-border-dark: rgba(197, 139, 80, 0.35);
  --hw-shadow-sm: 0 4px 16px rgba(39, 19, 13, 0.05);
  --hw-shadow-md: 0 10px 28px rgba(39, 19, 13, 0.09);
  --hw-shadow-lg: 0 18px 45px rgba(39, 19, 13, 0.14);
}

* { box-sizing: border-box; }
html { scroll-behavior: smooth; }

.hw-page-wrapper {
  background-color: var(--hw-cream);
  color: var(--hw-text-dark);
  font-family: 'Glacial Indifference', sans-serif !important;
  font-size: 15px;
  line-height: 1.65;
  overflow-x: clip;
}

.hw-container {
  max-width: 1240px;
  margin: 0 auto;
  padding: 0 24px;
  width: 100%;
}

/* Typography Helpers (Matching Home Page Standard) */
h1, h2, h3, h4, h5, h6,
.hw-hero-title,
.hw-sec-title,
.hw-card-title,
.hw-setup-title,
.hw-integ-title,
.hw-wf-title,
.hw-cta-title,
.hw-badge-text,
.geni-section-eyebrow {
  font-family: 'Cinzel', serif !important;
  text-transform: uppercase !important;
  font-weight: 400 !important;
  letter-spacing: 0.03em;
}

p, li, .hw-hero-desc, .hw-sec-desc, .hw-card-desc,
.hw-setup-desc, .hw-integ-desc, .hw-wf-desc, .hw-cta-desc {
  font-family: 'Glacial Indifference', sans-serif !important;
  font-weight: 400 !important;
}

/* Section Eyebrow (Matching Features Page Style) */
.geni-section-eyebrow {
  display: inline-flex;
  align-items: center;
  gap: 8px;
  font-family: 'Cinzel', serif !important;
  font-size: 11.5px;
  font-weight: 400 !important;
  letter-spacing: 0.12em;
  text-transform: uppercase !important;
  color: var(--hw-caramel);
  margin-bottom: 12px;
}

.geni-section-eyebrow .dash {
  width: 24px;
  height: 1.5px;
  background: var(--hw-caramel);
  display: inline-block;
}

.geni-section-eyebrow.eyebrow-champagne {
  color: var(--hw-champagne) !important;
}

.geni-section-eyebrow.eyebrow-champagne .dash {
  background: var(--hw-champagne) !important;
}

/* Eyebrow Badges */
.hw-badge {
  display: inline-flex;
  align-items: center;
  gap: 8px;
  padding: 6px 18px;
  border-radius: 9999px;
  margin-bottom: 16px;
  font-family: 'Cinzel', serif !important;
  font-size: 11.5px;
  font-weight: 500 !important;
  letter-spacing: 0.12em;
  text-transform: uppercase !important;
}

.hw-badge.badge-light {
  background: rgba(197, 139, 80, 0.15);
  border: 1px solid rgba(242, 197, 141, 0.35);
  color: var(--hw-champagne);
}

.hw-badge.badge-dark {
  background: #FAF0E4;
  border: 1px solid rgba(197, 139, 80, 0.35);
  color: var(--hw-caramel);
}

.hw-badge-dot {
  width: 7px;
  height: 7px;
  border-radius: 50%;
  background-color: var(--hw-champagne);
  box-shadow: 0 0 0 3px rgba(242, 197, 141, 0.25);
}

.hw-badge.badge-dark .hw-badge-dot {
  background-color: var(--hw-caramel);
  box-shadow: 0 0 0 3px rgba(197, 139, 80, 0.25);
}

/* Section Header Helpers */
.hw-sec-header {
  text-align: center;
  max-width: 800px;
  margin: 0 auto 52px auto;
}

.hw-sec-title {
  font-size: clamp(28px, 3.4vw, 40px);
  color: var(--hw-chocolate);
  line-height: 1.25;
  margin: 0 0 16px 0;
}

.hw-sec-desc {
  font-size: 16px;
  color: var(--hw-text-muted);
  line-height: 1.65;
  margin: 0 auto;
}

/* Buttons (1:1 with Home Page) */
.hw-btn {
  display: inline-flex;
  align-items: center;
  justify-content: center;
  gap: 8px;
  padding: 12px 26px !important;
  border-radius: 9999px !important;
  font-family: 'Glacial Indifference', sans-serif !important;
  font-size: 14.5px !important;
  font-weight: 700 !important;
  letter-spacing: 0.03em !important;
  text-transform: none !important;
  text-decoration: none;
  cursor: pointer;
  transition: all 0.22s ease;
  white-space: nowrap;
}

.hw-btn-primary {
  background: linear-gradient(135deg, #F2C58D 0%, #E8BA80 100%) !important;
  color: #27130D !important;
  border: none !important;
  box-shadow: 0 4px 16px rgba(242, 197, 141, 0.28) !important;
}

.hw-btn-primary:hover {
  background: linear-gradient(135deg, #FFF8F0 0%, #F2C58D 100%) !important;
  color: #27130D !important;
  transform: translateY(-2px);
  box-shadow: 0 6px 22px rgba(242, 197, 141, 0.42) !important;
}

.hw-btn-ghost-light {
  background-color: transparent !important;
  color: var(--hw-text-light) !important;
  border: 1.5px solid rgba(242, 197, 141, 0.60) !important;
}

.hw-btn-ghost-light:hover {
  background-color: rgba(242, 197, 141, 0.15) !important;
  border-color: var(--hw-champagne) !important;
  color: #FFFFFF !important;
  transform: translateY(-2px);
}

.hw-btn-ghost-dark {
  background-color: transparent !important;
  color: var(--hw-chocolate) !important;
  border: 1.5px solid rgba(197, 139, 80, 0.45) !important;
}

.hw-btn-ghost-dark:hover {
  background-color: rgba(197, 139, 80, 0.12) !important;
  border-color: var(--hw-caramel) !important;
  color: var(--hw-chocolate) !important;
  transform: translateY(-2px);
}

/* ==========================================================================
   1. HERO SECTION (DARK CHOCOLATE WITH AMBIENT GLOW & REAL PRODUCT SHOWCASE)
   ========================================================================== */
.hw-hero-section {
  position: relative;
  background: #200D06 url('{{ asset("assets/images/home/hardwarehero.png") }}') center right / cover no-repeat !important;
  color: var(--hw-text-light);
  padding: 42px 0 48px 0;
  overflow: hidden;
  border-bottom: 1px solid var(--hw-border-dark);
}

.hw-hero-overlay {
  position: absolute;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background: linear-gradient(90deg, rgba(32, 13, 6, 0.92) 0%, rgba(32, 13, 6, 0.82) 48%, rgba(20, 8, 4, 0.35) 80%, rgba(20, 8, 4, 0.15) 100%);
  z-index: 1;
}

.hw-hero-grid {
  display: grid;
  grid-template-columns: 1.15fr 1fr;
  gap: 48px;
  align-items: center;
  position: relative;
  z-index: 2;
}

.hw-hero-content {
  max-width: 580px;
}

.hw-hero-title {
  font-size: clamp(34px, 4.4vw, 50px);
  color: #FFFFFF;
  line-height: 1.2;
  margin: 0 0 16px 0;
}

.hw-hero-subheading {
  font-size: clamp(17px, 2vw, 20px);
  font-weight: 500;
  color: var(--hw-champagne);
  line-height: 1.45;
  margin: 0 0 18px 0;
}

.hw-hero-desc {
  font-size: 15.5px;
  color: var(--hw-text-sec-light);
  line-height: 1.68;
  margin: 0 0 28px 0;
}

/* Feature Highlights Strip in Hero */
.hw-hero-highlights {
  display: flex;
  align-items: center;
  gap: 20px;
  margin-bottom: 32px;
  flex-wrap: wrap;
}

.hw-highlight-item {
  display: inline-flex;
  align-items: center;
  gap: 9px;
  font-size: 13.5px;
  font-weight: 600;
  color: #FFF8F0;
  background: rgba(255, 248, 240, 0.08);
  padding: 8px 16px;
  border-radius: 9999px;
  border: 1px solid rgba(242, 197, 141, 0.24);
  backdrop-filter: blur(8px);
}

.hw-highlight-item i {
  color: var(--hw-champagne);
  font-size: 16px;
  line-height: 1;
}

.hw-hero-actions {
  display: flex;
  align-items: center;
  gap: 16px;
  flex-wrap: wrap;
}

/* Right Side Composition Showcase */
.hw-hero-visual {
  position: relative;
  display: flex;
  justify-content: center;
  align-items: center;
}

.hw-showcase-frame {
  position: relative;
  width: 100%;
  max-width: 620px;
  border-radius: 20px;
  overflow: hidden;
  box-shadow: 0 24px 60px rgba(0, 0, 0, 0.55);
  border: 1.5px solid rgba(242, 197, 141, 0.35);
  background: radial-gradient(circle at center, rgba(60, 30, 18, 0.45) 0%, rgba(20, 10, 6, 0.85) 100%);
  transition: transform 0.35s ease, box-shadow 0.35s ease;
}

.hw-showcase-frame:hover {
  transform: translateY(-4px);
  box-shadow: 0 30px 70px rgba(0, 0, 0, 0.65);
}

.hw-showcase-frame img {
  width: 100%;
  height: auto;
  display: block;
  object-fit: cover;
}

/* ==========================================================================
   2. BENEFIT STRIP (CREAM 4-COLUMN HORIZONTAL BAR)
   ========================================================================== */
.hw-benefit-strip {
  background-color: var(--hw-cream);
  border-bottom: 1px solid var(--hw-border);
  padding: 38px 0;
}

.hw-benefits-grid {
  display: grid;
  grid-template-columns: repeat(4, 1fr);
  gap: 24px;
}

.hw-benefit-col {
  display: flex;
  align-items: flex-start;
  gap: 16px;
  padding: 6px 12px;
  position: relative;
}

.hw-benefit-col:not(:last-child)::after {
  content: '';
  position: absolute;
  right: -12px;
  top: 15%;
  height: 70%;
  width: 1px;
  background-color: rgba(197, 139, 80, 0.28);
}

.hw-benefit-icon-box {
  width: 48px;
  height: 48px;
  border-radius: 12px;
  background: #FAF0E4;
  border: 1px solid rgba(197, 139, 80, 0.35);
  color: var(--hw-caramel);
  display: flex;
  align-items: center;
  justify-content: center;
  font-size: 22px;
  flex-shrink: 0;
  transition: all 0.25s ease;
}

.hw-benefit-col:hover .hw-benefit-icon-box {
  background: var(--hw-chocolate);
  color: var(--hw-champagne);
  border-color: var(--hw-champagne);
  transform: translateY(-2px);
}

.hw-benefit-info h4 {
  font-family: 'Cinzel', serif !important;
  font-size: 15px;
  font-weight: 500 !important;
  color: var(--hw-chocolate);
  margin: 0 0 5px 0;
  line-height: 1.35;
  text-transform: uppercase !important;
}

.hw-benefit-info p {
  font-size: 13.5px;
  color: var(--hw-text-muted);
  line-height: 1.5;
  margin: 0;
}

/* ==========================================================================
   3. HARDWARE SOLUTIONS SECTION (5 CARDS ROW 1 + 4 CARDS ROW 2)
   ========================================================================== */
.hw-solutions-section {
  padding: 88px 0 96px 0;
  background-color: var(--hw-warm-ivory);
}

.hw-cards-grid {
  display: grid;
  grid-template-columns: repeat(20, 1fr);
  gap: 24px 22px;
  max-width: 1280px;
  margin: 0 auto;
}

.hw-cards-grid .hw-product-card {
  grid-column: span 4;
}

.hw-cards-grid .hw-product-card:nth-child(6) {
  grid-column: 3 / span 4;
}

.hw-product-card {
  background: #FFFFFF;
  border: 1px solid rgba(197, 139, 80, 0.25);
  border-radius: 16px;
  padding: 24px 18px 22px 18px;
  display: flex;
  flex-direction: column;
  align-items: center;
  text-align: center;
  transition: all 0.28s ease;
  box-shadow: var(--hw-shadow-sm);
  position: relative;
}

.hw-product-card:hover {
  transform: translateY(-5px);
  border-color: var(--hw-caramel);
  box-shadow: 0 12px 30px rgba(197, 139, 80, 0.18);
  background: #FFFDF9;
}

.hw-card-img-wrap {
  width: 100%;
  height: 135px;
  display: flex;
  align-items: center;
  justify-content: center;
  margin-bottom: 18px;
  background: #FCFAF7;
  border-radius: 12px;
  padding: 10px;
  border: 1px solid rgba(197, 139, 80, 0.12);
  transition: transform 0.25s ease;
}

.hw-product-card:hover .hw-card-img-wrap {
  transform: scale(1.04);
  border-color: rgba(197, 139, 80, 0.3);
}

.hw-card-img-wrap img {
  max-width: 100%;
  max-height: 115px;
  object-fit: contain;
  display: block;
}

.hw-card-title {
  font-size: 15px;
  font-weight: 500 !important;
  color: var(--hw-chocolate);
  margin: 0 0 10px 0;
  line-height: 1.35;
  text-transform: uppercase !important;
}

.hw-card-desc {
  font-size: 13px;
  color: var(--hw-text-muted);
  line-height: 1.55;
  margin: 0;
}

/* ==========================================================================
   4. HARDWARE SETUP & INSTALLATION (SPLIT SECTION)
   ========================================================================== */
.hw-setup-section {
  position: relative;
  background: linear-gradient(135deg, #27130D 0%, #32180F 55%, #1C0B05 100%);
  color: #FFFFFF;
  overflow: hidden;
  border-top: 1px solid var(--hw-border-dark);
  border-bottom: 1px solid var(--hw-border-dark);
}

.hw-setup-grid {
  display: grid;
  grid-template-columns: 0.9fr 1.25fr;
  align-items: stretch;
}

.hw-setup-visual-col {
  position: relative;
  min-height: 480px;
  overflow: hidden;
}

.hw-setup-visual-col img {
  width: 100%;
  height: 100%;
  object-fit: cover;
  display: block;
}

.hw-setup-visual-overlay {
  position: absolute;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background: linear-gradient(90deg, transparent 60%, rgba(39, 19, 13, 0.95) 100%),
              radial-gradient(circle at 30% 50%, rgba(197, 139, 80, 0.15) 0%, transparent 60%);
  pointer-events: none;
}

.hw-setup-content-col {
  padding: 72px 56px 72px 48px;
  display: flex;
  flex-direction: column;
  justify-content: center;
}

.hw-setup-title {
  font-size: clamp(26px, 3vw, 36px);
  color: #FFFFFF;
  line-height: 1.28;
  margin: 0 0 14px 0;
}

.hw-setup-desc {
  font-size: 15.5px;
  color: var(--hw-text-sec-light);
  line-height: 1.65;
  margin: 0 0 36px 0;
  max-width: 620px;
}

/* 5 Connected Process Steps */
.hw-process-track {
  display: grid;
  grid-template-columns: repeat(5, 1fr);
  gap: 12px;
  position: relative;
}

.hw-process-step {
  display: flex;
  flex-direction: column;
  align-items: center;
  text-align: center;
  position: relative;
  padding: 0 4px;
}

.hw-step-circle {
  width: 52px;
  height: 52px;
  border-radius: 50%;
  background: rgba(45, 22, 14, 0.9);
  border: 1.5px solid var(--hw-champagne);
  color: var(--hw-champagne);
  display: flex;
  align-items: center;
  justify-content: center;
  font-size: 20px;
  margin-bottom: 12px;
  box-shadow: 0 0 16px rgba(242, 197, 141, 0.25);
  transition: all 0.25s ease;
}

.hw-process-step:hover .hw-step-circle {
  transform: translateY(-3px) scale(1.05);
  background: var(--hw-champagne);
  color: var(--hw-chocolate);
  box-shadow: 0 0 22px rgba(242, 197, 141, 0.5);
}

.hw-step-num-badge {
  font-family: 'Cinzel', serif !important;
  font-size: 10px;
  font-weight: 700;
  color: var(--hw-champagne);
  letter-spacing: 0.08em;
  text-transform: uppercase;
  margin-bottom: 4px;
}

.hw-step-title {
  font-family: 'Cinzel', serif !important;
  font-size: 12px;
  font-weight: 500 !important;
  color: #FFFFFF;
  margin: 0 0 4px 0;
  line-height: 1.35;
  text-transform: uppercase !important;
}

.hw-step-desc {
  font-size: 11.5px;
  color: var(--hw-text-sec-light);
  line-height: 1.4;
  margin: 0;
}

/* Connecting Arrow */
.hw-step-arrow {
  position: absolute;
  top: 26px;
  right: -10px;
  transform: translateY(-50%);
  color: rgba(242, 197, 141, 0.5);
  font-size: 14px;
  z-index: 3;
}

/* ==========================================================================
   5. INTEGRATIONS SECTION (3 LARGE PANELS: DELIVERY, PAYMENTS, COMM)
   ========================================================================== */
.hw-integrations-section {
  padding: 92px 0 100px 0;
  background-color: var(--hw-warm-ivory);
}

.hw-integ-panels-grid {
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  gap: 28px;
  margin-bottom: 30px;
}

.hw-integ-panel {
  border-radius: 20px;
  padding: 34px 28px;
  display: flex;
  flex-direction: column;
  transition: all 0.28s ease;
  box-shadow: var(--hw-shadow-sm);
  position: relative;
  overflow: hidden;
}

.hw-integ-panel:hover {
  transform: translateY(-5px);
  box-shadow: var(--hw-shadow-md);
}

/* Panel 1: Food Delivery (Light Peach) */
.hw-panel-delivery {
  background: #FFF3ED;
  border: 1.5px solid rgba(234, 138, 98, 0.45);
}

/* Panel 2: Payments (Light Blue) */
.hw-panel-payments {
  background: #EEF6FF;
  border: 1.5px solid rgba(100, 165, 238, 0.45);
}

/* Panel 3: Communication (Light Green) */
.hw-panel-comm {
  background: #EFF9F2;
  border: 1.5px solid rgba(82, 186, 116, 0.45);
}

.hw-panel-top {
  display: flex;
  align-items: center;
  gap: 14px;
  margin-bottom: 12px;
}

.hw-panel-icon {
  width: 48px;
  height: 48px;
  border-radius: 14px;
  display: flex;
  align-items: center;
  justify-content: center;
  font-size: 22px;
  flex-shrink: 0;
  box-shadow: 0 4px 12px rgba(0, 0, 0, 0.06);
}

.hw-panel-delivery .hw-panel-icon {
  background: #FF6A39;
  color: #FFFFFF;
}

.hw-panel-payments .hw-panel-icon {
  background: #2563EB;
  color: #FFFFFF;
}

.hw-panel-comm .hw-panel-icon {
  background: #16A34A;
  color: #FFFFFF;
}

.hw-panel-heading {
  font-family: 'Cinzel', serif !important;
  font-size: 18px;
  font-weight: 600 !important;
  color: var(--hw-chocolate);
  letter-spacing: 0.04em;
  margin: 0;
  line-height: 1.25;
  text-transform: uppercase !important;
}

.hw-panel-desc {
  font-size: 14px;
  color: var(--hw-text-muted);
  line-height: 1.55;
  margin: 0 0 16px 0;
}

/* Logos Container */
.hw-logos-wrap {
  display: flex;
  flex-wrap: wrap;
  align-items: center;
  gap: 12px;
  margin-top: 4px;
}

.hw-logo-tile {
  background: #FFFFFF;
  border: 1px solid rgba(197, 139, 80, 0.22);
  border-radius: 12px;
  padding: 6px 14px;
  height: 56px;
  min-width: 88px;
  display: inline-flex;
  align-items: center;
  justify-content: center;
  box-shadow: 0 2px 8px rgba(39, 19, 13, 0.04);
  transition: all 0.22s ease;
}

.hw-logo-tile:hover {
  transform: translateY(-2px);
  border-color: var(--hw-caramel);
  box-shadow: 0 6px 16px rgba(197, 139, 80, 0.20);
}

.hw-logo-tile img {
  max-height: 38px;
  max-width: 96px;
  width: auto;
  object-fit: contain;
  display: block;
}

/* Communication Checklist */
.hw-comm-single-logo {
  background: #FFFFFF;
  border: 1px solid rgba(52, 168, 83, 0.3);
  border-radius: 14px;
  padding: 10px 20px;
  display: inline-flex;
  align-items: center;
  gap: 12px;
  box-shadow: 0 4px 14px rgba(52, 168, 83, 0.12);
  margin-bottom: 22px;
  align-self: flex-start;
}

.hw-comm-single-logo img {
  height: 34px;
  width: auto;
  object-fit: contain;
}

.hw-comm-single-logo span {
  font-family: 'Cinzel', serif !important;
  font-size: 13.5px;
  font-weight: 600;
  color: #128C7E;
  text-transform: uppercase;
}

.hw-comm-checklist {
  list-style: none;
  padding: 0;
  margin: 0;
  display: flex;
  flex-direction: column;
  gap: 11px;
}

.hw-comm-checklist li {
  display: flex;
  align-items: center;
  gap: 10px;
  font-size: 13.5px;
  font-weight: 500;
  color: var(--hw-chocolate);
}

.hw-comm-checklist li i {
  color: #16A34A;
  font-size: 16px;
  flex-shrink: 0;
}

.hw-integ-disclaimer {
  text-align: center;
  font-size: 12.5px;
  color: var(--hw-text-muted);
  margin-top: 20px;
  font-style: italic;
}

/* ==========================================================================
   6. CONNECTED BUSINESS WORKFLOW (5 CONNECTED REAL PHOTOGRAPHS)
   ========================================================================== */
.hw-workflow-section {
  padding: 92px 0 100px 0;
  background-color: var(--hw-cream-alt);
  border-top: 1px solid var(--hw-border);
  border-bottom: 1px solid var(--hw-border);
}

.hw-workflow-track {
  display: grid;
  grid-template-columns: repeat(5, 1fr);
  gap: 16px;
  position: relative;
}

.hw-wf-card {
  background: #FAF4ED;
  border: 1px solid rgba(197, 139, 80, 0.25);
  border-radius: 16px;
  overflow: hidden;
  display: flex;
  flex-direction: column;
  transition: all 0.28s ease;
  box-shadow: var(--hw-shadow-sm);
  position: relative;
}

.hw-wf-card:hover {
  transform: translateY(-5px);
  border-color: var(--hw-caramel);
  box-shadow: var(--hw-shadow-md);
  background: #FFFFFF;
}

.hw-wf-photo-wrap {
  width: 100%;
  height: 140px;
  overflow: hidden;
  position: relative;
}

.hw-wf-photo-wrap img {
  width: 100%;
  height: 100%;
  object-fit: cover;
  transition: transform 0.35s ease;
  display: block;
}

.hw-wf-card:hover .hw-wf-photo-wrap img {
  transform: scale(1.06);
}

.hw-wf-badge-num {
  position: absolute;
  bottom: 8px;
  left: 10px;
  background: rgba(39, 19, 13, 0.90);
  backdrop-filter: blur(8px);
  color: var(--hw-champagne);
  border: 1px solid rgba(242, 197, 141, 0.35);
  font-family: 'Cinzel', serif !important;
  font-size: 10.5px;
  font-weight: 600;
  padding: 3px 10px;
  border-radius: 9999px;
  text-transform: uppercase;
}

.hw-wf-card-body {
  padding: 18px 16px 20px 16px;
  display: flex;
  flex-direction: column;
  flex: 1;
}

.hw-wf-title {
  font-size: 14px;
  font-weight: 500 !important;
  color: var(--hw-chocolate);
  margin: 0 0 8px 0;
  line-height: 1.35;
  text-transform: uppercase !important;
}

.hw-wf-desc {
  font-size: 12.5px;
  color: var(--hw-text-muted);
  line-height: 1.5;
  margin: 0;
}

/* Connecting Arrow Between Workflow Steps */
.hw-wf-arrow {
  position: absolute;
  top: 70px;
  right: -13px;
  transform: translateY(-50%);
  width: 24px;
  height: 24px;
  border-radius: 50%;
  background: #FAF4ED;
  border: 1px solid rgba(197, 139, 80, 0.35);
  color: var(--hw-caramel);
  display: flex;
  align-items: center;
  justify-content: center;
  font-size: 11px;
  z-index: 4;
  box-shadow: 0 2px 6px rgba(39, 19, 13, 0.08);
}

/* ==========================================================================
   7. FINAL CTA BANNER (DARK CHOCOLATE WITH CULINARY SCENE & GOLD ACCENTS)
   ========================================================================== */
.hw-cta-section {
  position: relative;
  background: #200D06 url('{{ asset("assets/images/home/hardwarecta.png") }}') center center / cover no-repeat !important;
  color: #FFFFFF;
  padding: 100px 0 105px 0;
  min-height: 400px;
  display: flex;
  align-items: center;
  justify-content: center;
  overflow: hidden;
  text-align: center;
}

.hw-cta-overlay {
  position: absolute;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background: radial-gradient(ellipse at center, rgba(32, 13, 6, 0.85) 0%, rgba(32, 13, 6, 0.70) 55%, rgba(26, 10, 5, 0.55) 100%);
  z-index: 1;
}

.hw-cta-section .hw-container {
  position: relative;
  z-index: 2;
}

.hw-cta-content-center {
  max-width: 780px;
  margin: 0 auto;
  text-align: center;
}

.hw-cta-title {
  font-family: 'Cinzel', serif !important;
  font-size: clamp(28px, 3.8vw, 42px);
  font-weight: 400 !important;
  color: #FFFFFF;
  letter-spacing: 0.03em;
  line-height: 1.25;
  text-transform: uppercase !important;
  margin: 0 auto 16px auto;
  text-align: center;
}

.hw-cta-desc {
  font-family: 'Glacial Indifference', sans-serif !important;
  font-size: 16px;
  color: var(--hw-champagne-light, #FBE6CE);
  line-height: 1.68;
  margin: 0 auto 32px auto;
  max-width: 680px;
  text-align: center;
}

.hw-cta-actions {
  display: flex;
  align-items: center;
  justify-content: center;
  gap: 16px;
  flex-wrap: wrap;
}

/* ==========================================================================
   RESPONSIVE DESIGN (TABLETS & MOBILE)
   ========================================================================== */
@media (max-width: 1100px) {
  .hw-cards-grid {
    grid-template-columns: repeat(3, 1fr) !important;
    gap: 20px !important;
    max-width: 100% !important;
  }
  .hw-cards-grid .hw-product-card {
    grid-column: auto !important;
  }
  .hw-cards-grid .hw-product-card:nth-child(6) {
    grid-column: auto !important;
  }
  .hw-integ-panels-grid {
    grid-template-columns: 1fr;
    gap: 24px;
  }
  .hw-workflow-track {
    grid-template-columns: repeat(3, 1fr);
    gap: 20px;
  }
  .hw-wf-arrow {
    display: none;
  }
}

@media (max-width: 900px) {
  .hw-hero-grid {
    grid-template-columns: 1fr;
    gap: 40px;
    text-align: left !important;
  }
  .hw-hero-content {
    max-width: 100%;
    text-align: left !important;
  }
  .hw-hero-title,
  .hw-hero-desc {
    text-align: left !important;
  }
  .hw-hero-highlights,
  .hw-hero-actions {
    justify-content: flex-start !important;
  }
  .hw-benefits-grid {
    grid-template-columns: repeat(2, 1fr);
    gap: 24px;
  }
  .hw-benefit-col:not(:last-child)::after {
    display: none;
  }
  .hw-setup-grid {
    grid-template-columns: 1fr;
  }
  .hw-setup-visual-col {
    min-height: 320px;
  }
  .hw-setup-content-col {
    padding: 48px 24px;
  }
  .hw-process-track {
    grid-template-columns: repeat(3, 1fr);
    gap: 20px;
  }
  .hw-step-arrow {
    display: none;
  }
  .hw-cta-grid {
    grid-template-columns: 1fr;
    text-align: center;
    gap: 36px;
  }
  .hw-cta-content-col {
    max-width: 100%;
  }
  .hw-cta-actions {
    justify-content: center;
  }
}

@media (max-width: 640px) {
  .hw-container {
    padding: 0 16px;
  }
  .hw-hero-section {
    padding: 32px 0 40px 0;
  }
  .hw-hero-title {
    font-size: 26px;
  }
  .hw-hero-subheading {
    font-size: 15px;
  }
  .hw-hero-highlights {
    gap: 12px;
  }
  .hw-highlight-item {
    font-size: 12.5px;
  }
  .hw-benefits-grid {
    grid-template-columns: 1fr;
    gap: 16px;
  }
  .hw-cards-grid {
    display: grid !important;
    grid-template-columns: repeat(2, 1fr) !important;
    gap: 12px !important;
  }
  .hw-cards-grid .hw-product-card {
    grid-column: auto !important;
  }
  .hw-cards-grid .hw-product-card:nth-child(6) {
    grid-column: auto !important;
  }
  .hw-cards-grid .hw-product-card:nth-child(9) {
    grid-column: 1 / -1 !important;
  }
  .hw-product-card {
    padding: 16px 10px 14px 10px;
  }
  .hw-card-title {
    font-size: 13px !important;
    word-break: break-word;
  }
  .hw-card-desc {
    font-size: 12px !important;
    line-height: 1.45;
  }
  .hw-card-img-wrap {
    height: 100px;
    padding: 8px;
    margin-bottom: 10px;
  }
  .hw-card-img-wrap img {
    max-height: 85px;
  }
  .hw-setup-content-col {
    padding: 36px 16px;
  }
  .hw-process-track {
    grid-template-columns: 1fr;
    gap: 16px;
  }
  .hw-workflow-track {
    grid-template-columns: 1fr;
    gap: 16px;
  }
  .hw-integ-panel {
    padding: 24px 16px;
  }
  .hw-logos-wrap {
    gap: 8px;
  }
  .hw-logo-tile {
    min-width: 76px;
    height: 48px;
    padding: 6px 10px;
  }
  .hw-logo-tile img {
    max-height: 30px;
    max-width: 74px;
  }
  .hw-sec-title {
    font-size: 23px;
  }
  .hw-sec-desc {
    font-size: 14px;
  }
  .hw-cta-title {
    font-size: 23px;
  }
  .hw-cta-desc {
    font-size: 14px;
  }
  .hw-hero-actions,
  .hw-cta-actions {
    flex-direction: column;
    width: 100%;
    gap: 12px;
  }
  .hw-btn {
    width: 100%;
  }
}

@media (max-width: 380px) {
  .hw-cards-grid {
    grid-template-columns: 1fr !important;
  }
  .hw-cards-grid .hw-product-card:nth-child(9) {
    grid-column: auto !important;
  }
}
</style>

<div class="hw-page-wrapper">

    {{-- ====================================================================
         1. HERO SECTION
         ==================================================================== --}}
    <section class="hw-hero-section">
        <div class="hw-hero-overlay"></div>
        <div class="hw-container" style="position: relative; z-index: 2;">
            <div class="hw-hero-grid">
                {{-- Left Side: Content --}}
                <div class="hw-hero-content">

                    <h1 class="hw-hero-title">HARDWARE &amp; INTEGRATIONS</h1>

                    <p class="hw-hero-desc">
                        From order taking to kitchen operations, billing and payments, we provide the right hardware, handle installation and configuration, and connect compatible devices with your Geni Menu platform for a seamless business experience.
                    </p>

                    <div class="hw-hero-highlights">
                        <div class="hw-highlight-item">
                            <i class="bi bi-box-seam"></i>
                            <span>Hardware Supply</span>
                        </div>
                        <div class="hw-highlight-item">
                            <i class="bi bi-wrench-adjustable"></i>
                            <span>Setup &amp; Installation</span>
                        </div>
                        <div class="hw-highlight-item">
                            <i class="bi bi-link-45deg"></i>
                            <span>System Integration</span>
                        </div>
                    </div>

                    <div class="hw-hero-actions">
                        <a href="#hardware-solutions" class="hw-btn hw-btn-primary">
                            <span>Explore Hardware</span>
                            <span style="font-size: 15px;">&rarr;</span>
                        </a>
                        <a href="{{ route('contact.us') }}" class="hw-btn hw-btn-ghost-light">
                            <span>Talk to Our Team</span>
                        </a>
                    </div>
                </div>

                {{-- Right Side space: background hardwarehero.png showcases the hardware setup --}}
                <div class="hw-hero-visual-space"></div>
            </div>
        </div>
    </section>

    {{-- ====================================================================
         2. BENEFIT STRIP (CREAM 4-COLUMN HORIZONTAL BAR)
         ==================================================================== --}}
    <section class="hw-benefit-strip">
        <div class="hw-container">
            <div class="hw-benefits-grid">
                {{-- Benefit 1 --}}
                <div class="hw-benefit-col">
                    <div class="hw-benefit-icon-box">
                        <i class="bi bi-layers"></i>
                    </div>
                    <div class="hw-benefit-info">
                        <h4>Complete Hardware Solutions</h4>
                        <p>All essential devices for your business.</p>
                    </div>
                </div>

                {{-- Benefit 2 --}}
                <div class="hw-benefit-col">
                    <div class="hw-benefit-icon-box">
                        <i class="bi bi-wrench-adjustable"></i>
                    </div>
                    <div class="hw-benefit-info">
                        <h4>Professional Installation</h4>
                        <p>Setup and configuration by our team.</p>
                    </div>
                </div>

                {{-- Benefit 3 --}}
                <div class="hw-benefit-col">
                    <div class="hw-benefit-icon-box">
                        <i class="bi bi-link-45deg"></i>
                    </div>
                    <div class="hw-benefit-info">
                        <h4>Seamless Integration</h4>
                        <p>Connect hardware and supported platforms.</p>
                    </div>
                </div>

                {{-- Benefit 4 --}}
                <div class="hw-benefit-col">
                    <div class="hw-benefit-icon-box">
                        <i class="bi bi-headset"></i>
                    </div>
                    <div class="hw-benefit-info">
                        <h4>Ongoing Support</h4>
                        <p>Assistance for a smooth operating experience.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- ====================================================================
         3. HARDWARE SOLUTIONS SECTION (5 IN ROW 1, 4 IN ROW 2)
         ==================================================================== --}}
    <section class="hw-solutions-section" id="hardware-solutions">
        <div class="hw-container">
            <div class="hw-sec-header">
                <div class="geni-section-eyebrow" style="justify-content: center;">
                    <span class="dash"></span>
                    <span>OUR HARDWARE SOLUTIONS</span>
                    <span class="dash"></span>
                </div>
                <h2 class="hw-sec-title">Complete Hardware for a Smarter Food Business.</h2>
                <p class="hw-sec-desc">
                    Explore reliable hardware solutions designed to work seamlessly with Geni Menu and support your everyday business operations.
                </p>
            </div>

            {{-- Hardware Solutions Grid --}}
            <div class="hw-cards-grid">
                {{-- Card 1: Laptop --}}
                <div class="hw-product-card">
                    <div class="hw-card-img-wrap">
                        <img src="{{ asset('assets/images/home/laptop.png') }}" alt="Geni Menu Business Laptop">
                    </div>
                    <h3 class="hw-card-title">Laptop</h3>
                    <p class="hw-card-desc">
                        Manage business operations, access reports and monitor performance through a dedicated system.
                    </p>
                </div>

                {{-- Card 2: Self-Service Kiosk --}}
                <div class="hw-product-card">
                    <div class="hw-card-img-wrap">
                        <img src="{{ asset('assets/images/home/self service kiosk.png') }}" alt="Self-Service Ordering Kiosk">
                    </div>
                    <h3 class="hw-card-title">Self-Service Kiosk</h3>
                    <p class="hw-card-desc">
                        Allow customers to browse menus, customise selections and place orders independently.
                    </p>
                </div>

                {{-- Card 3: Touchscreen POS --}}
                <div class="hw-product-card">
                    <div class="hw-card-img-wrap">
                        <img src="{{ asset('assets/images/home/touchscreenpos.png') }}" alt="Touchscreen POS Terminal">
                    </div>
                    <h3 class="hw-card-title">Touchscreen POS</h3>
                    <p class="hw-card-desc">
                        Process customer orders, manage billing and handle daily transactions through an intuitive touchscreen interface.
                    </p>
                </div>

                {{-- Card 4: Tablet --}}
                <div class="hw-product-card">
                    <div class="hw-card-img-wrap">
                        <img src="{{ asset('assets/images/home/tablet.png') }}" alt="Tablet Menu & POS">
                    </div>
                    <h3 class="hw-card-title">Tablet</h3>
                    <p class="hw-card-desc">
                        Access ordering and business functions through a portable device.
                    </p>
                </div>

                {{-- Card 5: Card Payment Terminal --}}
                <div class="hw-product-card">
                    <div class="hw-card-img-wrap">
                        <img src="{{ asset('assets/images/home/payemtcardterminal.png') }}" alt="Card Payment Terminal">
                    </div>
                    <h3 class="hw-card-title">Card Payment Terminal</h3>
                    <p class="hw-card-desc">
                        Accept supported card and contactless payments through a dedicated payment terminal.
                    </p>
                </div>

                {{-- Card 6: Receipt Printer --}}
                <div class="hw-product-card">
                    <div class="hw-card-img-wrap">
                        <img src="{{ asset('assets/images/home/receipt printer.png') }}" alt="Thermal Receipt Printer">
                    </div>
                    <h3 class="hw-card-title">Receipt Printer</h3>
                    <p class="hw-card-desc">
                        Print customer bills, order receipts and transaction details instantly.
                    </p>
                </div>

                {{-- Card 7: Cash Drawer --}}
                <div class="hw-product-card">
                    <div class="hw-card-img-wrap">
                        <img src="{{ asset('assets/images/home/cashdrawer.png') }}" alt="Secure Cash Drawer">
                    </div>
                    <h3 class="hw-card-title">Cash Drawer</h3>
                    <p class="hw-card-desc">
                        Keep cash transactions organised and secure at the billing counter.
                    </p>
                </div>

                {{-- Card 8: KOT Printer --}}
                <div class="hw-product-card">
                    <div class="hw-card-img-wrap">
                        <img src="{{ asset('assets/images/home/kot printer.png') }}" alt="Kitchen Order Ticket KOT Printer">
                    </div>
                    <h3 class="hw-card-title">KOT Printer</h3>
                    <p class="hw-card-desc">
                        Send kitchen order tickets directly to preparation areas for faster coordination.
                    </p>
                </div>

                {{-- Card 9: Customer Display Board --}}
                <div class="hw-product-card">
                    <div class="hw-card-img-wrap">
                        <img src="{{ asset('assets/images/home/customerdisplay.png') }}" alt="Customer Display Board">
                    </div>
                    <h3 class="hw-card-title">Customer Display Board</h3>
                    <p class="hw-card-desc">
                        Show order numbers, billing information and order status to customers.
                    </p>
                </div>
            </div> {{-- End .hw-cards-grid --}}
        </div> {{-- End .hw-container --}}
    </section>

    {{-- ====================================================================
         4. HARDWARE SETUP & INSTALLATION (SPLIT PROCESS SECTION)
         ==================================================================== --}}
    <section class="hw-setup-section">
        <div class="hw-setup-grid">
            {{-- Left Side: Realistic Technician Photo --}}
            <div class="hw-setup-visual-col">
                <img src="{{ asset('assets/images/home/hrdwaresetup.png') }}"
                     alt="Professional Hardware Setup and Installation by Geni Menu Team">
                <div class="hw-setup-visual-overlay"></div>
            </div>

            {{-- Right Side: Setup Process Content & 5 Steps --}}
            <div class="hw-setup-content-col">
                <div class="geni-section-eyebrow eyebrow-champagne">
                    <span class="dash"></span>
                    <span>OUR SETUP PROCESS</span>
                    <span class="dash"></span>
                </div>

                <h2 class="hw-setup-title">
                    We Provide, Connect &amp; Set Up Everything for You.
                </h2>

                <p class="hw-setup-desc">
                    Get a complete, professionally configured hardware setup tailored to your business requirements. Our team takes care of the process from device supply to system readiness.
                </p>

                {{-- 5 Connected Process Steps --}}
                <div class="hw-process-track">
                    {{-- Step 1 --}}
                    <div class="hw-process-step">
                        <div class="hw-step-circle">
                            <i class="bi bi-box-seam"></i>
                        </div>
                        <span class="hw-step-num-badge">1. Supply</span>
                        <h4 class="hw-step-title">Genuine Hardware</h4>
                        <p class="hw-step-desc">Supply the required devices.</p>
                        <span class="hw-step-arrow"><i class="bi bi-arrow-right"></i></span>
                    </div>

                    {{-- Step 2 --}}
                    <div class="hw-process-step">
                        <div class="hw-step-circle">
                            <i class="bi bi-gear-wide-connected"></i>
                        </div>
                        <span class="hw-step-num-badge">2. Install</span>
                        <h4 class="hw-step-title">Installation &amp; Config</h4>
                        <p class="hw-step-desc">Install and configure the equipment.</p>
                        <span class="hw-step-arrow"><i class="bi bi-arrow-right"></i></span>
                    </div>

                    {{-- Step 3 --}}
                    <div class="hw-process-step">
                        <div class="hw-step-circle">
                            <i class="bi bi-hdd-network"></i>
                        </div>
                        <span class="hw-step-num-badge">3. Connect</span>
                        <h4 class="hw-step-title">Device Connectivity</h4>
                        <p class="hw-step-desc">Connect compatible hardware devices.</p>
                        <span class="hw-step-arrow"><i class="bi bi-arrow-right"></i></span>
                    </div>

                    {{-- Step 4 --}}
                    <div class="hw-process-step">
                        <div class="hw-step-circle">
                            <i class="bi bi-diagram-3"></i>
                        </div>
                        <span class="hw-step-num-badge">4. Integrate</span>
                        <h4 class="hw-step-title">Platform Integration</h4>
                        <p class="hw-step-desc">Configure supported integrations.</p>
                        <span class="hw-step-arrow"><i class="bi bi-arrow-right"></i></span>
                    </div>

                    {{-- Step 5 --}}
                    <div class="hw-process-step">
                        <div class="hw-step-circle">
                            <i class="bi bi-patch-check"></i>
                        </div>
                        <span class="hw-step-num-badge">5. Go Live</span>
                        <h4 class="hw-step-title">Go Live &amp; Support</h4>
                        <p class="hw-step-desc">Test the setup and assist with launch.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- ====================================================================
         5. INTEGRATIONS SECTION (3 LARGE PANELS: DELIVERY, PAYMENTS, COMM)
         ==================================================================== --}}
    <section class="hw-integrations-section">
        <div class="hw-container">
            <div class="hw-sec-header">
                <div class="geni-section-eyebrow" style="justify-content: center;">
                    <span class="dash"></span>
                    <span>POWERFUL INTEGRATIONS</span>
                    <span class="dash"></span>
                </div>
                <h2 class="hw-sec-title">Connect with the Platforms Your Business Uses.</h2>
                <p class="hw-sec-desc">
                    Bring delivery, payments and customer communication together through supported integrations with Geni Menu.
                </p>
            </div>

            {{-- 3 Large Panels Grid --}}
            <div class="hw-integ-panels-grid">
                {{-- Panel 1: Food Delivery (Light Peach) --}}
                <div class="hw-integ-panel hw-panel-delivery">
                    <div class="hw-panel-top">
                        <div class="hw-panel-icon">
                            <i class="bi bi-scooter"></i>
                        </div>
                        <h3 class="hw-panel-heading">FOOD DELIVERY</h3>
                    </div>
                    <p class="hw-panel-desc">
                        Manage all your delivery orders in one unified system.
                    </p>

                    <div class="hw-logos-wrap">
                        <div class="hw-logo-tile" title="Swiggy">
                            <img src="{{ asset('assets/images/home/tile_swiggy.png') }}" alt="Swiggy Food Delivery">
                        </div>
                        <div class="hw-logo-tile" title="Zomato">
                            <img src="{{ asset('assets/images/home/icon_zomato.png') }}" alt="Zomato Food Delivery">
                        </div>
                        <div class="hw-logo-tile" title="Uber Eats">
                            <img src="{{ asset('assets/images/home/tile_ubereats.png') }}" alt="Uber Eats Delivery">
                        </div>
                        <div class="hw-logo-tile" title="DoorDash">
                            <img src="{{ asset('assets/images/home/tile_doordash.png') }}" alt="DoorDash Delivery">
                        </div>
                        <div class="hw-logo-tile" title="Deliveroo">
                            <img src="{{ asset('assets/images/home/tile_deliveroo.png') }}" alt="Deliveroo Delivery">
                        </div>
                    </div>
                </div>

                {{-- Panel 2: Payments (Light Blue) --}}
                <div class="hw-integ-panel hw-panel-payments">
                    <div class="hw-panel-top">
                        <div class="hw-panel-icon">
                            <i class="bi bi-wallet2"></i>
                        </div>
                        <h3 class="hw-panel-heading">PAYMENTS</h3>
                    </div>
                    <p class="hw-panel-desc">
                        Offer flexible, convenient and secure payment options.
                    </p>

                    <div class="hw-logos-wrap">
                        <div class="hw-logo-tile" title="PhonePe">
                            <img src="{{ asset('assets/images/home/tile_phonepe.png') }}" alt="PhonePe Payment">
                        </div>
                        <div class="hw-logo-tile" title="Google Pay">
                            <img src="{{ asset('assets/images/home/tile_gpay.png') }}" alt="Google Pay">
                        </div>
                        <div class="hw-logo-tile" title="Paytm">
                            <img src="{{ asset('assets/images/home/tile_paytm.png') }}" alt="Paytm Payment">
                        </div>
                        <div class="hw-logo-tile" title="Razorpay">
                            <img src="{{ asset('assets/images/home/tile_razorpay.png') }}" alt="Razorpay Payment Gateway">
                        </div>
                        <div class="hw-logo-tile" title="UPI">
                            <img src="{{ asset('assets/images/home/tile_upi.png') }}" alt="UPI Direct Payments">
                        </div>
                        <div class="hw-logo-tile" title="Stripe">
                            <img src="{{ asset('assets/images/home/tile_stripe.png') }}" alt="Stripe Global Payments">
                        </div>
                        <div class="hw-logo-tile" title="PayPal">
                            <img src="{{ asset('assets/images/home/tile_paypal.png') }}" alt="PayPal Payments">
                        </div>
                    </div>
                </div>

                {{-- Panel 3: Communication (Light Green) --}}
                <div class="hw-integ-panel hw-panel-comm">
                    <div class="hw-panel-top">
                        <div class="hw-panel-icon">
                            <i class="bi bi-whatsapp"></i>
                        </div>
                        <h3 class="hw-panel-heading">COMMUNICATION</h3>
                    </div>
                    <p class="hw-panel-desc">
                        Stay connected with your customers on channels they trust.
                    </p>

                    <div class="hw-comm-single-logo" title="WhatsApp Business Integration">
                        <img src="{{ asset('assets/images/home/tile_whatsapp.png') }}" alt="WhatsApp Business">
                        <span>WhatsApp Business</span>
                    </div>

                    <ul class="hw-comm-checklist">
                        <li>
                            <i class="bi bi-check-circle-fill"></i>
                            <span>Order updates and confirmations</span>
                        </li>
                        <li>
                            <i class="bi bi-check-circle-fill"></i>
                            <span>Customer notifications</span>
                        </li>
                        <li>
                            <i class="bi bi-check-circle-fill"></i>
                            <span>Offers and promotions</span>
                        </li>
                        <li>
                            <i class="bi bi-check-circle-fill"></i>
                            <span>Customer engagement</span>
                        </li>
                    </ul>
                </div>
            </div>


        </div>
    </section>



    {{-- ====================================================================
         7. FINAL CTA BANNER
         ==================================================================== --}}
    <section class="hw-cta-section">
        <div class="hw-cta-overlay"></div>
        <div class="hw-container">
            <div class="hw-cta-content-center">
                <div class="geni-section-eyebrow eyebrow-champagne" style="justify-content: center;">
                    <span class="dash"></span>
                    <span>LET'S BUILD YOUR CONNECTED SETUP</span>
                    <span class="dash"></span>
                </div>

                <h2 class="hw-cta-title">
                    Everything You Need. Connected and Ready.
                </h2>

                <p class="hw-cta-desc">
                    Get the right hardware, seamless integrations and professional setup with Geni Menu. Tell us about your requirements and our team will help you create a complete technology solution for your business.
                </p>

                <div class="hw-cta-actions">
                    <a href="{{ route('enquiry') }}" class="hw-btn hw-btn-primary">
                        <span>Request a Personalised Demo</span>
                        <span style="font-size: 15px;">&rarr;</span>
                    </a>
                    <a href="{{ route('contact.us') }}" class="hw-btn hw-btn-ghost-light">
                        <span>Talk to Our Team</span>
                    </a>
                </div>
            </div>
        </div>
    </section>

</div>

@endsection
