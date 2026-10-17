@php
    $meta = [
        'title' => 'Features Overview | Geni Menu Restaurant Operations Platform',
        'description' => 'Explore the complete Geni Menu feature suite: POS billing, kitchen KOT, table & reservation management, inventory tracking, staff controls, multi-branch, and real-time reports.',
        'keywords' => 'restaurant ERP features, restaurant POS features, KOT software, kitchen order ticket software, table management software, reservation management software, restaurant inventory software, restaurant staff management software, multi-branch restaurant software, kiosk ordering software, restaurant CRM features, restaurant reporting software, QR code menu ordering, restaurant billing features list, restaurant software modules, Geni Menu features, Geni Menu KOT system, Geni Menu inventory management, restaurant software feature list India',
    ];
@endphp

@extends('layouts.frontend-master')

@section('content')

{{-- Google Fonts --}}
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@500;600;700;800&family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">

{{-- AOS Animation Library --}}
<link href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" rel="stylesheet">

<style>
  :root {
    --br: #B45309;
    --br-dark: #92400E;
    --br-light: #FEF3C7;
    --br-faint: #FFFBEB;
    --cream: #FFFFFF;
    --cream-deep: #F6F9FC;
    --ink: #0A2540;
    --ink-soft: #425466;
    --ink-faint: #627D98;
    --gold: #D97706;
    --gold-soft: #FDE68A;
    --gold-deep: #B45309;
    --brown: #1A365D;
    --line: #E3E8EE;
    --white: #FFFFFF;
    --green: #10B981;
    --green-light: #DEF7EC;
    --amber: #B45309;
    --amber-light: #FEF3C7;
    --blue: #1D4ED8;
    --blue-light: #DBEAFE;
    --purple: #6D28D9;
    --purple-light: #EDE9FE;
    --shadow-sm: 0 2px 4px rgba(50, 50, 93, 0.05), 0 1px 3px rgba(0, 0, 0, 0.04);
    --shadow-md: 0 6px 12px -2px rgba(50, 50, 93, 0.08), 0 3px 7px -3px rgba(0, 0, 0, 0.07);
    --shadow-lg: 0 13px 27px -5px rgba(50, 50, 93, 0.12), 0 8px 16px -8px rgba(0, 0, 0, 0.15);
    --max: 1200px;
  }

  * { box-sizing: border-box; }
  ::selection { background: #0A2540; color: #FFFFFF; }

  html {
    overflow-x: clip !important;
    overflow-y: auto !important;
  }

  body {
    overflow-x: clip !important;
    overflow-y: visible !important;
    min-height: 100vh;
  }

  body, html, #main-content, main, .ft-page {
    background: #FFFFFF !important;
  }

  #main-content, main {
    height: auto !important;
    overflow: visible !important;
  }

  .ft-page {
    background: #FFFFFF !important;
    color: var(--ink);
    font-family: 'Inter', system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
    font-size: 16px;
    line-height: 1.65;
    overflow: visible !important;
    overflow-x: clip !important;
  }

  .ft-page,
  .ft-page * {
    font-style: normal !important;
  }

  /* Typography - Matching Home Page */
  .ft-page h1 {
    font-family: 'Plus Jakarta Sans', -apple-system, BlinkMacSystemFont, 'Segoe UI', sans-serif;
    font-size: clamp(40px, 5vw, 66px);
    font-weight: 800;
    letter-spacing: -0.035em;
    line-height: 1.08;
    color: #0A2540;
    margin: 0;
  }

  .ft-page h2 {
    font-family: Effra, sans-serif;
    font-size: 2.5rem;
    font-weight: 400;
    letter-spacing: normal;
    line-height: 1.12;
    color: #0A2540;
    margin: 0;
  }

  .ft-page h3, .ft-page h4, .ft-page h5, .ft-page h6 {
    font-family: Effra, sans-serif;
    color: #0A2540;
    margin: 0;
  }

  .ft-page h3 {
    font-size: 20px;
    font-weight: 700;
    letter-spacing: -0.02em;
  }

  .ft-page p {
    color: #425466;
    margin: 0;
    font-size: 16px;
    font-family: 'Inter', system-ui, sans-serif;
    line-height: 1.65;
    letter-spacing: -0.01em;
  }

  .w {
    max-width: var(--max);
    margin: 0 auto;
    padding: 0 24px;
    width: 100%;
  }

  .section {
    padding: 85px 0;
    position: relative;
    background: #FFFFFF !important;
    border: none !important;
    border-top: none !important;
    border-bottom: none !important;
  }

  .section.alt {
    background: #FFFFFF !important;
    border: none !important;
    border-top: none !important;
    border-bottom: none !important;
  }

  .section.dark {
    background: #FFFFFF !important;
    color: var(--ink);
    border: none !important;
    border-top: none !important;
    border-bottom: none !important;
  }
  .section.dark h2, .section.dark h3, .section.dark h4 { color: var(--ink); }
  .section.dark p { color: var(--ink-soft); }

  /* Eyebrows & Headers */
  .sec-eyebrow {
    display: inline-flex;
    align-items: center;
    gap: 7px;
    font-size: 11.5px;
    font-weight: 700;
    letter-spacing: 0.1em;
    text-transform: uppercase;
    color: #B45309;
    background: #FEF3C7;
    border: 1px solid rgba(217,119,6,0.25);
    box-shadow: 0 1px 3px rgba(50,50,93,0.05);
    padding: 6px 14px;
    border-radius: 9999px;
    margin-bottom: 16px;
    font-family: 'Plus Jakarta Sans', sans-serif;
  }

  /* Icon Box for Operational Difference */
  .f-icon-box {
    width: 48px;
    height: 48px;
    border-radius: 12px;
    display: inline-flex;
    align-items: center;
    justify-content: center;
    flex-shrink: 0;
  }
  .f-icon-box svg {
    width: 24px;
    height: 24px;
    stroke: currentColor;
    stroke-width: 2;
    fill: none;
    display: block;
  }
  .f-icon-box.br { background: #FEF3C7; color: #B45309; }
  .f-icon-box.gr { background: #DEF7EC; color: #10B981; }
  .f-icon-box.am { background: #FFEDD5; color: #EA580C; }

  .sec-header {
    text-align: center;
    max-width: 780px;
    margin: 0 auto 56px;
  }

  .sec-header h2 {
    font-family: Effra, sans-serif;
    font-size: 2.5rem;
    font-weight: 400;
    letter-spacing: normal;
    line-height: 1.12;
    margin-bottom: 16px;
    color: #0A2540;
  }

  .sec-header p {
    font-size: 18px;
    line-height: 1.6;
    color: #425466;
    font-family: 'Inter', sans-serif;
  }

  /* Buttons */
  .btn {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    gap: 8px;
    padding: 13px 26px;
    border-radius: 12px;
    font: 700 15px 'Plus Jakarta Sans', sans-serif;
    text-decoration: none;
    transition: all 0.2s cubic-bezier(0.16, 1, 0.3, 1);
    cursor: pointer;
    border: 1px solid transparent;
  }

  .btn.p {
    background: #0A2540;
    color: #fff !important;
    border-color: #0A2540;
    box-shadow: 0 4px 12px rgba(10,37,64,0.2);
  }
  .btn.p:hover {
    background: #1A365D;
    border-color: #1A365D;
    transform: translateY(-2px);
    box-shadow: 0 8px 20px rgba(10,37,64,0.28);
  }

  .btn.o {
    background: #fff;
    color: var(--ink);
    border: 1px solid #CBD5E1;
    box-shadow: 0 1px 3px rgba(50,50,93,0.05);
  }
  .btn.o:hover {
    background: #F6F9FC;
    border-color: #0A2540;
    color: var(--ink);
    transform: translateY(-2px);
  }

  /* ===================== HERO SECTION (TOAST-STYLE SAAS STRUCTURE) ===================== */
  .ft-hero {
    padding: 70px 0 65px;
    background: #FFFFFF !important;
    position: relative;
    overflow: visible;
  }

  .ft-hero-grid {
    display: grid;
    grid-template-columns: 1.05fr 1fr;
    gap: 52px;
    align-items: center;
  }

  /* Left Column Typography */
  .hero-eyebrow-badge {
    display: inline-block;
    padding: 5px 14px;
    background: #FFF7ED;
    border: 1px solid rgba(234, 88, 12, 0.22);
    border-radius: 999px;
    font-size: 11px;
    font-weight: 700;
    letter-spacing: 0.1em;
    text-transform: uppercase;
    color: #EA580C;
    margin-bottom: 22px;
    font-family: 'Plus Jakarta Sans', system-ui, sans-serif;
  }

  .hero-headline {
    font-family: 'Plus Jakarta Sans', system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
    font-size: clamp(40px, 5vw, 66px);
    font-weight: 800;
    line-height: 1.08;
    letter-spacing: -0.035em;
    color: #0A2540;
    margin: 0 0 20px;
  }

  .hero-script-word {
    font-family: inherit;
    font-size: 1em;
    font-weight: 800;
    font-style: normal !important;
    color: #EA580C;
    display: inline;
    transform: none !important;
    margin-left: 0;
    letter-spacing: -0.035em;
    line-height: inherit;
  }

  .hero-lead-text {
    font-family: 'Inter', system-ui, -apple-system, sans-serif;
    font-size: 18px;
    line-height: 1.6;
    color: #425466;
    margin: 0 0 32px;
    max-width: 490px;
  }

  .hero-actions-row {
    display: flex;
    align-items: center;
    gap: 14px;
    flex-wrap: wrap;
    margin-bottom: 20px;
  }

  .hero-btn-solid {
    background: #EA580C;
    color: #FFFFFF !important;
    font-family: 'Plus Jakarta Sans', sans-serif;
    font-size: 15px;
    font-weight: 700;
    padding: 13px 30px;
    border-radius: 999px;
    border: none;
    cursor: pointer;
    text-decoration: none;
    box-shadow: 0 4px 14px rgba(234, 88, 12, 0.28);
    transition: all 0.2s cubic-bezier(0.16, 1, 0.3, 1);
    display: inline-flex;
    align-items: center;
    justify-content: center;
  }

  .hero-btn-solid:hover {
    background: #C2410C;
    transform: translateY(-2px);
    box-shadow: 0 8px 22px rgba(234, 88, 12, 0.38);
    color: #FFFFFF !important;
  }

  .hero-btn-outline {
    background: #FFFFFF;
    color: #EA580C !important;
    font-family: 'Plus Jakarta Sans', sans-serif;
    font-size: 15px;
    font-weight: 700;
    padding: 12px 28px;
    border-radius: 999px;
    border: 1.5px solid #EA580C;
    cursor: pointer;
    text-decoration: none;
    transition: all 0.2s cubic-bezier(0.16, 1, 0.3, 1);
    display: inline-flex;
    align-items: center;
    justify-content: center;
  }

  .hero-btn-outline:hover {
    background: #FFF7ED;
    border-color: #C2410C;
    color: #C2410C !important;
    transform: translateY(-2px);
  }

  .hero-starter-link {
    font-family: 'Inter', system-ui, sans-serif;
    font-size: 13.5px;
    color: #4B5563;
  }

  .hero-starter-link a {
    color: #EA580C;
    text-decoration: none;
    font-weight: 600;
    margin-left: 2px;
    transition: color 0.15s;
  }

  .hero-starter-link a:hover {
    color: #C2410C;
    text-decoration: underline;
  }

  /* Right Column Visual Composition */
  .hero-visual-col {
    position: relative;
    display: flex;
    justify-content: flex-end;
    align-items: center;
  }

  .hero-composition-stage {
    position: relative;
    width: 100%;
    max-width: 480px;
  }

  .hero-photo-frame {
    width: 100%;
    border-radius: 22px;
    overflow: hidden;
    box-shadow: 0 20px 48px -12px rgba(10, 37, 64, 0.16);
    border: 1px solid rgba(0, 0, 0, 0.06);
    background: #FFFFFF;
    aspect-ratio: 4 / 3.4;
  }

  .hero-barista-photo {
    width: 100%;
    height: 100%;
    object-fit: cover;
    display: block;
  }

  /* Floating Card overlapping left side of photo */
  .hero-floating-modifier-card {
    position: absolute;
    top: 20px;
    left: -76px;
    width: 255px;
    background: #FFFFFF;
    border-radius: 16px;
    box-shadow: 0 24px 50px -10px rgba(0, 0, 0, 0.22), 0 8px 18px -4px rgba(0, 0, 0, 0.08);
    border: 1px solid rgba(0, 0, 0, 0.08);
    padding: 12px 14px 16px;
    z-index: 10;
    transition: transform 0.3s cubic-bezier(0.16, 1, 0.3, 1);
  }

  .hero-floating-modifier-card:hover {
    transform: translateY(-4px);
  }

  .mod-card-header {
    display: flex;
    align-items: center;
    justify-content: space-between;
    margin-bottom: 8px;
  }

  .mod-card-close {
    background: none;
    border: none;
    color: #EA580C;
    font-size: 18px;
    line-height: 1;
    cursor: pointer;
    padding: 0;
    font-weight: 500;
  }

  .mod-card-title {
    font-family: 'Plus Jakarta Sans', sans-serif;
    font-size: 13px;
    font-weight: 700;
    color: #111827;
    margin: 0;
    text-align: center;
  }

  .mod-card-img-wrap {
    width: 100%;
    height: 120px;
    border-radius: 10px;
    overflow: hidden;
    margin-bottom: 10px;
    background: #FFFFFF;
  }

  .mod-card-img-wrap img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    display: block;
  }

  .mod-card-desc {
    font-family: 'Inter', system-ui, sans-serif;
    font-size: 11px;
    line-height: 1.45;
    color: #64748B;
    margin: 0 0 12px;
  }

  .mod-card-section-row {
    display: flex;
    align-items: flex-start;
    justify-content: space-between;
    margin-bottom: 8px;
    padding-top: 8px;
    border-top: 1px solid #F1F5F9;
  }

  .mod-card-label-group {
    display: flex;
    flex-direction: column;
  }

  .mod-card-label {
    font-family: 'Plus Jakarta Sans', sans-serif;
    font-size: 11.5px;
    font-weight: 700;
    color: #1E293B;
    line-height: 1.2;
  }

  .mod-card-sublabel {
    font-size: 10px;
    color: #94A3B8;
    font-family: 'Inter', system-ui, sans-serif;
  }

  .mod-card-required-badge {
    font-family: 'Plus Jakarta Sans', sans-serif;
    font-size: 8.5px;
    font-weight: 800;
    letter-spacing: 0.06em;
    background: #F1F5F9;
    color: #475569;
    padding: 3px 6px;
    border-radius: 4px;
  }

  .mod-card-options {
    display: flex;
    flex-direction: column;
    gap: 6px;
  }

  .mod-option-item {
    display: flex;
    align-items: center;
    gap: 8px;
    cursor: pointer;
    padding: 2px 0;
    user-select: none;
  }

  .mod-radio-dot {
    width: 13px;
    height: 13px;
    border-radius: 50%;
    border: 1.5px solid #CBD5E1;
    display: flex;
    align-items: center;
    justify-content: center;
    flex-shrink: 0;
    transition: all 0.15s ease;
  }

  .mod-option-item.selected .mod-radio-dot {
    border-color: #EA580C;
  }

  .mod-radio-inner {
    width: 7px;
    height: 7px;
    border-radius: 50%;
    background: #EA580C;
  }

  .mod-option-name {
    font-family: 'Inter', system-ui, sans-serif;
    font-size: 11.5px;
    color: #334155;
    font-weight: 500;
    flex: 1;
  }

  .mod-option-item.selected .mod-option-name {
    color: #0F172A;
    font-weight: 600;
  }

  .mod-option-price {
    font-family: 'Inter', system-ui, sans-serif;
    font-size: 11px;
    color: #64748B;
    font-weight: 500;
  }

  /* Orange Curved Arrow (Short & Compact) */
  .hero-arrow-container {
    position: absolute;
    left: 42px;
    bottom: -28px;
    width: 88px;
    height: 72px;
    z-index: 15;
    pointer-events: none;
  }

  .hero-drawn-arrow {
    width: 100%;
    height: 100%;
    filter: drop-shadow(0 2px 4px rgba(234, 88, 12, 0.2));
  }

  @media (max-width: 992px) {
    .ft-hero-grid {
      grid-template-columns: 1fr;
      gap: 50px;
    }
    .hero-visual-col {
      justify-content: center;
    }
    .hero-composition-stage {
      max-width: 440px;
      margin: 0 auto;
    }
    .hero-floating-modifier-card {
      left: -20px;
      width: 230px;
    }
  }

  @media (max-width: 580px) {
    .hero-floating-modifier-card {
      left: 0;
      position: relative;
      top: 0;
      width: 100%;
      margin-top: -60px;
      box-shadow: 0 12px 30px rgba(0,0,0,0.14);
    }
    .hero-arrow-container {
      display: none;
    }
  }



  /* ===================== ECOSYSTEM FLOW ===================== */
  .eco-flow-card {
    background: #FFFFFF !important;
    border-radius: 20px;
    padding: 36px 28px;
    border: 1px solid var(--line);
    box-shadow: var(--shadow-sm);
    margin-bottom: 40px;
  }

  .eco-flow-spine {
    display: flex;
    align-items: center;
    justify-content: space-between;
    gap: 10px;
    flex-wrap: wrap;
    margin-bottom: 28px;
  }

  .eco-flow-node {
    flex: 1;
    min-width: 140px;
    background: #FFFFFF !important;
    border: 1.5px solid var(--line);
    border-radius: 12px;
    padding: 16px 12px;
    text-align: center;
    transition: all 0.25s ease;
  }
  .eco-flow-node:hover {
    background: #FFF7ED !important;
    border-color: #EA580C;
    transform: translateY(-2px);
  }
  .eco-flow-icon {
    width: 36px;
    height: 36px;
    border-radius: 8px;
    background: #FFF7ED;
    color: #EA580C;
    display: grid;
    place-items: center;
    margin: 0 auto 8px;
    box-shadow: var(--shadow-sm);
  }
  .eco-flow-icon svg { width: 18px; height: 18px; stroke: currentColor; fill: none; stroke-width: 2; }
  .eco-flow-name { font-weight: 600; font-size: 14px; color: var(--ink); }

  .eco-flow-arr {
    color: #EA580C;
    font-size: 18px;
    font-weight: 700;
  }

  .eco-satellites-row {
    display: flex;
    justify-content: center;
    gap: 12px;
    flex-wrap: wrap;
    padding-top: 20px;
    border-top: 1px solid #F0E8DF;
  }

  .eco-pill {
    background: #FFFFFF !important;
    border: 1px solid #E3E8EE;
    color: var(--brown);
    font-size: 13px;
    font-weight: 500;
    padding: 6px 14px;
    border-radius: 999px;
    display: inline-flex;
    align-items: center;
    gap: 6px;
  }

  /* ===================== TOAST-STYLE ALTERNATING FEATURE SHOWCASE ===================== */
  .toast-feature-list {
    display: flex;
    flex-direction: column;
    gap: 36px;
  }

  .toast-feature-row {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 60px;
    align-items: center;
    padding: 36px 0;
  }

  .toast-feature-row:not(:last-child) {
    border-bottom: none !important;
    padding-bottom: 36px;
  }

  .toast-feature-row.reverse .toast-feature-media {
    order: 2;
  }

  .toast-feature-row.reverse .toast-feature-content {
    order: 1;
  }

  /* Media Column & Framing */
  .toast-feature-media {
    position: relative;
    width: 100%;
  }

  .toast-img-frame {
    position: relative;
    width: 100%;
    border-radius: 22px;
    overflow: hidden;
    box-shadow: 0 16px 36px -8px rgba(10, 37, 64, 0.12), 0 4px 12px rgba(0, 0, 0, 0.04);
    border: 1px solid rgba(0, 0, 0, 0.06);
    background: #FFFFFF;
    aspect-ratio: 16 / 10.5;
  }

  .toast-img-frame img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    display: block;
    transition: transform 0.4s ease;
  }

  .toast-img-frame:hover img {
    transform: scale(1.025);
  }

  .toast-media-badge {
    position: absolute;
    top: 14px;
    left: 14px;
    background: rgba(17, 24, 39, 0.85);
    backdrop-filter: blur(8px);
    color: #FFFFFF;
    font-size: 11px;
    font-weight: 700;
    letter-spacing: 0.08em;
    text-transform: uppercase;
    padding: 5px 12px;
    border-radius: 999px;
    border: 1px solid rgba(255, 255, 255, 0.18);
    z-index: 2;
  }

  /* Content Column */
  .toast-feature-content {
    display: flex;
    flex-direction: column;
  }

  .toast-feature-pill {
    display: inline-flex;
    align-items: center;
    gap: 6px;
    align-self: flex-start;
    font-size: 11px;
    font-weight: 700;
    letter-spacing: 0.08em;
    text-transform: uppercase;
    color: #EA580C;
    background: #FFF7ED;
    border: 1px solid rgba(234, 88, 12, 0.22);
    padding: 4px 12px;
    border-radius: 999px;
    margin-bottom: 12px;
    font-family: 'Plus Jakarta Sans', sans-serif;
  }

  .toast-feature-title {
    font-family: Effra, sans-serif !important;
    font-size: 24px !important;
    font-weight: 700 !important;
    color: #0A2540 !important;
    line-height: 1.25 !important;
    letter-spacing: -0.02em !important;
    margin: 0 0 12px !important;
  }

  .toast-feature-desc {
    font-family: 'Inter', system-ui, sans-serif !important;
    font-size: 16px !important;
    line-height: 1.65 !important;
    color: #425466 !important;
    margin: 0 0 20px !important;
    letter-spacing: -0.01em !important;
  }

  .toast-workflow-pill {
    background: #FFFFFF;
    border: 1px solid #E2E8F0;
    border-radius: 8px;
    padding: 8px 14px;
    font-size: 12.5px;
    font-weight: 600;
    color: #1E293B;
    margin-bottom: 18px;
    display: inline-flex;
    align-items: center;
    gap: 6px;
    align-self: flex-start;
  }
  .toast-workflow-pill strong {
    color: #EA580C;
  }

  .toast-check-list {
    list-style: none;
    padding: 0;
    margin: 0;
    display: flex;
    flex-direction: column;
    gap: 13px;
  }

  .toast-check-item {
    display: flex;
    align-items: flex-start;
    gap: 12px;
    font-size: 15px;
    line-height: 1.5;
    color: #374151;
    font-family: 'Inter', system-ui, sans-serif;
  }

  .toast-check-icon {
    width: 20px;
    height: 20px;
    border-radius: 50%;
    background: #EA580C;
    color: #FFFFFF;
    display: inline-flex;
    align-items: center;
    justify-content: center;
    flex-shrink: 0;
    margin-top: 2px;
    box-shadow: 0 2px 4px rgba(234, 88, 12, 0.25);
  }

  .toast-check-icon svg {
    width: 13px;
    height: 13px;
    fill: #FFFFFF;
  }

  @media (max-width: 992px) {
    .toast-feature-row,
    .toast-feature-row.reverse {
      grid-template-columns: 1fr;
      gap: 32px;
      padding: 28px 0;
    }
    .toast-feature-row.reverse .toast-feature-media {
      order: 1;
    }
    .toast-feature-row.reverse .toast-feature-content {
      order: 2;
    }
    .toast-img-frame {
      aspect-ratio: 16 / 10;
    }
  }

  /* ===================== FEATURE SHOWCASE CARDS ===================== */
  .ft-grid-2 {
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    gap: 32px;
  }

  .ft-grid-3 {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 28px;
  }

  .ft-grid-4 {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    gap: 20px;
  }

  .ft-card {
    background: #fff;
    border-radius: 18px;
    overflow: hidden;
    border: 1px solid var(--line);
    box-shadow: var(--shadow-sm);
    display: flex;
    flex-direction: column;
    transition: transform 0.25s ease, box-shadow 0.25s ease, border-color 0.25s ease;
  }

  .ft-card:hover {
    transform: translateY(-4px);
    box-shadow: var(--shadow-md);
    border-color: #CBD5E1;
  }

  .ft-card-media {
    position: relative;
    height: 200px;
    overflow: hidden;
    background: #231B15;
  }

  #sec-orders .ft-card-media,
  #sec-tables .ft-card-media,
  #sec-inventory .ft-card-media,
  #sec-staff .ft-card-media {
    height: 280px;
  }

  @media (max-width: 768px) {
    #sec-orders .ft-card-media,
    #sec-tables .ft-card-media,
    #sec-inventory .ft-card-media,
    #sec-staff .ft-card-media {
      height: 220px;
    }
  }

  .ft-card-media img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: transform 0.4s ease;
  }

  .ft-card:hover .ft-card-media img {
    transform: scale(1.04);
  }

  .ft-card-tag {
    position: absolute;
    top: 14px;
    left: 14px;
    background: rgba(33, 22, 15, 0.85);
    backdrop-filter: blur(6px);
    color: #fff;
    font-size: 11px;
    font-weight: 600;
    letter-spacing: 0.08em;
    text-transform: uppercase;
    padding: 4px 10px;
    border-radius: 6px;
    border: 1px solid rgba(255,255,255,0.15);
  }

  .ft-card-body {
    padding: 24px;
    display: flex;
    flex-direction: column;
    flex: 1;
  }

  .ft-card-title,
  .ft-page .ft-card-title {
    font-size: 21px !important;
    font-weight: 700 !important;
    line-height: 1.3 !important;
    margin: 0 0 12px 0 !important;
  }

  .ft-card-desc,
  .ft-page .ft-card-desc {
    font-size: 14.5px !important;
    color: var(--ink-soft) !important;
    line-height: 1.6 !important;
    margin: 0 0 22px 0 !important;
  }

  .ft-features-list {
    list-style: none;
    padding: 0;
    margin: 0 0 24px 0 !important;
    display: grid;
    grid-template-columns: 1fr;
    gap: 13px;
  }

  .ft-feature-item {
    font-size: 13.5px;
    color: var(--ink);
    display: flex;
    align-items: flex-start;
    gap: 10px;
    line-height: 1.5;
  }
  .ft-feature-item svg {
    width: 15px;
    height: 15px;
    stroke: var(--br);
    stroke-width: 2.5;
    fill: none;
    flex-shrink: 0;
    margin-top: 3px;
  }

  .ft-workflow-strip {
    background: #FFFFFF;
    border-radius: 8px;
    padding: 10px 14px;
    font-size: 12px;
    font-weight: 500;
    color: var(--brown);
    margin: 0 0 20px 0 !important;
    border: 1px solid #E3E8EE;
  }

  .ft-card-footer {
    margin-top: auto;
    padding-top: 16px;
    border-top: 1px solid #F0E9DF;
    display: flex;
    justify-content: space-between;
    align-items: center;
  }

  .ft-card-link {
    font-size: 14px;
    font-weight: 600;
    color: var(--br);
    text-decoration: none;
    display: inline-flex;
    align-items: center;
    gap: 6px;
    transition: gap 0.2s ease;
  }
  .ft-card-link:hover {
    color: var(--br-dark);
    gap: 10px;
  }

  /* ===================== FEATURE SEARCH & FILTER ===================== */
  .ft-search-box {
    background: #FFFFFF !important;
    border-radius: 18px;
    padding: 24px;
    box-shadow: var(--shadow-sm);
    border: 1px solid var(--line);
    margin-bottom: 48px;
  }

  .ft-search-field-wrap {
    position: relative;
    margin-bottom: 18px;
  }

  .ft-search-field-wrap svg {
    position: absolute;
    left: 16px;
    top: 50%;
    transform: translateY(-50%);
    width: 20px;
    height: 20px;
    stroke: var(--ink-faint);
    fill: none;
    stroke-width: 2;
    pointer-events: none;
  }

  .ft-search-input {
    width: 100%;
    padding: 14px 16px 14px 48px;
    border-radius: 10px;
    border: 1px solid var(--line);
    background: #FFFFFF !important;
    font-size: 15px;
    font-family: inherit;
    color: var(--ink);
    transition: all 0.2s ease;
  }
  .ft-search-input:focus {
    outline: none;
    border-color: #EA580C;
    background: #FFFFFF !important;
    box-shadow: 0 0 0 3px rgba(234, 88, 12, 0.15);
  }

  .ft-filter-chips {
    display: flex;
    gap: 8px;
    flex-wrap: wrap;
  }

  .ft-chip-btn {
    padding: 7px 16px;
    border-radius: 999px;
    border: 1px solid var(--line);
    background: #FFFFFF !important;
    color: var(--ink-soft);
    font-size: 13px;
    font-weight: 500;
    cursor: pointer;
    transition: all 0.2s ease;
  }
  .ft-chip-btn:hover {
    border-color: #EA580C;
    color: #EA580C;
    background: #FFF7ED !important;
  }
  .ft-chip-btn.active {
    background: #EA580C !important;
    color: #FFFFFF !important;
    border-color: #EA580C;
  }

  /* ===================== DIRECTORY SECTION ===================== */
  .ft-dir-grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 28px;
  }

  .ft-dir-group {
    background: #FFFFFF !important;
    border-radius: 16px;
    padding: 24px;
    border: 1px solid var(--line);
    box-shadow: var(--shadow-sm);
  }

  .ft-dir-group-title {
    font-size: 16px;
    font-weight: 600;
    color: var(--br);
    border-bottom: 1.5px solid var(--br-light);
    padding-bottom: 10px;
    margin-bottom: 14px;
    display: flex;
    align-items: center;
    gap: 8px;
  }

  .ft-dir-list {
    list-style: none;
    padding: 0;
    margin: 0;
    display: flex;
    flex-direction: column;
    gap: 11px;
  }

  .ft-dir-list li {
    font-size: 14px;
    font-weight: 500;
    color: var(--ink);
    display: flex;
    align-items: center;
    gap: 9px;
    line-height: 1.45;
    margin: 0;
  }

  .ft-dir-list li svg {
    width: 14px;
    height: 14px;
    stroke: var(--br);
    stroke-width: 2.5;
    fill: none;
    flex-shrink: 0;
  }

  /* ===================== MOBILE DASHBOARD MOCKUP ===================== */
  .mobile-mock-card {
    background: #231B15;
    border-radius: 36px;
    padding: 28px 20px;
    max-width: 320px;
    margin: 0 auto;
    color: #fff;
    box-shadow: var(--shadow-lg);
    border: 4px solid #3F332A;
  }

  .mobile-mock-notch {
    width: 100px;
    height: 18px;
    background: #17110D;
    border-radius: 0 0 12px 12px;
    margin: -28px auto 20px;
  }

  .mobile-mock-screen {
    background: #FFFFFF !important;
    border-radius: 20px;
    padding: 16px;
    color: var(--ink);
    border: 1px solid #E2E8F0;
  }

  /* ===================== INTERNATIONAL SAAS FAQ (STRIPE 2-COL SPLIT) ===================== */
  .faq-section {
    padding: 90px 0;
    background: #FFFFFF;
    position: relative;
  }

  .faq-layout {
    display: grid;
    grid-template-columns: 38% 62%;
    gap: 56px;
    align-items: start;
  }

  .faq-left-col {
    position: sticky;
    top: 96px;
  }

  .faq-main-title {
    font-family: Effra, sans-serif;
    font-weight: 400;
    font-size: 2.5rem;
    line-height: 1.12;
    color: #0A2540;
    letter-spacing: normal;
    margin: 0 0 16px;
  }

  .faq-lead-desc {
    font-family: 'Inter', system-ui, sans-serif;
    font-size: 18px;
    color: #425466;
    line-height: 1.6;
    letter-spacing: -0.01em;
    margin: 0 0 32px;
    max-width: 420px;
  }

  /* Support Help Card */
  .faq-support-card {
    background: #FFFFFF !important;
    border: 1.5px solid #E3E8EE;
    border-radius: 20px;
    padding: 24px;
    display: flex;
    flex-direction: column;
    gap: 14px;
    max-width: 420px;
    transition: all 0.25s ease;
  }
  .faq-support-card:hover {
    border-color: #CBD5E1;
    box-shadow: 0 8px 20px rgba(10, 37, 64, 0.06);
  }

  .faq-support-header {
    display: flex;
    align-items: center;
    gap: 12px;
  }
  .faq-support-icon {
    width: 42px;
    height: 42px;
    border-radius: 12px;
    background: #FEF3C7;
    color: #B45309;
    display: grid;
    place-items: center;
    flex-shrink: 0;
    border: 1px solid rgba(217, 119, 6, 0.25);
  }
  .faq-support-icon svg { width: 20px; height: 20px; }

  .faq-support-title {
    font-family: 'Plus Jakarta Sans', sans-serif;
    font-size: 16px;
    font-weight: 700;
    color: #0A2540;
    margin: 0;
    letter-spacing: -0.015em;
  }

  .faq-support-text {
    font-family: 'Inter', sans-serif;
    font-size: 13.5px;
    color: #425466;
    line-height: 1.55;
    margin: 0;
  }

  .faq-support-actions {
    display: flex;
    align-items: center;
    gap: 12px;
    padding-top: 4px;
    flex-wrap: wrap;
  }

  .faq-support-btn-primary {
    display: inline-flex;
    align-items: center;
    gap: 6px;
    background: #0A2540;
    color: #FFFFFF !important;
    font-family: 'Plus Jakarta Sans', sans-serif;
    font-size: 13.5px;
    font-weight: 700;
    padding: 9px 18px;
    border-radius: 10px;
    text-decoration: none;
    border: 1px solid #0A2540;
    transition: all 0.2s ease;
  }
  .faq-support-btn-primary:hover {
    background: #1A365D;
    border-color: #1A365D;
    transform: translateY(-1px);
  }

  .faq-support-link {
    font-family: 'Plus Jakarta Sans', sans-serif;
    font-size: 13.5px;
    font-weight: 600;
    color: #B45309 !important;
    text-decoration: none;
    display: inline-flex;
    align-items: center;
    gap: 4px;
    transition: gap 0.2s ease;
  }
  .faq-support-link:hover {
    color: #92400E !important;
    gap: 7px;
  }

  /* Right Column: FAQ Accordion */
  .faq-right-col {
    width: 100%;
  }
  .faq-accordion-list {
    width: 100%;
    display: flex;
    flex-direction: column;
    gap: 14px;
  }
  .faq-row {
    border: 1.5px solid #E3E8EE;
    border-radius: 16px;
    background: #FFFFFF;
    padding: 0 24px;
    box-shadow: 0 1px 3px rgba(50, 50, 93, 0.04);
    transition: all 0.25s cubic-bezier(0.16, 1, 0.3, 1);
  }
  .faq-row:hover {
    border-color: #CBD5E1;
    box-shadow: 0 4px 14px rgba(50, 50, 93, 0.08);
  }
  .faq-row.open {
    border-color: #0A2540;
    box-shadow: 0 8px 24px rgba(10, 37, 64, 0.08);
    background: #FFFFFF;
  }
  .faq-row button {
    width: 100%;
    background: none;
    border: 0;
    color: #0A2540;
    font: 700 16.5px 'Plus Jakarta Sans', sans-serif;
    letter-spacing: -0.02em;
    text-align: left;
    padding: 22px 0;
    display: flex;
    justify-content: space-between;
    align-items: center;
    cursor: pointer;
    gap: 16px;
    outline: none;
  }
  .faq-row i {
    color: #0A2540;
    font-style: normal;
    font-size: 18px;
    font-weight: 700;
    transition: all 0.3s cubic-bezier(0.16, 1, 0.3, 1);
    flex: none;
    width: 32px;
    height: 32px;
    border-radius: 50%;
    background: #FFFFFF !important;
    display: grid;
    place-items: center;
    border: 1px solid #E3E8EE;
  }
  .faq-row:hover i {
    border-color: #CBD5E1;
    background: #FFFFFF !important;
  }
  .faq-row.open i {
    transform: rotate(45deg);
    background: #0A2540;
    color: #FFFFFF;
    border-color: #0A2540;
  }
  .faq-answer-wrap {
    display: grid;
    grid-template-rows: 0fr;
    transition: grid-template-rows 0.35s cubic-bezier(0.16, 1, 0.3, 1);
  }
  .faq-row.open .faq-answer-wrap {
    grid-template-rows: 1fr;
  }
  .faq-answer-wrap > div {
    overflow: hidden;
  }
  .faq-answer-wrap p {
    padding: 0 0 22px;
    color: #425466;
    font-family: 'Inter', system-ui, sans-serif;
    font-size: 15px;
    line-height: 1.65;
    border-top: 1px solid #F1F5F9;
    padding-top: 16px;
    margin: 0;
  }

  @media (max-width: 960px) {
    .faq-layout {
      grid-template-columns: 1fr;
      gap: 40px;
    }
    .faq-left-col {
      position: static;
      max-width: 100%;
    }
  }

  /* ===================== FINAL CTA SECTION (TOAST-STYLE EXPERT SWITCH) ===================== */
  .ft-cta-section {
    background: #FFFFFF !important;
    padding: 100px 0 120px;
    text-align: center;
    position: relative;
    border: none !important;
    border-top: none !important;
    border-bottom: none !important;
    width: 100%;
  }

  .ft-cta-section::before {
    display: none !important;
  }

  .ft-cta-content {
    position: relative;
    z-index: 2;
    max-width: 860px;
    margin: 0 auto;
    text-align: center;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
  }

  .toast-expert-title {
    font-family: 'Plus Jakarta Sans', Effra, sans-serif !important;
    color: #0A2540 !important;
    font-size: clamp(30px, 3.8vw, 48px) !important;
    font-weight: 700 !important;
    letter-spacing: -0.025em !important;
    line-height: 1.2 !important;
    margin: 0 0 14px 0 !important;
    text-align: center !important;
  }

  .toast-expert-subhead {
    color: #475569 !important;
    font-size: clamp(15.5px, 1.4vw, 18px) !important;
    max-width: 620px;
    margin: 0 auto 34px !important;
    line-height: 1.55 !important;
    font-family: 'Inter', system-ui, sans-serif !important;
    font-weight: 400 !important;
    text-align: center !important;
  }

  .toast-expert-btn-wrap {
    display: flex;
    justify-content: center;
    align-items: center;
  }

  .toast-expert-cta-btn {
    display: inline-flex !important;
    align-items: center !important;
    justify-content: center !important;
    background: #E64A19 !important;
    background: linear-gradient(135deg, #F35A14 0%, #E64A19 100%) !important;
    color: #FFFFFF !important;
    font-family: 'Plus Jakarta Sans', sans-serif !important;
    font-size: 16px !important;
    font-weight: 700 !important;
    padding: 14px 44px !important;
    border-radius: 9999px !important;
    text-decoration: none !important;
    box-shadow: 0 4px 16px rgba(230, 74, 25, 0.35) !important;
    transition: all 0.22s cubic-bezier(0.16, 1, 0.3, 1) !important;
    border: none !important;
  }

  .toast-expert-cta-btn:hover {
    background: linear-gradient(135deg, #EA580C 0%, #C23E14 100%) !important;
    transform: translateY(-2px) !important;
    box-shadow: 0 8px 24px rgba(230, 74, 25, 0.45) !important;
    color: #FFFFFF !important;
  }

  /* Responsive Adjustments */
  @media (max-width: 1024px) {
    .ft-hero-grid { grid-template-columns: 1fr; gap: 40px; }
    .ft-grid-3, .ft-grid-4 { grid-template-columns: repeat(2, 1fr); }
    .ft-dir-grid { grid-template-columns: repeat(2, 1fr); }
  }

  @media (max-width: 768px) {
    .section { padding: 60px 0; }
    .ft-hero { padding: 60px 0 40px; }
    .ft-hero h1 { font-size: 32px; }
    .ft-grid-2, .ft-grid-3, .ft-grid-4 { grid-template-columns: 1fr; }
    .ft-dir-grid { grid-template-columns: 1fr; }
    .ft-cta-section { padding: 60px 0; }
    .ft-cta-section h2 { font-size: 28px; }
    .final-cta-box { padding: 48px 24px; }
    .final-cta-box h2 { font-size: 28px; }
  }

  /* --- TOAST-STYLE CONCEPTS BANNER & FLOATING CARD --- */
  .concepts-banner-section {
    position: relative;
    margin: 50px 0 60px;
    padding: 0;
    width: 100%;
    overflow: visible;
  }
  .concepts-banner-bg {
    position: relative;
    width: 100%;
    min-height: 440px;
    background: linear-gradient(180deg, rgba(10, 37, 64, 0.52) 0%, rgba(10, 37, 64, 0.72) 100%), 
                url('{{ asset("landing/concepts-banner.jpg") }}') center 28% / cover no-repeat;
    display: flex !important;
    align-items: flex-start !important;
    justify-content: center !important;
    text-align: center !important;
    padding: 95px 24px 190px !important;
    box-sizing: border-box !important;
  }
  .concepts-banner-bg .w {
    display: flex !important;
    flex-direction: column !important;
    align-items: center !important;
    justify-content: center !important;
    text-align: center !important;
    width: 100% !important;
    margin: 0 auto !important;
    padding: 0 20px !important;
  }
  .concepts-banner-title {
    font-family: 'Plus Jakarta Sans', Effra, sans-serif !important;
    font-size: clamp(28px, 3.8vw, 44px) !important;
    font-weight: 800 !important;
    color: #FFFFFF !important;
    text-align: center !important;
    margin: 0 auto !important;
    display: block !important;
    width: 100% !important;
    max-width: 900px !important;
    line-height: 1.25 !important;
    text-shadow: 0 2px 20px rgba(0, 0, 0, 0.5) !important;
    letter-spacing: -0.02em !important;
  }
  .concepts-card-wrapper {
    max-width: 1080px;
    margin: -130px auto 0;
    position: relative;
    z-index: 10;
    padding: 0 20px;
    box-sizing: border-box;
  }
  .concepts-floating-card {
    background: #FFFFFF !important;
    border-radius: 20px !important;
    box-shadow: 0 20px 50px rgba(10, 37, 64, 0.1), 0 4px 16px rgba(10, 37, 64, 0.04) !important;
    padding: 44px 52px 42px !important;
    border: 1px solid #E2E8F0 !important;
    box-sizing: border-box !important;
  }
  .concepts-card-subhead {
    font-family: 'Inter', system-ui, sans-serif !important;
    font-size: 16px !important;
    color: #425466 !important;
    text-align: center;
    margin: 0 0 36px 0 !important;
    font-weight: 400 !important;
    line-height: 1.5 !important;
  }
  .concepts-grid {
    display: grid !important;
    grid-template-columns: repeat(3, 1fr) !important;
    gap: 20px 32px !important;
    align-items: center !important;
  }
  .concept-item {
    display: flex !important;
    flex-direction: row !important;
    align-items: center !important;
    gap: 14px !important;
    padding: 12px 14px !important;
    border-radius: 12px !important;
    background: #FFFFFF !important;
    border: 1px solid transparent !important;
    cursor: default !important;
    user-select: none !important;
    transition: all 0.22s ease !important;
  }
  .concept-item:hover {
    background: #F8FAFC !important;
    border-color: #E2E8F0 !important;
    transform: translateY(-2px);
  }
  .concept-icon-wrap {
    width: 38px !important;
    height: 38px !important;
    min-width: 38px !important;
    display: flex !important;
    align-items: center !important;
    justify-content: center !important;
    flex-shrink: 0 !important;
    transition: transform 0.22s ease !important;
  }
  .concept-item:hover .concept-icon-wrap {
    transform: scale(1.08);
  }
  .concept-label {
    font-family: 'Plus Jakarta Sans', 'Inter', system-ui, sans-serif !important;
    font-size: 17px !important;
    font-weight: 600 !important;
    color: #0A2540 !important;
    line-height: 1.35 !important;
    letter-spacing: -0.01em !important;
  }
  .concept-item:hover .concept-label {
    color: #0A2540 !important;
  }
  .concepts-card-actions {
    display: flex !important;
    justify-content: center !important;
    align-items: center !important;
    gap: 14px !important;
    margin-top: 36px !important;
    padding-top: 28px !important;
    border-top: 1px solid #F1F5F9 !important;
    flex-wrap: wrap !important;
  }
  .concept-btn-primary {
    display: inline-flex !important;
    align-items: center !important;
    gap: 8px !important;
    background: #0A2540 !important;
    color: #FFFFFF !important;
    font-family: 'Plus Jakarta Sans', sans-serif !important;
    font-size: 14px !important;
    font-weight: 700 !important;
    padding: 11px 24px !important;
    border-radius: 50px !important;
    text-decoration: none !important;
    box-shadow: 0 4px 12px rgba(10, 37, 64, 0.16) !important;
    transition: all 0.2s cubic-bezier(0.16, 1, 0.3, 1) !important;
    border: 1px solid #0A2540 !important;
  }
  .concept-btn-primary:hover {
    background: #1A365D !important;
    border-color: #1A365D !important;
    transform: translateY(-2px) !important;
    box-shadow: 0 6px 18px rgba(10, 37, 64, 0.24) !important;
    color: #FFFFFF !important;
  }
  .concept-btn-secondary {
    display: inline-flex !important;
    align-items: center !important;
    gap: 8px !important;
    background: #FFFFFF !important;
    color: #0A2540 !important;
    font-family: 'Plus Jakarta Sans', sans-serif !important;
    font-size: 14px !important;
    font-weight: 700 !important;
    padding: 11px 24px !important;
    border-radius: 50px !important;
    text-decoration: none !important;
    border: 1.5px solid #CBD5E1 !important;
    transition: all 0.2s cubic-bezier(0.16, 1, 0.3, 1) !important;
  }
  .concept-btn-secondary:hover {
    background: #F8FAFC !important;
    border-color: #0A2540 !important;
    color: #0A2540 !important;
    transform: translateY(-2px) !important;
  }

  @media (max-width: 900px) {
    .concepts-grid {
      grid-template-columns: repeat(2, 1fr) !important;
      gap: 18px 24px !important;
    }
    .concepts-floating-card {
      padding: 32px 28px !important;
    }
    .concepts-banner-bg {
      padding: 70px 20px 160px !important;
      min-height: 380px !important;
    }
    .concepts-card-wrapper {
      margin-top: -110px !important;
    }
  }

  @media (max-width: 580px) {
    .concepts-grid {
      grid-template-columns: 1fr !important;
      gap: 12px !important;
    }
    .concepts-floating-card {
      padding: 28px 20px !important;
      border-radius: 14px !important;
    }
    .concepts-banner-title {
      font-size: 26px !important;
    }
    .concepts-banner-bg {
      padding: 55px 16px 140px !important;
      min-height: 340px !important;
    }
    .concepts-card-wrapper {
      margin-top: -90px !important;
    }
    .concepts-card-actions {
      flex-direction: column !important;
      gap: 10px !important;
    }
    .concept-btn-primary, .concept-btn-secondary {
      width: 100% !important;
      justify-content: center !important;
    }
  }
</style>

<div class="ft-page">

  {{-- 1. HERO SECTION (TOAST-STYLE SAAS STRUCTURE) --}}
  <section class="ft-hero">
    <div class="w">
      <div class="ft-hero-grid">
        {{-- Left Column: Typography, Actions, Starter Link --}}
        <div data-aos="fade-right">
          <h1 class="hero-headline">
            Everything Your Restaurant Needs.<br>
            Connected in <span class="hero-script-word">One Platform.</span>
          </h1>
          <p class="hero-lead-text">
            From digital menus and orders to kitchen operations, billing, inventory and business reports, Geni Menu brings your essential restaurant operations together in one connected platform.
          </p>
          
          <div class="hero-actions-row">
            <a href="{{ route('restaurant_signup') }}" class="hero-btn-solid">Get Started &rarr;</a>
            <button type="button" onclick="openPopup('Book a Demo - Geni Menu Features')" class="hero-btn-outline">Book a Demo &rarr;</button>
          </div>

          <div class="hero-starter-link">
            Flexible plans for single &amp; multi-branch &bull; <a href="{{ route('pricing') }}">View pricing plans &rarr;</a>
          </div>
        </div>

        {{-- Right Column: Visual Composition with Photo, Floating Modifier Card & Hand-Drawn Arrow --}}
        <div class="hero-visual-col" data-aos="fade-left">
          <div class="hero-composition-stage">
            <!-- Main Photo: Barista at modern POS counter -->
            <div class="hero-photo-frame">
              <img src="{{ asset('assets/images/features-hero-barista-pos.jpg') }}" alt="Barista serving at cafe POS counter" class="hero-barista-photo">
            </div>

            <!-- Floating Item Modifier Card -->
            <div class="hero-floating-modifier-card">
              <div class="mod-card-header">
                <button type="button" class="mod-card-close" aria-label="Close">&times;</button>
                <h4 class="mod-card-title">Paneer Tikka Sizzler</h4>
                <span style="width: 14px;"></span>
              </div>

              <div class="mod-card-img-wrap">
                <img src="{{ asset('assets/images/paneer-tikka-sizzler.jpg') }}" alt="Paneer Tikka Sizzler">
              </div>

              <p class="mod-card-desc">
                Charcoal-grilled cottage cheese cubes marinated in spiced yogurt, bell peppers, and mint chutney.
              </p>

              <div class="mod-card-section-row">
                <div class="mod-card-label-group">
                  <span class="mod-card-label">Portion Size</span>
                  <span class="mod-card-sublabel">Choose 1</span>
                </div>
                <span class="mod-card-required-badge">REQUIRED</span>
              </div>

              <div class="mod-card-options">
                <label class="mod-option-item selected" data-value="regular">
                  <span class="mod-radio-dot"><span class="mod-radio-inner"></span></span>
                  <span class="mod-option-name">Regular Portion</span>
                </label>

                <label class="mod-option-item" data-value="large">
                  <span class="mod-radio-dot"></span>
                  <span class="mod-option-name">Large Platter</span>
                  <span class="mod-option-price">+ $1.50</span>
                </label>

                <label class="mod-option-item" data-value="combo">
                  <span class="mod-radio-dot"></span>
                  <span class="mod-option-name">Chef's Sizzler Combo</span>
                  <span class="mod-option-price">+ $2.50</span>
                </label>
              </div>
            </div>

            <!-- Hand-drawn curved orange arrow pointing to POS (Short & Compact) -->
            <div class="hero-arrow-container">
              <svg class="hero-drawn-arrow" viewBox="0 0 100 85" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M 18 6 C 18 36, 12 62, 34 68 C 50 72, 70 62, 84 48" stroke="#EA580C" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M 68 47 L 85 48 L 82 65" stroke="#EA580C" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"/>
              </svg>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


  {{-- 3. INTRODUCTION & VISUAL ECOSYSTEM --}}
  <section class="section" id="all-features">
    <div class="w">
      <div class="sec-header" data-aos="fade-up">
        <h2>One Platform. Every Part of Your Restaurant.</h2>
        <p>Geni Menu connects front-of-house, back-of-house and business operations so your team can manage everyday restaurant activities from one connected platform.</p>
      </div>

      <div class="eco-flow-card" data-aos="fade-up">
        <div class="eco-flow-spine">
          <div class="eco-flow-node">
            <div class="eco-flow-icon"><svg viewBox="0 0 24 24"><line x1="18" y1="2" x2="18" y2="22"/><path d="M14 2v7a3 3 0 0 0 6 0V2"/><path d="M6 2v4a2 2 0 0 0 4 0V2"/><line x1="8" y1="8" x2="8" y2="22"/></svg></div>
            <div class="eco-flow-name">Menu</div>
            <div style="font-size:11px; color:var(--ink-soft);">Categories &amp; Items</div>
          </div>
          <span class="eco-flow-arr">&rarr;</span>
          <div class="eco-flow-node">
            <div class="eco-flow-icon"><svg viewBox="0 0 24 24"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/><polyline points="14 2 14 8 20 8"/><line x1="16" y1="13" x2="8" y2="13"/></svg></div>
            <div class="eco-flow-name">Orders</div>
            <div style="font-size:11px; color:var(--ink-soft);">Table &amp; Counter</div>
          </div>
          <span class="eco-flow-arr">&rarr;</span>
          <div class="eco-flow-node">
            <div class="eco-flow-icon"><svg viewBox="0 0 24 24"><path d="M6 13.87A4 4 0 0 1 7.41 6a5.11 5.11 0 0 1 1.05-1.54 5 5 0 0 1 7.08 0A5.11 5.11 0 0 1 16.59 6 4 4 0 0 1 18 13.87V21H6Z"/></svg></div>
            <div class="eco-flow-name">Kitchen KOT</div>
            <div style="font-size:11px; color:var(--ink-soft);">Live Prep Routing</div>
          </div>
          <span class="eco-flow-arr">&rarr;</span>
          <div class="eco-flow-node">
            <div class="eco-flow-icon"><svg viewBox="0 0 24 24"><rect x="3" y="5" width="18" height="14" rx="2"/><line x1="3" y1="10" x2="21" y2="10"/><line x1="7" y1="15" x2="11" y2="15"/></svg></div>
            <div class="eco-flow-name">Billing POS</div>
            <div style="font-size:11px; color:var(--ink-soft);">3-Click Checkout</div>
          </div>
          <span class="eco-flow-arr">&rarr;</span>
          <div class="eco-flow-node">
            <div class="eco-flow-icon"><svg viewBox="0 0 24 24"><path d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"/></svg></div>
            <div class="eco-flow-name">Inventory</div>
            <div style="font-size:11px; color:var(--ink-soft);">Recipe Stock Sync</div>
          </div>
          <span class="eco-flow-arr">&rarr;</span>
          <div class="eco-flow-node">
            <div class="eco-flow-icon"><svg viewBox="0 0 24 24"><line x1="18" y1="20" x2="18" y2="10"/><line x1="12" y1="20" x2="12" y2="4"/><line x1="6" y1="20" x2="6" y2="14"/></svg></div>
            <div class="eco-flow-name">Reports</div>
            <div style="font-size:11px; color:var(--ink-soft);">Sales &amp; Margins</div>
          </div>
        </div>

        <div class="eco-satellites-row">
          <span class="eco-pill">&#9679; Table Management</span>
          <span class="eco-pill">&#9679; Reservations</span>
          <span class="eco-pill">&#9679; Waiter Requests</span>
          <span class="eco-pill">&#9679; Customer CRM</span>
          <span class="eco-pill">&#9679; Staff Roles &amp; Access</span>
          <span class="eco-pill">&#9679; Multi-Branch HQ</span>
        </div>
      </div>
    </div>
  </section>

  {{-- 4. MENU & CUSTOMER EXPERIENCE --}}
  <section class="section" id="sec-menu">
    <div class="w">
      <div class="sec-header" data-aos="fade-up">
        <h2>Create Better Customer Experiences From the First Click.</h2>
        <p>Manage your menu, products and customer interactions from one connected system.</p>
      </div>

      <div class="toast-feature-list">
        {{-- Row 1: Menu Management (Media Left, Content Right) --}}
        <div class="toast-feature-row" data-aos="fade-up">
          <div class="toast-feature-media">
            <div class="toast-img-frame">
              <span class="toast-media-badge">Core Menu</span>
              <img src="https://images.unsplash.com/photo-1546069901-ba9599a7e63c?q=80&w=900&auto=format&fit=crop" alt="Menu Management" loading="lazy">
            </div>
          </div>
          <div class="toast-feature-content">
            <div class="toast-feature-pill">Core Menu</div>
            <h3 class="toast-feature-title">Menu Management</h3>
            <p class="toast-feature-desc">Create, organize and update your restaurant menu from one simple dashboard.</p>
            <ul class="toast-check-list">
              <li class="toast-check-item">
                <span class="toast-check-icon"><svg viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg></span>
                <span>Menu categories &amp; sub-items</span>
              </li>
              <li class="toast-check-item">
                <span class="toast-check-icon"><svg viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg></span>
                <span>Pricing, variations &amp; addons where supported</span>
              </li>
              <li class="toast-check-item">
                <span class="toast-check-icon"><svg viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg></span>
                <span>Real-time availability &amp; 86-ing</span>
              </li>
              <li class="toast-check-item">
                <span class="toast-check-icon"><svg viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg></span>
                <span>Digital QR menu instant publishing</span>
              </li>
            </ul>
          </div>
        </div>

        {{-- Row 2: Customer Management (CRM) (Media Right, Content Left - Reverse) --}}
        <div class="toast-feature-row reverse" data-aos="fade-up">
          <div class="toast-feature-media">
            <div class="toast-img-frame">
              <span class="toast-media-badge">Guest Retention</span>
              <img src="https://images.unsplash.com/photo-1555396273-367ea4eb4db5?q=80&w=900&auto=format&fit=crop" alt="Customer Management" loading="lazy">
            </div>
          </div>
          <div class="toast-feature-content">
            <div class="toast-feature-pill">Guest Retention</div>
            <h3 class="toast-feature-title">Customer Management (CRM)</h3>
            <p class="toast-feature-desc">Keep customer information, visit counts and order history organized to drive repeat dining.</p>
            <ul class="toast-check-list">
              <li class="toast-check-item">
                <span class="toast-check-icon"><svg viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg></span>
                <span>Centralized guest directory &amp; phone contacts</span>
              </li>
              <li class="toast-check-item">
                <span class="toast-check-icon"><svg viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg></span>
                <span>Full visit logs &amp; past dining receipts</span>
              </li>
              <li class="toast-check-item">
                <span class="toast-check-icon"><svg viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg></span>
                <span>Customer-linked orders for fast billing</span>
              </li>
              <li class="toast-check-item">
                <span class="toast-check-icon"><svg viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg></span>
                <span>Birthday and anniversary engagement</span>
              </li>
            </ul>
          </div>
        </div>

        {{-- Row 3: Kiosk Ordering (Media Left, Content Right) --}}
        <div class="toast-feature-row" data-aos="fade-up">
          <div class="toast-feature-media">
            <div class="toast-img-frame">
              <span class="toast-media-badge">Self-Service</span>
              <img src="https://images.unsplash.com/photo-1556742049-0a67e5572293?q=80&w=900&auto=format&fit=crop" alt="Kiosk Ordering" loading="lazy">
            </div>
          </div>
          <div class="toast-feature-content">
            <div class="toast-feature-pill">Self-Service</div>
            <h3 class="toast-feature-title">Kiosk Ordering</h3>
            <p class="toast-feature-desc">Make self-service ordering intuitive and queue-free with interactive touch kiosk mode.</p>
            <ul class="toast-check-list">
              <li class="toast-check-item">
                <span class="toast-check-icon"><svg viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg></span>
                <span>Digital visual product browsing</span>
              </li>
              <li class="toast-check-item">
                <span class="toast-check-icon"><svg viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg></span>
                <span>Self-order creation directly to kitchen KOT</span>
              </li>
              <li class="toast-check-item">
                <span class="toast-check-icon"><svg viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg></span>
                <span>Smart upselling combos &amp; beverage prompts</span>
              </li>
              <li class="toast-check-item">
                <span class="toast-check-icon"><svg viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg></span>
                <span>Supported contactless counter payment</span>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>

  {{-- 5. ORDERS & KITCHEN --}}
  <section class="section" id="sec-orders">
    <div class="w">
      <div class="sec-header" data-aos="fade-up">
        <h2>From Customer Order to Kitchen Preparation.</h2>
        <p>Keep orders organized and give your kitchen team a clear view of what needs to be prepared without confusion.</p>
      </div>

      <div class="toast-feature-list">
        {{-- Row 1: Order Management (Media Left, Content Right) --}}
        <div class="toast-feature-row" data-aos="fade-up">
          <div class="toast-feature-media">
            <div class="toast-img-frame">
              <span class="toast-media-badge">Order Pipeline</span>
              <img src="https://images.unsplash.com/photo-1552566626-52f8b828add9?q=80&w=900&auto=format&fit=crop" alt="Order Management" loading="lazy">
            </div>
          </div>
          <div class="toast-feature-content">
            <div class="toast-feature-pill">Order Pipeline</div>
            <h3 class="toast-feature-title">Order Management</h3>
            <p class="toast-feature-desc">Manage dine-in, takeaway and supported order types from one unified workspace.</p>
            <ul class="toast-check-list">
              <li class="toast-check-item">
                <span class="toast-check-icon"><svg viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg></span>
                <span>Live order status (Pending, Cooking, Ready, Completed)</span>
              </li>
              <li class="toast-check-item">
                <span class="toast-check-icon"><svg viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg></span>
                <span>Table-linked orders &amp; takeaway parcel tags</span>
              </li>
              <li class="toast-check-item">
                <span class="toast-check-icon"><svg viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg></span>
                <span>Item modifications, cooking instructions &amp; special notes</span>
              </li>
              <li class="toast-check-item">
                <span class="toast-check-icon"><svg viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg></span>
                <span>Direct dispatch into kitchen prep queues</span>
              </li>
            </ul>
          </div>
        </div>

        {{-- Row 2: KOT Management (Media Right, Content Left - Reverse) --}}
        <div class="toast-feature-row reverse" data-aos="fade-up">
          <div class="toast-feature-media">
            <div class="toast-img-frame">
              <span class="toast-media-badge">Kitchen Tickets</span>
              <img src="https://images.unsplash.com/photo-1578474846511-04ba529f0b88?q=80&w=900&auto=format&fit=crop" alt="KOT Management" loading="lazy">
            </div>
          </div>
          <div class="toast-feature-content">
            <div class="toast-feature-pill">Kitchen Tickets</div>
            <h3 class="toast-feature-title">KOT (Kitchen Order Ticket) Management</h3>
            <p class="toast-feature-desc">Use Kitchen Order Tickets to communicate order details accurately to the kitchen staff.</p>
            <ul class="toast-check-list">
              <li class="toast-check-item">
                <span class="toast-check-icon"><svg viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg></span>
                <span>Instant digital &amp; thermal KOT ticket dispatch</span>
              </li>
              <li class="toast-check-item">
                <span class="toast-check-icon"><svg viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg></span>
                <span>Item-level preparation notes &amp; allergy highlights</span>
              </li>
              <li class="toast-check-item">
                <span class="toast-check-icon"><svg viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg></span>
                <span>Multi-station kitchen routing where supported</span>
              </li>
              <li class="toast-check-item">
                <span class="toast-check-icon"><svg viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg></span>
                <span>Elimination of verbal misunderstandings in the kitchen</span>
              </li>
            </ul>
          </div>
        </div>

        {{-- Row 3: Kitchen Operations Management (Media Left, Content Right) --}}
        <div class="toast-feature-row" data-aos="fade-up">
          <div class="toast-feature-media">
            <div class="toast-img-frame">
              <span class="toast-media-badge">Kitchen Operations</span>
              <img src="https://images.unsplash.com/photo-1556910103-1c02745aae4d?q=80&w=900&auto=format&fit=crop" alt="Kitchen Operations" loading="lazy">
            </div>
          </div>
          <div class="toast-feature-content">
            <div class="toast-feature-pill">Kitchen Operations</div>
            <h3 class="toast-feature-title">Kitchen Operations Management</h3>
            <p class="toast-feature-desc">Manage active kitchen orders, preparation activity and coordination between cook stations.</p>
            <ul class="toast-check-list">
              <li class="toast-check-item">
                <span class="toast-check-icon"><svg viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg></span>
                <span>Real-time view of all preparing dishes</span>
              </li>
              <li class="toast-check-item">
                <span class="toast-check-icon"><svg viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg></span>
                <span>Order prioritization during rush dining hours</span>
              </li>
              <li class="toast-check-item">
                <span class="toast-check-icon"><svg viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg></span>
                <span>Ready notification handover to serving staff</span>
              </li>
              <li class="toast-check-item">
                <span class="toast-check-icon"><svg viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg></span>
                <span>Multi-course dining coordination where supported</span>
              </li>
            </ul>
          </div>
        </div>

        {{-- Row 4: Waiter Requests (Media Right, Content Left - Reverse) --}}
        <div class="toast-feature-row reverse" data-aos="fade-up">
          <div class="toast-feature-media">
            <div class="toast-img-frame">
              <span class="toast-media-badge">Table Calls</span>
              <img src="https://images.unsplash.com/photo-1590846406792-0adc7f938f1d?q=80&w=900&auto=format&fit=crop" alt="Waiter Requests" loading="lazy">
            </div>
          </div>
          <div class="toast-feature-content">
            <div class="toast-feature-pill">Table Calls</div>
            <h3 class="toast-feature-title">Waiter Requests</h3>
            <p class="toast-feature-desc">Help floor teams respond to guest calls and table service requests faster and without shouting.</p>
            <div class="toast-workflow-pill">
              <strong>Workflow:</strong> Request &rarr; Staff Notify &rarr; Respond &rarr; Complete
            </div>
            <ul class="toast-check-list">
              <li class="toast-check-item">
                <span class="toast-check-icon"><svg viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg></span>
                <span>One-tap QR call waiter, water refill, and bill request</span>
              </li>
              <li class="toast-check-item">
                <span class="toast-check-icon"><svg viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg></span>
                <span>Real-time notifications on assigned waiter devices</span>
              </li>
              <li class="toast-check-item">
                <span class="toast-check-icon"><svg viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg></span>
                <span>Live table-linked request tracking &amp; resolution timers</span>
              </li>
              <li class="toast-check-item">
                <span class="toast-check-icon"><svg viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg></span>
                <span>Higher table turnover &amp; improved diner satisfaction</span>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>

  {{-- 6. TABLES & RESERVATIONS --}}
  <section class="section" id="sec-tables">
    <div class="w">
      <div class="sec-header" data-aos="fade-up">
        <h2>Know Every Table. Manage Every Booking.</h2>
        <p>Keep your dining floor organized and connect reservations directly with table operations.</p>
      </div>

      <div class="toast-feature-list">
        {{-- Row 1: Table Management (Media Left, Content Right) --}}
        <div class="toast-feature-row" data-aos="fade-up">
          <div class="toast-feature-media">
            <div class="toast-img-frame">
              <span class="toast-media-badge">Dining Floor</span>
              <img src="https://images.unsplash.com/photo-1517248135467-4c7edcad34c4?q=80&w=900&auto=format&fit=crop" alt="Table Management" loading="lazy">
            </div>
          </div>
          <div class="toast-feature-content">
            <div class="toast-feature-pill">Dining Floor</div>
            <h3 class="toast-feature-title">Table Management</h3>
            <p class="toast-feature-desc">Visual floor plans with live color-coded dining status to manage seatings effortlessly.</p>
            <ul class="toast-check-list">
              <li class="toast-check-item">
                <span class="toast-check-icon"><svg viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg></span>
                <span>Interactive visual restaurant floor map</span>
              </li>
              <li class="toast-check-item">
                <span class="toast-check-icon"><svg viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg></span>
                <span>Live status indicators (Available, Occupied, Billed)</span>
              </li>
              <li class="toast-check-item">
                <span class="toast-check-icon"><svg viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg></span>
                <span>Multi-zone seating (AC Hall, Garden, Rooftop)</span>
              </li>
              <li class="toast-check-item">
                <span class="toast-check-icon"><svg viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg></span>
                <span>Table-linked orders &amp; instant waiter assignment</span>
              </li>
            </ul>
          </div>
        </div>

        {{-- Row 2: Reservation Management (Media Right, Content Left - Reverse) --}}
        <div class="toast-feature-row reverse" data-aos="fade-up">
          <div class="toast-feature-media">
            <div class="toast-img-frame">
              <span class="toast-media-badge">Guest Bookings</span>
              <img src="https://images.unsplash.com/photo-1544025162-d76694265947?q=80&w=900&auto=format&fit=crop" alt="Reservation Management" loading="lazy">
            </div>
          </div>
          <div class="toast-feature-content">
            <div class="toast-feature-pill">Guest Bookings</div>
            <h3 class="toast-feature-title">Reservation Management</h3>
            <p class="toast-feature-desc">Manage guest bookings, seating capacity and arrival status from one synchronized calendar.</p>
            <ul class="toast-check-list">
              <li class="toast-check-item">
                <span class="toast-check-icon"><svg viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg></span>
                <span>Advance table booking creation &amp; guest contact storage</span>
              </li>
              <li class="toast-check-item">
                <span class="toast-check-icon"><svg viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg></span>
                <span>Reservation calendar with time slot allocation</span>
              </li>
              <li class="toast-check-item">
                <span class="toast-check-icon"><svg viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg></span>
                <span>Prevention of double-bookings during peak hours</span>
              </li>
              <li class="toast-check-item">
                <span class="toast-check-icon"><svg viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg></span>
                <span>Direct connection to table allocation upon arrival</span>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>

  {{-- 7. POS & PAYMENTS --}}
  <section class="section" id="sec-pos">
    <div class="w">
      <div class="sec-header" data-aos="fade-up">
        <h2>Faster Billing. Smoother Restaurant Operations.</h2>
        <p>Process orders, print thermal receipts and collect payments through a restaurant-focused POS workflow.</p>
      </div>

      <div class="toast-feature-list">
        {{-- Row 1: POS Management (Media Left, Content Right) --}}
        <div class="toast-feature-row" data-aos="fade-up">
          <div class="toast-feature-media">
            <div class="toast-img-frame">
              <span class="toast-media-badge">Fast Billing</span>
              <img src="https://images.unsplash.com/photo-1556740738-b6a63e27c4df?q=80&w=900&auto=format&fit=crop" alt="POS Management" loading="lazy">
            </div>
          </div>
          <div class="toast-feature-content">
            <div class="toast-feature-pill">Fast Billing</div>
            <h3 class="toast-feature-title">POS Management</h3>
            <p class="toast-feature-desc">Lightning-fast billing built for high-volume lunch rushes and counter operations.</p>
            <div class="toast-workflow-pill">
              <strong>Workflow:</strong> Select &rarr; Order &rarr; Bill &rarr; Pay &rarr; Complete
            </div>
            <ul class="toast-check-list">
              <li class="toast-check-item">
                <span class="toast-check-icon"><svg viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg></span>
                <span>3-click bill generation with barcode support</span>
              </li>
              <li class="toast-check-item">
                <span class="toast-check-icon"><svg viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg></span>
                <span>Split bills, custom discounts &amp; GST compliance</span>
              </li>
              <li class="toast-check-item">
                <span class="toast-check-icon"><svg viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg></span>
                <span>Dine-in, takeaway, delivery &amp; counter modes</span>
              </li>
              <li class="toast-check-item">
                <span class="toast-check-icon"><svg viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg></span>
                <span>Thermal receipt &amp; digital e-bill printing</span>
              </li>
            </ul>
          </div>
        </div>

        {{-- Row 2: Payments Management (Media Right, Content Left - Reverse) --}}
        <div class="toast-feature-row reverse" data-aos="fade-up">
          <div class="toast-feature-media">
            <div class="toast-img-frame">
              <span class="toast-media-badge">Payment Records</span>
              <img src="https://images.unsplash.com/photo-1559526324-4b87b5e36e44?q=80&w=900&auto=format&fit=crop" alt="Payments Management" loading="lazy">
            </div>
          </div>
          <div class="toast-feature-content">
            <div class="toast-feature-pill">Payment Records</div>
            <h3 class="toast-feature-title">Payments Management</h3>
            <p class="toast-feature-desc">Frictionless payment acceptance and automated day-end cash reconciliation.</p>
            <ul class="toast-check-list">
              <li class="toast-check-item">
                <span class="toast-check-icon"><svg viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg></span>
                <span>Cash, Dynamic UPI QR, Card &amp; Net Banking</span>
              </li>
              <li class="toast-check-item">
                <span class="toast-check-icon"><svg viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg></span>
                <span>Transaction logs with cashier timestamp audit</span>
              </li>
              <li class="toast-check-item">
                <span class="toast-check-icon"><svg viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg></span>
                <span>Automated daily closing register reconciliation</span>
              </li>
              <li class="toast-check-item">
                <span class="toast-check-icon"><svg viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg></span>
                <span>Zero revenue leakage across multiple payment modes</span>
              </li>
            </ul>
          </div>
        </div>

        {{-- Row 3: Payment Gateway (Media Left, Content Right) --}}
        <div class="toast-feature-row" data-aos="fade-up">
          <div class="toast-feature-media">
            <div class="toast-img-frame">
              <span class="toast-media-badge">Online Gateway</span>
              <img src="https://images.unsplash.com/photo-1563013544-824ae1b704d3?q=80&w=900&auto=format&fit=crop" alt="Payment Gateway" loading="lazy">
            </div>
          </div>
          <div class="toast-feature-content">
            <div class="toast-feature-pill">Online Gateway</div>
            <h3 class="toast-feature-title">Payment Gateway</h3>
            <p class="toast-feature-desc">Connect modern digital payment gateways for online ordering and contactless checkout.</p>
            <ul class="toast-check-list">
              <li class="toast-check-item">
                <span class="toast-check-icon"><svg viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg></span>
                <span>Gateway integration support where available</span>
              </li>
              <li class="toast-check-item">
                <span class="toast-check-icon"><svg viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg></span>
                <span>Online payment status verification</span>
              </li>
              <li class="toast-check-item">
                <span class="toast-check-icon"><svg viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg></span>
                <span>Digital transaction records and settlement logs</span>
              </li>
              <li class="toast-check-item">
                <span class="toast-check-icon"><svg viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg></span>
                <span>Available in applicable subscription plans</span>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>

  {{-- 8. INVENTORY & OPERATIONS --}}
  <section class="section" id="sec-inventory">
    <div class="w">
      <div class="sec-header" data-aos="fade-up">
        <h2>Stay Ready for Every Service.</h2>
        <p>Monitor stock, raw materials, expenses and operational activity to keep your restaurant prepared.</p>
      </div>

      <div class="toast-feature-list">
        {{-- Row 1: Inventory Management (Media Left, Content Right) --}}
        <div class="toast-feature-row" data-aos="fade-up">
          <div class="toast-feature-media">
            <div class="toast-img-frame">
              <span class="toast-media-badge">Stock Control</span>
              <img src="https://images.unsplash.com/photo-1542838132-92c53300491e?q=80&w=900&auto=format&fit=crop" alt="Inventory Management" loading="lazy">
            </div>
          </div>
          <div class="toast-feature-content">
            <div class="toast-feature-pill">Stock Control</div>
            <h3 class="toast-feature-title">Inventory Management</h3>
            <p class="toast-feature-desc">Real-time raw material tracking, low-stock alerts, and wastage control for lower food costs.</p>
            <div class="toast-workflow-pill">
              <strong>Workflow:</strong> Purchase &rarr; Stock &rarr; Consume &rarr; Monitor &rarr; Replenish
            </div>
            <ul class="toast-check-list">
              <li class="toast-check-item">
                <span class="toast-check-icon"><svg viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg></span>
                <span>Ingredient stock levels, units (kg, liters, pcs)</span>
              </li>
              <li class="toast-check-item">
                <span class="toast-check-icon"><svg viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg></span>
                <span>Low-stock automated alerts before ingredients run out</span>
              </li>
              <li class="toast-check-item">
                <span class="toast-check-icon"><svg viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg></span>
                <span>Vendor purchase records where supported</span>
              </li>
              <li class="toast-check-item">
                <span class="toast-check-icon"><svg viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg></span>
                <span>Stock movement &amp; manual adjustment logs</span>
              </li>
            </ul>
          </div>
        </div>

        {{-- Row 2: Expense Management (Media Right, Content Left - Reverse) --}}
        <div class="toast-feature-row reverse" data-aos="fade-up">
          <div class="toast-feature-media">
            <div class="toast-img-frame">
              <span class="toast-media-badge">Expense Tracking</span>
              <img src="https://images.unsplash.com/photo-1554224155-8d04cb21cd6c?q=80&w=900&auto=format&fit=crop" alt="Expense Management" loading="lazy">
            </div>
          </div>
          <div class="toast-feature-content">
            <div class="toast-feature-pill">Expense Tracking</div>
            <h3 class="toast-feature-title">Expense Management</h3>
            <p class="toast-feature-desc">Keep operational expenses visible across categories like ingredients, utilities, and maintenance.</p>
            <ul class="toast-check-list">
              <li class="toast-check-item">
                <span class="toast-check-icon"><svg viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg></span>
                <span>Categorized expense vouchers (Kitchen, Staff, Maintenance)</span>
              </li>
              <li class="toast-check-item">
                <span class="toast-check-icon"><svg viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg></span>
                <span>Date-based expense tracking &amp; petty cash records</span>
              </li>
              <li class="toast-check-item">
                <span class="toast-check-icon"><svg viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg></span>
                <span>Net profit vs. operating cost comparisons</span>
              </li>
              <li class="toast-check-item">
                <span class="toast-check-icon"><svg viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg></span>
                <span>Instant export for accounting and audits</span>
              </li>
            </ul>
          </div>
        </div>

        {{-- Row 3: Multiple Kitchen Management (Media Left, Content Right) --}}
        <div class="toast-feature-row" data-aos="fade-up">
          <div class="toast-feature-media">
            <div class="toast-img-frame">
              <span class="toast-media-badge">Kitchen Stations</span>
              <img src="https://images.unsplash.com/photo-1556910103-1c02745aae4d?q=80&w=900&auto=format&fit=crop" alt="Multiple Kitchens" loading="lazy">
            </div>
          </div>
          <div class="toast-feature-content">
            <div class="toast-feature-pill">Kitchen Stations</div>
            <h3 class="toast-feature-title">Multiple Kitchen Management</h3>
            <p class="toast-feature-desc">Organize multiple preparation stations like Grill, Pizza Oven, Bakery, and Beverage Bar seamlessly.</p>
            <ul class="toast-check-list">
              <li class="toast-check-item">
                <span class="toast-check-icon"><svg viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg></span>
                <span>Station-specific item routing (Grill, Bar, Bakery)</span>
              </li>
              <li class="toast-check-item">
                <span class="toast-check-icon"><svg viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg></span>
                <span>Independent station printers or digital screens where supported</span>
              </li>
              <li class="toast-check-item">
                <span class="toast-check-icon"><svg viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg></span>
                <span>Reduced chaos and cross-kitchen congestion</span>
              </li>
              <li class="toast-check-item">
                <span class="toast-check-icon"><svg viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg></span>
                <span>Available in applicable multi-station plans</span>
              </li>
            </ul>
          </div>
        </div>

        {{-- Row 4: Multiple Branch Management (Media Right, Content Left - Reverse) --}}
        <div class="toast-feature-row reverse" data-aos="fade-up">
          <div class="toast-feature-media">
            <div class="toast-img-frame">
              <span class="toast-media-badge">Multi-Outlet</span>
              <img src="https://images.unsplash.com/photo-1517248135467-4c7edcad34c4?q=80&w=900&auto=format&fit=crop" alt="Multi-Branch Management" loading="lazy">
            </div>
          </div>
          <div class="toast-feature-content">
            <div class="toast-feature-pill">Multi-Outlet</div>
            <h3 class="toast-feature-title">Multiple Branch Management</h3>
            <p class="toast-feature-desc">Control multiple restaurant locations and franchise outlets from a single head-office workspace.</p>
            <ul class="toast-check-list">
              <li class="toast-check-item">
                <span class="toast-check-icon"><svg viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg></span>
                <span>1-click branch switching from master admin</span>
              </li>
              <li class="toast-check-item">
                <span class="toast-check-icon"><svg viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg></span>
                <span>Branch-wise sales comparisons &amp; revenue leaderboards</span>
              </li>
              <li class="toast-check-item">
                <span class="toast-check-icon"><svg viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg></span>
                <span>Centralized menu catalog with outlet-level pricing</span>
              </li>
              <li class="toast-check-item">
                <span class="toast-check-icon"><svg viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg></span>
                <span>Inter-branch stock tracking where enabled</span>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>

  {{-- 9. CUSTOMERS & STAFF --}}
  <section class="section" id="sec-staff">
    <div class="w">
      <div class="sec-header" data-aos="fade-up">
        <h2>Give Your Team the Right Tools.</h2>
        <p>Set clear roles, safeguard billing permissions, and coordinate staff with ease.</p>
      </div>

      <div class="toast-feature-list">
        {{-- Row 1: Staff Management (Media Left, Content Right) --}}
        <div class="toast-feature-row" data-aos="fade-up">
          <div class="toast-feature-media">
            <div class="toast-img-frame">
              <span class="toast-media-badge">Team Permissions</span>
              <img src="https://images.unsplash.com/photo-1600565193348-f74bd3c7ccdf?q=80&w=900&auto=format&fit=crop" alt="Staff Management" loading="lazy">
            </div>
          </div>
          <div class="toast-feature-content">
            <div class="toast-feature-pill">Team Permissions</div>
            <h3 class="toast-feature-title">Staff Management</h3>
            <p class="toast-feature-desc">Granular roles and permission controls to manage cashiers, waiters, chefs, and store managers.</p>
            <ul class="toast-check-list">
              <li class="toast-check-item">
                <span class="toast-check-icon"><svg viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg></span>
                <span>Role-based security for Admin, Cashier, Waiter, and Chef</span>
              </li>
              <li class="toast-check-item">
                <span class="toast-check-icon"><svg viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg></span>
                <span>Protection against unauthorized bill edits and discounts</span>
              </li>
              <li class="toast-check-item">
                <span class="toast-check-icon"><svg viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg></span>
                <span>Waiter table assignment &amp; order punching logging</span>
              </li>
              <li class="toast-check-item">
                <span class="toast-check-icon"><svg viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg></span>
                <span>Complete accountability for staff actions</span>
              </li>
            </ul>
          </div>
        </div>

        {{-- Row 2: Delivery Executive Management (Media Right, Content Left - Reverse) --}}
        <div class="toast-feature-row reverse" data-aos="fade-up">
          <div class="toast-feature-media">
            <div class="toast-img-frame">
              <span class="toast-media-badge">Rider Operations</span>
              <img src="https://images.unsplash.com/photo-1526367790999-0150786686a2?q=80&w=900&auto=format&fit=crop" alt="Delivery Management" loading="lazy">
            </div>
          </div>
          <div class="toast-feature-content">
            <div class="toast-feature-pill">Rider Operations</div>
            <h3 class="toast-feature-title">Delivery Executive Management</h3>
            <p class="toast-feature-desc">Keep takeaway delivery operations organized and assign orders to delivery personnel where supported.</p>
            <ul class="toast-check-list">
              <li class="toast-check-item">
                <span class="toast-check-icon"><svg viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg></span>
                <span>Delivery executive profiles &amp; contact logs</span>
              </li>
              <li class="toast-check-item">
                <span class="toast-check-icon"><svg viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg></span>
                <span>Order assignment workflow where supported</span>
              </li>
              <li class="toast-check-item">
                <span class="toast-check-icon"><svg viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg></span>
                <span>Delivery dispatch and handover status</span>
              </li>
              <li class="toast-check-item">
                <span class="toast-check-icon"><svg viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg></span>
                <span>Cash-on-delivery tracking in applicable plans</span>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>

  {{-- 10. REPORTS & BUSINESS --}}
  <section class="section" id="sec-reports">
    <div class="w">
      <div class="sec-header" data-aos="fade-up">
        <h2>Turn Restaurant Data Into Better Decisions.</h2>
        <p>Understand sales, orders, payments, products, inventory and business activity through clear reports.</p>
      </div>

      <div class="toast-feature-list">
        {{-- Row 1: Reports & Analytics (Media Left, Content Right) --}}
        <div class="toast-feature-row" data-aos="fade-up">
          <div class="toast-feature-media">
            <div class="toast-img-frame">
              <span class="toast-media-badge">Live Analytics</span>
              <img src="https://images.unsplash.com/photo-1551288049-bebda4e38f71?q=80&w=900&auto=format&fit=crop" alt="Reports &amp; Analytics" loading="lazy">
            </div>
          </div>
          <div class="toast-feature-content">
            <div class="toast-feature-pill">Analytics Engine</div>
            <h3 class="toast-feature-title">Reports &amp; Analytics</h3>
            <p class="toast-feature-desc">Real-time revenue, item popularity, and peak sales hour intelligence.</p>

            <div style="background:#FFFFFF; border-radius:12px; padding:16px 18px; border:1px solid #E2E8F0; margin-bottom:18px; font-size:13.5px; box-shadow: 0 2px 8px rgba(0,0,0,0.04);">
              <div style="display:flex; justify-content:space-between; margin-bottom:6px;"><span>Today's Sales:</span> <strong style="color:#0A2540;">&#8377;86,450</strong></div>
              <div style="display:flex; justify-content:space-between; margin-bottom:6px;"><span>Total Orders:</span> <strong style="color:#0A2540;">94</strong></div>
              <div style="display:flex; justify-content:space-between; margin-bottom:6px;"><span>Average Order Value:</span> <strong style="color:#0A2540;">&#8377;920</strong></div>
              <div style="display:flex; justify-content:space-between;"><span>Best Seller:</span> <strong style="color:#0A2540;">Margherita Pizza</strong></div>
              <div style="font-size:10.5px; color:#64748B; margin-top:8px; text-align:right;">*Sample demo data</div>
            </div>
            <ul class="toast-check-list">
              <li class="toast-check-item">
                <span class="toast-check-icon"><svg viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg></span>
                <span>Live revenue monitoring and order counter summaries</span>
              </li>
              <li class="toast-check-item">
                <span class="toast-check-icon"><svg viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg></span>
                <span>Average order value and product performance tracking</span>
              </li>
              <li class="toast-check-item">
                <span class="toast-check-icon"><svg viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg></span>
                <span>Best-selling dishes and fast-moving menu item rankings</span>
              </li>
              <li class="toast-check-item">
                <span class="toast-check-icon"><svg viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg></span>
                <span>Peak hour rush analytics for staff scheduling</span>
              </li>
            </ul>
          </div>
        </div>

        {{-- Row 2: Export Reports (Media Right, Content Left - Reverse) --}}
        <div class="toast-feature-row reverse" data-aos="fade-up">
          <div class="toast-feature-media">
            <div class="toast-img-frame">
              <span class="toast-media-badge">Data Export</span>
              <img src="https://images.unsplash.com/photo-1551288049-bebda4e38f71?q=80&w=900&auto=format&fit=crop" alt="Export Reports" loading="lazy">
            </div>
          </div>
          <div class="toast-feature-content">
            <div class="toast-feature-pill">Data Export</div>
            <h3 class="toast-feature-title">Export Reports</h3>
            <p class="toast-feature-desc">Take your business data with you for tax filing, audits, or external spreadsheets.</p>
            <ul class="toast-check-list">
              <li class="toast-check-item">
                <span class="toast-check-icon"><svg viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg></span>
                <span>Date-filtered sales revenue reports</span>
              </li>
              <li class="toast-check-item">
                <span class="toast-check-icon"><svg viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg></span>
                <span>Item-wise order summaries &amp; quantities</span>
              </li>
              <li class="toast-check-item">
                <span class="toast-check-icon"><svg viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg></span>
                <span>Payment breakdown (Cash, UPI, Card)</span>
              </li>
              <li class="toast-check-item">
                <span class="toast-check-icon"><svg viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg></span>
                <span>Inventory consumption &amp; wastage logs</span>
              </li>
            </ul>
          </div>
        </div>

        {{-- Row 3: Customized Settings (Media Left, Content Right) --}}
        <div class="toast-feature-row" data-aos="fade-up">
          <div class="toast-feature-media">
            <div class="toast-img-frame">
              <span class="toast-media-badge">Configuration</span>
              <img src="https://images.unsplash.com/photo-1556740758-90de374c12ad?q=80&w=900&auto=format&fit=crop" alt="Customized Settings" loading="lazy">
            </div>
          </div>
          <div class="toast-feature-content">
            <div class="toast-feature-pill">Configuration</div>
            <h3 class="toast-feature-title">Customized Settings</h3>
            <p class="toast-feature-desc">Configure taxes, receipts, currencies, and dining operational preferences to match your brand.</p>
            <ul class="toast-check-list">
              <li class="toast-check-item">
                <span class="toast-check-icon"><svg viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg></span>
                <span>Custom receipt headers, footers &amp; logos</span>
              </li>
              <li class="toast-check-item">
                <span class="toast-check-icon"><svg viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg></span>
                <span>Flexible GST, VAT, service charges &amp; tips</span>
              </li>
              <li class="toast-check-item">
                <span class="toast-check-icon"><svg viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg></span>
                <span>Operational preferences &amp; currency controls</span>
              </li>
              <li class="toast-check-item">
                <span class="toast-check-icon"><svg viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg></span>
                <span>User settings where supported</span>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>





  {{-- 15. INDUSTRY-SPECIFIC CONCEPTS (TOAST-STYLE HERO BANNER & FLOATING CARD) --}}
  <section class="concepts-banner-section" data-aos="fade-up">
    <!-- Top Photo Banner -->
    <div class="concepts-banner-bg">
      <div class="w" style="text-align: center; display: flex; flex-direction: column; align-items: center; justify-content: center;">
        <h2 class="concepts-banner-title">
          Features That Adapt to Your Business.
        </h2>
      </div>
    </div>

    <!-- Centered Overlapping Floating Card -->
    <div class="concepts-card-wrapper">
      <div class="concepts-floating-card" data-aos="fade-up" data-aos-delay="100">
        <p class="concepts-card-subhead">
          See how Geni Menu works for your business type.
        </p>

        <div class="concepts-grid">
          <!-- 1. Family Restaurant -->
          <div class="concept-item">
            <div class="concept-icon-wrap">
              <svg width="32" height="32" viewBox="0 0 32 32" fill="none">
                <path d="M4 14C4 11 8 9 16 9C24 9 28 11 28 14" stroke="#2563EB" stroke-width="2" stroke-linecap="round"/>
                <path d="M7 14V25M25 14V25" stroke="#2563EB" stroke-width="2" stroke-linecap="round"/>
                <circle cx="16" cy="18" r="5" fill="#FFF7ED" stroke="#F37023" stroke-width="2"/>
                <path d="M10 6C10 4.5 11 3.5 12.5 3.5C14 3.5 15 4.5 15 6" stroke="#F37023" stroke-width="1.8" stroke-linecap="round"/>
                <path d="M17 6C17 4.5 18 3.5 19.5 3.5C21 3.5 22 4.5 22 6" stroke="#F37023" stroke-width="1.8" stroke-linecap="round"/>
              </svg>
            </div>
            <span class="concept-label">Family Restaurant</span>
          </div>

          <!-- 2. Dine-in Restaurant -->
          <div class="concept-item">
            <div class="concept-icon-wrap">
              <svg width="32" height="32" viewBox="0 0 32 32" fill="none">
                <rect x="5" y="10" width="22" height="5" rx="2" fill="#EFF6FF" stroke="#2563EB" stroke-width="2"/>
                <path d="M9 15V26M23 15V26" stroke="#2563EB" stroke-width="2" stroke-linecap="round"/>
                <circle cx="16" cy="7" r="3" fill="#FFF7ED" stroke="#F37023" stroke-width="2"/>
                <path d="M14 26H18" stroke="#2563EB" stroke-width="2" stroke-linecap="round"/>
              </svg>
            </div>
            <span class="concept-label">Dine-in Restaurant</span>
          </div>

          <!-- 3. Fine Dining -->
          <div class="concept-item">
            <div class="concept-icon-wrap">
              <svg width="32" height="32" viewBox="0 0 32 32" fill="none">
                <path d="M4 23C4 23 9 25 16 25C23 25 28 23 28 23H4Z" fill="#EFF6FF" stroke="#2563EB" stroke-width="2" stroke-linejoin="round"/>
                <line x1="2" y1="23" x2="30" y2="23" stroke="#2563EB" stroke-width="2" stroke-linecap="round"/>
                <path d="M7 21C7 14 11 10 16 10C21 10 25 14 25 21H7Z" fill="#FFF7ED" stroke="#2563EB" stroke-width="2" stroke-linejoin="round"/>
                <circle cx="16" cy="8" r="2.2" fill="#F37023"/>
                <path d="M13 5L14 7" stroke="#F37023" stroke-width="1.5" stroke-linecap="round"/>
                <path d="M19 5L18 7" stroke="#F37023" stroke-width="1.5" stroke-linecap="round"/>
              </svg>
            </div>
            <span class="concept-label">Fine Dining</span>
          </div>

          <!-- 4. Quick Service (QSR) -->
          <div class="concept-item">
            <div class="concept-icon-wrap">
              <svg width="32" height="32" viewBox="0 0 32 32" fill="none">
                <path d="M6 11L8.2 26C8.3 26.8 9 27.5 9.8 27.5H16.2C17 27.5 17.7 26.8 17.8 26L19 18" stroke="#2563EB" stroke-width="2" stroke-linecap="round"/>
                <path d="M5 11H20" stroke="#2563EB" stroke-width="2" stroke-linecap="round"/>
                <path d="M12.5 11L14 4.5H17" stroke="#2563EB" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M17 15L18.5 27.5H25.5L27 15H17Z" fill="#FFF7ED" stroke="#F37023" stroke-width="2" stroke-linejoin="round"/>
                <path d="M19.5 15V9" stroke="#F37023" stroke-width="2" stroke-linecap="round"/>
                <path d="M22.5 15V7.5" stroke="#F37023" stroke-width="2" stroke-linecap="round"/>
                <path d="M25.5 15V10" stroke="#F37023" stroke-width="2" stroke-linecap="round"/>
              </svg>
            </div>
            <span class="concept-label">Quick Service (QSR)</span>
          </div>

          <!-- 5. Takeaway Restaurant -->
          <div class="concept-item">
            <div class="concept-icon-wrap">
              <svg width="32" height="32" viewBox="0 0 32 32" fill="none">
                <path d="M6 11L8 26C8.2 27 9 27.5 10 27.5H22C23 27.5 23.8 27 24 26L26 11H6Z" fill="#EFF6FF" stroke="#2563EB" stroke-width="2" stroke-linejoin="round"/>
                <path d="M11 11V8C11 5.8 12.8 4 15 4H17C19.2 4 21 5.8 21 8V11" stroke="#F37023" stroke-width="2" stroke-linecap="round"/>
                <line x1="10" y1="17" x2="22" y2="17" stroke="#F37023" stroke-width="1.8" stroke-linecap="round"/>
              </svg>
            </div>
            <span class="concept-label">Takeaway Restaurant</span>
          </div>

          <!-- 6. Cafes & Coffee -->
          <div class="concept-item">
            <div class="concept-icon-wrap">
              <svg width="32" height="32" viewBox="0 0 32 32" fill="none">
                <path d="M7 13H21V19C21 22.3 18.3 25 15 25H13C9.7 25 7 22.3 7 19V13Z" fill="#EFF6FF" stroke="#2563EB" stroke-width="2" stroke-linejoin="round"/>
                <path d="M21 15H23.5C24.9 15 26 16.1 26 17.5C26 18.9 24.9 20 23.5 20H21" stroke="#2563EB" stroke-width="2" stroke-linecap="round"/>
                <path d="M5 26.5H23" stroke="#2563EB" stroke-width="2" stroke-linecap="round"/>
                <path d="M10 9C10 7 12 7 12 5" stroke="#F37023" stroke-width="2" stroke-linecap="round"/>
                <path d="M14 9C14 7 16 7 16 5" stroke="#F37023" stroke-width="2" stroke-linecap="round"/>
                <path d="M18 9C18 7 20 7 20 5" stroke="#F37023" stroke-width="2" stroke-linecap="round"/>
              </svg>
            </div>
            <span class="concept-label">Caf&eacute;s &amp; Coffee</span>
          </div>

          <!-- 7. Bakeries & Cake Shops -->
          <div class="concept-item">
            <div class="concept-icon-wrap">
              <svg width="32" height="32" viewBox="0 0 32 32" fill="none">
                <path d="M5 21H27V26C27 27.1 26.1 28 25 28H7C5.9 28 5 27.1 5 26V21Z" fill="#EFF6FF" stroke="#2563EB" stroke-width="2"/>
                <path d="M7 14H25V21H7V14Z" fill="#FFF7ED" stroke="#2563EB" stroke-width="2"/>
                <path d="M7 16C9 17 11 15 13 17C15 15 17 17 19 15C21 17 23 15 25 16" stroke="#F37023" stroke-width="2" stroke-linecap="round"/>
                <path d="M16 14V9" stroke="#F37023" stroke-width="2" stroke-linecap="round"/>
                <circle cx="16" cy="6" r="2" fill="#F37023"/>
              </svg>
            </div>
            <span class="concept-label">Bakeries &amp; Cakes</span>
          </div>

          <!-- 8. Sweet & Snack Shops -->
          <div class="concept-item">
            <div class="concept-icon-wrap">
              <svg width="32" height="32" viewBox="0 0 32 32" fill="none">
                <rect x="6" y="11" width="20" height="15" rx="3" fill="#FFF7ED" stroke="#F37023" stroke-width="2"/>
                <path d="M6 16H26" stroke="#F37023" stroke-width="2"/>
                <path d="M16 11V26" stroke="#F37023" stroke-width="2"/>
                <circle cx="11" cy="13.5" r="1.5" fill="#2563EB"/>
                <circle cx="21" cy="13.5" r="1.5" fill="#2563EB"/>
                <path d="M11 6C13 8 15 11 16 11C17 11 19 8 21 6" stroke="#2563EB" stroke-width="2" stroke-linecap="round"/>
              </svg>
            </div>
            <span class="concept-label">Sweet Shops</span>
          </div>

          <!-- 9. Juice & Beverage -->
          <div class="concept-item">
            <div class="concept-icon-wrap">
              <svg width="32" height="32" viewBox="0 0 32 32" fill="none">
                <path d="M9 7L11 26C11.1 26.8 11.8 27.5 12.6 27.5H19.4C20.2 27.5 20.9 26.8 21 26L23 7H9Z" fill="#EFF6FF" stroke="#2563EB" stroke-width="2" stroke-linejoin="round"/>
                <path d="M8 7H24" stroke="#2563EB" stroke-width="2" stroke-linecap="round"/>
                <path d="M12 15C14 16 18 14 20 15" stroke="#F37023" stroke-width="1.8"/>
                <path d="M18 7L21 2H23" stroke="#F37023" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                <circle cx="7" cy="10" r="3.5" fill="#FFF7ED" stroke="#F37023" stroke-width="1.5"/>
              </svg>
            </div>
            <span class="concept-label">Juice &amp; Beverage</span>
          </div>

          <!-- 10. Pizzerias -->
          <div class="concept-item">
            <div class="concept-icon-wrap">
              <svg width="32" height="32" viewBox="0 0 32 32" fill="none">
                <path d="M6 8.5C12 5.5 20 5.5 26 8.5L16 28L6 8.5Z" fill="#FFFBEB" stroke="#2563EB" stroke-width="2" stroke-linejoin="round"/>
                <path d="M6 8.5C12 5.5 20 5.5 26 8.5" stroke="#F37023" stroke-width="3" stroke-linecap="round"/>
                <circle cx="16" cy="13" r="2.2" fill="#F37023"/>
                <circle cx="12.5" cy="18" r="1.8" fill="#F37023"/>
                <circle cx="19" cy="20" r="1.8" fill="#F37023"/>
                <circle cx="15.5" cy="23.5" r="1.2" fill="#F37023"/>
              </svg>
            </div>
            <span class="concept-label">Pizzerias</span>
          </div>

          <!-- 11. Canteens -->
          <div class="concept-item">
            <div class="concept-icon-wrap">
              <svg width="32" height="32" viewBox="0 0 32 32" fill="none">
                <rect x="4" y="9" width="24" height="17" rx="3" fill="#EFF6FF" stroke="#2563EB" stroke-width="2"/>
                <rect x="7" y="12" width="8" height="6" rx="1.5" fill="#FFF7ED" stroke="#F37023" stroke-width="1.5"/>
                <rect x="17" y="12" width="8" height="6" rx="1.5" fill="#FFF7ED" stroke="#F37023" stroke-width="1.5"/>
                <rect x="7" y="20" width="18" height="3.5" rx="1" fill="#FFFFFF" stroke="#2563EB" stroke-width="1.5"/>
              </svg>
            </div>
            <span class="concept-label">Canteens &amp; Cafeterias</span>
          </div>

          <!-- 12. Bars & Breweries -->
          <div class="concept-item">
            <div class="concept-icon-wrap">
              <svg width="32" height="32" viewBox="0 0 32 32" fill="none">
                <path d="M6 8L16 19L26 8H6Z" fill="#EFF6FF" stroke="#2563EB" stroke-width="2" stroke-linejoin="round"/>
                <line x1="16" y1="19" x2="16" y2="26" stroke="#2563EB" stroke-width="2" stroke-linecap="round"/>
                <line x1="11" y1="26" x2="21" y2="26" stroke="#2563EB" stroke-width="2" stroke-linecap="round"/>
                <circle cx="24" cy="7" r="4.5" fill="#FFF7ED" stroke="#F37023" stroke-width="1.8"/>
                <path d="M24 2.5V11.5M19.5 7H28.5" stroke="#F37023" stroke-width="1"/>
              </svg>
            </div>
            <span class="concept-label">Bars &amp; Breweries</span>
          </div>
        </div>

        <!-- Action Buttons -->
        <div class="concepts-card-actions">
          <a href="{{ route('solutions') }}" class="concept-btn-primary">
            <span>Explore Solutions</span>
            <svg width="15" height="15" viewBox="0 0 16 16" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round">
              <path d="M6 12l4-4-4-4"/>
            </svg>
          </a>
          <a href="{{ route('contact.us') }}" class="concept-btn-secondary">
            <span>Schedule a Demo</span>
            <svg width="15" height="15" viewBox="0 0 16 16" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round">
              <path d="M6 12l4-4-4-4"/>
            </svg>
          </a>
        </div>
      </div>
    </div>
  </section>

  {{-- 16. PLAN CTA --}}
  <section class="section">
    <div class="w">
      <div class="sec-header" data-aos="fade-up">
        <div class="sec-eyebrow">FLEXIBLE PLANS</div>
        <h2>Choose the Features Your Business Needs.</h2>
        <p>Start with essential operations and unlock more capabilities as your restaurant grows.</p>
      </div>

      <div style="display:flex; justify-content:center; align-items:center; gap:20px; flex-wrap:wrap; margin-bottom:36px;" data-aos="fade-up">
        <div style="background:#fff; padding:18px 24px; border-radius:12px; border:1px solid var(--line); text-align:center; min-width:200px;">
          <strong style="color:var(--br);">STANDARD</strong>
          <div style="font-size:13px; color:var(--ink-soft); margin-top:4px;">Essential Operations</div>
        </div>
        <span style="font-size:22px; color:var(--gold);">&rarr;</span>
        <div style="background:#fff; padding:18px 24px; border-radius:12px; border:1.5px solid var(--br); text-align:center; min-width:200px; box-shadow:var(--shadow-sm);">
          <strong style="color:var(--br);">PREMIUM</strong>
          <div style="font-size:13px; color:var(--ink-soft); margin-top:4px;">Complete Business Suite</div>
        </div>
        <span style="font-size:22px; color:var(--gold);">&rarr;</span>
        <div style="background:#fff; padding:18px 24px; border-radius:12px; border:1px solid var(--line); text-align:center; min-width:200px;">
          <strong style="color:var(--br);">ENTERPRISE</strong>
          <div style="font-size:13px; color:var(--ink-soft); margin-top:4px;">Advanced &amp; Multi-Branch</div>
        </div>
      </div>

      <div style="text-align:center;">
        <a href="{{ route('pricing') }}" class="btn p">Compare Plans &rarr;</a>
      </div>
    </div>
  </section>

  {{-- 17. FAQ (International Tier-1 SaaS Layout) --}}
  <section class="faq-section" id="faq">
    <div class="w">
      <div class="faq-layout">
        <!-- Left Column: Header & Support Contact Card -->
        <div class="faq-left-col" data-aos="fade-right">
          <div class="sec-eyebrow">
            <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><path d="M9.09 9a3 3 0 0 1 5.83 1c0 2-3 3-3 3"/><line x1="12" y1="17" x2="12.01" y2="17"/></svg>
            FREQUENTLY ASKED QUESTIONS
          </div>
          <h2 class="faq-main-title">
            Questions About<br>
            <span style="color:var(--br); font-weight:700;">Geni Menu Features.</span>
          </h2>
          <p class="faq-lead-desc">
            Everything you need to know about setting up features, KOT tickets, kitchen routing, inventory tracking, and multi-branch operations.
          </p>

          <!-- Help / Contact Card -->
          <div class="faq-support-card">
            <div class="faq-support-header">
              <div class="faq-support-icon">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"/></svg>
              </div>
              <div>
                <h4 class="faq-support-title">Still have questions?</h4>
                <span style="font-size: 12px; color: #627D98; font-weight: 500;">We're here to help anytime</span>
              </div>
            </div>
            <p class="faq-support-text">Can't find what you're looking for? Talk directly with our restaurant technology experts.</p>
            <div class="faq-support-actions">
              <a href="{{ route('restaurant_signup') }}" class="faq-support-btn-primary">Book a Demo &rarr;</a>
              <a href="{{ route('contact.us') }}" class="faq-support-link">Contact Support &rarr;</a>
            </div>
          </div>
        </div>

        <!-- Right Column: Accordion Items -->
        <div class="faq-right-col" data-aos="fade-left">
          <div class="faq-accordion-list">
            <div class="faq-row open">
              <button type="button">What features does Geni Menu include? <i>+</i></button>
              <div class="faq-answer-wrap">
                <div>
                  <p>Geni Menu includes menu management, order management, POS, KOT, kitchen, table management, reservations, inventory, customers, staff and reports, with availability depending on your plan and configuration.</p>
                </div>
              </div>
            </div>

            <div class="faq-row">
              <button type="button">Can I use only the features I need? <i>+</i></button>
              <div class="faq-answer-wrap">
                <div>
                  <p>Feature availability depends on your selected plan and business configuration. You can start with basic counter billing and activate kitchen or inventory modules as needed.</p>
                </div>
              </div>
            </div>

            <div class="faq-row">
              <button type="button">Can I upgrade my features later? <i>+</i></button>
              <div class="faq-answer-wrap">
                <div>
                  <p>Yes. You can move to a higher plan as your business requirements grow without losing any of your existing products, customers, or historical reports.</p>
                </div>
              </div>
            </div>

            <div class="faq-row">
              <button type="button">Does Geni Menu support multiple branches? <i>+</i></button>
              <div class="faq-answer-wrap">
                <div>
                  <p>Multi-branch capabilities with central head-office reporting, outlet switching, and branch-level inventory are available in applicable plans and enterprise configurations.</p>
                </div>
              </div>
            </div>

            <div class="faq-row">
              <button type="button">Can I manage inventory? <i>+</i></button>
              <div class="faq-answer-wrap">
                <div>
                  <p>Yes. Real-time ingredient tracking, low-stock visibility, and wastage adjustments are available in selected subscription plans.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  {{-- 18. FINAL CTA SECTION (TOAST-STYLE EXPERT SWITCH) --}}
  <section class="ft-cta-section" data-aos="fade-up">
    <div class="w">
      <div class="ft-cta-content">
        <h2 class="toast-expert-title">Talk to an expert about a switch to Geni Menu</h2>
        <p class="toast-expert-subhead">Get a personalized online demo for your restaurant</p>
        
        <div class="toast-expert-btn-wrap">
          <a href="{{ route('restaurant_signup') }}" class="toast-expert-cta-btn">Get a Demo</a>
        </div>
      </div>
    </div>
  </section>

</div>

{{-- AOS & Page Interactive Scripts --}}
<script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
<script>
document.addEventListener('DOMContentLoaded', function() {
  // 1. Initialize AOS
  if (typeof AOS !== 'undefined') {
    AOS.init({ duration: 600, once: true, offset: 40 });
  }

  // 2. FAQ Accordion Toggle
  var faqRows = document.querySelectorAll('.faq-row');
  faqRows.forEach(function(row) {
    var btn = row.querySelector('button');
    if (btn) {
      btn.addEventListener('click', function() {
        var isOpen = row.classList.contains('open');
        faqRows.forEach(function(r) { r.classList.remove('open'); });
        if (!isOpen) {
          row.classList.add('open');
        }
      });
    }
  });



  // 5. Hero Modifier Card Interactive Selection
  var modOptions = document.querySelectorAll('.mod-option-item');
  modOptions.forEach(function(opt) {
    opt.addEventListener('click', function(e) {
      e.preventDefault();
      modOptions.forEach(function(o) {
        o.classList.remove('selected');
        var dot = o.querySelector('.mod-radio-dot');
        if (dot) dot.innerHTML = '';
      });
      this.classList.add('selected');
      var thisDot = this.querySelector('.mod-radio-dot');
      if (thisDot) {
        thisDot.innerHTML = '<span class="mod-radio-inner"></span>';
      }
    });
  });

  var modClose = document.querySelector('.mod-card-close');
  if (modClose) {
    modClose.addEventListener('click', function() {
      var card = document.querySelector('.hero-floating-modifier-card');
      if (card) {
        card.style.opacity = '0.4';
        setTimeout(function() { card.style.opacity = '1'; }, 400);
      }
    });
  }
});
</script>

@endsection
