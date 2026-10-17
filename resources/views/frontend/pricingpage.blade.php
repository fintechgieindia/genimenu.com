@php
    $meta = [
        'title' => 'Pricing Plans | Geni Menu',
        'description' => 'Compare Geni Menu pricing plans for your food business. Choose from Standard, Premium, or Enterprise plans with monthly and yearly billing options.',
        'keywords' => 'Geni Menu pricing, restaurant software plans, restaurant POS pricing, Geni Menu cost'
    ];
@endphp

@extends('layouts.frontend-master')

@section('content')

{{-- Google Fonts --}}
<script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

<style>
:root {
  --br: #B45309;
  --br-dark: #92400E;
  --br-light: #FEF3C7;
  --br-gold: #D97706;

  /* Stripe High-Tech Slate-Blue Palette */
  --bg: #FFFFFF;
  --bg2: #F6F9FC;
  --bg3: #EEF2F6;

  --ink: #0A2540;
  --ink-light: #1A365D;
  --mute: #425466;
  --mute-light: #627D98;

  --line: #E3E8EE;
  --line-solid: #E3E8EE;

  --card: #FFFFFF;

  /* Stripe Multi-Layer Elevation Shadows */
  --shadow-sm: 0 2px 4px rgba(50, 50, 93, 0.05), 0 1px 3px rgba(0, 0, 0, 0.04);
  --shadow-md: 0 6px 12px -2px rgba(50, 50, 93, 0.08), 0 3px 7px -3px rgba(0, 0, 0, 0.07);
  --shadow-lg: 0 13px 27px -5px rgba(50, 50, 93, 0.12), 0 8px 16px -8px rgba(0, 0, 0, 0.15);
  --green: #10B981;
}

* { box-sizing: border-box; }
html { scroll-behavior: smooth; }
::selection { background: #0A2540; color: #FFFFFF; }

body {
  margin: 0;
  font: 400 16px/1.65 'Inter', system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
  color: var(--ink);
  background: var(--bg) !important;
  overflow-x: clip;
  -webkit-font-smoothing: antialiased;
}

h1 {
  margin: 0;
  font-family: 'Plus Jakarta Sans', -apple-system, BlinkMacSystemFont, 'Segoe UI', sans-serif;
  font-size: clamp(40px, 5vw, 66px);
  font-weight: 800;
  letter-spacing: -0.035em;
  line-height: 1.08;
  color: var(--ink);
}

h2 {
  margin: 0;
  font-family: Effra, sans-serif;
  font-size: 2.5rem;
  font-weight: 400;
  letter-spacing: normal;
  line-height: 1.12;
  color: var(--ink);
}

h3, h4, h5, h6 {
  margin: 0;
  font-family: Effra, sans-serif;
  color: var(--ink);
}

h3 { font-size: 20px; font-weight: 700; letter-spacing: -0.02em; }

p { margin: 0; color: var(--mute); font-size: 16px; font-family: 'Inter', system-ui, sans-serif; line-height: 1.65; letter-spacing: -0.01em; }
a { color: inherit; text-decoration: none; }
ul { list-style: none; margin: 0; padding: 0; }

.eb {
  display: inline-flex;
  align-items: center;
  gap: 7px;
  font-size: 11.5px;
  letter-spacing: 0.1em;
  font-weight: 700;
  text-transform: uppercase;
  color: #B45309;
  margin-bottom: 16px;
  background: #FEF3C7;
  padding: 6px 14px;
  border-radius: 9999px;
  border: 1px solid rgba(217, 119, 6, 0.25);
  box-shadow: 0 1px 3px rgba(50, 50, 93, 0.05);
  font-family: 'Plus Jakarta Sans', sans-serif;
}

.w { max-width: 1240px; margin: auto; padding: 0 24px; position: relative; z-index: 1; }
section { padding: clamp(56px, 7vw, 92px) 0; background: var(--bg); position: relative; }
section.alt { background: var(--bg2); }

.hd { max-width: 760px; margin: 0 auto 44px; text-align: center; }
.hd p { margin-top: 16px; font-size: 18px; line-height: 1.6; color: var(--mute); font-family: 'Inter', sans-serif; }

/* Buttons */
.btn {
  display: inline-flex;
  align-items: center;
  justify-content: center;
  gap: 8px;
  padding: 13px 26px;
  border-radius: 12px;
  font: 700 15px 'Plus Jakarta Sans', sans-serif;
  border: 1px solid transparent;
  transition: all 0.2s cubic-bezier(0.16, 1, 0.3, 1);
  cursor: pointer;
  text-decoration: none;
}
.btn.p {
  background: #0A2540;
  color: #FFFFFF !important;
  border-color: #0A2540;
  box-shadow: 0 4px 12px rgba(10, 37, 64, 0.2);
}
.btn.p:hover {
  background: #1A365D;
  border-color: #1A365D;
  transform: translateY(-2px);
  box-shadow: 0 8px 20px rgba(10, 37, 64, 0.28);
}
.btn.o {
  color: var(--ink);
  background: #FFFFFF;
  border: 1px solid #CBD5E1;
  box-shadow: 0 1px 3px rgba(50, 50, 93, 0.05);
}
.btn.o:hover {
  background: #F6F9FC;
  border-color: #0A2540;
  transform: translateY(-2px);
}

/* Billing Toggle */
.billing-toggle {
  display: inline-flex;
  align-items: center;
  justify-content: center;
  background: #F6F9FC;
  border: 1px solid var(--line);
  border-radius: 99px;
  padding: 5px;
  box-shadow: var(--shadow-sm);
  margin: 0 auto;
  gap: 4px;
}
.bt-btn {
  padding: 10px 24px;
  border-radius: 99px;
  font-size: 14px;
  font-weight: 700;
  font-family: 'Plus Jakarta Sans', sans-serif;
  color: var(--mute);
  cursor: pointer;
  transition: .2s;
  user-select: none;
  border: none;
  background: transparent;
}
.bt-btn.act {
  background: #0A2540;
  color: #FFFFFF;
  box-shadow: 0 2px 8px rgba(10, 37, 64, 0.2);
}
.bt-save {
  font-size: 12.5px;
  font-weight: 700;
  font-family: 'Plus Jakarta Sans', sans-serif;
  color: #047857;
  margin-left: 12px;
  padding: 5px 14px;
  background: #DEF7EC;
  border-radius: 99px;
  display: inline-block;
  vertical-align: middle;
  border: 1px solid rgba(4, 120, 87, 0.2);
}

/* Main Pricing Cards */
.pricing-grid { display: grid; grid-template-columns: repeat(3, 1fr); gap: 24px; max-width: 1100px; margin: 0 auto; align-items: stretch; padding-top: 24px; }
.pr-card {
  background: #FFFFFF;
  border: 1px solid var(--line);
  border-radius: 20px;
  padding: 32px;
  display: flex;
  flex-direction: column;
  transition: transform 0.25s cubic-bezier(0.16, 1, 0.3, 1), box-shadow 0.25s cubic-bezier(0.16, 1, 0.3, 1), border-color 0.25s ease;
  position: relative;
  box-shadow: var(--shadow-sm);
}
.pr-card:hover {
  border-color: #CBD5E1;
  box-shadow: var(--shadow-md);
  transform: translateY(-4px);
}
.pr-card.popular {
  border: 2px solid #0A2540;
  box-shadow: 0 16px 36px rgba(10, 37, 64, 0.12);
  transform: scale(1.02);
}
.pr-card.popular:hover {
  transform: scale(1.02) translateY(-4px);
  box-shadow: 0 22px 44px rgba(10, 37, 64, 0.18);
}
.pr-badge {
  position: absolute;
  top: -14px;
  left: 50%;
  transform: translateX(-50%);
  background: #0A2540;
  color: #FFFFFF;
  font-size: 11.5px;
  font-weight: 700;
  font-family: 'Plus Jakarta Sans', sans-serif;
  padding: 6px 18px;
  border-radius: 99px;
  letter-spacing: .08em;
  text-transform: uppercase;
  box-shadow: 0 4px 14px rgba(10, 37, 64, 0.25);
  z-index: 10;
  white-space: nowrap;
}
.pr-label { font-size: 12.5px; font-weight: 700; color: #B45309; text-transform: uppercase; letter-spacing: .08em; margin-bottom: 8px; font-family: 'Plus Jakarta Sans', sans-serif; }
.pr-sub { font-size: 19px; font-weight: 800; color: var(--ink); margin-bottom: 12px; font-family: 'Plus Jakarta Sans', sans-serif; }
.pr-desc { font-size: 14.5px; color: var(--mute); margin-bottom: 24px; line-height: 1.55; min-height: 42px; }
.pr-price { font-size: 38px; font-weight: 800; color: var(--ink); margin-bottom: 6px; font-family: 'Plus Jakarta Sans', sans-serif; letter-spacing: -0.03em; }
.pr-price span { font-size: 14.5px; font-weight: 600; color: var(--mute-light); }
.pr-freq { font-size: 13px; color: var(--mute-light); margin-bottom: 28px; font-weight: 600; }
.pr-custom-price { font-size: 32px; font-weight: 800; color: var(--ink); margin-bottom: 8px; line-height: 1.2; padding-bottom: 18px; font-family: 'Plus Jakarta Sans', sans-serif; }
.pr-features { margin-top: 24px; margin-bottom: 28px; flex: 1; }
.pr-feat-item { display: flex; align-items: flex-start; gap: 12px; margin-bottom: 14px; font-size: 14.5px; color: var(--ink); line-height: 1.5; }
.pr-feat-icon { flex-shrink: 0; color: #B45309; }

/* Positioning Strip */
.pos-strip { display: grid; grid-template-columns: repeat(3, 1fr); gap: 24px; margin-top: 60px; max-width: 1100px; margin-left: auto; margin-right: auto; text-align: center; }
.pos-item h4 { font-size: 18px; margin-bottom: 8px; color: var(--ink); font-weight: 700; }
.pos-item p { font-size: 14.5px; color: var(--mute); }

/* Industry Selector */
.ind-tabs { display: flex; gap: 10px; margin-bottom: 36px; flex-wrap: wrap; justify-content: center; }
.ind-tab { padding: 10px 20px; border-radius: 99px; font-weight: 700; font-family: 'Plus Jakarta Sans', sans-serif; font-size: 13.5px; cursor: pointer; border: 1px solid var(--line); background: #FFFFFF; color: var(--mute); transition: .2s; }
.ind-tab.act { background: #0A2540; color: #FFFFFF; border-color: #0A2540; box-shadow: 0 4px 12px rgba(10, 37, 64, 0.2); }

/* Compact Cards */
.c-grid { display: grid; grid-template-columns: repeat(3, 1fr); gap: 20px; }
.c-card { background: #FFFFFF; border: 1px solid var(--line); border-radius: 20px; padding: 24px; box-shadow: var(--shadow-sm); }
.c-label { font-size: 12px; font-weight: 700; color: #B45309; text-transform: uppercase; margin-bottom: 12px; letter-spacing: 0.05em; font-family: 'Plus Jakarta Sans', sans-serif; }
.c-price { font-size: 28px; font-weight: 800; color: var(--ink); margin-bottom: 16px; font-family: 'Plus Jakarta Sans', sans-serif; }
.c-price span { font-size: 13px; font-weight: 600; color: var(--mute-light); }
.c-feat { font-size: 14.5px; line-height: 1.6; color: var(--ink); }

[x-cloak] { display: none !important; }

/* Comparison Table */
.comp-wrapper { overflow-x: auto; -webkit-overflow-scrolling: touch; background: #FFFFFF; border-radius: 20px; border: 1px solid var(--line); box-shadow: var(--shadow-md); margin-top: 16px; }
.comp-table { width: 100%; border-collapse: collapse; min-width: 700px; }
.comp-table th { padding: 16px 18px; text-align: center; font-size: 14.5px; font-weight: 700; font-family: 'Plus Jakarta Sans', sans-serif; border-bottom: 1px solid var(--line); background: #F6F9FC; position: sticky; top: 0; z-index: 10; color: var(--ink); }
.comp-table th:first-child { text-align: left; }
.comp-table td { padding: 14px 18px; text-align: center; border-bottom: 1px solid var(--line); font-size: 14px; color: var(--mute); transition: background-color 0.15s ease; }
.comp-table td:first-child { text-align: left; font-weight: 600; color: var(--ink); }
.comp-table tbody tr:not(.comp-group-row):hover td { background-color: #F8FAFC; }

.comp-group-row { cursor: pointer; user-select: none; }
.comp-group-row:hover .comp-group { background: #EEF2F6; }
.comp-group { background: #F6F9FC; font-weight: 700; font-family: 'Plus Jakarta Sans', sans-serif; text-transform: uppercase; font-size: 12.5px; letter-spacing: .06em; color: var(--ink); text-align: left !important; padding: 14px 18px !important; border-bottom: 1px solid var(--line); }
.comp-group-inner { display: flex; align-items: center; justify-content: space-between; width: 100%; }
.comp-toggle-badge { display: inline-flex; align-items: center; justify-content: center; width: 24px; height: 24px; border-radius: 50%; background: #FFFFFF; border: 1.5px solid #CBD5E1; color: #0A2540; font-size: 16px; font-weight: 800; line-height: 1; transition: all 0.2s ease; box-shadow: 0 1px 3px rgba(10, 37, 64, 0.08); }
.comp-group-row:hover .comp-toggle-badge { border-color: #B45309; color: #B45309; transform: scale(1.08); }
.comp-toggle-badge.open { background: #FEF3C7; border-color: #B45309; color: #B45309; }
.check { color: #10B981; }
.dash { color: #CBD5E1; }

/* Visual Stages */
.stage-grid { display: grid; grid-template-columns: repeat(3, 1fr); gap: 24px; text-align: center; }
.stage-card { padding: 32px 24px; background: #FFFFFF; border: 1px solid var(--line); border-radius: 20px; position: relative; box-shadow: var(--shadow-sm); }
.stage-card::after { content: '→'; position: absolute; right: -20px; top: 50%; transform: translateY(-50%); font-size: 24px; color: var(--mute-light); z-index: 2; font-weight: 700; }
.stage-card:last-child::after { display: none; }
.stage-lbl { font-size: 12px; font-weight: 700; color: #B45309; margin-bottom: 16px; letter-spacing: .08em; text-transform: uppercase; font-family: 'Plus Jakarta Sans', sans-serif; }
.stage-card h3 { margin-bottom: 8px; font-weight: 700; }

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


/* CTA: International High-Tech Dark Slate Banner */
.cta-sec { padding: 90px 0; background: radial-gradient(circle at 50% 0%, #1A2E4C 0%, #0A192F 100%); color: #FFFFFF; text-align: center; position: relative; overflow: hidden; }
.cta-box { position: relative; z-index: 2; max-width: 760px; margin: auto; }
.cta-box h2 { color: #FFFFFF !important; margin-bottom: 16px; font-weight: 800; font-size: clamp(30px, 4vw, 44px); }
.cta-box p { color: #A0AEC0 !important; font-size: 17px; line-height: 1.6; }
.cta-sec .btn.p { background: #FFFFFF !important; color: #0A2540 !important; border-color: #FFFFFF !important; box-shadow: 0 10px 30px rgba(0,0,0,0.3); }
.cta-sec .btn.p:hover { background: #F6F9FC !important; transform: translateY(-2px); box-shadow: 0 16px 40px rgba(0,0,0,0.4); }
.cta-sec .btn.o { background: rgba(255, 255, 255, 0.08) !important; border-color: rgba(255, 255, 255, 0.25) !important; color: #FFFFFF !important; }
.cta-sec .btn.o:hover { background: rgba(255, 255, 255, 0.16) !important; border-color: rgba(255, 255, 255, 0.4) !important; }
.cta-flow { display: flex; justify-content: center; gap: 16px; align-items: center; margin-top: 36px; font-size: 13.5px; font-weight: 600; letter-spacing: .04em; color: #A0AEC0; flex-wrap: wrap; font-family: 'Plus Jakarta Sans', sans-serif; }
.cta-flow span { color: #FEF3C7; font-weight: 700; }

/* Responsive */
@media (max-width: 1024px) {
  .pricing-grid { grid-template-columns: 1fr; max-width: 520px; }
  .pr-card.popular { transform: none; }
  .pr-card.popular:hover { transform: translateY(-4px); }
  .pos-strip { grid-template-columns: 1fr; gap: 20px; }
  .c-grid { grid-template-columns: 1fr; }
  .stage-grid { grid-template-columns: 1fr; }
  .stage-card::after { content: '↓'; right: auto; bottom: -20px; top: auto; left: 50%; transform: translateX(-50%); }
}

@media (max-width: 640px) {
  .w { padding: 0 16px; }
  .pr-card { padding: 24px 18px; border-radius: 18px; }
  .pr-price { font-size: 30px; }
  .billing-toggle { width: 100%; max-width: 320px; }
  .bt-btn { flex: 1; padding: 8px 16px; font-size: 13px; }
  .bt-save { display: block; margin: 8px auto 0; text-align: center; }
  .ind-tabs { gap: 8px; }
  .ind-tab { padding: 8px 14px; font-size: 12.5px; }
  .faq-item { padding: 16px 18px; }
  .faq-item summary { font-size: 15px; }
}
</style>

<div x-data="pricing()">
    
    {{-- 3. HERO SECTION --}}
    <section class="hero" style="padding-top:40px; padding-bottom:30px;">
        <div class="w hd">
            <div class="eb">Geni Menu Pricing</div>
            <h1>Plans That Grow With Your Business</h1>
            <p>Choose the right Geni Menu plan for your business — from essential daily operations to advanced multi-branch management.</p>
            
            <div style="margin-top:30px;">
                <div class="billing-toggle">
                    <button class="bt-btn" :class="billing === 'monthly' ? 'act' : ''" @click="billing = 'monthly'">Monthly</button>
                    <button class="bt-btn" :class="billing === 'yearly' ? 'act' : ''" @click="billing = 'yearly'">Yearly</button>
                </div>
                <div x-show="billing === 'yearly'" class="bt-save" x-transition>Save with yearly billing</div>
            </div>
        </div>
    </section>

    {{-- 4. MAIN PRICING CARDS & 5. POSITIONING STRIP --}}
    <section style="padding-top:0; overflow: visible;">
        <div class="w" style="overflow: visible;">
            <div class="pricing-grid">
                
                {{-- STANDARD --}}
                <div class="pr-card">
                    <div class="pr-label">STANDARD</div>
                    <div class="pr-sub">Essential Operations</div>
                    <div class="pr-desc">For small restaurants and food businesses that need the essentials to manage daily sales and operations.</div>
                    
                    <div>
                        <div class="pr-price">₹799 <span>/ mo</span></div>
                        <div class="pr-freq">Starting price • Yearly plans available</div>
                    </div>
                    
                    <a href="{{ route('restaurant_signup', ['plan' => 'standard']) }}" class="btn o" style="width:100%;">Get Started &rarr;</a>
                    
                    <div class="pr-features">
                        <div style="font-size:13px; font-weight: 500; color:var(--ink); margin-bottom:16px;">INCLUDED</div>
                        <div class="pr-feat-item"><svg class="pr-feat-icon" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg>Menu Management</div>
                        <div class="pr-feat-item"><svg class="pr-feat-icon" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg>Menu Categories</div>
                        <div class="pr-feat-item"><svg class="pr-feat-icon" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg>Product Management</div>
                        <div class="pr-feat-item"><svg class="pr-feat-icon" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg>Order Management</div>
                        <div class="pr-feat-item"><svg class="pr-feat-icon" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg>POS / Billing</div>
                        <div class="pr-feat-item"><svg class="pr-feat-icon" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg>Payment Management</div>
                        <div class="pr-feat-item"><svg class="pr-feat-icon" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg>Basic Customer Management</div>
                        <div class="pr-feat-item"><svg class="pr-feat-icon" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg>Basic Reports</div>
                        <div class="pr-feat-item"><svg class="pr-feat-icon" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg>Product Availability</div>
                        <div class="pr-feat-item"><svg class="pr-feat-icon" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg>Basic Settings</div>
                    </div>
                </div>

                {{-- PREMIUM --}}
                <div class="pr-card popular">
                    <div class="pr-badge">MOST POPULAR</div>
                    <div class="pr-label">PREMIUM</div>
                    <div class="pr-sub">Complete Business Management</div>
                    <div class="pr-desc">For growing restaurants and food businesses that need connected kitchen, inventory, customer and operational management.</div>
                    
                    <div>
                        <div class="pr-price">₹1,999 <span>/ mo</span></div>
                        <div class="pr-freq">Starting price • Yearly plans available</div>
                    </div>
                    
                    <a href="{{ route('restaurant_signup', ['plan' => 'premium']) }}" class="btn p" style="width:100%;">Start Premium &rarr;</a>
                    
                    <div class="pr-features">
                        <div style="font-size:13px; font-weight: 500; color:var(--ink); margin-bottom:16px;">EVERYTHING IN STANDARD, PLUS:</div>
                        <div class="pr-feat-item"><svg class="pr-feat-icon" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg>Kitchen Management</div>
                        <div class="pr-feat-item"><svg class="pr-feat-icon" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg>KOT Management</div>
                        <div class="pr-feat-item"><svg class="pr-feat-icon" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg>Table Management</div>
                        <div class="pr-feat-item"><svg class="pr-feat-icon" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg>Reservation Management</div>
                        <div class="pr-feat-item"><svg class="pr-feat-icon" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg>Customer & Staff Management</div>
                        <div class="pr-feat-item"><svg class="pr-feat-icon" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg>Inventory & Stock Management</div>
                        <div class="pr-feat-item"><svg class="pr-feat-icon" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg>Expense Management</div>
                        <div class="pr-feat-item"><svg class="pr-feat-icon" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg>Advanced & Export Reports</div>
                        <div class="pr-feat-item"><svg class="pr-feat-icon" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg>Payment Gateway Integration</div>
                        <div class="pr-feat-item"><svg class="pr-feat-icon" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg>Waiter Requests</div>
                        <div class="pr-feat-item"><svg class="pr-feat-icon" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg>Delivery Executive Management</div>
                    </div>
                </div>

                {{-- ENTERPRISE --}}
                <div class="pr-card">
                    <div class="pr-label">ENTERPRISE</div>
                    <div class="pr-sub">Advanced & Multi-Branch Operations</div>
                    <div class="pr-desc">For established businesses, restaurant chains and growing businesses managing multiple locations.</div>
                    
                    <div>
                        <div class="pr-custom-price">Custom Pricing</div>
                        <div class="pr-freq" style="margin-bottom:12px;">Built around your business requirements</div>
                    </div>
                    
                    <a href="{{ route('contact.us') }}" class="btn o" style="width:100%;">Talk to Sales →</a>
                    
                    <div class="pr-features">
                        <div style="font-size:13px; font-weight: 500; color:var(--ink); margin-bottom:16px;">EVERYTHING IN PREMIUM, PLUS:</div>
                        <div class="pr-feat-item"><svg class="pr-feat-icon" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg>Multi-Branch Management</div>
                        <div class="pr-feat-item"><svg class="pr-feat-icon" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg>Branch-Wise Operations</div>
                        <div class="pr-feat-item"><svg class="pr-feat-icon" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg>Centralized Management</div>
                        <div class="pr-feat-item"><svg class="pr-feat-icon" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg>Advanced Analytics</div>
                        <div class="pr-feat-item"><svg class="pr-feat-icon" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg>Branch-Wise Reports</div>
                        <div class="pr-feat-item"><svg class="pr-feat-icon" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg>Kiosk Management</div>
                        <div class="pr-feat-item"><svg class="pr-feat-icon" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg>Advanced User & Staff Controls</div>
                        <div class="pr-feat-item"><svg class="pr-feat-icon" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg>Theme Customization</div>
                        <div class="pr-feat-item"><svg class="pr-feat-icon" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg>Enterprise Reporting</div>
                        <div class="pr-feat-item"><svg class="pr-feat-icon" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg>Extended Payment Integrations</div>
                        <div class="pr-feat-item"><svg class="pr-feat-icon" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg>Multi-Location Inventory</div>
                        <div class="pr-feat-item"><svg class="pr-feat-icon" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg>Dedicated Business Setup / Support where applicable</div>
                    </div>
                </div>

            </div>

            <div class="pos-strip">
                <div class="pos-item">
                    <h4>Run Your Daily Operations</h4>
                    <p>Essential tools for everyday business management.</p>
                </div>
                <div class="pos-item">
                    <h4>Manage Your Business End-to-End</h4>
                    <p>Connected tools for growing food businesses.</p>
                </div>
                <div class="pos-item">
                    <h4>Scale Across Locations</h4>
                    <p>Advanced controls for multi-branch and larger operations.</p>
                </div>
            </div>
        </div>
    </section>

    {{-- 6 & 7: INDUSTRY-SPECIFIC PRICING --}}
    <section class="alt" id="industry-pricing">
        <div class="w">
            <div class="hd">
                <h2>Choose Your Business Type</h2>
                <p>Plans are tailored to the operational needs of different food and hospitality businesses.</p>
            </div>

            <div class="ind-tabs">
                <template x-for="(data, key) in industries" :key="key">
                    <button class="ind-tab" :class="ind === key ? 'act' : ''" @click="ind = key" x-text="data.name"></button>
                </template>
            </div>

            <div class="c-grid">
                {{-- Standard --}}
                <div class="c-card">
                    <div class="c-label">STANDARD</div>
                    <div class="c-price" x-text="formatPrice(industries[ind].s[billing])"></div>
                    <div class="c-feat" x-html="industries[ind].s.feat"></div>
                </div>
                {{-- Premium --}}
                <div class="c-card" style="border-color:var(--br); box-shadow:var(--shadow-md);">
                    <div class="c-label" style="color:var(--br);">PREMIUM</div>
                    <div class="c-price" x-text="formatPrice(industries[ind].p[billing])"></div>
                    <div class="c-feat" x-html="industries[ind].p.feat"></div>
                </div>
                {{-- Enterprise --}}
                <div class="c-card">
                    <div class="c-label">ENTERPRISE</div>
                    <div class="c-price" x-text="formatPrice(industries[ind].e[billing])"></div>
                    <div class="c-feat" x-html="industries[ind].e.feat"></div>
                </div>
            </div>
        </div>
    </section>

    {{-- 19: FEATURE COMPARISON --}}
    <section>
        <div class="w">
            <div class="hd">
                <h2>Compare Plans & Features</h2>
                <p>See exactly what's included in each plan to find the right fit for your operations.</p>
            </div>

            <div style="display:flex; justify-content:space-between; align-items:center; margin-top:28px; margin-bottom:12px; flex-wrap:wrap; gap:10px;">
                <span style="font-size:13.5px; color:var(--mute); font-weight:600;">Click any category with + to view plan comparison</span>
                <button type="button" @click="toggleAllGroups()" style="background:#F6F9FC; border:1px solid var(--line); color:#B45309; font-size:13px; font-weight:700; cursor:pointer; font-family:'Plus Jakarta Sans',sans-serif; display:inline-flex; align-items:center; gap:6px; padding:6px 14px; border-radius:8px; transition:.2s;">
                    <span x-text="allOpen ? 'Collapse All −' : 'Expand All +'">Expand All +</span>
                </button>
            </div>

            <div class="comp-wrapper" style="margin-top:0;">
                <table class="comp-table">
                    <thead>
                        <tr>
                            <th style="width:40%;">Feature</th>
                            <th style="width:20%;">Standard</th>
                            <th style="width:20%;">Premium</th>
                            <th style="width:20%;">Enterprise</th>
                        </tr>
                    </thead>
                    <tbody>
                        {{-- Menu & Products --}}
                        <tr class="comp-group-row" @click="toggleGroup('menu')">
                            <td colspan="4" class="comp-group">
                                <div class="comp-group-inner">
                                    <span>Menu &amp; Products</span>
                                    <span class="comp-toggle-badge" :class="openGroups.menu ? 'open' : ''" x-text="openGroups.menu ? '−' : '+'">+</span>
                                </div>
                            </td>
                        </tr>
                        <tr x-show="openGroups.menu" x-cloak><td>Menu Management</td><td><span class="check">✓</span></td><td><span class="check">✓</span></td><td><span class="check">✓</span></td></tr>
                        <tr x-show="openGroups.menu" x-cloak><td>Menu Categories</td><td><span class="check">✓</span></td><td><span class="check">✓</span></td><td><span class="check">✓</span></td></tr>
                        <tr x-show="openGroups.menu" x-cloak><td>Product Management</td><td><span class="check">✓</span></td><td><span class="check">✓</span></td><td><span class="check">✓</span></td></tr>
                        <tr x-show="openGroups.menu" x-cloak><td>Product Availability</td><td><span class="check">✓</span></td><td><span class="check">✓</span></td><td><span class="check">✓</span></td></tr>
                        <tr x-show="openGroups.menu" x-cloak><td>Product Variations</td><td><span class="dash">—</span></td><td><span class="check">✓</span></td><td><span class="check">✓</span></td></tr>

                        {{-- Orders & Service --}}
                        <tr class="comp-group-row" @click="toggleGroup('orders')">
                            <td colspan="4" class="comp-group">
                                <div class="comp-group-inner">
                                    <span>Orders &amp; Service</span>
                                    <span class="comp-toggle-badge" :class="openGroups.orders ? 'open' : ''" x-text="openGroups.orders ? '−' : '+'">+</span>
                                </div>
                            </td>
                        </tr>
                        <tr x-show="openGroups.orders" x-cloak><td>Order Management</td><td><span class="check">✓</span></td><td><span class="check">✓</span></td><td><span class="check">✓</span></td></tr>
                        <tr x-show="openGroups.orders" x-cloak><td>KOT Management</td><td><span class="dash">—</span></td><td><span class="check">✓</span></td><td><span class="check">✓</span></td></tr>
                        <tr x-show="openGroups.orders" x-cloak><td>Kitchen Management</td><td><span class="dash">—</span></td><td><span class="check">✓</span></td><td><span class="check">✓</span></td></tr>
                        <tr x-show="openGroups.orders" x-cloak><td>Waiter Requests</td><td><span class="dash">—</span></td><td><span class="check">✓</span></td><td><span class="check">✓</span></td></tr>
                        <tr x-show="openGroups.orders" x-cloak><td>Delivery Executive Management</td><td><span class="dash">—</span></td><td><span class="check">✓</span></td><td><span class="check">✓</span></td></tr>

                        {{-- Tables & Reservations --}}
                        <tr class="comp-group-row" @click="toggleGroup('tables')">
                            <td colspan="4" class="comp-group">
                                <div class="comp-group-inner">
                                    <span>Tables &amp; Reservations</span>
                                    <span class="comp-toggle-badge" :class="openGroups.tables ? 'open' : ''" x-text="openGroups.tables ? '−' : '+'">+</span>
                                </div>
                            </td>
                        </tr>
                        <tr x-show="openGroups.tables" x-cloak><td>Table Management</td><td><span class="dash">—</span></td><td><span class="check">✓</span></td><td><span class="check">✓</span></td></tr>
                        <tr x-show="openGroups.tables" x-cloak><td>Reservation Management</td><td><span class="dash">—</span></td><td><span class="check">✓</span></td><td><span class="check">✓</span></td></tr>
                        <tr x-show="openGroups.tables" x-cloak><td>Area Management</td><td><span class="dash">—</span></td><td><span class="check">✓</span></td><td><span class="check">✓</span></td></tr>

                        {{-- Customers & Staff --}}
                        <tr class="comp-group-row" @click="toggleGroup('customers')">
                            <td colspan="4" class="comp-group">
                                <div class="comp-group-inner">
                                    <span>Customers &amp; Staff</span>
                                    <span class="comp-toggle-badge" :class="openGroups.customers ? 'open' : ''" x-text="openGroups.customers ? '−' : '+'">+</span>
                                </div>
                            </td>
                        </tr>
                        <tr x-show="openGroups.customers" x-cloak><td>Customer Management</td><td>Basic</td><td><span class="check">✓</span></td><td><span class="check">✓</span></td></tr>
                        <tr x-show="openGroups.customers" x-cloak><td>Staff Management</td><td><span class="dash">—</span></td><td><span class="check">✓</span></td><td><span class="check">✓</span></td></tr>
                        <tr x-show="openGroups.customers" x-cloak><td>Customer History</td><td><span class="dash">—</span></td><td><span class="check">✓</span></td><td><span class="check">✓</span></td></tr>

                        {{-- Billing & Payments --}}
                        <tr class="comp-group-row" @click="toggleGroup('billing')">
                            <td colspan="4" class="comp-group">
                                <div class="comp-group-inner">
                                    <span>Billing &amp; Payments</span>
                                    <span class="comp-toggle-badge" :class="openGroups.billing ? 'open' : ''" x-text="openGroups.billing ? '−' : '+'">+</span>
                                </div>
                            </td>
                        </tr>
                        <tr x-show="openGroups.billing" x-cloak><td>POS</td><td><span class="check">✓</span></td><td><span class="check">✓</span></td><td><span class="check">✓</span></td></tr>
                        <tr x-show="openGroups.billing" x-cloak><td>Billing</td><td><span class="check">✓</span></td><td><span class="check">✓</span></td><td><span class="check">✓</span></td></tr>
                        <tr x-show="openGroups.billing" x-cloak><td>Payments</td><td><span class="check">✓</span></td><td><span class="check">✓</span></td><td><span class="check">✓</span></td></tr>
                        <tr x-show="openGroups.billing" x-cloak><td>Payment Gateway</td><td><span class="dash">—</span></td><td>Add-on</td><td><span class="check">✓</span></td></tr>
                        <tr x-show="openGroups.billing" x-cloak><td>Payment Reports</td><td>Basic</td><td><span class="check">✓</span></td><td><span class="check">✓</span></td></tr>

                        {{-- Inventory --}}
                        <tr class="comp-group-row" @click="toggleGroup('inventory')">
                            <td colspan="4" class="comp-group">
                                <div class="comp-group-inner">
                                    <span>Inventory</span>
                                    <span class="comp-toggle-badge" :class="openGroups.inventory ? 'open' : ''" x-text="openGroups.inventory ? '−' : '+'">+</span>
                                </div>
                            </td>
                        </tr>
                        <tr x-show="openGroups.inventory" x-cloak><td>Inventory Management</td><td><span class="dash">—</span></td><td><span class="check">✓</span></td><td><span class="check">✓</span></td></tr>
                        <tr x-show="openGroups.inventory" x-cloak><td>Stock Management</td><td><span class="dash">—</span></td><td><span class="check">✓</span></td><td><span class="check">✓</span></td></tr>
                        <tr x-show="openGroups.inventory" x-cloak><td>Stock Movement</td><td><span class="dash">—</span></td><td><span class="check">✓</span></td><td><span class="check">✓</span></td></tr>
                        <tr x-show="openGroups.inventory" x-cloak><td>Multi-Location Inventory</td><td><span class="dash">—</span></td><td><span class="dash">—</span></td><td><span class="check">✓</span></td></tr>

                        {{-- Business Management --}}
                        <tr class="comp-group-row" @click="toggleGroup('business')">
                            <td colspan="4" class="comp-group">
                                <div class="comp-group-inner">
                                    <span>Business Management</span>
                                    <span class="comp-toggle-badge" :class="openGroups.business ? 'open' : ''" x-text="openGroups.business ? '−' : '+'">+</span>
                                </div>
                            </td>
                        </tr>
                        <tr x-show="openGroups.business" x-cloak><td>Expense Management</td><td><span class="dash">—</span></td><td><span class="check">✓</span></td><td><span class="check">✓</span></td></tr>
                        <tr x-show="openGroups.business" x-cloak><td>Reports</td><td>Basic</td><td>Advanced</td><td>Enterprise</td></tr>
                        <tr x-show="openGroups.business" x-cloak><td>Export Reports</td><td><span class="dash">—</span></td><td><span class="check">✓</span></td><td><span class="check">✓</span></td></tr>
                        <tr x-show="openGroups.business" x-cloak><td>Advanced Analytics</td><td><span class="dash">—</span></td><td><span class="dash">—</span></td><td><span class="check">✓</span></td></tr>
                        <tr x-show="openGroups.business" x-cloak><td>Branch Management</td><td><span class="dash">—</span></td><td><span class="dash">—</span></td><td><span class="check">✓</span></td></tr>

                        {{-- Advanced --}}
                        <tr class="comp-group-row" @click="toggleGroup('advanced')">
                            <td colspan="4" class="comp-group">
                                <div class="comp-group-inner">
                                    <span>Advanced</span>
                                    <span class="comp-toggle-badge" :class="openGroups.advanced ? 'open' : ''" x-text="openGroups.advanced ? '−' : '+'">+</span>
                                </div>
                            </td>
                        </tr>
                        <tr x-show="openGroups.advanced" x-cloak><td>Kiosk</td><td><span class="dash">—</span></td><td><span class="dash">—</span></td><td><span class="check">✓</span></td></tr>
                        <tr x-show="openGroups.advanced" x-cloak><td>Multi-Branch</td><td><span class="dash">—</span></td><td><span class="dash">—</span></td><td><span class="check">✓</span></td></tr>
                        <tr x-show="openGroups.advanced" x-cloak><td>Branch-Wise Reports</td><td><span class="dash">—</span></td><td><span class="dash">—</span></td><td><span class="check">✓</span></td></tr>
                        <tr x-show="openGroups.advanced" x-cloak><td>Theme Settings</td><td><span class="dash">—</span></td><td><span class="dash">—</span></td><td><span class="check">✓</span></td></tr>
                        <tr x-show="openGroups.advanced" x-cloak><td>Advanced Settings</td><td><span class="dash">—</span></td><td><span class="dash">—</span></td><td><span class="check">✓</span></td></tr>
                    </tbody>
                </table>
            </div>
        </div>
    </section>

    {{-- 20: WHY CHOOSE --}}
    <section class="alt">
        <div class="w">
            <div class="hd">
                <h2>A Plan for Every Stage of Growth</h2>
            </div>
            <div class="stage-grid">
                <div class="stage-card">
                    <div class="stage-lbl">STANDARD</div>
                    <h3>Start Simple</h3>
                    <p>Manage the essential operations of your food business.</p>
                </div>
                <div class="stage-card">
                    <div class="stage-lbl" style="color:var(--ink);">PREMIUM</div>
                    <h3>Grow With Confidence</h3>
                    <p>Connect your kitchen, customers, inventory and daily operations.</p>
                </div>
                <div class="stage-card">
                    <div class="stage-lbl" style="color:var(--mute);">ENTERPRISE</div>
                    <h3>Scale Without Complexity</h3>
                    <p>Manage multiple locations, advanced reporting and centralized operations.</p>
                </div>
            </div>
        </div>
    </section>

    {{-- 21: FAQ (International Tier-1 SaaS Layout) --}}
    <section class="faq-section" id="faq">
        <div class="w">
            <div class="faq-layout">
                <!-- Left Column: Header & Support Contact Card -->
                <div class="faq-left-col">
                    <span class="eb">
                        <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><path d="M9.09 9a3 3 0 0 1 5.83 1c0 2-3 3-3 3"/><line x1="12" y1="17" x2="12.01" y2="17"/></svg>
                        FREQUENTLY ASKED QUESTIONS
                    </span>
                    <h2 class="faq-main-title">
                        Questions About<br>
                        <span style="font-family:'Playfair Display',Georgia,serif; font-style:italic; font-weight:600; color:var(--br);">Plans &amp; Pricing.</span>
                    </h2>
                    <p class="faq-lead-desc">
                        Everything you need to know about billing cycles, plan upgrades, multi-branch licensing, and enterprise scale.
                    </p>

                    <!-- Help / Contact Card -->
                    <div class="faq-support-card">
                        <div class="faq-support-header">
                            <div class="faq-support-icon">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"/></svg>
                            </div>
                            <div>
                                <h4 class="faq-support-title">Need custom pricing?</h4>
                                <span style="font-size: 12px; color: #627D98; font-weight: 500;">Multi-outlet &amp; franchise support</span>
                            </div>
                        </div>
                        <p class="faq-support-text">Have special requirements or running more than 5 outlets? Talk with our enterprise restaurant consultants.</p>
                        <div class="faq-support-actions">
                            <a href="{{ route('restaurant_signup') }}" class="faq-support-btn-primary">Book a Demo &rarr;</a>
                            <a href="{{ route('contact.us') }}" class="faq-support-link">Contact Sales &rarr;</a>
                        </div>
                    </div>
                </div>

                <!-- Right Column: Accordion Items -->
                <div class="faq-right-col">
                    <div class="faq-accordion-list">
                        <div class="faq-row open">
                            <button type="button">Are monthly and yearly plans available? <i>+</i></button>
                            <div class="faq-answer-wrap">
                                <div>
                                    <p>Yes. Geni Menu provides both monthly and yearly billing options with discounted rates for annual commitments.</p>
                                </div>
                            </div>
                        </div>

                        <div class="faq-row">
                            <button type="button">Can I upgrade my plan later? <i>+</i></button>
                            <div class="faq-answer-wrap">
                                <div>
                                    <p>Yes. You can seamlessly move to a higher plan as your operational requirements grow without interrupting daily kitchen and billing workflows.</p>
                                </div>
                            </div>
                        </div>

                        <div class="faq-row">
                            <button type="button">What is the difference between Standard and Premium? <i>+</i></button>
                            <div class="faq-answer-wrap">
                                <div>
                                    <p>Standard focuses on essential daily operations (menu, billing, KOT), while Premium adds deeper kitchen display, table layout, table reservations, staff tracking, and live inventory control.</p>
                                </div>
                            </div>
                        </div>

                        <div class="faq-row">
                            <button type="button">What is Enterprise designed for? <i>+</i></button>
                            <div class="faq-answer-wrap">
                                <div>
                                    <p>Enterprise is designed for expanding chains and high-volume restaurants that need multi-branch central controls, self-ordering kiosks, online payment gateways, and advanced executive analytics.</p>
                                </div>
                            </div>
                        </div>

                        <div class="faq-row">
                            <button type="button">Does every industry have the same pricing? <i>+</i></button>
                            <div class="faq-answer-wrap">
                                <div>
                                    <p>No. Pricing is tailored by business type (Dine-in, QSR, Bakery, Cafe, etc.) based on the specific operational modules and hardware workflows each format requires.</p>
                                </div>
                            </div>
                        </div>

                        <div class="faq-row">
                            <button type="button">Is payment gateway included in every plan? <i>+</i></button>
                            <div class="faq-answer-wrap">
                                <div>
                                    <p>No. Integrated online payment gateway functionality is included in selected Premium or Enterprise configurations depending on the business solution.</p>
                                </div>
                            </div>
                        </div>

                        <div class="faq-row">
                            <button type="button">Can I manage multiple branches? <i>+</i></button>
                            <div class="faq-answer-wrap">
                                <div>
                                    <p>Yes. Multi-branch functionality with central head-office reporting, outlet-level pricing, and unified management is available in applicable Enterprise plans.</p>
                                </div>
                            </div>
                        </div>

                        <div class="faq-row">
                            <button type="button">Can I manage inventory? <i>+</i></button>
                            <div class="faq-answer-wrap">
                                <div>
                                    <p>Yes. Real-time ingredient tracking, low-stock notifications, and recipe consumption are available in selected Premium and Enterprise plans.</p>
                                </div>
                            </div>
                        </div>

                        <div class="faq-row">
                            <button type="button">Can I change my plan later? <i>+</i></button>
                            <div class="faq-answer-wrap">
                                <div>
                                    <p>Yes. Businesses can upgrade, downgrade, or switch billing frequency at any time directly through the account dashboard or with support assistance.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- 22: FINAL CTA --}}
    <section class="cta-sec">
        <div class="cta-box">
            <h2>Choose the Plan That Fits Your Business.</h2>
            <p>Start with the essentials, unlock more capabilities as your business grows, and scale to advanced multi-branch operations when you need them.</p>
            <div class="cta-flow">
                STANDARD <span>→</span> PREMIUM <span>→</span> ENTERPRISE
            </div>
            <div style="display:flex; gap:16px; justify-content:center; flex-wrap:wrap; margin-top:32px;">
                <a href="{{ route('restaurant_signup') }}" class="btn p">Get Started &rarr;</a>
                <a href="{{ route('restaurant_signup') }}" class="btn o">Book a Demo &rarr;</a>
            </div>
        </div>
    </section>

</div>

<script>
document.addEventListener('alpine:init', () => {
    Alpine.data('pricing', () => ({
        billing: 'monthly',
        ind: 'restaurant',
        openGroups: {
            menu: false,
            orders: false,
            tables: false,
            customers: false,
            billing: false,
            inventory: false,
            business: false,
            advanced: false
        },
        toggleGroup(key) {
            this.openGroups[key] = !this.openGroups[key];
        },
        get allOpen() {
            return Object.values(this.openGroups).every(Boolean);
        },
        toggleAllGroups() {
            const next = !this.allOpen;
            Object.keys(this.openGroups).forEach(k => {
                this.openGroups[k] = next;
            });
        },
        formatPrice(val) {
            return new Intl.NumberFormat('en-IN', { style: 'currency', currency: 'INR', maximumFractionDigits: 0 }).format(val) + (this.billing === 'monthly' ? ' / mo' : ' / yr');
        },
        industries: {
            'restaurant': {
                name: 'Restaurants',
                s: { monthly: 1499, yearly: 14999, feat: 'Core Setup, Orders, KOT, Payments, Basic Reports.' },
                p: { monthly: 2499, yearly: 24999, feat: 'Everything in Standard + Kitchen, Tables, Reservations, Customers, Staff, Inventory.' },
                e: { monthly: 3499, yearly: 34999, feat: 'Everything in Premium + Payment Gateway, Multi-Branch, Expenses, Advanced Reports, Kiosk, Theme.' }
            },
            'dine-in': {
                name: 'Dine-in',
                s: { monthly: 1399, yearly: 13999, feat: 'Menu, Tables, Orders, KOT, Payments, Reports.' },
                p: { monthly: 2299, yearly: 22999, feat: 'Everything in Standard + Kitchen, Reservations, Customers, Staff, Inventory.' },
                e: { monthly: 3299, yearly: 32999, feat: 'Everything in Premium + Multi-Branch, Gateway, Expenses, Kiosk, Export Reports.' }
            },
            'multi-cuisine': {
                name: 'Multi-Cuisine',
                s: { monthly: 1999, yearly: 19999, feat: 'Menu Categories, Orders, KOT, Payments, Reports.' },
                p: { monthly: 2999, yearly: 29999, feat: 'Everything in Standard + Area, Tables, Kitchen, Customers, Inventory.' },
                e: { monthly: 3999, yearly: 39999, feat: 'Everything in Premium + Multi-Branch, Gateway, Expenses, Kiosk, Advanced Analytics.' }
            },
            'qsr': {
                name: 'QSR',
                s: { monthly: 999, yearly: 9999, feat: 'POS Orders, Menu, Payments, Reports.' },
                p: { monthly: 1499, yearly: 14999, feat: 'Everything in Standard + KOT, Kitchen, Customers, Inventory.' },
                e: { monthly: 2499, yearly: 24999, feat: 'Everything in Premium + Online Payment Gateway, Kiosk, Multi-Branch.' }
            },
            'takeaway': {
                name: 'Takeaway',
                s: { monthly: 1299, yearly: 12999, feat: 'Orders, Menu, Payments, Reports.' },
                p: { monthly: 1999, yearly: 19999, feat: 'Everything in Standard + Kitchen, KOT, Customers, Inventory.' },
                e: { monthly: 2999, yearly: 29999, feat: 'Everything in Premium + Gateway, Delivery Executive, Multi-Branch.' }
            },
            'college': {
                name: 'College Canteens',
                s: { monthly: 999, yearly: 9999, feat: 'Menu, Orders, Payments, Reports.' },
                p: { monthly: 1499, yearly: 14999, feat: 'Everything in Standard + Kitchen, KOT, Inventory.' },
                e: { monthly: 2499, yearly: 24999, feat: 'Everything in Premium + Payment Gateway, Expenses, Branch Management.' }
            },
            'office': {
                name: 'Office Canteens',
                s: { monthly: 1499, yearly: 14999, feat: 'Menu, Orders, Payments, Reports.' },
                p: { monthly: 2499, yearly: 24999, feat: 'Everything in Standard + Kitchen, Staff, Inventory.' },
                e: { monthly: 3499, yearly: 34999, feat: 'Everything in Premium + Gateway, Expenses, Multi-Branch.' }
            },
            'sweet': {
                name: 'Sweet Shops',
                s: { monthly: 1299, yearly: 12999, feat: 'Menu, Orders, Payments, Reports.' },
                p: { monthly: 1999, yearly: 19999, feat: 'Everything in Standard + Inventory, Customers, KOT.' },
                e: { monthly: 2999, yearly: 29999, feat: 'Everything in Premium + Gateway, Expenses, Multi-Branch.' }
            },
            'bakery': {
                name: 'Bakeries / Cake Shops',
                s: { monthly: 1299, yearly: 12999, feat: 'Menu, Orders, Payments.' },
                p: { monthly: 1999, yearly: 19999, feat: 'Everything in Standard + Inventory, Customers, Kitchen.' },
                e: { monthly: 2999, yearly: 29999, feat: 'Everything in Premium + Gateway, Expenses, Multi-Branch.' }
            },
            'juice': {
                name: 'Juice / Ice Cream / Chaat / Tea',
                s: { monthly: 799, yearly: 7999, feat: 'POS Orders, Menu, Payments.' },
                p: { monthly: 1299, yearly: 12999, feat: 'Everything in Standard + Inventory, Reports, Customers.' },
                e: { monthly: 1999, yearly: 19999, feat: 'Everything in Premium + Gateway, Kiosk, Multi-Branch.' }
            },
            'bar': {
                name: 'Bars & Breweries',
                s: { monthly: 1999, yearly: 19999, feat: 'Menu, Orders, Payments, Reports.' },
                p: { monthly: 2999, yearly: 29999, feat: 'Everything in Standard + Kitchen, Inventory, Staff.' },
                e: { monthly: 3999, yearly: 39999, feat: 'Everything in Premium + Gateway, Expenses, Multi-Branch.' }
            },
            'pizza': {
                name: 'Pizzerias & Others',
                s: { monthly: 1499, yearly: 14999, feat: 'Menu, Orders, Payments.' },
                p: { monthly: 2499, yearly: 24999, feat: 'Everything in Standard + Kitchen, KOT, Inventory.' },
                e: { monthly: 3499, yearly: 34999, feat: 'Everything in Premium + Gateway, Multi-Branch, Analytics.' }
            }
        }
    }));
});

// FAQ Accordion Toggle (International Tier-1 SaaS)
document.addEventListener('DOMContentLoaded', function() {
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