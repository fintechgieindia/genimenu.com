@php
    $meta = [
        'title' => 'Geni Menu Solutions | Restaurant & Food Business Management Platform',
        'description' => 'Explore tailored Geni Menu solutions for family restaurants, dine-in, fine dining, QSR, takeaway, bakeries, cafes, canteens, sweet shops, pizzerias, bars, and multi-branch chains.',
        'keywords' => 'restaurant solutions, food business management software, QSR software, bakery POS, canteen management system, fine dining software, sweet shop POS, multi-branch restaurant ERP, Geni Menu solutions',
    ];
@endphp

@extends('layouts.frontend-master')

@section('content')

{{-- Google Fonts --}}

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
    --shadow-sm: 0 2px 4px rgba(50, 50, 93, 0.05), 0 1px 3px rgba(0, 0, 0, 0.04);
    --shadow-md: 0 6px 12px -2px rgba(50, 50, 93, 0.08), 0 3px 7px -3px rgba(0, 0, 0, 0.07);
    --shadow-lg: 0 13px 27px -5px rgba(50, 50, 93, 0.12), 0 8px 16px -8px rgba(0, 0, 0, 0.15);
    --max: 1200px;
  }

  * { box-sizing: border-box; }
  ::selection { background: #0A2540; color: #FFFFFF; }
  
  .sol-page {
    background: #FFFFFF;
    color: var(--ink);
    font-family: 'Inter', system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
    font-size: 16px;
    overflow: visible !important;
    overflow-x: clip !important;
  }

  /* Typography - Matching Home Page */
  .sol-page h1 {
    font-family: 'Plus Jakarta Sans', -apple-system, BlinkMacSystemFont, 'Segoe UI', sans-serif;
    font-size: clamp(40px, 5vw, 66px);
    font-weight: 800;
    letter-spacing: -0.035em;
    line-height: 1.08;
    color: #0A2540;
    margin: 0;
  }

  .sol-page h2 {
    font-family: Effra, sans-serif;
    font-size: 2.5rem;
    font-weight: 400;
    letter-spacing: normal;
    line-height: 1.12;
    color: #0A2540;
    margin: 0;
  }

  .sol-page h3, .sol-page h4, .sol-page h5, .sol-page h6 {
    font-family: Effra, sans-serif;
    color: #0A2540;
    margin: 0;
  }

  .sol-page h3 {
    font-size: 20px;
    font-weight: 700;
    letter-spacing: -0.02em;
  }

  .sol-page p {
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
    padding: 90px 0;
    position: relative;
  }

  .section.alt {
    background: #F6F9FC;
  }

  .section.dark {
    background: #0A192F;
    color: #F8F5EF;
  }
  .section.dark h2, .section.dark h3, .section.dark h4 { color: #FFF; }
  .section.dark p { color: #A0AEC0; }

  /* Eyebrow Label */
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

  .sec-header {
    text-align: center;
    max-width: 760px;
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

  /* ===================== HERO SECTION ===================== */
  .sol-hero {
    padding: 100px 0 80px;
    background: #FFFFFF !important;
    position: relative;
    overflow: hidden;
  }

  .sol-hero-grid {
    display: grid;
    grid-template-columns: 1.15fr 1fr;
    gap: 48px;
    align-items: center;
  }

  .sol-hero h1 {
    font-family: 'Plus Jakarta Sans', -apple-system, BlinkMacSystemFont, 'Segoe UI', sans-serif;
    font-size: clamp(40px, 5vw, 66px);
    line-height: 1.08;
    margin-bottom: 20px;
    letter-spacing: -0.035em;
    font-weight: 800;
    color: #0A2540;
  }

  .sol-hero h1 .highlight {
    font-family: 'Playfair Display', Georgia, serif;
    font-style: italic;
    font-weight: 700;
    background: linear-gradient(135deg, #B45309 0%, #D97706 100%);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    display: inline-block;
  }

  .sol-hero p.lead {
    font-size: 18px;
    color: #425466;
    font-family: 'Inter', sans-serif;
    line-height: 1.6;
    margin-bottom: 32px;
  }

  .sol-hero-cta-group {
    display: flex;
    gap: 14px;
    flex-wrap: wrap;
    margin-bottom: 36px;
  }

  .sol-hero-badges-row {
    display: flex;
    align-items: center;
    gap: 16px;
    flex-wrap: wrap;
    padding-top: 24px;
    border-top: 1px solid var(--line);
  }

  .sol-hero-tag {
    display: inline-flex;
    align-items: center;
    gap: 6px;
    font-size: 13px;
    font-weight: 500;
    color: var(--ink-soft);
    background: rgba(255,255,255,0.7);
    padding: 5px 12px;
    border-radius: 6px;
    border: 1px solid #E3E8EE;
  }

  /* Hero Visual Mockup */
  .sol-hero-visual {
    position: relative;
  }

  .sol-hero-dashboard-frame {
    background: #fff;
    border-radius: 18px;
    box-shadow: var(--shadow-lg);
    border: 1px solid #E3E8EE;
    overflow: hidden;
    position: relative;
  }

  .sol-hero-dashboard-bar {
    background: #231B15;
    padding: 10px 16px;
    display: flex;
    align-items: center;
    gap: 8px;
  }

  .sol-hero-dashboard-bar .dot {
    width: 9px;
    height: 9px;
    border-radius: 50%;
  }
  .dot.r { background: #ef4444; }
  .dot.y { background: #f59e0b; }
  .dot.g { background: #10b981; }

  .sol-hero-dashboard-content {
    padding: 20px;
    background: #FAF7F2;
  }

  .sol-hero-img-wrap {
    position: relative;
    border-radius: 12px;
    overflow: hidden;
    height: 290px;
  }

  .sol-hero-img-wrap img {
    width: 100%;
    height: 100%;
    object-fit: cover;
  }

  /* Floating UI Cards */
  .float-badge {
    position: absolute;
    background: #fff;
    padding: 10px 14px;
    border-radius: 12px;
    box-shadow: var(--shadow-md);
    border: 1px solid #E3E8EE;
    display: flex;
    align-items: center;
    gap: 10px;
    font-size: 13px;
    font-weight: 600;
    color: var(--ink);
    animation: floatAnim 4s ease-in-out infinite alternate;
    z-index: 5;
  }

  .float-badge.pos-top-left { top: -16px; left: -16px; }
  .float-badge.pos-bottom-right { bottom: -16px; right: -16px; animation-delay: 1.5s; }
  .float-badge.pos-bottom-left { bottom: 30px; left: -24px; animation-delay: 2.5s; }

  @keyframes floatAnim {
    0% { transform: translateY(0); }
    100% { transform: translateY(-8px); }
  }

  .float-icon {
    width: 32px;
    height: 32px;
    border-radius: 8px;
    display: grid;
    place-items: center;
    flex-shrink: 0;
  }
  .float-icon svg { width: 18px; height: 18px; stroke: currentColor; fill: none; stroke-width: 2; }
  .float-icon.br { background: var(--br-light); color: var(--br); }
  .float-icon.gr { background: var(--green-light); color: var(--green); }
  .float-icon.bl { background: var(--blue-light); color: var(--blue); }

  /* ===================== SOLUTION FINDER ===================== */
  .sol-finder-bar {
    background: #fff;
    border-radius: 18px;
    padding: 20px;
    box-shadow: var(--shadow-md);
    border: 1px solid var(--line);
    margin-bottom: 48px;
  }

  .sol-finder-tabs {
    display: flex;
    gap: 8px;
    flex-wrap: wrap;
    margin-bottom: 16px;
    padding-bottom: 16px;
    border-bottom: 1px solid #eee;
  }

  .sol-tab-btn {
    padding: 9px 18px;
    border-radius: 999px;
    border: 1px solid var(--line);
    background: #fff;
    color: var(--ink-soft);
    font-size: 13.5px;
    font-weight: 700;
    font-family: 'Plus Jakarta Sans', sans-serif;
    cursor: pointer;
    transition: all 0.2s ease;
  }

  .sol-tab-btn:hover {
    background: var(--br-light);
    color: var(--br);
    border-color: var(--br);
  }

  .sol-tab-btn.active {
    background: #0A2540;
    color: #fff;
    border-color: #0A2540;
    box-shadow: 0 4px 12px rgba(10,37,64,0.2);
  }

  .sol-search-wrapper {
    position: relative;
  }

  .sol-search-icon {
    position: absolute;
    left: 16px;
    top: 50%;
    transform: translateY(-50%);
    color: var(--ink-faint);
    width: 20px;
    height: 20px;
    pointer-events: none;
  }

  .sol-search-input {
    width: 100%;
    padding: 14px 16px 14px 48px;
    border-radius: 10px;
    border: 1px solid var(--line);
    background: #F6F9FC;
    font-size: 15px;
    font-family: inherit;
    color: var(--ink);
    transition: all 0.2s ease;
  }

  .sol-search-input:focus {
    outline: none;
    border-color: #0A2540;
    background: #fff;
    box-shadow: 0 0 0 3px rgba(10,37,64,0.12);
  }

  /* ===================== SOLUTION CARDS GRID ===================== */
  .sol-grid-2 {
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    gap: 32px;
  }

  .sol-grid-3 {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 28px;
  }

  .sol-card {
    background: #fff;
    border-radius: 18px;
    overflow: hidden;
    border: 1px solid var(--line);
    box-shadow: var(--shadow-sm);
    display: flex;
    flex-direction: column;
    transition: transform 0.25s ease, box-shadow 0.25s ease;
  }

  .sol-card:hover {
    transform: translateY(-4px);
    box-shadow: var(--shadow-md);
    border-color: #CBD5E1;
  }

  .sol-card-media {
    position: relative;
    height: 280px;
    overflow: hidden;
    background: #231B15;
  }

  @media (max-width: 768px) {
    .sol-card-media {
      height: 220px;
    }
  }

  .sol-card-media img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: transform 0.4s ease;
  }

  .sol-card:hover .sol-card-media img {
    transform: scale(1.04);
  }

  .sol-card-badge {
    position: absolute;
    top: 14px;
    left: 14px;
    background: rgba(33, 22, 15, 0.85);
    backdrop-filter: blur(8px);
    color: #fff;
    font-size: 11px;
    font-weight: 600;
    letter-spacing: 0.08em;
    text-transform: uppercase;
    padding: 4px 10px;
    border-radius: 6px;
    border: 1px solid rgba(255,255,255,0.15);
  }

  .sol-card-body {
    padding: 24px;
    display: flex;
    flex-direction: column;
    flex: 1;
  }

  .sol-card-title,
  .sol-page .sol-card-title {
    font-size: 21px !important;
    font-weight: 700 !important;
    line-height: 1.3 !important;
    margin: 0 0 12px 0 !important;
  }

  .sol-card-desc,
  .sol-page .sol-card-desc {
    font-size: 14.5px !important;
    color: var(--ink-soft) !important;
    line-height: 1.6 !important;
    margin: 0 0 20px 0 !important;
    min-height: 44px;
  }

  .sol-caps-label {
    font-size: 11px;
    font-weight: 600;
    color: var(--ink-faint);
    text-transform: uppercase;
    letter-spacing: 0.08em;
    margin-bottom: 12px !important;
  }

  .sol-caps-pills {
    display: flex;
    flex-wrap: wrap;
    gap: 7px;
    margin-bottom: 0 !important;
  }

  .sol-pill {
    font-size: 12px;
    font-weight: 500;
    background: #F6F1EA;
    color: var(--brown);
    padding: 4px 10px;
    border-radius: 6px;
    border: 1px solid #E3E8EE;
  }

  .sol-card-footer {
    margin-top: auto;
    padding-top: 16px;
    border-top: 1px solid #F0E9DF;
    display: flex;
    justify-content: space-between;
    align-items: center;
  }

  .sol-card-link {
    font-size: 14px;
    font-weight: 600;
    color: var(--br);
    text-decoration: none;
    display: inline-flex;
    align-items: center;
    gap: 6px;
    transition: gap 0.2s ease;
  }

  .sol-card-link:hover {
    color: var(--br-dark);
    gap: 10px;
  }

  /* ===================== MULTI-BRANCH TREE VISUAL ===================== */
  .mb-tree-wrap {
    background: #FAF7F2;
    border-radius: 16px;
    padding: 24px;
    border: 1px solid var(--line);
    margin-top: 20px;
    text-align: center;
  }

  .mb-node {
    display: inline-block;
    background: #fff;
    padding: 10px 18px;
    border-radius: 10px;
    border: 1.5px solid var(--br);
    box-shadow: var(--shadow-sm);
    font-weight: 600;
    font-size: 13.5px;
    color: var(--ink);
  }

  .mb-tree-line {
    width: 2px;
    height: 20px;
    background: var(--line);
    margin: 0 auto;
  }

  .mb-branches-row {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 12px;
    margin-top: 12px;
    position: relative;
  }

  .mb-branch-card {
    background: #fff;
    padding: 12px;
    border-radius: 8px;
    border: 1px solid var(--line);
    font-size: 12px;
    text-align: left;
  }
  .mb-branch-title { font-weight: 600; color: var(--br); margin-bottom: 4px; }
  .mb-branch-metric { color: var(--ink-soft); font-size: 11.5px; }

  /* ===================== INTERACTIVE WORKFLOW SECTION ===================== */
  .sol-wf-tabs {
    display: flex;
    justify-content: center;
    gap: 10px;
    flex-wrap: wrap;
    margin-bottom: 36px;
  }

  .sol-wf-tab-btn {
    padding: 10px 22px;
    border-radius: 10px;
    border: 1px solid var(--line);
    background: #fff;
    font-size: 14px;
    font-weight: 600;
    color: var(--ink-soft);
    cursor: pointer;
    transition: all 0.2s ease;
  }

  .sol-wf-tab-btn:hover {
    border-color: var(--br);
    color: var(--br);
  }

  .sol-wf-tab-btn.active {
    background: var(--br);
    color: #fff;
    border-color: var(--br);
    box-shadow: 0 4px 14px rgba(10, 37, 64,0.25);
  }

  .sol-wf-board {
    background: #fff;
    border-radius: 20px;
    padding: 36px;
    box-shadow: var(--shadow-md);
    border: 1px solid var(--line);
  }

  .sol-wf-flow-row {
    display: flex;
    align-items: center;
    justify-content: space-between;
    gap: 12px;
    flex-wrap: wrap;
    margin-bottom: 28px;
  }

  .sol-wf-step {
    flex: 1;
    min-width: 140px;
    background: #FAF7F2;
    border-radius: 12px;
    padding: 16px;
    border: 1px solid var(--line);
    text-align: center;
    position: relative;
    transition: all 0.25s ease;
  }

  .sol-wf-step:hover {
    background: var(--br-light);
    border-color: var(--br);
  }

  .sol-wf-num {
    width: 26px;
    height: 26px;
    border-radius: 50%;
    background: var(--br);
    color: #fff;
    font-size: 12px;
    font-weight: 600;
    display: grid;
    place-items: center;
    margin: 0 auto 8px;
  }

  .sol-wf-step-name {
    font-size: 14px;
    font-weight: 600;
    color: var(--ink);
    margin-bottom: 4px;
  }

  .sol-wf-step-desc {
    font-size: 12px;
    color: var(--ink-soft);
  }

  .sol-wf-arrow {
    color: var(--gold-deep);
    font-weight: 600;
    font-size: 18px;
  }

  /* ===================== ECOSYSTEM / CONNECTED NODES ===================== */
  .eco-map-wrap {
    background: #231B15;
    border-radius: 24px;
    padding: 56px 36px;
    position: relative;
    overflow: hidden;
    text-align: center;
  }

  .eco-center-node {
    display: inline-flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    width: 170px;
    height: 170px;
    border-radius: 50%;
    background: linear-gradient(135deg, #0A2540 0%, #1A2E4C 100%);
    color: #fff;
    box-shadow: 0 0 50px rgba(10,37,64,0.35);
    border: 4px solid rgba(255,255,255,0.15);
    margin: 0 auto 36px;
    z-index: 2;
    position: relative;
  }

  .eco-center-node .brand { font-size: 17px; font-weight: 700; letter-spacing: 0.05em; }
  .eco-center-node .sub { font-size: 11px; opacity: 0.85; text-transform: uppercase; margin-top: 2px; }

  .eco-badges-grid {
    display: grid;
    grid-template-columns: repeat(7, 1fr);
    gap: 12px;
    position: relative;
    z-index: 2;
  }

  .eco-badge {
    background: rgba(255,255,255,0.06);
    border: 1px solid rgba(255,255,255,0.12);
    border-radius: 10px;
    padding: 12px 8px;
    font-size: 12.5px;
    font-weight: 500;
    color: #E6DFD7;
    backdrop-filter: blur(4px);
    transition: all 0.2s ease;
  }

  .eco-badge:hover {
    background: rgba(10, 37, 64,0.3);
    border-color: var(--gold);
    color: #fff;
    transform: translateY(-2px);
  }

  /* ===================== COMPARISON TABLE ===================== */
  .comp-table-card {
    background: #fff;
    border-radius: 18px;
    overflow: hidden;
    box-shadow: var(--shadow-sm);
    border: 1px solid var(--line);
  }

  .sol-comp-table {
    width: 100%;
    border-collapse: collapse;
    text-align: left;
    font-size: 14px;
  }

  .sol-comp-table th {
    background: #F7F3EC;
    padding: 16px 20px;
    font-weight: 600;
    font-size: 13px;
    text-transform: uppercase;
    letter-spacing: 0.05em;
    color: var(--brown);
    border-bottom: 2px solid var(--line);
  }

  .sol-comp-table td {
    padding: 16px 20px;
    border-bottom: 1px solid #F0E8DF;
    color: var(--ink-soft);
  }

  .sol-comp-table tr:hover td {
    background: #FCFAF6;
  }

  .sol-comp-table td.title-cell {
    font-weight: 600;
    color: var(--ink);
  }

  /* Mobile Stacked Table Cards */
  .comp-mobile-cards { display: none; }

  /* ===================== BUSINESS STAGES ===================== */
  .stage-grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 28px;
  }

  .stage-card {
    background: #fff;
    border-radius: 18px;
    padding: 32px 28px;
    border: 1px solid var(--line);
    box-shadow: var(--shadow-sm);
    display: flex;
    flex-direction: column;
    transition: all 0.25s ease;
  }

  .stage-card:hover {
    transform: translateY(-4px);
    box-shadow: var(--shadow-md);
    border-color: #CBD5E1;
  }

  .stage-pill {
    display: inline-block;
    font-size: 11.5px;
    font-weight: 700;
    text-transform: uppercase;
    letter-spacing: 0.1em;
    padding: 4px 10px;
    border-radius: 6px;
    background: var(--br-light);
    color: var(--br);
    margin-bottom: 14px;
    align-self: flex-start;
  }

  .stage-card h3 { font-size: 22px; margin-bottom: 10px; }
  .stage-card p { font-size: 14px; margin-bottom: 20px; line-height: 1.6; }

  .stage-examples {
    background: #FAF7F2;
    border-radius: 10px;
    padding: 14px 18px;
    margin-bottom: 24px;
    font-size: 13px;
    color: var(--ink-soft);
  }

  .stage-examples ul {
    margin: 6px 0 0 16px;
    padding: 0;
  }

  .stage-card .btn { margin-top: auto; }

  /* ===================== WHY GENI MENU (BENEFITS) ===================== */
  .benefits-grid {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    gap: 24px;
  }

  .benefit-box {
    background: #fff;
    padding: 28px 24px;
    border-radius: 16px;
    border: 1px solid var(--line);
    box-shadow: var(--shadow-sm);
    transition: all 0.2s ease;
  }

  .benefit-box:hover {
    transform: translateY(-3px);
    border-color: #CBD5E1;
  }

  .benefit-icon {
    width: 44px;
    height: 44px;
    border-radius: 10px;
    background: var(--br-light);
    color: var(--br);
    display: grid;
    place-items: center;
    margin-bottom: 18px;
  }

  .benefit-icon svg { width: 22px; height: 22px; stroke: currentColor; fill: none; stroke-width: 2; }
  .benefit-box h4 { font-size: 18px; margin-bottom: 8px; }
  .benefit-box p { font-size: 13.5px; line-height: 1.55; }

  /* ===================== EXPLORE FEATURES GRID ===================== */
  .features-mosaic {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    gap: 18px;
  }

  .feat-tile {
    background: #fff;
    border-radius: 12px;
    padding: 20px 18px;
    border: 1px solid var(--line);
    color: var(--ink);
    display: flex;
    align-items: center;
    gap: 14px;
    transition: all 0.2s ease;
    cursor: default;
    user-select: none;
  }

  .feat-tile:hover {
    border-color: #CBD5E1;
    box-shadow: var(--shadow-sm);
  }

  .feat-tile-icon {
    width: 36px;
    height: 36px;
    border-radius: 8px;
    background: #F6F1EA;
    color: var(--br);
    display: grid;
    place-items: center;
    flex-shrink: 0;
  }
  .feat-tile-icon svg { width: 18px; height: 18px; stroke: currentColor; fill: none; stroke-width: 2; }
  .feat-tile-name { font-weight: 600; font-size: 14px; }

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
    font-family: 'Plus Jakarta Sans', -apple-system, sans-serif;
    font-weight: 800;
    font-size: clamp(30px, 3.6vw, 42px);
    line-height: 1.15;
    color: #0A2540;
    letter-spacing: -0.035em;
    margin: 0 0 16px;
  }

  .faq-lead-desc {
    font-family: 'Inter', system-ui, sans-serif;
    font-size: 16px;
    color: #425466;
    line-height: 1.65;
    letter-spacing: -0.01em;
    margin: 0 0 32px;
    max-width: 420px;
  }

  /* Support Help Card */
  .faq-support-card {
    background: #F6F9FC;
    border: 1px solid #E3E8EE;
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
    background: #F6F9FC;
    display: grid;
    place-items: center;
    border: 1px solid #E3E8EE;
  }
  .faq-row:hover i {
    border-color: #CBD5E1;
    background: #FFFFFF;
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
    .faq-lead-desc,
    .faq-support-card {
      max-width: 100%;
    }
  }

  /* ===================== FINAL CTA SECTION ===================== */
  .final-cta-box {
    background: radial-gradient(circle at 50% 0%, #1A2E4C 0%, #0A192F 100%);
    border-radius: 28px;
    padding: 72px 48px;
    color: #FFFFFF;
    text-align: center;
    box-shadow: 0 16px 40px rgba(10, 37, 64, 0.25);
    border: 1px solid rgba(255, 255, 255, 0.12);
    position: relative;
    overflow: hidden;
  }

  .final-cta-box h2 {
    font-family: Effra, sans-serif !important;
    color: #FFFFFF !important;
    font-size: 2.5rem;
    margin-bottom: 16px;
    font-weight: 400;
    letter-spacing: normal;
    line-height: 1.12;
  }

  .final-cta-box p {
    color: #A0AEC0 !important;
    font-size: 18px;
    max-width: 640px;
    margin: 0 auto 36px;
    line-height: 1.6;
    font-family: 'Inter', sans-serif;
  }

  .final-cta-buttons {
    display: flex;
    justify-content: center;
    gap: 16px;
    flex-wrap: wrap;
  }

  .final-cta-box .btn.p {
    background: #FFFFFF !important;
    color: #0A2540 !important;
    border-color: #FFFFFF !important;
    box-shadow: 0 10px 30px rgba(0,0,0,0.3) !important;
  }
  .final-cta-box .btn.p:hover {
    background: #F6F9FC !important;
    transform: translateY(-2px);
    box-shadow: 0 16px 40px rgba(0,0,0,0.4) !important;
  }

  .final-cta-box .btn.o {
    background: rgba(255, 255, 255, 0.08) !important;
    border-color: rgba(255, 255, 255, 0.25) !important;
    color: #FFFFFF !important;
  }
  .final-cta-box .btn.o:hover {
    background: rgba(255, 255, 255, 0.16) !important;
    border-color: rgba(255, 255, 255, 0.4) !important;
  }

  /* ===================== RESPONSIVENESS ===================== */
  @media (max-width: 1024px) {
    .sol-hero h1 { font-size: 40px; }
    .sol-hero-grid { grid-template-columns: 1fr; gap: 40px; }
    .sol-grid-3 { grid-template-columns: repeat(2, 1fr); }
    .stage-grid { grid-template-columns: 1fr; }
    .benefits-grid { grid-template-columns: repeat(2, 1fr); }
    .features-mosaic { grid-template-columns: repeat(2, 1fr); }
    .eco-badges-grid { grid-template-columns: repeat(4, 1fr); }
  }

  @media (max-width: 768px) {
    .section { padding: 60px 0; }
    .sol-hero { padding: 60px 0 50px; }
    .sol-hero h1 { font-size: 32px; }
    .sol-grid-2, .sol-grid-3 { grid-template-columns: 1fr; }
    .sol-finder-tabs { overflow-x: auto; flex-wrap: nowrap; padding-bottom: 12px; }
    .sol-tab-btn { white-space: nowrap; }
    .sol-comp-table { display: none; }
    .comp-mobile-cards { display: flex; flex-direction: column; gap: 14px; }
    .comp-m-card { background: #fff; border: 1px solid var(--line); border-radius: 12px; padding: 16px; }
    .comp-m-type { font-weight: 700; color: var(--br); font-size: 15px; margin-bottom: 6px; }
    .comp-m-best { font-size: 13px; color: var(--ink); margin-bottom: 4px; }
    .comp-m-ops { font-size: 12.5px; color: var(--ink-soft); }
    .eco-badges-grid { grid-template-columns: repeat(2, 1fr); }
    .final-cta-box { padding: 48px 24px; }
    .final-cta-box h2 { font-size: 28px; }
  }
</style>

<div class="sol-page">

  {{-- 1. HERO SECTION --}}
  <section class="sol-hero">
    <div class="w">
      <div class="sol-hero-grid">
        <div data-aos="fade-right">
          <div class="sec-eyebrow">
            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5"/></svg>
            GENI MENU SOLUTIONS
          </div>
          <h1>Built Around the Way Your <span class="highlight">Food Business Works.</span></h1>
          <p class="lead">Whether you run a family restaurant, QSR, bakery, café, canteen, pizzeria, cloud kitchen or growing restaurant chain, Geni Menu gives you the tools to manage your operations around your business model.</p>
          
          <div class="sol-hero-cta-group">
            <a href="#solution-finder" class="btn p">Find Your Solution &rarr;</a>
            <button type="button" onclick="openPopup('Book a Demo - Geni Menu Solutions')" class="btn o">Book a Demo &rarr;</button>
          </div>

          <div class="sol-hero-badges-row">
            <div class="sol-hero-tag"><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg> Fast Counter POS</div>
            <div class="sol-hero-tag"><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg> Instant KOT Dispatch</div>
            <div class="sol-hero-tag"><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg> Table &amp; Reservations</div>
            <div class="sol-hero-tag"><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg> Multi-Branch Sync</div>
          </div>
        </div>

        {{-- Hero Visual SaaS Composite --}}
        <div class="sol-hero-visual" data-aos="fade-left">
          <div class="sol-hero-dashboard-frame">
            <div class="sol-hero-dashboard-bar">
              <span class="dot r"></span><span class="dot y"></span><span class="dot g"></span>
              <span style="font-size:11px; color:#A89F95; margin-left:8px; font-family:monospace;">genimenu.app/dashboard</span>
            </div>
            <div class="sol-hero-dashboard-content">
              <div class="sol-hero-img-wrap">
                <img src="https://images.unsplash.com/photo-1517248135467-4c7edcad34c4?q=80&w=1200&auto=format&fit=crop" alt="Geni Menu Restaurant Operations Platform" loading="lazy">
              </div>
            </div>
          </div>

          {{-- Floating UI Badges --}}
          <div class="float-badge pos-top-left">
            <div class="float-icon br"><svg viewBox="0 0 24 24"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/><polyline points="14 2 14 8 20 8"/><line x1="16" y1="13" x2="8" y2="13"/><line x1="16" y1="17" x2="8" y2="17"/></svg></div>
            <div>
              <div style="font-size:11px; color:var(--ink-faint); text-transform:uppercase;">Kitchen KOT</div>
              <div style="color:var(--ink);">KOT #1488 &bull; 3 Items Ready</div>
            </div>
          </div>

          <div class="float-badge pos-bottom-right">
            <div class="float-icon gr"><svg viewBox="0 0 24 24"><rect x="2" y="5" width="20" height="14" rx="2"/><line x1="2" y1="10" x2="22" y2="10"/></svg></div>
            <div>
              <div style="font-size:11px; color:var(--ink-faint); text-transform:uppercase;">Fast POS</div>
              <div style="color:var(--green);">&#8377;1,480 &bull; Paid (UPI)</div>
            </div>
          </div>

          <div class="float-badge pos-bottom-left">
            <div class="float-icon bl"><svg viewBox="0 0 24 24"><path d="M4 9h16M5 9v10M19 9v10M9 9V5h6v4M7 15h10"/></svg></div>
            <div>
              <div style="font-size:11px; color:var(--ink-faint); text-transform:uppercase;">Live Seating</div>
              <div style="color:var(--blue);">Table 14 &bull; Occupied</div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  {{-- 2. INTERACTIVE SOLUTION FINDER --}}
  <section class="section" id="solution-finder" style="padding-top:60px;">
    <div class="w">
      <div class="sec-header" data-aos="fade-up">
        <div class="sec-eyebrow">SOLUTIONS BY BUSINESS TYPE</div>
        <h2>Find the Right Solution for Your Business.</h2>
        <p>Choose your business type to discover the workflows, features and tools designed around your operations.</p>
      </div>

      {{-- Search & Tabs Container --}}
      <div class="sol-finder-bar" data-aos="fade-up">
        <div class="sol-finder-tabs">
          <button type="button" class="sol-tab-btn active" data-cat="all">All Solutions</button>
          <button type="button" class="sol-tab-btn" data-cat="restaurants">Restaurants</button>
          <button type="button" class="sol-tab-btn" data-cat="qsr">Quick Service</button>
          <button type="button" class="sol-tab-btn" data-cat="specialty">Specialty Food</button>
          <button type="button" class="sol-tab-btn" data-cat="canteens">Canteens</button>
          <button type="button" class="sol-tab-btn" data-cat="hospitality">Hospitality &amp; Bars</button>
          <button type="button" class="sol-tab-btn" data-cat="growing">Growing Businesses</button>
        </div>

        <div class="sol-search-wrapper">
          <svg class="sol-search-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="11" cy="11" r="8"/><line x1="21" y1="21" x2="16.65" y2="16.65"/></svg>
          <input type="text" id="solutionSearchInput" class="sol-search-input" placeholder="Search your business type (e.g. family restaurant, bakery, qsr, sweet shop, canteen, bar, multi-branch)...">
        </div>
      </div>

      {{-- 3. RESTAURANT SOLUTIONS GROUP --}}
      <div class="sol-section-group" id="group-restaurants" data-category="restaurants">
        <div style="margin-bottom:24px; display:flex; align-items:center; justify-content:space-between; flex-wrap:wrap; gap:12px;">
          <div>
            <div class="sec-eyebrow" style="margin-bottom:6px;">RESTAURANTS</div>
            <h3 style="font-size:28px;">Restaurant Management Built Around Your Service Model.</h3>
          </div>
        </div>

        <div class="sol-grid-2" style="margin-bottom:64px;">
          {{-- Card 1: Family Restaurant --}}
          <div class="sol-card solution-item" data-name="Family Restaurant" data-tags="restaurants dine-in table kot pos family">
            <div class="sol-card-media">
              <img src="https://images.unsplash.com/photo-1555396273-367ea4eb4db5?q=80&w=900&auto=format&fit=crop" alt="Family Restaurant" loading="lazy">
              <span class="sol-card-badge">Full Service Dining</span>
            </div>
            <div class="sol-card-body">
              <h4 class="sol-card-title">Family Restaurant</h4>
              <p class="sol-card-desc">Manage tables, group orders, KOT, POS and everyday restaurant operations from one connected platform.</p>
              
              <div class="sol-caps-label">Key Capabilities</div>
              <div class="sol-caps-pills">
                <span class="sol-pill">Tables</span>
                <span class="sol-pill">Orders</span>
                <span class="sol-pill">KOT</span>
                <span class="sol-pill">POS</span>
                <span class="sol-pill">Customers</span>
                <span class="sol-pill">Inventory</span>
                <span class="sol-pill">Reports</span>
              </div>
            </div>
          </div>

          {{-- Card 2: Dine-in Restaurant --}}
          <div class="sol-card solution-item" data-name="Dine-in Restaurant" data-tags="restaurants dine-in table digital menu reservations pos">
            <div class="sol-card-media">
              <img src="https://images.unsplash.com/photo-1517248135467-4c7edcad34c4?q=80&w=900&auto=format&fit=crop" alt="Dine-in Restaurant" loading="lazy">
              <span class="sol-card-badge">Smart Table Dining</span>
            </div>
            <div class="sol-card-body">
              <h4 class="sol-card-title">Dine-in Restaurant</h4>
              <p class="sol-card-desc">Connect table service, digital menus, orders, KOT and billing for a smoother dine-in experience.</p>
              
              <div class="sol-caps-label">Key Capabilities</div>
              <div class="sol-caps-pills">
                <span class="sol-pill">Table Management</span>
                <span class="sol-pill">Digital Menu</span>
                <span class="sol-pill">Orders</span>
                <span class="sol-pill">KOT</span>
                <span class="sol-pill">POS</span>
                <span class="sol-pill">Reservations</span>
                <span class="sol-pill">Payments</span>
              </div>
            </div>
          </div>

          {{-- Card 3: Fine Dining --}}
          <div class="sol-card solution-item" data-name="Fine Dining" data-tags="restaurants hospitality fine dining reservations waiter requests pos">
            <div class="sol-card-media">
              <img src="https://images.unsplash.com/photo-1544025162-d76694265947?q=80&w=900&auto=format&fit=crop" alt="Fine Dining" loading="lazy">
              <span class="sol-card-badge">Luxury &amp; Experience</span>
            </div>
            <div class="sol-card-body">
              <h4 class="sol-card-title">Fine Dining</h4>
              <p class="sol-card-desc">Create a more organized dining experience with table management, reservations, service requests and billing.</p>
              
              <div class="sol-caps-label">Key Capabilities</div>
              <div class="sol-caps-pills">
                <span class="sol-pill">Table Management</span>
                <span class="sol-pill">Reservations</span>
                <span class="sol-pill">Digital Menu</span>
                <span class="sol-pill">Table-linked Orders</span>
                <span class="sol-pill">Waiter Requests</span>
                <span class="sol-pill">POS</span>
                <span class="sol-pill">Customer CRM</span>
              </div>
            </div>
          </div>

          {{-- Card 4: Multi-Cuisine Restaurant --}}
          <div class="sol-card solution-item" data-name="Multi-Cuisine Restaurant" data-tags="restaurants multi-cuisine categories kitchen stations kot">
            <div class="sol-card-media">
              <img src="https://images.unsplash.com/photo-1546069901-ba9599a7e63c?q=80&w=900&auto=format&fit=crop" alt="Multi-Cuisine Restaurant" loading="lazy">
              <span class="sol-card-badge">Multi-Category Kitchen</span>
            </div>
            <div class="sol-card-body">
              <h4 class="sol-card-title">Multi-Cuisine Restaurant</h4>
              <p class="sol-card-desc">Manage diverse menus, categories and kitchen workflows from one connected platform.</p>
              
              <div class="sol-caps-label">Key Capabilities</div>
              <div class="sol-caps-pills">
                <span class="sol-pill">Multiple Menu Categories</span>
                <span class="sol-pill">Orders</span>
                <span class="sol-pill">KOT</span>
                <span class="sol-pill">Kitchen Workflows</span>
                <span class="sol-pill">Tables</span>
                <span class="sol-pill">Inventory</span>
                <span class="sol-pill">Reports</span>
              </div>
            </div>
          </div>
        </div>
      </div>

      {{-- 4. QUICK SERVICE SOLUTIONS GROUP --}}
      <div class="sol-section-group" id="group-qsr" data-category="qsr">
        <div style="margin-bottom:24px;">
          <div class="sec-eyebrow" style="margin-bottom:6px;">QUICK SERVICE</div>
          <h3 style="font-size:28px;">Built for Speed, Volume and Faster Service.</h3>
        </div>

        <div class="sol-grid-2" style="margin-bottom:64px;">
          {{-- Card 5: QSR --}}
          <div class="sol-card solution-item" data-name="Quick Service Restaurant (QSR)" data-tags="qsr fast food burger counter pos kot speed">
            <div class="sol-card-media">
              <img src="https://images.unsplash.com/photo-1550547660-d9450f859349?q=80&w=900&auto=format&fit=crop" alt="Quick Service Restaurant" loading="lazy">
              <span class="sol-card-badge">High Volume Speed</span>
            </div>
            <div class="sol-card-body">
              <h4 class="sol-card-title">Quick Service Restaurant (QSR)</h4>
              <p class="sol-card-desc">Keep counter orders, POS, KOT and customer service moving during peak hours.</p>
              
              <div class="sol-caps-label">Key Capabilities</div>
              <div class="sol-caps-pills">
                <span class="sol-pill">Fast POS</span>
                <span class="sol-pill">Counter Orders</span>
                <span class="sol-pill">KOT</span>
                <span class="sol-pill">Kitchen</span>
                <span class="sol-pill">Payments</span>
                <span class="sol-pill">Customers</span>
                <span class="sol-pill">Inventory</span>
                <span class="sol-pill">Reports</span>
              </div>
            </div>
          </div>

          {{-- Card 6: Takeaway Restaurant --}}
          <div class="sol-card solution-item" data-name="Takeaway Restaurant" data-tags="qsr takeaway pickup parcel delivery counter">
            <div class="sol-card-media">
              <img src="https://images.unsplash.com/photo-1526367790999-0150786686a2?q=80&w=900&auto=format&fit=crop" alt="Takeaway Restaurant" loading="lazy">
              <span class="sol-card-badge">Parcel &amp; Pickup</span>
            </div>
            <div class="sol-card-body">
              <h4 class="sol-card-title">Takeaway Restaurant</h4>
              <p class="sol-card-desc">Manage counter orders, kitchen preparation and customer pickup from one connected workflow.</p>
              
              <div class="sol-caps-label">Key Capabilities</div>
              <div class="sol-caps-pills">
                <span class="sol-pill">Counter Orders</span>
                <span class="sol-pill">Order Management</span>
                <span class="sol-pill">KOT</span>
                <span class="sol-pill">Kitchen</span>
                <span class="sol-pill">Payments</span>
                <span class="sol-pill">Customer CRM</span>
                <span class="sol-pill">Pickup Workflow</span>
              </div>
            </div>
          </div>
        </div>
      </div>

      {{-- 5. CANTEENS & INSTITUTIONAL FOOD GROUP --}}
      <div class="sol-section-group" id="group-canteens" data-category="canteens">
        <div style="margin-bottom:24px;">
          <div class="sec-eyebrow" style="margin-bottom:6px;">CANTEENS &amp; INSTITUTIONAL FOOD</div>
          <h3 style="font-size:28px;">Simplify Everyday High-Volume Food Service.</h3>
        </div>

        <div class="sol-grid-2" style="margin-bottom:64px;">
          {{-- Card 7: College Canteen --}}
          <div class="sol-card solution-item" data-name="College Canteen" data-tags="canteens college campus student multi-counter">
            <div class="sol-card-media">
              <img src="https://images.unsplash.com/photo-1567521464027-f127ff144326?q=80&w=900&auto=format&fit=crop" alt="College Canteen" loading="lazy">
              <span class="sol-card-badge">Campus Dining</span>
            </div>
            <div class="sol-card-body">
              <h4 class="sol-card-title">College Canteen</h4>
              <p class="sol-card-desc">Built for busy campus food service, multiple counters and everyday student orders.</p>
              
              <div class="sol-caps-label">Key Capabilities</div>
              <div class="sol-caps-pills">
                <span class="sol-pill">Menu</span>
                <span class="sol-pill">POS</span>
                <span class="sol-pill">Counter Orders</span>
                <span class="sol-pill">KOT</span>
                <span class="sol-pill">Kitchen</span>
                <span class="sol-pill">Inventory</span>
                <span class="sol-pill">Reports</span>
              </div>
            </div>
          </div>

          {{-- Card 8: Office Canteen --}}
          <div class="sol-card solution-item" data-name="Office Canteen" data-tags="canteens corporate office cafeteria lunch tokens">
            <div class="sol-card-media">
              <img src="https://images.unsplash.com/photo-1577495508048-b635879837f1?q=80&w=900&auto=format&fit=crop" alt="Office Canteen" loading="lazy">
              <span class="sol-card-badge">Corporate Cafeteria</span>
            </div>
            <div class="sol-card-body">
              <h4 class="sol-card-title">Office Canteen</h4>
              <p class="sol-card-desc">Manage employee food service, counters, kitchen operations and daily orders efficiently.</p>
              
              <div class="sol-caps-label">Key Capabilities</div>
              <div class="sol-caps-pills">
                <span class="sol-pill">Menu</span>
                <span class="sol-pill">Orders</span>
                <span class="sol-pill">POS</span>
                <span class="sol-pill">Kitchen</span>
                <span class="sol-pill">Staff</span>
                <span class="sol-pill">Inventory</span>
                <span class="sol-pill">Reports</span>
              </div>
            </div>
          </div>
        </div>
      </div>

      {{-- 6. SPECIALTY FOOD SOLUTIONS GROUP --}}
      <div class="sol-section-group" id="group-specialty" data-category="specialty">
        <div style="margin-bottom:24px;">
          <div class="sec-eyebrow" style="margin-bottom:6px;">SPECIALTY FOOD</div>
          <h3 style="font-size:28px;">Purpose-Built for Focused Food Concepts.</h3>
        </div>

        <div class="sol-grid-3" style="margin-bottom:64px;">
          {{-- Card 9: Sweet Shop --}}
          <div class="sol-card solution-item" data-name="Sweet Shop" data-tags="specialty sweet shop indian mithai snacks retail">
            <div class="sol-card-media">
              <img src="https://images.unsplash.com/photo-1599488615731-7e5c2823ff28?q=80&w=900&auto=format&fit=crop" alt="Sweet Shop" loading="lazy">
              <span class="sol-card-badge">Mithai &amp; Snacks</span>
            </div>
            <div class="sol-card-body">
              <h4 class="sol-card-title">Sweet Shop</h4>
              <p class="sol-card-desc">Manage sweets, snacks, billing, customer orders and inventory from one platform.</p>
              
              <div class="sol-caps-label">Key Capabilities</div>
              <div class="sol-caps-pills">
                <span class="sol-pill">Product Catalogue</span>
                <span class="sol-pill">Categories</span>
                <span class="sol-pill">Orders</span>
                <span class="sol-pill">POS</span>
                <span class="sol-pill">Customers</span>
                <span class="sol-pill">Inventory</span>
              </div>
            </div>
          </div>

          {{-- Card 10: Bakeries & Cake Shops --}}
          <div class="sol-card solution-item" data-name="Bakeries & Cake Shops" data-tags="specialty bakery cake pastry custom orders cafe">
            <div class="sol-card-media">
              <img src="https://images.unsplash.com/photo-1509440159596-0249088772ff?q=80&w=900&auto=format&fit=crop" alt="Bakeries & Cake Shops" loading="lazy">
              <span class="sol-card-badge">Cakes &amp; Bakes</span>
            </div>
            <div class="sol-card-body">
              <h4 class="sol-card-title">Bakeries &amp; Cake Shops</h4>
              <p class="sol-card-desc">Manage bakery products, cake orders, customers, billing and inventory.</p>
              
              <div class="sol-caps-label">Key Capabilities</div>
              <div class="sol-caps-pills">
                <span class="sol-pill">Product Catalogue</span>
                <span class="sol-pill">Cake Orders</span>
                <span class="sol-pill">Variations</span>
                <span class="sol-pill">POS</span>
                <span class="sol-pill">Customers</span>
                <span class="sol-pill">Kitchen</span>
              </div>
            </div>
          </div>

          {{-- Card 11: Juice & Snack Shops --}}
          <div class="sol-card solution-item" data-name="Juice & Snack Shops" data-tags="specialty juice snack fast counter tea chaat">
            <div class="sol-card-media">
              <img src="https://images.unsplash.com/photo-1622597467836-f3285f2131b8?q=80&w=900&auto=format&fit=crop" alt="Juice & Snack Shops" loading="lazy">
              <span class="sol-card-badge">Quick Refreshments</span>
            </div>
            <div class="sol-card-body">
              <h4 class="sol-card-title">Juice &amp; Snack Shops</h4>
              <p class="sol-card-desc">Keep fast-moving counter orders, products and billing simple.</p>
              
              <div class="sol-caps-label">Key Capabilities</div>
              <div class="sol-caps-pills">
                <span class="sol-pill">Product Menu</span>
                <span class="sol-pill">POS</span>
                <span class="sol-pill">Counter Orders</span>
                <span class="sol-pill">Payments</span>
                <span class="sol-pill">Inventory</span>
                <span class="sol-pill">Reports</span>
              </div>
            </div>
          </div>

          {{-- Card 12: Bars & Breweries --}}
          <div class="sol-card solution-item" data-name="Bars & Breweries" data-tags="specialty hospitality bar brewery pub drinks table">
            <div class="sol-card-media">
              <img src="https://images.unsplash.com/photo-1514933651103-005eec06c04b?q=80&w=900&auto=format&fit=crop" alt="Bars & Breweries" loading="lazy">
              <span class="sol-card-badge">Pubs &amp; Lounges</span>
            </div>
            <div class="sol-card-body">
              <h4 class="sol-card-title">Bars &amp; Breweries</h4>
              <p class="sol-card-desc">Manage table service, menus, orders, billing and operational workflows.</p>
              
              <div class="sol-caps-label">Key Capabilities</div>
              <div class="sol-caps-pills">
                <span class="sol-pill">Menu</span>
                <span class="sol-pill">Tables</span>
                <span class="sol-pill">Orders</span>
                <span class="sol-pill">Kitchen</span>
                <span class="sol-pill">POS</span>
                <span class="sol-pill">Staff</span>
              </div>
            </div>
          </div>

          {{-- Card 13: Pizzerias & Specialty Food --}}
          <div class="sol-card solution-item" data-name="Pizzerias & Specialty Food" data-tags="specialty pizzerias pizza oven crust variations kot">
            <div class="sol-card-media">
              <img src="https://images.unsplash.com/photo-1513104890138-7c749659a591?q=80&w=900&auto=format&fit=crop" alt="Pizzerias & Specialty Food" loading="lazy">
              <span class="sol-card-badge">Artisan Pizzerias</span>
            </div>
            <div class="sol-card-body">
              <h4 class="sol-card-title">Pizzerias &amp; Specialty Food</h4>
              <p class="sol-card-desc">Manage focused menus, product variations, orders, kitchen operations and fast service.</p>
              
              <div class="sol-caps-label">Key Capabilities</div>
              <div class="sol-caps-pills">
                <span class="sol-pill">Product Catalogue</span>
                <span class="sol-pill">Variations &amp; Addons</span>
                <span class="sol-pill">Orders</span>
                <span class="sol-pill">KOT</span>
                <span class="sol-pill">Kitchen</span>
                <span class="sol-pill">POS</span>
              </div>
            </div>
          </div>
        </div>
      </div>

      {{-- 7. GROWING BUSINESS SOLUTIONS GROUP --}}
      <div class="sol-section-group" id="group-growing" data-category="growing">
        <div style="margin-bottom:24px;">
          <div class="sec-eyebrow" style="margin-bottom:6px;">GROW &amp; SCALE</div>
          <h3 style="font-size:28px;">Built for Businesses That Are Ready to Grow.</h3>
        </div>

        <div class="sol-grid-2" style="margin-bottom:32px;">
          {{-- Card 14: Multi-Branch Chains --}}
          <div class="sol-card solution-item" data-name="Multi-Branch Chains" data-tags="growing chains multi-branch multi-outlet enterprise">
            <div class="sol-card-body">
              <span class="stage-pill">Enterprise Scale</span>
              <h4 class="sol-card-title">Multi-Branch Chains</h4>
              <p class="sol-card-desc">Bring multiple locations together with centralized visibility and branch-level operations.</p>
              
              <div class="sol-caps-label">Key Capabilities</div>
              <div class="sol-caps-pills">
                <span class="sol-pill">Multiple Branches</span>
                <span class="sol-pill">Branch Switching</span>
                <span class="sol-pill">Branch-wise Reports</span>
                <span class="sol-pill">Inventory Visibility</span>
                <span class="sol-pill">Central Operations</span>
              </div>

              {{-- Multi-Branch Hierarchy Visual --}}
              <div class="mb-tree-wrap">
                <div class="mb-node">&#127970; HEAD OFFICE / HQ DASHBOARD</div>
                <div class="mb-tree-line"></div>
                <div class="mb-branches-row">
                  <div class="mb-branch-card">
                    <div class="mb-branch-title">Branch 01 &bull; Downtown</div>
                    <div class="mb-branch-metric">Sales: &#8377;64,200 &bull; 92 Orders</div>
                  </div>
                  <div class="mb-branch-card">
                    <div class="mb-branch-title">Branch 02 &bull; Mall Road</div>
                    <div class="mb-branch-metric">Sales: &#8377;88,450 &bull; 134 Orders</div>
                  </div>
                  <div class="mb-branch-card">
                    <div class="mb-branch-title">Branch 03 &bull; Airport</div>
                    <div class="mb-branch-metric">Sales: &#8377;51,900 &bull; 76 Orders</div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          {{-- Card 15: Cloud Kitchens --}}
          <div class="sol-card solution-item" data-name="Cloud Kitchens" data-tags="growing cloud kitchen dark kitchen multi-brand dispatch">
            <div class="sol-card-media">
              <img src="https://images.unsplash.com/photo-1556910103-1c02745aae4d?q=80&w=900&auto=format&fit=crop" alt="Cloud Kitchens" loading="lazy">
              <span class="sol-card-badge">Delivery-First Model</span>
            </div>
            <div class="sol-card-body">
              <h4 class="sol-card-title">Cloud Kitchens</h4>
              <p class="sol-card-desc">Manage digital-first food operations without traditional dining-floor complexity.</p>
              
              <div class="sol-caps-label">Key Capabilities</div>
              <div class="sol-caps-pills">
                <span class="sol-pill">Digital Menu</span>
                <span class="sol-pill">Orders</span>
                <span class="sol-pill">KOT</span>
                <span class="sol-pill">Kitchen Preparation</span>
                <span class="sol-pill">POS</span>
                <span class="sol-pill">Inventory</span>
                <span class="sol-pill">Reports</span>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>
  </section>

  {{-- 8. INTERACTIVE BUSINESS WORKFLOW --}}
  <section class="section alt">
    <div class="w">
      <div class="sec-header" data-aos="fade-up">
        <div class="sec-eyebrow">DYNAMIC PIPELINE</div>
        <h2>Your Solution. Your Workflow. Your Features.</h2>
        <p>See how orders move through the system for different food business formats.</p>
      </div>

      <div class="sol-wf-tabs" data-aos="fade-up">
        <button type="button" class="sol-wf-tab-btn active" data-wf="qsr">Quick Service (QSR)</button>
        <button type="button" class="sol-wf-tab-btn" data-wf="bakery">Bakery &amp; Cake Shop</button>
        <button type="button" class="sol-wf-tab-btn" data-wf="finedining">Fine Dining</button>
        <button type="button" class="sol-wf-tab-btn" data-wf="multibranch">Multi-Branch Chain</button>
        <button type="button" class="sol-wf-tab-btn" data-wf="cloudkitchen">Cloud Kitchen</button>
      </div>

      <div class="sol-wf-board" id="wfBoard" data-aos="fade-up">
        <div class="sol-wf-flow-row" id="wfFlowContainer">
          {{-- Populated by JavaScript below --}}
        </div>
        <div style="font-size:12.5px; color:var(--ink-faint); text-align:center; padding-top:14px; border-top:1px solid #eee;">
          Available workflows and features depend on your selected plan and business configuration.
        </div>
      </div>
    </div>
  </section>

  {{-- 9. COMMON OPERATIONAL WORKFLOW --}}
  <section class="section">
    <div class="w">
      <div class="sec-header" data-aos="fade-up">
        <div class="sec-eyebrow">END-TO-END CONNECTED ENGINE</div>
        <h2>Your Business Type May Be Different. Your Core Operations Still Connect.</h2>
        <p>Each Geni Menu solution is built around the operational needs of your business while connecting the essential restaurant management workflows in one platform.</p>
      </div>

      <div class="sol-wf-board" data-aos="fade-up" style="background:#FAF7F2;">
        <div class="sol-wf-flow-row" style="margin-bottom:20px;">
          <div class="sol-wf-step"><div class="sol-wf-num">1</div><div class="sol-wf-step-name">MENU</div><div class="sol-wf-step-desc">Items &amp; Prices</div></div>
          <span class="sol-wf-arrow">&rarr;</span>
          <div class="sol-wf-step"><div class="sol-wf-num">2</div><div class="sol-wf-step-name">CUSTOMER</div><div class="sol-wf-step-desc">Order Placement</div></div>
          <span class="sol-wf-arrow">&rarr;</span>
          <div class="sol-wf-step"><div class="sol-wf-num">3</div><div class="sol-wf-step-name">KOT</div><div class="sol-wf-step-desc">Ticket Dispatch</div></div>
          <span class="sol-wf-arrow">&rarr;</span>
          <div class="sol-wf-step"><div class="sol-wf-num">4</div><div class="sol-wf-step-name">KITCHEN</div><div class="sol-wf-step-desc">Preparation</div></div>
          <span class="sol-wf-arrow">&rarr;</span>
          <div class="sol-wf-step"><div class="sol-wf-num">5</div><div class="sol-wf-step-name">POS</div><div class="sol-wf-step-desc">Bill Generation</div></div>
          <span class="sol-wf-arrow">&rarr;</span>
          <div class="sol-wf-step"><div class="sol-wf-num">6</div><div class="sol-wf-step-name">REPORTS</div><div class="sol-wf-step-desc">Sales &amp; Stock</div></div>
        </div>

        <div style="display:flex; justify-content:center; gap:10px; flex-wrap:wrap; padding-top:16px; border-top:1px solid var(--line);">
          <span class="sol-pill">Tables &amp; Seating</span>
          <span class="sol-pill">Reservations</span>
          <span class="sol-pill">Waiter Requests</span>
          <span class="sol-pill">Staff Roles</span>
          <span class="sol-pill">Delivery Tracking</span>
          <span class="sol-pill">Multi-Branch Controls</span>
        </div>
      </div>
    </div>
  </section>

  {{-- 10. ECOSYSTEM / ONE PLATFORM MAP --}}
  <section class="section dark">
    <div class="w">
      <div class="sec-header" data-aos="fade-up">
        <div class="sec-eyebrow" style="background:rgba(255,255,255,0.1); color:#E8DFD4; border-color:rgba(255,255,255,0.2);">UNIFIED ECOSYSTEM</div>
        <h2>Different Businesses. One Connected Platform.</h2>
        <p>Geni Menu adapts to different food-business models while keeping the core restaurant operations connected.</p>
      </div>

      <div class="eco-map-wrap" data-aos="zoom-in">
        <div class="eco-center-node">
          <div class="brand">GENI MENU</div>
          <div class="sub">Core Engine</div>
        </div>

        <div class="eco-badges-grid">
          <div class="eco-badge">Family Dining</div>
          <div class="eco-badge">Dine-in</div>
          <div class="eco-badge">Fine Dining</div>
          <div class="eco-badge">Multi-Cuisine</div>
          <div class="eco-badge">QSR</div>
          <div class="eco-badge">Takeaway</div>
          <div class="eco-badge">Canteens</div>
          <div class="eco-badge">Sweet Shops</div>
          <div class="eco-badge">Bakeries</div>
          <div class="eco-badge">Juice Shops</div>
          <div class="eco-badge">Bars &amp; Pubs</div>
          <div class="eco-badge">Pizzerias</div>
          <div class="eco-badge">Cloud Kitchens</div>
          <div class="eco-badge">Multi-Branch</div>
        </div>
      </div>
    </div>
  </section>

  {{-- 11. SOLUTION COMPARISON TABLE --}}
  <section class="section">
    <div class="w">
      <div class="sec-header" data-aos="fade-up">
        <div class="sec-eyebrow">FIT &amp; CAPABILITIES</div>
        <h2>Find the Solution That Fits Your Business.</h2>
        <p>Compare operational capabilities across our industry-focused setups.</p>
      </div>

      {{-- Desktop Table --}}
      <div class="comp-table-card" data-aos="fade-up">
        <table class="sol-comp-table">
          <thead>
            <tr>
              <th style="width:28%;">Business Type</th>
              <th style="width:34%;">Best For</th>
              <th style="width:38%;">Key Operations</th>
            </tr>
          </thead>
          <tbody>
            <tr><td class="title-cell">Family Restaurant</td><td>Casual and full-service dining</td><td>Tables, Orders, KOT, POS, Inventory, Reports</td></tr>
            <tr><td class="title-cell">Dine-in Restaurant</td><td>Table-service dining with QR options</td><td>Table Management, Digital Menu, Orders, KOT, POS</td></tr>
            <tr><td class="title-cell">Fine Dining</td><td>Organized guest service &amp; table allocation</td><td>Reservations, Tables, Waiter Requests, KOT, POS</td></tr>
            <tr><td class="title-cell">Multi-Cuisine Restaurant</td><td>Extensive menus &amp; multi-category prep</td><td>Menu Categories, Station Routing, KOT, POS</td></tr>
            <tr><td class="title-cell">Quick Service (QSR)</td><td>High-volume counter rush hours</td><td>Fast POS, Counter Orders, KOT, Payments, Reports</td></tr>
            <tr><td class="title-cell">Takeaway Restaurant</td><td>Parcel and pickup focused orders</td><td>Counter Orders, Kitchen Prep, Pickup Workflow, POS</td></tr>
            <tr><td class="title-cell">College Canteen</td><td>Campus crowds &amp; fast student orders</td><td>Menu, Counter POS, KOT, Quick Billing, Reports</td></tr>
            <tr><td class="title-cell">Office Canteen</td><td>Corporate cafeterias &amp; lunch rushes</td><td>Menu, Orders, POS, Staff Controls, Inventory</td></tr>
            <tr><td class="title-cell">Sweet Shop</td><td>Mithai, snacks &amp; quick packaged billing</td><td>Product Catalogue, Categories, POS, Customers, Stock</td></tr>
            <tr><td class="title-cell">Bakeries &amp; Cake Shops</td><td>Bakery counters &amp; custom cake orders</td><td>Cake Orders, Variations, POS, Customers, Kitchen</td></tr>
            <tr><td class="title-cell">Juice &amp; Snack Shops</td><td>Quick refreshment counters</td><td>Product Menu, POS, Instant Payments, Reports</td></tr>
            <tr><td class="title-cell">Bars &amp; Breweries</td><td>Lounges, pubs &amp; drink orders</td><td>Tables, Beverage Menus, Kitchen, POS, Staff</td></tr>
            <tr><td class="title-cell">Pizzerias &amp; Specialty Food</td><td>Crusts, toppings &amp; custom combos</td><td>Product Variations, Addons, KOT, Oven Prep, POS</td></tr>
            <tr><td class="title-cell">Multi-Branch Chains</td><td>Restaurant groups &amp; growing chains</td><td>Branches, Central Visibility, Branch Reports, Stock</td></tr>
            <tr><td class="title-cell">Cloud Kitchens</td><td>Delivery-first multi-brand setups</td><td>Digital Menu, Orders, KOT, Kitchen Prep, Reports</td></tr>
          </tbody>
        </table>
      </div>

      {{-- Mobile Stacked Cards --}}
      <div class="comp-mobile-cards">
        <div class="comp-m-card"><div class="comp-m-type">Family Restaurant</div><div class="comp-m-best"><strong>Best for:</strong> Casual family dining</div><div class="comp-m-ops"><strong>Operations:</strong> Tables, Orders, KOT, POS, Reports</div></div>
        <div class="comp-m-card"><div class="comp-m-type">Dine-in Restaurant</div><div class="comp-m-best"><strong>Best for:</strong> Table-service dining</div><div class="comp-m-ops"><strong>Operations:</strong> Table Management, Digital Menu, Orders, POS</div></div>
        <div class="comp-m-card"><div class="comp-m-type">Quick Service (QSR)</div><div class="comp-m-best"><strong>Best for:</strong> High-volume counters</div><div class="comp-m-ops"><strong>Operations:</strong> Fast POS, Counter Orders, KOT, Payments</div></div>
        <div class="comp-m-card"><div class="comp-m-type">Bakeries &amp; Cake Shops</div><div class="comp-m-best"><strong>Best for:</strong> Custom cakes &amp; bakes</div><div class="comp-m-ops"><strong>Operations:</strong> Cake Orders, Variations, POS, Kitchen</div></div>
        <div class="comp-m-card"><div class="comp-m-type">Multi-Branch Chains</div><div class="comp-m-best"><strong>Best for:</strong> Multi-location groups</div><div class="comp-m-ops"><strong>Operations:</strong> Central HQ, Branch Reports, Inter-branch Sync</div></div>
      </div>
    </div>
  </section>

  {{-- 12. SOLUTIONS BY BUSINESS STAGE --}}
  <section class="section alt">
    <div class="w">
      <div class="sec-header" data-aos="fade-up">
        <div class="sec-eyebrow">SCALE AT YOUR SPEED</div>
        <h2>Start Small. Grow. Scale.</h2>
        <p>Whether you are opening your first counter or managing fifty outlets, Geni Menu scales with you.</p>
      </div>

      <div class="stage-grid" data-aos="fade-up">
        {{-- Card 1: START --}}
        <div class="stage-card">
          <span class="stage-pill">START</span>
          <h3>Single-Outlet Businesses</h3>
          <p>Perfect for restaurants and food businesses managing one location with essential billing and kitchen tools.</p>
          <div class="stage-examples">
            <strong>Ideal For:</strong>
            <ul>
              <li>Family Restaurants</li>
              <li>Takeaway Shops</li>
              <li>Bakeries &amp; Sweet Shops</li>
              <li>Juice &amp; Snack Corners</li>
              <li>Pizzerias</li>
            </ul>
          </div>
          <a href="{{ route('restaurant_signup', ['plan' => 'standard']) }}" class="btn p">Get Started &rarr;</a>
        </div>

        {{-- Card 2: GROW --}}
        <div class="stage-card" style="border-color:var(--br); box-shadow:var(--shadow-md);">
          <span class="stage-pill" style="background:var(--br); color:#fff;">GROW</span>
          <h3>Growing Food Businesses</h3>
          <p>For expanding businesses adding more staff, specialized kitchen stations, inventory controls and customer CRM.</p>
          <div class="stage-examples">
            <strong>Ideal For:</strong>
            <ul>
              <li>Multi-Cuisine Restaurants</li>
              <li>Busy QSR Outlets</li>
              <li>Fine Dining Spaces</li>
              <li>Cloud Kitchens</li>
              <li>Campus &amp; Office Canteens</li>
            </ul>
          </div>
          <a href="{{ route('restaurant_signup', ['plan' => 'premium']) }}" class="btn p">Get Started &rarr;</a>
        </div>

        {{-- Card 3: SCALE --}}
        <div class="stage-card">
          <span class="stage-pill">SCALE</span>
          <h3>Multi-Location Groups</h3>
          <p>For restaurant groups and food brands managing multiple outlets with centralized controls and consolidated reporting.</p>
          <div class="stage-examples">
            <strong>Ideal For:</strong>
            <ul>
              <li>Multi-Branch Chains</li>
              <li>Franchise Networks</li>
              <li>Multi-Brand Cloud Kitchens</li>
              <li>Food Court Groups</li>
            </ul>
          </div>
          <a href="{{ route('contact.us') }}" class="btn o">Contact Sales &rarr;</a>
        </div>
      </div>
    </div>
  </section>

  {{-- 13. WHY GENI MENU SOLUTIONS? --}}
  <section class="section">
    <div class="w">
      <div class="sec-header" data-aos="fade-up">
        <div class="sec-eyebrow">THE GENI MENU ADVANTAGE</div>
        <h2>Not Just Software. A Solution Built Around Your Business.</h2>
        <p>Technology configured to support the way your kitchen and counter operate every day.</p>
      </div>

      <div class="benefits-grid" data-aos="fade-up">
        <div class="benefit-box">
          <div class="benefit-icon"><svg viewBox="0 0 24 24"><path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5"/></svg></div>
          <h4>Business-Specific</h4>
          <p>Choose a solution that matches your actual restaurant model without paying for unnecessary complexity.</p>
        </div>

        <div class="benefit-box">
          <div class="benefit-icon"><svg viewBox="0 0 24 24"><circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2"/></svg></div>
          <h4>Connected Operations</h4>
          <p>Bring menu, orders, kitchen KOT, billing, inventory and reports together under one unified interface.</p>
        </div>

        <div class="benefit-box">
          <div class="benefit-icon"><svg viewBox="0 0 24 24"><polyline points="23 6 13.5 15.5 8.5 10.5 1 18"/><polyline points="17 6 23 6 23 12"/></svg></div>
          <h4>Flexible Growth</h4>
          <p>Start with the capabilities you need today and seamlessly activate advanced modules as your brand expands.</p>
        </div>

        <div class="benefit-box">
          <div class="benefit-icon"><svg viewBox="0 0 24 24"><rect x="3" y="3" width="18" height="18" rx="2"/><path d="M9 3v18M15 3v18M3 9h18M3 15h18"/></svg></div>
          <h4>One Unified Platform</h4>
          <p>Manage essential restaurant operations without switching between disconnected, standalone software tools.</p>
        </div>
      </div>
    </div>
  </section>

  {{-- 14. PLATFORM FEATURES MOSAIC --}}
  <section class="section alt">
    <div class="w">
      <div class="sec-header" data-aos="fade-up">
        <div class="sec-eyebrow">FULL PLATFORM POWER</div>
        <h2>Need More Than Your Business Solution?</h2>
        <p>Discover the complete Geni Menu feature set and tools available across the platform.</p>
      </div>

      <div class="features-mosaic" data-aos="fade-up" style="margin-bottom:36px;">
        <div class="feat-tile">
          <div class="feat-tile-icon"><svg viewBox="0 0 24 24"><line x1="18" y1="2" x2="18" y2="22"/><path d="M14 2v7a3 3 0 0 0 6 0V2"/><path d="M6 2v4a2 2 0 0 0 4 0V2"/><line x1="8" y1="8" x2="8" y2="22"/></svg></div>
          <span class="feat-tile-name">Menu Management</span>
        </div>

        <div class="feat-tile">
          <div class="feat-tile-icon"><svg viewBox="0 0 24 24"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/><polyline points="14 2 14 8 20 8"/><line x1="16" y1="13" x2="8" y2="13"/><line x1="16" y1="17" x2="8" y2="17"/></svg></div>
          <span class="feat-tile-name">Order Management</span>
        </div>

        <div class="feat-tile">
          <div class="feat-tile-icon"><svg viewBox="0 0 24 24"><rect x="3" y="5" width="18" height="14" rx="2"/><line x1="3" y1="10" x2="21" y2="10"/><line x1="7" y1="15" x2="11" y2="15"/></svg></div>
          <span class="feat-tile-name">POS Management</span>
        </div>

        <div class="feat-tile">
          <div class="feat-tile-icon"><svg viewBox="0 0 24 24"><path d="M6 13.87A4 4 0 0 1 7.41 6a5.11 5.11 0 0 1 1.05-1.54 5 5 0 0 1 7.08 0A5.11 5.11 0 0 1 16.59 6 4 4 0 0 1 18 13.87V21H6Z"/><line x1="6" y1="17" x2="18" y2="17"/></svg></div>
          <span class="feat-tile-name">KOT Management</span>
        </div>

        <div class="feat-tile">
          <div class="feat-tile-icon"><svg viewBox="0 0 24 24"><path d="M4 10h16M6 10v9M18 10v9M8 6h8M12 6v4"/></svg></div>
          <span class="feat-tile-name">Table Management</span>
        </div>

        <div class="feat-tile">
          <div class="feat-tile-icon"><svg viewBox="0 0 24 24"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"/><line x1="16" y1="2" x2="16" y2="6"/><line x1="8" y1="2" x2="8" y2="6"/><line x1="3" y1="10" x2="21" y2="10"/></svg></div>
          <span class="feat-tile-name">Reservations</span>
        </div>

        <div class="feat-tile">
          <div class="feat-tile-icon"><svg viewBox="0 0 24 24"><path d="M18 16V8a6 6 0 0 0-12 0v8"/><path d="M2 19h20"/><circle cx="12" cy="4" r="1.5"/><line x1="2" y1="16" x2="22" y2="16"/></svg></div>
          <span class="feat-tile-name">Waiter Requests</span>
        </div>

        <div class="feat-tile">
          <div class="feat-tile-icon"><svg viewBox="0 0 24 24"><path d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"/></svg></div>
          <span class="feat-tile-name">Inventory Control</span>
        </div>

        <div class="feat-tile">
          <div class="feat-tile-icon"><svg viewBox="0 0 24 24"><line x1="18" y1="20" x2="18" y2="10"/><line x1="12" y1="20" x2="12" y2="4"/><line x1="6" y1="20" x2="6" y2="14"/></svg></div>
          <span class="feat-tile-name">Sales &amp; Analytics</span>
        </div>

        <div class="feat-tile">
          <div class="feat-tile-icon"><svg viewBox="0 0 24 24"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/></svg></div>
          <span class="feat-tile-name">Customer CRM</span>
        </div>

        <div class="feat-tile">
          <div class="feat-tile-icon"><svg viewBox="0 0 24 24"><path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M22 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/></svg></div>
          <span class="feat-tile-name">Staff Management</span>
        </div>

        <div class="feat-tile">
          <div class="feat-tile-icon"><svg viewBox="0 0 24 24"><rect x="2" y="3" width="20" height="14" rx="2"/><line x1="8" y1="21" x2="16" y2="21"/><line x1="12" y1="17" x2="12" y2="21"/></svg></div>
          <span class="feat-tile-name">Multi-Branch HQ</span>
        </div>
      </div>

      <div style="text-align:center;">
        <a href="{{ route('features') }}" class="btn p">View All Features &rarr;</a>
      </div>
    </div>
  </section>

  {{-- 15. FAQ (International Tier-1 SaaS 2-Column Split) --}}
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
            <span style="font-family:'Playfair Display',Georgia,serif; font-style:italic; font-weight:600; color:var(--br);">Restaurant Solutions.</span>
          </h2>
          <p class="faq-lead-desc">
            Everything you need to know about selecting the right solution, upgrading features, and scaling operations with Geni Menu.
          </p>

          <!-- Help / Contact Card -->
          <div class="faq-support-card">
            <div class="faq-support-header">
              <div class="faq-support-icon">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"/></svg>
              </div>
              <div>
                <h4 class="faq-support-title">Need specialized advice?</h4>
                <span style="font-size: 12px; color: #627D98; font-weight: 500;">Tailored setup &amp; menu migration</span>
              </div>
            </div>
            <p class="faq-support-text">Not sure which configuration fits your restaurant setup? Talk directly with our solutions specialists.</p>
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
              <button type="button">Can Geni Menu support different types of food businesses? <i>+</i></button>
              <div class="faq-answer-wrap">
                <div>
                  <p>Yes. Geni Menu provides tailored solutions for family restaurants, dine-in, fine dining, QSR, takeaway, canteens, bakeries, sweet shops, juice corners, pizzerias, bars, cloud kitchens, and multi-branch chains.</p>
                </div>
              </div>
            </div>

            <div class="faq-row">
              <button type="button">Which solution is right for my restaurant? <i>+</i></button>
              <div class="faq-answer-wrap">
                <div>
                  <p>Choose the solution closest to your business model or contact our solutions specialist team to review your floor layout, counter setup, and operational requirements.</p>
                </div>
              </div>
            </div>

            <div class="faq-row">
              <button type="button">Can I change or upgrade my solution later? <i>+</i></button>
              <div class="faq-answer-wrap">
                <div>
                  <p>Yes. Your setup can seamlessly evolve as your business requirements change. You can enable additional features like inventory control, multiple kitchen routing, or multi-branch management at any time.</p>
                </div>
              </div>
            </div>

            <div class="faq-row">
              <button type="button">Can a single platform manage multiple branches? <i>+</i></button>
              <div class="faq-answer-wrap">
                <div>
                  <p>Yes. Multi-branch capabilities with centralized head-office reporting, outlet switching, and branch-level inventory are available in applicable plans and configurations.</p>
                </div>
              </div>
            </div>

            <div class="faq-row">
              <button type="button">Can I use the same features across different business types? <i>+</i></button>
              <div class="faq-answer-wrap">
                <div>
                  <p>Core features like billing, menu, and reports can overlap, but the recommended setup and workflows (e.g., table reservation vs. quick token counter) are customized based on the business model.</p>
                </div>
              </div>
            </div>

            <div class="faq-row">
              <button type="button">Do all solutions include the same features? <i>+</i></button>
              <div class="faq-answer-wrap">
                <div>
                  <p>No. Features and modules vary according to your operational business configuration and selected subscription plan (Standard, Premium, or Enterprise).</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  {{-- 16. FINAL MASTER CTA --}}
  <section class="section" style="padding-top:0;">
    <div class="w">
      <div class="final-cta-box" data-aos="fade-up">
        <h2>Find the Geni Menu Solution Built for Your Business.</h2>
        <p>Tell us what kind of food business you run and discover the tools you need to manage it smarter, faster, and more profitably.</p>
        
        <div class="final-cta-buttons">
          <a href="{{ route('restaurant_signup') }}" class="btn p">Get Started &rarr;</a>
          <button type="button" onclick="openPopup('Book a Demo - Geni Menu Solutions')" class="btn o">Book a Demo &rarr;</button>
        </div>
      </div>
    </div>
  </section>

</div>

{{-- AOS & Page Interaction Scripts --}}
<script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
<script>
document.addEventListener('DOMContentLoaded', function() {
  // 1. Initialize AOS
  if (typeof AOS !== 'undefined') {
    AOS.init({ duration: 600, once: true, offset: 40 });
  }

  // 2. Interactive Workflow Definitions
  var workflows = {
    qsr: [
      { num: 1, name: 'POS COUNTER', desc: 'Punch order in 3 clicks' },
      { num: 2, name: 'LIVE KOT', desc: 'Auto-dispatch to prep' },
      { num: 3, name: 'KITCHEN READY', desc: 'Timer & bump screen' },
      { num: 4, name: 'PAYMENT', desc: 'Cash, UPI QR, Cards' },
      { num: 5, name: 'SALES REPORTS', desc: 'Daily rush analytics' }
    ],
    bakery: [
      { num: 1, name: 'PRODUCT MENU', desc: 'Weights, variants & packs' },
      { num: 2, name: 'CUSTOM ORDERS', desc: 'Advance cake booking' },
      { num: 3, name: 'BAKE KITCHEN', desc: 'Preparation schedule' },
      { num: 4, name: 'FAST BILLING', desc: 'Barcode & thermal print' },
      { num: 5, name: 'EXPIRY & STOCK', desc: 'Daily wastage logs' }
    ],
    finedining: [
      { num: 1, name: 'RESERVATIONS', desc: 'Guest booking & tables' },
      { num: 2, name: 'TABLE SEATING', desc: 'Live floor plan status' },
      { num: 3, name: 'WAITER APP', desc: 'Punch orders & notes' },
      { num: 4, name: 'MULTI KOT', desc: 'Route to bar & grill' },
      { num: 5, name: 'SPLIT BILLING', desc: 'Pay at table checkout' }
    ],
    multibranch: [
      { num: 1, name: 'HQ DASHBOARD', desc: 'Central menu updates' },
      { num: 2, name: 'BRANCH SYNC', desc: 'Outlet-specific pricing' },
      { num: 3, name: 'LIVE MONITOR', desc: 'Real-time chain sales' },
      { num: 4, name: 'INTER-BRANCH', desc: 'Stock transfer logs' },
      { num: 5, name: 'CHAIN AUDIT', desc: 'Exportable revenue data' }
    ],
    cloudkitchen: [
      { num: 1, name: 'DIGITAL ORDERS', desc: 'Multi-brand pipeline' },
      { num: 2, name: 'AUTO KOT', desc: 'Prep station display' },
      { num: 3, name: 'PACK & TAG', desc: 'Delivery bag labeling' },
      { num: 4, name: 'RIDER PICKUP', desc: 'Dispatch handover' },
      { num: 5, name: 'BRAND REPORTS', desc: 'Item-wise margins' }
    ]
  };

  function renderWorkflow(key) {
    var container = document.getElementById('wfFlowContainer');
    if (!container || !workflows[key]) return;
    
    var html = '';
    var steps = workflows[key];
    steps.forEach(function(step, index) {
      html += '<div class="sol-wf-step">' +
                '<div class="sol-wf-num">' + step.num + '</div>' +
                '<div class="sol-wf-step-name">' + step.name + '</div>' +
                '<div class="sol-wf-step-desc">' + step.desc + '</div>' +
              '</div>';
      if (index < steps.length - 1) {
        html += '<span class="sol-wf-arrow">&rarr;</span>';
      }
    });
    container.innerHTML = html;
  }

  // Initial render
  renderWorkflow('qsr');

  // Workflow tab buttons
  var wfButtons = document.querySelectorAll('.sol-wf-tab-btn');
  wfButtons.forEach(function(btn) {
    btn.addEventListener('click', function() {
      wfButtons.forEach(function(b) { b.classList.remove('active'); });
      this.classList.add('active');
      var wfKey = this.getAttribute('data-wf');
      renderWorkflow(wfKey);
    });
  });

  // 3. Solution Finder Search & Filtering
  var searchInput = document.getElementById('solutionSearchInput');
  var catButtons = document.querySelectorAll('.sol-tab-btn');
  var solutionItems = document.querySelectorAll('.solution-item');
  var sectionGroups = document.querySelectorAll('.sol-section-group');

  var currentCat = 'all';
  var currentQuery = '';

  function filterSolutions() {
    var query = currentQuery.trim().toLowerCase();
    
    solutionItems.forEach(function(item) {
      var name = (item.getAttribute('data-name') || '').toLowerCase();
      var tags = (item.getAttribute('data-tags') || '').toLowerCase();
      var cardText = item.textContent.toLowerCase();
      
      var matchesSearch = query === '' || name.indexOf(query) > -1 || tags.indexOf(query) > -1 || cardText.indexOf(query) > -1;
      var matchesCat = currentCat === 'all' || tags.indexOf(currentCat) > -1;

      if (matchesSearch && matchesCat) {
        item.style.display = '';
      } else {
        item.style.display = 'none';
      }
    });

    // Toggle Section Groups if all children inside are hidden
    sectionGroups.forEach(function(group) {
      var visibleChildren = group.querySelectorAll('.solution-item:not([style*="display: none"])');
      if (visibleChildren.length === 0) {
        group.style.display = 'none';
      } else {
        group.style.display = '';
      }
    });
  }

  // Category Tab Click
  catButtons.forEach(function(btn) {
    btn.addEventListener('click', function() {
      catButtons.forEach(function(b) { b.classList.remove('active'); });
      this.classList.add('active');
      currentCat = this.getAttribute('data-cat') || 'all';
      filterSolutions();
    });
  });

  // Search Input Event
  if (searchInput) {
    searchInput.addEventListener('input', function() {
      currentQuery = this.value;
      filterSolutions();
    });
  }

  // 4. FAQ Accordion Toggle (International Tier-1 SaaS)
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
});
</script>

@endsection
