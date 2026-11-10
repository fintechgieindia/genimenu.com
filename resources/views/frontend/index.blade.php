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

/* Explore Solutions CTA Button in Trusted By Section */
.geni-trust-cta-wrap {
  display: flex;
  justify-content: center;
  align-items: center;
  margin-top: 38px;
  text-align: center;
}

.btn-trust-solutions {
  display: inline-flex;
  align-items: center;
  gap: 10px;
  background: #3A1B10;
  color: #FFF8F0 !important;
  font-family: 'Glacial Indifference', sans-serif !important;
  font-size: 14.5px;
  font-weight: 600;
  letter-spacing: 0.3px;
  padding: 12px 32px;
  border-radius: 9999px;
  border: 1px solid rgba(197, 139, 80, 0.45);
  box-shadow: 0 4px 16px rgba(50, 24, 15, 0.16);
  text-decoration: none;
  transition: all 0.25s ease;
  cursor: pointer;
}

.btn-trust-solutions:hover {
  background: #4E2517;
  border-color: #F2C58D;
  color: #F2C58D !important;
  transform: translateY(-2px);
  box-shadow: 0 8px 24px rgba(50, 24, 15, 0.26);
}

.btn-trust-solutions .btn-arrow {
  font-size: 16px;
  transition: transform 0.22s ease;
  display: inline-block;
}

.btn-trust-solutions:hover .btn-arrow {
  transform: translateX(4px);
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
  min-height: 440px;
  padding: 34px 0 36px;
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
  grid-template-columns: 1.1fr 0.9fr;
  align-items: center;
  gap: 28px;
  position: relative;
  z-index: 2;
}

.geni-why-content {
  display: flex;
  flex-direction: column;
  align-items: flex-start;
  text-align: left;
  max-width: 520px;
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
  margin-bottom: 8px;
}

.geni-section-eyebrow .dash {
  width: 24px;
  height: 2px;
  background: #C58B50;
  display: inline-block;
  border-radius: 1px;
}

.geni-why-title {
  font-family: 'Cinzel', serif !important;
  font-size: clamp(23px, 2.3vw, 30px) !important;
  font-weight: 600 !important;
  line-height: 1.3 !important;
  letter-spacing: 0.02em !important;
  color: #27130D !important;
  text-transform: uppercase !important;
  margin: 0 0 10px 0 !important;
  max-width: 520px;
}

.geni-why-highlight-wrap {
  position: relative;
  display: inline-block;
  color: #A35C2E;
  white-space: nowrap;
}

.geni-why-italic {
  font-family: 'Cinzel', serif !important;
  font-style: normal !important;
  font-weight: 600 !important;
  text-transform: uppercase !important;
  color: #A35C2E !important;
  letter-spacing: 0.02em !important;
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
  font-size: 14.5px !important;
  line-height: 1.55;
  color: #634C40;
  margin: 0 0 18px 0;
  max-width: 480px;
  font-weight: 400 !important;
}

/* 4 Feature highlight tiles in a horizontal row */
.geni-why-features-row {
  display: grid;
  grid-template-columns: repeat(4, 1fr);
  gap: 10px;
  max-width: 460px;
  width: 100%;
  margin-bottom: 20px;
}

.geni-why-feat-col {
  display: flex;
  flex-direction: column;
  align-items: center;
  text-align: center;
  gap: 6px;
}

.geni-why-feat-icon-box {
  width: 42px;
  height: 42px;
  border-radius: 10px;
  background: #FAF1E6;
  border: 1px solid #E5D2C0;
  display: flex;
  align-items: center;
  justify-content: center;
  color: #A35C2E;
  box-shadow: 0 2px 6px rgba(50, 24, 15, 0.04);
  transition: all 0.22s ease;
}

.geni-why-feat-icon-box svg {
  width: 20px;
  height: 20px;
}

.geni-why-feat-col:hover .geni-why-feat-icon-box {
  background: #FFFFFF;
  border-color: #C58B50;
  transform: translateY(-2px);
  box-shadow: 0 6px 14px rgba(50, 24, 15, 0.08);
}

.geni-why-feat-label {
  font-family: 'Glacial Indifference', sans-serif !important;
  font-size: 11px !important;
  font-weight: 600;
  line-height: 1.3;
  color: #27130D;
  text-align: center;
  display: block;
  max-width: 86px;
}

/* Action Buttons in Why Geni Section */
.geni-why-cta-wrap {
  display: flex;
  align-items: center;
  gap: 12px;
  flex-wrap: wrap;
}

.btn-why-solutions {
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

.btn-why-solutions:hover {
  background: #4E2517;
  border-color: #F2C58D;
  color: #F2C58D !important;
  transform: translateY(-2px);
  box-shadow: 0 8px 20px rgba(39, 19, 13, 0.35);
}

.btn-why-demo-outline {
  display: inline-flex;
  align-items: center;
  gap: 8px;
  background: rgba(250, 241, 230, 0.7);
  color: #3A1B10 !important;
  font-family: 'Glacial Indifference', sans-serif;
  font-size: 13px;
  font-weight: 600;
  letter-spacing: 0.2px;
  padding: 10px 20px;
  border-radius: 9999px;
  border: 1.5px solid #C58B50;
  text-decoration: none;
  transition: all 0.22s ease;
  cursor: pointer;
}

.btn-why-demo-outline:hover {
  background: #3A1B10;
  border-color: #3A1B10;
  color: #FFF8F0 !important;
  transform: translateY(-2px);
  box-shadow: 0 6px 16px rgba(39, 19, 13, 0.20);
}

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
  .geni-why-cta-wrap {
    justify-content: center;
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
  .geni-why-cta-wrap {
    width: 100%;
    flex-direction: column;
    gap: 10px;
  }
  .btn-why-solutions,
  .btn-why-demo-outline,
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

/* Explore All Features CTA Button */
.geni-features-cta-wrap {
  display: flex;
  justify-content: center;
  align-items: center;
  margin-top: 45px;
  text-align: center;
}

.btn-features-explore {
  display: inline-flex;
  align-items: center;
  gap: 10px;
  background: linear-gradient(135deg, #C58B50 0%, #D49D63 50%, #C58B50 100%);
  color: #27130D !important;
  font-family: 'Glacial Indifference', sans-serif !important;
  font-size: 14.5px;
  font-weight: 700;
  letter-spacing: 0.3px;
  padding: 13px 34px;
  border-radius: 9999px;
  border: 1px solid rgba(242, 197, 141, 0.45);
  box-shadow: 0 6px 20px rgba(197, 139, 80, 0.25);
  text-decoration: none;
  transition: all 0.28s ease;
  cursor: pointer;
}

.btn-features-explore:hover {
  background: linear-gradient(135deg, #F2C58D 0%, #E6B57A 100%);
  color: #1E0C06 !important;
  transform: translateY(-2px) scale(1.02);
  box-shadow: 0 10px 28px rgba(197, 139, 80, 0.40);
}

.btn-features-explore .btn-arrow {
  font-size: 16px;
  transition: transform 0.22s ease;
  display: inline-block;
}

.btn-features-explore:hover .btn-arrow {
  transform: translateX(4px);
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
  margin-bottom: 0;
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
  background: #FFFFFF;
  border: 1.5px solid rgba(197, 139, 80, 0.22);
  border-radius: 18px;
  padding: 18px 10px 16px;
  display: flex;
  flex-direction: column;
  align-items: center;
  text-align: center;
  gap: 12px;
  box-shadow: 0 4px 14px rgba(50, 24, 15, 0.03);
  transition: all 0.24s ease;
}

.geni-hardware-item:hover {
  border-color: rgba(197, 139, 80, 0.55);
  transform: translateY(-4px);
  box-shadow: 0 10px 24px rgba(50, 24, 15, 0.10);
}

.geni-hardware-img-wrap {
  height: 72px;
  width: 100%;
  display: flex;
  align-items: center;
  justify-content: center;
}

.geni-hardware-real-img {
  max-height: 68px;
  max-width: 92%;
  object-fit: contain;
  filter: drop-shadow(0 4px 10px rgba(0, 0, 0, 0.08));
  transition: transform 0.24s ease;
}

.geni-hardware-item:hover .geni-hardware-real-img {
  transform: scale(1.06);
}

.geni-hardware-label {
  font-family: 'Glacial Indifference', sans-serif;
  font-size: 12.5px;
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
  display: flex;
  gap: 18px;
  overflow-x: auto;
  scroll-behavior: smooth;
  scroll-snap-type: x mandatory;
  -webkit-overflow-scrolling: touch;
  scrollbar-width: none;
  padding: 6px 2px 14px;
}

.geni-reviews-grid::-webkit-scrollbar {
  display: none;
}

.geni-testimonial-card {
  flex: 0 0 calc(50% - 9px);
  min-width: calc(50% - 9px);
  scroll-snap-align: start;
  background: rgba(74, 41, 27, 0.50);
  border: 1px solid rgba(197, 139, 80, 0.25);
  border-radius: 14px;
  padding: 22px 20px;
  display: flex;
  flex-direction: column;
  justify-content: space-between;
  gap: 16px;
  transition: transform 0.2s ease, border-color 0.2s ease;
}

.geni-testimonial-card:hover {
  transform: translateY(-3px);
  border-color: var(--geni-champagne);
}

@media (max-width: 768px) {
  .geni-testimonial-card {
    flex: 0 0 100%;
    min-width: 100%;
  }
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
  gap: 12px;
}

.geni-author-avatar {
  width: 42px;
  height: 42px;
  border-radius: 50%;
  background: linear-gradient(135deg, rgba(197, 139, 80, 0.32) 0%, rgba(200, 16, 46, 0.42) 100%);
  border: 1.5px solid var(--geni-champagne);
  color: #FFF8F0;
  display: flex;
  align-items: center;
  justify-content: center;
  font-family: 'Cinzel', serif;
  font-size: 16px;
  font-weight: 700;
  text-transform: uppercase;
  flex-shrink: 0;
  box-shadow: 0 4px 10px rgba(0, 0, 0, 0.22);
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
   7. FREQUENTLY ASKED QUESTIONS (Minimalist Luxury SaaS Editorial Layout)
   ========================================================================== */
.geni-faq-section {
  background: var(--geni-cream) !important;
  padding: 95px 0 105px;
  position: relative;
  border-bottom: 1px solid rgba(197, 139, 80, 0.16);
}

.geni-faq-container {
  max-width: 1220px;
  margin: 0 auto;
  padding: 0 24px;
  display: grid;
  grid-template-columns: 1fr 1.6fr;
  align-items: start;
  gap: 64px;
}

.geni-faq-left {
  text-align: left;
  position: sticky;
  top: 120px;
}

.geni-faq-title {
  font-family: 'Cinzel', serif;
  font-size: clamp(32px, 3.6vw, 46px);
  font-weight: 500;
  letter-spacing: -0.01em;
  color: var(--geni-text-dark);
  line-height: 1.15;
  margin: 0 0 14px 0;
  text-transform: none;
}

.geni-faq-subtitle {
  font-family: 'Glacial Indifference', sans-serif;
  font-size: 15px;
  line-height: 1.6;
  color: var(--geni-text-muted);
  margin: 0 0 28px 0;
  max-width: 360px;
}

/* Left CTA Button matching reference */
.geni-faq-cta-btn {
  display: inline-flex;
  align-items: center;
  gap: 10px;
  background: #27130D;
  color: #FFF8F0;
  border: 1px solid rgba(197, 139, 80, 0.35);
  border-radius: 999px;
  padding: 12px 26px;
  font-family: 'Glacial Indifference', sans-serif;
  font-size: 14.5px;
  font-weight: 600;
  letter-spacing: 0.02em;
  text-decoration: none;
  transition: all 0.28s ease;
  box-shadow: 0 4px 14px rgba(39, 19, 13, 0.18);
}

.geni-faq-cta-btn svg {
  width: 14px;
  height: 14px;
  transition: transform 0.24s ease;
}

.geni-faq-cta-btn:hover {
  background: #3D1F14;
  color: #FBE6CE;
  transform: translateY(-2px);
  box-shadow: 0 8px 22px rgba(39, 19, 13, 0.26);
}

.geni-faq-cta-btn:hover svg {
  transform: translate(2px, -2px);
}

/* Right Column: Clean single-column accordion list with horizontal line dividers */
.geni-faq-accordion-list {
  display: flex;
  flex-direction: column;
  border-top: 1px solid rgba(197, 139, 80, 0.24);
  width: 100%;
}

.geni-faq-item {
  background: transparent;
  border: none;
  border-bottom: 1px solid rgba(197, 139, 80, 0.24);
  border-radius: 0;
  overflow: hidden;
  transition: background-color 0.2s ease;
}

.geni-faq-trigger {
  width: 100%;
  background: transparent;
  border: none;
  padding: 22px 4px 20px 0;
  display: flex;
  align-items: center;
  justify-content: space-between;
  gap: 20px;
  cursor: pointer;
  text-align: left;
  font-family: 'Glacial Indifference', sans-serif;
  font-size: 16.5px;
  font-weight: 700;
  color: var(--geni-text-dark);
  transition: color 0.2s ease;
}

.geni-faq-trigger:hover {
  color: #9C582B;
}

.geni-faq-icon {
  font-size: 22px;
  font-weight: 300;
  color: #A35C2E;
  line-height: 1;
  transition: transform 0.26s cubic-bezier(0.16, 1, 0.3, 1), color 0.2s ease;
  flex-shrink: 0;
  width: 24px;
  height: 24px;
  display: flex;
  align-items: center;
  justify-content: center;
}

.geni-faq-item.is-open .geni-faq-icon {
  transform: rotate(45deg);
  color: #27130D;
}

.geni-faq-content {
  display: none;
  padding: 0 40px 24px 0;
  font-family: 'Glacial Indifference', sans-serif;
  font-size: 15px;
  line-height: 1.65;
  font-weight: 400;
  color: var(--geni-text-muted);
}

.geni-faq-item.is-open .geni-faq-content {
  display: block;
}

@media (max-width: 991px) {
  .geni-faq-container {
    grid-template-columns: 1fr;
    gap: 40px;
  }
  .geni-faq-left {
    position: static;
  }
}

/* ==========================================================================
   8. FINAL CTA (Full-Width Section with cta.png Background & Centered Content)
   ========================================================================== */
.geni-final-cta-section {
  position: relative;
  background-color: #27130D !important;
  background-image: linear-gradient(180deg, rgba(39, 19, 13, 0.60) 0%, rgba(39, 19, 13, 0.72) 100%), url('{{ asset("assets/images/home/cta.png") }}') !important;
  background-size: cover !important;
  background-position: center center !important;
  background-repeat: no-repeat !important;
  padding: 60px 0 !important;
  overflow: hidden;
  display: flex;
  align-items: center;
  justify-content: center;
  text-align: center;
}

.geni-final-cta-container {
  max-width: 860px;
  width: 100%;
  margin: 0 auto;
  padding: 0 24px;
  position: relative;
  z-index: 2;
  display: flex;
  flex-direction: column;
  align-items: center;
  text-align: center;
}

.geni-final-cta-title {
  font-family: 'Cinzel', serif !important;
  font-size: clamp(26px, 3vw, 38px) !important;
  font-weight: 500 !important;
  letter-spacing: 0.03em !important;
  text-transform: uppercase !important;
  color: #FFF8F0 !important;
  line-height: 1.25 !important;
  margin: 0 0 10px 0 !important;
  text-align: center !important;
}

.geni-final-cta-title .gold-accent {
  color: #F2C58D !important;
  font-weight: 700 !important;
  text-transform: uppercase !important;
}

.geni-final-cta-desc {
  font-family: 'Glacial Indifference', sans-serif !important;
  font-size: 15.5px !important;
  line-height: 1.55 !important;
  color: #EBD8C7 !important;
  margin: 0 auto 22px auto !important;
  max-width: 640px !important;
  text-align: center !important;
  font-weight: 400 !important;
}

.geni-final-cta-btn-wrap {
  display: flex !important;
  justify-content: center !important;
  align-items: center !important;
  gap: 14px !important;
  flex-wrap: wrap !important;
  margin: 0 auto !important;
}

.geni-final-cta-btn-wrap .btn-primary-gold {
  display: inline-flex !important;
  align-items: center !important;
  gap: 10px !important;
  padding: 12px 30px !important;
  font-family: 'Glacial Indifference', sans-serif !important;
  font-size: 14.5px !important;
  font-weight: 700 !important;
  border-radius: 999px !important;
  box-shadow: 0 8px 24px rgba(0, 0, 0, 0.35) !important;
  transition: all 0.28s ease !important;
}

.geni-final-cta-btn-wrap .btn-primary-gold:hover {
  transform: translateY(-3px) scale(1.02) !important;
  box-shadow: 0 14px 32px rgba(0, 0, 0, 0.45) !important;
}

.geni-final-cta-btn-wrap .btn-secondary-outline-gold {
  display: inline-flex !important;
  align-items: center !important;
  gap: 8px !important;
  padding: 12px 28px !important;
  font-family: 'Glacial Indifference', sans-serif !important;
  font-size: 14.5px !important;
  font-weight: 600 !important;
  color: #FFF8F0 !important;
  background: transparent !important;
  border: 1.5px solid rgba(242, 197, 141, 0.75) !important;
  border-radius: 999px !important;
  text-decoration: none !important;
  box-shadow: 0 4px 14px rgba(0, 0, 0, 0.2) !important;
  transition: all 0.28s ease !important;
}

.geni-final-cta-btn-wrap .btn-secondary-outline-gold:hover {
  background: rgba(242, 197, 141, 0.15) !important;
  border-color: #F2C58D !important;
  color: #F2C58D !important;
  transform: translateY(-3px) scale(1.02) !important;
  box-shadow: 0 10px 24px rgba(0, 0, 0, 0.35) !important;
}

@media (max-width: 768px) {
  .geni-final-cta-section {
    padding: 50px 0 !important;
  }
  .geni-final-cta-desc {
    font-size: 14.5px !important;
    margin-bottom: 20px !important;
  }
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
  .geni-trust-cta-wrap { margin-top: 24px; }
  .btn-trust-solutions { width: 100%; justify-content: center; }

  .geni-why-section { padding: 50px 0; }
  .geni-why-container { grid-template-columns: 1fr; gap: 30px; padding: 0 16px; }
  .geni-why-title { font-size: 24px; }

  .geni-features-section { padding: 55px 0; }
  .geni-features-container { padding: 0 16px; }
  .geni-features-grid { grid-template-columns: repeat(2, 1fr); gap: 8px; }
  .geni-features-cta-wrap { margin-top: 28px; }
  .btn-features-explore { width: 100%; justify-content: center; }

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
/* ==========================================================================
   5B. HOW IT WORKS (3-Step Section matching Integrations Cream Theme)
   ========================================================================== */
.geni-how-section {
  background: var(--geni-cream) !important;
  padding: 85px 0 95px;
  position: relative;
  overflow: hidden;
  border-bottom: 1px solid rgba(197, 139, 80, 0.16);
}

.geni-how-container {
  max-width: 1220px;
  margin: 0 auto;
  padding: 0 24px;
  position: relative;
  z-index: 2;
}

.geni-how-header {
  max-width: 700px;
  margin: 0 auto 52px;
  text-align: center;
}

.geni-how-eyebrow {
  display: inline-flex;
  align-items: center;
  gap: 8px;
  font-family: 'Cinzel', serif;
  font-size: 12px;
  font-weight: 500;
  letter-spacing: 0.16em;
  text-transform: uppercase;
  color: #603A28;
  margin-bottom: 12px;
}

.geni-how-eyebrow .dash {
  width: 24px;
  height: 2px;
  background: #C58B50;
  display: inline-block;
  border-radius: 1px;
}

.geni-how-title {
  font-family: 'Cinzel', serif;
  font-size: clamp(26px, 2.8vw, 36px);
  font-weight: 600;
  letter-spacing: 0.03em;
  text-transform: uppercase;
  color: #27130D;
  margin: 0 0 14px 0;
  line-height: 1.3;
}

.geni-how-title .title-accent {
  color: #A35C2E;
}

.geni-how-desc {
  font-family: 'Glacial Indifference', sans-serif;
  font-size: 16px;
  line-height: 1.65;
  color: #6B5549;
  margin: 0 auto;
  max-width: 640px;
}

/* 3-Card Process Grid with Directional Arrows */
.geni-how-grid {
  display: grid;
  grid-template-columns: 1fr 36px 1fr 36px 1fr;
  align-items: center;
  gap: 14px;
}

.geni-how-card-wrap {
  position: relative;
  display: flex;
  flex-direction: column;
  align-items: center;
}

/* Luxury Step Pill Badge (matching site dark chocolate & gold button theme) */
.geni-how-step-badge {
  position: absolute;
  top: -14px;
  z-index: 3;
  background: linear-gradient(135deg, #27130D 0%, #3D1F14 100%);
  color: #FFF8F0;
  border: 1px solid rgba(197, 139, 80, 0.45);
  font-family: 'Cinzel', serif;
  font-size: 11px;
  font-weight: 700;
  letter-spacing: 0.08em;
  text-transform: uppercase;
  padding: 5px 18px;
  border-radius: 999px;
  box-shadow: 0 4px 12px rgba(39, 19, 13, 0.25);
}

.geni-how-card {
  width: 100%;
  background: #FFFFFF;
  border: 1px solid rgba(197, 139, 80, 0.22);
  border-radius: 20px;
  overflow: hidden;
  box-shadow: 0 10px 26px rgba(60, 40, 20, 0.05);
  transition: all 0.26s ease;
  display: flex;
  flex-direction: column;
}

.geni-how-card:hover {
  transform: translateY(-4px);
  border-color: #C58B50;
  box-shadow: 0 16px 36px rgba(50, 24, 15, 0.10);
}

/* Top Image Container: Square aspect-ratio ensures 1:1 image is never cut */
.geni-how-img-box {
  width: 100%;
  aspect-ratio: 1 / 1;
  background: #FFFFFF;
  overflow: hidden;
  position: relative;
  display: flex;
  align-items: center;
  justify-content: center;
}

.geni-how-step-img {
  width: 100%;
  height: 100%;
  object-fit: cover;
  display: block;
  transition: transform 0.3s ease;
}

.geni-how-card:hover .geni-how-step-img {
  transform: scale(1.03);
}

/* Bottom Content Area */
.geni-how-content {
  padding: 22px 20px 24px;
  background: #FFFFFF;
  text-align: left;
  display: flex;
  flex-direction: column;
  gap: 8px;
}

.geni-how-step-header {
  display: flex;
  align-items: center;
  gap: 12px;
}

.geni-how-step-icon {
  width: 40px;
  height: 40px;
  border-radius: 10px;
  background: #FAF1E6;
  border: 1px solid #E5D2C0;
  display: flex;
  align-items: center;
  justify-content: center;
  flex-shrink: 0;
  color: #A35C2E;
  box-shadow: 0 2px 6px rgba(50, 24, 15, 0.04);
}

.geni-how-step-icon i {
  font-size: 19px;
  color: #A35C2E;
  display: flex;
  align-items: center;
  justify-content: center;
}

.geni-how-step-title {
  font-family: 'Cinzel', serif;
  font-size: 17px;
  font-weight: 700 !important;
  -webkit-text-stroke: 0.35px #27130D;
  letter-spacing: 0.04em;
  text-transform: uppercase;
  color: #27130D;
  margin: 0;
  line-height: 1.25;
}

.geni-how-step-desc {
  font-family: 'Glacial Indifference', sans-serif;
  font-size: 14.5px;
  line-height: 1.55;
  color: #6B5549;
  margin: 0;
  padding-left: 52px;
}

/* Directional Arrow between Cards */
.geni-how-arrow {
  width: 38px;
  height: 38px;
  border-radius: 50%;
  background: #FAF1E6;
  border: 1px solid rgba(197, 139, 80, 0.35);
  display: flex;
  align-items: center;
  justify-content: center;
  color: #4A291B;
  margin: 0 auto;
  box-shadow: 0 2px 8px rgba(50, 24, 15, 0.06);
  transition: all 0.22s ease;
}

.geni-how-arrow:hover {
  background: #27130D;
  color: #FFF8F0;
  border-color: #C58B50;
}

.geni-how-arrow svg {
  width: 18px;
  height: 18px;
  stroke: currentColor;
}

@media (max-width: 991px) {
  .geni-how-grid {
    grid-template-columns: 1fr;
    gap: 32px;
    max-width: 440px;
    margin: 0 auto;
  }
  .geni-how-arrow {
    transform: rotate(90deg);
  }
}

@media (max-width: 540px) {
  .geni-how-step-desc {
    padding-left: 0;
    margin-top: 4px;
  }
}

/* ==========================================================================
   6B. SOCIAL MEDIA SHOWCASE (Warm Cream & Champagne-Gold Instagram Gallery)
   ========================================================================== */
.geni-social-section {
  background: var(--geni-cream) !important;
  position: relative;
  padding: 85px 0 95px;
  overflow: hidden;
  border-bottom: 1px solid rgba(197, 139, 80, 0.16);
}

.geni-social-curve {
  position: absolute;
  pointer-events: none;
  z-index: 1;
  opacity: 0.7;
}

.geni-social-curve-tl {
  top: 0;
  left: 0;
  width: 240px;
  height: 200px;
  background: radial-gradient(ellipse at top left, rgba(242, 197, 141, 0.45) 0%, rgba(197, 139, 80, 0.14) 50%, transparent 75%);
}

.geni-social-curve-br {
  bottom: 0;
  right: 0;
  width: 260px;
  height: 210px;
  background: radial-gradient(ellipse at bottom right, rgba(242, 197, 141, 0.45) 0%, rgba(197, 139, 80, 0.14) 50%, transparent 75%);
}

.geni-social-container {
  max-width: 1220px;
  margin: 0 auto;
  padding: 0 24px;
  position: relative;
  z-index: 2;
}

.geni-social-header {
  max-width: 720px;
  margin: 0 auto 38px;
  text-align: center;
  display: flex;
  flex-direction: column;
  align-items: center;
}

.geni-social-eyebrow-wrap {
  display: inline-flex;
  align-items: center;
  gap: 12px;
  margin-bottom: 16px;
}

.geni-social-eyebrow-wrap .dash {
  width: 28px;
  height: 1.5px;
  background: #C58B50;
  display: inline-block;
  border-radius: 1px;
}

.geni-social-eyebrow-pill {
  background: #FBE6CE;
  border: 1px solid rgba(197, 139, 80, 0.38);
  border-radius: 999px;
  padding: 5px 18px;
  font-family: 'Cinzel', serif;
  font-size: 11px;
  font-weight: 600;
  letter-spacing: 0.14em;
  text-transform: uppercase;
  color: #4A291B;
  box-shadow: 0 2px 6px rgba(74, 41, 27, 0.04);
}

.geni-social-title {
  font-family: 'Cinzel', serif;
  font-size: clamp(28px, 3.2vw, 40px);
  font-weight: 600;
  letter-spacing: -0.01em;
  color: #27130D;
  margin: 0 0 12px 0;
  line-height: 1.25;
}

.geni-social-title .title-accent {
  color: #C58B50;
}

.geni-social-desc {
  font-family: 'Glacial Indifference', sans-serif;
  font-size: 15.5px;
  line-height: 1.6;
  color: #603A28;
  margin: 0 auto 22px;
  max-width: 600px;
}

.geni-social-btn-wrap {
  display: flex;
  justify-content: center;
}

.geni-social-btn {
  display: inline-flex;
  align-items: center;
  gap: 10px;
  background: transparent;
  color: #32180F;
  border: 1.5px solid #C58B50;
  border-radius: 999px;
  padding: 10px 24px;
  font-family: 'Glacial Indifference', sans-serif;
  font-size: 14.5px;
  font-weight: 600;
  letter-spacing: 0.02em;
  text-decoration: none;
  transition: all 0.28s cubic-bezier(0.16, 1, 0.3, 1);
  box-shadow: 0 2px 8px rgba(74, 41, 27, 0.04);
}

.geni-social-btn i {
  font-size: 18px;
  color: #C58B50;
  transition: transform 0.28s ease, color 0.28s ease;
}

.geni-social-btn:hover {
  background: #27130D;
  color: #FFF8F0;
  border-color: #27130D;
  transform: translateY(-2px);
  box-shadow: 0 8px 20px rgba(39, 19, 13, 0.16);
}

.geni-social-btn:hover i {
  color: #F2C58D;
  transform: scale(1.1);
}

/* 5-Card Gallery Grid */
.geni-social-gallery {
  display: grid;
  grid-template-columns: repeat(5, 1fr);
  gap: 16px;
  width: 100%;
  max-width: 1220px;
  margin: 40px auto 0;
}

.geni-social-card {
  position: relative;
  border-radius: 18px;
  overflow: hidden;
  background: #FFFFFF;
  border: 1px solid rgba(197, 139, 80, 0.22);
  box-shadow: 0 8px 24px rgba(50, 24, 15, 0.06);
  transition: all 0.3s cubic-bezier(0.16, 1, 0.3, 1);
  display: flex;
  text-decoration: none;
  cursor: pointer;
}

.geni-social-card:hover {
  transform: translateY(-6px);
  border-color: #C58B50;
  box-shadow: 0 16px 36px rgba(50, 24, 15, 0.14);
}

/* Subtle Instagram Hover Overlay on each card */
.geni-social-overlay {
  position: absolute;
  inset: 0;
  background: rgba(39, 19, 13, 0.38);
  display: flex;
  align-items: center;
  justify-content: center;
  opacity: 0;
  transition: opacity 0.28s ease;
  backdrop-filter: blur(1.5px);
  z-index: 2;
}

.geni-social-overlay i {
  font-size: 32px;
  color: #FFF8F0;
  transform: scale(0.8);
  transition: transform 0.28s cubic-bezier(0.16, 1, 0.3, 1);
  filter: drop-shadow(0 2px 8px rgba(0, 0, 0, 0.4));
}

.geni-social-card:hover .geni-social-overlay {
  opacity: 1;
}

.geni-social-card:hover .geni-social-overlay i {
  transform: scale(1);
}

.geni-social-img-wrap {
  width: 100%;
  aspect-ratio: 184 / 201;
  overflow: hidden;
  position: relative;
  background: #FAF4ED;
}

.geni-social-img {
  width: 100%;
  height: 100%;
  object-fit: cover;
  display: block;
  transition: transform 0.4s ease;
}

.geni-social-card:hover .geni-social-img {
  transform: scale(1.05);
}

@media (max-width: 991px) {
  .geni-social-gallery {
    grid-template-columns: repeat(3, 1fr);
    gap: 14px;
  }
}

@media (max-width: 640px) {
  .geni-social-gallery {
    display: flex;
    overflow-x: auto;
    scroll-behavior: smooth;
    scroll-snap-type: x mandatory;
    -webkit-overflow-scrolling: touch;
    scrollbar-width: none;
    padding-bottom: 12px;
  }
  .geni-social-gallery::-webkit-scrollbar {
    display: none;
  }
  .geni-social-card {
    flex: 0 0 240px;
    min-width: 240px;
    scroll-snap-align: start;
  }
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

    <!-- Explore Solutions CTA Button -->
    <div class="geni-trust-cta-wrap">
      <a href="{{ route('solutions') }}" class="btn-trust-solutions">
        <span>Explore Solutions</span>
        <span class="btn-arrow">&rarr;</span>
      </a>
    </div>
  </div>
</section>
<script>
document.addEventListener('DOMContentLoaded', function () {
  var grid = document.querySelector('.geni-reviews-grid');
  var prevBtn = document.querySelector('.geni-arrow-btn[aria-label="Previous review"]');
  var nextBtn = document.querySelector('.geni-arrow-btn[aria-label="Next review"]');
  if (grid && prevBtn && nextBtn) {
    prevBtn.addEventListener('click', function () {
      grid.scrollBy({ left: -(grid.offsetWidth * 0.85), behavior: 'smooth' });
    });
    nextBtn.addEventListener('click', function () {
      grid.scrollBy({ left: (grid.offsetWidth * 0.85), behavior: 'smooth' });
    });
  }
});
</script>

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
        A SMARTER DIGITAL MENU FOR <br>
        <span class="geni-why-highlight-wrap">
          <span class="geni-why-italic">MODERN RESTAURANTS.</span>
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
        <a href="{{ route('features') }}" class="geni-bento-accent-btn">
          <span>10+ More</span>
          <span style="font-size: 14px; margin-left: 4px;">&rarr;</span>
        </a>
      </div>
    </div>

    <!-- Explore All Features CTA Button -->
    <div class="geni-features-cta-wrap">
      <a href="{{ route('features') }}" class="btn-features-explore">
        <span>Explore All Features</span>
        <span class="btn-arrow">&rarr;</span>
      </a>
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
            <img src="{{ asset('assets/images/home/tile_swiggy.png') }}" alt="Swiggy" class="geni-int-box-img">
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
            <img src="{{ asset('assets/images/home/tile_phonepe.png') }}" alt="PhonePe" class="geni-int-box-img">
          </div>

          <!-- Google Pay -->
          <div class="geni-int-box-card" title="Google Pay">
            <img src="{{ asset('assets/images/home/tile_gpay.png') }}" alt="Google Pay" class="geni-int-box-img">
          </div>

          <!-- Paytm -->
          <div class="geni-int-box-card" title="Paytm">
            <img src="{{ asset('assets/images/home/tile_paytm.png') }}" alt="Paytm" class="geni-int-box-img">
          </div>

          <!-- Razorpay -->
          <div class="geni-int-box-card" title="Razorpay">
            <img src="{{ asset('assets/images/home/tile_razorpay.png') }}" alt="Razorpay" class="geni-int-box-img">
          </div>

          <!-- UPI -->
          <div class="geni-int-box-card" title="UPI">
            <img src="{{ asset('assets/images/home/tile_upi.png') }}" alt="UPI" class="geni-int-box-img">
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
            <img src="{{ asset('assets/images/home/tile_whatsapp.png') }}" alt="WhatsApp Business" class="geni-int-box-img" style="max-height: 56px;">
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
</div>
</section>

<!-- ==========================================================================
     5B. HOW IT WORKS (Cream Background, Bootstrap Icons, Uncut Images, Bold Titles)
     ========================================================================== -->
<section class="geni-how-section" id="how-it-works">
  <div class="geni-how-container">
    <div class="geni-how-header">
      <div class="geni-how-eyebrow">
        <span class="dash"></span>
        <span>HOW IT WORKS</span>
        <span class="dash"></span>
      </div>
      <h2 class="geni-how-title">
        <span class="title-accent">FROM SCAN TO SELECTION</span> IN JUST A FEW STEPS.
      </h2>
      <p class="geni-how-desc">
        A simple and contactless way for your guests to explore your menu and choose their favourites.
      </p>
    </div>

    <!-- 3-Step Horizontal Layout with Directional Arrows -->
    <div class="geni-how-grid">
      <!-- STEP 01 -->
      <div class="geni-how-card-wrap">
        <span class="geni-how-step-badge">STEP 01</span>
        <div class="geni-how-card">
          <!-- Replaceable Step 1 Image Container (1:1 uncut) -->
          <div class="geni-how-img-box">
            <img src="{{ asset('assets/images/home/how-step-1.png') }}" alt="STEP 01 – SCAN THE QR CODE" class="geni-how-step-img">
          </div>
          <!-- Step 1 Content Area -->
          <div class="geni-how-content">
            <div class="geni-how-step-header">
              <div class="geni-how-step-icon" aria-hidden="true">
                <i class="bi bi-qr-code-scan"></i>
              </div>
              <h3 class="geni-how-step-title">SCAN THE QR CODE</h3>
            </div>
            <p class="geni-how-step-desc">
              Use your phone camera to scan the QR code at your table.
            </p>
          </div>
        </div>
      </div>

      <!-- Arrow 1 -->
      <div class="geni-how-arrow" aria-hidden="true">
        <svg viewBox="0 0 24 24" fill="none" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
          <line x1="5" y1="12" x2="19" y2="12"></line>
          <polyline points="12 5 19 12 12 19"></polyline>
        </svg>
      </div>

      <!-- STEP 02 -->
      <div class="geni-how-card-wrap">
        <span class="geni-how-step-badge">STEP 02</span>
        <div class="geni-how-card">
          <!-- Replaceable Step 2 Image Container (1:1 uncut) -->
          <div class="geni-how-img-box">
            <img src="{{ asset('assets/images/home/how-step-2.png') }}" alt="STEP 02 – EXPLORE THE DIGITAL MENU" class="geni-how-step-img">
          </div>
          <!-- Step 2 Content Area -->
          <div class="geni-how-content">
            <div class="geni-how-step-header">
              <div class="geni-how-step-icon" aria-hidden="true">
                <i class="bi bi-grid-fill"></i>
              </div>
              <h3 class="geni-how-step-title">EXPLORE THE DIGITAL MENU</h3>
            </div>
            <p class="geni-how-step-desc">
              Browse dishes, view images, check prices and discover new favourites.
            </p>
          </div>
        </div>
      </div>

      <!-- Arrow 2 -->
      <div class="geni-how-arrow" aria-hidden="true">
        <svg viewBox="0 0 24 24" fill="none" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
          <line x1="5" y1="12" x2="19" y2="12"></line>
          <polyline points="12 5 19 12 12 19"></polyline>
        </svg>
      </div>

      <!-- STEP 03 -->
      <div class="geni-how-card-wrap">
        <span class="geni-how-step-badge">STEP 03</span>
        <div class="geni-how-card">
          <!-- Replaceable Step 3 Image Container (1:1 uncut) -->
          <div class="geni-how-img-box">
            <img src="{{ asset('assets/images/home/how-step-3.png') }}" alt="STEP 03 – DISCOVER YOUR FAVOURITE DISHES" class="geni-how-step-img">
          </div>
          <!-- Step 3 Content Area -->
          <div class="geni-how-content">
            <div class="geni-how-step-header">
              <div class="geni-how-step-icon" aria-hidden="true">
                <i class="bi bi-cup-hot-fill"></i>
              </div>
              <h3 class="geni-how-step-title">DISCOVER YOUR FAVOURITE DISHES</h3>
            </div>
            <p class="geni-how-step-desc">
              Choose what you love and enjoy a seamless dining experience.
            </p>
          </div>
        </div>
      </div>
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
        Loved by Food Owners Worldwide.
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
            <div class="geni-author-avatar">D</div>
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
            <div class="geni-author-avatar">E</div>
            <div class="geni-author-meta">
              <span class="geni-author-name">Emma Clarke</span>
              <span class="geni-author-role">Caf&eacute; Owner, UK</span>
            </div>
          </div>
          <div class="geni-stars" aria-label="5 stars">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
        </div>
      </div>

      <!-- Testimonial 3: Rajesh Patel -->
      <div class="geni-testimonial-card">
        <div>
          <div class="geni-quote-mark">&ldquo;</div>
          <p class="geni-testimonial-text">
            &ldquo;Switching to QR ordering reduced our table wait times by 30%. The multi-language support is a huge bonus for our diverse guests.&rdquo;
          </p>
        </div>
        <div class="geni-testimonial-author">
          <div class="geni-author-info">
            <div class="geni-author-avatar">R</div>
            <div class="geni-author-meta">
              <span class="geni-author-name">Rajesh Patel</span>
              <span class="geni-author-role">Fine Dining Owner, India</span>
            </div>
          </div>
          <div class="geni-stars" aria-label="5 stars">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
        </div>
      </div>

      <!-- Testimonial 4: Sofia Rossi -->
      <div class="geni-testimonial-card">
        <div>
          <div class="geni-quote-mark">&ldquo;</div>
          <p class="geni-testimonial-text">
            &ldquo;Our average order value increased immediately because guests can see vibrant, high-res photos of every pasta and dessert before ordering.&rdquo;
          </p>
        </div>
        <div class="geni-testimonial-author">
          <div class="geni-author-info">
            <div class="geni-author-avatar">S</div>
            <div class="geni-author-meta">
              <span class="geni-author-name">Sofia Rossi</span>
              <span class="geni-author-role">Trattoria Owner, Italy</span>
            </div>
          </div>
          <div class="geni-stars" aria-label="5 stars">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
        </div>
      </div>

      <!-- Testimonial 5: Marcus Chen -->
      <div class="geni-testimonial-card">
        <div>
          <div class="geni-quote-mark">&ldquo;</div>
          <p class="geni-testimonial-text">
            &ldquo;Managing multiple branch menus from one dashboard used to take hours. Geni Menu centralised everything seamlessly with zero downtime.&rdquo;
          </p>
        </div>
        <div class="geni-testimonial-author">
          <div class="geni-author-info">
            <div class="geni-author-avatar">M</div>
            <div class="geni-author-meta">
              <span class="geni-author-name">Marcus Chen</span>
              <span class="geni-author-role">Bistro Chain Founder, Singapore</span>
            </div>
          </div>
          <div class="geni-stars" aria-label="5 stars">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
        </div>
      </div>

      <!-- Testimonial 6: Lucas Moreau -->
      <div class="geni-testimonial-card">
        <div>
          <div class="geni-quote-mark">&ldquo;</div>
          <p class="geni-testimonial-text">
            &ldquo;The POS integration and instant WhatsApp alerts keep our staff completely in sync during busy dinner rushes. Truly indispensable.&rdquo;
          </p>
        </div>
        <div class="geni-testimonial-author">
          <div class="geni-author-info">
            <div class="geni-author-avatar">L</div>
            <div class="geni-author-meta">
              <span class="geni-author-name">Lucas Moreau</span>
              <span class="geni-author-role">Boulangerie &amp; Caf&eacute;, France</span>
            </div>
          </div>
          <div class="geni-stars" aria-label="5 stars">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
        </div>
      </div>

      <!-- Testimonial 7: Aisha Al-Mansoor -->
      <div class="geni-testimonial-card">
        <div>
          <div class="geni-quote-mark">&ldquo;</div>
          <p class="geni-testimonial-text">
            &ldquo;Customer feedback has been overwhelmingly positive. The sleek design matches our luxury ambiance and makes reordering effortless.&rdquo;
          </p>
        </div>
        <div class="geni-testimonial-author">
          <div class="geni-author-info">
            <div class="geni-author-avatar">A</div>
            <div class="geni-author-meta">
              <span class="geni-author-name">Aisha Al-Mansoor</span>
              <span class="geni-author-role">Lounge &amp; Grill, UAE</span>
            </div>
          </div>
          <div class="geni-stars" aria-label="5 stars">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
        </div>
      </div>

      <!-- Testimonial 8: Carlos Mendez -->
      <div class="geni-testimonial-card">
        <div>
          <div class="geni-quote-mark">&ldquo;</div>
          <p class="geni-testimonial-text">
            &ldquo;Real-time inventory syncing and daily sales reports give us total operational control. The best technology upgrade we made this year.&rdquo;
          </p>
        </div>
        <div class="geni-testimonial-author">
          <div class="geni-author-info">
            <div class="geni-author-avatar">C</div>
            <div class="geni-author-meta">
              <span class="geni-author-name">Carlos Mendez</span>
              <span class="geni-author-role">Restobar Director, Spain</span>
            </div>
          </div>
          <div class="geni-stars" aria-label="5 stars">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
        </div>
      </div>
    </div>
  </div>
</section>
<script>
document.addEventListener('DOMContentLoaded', function () {
  var grid = document.querySelector('.geni-reviews-grid');
  var prevBtn = document.querySelector('.geni-arrow-btn[aria-label="Previous review"]');
  var nextBtn = document.querySelector('.geni-arrow-btn[aria-label="Next review"]');
  if (grid && prevBtn && nextBtn) {
    prevBtn.addEventListener('click', function () {
      grid.scrollBy({ left: -(grid.offsetWidth * 0.85), behavior: 'smooth' });
    });
    nextBtn.addEventListener('click', function () {
      grid.scrollBy({ left: (grid.offsetWidth * 0.85), behavior: 'smooth' });
    });
  }
});
</script>

@php
  // ============================================================================
  // INSTAGRAM CONFIGURATION & INDIVIDUAL CARD POST LINKS
  // ============================================================================
  // Main Profile Link (used for the "Follow Geni Menu" button)
  $geni_instagram_url = 'https://www.instagram.com/your_geni_menu/';

  // Individual Instagram links for each card.
  // Paste your custom Instagram post, reel, or story URL into the 'url' field below:
  $geni_social_cards = [
      [
          'id'    => 'card-1',
          'theme' => 'Chef Experience',
          'image' => asset('assets/images/home/social-1.png'),
          'alt'   => 'Chef Experience – Geni Menu',
          'url'   => 'https://www.instagram.com/p/your_post_1/', // <-- PASTE CARD 1 INSTAGRAM LINK HERE
      ],
      [
          'id'    => 'card-2',
          'theme' => 'Digital Menu Experience',
          'image' => asset('assets/images/home/social-2.png'),
          'alt'   => 'Digital Menu Experience – Geni Menu',
          'url'   => 'https://www.instagram.com/p/your_post_2/', // <-- PASTE CARD 2 INSTAGRAM LINK HERE
      ],
      [
          'id'    => 'card-3',
          'theme' => 'QR Menu Experience',
          'image' => asset('assets/images/home/social-3.png'),
          'alt'   => 'QR Menu Experience – Geni Menu',
          'url'   => 'https://www.instagram.com/p/your_post_3/', // <-- PASTE CARD 3 INSTAGRAM LINK HERE
      ],
      [
          'id'    => 'card-4',
          'theme' => 'Café Experience',
          'image' => asset('assets/images/home/social-4.png'),
          'alt'   => 'Café Experience – Geni Menu',
          'url'   => 'https://www.instagram.com/p/your_post_4/', // <-- PASTE CARD 4 INSTAGRAM LINK HERE
      ],
      [
          'id'    => 'card-5',
          'theme' => 'Dining Experience',
          'image' => asset('assets/images/home/social-5.png'),
          'alt'   => 'Dining Experience – Geni Menu',
          'url'   => 'https://www.instagram.com/p/your_post_5/', // <-- PASTE CARD 5 INSTAGRAM LINK HERE
      ],
  ];
@endphp

<!-- ==========================================================================
     6B. SOCIAL MEDIA SHOWCASE (Warm Cream & Champagne-Gold Instagram Gallery)
     ========================================================================== -->
<section class="geni-social-section" id="social-showcase">
  <!-- Subtle decorative ambient gold corner curves -->
  <div class="geni-social-curve geni-social-curve-tl" aria-hidden="true"></div>
  <div class="geni-social-curve geni-social-curve-br" aria-hidden="true"></div>

  <div class="geni-social-container">
    <!-- Centered Editorial Header -->
    <div class="geni-social-header">
      <div class="geni-social-eyebrow-wrap">
        <span class="dash"></span>
        <span class="geni-social-eyebrow-pill">FOLLOW THE EXPERIENCE</span>
        <span class="dash"></span>
      </div>

      <h2 class="geni-social-title">
        A Taste of <span class="title-accent">What&rsquo;s Happening</span>
      </h2>

      <p class="geni-social-desc">
        Discover menu inspiration, restaurant moments and fresh ideas from the world of digital dining.
      </p>

      <div class="geni-social-btn-wrap">
        <a href="{{ $geni_instagram_url }}" target="_blank" rel="noopener noreferrer" class="geni-social-btn" title="Follow Geni Menu on Instagram">
          <i class="bi bi-instagram"></i>
          <span>Follow Geni Menu</span>
        </a>
      </div>
    </div>

    <!-- 5-Card Horizontal Image Gallery (Each Card Clickable to Instagram) -->
    <div class="geni-social-gallery">
      @foreach ($geni_social_cards as $card)
        <a href="{{ $card['url'] }}"
           target="_blank"
           rel="noopener noreferrer"
           class="geni-social-card"
           title="View on Instagram – {{ $card['theme'] }}"
           aria-label="View on Instagram – {{ $card['theme'] }}">
          <div class="geni-social-img-wrap">
            <img src="{{ $card['image'] }}" alt="{{ $card['alt'] }}" class="geni-social-img" loading="lazy">
            <!-- Subtle Instagram Hover Overlay Icon -->
            <div class="geni-social-overlay" aria-hidden="true">
              <i class="bi bi-instagram"></i>
            </div>
          </div>
        </a>
      @endforeach
    </div>
  </div>
</section>

<!-- ==========================================================================
     7. FREQUENTLY ASKED QUESTIONS (Minimalist Luxury SaaS Editorial Layout)
     ========================================================================== -->
<section class="geni-faq-section" id="faq">
  <div class="geni-faq-container">
    <!-- Left Column: Heading + CTA Button -->
    <div class="geni-faq-left">
      <div class="geni-section-eyebrow">
        <span class="dash"></span>
        <span>FAQ</span>
      </div>
      <h2 class="geni-faq-title">
        Frequently<br>asked questions
      </h2>
      <p class="geni-faq-subtitle">
        Find quick answers to common questions about Geni Menu.
      </p>
      <a href="{{ route('enquiry') }}" class="geni-faq-cta-btn">
        <span>Get a demo</span>
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round">
          <line x1="7" y1="17" x2="17" y2="7"></line>
          <polyline points="7 7 17 7 17 17"></polyline>
        </svg>
      </a>
    </div>

    <!-- Right Column: Single Vertical Accordion List with Horizontal Line Dividers -->
    <div class="geni-faq-accordion-list">
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
</section>

<!-- ==========================================================================
     8. FINAL CTA (Full-Width Section with cta.png Background & Centered Content)
     ========================================================================== -->
<section class="geni-final-cta-section" id="cta-banner">
  <div class="geni-final-cta-container">
    <h2 class="geni-final-cta-title">
      Ready to Transform Your <span class="gold-accent">Digital Dining Experience?</span>
    </h2>
    <p class="geni-final-cta-desc">
      Create a stunning digital menu, connect with your guests and simplify the way your restaurant manages its offerings.
    </p>
    <div class="geni-final-cta-btn-wrap">
      <a href="{{ route('restaurant_signup') }}" class="btn-primary-gold">
        <span>Start Your Free Trial</span>
        <span style="font-size: 15px; margin-left: 4px;">&rarr;</span>
      </a>
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
