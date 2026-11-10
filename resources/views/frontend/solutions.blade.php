@php
    $meta = [
        'title' => 'Geni Menu Solutions | Restaurant & Food Business Management Platform',
        'description' => 'Explore tailored Geni Menu solutions for family restaurants, dine-in, fine dining, QSR, takeaway, bakeries, cafes, canteens, sweet shops, pizzerias, bars, cloud kitchens, and multi-branch chains.',
        'keywords' => 'restaurant solutions, food business management software, QSR software, bakery POS, canteen management system, fine dining software, sweet shop POS, multi-branch restaurant ERP, Geni Menu solutions',
    ];
@endphp

@extends('layouts.frontend-master')

@section('content')

{{-- Google Fonts --}}
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@500;600;700&family=Glacial+Indifference:wght@400;700&family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">

<style>
/* ==========================================================================
   GENI MENU SOLUTIONS PAGE - INTERNATIONAL SAAS DESIGN
   ========================================================================== */
:root {
  --geni-chocolate: #27130D;
  --geni-deep-brown: #32180F;
  --geni-caramel: #B57E48;
  --geni-caramel-hover: #9E6B3E;
  --geni-champagne: #F2C58D;
  --geni-cream-bg: #FAF5EF;
  --geni-cream-card: #FDFBF8;
  --geni-white: #FFFFFF;
  --geni-border: #E8DACD;
  --geni-border-light: rgba(181, 126, 72, 0.22);
  --geni-text-dark: #27130D;
  --geni-text-muted: #6B5548;
  --geni-text-light: #9B887C;
  --geni-shadow-sm: 0 4px 14px rgba(39, 19, 13, 0.05);
  --geni-shadow-md: 0 10px 28px rgba(39, 19, 13, 0.08);
  --geni-shadow-lg: 0 18px 45px rgba(39, 19, 13, 0.12);
  --geni-radius-sm: 10px;
  --geni-radius-md: 16px;
  --geni-radius-lg: 22px;
}

* { box-sizing: border-box; }

.sol-page {
  background-color: var(--geni-white);
  color: var(--geni-text-dark);
  font-family: 'Glacial Indifference', 'Plus Jakarta Sans', -apple-system, BlinkMacSystemFont, sans-serif !important;
  font-size: 16px;
  overflow-x: clip;
  line-height: 1.6;
}

.sol-container {
  max-width: 1240px;
  margin: 0 auto;
  padding: 0 24px;
  width: 100%;
}

/* Typography Helpers */
.sol-heading-serif {
  font-family: 'Cinzel', serif !important;
  letter-spacing: 0.04em;
  text-transform: uppercase;
}

.sol-badge {
  display: inline-flex;
  align-items: center;
  gap: 8px;
  font-family: 'Cinzel', serif !important;
  font-size: 11.5px;
  font-weight: 700;
  letter-spacing: 0.14em;
  text-transform: uppercase;
  color: var(--geni-caramel);
  background: rgba(181, 126, 72, 0.1);
  border: 1px solid rgba(181, 126, 72, 0.35);
  padding: 6px 18px;
  border-radius: 999px;
  margin-bottom: 18px;
}

.sol-badge-dot {
  width: 7px;
  height: 7px;
  border-radius: 50%;
  background-color: var(--geni-caramel);
  box-shadow: 0 0 0 3px rgba(181, 126, 72, 0.2);
}

.sol-sec-header {
  text-align: center;
  max-width: 780px;
  margin: 0 auto 52px;
}

.sol-sec-title {
  font-family: 'Cinzel', serif !important;
  font-size: clamp(28px, 3.6vw, 42px);
  font-weight: 700;
  color: var(--geni-chocolate);
  letter-spacing: 0.04em;
  text-transform: uppercase;
  line-height: 1.2;
  margin: 0 0 16px 0;
}

.sol-sec-desc {
  font-family: 'Glacial Indifference', 'Plus Jakarta Sans', sans-serif !important;
  font-size: 16.5px;
  color: var(--geni-text-muted);
  line-height: 1.65;
  margin: 0 auto;
}

/* Global Buttons */
.sol-btn {
  display: inline-flex;
  align-items: center;
  justify-content: center;
  gap: 8px;
  padding: 13px 26px;
  border-radius: 12px;
  font-family: 'Cinzel', serif !important;
  font-size: 13.5px;
  font-weight: 600;
  letter-spacing: 0.08em;
  text-transform: uppercase;
  text-decoration: none;
  cursor: pointer;
  transition: all 0.25s ease;
  border: 1.5px solid transparent;
  white-space: nowrap;
}

.sol-btn-primary {
  background-color: var(--geni-chocolate);
  color: #FFFFFF !important;
  border-color: var(--geni-caramel);
  box-shadow: 0 4px 16px rgba(39, 19, 13, 0.18);
}

.sol-btn-primary:hover {
  background-color: var(--geni-deep-brown);
  border-color: var(--geni-champagne);
  transform: translateY(-2px);
  box-shadow: 0 8px 24px rgba(39, 19, 13, 0.26);
}

.sol-btn-secondary {
  background-color: #FFFFFF;
  color: var(--geni-chocolate) !important;
  border-color: var(--geni-border);
  box-shadow: 0 2px 8px rgba(39, 19, 13, 0.06);
}

.sol-btn-secondary:hover {
  background-color: var(--geni-cream-bg);
  border-color: var(--geni-caramel);
  color: var(--geni-caramel) !important;
  transform: translateY(-2px);
  box-shadow: 0 6px 18px rgba(39, 19, 13, 0.1);
}

/* ==========================================================================
   1. HERO SECTION
   ========================================================================== */
.sol-hero-sec {
  padding: 68px 0 74px;
  background: linear-gradient(180deg, #FAF3EC 0%, #FFFFFF 100%);
  position: relative;
  overflow: hidden;
  border-bottom: 1px solid var(--geni-border-light);
}

.sol-hero-grid {
  display: grid;
  grid-template-columns: 1.05fr 1fr;
  gap: 52px;
  align-items: center;
}

.sol-hero-content {
  max-width: 580px;
}

.sol-hero-title {
  font-family: 'Cinzel', serif !important;
  font-size: clamp(34px, 4.4vw, 52px);
  font-weight: 700;
  letter-spacing: 0.03em;
  color: var(--geni-chocolate);
  line-height: 1.15;
  margin: 0 0 20px 0;
}

.sol-hero-title span.highlight {
  color: var(--geni-caramel);
  display: inline-block;
}

.sol-hero-desc {
  font-family: 'Glacial Indifference', 'Plus Jakarta Sans', sans-serif !important;
  font-size: 17.5px;
  color: var(--geni-text-muted);
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
  gap: 6px;
  font-size: 12.5px;
  font-weight: 600;
  color: var(--geni-chocolate);
  background: #FAF0E6;
  padding: 6px 12px;
  border-radius: 8px;
  border: 1px solid rgba(181, 126, 72, 0.28);
}

.sol-hero-pill-tag svg {
  width: 14px;
  height: 14px;
  color: var(--geni-caramel);
}

/* POS Dashboard Visual & Floating Cards */
.sol-hero-visual-wrap {
  position: relative;
  padding: 24px;
}

.sol-mockup-frame {
  background: #FFFFFF;
  border-radius: var(--geni-radius-lg);
  padding: 12px;
  box-shadow: var(--geni-shadow-lg);
  border: 1.5px solid var(--geni-border);
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
  border-bottom: 1px solid #F1E7DD;
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
  font-size: 11px;
  font-weight: 600;
  color: var(--geni-text-light);
  letter-spacing: 0.05em;
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
  background: rgba(255, 255, 255, 0.94);
  backdrop-filter: blur(12px);
  -webkit-backdrop-filter: blur(12px);
  border: 1.5px solid var(--geni-border);
  border-radius: 16px;
  padding: 12px 18px;
  display: flex;
  align-items: center;
  gap: 12px;
  box-shadow: 0 12px 30px rgba(39, 19, 13, 0.12);
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
  background: #FFF5EA;
  color: var(--geni-caramel);
  border: 1px solid rgba(181, 126, 72, 0.3);
}

.sol-icon-green {
  background: #EDFDF5;
  color: #059669;
  border: 1px solid rgba(16, 185, 129, 0.25);
}

.sol-icon-purple {
  background: #F4EFFF;
  color: #7C3AED;
  border: 1px solid rgba(124, 58, 237, 0.25);
}

.sol-float-text {
  display: flex;
  flex-direction: column;
}

.sol-float-lbl {
  font-family: 'Cinzel', serif !important;
  font-size: 12px;
  font-weight: 700;
  color: var(--geni-chocolate);
  letter-spacing: 0.05em;
  white-space: nowrap;
}

.sol-float-val {
  font-size: 11px;
  font-weight: 600;
  color: var(--geni-caramel);
  white-space: nowrap;
}

/* ==========================================================================
   2. EXPLORE BY BUSINESS TYPE (FILTERS & LIVE SEARCH)
   ========================================================================== */
.sol-filter-sec {
  padding: 44px 0 32px;
  background-color: var(--geni-white);
  border-bottom: 1px solid var(--geni-border-light);
  position: sticky;
  top: 68px;
  z-index: 100;
  backdrop-filter: blur(12px);
  background: rgba(255, 255, 255, 0.96);
}

.sol-filter-bar {
  display: flex;
  align-items: center;
  justify-content: space-between;
  gap: 20px;
  flex-wrap: wrap;
}

.sol-filter-tabs {
  display: flex;
  align-items: center;
  gap: 8px;
  flex-wrap: wrap;
}

.sol-tab-pill {
  padding: 8px 16px;
  border-radius: 999px;
  border: 1.5px solid var(--geni-border);
  background: #FFFFFF;
  color: var(--geni-chocolate);
  font-family: 'Cinzel', serif !important;
  font-size: 12px;
  font-weight: 700;
  letter-spacing: 0.05em;
  cursor: pointer;
  transition: all 0.2s ease;
  white-space: nowrap;
}

.sol-tab-pill:hover {
  border-color: var(--geni-caramel);
  background: var(--geni-cream-bg);
}

.sol-tab-pill.is-active {
  background: var(--geni-chocolate);
  color: #FFFFFF;
  border-color: var(--geni-caramel);
  box-shadow: 0 4px 12px rgba(39, 19, 13, 0.15);
}

.sol-search-box {
  position: relative;
  min-width: 320px;
  max-width: 400px;
  flex: 1;
}

.sol-search-input {
  width: 100%;
  height: 42px;
  padding: 10px 16px 10px 38px;
  border: 1.5px solid var(--geni-border);
  border-radius: 999px;
  font-family: 'Glacial Indifference', 'Plus Jakarta Sans', sans-serif !important;
  font-size: 13.5px;
  color: var(--geni-text-dark);
  background: #FFFFFF;
  outline: none;
  transition: all 0.2s ease;
}

.sol-search-input:focus {
  border-color: var(--geni-caramel);
  box-shadow: 0 0 0 3px rgba(181, 126, 72, 0.15);
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
  padding: 64px 0 80px;
  background-color: var(--geni-white);
}

.sol-cards-grid {
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  gap: 28px;
}

.sol-card {
  background: var(--geni-cream-card);
  border: 1.5px solid var(--geni-border);
  border-radius: var(--geni-radius-md);
  overflow: hidden;
  display: flex;
  flex-direction: column;
  transition: all 0.3s ease;
  box-shadow: var(--geni-shadow-sm);
  position: relative;
}

.sol-card:hover {
  transform: translateY(-5px);
  border-color: var(--geni-caramel);
  box-shadow: var(--geni-shadow-md);
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
  background: rgba(39, 19, 13, 0.88);
  backdrop-filter: blur(8px);
  color: var(--geni-champagne);
  border: 1px solid rgba(242, 197, 141, 0.3);
  font-family: 'Cinzel', serif !important;
  font-size: 10.5px;
  font-weight: 700;
  letter-spacing: 0.08em;
  padding: 4px 10px;
  border-radius: 6px;
  text-transform: uppercase;
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
  font-weight: 700;
  color: var(--geni-chocolate);
  letter-spacing: 0.04em;
  margin: 0;
  line-height: 1.3;
}

.sol-card-desc {
  font-size: 14px;
  color: var(--geni-text-muted);
  line-height: 1.55;
  margin: 0 0 16px 0;
  min-height: 44px;
}

.sol-caps-label {
  font-family: 'Cinzel', serif !important;
  font-size: 11px;
  font-weight: 700;
  color: var(--geni-caramel);
  letter-spacing: 0.1em;
  text-transform: uppercase;
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
  font-size: 13px;
  font-weight: 500;
  color: var(--geni-chocolate);
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
  font-size: 12.5px;
}

/* ==========================================================================
   4. ONE CONNECTED WORKFLOW (MERGED Dynamic Pipeline & Connected Engine)
   ========================================================================== */
.sol-workflow-sec {
  padding: 86px 0;
  background-color: var(--geni-cream-bg);
  border-top: 1px solid var(--geni-border-light);
  border-bottom: 1px solid var(--geni-border-light);
}


.sol-workflow-track {
  display: grid;
  grid-template-columns: repeat(6, 1fr);
  gap: 16px;
  position: relative;
}

.sol-wf-step {
  background: #FFFFFF;
  border: 1.5px solid var(--geni-border);
  border-radius: var(--geni-radius-md);
  padding: 22px 16px;
  text-align: center;
  position: relative;
  transition: all 0.25s ease;
  box-shadow: var(--geni-shadow-sm);
  display: flex;
  flex-direction: column;
  align-items: center;
}

.sol-wf-step:hover {
  transform: translateY(-4px);
  border-color: var(--geni-caramel);
  box-shadow: var(--geni-shadow-md);
}

.sol-wf-step-num {
  position: absolute;
  top: -10px;
  background: var(--geni-chocolate);
  color: #FFFFFF;
  font-family: 'Cinzel', serif !important;
  font-size: 10px;
  font-weight: 700;
  padding: 2px 8px;
  border-radius: 12px;
  border: 1px solid var(--geni-caramel);
}

.sol-wf-icon {
  width: 44px;
  height: 44px;
  border-radius: 50%;
  background: #FAF0E6;
  color: var(--geni-caramel);
  display: flex;
  align-items: center;
  justify-content: center;
  font-size: 18px;
  margin: 10px 0 12px 0;
  border: 1px solid rgba(181, 126, 72, 0.25);
}

.sol-wf-title {
  font-family: 'Cinzel', serif !important;
  font-size: 13.5px;
  font-weight: 700;
  color: var(--geni-chocolate);
  letter-spacing: 0.05em;
  margin: 0 0 6px 0;
}

.sol-wf-desc {
  font-size: 12px;
  color: var(--geni-text-muted);
  line-height: 1.45;
  margin: 0;
}

.sol-wf-connector {
  position: absolute;
  top: 50%;
  right: -12px;
  transform: translateY(-50%);
  width: 24px;
  height: 24px;
  background: #FFFFFF;
  border: 1.5px solid var(--geni-border);
  border-radius: 50%;
  display: flex;
  align-items: center;
  justify-content: center;
  font-size: 11px;
  color: var(--geni-caramel);
  z-index: 3;
  box-shadow: 0 2px 6px rgba(39, 19, 13, 0.08);
}

/* ==========================================================================
   5. FIT & CAPABILITIES (SIMPLIFIED MODERN COMPARISON INTERFACE)
   ========================================================================== */
.sol-compare-sec {
  padding: 86px 0;
  background-color: var(--geni-white);
}

.sol-compare-filter-wrap {
  display: flex;
  align-items: center;
  justify-content: space-between;
  margin-bottom: 24px;
  gap: 16px;
  flex-wrap: wrap;
}

.sol-comp-box {
  background: #FFFFFF;
  border: 1.5px solid var(--geni-border);
  border-radius: var(--geni-radius-md);
  overflow: hidden;
  box-shadow: var(--geni-shadow-sm);
}

.sol-comp-table {
  width: 100%;
  border-collapse: collapse;
  text-align: left;
}

.sol-comp-table th {
  background: #FAF0E6;
  padding: 16px 22px;
  font-family: 'Cinzel', serif !important;
  font-size: 12px;
  font-weight: 700;
  letter-spacing: 0.08em;
  text-transform: uppercase;
  color: var(--geni-chocolate);
  border-bottom: 1.5px solid var(--geni-border);
}

.sol-comp-table td {
  padding: 16px 22px;
  border-bottom: 1px solid #F3EBE3;
  font-size: 14px;
  color: var(--geni-text-muted);
}

.sol-comp-table tr:hover td {
  background: #FCFAF7;
}

.sol-comp-table td.sol-comp-name {
  font-family: 'Cinzel', serif !important;
  font-weight: 700;
  font-size: 14.5px;
  color: var(--geni-chocolate);
}

.sol-comp-badge {
  display: inline-block;
  font-size: 10.5px;
  font-weight: 700;
  color: var(--geni-caramel);
  background: rgba(181, 126, 72, 0.12);
  padding: 2px 8px;
  border-radius: 4px;
  margin-left: 6px;
}

/* ==========================================================================
   6. START, GROW & SCALE (3 PREMIUM CARDS)
   ========================================================================== */
.sol-scale-sec {
  padding: 86px 0;
  background-color: var(--geni-cream-bg);
  border-top: 1px solid var(--geni-border-light);
  border-bottom: 1px solid var(--geni-border-light);
}

.sol-scale-grid {
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  gap: 28px;
  align-items: stretch;
}

.sol-scale-card {
  background: #FFFFFF;
  border: 1.5px solid var(--geni-border);
  border-radius: var(--geni-radius-lg);
  padding: 36px 30px;
  display: flex;
  flex-direction: column;
  justify-content: space-between;
  transition: all 0.25s ease;
  position: relative;
  box-shadow: var(--geni-shadow-sm);
}

.sol-scale-card:hover {
  transform: translateY(-4px);
  border-color: var(--geni-caramel);
  box-shadow: var(--geni-shadow-md);
}

.sol-scale-featured {
  background: #FFFFFF;
  border: 2px solid var(--geni-caramel);
  box-shadow: var(--geni-shadow-lg);
  transform: scale(1.02);
}

.sol-scale-featured:hover {
  transform: scale(1.02) translateY(-4px);
}

.sol-scale-badge {
  position: absolute;
  top: -12px;
  left: 50%;
  transform: translateX(-50%);
  background: var(--geni-chocolate);
  color: var(--geni-champagne);
  border: 1.5px solid var(--geni-caramel);
  font-family: 'Cinzel', serif !important;
  font-size: 10.5px;
  font-weight: 700;
  letter-spacing: 0.12em;
  padding: 4px 14px;
  border-radius: 999px;
  text-transform: uppercase;
}

.sol-scale-tier {
  font-family: 'Cinzel', serif !important;
  font-size: 24px;
  font-weight: 700;
  letter-spacing: 0.05em;
  color: var(--geni-chocolate);
  margin: 0 0 6px 0;
  text-transform: uppercase;
}

.sol-scale-subtitle {
  font-size: 14px;
  font-weight: 600;
  color: var(--geni-caramel);
  margin: 0 0 16px 0;
}

.sol-scale-desc {
  font-size: 14.5px;
  color: var(--geni-text-muted);
  line-height: 1.55;
  margin: 0 0 24px 0;
  border-bottom: 1px solid rgba(181, 126, 72, 0.2);
  padding-bottom: 20px;
}

.sol-scale-checklist {
  list-style: none;
  margin: 0 0 32px 0;
  padding: 0;
  display: flex;
  flex-direction: column;
  gap: 12px;
}

.sol-scale-checklist li {
  font-size: 14px;
  color: var(--geni-chocolate);
  display: flex;
  align-items: center;
  gap: 10px;
}

.sol-scale-checklist li svg {
  width: 17px;
  height: 17px;
  color: var(--geni-caramel);
  flex-shrink: 0;
}

/* ==========================================================================
   7. GENI MENU ADVANTAGE (4 BENEFIT CARDS)
   ========================================================================== */
.sol-why-sec {
  padding: 86px 0;
  background-color: var(--geni-white);
}

.sol-why-grid {
  display: grid;
  grid-template-columns: repeat(4, 1fr);
  gap: 24px;
}

.sol-why-card {
  background: var(--geni-cream-card);
  border: 1.5px solid var(--geni-border);
  border-radius: var(--geni-radius-md);
  padding: 30px 24px;
  transition: all 0.25s ease;
  box-shadow: var(--geni-shadow-sm);
  display: flex;
  flex-direction: column;
  align-items: flex-start;
}

.sol-why-card:hover {
  transform: translateY(-4px);
  background: #FFFFFF;
  border-color: var(--geni-caramel);
  box-shadow: var(--geni-shadow-md);
}

.sol-why-icon {
  width: 52px;
  height: 52px;
  border-radius: 14px;
  background: #FAF0E6;
  color: var(--geni-caramel);
  display: flex;
  align-items: center;
  justify-content: center;
  font-size: 24px;
  margin-bottom: 20px;
  border: 1px solid rgba(181, 126, 72, 0.25);
}

.sol-why-title {
  font-family: 'Cinzel', serif !important;
  font-size: 17px;
  font-weight: 700;
  color: var(--geni-chocolate);
  letter-spacing: 0.04em;
  margin: 0 0 10px 0;
  line-height: 1.3;
}

.sol-why-desc {
  font-size: 14px;
  color: var(--geni-text-muted);
  line-height: 1.6;
  margin: 0;
}

/* ==========================================================================
   9. FAQ SECTION (ALL 6 QUESTIONS IN ACCORDION)
   ========================================================================== */
.sol-faq-sec {
  padding: 86px 0;
  background-color: var(--geni-cream-bg);
  border-top: 1px solid var(--geni-border-light);
}

.sol-faq-wrap {
  max-width: 820px;
  margin: 0 auto;
}

.sol-faq-item {
  background: #FFFFFF;
  border: 1.5px solid var(--geni-border);
  border-radius: var(--geni-radius-md);
  margin-bottom: 14px;
  overflow: hidden;
  transition: border-color 0.2s ease, box-shadow 0.2s ease;
}

.sol-faq-item:hover {
  border-color: var(--geni-caramel);
}

.sol-faq-btn {
  width: 100%;
  padding: 20px 24px;
  background: transparent;
  border: none;
  text-align: left;
  display: flex;
  align-items: center;
  justify-content: space-between;
  gap: 16px;
  cursor: pointer;
  outline: none;
}

.sol-faq-q {
  font-family: 'Cinzel', serif !important;
  font-size: 16px;
  font-weight: 700;
  color: var(--geni-chocolate);
  letter-spacing: 0.03em;
  margin: 0;
  line-height: 1.4;
}

.sol-faq-icon {
  width: 28px;
  height: 28px;
  border-radius: 50%;
  background: #FAF0E6;
  color: var(--geni-caramel);
  display: flex;
  align-items: center;
  justify-content: center;
  font-size: 16px;
  flex-shrink: 0;
  transition: transform 0.25s ease;
}

.sol-faq-item.is-open .sol-faq-icon {
  transform: rotate(45deg);
  background: var(--geni-chocolate);
  color: #FFFFFF;
}

.sol-faq-ans {
  display: none;
  padding: 0 24px 22px;
  font-size: 14.5px;
  color: var(--geni-text-muted);
  line-height: 1.65;
  border-top: 1px dashed rgba(181, 126, 72, 0.2);
  margin-top: 4px;
  padding-top: 16px;
}

.sol-faq-item.is-open .sol-faq-ans {
  display: block;
}

/* ==========================================================================
   10. FINAL CTA BANNER
   ========================================================================== */
.sol-cta-sec {
  padding: 80px 0;
  background: linear-gradient(135deg, #27130D 0%, #1A0D08 100%);
  color: #FFFFFF;
  text-align: center;
  position: relative;
  overflow: hidden;
}

.sol-cta-card-inner {
  max-width: 760px;
  margin: 0 auto;
  position: relative;
  z-index: 2;
}

.sol-cta-title {
  font-family: 'Cinzel', serif !important;
  font-size: clamp(30px, 4vw, 44px);
  font-weight: 700;
  color: #FFFFFF;
  letter-spacing: 0.04em;
  text-transform: uppercase;
  line-height: 1.22;
  margin: 0 0 16px 0;
}

.sol-cta-desc {
  font-size: 17px;
  color: rgba(255, 255, 255, 0.85);
  line-height: 1.65;
  margin: 0 auto 34px;
  max-width: 620px;
}

.sol-cta-btns {
  display: flex;
  align-items: center;
  justify-content: center;
  gap: 16px;
  flex-wrap: wrap;
}

.sol-cta-btn-gold {
  background: linear-gradient(135deg, #C58B50 0%, #B57E48 100%);
  color: #FFFFFF !important;
  border-color: #E2A96B;
}

.sol-cta-btn-gold:hover {
  background: #A06B37;
  transform: translateY(-2px);
  box-shadow: 0 8px 24px rgba(0, 0, 0, 0.35);
}

.sol-cta-btn-light {
  background: rgba(255, 255, 255, 0.08);
  color: #FFFFFF !important;
  border-color: rgba(255, 255, 255, 0.3);
}

.sol-cta-btn-light:hover {
  background: rgba(255, 255, 255, 0.16);
  border-color: #FFFFFF;
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
  background: rgba(20, 10, 6, 0.65);
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
  background: #FFFFFF;
  border: 1.5px solid var(--geni-border);
  border-radius: var(--geni-radius-lg);
  max-width: 580px;
  width: 100%;
  padding: 32px;
  position: relative;
  box-shadow: 0 20px 60px rgba(0, 0, 0, 0.35);
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
  background: #FAF0E6;
  border: 1px solid var(--geni-border);
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
  font-size: 24px;
  font-weight: 700;
  color: var(--geni-chocolate);
  letter-spacing: 0.04em;
  margin: 0 0 8px 0;
}

.sol-modal-cat {
  font-size: 12px;
  font-weight: 700;
  color: var(--geni-caramel);
  text-transform: uppercase;
  margin-bottom: 14px;
  display: inline-block;
}

.sol-modal-desc {
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
  .sol-workflow-track {
    grid-template-columns: repeat(3, 1fr);
    gap: 20px;
  }
  .sol-wf-connector {
    display: none;
  }
  .sol-scale-grid {
    grid-template-columns: 1fr;
    gap: 24px;
  }
  .sol-scale-featured {
    transform: none;
  }
  .sol-scale-featured:hover {
    transform: translateY(-4px);
  }
  .sol-filter-sec {
    position: static;
  }
}

@media (max-width: 768px) {
  .sol-comp-box {
    overflow-x: auto;
  }
  .sol-comp-table {
    min-width: 600px;
  }
}

@media (max-width: 640px) {
  .sol-hero-sec {
    padding: 44px 0 54px;
  }
  .sol-hero-title {
    font-size: 28px;
  }
  .sol-hero-desc {
    font-size: 15px;
  }
  .sol-floating-pill {
    display: none;
  }
  .sol-filter-bar {
    flex-direction: column;
    align-items: stretch;
  }
  .sol-filter-tabs {
    overflow-x: auto;
    flex-wrap: nowrap;
    padding-bottom: 8px;
  }
  .sol-search-box {
    min-width: 100%;
    max-width: 100%;
  }
  .sol-workflow-track {
    grid-template-columns: 1fr;
    gap: 14px;
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
                    <div class="sol-badge">
                        <span class="sol-badge-dot"></span>
                        <span>Tailored Food Business Solutions</span>
                    </div>

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
                        <a href="{{ route('contact.us') }}" class="sol-btn sol-btn-secondary">
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
                <div class="sol-badge">
                    <span class="sol-badge-dot"></span>
                    <span>15 Tailored Business Profiles</span>
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
         4. WORKFLOW – ONE CONNECTED WORKFLOW (MERGED PIPELINE & ENGINE)
         ======================================================================== --}}
    <section class="sol-workflow-sec">
        <div class="sol-container">
            <div class="sol-sec-header">
                <div class="sol-badge">
                    <span class="sol-badge-dot"></span>
                    <span>Synchronized Operations</span>
                </div>
                <h2 class="sol-sec-title">One Connected Workflow. Complete Business Control.</h2>
                <p class="sol-sec-desc">
                    Eliminate communication gaps between your front-of-house, kitchen prep lines, and management reporting with a real-time connected engine.
                </p>
            </div>


            {{-- 6 Step Connected Workflow Pipeline --}}
            <div class="sol-workflow-track" id="workflowTrack">
                {{-- 1. MENU --}}
                <div class="sol-wf-step">
                    <span class="sol-wf-step-num">01</span>
                    <div class="sol-wf-icon">📋</div>
                    <h3 class="sol-wf-title">MENU</h3>
                    <p class="sol-wf-desc" id="wfStep1">QR digital menus &amp; dynamic price updates</p>
                    <div class="sol-wf-connector">&rarr;</div>
                </div>

                {{-- 2. ORDER --}}
                <div class="sol-wf-step">
                    <span class="sol-wf-step-num">02</span>
                    <div class="sol-wf-icon">📱</div>
                    <h3 class="sol-wf-title">ORDER</h3>
                    <p class="sol-wf-desc" id="wfStep2">Captain tablet app or express counter punch</p>
                    <div class="sol-wf-connector">&rarr;</div>
                </div>

                {{-- 3. KOT --}}
                <div class="sol-wf-step">
                    <span class="sol-wf-step-num">03</span>
                    <div class="sol-wf-icon">🖨️</div>
                    <h3 class="sol-wf-title">KOT</h3>
                    <p class="sol-wf-desc" id="wfStep3">Instant thermal ticket to designated station</p>
                    <div class="sol-wf-connector">&rarr;</div>
                </div>

                {{-- 4. KITCHEN --}}
                <div class="sol-wf-step">
                    <span class="sol-wf-step-num">04</span>
                    <div class="sol-wf-icon">👨‍🍳</div>
                    <h3 class="sol-wf-title">KITCHEN</h3>
                    <p class="sol-wf-desc" id="wfStep4">Live KDS monitor with cook timer alerts</p>
                    <div class="sol-wf-connector">&rarr;</div>
                </div>

                {{-- 5. POS --}}
                <div class="sol-wf-step">
                    <span class="sol-wf-step-num">05</span>
                    <div class="sol-wf-icon">💳</div>
                    <h3 class="sol-wf-title">POS</h3>
                    <p class="sol-wf-desc" id="wfStep5">Split billing, UPI/cards &amp; auto tax receipts</p>
                    <div class="sol-wf-connector">&rarr;</div>
                </div>

                {{-- 6. REPORTS --}}
                <div class="sol-wf-step">
                    <span class="sol-wf-step-num">06</span>
                    <div class="sol-wf-icon">📊</div>
                    <h3 class="sol-wf-title">REPORTS</h3>
                    <p class="sol-wf-desc" id="wfStep6">Live sales, food costing &amp; profit analytics</p>
                </div>
            </div>
        </div>
    </section>

    {{-- ========================================================================
         5. FIT & CAPABILITIES (SIMPLIFIED MODERN COMPARISON INTERFACE)
         ======================================================================== --}}
    <section class="sol-compare-sec">
        <div class="sol-container">
            <div class="sol-sec-header">
                <div class="sol-badge">
                    <span class="sol-badge-dot"></span>
                    <span>Operational Comparison</span>
                </div>
                <h2 class="sol-sec-title">Fit &amp; Capabilities Matrix</h2>
                <p class="sol-sec-desc">
                    Compare key operations, ideal business sizes, and core modules across all 15 food business formats.
                </p>
            </div>

            <div class="sol-comp-box">
                <table class="sol-comp-table">
                    <thead>
                        <tr>
                            <th style="width: 28%;">Business Type</th>
                            <th style="width: 32%;">Best For</th>
                            <th style="width: 40%;">Key Operations &amp; Modules</th>
                        </tr>
                    </thead>
                    <tbody id="compareTableBody">
                        <tr>
                            <td class="sol-comp-name">Family Restaurant <span class="sol-comp-badge">Dine-in</span></td>
                            <td>Casual &amp; family dining establishments</td>
                            <td>Tables, Captain App, Course KOT, Split POS, Loyalty CRM, Inventory</td>
                        </tr>
                        <tr>
                            <td class="sol-comp-name">Dine-in Restaurant <span class="sol-comp-badge">Dine-in</span></td>
                            <td>Full table-service dining with QR options</td>
                            <td>Floor Plan Layout, Digital Menu, Live KOT, Multi-Terminal POS, Shift Audits</td>
                        </tr>
                        <tr>
                            <td class="sol-comp-name">Fine Dining <span class="sol-comp-badge">Hospitality</span></td>
                            <td>Luxury service, reservations &amp; multi-course dining</td>
                            <td>Table Allocation, VIP Notes, Course Firing, Sommelier Bar, Discreet Billing</td>
                        </tr>
                        <tr>
                            <td class="sol-comp-name">Multi-Cuisine Restaurant <span class="sol-comp-badge">Dine-in</span></td>
                            <td>Extensive multi-category kitchens</td>
                            <td>Multi-Station KOT Routing, Chef Timers, Shared Inventory, Consolidated Bill</td>
                        </tr>
                        <tr>
                            <td class="sol-comp-name">Quick Service (QSR) <span class="sol-comp-badge">Express</span></td>
                            <td>Fast-paced counter orders &amp; rush hours</td>
                            <td>3-Second Billing, Token Screen Call, Combos, Barcode Scan, Cashier Reconciliation</td>
                        </tr>
                        <tr>
                            <td class="sol-comp-name">Takeaway Restaurant <span class="sol-comp-badge">Express</span></td>
                            <td>Pickup counters &amp; parcel-focused orders</td>
                            <td>Parcel Bag Labels, Automated Ready SMS, Phone Hold Queue, Packaging Stock</td>
                        </tr>
                        <tr>
                            <td class="sol-comp-name">College Canteen <span class="sol-comp-badge">Canteens</span></td>
                            <td>High-speed campus crowds &amp; break rushes</td>
                            <td>Prepaid Student Wallets, RFID Cards, Multi-Counter Tokens, Bulk Audits</td>
                        </tr>
                        <tr>
                            <td class="sol-comp-name">Office Canteen <span class="sol-comp-badge">Canteens</span></td>
                            <td>Corporate cafeterias &amp; lunch rushes</td>
                            <td>Employee Badge RFID, Corporate Subsidy Engine, Monthly HR Statements</td>
                        </tr>
                        <tr>
                            <td class="sol-comp-name">Sweet Shop <span class="sol-comp-badge">Specialty</span></td>
                            <td>Mithai, snacks &amp; variable gram pricing</td>
                            <td>Tare-Calibrated Weight Scales, Gift Box Pricing, Festival Pre-Orders, Expiry Codes</td>
                        </tr>
                        <tr>
                            <td class="sol-comp-name">Bakeries &amp; Cake Shops <span class="sol-comp-badge">Specialty</span></td>
                            <td>Bakery counters &amp; custom cake orders</td>
                            <td>Custom Cake Advance Booking, Weight Sync, Pre-Pack Barcodes, Oven Batches</td>
                        </tr>
                        <tr>
                            <td class="sol-comp-name">Juice &amp; Snack Shops <span class="sol-comp-badge">Specialty</span></td>
                            <td>Quick refreshment counters &amp; kiosks</td>
                            <td>Sugar/Ice Modifiers, Quick-Tap POS, Instant QR UPI, Fruit Wastage Tracking</td>
                        </tr>
                        <tr>
                            <td class="sol-comp-name">Bars &amp; Breweries <span class="sol-comp-badge">Hospitality</span></td>
                            <td>Lounges, taprooms &amp; drink service</td>
                            <td>Open Bar Tabs, Draft Keg Depletion, Liquor Excise Register, Pour Audits</td>
                        </tr>
                        <tr>
                            <td class="sol-comp-name">Pizzerias &amp; Specialty Food <span class="sol-comp-badge">Specialty</span></td>
                            <td>Custom crusts, half-toppings &amp; combos</td>
                            <td>Half-and-Half Customizer, Crust Upsells, Oven Timers, Dough Batch Tracking</td>
                        </tr>
                        <tr>
                            <td class="sol-comp-name">Multi-Branch Chains <span class="sol-comp-badge">Enterprise</span></td>
                            <td>Regional restaurant chains &amp; franchises</td>
                            <td>Central Menu Push, Inter-Outlet Transfers, Role Permissions, Consolidated P&amp;L</td>
                        </tr>
                        <tr>
                            <td class="sol-comp-name">Cloud Kitchens <span class="sol-comp-badge">Enterprise</span></td>
                            <td>Delivery-first multi-brand virtual kitchens</td>
                            <td>Aggregator Auto-Accept, Brand Menu Switching, Central Pantry, Rider Handoff</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </section>

    {{-- ========================================================================
         6. START, GROW & SCALE – KEEP (3 GROWTH STAGES)
         ======================================================================== --}}
    <section class="sol-scale-sec">
        <div class="sol-container">
            <div class="sol-sec-header">
                <div class="sol-badge">
                    <span class="sol-badge-dot"></span>
                    <span>Growth Pathways</span>
                </div>
                <h2 class="sol-sec-title">Start Small. Grow. Scale.</h2>
                <p class="sol-sec-desc">
                    Choose the operational tier tailored to your present volume and upgrade seamlessly as your food brand expands.
                </p>
            </div>

            <div class="sol-scale-grid">
                {{-- 1. START --}}
                <div class="sol-scale-card">
                    <div>
                        <h3 class="sol-scale-tier">START</h3>
                        <div class="sol-scale-subtitle">Single Outlet Businesses</div>
                        <p class="sol-scale-desc">
                            Ideal for standalone cafes, food trucks, takeaway counters, and new restaurant launches.
                        </p>
                        <ul class="sol-scale-checklist">
                            <li><svg viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>Fast Counter POS &amp; Billing</li>
                            <li><svg viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>QR Code Digital Menu</li>
                            <li><svg viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>Thermal KOT Printing</li>
                            <li><svg viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>Daily Sales &amp; Cash Summary</li>
                        </ul>
                    </div>
                    <a href="{{ route('pricing') }}" class="sol-btn sol-btn-secondary" style="width: 100%;">
                        Start Single Outlet &rarr;
                    </a>
                </div>

                {{-- 2. GROW (Featured) --}}
                <div class="sol-scale-card sol-scale-featured">
                    <span class="sol-scale-badge">Most Popular</span>
                    <div>
                        <h3 class="sol-scale-tier">GROW</h3>
                        <div class="sol-scale-subtitle">Growing Food Businesses</div>
                        <p class="sol-scale-desc">
                            Designed for high-traffic dine-in restaurants, popular bakeries, and busy QSR food points.
                        </p>
                        <ul class="sol-scale-checklist">
                            <li><svg viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>Everything in Start</li>
                            <li><svg viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>Live Table Floor Plan &amp; Captain App</li>
                            <li><svg viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>Recipe Costing &amp; Wastage Tracking</li>
                            <li><svg viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>Customer CRM &amp; Re-order SMS</li>
                            <li><svg viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>Kitchen Display System (KDS)</li>
                        </ul>
                    </div>
                    <a href="{{ route('contact.us') }}" class="sol-btn sol-btn-primary" style="width: 100%;">
                        Grow Your Restaurant &rarr;
                    </a>
                </div>

                {{-- 3. SCALE --}}
                <div class="sol-scale-card">
                    <div>
                        <h3 class="sol-scale-tier">SCALE</h3>
                        <div class="sol-scale-subtitle">Multi-Location Groups</div>
                        <p class="sol-scale-desc">
                            Tailored for regional restaurant chains, multi-brand cloud kitchens, and franchise groups.
                        </p>
                        <ul class="sol-scale-checklist">
                            <li><svg viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>Everything in Grow</li>
                            <li><svg viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>Centralized Menu &amp; Price Push</li>
                            <li><svg viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>Inter-Outlet Warehouse Transfers</li>
                            <li><svg viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>Consolidated Multi-Outlet P&amp;L</li>
                        </ul>
                    </div>
                    <a href="{{ route('contact.us') }}" class="sol-btn sol-btn-secondary" style="width: 100%;">
                        Scale With Enterprise &rarr;
                    </a>
                </div>
            </div>
        </div>
    </section>

    {{-- ========================================================================
         7. GENI MENU ADVANTAGE (4 BENEFIT CARDS)
         ======================================================================== --}}
    <section class="sol-why-sec">
        <div class="sol-container">
            <div class="sol-sec-header">
                <div class="sol-badge">
                    <span class="sol-badge-dot"></span>
                    <span>The Platform Advantage</span>
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
         9. FAQ SECTION (ALL 6 QUESTIONS IN ACCORDION)
         ======================================================================== --}}
    <section class="sol-faq-sec" id="faq">
        <div class="sol-container">
            <div class="sol-sec-header">
                <div class="sol-badge">
                    <span class="sol-badge-dot"></span>
                    <span>Common Questions</span>
                </div>
                <h2 class="sol-sec-title">Frequently Asked Questions</h2>
                <p class="sol-sec-desc">
                    Clear answers to help you choose the best configuration for your business.
                </p>
            </div>

            <div class="sol-faq-wrap">
                {{-- FAQ 1 --}}
                <div class="sol-faq-item is-open">
                    <button type="button" class="sol-faq-btn" onclick="toggleFaq(this)">
                        <h3 class="sol-faq-q">Can Geni Menu support different types of food businesses?</h3>
                        <span class="sol-faq-icon">+</span>
                    </button>
                    <div class="sol-faq-ans" style="display: block;">
                        Yes. Geni Menu provides tailored solutions for family restaurants, dine-in, fine dining, QSR, takeaway, canteens, bakeries, sweet shops, juice corners, pizzerias, bars, cloud kitchens, and multi-branch chains.
                    </div>
                </div>

                {{-- FAQ 2 --}}
                <div class="sol-faq-item">
                    <button type="button" class="sol-faq-btn" onclick="toggleFaq(this)">
                        <h3 class="sol-faq-q">Which solution is right for my restaurant?</h3>
                        <span class="sol-faq-icon">+</span>
                    </button>
                    <div class="sol-faq-ans">
                        Choose the solution closest to your business model or contact our solutions specialist team to review your floor layout, counter setup, and operational requirements.
                    </div>
                </div>

                {{-- FAQ 3 --}}
                <div class="sol-faq-item">
                    <button type="button" class="sol-faq-btn" onclick="toggleFaq(this)">
                        <h3 class="sol-faq-q">Can I change or upgrade my solution later?</h3>
                        <span class="sol-faq-icon">+</span>
                    </button>
                    <div class="sol-faq-ans">
                        Yes. Your setup can seamlessly evolve as your business requirements change. You can enable additional features like inventory control, multiple kitchen routing, or multi-branch management at any time.
                    </div>
                </div>

                {{-- FAQ 4 --}}
                <div class="sol-faq-item">
                    <button type="button" class="sol-faq-btn" onclick="toggleFaq(this)">
                        <h3 class="sol-faq-q">Can a single platform manage multiple branches?</h3>
                        <span class="sol-faq-icon">+</span>
                    </button>
                    <div class="sol-faq-ans">
                        Yes. Multi-branch capabilities with centralized head-office reporting, outlet switching, and branch-level inventory are available in applicable plans and configurations.
                    </div>
                </div>

                {{-- FAQ 5 --}}
                <div class="sol-faq-item">
                    <button type="button" class="sol-faq-btn" onclick="toggleFaq(this)">
                        <h3 class="sol-faq-q">Can I use the same features across different business types?</h3>
                        <span class="sol-faq-icon">+</span>
                    </button>
                    <div class="sol-faq-ans">
                        Core features like billing, menu, and reports can overlap, but the recommended setup and workflows (e.g., table reservation vs. quick token counter) are customized based on the business model.
                    </div>
                </div>

                {{-- FAQ 6 --}}
                <div class="sol-faq-item">
                    <button type="button" class="sol-faq-btn" onclick="toggleFaq(this)">
                        <h3 class="sol-faq-q">Do all solutions include the same features?</h3>
                        <span class="sol-faq-icon">+</span>
                    </button>
                    <div class="sol-faq-ans">
                        No. Features and modules vary according to your operational business configuration and selected subscription plan (Standard, Premium, or Enterprise).
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- ========================================================================
         10. FINAL CTA BANNER – KEEP
         ======================================================================== --}}
    <section class="sol-cta-sec">
        <div class="sol-container">
            <div class="sol-cta-card-inner">
                <div class="sol-badge" style="background: rgba(242, 197, 141, 0.12); color: #F2C58D; border-color: rgba(242, 197, 141, 0.35);">
                    <span class="sol-badge-dot" style="background-color: #F2C58D;"></span>
                    <span>Ready To Upgrade?</span>
                </div>
                <h2 class="sol-cta-title">Find the Geni Menu Solution Built for Your Business.</h2>
                <p class="sol-cta-desc">
                    Manage your food business smarter with one connected platform.
                </p>
                <div class="sol-cta-btns">
                    <a href="#explore-business" class="sol-btn sol-cta-btn-gold">
                        Explore Your Solution &darr;
                    </a>
                    <a href="{{ route('contact.us') }}" class="sol-btn sol-cta-btn-light">
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
            <div style="display: flex; gap: 12px; flex-wrap: wrap;">
                <a href="{{ route('contact.us') }}" class="sol-btn sol-btn-primary" style="flex: 1; text-align: center;">
                    Book a Free Demo for This Solution &rarr;
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
    if (btn) btn.classList.add('is-active');

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


// FAQ Accordion
function toggleFaq(btn) {
    const item = btn.closest('.sol-faq-item');
    const ans = item.querySelector('.sol-faq-ans');
    const isOpen = item.classList.contains('is-open');

    // Close other FAQ items
    document.querySelectorAll('.sol-faq-item').forEach(el => {
        el.classList.remove('is-open');
        const a = el.querySelector('.sol-faq-ans');
        if (a) a.style.display = 'none';
    });

    if (!isOpen) {
        item.classList.add('is-open');
        if (ans) ans.style.display = 'block';
    }
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
