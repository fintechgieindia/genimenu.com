@php
    $meta = [
        'title' => 'Features | Geni Menu Connected Restaurant Management Platform',
        'description' => 'Explore the complete Geni Menu restaurant management suite: digital menus, live orders, kitchen KOT coordination, POS billing, tables, reservations, inventory, and reporting.',
        'keywords' => 'restaurant ERP features, restaurant POS features, KOT software, kitchen order ticket software, table management software, reservation management software, restaurant inventory software, restaurant staff management software, multi-branch restaurant software, restaurant billing software, Geni Menu features',
    ];
@endphp

@extends('layouts.frontend-master')

@section('content')

{{-- Google & CDN Fonts: Effra (Homepage Heading Font), Plus Jakarta Sans, Inter --}}
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@500;600;700;800&family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
<link href="https://fonts.cdnfonts.com/css/effra" rel="stylesheet">

{{-- AOS Animation Library --}}
<link href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" rel="stylesheet">

<style>
@import url('https://fonts.cdnfonts.com/css/effra');

  /* ==========================================================================
     CLEAN INTERNATIONAL SAAS DESIGN SYSTEM & THEME (HOMEPAGE COLOR PALETTE)
     ========================================================================== */
  :root {
    --font-heading: 'Effra', sans-serif;
    --font-display: 'Plus Jakarta Sans', -apple-system, BlinkMacSystemFont, 'Segoe UI', sans-serif;
    --font-body: 'Inter', system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;

    /* Homepage Brand Honey-Amber Accent Palette */
    --br: #B45309;
    --br-dark: #92400E;
    --br-light: #FEF3C7;
    --br-gold: #D97706;

    --amber: #B45309;
    --amber-dark: #92400E;
    --amber-light: #FEF3C7;
    --amber-gold: #D97706;

    /* Homepage High-Tech Slate-Navy & Canvas Palette */
    --bg: #F6F9FC;
    --bg-white: #FFFFFF;
    --bg-slate: #F6F9FC;
    --bg-subtle: #EEF2F6;

    --ink: #0A2540;
    --ink-dark: #0A192F;
    --ink-deep: #081424;
    --ink-light: #1A365D;

    --mute: #425466;
    --mute-light: #627D98;

    --line: #E3E8EE;
    --line-solid: #E3E8EE;
    --line-light: #F1F5F9;

    --card: #FFFFFF;
    --green-live: #10B981;
    
    --radius-sm: 8px;
    --radius-md: 14px;
    --radius-lg: 20px;
    --radius-xl: 26px;
    --radius-pill: 9999px;
    
    --shadow-sm: 0 2px 4px rgba(50, 50, 93, 0.05), 0 1px 3px rgba(0, 0, 0, 0.04);
    --shadow-md: 0 6px 12px -2px rgba(50, 50, 93, 0.08), 0 3px 7px -3px rgba(0, 0, 0, 0.07);
    --shadow-lg: 0 13px 27px -5px rgba(50, 50, 93, 0.12), 0 8px 16px -8px rgba(0, 0, 0, 0.15);
    --shadow-device: 0 20px 50px rgba(10, 37, 64, 0.12), 0 4px 12px rgba(0, 0, 0, 0.04);
    
    --max-w: 1240px;
  }

  * { box-sizing: border-box; }
  ::selection { background: #0A2540; color: #FFFFFF; }

  html {
    overflow-x: clip !important;
    overflow-y: auto !important;
    scroll-behavior: smooth;
  }

  body {
    overflow-x: clip !important;
    overflow-y: visible !important;
    min-height: 100vh;
    background: var(--bg-slate) !important;
    color: var(--ink);
  }

  body, html, #main-content, main, .ft-page {
    background: var(--bg-slate) !important;
  }

  #main-content, main {
    height: auto !important;
    overflow: visible !important;
  }

  /* Scoped Page Wrapper - Strictly Zero Italics */
  .ft-page {
    background: var(--bg-slate) !important;
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

  .ft-container {
    max-width: var(--max-w);
    margin: 0 auto;
    padding: 0 24px;
    width: 100%;
    position: relative;
    z-index: 2;
  }

  /* Typography System — Homogeneous with Homepage */
  .ft-page h1 {
    font-family: 'Plus Jakarta Sans', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
    color: var(--ink);
    margin: 0;
    letter-spacing: -0.035em;
  }

  .ft-page h2 {
    font-family: 'Effra', sans-serif;
    color: var(--ink);
    margin: 0;
    letter-spacing: normal;
  }

  .ft-page h3,
  .ft-page h4,
  .ft-page h5,
  .ft-page h6 {
    font-family: 'Effra', sans-serif;
    color: var(--ink);
    margin: 0;
    letter-spacing: normal;
  }

  .ft-page p {
    font-family: 'Inter', system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
    color: var(--mute);
    margin: 0;
    font-size: 16px;
    line-height: 1.65;
    letter-spacing: -0.01em;
  }

  /* Eyebrow Label */
  .ft-eyebrow {
    display: inline-flex;
    align-items: center;
    gap: 8px;
    font-family: 'Plus Jakarta Sans', sans-serif;
    font-size: 11.5px;
    font-weight: 700;
    letter-spacing: 0.1em;
    text-transform: uppercase;
    color: var(--amber);
    background: var(--amber-light);
    border: 1px solid rgba(217, 119, 6, 0.25);
    padding: 6px 14px;
    border-radius: var(--radius-pill);
    margin-bottom: 18px;
    box-shadow: 0 1px 3px rgba(50, 50, 93, 0.05);
  }

  /* Button System */
  .btn-ink-solid {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    gap: 8px;
    background: var(--ink);
    color: #FFFFFF !important;
    font-family: 'Plus Jakarta Sans', sans-serif;
    font-size: 15px;
    font-weight: 700;
    padding: 13px 30px;
    border-radius: var(--radius-pill);
    text-decoration: none;
    border: 1.5px solid var(--ink);
    transition: all 0.22s cubic-bezier(0.16, 1, 0.3, 1);
    box-shadow: 0 4px 14px rgba(10, 37, 64, 0.22);
    cursor: pointer;
  }

  .btn-ink-solid:hover {
    background: var(--ink-light);
    border-color: var(--ink-light);
    transform: translateY(-2px);
    box-shadow: 0 8px 22px rgba(10, 37, 64, 0.32);
    color: #FFFFFF !important;
  }

  .btn-ink-outline {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    gap: 8px;
    background: #FFFFFF;
    color: var(--ink) !important;
    font-family: 'Plus Jakarta Sans', sans-serif;
    font-size: 15px;
    font-weight: 700;
    padding: 13px 30px;
    border-radius: var(--radius-pill);
    text-decoration: none;
    border: 1.5px solid var(--line);
    box-shadow: var(--shadow-sm);
    transition: all 0.22s cubic-bezier(0.16, 1, 0.3, 1);
    cursor: pointer;
  }

  .btn-ink-outline:hover {
    background: var(--bg-slate);
    border-color: #CBD5E1;
    transform: translateY(-2px);
    color: var(--ink) !important;
  }

  /* Section Spacing & Alternating Rhythm */
  .ft-section {
    padding: 100px 0;
    position: relative;
    background: var(--bg-white);
  }

  .ft-section.bg-alt {
    background: var(--bg-slate);
    border-top: 1px solid var(--line);
    border-bottom: 1px solid var(--line);
  }

  /* Section Header (Centered) */
  .sec-heading-center {
    text-align: center;
    max-width: 780px;
    margin: 0 auto 60px;
  }

  .sec-heading-center h2 {
    font-family: 'Effra', sans-serif;
    font-size: clamp(32px, 3.8vw, 44px);
    font-weight: 700;
    line-height: 1.18;
    margin-bottom: 16px;
    letter-spacing: normal;
    color: var(--ink);
  }

  .sec-heading-center p {
    font-size: 17.5px;
    color: var(--mute);
    line-height: 1.6;
  }

  /* ==========================================================================
     1. HERO SECTION — SPLIT-SCREEN INTERACTIVE 3D STACK
     ========================================================================== */
  .ft-hero {
    position: relative;
    padding: 95px 0 100px !important;
    background: linear-gradient(180deg, #FFFFFF 0%, #F8FAFC 55%, #F1F5F9 100%) !important;
    border-bottom: 1px solid var(--line);
    overflow: hidden;
    color: var(--ink);
  }

  .ft-hero-mesh-glow {
    position: absolute;
    top: -120px;
    right: -80px;
    width: 720px;
    height: 720px;
    background: radial-gradient(circle, rgba(217, 119, 6, 0.08) 0%, rgba(10, 37, 64, 0.04) 45%, transparent 70%);
    pointer-events: none;
    z-index: 1;
  }

  .ft-hero .ft-container {
    position: relative;
    z-index: 2;
  }

  .ft-hero-split-grid {
    display: grid;
    grid-template-columns: 48% 52%;
    gap: 48px;
    align-items: center;
  }

  /* Left Column: Typography & CTAs */
  .ft-hero-left {
    max-width: 580px;
  }

  .hero-eyebrow-pill {
    display: inline-flex;
    align-items: center;
    gap: 8px;
    background: var(--amber-light);
    color: var(--amber);
    font-family: 'Plus Jakarta Sans', -apple-system, sans-serif;
    font-size: 11.5px;
    font-weight: 700;
    text-transform: uppercase;
    letter-spacing: 0.1em;
    padding: 6px 14px;
    border-radius: var(--radius-pill);
    margin-bottom: 20px;
    border: 1px solid rgba(217, 119, 6, 0.25);
    box-shadow: 0 1px 3px rgba(50, 50, 93, 0.05);
  }

  .hero-eyebrow-pill::before {
    content: '';
    display: inline-block;
    width: 7px;
    height: 7px;
    border-radius: 50%;
    background: #10B981;
    box-shadow: 0 0 8px #10B981;
    animation: pulseLiveBeacon 2s infinite ease-in-out;
  }

  @keyframes pulseLiveBeacon {
    0%, 100% { transform: scale(1); opacity: 1; }
    50% { transform: scale(1.3); opacity: 0.7; }
  }

  .hero-eyebrow-pill svg {
    width: 13px;
    height: 13px;
    fill: #D97706;
  }

  .ft-hero-title {
    font-family: 'Plus Jakarta Sans', system-ui, -apple-system, sans-serif;
    font-weight: 800;
    font-size: clamp(38px, 4.4vw, 56px);
    line-height: 1.1;
    letter-spacing: -0.035em;
    color: var(--ink);
    margin: 0 0 18px;
  }

  .ft-hero-title span.accent-gold {
    background: linear-gradient(135deg, #B45309 0%, #D97706 100%);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    display: inline-block;
  }

  .ft-hero-lead {
    font-family: 'Inter', system-ui, sans-serif;
    font-size: 17px;
    line-height: 1.65;
    color: var(--mute);
    margin: 0 0 32px;
  }

  .ft-hero-cta-row {
    display: flex;
    align-items: center;
    gap: 16px;
    margin-bottom: 28px;
    flex-wrap: wrap;
  }

  .ft-btn-primary {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    gap: 8px;
    background: var(--ink);
    color: #FFFFFF !important;
    font-family: 'Plus Jakarta Sans', sans-serif;
    font-size: 15.5px;
    font-weight: 700;
    padding: 14px 32px;
    border-radius: var(--radius-pill);
    text-decoration: none;
    border: 1.5px solid var(--ink);
    box-shadow: 0 6px 18px rgba(10, 37, 64, 0.22);
    transition: all 0.22s cubic-bezier(0.16, 1, 0.3, 1);
    cursor: pointer;
  }

  .ft-btn-primary:hover {
    background: var(--ink-light);
    border-color: var(--ink-light);
    transform: translateY(-2px);
    box-shadow: 0 10px 26px rgba(10, 37, 64, 0.32);
    color: #FFFFFF !important;
  }

  .ft-btn-secondary {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    gap: 8px;
    background: #FFFFFF;
    color: var(--ink) !important;
    font-family: 'Plus Jakarta Sans', sans-serif;
    font-size: 15.5px;
    font-weight: 700;
    padding: 14px 30px;
    border-radius: var(--radius-pill);
    text-decoration: none;
    border: 1.5px solid var(--line);
    box-shadow: var(--shadow-sm);
    transition: all 0.22s cubic-bezier(0.16, 1, 0.3, 1);
    cursor: pointer;
  }

  .ft-btn-secondary:hover {
    background: var(--bg-slate);
    border-color: #CBD5E1;
    transform: translateY(-2px);
    color: var(--ink) !important;
  }

  .ft-hero-trust-row {
    display: flex;
    align-items: center;
    gap: 18px;
    flex-wrap: wrap;
    font-size: 13.5px;
    color: var(--mute-light);
  }

  .ft-trust-item {
    display: inline-flex;
    align-items: center;
    gap: 6px;
    font-weight: 500;
  }

  .ft-trust-item svg {
    color: #10B981;
    width: 14px;
    height: 14px;
    flex-shrink: 0;
  }

  /* Right Column: Interactive 3D Stack Stage */
  .ft-hero-right {
    position: relative;
    width: 100%;
    min-height: 520px;
    perspective: 1200px;
    display: flex;
    align-items: center;
    justify-content: center;
  }

  .stack-stage-container {
    position: relative;
    width: 100%;
    max-width: 620px;
    height: 500px;
    transform-style: preserve-3d;
  }

  /* Base Card: Main Dashboard Command Center */
  .stack-base-card {
    position: absolute;
    top: 35px;
    left: 20px;
    right: 20px;
    background: #FFFFFF;
    border: 1px solid var(--line);
    border-radius: var(--radius-lg);
    box-shadow: 0 20px 48px rgba(10, 37, 64, 0.1), 0 4px 12px rgba(0, 0, 0, 0.04);
    overflow: hidden;
    z-index: 2;
    transition: transform 0.3s ease, box-shadow 0.3s ease;
  }

  .stack-base-card:hover {
    transform: translateY(-3px);
    box-shadow: 0 26px 56px rgba(10, 37, 64, 0.14);
  }

  .stack-header-bar {
    background: #F8FAFC;
    border-bottom: 1px solid var(--line);
    padding: 10px 16px;
    display: flex;
    align-items: center;
    justify-content: space-between;
  }

  .stack-header-dots {
    display: flex;
    gap: 6px;
  }

  .stack-dot {
    width: 8.5px;
    height: 8.5px;
    border-radius: 50%;
  }
  .stack-dot.r { background: #FF5F56; }
  .stack-dot.y { background: #FFBD2E; }
  .stack-dot.g { background: #27C93F; }

  .stack-url-tag {
    background: #FFFFFF;
    border: 1px solid var(--line);
    border-radius: 6px;
    padding: 3px 12px;
    font-size: 11px;
    color: var(--mute-light);
    font-family: 'Inter', monospace;
  }

  .stack-live-pill {
    display: inline-flex;
    align-items: center;
    gap: 5px;
    font-size: 10.5px;
    font-weight: 700;
    color: #10B981;
    font-family: 'Plus Jakarta Sans', sans-serif;
  }

  .stack-live-pill::before {
    content: '';
    width: 6px;
    height: 6px;
    border-radius: 50%;
    background: #10B981;
    animation: pulseGreen 1.5s infinite;
  }

  .stack-base-body {
    padding: 20px 22px;
  }

  .stack-metrics-grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 12px;
    margin-bottom: 18px;
  }

  .stack-metric-box {
    background: var(--bg-slate);
    border: 1px solid var(--line);
    border-radius: var(--radius-sm);
    padding: 10px 12px;
  }

  .stack-metric-label {
    font-size: 11px;
    font-weight: 600;
    color: var(--mute-light);
    text-transform: uppercase;
    letter-spacing: 0.05em;
    margin-bottom: 4px;
  }

  .stack-metric-val {
    font-family: 'Plus Jakarta Sans', sans-serif;
    font-size: 18px;
    font-weight: 800;
    color: var(--ink);
  }

  .stack-metric-val.green { color: #10B981; }

  .stack-tables-row {
    display: grid;
    grid-template-columns: repeat(6, 1fr);
    gap: 8px;
  }

  .stack-table-pill {
    border: 1px solid var(--line);
    border-radius: 8px;
    padding: 8px 4px;
    text-align: center;
    font-size: 11px;
    font-weight: 700;
    background: #FFFFFF;
    color: var(--ink);
  }

  .stack-table-pill.active {
    background: #DEF7EC;
    border-color: #31C48D;
    color: #03543F;
  }

  .stack-table-pill.busy {
    background: #FEF3C7;
    border-color: #F59E0B;
    color: #92400E;
  }

  .stack-table-pill small {
    display: block;
    font-size: 9.5px;
    font-weight: 500;
    color: inherit;
    opacity: 0.85;
  }

  /* Floating Layer 1 (Top Left): Live POS Checkout Card */
  .stack-card-pos {
    position: absolute;
    top: 0;
    left: -16px;
    width: 250px;
    background: rgba(255, 255, 255, 0.95);
    border: 1.5px solid rgba(16, 185, 129, 0.35);
    border-radius: var(--radius-md);
    box-shadow: 0 16px 36px rgba(10, 37, 64, 0.16), 0 2px 8px rgba(0, 0, 0, 0.04);
    backdrop-filter: blur(12px);
    -webkit-backdrop-filter: blur(12px);
    padding: 14px 16px;
    z-index: 5;
    animation: floatLayerA 6s ease-in-out infinite;
    transition: transform 0.25s ease;
  }

  .stack-card-pos:hover {
    transform: scale(1.04) translateY(-4px) !important;
    z-index: 10;
  }

  .card-pos-head {
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding-bottom: 8px;
    border-bottom: 1px solid var(--line);
    margin-bottom: 10px;
  }

  .card-pos-title {
    font-family: 'Plus Jakarta Sans', sans-serif;
    font-size: 12px;
    font-weight: 800;
    color: var(--ink);
    display: flex;
    align-items: center;
    gap: 6px;
  }

  .card-pos-tag {
    font-size: 10px;
    font-weight: 700;
    color: #059669;
    background: #D1FAE5;
    padding: 2px 7px;
    border-radius: 999px;
  }

  .card-pos-items {
    font-size: 11px;
    color: var(--mute);
    display: flex;
    flex-direction: column;
    gap: 4px;
    margin-bottom: 10px;
  }

  .card-pos-item-row {
    display: flex;
    justify-content: space-between;
  }

  .card-pos-total-row {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding-top: 8px;
    border-top: 1px solid var(--line);
    font-family: 'Plus Jakarta Sans', sans-serif;
    font-weight: 800;
    font-size: 13.5px;
    color: var(--ink);
  }

  .card-pos-total-val {
    color: #10B981;
  }

  /* Floating Layer 2 (Bottom Right): Kitchen KDS Ticket */
  .stack-card-kds {
    position: absolute;
    bottom: -10px;
    right: -14px;
    width: 270px;
    background: #0A192F;
    border: 1px solid rgba(255, 255, 255, 0.18);
    border-radius: var(--radius-md);
    box-shadow: 0 20px 42px rgba(10, 25, 47, 0.35);
    padding: 14px 16px;
    color: #FFFFFF;
    z-index: 6;
    animation: floatLayerB 6s ease-in-out infinite alternate;
    transition: transform 0.25s ease;
  }

  .stack-card-kds:hover {
    transform: scale(1.04) translateY(-4px) !important;
    z-index: 10;
  }

  .card-kds-head {
    display: flex;
    align-items: center;
    justify-content: space-between;
    margin-bottom: 10px;
  }

  .card-kds-title {
    font-family: 'Plus Jakarta Sans', sans-serif;
    font-size: 12px;
    font-weight: 700;
    color: #FFFFFF;
    display: flex;
    align-items: center;
    gap: 6px;
  }

  .card-kds-timer {
    font-size: 10.5px;
    font-weight: 700;
    color: #FDE68A;
    background: rgba(217, 119, 6, 0.3);
    border: 1px solid rgba(245, 158, 11, 0.4);
    padding: 2px 7px;
    border-radius: 999px;
  }

  .card-kds-items {
    font-size: 11px;
    color: #CBD5E1;
    display: flex;
    flex-direction: column;
    gap: 4px;
    margin-bottom: 10px;
  }

  .card-kds-btn {
    width: 100%;
    background: #10B981;
    color: #FFFFFF;
    border: none;
    border-radius: 6px;
    padding: 7px;
    font-family: 'Plus Jakarta Sans', sans-serif;
    font-size: 11px;
    font-weight: 700;
    text-align: center;
    cursor: default;
  }

  /* Floating Layer 3 (Top Right): Mobile QR Menu Card */
  .stack-card-qr {
    position: absolute;
    top: -24px;
    right: 30px;
    background: #FFFFFF;
    border: 1px solid var(--line);
    border-radius: var(--radius-md);
    box-shadow: 0 14px 32px rgba(10, 37, 64, 0.14);
    padding: 10px 14px;
    display: flex;
    align-items: center;
    gap: 10px;
    z-index: 7;
    animation: floatLayerC 5.5s ease-in-out infinite;
  }

  .stack-card-qr:hover {
    transform: scale(1.05) translateY(-3px) !important;
    z-index: 10;
  }

  .qr-icon-box {
    width: 32px;
    height: 32px;
    border-radius: 8px;
    background: var(--amber-light);
    color: var(--amber);
    display: grid;
    place-items: center;
    flex-shrink: 0;
  }

  .qr-info-title {
    font-family: 'Plus Jakarta Sans', sans-serif;
    font-size: 11.5px;
    font-weight: 700;
    color: var(--ink);
  }

  .qr-info-desc {
    font-size: 10.5px;
    color: var(--mute-light);
  }

  /* Floating Layer 4 (Bottom Left): Live Analytics Metric Pill */
  .stack-card-analytics {
    position: absolute;
    bottom: 24px;
    left: -10px;
    background: #FFFFFF;
    border: 1px solid var(--line);
    border-radius: var(--radius-pill);
    box-shadow: 0 12px 28px rgba(10, 37, 64, 0.12);
    padding: 8px 16px;
    display: flex;
    align-items: center;
    gap: 8px;
    z-index: 8;
    animation: floatLayerD 7s ease-in-out infinite alternate;
  }

  .analytics-dot {
    width: 8px;
    height: 8px;
    border-radius: 50%;
    background: #10B981;
  }

  .analytics-text {
    font-family: 'Plus Jakarta Sans', sans-serif;
    font-size: 11.5px;
    font-weight: 700;
    color: var(--ink);
  }

  .analytics-text span {
    color: #10B981;
  }

  @keyframes floatLayerA {
    0%, 100% { transform: translateY(0); }
    50% { transform: translateY(-7px); }
  }

  @keyframes floatLayerB {
    0%, 100% { transform: translateY(0); }
    50% { transform: translateY(-9px); }
  }

  @keyframes floatLayerC {
    0%, 100% { transform: translateY(0); }
    50% { transform: translateY(-6px); }
  }

  @keyframes floatLayerD {
    0%, 100% { transform: translateY(0); }
    50% { transform: translateY(-8px); }
  }

  /* ==========================================================================
     2. FEATURE NAVIGATION STRIP (Sticky Horizontal Bar)
     ========================================================================== */
  .ft-nav-strip {
    background: #FFFFFF;
    border-bottom: 1px solid var(--line);
    position: sticky;
    top: 70px;
    z-index: 40;
    transition: all 0.2s ease;
    box-shadow: 0 1px 4px rgba(50, 50, 93, 0.04);
  }

  .ft-nav-tabs {
    display: flex;
    align-items: center;
    gap: 28px;
    overflow-x: auto;
    scrollbar-width: none;
    -ms-overflow-style: none;
    padding: 0 4px;
  }

  .ft-nav-tabs::-webkit-scrollbar { display: none; }

  .ft-nav-tab {
    display: inline-flex;
    align-items: center;
    gap: 8px;
    padding: 18px 2px;
    font-family: 'Plus Jakarta Sans', sans-serif;
    font-size: 14px;
    font-weight: 600;
    color: var(--mute);
    text-decoration: none;
    white-space: nowrap;
    border-bottom: 2px solid transparent;
    transition: all 0.2s ease;
    cursor: pointer;
  }

  .ft-nav-tab:hover {
    color: var(--ink);
  }

  .ft-nav-tab.active {
    color: var(--amber);
    border-bottom-color: var(--amber);
    font-weight: 700;
  }

  /* ==========================================================================
     3. FEATURE OVERVIEW (9 Modular Cards Grid)
     ========================================================================== */
  .overview-grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 28px;
  }

  .overview-card {
    background: #FFFFFF;
    border: 1px solid var(--line);
    border-radius: var(--radius-lg);
    padding: 32px 28px;
    box-shadow: var(--shadow-sm);
    transition: transform 0.25s cubic-bezier(0.16, 1, 0.3, 1), box-shadow 0.25s cubic-bezier(0.16, 1, 0.3, 1), border-color 0.25s ease;
    cursor: default;
    display: flex;
    flex-direction: column;
  }

  .overview-card:hover {
    transform: translateY(-4px);
    box-shadow: var(--shadow-md);
    border-color: #CBD5E1;
  }

  .overview-icon-box {
    width: 48px;
    height: 48px;
    border-radius: 14px;
    background: var(--amber-light);
    color: var(--amber);
    display: grid;
    place-items: center;
    margin-bottom: 22px;
    border: 1px solid rgba(217, 119, 6, 0.2);
    transition: all 0.25s ease;
  }

  .overview-card:hover .overview-icon-box {
    background: var(--ink);
    color: #FFFFFF;
    border-color: var(--ink);
    transform: scale(1.05);
  }

  .overview-card h3 {
    font-family: 'Effra', sans-serif;
    font-size: 19px;
    font-weight: 700;
    margin-bottom: 12px;
    letter-spacing: normal;
    color: var(--ink);
    transition: color 0.25s ease;
  }

  .overview-card:hover h3 {
    color: var(--amber);
  }

  .overview-card p {
    font-size: 14.5px;
    color: var(--mute);
    line-height: 1.6;
    margin: 0;
  }

  /* ==========================================================================
     DEEP-DIVE SECTIONS (WITH BESPOKE INTERNATIONAL IMAGES)
     ========================================================================== */
  .split-row {
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    gap: 68px;
    align-items: center;
  }

  .split-row.reverse .split-content-col {
    order: 2;
  }

  .split-row.reverse .split-visual-col {
    order: 1;
  }

  .split-content-col h2 {
    font-family: 'Effra', sans-serif;
    font-size: clamp(30px, 3.4vw, 42px);
    font-weight: 700;
    line-height: 1.2;
    margin-bottom: 18px;
    letter-spacing: normal;
    color: var(--ink);
  }

  .split-lead {
    font-size: 17px;
    color: var(--mute);
    line-height: 1.65;
    margin-bottom: 28px;
  }

  .feature-chips-row {
    display: flex;
    flex-wrap: wrap;
    gap: 8px;
    margin-bottom: 28px;
  }

  .feature-chip {
    display: inline-flex;
    align-items: center;
    gap: 6px;
    background: #FFFFFF;
    border: 1px solid var(--line);
    padding: 6px 14px;
    border-radius: var(--radius-pill);
    font-size: 12px;
    font-weight: 600;
    color: var(--ink);
    box-shadow: 0 1px 2px rgba(50, 50, 93, 0.04);
  }

  .feature-chip svg {
    color: var(--amber);
    flex-shrink: 0;
  }

  .benefit-list {
    list-style: none;
    padding: 0;
    margin: 0 0 36px 0;
    display: flex;
    flex-direction: column;
    gap: 14px;
  }

  .benefit-item {
    display: flex;
    align-items: flex-start;
    gap: 12px;
    font-size: 15.5px;
    color: var(--ink);
    line-height: 1.5;
  }

  .benefit-icon {
    width: 22px;
    height: 22px;
    border-radius: 50%;
    background: var(--ink);
    color: #FFFFFF;
    display: grid;
    place-items: center;
    flex-shrink: 0;
    margin-top: 2px;
  }

  .benefit-icon svg {
    width: 13px;
    height: 13px;
    stroke: currentColor;
    stroke-width: 2.4;
  }

  /* Visual Frames with Bespoke International Images */
  .visual-device-frame {
    position: relative;
    background: #FFFFFF;
    border: 1px solid var(--line);
    border-radius: var(--radius-lg);
    box-shadow: var(--shadow-lg);
    overflow: hidden;
    transition: transform 0.25s ease, box-shadow 0.25s ease;
  }

  .visual-device-frame:hover {
    transform: translateY(-4px);
    box-shadow: 0 20px 40px -10px rgba(10, 37, 64, 0.22);
  }

  .visual-device-frame img {
    width: 100%;
    height: auto;
    aspect-ratio: 4 / 3;
    object-fit: cover;
    display: block;
    transition: transform 0.35s ease;
  }

  .visual-device-frame:hover img {
    transform: scale(1.02);
  }

  /* Cinematic Floating UI Overlay Chip on International Images */
  .visual-overlay-chip {
    position: absolute;
    bottom: 16px;
    left: 16px;
    right: 16px;
    background: rgba(10, 25, 47, 0.88);
    backdrop-filter: blur(14px);
    -webkit-backdrop-filter: blur(14px);
    border: 1px solid rgba(255, 255, 255, 0.2);
    border-radius: var(--radius-md);
    padding: 12px 16px;
    display: flex;
    align-items: center;
    justify-content: space-between;
    gap: 12px;
    box-shadow: 0 8px 24px rgba(0, 0, 0, 0.4);
    color: #FFFFFF;
  }

  .overlay-chip-left {
    display: flex;
    align-items: center;
    gap: 10px;
    min-width: 0;
  }

  .overlay-chip-icon {
    width: 32px;
    height: 32px;
    border-radius: 50%;
    background: rgba(254, 243, 199, 0.15);
    color: #FDE68A;
    display: grid;
    place-items: center;
    flex-shrink: 0;
  }

  .overlay-chip-title {
    font-family: 'Plus Jakarta Sans', sans-serif;
    font-size: 13px;
    font-weight: 700;
    color: #FFFFFF;
    white-space: nowrap;
    overflow: hidden;
    text-overflow: ellipsis;
  }

  .overlay-chip-desc {
    font-size: 11.5px;
    color: #CBD5E1;
    white-space: nowrap;
    overflow: hidden;
    text-overflow: ellipsis;
  }

  .overlay-chip-badge {
    font-size: 11px;
    font-weight: 700;
    color: #34D399;
    background: rgba(16, 185, 129, 0.2);
    border: 1px solid rgba(16, 185, 129, 0.4);
    padding: 4px 10px;
    border-radius: var(--radius-pill);
    white-space: nowrap;
    flex-shrink: 0;
  }

  /* ==========================================================================
     11. CONNECTED WORKFLOW (Custom 5-Stage Timeline)
     ========================================================================== */
  .workflow-timeline {
    display: grid;
    grid-template-columns: repeat(5, 1fr);
    gap: 20px;
    position: relative;
    margin-top: 40px;
  }

  .workflow-timeline::before {
    content: '';
    position: absolute;
    top: 36px;
    left: 8%;
    right: 8%;
    height: 2px;
    background: var(--line);
    z-index: 1;
  }

  .workflow-step-card {
    position: relative;
    z-index: 2;
    background: #FFFFFF;
    border: 1px solid var(--line);
    border-radius: var(--radius-md);
    padding: 28px 20px;
    text-align: center;
    box-shadow: var(--shadow-sm);
    transition: transform 0.25s ease, box-shadow 0.25s ease, border-color 0.25s ease;
  }

  .workflow-step-card:hover {
    transform: translateY(-4px);
    box-shadow: var(--shadow-md);
    border-color: #CBD5E1;
  }

  .step-badge {
    width: 44px;
    height: 44px;
    border-radius: 50%;
    background: var(--ink);
    color: #FFFFFF;
    display: grid;
    place-items: center;
    font-family: 'Plus Jakarta Sans', sans-serif;
    font-size: 14px;
    font-weight: 700;
    margin: 0 auto 18px;
    box-shadow: 0 4px 12px rgba(10, 37, 64, 0.25);
    transition: background 0.25s ease;
  }

  .workflow-step-card:hover .step-badge {
    background: var(--amber);
  }

  .workflow-step-card h4 {
    font-family: 'Effra', sans-serif;
    font-size: 16.5px;
    font-weight: 700;
    margin-bottom: 10px;
    letter-spacing: normal;
    color: var(--ink);
  }

  .workflow-step-card p {
    font-size: 13.5px;
    color: var(--mute);
    line-height: 1.55;
    margin: 0;
  }

  /* ==========================================================================
     12. INTERNATIONAL INDUSTRY SHOWCASE (4 Concept Cards)
     ========================================================================== */
  .industry-grid {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    gap: 24px;
    margin-bottom: 48px;
  }

  .industry-card {
    background: #FFFFFF;
    border: 1px solid var(--line);
    border-radius: var(--radius-md);
    overflow: hidden;
    box-shadow: var(--shadow-sm);
    transition: transform 0.25s ease, box-shadow 0.25s ease;
    cursor: default;
  }

  .industry-card:hover {
    transform: translateY(-4px);
    box-shadow: var(--shadow-md);
  }

  .industry-photo-wrap {
    width: 100%;
    aspect-ratio: 4 / 3;
    overflow: hidden;
    background: #E2E8F0;
  }

  .industry-photo-wrap img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    display: block;
    transition: transform 0.35s ease;
  }

  .industry-card:hover .industry-photo-wrap img {
    transform: scale(1.05);
  }

  .industry-card-body {
    padding: 22px 20px;
  }

  .industry-card-body h3 {
    font-family: 'Effra', sans-serif;
    font-size: 17.5px;
    font-weight: 700;
    margin-bottom: 8px;
    letter-spacing: normal;
    color: var(--ink);
  }

  .industry-card-body p {
    font-size: 14px;
    color: var(--mute);
    line-height: 1.55;
    margin: 0;
  }

  .industry-cta-wrap {
    text-align: center;
  }

  /* ==========================================================================
     13. WHY GENI MENU? (Product Ecosystem & Core Pillars)
     ========================================================================== */
  .why-layout {
    display: grid;
    grid-template-columns: 48% 52%;
    gap: 56px;
    align-items: center;
  }

  .why-content h2 {
    font-family: 'Effra', sans-serif;
    font-size: clamp(30px, 3.4vw, 42px);
    font-weight: 700;
    line-height: 1.2;
    margin-bottom: 16px;
    letter-spacing: normal;
  }

  .why-lead {
    font-size: 17px;
    color: var(--mute);
    line-height: 1.6;
    margin-bottom: 36px;
  }

  .why-benefits-stack {
    display: flex;
    flex-direction: column;
    gap: 22px;
  }

  .why-benefit-item {
    display: flex;
    gap: 16px;
    padding-bottom: 22px;
    border-bottom: 1px solid var(--line-light);
  }

  .why-benefit-item:last-child {
    border-bottom: none;
    padding-bottom: 0;
  }

  .why-icon-box {
    width: 42px;
    height: 42px;
    border-radius: 12px;
    background: var(--amber-light);
    color: var(--amber);
    display: grid;
    place-items: center;
    flex-shrink: 0;
    border: 1px solid rgba(217, 119, 6, 0.2);
  }

  .why-text h4 {
    font-family: 'Effra', sans-serif;
    font-size: 16.5px;
    font-weight: 700;
    margin-bottom: 4px;
    letter-spacing: normal;
    color: var(--ink);
  }

  .why-text p {
    font-size: 14px;
    color: var(--mute);
    line-height: 1.55;
    margin: 0;
  }

  /* ==========================================================================
     14. FAQ SECTION (Accordion)
     ========================================================================== */
  .faq-container {
    max-width: 820px;
    margin: 0 auto;
  }

  .faq-accordion-list {
    display: flex;
    flex-direction: column;
    gap: 14px;
  }

  .faq-card {
    background: #FFFFFF;
    border: 1px solid var(--line);
    border-radius: var(--radius-md);
    overflow: hidden;
    transition: all 0.2s ease;
  }

  .faq-card:hover {
    border-color: #CBD5E1;
  }

  .faq-card.open {
    border-color: var(--ink);
    box-shadow: var(--shadow-sm);
  }

  .faq-header-btn {
    width: 100%;
    background: none;
    border: none;
    padding: 22px 26px;
    display: flex;
    justify-content: space-between;
    align-items: center;
    gap: 16px;
    text-align: left;
    font-family: 'Plus Jakarta Sans', sans-serif;
    font-size: 16.5px;
    font-weight: 700;
    color: var(--ink);
    cursor: pointer;
    outline: none;
  }

  .faq-icon-indicator {
    width: 28px;
    height: 28px;
    border-radius: 50%;
    background: var(--bg-slate);
    color: var(--ink);
    border: 1px solid var(--line);
    display: grid;
    place-items: center;
    flex-shrink: 0;
    transition: transform 0.25s ease, background 0.2s ease, color 0.2s ease;
  }

  .faq-card.open .faq-icon-indicator {
    transform: rotate(45deg);
    background: var(--ink);
    color: #FFFFFF;
    border-color: var(--ink);
  }

  .faq-body-wrap {
    display: grid;
    grid-template-rows: 0fr;
    transition: grid-template-rows 0.3s cubic-bezier(0.16, 1, 0.3, 1);
  }

  .faq-card.open .faq-body-wrap {
    grid-template-rows: 1fr;
  }

  .faq-body-inner {
    overflow: hidden;
  }

  .faq-body-inner p {
    padding: 0 26px 22px;
    color: var(--mute);
    font-size: 15px;
    line-height: 1.65;
    margin: 0;
    border-top: 1px solid var(--line-light);
    padding-top: 14px;
  }

  /* ==========================================================================
     15. FINAL CONVERSION CTA — "LET'S TALK ABOUT YOUR RESTAURANT"
     ========================================================================== */
  .ft-final-cta {
    position: relative;
    background-image: url('{{ asset("assets/images/features/enquiry_banner_bg.jpg") }}') !important;
    background-size: cover !important;
    background-position: center center !important;
    background-repeat: no-repeat !important;
    padding: 120px 0 130px !important;
    text-align: center;
    color: #FFFFFF;
    overflow: hidden;
    border-top: 1px solid rgba(255, 255, 255, 0.14);
  }

  .ft-final-cta::before {
    content: '';
    position: absolute;
    inset: 0;
    background: linear-gradient(180deg,
      rgba(10, 25, 47, 0.76) 0%,
      rgba(8, 20, 36, 0.84) 45%,
      rgba(8, 22, 40, 0.96) 100%
    );
    z-index: 1;
    pointer-events: none;
  }

  .cta-inner-box {
    max-width: 780px;
    margin: 0 auto;
    position: relative;
    z-index: 2;
  }

  .cta-inner-box h2 {
    font-family: 'Effra', sans-serif;
    font-size: clamp(32px, 3.8vw, 48px);
    font-weight: 700;
    line-height: 1.15;
    margin-bottom: 16px;
    letter-spacing: normal;
    color: #FFFFFF;
  }

  .cta-inner-box p {
    font-size: 18px;
    color: #CBD5E1;
    line-height: 1.6;
    margin: 0 auto 36px;
    max-width: 620px;
  }

  .cta-btn-row {
    display: flex;
    justify-content: center;
    align-items: center;
    gap: 16px;
    flex-wrap: wrap;
  }

  .btn-white-solid {
    background: #FFFFFF !important;
    color: var(--ink) !important;
    font-family: 'Plus Jakarta Sans', sans-serif;
    font-size: 16px;
    font-weight: 700;
    padding: 15px 36px;
    border-radius: var(--radius-pill);
    text-decoration: none;
    box-shadow: 0 10px 28px rgba(0, 0, 0, 0.4);
    transition: all 0.25s ease;
    display: inline-flex;
    align-items: center;
    gap: 8px;
  }

  .btn-white-solid:hover {
    background: #F1F5F9 !important;
    transform: translateY(-2px);
    box-shadow: 0 14px 36px rgba(0, 0, 0, 0.5);
    color: var(--ink) !important;
  }

  .btn-glass-outline {
    background: rgba(255, 255, 255, 0.1);
    color: #FFFFFF !important;
    border: 1.5px solid rgba(255, 255, 255, 0.35);
    font-family: 'Plus Jakarta Sans', sans-serif;
    font-size: 16px;
    font-weight: 600;
    padding: 15px 34px;
    border-radius: var(--radius-pill);
    text-decoration: none;
    backdrop-filter: blur(12px);
    transition: all 0.25s ease;
    display: inline-flex;
    align-items: center;
  }

  .btn-glass-outline:hover {
    background: rgba(255, 255, 255, 0.2);
    border-color: #FFFFFF;
    transform: translateY(-2px);
    color: #FFFFFF !important;
  }

  /* ==========================================================================
     RESPONSIVE BREAKPOINTS
     ========================================================================== */
  @media (max-width: 1080px) {
    .ft-hero { padding: 75px 0 65px !important; }
    .ft-hero-split-grid { grid-template-columns: 1fr; gap: 48px; }
    .ft-hero-left { max-width: 100%; text-align: center; }
    .hero-eyebrow-pill { margin-left: auto; margin-right: auto; }
    .ft-hero-cta-row { justify-content: center; }
    .ft-hero-trust-row { justify-content: center; }
    .ft-hero-right { min-height: 480px; }
    .stack-stage-container { max-width: 520px; }
    .stack-card-pos { left: 0; }
    .stack-card-kds { right: 0; }
    .overview-grid { grid-template-columns: repeat(2, 1fr); }
    .split-row, .split-row.reverse { grid-template-columns: 1fr; gap: 44px; }
    .split-row.reverse .split-content-col { order: 1; }
    .split-row.reverse .split-visual-col { order: 2; }
    .workflow-timeline { grid-template-columns: repeat(2, 1fr); gap: 24px; }
    .workflow-timeline::before { display: none; }
    .industry-grid { grid-template-columns: repeat(2, 1fr); }
    .why-layout { grid-template-columns: 1fr; gap: 40px; }
  }

  @media (max-width: 768px) {
    .ft-hero { padding: 55px 0 45px !important; }
    .ft-hero-title { font-size: clamp(28px, 6vw, 36px); }
    .ft-hero-lead { font-size: 15.5px; margin-bottom: 24px; }
    .ft-hero-cta-row { flex-direction: column; width: 100%; max-width: 320px; margin-left: auto; margin-right: auto; }
    .ft-btn-primary, .ft-btn-secondary, .btn-white-solid, .btn-glass-outline { width: 100%; justify-content: center; }
    .ft-hero-trust-row { flex-direction: column; gap: 8px; }
    .stack-stage-container { height: 430px; }
    .stack-card-pos { width: 220px; top: -10px; }
    .stack-card-kds { width: 230px; bottom: -15px; right: -5px; }
    .stack-card-qr { top: -35px; right: 10px; padding: 6px 10px; }
    .stack-card-analytics { bottom: 12px; left: 0; padding: 6px 12px; }
    .ft-section { padding: 65px 0; }
    .overview-grid { grid-template-columns: 1fr; }
    .industry-grid { grid-template-columns: 1fr; }
    .workflow-timeline { grid-template-columns: 1fr; }
    .ft-nav-tabs { gap: 20px; }
    .visual-overlay-chip { flex-direction: column; align-items: flex-start; gap: 8px; }
    .overlay-chip-badge { align-self: flex-start; }
  }
</style>

<div class="ft-page">

  {{-- ==========================================================================
       1. HERO SECTION — SPLIT-SCREEN INTERACTIVE 3D STACK
       ========================================================================== --}}
  <header class="ft-hero">
    <div class="ft-hero-mesh-glow"></div>

    <div class="ft-container">
      <div class="ft-hero-split-grid">
        <!-- Left: Bold SaaS Value Proposition & Action Buttons -->
        <div class="ft-hero-left" data-aos="fade-right">
          <div class="hero-eyebrow-pill">
            <svg viewBox="0 0 24 24"><path d="M12 2l8 4v4c0 6-4 10-8 12-4-2-8-6-8-12V6l8-4z"/></svg>
            <span>THE ALL-IN-ONE RESTAURANT SUITE</span>
          </div>

          <h1 class="ft-hero-title">
            Everything Your Restaurant Needs. <span class="accent-gold">Synchronized in One Place.</span>
          </h1>

          <p class="ft-hero-lead">
            From contactless QR menus and multi-station kitchen displays to live floor plans, real-time POS billing, and automated inventory &mdash; Geni Menu connects your front-of-house, kitchen, and back office on a single high-performance cloud platform.
          </p>

          <div class="ft-hero-cta-row">
            <a href="{{ route('restaurant_signup') }}" class="ft-btn-primary">
              <span>Get Started</span>
              <svg width="15" height="15" viewBox="0 0 16 16" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round">
                <path d="M6 12l4-4-4-4"/>
              </svg>
            </a>

            <a href="{{ route('pricing') }}" class="ft-btn-secondary">
              <span>View Pricing</span>
              <svg width="15" height="15" viewBox="0 0 16 16" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round">
                <path d="M6 12l4-4-4-4"/>
              </svg>
            </a>
          </div>

          <div class="ft-hero-trust-row">
            <span class="ft-trust-item">
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg>
              <span>Zero hardware lock-in</span>
            </span>
            <span class="ft-trust-item">
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg>
              <span>Instant cloud setup</span>
            </span>
            <span class="ft-trust-item">
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg>
              <span>Free team onboarding</span>
            </span>
          </div>
        </div>

        <!-- Right: Interactive 3D Stack Stage (Layered Feature Cards) -->
        <div class="ft-hero-right" data-aos="fade-left" data-aos-delay="100">
          <div class="stack-stage-container">
            <!-- Floating Layer 3: QR Menu Mobile Badge (Top Right) -->
            <div class="stack-card-qr">
              <div class="qr-icon-box">
                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2">
                  <rect x="3" y="3" width="7" height="7"/>
                  <rect x="14" y="3" width="7" height="7"/>
                  <rect x="14" y="14" width="7" height="7"/>
                  <rect x="3" y="14" width="7" height="7"/>
                </svg>
              </div>
              <div>
                <div class="qr-info-title">QR Code Menu Active</div>
                <div class="qr-info-desc">Table 04 &bull; Sourdough $11.00</div>
              </div>
            </div>

            <!-- Base Card: Command Center Overview -->
            <div class="stack-base-card">
              <div class="stack-header-bar">
                <div class="stack-header-dots">
                  <span class="stack-dot r"></span>
                  <span class="stack-dot y"></span>
                  <span class="stack-dot g"></span>
                </div>
                <div class="stack-url-tag">app.genimenu.com/dashboard</div>
                <div class="stack-live-pill">LIVE POS</div>
              </div>

              <div class="stack-base-body">
                <div class="stack-metrics-grid">
                  <div class="stack-metric-box">
                    <div class="stack-metric-label">Today's Sales</div>
                    <div class="stack-metric-val green">$4,820.00</div>
                  </div>
                  <div class="stack-metric-box">
                    <div class="stack-metric-label">Orders</div>
                    <div class="stack-metric-val">142</div>
                  </div>
                  <div class="stack-metric-box">
                    <div class="stack-metric-label">Avg Ticket</div>
                    <div class="stack-metric-val">$33.94</div>
                  </div>
                </div>

                <div class="stack-tables-row">
                  <div class="stack-table-pill active">T-01<small>Ready</small></div>
                  <div class="stack-table-pill busy">T-02<small>Dining</small></div>
                  <div class="stack-table-pill active">T-03<small>Bill</small></div>
                  <div class="stack-table-pill busy">T-04<small>Dining</small></div>
                  <div class="stack-table-pill">T-05<small>Free</small></div>
                  <div class="stack-table-pill busy">T-06<small>Dining</small></div>
                </div>
              </div>
            </div>

            <!-- Floating Layer 1: POS Billing & Register Card (Top Left) -->
            <div class="stack-card-pos">
              <div class="card-pos-head">
                <div class="card-pos-title">
                  <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"><rect x="2" y="3" width="20" height="14" rx="2"/><line x1="2" y1="9" x2="22" y2="9"/></svg>
                  <span>Register POS</span>
                </div>
                <span class="card-pos-tag">Table 04</span>
              </div>
              <div class="card-pos-items">
                <div class="card-pos-item-row">
                  <span>2x Wagyu Burger</span>
                  <b>$38.00</b>
                </div>
                <div class="card-pos-item-row">
                  <span>1x Truffle Fries</span>
                  <b>$9.50</b>
                </div>
                <div class="card-pos-item-row">
                  <span>2x Sparkling Water</span>
                  <b>$8.00</b>
                </div>
              </div>
              <div class="card-pos-total-row">
                <span>Total Due</span>
                <span class="card-pos-total-val">$55.50</span>
              </div>
            </div>

            <!-- Floating Layer 2: Kitchen Display KDS Ticket (Bottom Right) -->
            <div class="stack-card-kds">
              <div class="card-kds-head">
                <div class="card-kds-title">
                  <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"><path d="M12 2a5 5 0 0 0-5 5c0 1.5.7 2.9 1.8 3.8A3 3 0 0 0 8 13v7h8v-7a3 3 0 0 0-.8-2.2c1.1-.9 1.8-2.3 1.8-3.8a5 5 0 0 0-5-5Z"/></svg>
                  <span>KDS &bull; Kitchen Ticket #1042</span>
                </div>
                <span class="card-kds-timer">06:24m</span>
              </div>
              <div class="card-kds-items">
                <div>&bull; 1x Ribeye Steak (Med-Rare)</div>
                <div>&bull; 1x Lobster Risotto</div>
                <div>&bull; 2x Garden Caesar Salad</div>
              </div>
              <div class="card-kds-btn">Mark Expedited &bull; Table 08</div>
            </div>

            <!-- Floating Layer 4: Live Analytics Pulse Pill (Bottom Left) -->
            <div class="stack-card-analytics">
              <span class="analytics-dot"></span>
              <div class="analytics-text">Real-Time Sync: <span>$4,820.00 Gross</span></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </header>

  {{-- ==========================================================================
       2. FEATURE NAVIGATION STRIP
       ========================================================================== --}}
  <nav class="ft-nav-strip" id="features-nav" aria-label="Feature navigation">
    <div class="ft-container">
      <div class="ft-nav-tabs">
        <a href="#sec-overview" class="ft-nav-tab active">Overview</a>
        <a href="#sec-menu" class="ft-nav-tab">Menu &amp; Guests</a>
        <a href="#sec-orders" class="ft-nav-tab">Orders &amp; Kitchen</a>
        <a href="#sec-tables" class="ft-nav-tab">Tables &amp; Floor Plan</a>
        <a href="#sec-reservations" class="ft-nav-tab">Reservations</a>
        <a href="#sec-service" class="ft-nav-tab">Service Coordination</a>
        <a href="#sec-pos" class="ft-nav-tab">POS &amp; Payments</a>
        <a href="#sec-analytics" class="ft-nav-tab">Inventory &amp; Analytics</a>
      </div>
    </div>
  </nav>

  {{-- ==========================================================================
       3. FEATURE OVERVIEW — Modular Grid
       ========================================================================== --}}
  <section class="ft-section" id="sec-overview">
    <div class="ft-container">
      <div class="sec-heading-center" data-aos="fade-up">
        <div class="ft-eyebrow">UNIFIED PLATFORM ARCHITECTURE</div>
        <h2>One Platform. Every Essential Workflow.</h2>
        <p>From menu management to kitchen coordination and business reporting, Geni Menu brings essential restaurant workflows into one organised environment.</p>
      </div>

      <div class="overview-grid">
        <!-- 1. Menu Management -->
        <div class="overview-card" data-aos="fade-up" data-aos-delay="50">
          <div class="overview-icon-box">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
              <path d="M4 19.5v-15A2.5 2.5 0 0 1 6.5 2H20v20H6.5a2.5 2.5 0 0 1-2.5-2.5Z"/>
              <path d="M6 6h10M6 10h10M6 14h6"/>
            </svg>
          </div>
          <h3>Menu Management</h3>
          <p>Organise categories, set dietary preferences, configure item add-ons, and adjust pricing instantly across service shifts.</p>
        </div>

        <!-- 2. Order Management -->
        <div class="overview-card" data-aos="fade-up" data-aos-delay="100">
          <div class="overview-icon-box">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
              <path d="M16 4h2a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2h2"/>
              <rect x="8" y="2" width="8" height="4" rx="1" ry="1"/>
              <path d="M9 14h6M9 18h4"/>
            </svg>
          </div>
          <h3>Order Management</h3>
          <p>Centralise order reception across dine-in, takeaway, and direct channels with live order state tracking from placement to delivery.</p>
        </div>

        <!-- 3. Kitchen & KOT Management -->
        <div class="overview-card" data-aos="fade-up" data-aos-delay="150">
          <div class="overview-icon-box">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
              <path d="M12 2a5 5 0 0 0-5 5c0 1.5.7 2.9 1.8 3.8A3 3 0 0 0 8 13v7h8v-7a3 3 0 0 0-.8-2.2c1.1-.9 1.8-2.3 1.8-3.8a5 5 0 0 0-5-5Z"/>
            </svg>
          </div>
          <h3>Kitchen &amp; KOT Management</h3>
          <p>Dispatch automated kitchen order tickets straight to preparation stations, maintaining kitchen discipline and eliminating lost notes.</p>
        </div>

        <!-- 4. Restaurant POS & Billing -->
        <div class="overview-card" data-aos="fade-up" data-aos-delay="200">
          <div class="overview-icon-box">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
              <rect x="2" y="3" width="20" height="14" rx="2" ry="2"/>
              <line x1="8" y1="21" x2="16" y2="21"/>
              <line x1="12" y1="17" x2="12" y2="21"/>
            </svg>
          </div>
          <h3>Restaurant POS &amp; Billing</h3>
          <p>Accelerate table checkout with split bills, customized receipts, discount controls, and configured sales taxes.</p>
        </div>

        <!-- 5. Table Management -->
        <div class="overview-card" data-aos="fade-up" data-aos-delay="250">
          <div class="overview-icon-box">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
              <path d="M3 7h18M6 7v13M18 7v13M4 11h16"/>
            </svg>
          </div>
          <h3>Table Management</h3>
          <p>Monitor dining room capacity with visual floor layouts, occupied status badges, and swift seating reallocations.</p>
        </div>

        <!-- 6. Reservation Management -->
        <div class="overview-card" data-aos="fade-up" data-aos-delay="300">
          <div class="overview-icon-box">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
              <rect x="3" y="4" width="18" height="18" rx="2" ry="2"/>
              <line x1="16" y1="2" x2="16" y2="6"/>
              <line x1="8" y1="2" x2="8" y2="6"/>
              <line x1="3" y1="10" x2="21" y2="10"/>
            </svg>
          </div>
          <h3>Reservation Management</h3>
          <p>Organise guest reservations, capture party preferences, prevent overbookings, and prepare tables prior to arrival.</p>
        </div>

        <!-- 7. Waiter Requests -->
        <div class="overview-card" data-aos="fade-up" data-aos-delay="350">
          <div class="overview-icon-box">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
              <path d="M18 8A6 6 0 0 0 6 8c0 7-3 9-3 9h18s-3-2-3-9"/>
              <path d="M13.73 21a2 2 0 0 1-3.46 0"/>
            </svg>
          </div>
          <h3>Waiter Requests</h3>
          <p>Enable swift service alerts for water, cutlery, or the bill, routing guest calls directly to assigned floor staff.</p>
        </div>

        <!-- 8. Inventory Management -->
        <div class="overview-card" data-aos="fade-up" data-aos-delay="400">
          <div class="overview-icon-box">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
              <path d="M21 8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16Z"/>
              <path d="m3.3 7 8.7 5 8.7-5M12 22V12"/>
            </svg>
          </div>
          <h3>Inventory Management</h3>
          <p>Track recipe ingredients, maintain stock on hand, log stock variances, and receive alerts before critical items run out.</p>
        </div>

        <!-- 9. Reports & Analytics -->
        <div class="overview-card" data-aos="fade-up" data-aos-delay="450">
          <div class="overview-icon-box">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
              <line x1="18" y1="20" x2="18" y2="10"/>
              <line x1="12" y1="20" x2="12" y2="4"/>
              <line x1="6" y1="20" x2="6" y2="14"/>
            </svg>
          </div>
          <h3>Reports &amp; Analytics</h3>
          <p>Review daily revenue, item popularity, peak trading hours, and export audit-ready financial summaries anytime.</p>
        </div>
      </div>
    </div>
  </section>

  {{-- ==========================================================================
       4. MENU & GUEST EXPERIENCE — Smartphone Digital Menu Showcase
       ========================================================================== --}}
  <section class="ft-section bg-alt" id="sec-menu">
    <div class="ft-container">
      <div class="split-row">
        <!-- Content Side -->
        <div class="split-content-col" data-aos="fade-right">
          <div class="ft-eyebrow">DIGITAL DINING EXPERIENCE</div>
          <h2>Make Every Menu Interaction Count.</h2>
          <p class="split-lead">
            Deliver a clear, appetising digital dining experience for your guests while keeping menu administration effortless for your management team.
          </p>

          <div class="feature-chips-row">
            <span class="feature-chip">
              <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg>
              Instant Dollar Updates
            </span>
            <span class="feature-chip">
              <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg>
              Dietary &amp; Allergen Badges
            </span>
            <span class="feature-chip">
              <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg>
              High-Resolution Food Photography
            </span>
          </div>

          <ul class="benefit-list">
            <li class="benefit-item">
              <span class="benefit-icon"><svg viewBox="0 0 20 20"><polyline points="16 5 8 13 4 9"/></svg></span>
              <span>Organise dishes into intuitive culinary categories like Starters, Mains, and Desserts.</span>
            </li>
            <li class="benefit-item">
              <span class="benefit-icon"><svg viewBox="0 0 20 20"><polyline points="16 5 8 13 4 9"/></svg></span>
              <span>Maintain item descriptions, allergen badges, and dollar pricing from $11.00 to $38.00.</span>
            </li>
            <li class="benefit-item">
              <span class="benefit-icon"><svg viewBox="0 0 20 20"><polyline points="16 5 8 13 4 9"/></svg></span>
              <span>Publish seasonal specials and shift changes instantly with zero physical reprinting costs.</span>
            </li>
            <li class="benefit-item">
              <span class="benefit-icon"><svg viewBox="0 0 20 20"><polyline points="16 5 8 13 4 9"/></svg></span>
              <span>Provide diners with a polished, modern contactless dining experience on any device.</span>
            </li>
          </ul>

          <a href="{{ route('restaurant_signup') }}" class="btn-ink-solid">
            <span>Get Started</span>
            <svg width="15" height="15" viewBox="0 0 16 16" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><path d="M6 12l4-4-4-4"/></svg>
          </a>
        </div>

        <!-- Visual Side: Bespoke International Photography Frame -->
        <div class="split-visual-col" data-aos="fade-left">
          <div class="visual-device-frame">
            <img src="{{ asset('assets/images/features/feature_digital_menu.jpg') }}" alt="Geni Menu Digital Restaurant Dining Menu Experience" loading="lazy">
            <div class="visual-overlay-chip">
              <div class="overlay-chip-left">
                <div class="overlay-chip-icon">
                  <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"><path d="M4 19.5v-15A2.5 2.5 0 0 1 6.5 2H20v20H6.5a2.5 2.5 0 0 1-2.5-2.5Z"/><path d="M6 6h10M6 10h10"/></svg>
                </div>
                <div>
                  <div class="overlay-chip-title">The Bistro &bull; Table 04 Digital Menu</div>
                  <div class="overlay-chip-desc">Artisan Sourdough $11.00 &bull; Herb-Crusted Lamb $38.00</div>
                </div>
              </div>
              <span class="overlay-chip-badge">Live Menu Active</span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  {{-- ==========================================================================
       5. ORDERS & KITCHEN — Kitchen Display & KOT UI (Reversed)
       ========================================================================== --}}
  <section class="ft-section" id="sec-orders">
    <div class="ft-container">
      <div class="split-row reverse">
        <!-- Visual Side: Bespoke International Kitchen KDS Photography Frame -->
        <div class="split-visual-col" data-aos="fade-right">
          <div class="visual-device-frame">
            <img src="{{ asset('assets/images/features/feature_kitchen_kds.jpg') }}" alt="Geni Menu Kitchen Display System and KOT Automation" loading="lazy">
            <div class="visual-overlay-chip">
              <div class="overlay-chip-left">
                <div class="overlay-chip-icon">
                  <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"><path d="M12 2a5 5 0 0 0-5 5c0 1.5.7 2.9 1.8 3.8A3 3 0 0 0 8 13v7h8v-7a3 3 0 0 0-.8-2.2c1.1-.9 1.8-2.3 1.8-3.8a5 5 0 0 0-5-5Z"/></svg>
                </div>
                <div>
                  <div class="overlay-chip-title">Active Kitchen KDS &bull; Station Routing</div>
                  <div class="overlay-chip-desc">TKT #142 Table 12 &bull; 08:42 min Prep &bull; Grill &amp; Sauté</div>
                </div>
              </div>
              <span class="overlay-chip-badge">KOT In Progress</span>
            </div>
          </div>
        </div>

        <!-- Content Side -->
        <div class="split-content-col" data-aos="fade-left">
          <div class="ft-eyebrow">KITCHEN COORDINATION &amp; KOT</div>
          <h2>Keep Every Order Moving Seamlessly.</h2>
          <p class="split-lead">
            Help floor staff and kitchen stations work from a shared, real-time view of order activity. Route tickets automatically to eliminate prep delays and handwritten confusion.
          </p>

          <div class="feature-chips-row">
            <span class="feature-chip">
              <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg>
              Station-Based Routing
            </span>
            <span class="feature-chip">
              <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg>
              Live Countdown Timers
            </span>
            <span class="feature-chip">
              <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg>
              Zero Lost Tickets
            </span>
          </div>

          <ul class="benefit-list">
            <li class="benefit-item">
              <span class="benefit-icon"><svg viewBox="0 0 20 20"><polyline points="16 5 8 13 4 9"/></svg></span>
              <span>Maintain live visibility into order status across all channels.</span>
            </li>
            <li class="benefit-item">
              <span class="benefit-icon"><svg viewBox="0 0 20 20"><polyline points="16 5 8 13 4 9"/></svg></span>
              <span>Organise kitchen order tickets by station (Grill, Fryer, Pantry, Bar).</span>
            </li>
            <li class="benefit-item">
              <span class="benefit-icon"><svg viewBox="0 0 20 20"><polyline points="16 5 8 13 4 9"/></svg></span>
              <span>Prioritise orders with visual countdown indicators.</span>
            </li>
            <li class="benefit-item">
              <span class="benefit-icon"><svg viewBox="0 0 20 20"><polyline points="16 5 8 13 4 9"/></svg></span>
              <span>Eliminate order miscommunications between servers and chefs.</span>
            </li>
          </ul>

          <a href="{{ route('restaurant_signup') }}" class="btn-ink-solid">
            <span>Get Started</span>
            <svg width="15" height="15" viewBox="0 0 16 16" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><path d="M6 12l4-4-4-4"/></svg>
          </a>
        </div>
      </div>
    </div>
  </section>

  {{-- ==========================================================================
       6. TABLES & FLOOR PLAN ARCHITECTURE
       ========================================================================= --}}
  <section class="ft-section bg-alt" id="sec-tables">
    <div class="ft-container">
      <div class="split-row">
        <!-- Content Side -->
        <div class="split-content-col" data-aos="fade-right">
          <div class="ft-eyebrow">FLOOR PLAN ARCHITECTURE</div>
          <h2>Better Table Visibility. More Organised Service.</h2>
          <p class="split-lead">
            Manage table capacities, dynamic seating states, and section assignments through visual floor layouts that keep front-of-house teams completely synchronized.
          </p>

          <div class="feature-chips-row">
            <span class="feature-chip">
              <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg>
              Live Capacity Tracking
            </span>
            <span class="feature-chip">
              <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg>
              Custom Zone Layouts
            </span>
            <span class="feature-chip">
              <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg>
              Turn-Time Monitoring
            </span>
          </div>

          <ul class="benefit-list">
            <li class="benefit-item">
              <span class="benefit-icon"><svg viewBox="0 0 20 20"><polyline points="16 5 8 13 4 9"/></svg></span>
              <span>Monitor live dining room capacity at a glance across zones.</span>
            </li>
            <li class="benefit-item">
              <span class="benefit-icon"><svg viewBox="0 0 20 20"><polyline points="16 5 8 13 4 9"/></svg></span>
              <span>Distinguish available, seated, reserved, and closing tables.</span>
            </li>
            <li class="benefit-item">
              <span class="benefit-icon"><svg viewBox="0 0 20 20"><polyline points="16 5 8 13 4 9"/></svg></span>
              <span>Reassign walk-ins and large parties without bottlenecks.</span>
            </li>
            <li class="benefit-item">
              <span class="benefit-icon"><svg viewBox="0 0 20 20"><polyline points="16 5 8 13 4 9"/></svg></span>
              <span>Optimize table turn times during peak lunch and dinner rushes.</span>
            </li>
          </ul>

          <a href="{{ route('restaurant_signup') }}" class="btn-ink-solid">
            <span>Get Started</span>
            <svg width="15" height="15" viewBox="0 0 16 16" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><path d="M6 12l4-4-4-4"/></svg>
          </a>
        </div>

        <!-- Visual Side: Bespoke International Floor Plan Photography Frame -->
        <div class="split-visual-col" data-aos="fade-left">
          <div class="visual-device-frame">
            <img src="{{ asset('assets/images/features/feature_table_floorplan.jpg') }}" alt="Geni Menu Interactive Restaurant Floor Plan Management" loading="lazy">
            <div class="visual-overlay-chip">
              <div class="overlay-chip-left">
                <div class="overlay-chip-icon">
                  <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"><path d="M3 7h18M6 7v13M18 7v13M4 11h16"/></svg>
                </div>
                <div>
                  <div class="overlay-chip-title">HostIQ Floor Plan &bull; Evening Dining</div>
                  <div class="overlay-chip-desc">24 / 28 Tables Active &bull; Turn Time 48m</div>
                </div>
              </div>
              <span class="overlay-chip-badge">85% Capacity</span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  {{-- ==========================================================================
       7. RESERVATION MANAGEMENT — Guest Booking View (Reversed)
       ========================================================================== --}}
  <section class="ft-section" id="sec-reservations">
    <div class="ft-container">
      <div class="split-row reverse">
        <!-- Visual Side: Bespoke International Reservation Host Desk Photography Frame -->
        <div class="split-visual-col" data-aos="fade-right">
          <div class="visual-device-frame">
            <img src="{{ asset('assets/images/features/feature_reservation_desk.jpg') }}" alt="Geni Menu Restaurant Guest Reservation Management System" loading="lazy">
            <div class="visual-overlay-chip">
              <div class="overlay-chip-left">
                <div class="overlay-chip-icon">
                  <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"/><line x1="16" y1="2" x2="16" y2="6"/><line x1="8" y1="2" x2="8" y2="6"/><line x1="3" y1="10" x2="21" y2="10"/></svg>
                </div>
                <div>
                  <div class="overlay-chip-title">Host Stand &bull; Today's Dinner Service</div>
                  <div class="overlay-chip-desc">Elena Rostova, Lucas Vance &bull; 6:30 &amp; 7:15 PM</div>
                </div>
              </div>
              <span class="overlay-chip-badge">18 Bookings Confirmed</span>
            </div>
          </div>
        </div>

        <!-- Content Side -->
        <div class="split-content-col" data-aos="fade-left">
          <div class="ft-eyebrow">GUEST RESERVATION SYSTEM</div>
          <h2>Seamless Booking Management from Day One.</h2>
          <p class="split-lead">
            Capture guest reservations with precision. Manage booking times, party sizes, dietary notes, and VIP preferences to deliver personalized hospitality before guests arrive.
          </p>

          <div class="feature-chips-row">
            <span class="feature-chip">
              <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg>
              Prevent Overbooking
            </span>
            <span class="feature-chip">
              <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg>
              Guest Preferences
            </span>
            <span class="feature-chip">
              <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg>
              Automated Capacity
            </span>
          </div>

          <ul class="benefit-list">
            <li class="benefit-item">
              <span class="benefit-icon"><svg viewBox="0 0 20 20"><polyline points="16 5 8 13 4 9"/></svg></span>
              <span>Record party size, reservation time, and specific seating requests.</span>
            </li>
            <li class="benefit-item">
              <span class="benefit-icon"><svg viewBox="0 0 20 20"><polyline points="16 5 8 13 4 9"/></svg></span>
              <span>Prevent overbooking during peak operating periods.</span>
            </li>
            <li class="benefit-item">
              <span class="benefit-icon"><svg viewBox="0 0 20 20"><polyline points="16 5 8 13 4 9"/></svg></span>
              <span>Tag VIP guests and anniversary celebrations for floor staff.</span>
            </li>
            <li class="benefit-item">
              <span class="benefit-icon"><svg viewBox="0 0 20 20"><polyline points="16 5 8 13 4 9"/></svg></span>
              <span>Prepare tables ahead of time to eliminate reception line delays.</span>
            </li>
          </ul>

          <a href="{{ route('restaurant_signup') }}" class="btn-ink-solid">
            <span>Get Started</span>
            <svg width="15" height="15" viewBox="0 0 16 16" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><path d="M6 12l4-4-4-4"/></svg>
          </a>
        </div>
      </div>
    </div>
  </section>

  {{-- ==========================================================================
       8. WAITER SERVICE COORDINATION — Live Calling Alerts
       ========================================================================== --}}
  <section class="ft-section bg-alt" id="sec-service">
    <div class="ft-container">
      <div class="split-row">
        <!-- Content Side -->
        <div class="split-content-col" data-aos="fade-right">
          <div class="ft-eyebrow">SERVICE COORDINATION</div>
          <h2>Attentive Floor Service, Orchestrated in Real Time.</h2>
          <p class="split-lead">
            Eliminate hand-waving and delayed guest response. Guests can request water refills, additional cutlery, or their final bill instantly, routing calls directly to designated floor captains.
          </p>

          <div class="feature-chips-row">
            <span class="feature-chip">
              <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg>
              Instant Digital Calls
            </span>
            <span class="feature-chip">
              <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg>
              Zone Captain Routing
            </span>
            <span class="feature-chip">
              <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg>
              Faster Check Drops
            </span>
          </div>

          <ul class="benefit-list">
            <li class="benefit-item">
              <span class="benefit-icon"><svg viewBox="0 0 20 20"><polyline points="16 5 8 13 4 9"/></svg></span>
              <span>Enable instant table service alerts directly from the mobile menu.</span>
            </li>
            <li class="benefit-item">
              <span class="benefit-icon"><svg viewBox="0 0 20 20"><polyline points="16 5 8 13 4 9"/></svg></span>
              <span>Route specific request types to assigned zone servers.</span>
            </li>
            <li class="benefit-item">
              <span class="benefit-icon"><svg viewBox="0 0 20 20"><polyline points="16 5 8 13 4 9"/></svg></span>
              <span>Track response times and staff coverage across shifts.</span>
            </li>
            <li class="benefit-item">
              <span class="benefit-icon"><svg viewBox="0 0 20 20"><polyline points="16 5 8 13 4 9"/></svg></span>
              <span>Deliver a smoother, more responsive hospitality experience.</span>
            </li>
          </ul>

          <a href="{{ route('restaurant_signup') }}" class="btn-ink-solid">
            <span>Get Started</span>
            <svg width="15" height="15" viewBox="0 0 16 16" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><path d="M6 12l4-4-4-4"/></svg>
          </a>
        </div>

        <!-- Visual Side: Bespoke International Waiter Handheld Terminal Frame -->
        <div class="split-visual-col" data-aos="fade-left">
          <div class="visual-device-frame">
            <img src="{{ asset('assets/images/features/feature_waiter_service.jpg') }}" alt="Geni Menu Real-Time Waiter Request and Service Call Terminal" loading="lazy">
            <div class="visual-overlay-chip">
              <div class="overlay-chip-left">
                <div class="overlay-chip-icon">
                  <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"><path d="M18 8A6 6 0 0 0 6 8c0 7-3 9-3 9h18s-3-2-3-9"/><path d="M13.73 21a2 2 0 0 1-3.46 0"/></svg>
                </div>
                <div>
                  <div class="overlay-chip-title">The Oak &amp; Pine &bull; Live Handheld Terminal</div>
                  <div class="overlay-chip-desc">Table 04 Water Refill &bull; Table 08 Check Request</div>
                </div>
              </div>
              <span class="overlay-chip-badge">Assigned to Sarah</span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  {{-- ==========================================================================
       9. POS & BILLING — Checkout Experience in USD ($)
       ========================================================================== --}}
  <section class="ft-section" id="sec-pos">
    <div class="ft-container">
      <div class="split-row reverse">
        <!-- Visual Side: Bespoke International POS Checkout Terminal Frame -->
        <div class="split-visual-col" data-aos="fade-right">
          <div class="visual-device-frame">
            <img src="{{ asset('assets/images/features/feature_pos_terminal.jpg') }}" alt="Geni Menu Cloud Point of Sale and Billing Terminal" loading="lazy">
            <div class="visual-overlay-chip">
              <div class="overlay-chip-left">
                <div class="overlay-chip-icon">
                  <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"><rect x="2" y="3" width="20" height="14" rx="2" ry="2"/><line x1="8" y1="21" x2="16" y2="21"/><line x1="12" y1="17" x2="12" y2="21"/></svg>
                </div>
                <div>
                  <div class="overlay-chip-title">Table 14 Register &bull; Subtotal $51.50</div>
                  <div class="overlay-chip-desc">Sales Tax $4.57 &bull; Total Due $56.07 &bull; Chip &amp; Tap</div>
                </div>
              </div>
              <span class="overlay-chip-badge">Checkout Ready</span>
            </div>
          </div>
        </div>

        <!-- Content Side -->
        <div class="split-content-col" data-aos="fade-left">
          <div class="ft-eyebrow">RESTAURANT POS &amp; BILLING</div>
          <h2>Fast, Transparent Checkout Built for Hospitality.</h2>
          <p class="split-lead">
            Accelerate table turnover with an intuitive point-of-sale workflow designed for restaurant cashiers, servers, and managers.
          </p>

          <div class="feature-chips-row">
            <span class="feature-chip">
              <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg>
              Split Bill Capabilities
            </span>
            <span class="feature-chip">
              <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg>
              Custom Dollar Sales Tax
            </span>
            <span class="feature-chip">
              <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg>
              Detailed Receipts
            </span>
          </div>

          <ul class="benefit-list">
            <li class="benefit-item">
              <span class="benefit-icon"><svg viewBox="0 0 20 20"><polyline points="16 5 8 13 4 9"/></svg></span>
              <span>Manage guest checks, split payments, and discounts seamlessly.</span>
            </li>
            <li class="benefit-item">
              <span class="benefit-icon"><svg viewBox="0 0 20 20"><polyline points="16 5 8 13 4 9"/></svg></span>
              <span>Keep order intake and checkout registers synchronized automatically.</span>
            </li>
            <li class="benefit-item">
              <span class="benefit-icon"><svg viewBox="0 0 20 20"><polyline points="16 5 8 13 4 9"/></svg></span>
              <span>Configure international sales taxes, tip suggestions (18%), and service charges in USD.</span>
            </li>
            <li class="benefit-item">
              <span class="benefit-icon"><svg viewBox="0 0 20 20"><polyline points="16 5 8 13 4 9"/></svg></span>
              <span>Provide itemised printed or digital receipts at table or counter.</span>
            </li>
          </ul>

          <a href="{{ route('restaurant_signup') }}" class="btn-ink-solid">
            <span>Get Started</span>
            <svg width="15" height="15" viewBox="0 0 16 16" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><path d="M6 12l4-4-4-4"/></svg>
          </a>
        </div>
      </div>
    </div>
  </section>

  {{-- ==========================================================================
       10. INVENTORY & BUSINESS INSIGHTS
       ========================================================================== --}}
  <section class="ft-section bg-alt" id="sec-analytics">
    <div class="ft-container">
      <div class="split-row">
        <!-- Content Side -->
        <div class="split-content-col" data-aos="fade-right">
          <div class="ft-eyebrow">INVENTORY &amp; AUDIT INSIGHTS</div>
          <h2>Control Stock. Gain Real-Time Business Clarity.</h2>
          <p class="split-lead">
            Gain immediate visibility into ingredient usage, stock balances, and financial performance through accessible reports designed for hospitality operators.
          </p>

          <div class="feature-chips-row">
            <span class="feature-chip">
              <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg>
              Low-Stock Warnings
            </span>
            <span class="feature-chip">
              <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg>
              Dollar Revenue Tracking
            </span>
            <span class="feature-chip">
              <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg>
              Exportable Reports
            </span>
          </div>

          <ul class="benefit-list">
            <li class="benefit-item">
              <span class="benefit-icon"><svg viewBox="0 0 20 20"><polyline points="16 5 8 13 4 9"/></svg></span>
              <span>Monitor recipe ingredients and track stock deductions as orders clear.</span>
            </li>
            <li class="benefit-item">
              <span class="benefit-icon"><svg viewBox="0 0 20 20"><polyline points="16 5 8 13 4 9"/></svg></span>
              <span>Identify low inventory thresholds before prep shortages hit service.</span>
            </li>
            <li class="benefit-item">
              <span class="benefit-icon"><svg viewBox="0 0 20 20"><polyline points="16 5 8 13 4 9"/></svg></span>
              <span>Review gross revenue like $4,820.00, top-selling items, and shift breakdowns.</span>
            </li>
            <li class="benefit-item">
              <span class="benefit-icon"><svg viewBox="0 0 20 20"><polyline points="16 5 8 13 4 9"/></svg></span>
              <span>Export clean financial records for accounting and audit review.</span>
            </li>
          </ul>

          <a href="{{ route('restaurant_signup') }}" class="btn-ink-solid">
            <span>Get Started</span>
            <svg width="15" height="15" viewBox="0 0 16 16" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><path d="M6 12l4-4-4-4"/></svg>
          </a>
        </div>

        <!-- Visual Side: Bespoke International Analytics Desktop Frame -->
        <div class="split-visual-col" data-aos="fade-left">
          <div class="visual-device-frame">
            <img src="{{ asset('assets/images/features/feature_inventory_analytics.jpg') }}" alt="Geni Menu Business Analytics and Ingredient Inventory Management" loading="lazy">
            <div class="visual-overlay-chip">
              <div class="overlay-chip-left">
                <div class="overlay-chip-icon">
                  <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"><line x1="18" y1="20" x2="18" y2="10"/><line x1="12" y1="20" x2="12" y2="4"/><line x1="6" y1="20" x2="6" y2="14"/></svg>
                </div>
                <div>
                  <div class="overlay-chip-title">Daily Sales Gross &bull; $4,820.00</div>
                  <div class="overlay-chip-desc">Ingredient Stock: Salmon 82%, Beef 92%, Greens 42%</div>
                </div>
              </div>
              <span class="overlay-chip-badge">+12.4% vs Yesterday</span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  {{-- ==========================================================================
       11. CONNECTED WORKFLOW — Custom 5-Stage Diagram
       ========================================================================== --}}
  <section class="ft-section" id="sec-workflow">
    <div class="ft-container">
      <div class="sec-heading-center" data-aos="fade-up">
        <div class="ft-eyebrow">SEAMLESS OPERATIONS PIPELINE</div>
        <h2>From Guest Arrival to End-of-Day Reconciliation.</h2>
        <p>Bring every phase of hospitality operations into an uninterrupted, synchronized digital flow that reduces friction and boosts service speed.</p>
      </div>

      <div class="workflow-timeline" data-aos="fade-up" data-aos-delay="100">
        <!-- Step 1 -->
        <div class="workflow-step-card">
          <div class="step-badge">01</div>
          <h4>Present Menu</h4>
          <p>Guests view structured, beautiful digital menus with photos, allergens, and accurate prices.</p>
        </div>

        <!-- Step 2 -->
        <div class="workflow-step-card">
          <div class="step-badge">02</div>
          <h4>Manage Orders</h4>
          <p>Orders are captured accurately across dine-in, takeaway, and counter service with zero manual errors.</p>
        </div>

        <!-- Step 3 -->
        <div class="workflow-step-card">
          <div class="step-badge">03</div>
          <h4>Coordinate Kitchen</h4>
          <p>Kitchen order tickets (KOT) are dispatched directly to prep stations with active timer tracking.</p>
        </div>

        <!-- Step 4 -->
        <div class="workflow-step-card">
          <div class="step-badge">04</div>
          <h4>Complete Billing</h4>
          <p>Settle checks smoothly with split payments, tax compliance, and fast transaction handling.</p>
        </div>

        <!-- Step 5 -->
        <div class="workflow-step-card">
          <div class="step-badge">05</div>
          <h4>Review Performance</h4>
          <p>Review daily sales revenue, item velocity, and inventory deductions to optimize operations.</p>
        </div>
      </div>
    </div>
  </section>

  {{-- ==========================================================================
       12. INTERNATIONAL INDUSTRY SHOWCASE (4 Concept Cards)
       ========================================================================== --}}
  <section class="ft-section bg-alt" id="sec-industry">
    <div class="ft-container">
      <div class="sec-heading-center" data-aos="fade-up">
        <div class="ft-eyebrow">TAILORED HOSPITALITY CONCEPTS</div>
        <h2>Designed for the Way Your Food Business Operates.</h2>
        <p>Whether you manage an intimate bistro, a high-volume counter, or a growing multi-location group, Geni Menu adapts to your service model.</p>
      </div>

      <div class="industry-grid">
        <!-- Card 1 -->
        <div class="industry-card" data-aos="fade-up" data-aos-delay="50">
          <div class="industry-photo-wrap">
            <img src="{{ asset('assets/images/audience/aud-restaurants.png') }}" alt="Restaurants & Fine Dining" loading="lazy">
          </div>
          <div class="industry-card-body">
            <h3>Restaurants &amp; Fine Dining</h3>
            <p>Coordinate multi-course dining, floor table plans, guest reservations, and attentive captain call systems.</p>
          </div>
        </div>

        <!-- Card 2 -->
        <div class="industry-card" data-aos="fade-up" data-aos-delay="100">
          <div class="industry-photo-wrap">
            <img src="{{ asset('assets/images/audience/aud-qsrs.png') }}" alt="Quick Service & Takeaway" loading="lazy">
          </div>
          <div class="industry-card-body">
            <h3>Quick Service &amp; Takeaway</h3>
            <p>Accelerate counter queues, speed up ticket fulfillment, and process contactless checkout effortlessly.</p>
          </div>
        </div>

        <!-- Card 3 -->
        <div class="industry-card" data-aos="fade-up" data-aos-delay="150">
          <div class="industry-photo-wrap">
            <img src="{{ asset('assets/images/audience/aud-bakeries.png') }}" alt="Bakeries & Cafés" loading="lazy">
          </div>
          <div class="industry-card-body">
            <h3>Bakeries &amp; Caf&eacute;s</h3>
            <p>Manage daily pastry drops, specialty coffee menus, barista tickets, and ingredient inventory visibility.</p>
          </div>
        </div>

        <!-- Card 4 -->
        <div class="industry-card" data-aos="fade-up" data-aos-delay="200">
          <div class="industry-photo-wrap">
            <img src="{{ asset('assets/images/audience/aud-chains.png') }}" alt="Growing Multi-Location Brands" loading="lazy">
          </div>
          <div class="industry-card-body">
            <h3>Multi-Location Brands</h3>
            <p>Standardize operational excellence, centralized menu catalogs, and cross-branch performance oversight.</p>
          </div>
        </div>
      </div>

      <div class="industry-cta-wrap" data-aos="fade-up">
        <a href="{{ route('solutions') }}" class="btn-ink-solid">
          <span>Explore Solutions</span>
          <svg width="15" height="15" viewBox="0 0 16 16" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><path d="M6 12l4-4-4-4"/></svg>
        </a>
      </div>
    </div>
  </section>

  {{-- ==========================================================================
       13. WHY GENI MENU? (Product Ecosystem & Core Pillars)
       ========================================================================== --}}
  <section class="ft-section" id="sec-why">
    <div class="ft-container">
      <div class="why-layout">
        <!-- Left: Content with 4 benefits -->
        <div class="why-content" data-aos="fade-right">
          <div class="ft-eyebrow">THE CONNECTED ADVANTAGE</div>
          <h2>Built for Real Hospitality Teams.</h2>
          <p class="why-lead">
            Traditional restaurant software leaves teams juggling disconnected systems. Geni Menu unifies every service stage into one coherent platform built for reliability.
          </p>

          <div class="why-benefits-stack">
            <!-- Benefit 1 -->
            <div class="why-benefit-item">
              <div class="why-icon-box">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                  <path d="M10 13a5 5 0 0 0 7.54.54l3-3a5 5 0 0 0-7.07-7.07l-1.72 1.71"/>
                  <path d="M14 11a5 5 0 0 0-7.54-.54l-3 3a5 5 0 0 0 7.07 7.07l1.71-1.71"/>
                </svg>
              </div>
              <div class="why-text">
                <h4>Connected Workflows</h4>
                <p>Unify front-of-house service with kitchen preparation and backend billing on one platform.</p>
              </div>
            </div>

            <!-- Benefit 2 -->
            <div class="why-benefit-item">
              <div class="why-icon-box">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                  <path d="M2 12s3-7 10-7 10 7 10 7-3 7-10 7-10-7-10-7Z"/>
                  <circle cx="12" cy="12" r="3"/>
                </svg>
              </div>
              <div class="why-text">
                <h4>Operational Visibility</h4>
                <p>Track live floor capacity, pending kitchen tickets, and register transactions in real time.</p>
              </div>
            </div>

            <!-- Benefit 3 -->
            <div class="why-benefit-item">
              <div class="why-icon-box">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                  <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/>
                  <circle cx="9" cy="7" r="4"/>
                  <path d="M23 21v-2a4 4 0 0 0-3-3.87"/>
                  <path d="M16 3.13a4 4 0 0 1 0 7.75"/>
                </svg>
              </div>
              <div class="why-text">
                <h4>Role-Specific Clarity</h4>
                <p>Provide captains, chefs, and cashiers with uncluttered, role-tailored interface views.</p>
              </div>
            </div>

            <!-- Benefit 4 -->
            <div class="why-benefit-item">
              <div class="why-icon-box">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                  <path d="M12.22 2h-.44a2 2 0 0 0-2 2v.18a2 2 0 0 1-1 1.73l-.43.25a2 2 0 0 1-2 0l-.15-.08a2 2 0 0 0-2.73.73l-.22.38a2 2 0 0 0 .73 2.73l.15.1a2 2 0 0 1 1 1.72v.51a2 2 0 0 1-1 1.74l-.15.09a2 2 0 0 0-.73 2.73l.22.38a2 2 0 0 0 2.73.73l.15-.08a2 2 0 0 1 2 0l.43.25a2 2 0 0 1 1 1.73V20a2 2 0 0 0 2 2h.44a2 2 0 0 0 2-2v-.18a2 2 0 0 1 1-1.73l.43-.25a2 2 0 0 1 2 0l.15.08a2 2 0 0 0 2.73-.73l.22-.39a2 2 0 0 0-.73-2.73l-.15-.08a2 2 0 0 1-1-1.74v-.5a2 2 0 0 1 1-1.74l.15-.09a2 2 0 0 0 .73-2.73l-.22-.38a2 2 0 0 0-2.73-.73l-.15.08a2 2 0 0 1-2 0l-.43-.25a2 2 0 0 1-1-1.73V4a2 2 0 0 0-2-2z"/>
                  <circle cx="12" cy="12" r="3"/>
                </svg>
              </div>
              <div class="why-text">
                <h4>Flexible Configuration</h4>
                <p>Customize menus, dining zones, service charges, currency formats, and receipt layouts to match your local operations.</p>
              </div>
            </div>
          </div>
        </div>

        <!-- Right: Authentic Software Showcase Visual -->
        <div class="why-visual" data-aos="fade-left">
          <div class="visual-device-frame">
            <img src="{{ asset('assets/images/features/feature_hospitality_team.jpg') }}" alt="Geni Menu Unified Restaurant Operations & Hospitality Platform" loading="lazy">
            <div class="visual-overlay-chip">
              <div class="overlay-chip-left">
                <div class="overlay-chip-icon">
                  <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2">
                    <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/>
                    <circle cx="9" cy="7" r="4"/>
                    <path d="M23 21v-2a4 4 0 0 0-3-3.87"/>
                    <path d="M16 3.13a4 4 0 0 1 0 7.75"/>
                  </svg>
                </div>
                <div>
                  <div class="overlay-chip-title">Host Stand &bull; Floor Coordination Hub</div>
                  <div class="overlay-chip-desc">18 Active Tables &bull; Shift Sales $3,480.00</div>
                </div>
              </div>
              <span class="overlay-chip-badge">Full Suite Sync</span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  {{-- ==========================================================================
       14. FAQ SECTION (Minimal Typography-Led Accordion)
       ========================================================================== --}}
  <section class="ft-section bg-alt" id="sec-faq">
    <div class="ft-container">
      <div class="sec-heading-center" data-aos="fade-up">
        <div class="ft-eyebrow">HELP &amp; FREQUENT INQUIRIES</div>
        <h2>Frequently Asked Questions.</h2>
        <p>Common questions regarding Geni Menu features, workflows, and platform setup.</p>
      </div>

      <div class="faq-container" data-aos="fade-up" data-aos-delay="100">
        <div class="faq-accordion-list">
          <!-- FAQ 1 -->
          <div class="faq-card open">
            <button type="button" class="faq-header-btn" aria-expanded="true">
              <span>What core features does Geni Menu include?</span>
              <span class="faq-icon-indicator">+</span>
            </button>
            <div class="faq-body-wrap">
              <div class="faq-body-inner">
                <p>Geni Menu brings together digital menu management, real-time order coordination, kitchen order tickets (KOT), point-of-sale billing, table floor plans, guest reservations, waiter service requests, ingredient inventory tracking, and business analytics into a single unified cloud platform.</p>
              </div>
            </div>
          </div>

          <!-- FAQ 2 -->
          <div class="faq-card">
            <button type="button" class="faq-header-btn" aria-expanded="false">
              <span>Can I use only the specific modules my restaurant needs?</span>
              <span class="faq-icon-indicator">+</span>
            </button>
            <div class="faq-body-wrap">
              <div class="faq-body-inner">
                <p>Yes. Geni Menu is modular and adaptable. Whether you operate a quick-service takeaway that requires fast counter billing, or a fine dining establishment that needs comprehensive table reservation and multi-course KOT management, you can configure the exact modules your business requires.</p>
              </div>
            </div>
          </div>

          <!-- FAQ 3 -->
          <div class="faq-card">
            <button type="button" class="faq-header-btn" aria-expanded="false">
              <span>Can I upgrade my features and capacity as my business grows?</span>
              <span class="faq-icon-indicator">+</span>
            </button>
            <div class="faq-body-wrap">
              <div class="faq-body-inner">
                <p>Absolutely. You can start with essential billing and digital menu features, and unlock advanced operational capabilities such as inventory management, multiple kitchen printing, and multi-branch controls whenever your business is ready.</p>
              </div>
            </div>
          </div>

          <!-- FAQ 4 -->
          <div class="faq-card">
            <button type="button" class="faq-header-btn" aria-expanded="false">
              <span>Does Geni Menu support multiple branches and multiple kitchens?</span>
              <span class="faq-icon-indicator">+</span>
            </button>
            <div class="faq-body-wrap">
              <div class="faq-body-inner">
                <p>Yes. Geni Menu Enterprise plans support multiple restaurant locations with centralized branch oversight, as well as multiple distinct kitchen stations (e.g., grill, pantry, bar) within a single outlet.</p>
              </div>
            </div>
          </div>

          <!-- FAQ 5 -->
          <div class="faq-card">
            <button type="button" class="faq-header-btn" aria-expanded="false">
              <span>How does ingredient and inventory tracking work in Geni Menu?</span>
              <span class="faq-icon-indicator">+</span>
            </button>
            <div class="faq-body-wrap">
              <div class="faq-body-inner">
                <p>You can link raw ingredients to menu recipes. As orders are completed and billed at the POS, stock deductions occur automatically. Managers can monitor remaining stock, view consumption trends, and receive low-stock reorder reminders.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  {{-- ==========================================================================
       15. FINAL CONVERSION CTA — LET'S TALK ABOUT YOUR RESTAURANT
       ========================================================================== --}}
  <section class="ft-final-cta" data-aos="fade-up">
    <div class="ft-container">
      <div class="cta-inner-box">
        <div class="ft-eyebrow" style="background: rgba(254, 243, 199, 0.15); color: #FDE68A; border-color: rgba(217, 119, 6, 0.4); margin-bottom: 22px;">
          <svg width="13" height="13" viewBox="0 0 24 24" fill="#D97706"><path d="M12 2l8 4v4c0 6-4 10-8 12-4-2-8-6-8-12V6l8-4z"/></svg>
          LET’S TALK ABOUT YOUR RESTAURANT.
        </div>
        <h2>Looking for a Smarter Way to Manage Your Restaurant?</h2>
        <p>Tell us about your restaurant and your business needs. Our team will help you explore how Geni Menu can simplify your daily operations and find the right solution for your business.</p>

        <div class="cta-btn-row">
          <a href="{{ route('contact.us') }}" class="btn-white-solid">
            <span>Send an Enquiry</span>
            <svg width="15" height="15" viewBox="0 0 16 16" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><path d="M6 12l4-4-4-4"/></svg>
          </a>

          <a href="{{ route('pricing') }}" class="btn-glass-outline">
            <span>View Pricing</span>
            <svg width="15" height="15" viewBox="0 0 16 16" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><path d="M6 12l4-4-4-4"/></svg>
          </a>
        </div>
      </div>
    </div>
  </section>

</div>

{{-- AOS & Page Interactive Scripts --}}
<script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
<script>
document.addEventListener('DOMContentLoaded', function() {
  // 1. Initialize AOS Animations
  if (typeof AOS !== 'undefined') {
    AOS.init({ duration: 600, once: true, offset: 40 });
  }

  // 2. FAQ Accordion (Single Open Item)
  var faqCards = document.querySelectorAll('.faq-card');
  faqCards.forEach(function(card) {
    var btn = card.querySelector('.faq-header-btn');
    if (btn) {
      btn.addEventListener('click', function() {
        var isOpen = card.classList.contains('open');
        faqCards.forEach(function(c) {
          c.classList.remove('open');
          var b = c.querySelector('.faq-header-btn');
          if (b) b.setAttribute('aria-expanded', 'false');
        });
        if (!isOpen) {
          card.classList.add('open');
          btn.setAttribute('aria-expanded', 'true');
        }
      });
    }
  });

  // 3. Smooth Sticky Tab Navigation
  var navTabs = document.querySelectorAll('.ft-nav-tab');
  navTabs.forEach(function(tab) {
    tab.addEventListener('click', function(e) {
      var targetId = this.getAttribute('href');
      if (targetId && targetId.startsWith('#')) {
        var targetSec = document.querySelector(targetId);
        if (targetSec) {
          e.preventDefault();
          navTabs.forEach(function(t) { t.classList.remove('active'); });
          this.classList.add('active');
          var headerOffset = 130;
          var elementPosition = targetSec.getBoundingClientRect().top;
          var offsetPosition = elementPosition + window.pageYOffset - headerOffset;
          window.scrollTo({
            top: offsetPosition,
            behavior: 'smooth'
          });
        }
      }
    });
  });

  // 4. Scroll Spy for Navigation Strip
  var sections = document.querySelectorAll('section[id^="sec-"]');
  window.addEventListener('scroll', function() {
    var scrollPos = window.scrollY + 160;
    sections.forEach(function(section) {
      var top = section.offsetTop;
      var height = section.offsetHeight;
      var id = section.getAttribute('id');
      if (scrollPos >= top && scrollPos < top + height) {
        navTabs.forEach(function(tab) {
          tab.classList.remove('active');
          if (tab.getAttribute('href') === '#' + id) {
            tab.classList.add('active');
          }
        });
      }
    });
  }, { passive: true });
});
</script>

@endsection
