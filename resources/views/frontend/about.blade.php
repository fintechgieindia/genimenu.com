@php
    $meta = [
        'title' => 'About Us — Geni Menu | Digital Dining & Restaurant Platform',
        'description' => 'Learn how Geni Menu brings digital menus, ordering, and food business management together into one connected ecosystem for modern hospitality.',
        'keywords' => 'about Geni Menu, digital menu platform, restaurant management software, digital dining experience, restaurant POS, QR code ordering, WeGeni',
    ];
@endphp

@extends('layouts.frontend-master')

@section('content')

<style>
@import url('https://fonts.googleapis.com/css2?family=Cinzel:wght@400;500;600;700&display=swap');
@import url('https://fonts.cdnfonts.com/css/glacial-indifference-2');

/* ==========================================================================
   GENI MENU — ABOUT US PAGE STYLES
   - Warm Chocolate & Champagne Gold Design System
   - Typography: Cinzel Regular (Headings/Titles, Uppercase), Glacial Indifference Regular (Body Texts)
   ========================================================================== */

:root {
  --about-chocolate: #32180F;
  --about-deep-brown: #451D0C;
  --about-dark-coffee: #572A13;
  --about-dark-bg: #27130D;
  --about-warm-ivory: #FFF4E5;
  --about-light-cream: #FCE8D2;
  --about-card-cream: #FAF2E8;
  --about-champagne-gold: #F5B947;
  --about-champagne-light: #F2C58D;
  --about-accent-gold: #E99A24;
  --about-caramel: #C58B50;
  --about-text-dark: #381A0D;
  --about-text-muted: #6B4C3E;
  --about-text-light: #FFFFFF;
}

.geni-about-page {
  font-family: 'Glacial Indifference', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif !important;
  color: var(--about-text-dark);
  background-color: var(--about-warm-ivory);
  overflow-x: hidden;
  margin: 0;
  padding: 0;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
}

/* Global Headings: Cinzel Regular, Uppercase */
.geni-about-page h1,
.geni-about-page h2,
.geni-about-page h3,
.geni-about-page h4,
.geni-about-page h5,
.geni-about-page h6,
.about-hero-title,
.about-heading,
.about-subheading,
.about-dark-card-title,
.about-vm-title,
.about-vm-subtitle,
.about-final-cta-title,
.about-eyebrow,
.about-approach-num-title,
.about-adv-title,
.about-step-title,
.about-eco-label {
  font-family: 'Cinzel', serif !important;
  text-transform: uppercase !important;
  font-weight: 400 !important;
  letter-spacing: 0.04em;
}

/* Body & Paragraph text: Glacial Indifference Regular */
.geni-about-page p,
.geni-about-page li,
.geni-about-page span:not(.dash):not(.arrow):not(.badge):not(.about-vm-title),
.about-hero-desc,
.about-text-lead,
.about-text,
.about-eco-desc,
.about-approach-desc,
.about-dark-card-desc,
.about-adv-desc,
.about-step-desc,
.about-vm-desc,
.about-final-cta-desc,
.about-checklist-item {
  font-family: 'Glacial Indifference', sans-serif !important;
  font-weight: 400 !important;
}

.about-container {
  max-width: 1220px;
  width: 100%;
  margin: 0 auto;
  padding: 0 24px;
  position: relative;
  box-sizing: border-box;
}

/* --- Section Eyebrows --- */
.about-eyebrow {
  display: inline-flex;
  align-items: center;
  gap: 8px;
  font-family: 'Cinzel', serif !important;
  font-size: 11px;
  font-weight: 400 !important;
  letter-spacing: 0.16em;
  text-transform: uppercase !important;
  color: var(--about-text-muted);
  margin-bottom: 12px;
}

.about-eyebrow .dash {
  width: 24px;
  height: 2px;
  background: var(--about-caramel);
  display: inline-block;
  border-radius: 1px;
}

.about-eyebrow.light {
  color: var(--about-champagne-light);
}

.about-eyebrow.light .dash.gold {
  background: var(--about-champagne-gold);
}

/* --- Section Headings --- */
.about-heading {
  font-family: 'Cinzel', serif !important;
  font-size: clamp(24px, 2.5vw, 34px);
  font-weight: 400 !important;
  line-height: 1.25;
  letter-spacing: 0.04em;
  text-transform: uppercase !important;
  color: var(--about-chocolate);
  margin: 0 0 16px 0;
}

.about-subheading {
  font-family: 'Cinzel', serif !important;
  font-size: clamp(20px, 2vw, 26px);
  font-weight: 400 !important;
  line-height: 1.28;
  letter-spacing: 0.04em;
  text-transform: uppercase !important;
  color: var(--about-chocolate);
  margin: 0 0 14px 0;
}

.about-text-lead {
  font-family: 'Glacial Indifference', sans-serif !important;
  font-weight: 400 !important;
  font-size: 15.5px;
  line-height: 1.65;
  color: #5D3E30;
  margin: 0;
}

.about-text {
  font-family: 'Glacial Indifference', sans-serif !important;
  font-weight: 400 !important;
  font-size: 14.5px;
  line-height: 1.6;
  color: #6B4C3E;
  margin: 0;
}

.gold-gradient {
  color: var(--about-champagne-gold);
  background: linear-gradient(135deg, #F5B947 0%, #F2C58D 60%, #E99A24 100%);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
  display: inline-block;
}

/* --- Unified Action Buttons (Matches Home Page System) --- */
.btn-primary-gold {
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

.btn-primary-gold:hover {
  background: linear-gradient(135deg, #FFF8F0 0%, #F2C58D 100%) !important;
  transform: translateY(-2px);
  box-shadow: 0 6px 22px rgba(242, 197, 141, 0.42) !important;
  color: #27130D !important;
}

.btn-primary-gold .arrow {
  font-size: 15px;
  transition: transform 0.22s ease;
  display: inline-block;
}

.btn-primary-gold:hover .arrow {
  transform: translateX(4px);
}

.btn-secondary-outline-gold {
  display: inline-flex;
  align-items: center;
  gap: 8px;
  background: transparent !important;
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

.btn-secondary-outline-gold:hover {
  background: rgba(242, 197, 141, 0.15) !important;
  border-color: #F2C58D !important;
  color: #F2C58D !important;
  transform: translateY(-2px);
  box-shadow: 0 4px 16px rgba(242, 197, 141, 0.20) !important;
}

.btn-secondary-outline-gold .arrow {
  font-size: 15px;
  transition: transform 0.22s ease;
  display: inline-block;
}

.btn-secondary-outline-gold:hover .arrow {
  transform: translateX(4px);
}

/* ==========================================================================
   1. HERO SECTION (Custom Hero Background with Home Page Chocolate & Golden Shade)
   ========================================================================== */
.about-hero-section {
  position: relative;
  background-color: #27130D !important;
  background-image: 
    radial-gradient(circle at 85% 30%, rgba(197, 139, 80, 0.22) 0%, transparent 48%),
    radial-gradient(circle at 18% 45%, rgba(96, 58, 40, 0.35) 0%, transparent 55%),
    linear-gradient(90deg, #27130D 0%, rgba(50, 24, 15, 0.92) 42%, rgba(39, 19, 13, 0.45) 75%, rgba(34, 16, 8, 0.30) 100%),
    url('{{ asset("assets/images/home/abouthero.png") }}') !important;
  background-position: center right !important;
  background-size: cover !important;
  background-repeat: no-repeat !important;
  color: #FFF8F0 !important;
  padding: 124px 0 84px 0 !important;
  min-height: 560px;
  display: flex;
  align-items: center;
  overflow: hidden;
}

.about-hero-ambient-glow {
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

.about-hero-container {
  display: flex;
  align-items: center;
  justify-content: flex-start;
  position: relative;
  z-index: 2;
  width: 100%;
}

.about-hero-left {
  max-width: 620px;
  width: 100%;
  text-align: left;
}

.about-hero-title {
  font-family: 'Cinzel', serif !important;
  font-size: clamp(34px, 4.2vw, 50px);
  font-weight: 400 !important;
  line-height: 1.18;
  letter-spacing: 0.04em;
  text-transform: uppercase !important;
  color: #FFFFFF;
  margin: 0 0 20px 0;
}

.about-hero-desc {
  font-family: 'Glacial Indifference', sans-serif !important;
  font-weight: 400 !important;
  font-size: 16px;
  line-height: 1.68;
  color: #E6D2C3;
  margin: 0 0 32px 0;
  max-width: 580px;
}

/* Flowing Champagne Curve below Hero */
.about-hero-wave-wrap {
  position: absolute;
  left: 0;
  right: 0;
  bottom: -1px;
  height: 48px;
  z-index: 3;
  pointer-events: none;
}

.about-hero-wave-wrap svg {
  width: 100%;
  height: 100%;
  display: block;
}

/* ==========================================================================
   2. WHO WE ARE SECTION (Two-Column Editorial)
   ========================================================================== */
.about-who-section {
  background: var(--about-warm-ivory);
  padding: 68px 0 54px;
}

.about-who-grid {
  display: grid;
  grid-template-columns: 0.75fr 1.25fr;
  align-items: center;
  gap: 44px;
}

.about-who-photo-wrap {
  position: relative;
  max-width: 380px;
  width: 100%;
  margin: 0 auto;
  border-radius: 18px;
  overflow: hidden;
  box-shadow: 0 14px 32px rgba(50, 24, 15, 0.10);
  border: 1.5px solid rgba(197, 139, 80, 0.28);
}

.about-who-photo-wrap img {
  width: 100%;
  max-height: 440px;
  height: auto;
  display: block;
  object-fit: cover;
  object-position: top center;
  transition: transform 0.4s ease;
}

.about-who-photo-wrap:hover img {
  transform: scale(1.02);
}

.about-who-content {
  max-width: 600px;
}

/* ==========================================================================
   3. OUR PURPOSE & PLATFORM (Why We Exist vs One Connected Ecosystem)
   ========================================================================== */
.about-purpose-section {
  background: var(--about-warm-ivory);
  padding: 30px 0 70px;
}

.about-purpose-grid {
  display: grid;
  grid-template-columns: 0.92fr 1.08fr;
  gap: 36px;
  align-items: stretch;
}

/* Left: Why We Exist / Our Purpose */
.about-exist-card {
  background: #FAF2E8;
  border: 1px solid rgba(197, 139, 80, 0.24);
  border-radius: 18px;
  padding: 38px 34px;
  display: flex;
  flex-direction: column;
  justify-content: center;
  box-shadow: 0 10px 28px rgba(50, 24, 15, 0.04);
}

.about-checklist {
  list-style: none;
  padding: 0;
  margin: 18px 0 0 0;
  display: flex;
  flex-direction: column;
  gap: 14px;
}

.about-checklist-item {
  display: flex;
  align-items: flex-start;
  gap: 12px;
  font-family: 'Glacial Indifference', sans-serif !important;
  font-weight: 400 !important;
  font-size: 14.5px;
  color: var(--about-chocolate);
  line-height: 1.5;
}

.about-checklist-item strong {
  font-family: 'Cinzel', serif !important;
  font-weight: 400 !important;
  text-transform: uppercase !important;
  letter-spacing: 0.03em;
  color: #27130D;
}

.about-check-icon {
  width: 22px;
  height: 22px;
  border-radius: 50%;
  background: linear-gradient(135deg, #F5B947 0%, #E99A24 100%);
  display: flex;
  align-items: center;
  justify-content: center;
  color: #FFFFFF;
  flex-shrink: 0;
  margin-top: 2px;
  box-shadow: 0 2px 6px rgba(233, 154, 36, 0.35);
}

.about-check-icon svg {
  width: 14px;
  height: 14px;
}

/* Right: One Connected Ecosystem / Our Technology */
.about-ecosystem-card {
  background: #FAF2E8;
  border: 1px solid rgba(197, 139, 80, 0.24);
  border-radius: 18px;
  padding: 36px 30px;
  box-shadow: 0 10px 28px rgba(50, 24, 15, 0.04);
}

.about-eco-grid {
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  gap: 12px;
  margin-top: 20px;
}

.about-eco-item {
  background: #FFFFFF;
  border: 1px solid rgba(197, 139, 80, 0.20);
  border-radius: 12px;
  padding: 16px 12px 14px;
  display: flex;
  flex-direction: column;
  align-items: center;
  text-align: center;
  gap: 6px;
  transition: all 0.22s ease;
  cursor: default;
}

.about-eco-item:hover {
  background: #FFFDF9;
  border-color: var(--about-champagne-gold);
  transform: translateY(-3px);
  box-shadow: 0 8px 18px rgba(50, 24, 15, 0.08);
}

.about-eco-icon-wrap {
  width: 38px;
  height: 38px;
  border-radius: 50%;
  background: rgba(197, 139, 80, 0.12);
  display: flex;
  align-items: center;
  justify-content: center;
  color: var(--about-caramel);
  margin-bottom: 2px;
  transition: all 0.22s ease;
}

.about-eco-icon-wrap svg {
  width: 19px;
  height: 19px;
}

.about-eco-item:hover .about-eco-icon-wrap {
  background: var(--about-champagne-gold);
  color: #27130D;
  transform: scale(1.08);
}

.about-eco-label {
  font-family: 'Cinzel', serif !important;
  font-size: 12.5px;
  font-weight: 400 !important;
  text-transform: uppercase !important;
  letter-spacing: 0.03em;
  line-height: 1.25;
  color: var(--about-chocolate);
  margin: 0;
}

.about-eco-desc {
  font-family: 'Glacial Indifference', sans-serif !important;
  font-weight: 400 !important;
  font-size: 11px;
  line-height: 1.4;
  color: #6B4C3E;
  margin: 0;
}

/* ==========================================================================
   4. OUR APPROACH SECTION (Full-Width Cream Panel with 4 Dividers)
   ========================================================================== */
.about-approach-section {
  background: var(--about-warm-ivory);
  padding: 15px 0 65px;
}

.about-approach-panel {
  background: #FAF0E4;
  border: 1px solid rgba(197, 139, 80, 0.26);
  border-radius: 20px;
  padding: 44px 36px 40px;
  box-shadow: 0 12px 32px rgba(50, 24, 15, 0.05);
}

.about-approach-header {
  text-align: center;
  max-width: 680px;
  margin: 0 auto 34px;
}

.about-approach-grid {
  display: grid;
  grid-template-columns: repeat(4, 1fr);
  gap: 0;
  position: relative;
}

.about-approach-col {
  padding: 0 20px;
  text-align: center;
  display: flex;
  flex-direction: column;
  align-items: center;
  position: relative;
}

.about-approach-col:not(:last-child)::after {
  content: '';
  position: absolute;
  right: 0;
  top: 15%;
  height: 70%;
  width: 1px;
  background: rgba(197, 139, 80, 0.25);
}

.about-approach-icon-wrap {
  width: 46px;
  height: 46px;
  border-radius: 50%;
  background: rgba(197, 139, 80, 0.14);
  display: flex;
  align-items: center;
  justify-content: center;
  color: var(--about-caramel);
  margin-bottom: 12px;
  transition: all 0.22s ease;
}

.about-approach-icon-wrap svg {
  width: 22px;
  height: 22px;
}

.about-approach-col:hover .about-approach-icon-wrap {
  background: var(--about-champagne-gold);
  color: #27130D;
  transform: scale(1.1);
}

.about-approach-num-title {
  font-family: 'Cinzel', serif !important;
  font-size: 15px;
  font-weight: 400 !important;
  text-transform: uppercase !important;
  letter-spacing: 0.03em;
  color: var(--about-chocolate);
  margin: 0 0 6px 0;
}

.about-approach-desc {
  font-family: 'Glacial Indifference', sans-serif !important;
  font-weight: 400 !important;
  font-size: 13px;
  line-height: 1.5;
  color: #6B4C3E;
  margin: 0;
}

/* ==========================================================================
   5. WHY CHOOSE GENI MENU (Chocolate-Brown Advantage + 5-Step Timeline)
   ========================================================================== */
.about-why-section {
  background: var(--about-warm-ivory);
  padding: 15px 0 65px;
}

.about-why-grid {
  display: grid;
  grid-template-columns: 0.95fr 1.05fr;
  gap: 28px;
  align-items: stretch;
}

/* Left: Chocolate-Brown Advantage Panel */
.about-advantage-panel {
  background: linear-gradient(135deg, #32180F 0%, #27130D 100%);
  border: 1px solid rgba(245, 185, 71, 0.35);
  border-radius: 20px;
  padding: 38px 30px;
  color: #FFFFFF;
  box-shadow: 0 16px 40px rgba(39, 19, 13, 0.28);
  display: flex;
  flex-direction: column;
  justify-content: center;
}

.about-dark-card-title {
  font-family: 'Cinzel', serif !important;
  font-size: clamp(21px, 2.2vw, 27px);
  font-weight: 400 !important;
  line-height: 1.25;
  letter-spacing: 0.04em;
  text-transform: uppercase !important;
  color: #FFFFFF;
  margin: 0 0 12px 0;
}

.about-dark-card-desc {
  font-family: 'Glacial Indifference', sans-serif !important;
  font-weight: 400 !important;
  font-size: 13.5px;
  line-height: 1.55;
  color: #E2CEBF;
  margin: 0 0 24px 0;
}

.about-advantage-2col {
  display: grid;
  grid-template-columns: 1fr 1fr;
  gap: 16px 16px;
}

.about-adv-item {
  display: flex;
  align-items: flex-start;
  gap: 10px;
}

.about-adv-check {
  width: 20px;
  height: 20px;
  border-radius: 50%;
  background: linear-gradient(135deg, #F5B947 0%, #E99A24 100%);
  display: flex;
  align-items: center;
  justify-content: center;
  color: #27130D;
  flex-shrink: 0;
  margin-top: 2px;
  box-shadow: 0 2px 6px rgba(245, 185, 71, 0.3);
}

.about-adv-check svg {
  width: 12px;
  height: 12px;
  stroke-width: 2.5;
}

.about-adv-title {
  font-family: 'Cinzel', serif !important;
  font-size: 13.5px;
  font-weight: 400 !important;
  text-transform: uppercase !important;
  letter-spacing: 0.03em;
  color: #FFF4E5;
  margin: 0 0 2px 0;
}

.about-adv-desc {
  font-family: 'Glacial Indifference', sans-serif !important;
  font-weight: 400 !important;
  font-size: 11.5px;
  line-height: 1.4;
  color: #D4BDB0;
  margin: 0;
}

/* Right: Product Workflow Timeline */
.about-workflow-panel {
  background: #FAF2E8;
  border: 1px solid rgba(197, 139, 80, 0.24);
  border-radius: 20px;
  padding: 34px 28px;
  box-shadow: 0 10px 28px rgba(50, 24, 15, 0.04);
  display: flex;
  flex-direction: column;
  justify-content: center;
}

.about-workflow-content-wrap {
  display: block;
  width: 100%;
  margin-top: 22px;
}

/* Horizontal 5-Step Process (Full Width & Perfectly Aligned) */
.about-process-steps-row {
  display: flex;
  align-items: flex-start;
  justify-content: space-between;
  gap: 10px;
  width: 100%;
}

.about-step-node {
  display: flex;
  flex-direction: column;
  align-items: center;
  text-align: center;
  gap: 8px;
  flex: 1;
  min-width: 0;
}

.about-step-badge {
  width: 36px;
  height: 36px;
  border-radius: 50%;
  background: #32180F;
  color: #FFF8F0;
  font-family: 'Cinzel', serif !important;
  font-size: 13px;
  font-weight: 400 !important;
  display: flex;
  align-items: center;
  justify-content: center;
  border: 2px solid var(--about-champagne-gold);
  box-shadow: 0 4px 12px rgba(50, 24, 15, 0.18);
  transition: all 0.22s ease;
  flex-shrink: 0;
}

.about-step-node:hover .about-step-badge {
  background: var(--about-champagne-gold);
  color: #27130D;
  transform: scale(1.1);
  box-shadow: 0 6px 16px rgba(245, 185, 71, 0.4);
}

.about-step-arrow {
  color: var(--about-caramel);
  font-size: 16px;
  flex-shrink: 0;
  opacity: 0.75;
  margin-top: 8px;
}

.about-step-title {
  font-family: 'Cinzel', serif !important;
  font-size: 12.5px;
  font-weight: 400 !important;
  text-transform: uppercase !important;
  letter-spacing: 0.03em;
  line-height: 1.28;
  color: var(--about-chocolate);
  margin: 0;
}

.about-step-desc {
  font-family: 'Glacial Indifference', sans-serif !important;
  font-weight: 400 !important;
  font-size: 11.5px;
  line-height: 1.45;
  color: #6B4C3E;
  margin: 0;
  max-width: 120px;
}

/* ==========================================================================
   6. VISION & MISSION SECTION (Two Side-by-Side Cards)
   ========================================================================== */
.about-vision-section {
  background: var(--about-warm-ivory);
  padding: 15px 0 60px;
}

.about-vision-grid {
  display: grid;
  grid-template-columns: 1fr 1fr;
  gap: 24px;
}

.about-vm-card {
  background: #FAF2E8;
  border: 1px solid rgba(197, 139, 80, 0.26);
  border-radius: 18px;
  padding: 36px 32px;
  display: flex;
  flex-direction: column;
  gap: 10px;
  box-shadow: 0 10px 28px rgba(50, 24, 15, 0.04);
  transition: all 0.25s ease;
}

.about-vm-card:hover {
  border-color: var(--about-champagne-gold);
  transform: translateY(-2px);
  box-shadow: 0 14px 32px rgba(50, 24, 15, 0.08);
}

.about-vm-header {
  display: flex;
  align-items: center;
  gap: 12px;
}

.about-vm-icon-box {
  width: 44px;
  height: 44px;
  border-radius: 50%;
  background: linear-gradient(135deg, rgba(245, 185, 71, 0.2) 0%, rgba(197, 139, 80, 0.2) 100%);
  display: flex;
  align-items: center;
  justify-content: center;
  color: var(--about-chocolate);
  flex-shrink: 0;
  border: 1px solid rgba(197, 139, 80, 0.3);
}

.about-vm-icon-box svg {
  width: 22px;
  height: 22px;
}

.about-vm-title {
  font-family: 'Cinzel', serif !important;
  font-size: 14px;
  font-weight: 400 !important;
  letter-spacing: 0.12em;
  text-transform: uppercase !important;
  color: var(--about-chocolate);
  margin: 0;
}

.about-vm-subtitle {
  font-family: 'Cinzel', serif !important;
  font-size: 16px;
  font-weight: 400 !important;
  text-transform: uppercase !important;
  letter-spacing: 0.03em;
  color: var(--about-chocolate);
  margin: 4px 0 2px 0;
}

.about-vm-desc {
  font-family: 'Glacial Indifference', sans-serif !important;
  font-weight: 400 !important;
  font-size: 14px;
  line-height: 1.6;
  color: #5D3E30;
  margin: 0;
}

/* ==========================================================================
   7. OUR COMMITMENT SECTION (Text + 3D Golden Rocket)
   ========================================================================== */
.about-commitment-section {
  background: var(--about-warm-ivory);
  padding: 15px 0 80px;
}

.about-commitment-grid {
  display: grid;
  grid-template-columns: 1.15fr 0.85fr;
  align-items: center;
  gap: 40px;
}

.about-commitment-content {
  max-width: 580px;
}

.about-commitment-visual-wrap {
  display: flex;
  justify-content: center;
  align-items: center;
}

.about-rocket-img {
  max-width: 440px;
  width: 100%;
  height: auto;
  filter: drop-shadow(0 14px 28px rgba(50, 24, 15, 0.12));
  transition: transform 0.4s ease;
}

.about-rocket-img:hover {
  transform: translateY(-6px) scale(1.02);
}

/* ==========================================================================
   8. FINAL CTA SECTION (Compact Full-Width with about cta.png Background)
   ========================================================================== */
.about-final-cta-section {
  position: relative;
  background-color: #27130D !important;
  background-image: linear-gradient(180deg, rgba(39, 19, 13, 0.65) 0%, rgba(39, 19, 13, 0.78) 100%), url('{{ asset("assets/images/home/about cta.png") }}') !important;
  background-position: center center !important;
  background-size: cover !important;
  background-repeat: no-repeat !important;
  color: #FFF8F0;
  padding: 52px 0 50px !important;
  overflow: hidden;
  text-align: center;
}

.about-final-cta-container {
  max-width: 820px;
  width: 100%;
  margin: 0 auto;
  padding: 0 24px;
  display: flex;
  flex-direction: column;
  align-items: center;
  text-align: center;
  gap: 12px;
  position: relative;
  z-index: 2;
}

/* Center Content */
.about-final-cta-content {
  max-width: 740px;
  width: 100%;
  text-align: center;
}

.about-final-cta-title {
  font-family: 'Cinzel', serif !important;
  font-size: clamp(24px, 2.8vw, 35px);
  font-weight: 400 !important;
  line-height: 1.22;
  letter-spacing: 0.04em;
  text-transform: uppercase !important;
  color: #FFFFFF;
  margin: 0 0 10px 0;
  text-align: center;
}

.about-final-cta-desc {
  font-family: 'Glacial Indifference', sans-serif !important;
  font-weight: 400 !important;
  font-size: 14.5px;
  line-height: 1.58;
  color: #EBD8C7;
  margin: 0 auto;
  max-width: 660px;
  text-align: center;
}

/* Center Buttons */
.about-final-cta-actions {
  display: flex;
  align-items: center;
  justify-content: center;
  gap: 12px;
  flex-wrap: wrap;
  margin-top: 6px;
}

/* ==========================================================================
   RESPONSIVE DESIGN (Tablets & Mobile Devices)
   ========================================================================== */
@media (max-width: 991px) {
  .about-hero-section {
    padding: 100px 0 60px !important;
    min-height: auto;
  }
  .about-hero-container {
    justify-content: center;
    text-align: center;
  }
  .about-hero-left {
    max-width: 100%;
    margin: 0 auto;
    text-align: center;
  }
  .about-hero-desc {
    margin-left: auto;
    margin-right: auto;
  }

  .about-who-grid {
    grid-template-columns: 1fr;
    text-align: center;
    gap: 26px;
  }
  .about-who-photo-wrap {
    max-width: 320px;
    margin: 0 auto;
  }
  .about-who-content {
    max-width: 100%;
  }

  .about-purpose-grid {
    grid-template-columns: 1fr;
    gap: 28px;
  }

  .about-approach-grid {
    grid-template-columns: repeat(2, 1fr);
    gap: 24px 0;
  }
  .about-approach-col:nth-child(2)::after {
    display: none;
  }

  .about-why-grid {
    grid-template-columns: 1fr;
    gap: 24px;
  }

  .about-commitment-grid {
    grid-template-columns: 1fr;
    text-align: center;
    gap: 28px;
  }
  .about-commitment-content {
    max-width: 100%;
  }

  .about-final-cta-container {
    text-align: center;
    gap: 14px;
  }
  .about-final-cta-content {
    max-width: 100%;
  }
  .about-final-cta-actions {
    justify-content: center;
  }
}

@media (max-width: 640px) {
  .about-hero-section {
    padding: 60px 0 65px;
  }
  .about-eco-grid {
    grid-template-columns: repeat(2, 1fr);
  }
  .about-approach-grid {
    grid-template-columns: 1fr;
    gap: 20px;
  }
  .about-approach-col::after {
    display: none !important;
  }
  .about-advantage-2col {
    grid-template-columns: 1fr;
    gap: 12px;
  }
  .about-process-steps-row {
    flex-wrap: wrap;
    justify-content: center;
    gap: 16px 12px;
  }
  .about-step-node {
    min-width: 100px;
    max-width: 130px;
  }
  .about-step-arrow {
    display: none;
  }
  .about-vision-grid {
    grid-template-columns: 1fr;
  }
  .about-final-cta-actions {
    flex-direction: column;
    width: 100%;
  }
  .about-final-cta-actions .btn-primary-gold,
  .about-final-cta-actions .btn-secondary-outline-gold {
    width: 100%;
    justify-content: center;
  }
}
</style>

<div class="geni-about-page">

  <!-- ========================================================================
       01. HERO – BRAND INTRODUCTION
       ======================================================================== -->
  <section class="about-hero-section">
    <div class="about-hero-ambient-glow" aria-hidden="true"></div>

    <div class="about-container about-hero-container">
      
      <!-- Left: Editorial Content -->
      <div class="about-hero-left">
        <div class="about-eyebrow light">
          <span class="dash gold"></span>
          <span>ABOUT GENI MENU</span>
        </div>

        <h1 class="about-hero-title">
          Redefining the <span class="gold-gradient">Digital Dining</span> Experience.
        </h1>

        <p class="about-hero-desc">
          Geni Menu is a next-generation digital platform that brings menus, ordering and food business operations into one connected ecosystem. We combine intuitive technology with intelligent management tools to help businesses deliver exceptional dining experiences, optimise daily operations and unlock new opportunities for growth.
        </p>

        <a href="{{ route('restaurant_signup') }}" class="btn-primary-gold">
          <span>Discover Geni Menu</span>
          <span class="arrow">&rarr;</span>
        </a>
      </div>
    </div>

    <!-- Soft flowing champagne curve below Hero -->
    <div class="about-hero-wave-wrap" aria-hidden="true">
      <svg viewBox="0 0 1440 48" fill="none" preserveAspectRatio="none">
        <path d="M0,0 C360,48 1080,48 1440,0 L1440,48 L0,48 Z" fill="#FFF4E5"/>
      </svg>
    </div>
  </section>


  <!-- ========================================================================
       02. WHO WE ARE
       ======================================================================== -->
  <section class="about-who-section">
    <div class="about-container">
      <div class="about-who-grid">
        
        <!-- Left: Fine Dining Restaurant Photography -->
        <div class="about-who-photo-wrap">
          <img src="{{ asset('assets/images/home/aboutheroma.png') }}"
               alt="About Geni Menu - Who We Are"
               loading="lazy">
        </div>

        <!-- Right: Text Content -->
        <div class="about-who-content">
          <div class="about-eyebrow">
            <span class="dash"></span>
            <span>WHO WE ARE</span>
          </div>

          <h2 class="about-heading">
            Bringing Food, Technology<br>and Business Together.
          </h2>

          <p class="about-text-lead" style="margin-bottom: 14px;">
            Geni Menu was built around a simple idea: managing a food business should be as effortless as the experience it delivers.
          </p>

          <p class="about-text" style="margin-bottom: 14px;">
            We bring essential food service operations together through a unified digital platform, connecting customer interactions, order management and business workflows.
          </p>

          <p class="about-text">
            By combining practical functionality with modern technology, Geni Menu helps businesses move beyond traditional processes and embrace a more intelligent, connected approach to food business management.
          </p>
        </div>

      </div>
    </div>
  </section>


  <!-- ========================================================================
       03. WHY WE EXIST & 04. ONE CONNECTED ECOSYSTEM
       ======================================================================== -->
  <section class="about-purpose-section">
    <div class="about-container">
      <div class="about-purpose-grid">

        <!-- Left Column: 03. Why We Exist -->
        <div class="about-exist-card">
          <div class="about-eyebrow">
            <span class="dash"></span>
            <span>OUR PURPOSE</span>
          </div>

          <h3 class="about-subheading">
            Turning Everyday Operational<br>Challenges into Smarter Possibilities.
          </h3>

          <p class="about-text" style="margin-bottom: 10px;">
            Food businesses operate in a fast-moving environment where every order, transaction and operational decision matters.
          </p>

          <p class="about-text" style="margin-bottom: 10px;">
            Disconnected systems, repetitive manual tasks and limited operational visibility can create unnecessary complexity.
          </p>

          <p class="about-text">
            Geni Menu addresses these challenges through connected digital solutions designed to make everyday management more structured, efficient and accessible.
          </p>

          <ul class="about-checklist">
            <li class="about-checklist-item">
              <div class="about-check-icon">
                <svg viewBox="0 0 20 20" fill="currentColor">
                  <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                </svg>
              </div>
              <span><strong>Less Manual Work:</strong> Reduce repetitive processes through digital workflows.</span>
            </li>

            <li class="about-checklist-item">
              <div class="about-check-icon">
                <svg viewBox="0 0 20 20" fill="currentColor">
                  <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                </svg>
              </div>
              <span><strong>Centralised Management:</strong> Bring essential operations together.</span>
            </li>

            <li class="about-checklist-item">
              <div class="about-check-icon">
                <svg viewBox="0 0 20 20" fill="currentColor">
                  <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                </svg>
              </div>
              <span><strong>Faster Coordination:</strong> Improve communication between ordering and kitchen operations.</span>
            </li>

            <li class="about-checklist-item">
              <div class="about-check-icon">
                <svg viewBox="0 0 20 20" fill="currentColor">
                  <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                </svg>
              </div>
              <span><strong>Greater Visibility:</strong> Access meaningful information across business activities.</span>
            </li>

            <li class="about-checklist-item">
              <div class="about-check-icon">
                <svg viewBox="0 0 20 20" fill="currentColor">
                  <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                </svg>
              </div>
              <span><strong>Smarter Decisions:</strong> Use operational insights to identify opportunities for improvement.</span>
            </li>
          </ul>
        </div>

        <!-- Right Column: 04. One Connected Ecosystem -->
        <div class="about-ecosystem-card">
          <div class="about-eyebrow">
            <span class="dash"></span>
            <span>OUR TECHNOLOGY</span>
          </div>

          <h3 class="about-subheading">
            Every Essential Operation.<br>One Intelligent Platform.
          </h3>

          <p class="about-text" style="margin-bottom: 18px;">
            Geni Menu connects the key components of modern food business management, creating a unified environment where information and operations work together.
          </p>

          <div class="about-eco-grid">
            <!-- 01. Digital Menu Management -->
            <div class="about-eco-item">
              <div class="about-eco-icon-wrap" aria-hidden="true">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                  <path d="M4 19.5A2.5 2.5 0 0 1 6.5 17H20"></path>
                  <path d="M6.5 2H20v20H6.5A2.5 2.5 0 0 1 4 19.5v-15A2.5 2.5 0 0 1 6.5 2z"></path>
                  <line x1="9" y1="7" x2="15" y2="7"></line>
                  <line x1="9" y1="11" x2="15" y2="11"></line>
                </svg>
              </div>
              <h5 class="about-eco-label">Digital Menu Management</h5>
              <p class="about-eco-desc">Build engaging digital menus, organise categories, showcase food items and manage pricing with greater flexibility.</p>
            </div>

            <!-- 02. QR Code Ordering -->
            <div class="about-eco-item">
              <div class="about-eco-icon-wrap" aria-hidden="true">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                  <rect x="3" y="3" width="7" height="7" rx="1.5"></rect>
                  <rect x="14" y="3" width="7" height="7" rx="1.5"></rect>
                  <rect x="14" y="14" width="7" height="7" rx="1.5"></rect>
                  <rect x="3" y="14" width="7" height="7" rx="1.5"></rect>
                  <line x1="7" y1="7" x2="7.01" y2="7"></line>
                  <line x1="17" y1="7" x2="17.01" y2="7"></line>
                  <line x1="7" y1="17" x2="7.01" y2="17"></line>
                </svg>
              </div>
              <h5 class="about-eco-label">QR Code Ordering</h5>
              <p class="about-eco-desc">Connect customers directly to digital menus and provide a convenient, technology-enabled ordering experience.</p>
            </div>

            <!-- 03. POS & Billing -->
            <div class="about-eco-item">
              <div class="about-eco-icon-wrap" aria-hidden="true">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                  <rect x="2" y="4" width="20" height="16" rx="2"></rect>
                  <line x1="2" y1="10" x2="22" y2="10"></line>
                  <line x1="6" y1="15" x2="10" y2="15"></line>
                </svg>
              </div>
              <h5 class="about-eco-label">POS &amp; Billing</h5>
              <p class="about-eco-desc">Manage transactions, sales and billing activities through an integrated point-of-sale experience.</p>
            </div>

            <!-- 04. Kitchen Order Management -->
            <div class="about-eco-item">
              <div class="about-eco-icon-wrap" aria-hidden="true">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                  <path d="M6 13.87A4 4 0 0 1 7.41 6a5.11 5.11 0 0 1 1.05-1.54 5 5 0 0 1 7.08 0A5.11 5.11 0 0 1 16.59 6 4 4 0 0 1 18 13.87V21H6Z"></path>
                  <line x1="6" y1="17" x2="18" y2="17"></line>
                </svg>
              </div>
              <h5 class="about-eco-label">Kitchen Order Management</h5>
              <p class="about-eco-desc">Coordinate incoming orders and kitchen workflows to support accurate preparation and efficient service.</p>
            </div>

            <!-- 05. Inventory Management -->
            <div class="about-eco-item">
              <div class="about-eco-icon-wrap" aria-hidden="true">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                  <path d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z"></path>
                  <polyline points="3.27 6.96 12 12.01 20.73 6.96"></polyline>
                  <line x1="12" y1="22.08" x2="12" y2="12"></line>
                </svg>
              </div>
              <h5 class="about-eco-label">Inventory Management</h5>
              <p class="about-eco-desc">Monitor stock levels, track inventory movement and maintain better control over ingredients and supplies.</p>
            </div>

            <!-- 06. Table Management -->
            <div class="about-eco-item">
              <div class="about-eco-icon-wrap" aria-hidden="true">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                  <path d="M4 18h16"></path>
                  <path d="M4 18v3"></path>
                  <path d="M20 18v3"></path>
                  <path d="M6 14h12"></path>
                  <path d="M8 10h8"></path>
                  <rect x="5" y="6" width="14" height="4" rx="1.5"></rect>
                </svg>
              </div>
              <h5 class="about-eco-label">Table Management</h5>
              <p class="about-eco-desc">Organise table allocation, monitor availability and improve dining floor coordination.</p>
            </div>

            <!-- 07. Reservation Management -->
            <div class="about-eco-item">
              <div class="about-eco-icon-wrap" aria-hidden="true">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                  <rect x="3" y="4" width="18" height="18" rx="2"></rect>
                  <line x1="16" y1="2" x2="16" y2="6"></line>
                  <line x1="8" y1="2" x2="8" y2="6"></line>
                  <line x1="3" y1="10" x2="21" y2="10"></line>
                  <path d="M9 16l2 2 4-4"></path>
                </svg>
              </div>
              <h5 class="about-eco-label">Reservation Management</h5>
              <p class="about-eco-desc">Manage table bookings and reservation activities through a structured digital workflow.</p>
            </div>

            <!-- 08. Delivery Management -->
            <div class="about-eco-item">
              <div class="about-eco-icon-wrap" aria-hidden="true">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                  <rect x="1" y="3" width="15" height="13" rx="1"></rect>
                  <polygon points="16 8 20 8 23 11 23 16 16 16 16 8"></polygon>
                  <circle cx="5.5" cy="18.5" r="2.5"></circle>
                  <circle cx="18.5" cy="18.5" r="2.5"></circle>
                </svg>
              </div>
              <h5 class="about-eco-label">Delivery Management</h5>
              <p class="about-eco-desc">Organise delivery orders and coordinate fulfilment activities from order placement to completion.</p>
            </div>

            <!-- 09. Business Analytics -->
            <div class="about-eco-item">
              <div class="about-eco-icon-wrap" aria-hidden="true">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                  <line x1="18" y1="20" x2="18" y2="10"></line>
                  <line x1="12" y1="20" x2="12" y2="4"></line>
                  <line x1="6" y1="20" x2="6" y2="14"></line>
                  <polyline points="4 6 12 12 20 4"></polyline>
                </svg>
              </div>
              <h5 class="about-eco-label">Business Analytics</h5>
              <p class="about-eco-desc">Transform operational data into meaningful insights that support informed business decisions.</p>
            </div>
          </div>
        </div>

      </div>
    </div>
  </section>


  <!-- ========================================================================
       05. OUR APPROACH
       ======================================================================== -->
  <section class="about-approach-section">
    <div class="about-container">
      <div class="about-approach-panel">
        
        <div class="about-approach-header">
          <div class="about-eyebrow" style="justify-content: center;">
            <span class="dash"></span>
            <span>HOW WE MAKE A DIFFERENCE</span>
            <span class="dash"></span>
          </div>

          <h2 class="about-heading" style="text-align: center; margin: 0 0 10px 0;">
            Technology Built Around Real Business Needs.
          </h2>

          <p class="about-text-lead" style="text-align: center; max-width: 620px; margin: 0 auto;">
            We believe great technology is not defined by complexity. It is defined by how effectively it solves real problems.
          </p>
        </div>

        <div class="about-approach-grid">
          
          <!-- 01. Simplicity by Design -->
          <div class="about-approach-col">
            <div class="about-approach-icon-wrap" aria-hidden="true">
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                <path d="M14 9V5a3 3 0 0 0-3-3l-4 9v11h11.28a2 2 0 0 0 2-1.7l1.38-9a2 2 0 0 0-2-2.3zM7 22H4a2 2 0 0 1-2-2v-7a2 2 0 0 1 2-2h3"></path>
              </svg>
            </div>
            <h4 class="about-approach-num-title">01. Simplicity by Design</h4>
            <p class="about-approach-desc">We focus on intuitive experiences that make technology easier to understand, access and use.</p>
          </div>

          <!-- 02. Connected Intelligence -->
          <div class="about-approach-col">
            <div class="about-approach-icon-wrap" aria-hidden="true">
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                <circle cx="18" cy="5" r="3"></circle>
                <circle cx="6" cy="12" r="3"></circle>
                <circle cx="18" cy="19" r="3"></circle>
                <line x1="8.59" y1="13.51" x2="15.42" y2="17.49"></line>
                <line x1="15.41" y1="6.51" x2="8.59" y2="10.49"></line>
              </svg>
            </div>
            <h4 class="about-approach-num-title">02. Connected Intelligence</h4>
            <p class="about-approach-desc">We bring essential business functions together to create more coordinated operational workflows.</p>
          </div>

          <!-- 03. Experience-Led Innovation -->
          <div class="about-approach-col">
            <div class="about-approach-icon-wrap" aria-hidden="true">
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                <circle cx="9" cy="7" r="4"></circle>
                <path d="M23 21v-2a4 4 0 0 0-3-3.87"></path>
                <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
              </svg>
            </div>
            <h4 class="about-approach-num-title">03. Experience-Led Innovation</h4>
            <p class="about-approach-desc">We design digital experiences that consider both the people managing operations and the customers interacting with them.</p>
          </div>

          <!-- 04. Continuous Evolution -->
          <div class="about-approach-col">
            <div class="about-approach-icon-wrap" aria-hidden="true">
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                <line x1="9" y1="18" x2="15" y2="18"></line>
                <line x1="10" y1="22" x2="14" y2="22"></line>
                <path d="M15.09 14c.18-.98.65-1.74 1.41-2.5A4.65 4.65 0 0 0 18 8 6 6 0 0 0 6 8c0 1 .23 2.23 1.5 3.5A4.61 4.61 0 0 1 8.91 14"></path>
              </svg>
            </div>
            <h4 class="about-approach-num-title">04. Continuous Evolution</h4>
            <p class="about-approach-desc">We continuously refine our solutions to adapt to changing expectations, emerging technologies and evolving business requirements.</p>
          </div>

        </div>

      </div>
    </div>
  </section>


  <!-- ========================================================================
       06. THE GENI MENU ADVANTAGE & 07. HOW GENI MENU WORKS
       ======================================================================== -->
  <section class="about-why-section">
    <div class="about-container">
      <div class="about-why-grid">

        <!-- Left: 06. The Geni Menu Advantage (Deep Chocolate-Brown Panel) -->
        <div class="about-advantage-panel">
          <div class="about-eyebrow light">
            <span class="dash gold"></span>
            <span>WHY GENI MENU</span>
          </div>

          <h3 class="about-dark-card-title">
            More Than Software.<br>A Smarter Way to Run Your Business.
          </h3>

          <p class="about-dark-card-desc">
            Geni Menu goes beyond individual digital tools by connecting essential business activities within one management ecosystem.
          </p>

          <div class="about-advantage-2col">
            <!-- 1. Unified Platform -->
            <div class="about-adv-item">
              <div class="about-adv-check">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round">
                  <polyline points="20 6 9 17 4 12"></polyline>
                </svg>
              </div>
              <div>
                <h5 class="about-adv-title">Unified Platform</h5>
                <p class="about-adv-desc">Access multiple business capabilities through one connected environment.</p>
              </div>
            </div>

            <!-- 2. Operational Efficiency -->
            <div class="about-adv-item">
              <div class="about-adv-check">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round">
                  <polyline points="20 6 9 17 4 12"></polyline>
                </svg>
              </div>
              <div>
                <h5 class="about-adv-title">Operational Efficiency</h5>
                <p class="about-adv-desc">Organise everyday workflows and reduce unnecessary manual effort.</p>
              </div>
            </div>

            <!-- 3. Flexible Management -->
            <div class="about-adv-item">
              <div class="about-adv-check">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round">
                  <polyline points="20 6 9 17 4 12"></polyline>
                </svg>
              </div>
              <div>
                <h5 class="about-adv-title">Flexible Management</h5>
                <p class="about-adv-desc">Adapt menus, pricing and operational settings as business requirements change.</p>
              </div>
            </div>

            <!-- 4. Connected Operations -->
            <div class="about-adv-item">
              <div class="about-adv-check">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round">
                  <polyline points="20 6 9 17 4 12"></polyline>
                </svg>
              </div>
              <div>
                <h5 class="about-adv-title">Connected Operations</h5>
                <p class="about-adv-desc">Bring ordering, billing, kitchen and management activities closer together.</p>
              </div>
            </div>

            <!-- 5. Actionable Intelligence -->
            <div class="about-adv-item">
              <div class="about-adv-check">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round">
                  <polyline points="20 6 9 17 4 12"></polyline>
                </svg>
              </div>
              <div>
                <h5 class="about-adv-title">Actionable Intelligence</h5>
                <p class="about-adv-desc">Gain useful visibility into business activities and operational performance.</p>
              </div>
            </div>

            <!-- 6. Growth-Ready Technology -->
            <div class="about-adv-item">
              <div class="about-adv-check">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round">
                  <polyline points="20 6 9 17 4 12"></polyline>
                </svg>
              </div>
              <div>
                <h5 class="about-adv-title">Growth-Ready Technology</h5>
                <p class="about-adv-desc">Build on a flexible digital foundation that can support evolving business needs.</p>
              </div>
            </div>
          </div>
        </div>

        <!-- Right: 07. How Geni Menu Works (Process Timeline) -->
        <div class="about-workflow-panel">
          <div class="about-eyebrow">
            <span class="dash"></span>
            <span>SIMPLE. SMART. CONNECTED.</span>
          </div>

          <h3 class="about-subheading">
            From Customer Interaction<br>to Business Intelligence.
          </h3>

          <p class="about-text" style="margin-bottom: 8px;">
            Geni Menu connects the customer journey with the operational processes that keep a food business running.
          </p>

          <div class="about-workflow-content-wrap">
            
            <!-- Horizontal 5-Step Process Timeline -->
            <div class="about-process-steps-row">
              <!-- Step 01 -->
              <div class="about-step-node">
                <div class="about-step-badge">01</div>
                <h6 class="about-step-title">Build Your Digital Presence</h6>
                <p class="about-step-desc">Create a structured digital menu with items, descriptions, images and pricing.</p>
              </div>

              <span class="about-step-arrow">&rarr;</span>

              <!-- Step 02 -->
              <div class="about-step-node">
                <div class="about-step-badge">02</div>
                <h6 class="about-step-title">Connect Your Customers</h6>
                <p class="about-step-desc">Make your menu accessible through QR codes and digital sharing.</p>
              </div>

              <span class="about-step-arrow">&rarr;</span>

              <!-- Step 03 -->
              <div class="about-step-node">
                <div class="about-step-badge">03</div>
                <h6 class="about-step-title">Capture &amp; Manage Orders</h6>
                <p class="about-step-desc">Organise incoming orders through a centralised ordering workflow.</p>
              </div>

              <span class="about-step-arrow">&rarr;</span>

              <!-- Step 04 -->
              <div class="about-step-node">
                <div class="about-step-badge">04</div>
                <h6 class="about-step-title">Coordinate Operations</h6>
                <p class="about-step-desc">Connect billing, kitchen activities, tables and inventory management.</p>
              </div>

              <span class="about-step-arrow">&rarr;</span>

              <!-- Step 05 -->
              <div class="about-step-node">
                <div class="about-step-badge">05</div>
                <h6 class="about-step-title">Understand &amp; Improve</h6>
                <p class="about-step-desc">Review business performance and monitor operational activities.</p>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>
  </section>


  <!-- ========================================================================
       08. OUR VISION & MISSION
       ======================================================================== -->
  <section class="about-vision-section">
    <div class="about-container">
      <div style="text-align: center; margin-bottom: 24px;">
        <div class="about-eyebrow" style="justify-content: center; margin-bottom: 8px;">
          <span class="dash"></span>
          <span>OUR DIRECTION</span>
          <span class="dash"></span>
        </div>
      </div>

      <div class="about-vision-grid">

        <!-- Left: Our Vision -->
        <div class="about-vm-card">
          <div class="about-vm-header">
            <div class="about-vm-icon-box" aria-hidden="true">
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                <circle cx="12" cy="12" r="3"></circle>
              </svg>
            </div>
            <div>
              <h4 class="about-vm-title">OUR VISION</h4>
              <h5 class="about-vm-subtitle">A More Connected Future for Food Businesses.</h5>
            </div>
          </div>

          <p class="about-vm-desc">
            To shape the future of food service through intelligent technology, connected operations and digital experiences that redefine how businesses serve and grow.
          </p>
        </div>

        <!-- Right: Our Mission -->
        <div class="about-vm-card">
          <div class="about-vm-header">
            <div class="about-vm-icon-box" aria-hidden="true">
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                <circle cx="12" cy="12" r="10"></circle>
                <circle cx="12" cy="12" r="6"></circle>
                <circle cx="12" cy="12" r="2"></circle>
              </svg>
            </div>
            <div>
              <h4 class="about-vm-title">OUR MISSION</h4>
              <h5 class="about-vm-subtitle">Making Business Management Smarter and More Accessible.</h5>
            </div>
          </div>

          <p class="about-vm-desc">
            To empower food businesses with innovative, practical and scalable digital solutions that simplify operations, enhance customer experiences and create lasting business value.
          </p>
        </div>

      </div>
    </div>
  </section>


  <!-- ========================================================================
       09. OUR COMMITMENT
       ======================================================================== -->
  <section class="about-commitment-section">
    <div class="about-container">
      <div class="about-commitment-grid">

        <!-- Left Column: Content -->
        <div class="about-commitment-content">
          <div class="about-eyebrow">
            <span class="dash"></span>
            <span>BUILT FOR WHAT'S NEXT</span>
          </div>

          <h2 class="about-heading">
            Innovation Today.<br>Possibilities for Tomorrow.
          </h2>

          <p class="about-text-lead" style="margin-bottom: 14px;">
            At Geni Menu, we see technology as an ongoing journey of improvement.
          </p>

          <p class="about-text" style="margin-bottom: 14px;">
            Our commitment extends beyond building software. It is about understanding business challenges, developing meaningful solutions and creating technology that delivers practical value.
          </p>

          <p class="about-text">
            We continuously work towards making food business management more intuitive, connected and adaptable, helping businesses embrace new possibilities with confidence.
          </p>
        </div>

        <!-- Right Column: Visual -->
        <div class="about-commitment-visual-wrap">
          <img src="{{ asset('assets/images/home/abouthow.png') }}"
               alt="Built for What's Next - Geni Menu"
               class="about-rocket-img"
               loading="lazy">
        </div>

      </div>
    </div>
  </section>


  <!-- ========================================================================
       10. FINAL CTA
       ======================================================================== -->
  <section class="about-final-cta-section">
    <div class="about-container about-final-cta-container">
      
      <!-- Center: Heading & Description -->
      <div class="about-final-cta-content">
        <div class="about-eyebrow light" style="justify-content: center; margin-bottom: 8px;">
          <span class="dash gold"></span>
          <span>THE NEXT CHAPTER STARTS HERE</span>
          <span class="dash gold"></span>
        </div>

        <h2 class="about-final-cta-title">
          Give Your Food Business a<br>Smarter Digital Foundation.
        </h2>
        <p class="about-final-cta-desc">
          Bring your menus, ordering and business operations together with Geni Menu. Experience connected technology designed to simplify management, elevate customer interactions and support your next stage of growth.
        </p>
      </div>

      <!-- Action Buttons -->
      <div class="about-final-cta-actions">
        <a href="{{ route('restaurant_signup') }}" class="btn-primary-gold">
          <span>Get Started Today</span>
          <span class="arrow">&rarr;</span>
        </a>

        <a href="{{ route('enquiry') }}" class="btn-secondary-outline-gold">
          <span>Book a Personalised Demo</span>
          <span class="arrow">&rarr;</span>
        </a>
      </div>

    </div>
  </section>

</div>

@endsection
