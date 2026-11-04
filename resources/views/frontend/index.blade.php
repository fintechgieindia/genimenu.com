@php
    $meta = [
        'title' => 'Geni Menu — Digital Menu Platform for Modern Hospitality',
        'description' => 'Create beautiful digital menus, simplify menu management and deliver a seamless dining experience with Geni Menu intelligent platform.',
        'keywords' => 'digital menu, QR code menu, restaurant menu software, contactless dining, digital dining experience, restaurant POS, menu management, Geni Menu',
    ];
@endphp

@extends('layouts.frontend-master')

@section('content')

<style>
@import url('https://fonts.googleapis.com/css2?family=Cinzel:wght@400;500;600;700&display=swap');
@import url('https://fonts.cdnfonts.com/css/glacial-indifference-2');

/* ==========================================================================
   GENI MENU — LUXURY HOSPITALITY TYPOGRAPHY & SOPHISTICATED PALETTE
   - Headings & Titles: Cinzel Regular, Uppercase
   - Body & Supporting Text: Glacial Indifference Regular
   - Palette: Deep Chocolate (#27130D), Deep Brown (#32180F), Coffee Brown (#4A291B),
              Caramel Accent (#C58B50), Champagne Gold (#F2C58D), Warm Cream (#FFF8F0)
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
}

* { box-sizing: border-box; }
html { scroll-behavior: smooth; }

body {
  font-family: 'Glacial Indifference', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif !important;
  background-color: var(--geni-cream) !important;
  color: var(--geni-text-dark);
  font-size: 15px;
  line-height: 1.65;
  font-weight: 400;
  margin: 0;
  padding: 0;
  overflow-x: clip;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
}

/* Global Headings: Cinzel Regular, Uppercase */
h1, h2, h3, h4, h5, h6,
.geni-hero-title,
.geni-trust-heading,
.geni-features-title,
.geni-integrations-title,
.geni-reviews-title,
.geni-faq-title,
.geni-final-cta-title,
.geni-eyebrow-text,
.geni-section-eyebrow {
  font-family: 'Cinzel', serif !important;
  text-transform: uppercase !important;
  font-weight: 400 !important;
  letter-spacing: 0.03em;
}

/* Supporting accents within headings */
.geni-hero-title .gold-highlight,
.geni-final-cta-title .gold-accent {
  font-weight: 600 !important;
  text-transform: uppercase !important;
}

/* Body & Paragraph text: Glacial Indifference Regular */
p, li, .geni-hero-desc, .geni-why-desc, .geni-integrations-desc,
.geni-faq-subtitle, .geni-final-cta-desc, .geni-testimonial-text {
  font-family: 'Glacial Indifference', sans-serif !important;
  font-weight: 400 !important;
}

/* ==========================================================================
   1. HERO SECTION (Dark Chocolate & Ambient Restaurant Scene)
   ========================================================================== */
.geni-hero {
  position: relative;
  background: radial-gradient(circle at 85% 30%, rgba(197, 139, 80, 0.18) 0%, transparent 48%),
              radial-gradient(circle at 18% 45%, rgba(96, 58, 40, 0.26) 0%, transparent 55%),
              linear-gradient(135deg, #27130D 0%, #32180F 55%, #221008 100%) !important;
  color: var(--geni-text-light) !important;
  padding: 104px 0 64px 0 !important;
  min-height: 620px;
  overflow: hidden;
  display: flex;
  align-items: center;
}

.geni-hero-ambient-glow {
  position: absolute;
  top: 45%;
  right: 15%;
  transform: translate(20%, -50%);
  width: 600px;
  height: 600px;
  border-radius: 50%;
  background: radial-gradient(circle, rgba(197, 139, 80, 0.18) 0%, rgba(242, 197, 141, 0.06) 45%, transparent 70%);
  pointer-events: none;
  z-index: 1;
}

.geni-hero-container {
  max-width: 1220px;
  width: 100%;
  margin: 0 auto;
  padding: 0 24px;
  position: relative;
  z-index: 2;
  display: grid;
  grid-template-columns: 1.05fr 1.15fr;
  align-items: center;
  gap: 40px;
}

.geni-hero-left {
  display: flex;
  flex-direction: column;
  align-items: flex-start;
  text-align: left;
  z-index: 3;
}

.geni-hero-eyebrow {
  display: inline-flex;
  align-items: center;
  gap: 10px;
  margin-bottom: 16px;
}

.geni-eyebrow-line {
  display: inline-block;
  width: 28px;
  height: 1.5px;
  background-color: var(--geni-caramel);
  border-radius: 1px;
}

.geni-eyebrow-text {
  font-family: 'Cinzel', serif;
  font-size: 11.5px;
  font-weight: 400;
  letter-spacing: 0.12em;
  text-transform: uppercase;
  color: var(--geni-champagne);
  line-height: 1;
}

/* Hero Heading: 42-46px on desktop with 600 weight */
.geni-hero-title {
  font-family: 'Cinzel', serif;
  font-size: clamp(32px, 3.8vw, 44px);
  font-weight: 400;
  line-height: 1.25;
  letter-spacing: 0.03em;
  text-transform: uppercase;
  color: var(--geni-text-light);
  margin: 0 0 18px 0;
}

.geni-hero-title .gold-highlight {
  color: var(--geni-champagne);
  font-weight: 600;
  text-transform: uppercase;
  display: inline-block;
}

.geni-hero-desc {
  font-family: 'Glacial Indifference', sans-serif;
  font-size: 15px;
  line-height: 1.65;
  color: var(--geni-text-sec-light);
  max-width: 490px;
  margin: 0 0 28px 0;
  font-weight: 400;
  letter-spacing: 0.01em;
}

.geni-hero-ctas {
  display: flex;
  align-items: center;
  gap: 14px;
  margin-bottom: 30px;
  flex-wrap: wrap;
}

.btn-primary-gold {
  display: inline-flex;
  align-items: center;
  gap: 8px;
  background: linear-gradient(135deg, #F2C58D 0%, #E8BA80 100%);
  color: #32180F !important;
  font-family: 'Glacial Indifference', sans-serif;
  font-size: 14px;
  font-weight: 700;
  padding: 11.5px 24px;
  border-radius: 9999px;
  text-decoration: none;
  box-shadow: 0 4px 16px rgba(242, 197, 141, 0.25);
  transition: all 0.22s ease;
  cursor: pointer;
  letter-spacing: 0.04em;
}

.btn-primary-gold:hover {
  background: linear-gradient(135deg, #FFF8F0 0%, #F2C58D 100%);
  color: #27130D !important;
  transform: translateY(-1.5px);
  box-shadow: 0 8px 22px rgba(242, 197, 141, 0.38);
}

.btn-ghost-gold {
  display: inline-flex;
  align-items: center;
  gap: 8px;
  background-color: transparent;
  color: var(--geni-text-light) !important;
  font-family: 'Glacial Indifference', sans-serif;
  font-size: 14px;
  font-weight: 700;
  padding: 11px 22px;
  border-radius: 9999px;
  border: 1.5px solid rgba(242, 197, 141, 0.45);
  text-decoration: none;
  transition: all 0.22s ease;
  cursor: pointer;
  letter-spacing: 0.04em;
}

.btn-ghost-gold:hover {
  background-color: rgba(242, 197, 141, 0.10);
  border-color: var(--geni-champagne);
  color: var(--geni-champagne) !important;
  transform: translateY(-1.5px);
}

.geni-hero-features-wrap {
  display: flex;
  align-items: center;
  gap: 12px;
  padding-top: 20px;
  border-top: 1px solid rgba(197, 139, 80, 0.20);
  max-width: 500px;
  width: 100%;
}

.geni-hero-feature {
  flex: 1;
  display: flex;
  align-items: center;
  gap: 8px;
}

.geni-hero-feature .feat-icon {
  width: 24px;
  height: 24px;
  display: flex;
  align-items: center;
  justify-content: center;
  color: var(--geni-champagne);
  flex-shrink: 0;
}

.geni-hero-feature .feat-icon svg {
  width: 16px;
  height: 16px;
}

.geni-hero-feature .feat-name {
  font-size: 11.5px;
  font-weight: 500;
  color: var(--geni-text-light);
  line-height: 1.25;
}

.geni-hero-feat-sep {
  width: 1px;
  height: 28px;
  background-color: rgba(197, 139, 80, 0.22);
  flex-shrink: 0;
}

.geni-hero-right {
  display: flex;
  align-items: center;
  justify-content: center;
  position: relative;
  z-index: 2;
  width: 100%;
}

.geni-hero-showcase-box {
  position: relative;
  width: 100%;
  max-width: 530px;
  animation: geniFloat 6s ease-in-out infinite;
  transition: transform 0.3s ease;
}

.geni-hero-showcase-box:hover {
  transform: scale(1.015);
}

.geni-hero-showcase-img {
  width: 100%;
  height: auto;
  display: block;
  border-radius: 12px;
  filter: drop-shadow(0 16px 36px rgba(10, 5, 3, 0.60));
}

@keyframes geniFloat {
  0%, 100% { transform: translateY(0); }
  50% { transform: translateY(-6px); }
}

/* ==========================================================================
   2. TRUSTED BY HOSPITALITY BUSINESSES (Light Cream Section)
   ========================================================================== */
.geni-trust-strip {
  background: var(--geni-cream) !important;
  padding: 56px 0 64px;
  border-bottom: 1px solid rgba(197, 139, 80, 0.16);
  position: relative;
}

.geni-trust-container {
  max-width: 1220px;
  margin: 0 auto;
  padding: 0 24px;
}

.geni-trust-header {
  max-width: 720px;
  margin: 0 auto 36px;
  text-align: center;
}

.geni-trust-heading {
  font-family: 'Cinzel', serif !important;
  font-size: clamp(22px, 2.4vw, 28px);
  font-weight: 400 !important;
  line-height: 1.3;
  letter-spacing: 0.04em;
  text-transform: uppercase !important;
  color: var(--geni-text-dark);
  margin: 0 0 12px 0;
}

.geni-trust-desc {
  font-family: 'Glacial Indifference', sans-serif !important;
  font-size: 14.5px;
  line-height: 1.62;
  font-weight: 400 !important;
  color: var(--geni-text-muted);
  margin: 0;
}

.geni-trust-grid {
  display: grid;
  grid-template-columns: repeat(6, 1fr);
  gap: 14px;
}

.geni-trust-cat {
  background: #FAF4ED;
  border: 1px solid rgba(197, 139, 80, 0.20);
  border-radius: 12px;
  padding: 18px 10px 16px;
  display: flex;
  flex-direction: column;
  align-items: center;
  text-align: center;
  gap: 10px;
  transition: all 0.22s ease;
  cursor: default;
}

.geni-trust-cat:hover {
  background: #FFFFFF;
  border-color: var(--geni-caramel);
  transform: translateY(-3px);
  box-shadow: 0 8px 20px rgba(50, 24, 15, 0.08);
}

.geni-trust-cat .cat-icon {
  width: 44px;
  height: 44px;
  border-radius: 50%;
  background: rgba(197, 139, 80, 0.12);
  display: flex;
  align-items: center;
  justify-content: center;
  color: var(--geni-coffee);
  font-size: 21px;
  line-height: 1;
  transition: all 0.22s ease;
}

.geni-trust-cat:hover .cat-icon {
  background: var(--geni-champagne);
  color: #32180F;
  transform: scale(1.08);
}

.geni-trust-cat .cat-label {
  font-family: 'Glacial Indifference', sans-serif !important;
  font-size: 12.5px;
  font-weight: 500;
  color: var(--geni-text-dark);
  line-height: 1.35;
}

/* ==========================================================================
   3. WHY GENI MENU (Background Image: genimenu.png with Content on Left)
   ========================================================================== */
.geni-why-section {
  position: relative;
  background-color: #FCF2EA !important;
  background-image: url('{{ asset("assets/images/home/genimenu.png") }}') !important;
  background-repeat: no-repeat !important;
  background-position: right center !important;
  background-size: contain !important;
  min-height: 520px;
  padding: 44px 0 48px;
  display: flex;
  align-items: center;
  overflow: hidden;
}

.geni-why-container {
  max-width: 1220px;
  width: 100%;
  margin: 0 auto;
  padding: 0 24px;
  display: grid;
  grid-template-columns: 1fr 1fr;
  align-items: center;
  gap: 32px;
  position: relative;
  z-index: 2;
}

.geni-why-content {
  display: flex;
  flex-direction: column;
  align-items: flex-start;
  text-align: left;
  max-width: 440px;
  width: 100%;
}

.geni-section-eyebrow {
  display: inline-flex;
  align-items: center;
  gap: 8px;
  font-family: 'Cinzel', serif;
  font-size: 11px;
  font-weight: 500;
  letter-spacing: 0.14em;
  text-transform: uppercase;
  color: #603A28;
  margin-bottom: 10px;
}

.geni-section-eyebrow .dash {
  width: 24px;
  height: 2px;
  background: #C58B50;
  display: inline-block;
  border-radius: 1px;
}

.geni-why-title {
  font-family: 'Playfair Display', Georgia, serif !important;
  font-size: clamp(24px, 2.3vw, 32px) !important;
  font-weight: 700 !important;
  line-height: 1.25 !important;
  letter-spacing: -0.01em !important;
  color: #27130D !important;
  text-transform: none !important;
  margin: 0 0 12px 0 !important;
  max-width: 420px;
}

.geni-why-highlight-wrap {
  position: relative;
  display: inline-block;
  color: #A35C2E;
}

.geni-why-italic {
  font-family: 'Playfair Display', Georgia, serif !important;
  font-style: italic !important;
  font-weight: 600 !important;
  text-transform: none !important;
  color: #A35C2E !important;
  letter-spacing: 0 !important;
}

.geni-why-swoosh {
  position: absolute;
  left: 0;
  bottom: -5px;
  width: 100%;
  height: 10px;
  pointer-events: none;
}

.geni-why-desc {
  font-family: 'Glacial Indifference', sans-serif !important;
  font-size: 13.5px;
  line-height: 1.55;
  color: #6B5549;
  margin: 0 0 22px 0;
  max-width: 410px;
  font-weight: 400 !important;
}

/* 4 Feature highlight tiles in a horizontal row */
.geni-why-features-row {
  display: grid;
  grid-template-columns: repeat(4, 1fr);
  gap: 10px;
  max-width: 420px;
  width: 100%;
  margin-bottom: 24px;
}

.geni-why-feat-col {
  display: flex;
  flex-direction: column;
  align-items: center;
  text-align: center;
  gap: 7px;
}

.geni-why-feat-icon-box {
  width: 44px;
  height: 44px;
  border-radius: 12px;
  background: #FAF1E6;
  border: 1px solid #E5D2C0;
  display: flex;
  align-items: center;
  justify-content: center;
  color: #A35C2E;
  box-shadow: 0 2px 6px rgba(50, 24, 15, 0.04);
  transition: all 0.22s ease;
}

.geni-why-feat-col:hover .geni-why-feat-icon-box {
  background: #FFFFFF;
  border-color: #C58B50;
  transform: translateY(-2px);
  box-shadow: 0 6px 14px rgba(50, 24, 15, 0.08);
}

.geni-why-feat-label {
  font-family: 'Glacial Indifference', sans-serif !important;
  font-size: 10.5px;
  font-weight: 600;
  line-height: 1.3;
  color: #27130D;
  text-align: center;
  display: block;
  max-width: 82px;
}

/* Primary Action Button: Book a Demo pill */
.btn-why-demo {
  display: inline-flex;
  align-items: center;
  gap: 8px;
  background: #3A1B10;
  color: #FFF8F0 !important;
  font-family: 'Glacial Indifference', sans-serif;
  font-size: 13px;
  font-weight: 600;
  letter-spacing: 0.2px;
  padding: 10px 22px;
  border-radius: 9999px;
  border: 1px solid rgba(197, 139, 80, 0.40);
  box-shadow: 0 4px 14px rgba(39, 19, 13, 0.22);
  text-decoration: none;
  transition: all 0.22s ease;
  cursor: pointer;
}

.btn-why-demo:hover {
  background: #4E2517;
  border-color: #F2C58D;
  color: #F2C58D !important;
  transform: translateY(-2px);
  box-shadow: 0 8px 20px rgba(39, 19, 13, 0.35);
}

.geni-why-spacer {
  display: block;
  min-height: 360px;
}

/* Responsive */
@media (max-width: 991px) {
  .geni-why-section {
    background-image: none !important;
    padding: 48px 0;
    min-height: auto;
  }
  .geni-why-container {
    grid-template-columns: 1fr;
    text-align: center;
  }
  .geni-why-content {
    align-items: center;
    text-align: center;
    max-width: 100%;
  }
  .geni-why-features-row {
    margin: 0 auto 24px;
  }
  .geni-why-spacer {
    display: block;
    width: 100%;
    min-height: 280px;
    background-image: url('{{ asset("assets/images/home/genimenu.png") }}') !important;
    background-repeat: no-repeat;
    background-position: right center;
    background-size: cover;
    border-radius: 14px;
    box-shadow: 0 8px 24px rgba(50, 24, 15, 0.10);
  }
}

@media (max-width: 520px) {
  .geni-why-features-row {
    grid-template-columns: repeat(2, 1fr);
    gap: 12px 10px;
  }
  .btn-why-demo {
    width: 100%;
    justify-content: center;
  }
  .geni-why-spacer {
    min-height: 220px;
  }
}

/* ==========================================================================
   4. POWERFUL FEATURES (Bento Grid Layout: Deep Chocolate & Champagne Gold)
   ========================================================================== */
.geni-features-section {
  background: linear-gradient(135deg, #27130D 0%, #32180F 60%, #200E07 100%) !important;
  color: var(--geni-text-light);
  padding: 85px 0 95px;
  position: relative;
  overflow: hidden;
}

.geni-features-section::before {
  content: '';
  position: absolute;
  top: -150px;
  right: -100px;
  width: 500px;
  height: 500px;
  background: radial-gradient(circle, rgba(197, 139, 80, 0.08) 0%, transparent 70%);
  pointer-events: none;
  z-index: 1;
}

.geni-features-section::after {
  content: '';
  position: absolute;
  bottom: -150px;
  left: -100px;
  width: 500px;
  height: 500px;
  background: radial-gradient(circle, rgba(197, 139, 80, 0.06) 0%, transparent 70%);
  pointer-events: none;
  z-index: 1;
}

.geni-features-container {
  max-width: 1220px;
  margin: 0 auto;
  padding: 0 24px;
  position: relative;
  z-index: 2;
}

.geni-features-header {
  max-width: 680px;
  margin: 0 auto 46px;
  text-align: center;
}

.geni-features-title {
  font-family: 'Cinzel', serif;
  font-size: clamp(24px, 2.6vw, 32px);
  font-weight: 400;
  color: var(--geni-text-light);
  letter-spacing: 0.03em;
  text-transform: uppercase;
  margin: 0;
  line-height: 1.3;
}

/* --- Top Bento Row: 2 Large Hero Cards --- */
.geni-bento-hero-grid {
  display: grid;
  grid-template-columns: 1fr 1fr;
  gap: 24px;
  margin-bottom: 24px;
}

.geni-bento-card {
  background: rgba(74, 41, 27, 0.42);
  border: 1px solid rgba(197, 139, 80, 0.22);
  border-radius: 18px;
  padding: 28px 28px 24px;
  position: relative;
  overflow: hidden;
  transition: all 0.28s ease;
  display: flex;
  flex-direction: column;
}

.geni-bento-card:hover {
  background: rgba(85, 46, 30, 0.55);
  border-color: rgba(242, 197, 141, 0.5);
  transform: translateY(-3px);
  box-shadow: 0 16px 36px rgba(10, 5, 3, 0.45);
}

.geni-bento-header {
  margin-bottom: 20px;
}

.geni-bento-icon-badge {
  width: 44px;
  height: 44px;
  border-radius: 50%;
  background: rgba(197, 139, 80, 0.16);
  border: 1px solid rgba(197, 139, 80, 0.35);
  display: inline-flex;
  align-items: center;
  justify-content: center;
  color: var(--geni-champagne);
  margin-bottom: 14px;
}

.geni-bento-icon-badge svg {
  width: 22px;
  height: 22px;
  stroke: var(--geni-champagne);
}

.geni-bento-title {
  font-family: 'Cinzel', serif;
  font-size: 20px;
  font-weight: 500;
  color: #FFF8F0;
  margin: 0 0 6px 0;
  letter-spacing: 0.02em;
}

.geni-bento-desc {
  font-family: 'Glacial Indifference', sans-serif;
  font-size: 13.5px;
  color: rgba(255, 248, 240, 0.72);
  line-height: 1.45;
  margin: 0;
}

/* --- Hero Card 1: Order Management UI Mockup --- */
.geni-bento-mockup-order {
  margin-top: auto;
  padding-top: 14px;
  position: relative;
  min-height: 200px;
}

.order-modal-box {
  background: rgba(32, 14, 7, 0.85);
  border: 1px solid rgba(197, 139, 80, 0.28);
  border-radius: 14px;
  padding: 16px 18px;
  box-shadow: 0 12px 28px rgba(0, 0, 0, 0.4);
  backdrop-filter: blur(8px);
  position: relative;
  z-index: 1;
}

.order-modal-header {
  display: flex;
  justify-content: space-between;
  align-items: center;
  padding-bottom: 10px;
  border-bottom: 1px solid rgba(197, 139, 80, 0.15);
  margin-bottom: 12px;
}

.order-badge-pill {
  display: inline-flex;
  align-items: center;
  gap: 6px;
  font-family: 'Glacial Indifference', sans-serif;
  font-size: 12px;
  font-weight: 600;
  color: #FFF8F0;
}

.order-badge-pill .pill-num {
  background: var(--geni-champagne);
  color: #27130D;
  padding: 1px 7px;
  border-radius: 6px;
  font-weight: 700;
  font-size: 11px;
}

.order-modal-time {
  font-family: 'Glacial Indifference', sans-serif;
  font-size: 11.5px;
  color: rgba(255, 248, 240, 0.6);
}

.order-items-list {
  display: flex;
  flex-direction: column;
  gap: 6px;
  margin-bottom: 14px;
}

.order-item-row {
  display: flex;
  align-items: center;
  gap: 8px;
  font-family: 'Glacial Indifference', sans-serif;
  font-size: 12px;
  color: rgba(255, 248, 240, 0.85);
}

.order-item-dot {
  width: 5px;
  height: 5px;
  border-radius: 50%;
  background: var(--geni-champagne);
}

.order-modal-footer {
  display: flex;
  align-items: center;
  justify-content: space-between;
  padding-top: 10px;
  border-top: 1px solid rgba(197, 139, 80, 0.15);
}

.order-footer-note {
  font-size: 11px;
  color: rgba(255, 248, 240, 0.55);
}

.order-footer-actions {
  display: flex;
  align-items: center;
  gap: 10px;
}

.order-btn-details {
  font-size: 11.5px;
  color: rgba(255, 248, 240, 0.75);
  text-decoration: none;
}

.order-btn-pay {
  background: var(--geni-champagne);
  color: #27130D;
  font-family: 'Glacial Indifference', sans-serif;
  font-size: 11.5px;
  font-weight: 700;
  padding: 5px 14px;
  border-radius: 8px;
  border: none;
  cursor: default;
}

/* Floating dish preview cards over Order Mockup */
.floating-dish-card {
  position: absolute;
  background: rgba(45, 20, 10, 0.95);
  border: 1px solid rgba(197, 139, 80, 0.35);
  border-radius: 10px;
  padding: 6px 10px 6px 6px;
  display: flex;
  align-items: center;
  gap: 8px;
  box-shadow: 0 10px 24px rgba(0, 0, 0, 0.5);
  backdrop-filter: blur(6px);
  z-index: 2;
  transition: transform 0.24s ease;
}

.floating-dish-left {
  top: -8px;
  left: -8px;
}

.floating-dish-right {
  bottom: 22px;
  right: -8px;
}

.geni-bento-card:hover .floating-dish-left {
  transform: translateY(-3px) scale(1.02);
}

.geni-bento-card:hover .floating-dish-right {
  transform: translateY(3px) scale(1.02);
}

.floating-dish-img {
  width: 38px;
  height: 38px;
  border-radius: 8px;
  object-fit: cover;
}

.floating-dish-info {
  display: flex;
  flex-direction: column;
}

.floating-dish-name {
  font-size: 11px;
  font-weight: 600;
  color: #FFF8F0;
  line-height: 1.2;
}

.floating-dish-price {
  font-size: 11px;
  color: var(--geni-champagne);
  font-weight: 700;
}

/* --- Hero Card 2: KOT & Kitchen Display System Mockup --- */
.geni-bento-mockup-kds {
  margin-top: auto;
  padding-top: 14px;
  position: relative;
  min-height: 200px;
}

.kds-screen-frame {
  background: rgba(30, 13, 6, 0.9);
  border: 1px solid rgba(197, 139, 80, 0.28);
  border-radius: 14px;
  padding: 12px 14px;
  box-shadow: 0 12px 28px rgba(0, 0, 0, 0.4);
  transform: perspective(900px) rotateY(-4deg) rotateX(2deg);
  transition: transform 0.28s ease;
}

.geni-bento-card:hover .kds-screen-frame {
  transform: perspective(900px) rotateY(0deg) rotateX(0deg);
}

.kds-screen-nav {
  display: flex;
  justify-content: space-between;
  align-items: center;
  padding-bottom: 8px;
  border-bottom: 1px solid rgba(197, 139, 80, 0.15);
  margin-bottom: 10px;
}

.kds-screen-tabs {
  display: flex;
  align-items: center;
  gap: 10px;
  font-size: 11px;
  font-family: 'Glacial Indifference', sans-serif;
}

.kds-tab {
  color: rgba(255, 248, 240, 0.6);
  padding: 2px 8px;
  border-radius: 6px;
}

.kds-tab.active {
  background: rgba(197, 139, 80, 0.22);
  color: var(--geni-champagne);
  font-weight: 600;
}

.kds-screen-status {
  font-size: 10.5px;
  color: rgba(255, 248, 240, 0.55);
}

.kds-tickets-grid {
  display: grid;
  grid-template-columns: 1fr 1fr;
  gap: 10px;
}

.kds-ticket-card {
  background: rgba(45, 20, 10, 0.7);
  border: 1px solid rgba(197, 139, 80, 0.18);
  border-radius: 10px;
  padding: 8px 10px;
}

.kds-ticket-top {
  display: flex;
  justify-content: space-between;
  align-items: center;
  margin-bottom: 6px;
}

.kds-ticket-id {
  font-size: 10.5px;
  font-weight: 700;
  color: var(--geni-champagne);
}

.kds-ticket-timer {
  font-size: 9.5px;
  color: #FFF8F0;
  background: rgba(197, 139, 80, 0.25);
  padding: 1px 5px;
  border-radius: 4px;
}

.kds-ticket-items {
  font-size: 10.5px;
  color: rgba(255, 248, 240, 0.8);
  line-height: 1.35;
  margin-bottom: 6px;
}

.kds-ticket-btn {
  width: 100%;
  border: 1px solid rgba(197, 139, 80, 0.35);
  background: transparent;
  color: var(--geni-champagne);
  font-size: 9.5px;
  font-weight: 600;
  padding: 3px 0;
  border-radius: 6px;
  text-align: center;
}

/* --- Bottom 6 Bento Cards (3 Columns x 2 Rows) --- */
.geni-bento-sub-grid {
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  gap: 20px;
}

.geni-bento-mini-card {
  background: rgba(74, 41, 27, 0.42);
  border: 1px solid rgba(197, 139, 80, 0.22);
  border-radius: 16px;
  padding: 24px 22px;
  transition: all 0.26s ease;
  display: flex;
  flex-direction: column;
}

.geni-bento-mini-card:hover {
  background: rgba(85, 46, 30, 0.55);
  border-color: rgba(242, 197, 141, 0.5);
  transform: translateY(-3px);
  box-shadow: 0 14px 30px rgba(10, 5, 3, 0.42);
}

.geni-bento-mini-title {
  font-family: 'Cinzel', serif;
  font-size: 17px;
  font-weight: 500;
  color: #FFF8F0;
  margin: 0 0 6px 0;
  letter-spacing: 0.02em;
}

.geni-bento-mini-desc {
  font-family: 'Glacial Indifference', sans-serif;
  font-size: 13px;
  color: rgba(255, 248, 240, 0.70);
  line-height: 1.45;
  margin: 0;
}

/* --- Card 8: Dark Highlight Accent Card --- */
.geni-bento-accent-card {
  background: linear-gradient(145deg, #1A0B06 0%, #36170C 100%) !important;
  border: 1.5px solid rgba(197, 139, 80, 0.55) !important;
  box-shadow: 0 12px 32px rgba(10, 5, 3, 0.55);
  justify-content: space-between;
}

.geni-bento-accent-card:hover {
  border-color: var(--geni-champagne) !important;
  box-shadow: 0 16px 40px rgba(197, 139, 80, 0.25);
}

.geni-bento-accent-title {
  font-family: 'Cinzel', serif;
  font-size: 19px;
  font-weight: 500;
  color: #FFF8F0;
  line-height: 1.35;
  margin: 0 0 16px 0;
}

.geni-bento-accent-btn {
  display: inline-flex;
  align-items: center;
  justify-content: center;
  background: var(--geni-champagne);
  color: #27130D !important;
  font-family: 'Glacial Indifference', sans-serif;
  font-size: 12.5px;
  font-weight: 700;
  padding: 8px 18px;
  border-radius: 999px;
  text-decoration: none;
  align-self: flex-start;
  transition: all 0.22s ease;
  box-shadow: 0 4px 12px rgba(0, 0, 0, 0.3);
}

.geni-bento-accent-btn:hover {
  background: #FFF8F0;
  color: #27130D !important;
  transform: translateX(3px);
}

/* ==========================================================================
   5. INTEGRATIONS (Spacious Category Cards with Sizable Rounded Box-Cards)
   ========================================================================== */
.geni-integrations-section {
  background: var(--geni-cream) !important;
  padding: 90px 0 100px;
  position: relative;
  overflow: hidden;
  border-bottom: 1px solid rgba(197, 139, 80, 0.16);
}

.geni-integrations-container {
  max-width: 1220px;
  margin: 0 auto;
  padding: 0 24px;
  position: relative;
  z-index: 2;
}

.geni-integrations-header {
  max-width: 680px;
  margin: 0 auto 50px;
  text-align: center;
}

.geni-integrations-title {
  font-family: 'Cinzel', serif;
  font-size: clamp(24px, 2.6vw, 32px);
  font-weight: 500;
  letter-spacing: 0.03em;
  text-transform: uppercase;
  color: var(--geni-text-dark);
  margin: 0 0 12px 0;
  line-height: 1.3;
}

.geni-integrations-desc {
  font-family: 'Glacial Indifference', sans-serif;
  font-size: 15.5px;
  line-height: 1.6;
  color: var(--geni-text-muted);
  margin: 0 auto;
  max-width: 620px;
}

/* 2x2 Category Cards Grid */
.geni-integrations-category-grid {
  display: grid;
  grid-template-columns: repeat(2, 1fr);
  gap: 26px;
  margin-bottom: 46px;
}

.geni-int-cat-card {
  background: #FFFFFF;
  border: 1px solid rgba(197, 139, 80, 0.22);
  border-radius: 22px;
  padding: 32px 32px 30px;
  box-shadow: 0 6px 22px rgba(50, 24, 15, 0.04);
  transition: all 0.28s ease;
  display: flex;
  flex-direction: column;
}

.geni-int-cat-card:hover {
  transform: translateY(-4px);
  border-color: rgba(197, 139, 80, 0.50);
  box-shadow: 0 14px 34px rgba(50, 24, 15, 0.09);
}

.geni-int-cat-header {
  margin-bottom: 24px;
  padding-bottom: 16px;
  border-bottom: 1px solid rgba(197, 139, 80, 0.12);
}

.geni-int-cat-info {
  display: flex;
  flex-direction: column;
}

.geni-int-cat-title {
  font-family: 'Cinzel', serif;
  font-size: 20px;
  font-weight: 600;
  color: #27130D;
  margin: 0 0 5px 0;
  letter-spacing: 0.02em;
}

.geni-int-cat-sub {
  font-family: 'Glacial Indifference', sans-serif;
  font-size: 14px;
  color: #7A6256;
  margin: 0;
}

/* Logos Row: Spacious, Beautifully-Fit White Box Cards */
.geni-int-platforms-row {
  display: flex;
  align-items: center;
  justify-content: flex-start;
  gap: 16px;
  flex-wrap: wrap;
  margin-top: auto;
  padding-top: 6px;
}

.geni-int-box-card {
  min-width: 104px;
  height: 92px;
  background: #FFFFFF;
  border: 1.5px solid rgba(197, 139, 80, 0.22);
  border-radius: 18px;
  display: flex;
  align-items: center;
  justify-content: center;
  padding: 12px 14px;
  box-shadow: 0 3px 12px rgba(50, 24, 15, 0.03);
  transition: all 0.24s ease;
  flex-shrink: 0;
  box-sizing: border-box;
}

.geni-int-box-card:hover {
  transform: translateY(-3px);
  border-color: rgba(197, 139, 80, 0.55);
  box-shadow: 0 8px 22px rgba(50, 24, 15, 0.10);
}

.geni-int-box-img {
  max-height: 52px;
  max-width: 86px;
  width: auto;
  height: auto;
  object-fit: contain;
  transition: transform 0.22s ease;
}

.geni-int-box-card:hover .geni-int-box-img {
  transform: scale(1.05);
}

/* Hardware Grid (5 devices with Real Cutout Images) */
.geni-int-hardware-grid {
  display: grid;
  grid-template-columns: repeat(5, 1fr);
  gap: 14px;
  margin-top: auto;
  padding-top: 6px;
}

.geni-hardware-item {
  background: #FAF6F2;
  border: 1px solid rgba(197, 139, 80, 0.18);
  border-radius: 14px;
  padding: 16px 8px 14px;
  display: flex;
  flex-direction: column;
  align-items: center;
  text-align: center;
  gap: 10px;
  transition: all 0.24s ease;
}

.geni-hardware-item:hover {
  background: #FFFFFF;
  border-color: rgba(197, 139, 80, 0.45);
  transform: translateY(-3px);
  box-shadow: 0 8px 20px rgba(50, 24, 15, 0.09);
}

.geni-hardware-img-wrap {
  height: 54px;
  width: 100%;
  display: flex;
  align-items: center;
  justify-content: center;
}

.geni-hardware-real-img {
  max-height: 50px;
  max-width: 100%;
  object-fit: contain;
  filter: drop-shadow(0 3px 6px rgba(0, 0, 0, 0.12));
  transition: transform 0.22s ease;
}

.geni-hardware-item:hover .geni-hardware-real-img {
  transform: scale(1.08);
}

.geni-hardware-label {
  font-family: 'Glacial Indifference', sans-serif;
  font-size: 12px;
  font-weight: 600;
  color: #3E2417;
  line-height: 1.25;
}

/* Bottom Explore CTA Button */
.geni-integrations-cta-wrap {
  text-align: center;
}

.btn-integration-explore {
  display: inline-flex;
  align-items: center;
  gap: 8px;
  background: #27130D;
  color: #FFF8F0 !important;
  font-family: 'Glacial Indifference', sans-serif;
  font-size: 14.5px;
  font-weight: 600;
  padding: 13px 30px;
  border-radius: 999px;
  border: 1px solid #C58B50;
  text-decoration: none;
  transition: all 0.24s ease;
  box-shadow: 0 4px 14px rgba(39, 19, 13, 0.18);
}

.btn-integration-explore:hover {
  background: #4A291B;
  color: var(--geni-champagne) !important;
  transform: translateY(-2px);
  box-shadow: 0 8px 20px rgba(39, 19, 13, 0.28);
}

@media (max-width: 991px) {
  .geni-integrations-category-grid {
    grid-template-columns: 1fr;
    gap: 22px;
  }
}

@media (max-width: 600px) {
  .geni-int-hardware-grid {
    grid-template-columns: repeat(2, 1fr);
    gap: 10px;
  }
  .geni-int-platforms-row {
    gap: 10px;
  }
  .geni-int-box-card {
    min-width: 86px;
    height: 78px;
    padding: 8px 10px;
  }
  .geni-int-box-img {
    max-height: 42px;
    max-width: 72px;
  }
}

/* ==========================================================================
   6. OUR CUSTOMERS SAY (Deep Coffee Brown Testimonials)
   ========================================================================== */
.geni-reviews-section {
  background: linear-gradient(135deg, #27130D 0%, #3A1E13 60%, #200E07 100%) !important;
  color: var(--geni-text-light);
  padding: 68px 0;
  position: relative;
}

.geni-reviews-container {
  max-width: 1220px;
  margin: 0 auto;
  padding: 0 24px;
  display: grid;
  grid-template-columns: 0.9fr 2fr;
  align-items: center;
  gap: 40px;
}

.geni-reviews-left {
  text-align: left;
}

.geni-reviews-title {
  font-family: 'Cinzel', serif;
  font-size: clamp(23px, 2.5vw, 29px);
  font-weight: 400;
  letter-spacing: 0.03em;
  text-transform: uppercase;
  color: var(--geni-text-light);
  line-height: 1.3;
  margin: 0 0 22px 0;
}

.geni-reviews-arrows {
  display: flex;
  align-items: center;
  gap: 10px;
}

.geni-arrow-btn {
  width: 36px;
  height: 36px;
  border-radius: 50%;
  background: rgba(74, 41, 27, 0.6);
  border: 1px solid rgba(197, 139, 80, 0.30);
  color: var(--geni-champagne);
  display: flex;
  align-items: center;
  justify-content: center;
  cursor: pointer;
  transition: all 0.2s ease;
}

.geni-arrow-btn:hover {
  background: var(--geni-champagne);
  color: #32180F;
  border-color: var(--geni-champagne);
}

.geni-reviews-grid {
  display: grid;
  grid-template-columns: 1fr 1fr;
  gap: 18px;
}

.geni-testimonial-card {
  background: rgba(74, 41, 27, 0.50);
  border: 1px solid rgba(197, 139, 80, 0.25);
  border-radius: 12px;
  padding: 22px 20px;
  display: flex;
  flex-direction: column;
  justify-content: space-between;
  gap: 16px;
  transition: transform 0.2s ease;
}

.geni-testimonial-card:hover {
  transform: translateY(-2.5px);
  border-color: var(--geni-champagne);
}

.geni-quote-mark {
  font-family: 'Georgia', serif;
  font-size: 32px;
  line-height: 1;
  color: var(--geni-champagne);
  opacity: 0.85;
}

.geni-testimonial-text {
  font-size: 13.5px;
  line-height: 1.58;
  color: var(--geni-text-sec-light);
  margin: 0;
  font-style: normal;
}

.geni-testimonial-author {
  display: flex;
  align-items: center;
  justify-content: space-between;
  padding-top: 14px;
  border-top: 1px solid rgba(197, 139, 80, 0.16);
}

.geni-author-info {
  display: flex;
  align-items: center;
  gap: 10px;
}

.geni-author-avatar {
  width: 38px;
  height: 38px;
  border-radius: 50%;
  border: 1.5px solid var(--geni-champagne);
  object-fit: cover;
  display: block;
}

.geni-author-meta {
  display: flex;
  flex-direction: column;
  line-height: 1.25;
}

.geni-author-name {
  font-size: 13px;
  font-weight: 600;
  color: var(--geni-text-light);
}

.geni-author-role {
  font-size: 11px;
  font-weight: 400;
  color: var(--geni-champagne);
  opacity: 0.9;
}

.geni-stars {
  color: #F59E0B;
  font-size: 12px;
  letter-spacing: 2px;
}

/* ==========================================================================
   7. FREQUENTLY ASKED QUESTIONS (Warm Cream Section)
   ========================================================================== */
.geni-faq-section {
  background: var(--geni-cream) !important;
  padding: 68px 0;
}

.geni-faq-container {
  max-width: 1220px;
  margin: 0 auto;
  padding: 0 24px;
  display: grid;
  grid-template-columns: 0.85fr 2fr;
  align-items: flex-start;
  gap: 44px;
}

.geni-faq-left {
  text-align: left;
}

.geni-faq-title {
  font-family: 'Cinzel', serif;
  font-size: clamp(23px, 2.5vw, 29px);
  font-weight: 400;
  letter-spacing: 0.03em;
  text-transform: uppercase;
  color: var(--geni-text-dark);
  line-height: 1.3;
  margin: 0 0 10px 0;
}

.geni-faq-subtitle {
  font-size: 14px;
  line-height: 1.58;
  color: var(--geni-text-muted);
  margin: 0;
  max-width: 300px;
}

.geni-faq-accordion-grid {
  display: grid;
  grid-template-columns: 1fr 1fr;
  gap: 14px 20px;
}

.geni-faq-item {
  background: #FFFFFF;
  border: 1px solid rgba(197, 139, 80, 0.22);
  border-radius: 9px;
  overflow: hidden;
  transition: border-color 0.2s ease, box-shadow 0.2s ease;
}

.geni-faq-item.is-open {
  border-color: var(--geni-caramel);
  box-shadow: 0 3px 14px rgba(50, 24, 15, 0.06);
}

.geni-faq-trigger {
  width: 100%;
  background: transparent;
  border: none;
  padding: 14px 18px;
  display: flex;
  align-items: center;
  justify-content: space-between;
  gap: 12px;
  cursor: pointer;
  text-align: left;
  font-family: 'Glacial Indifference', sans-serif;
  font-size: 14px;
  font-weight: 700;
  color: var(--geni-text-dark);
  transition: color 0.18s ease;
}

.geni-faq-trigger:hover {
  color: #9C582B;
}

.geni-faq-icon {
  font-size: 16px;
  font-weight: 600;
  color: var(--geni-caramel);
  line-height: 1;
  transition: transform 0.22s ease;
  flex-shrink: 0;
}

.geni-faq-item.is-open .geni-faq-icon {
  transform: rotate(45deg);
}

.geni-faq-content {
  display: none;
  padding: 0 18px 14px;
  font-size: 13px;
  line-height: 1.58;
  font-weight: 400;
  color: var(--geni-text-muted);
}

.geni-faq-item.is-open .geni-faq-content {
  display: block;
}

/* ==========================================================================
   8. FINAL CTA (Chocolate-Brown Banner with Dining Photo & Gold Button)
   ========================================================================== */
.geni-final-cta-section {
  background: var(--geni-cream) !important;
  padding: 0 0 65px 0;
}

.geni-final-cta-wrap {
  max-width: 1220px;
  margin: 0 auto;
  padding: 0 24px;
}

.geni-final-cta-card {
  background: linear-gradient(135deg, #27130D 0%, #361A10 65%, #221008 100%);
  border-radius: 16px;
  overflow: hidden;
  border: 1px solid rgba(197, 139, 80, 0.28);
  box-shadow: 0 16px 40px rgba(39, 19, 13, 0.30);
  display: grid;
  grid-template-columns: 220px 1fr auto;
  align-items: center;
  gap: 28px;
  padding-right: 36px;
  position: relative;
}

.geni-final-cta-photo {
  height: 100%;
  min-height: 150px;
  position: relative;
  overflow: hidden;
}

.geni-final-cta-photo img {
  width: 100%;
  height: 100%;
  object-fit: cover;
  display: block;
}

.geni-final-cta-photo::after {
  content: '';
  position: absolute;
  top: 0;
  right: 0;
  bottom: 0;
  width: 50px;
  background: linear-gradient(90deg, transparent 0%, #27130D 100%);
}

.geni-final-cta-content {
  padding: 24px 0;
  text-align: left;
}

.geni-final-cta-title {
  font-family: 'Cinzel', serif;
  font-size: clamp(20px, 2.2vw, 26px);
  font-weight: 400;
  letter-spacing: 0.03em;
  text-transform: uppercase;
  color: var(--geni-text-light);
  line-height: 1.32;
  margin: 0 0 8px 0;
}

.geni-final-cta-title .gold-accent {
  color: var(--geni-champagne);
  font-weight: 600;
  text-transform: uppercase;
}

.geni-final-cta-desc {
  font-size: 13.5px;
  line-height: 1.55;
  color: var(--geni-text-sec-light);
  margin: 0;
  max-width: 520px;
  font-weight: 400;
}

.geni-final-cta-btn-wrap {
  flex-shrink: 0;
}

/* ==========================================================================
   RESPONSIVE BREAKPOINTS (Desktop, Tablet, Mobile)
   ========================================================================== */
@media (max-width: 1199px) and (min-width: 992px) {
  .geni-hero { padding: 95px 0 55px !important; }
  .geni-hero-title { font-size: 40px; }
  .geni-features-grid { grid-template-columns: repeat(4, 1fr); gap: 14px; }
  .geni-final-cta-card { grid-template-columns: 190px 1fr auto; padding-right: 28px; }
}

@media (max-width: 991px) and (min-width: 769px) {
  .geni-hero { padding: 90px 0 50px !important; }
  .geni-hero-container { grid-template-columns: 1fr; gap: 34px; text-align: center; }
  .geni-hero-left { align-items: center; text-align: center; max-width: 620px; margin: 0 auto; }
  .geni-hero-desc { margin-left: auto; margin-right: auto; }
  .geni-hero-ctas { justify-content: center; }
  .geni-hero-features-wrap { margin: 0 auto; display: grid; grid-template-columns: 1fr 1fr; gap: 12px; }
  .geni-hero-feat-sep { display: none; }
  .geni-trust-grid { grid-template-columns: repeat(4, 1fr); gap: 12px; }
  .geni-why-container { grid-template-columns: 1fr; gap: 36px; text-align: center; }
  .geni-why-content { align-items: center; text-align: center; }
  .geni-why-desc { margin-left: auto; margin-right: auto; }
  .geni-features-grid { grid-template-columns: repeat(4, 1fr); gap: 12px; }
  .geni-integrations-desc { margin: 0 auto; }
  .geni-reviews-container { grid-template-columns: 1fr; text-align: center; }
  .geni-reviews-left { text-align: center; }
  .geni-reviews-arrows { justify-content: center; margin-bottom: 20px; }
  .geni-faq-container { grid-template-columns: 1fr; }
  .geni-faq-left { text-align: center; }
  .geni-faq-subtitle { margin: 0 auto; }
  .geni-final-cta-card { grid-template-columns: 1fr; padding: 0 24px 30px; text-align: center; }
  .geni-final-cta-photo { height: 160px; width: 100%; border-radius: 14px 14px 0 0; }
  .geni-final-cta-content { padding: 20px 0 14px; text-align: center; }
  .geni-final-cta-desc { margin: 0 auto; }
  .geni-final-cta-btn-wrap { margin: 0 auto; }
}

@media (max-width: 768px) {
  .geni-hero { padding: 80px 0 45px !important; min-height: auto; }
  .geni-hero-container { display: flex; flex-direction: column; gap: 24px; padding: 0 16px; }
  .geni-hero-left { width: 100%; max-width: 100%; align-items: flex-start; text-align: left; }
  .geni-hero-title { font-size: 30px; line-height: 1.15; margin-bottom: 14px; }
  .geni-hero-desc { font-size: 14px; margin-bottom: 20px; }
  .geni-hero-ctas { flex-direction: column; width: 100%; gap: 10px; margin-bottom: 20px; }
  .btn-primary-gold, .btn-ghost-gold { width: 100%; justify-content: center; padding: 11px 18px; }
  .geni-hero-right { order: 2; margin: 6px 0 10px; }
  .geni-hero-features-wrap { order: 3; display: grid; grid-template-columns: 1fr 1fr; gap: 10px; max-width: 100%; padding-top: 16px; }
  .geni-hero-feat-sep { display: none; }

  .geni-trust-strip { padding: 44px 0 48px; }
  .geni-trust-header { margin-bottom: 24px; }
  .geni-trust-grid { grid-template-columns: repeat(2, 1fr); gap: 10px; }
  .geni-trust-cat { padding: 14px 8px 12px; }
  .geni-trust-cat .cat-icon { width: 38px; height: 38px; font-size: 18px; }
  .geni-trust-cat .cat-label { font-size: 11.5px; }

  .geni-why-section { padding: 50px 0; }
  .geni-why-container { grid-template-columns: 1fr; gap: 30px; padding: 0 16px; }
  .geni-why-title { font-size: 24px; }

  .geni-features-section { padding: 55px 0; }
  .geni-features-container { padding: 0 16px; }
  .geni-features-grid { grid-template-columns: repeat(2, 1fr); gap: 8px; }

  .geni-integrations-section { padding: 50px 0; }
  .geni-integrations-container { padding: 0 16px; }

  .geni-reviews-section { padding: 55px 0; }
  .geni-reviews-container { grid-template-columns: 1fr; gap: 28px; padding: 0 16px; }
  .geni-reviews-grid { grid-template-columns: 1fr; gap: 14px; }

  .geni-faq-section { padding: 50px 0; }
  .geni-faq-container { grid-template-columns: 1fr; gap: 28px; padding: 0 16px; }
  .geni-faq-accordion-grid { grid-template-columns: 1fr; gap: 10px; }

  .geni-final-cta-section { padding: 0 0 50px 0; }
  .geni-final-cta-wrap { padding: 0 16px; }
  .geni-final-cta-card { grid-template-columns: 1fr; padding: 0 18px 26px; text-align: center; }
  .geni-final-cta-photo { height: 140px; width: 100%; border-radius: 12px 12px 0 0; }
  .geni-final-cta-content { padding: 18px 0 12px; text-align: center; }
  .geni-final-cta-btn-wrap { width: 100%; }
  .geni-final-cta-btn-wrap .btn-primary-gold { width: 100%; justify-content: center; }
}
</style>

<!-- ==========================================================================
     1. HERO SECTION (Dark Chocolate & Ambient Restaurant Scene)
     ========================================================================== -->
<header class="hero geni-hero" id="hero">
  <div class="geni-hero-ambient-glow" aria-hidden="true"></div>

  <div class="geni-hero-container">
    <!-- Left Column: Content Area -->
    <div class="geni-hero-left">
      <!-- Eyebrow text -->
      <div class="geni-hero-eyebrow">
        <span class="geni-eyebrow-line" aria-hidden="true"></span>
        <span class="geni-eyebrow-text">THE ART OF DIGITAL DINING</span>
      </div>

      <!-- Main Headline: 42-44px desktop with 600 weight -->
      <h1 class="geni-hero-title">
        Great Food Deserves a Better <span class="gold-highlight">Digital Experience.</span>
      </h1>

      <!-- Description: 14.5px with 400 weight -->
      <p class="geni-hero-desc">
        Bring every dish to life with beautifully crafted digital menus. Showcase your signature creations, highlight irresistible flavours and give guests a delightful way to discover everything your kitchen has to offer.
      </p>

      <!-- CTA Buttons: 13.5px with 600 weight -->
      <div class="geni-hero-ctas">
        <a href="{{ route('restaurant_signup') }}" class="btn-primary-gold">
          <span>Start Your Free Trial</span>
          <span style="font-size: 15px;">&rarr;</span>
        </a>
        <a href="{{ route('enquiry') }}" class="btn-ghost-gold">
          <span>Book a Personalised Demo</span>
          <span style="font-size: 15px;">&rarr;</span>
        </a>
      </div>

      <!-- Four Compact Feature Highlights: 11.5px with 500 weight -->
      <div class="geni-hero-features-wrap">
        <!-- 1. Interactive Digital Menus -->
        <div class="geni-hero-feature">
          <div class="feat-icon" aria-hidden="true">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
              <path d="M18 2v8a3 3 0 0 1-3 3h-1a3 3 0 0 1-3-3V2"></path>
              <path d="M15 13v9"></path>
              <path d="M5 2c0 3.5 2 6 5 6v14"></path>
            </svg>
          </div>
          <span class="feat-name">Interactive Digital Menus</span>
        </div>

        <div class="geni-hero-feat-sep" aria-hidden="true"></div>

        <!-- 2. Instant Menu Updates -->
        <div class="geni-hero-feature">
          <div class="feat-icon" aria-hidden="true">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
              <polygon points="13 2 3 14 12 14 11 22 21 10 12 10 13 2"></polygon>
            </svg>
          </div>
          <span class="feat-name">Instant Menu Updates</span>
        </div>

        <div class="geni-hero-feat-sep" aria-hidden="true"></div>

        <!-- 3. QR Code Access -->
        <div class="geni-hero-feature">
          <div class="feat-icon" aria-hidden="true">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
              <rect x="3" y="3" width="7" height="7"></rect>
              <rect x="14" y="3" width="7" height="7"></rect>
              <rect x="14" y="14" width="7" height="7"></rect>
              <rect x="3" y="14" width="7" height="7"></rect>
              <line x1="7" y1="7" x2="7.01" y2="7"></line>
              <line x1="17" y1="7" x2="17.01" y2="7"></line>
              <line x1="7" y1="17" x2="7.01" y2="17"></line>
              <line x1="17" y1="17" x2="17.01" y2="17"></line>
            </svg>
          </div>
          <span class="feat-name">QR Code Access</span>
        </div>

        <div class="geni-hero-feat-sep" aria-hidden="true"></div>

        <!-- 4. Real-Time Menu Insights -->
        <div class="geni-hero-feature">
          <div class="feat-icon" aria-hidden="true">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
              <line x1="18" y1="20" x2="18" y2="10"></line>
              <line x1="12" y1="20" x2="12" y2="4"></line>
              <line x1="6" y1="20" x2="6" y2="14"></line>
            </svg>
          </div>
          <span class="feat-name">Real-Time Menu Insights</span>
        </div>
      </div>
    </div>

    <!-- Right Column: Product Showcase -->
    <div class="geni-hero-right">
      <div class="geni-hero-showcase-box">
        <img src="{{ asset('assets/images/home/hero1.png') }}"
             alt="Geni Menu Digital Restaurant Tablet and QR Stand on Wooden Table"
             class="geni-hero-showcase-img"
             loading="eager"
             decoding="async">
      </div>
    </div>
  </div>
</header>

<!-- ==========================================================================
     2. TRUSTED BY HOSPITALITY BUSINESSES (Light Cream Section)
     ========================================================================== -->
<section class="geni-trust-strip" id="trusted-by">
  <div class="geni-trust-container">
    <div class="geni-trust-header">
      <h2 class="geni-trust-heading">
        Trusted by Hospitality Businesses Worldwide
      </h2>
      <p class="geni-trust-desc">
        A flexible digital menu platform designed to bring every food experience together. Showcase your offerings, simplify menu access and create a seamless experience for every guest.
      </p>
    </div>

    <div class="geni-trust-grid">
      <!-- 1. Restaurants -->
      <div class="geni-trust-cat">
        <div class="cat-icon" aria-hidden="true">
          <i class="bi bi-shop"></i>
        </div>
        <span class="cat-label">Restaurants</span>
      </div>

      <!-- 2. Cafés & Coffee Shops -->
      <div class="geni-trust-cat">
        <div class="cat-icon" aria-hidden="true">
          <i class="bi bi-cup-hot"></i>
        </div>
        <span class="cat-label">Cafés & Coffee Shops</span>
      </div>

      <!-- 3. Quick Service Restaurants -->
      <div class="geni-trust-cat">
        <div class="cat-icon" aria-hidden="true">
          <i class="bi bi-lightning-charge"></i>
        </div>
        <span class="cat-label">Quick Service Restaurants</span>
      </div>

      <!-- 4. Hotels & Resorts -->
      <div class="geni-trust-cat">
        <div class="cat-icon" aria-hidden="true">
          <i class="bi bi-buildings"></i>
        </div>
        <span class="cat-label">Hotels & Resorts</span>
      </div>

      <!-- 5. Food Courts -->
      <div class="geni-trust-cat">
        <div class="cat-icon" aria-hidden="true">
          <i class="bi bi-shop-window"></i>
        </div>
        <span class="cat-label">Food Courts</span>
      </div>

      <!-- 6. Cloud Kitchens -->
      <div class="geni-trust-cat">
        <div class="cat-icon" aria-hidden="true">
          <i class="bi bi-cloud-check"></i>
        </div>
        <span class="cat-label">Cloud Kitchens</span>
      </div>

      <!-- 7. Bakeries & Dessert Shops -->
      <div class="geni-trust-cat">
        <div class="cat-icon" aria-hidden="true">
          <i class="bi bi-basket2"></i>
        </div>
        <span class="cat-label">Bakeries & Dessert Shops</span>
      </div>

      <!-- 8. Juice & Beverage Bars -->
      <div class="geni-trust-cat">
        <div class="cat-icon" aria-hidden="true">
          <i class="bi bi-cup-straw"></i>
        </div>
        <span class="cat-label">Juice & Beverage Bars</span>
      </div>

      <!-- 9. Pizzerias -->
      <div class="geni-trust-cat">
        <div class="cat-icon" aria-hidden="true">
          <i class="bi bi-pie-chart"></i>
        </div>
        <span class="cat-label">Pizzerias</span>
      </div>

      <!-- 10. Catering Services -->
      <div class="geni-trust-cat">
        <div class="cat-icon" aria-hidden="true">
          <i class="bi bi-people"></i>
        </div>
        <span class="cat-label">Catering Services</span>
      </div>

      <!-- 11. Food Trucks -->
      <div class="geni-trust-cat">
        <div class="cat-icon" aria-hidden="true">
          <i class="bi bi-truck"></i>
        </div>
        <span class="cat-label">Food Trucks</span>
      </div>

      <!-- 12. Canteens & Institutional Dining -->
      <div class="geni-trust-cat">
        <div class="cat-icon" aria-hidden="true">
          <i class="bi bi-mortarboard"></i>
        </div>
        <span class="cat-label">Canteens & Institutional Dining</span>
      </div>
    </div>
  </div>
</section>

<!-- ==========================================================================
     3. WHY GENI MENU (Background Image: genimenu.png with Content on Left)
     ========================================================================== -->
<section class="geni-why-section" id="why-geni">
  <div class="geni-why-container">
    <!-- Left Column: Editorial Content over Cream Background Area -->
    <div class="geni-why-content">
      <div class="geni-section-eyebrow">
        <span class="dash"></span>
        <span>WHY GENI MENU</span>
      </div>

      <h2 class="geni-why-title">
        A Smarter Digital Menu for <br>
        <span class="geni-why-highlight-wrap">
          <span class="geni-why-italic">Modern Restaurants.</span>
          <svg class="geni-why-swoosh" viewBox="0 0 320 20" fill="none" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none">
            <path d="M 4,14 Q 160,2 316,12" stroke="#C58B50" stroke-width="3.5" stroke-linecap="round" fill="none"/>
          </svg>
        </span>
      </h2>

      <p class="geni-why-desc">
        Give your guests the freedom to explore your menu, discover new favourites and make confident dining choices through a simple, engaging digital experience.
      </p>

      <!-- 4 Compact Feature Highlights in a Horizontal Row -->
      <div class="geni-why-features-row">
        <!-- 1. Explore Every Dish with Ease -->
        <div class="geni-why-feat-col">
          <div class="geni-why-feat-icon-box">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#A35C2E" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
              <path d="M3 18h18"></path>
              <path d="M4 18a8 8 0 0 1 16 0"></path>
              <circle cx="12" cy="7" r="1.5"></circle>
            </svg>
          </div>
          <span class="geni-why-feat-label">Explore Every Dish with Ease</span>
        </div>

        <!-- 2. View Food Images Before Ordering -->
        <div class="geni-why-feat-col">
          <div class="geni-why-feat-icon-box">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#A35C2E" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
              <rect x="3" y="3" width="18" height="18" rx="3.5"></rect>
              <circle cx="8.5" cy="8.5" r="1.5"></circle>
              <polyline points="21 15 16 10 5 21"></polyline>
            </svg>
          </div>
          <span class="geni-why-feat-label">View Food Images Before Ordering</span>
        </div>

        <!-- 3. Find Favourite Dishes Faster -->
        <div class="geni-why-feat-col">
          <div class="geni-why-feat-icon-box">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#A35C2E" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
              <circle cx="11" cy="11" r="7"></circle>
              <line x1="21" y1="21" x2="16.5" y2="16.5"></line>
            </svg>
          </div>
          <span class="geni-why-feat-label">Find Favourite Dishes Faster</span>
        </div>

        <!-- 4. Access Menus Anytime with a QR Scan -->
        <div class="geni-why-feat-col">
          <div class="geni-why-feat-icon-box">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#A35C2E" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
              <rect x="3" y="3" width="7" height="7" rx="2.5"></rect>
              <rect x="14" y="3" width="7" height="7" rx="2.5"></rect>
              <rect x="14" y="14" width="7" height="7" rx="2.5"></rect>
              <rect x="3" y="14" width="7" height="7" rx="2.5"></rect>
            </svg>
          </div>
          <span class="geni-why-feat-label">Access Menus Anytime with a QR Scan</span>
        </div>
      </div>

      <!-- Action Button -->
      <a href="{{ route('enquiry') }}" class="btn-why-demo">
        <i class="bi bi-calendar3" style="font-size: 15px; color: #FFF8F0;"></i>
        <span>Book a Demo</span>
        <span style="font-size: 16px; margin-left: 2px;">&rarr;</span>
      </a>
    </div>

    <!-- Right Column Placeholder (visual devices are directly in the background) -->
    <div class="geni-why-spacer" aria-hidden="true"></div>
  </div>
</section>

<!-- ==========================================================================
     4. POWERFUL FEATURES (Bento Grid: 2 Hero Cards + 6 Sub Cards)
     ========================================================================== -->
<section class="geni-features-section" id="features">
  <div class="geni-features-container">
    <div class="geni-features-header">
      <div class="geni-section-eyebrow" style="justify-content: center;">
        <span class="dash"></span>
        <span style="color: var(--geni-champagne);">POWERFUL FEATURES</span>
        <span class="dash"></span>
      </div>
      <h2 class="geni-features-title">
        Everything You Need for a Modern Digital Menu.
      </h2>
    </div>

    <!-- Top Bento Grid: 2 Large Hero Feature Cards with Interactive Mockups -->
    <div class="geni-bento-hero-grid">
      <!-- 1. Order Management Hero Card -->
      <div class="geni-bento-card">
        <div class="geni-bento-header">
          <div class="geni-bento-icon-badge" aria-hidden="true">
            <svg viewBox="0 0 24 24" fill="none" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
              <path d="M16 4h2a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2h2"></path>
              <rect x="8" y="2" width="8" height="4" rx="1" ry="1"></rect>
              <path d="m9 14 2 2 4-4"></path>
            </svg>
          </div>
          <h3 class="geni-bento-title">Order Management</h3>
          <p class="geni-bento-desc">No mix-ups, no delays — just fast, seamless order handling every time.</p>
        </div>

        <div class="geni-bento-mockup-order">
          <!-- Floating mini dish card (Left) -->
          <div class="floating-dish-card floating-dish-left">
            <img src="{{ asset('assets/images/thumb-paneer-tikka.jpg') }}" alt="Margherita Pizza" class="floating-dish-img">
            <div class="floating-dish-info">
              <span class="floating-dish-name">Margherita Pizza</span>
              <span class="floating-dish-price">$14.50</span>
            </div>
          </div>

          <!-- Main Order Ticket Modal Box -->
          <div class="order-modal-box">
            <div class="order-modal-header">
              <div class="order-badge-pill">
                <span class="pill-num">#10</span>
                <span>Dine In &bull; Table 2B</span>
              </div>
              <span class="order-modal-time">12:14 AM</span>
            </div>

            <div class="order-items-list">
              <div class="order-item-row"><span class="order-item-dot"></span><span>1x Bruschetta</span></div>
              <div class="order-item-row"><span class="order-item-dot"></span><span>2x Garlic Bread</span></div>
              <div class="order-item-row"><span class="order-item-dot"></span><span>1x Cheeseburger</span></div>
              <div class="order-item-row"><span class="order-item-dot"></span><span>1x Veggie Burger</span></div>
            </div>

            <div class="order-modal-footer">
              <span class="order-footer-note">Collect payment & finish order</span>
              <div class="order-footer-actions">
                <span class="order-btn-details">Details</span>
                <button type="button" class="order-btn-pay">Pay &amp; Complete</button>
              </div>
            </div>
          </div>

          <!-- Floating mini dish card (Right) -->
          <div class="floating-dish-card floating-dish-right">
            <img src="{{ asset('assets/images/thumb-fried-rice.jpg') }}" alt="Garlic Bread" class="floating-dish-img">
            <div class="floating-dish-info">
              <span class="floating-dish-name">Garlic Bread</span>
              <span class="floating-dish-price">$8.00</span>
            </div>
          </div>
        </div>
      </div>

      <!-- 2. KOT & Kitchen Display Hero Card -->
      <div class="geni-bento-card">
        <div class="geni-bento-header">
          <div class="geni-bento-icon-badge" aria-hidden="true">
            <svg viewBox="0 0 24 24" fill="none" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
              <rect x="2" y="3" width="20" height="14" rx="2" ry="2"></rect>
              <line x1="8" y1="21" x2="16" y2="21"></line>
              <line x1="12" y1="17" x2="12" y2="21"></line>
              <path d="M6 8h4"></path>
              <path d="M6 12h8"></path>
            </svg>
          </div>
          <h3 class="geni-bento-title">KOT &amp; Kitchen Display</h3>
          <p class="geni-bento-desc">Keep chefs in sync with real-time orders on screen for quicker prep, happier guests.</p>
        </div>

        <div class="geni-bento-mockup-kds">
          <div class="kds-screen-frame">
            <div class="kds-screen-nav">
              <div class="kds-screen-tabs">
                <span class="kds-tab active">All Orders</span>
                <span class="kds-tab">In-Prep (4)</span>
                <span class="kds-tab">Ready (2)</span>
              </div>
              <span class="kds-screen-status">&bull; Live Sync</span>
            </div>

            <div class="kds-tickets-grid">
              <!-- Ticket 1 -->
              <div class="kds-ticket-card">
                <div class="kds-ticket-top">
                  <span class="kds-ticket-id">#01 Dine In</span>
                  <span class="kds-ticket-timer">04:12</span>
                </div>
                <div class="kds-ticket-items">
                  &bull; 1x Pepperoni Pizza<br>
                  &bull; 2x French Fries
                </div>
                <div class="kds-ticket-btn">In Kitchen</div>
              </div>

              <!-- Ticket 2 -->
              <div class="kds-ticket-card">
                <div class="kds-ticket-top">
                  <span class="kds-ticket-id">#02 Online</span>
                  <span class="kds-ticket-timer">02:30</span>
                </div>
                <div class="kds-ticket-items">
                  &bull; 1x Veggie Burger<br>
                  &bull; 1x Garlic Bread
                </div>
                <div class="kds-ticket-btn">Preparing</div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Bottom Bento Grid: 6 Sub Cards (3 Columns x 2 Rows) -->
    <div class="geni-bento-sub-grid">
      <!-- 3. QR Menu -->
      <div class="geni-bento-mini-card">
        <div class="geni-bento-icon-badge" aria-hidden="true">
          <svg viewBox="0 0 24 24" fill="none" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
            <rect x="3" y="3" width="7" height="7"></rect>
            <rect x="14" y="3" width="7" height="7"></rect>
            <rect x="14" y="14" width="7" height="7"></rect>
            <rect x="3" y="14" width="7" height="7"></rect>
            <line x1="7" y1="7" x2="7.01" y2="7"></line>
            <line x1="17" y1="7" x2="17.01" y2="7"></line>
            <line x1="7" y1="17" x2="7.01" y2="17"></line>
            <line x1="17" y1="17" x2="17.01" y2="17"></line>
          </svg>
        </div>
        <h4 class="geni-bento-mini-title">QR Menu</h4>
        <p class="geni-bento-mini-desc">No more waiting for menus. One quick scan, and your guests are ready to explore, order, and enjoy.</p>
      </div>

      <!-- 4. Zomato/Swiggy Integration -->
      <div class="geni-bento-mini-card">
        <div class="geni-bento-icon-badge" aria-hidden="true">
          <svg viewBox="0 0 24 24" fill="none" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
            <circle cx="5.5" cy="17.5" r="2.5"></circle>
            <circle cx="18.5" cy="17.5" r="2.5"></circle>
            <path d="M15 6h4l3 5v6h-3.5"></path>
            <path d="M2 17h1"></path>
            <path d="M8 17h8"></path>
            <path d="M2 5h13v12H2z"></path>
          </svg>
        </div>
        <h4 class="geni-bento-mini-title">Zomato/Swiggy Integration</h4>
        <p class="geni-bento-mini-desc">Manage Zomato and Swiggy orders directly from your POS. One screen for all your deliveries.</p>
      </div>

      <!-- 5. Multi-Platform -->
      <div class="geni-bento-mini-card">
        <div class="geni-bento-icon-badge" aria-hidden="true">
          <svg viewBox="0 0 24 24" fill="none" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
            <rect x="2" y="4" width="13" height="10" rx="1.5"></rect>
            <path d="M5 18h7"></path>
            <path d="M8 14v4"></path>
            <rect x="16" y="8" width="6" height="11" rx="1.5"></rect>
          </svg>
        </div>
        <h4 class="geni-bento-mini-title">Multi-Platform</h4>
        <p class="geni-bento-mini-desc">Access your restaurant data from anywhere. Works seamlessly on Web, Android, iOS, and Windows.</p>
      </div>

      <!-- 6. Online Ordering -->
      <div class="geni-bento-mini-card">
        <div class="geni-bento-icon-badge" aria-hidden="true">
          <svg viewBox="0 0 24 24" fill="none" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
            <path d="M6 2 3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4Z"></path>
            <path d="M3 6h18"></path>
            <path d="M16 10a4 4 0 0 1-8 0"></path>
          </svg>
        </div>
        <h4 class="geni-bento-mini-title">Online Ordering</h4>
        <p class="geni-bento-mini-desc">Allow customers to discover your menu, customize their choices, and order directly online for a convenient ordering experience.</p>
      </div>

      <!-- 7. Inventory & Menu Control -->
      <div class="geni-bento-mini-card">
        <div class="geni-bento-icon-badge" aria-hidden="true">
          <svg viewBox="0 0 24 24" fill="none" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
            <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path>
            <polyline points="9 22 9 12 15 12 15 22"></polyline>
          </svg>
        </div>
        <h4 class="geni-bento-mini-title">Inventory &amp; Menu Control</h4>
        <p class="geni-bento-mini-desc">Know what's in your kitchen at a glance. Automatic updates keep your inventory and menus always accurate.</p>
      </div>

      <!-- 8. Highlight Accent Card -->
      <div class="geni-bento-mini-card geni-bento-accent-card">
        <div>
          <h4 class="geni-bento-accent-title">
            Tables,<br>Reservation,<br>Waiter Calls, Reports
          </h4>
        </div>
        <a href="{{ route('enquiry') }}" class="geni-bento-accent-btn">
          <span>10+ More</span>
          <span style="font-size: 14px; margin-left: 4px;">&rarr;</span>
        </a>
      </div>
    </div>
  </div>
</section>

<!-- ==========================================================================
     5. INTEGRATIONS (Spacious Category Cards with Sizable Rounded Box-Cards)
     ========================================================================== -->
<section class="geni-integrations-section" id="integrations">
  <div class="geni-integrations-container">
    <div class="geni-integrations-header">
      <div class="geni-section-eyebrow" style="justify-content: center;">
        <span class="dash"></span>
        <span>INTEGRATIONS</span>
        <span class="dash"></span>
      </div>
      <h2 class="geni-integrations-title">
        Connect Your Restaurant to the Platforms You Love.
      </h2>
      <p class="geni-integrations-desc">
        Bring food delivery, digital payments, and customer communication together in one platform.
      </p>
    </div>

    <!-- Category Cards 2x2 Grid -->
    <div class="geni-integrations-category-grid">
      <!-- 1. Food Delivery Card -->
      <div class="geni-int-cat-card">
        <div class="geni-int-cat-header">
          <div class="geni-int-cat-info">
            <h3 class="geni-int-cat-title">Food Delivery</h3>
            <p class="geni-int-cat-sub">Manage all your delivery orders in one unified system.</p>
          </div>
        </div>

        <div class="geni-int-platforms-row">
          <!-- Swiggy -->
          <div class="geni-int-box-card" title="Swiggy">
            <img src="{{ asset('assets/images/home/icon_swiggy.png') }}" alt="Swiggy" class="geni-int-box-img">
          </div>

          <!-- Zomato -->
          <div class="geni-int-box-card" title="Zomato">
            <img src="{{ asset('assets/images/home/icon_zomato.png') }}" alt="Zomato" class="geni-int-box-img">
          </div>

          <!-- Uber Eats -->
          <div class="geni-int-box-card" title="Uber Eats">
            <div style="display:flex;align-items:center;gap:3px;font-family:'Inter',sans-serif;font-weight:800;font-size:15px;letter-spacing:-0.3px;">
              <span style="color:#000000;">Uber</span><span style="color:#06C167;">Eats</span>
            </div>
          </div>

          <!-- DoorDash -->
          <div class="geni-int-box-card" title="DoorDash">
            <div style="display:flex;align-items:center;gap:6px;">
              <svg width="20" height="14" viewBox="0 0 76 43" fill="#FF3008">
                <path d="M72.2 0H14.8C6.6 0 0 6.6 0 14.8c0 8.2 6.6 14.8 14.8 14.8h37.4c1.8 0 3.3-1.5 3.3-3.3s-1.5-3.3-3.3-3.3H14.8C9.9 23 6 19.3 6 14.8S9.9 6.6 14.8 6.6h57.4c2.8 0 4.4 3.1 3 5.4L64 30.5c-.8 1.4-2.3 2.2-3.9 2.2H36.3c-1.8 0-3.3 1.5-3.3 3.3s1.5 3.3 3.3 3.3h23.8c4.2 0 8-2.2 10.1-5.8l11.1-18.5c3.2-5.4-.7-15-9.1-15z"/>
              </svg>
              <span style="font-family:'Inter',sans-serif;font-weight:800;color:#FF3008;font-size:11.5px;letter-spacing:0.2px;">DOORDASH</span>
            </div>
          </div>

          <!-- Deliveroo -->
          <div class="geni-int-box-card" title="Deliveroo">
            <div style="display:flex;align-items:center;gap:5px;">
              <svg width="18" height="18" viewBox="0 0 24 24" fill="#00CDBC">
                <path d="M18.8 3.5c-.5-.4-1.2-.5-1.8-.2l-5.6 2.8-2.9-4.8c-.4-.7-1.1-1.1-1.9-1.1-.8 0-1.5.4-1.9 1.1L.7 9.8c-.5.8-.4 1.8.2 2.5l7.9 9.3c.5.6 1.3 1 2.1 1h7.6c1.4 0 2.5-1.1 2.5-2.5V5.1c0-.6-.3-1.2-.7-1.6zm-6.2 13c-.9 0-1.7-.8-1.7-1.7s.8-1.7 1.7-1.7 1.7.8 1.7 1.7-.8 1.7-1.7 1.7zm4.3 0c-.9 0-1.7-.8-1.7-1.7s.8-1.7 1.7-1.7 1.7.8 1.7 1.7-.8 1.7-1.7 1.7z"/>
              </svg>
              <span style="font-family:'Inter',sans-serif;font-weight:700;color:#00CDBC;font-size:13px;">deliveroo</span>
            </div>
          </div>
        </div>
      </div>

      <!-- 2. Payments Card -->
      <div class="geni-int-cat-card">
        <div class="geni-int-cat-header">
          <div class="geni-int-cat-info">
            <h3 class="geni-int-cat-title">Payments</h3>
            <p class="geni-int-cat-sub">Offer flexible, instant, and secure payment options.</p>
          </div>
        </div>

        <div class="geni-int-platforms-row">
          <!-- PhonePe -->
          <div class="geni-int-box-card" title="PhonePe">
            <img src="{{ asset('assets/images/home/icon_phonepe.png') }}" alt="PhonePe" class="geni-int-box-img">
          </div>

          <!-- Google Pay -->
          <div class="geni-int-box-card" title="Google Pay">
            <img src="{{ asset('assets/images/home/icon_gpay.png') }}" alt="Google Pay" class="geni-int-box-img">
          </div>

          <!-- Paytm -->
          <div class="geni-int-box-card" title="Paytm">
            <img src="{{ asset('assets/images/home/icon_paytm.png') }}" alt="Paytm" class="geni-int-box-img">
          </div>

          <!-- Razorpay -->
          <div class="geni-int-box-card" title="Razorpay">
            <img src="{{ asset('assets/images/home/icon_razorpay.png') }}" alt="Razorpay" class="geni-int-box-img">
          </div>

          <!-- UPI -->
          <div class="geni-int-box-card" title="UPI">
            <img src="{{ asset('assets/images/home/icon_upi.png') }}" alt="UPI" class="geni-int-box-img">
          </div>

          <!-- Stripe -->
          <div class="geni-int-box-card" title="Stripe">
            <span style="font-family:'Inter',sans-serif;font-weight:700;color:#635BFF;font-size:18px;letter-spacing:-0.5px;">stripe</span>
          </div>

          <!-- PayPal -->
          <div class="geni-int-box-card" title="PayPal">
            <span style="font-family:'Inter',sans-serif;font-weight:800;font-size:15.5px;font-style:italic;"><span style="color:#003087;">Pay</span><span style="color:#0079C1;">Pal</span></span>
          </div>
        </div>
      </div>

      <!-- 3. Communication Card -->
      <div class="geni-int-cat-card">
        <div class="geni-int-cat-header">
          <div class="geni-int-cat-info">
            <h3 class="geni-int-cat-title">Communication</h3>
            <p class="geni-int-cat-sub">Stay connected with your customers on channels they trust.</p>
          </div>
        </div>

        <div class="geni-int-platforms-row">
          <!-- WhatsApp Business Box Card -->
          <div class="geni-int-box-card" style="min-width: 110px; height: 96px;" title="WhatsApp Business">
            <img src="{{ asset('assets/images/home/icon_whatsapp.png') }}" alt="WhatsApp Business" class="geni-int-box-img" style="max-height: 56px;">
          </div>
        </div>
      </div>

      <!-- 4. Restaurant Hardware Card -->
      <div class="geni-int-cat-card">
        <div class="geni-int-cat-header">
          <div class="geni-int-cat-info">
            <h3 class="geni-int-cat-title">Hardware</h3>
            <p class="geni-int-cat-sub">Power your restaurant with certified, plug-and-play equipment.</p>
          </div>
        </div>

        <div class="geni-int-hardware-grid">
          <!-- 1. Kitchen Displays (Original Real Image) -->
          <div class="geni-hardware-item">
            <div class="geni-hardware-img-wrap">
              <img src="{{ asset('assets/images/home/hw_kitchen_display.png') }}" alt="Kitchen Displays" class="geni-hardware-real-img">
            </div>
            <span class="geni-hardware-label">Kitchen Displays</span>
          </div>

          <!-- 2. Receipt Printers (Original Real Image) -->
          <div class="geni-hardware-item">
            <div class="geni-hardware-img-wrap">
              <img src="{{ asset('assets/images/home/hw_receipt_printer.png') }}" alt="Receipt Printers" class="geni-hardware-real-img">
            </div>
            <span class="geni-hardware-label">Receipt Printers</span>
          </div>

          <!-- 3. Barcode Scanners (Original Real Image) -->
          <div class="geni-hardware-item">
            <div class="geni-hardware-img-wrap">
              <img src="{{ asset('assets/images/home/hw_barcode_scanner.png') }}" alt="Barcode Scanners" class="geni-hardware-real-img">
            </div>
            <span class="geni-hardware-label">Barcode Scanners</span>
          </div>

          <!-- 4. Cash Drawers (Original Real Image) -->
          <div class="geni-hardware-item">
            <div class="geni-hardware-img-wrap">
              <img src="{{ asset('assets/images/home/hw_cash_drawer.png') }}" alt="Cash Drawers" class="geni-hardware-real-img">
            </div>
            <span class="geni-hardware-label">Cash Drawers</span>
          </div>

          <!-- 5. Customer Displays (Original Real Image) -->
          <div class="geni-hardware-item">
            <div class="geni-hardware-img-wrap">
              <img src="{{ asset('assets/images/home/hw_customer_display.png') }}" alt="Customer Displays" class="geni-hardware-real-img">
            </div>
            <span class="geni-hardware-label">Customer Displays</span>
          </div>
        </div>
      </div>
    </div>

    <!-- Bottom Explore Integrations CTA -->
    <div class="geni-integrations-cta-wrap">
      <a href="{{ route('enquiry') }}" class="btn-integration-explore">
        <span>Explore Integrations</span>
        <span style="font-size: 16px;">&rarr;</span>
      </a>
    </div>
  </div>
</section>

<!-- ==========================================================================
     6. OUR CUSTOMERS SAY (Deep Coffee Brown Background)
     ========================================================================== -->
<section class="geni-reviews-section" id="reviews">
  <div class="geni-reviews-container">
    <div class="geni-reviews-left">
      <div class="geni-section-eyebrow">
        <span class="dash"></span>
        <span style="color: var(--geni-champagne);">OUR CUSTOMERS SAY</span>
      </div>
      <h2 class="geni-reviews-title">
        Loved by Restaurant Owners Worldwide.
      </h2>
      <div class="geni-reviews-arrows" aria-hidden="true">
        <button type="button" class="geni-arrow-btn" aria-label="Previous review">
          <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round">
            <polyline points="15 18 9 12 15 6"></polyline>
          </svg>
        </button>
        <button type="button" class="geni-arrow-btn" aria-label="Next review">
          <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round">
            <polyline points="9 18 15 12 9 6"></polyline>
          </svg>
        </button>
      </div>
    </div>

    <div class="geni-reviews-grid">
      <!-- Testimonial 1: Daniel Morris -->
      <div class="geni-testimonial-card">
        <div>
          <div class="geni-quote-mark">&ldquo;</div>
          <p class="geni-testimonial-text">
            &ldquo;Geni Menu made our menu updates quick and effortless. Our guests love the clean and visual menu experience.&rdquo;
          </p>
        </div>
        <div class="geni-testimonial-author">
          <div class="geni-author-info">
            <img src="{{ asset('assets/images/avatar-daniel.png') }}"
                 alt="Daniel Morris"
                 class="geni-author-avatar"
                 onerror="this.style.display='none';">
            <div class="geni-author-meta">
              <span class="geni-author-name">Daniel Morris</span>
              <span class="geni-author-role">Restaurant Owner, USA</span>
            </div>
          </div>
          <div class="geni-stars" aria-label="5 stars">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
        </div>
      </div>

      <!-- Testimonial 2: Emma Clarke -->
      <div class="geni-testimonial-card">
        <div>
          <div class="geni-quote-mark">&ldquo;</div>
          <p class="geni-testimonial-text">
            &ldquo;A simple and reliable digital menu solution. It&rsquo;s easy to manage and has improved our overall dining experience.&rdquo;
          </p>
        </div>
        <div class="geni-testimonial-author">
          <div class="geni-author-info">
            <img src="{{ asset('assets/images/avatar-emma.png') }}"
                 alt="Emma Clarke"
                 class="geni-author-avatar"
                 onerror="this.style.display='none';">
            <div class="geni-author-meta">
              <span class="geni-author-name">Emma Clarke</span>
              <span class="geni-author-role">Caf&eacute; Owner, UK</span>
            </div>
          </div>
          <div class="geni-stars" aria-label="5 stars">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ==========================================================================
     7. FREQUENTLY ASKED QUESTIONS (Warm Cream Section)
     ========================================================================== -->
<section class="geni-faq-section" id="faq">
  <div class="geni-faq-container">
    <div class="geni-faq-left">
      <div class="geni-section-eyebrow">
        <span class="dash"></span>
        <span>FAQ</span>
      </div>
      <h2 class="geni-faq-title">
        Frequently Asked Questions
      </h2>
      <p class="geni-faq-subtitle">
        Find quick answers to common questions about Geni Menu.
      </p>
    </div>

    <div class="geni-faq-accordion-grid">
      <!-- Col 1 -->
      <div style="display:flex;flex-direction:column;gap:14px;">
        <!-- Q1 -->
        <div class="geni-faq-item is-open">
          <button type="button" class="geni-faq-trigger" onclick="toggleGeniFaq(this)">
            <span>What is Geni Menu?</span>
            <span class="geni-faq-icon">+</span>
          </button>
          <div class="geni-faq-content">
            Geni Menu is an all-in-one digital menu and restaurant technology platform that allows hospitality businesses to create, manage, and share modern interactive menus instantly through QR codes and online links.
          </div>
        </div>

        <!-- Q2 -->
        <div class="geni-faq-item">
          <button type="button" class="geni-faq-trigger" onclick="toggleGeniFaq(this)">
            <span>How do customers access the menu?</span>
            <span class="geni-faq-icon">+</span>
          </button>
          <div class="geni-faq-content">
            Customers simply point their smartphone camera at the customized QR code on table stands, coasters, or counters. No app download or registration is required.
          </div>
        </div>

        <!-- Q3 -->
        <div class="geni-faq-item">
          <button type="button" class="geni-faq-trigger" onclick="toggleGeniFaq(this)">
            <span>Can I update menu items and prices?</span>
            <span class="geni-faq-icon">+</span>
          </button>
          <div class="geni-faq-content">
            Yes! You can update item descriptions, photos, prices, categories, and item availability in real time from your Geni Menu dashboard. Changes reflect immediately across all customer devices.
          </div>
        </div>
      </div>

      <!-- Col 2 -->
      <div style="display:flex;flex-direction:column;gap:14px;">
        <!-- Q4 -->
        <div class="geni-faq-item">
          <button type="button" class="geni-faq-trigger" onclick="toggleGeniFaq(this)">
            <span>Does it work on smartphones and tablets?</span>
            <span class="geni-faq-icon">+</span>
          </button>
          <div class="geni-faq-content">
            Absolutely. Geni Menu is fully responsive and optimized for all iOS and Android smartphones, iPad/Android tablets, laptops, and desktop browsers.
          </div>
        </div>

        <!-- Q5 -->
        <div class="geni-faq-item">
          <button type="button" class="geni-faq-trigger" onclick="toggleGeniFaq(this)">
            <span>Can I customise my digital menu?</span>
            <span class="geni-faq-icon">+</span>
          </button>
          <div class="geni-faq-content">
            Yes, you can customize your digital menu with your restaurant logo, custom brand colors, high-resolution food photography, dietary badges (Veg, Vegan, Gluten-Free), and special chef recommendations.
          </div>
        </div>

        <!-- Q6 -->
        <div class="geni-faq-item">
          <button type="button" class="geni-faq-trigger" onclick="toggleGeniFaq(this)">
            <span>Can I use it for multiple locations?</span>
            <span class="geni-faq-icon">+</span>
          </button>
          <div class="geni-faq-content">
            Yes, Geni Menu features complete multi-outlet and franchise support. You can manage multiple branches, sync master menus, or customize individual branch pricing and availability seamlessly.
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ==========================================================================
     8. FINAL CTA (Chocolate-Brown Banner with Dining Photo & Gold Button)
     ========================================================================== -->
<section class="geni-final-cta-section" id="cta-banner">
  <div class="geni-final-cta-wrap">
    <div class="geni-final-cta-card">
      <!-- Dining Photo on Left -->
      <div class="geni-final-cta-photo">
        <img src="{{ asset('assets/images/final-cta-dining-2x.png') }}"
             alt="Restaurant Dining Experience"
             loading="lazy">
      </div>

      <!-- Heading & Supporting Copy -->
      <div class="geni-final-cta-content">
        <h2 class="geni-final-cta-title">
          Ready to Transform Your <span class="gold-accent">Digital Dining Experience?</span>
        </h2>
        <p class="geni-final-cta-desc">
          Create a stunning digital menu, connect with your guests and simplify the way your restaurant manages its offerings.
        </p>
      </div>

      <!-- Action Button on Right -->
      <div class="geni-final-cta-btn-wrap">
        <a href="{{ route('restaurant_signup') }}" class="btn-primary-gold">
          <span>Start Your Free Trial</span>
          <span style="font-size: 14px;">&rarr;</span>
        </a>
      </div>
    </div>
  </div>
</section>

<script>
  function toggleGeniFaq(button) {
    var item = button.closest('.geni-faq-item');
    if (!item) return;
    item.classList.toggle('is-open');
  }
</script>

@endsection
