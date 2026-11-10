@php
    $meta = [
        'title' => 'About Us — Geni Menu | Digital Dining & Restaurant Platform',
        'description' => 'Learn how Geni Menu brings digital menus, ordering, and food business management together into one intelligent platform for modern hospitality.',
        'keywords' => 'about Geni Menu, digital menu platform, restaurant management software, digital dining experience, restaurant POS, QR code ordering, WeGeni',
    ];
@endphp

@extends('layouts.frontend-master')

@section('content')

<style>
@import url('https://fonts.googleapis.com/css2?family=Cinzel:wght@400;500;600;700&family=Jost:wght@300;400;500;600;700&family=Outfit:wght@300;400;500;600;700&display=swap');
@import url('https://fonts.cdnfonts.com/css/glacial-indifference-2');

/* ==========================================================================
   GENI MENU — ABOUT US PAGE STYLES
   - Warm Chocolate & Champagne Gold Design System
   - Typography: Jost (Headings/Body), Cinzel (Editorial Eyebrows), Outfit
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
  font-family: 'Jost', 'Glacial Indifference', sans-serif;
  color: var(--about-text-dark);
  background-color: var(--about-warm-ivory);
  overflow-x: hidden;
  margin: 0;
  padding: 0;
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
  font-family: 'Cinzel', serif;
  font-size: 11px;
  font-weight: 600;
  letter-spacing: 0.16em;
  text-transform: uppercase;
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
  font-family: 'Jost', sans-serif;
  font-size: clamp(24px, 2.5vw, 34px);
  font-weight: 700;
  line-height: 1.22;
  letter-spacing: -0.01em;
  color: var(--about-chocolate);
  margin: 0 0 16px 0;
}

.about-subheading {
  font-family: 'Jost', sans-serif;
  font-size: clamp(20px, 2vw, 26px);
  font-weight: 600;
  line-height: 1.25;
  color: var(--about-chocolate);
  margin: 0 0 14px 0;
}

.about-text-lead {
  font-family: 'Glacial Indifference', 'Outfit', sans-serif;
  font-size: 15.5px;
  line-height: 1.65;
  color: #5D3E30;
  margin: 0;
}

.about-text {
  font-family: 'Glacial Indifference', 'Outfit', sans-serif;
  font-size: 14.5px;
  line-height: 1.6;
  color: #6B4C3E;
  margin: 0 0 20px 0;
}

.gold-gradient {
  color: var(--about-champagne-gold);
  background: linear-gradient(135deg, #F5B947 0%, #F2C58D 60%, #E99A24 100%);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
  display: inline-block;
}

/* --- Primary Buttons --- */
.btn-primary-gold {
  display: inline-flex;
  align-items: center;
  gap: 8px;
  background: linear-gradient(135deg, #F5B947 0%, #E99A24 100%);
  color: #27130D !important;
  font-family: 'Glacial Indifference', sans-serif;
  font-size: 14px;
  font-weight: 700;
  letter-spacing: 0.2px;
  padding: 12px 28px;
  border-radius: 9999px;
  border: none;
  box-shadow: 0 6px 18px rgba(245, 185, 71, 0.35);
  text-decoration: none;
  transition: all 0.25s ease;
  cursor: pointer;
}

.btn-primary-gold:hover {
  background: linear-gradient(135deg, #FCE8D2 0%, #F5B947 100%);
  transform: translateY(-2px);
  box-shadow: 0 10px 24px rgba(245, 185, 71, 0.45);
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
  background: transparent;
  color: #FFF8F0 !important;
  font-family: 'Glacial Indifference', sans-serif;
  font-size: 14px;
  font-weight: 600;
  letter-spacing: 0.2px;
  padding: 11px 26px;
  border-radius: 9999px;
  border: 1.5px solid rgba(245, 185, 71, 0.7);
  text-decoration: none;
  transition: all 0.25s ease;
  cursor: pointer;
}

.btn-secondary-outline-gold:hover {
  background: rgba(245, 185, 71, 0.15);
  border-color: #F5B947;
  color: #F5B947 !important;
  transform: translateY(-2px);
}

/* ==========================================================================
   1. HERO SECTION (Warm Restaurant Background + Tablet Visual)
   ========================================================================== */
.about-hero-section {
  position: relative;
  background: #27130D url('{{ asset("assets/images/about/about-hero-bg.jpg") }}') center center / cover no-repeat;
  color: #FFF8F0;
  padding: 90px 0 85px;
  overflow: hidden;
}

.about-hero-section::before {
  content: '';
  position: absolute;
  inset: 0;
  background: linear-gradient(90deg, rgba(39, 19, 13, 0.94) 0%, rgba(50, 24, 15, 0.88) 45%, rgba(39, 19, 13, 0.75) 100%);
  z-index: 1;
}

.about-hero-container {
  display: grid;
  grid-template-columns: 1.15fr 0.85fr;
  align-items: center;
  gap: 40px;
  position: relative;
  z-index: 2;
}

.about-hero-left {
  max-width: 580px;
}

.about-hero-title {
  font-family: 'Jost', sans-serif;
  font-size: clamp(32px, 3.8vw, 48px);
  font-weight: 700;
  line-height: 1.15;
  letter-spacing: -0.02em;
  color: #FFFFFF;
  margin: 0 0 18px 0;
}

.about-hero-desc {
  font-family: 'Glacial Indifference', 'Outfit', sans-serif;
  font-size: 15.5px;
  line-height: 1.65;
  color: #E6D2C3;
  margin: 0 0 28px 0;
  max-width: 520px;
}

.about-hero-visual-wrap {
  display: flex;
  justify-content: center;
  align-items: center;
  position: relative;
}

.about-hero-tablet-img {
  width: 100%;
  max-width: 480px;
  height: auto;
  border-radius: 16px;
  box-shadow: 0 20px 48px rgba(0, 0, 0, 0.55), 0 0 32px rgba(245, 185, 71, 0.15);
  transition: transform 0.3s ease;
}

.about-hero-tablet-img:hover {
  transform: translateY(-4px) scale(1.01);
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
  grid-template-columns: 0.95fr 1.05fr;
  align-items: center;
  gap: 48px;
}

.about-who-photo-wrap {
  position: relative;
  border-radius: 18px;
  overflow: hidden;
  box-shadow: 0 16px 36px rgba(50, 24, 15, 0.10);
  border: 1.5px solid rgba(197, 139, 80, 0.30);
}

.about-who-photo-wrap img {
  width: 100%;
  height: auto;
  display: block;
  object-fit: cover;
  transition: transform 0.4s ease;
}

.about-who-photo-wrap:hover img {
  transform: scale(1.03);
}

.about-who-content {
  max-width: 540px;
}

/* ==========================================================================
   3. OUR PURPOSE & PLATFORM (Split: Why We Exist vs One Connected Ecosystem)
   ========================================================================== */
.about-purpose-section {
  background: var(--about-warm-ivory);
  padding: 40px 0 70px;
}

.about-purpose-grid {
  display: grid;
  grid-template-columns: 0.92fr 1.08fr;
  gap: 36px;
  align-items: stretch;
}

/* Left: Why We Exist */
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
  margin: 10px 0 0 0;
  display: flex;
  flex-direction: column;
  gap: 12px;
}

.about-checklist-item {
  display: flex;
  align-items: center;
  gap: 12px;
  font-family: 'Glacial Indifference', 'Outfit', sans-serif;
  font-size: 14.5px;
  font-weight: 600;
  color: var(--about-chocolate);
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
  box-shadow: 0 2px 6px rgba(233, 154, 36, 0.35);
}

.about-check-icon svg {
  width: 14px;
  height: 14px;
}

/* Right: One Connected Ecosystem */
.about-ecosystem-card {
  background: #FAF2E8;
  border: 1px solid rgba(197, 139, 80, 0.24);
  border-radius: 18px;
  padding: 38px 32px;
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
  padding: 16px 10px 14px;
  display: flex;
  flex-direction: column;
  align-items: center;
  text-align: center;
  gap: 8px;
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
  width: 40px;
  height: 40px;
  border-radius: 50%;
  background: rgba(197, 139, 80, 0.12);
  display: flex;
  align-items: center;
  justify-content: center;
  color: var(--about-caramel);
  transition: all 0.22s ease;
}

.about-eco-icon-wrap svg {
  width: 20px;
  height: 20px;
}

.about-eco-item:hover .about-eco-icon-wrap {
  background: var(--about-champagne-gold);
  color: #27130D;
  transform: scale(1.08);
}

.about-eco-label {
  font-family: 'Glacial Indifference', 'Outfit', sans-serif;
  font-size: 11.5px;
  font-weight: 600;
  line-height: 1.25;
  color: var(--about-chocolate);
}

/* ==========================================================================
   4. OUR APPROACH SECTION (Full-Width Cream Panel with 4 Dividers)
   ========================================================================== */
.about-approach-section {
  background: var(--about-warm-ivory);
  padding: 20px 0 65px;
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
  max-width: 620px;
  margin: 0 auto 34px;
}

.about-approach-grid {
  display: grid;
  grid-template-columns: repeat(4, 1fr);
  gap: 0;
  position: relative;
}

.about-approach-col {
  padding: 0 22px;
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
  font-family: 'Jost', sans-serif;
  font-size: 15px;
  font-weight: 700;
  color: var(--about-chocolate);
  margin: 0 0 6px 0;
}

.about-approach-desc {
  font-family: 'Glacial Indifference', 'Outfit', sans-serif;
  font-size: 13px;
  line-height: 1.45;
  color: #6B4C3E;
  margin: 0;
}

/* ==========================================================================
   5. WHY CHOOSE GENI MENU (Chocolate-Brown Advantage + 5-Step Timeline)
   ========================================================================== */
.about-why-section {
  background: var(--about-warm-ivory);
  padding: 20px 0 65px;
}

.about-why-grid {
  display: grid;
  grid-template-columns: 0.95fr 1.05fr;
  gap: 28px;
  align-items: stretch;
}

/* Left: Chocolate-Brown Panel */
.about-advantage-panel {
  background: linear-gradient(135deg, #32180F 0%, #27130D 100%);
  border: 1px solid rgba(245, 185, 71, 0.35);
  border-radius: 20px;
  padding: 38px 32px;
  color: #FFFFFF;
  box-shadow: 0 16px 40px rgba(39, 19, 13, 0.28);
  display: flex;
  flex-direction: column;
  justify-content: center;
}

.about-dark-card-title {
  font-family: 'Jost', sans-serif;
  font-size: clamp(22px, 2.2vw, 28px);
  font-weight: 700;
  line-height: 1.25;
  color: #FFFFFF;
  margin: 0 0 24px 0;
}

.about-advantage-2col {
  display: grid;
  grid-template-columns: 1fr 1fr;
  gap: 16px 18px;
}

.about-adv-item {
  display: flex;
  align-items: center;
  gap: 10px;
  font-family: 'Glacial Indifference', 'Outfit', sans-serif;
  font-size: 13.5px;
  font-weight: 600;
  color: #FFF4E5;
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
  box-shadow: 0 2px 6px rgba(245, 185, 71, 0.3);
}

.about-adv-check svg {
  width: 13px;
  height: 13px;
  stroke-width: 2.5;
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
  display: grid;
  grid-template-columns: 1fr auto;
  gap: 20px;
  align-items: center;
  margin-top: 14px;
}

/* Horizontal 5-Step Process */
.about-process-steps-row {
  display: flex;
  align-items: center;
  justify-content: space-between;
  gap: 4px;
  width: 100%;
}

.about-step-node {
  display: flex;
  flex-direction: column;
  align-items: center;
  text-align: center;
  gap: 6px;
  flex: 1;
}

.about-step-badge {
  width: 32px;
  height: 32px;
  border-radius: 50%;
  background: #32180F;
  color: #FFF8F0;
  font-family: 'Jost', sans-serif;
  font-size: 13px;
  font-weight: 700;
  display: flex;
  align-items: center;
  justify-content: center;
  border: 1.5px solid var(--about-champagne-gold);
  box-shadow: 0 4px 10px rgba(50, 24, 15, 0.15);
  transition: all 0.22s ease;
}

.about-step-node:hover .about-step-badge {
  background: var(--about-champagne-gold);
  color: #27130D;
  transform: scale(1.1);
}

.about-step-arrow {
  color: var(--about-caramel);
  font-size: 14px;
  flex-shrink: 0;
  opacity: 0.75;
}

.about-step-text {
  font-family: 'Glacial Indifference', 'Outfit', sans-serif;
  font-size: 10.5px;
  font-weight: 600;
  line-height: 1.25;
  color: var(--about-chocolate);
  max-width: 72px;
}

.about-workflow-phone-img {
  width: 110px;
  height: auto;
  border-radius: 12px;
  border: 1.5px solid rgba(197, 139, 80, 0.35);
  box-shadow: 0 8px 20px rgba(50, 24, 15, 0.12);
  display: block;
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
  gap: 12px;
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
  font-family: 'Cinzel', serif;
  font-size: 14px;
  font-weight: 700;
  letter-spacing: 0.12em;
  text-transform: uppercase;
  color: var(--about-chocolate);
  margin: 0;
}

.about-vm-desc {
  font-family: 'Glacial Indifference', 'Outfit', sans-serif;
  font-size: 14.5px;
  line-height: 1.6;
  color: #5D3E30;
  margin: 0;
}

/* ==========================================================================
   7. OUR COMMITMENT SECTION (Text + 3D Golden Rocket)
   ========================================================================== */
.about-commitment-section {
  background: var(--about-warm-ivory);
  padding: 20px 0 80px;
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
  max-width: 320px;
  width: 100%;
  height: auto;
  filter: drop-shadow(0 14px 28px rgba(233, 154, 36, 0.2));
  transition: transform 0.4s ease;
}

.about-rocket-img:hover {
  transform: translateY(-6px) scale(1.02);
}

/* ==========================================================================
   8. FINAL CTA SECTION (Full-Width Dark Chocolate with Flowing Curves)
   ========================================================================== */
.about-final-cta-section {
  position: relative;
  background: linear-gradient(135deg, #27130D 0%, #32180F 50%, #200E07 100%);
  color: #FFF8F0;
  padding: 75px 0 80px;
  overflow: hidden;
}

/* Flowing Golden Wave on top of CTA */
.about-cta-wave-wrap {
  position: absolute;
  left: 0;
  right: 0;
  top: -1px;
  height: 48px;
  pointer-events: none;
  z-index: 1;
}

.about-cta-wave-wrap svg {
  width: 100%;
  height: 100%;
  display: block;
}

.about-final-cta-container {
  display: grid;
  grid-template-columns: auto 1fr auto;
  align-items: center;
  gap: 36px;
  position: relative;
  z-index: 2;
}

/* Left: Golden Cloche Logo */
.about-cloche-wrap {
  width: 82px;
  height: 82px;
  display: flex;
  align-items: center;
  justify-content: center;
}

.about-cloche-icon {
  width: 78px;
  height: 60px;
  display: block;
}

/* Center Content */
.about-final-cta-content {
  max-width: 540px;
}

.about-final-cta-title {
  font-family: 'Jost', sans-serif;
  font-size: clamp(22px, 2.3vw, 29px);
  font-weight: 700;
  line-height: 1.25;
  color: #FFFFFF;
  margin: 0 0 10px 0;
}

.about-final-cta-desc {
  font-family: 'Glacial Indifference', 'Outfit', sans-serif;
  font-size: 14.5px;
  line-height: 1.55;
  color: #EBD8C7;
  margin: 0;
}

/* Right Buttons */
.about-final-cta-actions {
  display: flex;
  align-items: center;
  gap: 12px;
  flex-wrap: wrap;
}

/* ==========================================================================
   RESPONSIVE DESIGN (Tablets & Mobile Devices)
   ========================================================================== */
@media (max-width: 991px) {
  .about-hero-container {
    grid-template-columns: 1fr;
    text-align: center;
    gap: 32px;
  }
  .about-hero-left {
    max-width: 100%;
    margin: 0 auto;
  }
  .about-hero-desc {
    margin-left: auto;
    margin-right: auto;
  }
  .about-hero-tablet-img {
    max-width: 380px;
  }

  .about-who-grid {
    grid-template-columns: 1fr;
    text-align: center;
    gap: 30px;
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
    grid-template-columns: 1fr;
    text-align: center;
    gap: 24px;
  }
  .about-cloche-wrap {
    margin: 0 auto;
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
  .about-workflow-content-wrap {
    grid-template-columns: 1fr;
  }
  .about-workflow-phone-img {
    margin: 10px auto 0;
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
       1. HERO SECTION (Brand Introduction)
       ======================================================================== -->
  <section class="about-hero-section">
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
          Geni Menu brings digital menus, ordering and food business management together in one intelligent platform. We help businesses simplify operations, improve customer experiences and embrace smarter ways of working.
        </p>

        <a href="{{ route('restaurant_signup') }}" class="btn-primary-gold">
          <span>Get Started Today</span>
          <span class="arrow">&rarr;</span>
        </a>
      </div>

      <!-- Right: Product Visual (Tablet on Restaurant Table) -->
      <div class="about-hero-visual-wrap">
        <img src="{{ asset('assets/images/about/about-hero-tablet.png') }}"
             alt="Geni Menu Digital Menu Tablet Visual"
             class="about-hero-tablet-img">
      </div>
    </div>

    <!-- Soft flowing champagne curve into next section -->
    <div class="about-hero-wave-wrap" aria-hidden="true">
      <svg viewBox="0 0 1440 48" fill="none" preserveAspectRatio="none">
        <path d="M0,0 C360,48 1080,48 1440,0 L1440,48 L0,48 Z" fill="#FFF4E5"/>
      </svg>
    </div>
  </section>


  <!-- ========================================================================
       2. WHO WE ARE SECTION (Two-Column Layout)
       ======================================================================== -->
  <section class="about-who-section">
    <div class="about-container">
      <div class="about-who-grid">
        
        <!-- Left: Fine Dining Restaurant Photography -->
        <div class="about-who-photo-wrap">
          <img src="{{ asset('assets/images/about/about-who-photo.jpg') }}"
               alt="Fine Dining Restaurant Ambiance"
               loading="lazy">
        </div>

        <!-- Right: Text Content -->
        <div class="about-who-content">
          <div class="about-eyebrow">
            <span class="dash"></span>
            <span>WHO WE ARE</span>
          </div>

          <h2 class="about-heading">
            Technology That Makes<br>Food Business Management Smarter.
          </h2>

          <p class="about-text-lead">
            Geni Menu is an intelligent digital platform designed to simplify food business operations and transform the way businesses manage their daily activities.
          </p>
        </div>

      </div>
    </div>
  </section>


  <!-- ========================================================================
       3. OUR PURPOSE & PLATFORM SECTION (Why We Exist vs One Connected Ecosystem)
       ======================================================================== -->
  <section class="about-purpose-section">
    <div class="about-container">
      <div class="about-purpose-grid">

        <!-- Left Column: Why We Exist -->
        <div class="about-exist-card">
          <div class="about-eyebrow">
            <span class="dash"></span>
            <span>WHY WE EXIST</span>
          </div>

          <h3 class="about-subheading">
            Simplifying Operations<br>Through Smart Technology.
          </h3>

          <p class="about-text">
            Managing food business operations involves multiple tasks, systems and workflows. Geni Menu aims to bring these activities together through a unified digital solution.
          </p>

          <ul class="about-checklist">
            <li class="about-checklist-item">
              <div class="about-check-icon">
                <svg viewBox="0 0 20 20" fill="currentColor">
                  <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                </svg>
              </div>
              <span>Reduce manual processes.</span>
            </li>

            <li class="about-checklist-item">
              <div class="about-check-icon">
                <svg viewBox="0 0 20 20" fill="currentColor">
                  <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                </svg>
              </div>
              <span>Simplify menu management.</span>
            </li>

            <li class="about-checklist-item">
              <div class="about-check-icon">
                <svg viewBox="0 0 20 20" fill="currentColor">
                  <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                </svg>
              </div>
              <span>Organise order workflows.</span>
            </li>

            <li class="about-checklist-item">
              <div class="about-check-icon">
                <svg viewBox="0 0 20 20" fill="currentColor">
                  <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                </svg>
              </div>
              <span>Improve operational coordination.</span>
            </li>

            <li class="about-checklist-item">
              <div class="about-check-icon">
                <svg viewBox="0 0 20 20" fill="currentColor">
                  <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                </svg>
              </div>
              <span>Enable better business visibility.</span>
            </li>
          </ul>
        </div>

        <!-- Right Column: One Connected Ecosystem (9 Compact Cards) -->
        <div class="about-ecosystem-card">
          <div class="about-eyebrow">
            <span class="dash"></span>
            <span>ONE CONNECTED ECOSYSTEM</span>
          </div>

          <h3 class="about-subheading">
            Everything Connected. Everything Simplified.
          </h3>

          <p class="about-text">
            Explore the capabilities that bring your food business operations together.
          </p>

          <div class="about-eco-grid">
            <!-- 1. Digital Menu Management -->
            <div class="about-eco-item">
              <div class="about-eco-icon-wrap" aria-hidden="true">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                  <path d="M4 19.5A2.5 2.5 0 0 1 6.5 17H20"></path>
                  <path d="M6.5 2H20v20H6.5A2.5 2.5 0 0 1 4 19.5v-15A2.5 2.5 0 0 1 6.5 2z"></path>
                  <line x1="9" y1="7" x2="15" y2="7"></line>
                  <line x1="9" y1="11" x2="15" y2="11"></line>
                </svg>
              </div>
              <span class="about-eco-label">Digital Menu Management</span>
            </div>

            <!-- 2. QR Code Ordering -->
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
              <span class="about-eco-label">QR Code Ordering</span>
            </div>

            <!-- 3. POS & Billing -->
            <div class="about-eco-item">
              <div class="about-eco-icon-wrap" aria-hidden="true">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                  <rect x="2" y="4" width="20" height="16" rx="2"></rect>
                  <line x1="2" y1="10" x2="22" y2="10"></line>
                  <line x1="6" y1="15" x2="10" y2="15"></line>
                </svg>
              </div>
              <span class="about-eco-label">POS &amp; Billing</span>
            </div>

            <!-- 4. Kitchen Order Management -->
            <div class="about-eco-item">
              <div class="about-eco-icon-wrap" aria-hidden="true">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                  <path d="M6 13.87A4 4 0 0 1 7.41 6a5.11 5.11 0 0 1 1.05-1.54 5 5 0 0 1 7.08 0A5.11 5.11 0 0 1 16.59 6 4 4 0 0 1 18 13.87V21H6Z"></path>
                  <line x1="6" y1="17" x2="18" y2="17"></line>
                </svg>
              </div>
              <span class="about-eco-label">Kitchen Order Management</span>
            </div>

            <!-- 5. Inventory Management -->
            <div class="about-eco-item">
              <div class="about-eco-icon-wrap" aria-hidden="true">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                  <path d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z"></path>
                  <polyline points="3.27 6.96 12 12.01 20.73 6.96"></polyline>
                  <line x1="12" y1="22.08" x2="12" y2="12"></line>
                </svg>
              </div>
              <span class="about-eco-label">Inventory Management</span>
            </div>

            <!-- 6. Table Management -->
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
              <span class="about-eco-label">Table Management</span>
            </div>

            <!-- 7. Reservation Management -->
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
              <span class="about-eco-label">Reservation Management</span>
            </div>

            <!-- 8. Delivery Management -->
            <div class="about-eco-item">
              <div class="about-eco-icon-wrap" aria-hidden="true">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                  <rect x="1" y="3" width="15" height="13" rx="1"></rect>
                  <polygon points="16 8 20 8 23 11 23 16 16 16 16 8"></polygon>
                  <circle cx="5.5" cy="18.5" r="2.5"></circle>
                  <circle cx="18.5" cy="18.5" r="2.5"></circle>
                </svg>
              </div>
              <span class="about-eco-label">Delivery Management</span>
            </div>

            <!-- 9. Business Analytics -->
            <div class="about-eco-item">
              <div class="about-eco-icon-wrap" aria-hidden="true">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                  <line x1="18" y1="20" x2="18" y2="10"></line>
                  <line x1="12" y1="20" x2="12" y2="4"></line>
                  <line x1="6" y1="20" x2="6" y2="14"></line>
                  <polyline points="4 6 12 12 20 4"></polyline>
                </svg>
              </div>
              <span class="about-eco-label">Business Analytics</span>
            </div>
          </div>
        </div>

      </div>
    </div>
  </section>


  <!-- ========================================================================
       4. OUR APPROACH SECTION (Full-Width Cream Panel with 4 Dividers)
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

          <h2 class="about-heading" style="text-align: center; margin: 0;">
            Designed Around the<br>Way Businesses Work.
          </h2>
        </div>

        <div class="about-approach-grid">
          
          <!-- 01. Simplicity First -->
          <div class="about-approach-col">
            <div class="about-approach-icon-wrap" aria-hidden="true">
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                <path d="M14 9V5a3 3 0 0 0-3-3l-4 9v11h11.28a2 2 0 0 0 2-1.7l1.38-9a2 2 0 0 0-2-2.3zM7 22H4a2 2 0 0 1-2-2v-7a2 2 0 0 1 2-2h3"></path>
              </svg>
            </div>
            <h4 class="about-approach-num-title">01. Simplicity First</h4>
            <p class="about-approach-desc">Making everyday operations easier.</p>
          </div>

          <!-- 02. Connected Technology -->
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
            <h4 class="about-approach-num-title">02. Connected Technology</h4>
            <p class="about-approach-desc">Bringing essential business activities together.</p>
          </div>

          <!-- 03. Customer Experience -->
          <div class="about-approach-col">
            <div class="about-approach-icon-wrap" aria-hidden="true">
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                <circle cx="9" cy="7" r="4"></circle>
                <path d="M23 21v-2a4 4 0 0 0-3-3.87"></path>
                <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
              </svg>
            </div>
            <h4 class="about-approach-num-title">03. Customer Experience</h4>
            <p class="about-approach-desc">Creating convenient and engaging experiences.</p>
          </div>

          <!-- 04. Continuous Innovation -->
          <div class="about-approach-col">
            <div class="about-approach-icon-wrap" aria-hidden="true">
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                <line x1="9" y1="18" x2="15" y2="18"></line>
                <line x1="10" y1="22" x2="14" y2="22"></line>
                <path d="M15.09 14c.18-.98.65-1.74 1.41-2.5A4.65 4.65 0 0 0 18 8 6 6 0 0 0 6 8c0 1 .23 2.23 1.5 3.5A4.61 4.61 0 0 1 8.91 14"></path>
              </svg>
            </div>
            <h4 class="about-approach-num-title">04. Continuous Innovation</h4>
            <p class="about-approach-desc">Evolving to meet changing business needs.</p>
          </div>

        </div>

      </div>
    </div>
  </section>


  <!-- ========================================================================
       5. WHY CHOOSE GENI MENU SECTION (Advantage Panel + 5-Step Process)
       ======================================================================== -->
  <section class="about-why-section">
    <div class="about-container">
      <div class="about-why-grid">

        <!-- Left: Deep Chocolate-Brown Advantage Panel -->
        <div class="about-advantage-panel">
          <div class="about-eyebrow light">
            <span class="dash gold"></span>
            <span>THE GENI MENU ADVANTAGE</span>
          </div>

          <h3 class="about-dark-card-title">
            More Than Features.<br>A Smarter Way to Operate.
          </h3>

          <div class="about-advantage-2col">
            <div class="about-adv-item">
              <div class="about-adv-check">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round">
                  <polyline points="20 6 9 17 4 12"></polyline>
                </svg>
              </div>
              <span>All-in-One Platform</span>
            </div>

            <div class="about-adv-item">
              <div class="about-adv-check">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round">
                  <polyline points="20 6 9 17 4 12"></polyline>
                </svg>
              </div>
              <span>Connected Operations</span>
            </div>

            <div class="about-adv-item">
              <div class="about-adv-check">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round">
                  <polyline points="20 6 9 17 4 12"></polyline>
                </svg>
              </div>
              <span>Simplified Workflows</span>
            </div>

            <div class="about-adv-item">
              <div class="about-adv-check">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round">
                  <polyline points="20 6 9 17 4 12"></polyline>
                </svg>
              </div>
              <span>Real-Time Business Visibility</span>
            </div>

            <div class="about-adv-item">
              <div class="about-adv-check">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round">
                  <polyline points="20 6 9 17 4 12"></polyline>
                </svg>
              </div>
              <span>Flexible Digital Management</span>
            </div>

            <div class="about-adv-item">
              <div class="about-adv-check">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round">
                  <polyline points="20 6 9 17 4 12"></polyline>
                </svg>
              </div>
              <span>Scalable Technology</span>
            </div>
          </div>
        </div>

        <!-- Right: Simple. Smart. Connected. Product Workflow -->
        <div class="about-workflow-panel">
          <div class="about-eyebrow">
            <span class="dash"></span>
            <span>SIMPLE. SMART. CONNECTED.</span>
          </div>

          <h3 class="about-subheading">
            From Digital Menus to<br>Smarter Management.
          </h3>

          <div class="about-workflow-content-wrap">
            
            <!-- Horizontal 5-Step Process Timeline -->
            <div class="about-process-steps-row">
              <!-- Step 1 -->
              <div class="about-step-node">
                <div class="about-step-badge">1</div>
                <span class="about-step-text">Create Your Digital Menu</span>
              </div>

              <span class="about-step-arrow">&rarr;</span>

              <!-- Step 2 -->
              <div class="about-step-node">
                <div class="about-step-badge">2</div>
                <span class="about-step-text">Connect With Your Customers</span>
              </div>

              <span class="about-step-arrow">&rarr;</span>

              <!-- Step 3 -->
              <div class="about-step-node">
                <div class="about-step-badge">3</div>
                <span class="about-step-text">Manage Incoming Orders</span>
              </div>

              <span class="about-step-arrow">&rarr;</span>

              <!-- Step 4 -->
              <div class="about-step-node">
                <div class="about-step-badge">4</div>
                <span class="about-step-text">Coordinate Business Operations</span>
              </div>

              <span class="about-step-arrow">&rarr;</span>

              <!-- Step 5 -->
              <div class="about-step-node">
                <div class="about-step-badge">5</div>
                <span class="about-step-text">Monitor Performance and Grow</span>
              </div>
            </div>

            <!-- Supporting Visual: Smartphone displaying QR Menu -->
            <img src="{{ asset('assets/images/about/about-process-phone.png') }}"
                 alt="Smartphone with QR Menu scan"
                 class="about-workflow-phone-img"
                 loading="lazy">
          </div>
        </div>

      </div>
    </div>
  </section>


  <!-- ========================================================================
       6. VISION & MISSION SECTION (Two Side-by-Side Cards)
       ======================================================================== -->
  <section class="about-vision-section">
    <div class="about-container">
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
            <h4 class="about-vm-title">OUR VISION</h4>
          </div>

          <p class="about-vm-desc">
            To shape the future of food service through intelligent technology, connected operations and exceptional customer experiences.
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
            <h4 class="about-vm-title">OUR MISSION</h4>
          </div>

          <p class="about-vm-desc">
            To empower food businesses with accessible, innovative and scalable digital solutions that simplify operations and support sustainable growth.
          </p>
        </div>

      </div>
    </div>
  </section>


  <!-- ========================================================================
       7. OUR COMMITMENT SECTION (Text + 3D Golden Rocket Visual)
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
            Technology That Grows<br>With Your Ambition.
          </h2>

          <p class="about-text-lead" style="margin-bottom: 14px;">
            We believe technology should simplify business, empower people and create meaningful experiences.
          </p>

          <p class="about-text" style="margin: 0;">
            Our commitment is to continuously improve, innovate and deliver practical digital solutions that help businesses operate with confidence.
          </p>
        </div>

        <!-- Right Column: 3D Golden Rocket Illustration -->
        <div class="about-commitment-visual-wrap">
          <img src="{{ asset('assets/images/about/about-rocket.png') }}"
               alt="3D Golden Rocket Launching Through Clouds"
               class="about-rocket-img"
               loading="lazy">
        </div>

      </div>
    </div>
  </section>


  <!-- ========================================================================
       8. FINAL CTA SECTION (Full-Width Dark Chocolate with Flowing Waves)
       ======================================================================== -->
  <section class="about-final-cta-section">
    <!-- Flowing top curve -->
    <div class="about-cta-wave-wrap" aria-hidden="true">
      <svg viewBox="0 0 1440 48" fill="none" preserveAspectRatio="none">
        <path d="M0,48 C480,0 960,0 1440,48 L1440,0 L0,0 Z" fill="#FFF4E5"/>
      </svg>
    </div>

    <div class="about-container about-final-cta-container">
      
      <!-- Left: Geni Menu Golden Cloche Logo -->
      <div class="about-cloche-wrap" aria-hidden="true">
        <svg viewBox="0 0 88 64" fill="none" class="about-cloche-icon" xmlns="http://www.w3.org/2000/svg">
          <defs>
            <linearGradient id="clocheGoldGrad" x1="0%" y1="0%" x2="100%" y2="100%">
              <stop offset="0%" stop-color="#FCE8D2"/>
              <stop offset="50%" stop-color="#F5B947"/>
              <stop offset="100%" stop-color="#C58B50"/>
            </linearGradient>
          </defs>
          <!-- Handle knob -->
          <circle cx="44" cy="11" r="5" fill="url(#clocheGoldGrad)"/>
          <path d="M44 14v4" stroke="#F5B947" stroke-width="2.5" stroke-linecap="round"/>
          <!-- Dome lid -->
          <path d="M12 46c2-18 16-28 32-28s30 10 32 28H12z" fill="url(#clocheGoldGrad)"/>
          <!-- Soft lid sheen -->
          <path d="M22 43c2-12 11-19 22-19" stroke="rgba(255,255,255,0.45)" stroke-width="2.5" stroke-linecap="round"/>
          <!-- Serving Tray Base -->
          <rect x="8" y="48" width="72" height="6.5" rx="3.25" fill="url(#clocheGoldGrad)"/>
          <path d="M20 58h48" stroke="#F5B947" stroke-width="2" stroke-linecap="round" opacity="0.5"/>
        </svg>
      </div>

      <!-- Center: Heading & Description -->
      <div class="about-final-cta-content">
        <h2 class="about-final-cta-title">
          Ready to Experience a Smarter Way<br>to Manage Your Food Business?
        </h2>
        <p class="about-final-cta-desc">
          Bring your menus, orders and operations together with Geni Menu.
        </p>
      </div>

      <!-- Right: Action Buttons -->
      <div class="about-final-cta-actions">
        <a href="{{ route('restaurant_signup') }}" class="btn-primary-gold">
          <span>Get Started Today</span>
          <span class="arrow">&rarr;</span>
        </a>

        <a href="{{ route('enquiry') }}" class="btn-secondary-outline-gold">
          <span>Book a Personalised Demo</span>
        </a>
      </div>

    </div>
  </section>

</div>

@endsection
