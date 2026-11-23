@php
    $meta = [
        'title' => 'Geni Menu Pricing | Restaurant Software Plans',
        'description' => 'Explore Geni Menu pricing plans and find the right restaurant management solution for your business. Get the tools you need to manage menus, orders and billing.',
        'keywords' => 'restaurants, hotels, menu, canteen, food, software, restaurant billing software with GST, GST billing software for cafe, offline restaurant POS software India, restaurant POS with UPI QR billing, cloud restaurant POS system, hospitality POS software, iPad POS for restaurants, quick service restaurant QSR POS, multi-unit restaurant enterprise software, restaurant software pricing, hotel billing software price, canteen software plans, digital menu cost, geni menu pricing',
        'og_title' => 'Geni Menu Pricing | Restaurant Software Plans',
        'og_description' => 'Explore Geni Menu pricing plans and find the right restaurant management solution for your business. Get the tools you need to manage menus, orders and billing.',
    ];
@endphp

@extends('layouts.frontend-master')

@section('content')

{{-- Import Fonts: Cinzel & Glacial Indifference (matching About Us) --}}
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@400;500;600;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://fonts.cdnfonts.com/css/glacial-indifference-2">

<style>
/* ==========================================================================
   GENI MENU - INTERNATIONAL PRICING PAGE STYLING
   Typography System:
     - Headings / Titles / Badges: Cinzel Regular (400), Uppercase
     - Body Texts / Descriptions / Lists: Glacial Indifference Regular (400)
   Brand Palette:
     - Dark Chocolate: #32180F
     - Deep Brown:     #451D0C
     - Warm Brown:     #572A13
     - Cream:          #FFF4E5
     - Light Peach:    #FCE8D2
     - Champagne Gold: #F5B947
     - Accent Orange:  #E99A24
     - White:          #FFFFFF
   ========================================================================== */

:root {
  --gm-dark-chocolate: #32180F;
  --gm-deep-brown:     #451D0C;
  --gm-brown:          #572A13;
  --gm-cream:          #FFF4E5;
  --gm-cream-light:    #FFFDF9;
  --gm-peach:          #FCE8D2;
  --gm-gold:           #F5B947;
  --gm-gold-hover:     #E99A24;
  --gm-text-dark:      #2A150D;
  --gm-text-muted:     #6D5F56;
  --gm-border-light:   #EBDED2;
  --gm-border-subtle:  #F2E7DC;

  --font-serif: 'Cinzel', serif;
  --font-sans:  'Glacial Indifference', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
}

* { box-sizing: border-box; }

body {
  background-color: #FFF4E5 !important;
}

.pricing-page-scope {
  font-family: 'Glacial Indifference', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif !important;
  font-weight: 400 !important;
  color: var(--gm-text-dark);
  background-color: #FFF4E5;
  line-height: 1.6;
  -webkit-font-smoothing: antialiased;
  overflow-x: hidden;
}

/* --------------------------------------------------------------------------
   TYPOGRAPHY ENFORCEMENT:
   1. Headings & Titles: Cinzel Regular, Uppercase
   -------------------------------------------------------------------------- */
.pricing-page-scope h1,
.pricing-page-scope h2,
.pricing-page-scope h3,
.pricing-page-scope h4,
.pricing-page-scope h5,
.pricing-page-scope h6,
.pricing-hero-title,
.card-plan-title,
.enterprise-main-title,
.enterprise-cap-title,
.comparison-title,
.final-cta-title,
.th-name,
.cat-title-text,
.card-tier-badge,
.pro-floating-badge,
.enterprise-eyebrow,
.enterprise-subhead,
.card-features-heading,
.phh-title {
  font-family: 'Cinzel', serif !important;
  text-transform: uppercase !important;
  font-weight: 400 !important;
  letter-spacing: 0.04em !important;
}

/* --------------------------------------------------------------------------
   2. Body Text & Descriptions: Glacial Indifference Regular
   -------------------------------------------------------------------------- */
.pricing-page-scope p,
.pricing-page-scope li,
.pricing-hero-desc,
.phh-sub,
.card-plan-desc,
.card-best-for,
.enterprise-main-desc,
.enterprise-cap-desc,
.enterprise-offering-item,
.comparison-subtitle,
.final-cta-desc,
.td-feature-name,
.tbl-badge-text,
.spec-text,
.cap-pill,
.cbf-val,
.cbf-label,
.card-price-period,
.card-price-note,
.enterprise-contact-note,
.cat-count-pill,
.th-price-sub {
  font-family: 'Glacial Indifference', sans-serif !important;
  font-weight: 400 !important;
}

/* Buttons: Glacial Indifference Bold */
.card-cta-btn,
.btn-contact-sales,
.btn-email-us,
.btn-discuss-req,
.final-cta-btn,
.btn-toggle-all-cats {
  font-family: 'Glacial Indifference', sans-serif !important;
  font-weight: 700 !important;
}

/* ==========================================================================
   1. HERO BANNER
   ========================================================================== */
.pricing-hero-section {
  position: relative;
  background-color: #1F0E07;
  background: linear-gradient(90deg, rgba(31, 14, 7, 0.92) 0%, rgba(31, 14, 7, 0.82) 48%, rgba(31, 14, 7, 0) 68%),
              url('{{ asset('assets/images/home/pricingheeroo.png') }}') right center / cover no-repeat;
  padding: 52px 24px 46px;
  color: #FFFFFF;
  overflow: hidden;
  border-bottom: 1px solid rgba(245, 185, 71, 0.12);
}

.pricing-hero-container {
  max-width: 1200px;
  margin: 0 auto;
  display: flex;
  align-items: center;
  justify-content: space-between;
  gap: 40px;
  position: relative;
  z-index: 2;
  min-height: 330px;
}

.pricing-hero-content {
  flex: 1 1 56%;
  max-width: 620px;
}

.pricing-hero-title {
  font-family: var(--font-serif);
  font-size: clamp(30px, 3.6vw, 42px);
  font-weight: 700;
  color: #FFFFFF;
  line-height: 1.18;
  margin: 0 0 12px;
  letter-spacing: -0.01em;
}

.pricing-hero-desc {
  font-size: 15.5px;
  color: #E6D8CA;
  line-height: 1.6;
  margin: 0 0 22px;
  max-width: 530px;
}

.pricing-hero-highlights {
  display: flex;
  flex-wrap: wrap;
  gap: 24px;
  align-items: center;
  padding-top: 4px;
}

.pricing-hero-highlight-item {
  display: flex;
  align-items: center;
  gap: 12px;
}

.phh-icon-box {
  width: 38px;
  height: 38px;
  display: flex;
  align-items: center;
  justify-content: center;
  color: var(--gm-gold);
  flex-shrink: 0;
}

.phh-icon-box svg {
  width: 26px;
  height: 26px;
  stroke: var(--gm-gold);
}

.phh-title {
  font-size: 14.5px;
  font-weight: 700;
  color: #FFFFFF;
  line-height: 1.25;
}

.phh-sub {
  font-size: 12.5px;
  color: #C8B7A6;
  margin-top: 2px;
}

.pricing-hero-visual {
  flex: 1 1 44%;
  display: flex;
  justify-content: center;
  align-items: center;
  position: relative;
  min-height: 330px;
}

/* On desktop, the tablet in the pricingheeroo.png background is displayed directly with perfect natural perspective */
.pricing-hero-visual img {
  display: none;
}

/* ==========================================================================
   2. PRICING PLANS (SIDE-BY-SIDE)
   ========================================================================== */
.pricing-plans-section {
  padding: 56px 20px 38px;
  background-color: #FFF4E5;
}

.pricing-plans-container {
  max-width: 900px;
  margin: 0 auto;
}

/* Pricing Region & Billing Switcher Header */
.pricing-region-header {
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;
  text-align: center;
  margin-bottom: 26px;
  gap: 10px;
  width: 100%;
  max-width: 100%;
  box-sizing: border-box;
  padding: 0 10px;
}

.country-selector-wrapper {
  position: relative;
  display: inline-block;
  z-index: 100;
}

.currency-badge-pill {
  display: inline-flex;
  align-items: center;
  gap: 8px;
  background: #572A13;
  color: #FFFFFF;
  padding: 8px 22px;
  border-radius: 9999px;
  border: 1px solid rgba(245, 185, 71, 0.35);
  box-shadow: 0 4px 14px rgba(87, 42, 19, 0.22);
  user-select: none;
  cursor: pointer;
  outline: none;
  transition: all 0.22s ease;
  font-family: inherit;
}

.currency-badge-pill:hover,
.currency-badge-pill:focus-visible {
  background: #451D0C;
  border-color: rgba(245, 185, 71, 0.65);
  box-shadow: 0 6px 18px rgba(87, 42, 19, 0.32);
  transform: translateY(-1px);
}

.curr-flag-icon {
  font-size: 16px;
  line-height: 1;
  display: inline-block;
}

.currency-globe-icon {
  width: 15px;
  height: 15px;
  stroke: currentColor;
  stroke-width: 2.2;
}

.curr-intl-label {
  color: #FFFFFF;
  font-family: 'Glacial Indifference', sans-serif !important;
  font-size: 14px;
  font-weight: 700 !important;
}

.curr-code-label {
  color: #F5B947;
  font-family: 'Glacial Indifference', sans-serif !important;
  font-size: 14px;
  font-weight: 700 !important;
  margin-left: 2px;
}

.curr-chevron-icon {
  width: 14px;
  height: 14px;
  stroke: #F5B947;
  stroke-width: 2.5;
  fill: none;
  stroke-linecap: round;
  stroke-linejoin: round;
  margin-left: 2px;
  transition: transform 0.22s ease;
}

.currency-badge-pill.is-open .curr-chevron-icon {
  transform: rotate(180deg);
}

/* Country Dropdown Menu */
.country-dropdown-menu {
  position: absolute;
  top: calc(100% + 10px);
  left: 50%;
  transform: translateX(-50%);
  width: 320px;
  max-width: 92vw;
  background: #27130D;
  border: 1px solid rgba(245, 185, 71, 0.45);
  border-radius: 16px;
  box-shadow: 0 16px 40px rgba(0, 0, 0, 0.45), 0 0 0 1px rgba(0, 0, 0, 0.2);
  z-index: 1050;
  padding: 10px;
  text-align: left;
  backdrop-filter: blur(8px);
}

.country-search-box {
  display: flex;
  align-items: center;
  gap: 8px;
  background: rgba(255, 255, 255, 0.08);
  border: 1px solid rgba(245, 185, 71, 0.25);
  border-radius: 10px;
  padding: 8px 12px;
  margin-bottom: 8px;
}

.country-search-icon {
  width: 14px;
  height: 14px;
  stroke: rgba(255, 255, 255, 0.6);
  stroke-width: 2;
  fill: none;
  stroke-linecap: round;
  stroke-linejoin: round;
  flex-shrink: 0;
}

.country-search-box input {
  background: transparent;
  border: none;
  color: #FFFFFF;
  font-family: 'Glacial Indifference', sans-serif !important;
  font-size: 13px;
  width: 100%;
  outline: none;
}

.country-search-box input::placeholder {
  color: rgba(255, 255, 255, 0.5);
}

.country-options-list {
  max-height: 280px;
  overflow-y: auto;
  scrollbar-width: thin;
  scrollbar-color: rgba(245, 185, 71, 0.4) transparent;
}

.country-options-list::-webkit-scrollbar {
  width: 6px;
}
.country-options-list::-webkit-scrollbar-thumb {
  background: rgba(245, 185, 71, 0.35);
  border-radius: 6px;
}

.country-option-row {
  display: flex;
  align-items: center;
  justify-content: space-between;
  padding: 8px 12px;
  border-radius: 8px;
  cursor: pointer;
  color: #FAF4ED;
  font-family: 'Glacial Indifference', sans-serif !important;
  font-size: 13.5px;
  transition: background 0.15s ease, color 0.15s ease;
}

.country-option-row:hover {
  background: rgba(245, 185, 71, 0.15);
  color: #FFFFFF;
}

.country-option-row.active {
  background: rgba(245, 185, 71, 0.25);
  color: #F5B947;
  font-weight: 700;
}

.country-opt-left {
  display: flex;
  align-items: center;
  gap: 10px;
  min-width: 0;
}

.country-opt-flag {
  font-size: 18px;
  line-height: 1;
  flex-shrink: 0;
}

.country-opt-name {
  white-space: nowrap;
  overflow: hidden;
  text-overflow: ellipsis;
}

.country-opt-currency {
  font-weight: 700;
  color: #F5B947;
  font-size: 12px;
  flex-shrink: 0;
  margin-left: 8px;
}

.pricing-billing-pill {
  display: inline-flex;
  align-items: center;
  gap: 8px;
  background: #FAF2E8;
  border: 1px solid rgba(197, 139, 80, 0.38);
  color: #572A13;
  font-family: 'Glacial Indifference', sans-serif !important;
  font-size: 13px;
  font-weight: 700 !important;
  padding: 6px 18px;
  border-radius: 9999px;
  box-shadow: 0 2px 8px rgba(87, 42, 19, 0.04);
  flex-wrap: wrap;
  justify-content: center;
  max-width: 100%;
  box-sizing: border-box;
}

.pill-text-curr {
  white-space: nowrap !important;
}

/* Billing Cycle Switch (Monthly / Yearly) */
.billing-toggle-container {
  display: flex;
  justify-content: center;
  align-items: center;
  margin: 4px 0 2px;
}

.billing-cycle-switch {
  display: inline-flex;
  align-items: center;
  background: rgba(87, 42, 19, 0.08);
  border: 1.5px solid rgba(87, 42, 19, 0.18);
  border-radius: 9999px;
  padding: 4px;
  gap: 4px;
  box-shadow: inset 0 2px 4px rgba(87, 42, 19, 0.06);
}

.billing-cycle-btn {
  display: inline-flex;
  align-items: center;
  gap: 6px;
  padding: 8px 22px;
  border-radius: 9999px;
  font-family: 'Glacial Indifference', sans-serif !important;
  font-size: 14px;
  font-weight: 700;
  color: #572A13;
  background: transparent;
  border: none;
  cursor: pointer;
  transition: all 0.22s cubic-bezier(0.16, 1, 0.3, 1);
  outline: none;
  user-select: none;
}

.billing-cycle-btn:hover:not(.active) {
  color: #27130D;
  background: rgba(87, 42, 19, 0.07);
}

.billing-cycle-btn.active {
  background: #32180F;
  color: #FFF8F0;
  box-shadow: 0 4px 14px rgba(50, 24, 15, 0.28);
}

.billing-cycle-discount {
  background: linear-gradient(135deg, #2E6930 0%, #1C4D1E 100%);
  color: #A3F5A8;
  border: 1px solid rgba(163, 245, 168, 0.35);
  font-size: 11px;
  font-weight: 700;
  text-transform: uppercase;
  letter-spacing: 0.3px;
  padding: 2.5px 8px;
  border-radius: 9999px;
  line-height: 1.2;
}

.billing-cycle-btn.active .billing-cycle-discount {
  background: #2E6930;
  color: #C8FFCE;
}

@media (max-width: 640px) {
  .billing-cycle-btn {
    padding: 7px 15px;
    font-size: 13px;
    gap: 4px;
  }
  .billing-cycle-discount {
    font-size: 10px;
    padding: 2px 6px;
  }
  .pricing-billing-pill {
    padding: 6px 14px !important;
    font-size: 11px !important;
    border-radius: 9999px !important;
    gap: 6px !important;
    width: auto !important;
    max-width: calc(100% - 16px) !important;
    margin: 0 auto !important;
    text-align: center !important;
    line-height: 1.4 !important;
    box-sizing: border-box !important;
    display: inline-flex !important;
    align-items: center !important;
    justify-content: center !important;
    flex-wrap: wrap !important;
  }
  .billing-pill-text {
    display: inline !important;
    font-size: 11px !important;
    line-height: 1.4 !important;
    text-align: center !important;
    word-break: normal !important;
  }
  .pill-text-curr {
    white-space: nowrap !important;
    display: inline-block !important;
  }
}

.save-discount-badge {
  background: linear-gradient(135deg, #2E6930 0%, #1C4D1E 100%);
  color: #A3F5A8;
  border: 1px solid rgba(163, 245, 168, 0.35);
  font-family: 'Glacial Indifference', sans-serif !important;
  font-size: 11px;
  font-weight: 700 !important;
  letter-spacing: 0.4px;
  text-transform: uppercase;
  padding: 2.5px 9px;
  border-radius: 9999px;
  line-height: 1.3;
  box-shadow: 0 2px 6px rgba(46, 105, 48, 0.2);
}

.billing-pill-text {
  display: inline-flex;
  align-items: center;
  gap: 6px;
  flex-wrap: wrap;
}

.pricing-cards-grid {
  display: grid;
  grid-template-columns: repeat(2, 1fr);
  gap: 36px;
  align-items: stretch;
}

.pricing-card {
  border-radius: 18px;
  padding: 28px 26px 26px;
  position: relative;
  display: flex;
  flex-direction: column;
  transition: transform 0.3s cubic-bezier(0.16, 1, 0.3, 1), box-shadow 0.3s cubic-bezier(0.16, 1, 0.3, 1);
}

.pricing-card:hover {
  transform: translateY(-4px);
}

/* Standard Plan Card */
.pricing-card-standard {
  background: #FAF2E8;
  border: 1px solid rgba(197, 139, 80, 0.28);
  box-shadow: 0 10px 28px rgba(50, 24, 15, 0.04);
}

.pricing-card-standard:hover {
  box-shadow: 0 14px 32px rgba(50, 24, 15, 0.08);
  border-color: rgba(197, 139, 80, 0.45);
}

/* Pro Plan Card */
.pricing-card-pro {
  background: #FAF2E8;
  border: 1.5px solid #F5B947;
  box-shadow: 0 10px 28px rgba(245, 185, 71, 0.16);
}

.pricing-card-pro:hover {
  box-shadow: 0 16px 36px rgba(245, 185, 71, 0.24);
  border-color: #E99A24;
}

/* Floating Golden Badge */
.pro-floating-badge {
  position: absolute;
  top: -12px;
  left: 50%;
  transform: translateX(-50%);
  background: var(--gm-gold);
  color: var(--gm-dark-chocolate);
  font-size: 10.5px;
  font-weight: 800;
  letter-spacing: 0.08em;
  padding: 5px 16px;
  border-radius: 9999px;
  box-shadow: 0 4px 12px rgba(245, 185, 71, 0.4);
  display: inline-flex;
  align-items: center;
  gap: 5px;
  white-space: nowrap;
  z-index: 5;
}

.pro-floating-badge svg {
  width: 12px;
  height: 12px;
  fill: currentColor;
}

.card-tier-badge {
  display: inline-block;
  align-self: flex-start;
  font-size: 10.5px;
  font-weight: 800;
  letter-spacing: 0.1em;
  text-transform: uppercase;
  color: var(--gm-dark-chocolate);
  background: var(--gm-peach);
  border: 1px solid rgba(87, 42, 19, 0.15);
  padding: 3px 10px;
  border-radius: 9999px;
  margin-bottom: 8px;
}

.card-tier-badge-gold {
  color: var(--gm-dark-chocolate);
  background: rgba(245, 185, 71, 0.35);
  border-color: rgba(233, 154, 36, 0.4);
}

/* Card Header */
.card-header-block {
  text-align: left;
  margin-bottom: 10px;
}

.card-plan-title {
  font-family: var(--font-serif);
  font-size: 22px;
  font-weight: 700;
  color: var(--gm-dark-chocolate);
  margin: 0 0 4px;
  line-height: 1.25;
}

.card-plan-desc {
  font-size: 13px;
  color: var(--gm-text-muted);
  margin: 0;
  line-height: 1.45;
}

.card-best-for {
  background: #F2E5D5;
  border: 1px solid rgba(197, 139, 80, 0.2);
  border-radius: 8px;
  padding: 6px 10px;
  font-size: 11.5px;
  margin-bottom: 12px;
  line-height: 1.4;
}

.card-best-for-gold {
  background: rgba(245, 185, 71, 0.18);
  border-color: rgba(245, 185, 71, 0.35);
}

.cbf-label {
  font-weight: 700;
  color: var(--gm-dark-chocolate);
  margin-right: 4px;
}

.cbf-val {
  color: var(--gm-text-muted);
}

/* 3 Quick Specs Row */
.card-specs-row {
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  gap: 6px;
  margin-bottom: 10px;
}

.card-spec-item {
  background: #FFFDF9;
  border: 1px solid rgba(197, 139, 80, 0.2);
  border-radius: 8px;
  padding: 6px 3px;
  text-align: center;
  display: flex;
  flex-direction: column;
  align-items: center;
  gap: 2px;
}

.pricing-card-pro .card-spec-item {
  background: #FFFDF9;
  border-color: rgba(245, 185, 71, 0.35);
}

.spec-icon {
  font-size: 13px;
}

.spec-text {
  font-size: 10.5px;
  font-weight: 700;
  color: var(--gm-dark-chocolate);
  line-height: 1.2;
}

/* Capability Chips */
.card-caps-row {
  display: flex;
  flex-wrap: wrap;
  gap: 5px;
  margin-bottom: 14px;
}

.cap-pill {
  font-size: 10.5px;
  font-weight: 600;
  color: var(--gm-dark-chocolate);
  background: #F2E5D5;
  border: 1px solid rgba(197, 139, 80, 0.2);
  padding: 2px 8px;
  border-radius: 9999px;
}

.pricing-card-pro .cap-pill {
  background: rgba(245, 185, 71, 0.18);
  border-color: rgba(245, 185, 71, 0.35);
}

/* Pricing Row */
.card-price-wrap {
  text-align: left;
  margin-bottom: 16px;
  display: flex;
  align-items: baseline;
  gap: 5px;
}

.card-price-num {
  font-size: 38px;
  font-weight: 800;
  color: var(--gm-dark-chocolate);
  line-height: 1;
  letter-spacing: -0.02em;
}

.card-price-period {
  font-size: 14px;
  font-weight: 600;
  color: var(--gm-text-muted);
}

.card-price-note {
  font-size: 11.5px;
  color: var(--gm-text-muted);
  margin-bottom: 16px;
}

/* CTA Buttons */
.card-cta-btn {
  display: flex;
  align-items: center;
  justify-content: center;
  gap: 8px;
  width: 100%;
  text-align: center;
  padding: 11.5px 24px;
  border-radius: 9999px;
  font-family: 'Glacial Indifference', sans-serif !important;
  font-size: 14px !important;
  font-weight: 700 !important;
  letter-spacing: 0.03em !important;
  text-decoration: none;
  cursor: pointer;
  transition: all 0.22s ease;
  margin-bottom: 20px;
}

.btn-arrow {
  display: inline-block;
  font-size: 15px;
  transition: transform 0.22s ease;
}

.card-cta-btn:hover .btn-arrow {
  transform: translateX(4px);
}

.btn-choose-standard {
  background: transparent !important;
  color: #32180F !important;
  border: 1.5px solid rgba(197, 139, 80, 0.65) !important;
}

.btn-choose-standard:hover {
  background: #32180F !important;
  border-color: #32180F !important;
  color: #FFF8F0 !important;
  transform: translateY(-2px);
  box-shadow: 0 6px 16px rgba(39, 19, 13, 0.20) !important;
}

.btn-choose-pro {
  background: linear-gradient(135deg, #F2C58D 0%, #E8BA80 100%) !important;
  color: #32180F !important;
  border: none !important;
  box-shadow: 0 4px 16px rgba(242, 197, 141, 0.28) !important;
}

.btn-choose-pro:hover {
  background: linear-gradient(135deg, #FFF8F0 0%, #F2C58D 100%) !important;
  color: #27130D !important;
  transform: translateY(-2px);
  box-shadow: 0 6px 22px rgba(242, 197, 141, 0.42) !important;
}

.card-features-heading {
  font-size: 10.5px;
  font-weight: 800;
  letter-spacing: 0.1em;
  text-transform: uppercase;
  color: var(--gm-dark-chocolate);
  padding-bottom: 8px;
  margin-bottom: 12px;
  border-bottom: 1px solid rgba(87, 42, 19, 0.12);
}

/* Feature Checklist */
.card-features-list {
  list-style: none;
  padding: 0;
  margin: 0;
  display: flex;
  flex-direction: column;
  gap: 9px;
}

.card-features-list li {
  display: flex;
  align-items: center;
  gap: 10px;
  font-size: 13px;
  color: var(--gm-text-dark);
  font-weight: 500;
}

.card-check-icon {
  width: 15px;
  height: 15px;
  flex-shrink: 0;
  color: var(--gm-dark-chocolate);
  stroke-width: 2.5;
}

/* ==========================================================================
   3. ENTERPRISE & CUSTOM SOLUTIONS SECTION
   ========================================================================== */
.enterprise-section {
  padding: 16px 20px 36px;
  background: #FFF4E5;
}

.enterprise-container {
  max-width: 900px;
  margin: 0 auto;
}

.enterprise-card {
  background: #FAF2E8;
  border: 1px solid rgba(197, 139, 80, 0.28);
  border-radius: 18px;
  padding: 30px 28px 28px;
  box-shadow: 0 10px 28px rgba(50, 24, 15, 0.04);
}

.enterprise-card-header {
  margin-bottom: 20px;
}

.enterprise-eyebrow {
  display: inline-block;
  font-size: 10.5px;
  font-weight: 800;
  letter-spacing: 0.1em;
  text-transform: uppercase;
  color: var(--gm-dark-chocolate);
  background: var(--gm-peach);
  border: 1px solid rgba(87, 42, 19, 0.15);
  padding: 3px 10px;
  border-radius: 9999px;
  margin-bottom: 8px;
}

.enterprise-main-title {
  font-family: var(--font-serif);
  font-size: 23px;
  font-weight: 700;
  color: var(--gm-dark-chocolate);
  margin: 0 0 6px;
  line-height: 1.25;
}

.enterprise-main-desc {
  font-size: 13px;
  color: var(--gm-text-muted);
  line-height: 1.55;
  margin: 0 0 16px;
  max-width: 760px;
}

/* Contact CTAs Row */
.enterprise-cta-row {
  display: flex;
  align-items: center;
  flex-wrap: wrap;
  gap: 10px;
  margin-bottom: 6px;
}

.btn-contact-sales {
  display: inline-flex;
  align-items: center;
  gap: 8px;
  background: linear-gradient(135deg, #F2C58D 0%, #E8BA80 100%) !important;
  color: #32180F !important;
  font-family: 'Glacial Indifference', sans-serif !important;
  font-size: 14px !important;
  font-weight: 700 !important;
  letter-spacing: 0.03em !important;
  padding: 11.5px 24px !important;
  border-radius: 9999px !important;
  border: none !important;
  text-decoration: none;
  box-shadow: 0 4px 16px rgba(242, 197, 141, 0.28) !important;
  transition: all 0.22s ease;
  cursor: pointer;
}

.btn-contact-sales:hover {
  background: linear-gradient(135deg, #FFF8F0 0%, #F2C58D 100%) !important;
  color: #27130D !important;
  transform: translateY(-2px);
  box-shadow: 0 6px 22px rgba(242, 197, 141, 0.42) !important;
}

.btn-email-us {
  display: inline-flex;
  align-items: center;
  gap: 8px;
  background: transparent !important;
  color: #32180F !important;
  font-family: 'Glacial Indifference', sans-serif !important;
  font-size: 14px !important;
  font-weight: 700 !important;
  letter-spacing: 0.03em !important;
  padding: 11px 24px !important;
  border-radius: 9999px !important;
  border: 1.5px solid rgba(197, 139, 80, 0.65) !important;
  text-decoration: none;
  transition: all 0.22s ease;
  cursor: pointer;
}

.btn-email-us:hover {
  background: #32180F !important;
  border-color: #32180F !important;
  color: #FFF8F0 !important;
  transform: translateY(-2px);
  box-shadow: 0 6px 16px rgba(39, 19, 13, 0.20) !important;
}

.enterprise-contact-note {
  font-size: 11.5px;
  color: var(--gm-text-muted);
  margin-top: 4px;
}

/* Section Divider */
.enterprise-divider {
  height: 1px;
  background: var(--gm-border-subtle);
  margin: 20px 0 18px;
}

/* Section Subhead */
.enterprise-subhead {
  font-size: 11.5px;
  font-weight: 800;
  letter-spacing: 0.1em;
  text-transform: uppercase;
  color: var(--gm-dark-chocolate);
  margin: 0 0 12px;
}

/* 4 Capabilities Grid */
.enterprise-caps-grid {
  display: grid;
  grid-template-columns: repeat(2, 1fr);
  gap: 10px;
}

.enterprise-cap-card {
  background: #FFFDF9;
  border: 1px solid rgba(197, 139, 80, 0.2);
  border-radius: 10px;
  padding: 12px 14px;
  display: flex;
  align-items: flex-start;
  gap: 10px;
}

.enterprise-cap-icon {
  width: 32px;
  height: 32px;
  border-radius: 7px;
  background: var(--gm-peach);
  color: var(--gm-dark-chocolate);
  display: flex;
  align-items: center;
  justify-content: center;
  flex-shrink: 0;
}

.enterprise-cap-icon svg {
  width: 16px;
  height: 16px;
}

.enterprise-cap-title {
  font-size: 13px;
  font-weight: 700;
  color: var(--gm-dark-chocolate);
  margin: 0 0 2px;
  line-height: 1.3;
}

.enterprise-cap-desc {
  font-size: 11.5px;
  color: var(--gm-text-muted);
  margin: 0;
  line-height: 1.45;
}

/* Offerings 2-Column List */
.enterprise-offerings-grid {
  display: grid;
  grid-template-columns: repeat(2, 1fr);
  gap: 8px 16px;
  margin-bottom: 20px;
}

.enterprise-offering-item {
  display: flex;
  align-items: center;
  gap: 9px;
  font-size: 12.5px;
  color: var(--gm-text-dark);
  font-weight: 500;
}

.enterprise-offering-icon {
  width: 14px;
  height: 14px;
  flex-shrink: 0;
  color: var(--gm-dark-chocolate);
  stroke-width: 2.5;
}

/* Bottom Action Row */
.enterprise-bottom-action {
  display: flex;
  justify-content: flex-start;
  align-items: center;
  margin-top: 4px;
}

.btn-discuss-req {
  display: inline-flex;
  align-items: center;
  gap: 8px;
  background: linear-gradient(135deg, #F2C58D 0%, #E8BA80 100%) !important;
  color: #32180F !important;
  font-family: 'Glacial Indifference', sans-serif !important;
  font-size: 14px !important;
  font-weight: 700 !important;
  letter-spacing: 0.03em !important;
  padding: 11.5px 24px !important;
  border-radius: 9999px !important;
  border: none !important;
  box-shadow: 0 4px 16px rgba(242, 197, 141, 0.28) !important;
  text-decoration: none;
  transition: all 0.22s ease;
  cursor: pointer;
}

.btn-discuss-req:hover {
  background: linear-gradient(135deg, #FFF8F0 0%, #F2C58D 100%) !important;
  color: #27130D !important;
  transform: translateY(-2px);
  box-shadow: 0 6px 22px rgba(242, 197, 141, 0.42) !important;
}

/* ==========================================================================
   4. PLAN COMPARISON TABLE
   ========================================================================== */
.comparison-section {
  padding: 48px 24px 60px;
  background: #FFF4E5;
}

.comparison-container {
  max-width: 960px;
  margin: 0 auto;
}

.comparison-header-block {
  display: flex;
  justify-content: space-between;
  align-items: flex-end;
  margin-bottom: 26px;
  flex-wrap: wrap;
  gap: 16px;
}

.comparison-title {
  font-family: var(--font-serif);
  font-size: 32px;
  font-weight: 700;
  color: var(--gm-dark-chocolate);
  margin: 0;
}

.comparison-subtitle {
  font-size: 14.5px;
  color: var(--gm-text-muted);
  margin: 0;
}

.comparison-table-wrapper {
  background: #FAF2E8;
  border: 1px solid rgba(197, 139, 80, 0.28);
  border-radius: 20px;
  overflow: hidden;
  box-shadow: 0 10px 28px rgba(50, 24, 15, 0.04);
}

.comparison-table {
  width: 100%;
  border-collapse: collapse;
  table-layout: fixed;
}

.comparison-table th {
  padding: 18px 20px 16px;
  text-align: center;
  vertical-align: middle;
}

.comparison-table th.col-feature {
  width: 44%;
  text-align: left;
  background: #F0E3D3;
  border-bottom: 1.5px solid rgba(197, 139, 80, 0.28);
}

.comparison-table th.col-standard {
  width: 28%;
  background: #FAF2E8;
  border-bottom: 1.5px solid rgba(197, 139, 80, 0.28);
  border-left: 1px solid rgba(197, 139, 80, 0.2);
  border-right: 1px solid rgba(197, 139, 80, 0.2);
}

.comparison-table th.col-pro {
  width: 28%;
  background: #32180F;
  color: #FFFFFF;
  border-bottom: 1.5px solid #32180F;
}

.th-header-pill {
  display: inline-flex;
  align-items: center;
  justify-content: center;
  padding: 5.5px 18px;
  border-radius: 9999px;
  font-family: 'Cinzel', serif !important;
  font-size: 14.5px !important;
  font-weight: 700 !important;
  letter-spacing: 0.08em !important;
  text-transform: uppercase !important;
  margin-bottom: 5px;
  line-height: 1.25;
  box-sizing: border-box;
}

.th-pill-feature {
  background: rgba(87, 42, 19, 0.10);
  color: #32180F;
  border: 1.5px solid rgba(87, 42, 19, 0.18);
}

.th-pill-standard {
  background: #FFFFFF;
  color: #32180F;
  border: 1.5px solid rgba(197, 139, 80, 0.45);
  box-shadow: 0 2px 8px rgba(50, 24, 15, 0.05);
}

.th-pill-pro {
  background: linear-gradient(135deg, #F2C58D 0%, #E8BA80 100%);
  color: #32180F;
  border: 1.5px solid transparent;
  box-shadow: 0 3px 12px rgba(242, 197, 141, 0.32);
}

.th-name {
  font-family: var(--font-serif);
  font-size: 18px;
  font-weight: 700;
  margin-bottom: 3px;
  text-transform: uppercase;
}

.col-standard .th-name { color: var(--gm-dark-chocolate); }
.col-pro .th-name { color: #FFFFFF; }

.th-price-sub {
  font-family: 'Glacial Indifference', sans-serif !important;
  font-size: 12px;
  font-weight: 700;
  letter-spacing: 0.06em;
  text-transform: uppercase;
}

.th-feature-sub { color: var(--gm-text-muted); }
.col-standard .th-price-sub { color: var(--gm-text-muted); }
.col-pro .th-price-sub { color: #F5B947; }

/* Table Body */
.comparison-table td {
  padding: 13px 20px;
  border-bottom: 1px solid rgba(197, 139, 80, 0.18);
  font-size: 14px;
  vertical-align: middle;
  transition: background-color 0.15s ease;
}

.comparison-table tr:last-child td {
  border-bottom: none;
}

.comparison-table tr:hover td {
  background-color: #F4E7D7;
}

.comparison-category-row {
  cursor: pointer;
  user-select: none;
}

.comparison-category-row td {
  background: #EFE2D1 !important;
  font-family: var(--font-sans);
  font-size: 13px;
  font-weight: 800;
  letter-spacing: 0.06em;
  text-transform: uppercase;
  color: var(--gm-dark-chocolate);
  padding: 12px 20px;
  border-top: 1.5px solid rgba(197, 139, 80, 0.28);
  border-bottom: 1px solid rgba(197, 139, 80, 0.28);
  transition: background-color 0.2s ease;
}

.comparison-category-row:hover td {
  background: #E7D7C3 !important;
}

.cat-header-inner {
  display: flex;
  align-items: center;
  gap: 12px;
}

.cat-toggle-btn {
  width: 24px;
  height: 24px;
  border-radius: 50%;
  background: var(--gm-dark-chocolate);
  color: #FFFFFF;
  display: inline-flex;
  align-items: center;
  justify-content: center;
  flex-shrink: 0;
  transition: background 0.2s ease, transform 0.2s ease;
}

.comparison-category-row:hover .cat-toggle-btn {
  transform: scale(1.08);
}

.cat-plus-icon {
  width: 14px;
  height: 14px;
  stroke: currentColor;
  stroke-width: 2.6;
}

.cat-vert-line {
  transition: transform 0.25s cubic-bezier(0.16, 1, 0.3, 1), opacity 0.2s ease;
  transform-origin: center;
}

.comparison-category-row.is-open .cat-toggle-btn {
  background: var(--gm-gold);
  color: var(--gm-dark-chocolate);
}

.comparison-category-row.is-open .cat-vert-line {
  opacity: 0;
  transform: scaleY(0);
}

.cat-title-text {
  flex: 1;
}

.cat-count-pill {
  font-size: 11px;
  font-weight: 700;
  text-transform: none;
  letter-spacing: normal;
  color: var(--gm-text-muted);
  background: rgba(87, 42, 19, 0.08);
  padding: 2px 10px;
  border-radius: 9999px;
}

.btn-toggle-all-cats {
  background: #FAF2E8 !important;
  color: #32180F !important;
  border: 1.5px solid rgba(197, 139, 80, 0.5) !important;
  font-family: 'Glacial Indifference', sans-serif !important;
  font-size: 13.5px !important;
  font-weight: 700 !important;
  letter-spacing: 0.03em !important;
  padding: 8px 18px !important;
  border-radius: 9999px !important;
  cursor: pointer;
  transition: all 0.22s ease;
  white-space: nowrap;
}

.btn-toggle-all-cats:hover {
  background: #32180F !important;
  border-color: #32180F !important;
  color: #FFF8F0 !important;
  transform: translateY(-1px);
  box-shadow: 0 4px 12px rgba(39, 19, 13, 0.15) !important;
}

.tbl-badge-text {
  display: inline-block;
  font-size: 12px;
  font-weight: 700;
  color: var(--gm-dark-chocolate);
  background: #EFE3D3;
  padding: 2px 9px;
  border-radius: 9999px;
  border: 1px solid rgba(197, 139, 80, 0.24);
}

.tbl-badge-addon {
  background: rgba(245, 185, 71, 0.25);
  border-color: rgba(233, 154, 36, 0.4);
  color: var(--gm-dark-chocolate);
}

.td-feature-title {
  display: flex;
  align-items: center;
  gap: 14px;
  font-weight: 600;
  color: var(--gm-dark-chocolate);
}

.td-feature-name {
  font-weight: 600;
  color: var(--gm-dark-chocolate);
}

.feature-inline-icon {
  width: 32px;
  height: 32px;
  border-radius: 8px;
  background: #FAF4ED;
  color: var(--gm-dark-chocolate);
  display: flex;
  align-items: center;
  justify-content: center;
  flex-shrink: 0;
}

.feature-inline-icon svg {
  width: 17px;
  height: 17px;
}

.td-center-val {
  text-align: center;
  font-weight: 600;
  color: var(--gm-dark-chocolate);
}

.tbl-check-icon {
  width: 20px;
  height: 20px;
  color: var(--gm-dark-chocolate);
  stroke-width: 2.8;
  display: inline-block;
  vertical-align: middle;
}

.tbl-dash {
  color: #A3968B;
  font-weight: 700;
  font-size: 18px;
}

/* ==========================================================================
   5. FINAL CTA FULL-WIDTH SECTION
   ========================================================================== */
.final-cta-section {
  position: relative;
  width: 100%;
  background: #241108 url('{{ asset('assets/images/home/pricingcta.png') }}') center center / cover no-repeat;
  padding: 48px 24px 52px;
  display: flex;
  align-items: center;
  justify-content: center;
  text-align: center;
  overflow: hidden;
}

.final-cta-section::before {
  content: '';
  position: absolute;
  inset: 0;
  background: linear-gradient(180deg, rgba(50, 24, 15, 0.74) 0%, rgba(69, 29, 12, 0.64) 50%, rgba(50, 24, 15, 0.80) 100%);
  pointer-events: none;
  z-index: 1;
}

.final-cta-inner {
  position: relative;
  z-index: 2;
  max-width: 740px;
  margin: 0 auto;
  display: flex;
  flex-direction: column;
  align-items: center;
  text-align: center;
}

.final-cta-eyebrow {
  display: inline-flex;
  align-items: center;
  gap: 8px;
  font-family: 'Cinzel', serif !important;
  font-size: 11.5px;
  font-weight: 500 !important;
  letter-spacing: 0.12em !important;
  text-transform: uppercase !important;
  color: #F5B947;
  margin-bottom: 8px;
  text-shadow: 0 1px 8px rgba(0, 0, 0, 0.4);
}

.final-cta-eyebrow .eyebrow-dash {
  width: 18px;
  height: 1.5px;
  background: #F5B947;
  display: inline-block;
}

.final-cta-title {
  font-family: 'Cinzel', serif !important;
  font-size: clamp(20px, 2.4vw, 30px);
  font-weight: 400 !important;
  color: #FFFFFF;
  line-height: 1.28;
  margin: 0 0 10px;
  text-transform: uppercase !important;
  letter-spacing: 0.04em !important;
  text-shadow: 0 2px 14px rgba(0, 0, 0, 0.45);
}

.final-cta-desc {
  font-size: 13.5px;
  color: #F8EFE4;
  line-height: 1.55;
  max-width: 650px;
  margin: 0 0 20px;
  text-shadow: 0 1px 8px rgba(0, 0, 0, 0.4);
}

.final-cta-btn-wrap {
  display: flex;
  align-items: center;
  justify-content: center;
  gap: 14px;
  flex-wrap: wrap;
}

.final-cta-btn-primary {
  display: inline-flex;
  align-items: center;
  gap: 8px;
  background: linear-gradient(135deg, #F2C58D 0%, #E8BA80 100%) !important;
  color: #32180F !important;
  font-family: 'Glacial Indifference', sans-serif !important;
  font-size: 14px !important;
  font-weight: 700 !important;
  letter-spacing: 0.03em !important;
  padding: 11.5px 24px !important;
  border-radius: 9999px !important;
  border: none !important;
  text-decoration: none;
  box-shadow: 0 4px 16px rgba(242, 197, 141, 0.28) !important;
  transition: all 0.22s ease;
  cursor: pointer;
}

.final-cta-btn-primary:hover {
  background: linear-gradient(135deg, #FFF8F0 0%, #F2C58D 100%) !important;
  color: #27130D !important;
  transform: translateY(-2px);
  box-shadow: 0 6px 22px rgba(242, 197, 141, 0.42) !important;
}

.final-cta-btn-primary .arrow,
.final-cta-btn-secondary .arrow {
  transition: transform 0.22s ease;
  display: inline-block;
  font-size: 15px;
}

.final-cta-btn-primary:hover .arrow,
.final-cta-btn-secondary:hover .arrow {
  transform: translateX(4px);
}

.final-cta-btn-secondary {
  display: inline-flex;
  align-items: center;
  gap: 8px;
  background-color: transparent !important;
  color: #FFF8F0 !important;
  font-family: 'Glacial Indifference', sans-serif !important;
  font-size: 14px !important;
  font-weight: 700 !important;
  letter-spacing: 0.03em !important;
  padding: 11px 24px !important;
  border-radius: 9999px !important;
  border: 1.5px solid rgba(242, 197, 141, 0.60) !important;
  text-decoration: none;
  transition: all 0.22s ease;
  cursor: pointer;
}

.final-cta-btn-secondary:hover {
  background-color: rgba(242, 197, 141, 0.15) !important;
  border-color: #F2C58D !important;
  color: #F2C58D !important;
  transform: translateY(-2px);
  box-shadow: 0 4px 16px rgba(242, 197, 141, 0.20) !important;
}

/* ==========================================================================
   RESPONSIVE BREAKPOINTS
   ========================================================================== */
.comparison-mobile-hint {
  display: none;
}

@media (max-width: 992px) {
  .pricing-hero-section {
    background-image: linear-gradient(180deg, rgba(31, 14, 7, 0.94) 0%, rgba(31, 14, 7, 0.90) 100%),
                      url('{{ asset('assets/images/home/pricingheeroo.png') }}');
    background-position: center;
    padding: 42px 20px 36px;
  }
  .pricing-hero-container {
    flex-direction: column;
    text-align: left !important;
    align-items: flex-start !important;
    min-height: auto;
  }
  .pricing-hero-content {
    max-width: 100%;
    text-align: left !important;
  }
  .pricing-hero-title {
    text-align: left !important;
  }
  .pricing-hero-desc {
    text-align: left !important;
    margin-left: 0 !important;
    margin-right: 0 !important;
  }
  .pricing-hero-highlights {
    justify-content: flex-start !important;
    align-items: flex-start !important;
  }
  .pricing-hero-visual {
    min-height: auto;
    width: 100%;
    margin-top: 24px;
  }
  .pricing-hero-visual img {
    display: block;
    max-width: 100%;
    width: 360px;
    height: auto;
    object-fit: contain;
    filter: drop-shadow(0 15px 30px rgba(0, 0, 0, 0.45));
  }
  .final-cta-section {
    padding: 40px 18px 44px;
  }
}

@media (max-width: 768px) {
  .pricing-hero-section {
    padding: 36px 16px 28px;
  }
  .pricing-plans-section {
    padding: 42px 16px 32px;
  }
  .pricing-cards-grid {
    grid-template-columns: 1fr;
    max-width: 440px;
    margin: 0 auto;
    gap: 36px;
  }
  .enterprise-section {
    padding: 24px 16px 44px;
  }
  .enterprise-card {
    padding: 24px 18px;
    max-width: 540px;
    margin: 0 auto;
  }
  .enterprise-caps-grid {
    grid-template-columns: 1fr;
    gap: 10px;
  }
  .enterprise-offerings-grid {
    grid-template-columns: 1fr;
    gap: 8px;
  }
  .enterprise-cta-row {
    flex-direction: column !important;
    align-items: center !important;
    justify-content: center !important;
    gap: 12px !important;
    width: 100% !important;
  }
  .btn-contact-sales,
  .btn-email-us,
  .btn-discuss-req {
    width: 100% !important;
    max-width: 380px !important;
    justify-content: center !important;
    text-align: center !important;
    box-sizing: border-box !important;
  }
  .btn-email-us {
    font-size: 13px !important;
    padding: 10px 16px !important;
    word-break: normal !important;
    white-space: nowrap !important;
    display: inline-flex !important;
    align-items: center !important;
    justify-content: center !important;
    gap: 8px !important;
  }
  .btn-email-us svg {
    flex-shrink: 0 !important;
    width: 15px !important;
    height: 15px !important;
  }
  .btn-email-us span {
    white-space: nowrap !important;
  }
  .enterprise-bottom-action {
    justify-content: center;
  }
  .comparison-section {
    padding: 38px 16px 48px;
  }
  .comparison-header-block {
    flex-direction: column;
    align-items: flex-start;
    gap: 12px;
  }
  .btn-toggle-all-cats {
    align-self: flex-start;
  }
  .comparison-mobile-hint {
    display: none !important;
  }
  .comparison-table-wrapper {
    overflow-x: auto;
    -webkit-overflow-scrolling: touch;
    border-radius: 14px;
    width: 100%;
  }
  .comparison-table {
    width: 100% !important;
    min-width: 100% !important;
    table-layout: fixed !important;
  }
  .comparison-table th {
    padding: 12px 6px 10px !important;
    vertical-align: middle !important;
  }
  .comparison-table th.col-feature {
    width: 38% !important;
    padding: 12px 8px 10px !important;
    background: #F0E3D3 !important;
  }
  .comparison-table th.col-standard {
    width: 31% !important;
    padding: 12px 4px 10px !important;
    text-align: center !important;
    background: #FAF2E8 !important;
  }
  .comparison-table th.col-pro {
    width: 31% !important;
    padding: 12px 4px 10px !important;
    text-align: center !important;
    background: #32180F !important;
  }
  .th-header-pill {
    padding: 4px 8px !important;
    font-size: 11px !important;
    letter-spacing: 0.04em !important;
    margin-bottom: 4px !important;
    min-height: 26px !important;
    box-sizing: border-box !important;
  }
  .th-pill-standard {
    border: 1.5px solid rgba(197, 139, 80, 0.45) !important;
  }
  .th-pill-pro {
    border: 1.5px solid transparent !important;
  }
  .th-price-sub {
    font-size: 10px !important;
    letter-spacing: 0.02em !important;
    white-space: nowrap !important;
    line-height: 1.2 !important;
  }
  .comparison-table td {
    padding: 9px 6px !important;
    font-size: 12px !important;
  }
  .comparison-table td.td-feature-name {
    font-size: 11.5px !important;
    padding: 9px 8px !important;
    line-height: 1.3 !important;
  }
  .comparison-table td.td-center-val {
    padding: 9px 4px !important;
    text-align: center !important;
  }
  .tbl-check-icon {
    width: 16px !important;
    height: 16px !important;
  }
  .tbl-dash {
    font-size: 14px !important;
  }
  .cat-header-inner {
    padding: 2px 0 !important;
    gap: 8px !important;
  }
  .cat-title-text {
    font-size: 12px !important;
  }
  .cat-count-pill {
    font-size: 9.5px !important;
    padding: 2px 6px !important;
  }
  .final-cta-btn-wrap {
    display: flex !important;
    flex-direction: row !important;
    align-items: center !important;
    justify-content: center !important;
    width: 100% !important;
    gap: 10px !important;
  }
  .final-cta-btn-primary,
  .final-cta-btn-secondary {
    flex: 1 1 0 !important;
    width: auto !important;
    min-width: 0 !important;
    padding: 11px 8px !important;
    font-size: 12.5px !important;
    white-space: nowrap !important;
    justify-content: center !important;
    text-align: center !important;
    box-sizing: border-box !important;
    letter-spacing: 0.01em !important;
  }
}

@media (max-width: 576px) {
  .final-cta-btn-wrap {
    gap: 6px !important;
  }
  .final-cta-btn-primary,
  .final-cta-btn-secondary {
    padding: 10px 5px !important;
    font-size: 11.5px !important;
  }
  .final-cta-btn-wrap .hide-on-mobile {
    display: none !important;
  }
  .pricing-hero-section {
    padding: 30px 14px 24px;
  }
  .pricing-hero-title {
    font-size: 24px !important;
    line-height: 1.22;
  }
  .pricing-hero-desc {
    font-size: 13.5px;
    margin-bottom: 18px;
  }
  .pricing-hero-highlights {
    flex-direction: column;
    align-items: flex-start !important;
    justify-content: flex-start !important;
    gap: 14px;
  }
  .pricing-hero-highlight-item {
    width: 100%;
    max-width: 100% !important;
    justify-content: flex-start !important;
    text-align: left !important;
  }
  .pricing-plans-section {
    padding: 32px 12px 24px;
  }
  .pricing-card {
    padding: 22px 14px;
  }
  .card-specs-row {
    gap: 4px;
  }
  .card-spec-item {
    padding: 6px 3px;
  }
  .spec-text {
    font-size: 9.5px;
  }
  .card-price-num {
    font-size: 32px;
  }
  .enterprise-section {
    padding: 16px 12px 36px;
  }
  .enterprise-card {
    padding: 20px 14px;
  }
  .enterprise-main-title {
    font-size: 19px;
  }
  .enterprise-cap-card {
    padding: 10px 12px;
  }
  .comparison-section {
    padding: 30px 12px 40px;
  }
  .comparison-title {
    font-size: 20px;
  }
  .final-cta-section {
    padding: 34px 14px 38px;
  }
  .final-cta-eyebrow {
    font-size: 10.5px;
  }
  .final-cta-heading {
    font-size: 19px;
  }
  .final-cta-desc {
    font-size: 13px;
  }
}

@media (max-width: 380px) {
  .final-cta-btn-primary,
  .final-cta-btn-secondary {
    padding: 9px 4px !important;
    font-size: 10.5px !important;
  }
  .btn-email-us {
    font-size: 11.5px !important;
    padding: 9px 10px !important;
    gap: 6px !important;
  }
  .btn-email-us svg {
    width: 13px !important;
    height: 13px !important;
  }
}
</style>

<div class="pricing-page-scope">

  {{-- =========================================================================
       1. HERO BANNER
       ========================================================================= --}}
  <section class="pricing-hero-section">
    <div class="pricing-hero-container">
      
      {{-- Left Content --}}
      <div class="pricing-hero-content">
        <h1 class="pricing-hero-title">Transparent Pricing. Powerful Possibilities.</h1>
        <p class="pricing-hero-desc">Choose a plan that aligns with your business needs. Get the right tools, features and flexibility to deliver a better dining experience.</p>
        
        {{-- Three feature highlights with icons --}}
        <div class="pricing-hero-highlights">
          
          <div class="pricing-hero-highlight-item">
            <div class="phh-icon-box">
              <svg fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <rect x="2" y="7" width="20" height="14" rx="2" ry="2"></rect>
                <path d="M16 21V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16"></path>
              </svg>
            </div>
            <div>
              <div class="phh-title">Flexible Plans</div>
              <div class="phh-sub">Options for Every Business</div>
            </div>
          </div>

          <div class="pricing-hero-highlight-item">
            <div class="phh-icon-box">
              <svg fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <polygon points="13 2 3 14 12 14 11 22 21 10 12 10 13 2"></polygon>
              </svg>
            </div>
            <div>
              <div class="phh-title">Powerful Capabilities</div>
              <div class="phh-sub">Everything in One Platform</div>
            </div>
          </div>

          <div class="pricing-hero-highlight-item">
            <div class="phh-icon-box">
              <svg fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <polyline points="23 6 13.5 15.5 8.5 10.5 1 18"></polyline>
                <polyline points="17 6 23 6 23 12"></polyline>
              </svg>
            </div>
            <div>
              <div class="phh-title">Scalable Solutions</div>
              <div class="phh-sub">Built for Business Growth</div>
            </div>
          </div>

        </div>
      </div>

      {{-- Right Visual: Digital Menu Tablet Mockup (for mobile/tablet screens) --}}
      <div class="pricing-hero-visual">
        <img src="{{ asset('assets/images/pricing_hero_tablet_heeroo.png') }}" alt="Geni Menu Restaurant Digital Menu Tablet Mockup">
      </div>

    </div>
  </section>

  {{-- =========================================================================
       2. PRICING PLANS (SIDE BY SIDE)
       ========================================================================= --}}
  <section class="pricing-plans-section">
    <div class="pricing-plans-container">

      {{-- Regional Badge & Light Brown Annual Billing Pill --}}
      <div class="pricing-region-header">
        <div class="country-selector-wrapper" id="country-selector-wrapper">
          <button type="button" class="currency-badge-pill" id="country-select-btn" onclick="toggleCountryDropdown(event)" aria-haspopup="true" aria-expanded="false" title="Click to choose country and currency">
            <span id="selected-country-flag" class="curr-flag-icon">🌐</span>
            <span class="curr-intl-label" id="selected-country-name">International</span>
            <span class="curr-code-label" id="selected-currency-label">$ USD</span>
            <svg class="curr-chevron-icon" id="country-chevron" viewBox="0 0 24 24">
              <polyline points="6 9 12 15 18 9"></polyline>
            </svg>
          </button>

          {{-- Country Dropdown Menu --}}
          <div class="country-dropdown-menu" id="country-dropdown-menu" style="display: none;">
            <div class="country-search-box">
              <svg viewBox="0 0 24 24" class="country-search-icon">
                <circle cx="11" cy="11" r="8"></circle>
                <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
              </svg>
              <input type="text" id="country-search-input" placeholder="Search country or currency..." onkeyup="filterCountryList(this.value)" autocomplete="off">
            </div>
            <div class="country-options-list" id="country-options-list">
              {{-- Populated dynamically via JavaScript --}}
            </div>
          </div>
        </div>

        {{-- Monthly / Yearly Billing Cycle Toggle --}}
        <div class="billing-toggle-container">
          <div class="billing-cycle-switch" role="tablist" aria-label="Billing cycle selector">
            <button type="button" class="billing-cycle-btn" id="btn-billing-monthly" onclick="setBillingCycle('monthly')" role="tab" aria-selected="false">
              Monthly
            </button>
            <button type="button" class="billing-cycle-btn active" id="btn-billing-yearly" onclick="setBillingCycle('yearly')" role="tab" aria-selected="true">
              Yearly
              <span class="billing-cycle-discount">Save 15%</span>
            </button>
          </div>
        </div>

        <div class="pricing-billing-pill" id="pricing-billing-pill">
          <span class="save-discount-badge">Save up to 15%</span>
          <span class="billing-pill-text">
            <span class="pill-text-core">Billed annually &bull; Software subscription only</span>
            <span class="pill-text-curr">&bull;&nbsp;Prices&nbsp;in&nbsp;<strong id="billing-curr-code">USD</strong></span>
          </span>
        </div>
      </div>

      <div class="pricing-cards-grid">

        {{-- SILVER TIER (ESSENTIAL OPERATIONS) --}}
        <div class="pricing-card pricing-card-standard">
          <div class="card-tier-badge">Silver</div>

          <div class="card-header-block">
            <h3 class="card-plan-title">Essential Operations</h3>
            <p class="card-plan-desc">Core setup to run fast POS counter billing, QR menu, and everyday sales operations smoothly.</p>
          </div>

          <div class="card-best-for">
            <span class="cbf-label">Best for:</span>
            <span class="cbf-val">Cafes, QSR, Takeaway & Small Outlets</span>
          </div>

          {{-- 3 Quick Specs Pills --}}
          <div class="card-specs-row">
            <div class="card-spec-item">
              <span class="spec-icon">⚡</span>
              <span class="spec-text">1 Counter POS</span>
            </div>
            <div class="card-spec-item">
              <span class="spec-icon">👥</span>
              <span class="spec-text">Up to 5 Staff</span>
            </div>
            <div class="card-spec-item">
              <span class="spec-icon">🧾</span>
              <span class="spec-text">Unlimited Orders</span>
            </div>
          </div>

          {{-- Mini Capability Tags --}}
          <div class="card-caps-row">
            <span class="cap-pill">POS Billing</span>
            <span class="cap-pill">Digital Menu QR</span>
            <span class="cap-pill">Sales Reports</span>
          </div>

          {{-- Price Block (in Dollars) --}}
          <div class="card-price-wrap">
            <span class="card-price-num price-val-starter">$239</span>
            <span class="card-price-period">/ year</span>
          </div>

          {{-- CTA Button --}}
          <a href="{{ route('restaurant_signup', ['plan' => 'standard']) }}" target="_blank" rel="noopener noreferrer" class="card-cta-btn btn-choose-standard">
            <span>Get Started Free</span>
            <span class="btn-arrow">&rarr;</span>
          </a>

          {{-- Features Section --}}
          <div class="card-features-heading">WHAT'S INCLUDED</div>
          <ul class="card-features-list">
            <li>
              <svg class="card-check-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round">
                <polyline points="20 6 9 17 4 12"></polyline>
              </svg>
              <span>Menu Management</span>
            </li>
            <li>
              <svg class="card-check-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round">
                <polyline points="20 6 9 17 4 12"></polyline>
              </svg>
              <span>Menu Categories</span>
            </li>
            <li>
              <svg class="card-check-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round">
                <polyline points="20 6 9 17 4 12"></polyline>
              </svg>
              <span>Product Management</span>
            </li>
            <li>
              <svg class="card-check-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round">
                <polyline points="20 6 9 17 4 12"></polyline>
              </svg>
              <span>Order Management</span>
            </li>
            <li>
              <svg class="card-check-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round">
                <polyline points="20 6 9 17 4 12"></polyline>
              </svg>
              <span>POS / Billing</span>
            </li>
            <li>
              <svg class="card-check-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round">
                <polyline points="20 6 9 17 4 12"></polyline>
              </svg>
              <span>Payment Management</span>
            </li>
            <li>
              <svg class="card-check-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round">
                <polyline points="20 6 9 17 4 12"></polyline>
              </svg>
              <span>Basic Customer Management</span>
            </li>
            <li>
              <svg class="card-check-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round">
                <polyline points="20 6 9 17 4 12"></polyline>
              </svg>
              <span>Basic Reports</span>
            </li>
            <li>
              <svg class="card-check-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round">
                <polyline points="20 6 9 17 4 12"></polyline>
              </svg>
              <span>Product Availability</span>
            </li>
            <li>
              <svg class="card-check-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round">
                <polyline points="20 6 9 17 4 12"></polyline>
              </svg>
              <span>Basic Settings</span>
            </li>
          </ul>
        </div>

        {{-- PLATINUM TIER (COMPLETE OPERATIONS) --}}
        <div class="pricing-card pricing-card-pro">
          {{-- Floating Golden Badge --}}
          <div class="pro-floating-badge">
            <svg viewBox="0 0 24 24">
              <path d="M5 16L3 5L8.5 10L12 4L15.5 10L21 5L19 16H5M19 19C19 19.6 18.6 20 18 20H6C5.4 20 5 19.6 5 19V18H19V19Z" />
            </svg>
            <span>MOST POPULAR CHOICE</span>
          </div>

          <div class="card-tier-badge card-tier-badge-gold">Platinum</div>

          <div class="card-header-block">
            <h3 class="card-plan-title">Complete Operations</h3>
            <p class="card-plan-desc">End-to-end automation connecting kitchen displays, table layout, live stock inventory, and customer orders.</p>
          </div>

          <div class="card-best-for card-best-for-gold">
            <span class="cbf-label">Best for:</span>
            <span class="cbf-val">Dine-in Restaurants, Bars & Busy Cloud Kitchens</span>
          </div>

          {{-- 3 Quick Specs Pills --}}
          <div class="card-specs-row">
            <div class="card-spec-item">
              <span class="spec-icon">🍳</span>
              <span class="spec-text">Kitchen + Tables</span>
            </div>
            <div class="card-spec-item">
              <span class="spec-icon">👥</span>
              <span class="spec-text">Unlimited Staff</span>
            </div>
            <div class="card-spec-item">
              <span class="spec-icon">📦</span>
              <span class="spec-text">Live Stock Alerts</span>
            </div>
          </div>

          {{-- Mini Capability Tags --}}
          <div class="card-caps-row">
            <span class="cap-pill">Live KOT Screen</span>
            <span class="cap-pill">Table Layout</span>
            <span class="cap-pill">Inventory</span>
            <span class="cap-pill">Online Gateway</span>
          </div>

          {{-- Price Block (in Dollars) --}}
          <div class="card-price-wrap">
            <span class="card-price-num price-val-growth">$449</span>
            <span class="card-price-period">/ year</span>
          </div>

          {{-- CTA Button --}}
          <a href="{{ route('restaurant_signup', ['plan' => 'premium']) }}" target="_blank" rel="noopener noreferrer" class="card-cta-btn btn-choose-pro">
            <span>Start Premium Free</span>
            <span class="btn-arrow">&rarr;</span>
          </a>

          {{-- Features Section --}}
          <div class="card-features-heading">EVERYTHING IN STANDARD, PLUS:</div>
          <ul class="card-features-list">
            <li>
              <svg class="card-check-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round">
                <polyline points="20 6 9 17 4 12"></polyline>
              </svg>
              <span>Kitchen Management</span>
            </li>
            <li>
              <svg class="card-check-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round">
                <polyline points="20 6 9 17 4 12"></polyline>
              </svg>
              <span>KOT Management</span>
            </li>
            <li>
              <svg class="card-check-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round">
                <polyline points="20 6 9 17 4 12"></polyline>
              </svg>
              <span>Table Management</span>
            </li>
            <li>
              <svg class="card-check-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round">
                <polyline points="20 6 9 17 4 12"></polyline>
              </svg>
              <span>Reservation Management</span>
            </li>
            <li>
              <svg class="card-check-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round">
                <polyline points="20 6 9 17 4 12"></polyline>
              </svg>
              <span>Customer & Staff Management</span>
            </li>
            <li>
              <svg class="card-check-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round">
                <polyline points="20 6 9 17 4 12"></polyline>
              </svg>
              <span>Inventory & Stock Management</span>
            </li>
            <li>
              <svg class="card-check-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round">
                <polyline points="20 6 9 17 4 12"></polyline>
              </svg>
              <span>Expense Management</span>
            </li>
            <li>
              <svg class="card-check-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round">
                <polyline points="20 6 9 17 4 12"></polyline>
              </svg>
              <span>Advanced & Export Reports</span>
            </li>
            <li>
              <svg class="card-check-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round">
                <polyline points="20 6 9 17 4 12"></polyline>
              </svg>
              <span>Payment Gateway Integration</span>
            </li>
            <li>
              <svg class="card-check-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round">
                <polyline points="20 6 9 17 4 12"></polyline>
              </svg>
              <span>Waiter Requests</span>
            </li>
            <li>
              <svg class="card-check-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round">
                <polyline points="20 6 9 17 4 12"></polyline>
              </svg>
              <span>Delivery Executive Management</span>
            </li>
          </ul>
        </div>

      </div>
    </div>
  </section>

  {{-- =========================================================================
       3. ENTERPRISE & CUSTOM PRICING
       ========================================================================= --}}
  <section class="enterprise-section">
    <div class="enterprise-container">
      <div class="enterprise-card">

        {{-- Header Block --}}
        <div class="enterprise-card-header">
          <span class="enterprise-eyebrow">Enterprise & Custom Solutions</span>
          <h2 class="enterprise-main-title">Built Around Your Business. Designed for Growth.</h2>
          <p class="enterprise-main-desc">Every business has unique operational needs. With Geni Menu, you can explore customised solutions, tailored configurations and advanced capabilities that align with your business requirements.</p>

          {{-- CTA Buttons & Note --}}
          <div class="enterprise-cta-row">
            <a href="{{ route('contact.us') }}" class="btn-contact-sales">
              <span>Contact Sales</span>
              <span>&rarr;</span>
            </a>
            <a href="mailto:genimenuglobal@gmail.com" class="btn-email-us">
              <svg fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2" style="width: 15px; height: 15px;" stroke-linecap="round" stroke-linejoin="round">
                <rect x="2" y="4" width="20" height="16" rx="2"></rect>
                <path d="m22 7-8.97 5.7a1.94 1.94 0 0 1-2.06 0L2 7"></path>
              </svg>
              <span>Email Us: genimenuglobal@gmail.com</span>
            </a>
          </div>
          <p class="enterprise-contact-note">Connect with our team to discuss your requirements.</p>
        </div>

        <div class="enterprise-divider"></div>

        {{-- Enterprise Capabilities (4 Cards) --}}
        <div style="margin-bottom: 22px;">
          <h3 class="enterprise-subhead">Enterprise Capabilities</h3>
          <div class="enterprise-caps-grid">

            <div class="enterprise-cap-card">
              <div class="enterprise-cap-icon">
                <svg fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                  <rect x="4" y="2" width="16" height="20" rx="2" ry="2"></rect>
                  <line x1="9" y1="22" x2="9" y2="22.01"></line>
                  <line x1="15" y1="22" x2="15" y2="22.01"></line>
                  <line x1="9" y1="6" x2="9" y2="6.01"></line>
                  <line x1="15" y1="6" x2="15" y2="6.01"></line>
                  <line x1="9" y1="10" x2="9" y2="10.01"></line>
                  <line x1="15" y1="10" x2="15" y2="10.01"></line>
                  <line x1="9" y1="14" x2="9" y2="14.01"></line>
                  <line x1="15" y1="14" x2="15" y2="14.01"></line>
                </svg>
              </div>
              <div>
                <h4 class="enterprise-cap-title">Multi-Location Operations</h4>
                <p class="enterprise-cap-desc">Manage multiple business locations through one connected platform.</p>
              </div>
            </div>

            <div class="enterprise-cap-card">
              <div class="enterprise-cap-icon">
                <svg fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                  <circle cx="12" cy="12" r="3"></circle>
                  <path d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 0 1 0 2.83 2 2 0 0 1-2.83 0l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-2 2 2 2 0 0 1-2-2v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 0 1-2.83 0 2 2 0 0 1 0-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1-2-2 2 2 0 0 1 2-2h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 0 1 0-2.83 2 2 0 0 1 2.83 0l.06.06a1.65 1.65 0 0 0 1.82.33H9a1.65 1.65 0 0 0 1-1.51V3a2 2 0 0 1 2-2 2 2 0 0 1 2 2v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 0 1 2.83 0 2 2 0 0 1 0 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82V9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 2 2 2 2 0 0 1-2 2h-.09a1.65 1.65 0 0 0-1.51 1z"></path>
                </svg>
              </div>
              <div>
                <h4 class="enterprise-cap-title">Customised Workflows</h4>
                <p class="enterprise-cap-desc">Adapt platform functionality to match your operational processes.</p>
              </div>
            </div>

            <div class="enterprise-cap-card">
              <div class="enterprise-cap-icon">
                <svg fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                  <polyline points="16 18 22 12 16 6"></polyline>
                  <polyline points="8 6 2 12 8 18"></polyline>
                </svg>
              </div>
              <div>
                <h4 class="enterprise-cap-title">Advanced Integrations</h4>
                <p class="enterprise-cap-desc">Connect with third-party applications and existing business systems.</p>
              </div>
            </div>

            <div class="enterprise-cap-card">
              <div class="enterprise-cap-icon">
                <svg fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                  <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                  <circle cx="9" cy="7" r="4"></circle>
                  <path d="M23 21v-2a4 4 0 0 0-3-3.87"></path>
                  <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                </svg>
              </div>
              <div>
                <h4 class="enterprise-cap-title">Dedicated Assistance</h4>
                <p class="enterprise-cap-desc">Receive personalised guidance for setup, implementation and ongoing support.</p>
              </div>
            </div>

          </div>
        </div>

        <div class="enterprise-divider"></div>

        {{-- Custom Solutions – What We Can Offer --}}
        <div>
          <h3 class="enterprise-subhead">Custom Solutions – What We Can Offer</h3>
          <div class="enterprise-offerings-grid">
            <div class="enterprise-offering-item">
              <svg class="enterprise-offering-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round">
                <polyline points="20 6 9 17 4 12"></polyline>
              </svg>
              <span>Tailored platform configurations</span>
            </div>
            <div class="enterprise-offering-item">
              <svg class="enterprise-offering-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round">
                <polyline points="20 6 9 17 4 12"></polyline>
              </svg>
              <span>Custom feature requirements</span>
            </div>
            <div class="enterprise-offering-item">
              <svg class="enterprise-offering-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round">
                <polyline points="20 6 9 17 4 12"></polyline>
              </svg>
              <span>Third-party system integrations</span>
            </div>
            <div class="enterprise-offering-item">
              <svg class="enterprise-offering-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round">
                <polyline points="20 6 9 17 4 12"></polyline>
              </svg>
              <span>Multi-location business support</span>
            </div>
            <div class="enterprise-offering-item">
              <svg class="enterprise-offering-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round">
                <polyline points="20 6 9 17 4 12"></polyline>
              </svg>
              <span>Personalised onboarding</span>
            </div>
            <div class="enterprise-offering-item">
              <svg class="enterprise-offering-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round">
                <polyline points="20 6 9 17 4 12"></polyline>
              </svg>
              <span>Dedicated technical assistance</span>
            </div>
          </div>

          <div class="enterprise-bottom-action">
            <a href="{{ route('enquiry') }}" class="btn-discuss-req">
              <span>Discuss Your Requirements</span>
              <span>&rarr;</span>
            </a>
          </div>
        </div>

      </div>
    </div>
  </section>

  {{-- =========================================================================
       4. PLAN COMPARISON TABLE
       ========================================================================= --}}
  <section class="comparison-section">
    <div class="comparison-container">
      
      {{-- Section Header --}}
      <div class="comparison-header-block">
        <div>
          <h2 class="comparison-title">Plan Comparison</h2>
          <p class="comparison-subtitle">Compare features and choose the plan that fits your business.</p>
        </div>
        <button type="button" id="btn-toggle-all-cats" class="btn-toggle-all-cats" onclick="toggleAllComparisonGroups()">
          Expand All +
        </button>
      </div>

      {{-- Table --}}
      <div class="comparison-mobile-hint">
        <span>&larr; Swipe sideways to compare plans &rarr;</span>
      </div>
      <div class="comparison-table-wrapper">
        <table class="comparison-table">
          <thead>
            <tr>
              <th class="col-feature">
                <div class="th-header-pill th-pill-feature">FEATURES</div>
                <div class="th-price-sub th-feature-sub">PLAN OVERVIEW</div>
              </th>
              <th class="col-standard">
                <div class="th-header-pill th-pill-standard">SILVER</div>
                <div class="th-price-sub th-price-standard">$239 / YEAR</div>
              </th>
              <th class="col-pro">
                <div class="th-header-pill th-pill-pro">PLATINUM</div>
                <div class="th-price-sub th-price-premium">$449 / YEAR</div>
              </th>
            </tr>
          </thead>
          <tbody>
            <tr class="comparison-category-row" data-group="group-menu-products" onclick="toggleComparisonGroup('group-menu-products', this)" role="button" tabindex="0">
              <td colspan="3">
                <div class="cat-header-inner">
                  <span class="cat-toggle-btn" aria-label="Toggle Category">
                    <svg class="cat-plus-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round">
                      <line x1="12" y1="5" x2="12" y2="19" class="cat-vert-line"></line>
                      <line x1="5" y1="12" x2="19" y2="12"></line>
                    </svg>
                  </span>
                  <span class="cat-title-text">Menu & Products</span>
                  <span class="cat-count-pill">5 features</span>
                </div>
              </td>
            </tr>
            <tr class="comparison-row group-menu-products" style="display: none;">
              <td class="td-feature-name">Menu Management</td>
              <td class="td-center-val"><svg class="tbl-check-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg></td>
              <td class="td-center-val"><svg class="tbl-check-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg></td>
            </tr>
            <tr class="comparison-row group-menu-products" style="display: none;">
              <td class="td-feature-name">Menu Categories</td>
              <td class="td-center-val"><svg class="tbl-check-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg></td>
              <td class="td-center-val"><svg class="tbl-check-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg></td>
            </tr>
            <tr class="comparison-row group-menu-products" style="display: none;">
              <td class="td-feature-name">Product Management</td>
              <td class="td-center-val"><svg class="tbl-check-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg></td>
              <td class="td-center-val"><svg class="tbl-check-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg></td>
            </tr>
            <tr class="comparison-row group-menu-products" style="display: none;">
              <td class="td-feature-name">Product Availability</td>
              <td class="td-center-val"><svg class="tbl-check-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg></td>
              <td class="td-center-val"><svg class="tbl-check-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg></td>
            </tr>
            <tr class="comparison-row group-menu-products" style="display: none;">
              <td class="td-feature-name">Product Variations</td>
              <td class="td-center-val"><span class="tbl-dash">&mdash;</span></td>
              <td class="td-center-val"><svg class="tbl-check-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg></td>
            </tr>
            <tr class="comparison-category-row" data-group="group-orders-service" onclick="toggleComparisonGroup('group-orders-service', this)" role="button" tabindex="0">
              <td colspan="3">
                <div class="cat-header-inner">
                  <span class="cat-toggle-btn" aria-label="Toggle Category">
                    <svg class="cat-plus-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round">
                      <line x1="12" y1="5" x2="12" y2="19" class="cat-vert-line"></line>
                      <line x1="5" y1="12" x2="19" y2="12"></line>
                    </svg>
                  </span>
                  <span class="cat-title-text">Orders & Service</span>
                  <span class="cat-count-pill">5 features</span>
                </div>
              </td>
            </tr>
            <tr class="comparison-row group-orders-service" style="display: none;">
              <td class="td-feature-name">Order Management</td>
              <td class="td-center-val"><svg class="tbl-check-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg></td>
              <td class="td-center-val"><svg class="tbl-check-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg></td>
            </tr>
            <tr class="comparison-row group-orders-service" style="display: none;">
              <td class="td-feature-name">KOT Management</td>
              <td class="td-center-val"><span class="tbl-dash">&mdash;</span></td>
              <td class="td-center-val"><svg class="tbl-check-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg></td>
            </tr>
            <tr class="comparison-row group-orders-service" style="display: none;">
              <td class="td-feature-name">Kitchen Management</td>
              <td class="td-center-val"><span class="tbl-dash">&mdash;</span></td>
              <td class="td-center-val"><svg class="tbl-check-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg></td>
            </tr>
            <tr class="comparison-row group-orders-service" style="display: none;">
              <td class="td-feature-name">Waiter Requests</td>
              <td class="td-center-val"><span class="tbl-dash">&mdash;</span></td>
              <td class="td-center-val"><svg class="tbl-check-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg></td>
            </tr>
            <tr class="comparison-row group-orders-service" style="display: none;">
              <td class="td-feature-name">Delivery Executive Management</td>
              <td class="td-center-val"><span class="tbl-dash">&mdash;</span></td>
              <td class="td-center-val"><svg class="tbl-check-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg></td>
            </tr>
            <tr class="comparison-category-row" data-group="group-tables-reservations" onclick="toggleComparisonGroup('group-tables-reservations', this)" role="button" tabindex="0">
              <td colspan="3">
                <div class="cat-header-inner">
                  <span class="cat-toggle-btn" aria-label="Toggle Category">
                    <svg class="cat-plus-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round">
                      <line x1="12" y1="5" x2="12" y2="19" class="cat-vert-line"></line>
                      <line x1="5" y1="12" x2="19" y2="12"></line>
                    </svg>
                  </span>
                  <span class="cat-title-text">Tables & Reservations</span>
                  <span class="cat-count-pill">3 features</span>
                </div>
              </td>
            </tr>
            <tr class="comparison-row group-tables-reservations" style="display: none;">
              <td class="td-feature-name">Table Management</td>
              <td class="td-center-val"><span class="tbl-dash">&mdash;</span></td>
              <td class="td-center-val"><svg class="tbl-check-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg></td>
            </tr>
            <tr class="comparison-row group-tables-reservations" style="display: none;">
              <td class="td-feature-name">Reservation Management</td>
              <td class="td-center-val"><span class="tbl-dash">&mdash;</span></td>
              <td class="td-center-val"><svg class="tbl-check-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg></td>
            </tr>
            <tr class="comparison-row group-tables-reservations" style="display: none;">
              <td class="td-feature-name">Area Management</td>
              <td class="td-center-val"><span class="tbl-dash">&mdash;</span></td>
              <td class="td-center-val"><svg class="tbl-check-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg></td>
            </tr>
            <tr class="comparison-category-row" data-group="group-customers-staff" onclick="toggleComparisonGroup('group-customers-staff', this)" role="button" tabindex="0">
              <td colspan="3">
                <div class="cat-header-inner">
                  <span class="cat-toggle-btn" aria-label="Toggle Category">
                    <svg class="cat-plus-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round">
                      <line x1="12" y1="5" x2="12" y2="19" class="cat-vert-line"></line>
                      <line x1="5" y1="12" x2="19" y2="12"></line>
                    </svg>
                  </span>
                  <span class="cat-title-text">Customers & Staff</span>
                  <span class="cat-count-pill">3 features</span>
                </div>
              </td>
            </tr>
            <tr class="comparison-row group-customers-staff" style="display: none;">
              <td class="td-feature-name">Customer Management</td>
              <td class="td-center-val"><span class="tbl-badge-text">Basic</span></td>
              <td class="td-center-val"><svg class="tbl-check-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg></td>
            </tr>
            <tr class="comparison-row group-customers-staff" style="display: none;">
              <td class="td-feature-name">Staff Management</td>
              <td class="td-center-val"><span class="tbl-dash">&mdash;</span></td>
              <td class="td-center-val"><svg class="tbl-check-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg></td>
            </tr>
            <tr class="comparison-row group-customers-staff" style="display: none;">
              <td class="td-feature-name">Customer History</td>
              <td class="td-center-val"><span class="tbl-dash">&mdash;</span></td>
              <td class="td-center-val"><svg class="tbl-check-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg></td>
            </tr>
            <tr class="comparison-category-row" data-group="group-billing-payments" onclick="toggleComparisonGroup('group-billing-payments', this)" role="button" tabindex="0">
              <td colspan="3">
                <div class="cat-header-inner">
                  <span class="cat-toggle-btn" aria-label="Toggle Category">
                    <svg class="cat-plus-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round">
                      <line x1="12" y1="5" x2="12" y2="19" class="cat-vert-line"></line>
                      <line x1="5" y1="12" x2="19" y2="12"></line>
                    </svg>
                  </span>
                  <span class="cat-title-text">Billing & Payments</span>
                  <span class="cat-count-pill">5 features</span>
                </div>
              </td>
            </tr>
            <tr class="comparison-row group-billing-payments" style="display: none;">
              <td class="td-feature-name">POS</td>
              <td class="td-center-val"><svg class="tbl-check-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg></td>
              <td class="td-center-val"><svg class="tbl-check-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg></td>
            </tr>
            <tr class="comparison-row group-billing-payments" style="display: none;">
              <td class="td-feature-name">Billing</td>
              <td class="td-center-val"><svg class="tbl-check-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg></td>
              <td class="td-center-val"><svg class="tbl-check-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg></td>
            </tr>
            <tr class="comparison-row group-billing-payments" style="display: none;">
              <td class="td-feature-name">Payments</td>
              <td class="td-center-val"><svg class="tbl-check-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg></td>
              <td class="td-center-val"><svg class="tbl-check-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg></td>
            </tr>
            <tr class="comparison-row group-billing-payments" style="display: none;">
              <td class="td-feature-name">Payment Gateway</td>
              <td class="td-center-val"><span class="tbl-dash">&mdash;</span></td>
              <td class="td-center-val"><span class="tbl-badge-text tbl-badge-addon">Add-on</span></td>
            </tr>
            <tr class="comparison-row group-billing-payments" style="display: none;">
              <td class="td-feature-name">Payment Reports</td>
              <td class="td-center-val"><span class="tbl-badge-text">Basic</span></td>
              <td class="td-center-val"><svg class="tbl-check-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg></td>
            </tr>
            <tr class="comparison-category-row" data-group="group-inventory" onclick="toggleComparisonGroup('group-inventory', this)" role="button" tabindex="0">
              <td colspan="3">
                <div class="cat-header-inner">
                  <span class="cat-toggle-btn" aria-label="Toggle Category">
                    <svg class="cat-plus-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round">
                      <line x1="12" y1="5" x2="12" y2="19" class="cat-vert-line"></line>
                      <line x1="5" y1="12" x2="19" y2="12"></line>
                    </svg>
                  </span>
                  <span class="cat-title-text">Inventory</span>
                  <span class="cat-count-pill">4 features</span>
                </div>
              </td>
            </tr>
            <tr class="comparison-row group-inventory" style="display: none;">
              <td class="td-feature-name">Inventory Management</td>
              <td class="td-center-val"><span class="tbl-dash">&mdash;</span></td>
              <td class="td-center-val"><svg class="tbl-check-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg></td>
            </tr>
            <tr class="comparison-row group-inventory" style="display: none;">
              <td class="td-feature-name">Stock Management</td>
              <td class="td-center-val"><span class="tbl-dash">&mdash;</span></td>
              <td class="td-center-val"><svg class="tbl-check-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg></td>
            </tr>
            <tr class="comparison-row group-inventory" style="display: none;">
              <td class="td-feature-name">Stock Movement</td>
              <td class="td-center-val"><span class="tbl-dash">&mdash;</span></td>
              <td class="td-center-val"><svg class="tbl-check-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg></td>
            </tr>
            <tr class="comparison-row group-inventory" style="display: none;">
              <td class="td-feature-name">Multi-Location Inventory</td>
              <td class="td-center-val"><span class="tbl-dash">&mdash;</span></td>
              <td class="td-center-val"><span class="tbl-dash">&mdash;</span></td>
            </tr>
            <tr class="comparison-category-row" data-group="group-business-management" onclick="toggleComparisonGroup('group-business-management', this)" role="button" tabindex="0">
              <td colspan="3">
                <div class="cat-header-inner">
                  <span class="cat-toggle-btn" aria-label="Toggle Category">
                    <svg class="cat-plus-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round">
                      <line x1="12" y1="5" x2="12" y2="19" class="cat-vert-line"></line>
                      <line x1="5" y1="12" x2="19" y2="12"></line>
                    </svg>
                  </span>
                  <span class="cat-title-text">Business Management</span>
                  <span class="cat-count-pill">5 features</span>
                </div>
              </td>
            </tr>
            <tr class="comparison-row group-business-management" style="display: none;">
              <td class="td-feature-name">Expense Management</td>
              <td class="td-center-val"><span class="tbl-dash">&mdash;</span></td>
              <td class="td-center-val"><svg class="tbl-check-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg></td>
            </tr>
            <tr class="comparison-row group-business-management" style="display: none;">
              <td class="td-feature-name">Reports</td>
              <td class="td-center-val"><span class="tbl-badge-text">Basic</span></td>
              <td class="td-center-val"><span class="tbl-badge-text">Advanced</span></td>
            </tr>
            <tr class="comparison-row group-business-management" style="display: none;">
              <td class="td-feature-name">Export Reports</td>
              <td class="td-center-val"><span class="tbl-dash">&mdash;</span></td>
              <td class="td-center-val"><svg class="tbl-check-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg></td>
            </tr>
            <tr class="comparison-row group-business-management" style="display: none;">
              <td class="td-feature-name">Advanced Analytics</td>
              <td class="td-center-val"><span class="tbl-dash">&mdash;</span></td>
              <td class="td-center-val"><span class="tbl-dash">&mdash;</span></td>
            </tr>
            <tr class="comparison-row group-business-management" style="display: none;">
              <td class="td-feature-name">Branch Management</td>
              <td class="td-center-val"><span class="tbl-dash">&mdash;</span></td>
              <td class="td-center-val"><span class="tbl-dash">&mdash;</span></td>
            </tr>
            <tr class="comparison-category-row" data-group="group-advanced" onclick="toggleComparisonGroup('group-advanced', this)" role="button" tabindex="0">
              <td colspan="3">
                <div class="cat-header-inner">
                  <span class="cat-toggle-btn" aria-label="Toggle Category">
                    <svg class="cat-plus-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round">
                      <line x1="12" y1="5" x2="12" y2="19" class="cat-vert-line"></line>
                      <line x1="5" y1="12" x2="19" y2="12"></line>
                    </svg>
                  </span>
                  <span class="cat-title-text">Advanced</span>
                  <span class="cat-count-pill">5 features</span>
                </div>
              </td>
            </tr>
            <tr class="comparison-row group-advanced" style="display: none;">
              <td class="td-feature-name">Kiosk</td>
              <td class="td-center-val"><span class="tbl-dash">&mdash;</span></td>
              <td class="td-center-val"><span class="tbl-dash">&mdash;</span></td>
            </tr>
            <tr class="comparison-row group-advanced" style="display: none;">
              <td class="td-feature-name">Multi-Branch</td>
              <td class="td-center-val"><span class="tbl-dash">&mdash;</span></td>
              <td class="td-center-val"><span class="tbl-dash">&mdash;</span></td>
            </tr>
            <tr class="comparison-row group-advanced" style="display: none;">
              <td class="td-feature-name">Branch-Wise Reports</td>
              <td class="td-center-val"><span class="tbl-dash">&mdash;</span></td>
              <td class="td-center-val"><span class="tbl-dash">&mdash;</span></td>
            </tr>
            <tr class="comparison-row group-advanced" style="display: none;">
              <td class="td-feature-name">Theme Settings</td>
              <td class="td-center-val"><span class="tbl-dash">&mdash;</span></td>
              <td class="td-center-val"><span class="tbl-dash">&mdash;</span></td>
            </tr>
            <tr class="comparison-row group-advanced" style="display: none;">
              <td class="td-feature-name">Advanced Settings</td>
              <td class="td-center-val"><span class="tbl-dash">&mdash;</span></td>
              <td class="td-center-val"><span class="tbl-dash">&mdash;</span></td>
            </tr>
          </tbody>
        </table>
      </div>

    </div>
  </section>

  {{-- =========================================================================
       5. FINAL CTA FULL-WIDTH SECTION
       ========================================================================= --}}
  <section class="final-cta-section">
    <div class="final-cta-inner">
      <div class="final-cta-eyebrow">
        <span class="eyebrow-dash"></span>
        <span>THE NEXT ERA OF DIGITAL DINING</span>
        <span class="eyebrow-dash"></span>
      </div>
      <h2 class="final-cta-title">Elevate Your Restaurant. Empower Your Business.</h2>
      <p class="final-cta-desc">Discover a more connected approach to restaurant management with Geni Menu. Bring your digital menu, customer interactions and everyday operations together through one intelligent platform built to support efficiency, enhance experiences and drive business growth.</p>
      <div class="final-cta-btn-wrap">
        <a href="{{ route('home') }}" class="final-cta-btn-primary">
          <span>Explore <span class="hide-on-mobile">Geni </span>Menu</span>
          <span class="arrow">&rarr;</span>
        </a>
        <a href="{{ route('enquiry') }}" class="final-cta-btn-secondary">
          <span>Book <span class="hide-on-mobile">Personalised </span>Demo</span>
          <span class="arrow">&rarr;</span>
        </a>
      </div>
    </div>
  </section>

</div>

<script>
function toggleComparisonGroup(groupId, rowElem) {
  var rows = document.querySelectorAll('.' + groupId);
  var isOpen = rowElem.classList.contains('is-open');

  if (isOpen) {
    rowElem.classList.remove('is-open');
    rows.forEach(function(r) {
      r.style.display = 'none';
    });
  } else {
    rowElem.classList.add('is-open');
    rows.forEach(function(r) {
      r.style.display = 'table-row';
    });
  }
  updateGlobalToggleBtnText();
}

function toggleAllComparisonGroups() {
  var catRows = document.querySelectorAll('.comparison-category-row');
  var allOpen = true;
  catRows.forEach(function(cat) {
    if (!cat.classList.contains('is-open')) {
      allOpen = false;
    }
  });

  catRows.forEach(function(cat) {
    var gid = cat.getAttribute('data-group');
    var rows = document.querySelectorAll('.' + gid);
    if (allOpen) {
      cat.classList.remove('is-open');
      rows.forEach(function(r) { r.style.display = 'none'; });
    } else {
      cat.classList.add('is-open');
      rows.forEach(function(r) { r.style.display = 'table-row'; });
    }
  });

  updateGlobalToggleBtnText();
}

function updateGlobalToggleBtnText() {
  var catRows = document.querySelectorAll('.comparison-category-row');
  var toggleBtn = document.getElementById('btn-toggle-all-cats');
  if (!toggleBtn) return;

  var allOpen = true;
  catRows.forEach(function(cat) {
    if (!cat.classList.contains('is-open')) {
      allOpen = false;
    }
  });

  if (allOpen) {
    toggleBtn.textContent = 'Collapse All −';
  } else {
    toggleBtn.textContent = 'Expand All +';
  }
}
/* ==========================================================================
   COUNTRY & CURRENCY SELECTOR LOGIC
   ========================================================================== */
var countriesData = {
  'INTL': {
    code: 'USD', name: 'International', flag: '🌐', symbol: '$',
    monthly: { starter: '$20', growth: '$42' },
    yearly:  { starter: '$239', growth: '$449' }
  },
  'US': {
    code: 'USD', name: 'United States', flag: '🇺🇸', symbol: '$',
    monthly: { starter: '$20', growth: '$42' },
    yearly:  { starter: '$239', growth: '$449' }
  },
  'IN': {
    code: 'INR', name: 'India', flag: '🇮🇳', symbol: '₹',
    monthly: { starter: '₹799', growth: '₹1,999' },
    yearly:  { starter: '₹7,990', growth: '₹19,990' }
  },
  'AE': {
    code: 'AED', name: 'United Arab Emirates', flag: '🇦🇪', symbol: 'AED',
    monthly: { starter: 'AED 79', growth: 'AED 169' },
    yearly:  { starter: 'AED 899', growth: 'AED 1,699' }
  },
  'SA': {
    code: 'SAR', name: 'Saudi Arabia', flag: '🇸🇦', symbol: 'SAR',
    monthly: { starter: 'SAR 79', growth: 'SAR 169' },
    yearly:  { starter: 'SAR 899', growth: 'SAR 1,699' }
  },
  'GB': {
    code: 'GBP', name: 'United Kingdom', flag: '🇬🇧', symbol: '£',
    monthly: { starter: '£16', growth: '£35' },
    yearly:  { starter: '£189', growth: '£359' }
  },
  'EU': {
    code: 'EUR', name: 'European Union', flag: '🇪🇺', symbol: '€',
    monthly: { starter: '€19', growth: '€39' },
    yearly:  { starter: '€219', growth: '€419' }
  },
  'SG': {
    code: 'SGD', name: 'Singapore', flag: '🇸🇬', symbol: 'S$',
    monthly: { starter: 'S$28', growth: 'S$59' },
    yearly:  { starter: 'S$319', growth: 'S$599' }
  },
  'MY': {
    code: 'MYR', name: 'Malaysia', flag: '🇲🇾', symbol: 'RM',
    monthly: { starter: 'RM 95', growth: 'RM 199' },
    yearly:  { starter: 'RM 1,090', growth: 'RM 2,190' }
  },
  'CA': {
    code: 'CAD', name: 'Canada', flag: '🇨🇦', symbol: 'CA$',
    monthly: { starter: 'CA$28', growth: 'CA$59' },
    yearly:  { starter: 'CA$319', growth: 'CA$599' }
  },
  'AU': {
    code: 'AUD', name: 'Australia', flag: '🇦🇺', symbol: 'A$',
    monthly: { starter: 'A$30', growth: 'A$65' },
    yearly:  { starter: 'A$349', growth: 'A$649' }
  },
  'QA': {
    code: 'QAR', name: 'Qatar', flag: '🇶🇦', symbol: 'QAR',
    monthly: { starter: 'QAR 79', growth: 'QAR 169' },
    yearly:  { starter: 'QAR 899', growth: 'QAR 1,699' }
  },
  'KW': {
    code: 'KWD', name: 'Kuwait', flag: '🇰🇼', symbol: 'KWD',
    monthly: { starter: 'KWD 6.5', growth: 'KWD 13.5' },
    yearly:  { starter: 'KWD 75', growth: 'KWD 149' }
  },
  'OM': {
    code: 'OMR', name: 'Oman', flag: '🇴🇲', symbol: 'OMR',
    monthly: { starter: 'OMR 8', growth: 'OMR 17' },
    yearly:  { starter: 'OMR 89', growth: 'OMR 179' }
  },
  'BH': {
    code: 'BHD', name: 'Bahrain', flag: '🇧🇭', symbol: 'BHD',
    monthly: { starter: 'BHD 8', growth: 'BHD 17' },
    yearly:  { starter: 'BHD 89', growth: 'BHD 179' }
  },
  'NZ': {
    code: 'NZD', name: 'New Zealand', flag: '🇳🇿', symbol: 'NZ$',
    monthly: { starter: 'NZ$34', growth: 'NZ$72' },
    yearly:  { starter: 'NZ$389', growth: 'NZ$749' }
  },
  'ZA': {
    code: 'ZAR', name: 'South Africa', flag: '🇿🇦', symbol: 'R',
    monthly: { starter: 'R 380', growth: 'R 790' },
    yearly:  { starter: 'R 4,290', growth: 'R 8,490' }
  },
  'PH': {
    code: 'PHP', name: 'Philippines', flag: '🇵🇭', symbol: '₱',
    monthly: { starter: '₱1,150', growth: '₱2,400' },
    yearly:  { starter: '₱12,900', growth: '₱24,900' }
  },
  'ID': {
    code: 'IDR', name: 'Indonesia', flag: '🇮🇩', symbol: 'Rp',
    monthly: { starter: 'Rp 320,000', growth: 'Rp 680,000' },
    yearly:  { starter: 'Rp 3,590,000', growth: 'Rp 6,990,000' }
  },
  'TH': {
    code: 'THB', name: 'Thailand', flag: '🇹🇭', symbol: '฿',
    monthly: { starter: '฿720', growth: '฿1,500' },
    yearly:  { starter: '฿7,990', growth: '฿15,900' }
  },
  'VN': {
    code: 'VND', name: 'Vietnam', flag: '🇻🇳', symbol: '₫',
    monthly: { starter: '₫500,000', growth: '₫1,050,000' },
    yearly:  { starter: '₫5,490,000', growth: '₫10,900,000' }
  },
  'LK': {
    code: 'LKR', name: 'Sri Lanka', flag: '🇱🇰', symbol: 'Rs',
    monthly: { starter: 'Rs 6,200', growth: 'Rs 12,900' },
    yearly:  { starter: 'Rs 69,000', growth: 'Rs 139,000' }
  },
  'BD': {
    code: 'BDT', name: 'Bangladesh', flag: '🇧🇩', symbol: '৳',
    monthly: { starter: '৳2,400', growth: '৳5,000' },
    yearly:  { starter: '৳26,900', growth: '৳52,900' }
  },
  'NP': {
    code: 'NPR', name: 'Nepal', flag: '🇳🇵', symbol: 'Rs',
    monthly: { starter: 'Rs 2,700', growth: 'Rs 5,600' },
    yearly:  { starter: 'Rs 29,900', growth: 'Rs 59,000' }
  },
  'PK': {
    code: 'PKR', name: 'Pakistan', flag: '🇵🇰', symbol: 'Rs',
    monthly: { starter: 'Rs 5,800', growth: 'Rs 12,000' },
    yearly:  { starter: 'Rs 64,900', growth: 'Rs 129,000' }
  },
  'NG': {
    code: 'NGN', name: 'Nigeria', flag: '🇳🇬', symbol: '₦',
    monthly: { starter: '₦32,000', growth: '₦68,000' },
    yearly:  { starter: '₦359,000', growth: '₦699,000' }
  },
  'KE': {
    code: 'KES', name: 'Kenya', flag: '🇰🇪', symbol: 'KSh',
    monthly: { starter: 'KSh 2,600', growth: 'KSh 5,500' },
    yearly:  { starter: 'KSh 29,000', growth: 'KSh 58,000' }
  },
  'JP': {
    code: 'JPY', name: 'Japan', flag: '🇯🇵', symbol: '¥',
    monthly: { starter: '¥3,100', growth: '¥6,500' },
    yearly:  { starter: '¥34,900', growth: '¥69,000' }
  },
  'KR': {
    code: 'KRW', name: 'South Korea', flag: '🇰🇷', symbol: '₩',
    monthly: { starter: '₩28,000', growth: '₩59,000' },
    yearly:  { starter: '₩310,000', growth: '₩599,000' }
  },
  'BR': {
    code: 'BRL', name: 'Brazil', flag: '🇧🇷', symbol: 'R$',
    monthly: { starter: 'R$ 115', growth: 'R$ 240' },
    yearly:  { starter: 'R$ 1,290', growth: 'R$ 2,490' }
  },
  'MX': {
    code: 'MXN', name: 'Mexico', flag: '🇲🇽', symbol: 'Mex$',
    monthly: { starter: 'Mex$ 410', growth: 'Mex$ 860' },
    yearly:  { starter: 'Mex$ 4,590', growth: 'Mex$ 8,990' }
  },
  'CH': {
    code: 'CHF', name: 'Switzerland', flag: '🇨🇭', symbol: 'CHF',
    monthly: { starter: 'CHF 18', growth: 'CHF 38' },
    yearly:  { starter: 'CHF 209', growth: 'CHF 399' }
  },
  'TR': {
    code: 'TRY', name: 'Turkey', flag: '🇹🇷', symbol: '₺',
    monthly: { starter: '₺720', growth: '₺1,500' },
    yearly:  { starter: '₺7,990', growth: '₺15,900' }
  }
};

// Fallback compatibility helpers
for (var k in countriesData) {
  countriesData[k].starter = countriesData[k].yearly.starter;
  countriesData[k].growth  = countriesData[k].yearly.growth;
}

var currentSelectedCountry = 'INTL';
var currentBillingCycle = 'yearly'; // 'yearly' or 'monthly'

function renderCountryOptions() {
  var list = document.getElementById('country-options-list');
  if (!list) return;
  var html = '';
  for (var key in countriesData) {
    var c = countriesData[key];
    var activeClass = key === currentSelectedCountry ? ' active' : '';
    html += '<div class="country-option-row' + activeClass + '" data-code="' + key + '" onclick="selectCountry(\'' + key + '\')">' +
              '<div class="country-opt-left">' +
                '<span class="country-opt-flag">' + c.flag + '</span>' +
                '<span class="country-opt-name">' + c.name + '</span>' +
              '</div>' +
              '<span class="country-opt-currency">' + c.symbol + ' ' + c.code + '</span>' +
            '</div>';
  }
  list.innerHTML = html;
}

function filterCountryList(query) {
  var term = (query || '').toLowerCase().trim();
  var rows = document.querySelectorAll('.country-option-row');
  rows.forEach(function(row) {
    var text = row.textContent.toLowerCase();
    if (!term || text.indexOf(term) > -1) {
      row.style.display = 'flex';
    } else {
      row.style.display = 'none';
    }
  });
}

function toggleCountryDropdown(e) {
  if (e) e.stopPropagation();
  var dropdown = document.getElementById('country-dropdown-menu');
  var btn = document.getElementById('country-select-btn');
  if (!dropdown) return;

  var isOpen = dropdown.style.display === 'block';
  if (isOpen) {
    closeCountryDropdown();
  } else {
    dropdown.style.display = 'block';
    if (btn) btn.classList.add('is-open');
    var searchInput = document.getElementById('country-search-input');
    if (searchInput) {
      searchInput.value = '';
      filterCountryList('');
      setTimeout(function() { searchInput.focus(); }, 60);
    }
  }
}

function closeCountryDropdown() {
  var dropdown = document.getElementById('country-dropdown-menu');
  var btn = document.getElementById('country-select-btn');
  if (dropdown) dropdown.style.display = 'none';
  if (btn) btn.classList.remove('is-open');
}

document.addEventListener('click', function(e) {
  var wrapper = document.getElementById('country-selector-wrapper');
  if (wrapper && !wrapper.contains(e.target)) {
    closeCountryDropdown();
  }
});

function setBillingCycle(cycle) {
  if (cycle !== 'monthly' && cycle !== 'yearly') return;
  currentBillingCycle = cycle;
  updatePricingDisplay();
  try {
    localStorage.setItem('geni_menu_billing_cycle', cycle);
  } catch(e) {}
}

function updatePricingDisplay() {
  var data = countriesData[currentSelectedCountry];
  if (!data) return;

  var cycleData = data[currentBillingCycle] || data.yearly;
  var starterPrice = cycleData.starter;
  var growthPrice  = cycleData.growth;
  var isYearly     = currentBillingCycle === 'yearly';
  var periodText   = isYearly ? '/ year' : '/ month';
  var tablePeriod  = isYearly ? '/ YEAR' : '/ MONTH';

  // 1. Update Starter price
  var starterPrices = document.querySelectorAll('.price-val-starter');
  starterPrices.forEach(function(el) {
    el.textContent = starterPrice;
  });

  // 2. Update Growth price
  var growthPrices = document.querySelectorAll('.price-val-growth');
  growthPrices.forEach(function(el) {
    el.textContent = growthPrice;
  });

  // 3. Update Period text
  var periodEls = document.querySelectorAll('.card-price-period');
  periodEls.forEach(function(el) {
    el.textContent = periodText;
  });

  // 4. Update Billing Pill
  var pill = document.getElementById('pricing-billing-pill');
  if (pill) {
    if (isYearly) {
      pill.innerHTML = '<span class="save-discount-badge">Save up to 15%</span>' +
                       '<span class="billing-pill-text">' +
                       '<span class="pill-text-core">Billed annually &bull; Software subscription only</span> ' +
                       '<span class="pill-text-curr">&bull;&nbsp;Prices&nbsp;in&nbsp;<strong>' + data.code + '</strong></span>' +
                       '</span>';
    } else {
      pill.innerHTML = '<span class="billing-pill-text">' +
                       '<span class="pill-text-core">Billed monthly &bull; Software subscription only</span> ' +
                       '<span class="pill-text-curr">&bull;&nbsp;Prices&nbsp;in&nbsp;<strong>' + data.code + '</strong></span>' +
                       '</span>';
    }
  }

  // 5. Update comparison table headers
  var thStandard = document.querySelectorAll('.th-price-standard');
  thStandard.forEach(function(el) {
    el.textContent = starterPrice + ' ' + tablePeriod;
  });

  var thPremium = document.querySelectorAll('.th-price-premium');
  thPremium.forEach(function(el) {
    el.textContent = growthPrice + ' ' + tablePeriod;
  });

  // 6. Update Toggle buttons active state
  var btnMonthly = document.getElementById('btn-billing-monthly');
  var btnYearly  = document.getElementById('btn-billing-yearly');
  if (btnMonthly && btnYearly) {
    if (!isYearly) {
      btnMonthly.classList.add('active');
      btnMonthly.setAttribute('aria-selected', 'true');
      btnYearly.classList.remove('active');
      btnYearly.setAttribute('aria-selected', 'false');
    } else {
      btnYearly.classList.add('active');
      btnYearly.setAttribute('aria-selected', 'true');
      btnMonthly.classList.remove('active');
      btnMonthly.setAttribute('aria-selected', 'false');
    }
  }

  // 7. Update CTA links with billing cycle
  var standardBtn = document.querySelector('.btn-choose-standard');
  if (standardBtn) {
    standardBtn.href = "{{ route('restaurant_signup') }}?plan=standard&billing=" + currentBillingCycle;
  }
  var proBtn = document.querySelector('.btn-choose-pro');
  if (proBtn) {
    proBtn.href = "{{ route('restaurant_signup') }}?plan=premium&billing=" + currentBillingCycle;
  }
}

function selectCountry(countryKey) {
  var data = countriesData[countryKey];
  if (!data) return;

  currentSelectedCountry = countryKey;

  // 1. Update button labels
  var flagEl = document.getElementById('selected-country-flag');
  var nameEl = document.getElementById('selected-country-name');
  var currEl = document.getElementById('selected-currency-label');
  if (flagEl) flagEl.textContent = data.flag;
  if (nameEl) nameEl.textContent = data.name;
  if (currEl) currEl.textContent = data.symbol + ' ' + data.code;

  // 2. Update prices & billing display according to active cycle
  updatePricingDisplay();

  // 3. Highlight active item in list
  var rows = document.querySelectorAll('.country-option-row');
  rows.forEach(function(r) {
    if (r.getAttribute('data-code') === countryKey) {
      r.classList.add('active');
    } else {
      r.classList.remove('active');
    }
  });

  // 4. Close dropdown
  closeCountryDropdown();

  // 5. Persist choice
  try {
    localStorage.setItem('geni_menu_pricing_country', countryKey);
  } catch(e) {}
}

// Backward compatibility helper
function setCurrency(curr) {
  if (curr === 'INR') {
    selectCountry('IN');
  } else {
    selectCountry('INTL');
  }
}

// Initialize on load
document.addEventListener('DOMContentLoaded', function() {
  renderCountryOptions();

  // Restore saved billing cycle if any
  try {
    var savedCycle = localStorage.getItem('geni_menu_billing_cycle');
    if (savedCycle === 'monthly' || savedCycle === 'yearly') {
      currentBillingCycle = savedCycle;
    }
  } catch(e) {}

  var savedCountry = null;
  try {
    savedCountry = localStorage.getItem('geni_menu_pricing_country');
  } catch(e) {}
  if (savedCountry && countriesData[savedCountry]) {
    selectCountry(savedCountry);
  } else {
    selectCountry('INTL');
  }
});
</script>

@endsection
