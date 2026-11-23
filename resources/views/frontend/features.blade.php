@php
    $meta = [
        'title' => 'Geni Menu Features | Restaurant Management Software',
        'description' => 'Explore Geni Menu features including digital menus, QR ordering, POS billing, kitchen order management and tools designed to simplify restaurant operations.',
        'keywords' => 'restaurants, hotels, menu, canteen, food, software, kitchen display system KDS software, table management and waitlist software, tableside ordering and payment system, self-ordering kiosk software for restaurants, food cost and recipe management software, restaurant inventory and food waste software, automated vendor ordering software, multi-unit restaurant enterprise software, restaurant KOT billing software, captain ordering app India, geni menu features',
        'og_title' => 'Geni Menu Features | Restaurant Management Software',
        'og_description' => 'Explore Geni Menu features including digital menus, QR ordering, POS billing, kitchen order management and tools designed to simplify restaurant operations.',
    ];
@endphp

@extends('layouts.frontend-master')

@section('content')

{{-- Exact Font Imports from Home Page: Cinzel & Glacial Indifference --}}
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@400;500;600;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://fonts.cdnfonts.com/css/glacial-indifference-2">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

<style>
/* ==========================================================================
   GENI MENU — HOME PAGE MATCHING TYPOGRAPHY & SOPHISTICATED PALETTE
   - Global Headings / Titles / Eyebrows: 'Cinzel', serif (Regular 400, Uppercase)
   - Body & Supporting Text: 'Glacial Indifference', sans-serif (Regular 400)
   - Buttons: Exact 1:1 match with Home Page (.btn-primary-gold & .btn-ghost-gold)
              Pill-shaped (border-radius: 9999px), 'Glacial Indifference' 700
   ========================================================================== */

:root {
  --geni-chocolate: #27130D;
  --geni-deep-brown: #32180F;
  --geni-coffee: #4A291B;
  --geni-coffee-light: #5A3524;
  --geni-caramel: #C58B50;
  --geni-champagne: #F2C58D;
  --geni-champagne-light: #FBE6CE;
  --geni-cream: #FFF8F0;
  --geni-cream-card: #FAF4ED;
  --geni-cream-alt: #F6EDE2;
  --geni-text-dark: #2A170F;
  --geni-text-muted: #6B5549;
  --geni-text-light: #FFF8F0;
  --geni-text-sec-light: #E4D3C4;
  --geni-border-dark: rgba(197, 139, 80, 0.22);
  --geni-border-light: rgba(197, 139, 80, 0.20);

  /* Page Base */
  --font-heading: 'Cinzel', serif;
  --font-body: 'Glacial Indifference', sans-serif;
}

html {
  scroll-behavior: smooth;
}

body {
  font-family: 'Glacial Indifference', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif !important;
  background-color: var(--geni-cream) !important;
  color: var(--geni-text-dark);
  font-size: 15px;
  line-height: 1.65;
  font-weight: 400;
  margin: 0;
  padding: 0;
  -webkit-font-smoothing: antialiased;
}

.features-page-wrapper {
  background-color: var(--geni-cream);
  overflow-x: hidden;
}

/* ==========================================================================
   HEADINGS & TYPOGRAPHY (MATCHING HOME PAGE)
   ========================================================================== */
h1, h2, h3, h4, h5, h6,
.section-title,
.ft-hero-heading,
.ft-card-title,
.ft-mini-card-title,
.ft-inventory-card-info h4,
.ft-dark-card-info h4,
.ft-cta-heading,
.geni-eyebrow-text,
.geni-section-eyebrow {
  font-family: 'Cinzel', serif !important;
  text-transform: uppercase !important;
  font-weight: 400 !important;
  letter-spacing: 0.03em;
}

p, li, .section-subtitle, .ft-hero-description, .ft-card-desc,
.ft-mini-card-desc, .ft-inventory-card-info p, .ft-dark-card-info p,
.ft-cta-desc {
  font-family: 'Glacial Indifference', sans-serif !important;
  font-weight: 400 !important;
}

/* ==========================================================================
   COMMON UTILITIES & EYEBROWS (MATCHING HOME PAGE)
   ========================================================================== */
.ft-container {
  max-width: 1240px;
  margin: 0 auto;
  padding: 0 24px;
}

.geni-hero-eyebrow {
  display: inline-flex;
  align-items: center;
  gap: 10px;
  margin-bottom: 20px;
}

.geni-eyebrow-line {
  display: inline-block;
  width: 28px;
  height: 1.5px;
  background-color: var(--geni-caramel);
  border-radius: 1px;
}

.geni-eyebrow-text {
  font-family: 'Cinzel', serif !important;
  font-size: 11.5px;
  font-weight: 400 !important;
  letter-spacing: 0.12em;
  text-transform: uppercase !important;
  color: var(--geni-champagne);
  line-height: 1;
}

.geni-section-eyebrow {
  display: inline-flex;
  align-items: center;
  gap: 8px;
  font-family: 'Cinzel', serif !important;
  font-size: 11.5px;
  font-weight: 400 !important;
  letter-spacing: 0.12em;
  text-transform: uppercase !important;
  color: var(--geni-caramel);
  margin-bottom: 12px;
}

.geni-section-eyebrow .dash {
  width: 24px;
  height: 1.5px;
  background: var(--geni-caramel);
  display: inline-block;
}

.section-title {
  font-family: 'Cinzel', serif !important;
  font-size: clamp(26px, 3.2vw, 36px);
  font-weight: 400 !important;
  line-height: 1.25;
  letter-spacing: 0.03em;
  text-transform: uppercase !important;
  color: var(--geni-chocolate);
  margin: 0 0 14px 0;
}

.section-title .title-accent {
  color: var(--geni-caramel) !important;
  font-weight: 600 !important;
}

.ft-business-section .section-title .title-accent {
  color: var(--geni-champagne) !important;
  font-weight: 600 !important;
}

.section-subtitle {
  font-family: 'Glacial Indifference', sans-serif !important;
  font-size: 15.5px;
  font-weight: 400;
  line-height: 1.6;
  color: var(--geni-text-muted);
  max-width: 680px;
  margin: 0 auto;
}

.section-header-center {
  text-align: center;
  margin-bottom: 48px;
}

/* ==========================================================================
   HOMEPAGE BUTTON STYLES (EXACT 1:1 MATCH WITH HOME PAGE)
   ========================================================================== */
.btn-primary-gold {
  display: inline-flex;
  align-items: center;
  justify-content: center;
  gap: 8px;
  background: linear-gradient(135deg, #F2C58D 0%, #E8BA80 100%) !important;
  color: #32180F !important;
  font-family: 'Glacial Indifference', sans-serif !important;
  font-size: 14px !important;
  font-weight: 700 !important;
  padding: 11.5px 24px !important;
  border-radius: 9999px !important;
  border: none !important;
  text-decoration: none;
  box-shadow: 0 4px 16px rgba(242, 197, 141, 0.28) !important;
  transition: all 0.22s ease;
  cursor: pointer;
  letter-spacing: 0.03em !important;
  text-transform: none !important;
}

.btn-primary-gold:hover {
  background: linear-gradient(135deg, #FFF8F0 0%, #F2C58D 100%) !important;
  color: #27130D !important;
  transform: translateY(-2px);
  box-shadow: 0 6px 22px rgba(242, 197, 141, 0.42) !important;
}

.btn-ghost-gold {
  display: inline-flex;
  align-items: center;
  justify-content: center;
  gap: 8px;
  background-color: transparent !important;
  color: var(--geni-text-light) !important;
  font-family: 'Glacial Indifference', sans-serif !important;
  font-size: 14px !important;
  font-weight: 700 !important;
  padding: 11px 24px !important;
  border-radius: 9999px !important;
  border: 1.5px solid rgba(242, 197, 141, 0.60) !important;
  text-decoration: none;
  transition: all 0.22s ease;
  cursor: pointer;
  letter-spacing: 0.03em !important;
  text-transform: none !important;
}

.btn-ghost-gold:hover {
  background-color: rgba(242, 197, 141, 0.15) !important;
  border-color: #F2C58D !important;
  color: #F2C58D !important;
  transform: translateY(-2px);
  box-shadow: 0 4px 16px rgba(242, 197, 141, 0.20) !important;
}

.ft-cta-btn {
  display: inline-flex;
  align-items: center;
  justify-content: center;
  gap: 10px;
  background: linear-gradient(135deg, #F2C58D 0%, #E8BA80 100%) !important;
  color: #32180F !important;
  font-family: 'Glacial Indifference', sans-serif !important;
  font-size: 15px !important;
  font-weight: 700 !important;
  padding: 14px 34px !important;
  border-radius: 9999px !important;
  border: none !important;
  text-decoration: none;
  box-shadow: 0 6px 20px rgba(242, 197, 141, 0.35) !important;
  transition: all 0.25s ease;
  cursor: pointer;
  letter-spacing: 0.03em !important;
  text-transform: none !important;
}

.ft-cta-btn:hover {
  background: linear-gradient(135deg, #FFF8F0 0%, #F2C58D 100%) !important;
  color: #27130D !important;
  transform: translateY(-2px);
  box-shadow: 0 8px 26px rgba(242, 197, 141, 0.5) !important;
}

/* ==========================================================================
   1. HERO BANNER SECTION (MORE HEIGHT - TEXT ON LEFT SIDE)
   ========================================================================== */
.ft-hero-section {
  position: relative;
  background-color: #27130D !important;
  background-image: linear-gradient(90deg, #27130D 0%, rgba(39, 19, 13, 0.96) 38%, rgba(39, 19, 13, 0.60) 50%, rgba(39, 19, 13, 0.15) 62%, transparent 75%),
                    url('{{ asset("assets/images/home/features back2.png") }}') !important;
  background-size: cover !important;
  background-position: right center !important;
  background-repeat: no-repeat !important;
  padding: 76px 0 82px 0;
  min-height: 520px;
  max-height: 580px;
  display: flex;
  align-items: center;
  overflow: hidden;
  color: var(--geni-text-light);
}

.ft-hero-container {
  max-width: 1380px;
  margin: 0 auto;
  padding: 0 40px;
  width: 100%;
}

.ft-hero-content {
  max-width: 500px;
  margin-left: 0;
  margin-right: auto;
  text-align: left;
  position: relative;
  z-index: 2;
}

.ft-hero-heading {
  font-family: 'Cinzel', serif !important;
  font-size: clamp(26px, 2.8vw, 36px);
  font-weight: 400 !important;
  line-height: 1.25;
  letter-spacing: 0.03em;
  text-transform: uppercase !important;
  color: var(--geni-text-light);
  margin: 0 0 16px 0;
}

.ft-hero-heading .gold-highlight {
  color: var(--geni-champagne);
  font-weight: 600 !important;
  display: block;
}

.ft-hero-description {
  font-family: 'Glacial Indifference', sans-serif !important;
  font-size: 15.5px;
  line-height: 1.6;
  color: var(--geni-text-sec-light);
  margin: 0 0 26px 0;
  max-width: 480px;
  font-weight: 400;
}

.ft-hero-actions {
  display: flex;
  align-items: center;
  gap: 14px;
  flex-wrap: wrap;
}

/* ==========================================================================
   2. CORE OPERATIONS SECTION
   ========================================================================== */
.ft-core-section {
  padding: 90px 0;
  background-color: var(--geni-cream);
}

.ft-core-grid {
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  gap: 24px;
}

.ft-card {
  background: var(--geni-cream-card);
  border: 1px solid var(--geni-border-light);
  border-radius: 16px;
  padding: 28px 24px;
  transition: all 0.35s ease;
  display: flex;
  flex-direction: column;
  position: relative;
}

.ft-card:hover {
  transform: translateY(-4px);
  border-color: var(--geni-caramel);
  box-shadow: 0 12px 30px rgba(39, 19, 13, 0.08);
}

.ft-card-icon-box {
  width: 52px;
  height: 52px;
  border-radius: 12px;
  background: #FAF0E4;
  border: 1px solid rgba(197, 139, 80, 0.30);
  display: flex;
  align-items: center;
  justify-content: center;
  margin-bottom: 18px;
  color: var(--geni-caramel);
  transition: all 0.3s ease;
}

.ft-card-icon-box i {
  font-size: 25px;
  line-height: 1;
  display: inline-flex;
}

.ft-card:hover .ft-card-icon-box {
  background: var(--geni-caramel);
  color: #FFFFFF;
  transform: scale(1.05);
}

.ft-card-title {
  font-family: 'Cinzel', serif !important;
  font-size: 17px;
  font-weight: 500 !important;
  letter-spacing: 0.03em;
  text-transform: uppercase !important;
  color: var(--geni-chocolate);
  margin: 0 0 10px 0;
}

.ft-card-desc {
  font-family: 'Glacial Indifference', sans-serif !important;
  font-size: 14.5px;
  line-height: 1.55;
  color: var(--geni-text-muted);
  margin: 0;
}

/* ==========================================================================
   3. ORDER & CUSTOMER EXPERIENCE SECTION
   ========================================================================== */
.ft-experience-section {
  padding: 90px 0;
  background-color: var(--geni-cream-alt);
  border-top: 1px solid var(--geni-border-light);
  border-bottom: 1px solid var(--geni-border-light);
}

.ft-experience-layout {
  display: grid;
  grid-template-columns: 1fr 1fr;
  gap: 40px;
  align-items: center;
}

.ft-visuals-stack {
  display: flex;
  flex-direction: column;
  gap: 20px;
}

.ft-device-mockup {
  border-radius: 18px;
  overflow: hidden;
  box-shadow: 0 14px 38px rgba(39, 19, 13, 0.09);
  border: 1px solid var(--geni-border-light);
  position: relative;
  background: var(--geni-cream-card);
  transition: transform 0.3s ease, box-shadow 0.3s ease;
}

.ft-device-mockup:hover {
  transform: translateY(-4px);
  box-shadow: 0 20px 48px rgba(39, 19, 13, 0.14);
}

.ft-device-mockup img {
  width: 100%;
  height: auto;
  display: block;
}

.ft-experience-grid {
  display: grid;
  grid-template-columns: repeat(2, 1fr);
  gap: 16px;
}

.ft-mini-card {
  background: var(--geni-cream-card);
  border: 1px solid var(--geni-border-light);
  border-radius: 14px;
  padding: 20px 18px;
  transition: all 0.3s ease;
}

.ft-mini-card:hover {
  transform: translateY(-3px);
  border-color: var(--geni-caramel);
  box-shadow: 0 8px 22px rgba(39, 19, 13, 0.07);
}

.ft-mini-card-icon {
  width: 40px;
  height: 40px;
  border-radius: 10px;
  background: #FAF0E4;
  color: var(--geni-caramel);
  display: flex;
  align-items: center;
  justify-content: center;
  margin-bottom: 12px;
}

.ft-mini-card-icon i {
  font-size: 20px;
  line-height: 1;
  display: inline-flex;
}

.ft-mini-card-title {
  font-family: 'Cinzel', serif !important;
  font-size: 14.5px;
  font-weight: 500 !important;
  letter-spacing: 0.03em;
  text-transform: uppercase !important;
  color: var(--geni-chocolate);
  margin: 0 0 6px 0;
}

.ft-mini-card-desc {
  font-family: 'Glacial Indifference', sans-serif !important;
  font-size: 13.5px;
  line-height: 1.45;
  color: var(--geni-text-muted);
  margin: 0;
}

/* ==========================================================================
   4. INVENTORY & SUPPLY CHAIN SECTION
   ========================================================================== */
.ft-inventory-section {
  padding: 90px 0;
  background-color: var(--geni-cream);
}

.ft-inventory-layout {
  display: grid;
  grid-template-columns: minmax(340px, 490px) 1fr;
  gap: 48px;
  align-items: center;
}

.ft-inventory-cards {
  display: flex;
  flex-direction: column;
  gap: 16px;
  max-width: 490px;
  width: 100%;
}

.ft-inventory-card {
  background: var(--geni-cream-card);
  border: 1px solid var(--geni-border-light);
  border-radius: 16px;
  padding: 20px 22px;
  display: flex;
  align-items: center;
  gap: 18px;
  transition: all 0.3s ease;
}

.ft-inventory-card:hover {
  transform: translateX(4px);
  border-color: var(--geni-caramel);
  box-shadow: 0 8px 24px rgba(39, 19, 13, 0.07);
}

.ft-inventory-card-icon {
  width: 50px;
  height: 50px;
  border-radius: 12px;
  background: #FAF0E4;
  color: var(--geni-caramel);
  display: flex;
  align-items: center;
  justify-content: center;
  flex-shrink: 0;
}

.ft-inventory-card-icon i {
  font-size: 24px;
  line-height: 1;
  display: inline-flex;
}

.ft-inventory-card-info h4 {
  font-family: 'Cinzel', serif !important;
  font-size: 16px;
  font-weight: 500 !important;
  letter-spacing: 0.03em;
  text-transform: uppercase !important;
  color: var(--geni-chocolate);
  margin: 0 0 6px 0;
}

.ft-inventory-card-info p {
  font-family: 'Glacial Indifference', sans-serif !important;
  font-size: 14.5px;
  line-height: 1.55;
  color: var(--geni-text-muted);
  margin: 0;
}

.ft-inventory-visual {
  display: flex;
  align-items: center;
  justify-content: center;
  position: relative;
}

.ft-inventory-visual img {
  width: 100%;
  max-width: 660px;
  height: auto;
  display: block;
  filter: drop-shadow(0 18px 42px rgba(39, 19, 13, 0.14));
  transition: transform 0.35s ease, filter 0.35s ease;
}

.ft-inventory-visual:hover img {
  transform: translateY(-4px) scale(1.01);
  filter: drop-shadow(0 24px 50px rgba(39, 19, 13, 0.20));
}

/* ==========================================================================
   5. BUSINESS & MANAGEMENT (DARK THEME SECTION)
   ========================================================================== */
.ft-business-section {
  padding: 95px 0;
  background: radial-gradient(circle at 80% 40%, rgba(197, 139, 80, 0.16) 0%, transparent 60%),
              linear-gradient(145deg, #200D06 0%, #2B1309 60%, #35180D 100%) !important;
  color: var(--geni-text-light);
  position: relative;
}

.ft-business-section .section-title {
  color: var(--geni-text-light) !important;
}

.ft-business-section .section-subtitle {
  color: var(--geni-text-sec-light) !important;
}

.ft-business-layout {
  display: grid;
  grid-template-columns: minmax(340px, 490px) 1fr;
  gap: 48px;
  align-items: center;
}

.ft-business-cards {
  display: flex;
  flex-direction: column;
  gap: 16px;
  max-width: 490px;
  width: 100%;
}

.ft-dark-card {
  background: rgba(255, 248, 240, 0.05);
  border: 1px solid var(--geni-border-dark);
  border-radius: 16px;
  padding: 22px 22px;
  display: flex;
  align-items: center;
  gap: 18px;
  transition: all 0.35s ease;
}

.ft-dark-card:hover {
  background: rgba(255, 248, 240, 0.09);
  border-color: var(--geni-caramel);
  transform: translateX(4px);
  box-shadow: 0 10px 30px rgba(0, 0, 0, 0.35);
}

.ft-dark-card-icon {
  width: 52px;
  height: 52px;
  border-radius: 12px;
  background: rgba(197, 139, 80, 0.18);
  border: 1px solid rgba(197, 139, 80, 0.4);
  color: var(--geni-champagne);
  display: flex;
  align-items: center;
  justify-content: center;
  flex-shrink: 0;
}

.ft-dark-card-icon i {
  font-size: 24px;
  line-height: 1;
  display: inline-flex;
}

.ft-dark-card-info h4 {
  font-family: 'Cinzel', serif !important;
  font-size: 16px;
  font-weight: 500 !important;
  letter-spacing: 0.03em;
  text-transform: uppercase !important;
  color: var(--geni-text-light);
  margin: 0 0 6px 0;
}

.ft-dark-card-info p {
  font-family: 'Glacial Indifference', sans-serif !important;
  font-size: 14.5px;
  line-height: 1.55;
  color: var(--geni-text-sec-light);
  margin: 0;
}

.ft-business-visual {
  display: flex;
  align-items: center;
  justify-content: center;
  position: relative;
}

.ft-business-visual img {
  width: 100%;
  max-width: 680px;
  height: auto;
  display: block;
  filter: drop-shadow(0 20px 50px rgba(0, 0, 0, 0.55));
  transition: transform 0.35s ease, filter 0.35s ease;
}

.ft-business-visual:hover img {
  transform: translateY(-4px) scale(1.01);
  filter: drop-shadow(0 26px 60px rgba(0, 0, 0, 0.65));
}

/* ==========================================================================
   6. THIRD-PARTY INTEGRATIONS SECTION
   ========================================================================== */
.ft-integrations-section {
  padding: 90px 0;
  background-color: var(--geni-cream);
}

.ft-integrations-grid {
  display: grid;
  grid-template-columns: repeat(2, 1fr);
  gap: 32px;
}

.ft-integration-panel {
  background: var(--geni-cream-card);
  border: 1px solid var(--geni-border-light);
  border-radius: 18px;
  padding: 32px 28px;
  box-shadow: 0 8px 24px rgba(39, 19, 13, 0.05);
  display: flex;
  flex-direction: column;
}

.ft-panel-header {
  text-align: center;
  margin-bottom: 28px;
}

.ft-panel-pill {
  display: inline-block;
  background: #FAF0E4;
  border: 1px solid rgba(197, 139, 80, 0.35);
  color: var(--geni-coffee);
  font-family: 'Cinzel', serif !important;
  font-size: 12px;
  font-weight: 500 !important;
  letter-spacing: 0.08em;
  padding: 6px 20px;
  border-radius: 50px;
  text-transform: uppercase !important;
}

.ft-integration-panel:first-child .ft-integration-logos {
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  gap: 14px;
  width: 100%;
}

.ft-integration-panel:last-child .ft-integration-logos {
  display: grid;
  grid-template-columns: repeat(4, 1fr);
  gap: 14px;
  width: 100%;
}

.ft-logo-box {
  width: 100%;
  height: 86px;
  background: #FFFFFF;
  border: 1px solid var(--geni-border-light);
  border-radius: 14px;
  display: flex;
  align-items: center;
  justify-content: center;
  padding: 10px 12px;
  box-shadow: 0 3px 12px rgba(39, 19, 13, 0.04);
  transition: all 0.25s ease;
  box-sizing: border-box;
}

.ft-logo-box:hover {
  transform: translateY(-3px);
  border-color: var(--geni-caramel);
  box-shadow: 0 8px 20px rgba(197, 139, 80, 0.20);
}

.ft-logo-box img {
  max-width: 82px;
  max-height: 48px;
  width: auto;
  height: auto;
  object-fit: contain;
}

.ft-logo-more {
  background: rgba(197, 139, 80, 0.05) !important;
  border-style: dashed !important;
  border-color: rgba(197, 139, 80, 0.45) !important;
}

.ft-logo-more span {
  font-family: 'Cinzel', serif;
  font-weight: 700;
  color: #C58B50;
  font-size: 13.5px;
  letter-spacing: 0.5px;
}

.ft-deliveroo-badge {
  display: flex;
  align-items: center;
  gap: 5px;
  justify-content: center;
}

.ft-deliveroo-badge svg {
  flex-shrink: 0;
}

.ft-deliveroo-badge span {
  font-family: 'Inter', sans-serif;
  font-weight: 700;
  color: #00CDBC;
  font-size: 13px;
  line-height: 1;
}

/* ==========================================================================
   7. FINAL CTA SECTION (FEATURES CTA BACKGROUND)
   ========================================================================== */
.ft-final-cta-section {
  position: relative;
  background: #200D06 url('{{ asset("assets/images/home/features cta.png") }}') center center / cover no-repeat !important;
  padding: 100px 0 105px 0;
  min-height: 400px;
  display: flex;
  align-items: center;
  justify-content: center;
  color: var(--geni-text-light);
  overflow: hidden;
  text-align: center;
}

.ft-final-cta-overlay {
  position: absolute;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background: radial-gradient(ellipse at center, rgba(28, 12, 6, 0.82) 0%, rgba(28, 12, 6, 0.68) 55%, rgba(28, 12, 6, 0.52) 100%);
  z-index: 1;
}

.ft-final-cta-content {
  position: relative;
  z-index: 2;
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;
  text-align: center;
  max-width: 840px;
  margin: 0 auto;
}

.ft-cta-heading {
  font-family: 'Cinzel', serif !important;
  font-size: clamp(26px, 3.2vw, 38px);
  font-weight: 400 !important;
  line-height: 1.28;
  letter-spacing: 0.03em;
  text-transform: uppercase !important;
  color: #FFFFFF;
  margin: 0 auto 16px auto;
  text-align: center;
  max-width: 780px;
}

.ft-cta-desc {
  font-family: 'Glacial Indifference', sans-serif !important;
  font-size: 16px;
  line-height: 1.6;
  color: var(--geni-text-sec-light);
  margin: 0 auto 32px auto;
  max-width: 660px;
  text-align: center;
}

.ft-cta-btn-wrapper {
  display: flex;
  align-items: center;
  justify-content: center;
  width: 100%;
}

/* ==========================================================================
   RESPONSIVE DESIGN (TABLET & MOBILE)
   ========================================================================== */
@media (max-width: 1024px) {
  .ft-hero-section {
    padding: 30px 0 34px 0 !important;
    min-height: auto;
    max-height: none;
    background-image: linear-gradient(90deg, rgba(39, 19, 13, 0.96) 0%, rgba(39, 19, 13, 0.90) 58%, rgba(39, 19, 13, 0.50) 100%),
                      url('{{ asset("assets/images/home/features back.png") }}') !important;
  }
  .ft-hero-container {
    padding: 0 24px;
  }
  .ft-hero-content {
    max-width: 500px;
  }
  .ft-core-grid {
    grid-template-columns: repeat(2, 1fr);
  }
  .ft-experience-layout,
  .ft-inventory-layout,
  .ft-business-layout {
    grid-template-columns: 1fr;
    gap: 40px;
  }
  .ft-final-cta-overlay {
    background: radial-gradient(ellipse at center, rgba(28, 12, 6, 0.88) 0%, rgba(28, 12, 6, 0.78) 60%, rgba(28, 12, 6, 0.65) 100%) !important;
  }
}

@media (max-width: 768px) {
  .section-title {
    font-size: 24px;
  }
  .ft-hero-section {
    padding: 24px 0 28px 0 !important;
    min-height: auto;
    max-height: none;
  }
  .ft-hero-heading {
    font-size: 23px !important;
  }
  .ft-hero-content {
    max-width: 100%;
  }
  .ft-cta-heading {
    font-size: 23px;
  }
  .ft-core-grid,
  .ft-experience-grid,
  .ft-integrations-grid {
    grid-template-columns: 1fr;
    gap: 20px;
  }

  /* Integrations Section - Zero Horizontal Overflow */
  .ft-integrations-section {
    overflow: hidden !important;
  }
  .ft-integration-panel {
    padding: 20px 12px !important;
    width: 100% !important;
    box-sizing: border-box !important;
    overflow: hidden !important;
  }
  .ft-integration-panel:first-child .ft-integration-logos {
    display: grid !important;
    grid-template-columns: repeat(3, minmax(0, 1fr)) !important;
    gap: 8px 6px !important;
    width: 100% !important;
  }
  .ft-integration-panel:last-child .ft-integration-logos {
    display: grid !important;
    grid-template-columns: repeat(4, minmax(0, 1fr)) !important;
    gap: 6px 4px !important;
    width: 100% !important;
  }
  .ft-logo-box {
    min-width: 0 !important;
    width: 100% !important;
    height: 64px !important;
    padding: 5px 3px !important;
    border-radius: 10px !important;
    overflow: hidden !important;
    box-sizing: border-box !important;
  }
  .ft-logo-box img {
    max-height: 28px !important;
    max-width: 85% !important;
    object-fit: contain !important;
  }
  .ft-logo-more span {
    font-size: 10px !important;
    letter-spacing: 0 !important;
    white-space: nowrap !important;
  }
  .ft-deliveroo-badge {
    gap: 3px !important;
  }
  .ft-deliveroo-badge svg {
    width: 13px !important;
    height: 13px !important;
  }
  .ft-deliveroo-badge span {
    font-size: 10px !important;
  }

  /* Hero Actions - Single Line Side-by-Side */
  .ft-hero-actions {
    display: flex !important;
    flex-direction: row !important;
    align-items: center !important;
    gap: 10px !important;
    width: 100% !important;
  }
  .ft-hero-actions .btn-primary-gold,
  .ft-hero-actions .btn-ghost-gold {
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
  .ft-cta-btn {
    width: 100%;
    justify-content: center;
  }
  .ft-core-section,
  .ft-experience-section,
  .ft-inventory-section,
  .ft-business-section,
  .ft-integrations-section,
  .ft-final-cta-section {
    padding: 60px 0;
  }
}

@media (max-width: 640px) {
  .ft-container,
  .ft-hero-container {
    padding: 0 16px !important;
  }
}

@media (max-width: 480px) {
  .ft-hero-actions {
    gap: 6px !important;
  }
  .ft-hero-actions .btn-primary-gold,
  .ft-hero-actions .btn-ghost-gold {
    padding: 10px 4px !important;
    font-size: 11.5px !important;
  }
  .ft-integration-panel {
    padding: 16px 8px !important;
  }
  .ft-panel-header {
    margin-bottom: 16px !important;
  }
  .ft-panel-pill {
    font-size: 10px !important;
    padding: 4px 12px !important;
  }
  .ft-logo-box {
    height: 56px !important;
    padding: 4px 2px !important;
    border-radius: 8px !important;
  }
  .ft-logo-box img {
    max-height: 24px !important;
    max-width: 82% !important;
  }
  .ft-logo-more span {
    font-size: 9px !important;
  }
  .ft-deliveroo-badge svg {
    width: 11px !important;
    height: 11px !important;
  }
  .ft-deliveroo-badge span {
    font-size: 9px !important;
  }
}
</style>

<div class="features-page-wrapper">

    {{-- ====================================================================
         1. HERO BANNER SECTION (COMPACT & TEXT ON LEFT)
         ==================================================================== --}}
    <section class="ft-hero-section">
        <div class="ft-hero-container">
            {{-- Left Content --}}
            <div class="ft-hero-content">
                <h1 class="ft-hero-heading">
                    Everything Your Food Business Needs.
                    <span class="gold-highlight">All in One Platform.</span>
                </h1>
                    <p class="ft-hero-description">
                        Discover powerful food industry management features designed to simplify daily operations, improve customer experiences and give you complete business control.
                    </p>
                    <div class="ft-hero-actions">
                        <a href="#core-operations" class="btn-ghost-gold">
                            <span>Explore Features</span>
                        </a>
                        <a href="{{ route('enquiry') }}" class="btn-primary-gold">
                            <span>Explore Demo</span>
                            <span style="font-size: 15px;">&rarr;</span>
                        </a>
                    </div>
                </div>
            </div>
    </section>

    {{-- ====================================================================
         2. CORE OPERATIONS SECTION
         ==================================================================== --}}
    <section class="ft-core-section" id="core-operations">
        <div class="ft-container">
            <div class="section-header-center">
                <div class="geni-section-eyebrow" style="justify-content: center;">
                    <span class="dash"></span>
                    <span>CORE OPERATIONS</span>
                    <span class="dash"></span>
                </div>
                <h2 class="section-title">Powerful Tools to Manage <span class="title-accent">Every Food Business Operation</span></h2>
                <p class="section-subtitle">
                    Powerful tools to run your daily food business operations smoothly.
                </p>
            </div>

            <div class="ft-core-grid">
                {{-- 1. QR Menu Access --}}
                <div class="ft-card">
                    <div class="ft-card-icon-box">
                        <i class="bi bi-qr-code-scan"></i>
                    </div>
                    <h3 class="ft-card-title">QR Menu Access</h3>
                    <p class="ft-card-desc">
                        Let customers browse your digital menu instantly using QR codes.
                    </p>
                </div>

                {{-- 2. Table Management --}}
                <div class="ft-card">
                    <div class="ft-card-icon-box">
                        <i class="bi bi-grid-3x3-gap"></i>
                    </div>
                    <h3 class="ft-card-title">Table Management</h3>
                    <p class="ft-card-desc">
                        Manage dining tables, seating arrangements and guest seating availability.
                    </p>
                </div>

                {{-- 3. POS Billing --}}
                <div class="ft-card">
                    <div class="ft-card-icon-box">
                        <i class="bi bi-receipt"></i>
                    </div>
                    <h3 class="ft-card-title">POS Billing</h3>
                    <p class="ft-card-desc">
                        Generate fast and accurate bills with flexible payment options.
                    </p>
                </div>

                {{-- 4. Menu Management --}}
                <div class="ft-card">
                    <div class="ft-card-icon-box">
                        <i class="bi bi-journal-text"></i>
                    </div>
                    <h3 class="ft-card-title">Menu Management</h3>
                    <p class="ft-card-desc">
                        Add, edit and organize menu items, prices, categories and availability.
                    </p>
                </div>

                {{-- 5. Order Management --}}
                <div class="ft-card">
                    <div class="ft-card-icon-box">
                        <i class="bi bi-bag-check"></i>
                    </div>
                    <h3 class="ft-card-title">Order Management</h3>
                    <p class="ft-card-desc">
                        Manage dine-in, takeaway and delivery orders from one platform.
                    </p>
                </div>

                {{-- 6. KOT Management --}}
                <div class="ft-card">
                    <div class="ft-card-icon-box">
                        <i class="bi bi-fire"></i>
                    </div>
                    <h3 class="ft-card-title">KOT Management</h3>
                    <p class="ft-card-desc">
                        Send kitchen orders instantly and manage kitchen preparation workflows.
                    </p>
                </div>
            </div>
        </div>
    </section>

    {{-- ====================================================================
         3. ORDER & CUSTOMER EXPERIENCE SECTION
         ==================================================================== --}}
    <section class="ft-experience-section" id="order-experience">
        <div class="ft-container">
            <div class="section-header-center">
                <div class="geni-section-eyebrow" style="justify-content: center;">
                    <span class="dash"></span>
                    <span>ORDER & CUSTOMER EXPERIENCE</span>
                    <span class="dash"></span>
                </div>
                <h2 class="section-title">Deliver a Seamless <span class="title-accent">Customer Experience</span></h2>
                <p class="section-subtitle">
                    Give your customers a seamless and modern dining experience.
                </p>
            </div>

            <div class="ft-experience-layout">
                {{-- Left Side: Order & Customer Experience Visuals Split (features 1.png & features 2.png) --}}
                <div class="ft-visuals-stack">
                    <div class="ft-device-mockup">
                        <img src="{{ asset('assets/images/home/features 1.png') }}" 
                             alt="Geni Menu Customer Ordering Experience - Online Ordering, Digital Menu, Waiter Request & Table Reservation" 
                             loading="lazy">
                    </div>
                    <div class="ft-device-mockup">
                        <img src="{{ asset('assets/images/home/features 2.png') }}" 
                             alt="Geni Menu Order Fulfilment & Self-Service - Delivery Management, Order Board, CDS & Kiosk" 
                             loading="lazy">
                    </div>
                </div>

                {{-- Right Side: 8 Feature Cards (2x4 Grid) --}}
                <div class="ft-experience-grid">
                    {{-- 1. Online Ordering --}}
                    <div class="ft-mini-card">
                        <div class="ft-mini-card-icon">
                            <i class="bi bi-laptop"></i>
                        </div>
                        <h4 class="ft-mini-card-title">Online Ordering</h4>
                        <p class="ft-mini-card-desc">
                            Accept orders through your dedicated online food ordering platform.
                        </p>
                    </div>

                    {{-- 2. Customer Site --}}
                    <div class="ft-mini-card">
                        <div class="ft-mini-card-icon">
                            <i class="bi bi-globe"></i>
                        </div>
                        <h4 class="ft-mini-card-title">Customer Site</h4>
                        <p class="ft-mini-card-desc">
                            Give customers a dedicated website to browse menus and place orders.
                        </p>
                    </div>

                    {{-- 3. Waiter Request --}}
                    <div class="ft-mini-card">
                        <div class="ft-mini-card-icon">
                            <i class="bi bi-bell"></i>
                        </div>
                        <h4 class="ft-mini-card-title">Waiter Request</h4>
                        <p class="ft-mini-card-desc">
                            Allow customers to request waiter assistance directly from their table.
                        </p>
                    </div>

                    {{-- 4. Reservation Booking --}}
                    <div class="ft-mini-card">
                        <div class="ft-mini-card-icon">
                            <i class="bi bi-calendar-check"></i>
                        </div>
                        <h4 class="ft-mini-card-title">Reservation Booking</h4>
                        <p class="ft-mini-card-desc">
                            Let customers reserve tables with date and time selection.
                        </p>
                    </div>

                    {{-- 5. Delivery Executive Management --}}
                    <div class="ft-mini-card">
                        <div class="ft-mini-card-icon">
                            <i class="bi bi-bicycle"></i>
                        </div>
                        <h4 class="ft-mini-card-title">Delivery Executive Management</h4>
                        <p class="ft-mini-card-desc">
                            Assign and manage delivery executives and track delivery operations.
                        </p>
                    </div>

                    {{-- 6. Customer Order Board --}}
                    <div class="ft-mini-card">
                        <div class="ft-mini-card-icon">
                            <i class="bi bi-tv"></i>
                        </div>
                        <h4 class="ft-mini-card-title">Customer Order Board</h4>
                        <p class="ft-mini-card-desc">
                            Display incoming orders and their preparation or fulfilment status.
                        </p>
                    </div>

                    {{-- 7. Customer Display (CDS) --}}
                    <div class="ft-mini-card">
                        <div class="ft-mini-card-icon">
                            <i class="bi bi-display"></i>
                        </div>
                        <h4 class="ft-mini-card-title">Customer Display (CDS)</h4>
                        <p class="ft-mini-card-desc">
                            Show order details and billing information on a customer-facing display.
                        </p>
                    </div>

                    {{-- 8. Self-Service Kiosk --}}
                    <div class="ft-mini-card">
                        <div class="ft-mini-card-icon">
                            <i class="bi bi-tablet"></i>
                        </div>
                        <h4 class="ft-mini-card-title">Self-Service Kiosk</h4>
                        <p class="ft-mini-card-desc">
                            Allow customers to browse menus and place orders independently.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- ====================================================================
         4. INVENTORY & SUPPLY CHAIN MANAGEMENT
         ==================================================================== --}}
    <section class="ft-inventory-section" id="inventory-supply">
        <div class="ft-container">
            <div class="section-header-center">
                <div class="geni-section-eyebrow" style="justify-content: center;">
                    <span class="dash"></span>
                    <span>INVENTORY & SUPPLY CHAIN</span>
                    <span class="dash"></span>
                </div>
                <h2 class="section-title">Complete Control Over <span class="title-accent">Your Inventory</span></h2>
                <p class="section-subtitle">
                    Maintain full control over your stock and procurement.
                </p>
            </div>

            <div class="ft-inventory-layout">
                {{-- Left: 3 Feature Cards --}}
                <div class="ft-inventory-cards">
                    {{-- 1. Inventory Management --}}
                    <div class="ft-inventory-card">
                        <div class="ft-inventory-card-icon">
                            <i class="bi bi-box-seam"></i>
                        </div>
                        <div class="ft-inventory-card-info">
                            <h4>Inventory Management</h4>
                            <p>Track ingredients, products and inventory levels.</p>
                        </div>
                    </div>

                    {{-- 2. Stock Management --}}
                    <div class="ft-inventory-card">
                        <div class="ft-inventory-card-icon">
                            <i class="bi bi-boxes"></i>
                        </div>
                        <div class="ft-inventory-card-info">
                            <h4>Stock Management</h4>
                            <p>Monitor stock movements, available quantities and low-stock levels.</p>
                        </div>
                    </div>

                    {{-- 3. Purchase & Supplier Management --}}
                    <div class="ft-inventory-card">
                        <div class="ft-inventory-card-icon">
                            <i class="bi bi-truck"></i>
                        </div>
                        <div class="ft-inventory-card-info">
                            <h4>Purchase & Supplier Management</h4>
                            <p>Manage suppliers, purchase orders and procurement records.</p>
                        </div>
                    </div>
                </div>

                {{-- Right: Visual Illustration (features 3.png) --}}
                <div class="ft-inventory-visual">
                    <img src="{{ asset('assets/images/home/features 3.png') }}" 
                         alt="Geni Menu Inventory Management & Stock Control System" 
                         loading="lazy">
                </div>
            </div>
        </div>
    </section>

    {{-- ====================================================================
         5. BUSINESS & MANAGEMENT (DARK THEME SECTION)
         ==================================================================== --}}
    <section class="ft-business-section" id="business-management">
        <div class="ft-container">
            <div class="section-header-center">
                <div class="geni-section-eyebrow" style="justify-content: center;">
                    <span class="dash"></span>
                    <span style="color: var(--geni-champagne);">BUSINESS & MANAGEMENT</span>
                    <span class="dash"></span>
                </div>
                <h2 class="section-title">Manage Your Entire Business with <span class="title-accent">Better Visibility</span></h2>
                <p class="section-subtitle">
                    Get complete visibility and control over your food business.
                </p>
            </div>

            <div class="ft-business-layout">
                {{-- Left: 3 Feature Cards --}}
                <div class="ft-business-cards">
                    {{-- 1. Sales & Analytics --}}
                    <div class="ft-dark-card">
                        <div class="ft-dark-card-icon">
                            <i class="bi bi-graph-up"></i>
                        </div>
                        <div class="ft-dark-card-info">
                            <h4>Sales &amp; Analytics</h4>
                            <p>Monitor revenue, sales trends, popular products and business performance.</p>
                        </div>
                    </div>

                    {{-- 2. Customer & Staff Management --}}
                    <div class="ft-dark-card">
                        <div class="ft-dark-card-icon">
                            <i class="bi bi-people"></i>
                        </div>
                        <div class="ft-dark-card-info">
                            <h4>Customer &amp; Staff Management</h4>
                            <p>Manage customer profiles, staff accounts, roles and permissions.</p>
                        </div>
                    </div>

                    {{-- 3. Expense Tracking --}}                              
                    <div class="ft-dark-card">
                        <div class="ft-dark-card-icon">
                            <i class="bi bi-wallet2"></i>
                        </div>
                        <div class="ft-dark-card-info">
                            <h4>Expense Tracking</h4>
                            <p>Record daily expenses and monitor operational costs.</p>
                        </div>
                    </div>
                </div>

                {{-- Right: Dashboard Mockup (features 4.png) --}}
                <div class="ft-business-visual">
                    <img src="{{ asset('assets/images/home/features 4.png') }}" 
                         alt="Geni Menu Sales Report, Revenue Analytics & Expense Dashboard" 
                         loading="lazy">
                </div>
            </div>
        </div>
    </section>

    {{-- ====================================================================
         6. THIRD-PARTY INTEGRATIONS SECTION
         ==================================================================== --}}
    <section class="ft-integrations-section" id="integrations">
        <div class="ft-container">
            <div class="section-header-center">
                <div class="geni-section-eyebrow" style="justify-content: center;">
                    <span class="dash"></span>
                    <span>SEAMLESS INTEGRATIONS</span>
                    <span class="dash"></span>
                </div>
                <h2 class="section-title">Connect with the Platforms <span class="title-accent">Your Business Uses</span></h2>
                <p class="section-subtitle">
                    Bring your food business operations together with powerful delivery and payment integrations.
                </p>
            </div>

            <div class="ft-integrations-grid">
                {{-- Panel 1: Food Delivery Integrations --}}
                <div class="ft-integration-panel">
                    <div class="ft-panel-header">
                        <span class="ft-panel-pill">FOOD DELIVERY INTEGRATIONS</span>
                    </div>
                    <div class="ft-integration-logos">
                        {{-- Swiggy --}}
                        <div class="ft-logo-box" title="Swiggy">
                            <img src="{{ asset('assets/images/home/tile_swiggy.png') }}" alt="Swiggy Delivery Integration">
                        </div>
                        {{-- Zomato --}}
                        <div class="ft-logo-box" title="Zomato">
                            <img src="{{ asset('assets/images/home/icon_zomato.png') }}" alt="Zomato Delivery Integration">
                        </div>
                        {{-- Uber Eats --}}
                        <div class="ft-logo-box" title="Uber Eats">
                            <img src="{{ asset('assets/images/home/tile_ubereats.png') }}" alt="Uber Eats Delivery Integration">
                        </div>
                        {{-- DoorDash --}}
                        <div class="ft-logo-box" title="DoorDash">
                            <img src="{{ asset('assets/images/home/tile_doordash.png') }}" alt="DoorDash Delivery Integration">
                        </div>
                        {{-- Deliveroo --}}
                        <div class="ft-logo-box" title="Deliveroo">
                            <div class="ft-deliveroo-badge">
                                <svg width="18" height="18" viewBox="0 0 24 24" fill="#00CDBC">
                                    <path d="M18.8 3.5c-.5-.4-1.2-.5-1.8-.2l-5.6 2.8-2.9-4.8c-.4-.7-1.1-1.1-1.9-1.1-.8 0-1.5.4-1.9 1.1L.7 9.8c-.5.8-.4 1.8.2 2.5l7.9 9.3c.5.6 1.3 1 2.1 1h7.6c1.4 0 2.5-1.1 2.5-2.5V5.1c0-.6-.3-1.2-.7-1.6zm-6.2 13c-.9 0-1.7-.8-1.7-1.7s.8-1.7 1.7-1.7 1.7.8 1.7 1.7-.8 1.7-1.7 1.7zm4.3 0c-.9 0-1.7-.8-1.7-1.7s.8-1.7 1.7-1.7 1.7.8 1.7 1.7-.8 1.7-1.7 1.7z"/>
                                </svg>
                                <span>deliveroo</span>
                            </div>
                        </div>
                        {{-- & More --}}
                        <div class="ft-logo-box ft-logo-more" title="And More Delivery Platforms">
                            <span>&amp; MORE</span>
                        </div>
                    </div>
                </div>

                {{-- Panel 2: Payment Integrations --}}
                <div class="ft-integration-panel">
                    <div class="ft-panel-header">
                        <span class="ft-panel-pill">PAYMENT INTEGRATIONS</span>
                    </div>
                    <div class="ft-integration-logos">
                        {{-- PhonePe --}}
                        <div class="ft-logo-box" title="PhonePe">
                            <img src="{{ asset('assets/images/home/tile_phonepe.png') }}" alt="PhonePe Payment Integration">
                        </div>
                        {{-- Google Pay --}}
                        <div class="ft-logo-box" title="Google Pay">
                            <img src="{{ asset('assets/images/home/tile_gpay.png') }}" alt="Google Pay Integration">
                        </div>
                        {{-- Paytm --}}
                        <div class="ft-logo-box" title="Paytm">
                            <img src="{{ asset('assets/images/home/tile_paytm.png') }}" alt="Paytm Payment Integration">
                        </div>
                        {{-- Razorpay --}}
                        <div class="ft-logo-box" title="Razorpay">
                            <img src="{{ asset('assets/images/home/tile_razorpay.png') }}" alt="Razorpay Integration">
                        </div>
                        {{-- UPI --}}
                        <div class="ft-logo-box" title="UPI">
                            <img src="{{ asset('assets/images/home/tile_upi.png') }}" alt="UPI Payment Integration">
                        </div>
                        {{-- Stripe --}}
                        <div class="ft-logo-box" title="Stripe">
                            <img src="{{ asset('assets/images/home/tile_stripe.png') }}" alt="Stripe Payment Integration">
                        </div>
                        {{-- PayPal --}}
                        <div class="ft-logo-box" title="PayPal">
                            <img src="{{ asset('assets/images/home/tile_paypal.png') }}" alt="PayPal Payment Integration">
                        </div>
                        {{-- & More --}}
                        <div class="ft-logo-box ft-logo-more" title="And More Payment Gateways">
                            <span>&amp; MORE</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- ====================================================================
         7. FINAL CTA SECTION (WIDE CULINARY DINING BACKGROUND)
         ==================================================================== --}}
    <section class="ft-final-cta-section">
        <div class="ft-final-cta-overlay"></div>
        <div class="ft-container">
            <div class="ft-final-cta-content">
                <h2 class="ft-cta-heading">Ready to Experience the Full Power of Geni Menu?</h2>
                <p class="ft-cta-desc">
                    Discover how Geni Menu can simplify your food business operations with powerful features designed for your business.
                </p>
                <div class="ft-cta-btn-wrapper">
                    <a href="{{ route('contact.us') }}" class="ft-cta-btn">
                        <span>Request a Personalised Demo</span>
                        <span style="font-size: 15px;">&rarr;</span>
                    </a>
                </div>
            </div>
        </div>
    </section>

</div>

@endsection
