@php
    $meta = [
        'title' => 'Software Solutions for Restaurants, Hotels, Canteens & Food Businesses | Geni Menu',
        'description' => 'Explore tailored Geni Menu software solutions for restaurants, hotels, sweet shops, bakeries, cloud kitchens, juice shops, canteens, and food trucks. Fast GST billing & QR code ordering.',
        'keywords' => 'restaurants, hotels, menu, canteen, food, software, sweet shop billing software, bakery POS software India, cloud kitchen software India, juice shop and cafe POS, food truck billing machine and software, quick service restaurant QSR POS, full service restaurant management system, college canteen software, office canteen billing, restaurant solutions, hotel billing software, canteen management system, geni menu',
    ];
@endphp

@extends('layouts.frontend-master')

@section('content')

{{-- Fonts matching Home Page --}}
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@400;500;600;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://fonts.cdnfonts.com/css/glacial-indifference-2">

<style>
/* ==========================================================================
   GENI MENU SOLUTIONS PAGE - LUXURY HOSPITALITY PALETTE & HOME PAGE FONTS
   - Headings / Titles / Eyebrows: 'Cinzel', serif (Regular 400, Uppercase)
   - Body & Supporting Text: 'Glacial Indifference', sans-serif (Regular 400)
   - Buttons: 'Glacial Indifference' 700, Pill-shaped (9999px)
   - Colors: Deep Chocolate (#27130D), Caramel (#C58B50), Champagne Gold (#F2C58D),
             Warm Cream (#FFF8F0), Cream Cards (#FAF4ED), Cream Alt (#F6EDE2)
   ========================================================================== */

:root {
  --geni-chocolate: #27130D;
  --geni-deep-brown: #32180F;
  --geni-coffee: #4A291B;
  --geni-coffee-light: #5A3524;
  --geni-caramel: #C58B50;
  --geni-caramel-hover: #A06B37;
  --geni-champagne: #F2C58D;
  --geni-champagne-light: #FBE6CE;
  --geni-cream: #FFF8F0;
  --geni-cream-card: #FAF4ED;
  --geni-cream-alt: #F6EDE2;
  --geni-white: #FFFFFF;
  --geni-border: rgba(197, 139, 80, 0.22);
  --geni-border-light: rgba(197, 139, 80, 0.20);
  --geni-text-dark: #2A170F;
  --geni-text-muted: #6B5549;
  --geni-text-light: #FFF8F0;
  --geni-text-sec-light: #E4D3C4;
  --geni-shadow-sm: 0 4px 16px rgba(39, 19, 13, 0.05);
  --geni-shadow-md: 0 10px 28px rgba(39, 19, 13, 0.09);
  --geni-shadow-lg: 0 18px 45px rgba(39, 19, 13, 0.14);
  --geni-radius-sm: 10px;
  --geni-radius-md: 16px;
  --geni-radius-lg: 22px;
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
  -webkit-font-smoothing: antialiased;
}

.sol-page {
  background-color: var(--geni-cream) !important;
  color: var(--geni-text-dark);
  font-family: 'Glacial Indifference', sans-serif !important;
  font-size: 15px;
  overflow-x: clip;
  line-height: 1.65;
}

.sol-container {
  max-width: 1240px;
  margin: 0 auto;
  padding: 0 24px;
  width: 100%;
}

/* ==========================================================================
   GLOBAL TYPOGRAPHY (EXACT MATCH WITH HOME PAGE)
   ========================================================================== */
h1, h2, h3, h4, h5, h6,
.sol-hero-title,
.sol-sec-title,
.sol-card-title,
.sol-wf-title,
.sol-scale-tier,
.sol-why-title,
.sol-faq-q,
.sol-cta-title,
.sol-modal-title,
.sol-heading-serif,
.sol-badge,
.geni-eyebrow-text,
.geni-section-eyebrow {
  font-family: 'Cinzel', serif !important;
  text-transform: uppercase !important;
  font-weight: 400 !important;
  letter-spacing: 0.03em;
}

/* Supporting accents within headings */
.sol-hero-title span.highlight,
.sol-sec-title .gold-accent,
.sol-cta-title .gold-accent {
  color: var(--geni-champagne) !important;
  font-weight: 600 !important;
  text-transform: uppercase !important;
  display: inline-block;
}

/* Body & Paragraph text */
p, li, .sol-hero-desc, .sol-sec-desc, .sol-card-desc,
.sol-wf-desc, .sol-scale-desc, .sol-why-desc, .sol-faq-ans,
.sol-cta-desc, .sol-modal-desc {
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
  color: var(--geni-caramel);
  margin-bottom: 12px;
}

.geni-section-eyebrow .dash {
  width: 24px;
  height: 1.5px;
  background: var(--geni-caramel);
  display: inline-block;
}

.geni-section-eyebrow.eyebrow-champagne {
  color: var(--geni-champagne) !important;
}

.geni-section-eyebrow.eyebrow-champagne .dash {
  background: var(--geni-champagne) !important;
}

/* Legacy sol-badge kept for fallback */
.sol-badge {
  display: inline-flex;
  align-items: center;
  gap: 8px;
  font-family: 'Cinzel', serif !important;
  font-size: 11.5px;
  font-weight: 500 !important;
  letter-spacing: 0.12em;
  text-transform: uppercase !important;
  color: var(--geni-champagne);
  background: rgba(197, 139, 80, 0.16);
  border: 1px solid rgba(242, 197, 141, 0.35);
  padding: 6px 18px;
  border-radius: 9999px;
  margin-bottom: 18px;
}

.sol-badge-dot {
  width: 7px;
  height: 7px;
  border-radius: 50%;
  background-color: var(--geni-champagne);
  box-shadow: 0 0 0 3px rgba(242, 197, 141, 0.25);
}

.sol-sec-header {
  text-align: center;
  max-width: 780px;
  margin: 0 auto 52px;
}

.sol-sec-title {
  font-family: 'Cinzel', serif !important;
  font-size: clamp(28px, 3.4vw, 40px);
  font-weight: 400 !important;
  color: var(--geni-chocolate);
  letter-spacing: 0.03em;
  text-transform: uppercase !important;
  line-height: 1.25;
  margin: 0 0 16px 0;
}

.sol-sec-desc {
  font-family: 'Glacial Indifference', sans-serif !important;
  font-size: 16px;
  color: var(--geni-text-muted);
  line-height: 1.65;
  margin: 0 auto;
}

/* ==========================================================================
   GLOBAL BUTTONS (MATCHING HOME PAGE .btn-primary-gold & .btn-ghost-gold)
   ========================================================================== */
.sol-btn {
  display: inline-flex;
  align-items: center;
  justify-content: center;
  gap: 8px;
  padding: 11.5px 24px !important;
  border-radius: 9999px !important;
  font-family: 'Glacial Indifference', sans-serif !important;
  font-size: 14px !important;
  font-weight: 700 !important;
  letter-spacing: 0.03em !important;
  text-transform: none !important;
  text-decoration: none;
  cursor: pointer;
  transition: all 0.22s ease;
  white-space: nowrap;
}

.sol-btn-primary {
  background: linear-gradient(135deg, #F2C58D 0%, #E8BA80 100%) !important;
  color: #27130D !important;
  border: none !important;
  box-shadow: 0 4px 16px rgba(242, 197, 141, 0.28) !important;
}

.sol-btn-primary:hover {
  background: linear-gradient(135deg, #FFF8F0 0%, #F2C58D 100%) !important;
  color: #27130D !important;
  transform: translateY(-2px);
  box-shadow: 0 6px 22px rgba(242, 197, 141, 0.42) !important;
}

.sol-btn-secondary {
  background-color: transparent !important;
  color: var(--geni-chocolate) !important;
  border: 1.5px solid rgba(197, 139, 80, 0.45) !important;
}

.sol-btn-secondary:hover {
  background-color: rgba(197, 139, 80, 0.12) !important;
  border-color: var(--geni-caramel) !important;
  color: var(--geni-chocolate) !important;
  transform: translateY(-2px);
}

/* Hero Section Secondary Button (on dark chocolate) */
.sol-hero-sec .sol-btn-secondary {
  background-color: transparent !important;
  color: var(--geni-text-light) !important;
  border: 1.5px solid rgba(242, 197, 141, 0.60) !important;
}

.sol-hero-sec .sol-btn-secondary:hover {
  background-color: rgba(242, 197, 141, 0.15) !important;
  border-color: var(--geni-champagne) !important;
  color: #FFFFFF !important;
  transform: translateY(-2px);
}

/* ==========================================================================
   1. HERO SECTION (DARK CHOCOLATE WITH LUXURY GOLD AMBIENT GLOW)
   ========================================================================== */
.sol-hero-sec {
  padding: 84px 0 88px;
  background: radial-gradient(circle at 85% 30%, rgba(197, 139, 80, 0.18) 0%, transparent 48%),
              radial-gradient(circle at 18% 45%, rgba(96, 58, 40, 0.26) 0%, transparent 55%),
              linear-gradient(135deg, #27130D 0%, #32180F 55%, #221008 100%) !important;
  color: var(--geni-text-light) !important;
  position: relative;
  overflow: hidden;
  border-bottom: 1px solid var(--geni-border-dark);
}

.sol-hero-grid {
  display: grid;
  grid-template-columns: 1.05fr 1fr;
  gap: 52px;
  align-items: center;
  position: relative;
  z-index: 2;
}

.sol-hero-content {
  max-width: 580px;
}

.sol-hero-title {
  font-family: 'Cinzel', serif !important;
  font-size: clamp(34px, 4.2vw, 48px);
  font-weight: 400 !important;
  letter-spacing: 0.03em;
  color: #FFFFFF;
  text-transform: uppercase !important;
  line-height: 1.22;
  margin: 0 0 20px 0;
}

.sol-hero-title span.highlight {
  color: var(--geni-champagne) !important;
  font-weight: 600 !important;
  display: inline-block;
}

.sol-hero-desc {
  font-family: 'Glacial Indifference', sans-serif !important;
  font-size: 16px;
  color: var(--geni-text-sec-light) !important;
  line-height: 1.68;
  margin: 0 0 28px 0;
}

.sol-hero-actions {
  display: flex;
  align-items: center;
  gap: 16px;
  flex-wrap: wrap;
  margin-bottom: 30px;
}

.sol-hero-pills {
  display: flex;
  align-items: center;
  gap: 10px;
  flex-wrap: wrap;
}

.sol-hero-pill-tag {
  display: inline-flex;
  align-items: center;
  gap: 7px;
  font-family: 'Glacial Indifference', sans-serif !important;
  font-size: 13px;
  font-weight: 600;
  color: #FFF8F0;
  background: rgba(255, 248, 240, 0.08);
  padding: 6px 14px;
  border-radius: 9999px;
  border: 1px solid rgba(242, 197, 141, 0.25);
}

.sol-hero-pill-tag svg {
  width: 14px;
  height: 14px;
  color: var(--geni-champagne);
}

/* POS Dashboard Visual & Floating Cards */
.sol-hero-visual-wrap {
  position: relative;
  padding: 24px;
}

.sol-mockup-frame {
  background: #200E08;
  border-radius: var(--geni-radius-lg);
  padding: 12px;
  box-shadow: 0 20px 50px rgba(0, 0, 0, 0.45);
  border: 1.5px solid rgba(197, 139, 80, 0.35);
  position: relative;
  z-index: 2;
  transition: transform 0.3s ease;
}

.sol-mockup-frame:hover {
  transform: translateY(-4px);
}

.sol-mockup-topbar {
  display: flex;
  align-items: center;
  gap: 6px;
  padding: 6px 10px 10px;
  border-bottom: 1px solid rgba(197, 139, 80, 0.22);
  margin-bottom: 8px;
}

.sol-mockup-dot {
  width: 9px;
  height: 9px;
  border-radius: 50%;
  background: #E5D5C5;
}

.sol-mockup-dot:nth-child(1) { background: #FF5F56; }
.sol-mockup-dot:nth-child(2) { background: #FFBD2E; }
.sol-mockup-dot:nth-child(3) { background: #27C93F; }

.sol-mockup-title {
  font-family: 'Cinzel', serif !important;
  font-size: 11px;
  font-weight: 500;
  color: var(--geni-champagne-light);
  letter-spacing: 0.08em;
  margin-left: 8px;
  text-transform: uppercase;
}

.sol-mockup-img {
  width: 100%;
  height: auto;
  max-height: 380px;
  object-fit: cover;
  border-radius: 12px;
  display: block;
}

/* Floating Status Cards */
.sol-floating-pill {
  position: absolute;
  z-index: 4;
  background: rgba(32, 14, 8, 0.92);
  backdrop-filter: blur(14px);
  -webkit-backdrop-filter: blur(14px);
  border: 1.5px solid rgba(242, 197, 141, 0.35);
  border-radius: 16px;
  padding: 12px 18px;
  display: flex;
  align-items: center;
  gap: 12px;
  box-shadow: 0 14px 35px rgba(0, 0, 0, 0.40);
  animation: floatSlow 4s ease-in-out infinite alternate;
}

.sol-pill-pos {
  top: 10px;
  left: -20px;
  animation-delay: 0s;
}

.sol-pill-kot {
  bottom: 24px;
  left: -15px;
  animation-delay: 1.2s;
}

.sol-pill-table {
  top: 50%;
  right: -24px;
  transform: translateY(-50%);
  animation-delay: 2.2s;
}

@keyframes floatSlow {
  0% { transform: translateY(0); }
  100% { transform: translateY(-8px); }
}

.sol-float-icon {
  width: 38px;
  height: 38px;
  border-radius: 10px;
  display: flex;
  align-items: center;
  justify-content: center;
  font-size: 18px;
  flex-shrink: 0;
}

.sol-icon-gold {
  background: rgba(197, 139, 80, 0.20);
  color: var(--geni-champagne);
  border: 1px solid rgba(242, 197, 141, 0.35);
}

.sol-icon-green {
  background: rgba(16, 185, 129, 0.18);
  color: #34D399;
  border: 1px solid rgba(16, 185, 129, 0.35);
}

.sol-icon-purple {
  background: rgba(168, 85, 247, 0.18);
  color: #C084FC;
  border: 1px solid rgba(168, 85, 247, 0.35);
}

.sol-float-text {
  display: flex;
  flex-direction: column;
}

.sol-float-lbl {
  font-family: 'Cinzel', serif !important;
  font-size: 11.5px;
  font-weight: 500 !important;
  color: var(--geni-champagne);
  letter-spacing: 0.05em;
  text-transform: uppercase;
  white-space: nowrap;
}

.sol-float-val {
  font-family: 'Glacial Indifference', sans-serif !important;
  font-size: 12px;
  font-weight: 700;
  color: #FFFFFF;
  white-space: nowrap;
}

/* ==========================================================================
   2. EXPLORE BY BUSINESS TYPE (FILTERS & LIVE SEARCH)
   ========================================================================== */
.sol-filter-sec {
  padding: 36px 0 28px;
  background: var(--geni-cream);
  border-bottom: 1px solid var(--geni-border-light);
}

.sol-filter-bar {
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;
  gap: 20px;
  width: 100%;
}

.sol-filter-tabs {
  display: flex;
  align-items: center;
  justify-content: center;
  gap: 8px;
  flex-wrap: wrap;
  width: 100%;
}

.sol-tab-pill {
  padding: 8px 18px;
  border-radius: 9999px;
  border: 1px solid rgba(197, 139, 80, 0.28);
  background: #FAF4ED;
  color: var(--geni-chocolate);
  font-family: 'Cinzel', serif !important;
  font-size: 11.5px;
  font-weight: 500 !important;
  letter-spacing: 0.05em;
  text-transform: uppercase !important;
  cursor: pointer;
  transition: all 0.2s ease;
  white-space: nowrap;
}

.sol-tab-pill:hover {
  border-color: var(--geni-caramel);
  background: #F6EDE2;
  color: var(--geni-chocolate);
}

.sol-tab-pill.is-active {
  background: var(--geni-chocolate) !important;
  color: var(--geni-champagne) !important;
  border-color: var(--geni-caramel) !important;
  box-shadow: 0 4px 14px rgba(39, 19, 13, 0.20);
}

.sol-search-box {
  position: relative;
  width: 100%;
  max-width: 440px;
  margin: 0 auto;
}

.sol-search-input {
  width: 100%;
  height: 42px;
  padding: 10px 16px 10px 38px;
  border: 1px solid rgba(197, 139, 80, 0.32);
  border-radius: 9999px;
  font-family: 'Glacial Indifference', sans-serif !important;
  font-size: 14px;
  color: var(--geni-text-dark);
  background: #FFFFFF;
  outline: none;
  transition: all 0.2s ease;
}

.sol-search-input:focus {
  border-color: var(--geni-caramel);
  box-shadow: 0 0 0 3px rgba(197, 139, 80, 0.18);
}

.sol-search-icon {
  position: absolute;
  top: 50%;
  left: 14px;
  transform: translateY(-50%);
  width: 16px;
  height: 16px;
  color: var(--geni-caramel);
  pointer-events: none;
}

/* ==========================================================================
   3. BUSINESS SOLUTIONS (ALL 15 BUSINESS TYPES)
   ========================================================================== */
.sol-showcase-sec {
  padding: 60px 0 30px;
  background-color: var(--geni-cream);
}

.sol-cards-grid {
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  gap: 28px;
}

.sol-card {
  background: #FAF4ED;
  border: 1px solid rgba(197, 139, 80, 0.22);
  border-radius: var(--geni-radius-md);
  overflow: hidden;
  display: flex;
  flex-direction: column;
  transition: all 0.3s ease;
  box-shadow: 0 4px 16px rgba(39, 19, 13, 0.05);
  position: relative;
}

.sol-card:hover {
  transform: translateY(-5px);
  border-color: var(--geni-caramel);
  box-shadow: 0 12px 30px rgba(197, 139, 80, 0.18);
  background: #FFFFFF;
}

.sol-card-media {
  position: relative;
  height: 200px;
  width: 100%;
  overflow: hidden;
  background: #EFE8E3;
}

.sol-card-media img {
  width: 100%;
  height: 100%;
  object-fit: cover;
  transition: transform 0.4s ease;
}

.sol-card:hover .sol-card-media img {
  transform: scale(1.05);
}

.sol-card-badge {
  position: absolute;
  top: 14px;
  right: 14px;
  background: rgba(39, 19, 13, 0.90);
  backdrop-filter: blur(8px);
  color: var(--geni-champagne);
  border: 1px solid rgba(242, 197, 141, 0.35);
  font-family: 'Cinzel', serif !important;
  font-size: 10.5px;
  font-weight: 500 !important;
  letter-spacing: 0.08em;
  padding: 4px 12px;
  border-radius: 50px;
  text-transform: uppercase !important;
}

.sol-card-body {
  padding: 24px;
  display: flex;
  flex-direction: column;
  flex: 1;
}

.sol-card-header {
  display: flex;
  align-items: center;
  gap: 10px;
  margin-bottom: 8px;
}

.sol-card-icon {
  font-size: 20px;
  line-height: 1;
}

.sol-card-title {
  font-family: 'Cinzel', serif !important;
  font-size: 18px;
  font-weight: 400 !important;
  color: var(--geni-chocolate);
  letter-spacing: 0.03em;
  margin: 0;
  line-height: 1.3;
  text-transform: uppercase !important;
}

.sol-card-desc {
  font-family: 'Glacial Indifference', sans-serif !important;
  font-size: 14px;
  color: var(--geni-text-muted);
  line-height: 1.55;
  margin: 0 0 16px 0;
  min-height: 44px;
}

.sol-caps-label {
  font-family: 'Cinzel', serif !important;
  font-size: 11px;
  font-weight: 600 !important;
  color: var(--geni-caramel);
  letter-spacing: 0.1em;
  text-transform: uppercase !important;
  margin-bottom: 8px;
}

.sol-caps-list {
  list-style: none;
  padding: 0;
  margin: 0 0 24px 0;
  display: flex;
  flex-direction: column;
  gap: 8px;
  flex: 1;
}

.sol-caps-list li {
  font-family: 'Glacial Indifference', sans-serif !important;
  font-size: 13.5px;
  font-weight: 400;
  color: var(--geni-text-dark);
  display: flex;
  align-items: center;
  gap: 8px;
}

.sol-caps-list li svg {
  width: 15px;
  height: 15px;
  color: var(--geni-caramel);
  flex-shrink: 0;
}

.sol-card-cta {
  width: 100%;
  padding: 10px 16px;
  font-size: 13px !important;
}

/* ==========================================================================
   7. GENI MENU ADVANTAGE (4 BENEFIT CARDS)
   ========================================================================== */
.sol-why-sec {
  padding: 30px 0 75px;
  background-color: var(--geni-cream);
}

.sol-why-grid {
  display: grid;
  grid-template-columns: repeat(4, 1fr);
  gap: 24px;
}

.sol-why-card {
  background: #FAF4ED;
  border: 1px solid rgba(197, 139, 80, 0.22);
  border-radius: var(--geni-radius-md);
  padding: 30px 24px;
  transition: all 0.25s ease;
  box-shadow: 0 4px 14px rgba(39, 19, 13, 0.04);
  display: flex;
  flex-direction: column;
  align-items: flex-start;
}

.sol-why-card:hover {
  transform: translateY(-4px);
  background: #FFFFFF;
  border-color: var(--geni-caramel);
  box-shadow: 0 10px 24px rgba(197, 139, 80, 0.15);
}

.sol-why-icon {
  width: 52px;
  height: 52px;
  border-radius: 14px;
  background: #FAF0E4;
  color: var(--geni-caramel);
  display: flex;
  align-items: center;
  justify-content: center;
  font-size: 24px;
  margin-bottom: 20px;
  border: 1px solid rgba(197, 139, 80, 0.30);
}

.sol-why-title {
  font-family: 'Cinzel', serif !important;
  font-size: 17px;
  font-weight: 400 !important;
  color: var(--geni-chocolate);
  letter-spacing: 0.03em;
  margin: 0 0 10px 0;
  line-height: 1.3;
  text-transform: uppercase !important;
}

.sol-why-desc {
  font-family: 'Glacial Indifference', sans-serif !important;
  font-size: 14px;
  color: var(--geni-text-muted);
  line-height: 1.6;
  margin: 0;
}

/* ==========================================================================
   10. FINAL CTA BANNER (DARK CHOCOLATE PALETTE)
   ========================================================================== */
.sol-cta-sec {
  padding: 100px 0 105px;
  min-height: 400px;
  background: #200D06 url('{{ asset("assets/images/home/solutioncta.png") }}') center center / cover no-repeat !important;
  color: #FFFFFF;
  text-align: center;
  position: relative;
  overflow: hidden;
  display: flex;
  align-items: center;
  justify-content: center;
}

.sol-cta-overlay {
  position: absolute;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background: radial-gradient(ellipse at center, rgba(28, 12, 6, 0.82) 0%, rgba(28, 12, 6, 0.68) 55%, rgba(28, 12, 6, 0.52) 100%);
  z-index: 1;
}

.sol-cta-sec .sol-container {
  position: relative;
  z-index: 2;
}

.sol-cta-card-inner {
  max-width: 760px;
  margin: 0 auto;
  position: relative;
  z-index: 2;
}

.sol-cta-title {
  font-family: 'Cinzel', serif !important;
  font-size: clamp(30px, 3.8vw, 42px);
  font-weight: 400 !important;
  color: #FFFFFF;
  letter-spacing: 0.03em;
  text-transform: uppercase !important;
  line-height: 1.25;
  margin: 0 0 16px 0;
}

.sol-cta-desc {
  font-family: 'Glacial Indifference', sans-serif !important;
  font-size: 16.5px;
  color: var(--geni-text-sec-light) !important;
  line-height: 1.65;
  margin: 0 auto 34px;
  max-width: 640px;
}

.sol-cta-btns {
  display: flex;
  align-items: center;
  justify-content: center;
  gap: 16px;
  flex-wrap: wrap;
}

.sol-cta-btn-gold {
  background: linear-gradient(135deg, #F2C58D 0%, #E8BA80 100%) !important;
  color: #27130D !important;
  border: none !important;
  box-shadow: 0 4px 16px rgba(242, 197, 141, 0.35) !important;
}

.sol-cta-btn-gold:hover {
  background: linear-gradient(135deg, #FFF8F0 0%, #F2C58D 100%) !important;
  color: #27130D !important;
  transform: translateY(-2px);
  box-shadow: 0 8px 26px rgba(242, 197, 141, 0.5) !important;
}

.sol-cta-btn-light {
  background: transparent !important;
  color: var(--geni-text-light) !important;
  border: 1.5px solid rgba(242, 197, 141, 0.60) !important;
}

.sol-cta-btn-light:hover {
  background: rgba(242, 197, 141, 0.15) !important;
  border-color: var(--geni-champagne) !important;
  color: #FFFFFF !important;
  transform: translateY(-2px);
}

/* ==========================================================================
   INTERACTIVE SOLUTION DETAILS MODAL
   ========================================================================== */
.sol-modal-backdrop {
  display: none;
  position: fixed;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background: rgba(20, 10, 6, 0.70);
  backdrop-filter: blur(8px);
  z-index: 99999;
  align-items: center;
  justify-content: center;
  padding: 20px;
}

.sol-modal-backdrop.is-active {
  display: flex;
}

.sol-modal-box {
  background: #FAF4ED;
  border: 1.5px solid rgba(197, 139, 80, 0.35);
  border-radius: var(--geni-radius-lg);
  max-width: 580px;
  width: 100%;
  padding: 34px;
  position: relative;
  box-shadow: 0 20px 60px rgba(0, 0, 0, 0.45);
  animation: zoomIn 0.25s ease;
}

@keyframes zoomIn {
  from { opacity: 0; transform: scale(0.95); }
  to { opacity: 1; transform: scale(1); }
}

.sol-modal-close {
  position: absolute;
  top: 18px;
  right: 18px;
  width: 32px;
  height: 32px;
  border-radius: 50%;
  background: #FAF0E4;
  border: 1px solid rgba(197, 139, 80, 0.35);
  color: var(--geni-chocolate);
  font-size: 18px;
  display: flex;
  align-items: center;
  justify-content: center;
  cursor: pointer;
  transition: all 0.2s ease;
}

.sol-modal-close:hover {
  background: var(--geni-chocolate);
  color: #FFFFFF;
}

.sol-modal-title {
  font-family: 'Cinzel', serif !important;
  font-size: 22px;
  font-weight: 400 !important;
  color: var(--geni-chocolate);
  letter-spacing: 0.03em;
  text-transform: uppercase !important;
  margin: 0 0 8px 0;
}

.sol-modal-cat {
  font-family: 'Glacial Indifference', sans-serif !important;
  font-size: 12px;
  font-weight: 700;
  color: var(--geni-caramel);
  text-transform: uppercase;
  margin-bottom: 14px;
  display: inline-block;
}

.sol-modal-desc {
  font-family: 'Glacial Indifference', sans-serif !important;
  font-size: 14.5px;
  color: var(--geni-text-muted);
  line-height: 1.6;
  margin-bottom: 20px;
}

.sol-modal-bullets {
  list-style: none;
  padding: 0;
  margin: 0 0 26px 0;
  display: flex;
  flex-direction: column;
  gap: 10px;
}

.sol-modal-bullets li {
  font-family: 'Glacial Indifference', sans-serif !important;
  font-size: 14px;
  color: var(--geni-chocolate);
  display: flex;
  align-items: center;
  gap: 10px;
}

.sol-modal-bullets li svg {
  width: 17px;
  height: 17px;
  color: var(--geni-caramel);
}

.sol-modal-actions {
  display: flex;
  gap: 12px;
  flex-wrap: wrap;
  align-items: center;
  justify-content: center;
  margin-top: 24px;
}

.sol-modal-actions .sol-btn-primary {
  flex: 1;
  min-width: 220px;
  text-align: center;
  justify-content: center;
}

.sol-modal-actions .sol-btn-secondary {
  text-align: center;
  justify-content: center;
}

/* ==========================================================================
   RESPONSIVE STYLING (TABLETS & MOBILE)
   ========================================================================== */
@media (max-width: 1100px) {
  .sol-cards-grid {
    grid-template-columns: repeat(2, 1fr);
  }
  .sol-why-grid {
    grid-template-columns: repeat(2, 1fr);
  }
}

@media (max-width: 900px) {
  .sol-hero-grid {
    grid-template-columns: 1fr;
    gap: 40px;
    text-align: center;
  }
  .sol-hero-content {
    max-width: 100%;
  }
  .sol-hero-actions,
  .sol-hero-pills {
    justify-content: center;
  }
  .sol-filter-sec {
    position: static;
  }
}

@media (max-width: 768px) {
  .sol-hero-sec {
    padding: 56px 0 48px;
  }
  .sol-hero-visual-wrap {
    padding: 0;
    margin-top: 16px;
  }
  .sol-mockup-frame {
    padding: 8px;
  }
}

@media (max-width: 640px) {
  .sol-hero-sec {
    padding: 44px 0 46px;
  }
  .sol-hero-title {
    font-size: 26px;
    line-height: 1.22;
  }
  .sol-hero-desc {
    font-size: 14.5px;
    margin-bottom: 22px;
  }
  .sol-floating-pill {
    display: none;
  }
  .sol-filter-sec {
    padding: 24px 0 20px;
  }
  .sol-filter-bar {
    flex-direction: column;
    align-items: stretch;
    gap: 14px;
    width: 100%;
  }
  .sol-filter-tabs {
    display: flex !important;
    justify-content: flex-start !important;
    align-items: center !important;
    overflow-x: auto !important;
    -webkit-overflow-scrolling: touch !important;
    flex-wrap: nowrap !important;
    gap: 8px !important;
    width: 100% !important;
    padding: 4px 4px 10px 4px !important;
    scrollbar-width: none !important;
    -ms-overflow-style: none !important;
  }
  .sol-filter-tabs::-webkit-scrollbar {
    display: none !important;
  }
  .sol-tab-pill {
    flex-shrink: 0 !important;
    white-space: nowrap !important;
    padding: 8px 16px !important;
    font-size: 11px !important;
  }
  .sol-container {
    padding: 0 16px;
  }
  .sol-hide-mobile {
    display: none !important;
  }
  /* Hero & CTA Actions - Single Line Side-by-Side */
  .sol-hero-actions {
    display: flex !important;
    flex-direction: row !important;
    align-items: center !important;
    gap: 8px !important;
    width: 100% !important;
  }
  .sol-hero-actions .sol-btn {
    flex: 1 1 0 !important;
    width: auto !important;
    min-width: 0 !important;
    padding: 11px 8px !important;
    font-size: 12.5px !important;
    white-space: nowrap !important;
    justify-content: center !important;
    text-align: center !important;
    box-sizing: border-box !important;
  }
  .sol-cta-btns {
    display: flex !important;
    flex-direction: row !important;
    align-items: center !important;
    justify-content: center !important;
    gap: 8px !important;
    width: 100% !important;
  }
  .sol-cta-btns .sol-btn {
    flex: 1 1 0 !important;
    width: auto !important;
    min-width: 0 !important;
    padding: 11px 8px !important;
    font-size: 12.5px !important;
    white-space: nowrap !important;
    justify-content: center !important;
    text-align: center !important;
    box-sizing: border-box !important;
  }
  .sol-search-box {
    min-width: 100%;
    max-width: 100%;
  }
  .sol-cards-grid {
    grid-template-columns: 1fr;
  }
  .sol-why-grid {
    grid-template-columns: 1fr;
  }
  .sol-sec-title {
    font-size: 24px;
  }
  .sol-sec-desc {
    font-size: 15px;
  }
  .sol-cta-title {
    font-size: 24px;
  }
  .sol-cta-desc {
    font-size: 15px;
  }
  .sol-modal-box {
    padding: 24px 18px 20px;
    max-height: 90vh;
    overflow-y: auto;
  }
  /* Solution Modal Actions - Single Line Side-by-Side */
  .sol-modal-actions {
    display: flex !important;
    flex-direction: row !important;
    align-items: center !important;
    justify-content: center !important;
    width: 100% !important;
    gap: 8px !important;
    margin-top: 20px !important;
  }
  .sol-modal-actions .sol-btn-primary {
    flex: 1 1 auto !important;
    width: auto !important;
    min-width: 0 !important;
    padding: 11px 8px !important;
    font-size: 12px !important;
    text-align: center !important;
    justify-content: center !important;
    white-space: nowrap !important;
    box-sizing: border-box !important;
  }
  .sol-modal-actions .sol-btn-secondary {
    flex: 0 0 auto !important;
    width: auto !important;
    min-width: 70px !important;
    padding: 11px 16px !important;
    font-size: 12px !important;
    margin: 0 !important;
    align-self: auto !important;
    text-align: center !important;
    justify-content: center !important;
    white-space: nowrap !important;
    box-sizing: border-box !important;
  }
}

@media (max-width: 480px) {
  .sol-hero-actions {
    gap: 6px !important;
  }
  .sol-hero-actions .sol-btn {
    padding: 10px 4px !important;
    font-size: 11px !important;
  }
  .sol-cta-btns {
    gap: 6px !important;
  }
  .sol-cta-btns .sol-btn {
    padding: 10px 4px !important;
    font-size: 11px !important;
  }
  .sol-modal-actions {
    gap: 6px !important;
  }
  .sol-modal-actions .sol-btn-primary {
    padding: 10px 6px !important;
    font-size: 10.5px !important;
  }
  .sol-modal-actions .sol-btn-secondary {
    padding: 10px 10px !important;
    font-size: 10.5px !important;
    min-width: 56px !important;
  }
  .sol-modal-box {
    padding: 20px 14px 16px !important;
  }
}
</style>

<div class="sol-page">

    {{-- ========================================================================
         1. HERO SECTION – KEEP & IMPROVE
         ======================================================================== --}}
    <section class="sol-hero-sec">
        <div class="sol-container">
            <div class="sol-hero-grid">
                {{-- Left Text Column --}}
                <div class="sol-hero-content">
                    <h1 class="sol-hero-title">
                        Built Around the Way Your <span class="highlight">Food Business Works.</span>
                    </h1>

                    <p class="sol-hero-desc">
                        From single-counter speed to multi-branch operations, Geni Menu provides purpose-built restaurant management tools designed to eliminate delays, stop food waste, and increase daily revenue.
                    </p>

                    <div class="sol-hero-actions">
                        <a href="#explore-business" class="sol-btn sol-btn-primary">
                            Explore Your Solution &darr;
                        </a>
                        <a href="{{ route('enquiry') }}" class="sol-btn sol-btn-secondary">
                            Book a Demo &rarr;
                        </a>
                    </div>

                    <div class="sol-hero-pills">
                        <span class="sol-hero-pill-tag">
                            <svg viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>
                            Fast Counter POS
                        </span>
                        <span class="sol-hero-pill-tag">
                            <svg viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>
                            Instant KOT Dispatch
                        </span>
                        <span class="sol-hero-pill-tag">
                            <svg viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>
                            Table &amp; Reservations
                        </span>
                        <span class="sol-hero-pill-tag">
                            <svg viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>
                            Multi-Branch Sync
                        </span>
                    </div>
                </div>

                {{-- Right Visual Column: Dashboard Mockup + 3 Floating Cards --}}
                <div class="sol-hero-visual-wrap">
                    {{-- Floating Card 1: Fast POS --}}
                    <div class="sol-floating-pill sol-pill-pos">
                        <div class="sol-float-icon sol-icon-gold">⚡</div>
                        <div class="sol-float-text">
                            <span class="sol-float-lbl">Fast Counter POS</span>
                            <span class="sol-float-val">3-Sec Lightning Checkout</span>
                        </div>
                    </div>

                    {{-- Floating Card 2: Live KOT --}}
                    <div class="sol-floating-pill sol-pill-kot">
                        <div class="sol-float-icon sol-icon-green">👨‍🍳</div>
                        <div class="sol-float-text">
                            <span class="sol-float-lbl">Instant KOT Dispatch</span>
                            <span class="sol-float-val">Station-Wise Routing</span>
                        </div>
                    </div>

                    {{-- Floating Card 3: Table Management --}}
                    <div class="sol-floating-pill sol-pill-table">
                        <div class="sol-float-icon sol-icon-purple">🪑</div>
                        <div class="sol-float-text">
                            <span class="sol-float-lbl">Table &amp; Reservations</span>
                            <span class="sol-float-val">Real-Time Floor Map</span>
                        </div>
                    </div>

                    {{-- POS Mockup Frame --}}
                    <div class="sol-mockup-frame">
                        <div class="sol-mockup-topbar">
                            <span class="sol-mockup-dot"></span>
                            <span class="sol-mockup-dot"></span>
                            <span class="sol-mockup-dot"></span>
                            <span class="sol-mockup-title">Geni Menu POS • Live Terminal</span>
                        </div>
                        <img src="{{ asset('assets/images/geni-dashboard-hero.png') }}" alt="Geni Menu Restaurant POS Dashboard" class="sol-mockup-img">
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- ========================================================================
         2. EXPLORE BY BUSINESS TYPE (CATEGORY FILTERS & LIVE SEARCH)
         ======================================================================== --}}
    <section class="sol-filter-sec" id="explore-business">
        <div class="sol-container">
            <div class="sol-filter-bar">
                <div class="sol-filter-tabs">
                    <button type="button" class="sol-tab-pill is-active" data-filter="all" onclick="filterSolutions('all', this)">All Solutions (15)</button>
                    <button type="button" class="sol-tab-pill" data-filter="restaurants" onclick="filterSolutions('restaurants', this)">Restaurants</button>
                    <button type="button" class="sol-tab-pill" data-filter="quick-service" onclick="filterSolutions('quick-service', this)">Quick Service</button>
                    <button type="button" class="sol-tab-pill" data-filter="specialty-food" onclick="filterSolutions('specialty-food', this)">Specialty Food</button>
                    <button type="button" class="sol-tab-pill" data-filter="canteens" onclick="filterSolutions('canteens', this)">Canteens</button>
                    <button type="button" class="sol-tab-pill" data-filter="hospitality" onclick="filterSolutions('hospitality', this)">Hospitality &amp; Bars</button>
                    <button type="button" class="sol-tab-pill" data-filter="growing" onclick="filterSolutions('growing', this)">Growing Businesses</button>
                </div>

                <div class="sol-search-box">
                    <svg class="sol-search-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="11" cy="11" r="8"/><line x1="21" y1="21" x2="16.65" y2="16.65"/></svg>
                    <input type="text" id="solutionSearchInput" class="sol-search-input" placeholder="Search business (e.g. bakery, qsr, canteen, bar)..." onkeyup="searchSolutions(this.value)">
                </div>
            </div>
        </div>
    </section>

    {{-- ========================================================================
         3. BUSINESS SOLUTIONS – ALL 15 BUSINESS TYPES PRESERVED
         ======================================================================== --}}
    <section class="sol-showcase-sec">
        <div class="sol-container">
            <div class="sol-sec-header">
                <div class="geni-section-eyebrow" style="justify-content: center;">
                    <span class="dash"></span>
                    <span>15 TAILORED BUSINESS PROFILES</span>
                    <span class="dash"></span>
                </div>
                <h2 class="sol-sec-title">Solutions Built for Your Exact Food Business</h2>
                <p class="sol-sec-desc">
                    Every food service model has unique bottlenecks. Explore how Geni Menu solves the specific daily challenges of your format.
                </p>
            </div>

            <div class="sol-cards-grid" id="solutionsCardsGrid">

                {{-- GROUP 1: RESTAURANTS --}}

                {{-- 1. Family Restaurant --}}
                <div class="sol-card sol-item" data-category="restaurants" data-name="Family Restaurant" data-tags="restaurants dine-in table kot pos family">
                    <div class="sol-card-media">
                        <img src="https://images.unsplash.com/photo-1555396273-367ea4eb4db5?q=80&w=900&auto=format&fit=crop" alt="Family Restaurant" loading="lazy">
                        <span class="sol-card-badge">Full Service Dining</span>
                    </div>
                    <div class="sol-card-body">
                        <div class="sol-card-header">
                            <span class="sol-card-icon">👨‍👩‍👧‍👦</span>
                            <h3 class="sol-card-title">Family Restaurant</h3>
                        </div>
                        <p class="sol-card-desc">Manage tables, group orders, KOT, POS and everyday restaurant operations from one connected platform.</p>
                        <div class="sol-caps-label">Key Capabilities</div>
                        <ul class="sol-caps-list">
                            <li><svg viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>Table-side captain ordering app</li>
                            <li><svg viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>Split bills &amp; seat-wise items</li>
                            <li><svg viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>Family combo menu builder</li>
                            <li><svg viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>Guest loyalty points &amp; re-order SMS</li>
                        </ul>
                        <button type="button" class="sol-btn sol-btn-primary sol-card-cta" onclick="openSolutionModal('Family Restaurant', 'Restaurants', 'Designed specifically for busy family eateries handling high customer volumes, family groups, and peak weekend rushes. Empowers captains to punch orders directly from mobile tablets.', ['Instant Table-Side Mobile Orders', 'Item-wise Split Billing', 'Kids Menu & Family Combo Packs', 'Automated Daily Sales & GST Reports'])">
                            Explore Solution &rarr;
                        </button>
                    </div>
                </div>

                {{-- 2. Dine-in Restaurant --}}
                <div class="sol-card sol-item" data-category="restaurants" data-name="Dine-in Restaurant" data-tags="restaurants dine-in smart table service qr orders kot">
                    <div class="sol-card-media">
                        <img src="https://images.unsplash.com/photo-1517248135467-4c7edcad34c4?q=80&w=900&auto=format&fit=crop" alt="Dine-in Restaurant" loading="lazy">
                        <span class="sol-card-badge">Smart Table Dining</span>
                    </div>
                    <div class="sol-card-body">
                        <div class="sol-card-header">
                            <span class="sol-card-icon">🍽️</span>
                            <h3 class="sol-card-title">Dine-in Restaurant</h3>
                        </div>
                        <p class="sol-card-desc">Connect table service, digital QR menus, captain orders, kitchen KOT and billing for a smoother dine-in experience.</p>
                        <div class="sol-caps-label">Key Capabilities</div>
                        <ul class="sol-caps-list">
                            <li><svg viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>Interactive QR code digital menu</li>
                            <li><svg viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>Real-time table occupancy tracking</li>
                            <li><svg viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>Instant captain-to-kitchen firing</li>
                            <li><svg viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>Multi-mode cash &amp; UPI settlements</li>
                        </ul>
                        <button type="button" class="sol-btn sol-btn-primary sol-card-cta" onclick="openSolutionModal('Dine-in Restaurant', 'Restaurants', 'Complete floor and kitchen integration for casual and semi-formal dine-in spots. Keep captains, kitchen staff, and billing counters in sync.', ['Table Status Color Coding', 'Contactless QR Menu Ordering', 'Multi-Terminal Cashier Sync', 'Shift Sales & Register Balance'])">
                            Explore Solution &rarr;
                        </button>
                    </div>
                </div>

                {{-- 3. Fine Dining --}}
                <div class="sol-card sol-item" data-category="restaurants" data-name="Fine Dining" data-tags="restaurants hospitality fine dining luxury reservations waiter requests pos">
                    <div class="sol-card-media">
                        <img src="https://images.unsplash.com/photo-1544025162-d76694265947?q=80&w=900&auto=format&fit=crop" alt="Fine Dining" loading="lazy">
                        <span class="sol-card-badge">Luxury &amp; Experience</span>
                    </div>
                    <div class="sol-card-body">
                        <div class="sol-card-header">
                            <span class="sol-card-icon">🍷</span>
                            <h3 class="sol-card-title">Fine Dining</h3>
                        </div>
                        <p class="sol-card-desc">Create a more organized dining experience with table management, reservations, course firing and billing.</p>
                        <div class="sol-caps-label">Key Capabilities</div>
                        <ul class="sol-caps-list">
                            <li><svg viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>Appetizer, main &amp; dessert course firing</li>
                            <li><svg viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>VIP reservation &amp; floor mapping</li>
                            <li><svg viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>Guest dietary preferences memory</li>
                            <li><svg viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>Sommelier &amp; wine pairing notes</li>
                        </ul>
                        <button type="button" class="sol-btn sol-btn-primary sol-card-cta" onclick="openSolutionModal('Fine Dining', 'Restaurants', 'Engineered for white-tablecloth establishments, bistro clubs, and premium culinary destinations requiring meticulous service orchestration.', ['Appetizer, Main & Dessert Course Firing', 'Table Reservation & VIP Floor Mapping', 'Wine & Beverage Temperature Notes', 'Discreet Digital Table-Side Payments'])">
                            Explore Solution &rarr;
                        </button>
                    </div>
                </div>

                {{-- 4. Multi-Cuisine Restaurant --}}
                <div class="sol-card sol-item" data-category="restaurants" data-name="Multi-Cuisine Restaurant" data-tags="restaurants multi-cuisine categories kitchen stations kot">
                    <div class="sol-card-media">
                        <img src="https://images.unsplash.com/photo-1546069901-ba9599a7e63c?q=80&w=900&auto=format&fit=crop" alt="Multi-Cuisine Restaurant" loading="lazy">
                        <span class="sol-card-badge">Multi-Category Kitchen</span>
                    </div>
                    <div class="sol-card-body">
                        <div class="sol-card-header">
                            <span class="sol-card-icon">🍲</span>
                            <h3 class="sol-card-title">Multi-Cuisine Restaurant</h3>
                        </div>
                        <p class="sol-card-desc">Manage diverse menus, complex dish categories and kitchen station routing from one connected platform.</p>
                        <div class="sol-caps-label">Key Capabilities</div>
                        <ul class="sol-caps-list">
                            <li><svg viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>Automatic station-wise KOT routing</li>
                            <li><svg viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>Simultaneous multi-chef prep timers</li>
                            <li><svg viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>Category-wise inventory tracking</li>
                            <li><svg viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>Unified single bill consolidation</li>
                        </ul>
                        <button type="button" class="sol-btn sol-btn-primary sol-card-cta" onclick="openSolutionModal('Multi-Cuisine Restaurant', 'Restaurants', 'Designed for comprehensive eateries managing diverse menus and multiple dedicated chef prep lines.', ['Multi-Station Routing', 'Simultaneous Cooking Timers', 'Unified Guest Receipt', 'Ingredient Deduction Tracking'])">
                            Explore Solution &rarr;
                        </button>
                    </div>
                </div>

                {{-- GROUP 2: QUICK SERVICE --}}

                {{-- 5. Quick Service Restaurant --}}
                <div class="sol-card sol-item" data-category="quick-service" data-name="Quick Service Restaurant" data-tags="quick-service qsr fast food counter billing tokens rush">
                    <div class="sol-card-media">
                        <img src="https://images.unsplash.com/photo-1550547660-d9450f859349?q=80&w=900&auto=format&fit=crop" alt="Quick Service Restaurant" loading="lazy">
                        <span class="sol-card-badge">High Volume Speed</span>
                    </div>
                    <div class="sol-card-body">
                        <div class="sol-card-header">
                            <span class="sol-card-icon">⚡</span>
                            <h3 class="sol-card-title">Quick Service Restaurant</h3>
                        </div>
                        <p class="sol-card-desc">Keep counter orders, POS, KOT and customer service moving without delays during peak rush hours.</p>
                        <div class="sol-caps-label">Key Capabilities</div>
                        <ul class="sol-caps-list">
                            <li><svg viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>Rapid 3-second counter checkout</li>
                            <li><svg viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>Public token calling screen integration</li>
                            <li><svg viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>Combo meal upselling modifiers</li>
                            <li><svg viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>Cashier shift reconciliation audit</li>
                        </ul>
                        <button type="button" class="sol-btn sol-btn-primary sol-card-cta" onclick="openSolutionModal('Quick Service Restaurant (QSR)', 'Quick Service', 'Zero-delay rapid checkout designed for burger joints, fried chicken spots, pizza slices, and high-frequency walk-in counters.', ['Instant 3-Second Receipt Printing', 'Audio Token Call & HDMI Screen Integration', 'Combo Upselling Modifiers', 'Shift-End Cash Drawer Balances'])">
                            Explore Solution &rarr;
                        </button>
                    </div>
                </div>

                {{-- 6. Takeaway Restaurant --}}
                <div class="sol-card sol-item" data-category="quick-service" data-name="Takeaway Restaurant" data-tags="quick-service takeaway parcel pickup delivery orders">
                    <div class="sol-card-media">
                        <img src="https://images.unsplash.com/photo-1526367790999-0150786686a2?q=80&w=900&auto=format&fit=crop" alt="Takeaway Restaurant" loading="lazy">
                        <span class="sol-card-badge">Parcel &amp; Pickup</span>
                    </div>
                    <div class="sol-card-body">
                        <div class="sol-card-header">
                            <span class="sol-card-icon">🥡</span>
                            <h3 class="sol-card-title">Takeaway Restaurant</h3>
                        </div>
                        <p class="sol-card-desc">Manage counter orders, kitchen preparation and customer parcel pickup from one connected workflow.</p>
                        <div class="sol-caps-label">Key Capabilities</div>
                        <ul class="sol-caps-list">
                            <li><svg viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>Parcel bag barcode labels</li>
                            <li><svg viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>Automated pickup-ready SMS alerts</li>
                            <li><svg viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>Phone-in order holding queue</li>
                            <li><svg viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>Packaging material deduction</li>
                        </ul>
                        <button type="button" class="sol-btn sol-btn-primary sol-card-cta" onclick="openSolutionModal('Takeaway Restaurant', 'Quick Service', 'Optimized for high-turnover pickup counters and phone-in parcel services.', ['Parcel Tag Generation', 'Pickup Ready Calling', 'Zero Delivery Confusion', 'Packaging Stock Deduction'])">
                            Explore Solution &rarr;
                        </button>
                    </div>
                </div>

                {{-- GROUP 3: CANTEENS --}}

                {{-- 7. College Canteen --}}
                <div class="sol-card sol-item" data-category="canteens" data-name="College Canteen" data-tags="canteens campus student prepaid cards rush hours tokens">
                    <div class="sol-card-media">
                        <img src="https://images.unsplash.com/photo-1567521464027-f127ff144326?q=80&w=900&auto=format&fit=crop" alt="College Canteen" loading="lazy">
                        <span class="sol-card-badge">Campus Dining</span>
                    </div>
                    <div class="sol-card-body">
                        <div class="sol-card-header">
                            <span class="sol-card-icon">🏫</span>
                            <h3 class="sol-card-title">College Canteen</h3>
                        </div>
                        <p class="sol-card-desc">Built for busy campus food service, multiple counters, student cards and everyday student orders.</p>
                        <div class="sol-caps-label">Key Capabilities</div>
                        <ul class="sol-caps-list">
                            <li><svg viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>Prepaid student wallet &amp; RFID cards</li>
                            <li><svg viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>Recess-hour rush menu mode</li>
                            <li><svg viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>Multi-counter token queue sync</li>
                            <li><svg viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>Daily bulk consumption audit</li>
                        </ul>
                        <button type="button" class="sol-btn sol-btn-primary sol-card-cta" onclick="openSolutionModal('College Canteen', 'Canteens', 'Built to process 400+ transactions in a 15-minute recess window through RFID student identification and express dispatch.', ['RFID Tap-to-Pay Student Wallets', 'Instant Multi-Counter Token Displays', 'Bulk Meal Coupon Redemption', 'Daily Consumption Audit Reports'])">
                            Explore Solution &rarr;
                        </button>
                    </div>
                </div>

                {{-- 8. Office Canteen --}}
                <div class="sol-card sol-item" data-category="canteens" data-name="Office Canteen" data-tags="canteens office corporate cafeteria staff subsidies employee badge">
                    <div class="sol-card-media">
                        <img src="https://images.unsplash.com/photo-1577495508048-b635879837f1?q=80&w=900&auto=format&fit=crop" alt="Office Canteen" loading="lazy">
                        <span class="sol-card-badge">Corporate Cafeteria</span>
                    </div>
                    <div class="sol-card-body">
                        <div class="sol-card-header">
                            <span class="sol-card-icon">💼</span>
                            <h3 class="sol-card-title">Office Canteen</h3>
                        </div>
                        <p class="sol-card-desc">Manage employee food service, multiple food counters, kitchen operations and daily corporate subsidies.</p>
                        <div class="sol-caps-label">Key Capabilities</div>
                        <ul class="sol-caps-list">
                            <li><svg viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>Employee badge RFID tap scanner</li>
                            <li><svg viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>Company allowance subsidy engine</li>
                            <li><svg viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>Monthly HR billing statements</li>
                            <li><svg viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>Caterer vendor commission reports</li>
                        </ul>
                        <button type="button" class="sol-btn sol-btn-primary sol-card-cta" onclick="openSolutionModal('Office Canteen', 'Canteens', 'Engineered for corporate cafeterias and tech park dining hubs managing daily company subsidies.', ['RFID Tap Verification', 'Payroll Meal Deductions', 'Monthly Company Invoice Logs', 'Vendor Reconciliation'])">
                            Explore Solution &rarr;
                        </button>
                    </div>
                </div>

                {{-- GROUP 4: SPECIALTY FOOD & HOSPITALITY --}}

                {{-- 9. Sweet Shop --}}
                <div class="sol-card sol-item" data-category="specialty-food" data-name="Sweet Shop" data-tags="specialty-food sweet shop indian mithai snacks weight scale tare retail">
                    <div class="sol-card-media">
                        <img src="https://images.unsplash.com/photo-1599488615731-7e5c2823ff28?q=80&w=900&auto=format&fit=crop" alt="Sweet Shop" loading="lazy">
                        <span class="sol-card-badge">Mithai &amp; Snacks</span>
                    </div>
                    <div class="sol-card-body">
                        <div class="sol-card-header">
                            <span class="sol-card-icon">🍬</span>
                            <h3 class="sol-card-title">Sweet Shop</h3>
                        </div>
                        <p class="sol-card-desc">Manage sweets, snacks, gram-weight billing, customer orders, gift packing and festival inventory.</p>
                        <div class="sol-caps-label">Key Capabilities</div>
                        <ul class="sol-caps-list">
                            <li><svg viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>Tare-calibrated weighing scale sync</li>
                            <li><svg viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>Mixed gift box pricing builder</li>
                            <li><svg viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>Festival advance bulk bookings</li>
                            <li><svg viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>Perishable batch expiry alerts</li>
                        </ul>
                        <button type="button" class="sol-btn sol-btn-primary sol-card-cta" onclick="openSolutionModal('Sweet Shop', 'Specialty Food', 'Custom-built for traditional mithai and confectioneries handling variable gram weights, custom sweet boxes, and holiday bulk rushes.', ['Accurate Scale Calibration (Tare Weight)', 'Multi-Variety Gift Box Pricing', 'Diwali & Festival Bulk Order Tracking', 'Centralized Ghee & Dry Fruit Recipe Costing'])">
                            Explore Solution &rarr;
                        </button>
                    </div>
                </div>

                {{-- 10. Bakeries & Cake Shops --}}
                <div class="sol-card sol-item" data-category="specialty-food" data-name="Bakeries & Cake Shops" data-tags="specialty-food bakery cakes custom orders weight scale batches">
                    <div class="sol-card-media">
                        <img src="https://images.unsplash.com/photo-1509440159596-0249088772ff?q=80&w=900&auto=format&fit=crop" alt="Bakeries & Cake Shops" loading="lazy">
                        <span class="sol-card-badge">Cakes &amp; Bakes</span>
                    </div>
                    <div class="sol-card-body">
                        <div class="sol-card-header">
                            <span class="sol-card-icon">🍰</span>
                            <h3 class="sol-card-title">Bakeries &amp; Cake Shops</h3>
                        </div>
                        <p class="sol-card-desc">Manage bakery products, custom cake advance bookings, ingredient batches, customer orders and billing.</p>
                        <div class="sol-caps-label">Key Capabilities</div>
                        <ul class="sol-caps-list">
                            <li><svg viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>Advance custom cake bookings with photo</li>
                            <li><svg viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>Integrated digital weighing scale</li>
                            <li><svg viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>Pre-pack barcode generation</li>
                            <li><svg viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>Daily oven batch yield tracking</li>
                        </ul>
                        <button type="button" class="sol-btn sol-btn-primary sol-card-cta" onclick="openSolutionModal('Bakeries & Cake Shops', 'Specialty Food', 'Engineered for patisseries, artisanal bakers, and cake boutiques handling live custom orders, advance deposits, and fast counter pastries.', ['Live Weight Scale USB/Serial Sync', 'Custom Cake Photo & Flavor Booking', 'Shelf-Life Expiry Alarms', 'Automated Daily Production Schedule'])">
                            Explore Solution &rarr;
                        </button>
                    </div>
                </div>

                {{-- 11. Juice & Snack Shops --}}
                <div class="sol-card sol-item" data-category="specialty-food" data-name="Juice & Snack Shops" data-tags="specialty-food juice snacks refreshments quick counter beverages">
                    <div class="sol-card-media">
                        <img src="https://images.unsplash.com/photo-1622597467836-f3285f2131b8?q=80&w=900&auto=format&fit=crop" alt="Juice & Snack Shops" loading="lazy">
                        <span class="sol-card-badge">Quick Refreshments</span>
                    </div>
                    <div class="sol-card-body">
                        <div class="sol-card-header">
                            <span class="sol-card-icon">🥤</span>
                            <h3 class="sol-card-title">Juice &amp; Snack Shops</h3>
                        </div>
                        <p class="sol-card-desc">Keep fast-moving counter orders, drink variations, fresh fruit inventory and billing simple.</p>
                        <div class="sol-caps-label">Key Capabilities</div>
                        <ul class="sol-caps-list">
                            <li><svg viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>Sugar, ice &amp; dairy preference modifiers</li>
                            <li><svg viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>One-tap quick counter checkout</li>
                            <li><svg viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>Rapid QR code customer payments</li>
                            <li><svg viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>Fresh fruit daily wastage logger</li>
                        </ul>
                        <button type="button" class="sol-btn sol-btn-primary sol-card-cta" onclick="openSolutionModal('Juice & Snack Shops', 'Specialty Food', 'Super-fast touch billing for beverage stalls, smoothie bars, and quick chaat counters.', ['One-Tap Counter Punch', 'Custom Ice/Sugar Toggles', 'Daily Fruit Wastage Logs', 'Token Display Integration'])">
                            Explore Solution &rarr;
                        </button>
                    </div>
                </div>

                {{-- 12. Bars & Breweries --}}
                <div class="sol-card sol-item" data-category="hospitality" data-name="Bars & Breweries" data-tags="hospitality bars breweries pubs lounges drinks tabs kegs">
                    <div class="sol-card-media">
                        <img src="https://images.unsplash.com/photo-1514933651103-005eec06c04b?q=80&w=900&auto=format&fit=crop" alt="Bars & Breweries" loading="lazy">
                        <span class="sol-card-badge">Pubs &amp; Lounges</span>
                    </div>
                    <div class="sol-card-body">
                        <div class="sol-card-header">
                            <span class="sol-card-icon">🍺</span>
                            <h3 class="sol-card-title">Bars &amp; Breweries</h3>
                        </div>
                        <p class="sol-card-desc">Manage table service, draft taps, open customer tabs, liquor excise inventory and operational workflows.</p>
                        <div class="sol-caps-label">Key Capabilities</div>
                        <ul class="sol-caps-list">
                            <li><svg viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>Open bar tabs &amp; card holding</li>
                            <li><svg viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>Draft keg fluid volume tracking</li>
                            <li><svg viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>Liquor excise stock register logs</li>
                            <li><svg viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>Bartender shift pour accountability</li>
                        </ul>
                        <button type="button" class="sol-btn sol-btn-primary sol-card-cta" onclick="openSolutionModal('Bars & Breweries', 'Hospitality & Bars', 'Built for craft breweries, taprooms, and cocktail lounges managing fluid ounces, kegs, and open bar tabs.', ['Keg Depletion Alarms', 'Seat-by-Seat Bar Tabs', 'Excise Compliance Logs', 'Pour Variance Tracking'])">
                            Explore Solution &rarr;
                        </button>
                    </div>
                </div>

                {{-- 13. Pizzerias & Specialty Food --}}
                <div class="sol-card sol-item" data-category="specialty-food" data-name="Pizzerias & Specialty Food" data-tags="specialty-food pizzerias crust toppings oven prep combos">
                    <div class="sol-card-media">
                        <img src="https://images.unsplash.com/photo-1513104890138-7c749659a591?q=80&w=900&auto=format&fit=crop" alt="Pizzerias & Specialty Food" loading="lazy">
                        <span class="sol-card-badge">Artisan Pizzerias</span>
                    </div>
                    <div class="sol-card-body">
                        <div class="sol-card-header">
                            <span class="sol-card-icon">🍕</span>
                            <h3 class="sol-card-title">Pizzerias &amp; Specialty Food</h3>
                        </div>
                        <p class="sol-card-desc">Manage focused menus, half-and-half toppings, crust variations, pizza oven operations and fast service.</p>
                        <div class="sol-caps-label">Key Capabilities</div>
                        <ul class="sol-caps-list">
                            <li><svg viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>Half &amp; half topping modifier matrix</li>
                            <li><svg viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>Crust &amp; cheese burst upselling</li>
                            <li><svg viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>Pizza oven bake timer integration</li>
                            <li><svg viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>Dough ball batch yield tracking</li>
                        </ul>
                        <button type="button" class="sol-btn sol-btn-primary sol-card-cta" onclick="openSolutionModal('Pizzerias & Specialty Food', 'Specialty Food', 'Custom pizza workflow with complex customizer matrices, toppings, and dough yield metrics.', ['Half-and-Half Customizer', 'Crust Upsell Prompting', 'Dough Batch Tracking', 'Bake Timer Synchronization'])">
                            Explore Solution &rarr;
                        </button>
                    </div>
                </div>

                {{-- GROUP 5: GROW & SCALE --}}

                {{-- 14. Multi-Branch Chains --}}
                <div class="sol-card sol-item" data-category="growing" data-name="Multi-Branch Chains" data-tags="growing chains multi-branch multi-outlet enterprise franchise hq">
                    <div class="sol-card-media">
                        <img src="https://images.unsplash.com/photo-1552566626-52f8b828add9?q=80&w=900&auto=format&fit=crop" alt="Multi-Branch Chains" loading="lazy">
                        <span class="sol-card-badge">Enterprise Scale</span>
                    </div>
                    <div class="sol-card-body">
                        <div class="sol-card-header">
                            <span class="sol-card-icon">🏢</span>
                            <h3 class="sol-card-title">Multi-Branch Chains</h3>
                        </div>
                        <p class="sol-card-desc">Bring multiple locations together with centralized menu control, inter-store logistics and group visibility.</p>
                        <div class="sol-caps-label">Key Capabilities</div>
                        <ul class="sol-caps-list">
                            <li><svg viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>Centralized master menu &amp; price push</li>
                            <li><svg viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>Inter-outlet warehouse stock transfers</li>
                            <li><svg viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>Role-based branch &amp; cashier permissions</li>
                            <li><svg viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>Consolidated multi-outlet P&amp;L reports</li>
                        </ul>
                        <button type="button" class="sol-btn sol-btn-primary sol-card-cta" onclick="openSolutionModal('Multi-Branch Chains', 'Growing Businesses', 'Enterprise-grade command center for regional chains and franchise networks wanting total visibility over all units in real time.', ['One-Click Master Menu Updates', 'Central Warehouse to Branch Logistics', 'Individual vs. Group Revenue Analytics', 'Franchise Royalty Billing Automations'])">
                            Explore Solution &rarr;
                        </button>
                    </div>
                </div>

                {{-- 15. Cloud Kitchens --}}
                <div class="sol-card sol-item" data-category="growing" data-name="Cloud Kitchens" data-tags="growing cloud kitchen delivery multi-brand ghost kitchen virtual aggregators">
                    <div class="sol-card-media">
                        <img src="https://images.unsplash.com/photo-1556910103-1c02745aae4d?q=80&w=900&auto=format&fit=crop" alt="Cloud Kitchens" loading="lazy">
                        <span class="sol-card-badge">Delivery-First Model</span>
                    </div>
                    <div class="sol-card-body">
                        <div class="sol-card-header">
                            <span class="sol-card-icon">☁️</span>
                            <h3 class="sol-card-title">Cloud Kitchens</h3>
                        </div>
                        <p class="sol-card-desc">Manage digital-first food operations, delivery aggregator orders and multiple virtual brands from one console.</p>
                        <div class="sol-caps-label">Key Capabilities</div>
                        <ul class="sol-caps-list">
                            <li><svg viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>Aggregator auto-order acceptance</li>
                            <li><svg viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>Multi-brand unified menu switch</li>
                            <li><svg viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>Centralized shared pantry deductions</li>
                            <li><svg viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>Delivery partner rider status screen</li>
                        </ul>
                        <button type="button" class="sol-btn sol-btn-primary sol-card-cta" onclick="openSolutionModal('Cloud Kitchens', 'Growing Businesses', 'Purpose-built for virtual kitchens operating 5+ food brands from a single kitchen station with automated dispatch routing.', ['Single KDS for Multiple Food Brands', 'Central Raw Material Deductions', 'Kitchen Prep-Time SLA Warnings', 'Delivery Partner Rider Tracking'])">
                            Explore Solution &rarr;
                        </button>
                    </div>
                </div>

            </div>

            {{-- No Results Message --}}
            <div id="noResultsMsg" style="display: none; text-align: center; padding: 60px 20px;">
                <p style="font-size: 18px; color: var(--geni-text-muted);">No business types matched your search. Try searching for "restaurant", "bakery", "canteen", or "qsr".</p>
                <button type="button" class="sol-btn sol-btn-secondary" onclick="resetFilters()" style="margin-top: 14px;">View All 15 Solutions</button>
            </div>
        </div>
    </section>

    {{-- ========================================================================
         7. GENI MENU ADVANTAGE (4 BENEFIT CARDS)
         ======================================================================== --}}
    <section class="sol-why-sec">
        <div class="sol-container">
            <div class="sol-sec-header">
                <div class="geni-section-eyebrow" style="justify-content: center;">
                    <span class="dash"></span>
                    <span>THE PLATFORM ADVANTAGE</span>
                    <span class="dash"></span>
                </div>
                <h2 class="sol-sec-title">Why Food Businesses Choose Geni Menu</h2>
                <p class="sol-sec-desc">
                    Engineered from the ground up to solve the real operational challenges of modern food businesses.
                </p>
            </div>

            <div class="sol-why-grid">
                {{-- 1. Business-Specific --}}
                <div class="sol-why-card">
                    <div class="sol-why-icon">🎯</div>
                    <h3 class="sol-why-title">Business-Specific</h3>
                    <p class="sol-why-desc">
                        Pre-configured operational workflows that fit your exact food service model without forcing you into rigid retail templates.
                    </p>
                </div>

                {{-- 2. Connected Operations --}}
                <div class="sol-why-card">
                    <div class="sol-why-icon">🔄</div>
                    <h3 class="sol-why-title">Connected Operations</h3>
                    <p class="sol-why-desc">
                        Real-time data synchronization connecting floor captains, kitchen stations, cashiers, and managers with zero disconnect.
                    </p>
                </div>

                {{-- 3. Flexible Growth --}}
                <div class="sol-why-card">
                    <div class="sol-why-icon">📈</div>
                    <h3 class="sol-why-title">Flexible Growth</h3>
                    <p class="sol-why-desc">
                        Scale from a single POS terminal to multi-floor layouts and multiple branches without system replacement or downtime.
                    </p>
                </div>

                {{-- 4. One Unified Platform --}}
                <div class="sol-why-card">
                    <div class="sol-why-icon">⚡</div>
                    <h3 class="sol-why-title">One Unified Platform</h3>
                    <p class="sol-why-desc">
                        POS, KOT, inventory, recipe costing, staff permissions, and analytics in a single console—no multi-software clutter.
                    </p>
                </div>
            </div>
        </div>
    </section>

    {{-- ========================================================================
         10. FINAL CTA BANNER – KEEP
         ======================================================================== --}}
    <section class="sol-cta-sec">
        <div class="sol-cta-overlay"></div>
        <div class="sol-container">
            <div class="sol-cta-card-inner">
                <div class="geni-section-eyebrow eyebrow-champagne" style="justify-content: center;">
                    <span class="dash"></span>
                    <span>READY TO UPGRADE?</span>
                    <span class="dash"></span>
                </div>
                <h2 class="sol-cta-title">Find the Geni Menu Solution Built for Your Business.</h2>
                <p class="sol-cta-desc">
                    Manage your food business smarter with one connected platform.
                </p>
                <div class="sol-cta-btns">
                    <a href="{{ route('pricing') }}" class="sol-btn sol-cta-btn-gold">
                        Explore Pricing &rarr;
                    </a>
                    <a href="{{ route('enquiry') }}" class="sol-btn sol-cta-btn-light">
                        Book a Demo &rarr;
                    </a>
                </div>
            </div>
        </div>
    </section>

    {{-- ========================================================================
         INTERACTIVE SOLUTION DETAILS MODAL
         ======================================================================== --}}
    <div class="sol-modal-backdrop" id="solutionModal" onclick="closeSolutionModal(event)">
        <div class="sol-modal-box" onclick="event.stopPropagation()">
            <button type="button" class="sol-modal-close" onclick="closeSolutionModal()">&times;</button>
            <span class="sol-modal-cat" id="modalCat">Category</span>
            <h3 class="sol-modal-title" id="modalTitle">Business Solution</h3>
            <p class="sol-modal-desc" id="modalDesc">Detailed description of this solution.</p>
            <ul class="sol-modal-bullets" id="modalBullets">
                {{-- Injected dynamically --}}
            </ul>
            <div class="sol-modal-actions">
                <a href="{{ route('enquiry') }}" class="sol-btn sol-btn-primary">
                    Book a Free Demo <span class="sol-hide-mobile">for This Solution</span> &rarr;
                </a>
                <button type="button" class="sol-btn sol-btn-secondary" onclick="closeSolutionModal()">
                    Close
                </button>
            </div>
        </div>
    </div>

</div>

{{-- Interactive Scripts --}}
<script>
// Filter by Business Category
function filterSolutions(category, btn) {
    document.querySelectorAll('.sol-tab-pill').forEach(el => el.classList.remove('is-active'));
    if (btn) {
        btn.classList.add('is-active');
        if (typeof btn.scrollIntoView === 'function') {
            btn.scrollIntoView({ behavior: 'smooth', inline: 'center', block: 'nearest' });
        }
    }

    const searchVal = document.getElementById('solutionSearchInput').value.toLowerCase().trim();
    applyFilterAndSearch(category, searchVal);
}

// Live Search Filter
function searchSolutions(query) {
    const activeTab = document.querySelector('.sol-tab-pill.is-active');
    const category = activeTab ? activeTab.getAttribute('data-filter') : 'all';
    applyFilterAndSearch(category, query.toLowerCase().trim());
}

function applyFilterAndSearch(category, query) {
    const cards = document.querySelectorAll('.sol-item');
    let visibleCount = 0;

    cards.forEach(card => {
        const cardCategory = card.getAttribute('data-category');
        const cardName = card.getAttribute('data-name').toLowerCase();
        const cardTags = card.getAttribute('data-tags').toLowerCase();

        const matchesCat = (category === 'all') || (cardCategory === category);
        const matchesQuery = !query || cardName.includes(query) || cardTags.includes(query);

        if (matchesCat && matchesQuery) {
            card.style.display = 'flex';
            visibleCount++;
        } else {
            card.style.display = 'none';
        }
    });

    const noResults = document.getElementById('noResultsMsg');
    if (noResults) {
        noResults.style.display = visibleCount === 0 ? 'block' : 'none';
    }
}

function resetFilters() {
    document.getElementById('solutionSearchInput').value = '';
    const allTab = document.querySelector('.sol-tab-pill[data-filter="all"]');
    filterSolutions('all', allTab);
}

// Solution Details Modal
function openSolutionModal(title, category, description, features) {
    document.getElementById('modalTitle').textContent = title;
    document.getElementById('modalCat').textContent = category;
    document.getElementById('modalDesc').textContent = description;

    const bulletsList = document.getElementById('modalBullets');
    bulletsList.innerHTML = '';
    if (Array.isArray(features)) {
        features.forEach(feat => {
            const li = document.createElement('li');
            li.innerHTML = '<svg viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg> ' + feat;
            bulletsList.appendChild(li);
        });
    }

    document.getElementById('solutionModal').classList.add('is-active');
    document.body.style.overflow = 'hidden';
}

function closeSolutionModal(e) {
    if (e && e.target !== document.getElementById('solutionModal') && !e.target.classList.contains('sol-modal-close')) {
        return;
    }
    document.getElementById('solutionModal').classList.remove('is-active');
    document.body.style.overflow = '';
}
</script>

@endsection
