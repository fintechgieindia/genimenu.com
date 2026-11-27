@php
    $disableAutoPopup = true;
    $meta = [
        'title' => 'Geni Menu Partner Programme | Build Together. Grow Globally.',
        'description' => 'Partner with Geni Menu to bring smarter restaurant technology to businesses worldwide. Expand your market with referral, reseller, distribution, technology, and strategic business partnerships.',
        'keywords' => 'Geni Menu partner, restaurant software reseller, POS partnership program, hospitality distributor, restaurant technology partner, food business solutions reseller, global restaurant partner network',
        'og_title' => 'Geni Menu Partner Programme | Build Together. Grow Globally.',
        'og_description' => 'Partner with Geni Menu to bring smarter restaurant technology to businesses worldwide. Expand your market with a complete hospitality platform.',
        'og_image' => 'assets/images/partners/hero-handshake.jpg',
        'og_image_width' => '1200',
        'og_image_height' => '630',
        'og_image_alt' => 'Geni Menu Partner Programme - Build Together. Grow Globally.',
    ];
@endphp

@extends('layouts.frontend-master')

@section('content')

<style>
@import url('https://fonts.googleapis.com/css2?family=Cinzel:wght@400;500;600;700;800&display=swap');
@import url('https://fonts.cdnfonts.com/css/glacial-indifference-2');

/* ==========================================================================
   GENI MENU — PARTNER PROGRAMME DESIGN SYSTEM
   - Follows exact palette & typography of existing Geni Menu homepage
   - Luxury hospitality dark chocolate (#27130D, #32180F) & warm cream (#FFF8F0, #FAF2E8)
   - Champagne gold (#F2C58D) & caramel (#C58B50) accents
   ========================================================================== */

:root {
  --gp-chocolate: #27130D;
  --gp-deep-brown: #32180F;
  --gp-coffee: #4A291B;
  --gp-coffee-light: #5A3524;
  --gp-caramel: #C58B50;
  --gp-champagne: #F2C58D;
  --gp-champagne-light: #FBE6CE;
  --gp-cream: #FFF8F0;
  --gp-cream-alt: #FAF2E8;
  --gp-cream-card: #FFFFFF;
  --gp-text-dark: #2A170F;
  --gp-text-muted: #6B5549;
  --gp-text-light: #FFF8F0;
  --gp-text-sec-light: #E4D3C4;
  --gp-border-dark: rgba(197, 139, 80, 0.28);
  --gp-border-light: rgba(197, 139, 80, 0.22);
}

.gp-scope {
  font-family: 'Glacial Indifference', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif !important;
  font-weight: 400 !important;
  color: var(--gp-text-dark);
  line-height: 1.6;
  background-color: var(--gp-cream);
  overflow-x: hidden;
}

.gp-scope * {
  box-sizing: border-box;
}

.gp-container {
  max-width: 1240px;
  margin: 0 auto;
  padding: 0 24px;
}

/* Headings: Cinzel Regular, Uppercase */
.gp-heading-serif {
  font-family: 'Cinzel', serif !important;
  text-transform: uppercase !important;
  letter-spacing: 0.04em;
  font-weight: 400 !important;
  line-height: 1.22;
  margin: 0 0 16px;
}

.gp-eyebrow {
  display: inline-flex;
  align-items: center;
  gap: 7px;
  font-family: 'Cinzel', serif !important;
  font-size: 11px;
  font-weight: 400 !important;
  letter-spacing: 0.16em;
  text-transform: uppercase !important;
  color: var(--gp-champagne);
  margin-bottom: 10px;
}

.gp-eyebrow-dark {
  color: var(--gp-caramel);
}

.gp-gold-accent {
  color: var(--gp-champagne);
}

.gp-desc {
  font-family: 'Glacial Indifference', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif !important;
  font-size: 14px;
  font-weight: 400 !important;
  color: var(--gp-text-sec-light);
  line-height: 1.65;
  margin: 0 0 24px;
}

.gp-desc-dark {
  color: var(--gp-text-muted);
}

/* Primary Button */
.gp-btn-primary {
  display: inline-flex;
  align-items: center;
  justify-content: center;
  gap: 8px;
  padding: 9.5px 22px;
  background: linear-gradient(135deg, #F2C58D 0%, #C58B50 100%);
  color: #27130D !important;
  font-family: 'Glacial Indifference', sans-serif !important;
  font-size: 12px;
  font-weight: 700;
  letter-spacing: 0.05em;
  text-transform: uppercase;
  border-radius: 9999px;
  text-decoration: none;
  border: none;
  cursor: pointer;
  box-shadow: 0 4px 14px rgba(197, 139, 80, 0.3);
  transition: all 0.25s cubic-bezier(0.16, 1, 0.3, 1);
}

.gp-btn-primary:hover {
  transform: translateY(-2px);
  box-shadow: 0 6px 20px rgba(197, 139, 80, 0.45);
  color: #1A0B05 !important;
}

/* Secondary Button */
.gp-btn-secondary {
  display: inline-flex;
  align-items: center;
  justify-content: center;
  gap: 7px;
  padding: 8.5px 20px;
  background: transparent;
  color: #FFF8F0 !important;
  font-family: 'Glacial Indifference', sans-serif !important;
  font-size: 12px;
  font-weight: 700;
  letter-spacing: 0.05em;
  text-transform: uppercase;
  border-radius: 9999px;
  text-decoration: none;
  border: 1.5px solid rgba(242, 197, 141, 0.6);
  cursor: pointer;
  transition: all 0.25s ease;
}

.gp-btn-secondary:hover {
  background: rgba(242, 197, 141, 0.12);
  border-color: #F2C58D;
  color: #F2C58D !important;
  transform: translateY(-2px);
}

/* ==========================================================================
   SECTION 02 – HERO BANNER
   ========================================================================== */
.gp-hero-section {
  position: relative;
  background-color: #27130D;
  background-image: url('{{ asset("assets/images/home/partnerhero.png") }}');
  background-size: cover;
  background-position: center;
  background-repeat: no-repeat;
  color: #FFF8F0;
  padding: 56px 0 64px;
  overflow: hidden;
  border-bottom: 1px solid var(--gp-border-dark);
}

.gp-hero-bg-graphic {
  position: absolute;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background: linear-gradient(90deg, rgba(31, 14, 7, 0.72) 0%, rgba(31, 14, 7, 0.42) 50%, rgba(50, 24, 15, 0.08) 100%);
  pointer-events: none;
  z-index: 1;
}

.gp-hero-grid {
  position: relative;
  z-index: 2;
  max-width: 640px;
}

.gp-hero-title {
  font-size: 35px;
  color: #FFF8F0;
  line-height: 1.16;
  margin-bottom: 14px;
}

.gp-hero-title span {
  color: var(--gp-champagne);
  display: block;
}

.gp-hero-actions {
  display: flex;
  align-items: center;
  gap: 14px;
  margin-bottom: 30px;
  flex-wrap: wrap;
}

.gp-hero-highlights {
  display: flex;
  align-items: center;
  gap: 20px;
  padding-top: 20px;
  border-top: 1px solid rgba(197, 139, 80, 0.28);
}

.gp-hero-hl-item {
  display: flex;
  align-items: center;
  gap: 8px;
  font-family: 'Glacial Indifference', sans-serif !important;
  font-size: 12px;
  font-weight: 400 !important;
  letter-spacing: 0.02em;
  color: #F8EADB;
}

.gp-hero-hl-icon {
  width: 18px;
  height: 18px;
  color: var(--gp-champagne);
  flex-shrink: 0;
}

.gp-pulse-dot {
  width: 8px;
  height: 8px;
  border-radius: 50%;
  background: #34D399;
  box-shadow: 0 0 0 3px rgba(52, 211, 153, 0.3);
  animation: gpPulse 2s infinite;
}

@keyframes gpPulse {
  0% { box-shadow: 0 0 0 0 rgba(52, 211, 153, 0.7); }
  70% { box-shadow: 0 0 0 8px rgba(52, 211, 153, 0); }
  100% { box-shadow: 0 0 0 0 rgba(52, 211, 153, 0); }
}

/* ==========================================================================
   SECTION 03 – WHY PARTNER WITH GENI MENU (INTRODUCTION)
   ========================================================================== */
.gp-intro-section {
  background: var(--gp-cream-alt);
  padding: 84px 0;
  border-bottom: 1px solid var(--gp-border-light);
}

.gp-intro-header {
  text-align: center;
  max-width: 860px;
  margin: 0 auto 48px;
}

.gp-intro-eyebrow {
  display: inline-flex;
  align-items: center;
  justify-content: center;
  gap: 16px;
  font-family: 'Cinzel', serif !important;
  font-size: 12px;
  font-weight: 400 !important;
  letter-spacing: 0.18em;
  text-transform: uppercase !important;
  color: var(--gp-caramel);
  margin-bottom: 16px;
}

.gp-intro-eyebrow .gp-line {
  display: inline-block;
  width: 42px;
  height: 1px;
  background-color: var(--gp-caramel);
  opacity: 0.7;
}

.gp-intro-title {
  font-family: 'Cinzel', serif !important;
  font-size: 32px;
  font-weight: 400 !important;
  text-transform: uppercase !important;
  color: var(--gp-coffee);
  margin-bottom: 18px;
  line-height: 1.24;
  letter-spacing: 0.03em;
}

.gp-intro-title span {
  color: var(--gp-caramel);
  display: block;
}

.gp-intro-desc {
  font-family: 'Glacial Indifference', sans-serif !important;
  font-size: 14.5px;
  font-weight: 400 !important;
  color: #5A4337;
  line-height: 1.68;
  margin: 0 auto;
  max-width: 780px;
}

/* Four Key Benefits Cards */
.gp-why-cards-grid {
  display: grid;
  grid-template-columns: repeat(4, 1fr);
  gap: 22px;
}

.gp-why-card {
  background: #FFFDFB;
  border: 1.5px solid rgba(197, 139, 80, 0.22);
  border-radius: 18px;
  padding: 34px 22px 30px;
  text-align: center;
  box-shadow: 0 4px 16px rgba(50, 24, 15, 0.04);
  transition: all 0.28s cubic-bezier(0.16, 1, 0.3, 1);
  display: flex;
  flex-direction: column;
  align-items: center;
}

.gp-why-card:hover {
  transform: translateY(-4px);
  border-color: var(--gp-caramel);
  box-shadow: 0 12px 28px rgba(50, 24, 15, 0.09), 0 0 16px rgba(197, 139, 80, 0.15);
}

.gp-why-icon-badge {
  width: 58px;
  height: 58px;
  border-radius: 50%;
  background: rgba(242, 197, 141, 0.45);
  display: flex;
  align-items: center;
  justify-content: center;
  margin-bottom: 22px;
  color: #27130D;
  font-size: 24px;
  transition: all 0.25s ease;
}

.gp-why-icon-badge svg {
  width: 26px;
  height: 26px;
  color: #27130D;
  transition: color 0.25s ease;
}

.gp-why-card:hover .gp-why-icon-badge {
  background: var(--gp-caramel);
  color: #FFF8F0;
  transform: scale(1.05);
}

.gp-why-card:hover .gp-why-icon-badge svg {
  color: #FFF8F0;
}

.gp-why-card-title {
  font-family: 'Cinzel', serif !important;
  font-size: 14.5px;
  font-weight: 400 !important;
  text-transform: uppercase !important;
  letter-spacing: 0.04em;
  color: var(--gp-coffee);
  margin: 0 0 12px;
  line-height: 1.35;
  min-height: 38px;
  display: flex;
  align-items: center;
  justify-content: center;
}

.gp-why-card-desc {
  font-family: 'Glacial Indifference', sans-serif !important;
  font-size: 13px;
  font-weight: 400 !important;
  color: #5A4337;
  line-height: 1.58;
  margin: 0;
}

/* ==========================================================================
   SECTION 04 – PARTNERSHIP MODELS
   ========================================================================== */
.gp-models-section {
  background: linear-gradient(180deg, #32180F 0%, #27130D 100%);
  color: #FFF8F0;
  padding: 84px 0 96px;
  border-bottom: 1px solid var(--gp-border-dark);
  position: relative;
}

.gp-models-header {
  display: flex;
  align-items: flex-end;
  justify-content: space-between;
  margin-bottom: 48px;
  gap: 32px;
}

.gp-models-header-left {
  max-width: 620px;
}

.gp-models-header-right {
  max-width: 440px;
  font-size: 15px;
  color: var(--gp-text-sec-light);
  line-height: 1.65;
}

.gp-models-title {
  font-size: 34px;
  color: #FFF8F0;
  margin: 0;
}

.gp-models-grid {
  display: grid;
  grid-template-columns: repeat(5, 1fr);
  gap: 18px;
}

.gp-model-card {
  background: #FFFDF9;
  border: 1.5px solid rgba(197, 139, 80, 0.25);
  border-radius: 18px;
  padding: 28px 20px 24px;
  display: flex;
  flex-direction: column;
  justify-content: space-between;
  text-align: center;
  color: var(--gp-text-dark);
  transition: all 0.3s cubic-bezier(0.16, 1, 0.3, 1);
  position: relative;
  box-shadow: 0 10px 24px rgba(0, 0, 0, 0.2);
}

.gp-model-card:hover {
  transform: translateY(-6px);
  border-color: var(--gp-caramel);
  box-shadow: 0 16px 36px rgba(0, 0, 0, 0.35), 0 0 20px rgba(197, 139, 80, 0.25);
}

.gp-model-icon-wrap {
  width: 58px;
  height: 58px;
  margin: 0 auto 18px;
  border-radius: 50%;
  background: rgba(87, 42, 19, 0.08);
  border: 1.5px solid rgba(197, 139, 80, 0.3);
  display: flex;
  align-items: center;
  justify-content: center;
  color: var(--gp-coffee);
  transition: all 0.25s ease;
}

.gp-model-card:hover .gp-model-icon-wrap {
  background: var(--gp-coffee);
  color: var(--gp-champagne);
  border-color: var(--gp-caramel);
}

.gp-model-name {
  font-family: 'Cinzel', serif !important;
  font-size: 15px;
  font-weight: 400 !important;
  text-transform: uppercase !important;
  letter-spacing: 0.04em;
  color: var(--gp-coffee);
  margin-bottom: 12px;
  line-height: 1.3;
  min-height: 42px;
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;
  text-align: center;
}

.gp-model-desc {
  font-family: 'Glacial Indifference', sans-serif !important;
  font-size: 13.5px;
  font-weight: 400 !important;
  color: #5A4337;
  line-height: 1.55;
  margin-bottom: 20px;
  min-height: 80px;
  display: flex;
  align-items: center;
  justify-content: center;
  text-align: center;
  flex-grow: 1;
}

.gp-model-ideal {
  background: rgba(197, 139, 80, 0.12);
  border: 1px solid rgba(197, 139, 80, 0.3);
  border-radius: 10px;
  padding: 10px 10px;
  font-family: 'Glacial Indifference', sans-serif !important;
  font-size: 11.5px;
  font-weight: 400 !important;
  color: #4A291B;
  letter-spacing: 0.02em;
  margin-bottom: 14px;
  min-height: 58px;
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
  text-align: center;
  box-sizing: border-box;
}

.gp-model-ideal span {
  display: block;
  font-family: 'Cinzel', serif !important;
  font-weight: 400 !important;
  text-transform: uppercase !important;
  font-size: 9.5px;
  color: #8C5528;
  letter-spacing: 0.08em;
  margin-bottom: 4px;
}

.gp-model-link {
  font-size: 12.5px;
  font-weight: 700;
  color: var(--gp-caramel);
  text-decoration: none;
  display: inline-flex;
  align-items: center;
  justify-content: center;
  gap: 4px;
  transition: color 0.2s ease, transform 0.2s ease;
}

.gp-model-link:hover {
  color: #27130D;
  transform: translateX(3px);
}

/* ==========================================================================
   SECTION 05 – PARTNER ADVANTAGES AND PRODUCT ECOSYSTEM
   ========================================================================== */
.gp-ecosystem-section {
  background: var(--gp-cream);
  padding: 88px 0;
  border-bottom: 1px solid var(--gp-border-light);
}

.gp-ecosystem-grid {
  display: grid;
  grid-template-columns: 1fr 1fr;
  gap: 52px;
  align-items: start;
}

.gp-eco-col-left,
.gp-eco-col-right {
  display: flex;
  flex-direction: column;
}

.gp-eco-title {
  font-size: 30px;
  color: var(--gp-text-dark);
  margin-bottom: 26px;
}

/* 6 Benefit Cards (Left) */
.gp-benefits-grid {
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  gap: 14px;
}

.gp-benefit-card {
  background: #FFFFFF;
  border: 1px solid rgba(197, 139, 80, 0.22);
  border-radius: 14px;
  padding: 18px 14px;
  text-align: center;
  box-shadow: 0 4px 12px rgba(50, 24, 15, 0.04);
  transition: all 0.25s ease;
}

.gp-benefit-card:hover {
  transform: translateY(-3px);
  border-color: var(--gp-caramel);
  box-shadow: 0 8px 20px rgba(50, 24, 15, 0.09);
}

.gp-benefit-icon {
  width: 32px;
  height: 32px;
  margin: 0 auto 10px;
  color: var(--gp-caramel);
  display: flex;
  align-items: center;
  justify-content: center;
}

.gp-benefit-name {
  font-family: 'Cinzel', serif !important;
  font-size: 13px;
  font-weight: 400 !important;
  text-transform: uppercase !important;
  letter-spacing: 0.04em;
  color: var(--gp-text-dark);
  line-height: 1.35;
  margin: 0;
}

/* Capabilities (Right) */
.gp-capabilities-wrap {
  display: grid;
  grid-template-columns: 1fr 1fr;
  gap: 10px 14px;
  margin-bottom: 24px;
}

.gp-capability-item {
  display: flex;
  align-items: center;
  gap: 10px;
  padding: 10px 14px;
  background: #FFFFFF;
  border: 1px solid rgba(197, 139, 80, 0.2);
  border-radius: 10px;
  font-family: 'Glacial Indifference', sans-serif !important;
  font-size: 13px;
  font-weight: 400 !important;
  color: var(--gp-text-dark);
  box-shadow: 0 2px 6px rgba(50, 24, 15, 0.03);
}

.gp-capability-item svg {
  width: 17px;
  height: 17px;
  color: var(--gp-caramel);
  flex-shrink: 0;
}

/* ==========================================================================
   SECTION 06 – SIMPLE PARTNER ONBOARDING (5-STEP JOURNEY)
   ========================================================================== */
.gp-onboarding-section {
  background: var(--gp-cream-alt);
  padding: 84px 0;
  border-bottom: 1px solid var(--gp-border-light);
}

.gp-onboarding-header {
  text-align: center;
  max-width: 820px;
  margin: 0 auto 48px;
}

.gp-journey-stepper {
  display: flex;
  align-items: flex-start;
  justify-content: space-between;
  gap: 24px;
  max-width: 960px;
  margin: 0 auto;
  position: relative;
}

.gp-step-node {
  display: flex;
  flex-direction: column;
  align-items: center;
  text-align: center;
  flex: 1;
  min-width: 0;
  position: relative;
  z-index: 2;
}

.gp-step-circle {
  width: 54px;
  height: 54px;
  border-radius: 50%;
  background: #FFFFFF;
  border: 2px solid var(--gp-caramel);
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;
  font-family: 'Cinzel', serif !important;
  font-size: 16px;
  font-weight: 400 !important;
  color: var(--gp-coffee);
  box-shadow: 0 4px 14px rgba(197, 139, 80, 0.2);
  margin-bottom: 14px;
  flex-shrink: 0;
  transition: all 0.25s ease;
}

.gp-step-circle svg {
  width: 22px;
  height: 22px;
  color: var(--gp-caramel);
}

.gp-step-node:hover .gp-step-circle {
  background: var(--gp-caramel);
  color: #FFF8F0;
  transform: scale(1.08);
}

.gp-step-node:hover .gp-step-circle svg {
  color: #FFF8F0;
}

.gp-step-content {
  display: flex;
  flex-direction: column;
  align-items: center;
  text-align: center;
  width: 100%;
}

.gp-step-title {
  font-family: 'Cinzel', serif !important;
  font-size: 13.5px;
  font-weight: 400 !important;
  text-transform: uppercase !important;
  letter-spacing: 0.04em;
  color: var(--gp-coffee);
  line-height: 1.35;
  margin-bottom: 8px;
  min-height: 38px;
  display: flex;
  align-items: center;
  justify-content: center;
  text-align: center;
}

.gp-step-desc {
  font-family: 'Glacial Indifference', sans-serif !important;
  font-size: 12.5px;
  font-weight: 400 !important;
  color: #6A5043;
  line-height: 1.5;
  margin: 0;
  text-align: center;
}

.gp-step-arrow {
  color: var(--gp-caramel);
  font-size: 18px;
  margin-top: 16px;
  flex-shrink: 0;
  opacity: 0.65;
}

/* ==========================================================================
   SECTION 07 – GLOBAL PARTNERSHIP OPPORTUNITIES
   ========================================================================== */
.gp-global-section {
  background: linear-gradient(135deg, #27130D 0%, #1F0E07 50%, #32180F 100%);
  color: #FFF8F0;
  padding: 84px 0;
  border-bottom: 1px solid var(--gp-border-dark);
  position: relative;
  overflow: hidden;
}

.gp-global-grid {
  display: grid;
  grid-template-columns: 1.18fr 0.82fr;
  align-items: center;
  gap: 44px;
  position: relative;
  z-index: 2;
}

.gp-global-title {
  font-size: 28px;
  line-height: 1.35;
  color: #FFF8F0;
  margin-bottom: 18px;
}

.gp-title-line-nowrap {
  display: inline-block;
  white-space: nowrap;
}

@media (max-width: 600px) {
  .gp-title-line-nowrap {
    white-space: normal;
  }
}

/* Real-Time Interactive Global Map */
.gp-realtime-map-card {
  margin: 28px 0 0;
  border-radius: 18px;
  overflow: hidden;
  border: 1.5px solid rgba(242, 197, 141, 0.35);
  background: #140703;
  box-shadow: 0 16px 40px rgba(0, 0, 0, 0.55), inset 0 1px 0 rgba(242, 197, 141, 0.2);
}

.gp-map-topbar {
  display: flex;
  align-items: center;
  justify-content: space-between;
  padding: 10px 18px;
  background: rgba(32, 14, 8, 0.95);
  border-bottom: 1px solid rgba(242, 197, 141, 0.18);
  font-family: 'Cinzel', serif !important;
  font-size: 11px;
  letter-spacing: 0.08em;
}

.gp-map-status {
  display: flex;
  align-items: center;
  gap: 8px;
  color: #F2C58D;
}

.gp-live-dot {
  width: 8px;
  height: 8px;
  border-radius: 50%;
  background: #10B981;
  box-shadow: 0 0 10px #10B981;
  animation: liveBlink 1.8s ease-in-out infinite;
}

@keyframes liveBlink {
  0%, 100% { opacity: 1; transform: scale(1); }
  50% { opacity: 0.35; transform: scale(0.85); }
}

.gp-map-active-count {
  font-family: 'Glacial Indifference', sans-serif !important;
  font-size: 11.5px;
  color: rgba(255, 248, 240, 0.7);
  letter-spacing: 0.04em;
}

.gp-map-viewport {
  position: relative;
  width: 100%;
  aspect-ratio: 1000 / 500;
  background: #140703;
  overflow: visible;
}

.gp-map-bg-svg {
  width: 100%;
  height: 100%;
  display: block;
  object-fit: cover;
  pointer-events: none;
}

.gp-map-arcs-svg {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  pointer-events: none;
  z-index: 2;
}

.gp-flow-arc {
  fill: none;
  stroke: url(#gpArcGrad);
  stroke-width: 1.8;
  stroke-dasharray: 6, 6;
  animation: flowArc 2.4s linear infinite;
}

@keyframes flowArc {
  from { stroke-dashoffset: 48; }
  to { stroke-dashoffset: 0; }
}

/* Map Pins */
.gp-map-pin {
  position: absolute;
  transform: translate(-50%, -100%);
  z-index: 5;
  cursor: pointer;
  display: flex;
  flex-direction: column;
  align-items: center;
  transition: transform 0.25s ease, z-index 0.25s ease;
}

.gp-pin-pulse,
.gp-pin-pulse-2 {
  position: absolute;
  bottom: 0;
  left: 50%;
  transform: translate(-50%, 50%);
  border-radius: 50%;
  border: 1.5px solid #F2C58D;
  background: rgba(242, 197, 141, 0.25);
  pointer-events: none;
}

.gp-pin-pulse {
  animation: mapPulse 2.4s cubic-bezier(0.2, 0.8, 0.2, 1) infinite;
}

.gp-pin-pulse-2 {
  animation: mapPulse 2.4s cubic-bezier(0.2, 0.8, 0.2, 1) infinite 1.2s;
}

@keyframes mapPulse {
  0% {
    width: 6px;
    height: 6px;
    opacity: 1;
  }
  100% {
    width: 42px;
    height: 42px;
    opacity: 0;
  }
}

.gp-pin-marker {
  width: 24px;
  height: 24px;
  border-radius: 50% 50% 50% 0;
  transform: rotate(-45deg);
  background: linear-gradient(135deg, #F9DCB5 0%, #C58B50 100%);
  box-shadow: 0 4px 12px rgba(0, 0, 0, 0.6), 0 0 10px rgba(242, 197, 141, 0.65);
  display: flex;
  align-items: center;
  justify-content: center;
  transition: transform 0.25s ease, box-shadow 0.25s ease;
  position: relative;
  z-index: 3;
}

.gp-pin-marker svg {
  transform: rotate(45deg);
  width: 12px;
  height: 12px;
  color: #24110A;
}

.gp-map-pin:hover,
.gp-map-pin.highlighted {
  z-index: 20;
}

.gp-map-pin:hover .gp-pin-marker,
.gp-map-pin.highlighted .gp-pin-marker {
  transform: rotate(-45deg) scale(1.28);
  box-shadow: 0 6px 18px rgba(0, 0, 0, 0.7), 0 0 20px #F2C58D;
}

/* Tooltip on pin */
.gp-pin-tooltip {
  position: absolute;
  bottom: calc(100% + 6px);
  left: 50%;
  transform: translateX(-50%);
  background: rgba(28, 12, 6, 0.94);
  backdrop-filter: blur(8px);
  border: 1px solid rgba(242, 197, 141, 0.45);
  border-radius: 8px;
  padding: 5px 9px;
  white-space: nowrap;
  pointer-events: none;
  box-shadow: 0 8px 24px rgba(0, 0, 0, 0.5);
  text-align: center;
  opacity: 0.95;
  transition: opacity 0.2s ease, transform 0.2s ease;
  z-index: 10;
}

.gp-pin-tooltip strong {
  display: block;
  font-family: 'Cinzel', serif !important;
  font-size: 10.5px;
  font-weight: 400 !important;
  color: #F2C58D;
  text-transform: uppercase !important;
  letter-spacing: 0.04em;
  line-height: 1.2;
}

.gp-pin-tooltip span {
  display: block;
  font-family: 'Glacial Indifference', sans-serif !important;
  font-size: 9.5px;
  font-weight: 400 !important;
  color: rgba(255, 248, 240, 0.85);
  line-height: 1.2;
  margin-top: 1px;
}

@media (max-width: 576px) {
  .gp-pin-marker {
    width: 18px;
    height: 18px;
  }
  .gp-pin-marker svg {
    width: 9px;
    height: 9px;
  }
  .gp-pin-tooltip {
    padding: 3px 6px;
  }
  .gp-pin-tooltip strong {
    font-size: 8.5px;
  }
  .gp-pin-tooltip span {
    font-size: 7.5px;
  }
}

.gp-global-regions-box {
  background: rgba(45, 21, 12, 0.85);
  backdrop-filter: blur(12px);
  border: 1.5px solid rgba(242, 197, 141, 0.35);
  border-radius: 20px;
  padding: 34px 30px;
  box-shadow: 0 14px 40px rgba(0, 0, 0, 0.35);
}

.gp-regions-title {
  font-family: 'Cinzel', serif !important;
  font-size: 18px;
  font-weight: 400 !important;
  color: var(--gp-champagne);
  margin-bottom: 22px;
  letter-spacing: 0.06em;
  text-transform: uppercase !important;
}

.gp-region-list {
  list-style: none;
  padding: 0;
  margin: 0 0 28px;
  display: flex;
  flex-direction: column;
  gap: 12px;
}

.gp-region-item {
  display: flex;
  align-items: center;
  gap: 12px;
  font-family: 'Glacial Indifference', sans-serif !important;
  font-size: 15px;
  font-weight: 400 !important;
  color: #FFF8F0;
  cursor: pointer;
  padding: 8px 12px;
  border-radius: 10px;
  transition: all 0.25s ease;
}

.gp-region-item:hover,
.gp-region-item.gp-region-active {
  background: rgba(242, 197, 141, 0.12);
  transform: translateX(4px);
}

.gp-region-item:hover .gp-region-check,
.gp-region-item.gp-region-active .gp-region-check {
  background: var(--gp-champagne);
  color: #27130D;
  box-shadow: 0 0 10px rgba(242, 197, 141, 0.5);
}

.gp-region-check {
  width: 22px;
  height: 22px;
  border-radius: 50%;
  background: rgba(242, 197, 141, 0.16);
  border: 1.5px solid var(--gp-champagne);
  display: flex;
  align-items: center;
  justify-content: center;
  color: var(--gp-champagne);
  flex-shrink: 0;
}

.gp-region-check svg {
  width: 12px;
  height: 12px;
}

/* ==========================================================================
   SECTION 08 – APPLICATION FORM & FAQ
   ========================================================================== */
.gp-form-faq-section {
  background: var(--gp-cream);
  padding: 92px 0;
  border-bottom: 1px solid var(--gp-border-light);
}

.gp-form-faq-grid {
  display: grid;
  grid-template-columns: 1.15fr 0.85fr;
  gap: 52px;
  align-items: start;
}

/* Form Styles */
.gp-form-card {
  background: #FFFFFF;
  border: 1.5px solid rgba(197, 139, 80, 0.28);
  border-radius: 20px;
  padding: 38px 34px;
  box-shadow: 0 12px 36px rgba(50, 24, 15, 0.07);
}

.gp-form-title {
  font-size: 28px;
  color: var(--gp-text-dark);
  margin-bottom: 8px;
}

.gp-form-subtitle {
  font-size: 14.5px;
  color: var(--gp-text-muted);
  margin-bottom: 26px;
  line-height: 1.6;
}

.gp-form-alert {
  padding: 14px 18px;
  border-radius: 10px;
  margin-bottom: 24px;
  font-size: 14px;
  font-weight: 600;
  display: flex;
  align-items: center;
  gap: 10px;
}

.gp-form-alert-success {
  background: #E8F5E9;
  border: 1px solid #A5D6A7;
  color: #1B5E20;
}

.gp-form-alert-error {
  background: #FFEBEE;
  border: 1px solid #FFCDD2;
  color: #B71C1C;
}

.gp-form-row {
  display: grid;
  grid-template-columns: 1fr 1fr;
  gap: 16px;
  margin-bottom: 16px;
}

.gp-form-group {
  margin-bottom: 16px;
}

.gp-field-label {
  display: block;
  font-family: 'Glacial Indifference', sans-serif !important;
  font-size: 12.5px;
  font-weight: 400 !important;
  letter-spacing: 0.03em;
  color: #4A291B;
  margin-bottom: 6px;
}

.gp-required {
  color: #C0392B;
  font-weight: bold;
}

.gp-input,
.gp-select,
.gp-textarea {
  width: 100%;
  padding: 11px 14px;
  font-family: 'Glacial Indifference', sans-serif !important;
  font-size: 14px;
  font-weight: 400 !important;
  color: var(--gp-text-dark);
  background: #FCFAF7;
  border: 1.5px solid rgba(197, 139, 80, 0.32);
  border-radius: 10px;
  outline: none;
  transition: all 0.2s ease;
  box-sizing: border-box;
}

.gp-input:focus,
.gp-select:focus,
.gp-textarea:focus {
  border-color: var(--gp-caramel);
  background: #FFFFFF;
  box-shadow: 0 0 0 3px rgba(197, 139, 80, 0.18);
}

.gp-textarea {
  resize: vertical;
  min-height: 100px;
}

.gp-phone-row {
  display: grid;
  grid-template-columns: 145px 1fr;
  gap: 8px;
}

.gp-form-submit-btn {
  width: 100%;
  padding: 10px 20px;
  font-size: 12px;
  letter-spacing: 0.05em;
  white-space: nowrap;
  gap: 8px;
}

/* FAQ Styles */
.gp-faq-card {
  background: #FFFFFF;
  border: 1.5px solid rgba(197, 139, 80, 0.28);
  border-radius: 20px;
  padding: 34px 28px;
  box-shadow: 0 12px 36px rgba(50, 24, 15, 0.07);
}

.gp-faq-title {
  font-size: 26px;
  color: var(--gp-text-dark);
  margin-bottom: 22px;
}

.gp-faq-list {
  display: flex;
  flex-direction: column;
  gap: 10px;
}

.gp-faq-item {
  border: 1px solid rgba(197, 139, 80, 0.22);
  border-radius: 12px;
  overflow: hidden;
  transition: all 0.22s ease;
  background: #FCFAF7;
}

.gp-faq-item.is-open {
  border-color: var(--gp-caramel);
  background: #FFFFFF;
  box-shadow: 0 4px 14px rgba(50, 24, 15, 0.05);
}

.gp-faq-header {
  width: 100%;
  padding: 14px 18px;
  background: transparent;
  border: none;
  display: flex;
  align-items: center;
  justify-content: space-between;
  gap: 12px;
  cursor: pointer;
  text-align: left;
  font-family: 'Glacial Indifference', sans-serif !important;
  font-size: 14px;
  font-weight: 400 !important;
  color: var(--gp-text-dark);
}

.gp-faq-icon-pill {
  width: 24px;
  height: 24px;
  border-radius: 50%;
  background: rgba(197, 139, 80, 0.15);
  color: var(--gp-coffee);
  display: flex;
  align-items: center;
  justify-content: center;
  flex-shrink: 0;
  font-size: 16px;
  font-weight: bold;
  line-height: 1;
  transition: transform 0.25s ease, background 0.25s ease;
}

.gp-faq-item.is-open .gp-faq-icon-pill {
  transform: rotate(45deg);
  background: var(--gp-coffee);
  color: var(--gp-champagne);
}

.gp-faq-body {
  max-height: 0;
  overflow: hidden;
  transition: max-height 0.3s cubic-bezier(0.16, 1, 0.3, 1), padding 0.3s ease;
  padding: 0 18px;
  font-family: 'Glacial Indifference', sans-serif !important;
  font-size: 13.5px;
  font-weight: 400 !important;
  color: var(--gp-text-muted);
  line-height: 1.65;
}

.gp-faq-item.is-open .gp-faq-body {
  max-height: 300px;
  padding: 0 18px 16px;
}

/* ==========================================================================
   SECTION 09 – FINAL CTA BANNER
   ========================================================================== */
.gp-final-cta-section {
  position: relative;
  background-color: #27130D;
  background-image: url('{{ asset("assets/images/home/partnercta.png") }}');
  background-size: cover;
  background-position: center;
  background-repeat: no-repeat;
  color: #FFF8F0;
  padding: 86px 0 92px;
  text-align: center;
  overflow: hidden;
}

.gp-final-cta-section::before {
  content: '';
  position: absolute;
  inset: 0;
  background: linear-gradient(180deg, rgba(46, 20, 11, 0.78) 0%, rgba(28, 11, 5, 0.86) 100%);
  z-index: 1;
  pointer-events: none;
}

.gp-final-cta-container {
  max-width: 820px;
  margin: 0 auto;
  position: relative;
  z-index: 2;
}

.gp-final-title {
  font-size: 30px;
  color: #FFF8F0;
  margin-bottom: 14px;
}

.gp-final-desc {
  font-family: 'Glacial Indifference', sans-serif !important;
  font-size: 14.5px;
  font-weight: 400 !important;
  color: var(--gp-text-sec-light);
  line-height: 1.65;
  margin-bottom: 28px;
}

.gp-final-tagline {
  margin-top: 24px;
  font-family: 'Cinzel', serif !important;
  font-size: 12px;
  letter-spacing: 0.2em;
  font-weight: 400 !important;
  color: var(--gp-champagne);
  text-transform: uppercase !important;
}

/* ==========================================================================
   RESPONSIVE MEDIA QUERIES (MOBILE, TABLET, DESKTOP)
   ========================================================================== */
@media (max-width: 1024px) {
  .gp-hero-grid {
    max-width: 100%;
  }
  .gp-why-cards-grid {
    grid-template-columns: repeat(2, 1fr);
    gap: 18px;
  }
  .gp-models-grid {
    grid-template-columns: repeat(3, 1fr);
  }
  .gp-models-header {
    flex-direction: column !important;
    align-items: flex-start !important;
    gap: 12px !important;
  }
  .gp-models-header-left,
  .gp-models-header-right {
    max-width: 100% !important;
  }
  .gp-ecosystem-grid,
  .gp-industries-grid,
  .gp-global-grid,
  .gp-form-faq-grid {
    grid-template-columns: 1fr;
    gap: 40px;
  }
}

@media (max-width: 768px) {
  .gp-hero-section {
    padding: 34px 0 38px;
  }
  .gp-hero-title {
    font-size: 24px;
    margin-bottom: 10px;
    line-height: 1.25;
  }
  .gp-hero-actions {
    display: flex !important;
    flex-direction: row !important;
    flex-wrap: nowrap !important;
    gap: 8px !important;
    width: 100% !important;
    max-width: 100% !important;
    margin-bottom: 18px !important;
  }
  .gp-hero-actions .gp-btn-primary,
  .gp-hero-actions .gp-btn-secondary {
    flex: 1 1 50% !important;
    width: 50% !important;
    min-width: 0 !important;
    padding: 9px 4px !important;
    font-size: 10px !important;
    letter-spacing: 0.03em !important;
    white-space: nowrap !important;
    justify-content: center !important;
    text-align: center !important;
    box-sizing: border-box !important;
  }
  .gp-hero-highlights {
    flex-direction: row;
    flex-wrap: wrap;
    justify-content: flex-start;
    gap: 10px 16px;
    padding-top: 14px;
  }
  .gp-hero-hl-item {
    font-size: 11px;
  }
  .gp-hero-hl-icon {
    width: 15px;
    height: 15px;
  }
  .gp-intro-section,
  .gp-models-section,
  .gp-ecosystem-section,
  .gp-onboarding-section,
  .gp-global-section,
  .gp-form-faq-section,
  .gp-final-cta-section {
    padding: 34px 0 !important;
  }
  .gp-intro-header,
  .gp-onboarding-header {
    margin-bottom: 20px !important;
  }
  .gp-models-header {
    display: flex !important;
    flex-direction: column !important;
    align-items: flex-start !important;
    gap: 8px !important;
    margin-bottom: 20px !important;
    text-align: left !important;
  }
  .gp-models-header-left,
  .gp-models-header-right {
    max-width: 100% !important;
    text-align: left !important;
  }
  .gp-models-header-right {
    font-size: 12.5px !important;
    line-height: 1.5 !important;
    color: var(--gp-text-sec-light) !important;
    margin-top: 2px !important;
  }
  .gp-intro-title,
  .gp-models-title,
  .gp-eco-title,
  .gp-global-title {
    font-size: 21px !important;
    line-height: 1.3 !important;
    margin-bottom: 10px !important;
  }
  .gp-eyebrow {
    font-size: 9.5px !important;
    margin-bottom: 6px !important;
  }
  .gp-desc {
    font-size: 12.5px !important;
    line-height: 1.5 !important;
    margin-bottom: 16px !important;
  }
  .gp-why-cards-grid {
    grid-template-columns: repeat(2, 1fr) !important;
    gap: 10px !important;
  }
  .gp-why-card {
    padding: 14px 10px 12px !important;
    border-radius: 12px !important;
  }
  .gp-why-card-icon {
    width: 40px !important;
    height: 40px !important;
    margin-bottom: 8px !important;
  }
  .gp-why-card-icon i {
    font-size: 17px !important;
  }
  .gp-why-card-title {
    font-size: 11.5px !important;
    min-height: auto !important;
    margin-bottom: 4px !important;
    line-height: 1.25 !important;
  }
  .gp-why-card-desc {
    font-size: 10.5px !important;
    line-height: 1.35 !important;
  }
  .gp-models-grid {
    grid-template-columns: repeat(2, 1fr) !important;
    gap: 10px !important;
  }
  .gp-model-card {
    padding: 14px 10px 12px !important;
    border-radius: 12px !important;
    box-shadow: 0 4px 14px rgba(0, 0, 0, 0.15) !important;
  }
  .gp-model-card:last-child {
    grid-column: span 2 !important;
  }
  .gp-model-icon-wrap {
    width: 38px !important;
    height: 38px !important;
    margin-bottom: 8px !important;
  }
  .gp-model-icon-wrap svg {
    width: 18px !important;
    height: 18px !important;
  }
  .gp-model-name {
    font-size: 11px !important;
    min-height: 28px !important;
    margin-bottom: 4px !important;
    line-height: 1.2 !important;
  }
  .gp-model-desc {
    font-size: 10.5px !important;
    min-height: auto !important;
    margin-bottom: 8px !important;
    line-height: 1.35 !important;
  }
  .gp-model-ideal {
    padding: 5px 6px !important;
    min-height: auto !important;
    font-size: 9px !important;
    margin-bottom: 8px !important;
    border-radius: 6px !important;
  }
  .gp-model-ideal span {
    font-size: 8px !important;
    margin-bottom: 1px !important;
  }
  .gp-model-link {
    font-size: 10.5px !important;
  }
  .gp-benefits-grid {
    grid-template-columns: repeat(2, 1fr) !important;
    gap: 8px !important;
  }
  .gp-benefit-card {
    padding: 10px 8px !important;
    gap: 8px !important;
    border-radius: 8px !important;
  }
  .gp-benefit-card-icon {
    width: 32px !important;
    height: 32px !important;
  }
  .gp-benefit-card-icon svg {
    width: 16px !important;
    height: 16px !important;
  }
  .gp-benefit-card-title {
    font-size: 10px !important;
  }
  .gp-capabilities-wrap {
    grid-template-columns: repeat(2, 1fr) !important;
    gap: 8px !important;
  }
  .gp-capability-item {
    padding: 8px 10px !important;
    font-size: 11px !important;
    border-radius: 8px !important;
  }
  .gp-capability-item:last-child {
    grid-column: span 2 !important;
  }
  .gp-journey-stepper {
    flex-direction: column !important;
    gap: 10px !important;
    align-items: stretch !important;
  }
  .gp-step-node {
    max-width: 100% !important;
    width: 100% !important;
    background: #FFFFFF !important;
    border: 1.5px solid rgba(197, 139, 80, 0.22) !important;
    border-radius: 14px !important;
    padding: 14px 16px !important;
    display: flex !important;
    flex-direction: row !important;
    text-align: left !important;
    gap: 14px !important;
    align-items: flex-start !important;
    box-shadow: 0 3px 10px rgba(50, 24, 15, 0.04) !important;
    box-sizing: border-box !important;
  }
  .gp-step-circle {
    width: 44px !important;
    height: 44px !important;
    font-size: 14px !important;
    margin-bottom: 0 !important;
    margin-top: 2px !important;
    flex-shrink: 0 !important;
  }
  .gp-step-circle svg {
    width: 18px !important;
    height: 18px !important;
  }
  .gp-step-content {
    flex: 1 !important;
    min-width: 0 !important;
    display: flex !important;
    flex-direction: column !important;
    align-items: flex-start !important;
    text-align: left !important;
  }
  .gp-step-title {
    font-family: 'Cinzel', serif !important;
    font-size: 12px !important;
    font-weight: 400 !important;
    text-transform: uppercase !important;
    letter-spacing: 0.04em !important;
    color: var(--gp-coffee) !important;
    min-height: auto !important;
    margin: 0 0 4px 0 !important;
    text-align: left !important;
    justify-content: flex-start !important;
    line-height: 1.35 !important;
    display: block !important;
  }
  .gp-step-title br {
    display: block !important;
  }
  .gp-step-desc {
    font-family: 'Glacial Indifference', sans-serif !important;
    font-size: 11px !important;
    font-weight: 400 !important;
    color: #6A5043 !important;
    text-align: left !important;
    line-height: 1.4 !important;
    margin: 0 !important;
  }
  .gp-step-arrow {
    display: none !important;
  }
  .gp-realtime-map-card {
    margin-top: 18px !important;
    border-radius: 12px !important;
  }
  .gp-map-topbar {
    padding: 8px 12px !important;
    font-size: 9.5px !important;
  }
  .gp-global-regions-box {
    padding: 20px 16px !important;
    border-radius: 14px !important;
  }
  .gp-regions-title {
    font-size: 13.5px !important;
    margin-bottom: 14px !important;
  }
  .gp-region-item {
    font-size: 12.5px !important;
    padding: 6px 8px !important;
  }
  .gp-global-regions-box .gp-btn-primary {
    padding: 10.5px 8px !important;
    font-size: clamp(9px, 2.75vw, 11px) !important;
    letter-spacing: 0.02em !important;
    white-space: nowrap !important;
    gap: 5px !important;
    box-sizing: border-box !important;
    width: 100% !important;
    text-overflow: clip !important;
  }
  .gp-global-regions-box .gp-btn-primary span {
    white-space: nowrap !important;
  }
  .gp-form-row {
    grid-template-columns: 1fr;
    gap: 0;
  }
  .gp-form-card,
  .gp-faq-card {
    padding: 20px 14px;
    border-radius: 14px;
  }
  .gp-form-title {
    font-size: 21px;
  }
  .gp-form-submit-btn {
    width: 100% !important;
    padding: 10px 8px !important;
    font-size: clamp(9.5px, 2.8vw, 11px) !important;
    letter-spacing: 0.02em !important;
    white-space: nowrap !important;
    gap: 6px !important;
    box-sizing: border-box !important;
  }
  .gp-form-submit-btn span {
    white-space: nowrap !important;
  }
  .gp-form-subtitle {
    font-size: 12.5px;
    margin-bottom: 16px;
  }
  .gp-phone-row {
    grid-template-columns: 115px 1fr;
  }
  .gp-faq-title {
    font-size: 19px;
  }
  .gp-faq-item {
    border-radius: 10px !important;
    margin-bottom: 10px !important;
    overflow: hidden !important;
  }
  .gp-faq-header {
    font-size: 13px !important;
    padding: 14px 16px !important;
  }
  .gp-faq-body {
    font-size: 12px !important;
    line-height: 1.5 !important;
    padding: 0 16px !important;
    max-height: 0 !important;
    overflow: hidden !important;
  }
  .gp-faq-item.is-open .gp-faq-body {
    max-height: 400px !important;
    padding: 0 16px 14px !important;
  }
  .gp-final-cta-section {
    padding: 44px 16px !important;
  }
  .gp-final-title {
    font-size: 20px;
    margin-bottom: 8px;
  }
  .gp-final-desc {
    font-size: 12px;
    margin-bottom: 18px;
  }
}

@media (max-width: 480px) {
  .gp-hero-title {
    font-size: 22px;
  }
  .gp-hero-actions {
    gap: 6px !important;
  }
  .gp-hero-actions .gp-btn-primary,
  .gp-hero-actions .gp-btn-secondary {
    padding: 8px 3px !important;
    font-size: 9.5px !important;
  }
  .gp-global-regions-box .gp-btn-primary {
    padding: 10px 4px !important;
    font-size: 9.6px !important;
    letter-spacing: 0.015em !important;
  }
  .gp-form-submit-btn {
    padding: 9px 4px !important;
    font-size: 9.8px !important;
    letter-spacing: 0.015em !important;
    white-space: nowrap !important;
  }
}
</style>

<div class="gp-scope">

  {{-- =========================================================================
       SECTION 02 – HERO BANNER
       ========================================================================= --}}
  <section class="gp-hero-section">
    <div class="gp-hero-bg-graphic"></div>
    <div class="gp-container">
      <div class="gp-hero-grid">
        
        {{-- Left: Content --}}
        <div>
          <div class="gp-eyebrow">
            <svg viewBox="0 0 24 24" width="14" height="14" fill="currentColor"><path d="M12 2l2.4 7.4H22l-6 4.6 2.3 7.2L12 16.8 5.7 21.2 8 14 2 9.4h7.6z"/></svg>
            GENI MENU PARTNER PROGRAMME
          </div>
          <h1 class="gp-heading-serif gp-hero-title">
            GROW YOUR BUSINESS
            <span>WITH US.</span>
          </h1>
          <p class="gp-desc">
            Team up with Geni Menu in your area to reach more hotels and restaurants—with clear terms, steady income, and full team support.
          </p>

          <div class="gp-hero-actions">
            <a href="#partner-application" class="gp-btn-primary">
              <span>JOIN US NOW</span>
              <span>&rarr;</span>
            </a>
            <a href="#partner-onboarding" class="gp-btn-secondary">
              <span>SEE HOW IT WORKS</span>
            </a>
          </div>

          <div class="gp-hero-highlights">
            <div class="gp-hero-hl-item">
              <svg class="gp-hero-hl-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <path d="M16 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                <circle cx="9" cy="7" r="4"></circle>
                <path d="M23 21v-2a4 4 0 0 0-3-3.87"></path>
                <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
              </svg>
              <span>Grow Your Business</span>
            </div>
            <div class="gp-hero-hl-item">
              <svg class="gp-hero-hl-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <polyline points="23 6 13.5 15.5 8.5 10.5 1 18"></polyline>
                <polyline points="17 6 23 6 23 12"></polyline>
              </svg>
              <span>Expand Your Market</span>
            </div>
            <div class="gp-hero-hl-item">
              <svg class="gp-hero-hl-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <circle cx="12" cy="12" r="10"></circle>
                <line x1="2" y1="12" x2="22" y2="12"></line>
                <path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"></path>
              </svg>
              <span>Be Part of a Global Network</span>
            </div>
          </div>
        </div>

      </div>
    </div>
  </section>

  {{-- =========================================================================
       SECTION 03 – WHY PARTNER WITH GENI MENU
       ========================================================================= --}}
  <section class="gp-intro-section" id="why-partner">
    <div class="gp-container">
      
      {{-- Centered Header --}}
      <div class="gp-intro-header">
        <div class="gp-intro-eyebrow">
          <span class="gp-line"></span>
          <span>WHY PARTNER WITH GENI MENU</span>
          <span class="gp-line"></span>
        </div>
        <h2 class="gp-heading-serif gp-intro-title">
          A GLOBAL PARTNERSHIP FOR
          <span>MODERN HOSPITALITY SOLUTIONS</span>
        </h2>
        <p class="gp-intro-desc">
          Partner with Geni Menu to bring a complete, cloud-based restaurant platform to your market.<br>
          Grow your business with a proven solution, strong demand and long-term opportunities in the hospitality industry.
        </p>
      </div>

      {{-- Four Key Benefits Grid --}}
      <div class="gp-why-cards-grid">
        
        {{-- Card 01: GROW REVENUE --}}
        <div class="gp-why-card">
          <div class="gp-why-icon-badge">
            <i class="bi bi-graph-up-arrow"></i>
          </div>
          <h3 class="gp-why-card-title">GROW REVENUE</h3>
          <p class="gp-why-card-desc">
            Tap into the growing demand for digital restaurant solutions worldwide.
          </p>
        </div>

        {{-- Card 02: OFFER A COMPLETE PLATFORM --}}
        <div class="gp-why-card">
          <div class="gp-why-icon-badge">
            <i class="bi bi-layers"></i>
          </div>
          <h3 class="gp-why-card-title">OFFER A COMPLETE PLATFORM</h3>
          <p class="gp-why-card-desc">
            Deliver a cloud-based solution that covers menu, ordering, POS, kitchen, inventory and more.
          </p>
        </div>

        {{-- Card 03: GET FULL SUPPORT --}}
        <div class="gp-why-card">
          <div class="gp-why-icon-badge">
            <i class="bi bi-headset"></i>
          </div>
          <h3 class="gp-why-card-title">GET FULL SUPPORT</h3>
          <p class="gp-why-card-desc">
            Access product training, marketing resources and ongoing partner assistance.
          </p>
        </div>

        {{-- Card 04: EXPAND GLOBALLY --}}
        <div class="gp-why-card">
          <div class="gp-why-icon-badge">
            <i class="bi bi-globe"></i>
          </div>
          <h3 class="gp-why-card-title">EXPAND GLOBALLY</h3>
          <p class="gp-why-card-desc">
            Build a sustainable, long-term business in the fast-growing hospitality technology market.
          </p>
        </div>

      </div>

    </div>
  </section>

  {{-- =========================================================================
       SECTION 04 – PARTNERSHIP MODELS (HIDDEN AS REQUESTED)
       ========================================================================= --}}
  <section class="gp-models-section" id="partner-models" style="display: none !important;">
    <div class="gp-container">
      
      <div class="gp-models-header">
        <div class="gp-models-header-left">
          <div class="gp-eyebrow">
            FIND YOUR PARTNERSHIP MODEL
          </div>
          <h2 class="gp-heading-serif gp-models-title">
            MULTIPLE WAYS TO GROW WITH GENI MENU.
          </h2>
        </div>
        <div class="gp-models-header-right">
          Explore partnership opportunities designed for different business models, capabilities and market ambitions.
        </div>
      </div>

      <div class="gp-models-grid">
        
        {{-- Card 01: Referral Partner --}}
        <div class="gp-model-card">
          <div>
            <div class="gp-model-icon-wrap">
              <svg viewBox="0 0 24 24" width="28" height="28" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                <circle cx="9" cy="7" r="4"></circle>
                <path d="M23 21v-2a4 4 0 0 0-3-3.87"></path>
                <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
              </svg>
            </div>
            <h3 class="gp-model-name">Referral<br>Partner</h3>
            <p class="gp-model-desc">
              Introduce restaurants and hospitality businesses to Geni Menu and develop business opportunities through qualified referrals.
            </p>
          </div>
          <div>
            <div class="gp-model-ideal">
              <span>Ideal for</span>
              Business Consultants &amp; Networks
            </div>
            <a href="#partner-application" class="gp-model-link" onclick="selectPartnerModel('Referral Partner')">
              <span>Apply for Model</span> &rarr;
            </a>
          </div>
        </div>

        {{-- Card 02: Reseller Partner --}}
        <div class="gp-model-card">
          <div>
            <div class="gp-model-icon-wrap">
              <svg viewBox="0 0 24 24" width="28" height="28" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path>
                <polyline points="9 22 9 12 15 12 15 22"></polyline>
              </svg>
            </div>
            <h3 class="gp-model-name">Reseller<br>Partner</h3>
            <p class="gp-model-desc">
              Promote and sell Geni Menu subscriptions while developing customer relationships in your local market.
            </p>
          </div>
          <div>
            <div class="gp-model-ideal">
              <span>Ideal for</span>
              Software Resellers &amp; IT Companies
            </div>
            <a href="#partner-application" class="gp-model-link" onclick="selectPartnerModel('Reseller Partner')">
              <span>Apply for Model</span> &rarr;
            </a>
          </div>
        </div>

        {{-- Card 03: Distribution Partner --}}
        <div class="gp-model-card">
          <div>
            <div class="gp-model-icon-wrap">
              <svg viewBox="0 0 24 24" width="28" height="28" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <polyline points="21 8 21 21 3 21 3 8"></polyline>
                <rect x="1" y="3" width="22" height="5"></rect>
                <line x1="10" y1="12" x2="14" y2="12"></line>
              </svg>
            </div>
            <h3 class="gp-model-name">Distribution<br>Partner</h3>
            <p class="gp-model-desc">
              Develop regional business opportunities and explore reseller network development within your target territory.
            </p>
          </div>
          <div>
            <div class="gp-model-ideal">
              <span>Ideal for</span>
              Regional Distributors
            </div>
            <a href="#partner-application" class="gp-model-link" onclick="selectPartnerModel('Distribution Partner')">
              <span>Apply for Model</span> &rarr;
            </a>
          </div>
        </div>

        {{-- Card 04: Technology Partner --}}
        <div class="gp-model-card">
          <div>
            <div class="gp-model-icon-wrap">
              <svg viewBox="0 0 24 24" width="28" height="28" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <polyline points="16 18 22 12 16 6"></polyline>
                <polyline points="8 6 2 12 8 18"></polyline>
              </svg>
            </div>
            <h3 class="gp-model-name">Technology<br>Partner</h3>
            <p class="gp-model-desc">
              Collaborate on technology integrations, complementary solutions and connected hospitality experiences.
            </p>
          </div>
          <div>
            <div class="gp-model-ideal">
              <span>Ideal for</span>
              Technology Providers &amp; Agencies
            </div>
            <a href="#partner-application" class="gp-model-link" onclick="selectPartnerModel('Technology Partner')">
              <span>Apply for Model</span> &rarr;
            </a>
          </div>
        </div>

        {{-- Card 05: Strategic Business Partner --}}
        <div class="gp-model-card">
          <div>
            <div class="gp-model-icon-wrap">
              <svg viewBox="0 0 24 24" width="28" height="28" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <polygon points="12 2 2 7 12 12 22 7 12 2"></polygon>
                <polyline points="2 17 12 22 22 17"></polyline>
                <polyline points="2 12 12 17 22 12"></polyline>
              </svg>
            </div>
            <h3 class="gp-model-name">Strategic Business<br>Partner</h3>
            <p class="gp-model-desc">
              Build long-term business collaborations and explore new opportunities in the hospitality technology ecosystem.
            </p>
          </div>
          <div>
            <div class="gp-model-ideal">
              <span>Ideal for</span>
              Hospitality Consultants &amp; Networks
            </div>
            <a href="#partner-application" class="gp-model-link" onclick="selectPartnerModel('Strategic Business Partner')">
              <span>Apply for Model</span> &rarr;
            </a>
          </div>
        </div>

      </div>

    </div>
  </section>

  {{-- =========================================================================
       SECTION 06 – SIMPLE PARTNER ONBOARDING (5-STEP JOURNEY)
       ========================================================================= --}}
  <section class="gp-onboarding-section" id="partner-onboarding">
    <div class="gp-container">
      
      <div class="gp-onboarding-header">
        <div class="gp-eyebrow gp-eyebrow-dark">
          SIMPLE PARTNER ONBOARDING
        </div>
        <h2 class="gp-heading-serif gp-eco-title">
          BECOME A PARTNER
        </h2>
      </div>

      <div class="gp-journey-stepper">
        
        {{-- Step 01 --}}
        <div class="gp-step-node">
          <div class="gp-step-circle">1</div>
          <div class="gp-step-content">
            <h3 class="gp-step-title">Join</h3>
            <p class="gp-step-desc">
              Fill out the short form with your basic details. Once our team reviews and approves it, we complete a simple agreement and get you started.
            </p>
          </div>
        </div>

        <div class="gp-step-arrow">&rarr;</div>

        {{-- Step 02 --}}
        <div class="gp-step-node">
          <div class="gp-step-circle">2</div>
          <div class="gp-step-content">
            <h3 class="gp-step-title">Connect</h3>
            <p class="gp-step-desc">
              With clear terms in place, you are ready to connect with us. Simply introduce nearby hotels and restaurants to us and grow together.
            </p>
          </div>
        </div>

        <div class="gp-step-arrow">&rarr;</div>

        {{-- Step 03 --}}
        <div class="gp-step-node">
          <div class="gp-step-circle">3</div>
          <div class="gp-step-content">
            <h3 class="gp-step-title">Earn</h3>
            <p class="gp-step-desc">
              Bring in more businesses to earn steady returns. Everything follows clear agreement terms, with no hidden charges and straightforward payouts.
            </p>
          </div>
        </div>

      </div>

    </div>
  </section>

  {{-- =========================================================================
       SECTION 07 – GLOBAL PARTNERSHIP OPPORTUNITIES (HIDDEN AS REQUESTED)
       ========================================================================= --}}
  <section class="gp-global-section" style="display: none !important;">
    <div class="gp-container">
      <div class="gp-global-grid">
        
        {{-- Left: Text & Global Map --}}
        <div>
          <div class="gp-eyebrow">
            EXPANDING BEYOND BORDERS
          </div>
          <h2 class="gp-heading-serif gp-global-title">
            <span class="gp-title-line-nowrap">YOUR MARKET. OUR TECHNOLOGY.</span><br>
            <span class="gp-gold-accent">SHARED GROWTH.</span>
          </h2>
          <p class="gp-desc" style="max-width: 580px;">
            We welcome partnership enquiries from businesses looking to introduce connected restaurant solutions across international markets.
          </p>

          <div class="gp-realtime-map-card">
            <div class="gp-map-topbar">
              <div class="gp-map-status">
                <span class="gp-live-dot"></span>
                <span>LIVE GLOBAL NETWORK</span>
              </div>
              <div class="gp-map-active-count">5 ACTIVE REGIONS</div>
            </div>

            <div class="gp-map-viewport">
              {{-- High Detail Vector SVG World Map --}}
              <img src="{{ asset('assets/images/partners/world-map.svg') }}" alt="Geni Menu Real-Time Global Partner Network Map" class="gp-map-bg-svg" loading="lazy">

              {{-- Curved Glowing Arcs Connecting Regions --}}
              <svg class="gp-map-arcs-svg" viewBox="0 0 1000 500" preserveAspectRatio="none">
                <defs>
                  <linearGradient id="gpArcGrad" x1="0%" y1="0%" x2="100%" y2="0%">
                    <stop offset="0%" stop-color="#F2C58D" stop-opacity="0.3"/>
                    <stop offset="50%" stop-color="#F9DCB5" stop-opacity="0.95"/>
                    <stop offset="100%" stop-color="#C58B50" stop-opacity="0.4"/>
                  </linearGradient>
                </defs>
                {{-- North America to Europe --}}
                <path d="M 294 153 Q 395 70 500 116" class="gp-flow-arc" />
                {{-- Europe to Middle East --}}
                <path d="M 500 116 Q 580 110 654 206" class="gp-flow-arc" />
                {{-- Middle East to Asia-Pacific --}}
                <path d="M 654 206 Q 725 200 788 289" class="gp-flow-arc" />
                {{-- Middle East to Africa --}}
                <path d="M 654 206 Q 645 260 602 298" class="gp-flow-arc" />
              </svg>

              {{-- Pin 1: North America --}}
              <div class="gp-map-pin" data-region="na" style="left: 29.4%; top: 30.6%;">
                <div class="gp-pin-pulse"></div>
                <div class="gp-pin-pulse-2"></div>
                <div class="gp-pin-marker">
                  <svg viewBox="0 0 24 24" fill="currentColor"><path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5c-1.38 0-2.5-1.12-2.5-2.5s1.12-2.5 2.5-2.5 2.5 1.12 2.5 2.5-1.12 2.5-2.5 2.5z"/></svg>
                </div>
                <div class="gp-pin-tooltip">
                  <strong>North America</strong>
                  <span>USA &amp; Canada</span>
                </div>
              </div>

              {{-- Pin 2: Europe & UK --}}
              <div class="gp-map-pin" data-region="eu" style="left: 50.0%; top: 23.1%;">
                <div class="gp-pin-pulse"></div>
                <div class="gp-pin-pulse-2"></div>
                <div class="gp-pin-marker">
                  <svg viewBox="0 0 24 24" fill="currentColor"><path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5c-1.38 0-2.5-1.12-2.5-2.5s1.12-2.5 2.5-2.5 2.5 1.12 2.5 2.5-1.12 2.5-2.5 2.5z"/></svg>
                </div>
                <div class="gp-pin-tooltip">
                  <strong>Europe &amp; UK</strong>
                  <span>London &amp; EU Hubs</span>
                </div>
              </div>

              {{-- Pin 3: Middle East --}}
              <div class="gp-map-pin highlighted" data-region="me" style="left: 65.4%; top: 41.2%;">
                <div class="gp-pin-pulse"></div>
                <div class="gp-pin-pulse-2"></div>
                <div class="gp-pin-marker">
                  <svg viewBox="0 0 24 24" fill="currentColor"><path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5c-1.38 0-2.5-1.12-2.5-2.5s1.12-2.5 2.5-2.5 2.5 1.12 2.5 2.5-1.12 2.5-2.5 2.5z"/></svg>
                </div>
                <div class="gp-pin-tooltip">
                  <strong>Middle East</strong>
                  <span>Dubai &amp; GCC Hub</span>
                </div>
              </div>

              {{-- Pin 4: Asia-Pacific --}}
              <div class="gp-map-pin" data-region="apac" style="left: 78.8%; top: 57.7%;">
                <div class="gp-pin-pulse"></div>
                <div class="gp-pin-pulse-2"></div>
                <div class="gp-pin-marker">
                  <svg viewBox="0 0 24 24" fill="currentColor"><path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5c-1.38 0-2.5-1.12-2.5-2.5s1.12-2.5 2.5-2.5 2.5 1.12 2.5 2.5-1.12 2.5-2.5 2.5z"/></svg>
                </div>
                <div class="gp-pin-tooltip">
                  <strong>Asia-Pacific</strong>
                  <span>Singapore &amp; SEA</span>
                </div>
              </div>

              {{-- Pin 5: Africa --}}
              <div class="gp-map-pin" data-region="af" style="left: 60.2%; top: 59.5%;">
                <div class="gp-pin-pulse"></div>
                <div class="gp-pin-pulse-2"></div>
                <div class="gp-pin-marker">
                  <svg viewBox="0 0 24 24" fill="currentColor"><path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5c-1.38 0-2.5-1.12-2.5-2.5s1.12-2.5 2.5-2.5 2.5 1.12 2.5 2.5-1.12 2.5-2.5 2.5z"/></svg>
                </div>
                <div class="gp-pin-tooltip">
                  <strong>Africa</strong>
                  <span>Nairobi &amp; Emerging Hubs</span>
                </div>
              </div>

            </div>
          </div>
        </div>

        {{-- Right: Regions Box & CTA --}}
        <div>
          <div class="gp-global-regions-box">
            <h3 class="gp-regions-title">
              EXPLORE PARTNERSHIP OPPORTUNITIES ACROSS:
            </h3>

            <ul class="gp-region-list">
              <li class="gp-region-item" data-target-pin="na">
                <span class="gp-region-check">
                  <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg>
                </span>
                <span>North America</span>
              </li>
              <li class="gp-region-item" data-target-pin="eu">
                <span class="gp-region-check">
                  <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg>
                </span>
                <span>Europe &amp; United Kingdom</span>
              </li>
              <li class="gp-region-item gp-region-active" data-target-pin="me">
                <span class="gp-region-check">
                  <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg>
                </span>
                <span>Middle East</span>
              </li>
              <li class="gp-region-item" data-target-pin="apac">
                <span class="gp-region-check">
                  <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg>
                </span>
                <span>Asia-Pacific</span>
              </li>
              <li class="gp-region-item" data-target-pin="af">
                <span class="gp-region-check">
                  <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg>
                </span>
                <span>Africa</span>
              </li>
            </ul>

            <a href="#partner-application" class="gp-btn-primary" style="width: 100%;">
              <span>EXPLORE PARTNERSHIP OPPORTUNITIES</span>
              <span>&rarr;</span>
            </a>
          </div>
        </div>

      </div>
    </div>
  </section>

  {{-- =========================================================================
       SECTION 08 – APPLICATION FORM AND FAQ
       ========================================================================= --}}
  <section class="gp-form-faq-section" id="partner-application">
    <div class="gp-container">
      <div class="gp-form-faq-grid">
        
        {{-- Left: Application Form --}}
        <div>
          <div class="gp-form-card">
            
            <h2 class="gp-heading-serif gp-form-title">
              LET'S START A PARTNERSHIP.
            </h2>
            <p class="gp-form-subtitle">
              Tell us about your business, your market and the partnership opportunity you would like to explore.
            </p>

            @if(session('success'))
              <div class="gp-form-alert gp-form-alert-success">
                <svg viewBox="0 0 24 24" width="20" height="20" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path><polyline points="22 4 12 14.01 9 11.01"></polyline></svg>
                <span>{{ session('success') }}</span>
              </div>
            @endif

            @if(session('error'))
              <div class="gp-form-alert gp-form-alert-error">
                <svg viewBox="0 0 24 24" width="20" height="20" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"></circle><line x1="12" y1="8" x2="12" y2="12"></line><line x1="12" y1="16" x2="12.01" y2="16"></line></svg>
                <span>{{ session('error') }}</span>
              </div>
            @endif

            @if ($errors->any())
              <div class="gp-form-alert gp-form-alert-error">
                <svg viewBox="0 0 24 24" width="20" height="20" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"></circle><line x1="12" y1="8" x2="12" y2="12"></line><line x1="12" y1="16" x2="12.01" y2="16"></line></svg>
                <span>Please fill in all required fields accurately.</span>
              </div>
            @endif

            @php
              $allCountriesList = \App\Models\Country::orderBy('countries_name')->get();
              $priorityCodes = ['US', 'IN', 'AE', 'GB', 'SG', 'MY', 'SA', 'QA', 'CA', 'AU'];
              $priorityCountries = $allCountriesList->whereIn('countries_code', $priorityCodes)->sortBy(function($c) use ($priorityCodes) {
                  return array_search($c->countries_code, $priorityCodes);
              });
              $selectedCountry = old('country', 'United States');
              $selectedPhoneCode = old('phone_code', '+1');
            @endphp

            <form action="{{ route('contact.submit') }}" method="POST" id="gp-partner-form" novalidate>
              @csrf
              <input type="hidden" name="form_type" value="partner">

              {{-- Invisible Anti-Spam Honeypot & Timing Token --}}
              <div style="display:none !important; position:absolute !important; left:-9999px !important; opacity:0 !important;" aria-hidden="true">
                <input type="text" name="_hp_website" value="" tabindex="-1" autocomplete="off">
                <input type="email" name="_hp_email" value="" tabindex="-1" autocomplete="off">
              </div>
              <input type="hidden" name="_form_time" value="{{ encrypt(time()) }}">

              <div class="gp-form-row">
                <div class="gp-form-group">
                  <label class="gp-field-label">Full Name <span class="gp-required">*</span></label>
                  <input type="text" name="name" class="gp-input" placeholder="e.g. Alexander Wright" value="{{ old('name') }}" required>
                </div>
                <div class="gp-form-group">
                  <label class="gp-field-label">Company / Business Name <span class="gp-required">*</span></label>
                  <input type="text" name="company" class="gp-input" placeholder="e.g. Nexus Tech Solutions" value="{{ old('company') }}" required>
                </div>
              </div>

              <div class="gp-form-row">
                <div class="gp-form-group">
                  <label class="gp-field-label">Business Email Address <span class="gp-required">*</span></label>
                  <input type="email" name="email" class="gp-input" placeholder="alex@nexustech.com" value="{{ old('email') }}" required>
                </div>
                <div class="gp-form-group">
                  <label class="gp-field-label">Contact Number <span class="gp-required">*</span></label>
                  <div class="gp-phone-row">
                    <select name="phone_code" id="gp-phone-code-select" class="gp-select" aria-label="Country Code">
                      <optgroup label="Popular">
                        @foreach ($priorityCountries as $c)
                          <option value="+{{ $c->phonecode }}" data-code="{{ $c->countries_code }}" data-country="{{ $c->countries_name }}" {{ ($selectedPhoneCode == '+'.$c->phonecode && ($selectedCountry == $c->countries_name || ($c->countries_code == 'US' && ($selectedCountry == 'United States' || $selectedCountry == 'USA')) || ($c->countries_code == 'IN' && $selectedCountry == 'India'))) ? 'selected' : '' }}>
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
                    <input type="tel" name="phone_number" id="gp-phone-number-input" class="gp-input" placeholder="(555) 000-0000" value="{{ old('phone_number') }}" required>
                  </div>
                </div>
              </div>

              <div class="gp-form-row">
                <div class="gp-form-group">
                  <label class="gp-field-label">Country <span class="gp-required">*</span></label>
                  <select name="country" id="gp-country-select" class="gp-select" required>
                    <option value="" disabled {{ old('country') ? '' : 'selected' }}>Select your country</option>
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
                <div class="gp-form-group">
                  <label class="gp-field-label">Company Website (optional)</label>
                  <input type="url" name="website" class="gp-input" placeholder="https://yourcompany.com" value="{{ old('website') }}">
                </div>
              </div>

              <div class="gp-form-row">
                <div class="gp-form-group">
                  <label class="gp-field-label">Business Type <span class="gp-required">*</span></label>
                  <select name="subject" id="gp-business-type-select" class="gp-select" required>
                    <option value="" disabled {{ old('subject') ? '' : 'selected' }}>Select your business type</option>
                    <option value="Software Reseller" {{ old('subject') == 'Software Reseller' ? 'selected' : '' }}>Software Reseller</option>
                    <option value="IT & Tech Provider" {{ old('subject') == 'IT & Tech Provider' ? 'selected' : '' }}>IT &amp; Tech Provider</option>
                    <option value="Restaurant Consultant" {{ old('subject') == 'Restaurant Consultant' ? 'selected' : '' }}>Hospitality / Restaurant Consultant</option>
                    <option value="Hardware Distributor" {{ old('subject') == 'Hardware Distributor' ? 'selected' : '' }}>Hardware Distributor / POS Vendor</option>
                    <option value="Digital Marketing Agency" {{ old('subject') == 'Digital Marketing Agency' ? 'selected' : '' }}>Digital Marketing Agency</option>
                    <option value="Other" {{ (old('subject') == 'Other' || old('other_subject')) ? 'selected' : '' }}>Other</option>
                  </select>

                  <div id="gp-other-business-wrap" style="display: {{ (old('subject') == 'Other' || old('other_subject')) ? 'block' : 'none' }}; margin-top: 10px;">
                    <label class="gp-field-label" style="font-size: 11.5px; margin-bottom: 5px;">Please Specify Business Type <span class="gp-required">*</span></label>
                    <input type="text" name="other_subject" id="gp-other-business-input" class="gp-input" placeholder="e.g. POS Integrator, Food Distributor, Marketing Agency" value="{{ old('other_subject') }}">
                  </div>
                </div>

                <div class="gp-form-group">
                  <label class="gp-field-label">Preferred Partnership Model <span class="gp-required">*</span></label>
                  <select name="preferred_model" id="gp-preferred-model-select" class="gp-select" required>
                    <option value="" disabled {{ old('preferred_model') ? '' : 'selected' }}>Select preferred model</option>
                    <option value="Referral Partner" {{ old('preferred_model') == 'Referral Partner' ? 'selected' : '' }}>Referral Partner</option>
                    <option value="Reseller Partner" {{ old('preferred_model') == 'Reseller Partner' ? 'selected' : '' }}>Reseller Partner</option>
                    <option value="Distribution Partner" {{ old('preferred_model') == 'Distribution Partner' ? 'selected' : '' }}>Distribution Partner</option>
                    <option value="Technology Partner" {{ old('preferred_model') == 'Technology Partner' ? 'selected' : '' }}>Technology Partner</option>
                    <option value="Strategic Business Partner" {{ old('preferred_model') == 'Strategic Business Partner' ? 'selected' : '' }}>Strategic Business Partner</option>
                    <option value="Other" {{ (old('preferred_model') == 'Other' || old('other_preferred_model')) ? 'selected' : '' }}>Other</option>
                  </select>

                  <div id="gp-other-model-wrap" style="display: {{ (old('preferred_model') == 'Other' || old('other_preferred_model')) ? 'block' : 'none' }}; margin-top: 10px;">
                    <label class="gp-field-label" style="font-size: 11.5px; margin-bottom: 5px;">Please Specify Preferred Model <span class="gp-required">*</span></label>
                    <input type="text" name="other_preferred_model" id="gp-other-model-input" class="gp-input" placeholder="e.g. Regional Joint Venture, Affiliate, White Label" value="{{ old('other_preferred_model') }}">
                  </div>
                </div>
              </div>

              <div class="gp-form-row">
                <div class="gp-form-group">
                  <label class="gp-field-label">Current Customer Base <span class="gp-required">*</span></label>
                  <select name="customer_base" class="gp-select" required>
                    <option value="" disabled {{ old('customer_base') ? '' : 'selected' }}>Select customer base size</option>
                    <option value="1 - 10 Clients" {{ old('customer_base') == '1 - 10 Clients' ? 'selected' : '' }}>1 - 10 Clients</option>
                    <option value="11 - 50 Clients" {{ old('customer_base') == '11 - 50 Clients' ? 'selected' : '' }}>11 - 50 Clients</option>
                    <option value="51 - 200 Clients" {{ old('customer_base') == '51 - 200 Clients' ? 'selected' : '' }}>51 - 200 Clients</option>
                    <option value="200+ Clients" {{ old('customer_base') == '200+ Clients' ? 'selected' : '' }}>200+ Clients</option>
                    <option value="New Business / Startup" {{ old('customer_base') == 'New Business / Startup' ? 'selected' : '' }}>New Business / Startup</option>
                  </select>
                </div>
                <div class="gp-form-group">
                  <label class="gp-field-label">Years in Business <span class="gp-required">*</span></label>
                  <select name="years_in_business" class="gp-select" required>
                    <option value="" disabled {{ old('years_in_business') ? '' : 'selected' }}>Select operating experience</option>
                    <option value="Less than 1 year" {{ old('years_in_business') == 'Less than 1 year' ? 'selected' : '' }}>Less than 1 year</option>
                    <option value="1 - 3 years" {{ old('years_in_business') == '1 - 3 years' ? 'selected' : '' }}>1 - 3 years</option>
                    <option value="3 - 5 years" {{ old('years_in_business') == '3 - 5 years' ? 'selected' : '' }}>3 - 5 years</option>
                    <option value="5+ years" {{ old('years_in_business') == '5+ years' ? 'selected' : '' }}>5+ years</option>
                  </select>
                </div>
              </div>

              <div class="gp-form-group">
                <label class="gp-field-label">Tell Us About Your Business and Partnership Interests <span class="gp-required">*</span></label>
                <textarea name="message" class="gp-textarea" placeholder="Describe your company, target territory, current hospitality clients, and how you would like to collaborate with Geni Menu..." required>{{ old('message') }}</textarea>
              </div>

              <button type="submit" class="gp-btn-primary gp-form-submit-btn">
                <span>SUBMIT PARTNERSHIP APPLICATION</span>
                <span>&rarr;</span>
              </button>

            </form>

          </div>
        </div>

        {{-- Right: Frequently Asked Questions --}}
        <div>
          <div class="gp-faq-card">
            
            <h2 class="gp-heading-serif gp-faq-title">
              FREQUENTLY ASKED QUESTIONS
            </h2>

            <div class="gp-faq-list">
              
              {{-- FAQ 1 --}}
              <div class="gp-faq-item is-open">
                <button type="button" class="gp-faq-header" onclick="togglePartnerFaq(this)">
                  <span>Who can become a Geni Menu partner?</span>
                  <span class="gp-faq-icon-pill">+</span>
                </button>
                <div class="gp-faq-body">
                  We welcome IT companies, software resellers, regional hardware distributors, restaurant consultants, digital marketing agencies, and strategic business networks interested in delivering smart restaurant technology to their local markets.
                </div>
              </div>

              {{-- FAQ 2 --}}
              <div class="gp-faq-item">
                <button type="button" class="gp-faq-header" onclick="togglePartnerFaq(this)">
                  <span>What partnership models are available?</span>
                  <span class="gp-faq-icon-pill">+</span>
                </button>
                <div class="gp-faq-body">
                  Geni Menu offers five tailored partnership tiers: Referral Partner (introductions &amp; commissions), Reseller Partner (local sales &amp; client onboarding), Distribution Partner (regional market development), Technology Partner (system integrations), and Strategic Business Partner.
                </div>
              </div>

              {{-- FAQ 3 --}}
              <div class="gp-faq-item">
                <button type="button" class="gp-faq-header" onclick="togglePartnerFaq(this)">
                  <span>Can I represent Geni Menu in my country?</span>
                  <span class="gp-faq-icon-pill">+</span>
                </button>
                <div class="gp-faq-body">
                  Yes. We are actively expanding internationally across North America, Europe, United Kingdom, Middle East, Asia-Pacific, and Africa. We welcome regional distribution partners who can represent Geni Menu within agreed territories.
                </div>
              </div>

              {{-- FAQ 4 --}}
              <div class="gp-faq-item">
                <button type="button" class="gp-faq-header" onclick="togglePartnerFaq(this)">
                  <span>Do partners receive product training?</span>
                  <span class="gp-faq-icon-pill">+</span>
                </button>
                <div class="gp-faq-body">
                  Absolutely. Every approved partner receives comprehensive onboarding, platform training, demo account access, technical documentation, sales playbooks, and dedicated assistance from our partner enablement team.
                </div>
              </div>

              {{-- FAQ: How do partners earn with Geni Menu? --}}
              <div class="gp-faq-item">
                <button type="button" class="gp-faq-header" onclick="togglePartnerFaq(this)">
                  <span>How do partners earn with Geni Menu?</span>
                  <span class="gp-faq-icon-pill">+</span>
                </button>
                <div class="gp-faq-body">
                  Depending on the selected partnership model and agreement, partners can earn through referral commissions, recurring revenue sharing, or partner pricing margins. Exact commercial terms are finalized during onboarding.
                </div>
              </div>

              {{-- FAQ: Can I set my own local pricing or offer custom packages to restaurants? --}}
              <div class="gp-faq-item">
                <button type="button" class="gp-faq-header" onclick="togglePartnerFaq(this)">
                  <span>Can I set my own local pricing or offer custom packages to restaurants?</span>
                  <span class="gp-faq-icon-pill">+</span>
                </button>
                <div class="gp-faq-body">
                  Pricing flexibility, bundling options, and local market packages depend on the partnership tier and are defined in the partner agreement.
                </div>
              </div>

              {{-- FAQ: Is there any upfront joining fee or minimum investment required? --}}
              <div class="gp-faq-item">
                <button type="button" class="gp-faq-header" onclick="togglePartnerFaq(this)">
                  <span>Is there any upfront joining fee or minimum investment required?</span>
                  <span class="gp-faq-icon-pill">+</span>
                </button>
                <div class="gp-faq-body">
                  Applying to the partner programme is free. Any programme commitments or volume expectations depend on the partnership model and territory scope discussed during evaluation.
                </div>
              </div>

              {{-- FAQ: How and when are partner commissions or payouts settled? --}}
              <div class="gp-faq-item">
                <button type="button" class="gp-faq-header" onclick="togglePartnerFaq(this)">
                  <span>How and when are partner commissions or payouts settled?</span>
                  <span class="gp-faq-icon-pill">+</span>
                </button>
                <div class="gp-faq-body">
                  Payout schedules, billing workflows (direct vendor billing vs. partner billing), and settlement timelines are clearly outlined in your formal partner agreement.
                </div>
              </div>

              {{-- FAQ 6 --}}
              <div class="gp-faq-item">
                <button type="button" class="gp-faq-header" onclick="togglePartnerFaq(this)">
                  <span>Can an existing IT company become a partner?</span>
                  <span class="gp-faq-icon-pill">+</span>
                </button>
                <div class="gp-faq-body">
                  Yes. IT companies, POS vendors, and systems integrators are ideal candidates for our Reseller and Distribution tiers, allowing you to bundle Geni Menu with existing hardware, networks, and technical services.
                </div>
              </div>

              {{-- FAQ 7 --}}
              <div class="gp-faq-item">
                <button type="button" class="gp-faq-header" onclick="togglePartnerFaq(this)">
                  <span>How do I apply?</span>
                  <span class="gp-faq-icon-pill">+</span>
                </button>
                <div class="gp-faq-body">
                  Simply fill out the partnership application form on this page. Our partnership team will review your business credentials, contact you for an introductory discussion, and guide you through the onboarding process.
                </div>
              </div>

            </div>

          </div>
        </div>

      </div>
    </div>
  </section>

  {{-- =========================================================================
       SECTION 09 – FINAL CTA
       ========================================================================= --}}
  <section class="gp-final-cta-section">
    <div class="gp-container">
      <div class="gp-final-cta-container">
        <div class="gp-eyebrow">
          THE NEXT CHAPTER STARTS HERE
        </div>
        <h2 class="gp-heading-serif gp-final-title">
          BUILD MORE TOGETHER
        </h2>
        <p class="gp-final-desc">
          Team up with Geni Menu to grow your local network and reach more businesses with easy onboarding and ongoing help.
        </p>

        <a href="#partner-application" class="gp-btn-primary">
          <span>JOIN US NOW</span>
          <span>&rarr;</span>
        </a>

        <div class="gp-final-tagline">
          SMART. SIMPLE. CONNECTED.
        </div>
      </div>
    </div>
  </section>

</div>

<script>
  // Accordion Toggle function
  function togglePartnerFaq(button) {
    var item = button.closest('.gp-faq-item');
    if (!item) return;
    
    var isOpen = item.classList.contains('is-open');
    var allItems = document.querySelectorAll('.gp-faq-item');
    
    // Close other items for neat accordion behavior
    allItems.forEach(function(el) {
      el.classList.remove('is-open');
    });

    if (!isOpen) {
      item.classList.add('is-open');
    }
  }

  // Pre-select model in form when clicking on a model card
  function selectPartnerModel(modelName) {
    var select = document.getElementById('gp-preferred-model-select');
    if (select) {
      for (var i = 0; i < select.options.length; i++) {
        if (select.options[i].value === modelName) {
          select.selectedIndex = i;
          break;
        }
      }
      if (typeof checkPreferredModelOther === 'function') {
        checkPreferredModelOther();
      }
    }
  }

  // Country & Dial Code Sync + Other Dynamic Fields
  document.addEventListener('DOMContentLoaded', function() {
    var countrySel = document.getElementById('gp-country-select');
    var phoneCodeSel = document.getElementById('gp-phone-code-select');
    var phoneNumInput = document.getElementById('gp-phone-number-input');

    function updatePartnerPlaceholder() {
      if (!phoneCodeSel || !phoneNumInput) return;
      var opt = phoneCodeSel.options[phoneCodeSel.selectedIndex];
      var code = opt ? opt.getAttribute('data-code') : '';
      if (code === 'US' || code === 'CA') {
        phoneNumInput.placeholder = '(555) 000-0000';
      } else if (code === 'IN') {
        phoneNumInput.placeholder = '98765 43210';
      } else if (code === 'GB') {
        phoneNumInput.placeholder = '7911 123456';
      } else if (code === 'AE') {
        phoneNumInput.placeholder = '50 123 4567';
      } else {
        phoneNumInput.placeholder = '12345 67890';
      }
    }

    if (countrySel && phoneCodeSel) {
      // When Country Changes -> Sync Dial Code
      countrySel.addEventListener('change', function() {
        var opt = countrySel.options[countrySel.selectedIndex];
        if (!opt) return;
        var cCode = opt.getAttribute('data-code');
        var pCode = opt.getAttribute('data-phonecode');
        
        var matched = false;
        // 1. Match by country ISO 2-letter code
        for (var i = 0; i < phoneCodeSel.options.length; i++) {
          var pOpt = phoneCodeSel.options[i];
          if (pOpt.getAttribute('data-code') === cCode) {
            phoneCodeSel.selectedIndex = i;
            matched = true;
            break;
          }
        }
        // 2. Fallback match by dial prefix (+91, +1, etc)
        if (!matched && pCode) {
          for (var j = 0; j < phoneCodeSel.options.length; j++) {
            if (phoneCodeSel.options[j].value === pCode) {
              phoneCodeSel.selectedIndex = j;
              break;
            }
          }
        }
        updatePartnerPlaceholder();
      });

      // When Dial Code Changes -> Sync Country (if available)
      phoneCodeSel.addEventListener('change', function() {
        var pOpt = phoneCodeSel.options[phoneCodeSel.selectedIndex];
        if (pOpt && countrySel) {
          var pCountryCode = pOpt.getAttribute('data-code');
          var pCountryName = pOpt.getAttribute('data-country');
          var found = false;
          if (pCountryCode) {
            for (var j = 0; j < countrySel.options.length; j++) {
              if (countrySel.options[j].getAttribute('data-code') === pCountryCode) {
                countrySel.selectedIndex = j;
                found = true;
                break;
              }
            }
          }
          if (!found && pCountryName) {
            for (var k = 0; k < countrySel.options.length; k++) {
              if (countrySel.options[k].value === pCountryName) {
                countrySel.selectedIndex = k;
                break;
              }
            }
          }
        }
        updatePartnerPlaceholder();
      });

      updatePartnerPlaceholder();
    }

    // Business Type "Other" Toggle
    var businessTypeSel = document.getElementById('gp-business-type-select');
    var otherBusinessWrap = document.getElementById('gp-other-business-wrap');
    var otherBusinessInput = document.getElementById('gp-other-business-input');

    if (businessTypeSel && otherBusinessWrap) {
      function checkBusinessTypeOther() {
        if (businessTypeSel.value === 'Other') {
          otherBusinessWrap.style.display = 'block';
          if (otherBusinessInput) {
            otherBusinessInput.required = true;
          }
        } else {
          otherBusinessWrap.style.display = 'none';
          if (otherBusinessInput) {
            otherBusinessInput.required = false;
          }
        }
      }
      businessTypeSel.addEventListener('change', function() {
        checkBusinessTypeOther();
        if (businessTypeSel.value === 'Other' && otherBusinessInput) {
          otherBusinessInput.focus();
        }
      });
      checkBusinessTypeOther();
    }

    // Preferred Partnership Model "Other" Toggle
    var prefModelSel = document.getElementById('gp-preferred-model-select');
    var otherModelWrap = document.getElementById('gp-other-model-wrap');
    var otherModelInput = document.getElementById('gp-other-model-input');

    window.checkPreferredModelOther = function() {
      if (!prefModelSel || !otherModelWrap) return;
      if (prefModelSel.value === 'Other') {
        otherModelWrap.style.display = 'block';
        if (otherModelInput) {
          otherModelInput.required = true;
        }
      } else {
        otherModelWrap.style.display = 'none';
        if (otherModelInput) {
          otherModelInput.required = false;
        }
      }
    };

    if (prefModelSel) {
      prefModelSel.addEventListener('change', function() {
        window.checkPreferredModelOther();
        if (prefModelSel.value === 'Other' && otherModelInput) {
          otherModelInput.focus();
        }
      });
      window.checkPreferredModelOther();
    }

    // Form validation on submit
    var partnerForm = document.getElementById('gp-partner-form');
    if (partnerForm) {
      partnerForm.addEventListener('submit', function(e) {
        if (businessTypeSel && businessTypeSel.value === 'Other' && otherBusinessInput && otherBusinessInput.value.trim() === '') {
          e.preventDefault();
          otherBusinessInput.focus();
          return false;
        }
        if (prefModelSel && prefModelSel.value === 'Other' && otherModelInput && otherModelInput.value.trim() === '') {
          e.preventDefault();
          otherModelInput.focus();
          return false;
        }
      });
    }
  });

  // Smooth scroll support
  document.addEventListener('DOMContentLoaded', function() {
    document.querySelectorAll('a[href^="#"]').forEach(function(anchor) {
      anchor.addEventListener('click', function(e) {
        var href = this.getAttribute('href');
        if (href !== '#' && href.startsWith('#')) {
          var target = document.querySelector(href);
          if (target) {
            e.preventDefault();
            target.scrollIntoView({
              behavior: 'smooth',
              block: 'start'
            });
          }
        }
      });
    });
  });
  // Interactive Real-Time Map Pins Sync
  document.addEventListener('DOMContentLoaded', function() {
    var regionItems = document.querySelectorAll('.gp-region-item');
    var mapPins = document.querySelectorAll('.gp-map-pin');

    regionItems.forEach(function(item) {
      var targetPin = item.getAttribute('data-target-pin');
      item.addEventListener('mouseenter', function() {
        mapPins.forEach(function(p) { p.classList.remove('highlighted'); });
        regionItems.forEach(function(r) { r.classList.remove('gp-region-active'); });
        item.classList.add('gp-region-active');
        var pin = document.querySelector('.gp-map-pin[data-region="' + targetPin + '"]');
        if (pin) pin.classList.add('highlighted');
      });
    });

    mapPins.forEach(function(pin) {
      var regionKey = pin.getAttribute('data-region');
      pin.addEventListener('mouseenter', function() {
        mapPins.forEach(function(p) { p.classList.remove('highlighted'); });
        regionItems.forEach(function(r) { r.classList.remove('gp-region-active'); });
        pin.classList.add('highlighted');
        var item = document.querySelector('.gp-region-item[data-target-pin="' + regionKey + '"]');
        if (item) item.classList.add('gp-region-active');
      });
    });

    // Prevent any lead popup modal auto-open on Partners page
    var leadModal = document.getElementById("popupLeadModal");
    if (leadModal) {
      leadModal.classList.remove("active");
    }
  });
</script>

@endsection
