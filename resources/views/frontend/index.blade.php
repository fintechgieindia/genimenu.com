@php
    $meta = [
        'title' => 'Geni Menu — Restaurant Management, Made Simple',
        'description' => 'Geni Menu helps you manage your menu, tables, orders, billing, kitchen, staff, inventory and more — simply.',
        'keywords' => 'restaurant billing software, restaurant POS software, restaurant management software, POS for restaurants, QR code menu, digital menu, KOT management, inventory management, restaurant ERP, Geni Menu',
    ];
@endphp

@extends('layouts.frontend-master')

@section('content')
<!-- Import Google Fonts: Inter (International Standard Body), Plus Jakarta Sans (Modern Display), Outfit (Geometric), Playfair Display (Accent) -->

<style>
@import url('https://fonts.cdnfonts.com/css/effra');

:root {
  --font-heading: 'Effra', sans-serif;
  --br: #B45309;
  --br-dark: #92400E;
  --br-light: #FEF3C7;
  --br-gold: #D97706;
  
  /* Stripe High-Tech Slate-Blue Palette */
  --bg: #F6F9FC;
  --bg-white: #FFFFFF;
  --bg-subtle: #EEF2F6;
  
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
  box-sizing: border-box;
}

* { box-sizing: border-box; }
html { scroll-behavior: smooth; }
::selection { background: #0A2540; color: #FFFFFF; }

body {
  margin: 0;
  font: 400 16px/1.65 'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
  color: var(--ink);
  background: var(--bg) !important;
  overflow-x: clip;
  -webkit-font-smoothing: subpixel-antialiased;
  -moz-osx-font-smoothing: auto;
  text-rendering: optimizeLegibility;
}

h1 {
  margin: 0;
  font-family: 'Plus Jakarta Sans', -apple-system, BlinkMacSystemFont, 'Segoe UI', sans-serif;
  font-size: clamp(40px, 5vw, 66px);
  font-weight: 800;
  letter-spacing: -0.035em;
  line-height: 1.08;
  color: #0A2540;
}
h2 {
  margin: 0;
  font-family: Effra, sans-serif;
  font-size: 2.5rem;
  font-weight: 400;
  letter-spacing: normal;
  line-height: 1;
  color: #0A2540;
}
h3, h4, h5, h6 {
  margin: 0;
  font-family: Effra, sans-serif;
  color: #0A2540;
}
h3 { font-size: 20px; font-weight: 700; letter-spacing: -0.02em; transition: color 0.25s ease; }
.card:hover h3 { color: var(--br); }

p { margin: 0; color: #425466; font-size: 16px; font-family: 'Inter', system-ui, sans-serif; line-height: 1.65; letter-spacing: -0.01em; }
a { color: inherit; text-decoration: none; }
ul { list-style: none; margin: 0; padding: 0; }

/* Main Title Text — Deep Stripe Navy Slate (#0A2540) */
.title-grad {
  color: #0A2540;
  background: none;
  -webkit-background-clip: unset;
  -webkit-text-fill-color: initial;
  display: inline-block;
  font-weight: 400;
  letter-spacing: normal;
}

/* Highlighted Word / Accent — Warm Honey Gold Gradient */
.sf, .hiw-serif, .team-serif, .growth-serif {
  font-family: 'Playfair Display', Georgia, serif;
  font-style: italic;
  font-weight: 700;
  background: linear-gradient(135deg, #B45309 0%, #D97706 100%);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
  display: inline-block;
  padding-right: 4px;
  letter-spacing: -0.02em;
}

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

/* Section Structure & Alternating Background Rhythm */
section {
  padding: clamp(72px, 8.5vw, 110px) 0;
  background: #FFFFFF;
  position: relative;
  overflow: hidden;
  }

/* Specific Section Alternating Backgrounds (Stripe High-Tech Slate-Blue Canvas) */
/* 1. Everything You Need — Stripe Signature Slate-Blue Canvas */
section.alt:first-of-type {
  background-color: #F6F9FC !important;
}

/* 2. Features Section */
section#features {
  background-color: #FFFFFF !important;
}

/* 3. How It Works Section */
section.hiw-section {
  background-color: #FFFFFF !important;
}

/* 4. Customer Experience Section */
section:has(.cx) {
  background-color: #FFFFFF !important;
}

/* 5. Your Team Section */
section.team-section {
  background-color: #F6F9FC !important;
}

/* 6. Solutions Section */
section#solutions {
  background-color: #FFFFFF !important;
}

/* 7. Scale & Growth Section */
section.growth-section {
  background-color: #F6F9FC !important;
}

/* 8. Reports Section (dk) */
section.dk {
  background-color: #FFFFFF !important;
}

/* 9. Live Suite Showcase */
section:has(#sh) {
  background-color: #F6F9FC !important;
}

/* 10. Operational Highlights */
section:has(#wg) {
  background-color: #FFFFFF !important;
}

/* 11. Pricing Section */
section#pricing {
  background-color: #F6F9FC !important;
}

/* 12. FAQ Section */
section:has(#fq) {
  background-color: #FFFFFF !important;
}

.hd { max-width: 760px; margin: 0 auto 52px; text-align: center; }
.hd p { margin-top: 16px; font-size: 18px; line-height: 1.6; color: #425466; font-family: 'Inter', sans-serif; }

/* Purge Clutter: Hide Clipart SVGs & Rotated Card Watermarks */
.food-bg-icon, .card-wm-icon, .hero-line-art {
  display: none !important;
}

/* Stripe Style Card Architecture */
.card {
  position: relative;
  overflow: hidden;
  background: var(--card);
  border: 1px solid var(--line);
  border-radius: 20px;
  box-shadow: var(--shadow-sm);
  transition: transform 0.25s cubic-bezier(0.16, 1, 0.3, 1), box-shadow 0.25s cubic-bezier(0.16, 1, 0.3, 1), border-color 0.25s ease;
}
.card > * { position: relative; z-index: 2; }
.card:hover {
  transform: translateY(-4px);
  border-color: #CBD5E1;
  box-shadow: var(--shadow-md);
}

/* Global Buttons */
.btn {
  display: inline-flex;
  align-items: center;
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
  box-shadow: 0 4px 14px rgba(10, 37, 64, 0.22);
}
.btn.p:hover {
  transform: translateY(-2px);
  background: #1A365D;
  border-color: #1A365D;
  box-shadow: 0 10px 25px -4px rgba(10, 37, 64, 0.35);
  color: #FFFFFF !important;
}
.btn.o {
  color: #0A2540;
  background: #FFFFFF;
  border: 1.5px solid #E3E8EE;
  box-shadow: 0 1px 2px rgba(50, 50, 93, 0.05);
}
.btn.o:hover {
  background: #F6F9FC;
  border-color: #CBD5E1;
  color: #0A2540;
  transform: translateY(-2px);
}
.btn.ow {
  color: #FFFFFF !important;
  border: 1.5px solid rgba(255, 255, 255, 0.25);
  background: rgba(255, 255, 255, 0.1);
  backdrop-filter: blur(8px);
}
.btn.ow:hover {
  background: #FFFFFF;
  color: #0A2540 !important;
  border-color: #FFFFFF;
  transform: translateY(-2px);
}

/* Reveal Animations */
.r { opacity: 0; transform: translateY(20px); transition: opacity .6s cubic-bezier(0.16, 1, 0.3, 1), transform .6s cubic-bezier(0.16, 1, 0.3, 1); }
.r.in { opacity: 1; transform: none; }

/* Image Photo Frame */
.ph { position: relative; border-radius: 24px; overflow: hidden; background: #F1F5F9; box-shadow: var(--shadow-md); border: 1px solid #E3E8EE; }
.ph img { width: 100%; height: 100%; object-fit: cover; display: block; transition: transform 0.6s ease; }
.ph:hover img { transform: scale(1.04); }
.ph span { position: absolute; bottom: 0; left: 0; right: 0; font-size: 11px; letter-spacing: .1em; text-transform: uppercase; color: #fff; padding: 16px 20px; background: linear-gradient(transparent, rgba(10, 37, 64, 0.88)); z-index: 2; font-weight: 700; display: flex; align-items: center; gap: 8px; }

/* Icon Container */
.ic {
  width: 48px;
  height: 48px;
  border-radius: 14px;
  background: #FEF3C7;
  color: #B45309;
  display: grid;
  place-items: center;
  flex: none;
  border: 1px solid rgba(217, 119, 6, 0.2);
  transition: all 0.25s ease;
}
.ic svg { width: 22px; height: 22px; fill: none; stroke: currentColor; stroke-width: 1.8; stroke-linecap: round; stroke-linejoin: round; }
.card:hover .ic { background: #0A2540; color: #FFFFFF; border-color: #0A2540; transform: scale(1.05); }

/* Interactive Windows & Widgets */
.win { background: #FFFFFF; color: #0A2540; border: 1px solid var(--line); border-radius: 18px; overflow: hidden; box-shadow: var(--shadow-sm); font-size: 11px; text-align: left; }
.wb { display: flex; align-items: center; gap: 6px; padding: 10px 14px; background: #F6F9FC; border-bottom: 1px solid var(--line); }
.wb i { width: 9px; height: 9px; border-radius: 50%; }
.wb i:nth-child(1) { background: #FF5F56; }
.wb i:nth-child(2) { background: #FFBD2E; }
.wb i:nth-child(3) { background: #27C93F; }
.wb b { margin-left: 8px; color: var(--br); letter-spacing: .06em; font-size: 11px; display: flex; align-items: center; gap: 6px; font-family: 'Plus Jakarta Sans', sans-serif; font-weight: 700; }
.wc { padding: 14px; display: grid; gap: 10px; }

.g { display: grid; gap: 8px; }
.g3 { grid-template-columns: repeat(3, 1fr); }
.g4 { grid-template-columns: repeat(4, 1fr); }
.t { border: 1px solid var(--line); border-radius: 10px; padding: 8px 10px; background: #FFFFFF; font-weight: 700; transition: .2s; font-family: 'Plus Jakarta Sans', sans-serif; }
.t small { display: block; font-weight: 500; color: #627D98; margin-top: 2px; }
.t.a { background: #0A2540; color: #FFFFFF; border-color: #0A2540; }
.t.a small { color: #94A3B8; }
.t.b { background: #F6F9FC; border-color: #E3E8EE; }
.t.c { background: #FEF3C7; border-color: rgba(217, 119, 6, 0.3); color: #B45309; }

.bar { height: 8px; border-radius: 9px; background: #F1F5F9; overflow: hidden; }
.bar i { display: block; height: 100%; border-radius: 9px; background: var(--br); }
.row { display: flex; justify-content: space-between; gap: 8px; padding: 6px 0; border-top: 1px solid var(--line); font-size: 12px; }
.row:first-child { border: 0; }

/* Phone Mockup Component */
.ph1 { width: 235px; aspect-ratio: 9/18.5; border-radius: 36px; background: #0A2540; padding: 9px; box-shadow: 0 24px 48px rgba(10, 37, 64, 0.28); border: 2px solid #1A365D; }
.ph1 > div { height: 100%; border-radius: 28px; background: #FFFFFF; color: #0A2540; padding: 18px 12px 12px; font-size: 11px; display: flex; flex-direction: column; gap: 7px; overflow: hidden; }
.ph1 .it { display: flex; gap: 8px; align-items: center; padding: 7px; border: 1px solid var(--line); border-radius: 12px; background: #FFFFFF; box-shadow: 0 2px 6px rgba(0,0,0,0.02); }
.ph1 u { width: 34px; height: 34px; border-radius: 8px; flex: none; background-size: cover; background-position: center; }
.ph1 .it span { flex: 1; font-weight: 700; color: var(--ink); line-height: 1.2; }
.ph1 em { font-style: normal; color: var(--br); font-weight: 700; font-size: 12px; }
.ph1 .ct { margin-top: auto; background: #0A2540; color: #FFFFFF; border-radius: 14px; padding: 10px 14px; display: flex; justify-content: space-between; align-items: center; font-weight: 700; box-shadow: 0 4px 14px rgba(10, 37, 64, 0.25); }

/* Floating Cards */
.fl { position: absolute; padding: 12px 16px; font-size: 13px; box-shadow: var(--shadow-md); animation: fy 6s ease-in-out infinite; color: var(--ink); background: #FFFFFF; border-radius: 14px; border: 1px solid var(--line); z-index: 10; font-family: 'Plus Jakarta Sans', sans-serif; }
@keyframes fy { 0%, 100% { transform: translateY(0); } 50% { transform: translateY(-10px); } }

/* ==========================================================================
   GENI MENU HERO SECTION (INTERNATIONAL SAAS HIGH-CLARITY KITCHEN HERO)
   ========================================================================== */
.hero {
  position: relative;
  background-image: url('{{ asset("landing/hero-kitchen-bg.jpg") }}') !important;
  background-size: cover !important;
  background-position: center 30% !important;
  background-repeat: no-repeat !important;
  padding: 130px 0 85px !important;
  overflow: hidden;
  color: #FFFFFF;
}

/* Crystal-Clear Cinematic Scrim: Keeps the authentic restaurant kitchen photo vivid, clear & sharp */
.hero-bg-overlay {
  position: absolute;
  inset: 0;
  background: linear-gradient(180deg,
    rgba(10, 25, 47, 0.42) 0%,
    rgba(10, 25, 47, 0.32) 35%,
    rgba(8, 20, 36, 0.58) 70%,
    rgba(8, 22, 40, 0.94) 100%
  );
  z-index: 1;
  pointer-events: none;
}

.hero .w {
  position: relative;
  z-index: 2;
}

.hero-center-content {
  max-width: 1220px;
  margin: 0 auto;
  text-align: center;
  display: flex;
  flex-direction: column;
  align-items: center;
}

/* International SaaS Eyebrow Pill */
.hero-eyebrow-pill {
  display: inline-flex;
  align-items: center;
  gap: 8px;
  background: rgba(10, 25, 47, 0.70);
  color: #FEF3C7;
  font-family: 'Plus Jakarta Sans', -apple-system, sans-serif;
  font-size: 12.5px;
  font-weight: 800;
  text-transform: uppercase;
  letter-spacing: 0.12em;
  padding: 9px 20px 9px 15px;
  border-radius: 9999px;
  margin-bottom: 24px;
  border: 1px solid rgba(255, 255, 255, 0.28);
  backdrop-filter: blur(14px);
  box-shadow: 0 4px 16px rgba(0, 0, 0, 0.35);
}

.hero-eyebrow-pill::before {
  content: '';
  display: inline-block;
  width: 8px;
  height: 8px;
  border-radius: 50%;
  background: #10B981;
  box-shadow: 0 0 10px #10B981;
  animation: pulseLive 2s infinite ease-in-out;
}
@keyframes pulseLive {
  0%, 100% { transform: scale(1); opacity: 1; }
  50% { transform: scale(1.3); opacity: 0.7; }
}
.hero-eyebrow-pill svg { width: 13px; height: 13px; fill: #D97706; }

/* International SaaS Headline: High-Contrast Pure White with Crisp Multi-Stop Shadow */
.hero-main-title {
  font-family: 'Plus Jakarta Sans', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
  font-weight: 800;
  font-size: clamp(40px, 5.4vw, 68px);
  line-height: 1.1;
  color: #FFFFFF;
  margin: 0 0 10px;
  letter-spacing: -0.04em;
  text-shadow: 0 2px 10px rgba(0, 0, 0, 0.7), 0 8px 30px rgba(0, 0, 0, 0.55);
}

.hero-serif-highlight {
  font-family: 'Playfair Display', Georgia, serif;
  font-style: italic;
  font-weight: 700;
  font-size: clamp(44px, 5.8vw, 72px);
  background: linear-gradient(135deg, #FFFFFF 0%, #FEF3C7 50%, #F59E0B 100%);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
  display: block;
  line-height: 1.15;
  letter-spacing: -0.02em;
  margin-top: 8px;
  filter: drop-shadow(0 4px 18px rgba(0, 0, 0, 0.7));
}

/* International Lead Description: Clean, Legible, High-Contrast */
.hero-lead-text {
  font-family: 'Inter', -apple-system, BlinkMacSystemFont, system-ui, sans-serif;
  font-size: clamp(18px, 1.4vw, 21.5px);
  color: #F8FAFC;
  line-height: 1.68;
  margin: 22px auto 36px;
  max-width: 780px;
  letter-spacing: -0.01em;
  font-weight: 400;
  text-shadow: 0 2px 12px rgba(0, 0, 0, 0.8);
}

.hero-cta-group {
  display: flex;
  align-items: center;
  justify-content: center;
  gap: 16px;
  margin-bottom: 38px;
  flex-wrap: wrap;
}

/* International SaaS High-Converting CTA Buttons */
.hero-btn-primary-demo {
  background: #FFFFFF !important;
  color: #0A2540 !important;
  font-family: 'Plus Jakarta Sans', sans-serif;
  font-size: 16.5px;
  font-weight: 700;
  letter-spacing: -0.01em;
  padding: 17px 40px;
  border-radius: 9999px;
  text-decoration: none;
  box-shadow: 0 12px 32px rgba(0, 0, 0, 0.45) !important;
  transition: all 0.25s cubic-bezier(0.16, 1, 0.3, 1);
  display: inline-flex;
  align-items: center;
  gap: 8px;
  border: 1px solid #FFFFFF;
}

.hero-btn-primary-demo:hover {
  background: #F1F5F9 !important;
  transform: translateY(-2px);
  box-shadow: 0 18px 44px rgba(0, 0, 0, 0.55) !important;
  color: #0A2540 !important;
}

.hero-btn-secondary-features {
  background: rgba(10, 25, 47, 0.65);
  color: #FFFFFF !important;
  border: 1.5px solid rgba(255, 255, 255, 0.45);
  font-family: 'Plus Jakarta Sans', sans-serif;
  font-size: 16.5px;
  font-weight: 600;
  letter-spacing: -0.01em;
  padding: 17px 36px;
  border-radius: 9999px;
  text-decoration: none;
  backdrop-filter: blur(14px);
  box-shadow: 0 8px 24px rgba(0, 0, 0, 0.35);
  transition: all 0.25s ease;
  display: inline-flex;
  align-items: center;
}

.hero-btn-secondary-features:hover {
  background: rgba(255, 255, 255, 0.22);
  border-color: #FFFFFF;
  transform: translateY(-2px);
  color: #FFFFFF !important;
}

/* Hero Devices Showcase: Dashboard + Phone Side-by-Side (Close together, phone NOT below) */
.hero-devices-showcase {
  display: flex;
  align-items: center;
  justify-content: center;
  gap: 16px;
  max-width: 1200px;
  width: 100%;
  margin: 40px auto 52px;
  position: relative;
  z-index: 5;
}

.hero-device-dashboard {
  flex: 1 1 890px;
  max-width: 920px;
  position: relative;
}

.desktop-monitor-frame {
  background: #0A192F;
  border-radius: 16px;
  padding: 10px 10px 12px;
  border: 1px solid rgba(255, 255, 255, 0.24);
  box-shadow: 0 24px 60px rgba(0, 0, 0, 0.65);
  transition: transform 0.3s ease;
}
.desktop-monitor-frame:hover {
  transform: translateY(-3px);
}

.desktop-screen-bezel {
  background: #FFFFFF;
  border-radius: 10px;
  overflow: hidden;
  display: flex;
  flex-direction: column;
}

.desktop-browser-bar {
  background: #14273E;
  padding: 9px 16px;
  display: flex;
  align-items: center;
  gap: 12px;
  border-bottom: 1px solid rgba(255, 255, 255, 0.1);
}

.browser-window-dots {
  display: flex;
  gap: 6px;
}
.browser-dot {
  width: 9px;
  height: 9px;
  border-radius: 50%;
}
.browser-dot.red { background: #FF5F56; }
.browser-dot.yellow { background: #FFBD2E; }
.browser-dot.green { background: #27C93F; }

.browser-url-pill {
  flex: 1;
  background: #0A192F;
  border: 1px solid rgba(255, 255, 255, 0.14);
  border-radius: 6px;
  padding: 4px 14px;
  font-size: 12px;
  color: #CBD5E1;
  text-align: center;
  max-width: 240px;
  margin: 0 auto;
  font-family: 'Inter', monospace;
}

.desktop-live-tag {
  display: inline-flex;
  align-items: center;
  gap: 5px;
  font-size: 10px;
  font-weight: 700;
  color: #10B981;
}
.desktop-live-tag::before {
  content: '';
  width: 7px;
  height: 7px;
  background: #10B981;
  border-radius: 50%;
  animation: pulseGreen 1.5s infinite;
}
@keyframes pulseGreen {
  0%, 100% { opacity: 1; }
  50% { opacity: 0.3; }
}

.dashboard-img-wrap {
  position: relative;
  width: 100%;
  overflow: hidden;
  background: #F8FAFC;
}
.dashboard-img-wrap img {
  width: 100%;
  height: auto;
  display: block;
  object-fit: contain;
}

/* Phone Mockup: Snug right beside dashboard, vertically centered, NEVER below */
.hero-device-phone {
  flex: 0 0 270px;
  width: 270px;
  display: flex;
  align-items: center;
  justify-content: center;
  margin-left: -30px;
  z-index: 6;
}

.phone-mockup-wrapper {
  width: 100%;
  position: relative;
  transition: transform 0.3s ease;
  filter: drop-shadow(0 20px 42px rgba(0, 0, 0, 0.55));
}
.phone-mockup-wrapper:hover {
  transform: translateY(-4px) scale(1.02);
}
.phone-mockup-wrapper img {
  width: 100%;
  height: auto;
  display: block;
}

/* ==========================================================================
   INDUSTRY COMPATIBILITY SHOWCASE (MODERN GLASS CARDS GRID)
   ========================================================================== */
.industry-compat-wrap {
  border-top: 1px solid rgba(255, 255, 255, 0.16);
  padding-top: 38px;
  padding-bottom: 28px;
  max-width: 1160px;
  width: 100%;
  margin: 0 auto;
}

.industry-compat-header {
  text-align: center;
  max-width: 760px;
  margin: 0 auto 30px;
}

.industry-compat-title {
  font-family: Effra, sans-serif;
  font-size: 2.5rem;
  font-weight: 400;
  letter-spacing: normal;
  line-height: 1;
  color: #FFFFFF !important;
  margin: 0 0 10px;
  text-shadow: 0 2px 10px rgba(0, 0, 0, 0.7);
}

.industry-compat-subtitle {
  font-family: 'Inter', sans-serif;
  font-size: 14.5px;
  color: #CBD5E1;
  line-height: 1.6;
  margin: 0;
  text-shadow: 0 1px 8px rgba(0, 0, 0, 0.7);
}

.industry-cards-grid {
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  gap: 16px;
  width: 100%;
}

.industry-card {
  display: flex;
  align-items: center;
  gap: 15px;
  background: rgba(10, 25, 47, 0.72);
  border: 1px solid rgba(255, 255, 255, 0.14);
  border-radius: 16px;
  padding: 18px 20px;
  backdrop-filter: blur(16px);
  -webkit-backdrop-filter: blur(16px);
  box-shadow: 0 8px 24px rgba(0, 0, 0, 0.35);
  transition: all 0.25s cubic-bezier(0.16, 1, 0.3, 1);
  position: relative;
  overflow: hidden;
  text-align: left;
  cursor: pointer;
  text-decoration: none;
  color: inherit;
  user-select: none;
}

.industry-card::before {
  content: '';
  position: absolute;
  top: 0;
  left: 0;
  right: 0;
  height: 2px;
  background: transparent;
  transition: background 0.25s ease;
}

.industry-card:hover {
  transform: translateY(-4px);
  background: rgba(14, 34, 62, 0.9);
  border-color: rgba(245, 158, 11, 0.5);
  box-shadow: 0 16px 36px rgba(0, 0, 0, 0.5), 0 0 25px rgba(245, 158, 11, 0.12);
}

.industry-card:hover::before {
  background: linear-gradient(90deg, #B45309, #F59E0B);
}

/* Icon box styling per industry */
.industry-card-icon-box {
  width: 46px;
  height: 46px;
  border-radius: 13px;
  display: flex;
  align-items: center;
  justify-content: center;
  flex-shrink: 0;
  transition: transform 0.25s ease;
}
.industry-card:hover .industry-card-icon-box {
  transform: scale(1.08);
}
.industry-card-icon-box svg {
  width: 22px;
  height: 22px;
  stroke-width: 2;
}

.industry-card-icon-box.dine-in {
  background: linear-gradient(135deg, rgba(245, 158, 11, 0.25), rgba(180, 83, 9, 0.42));
  border: 1px solid rgba(245, 158, 11, 0.45);
  color: #FDE68A;
}
.industry-card-icon-box.cafe {
  background: linear-gradient(135deg, rgba(217, 119, 6, 0.25), rgba(146, 64, 14, 0.42));
  border: 1px solid rgba(217, 119, 6, 0.45);
  color: #FBBF24;
}
.industry-card-icon-box.qsr {
  background: linear-gradient(135deg, rgba(16, 185, 129, 0.25), rgba(5, 150, 105, 0.42));
  border: 1px solid rgba(16, 185, 129, 0.45);
  color: #6EE7B7;
}
.industry-card-icon-box.bakery {
  background: linear-gradient(135deg, rgba(244, 63, 94, 0.22), rgba(190, 18, 60, 0.4));
  border: 1px solid rgba(244, 63, 94, 0.45);
  color: #FDA4AF;
}
.industry-card-icon-box.bar {
  background: linear-gradient(135deg, rgba(139, 92, 246, 0.25), rgba(109, 40, 217, 0.42));
  border: 1px solid rgba(139, 92, 246, 0.45);
  color: #C4B5FD;
}
.industry-card-icon-box.cloud {
  background: linear-gradient(135deg, rgba(14, 165, 233, 0.25), rgba(2, 132, 199, 0.42));
  border: 1px solid rgba(14, 165, 233, 0.45);
  color: #7DD3FC;
}

.industry-card-body {
  flex: 1;
  min-width: 0;
}

.industry-card-name {
  font-family: 'Effra', sans-serif;
  font-size: 15.5px;
  font-weight: 700;
  color: #FFFFFF;
  letter-spacing: -0.01em;
  margin-bottom: 3px;
}

.industry-card-desc {
  display: block;
  font-family: 'Inter', sans-serif;
  font-size: 12px;
  color: #94A3B8;
  line-height: 1.45;
  white-space: nowrap;
  overflow: hidden;
  text-overflow: ellipsis;
}
.industry-card:hover .industry-card-desc {
  color: #CBD5E1;
}

/* Micro Action Arrow in each card */
.industry-card-arrow-btn {
  width: 30px;
  height: 30px;
  border-radius: 50%;
  background: rgba(255, 255, 255, 0.08);
  border: 1px solid rgba(255, 255, 255, 0.16);
  display: flex;
  align-items: center;
  justify-content: center;
  color: #94A3B8;
  flex-shrink: 0;
  transition: all 0.25s ease;
  margin-left: 8px;
}
.industry-card-arrow-btn svg {
  width: 13px;
  height: 13px;
  transition: transform 0.25s ease;
}
.industry-card:hover .industry-card-arrow-btn {
  background: #EA580C;
  border-color: #EA580C;
  color: #FFFFFF;
  box-shadow: 0 4px 12px rgba(234, 88, 12, 0.45);
}
.industry-card:hover .industry-card-arrow-btn svg {
  transform: translateX(2px);
}

.industry-compat-action {
  display: flex;
  justify-content: center;
  align-items: center;
  margin-top: 28px;
}

.industry-compat-btn {
  display: inline-flex;
  align-items: center;
  gap: 8px;
  background: linear-gradient(135deg, #EA580C 0%, #F97316 100%);
  color: #FFFFFF !important;
  font-family: 'Plus Jakarta Sans', sans-serif;
  font-size: 13.5px;
  font-weight: 700;
  padding: 10px 24px;
  border-radius: 9999px;
  text-decoration: none;
  box-shadow: 0 4px 16px rgba(234, 88, 12, 0.35), 0 0 0 1px rgba(255, 255, 255, 0.15);
  transition: all 0.25s ease;
  letter-spacing: 0.01em;
}

.industry-compat-btn:hover {
  background: linear-gradient(135deg, #C2410C 0%, #EA580C 100%);
  transform: translateY(-2px);
  box-shadow: 0 6px 22px rgba(234, 88, 12, 0.5), 0 0 0 1px rgba(255, 255, 255, 0.25);
  color: #FFFFFF !important;
}

.industry-compat-btn svg {
  transition: transform 0.25s ease;
}

.industry-compat-btn:hover svg {
  transform: translateX(3px);
}

@media (max-width: 1024px) {
  .hero-devices-showcase {
    max-width: 980px;
  }
  .hero-device-phone {
    flex: 0 0 220px;
    width: 220px;
    margin-left: -22px;
  }
  .industry-cards-grid {
    grid-template-columns: repeat(2, 1fr);
  }
}

@media (max-width: 768px) {
  .hero {
    padding: 85px 0 50px !important;
  }
  .hero-center-content {
    margin: 0 auto;
  }
  .hero-main-title {
    font-size: 32px;
  }
  .hero-serif-highlight {
    font-size: 36px;
  }
  .hero-lead-text {
    font-size: 15.5px;
    margin: 16px auto 26px;
  }
  .hero-cta-group {
    flex-direction: column;
    width: 100%;
    max-width: 320px;
    gap: 12px;
  }
  .hero-btn-primary-demo,
  .hero-btn-secondary-features {
    width: 100%;
    justify-content: center;
  }
  .hero-devices-showcase {
    gap: 8px;
    margin: 24px auto 30px;
    padding: 0 6px;
  }
  .hero-device-dashboard {
    flex: 1 1 65%;
  }
  .hero-device-phone {
    flex: 0 0 145px;
    width: 145px;
    margin-left: -14px;
  }
  .desktop-browser-bar {
    padding: 6px 10px;
  }
  .browser-url-pill {
    font-size: 9.5px;
    padding: 2px 6px;
    max-width: 140px;
  }
  .industry-compat-wrap {
    padding-top: 24px;
  }
  .industry-compat-header {
    margin-bottom: 20px;
  }
  .industry-compat-title {
    font-size: 22px;
  }
  .industry-compat-subtitle {
    font-size: 13.5px;
  }
  .industry-cards-grid {
    grid-template-columns: 1fr;
    gap: 12px;
  }
  .industry-card {
    padding: 14px 16px;
  }
  .industry-card-desc {
    white-space: normal;
  }
}

@media (max-width: 480px) {
  .hero-device-phone {
    flex: 0 0 110px;
    width: 110px;
    margin-left: -10px;
  }
  .browser-url-pill {
    display: none;
  }
}

/* Quick 4 Features (.b4) */
.ig { display: grid; grid-template-columns: 1fr 1.05fr; gap: 56px; align-items: stretch; }
.ig > .ph { min-height: 520px; height: 100%; border-radius: 28px; position: relative; }
.ig > .ph img { position: absolute; inset: 0; width: 100%; height: 100%; object-fit: cover; }
.b4 { display: grid; grid-template-columns: 1fr 1fr; gap: 18px; margin-top: 32px; }
.b4 > div, .b4 > a, .b4 .card {
  padding: 24px;
  border-radius: 18px;
  background: #FFFFFF;
  border: 1px solid var(--line);
  display: flex;
  flex-direction: column;
  text-decoration: none;
  color: inherit;
  transition: transform .25s ease, box-shadow .25s ease, border-color .25s ease;
  box-shadow: var(--shadow-sm);
}
.b4 > div:hover, .b4 > a:hover, .b4 .card:hover {
  transform: translateY(-4px);
  border-color: #CBD5E1;
  box-shadow: var(--shadow-md);
}
.b4 h3 { margin: 14px 0 6px; font-size: 17px; display: flex; align-items: center; gap: 8px; font-family: 'Plus Jakarta Sans', sans-serif; font-weight: 700; color: #0A2540; letter-spacing: -0.02em; }
.b4 p { font-size: 14px; line-height: 1.55; color: #425466; }

/* ==========================================================================
   SECTION 3: TOAST-STYLE INTERACTIVE CARDS (KEN BURNS VIDEO EMULATION)
   ========================================================================== */
@import url('https://fonts.googleapis.com/css2?family=Outfit:wght@400;500;600;700;800;900&display=swap');

.toast-features-section {
  padding: 100px 0 115px;
  background: linear-gradient(180deg, #FBF9F5 0%, #F5EFE6 100%);
  position: relative;
  overflow: hidden;
  border-top: 1px solid rgba(135, 96, 57, 0.12);
  border-bottom: 1px solid rgba(135, 96, 57, 0.12);
}

.toast-features-header {
  text-align: left;
  max-width: 960px;
  margin: 0 0 46px;
  display: flex;
  flex-direction: column;
  align-items: flex-start;
}

.toast-sec-title {
  font-family: Effra, sans-serif;
  font-size: clamp(2.75rem, 4.4vw, 3.75rem);
  font-weight: 400;
  letter-spacing: normal;
  line-height: 1.12;
  color: #1F130B;
  margin: 0 0 14px;
}

.toast-sec-subtitle {
  font-family: 'Outfit', 'Inter', -apple-system, BlinkMacSystemFont, sans-serif;
  font-size: clamp(16px, 1.25vw, 20px);
  color: #6E5340;
  line-height: 1.5;
  margin: 0;
  font-weight: 400;
}

/* 4-Column Grid */
.toast-cards-grid {
  display: grid;
  grid-template-columns: repeat(4, 1fr);
  gap: 22px;
  width: 100%;
}

/* Individual Toast Portrait Card — Luxury Espresso Brown */
.toast-card {
  display: flex;
  flex-direction: column;
  background: linear-gradient(180deg, #24160E 0%, #150C07 100%);
  border: 1px solid rgba(194, 120, 56, 0.28);
  border-radius: 24px;
  overflow: hidden;
  box-shadow: 0 12px 32px rgba(26, 14, 8, 0.22);
  transition: transform 0.35s cubic-bezier(0.16, 1, 0.3, 1), box-shadow 0.35s cubic-bezier(0.16, 1, 0.3, 1), border-color 0.3s ease;
  position: relative;
  text-decoration: none;
  color: inherit;
}

.toast-card:hover {
  transform: translateY(-8px);
  background: linear-gradient(180deg, #2E1B11 0%, #1A0E08 100%);
  border-color: rgba(217, 119, 6, 0.65);
  box-shadow: 0 24px 50px rgba(26, 14, 8, 0.38), 0 0 28px rgba(180, 83, 9, 0.22);
}

/* Top Media Visual Area (Video Emulation) */
.toast-card-media {
  position: relative;
  width: 100%;
  height: 260px;
  overflow: hidden;
  background: #140A05;
}

.toast-card-media img {
  width: 100%;
  height: 100%;
  object-fit: cover;
  transition: transform 0.6s cubic-bezier(0.25, 1, 0.5, 1), filter 0.4s ease;
}

.toast-card:hover .toast-card-media img {
  transform: scale(1.12);
  filter: brightness(1.06) contrast(1.05);
  animation: kenBurnsMotion 8s infinite alternate ease-in-out;
}

@keyframes kenBurnsMotion {
  0% { transform: scale(1.12) translate(0, 0); }
  50% { transform: scale(1.16) translate(-2%, -2%); }
  100% { transform: scale(1.14) translate(1.5%, -1%); }
}

/* Gradient Scrim over Image — Warm Brown */
.toast-media-scrim {
  position: absolute;
  inset: 0;
  background: linear-gradient(180deg,
    rgba(28, 16, 9, 0.2) 0%,
    rgba(22, 12, 6, 0.5) 55%,
    rgba(18, 10, 5, 0.96) 100%
  );
  pointer-events: none;
  z-index: 2;
}

/* Animated Video CRT Scanline Sweep */
.toast-video-scanline {
  position: absolute;
  top: -100%;
  left: 0;
  right: 0;
  height: 100%;
  background: linear-gradient(180deg, transparent 0%, rgba(255, 255, 255, 0.1) 50%, transparent 100%);
  pointer-events: none;
  z-index: 3;
  opacity: 0;
}
.toast-card:hover .toast-video-scanline {
  opacity: 1;
  animation: scanlineSweep 2.2s infinite linear;
}
@keyframes scanlineSweep {
  0% { top: -100%; }
  100% { top: 100%; }
}

/* Live Recording Badge — Luxury Warm Tag */
.toast-live-badge {
  position: absolute;
  top: 14px;
  left: 14px;
  z-index: 5;
  display: inline-flex;
  align-items: center;
  gap: 6px;
  background: rgba(36, 22, 14, 0.88);
  backdrop-filter: blur(10px);
  border: 1px solid rgba(217, 119, 6, 0.35);
  padding: 4px 10px;
  border-radius: 9999px;
  font-size: 10px;
  font-weight: 800;
  color: #FEF3C7;
  letter-spacing: 0.08em;
  text-transform: uppercase;
  font-family: 'Plus Jakarta Sans', sans-serif;
  transition: all 0.3s ease;
}
.toast-live-dot {
  width: 7px;
  height: 7px;
  border-radius: 50%;
  background: #EF4444;
  box-shadow: 0 0 8px #EF4444;
}
.toast-card:hover .toast-live-badge {
  background: rgba(58, 35, 21, 0.95);
  border-color: rgba(245, 158, 11, 0.7);
  color: #FFFFFF;
}
.toast-card:hover .toast-live-dot {
  background: #10B981;
  box-shadow: 0 0 10px #10B981;
  animation: pulseGreenLive 1.2s infinite;
}
@keyframes pulseGreenLive {
  0%, 100% { transform: scale(1); opacity: 1; }
  50% { transform: scale(1.3); opacity: 0.6; }
}

/* Circular Arrow Top-Right Action — Gold/Bronze Accent */
.toast-circle-arrow {
  position: absolute;
  top: 14px;
  right: 14px;
  z-index: 5;
  width: 34px;
  height: 34px;
  border-radius: 50%;
  background: rgba(255, 255, 255, 0.12);
  backdrop-filter: blur(12px);
  border: 1px solid rgba(217, 119, 6, 0.35);
  display: flex;
  align-items: center;
  justify-content: center;
  color: #FFFFFF;
  transition: all 0.25s ease;
}
.toast-circle-arrow svg {
  width: 15px;
  height: 15px;
  stroke: currentColor;
  stroke-width: 2.2;
  fill: none;
  transition: transform 0.25s ease;
}
.toast-card:hover .toast-circle-arrow {
  background: linear-gradient(135deg, #876039 0%, #B45309 100%);
  border-color: #F59E0B;
  color: #FFFFFF;
  transform: scale(1.1);
  box-shadow: 0 4px 14px rgba(180, 83, 9, 0.55);
}
.toast-card:hover .toast-circle-arrow svg {
  transform: translateX(2px);
}

/* Floating UI Bubbles in Media Window */
.toast-ui-bubble {
  position: absolute;
  bottom: 16px;
  left: 14px;
  right: 14px;
  z-index: 4;
  background: rgba(255, 255, 255, 0.98);
  color: #1F130B;
  border: 1px solid rgba(135, 96, 57, 0.22);
  border-radius: 14px;
  padding: 10px 14px;
  box-shadow: 0 10px 25px rgba(24, 13, 7, 0.3);
  font-family: 'Plus Jakarta Sans', sans-serif;
  transition: transform 0.35s cubic-bezier(0.16, 1, 0.3, 1), box-shadow 0.35s ease;
  backdrop-filter: blur(8px);
}
.toast-card:hover .toast-ui-bubble {
  transform: translateY(-4px) scale(1.02);
  box-shadow: 0 16px 32px rgba(24, 13, 7, 0.4);
}

/* Specific Bubble Variations */
.pos-bubble .bubble-head {
  display: flex;
  justify-content: space-between;
  align-items: center;
  font-size: 11px;
  font-weight: 700;
  margin-bottom: 2px;
}
.pos-bubble .bubble-tag { color: #876039; text-transform: uppercase; letter-spacing: 0.05em; }
.pos-bubble .bubble-status { color: #059669; background: #D1FAE5; padding: 2px 7px; border-radius: 6px; font-size: 9.5px; font-weight: 800; }
.pos-bubble .bubble-amount { font-size: 18px; font-weight: 800; color: #1F130B; line-height: 1.2; }
.pos-bubble .bubble-sub { font-size: 11px; color: #8C7565; }

.ai-bubble { background: linear-gradient(135deg, #FFFFFF 0%, #F8FAFC 100%); border: 1px solid rgba(217, 119, 6, 0.3); }
.ai-bubble .ai-head { display: flex; align-items: center; gap: 6px; font-size: 11px; font-weight: 800; color: #B45309; text-transform: uppercase; margin-bottom: 3px; }
.ai-bubble .ai-head svg { width: 13px; height: 13px; fill: #D97706; }
.ai-bubble .ai-text { font-size: 11.5px; line-height: 1.35; color: #1E293B; font-weight: 600; }

.sms-bubble { display: flex; align-items: center; gap: 10px; background: #FFFFFF; }
.sms-bubble .sms-icon { width: 32px; height: 32px; border-radius: 8px; background: #22C55E; color: #FFFFFF; display: flex; align-items: center; justify-content: center; flex-shrink: 0; font-size: 15px; }
.sms-bubble .sms-text-wrap { flex: 1; min-width: 0; }
.sms-bubble .sms-title { font-size: 11px; font-weight: 800; color: #1F130B; }
.sms-bubble .sms-desc { font-size: 10.5px; color: #8C7565; white-space: nowrap; overflow: hidden; text-overflow: ellipsis; }

.hardware-bubble { display: flex; align-items: center; justify-content: space-between; font-size: 11.5px; font-weight: 700; color: #1F130B; }
.hardware-bubble .dock-pill { background: #FEF3C7; color: #B45309; padding: 3px 8px; border-radius: 6px; font-size: 10px; font-weight: 800; display: inline-flex; align-items: center; gap: 4px; }

.kds-bubble { display: flex; align-items: center; justify-content: space-between; }
.kds-bubble .kds-timer { font-size: 14px; font-weight: 800; color: #DC2626; display: flex; align-items: center; gap: 4px; }
.kds-bubble .kds-badge { background: #FEE2E2; color: #DC2626; font-size: 9.5px; font-weight: 800; padding: 2px 7px; border-radius: 6px; }

.inv-bubble { padding: 8px 12px; }
.inv-bubble .inv-line { display: flex; justify-content: space-between; font-size: 10.5px; font-weight: 700; margin-bottom: 2px; }
.inv-bubble .inv-bar { height: 5px; border-radius: 4px; background: #E2E8F0; overflow: hidden; }
.inv-bubble .inv-fill { height: 100%; background: #10B981; border-radius: 4px; }
.inv-bubble .inv-fill.low { background: #F59E0B; }

.qr-bubble { display: flex; align-items: center; gap: 8px; font-size: 11px; }
.qr-bubble .qr-icon { font-size: 18px; }

.analytics-bubble { display: flex; align-items: center; justify-content: space-between; }
.analytics-bubble .an-rev { font-size: 16px; font-weight: 800; color: #1F130B; }
.analytics-bubble .an-gain { font-size: 11px; font-weight: 800; color: #059669; background: #D1FAE5; padding: 2px 6px; border-radius: 6px; }

/* Bottom Card Details — Luxury Typography */
.toast-card-body {
  padding: 22px 22px 26px;
  display: flex;
  flex-direction: column;
  flex: 1;
}

.toast-card-tag {
  font-size: 11px;
  font-weight: 800;
  letter-spacing: 0.1em;
  text-transform: uppercase;
  color: #D97706;
  margin-bottom: 8px;
  display: inline-block;
  font-family: 'Plus Jakarta Sans', sans-serif;
}

.toast-card-title {
  font-family: 'Effra', sans-serif;
  font-size: 21px;
  font-weight: 800;
  color: #FFFFFF;
  letter-spacing: -0.025em;
  margin: 0 0 8px;
  line-height: 1.25;
}

.toast-card-desc {
  font-family: 'Inter', sans-serif;
  font-size: 14px;
  color: #D4C3B7;
  line-height: 1.55;
  margin: 0;
  transition: color 0.25s ease;
}
.toast-card:hover .toast-card-desc {
  color: #FAF4EF;
}

/* Responsive adjustments */
@media (max-width: 1200px) {
  .toast-cards-grid {
    grid-template-columns: repeat(2, 1fr);
    gap: 20px;
  }
}

@media (max-width: 768px) {
  .toast-features-section {
    padding: 70px 0 85px;
  }
  .toast-features-header {
    margin-bottom: 32px;
  }
  .toast-sec-title {
    font-size: 2.35rem;
    line-height: 1.15;
  }
  .toast-cards-grid {
    grid-template-columns: 1fr;
    gap: 16px;
  }
  .toast-card-media {
    height: 220px;
  }
}

/* ==========================================================================
   HOW IT WORKS — INTERACTIVE AUTO-RUNNING WORKFLOW (GENI MENU CONTENT)
   ========================================================================== */
.hiw-section {
  padding: 95px 0 115px;
  background: #FFFFFF !important;
  background-color: #FFFFFF !important;
  position: relative;
  overflow: hidden;
  font-family: 'Outfit', sans-serif;
}

.hiw-header {
  max-width: 1080px;
  margin: 0 auto 48px;
  text-align: center;
}

.hiw-main-title {
  font-family: Effra, sans-serif;
  font-size: clamp(2.75rem, 4.4vw, 3.75rem);
  font-weight: 400;
  letter-spacing: normal;
  line-height: 1.12;
  margin: 0;
  min-height: 1.25em;
}

/* Luxury Brown & Black Shade Gradient Text */
.hiw-gradient-title {
  background: linear-gradient(
    120deg,
    #0A0A0A 0%,     /* Pure Carbon Black */
    #1C1917 16%,    /* Deep Warm Black */
    #78350F 38%,    /* Deep Espresso Brown */
    #92400E 54%,    /* Rich Roasted Brown */
    #B45309 70%,    /* Warm Amber Brown */
    #78350F 84%,    /* Dark Chocolate Brown */
    #111827 100%    /* Midnight Black */
  );
  background-size: 240% 100%;
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
  animation: hiwGradientFlow 5s ease-in-out infinite alternate;
  display: inline;
  filter: drop-shadow(0 2px 8px rgba(28, 25, 23, 0.12));
}

@keyframes hiwGradientFlow {
  0% {
    background-position: 0% 50%;
  }
  100% {
    background-position: 100% 50%;
  }
}

/* Typing Cursor (Brown & Black Shade) */
.hiw-typing-cursor {
  display: inline-block;
  width: 3.5px;
  height: 0.88em;
  background: linear-gradient(180deg, #92400E, #1C1917);
  margin-left: 4px;
  vertical-align: -0.05em;
  border-radius: 2px;
  animation: hiwBlinkCursor 0.85s infinite;
}

@keyframes hiwBlinkCursor {
  0%, 45% { opacity: 1; }
  55%, 100% { opacity: 0; }
}

/* 2-Column Responsive Layout */
.hiw-layout-grid {
  display: grid;
  grid-template-columns: 1.12fr 0.88fr;
  gap: 52px;
  align-items: center;
}

/* Left Column: Interactive UI Window Card */
.hiw-window-card {
  background: #FFFFFF;
  border-radius: 24px;
  border: 1.5px solid rgba(226, 232, 240, 0.95);
  box-shadow: 0 24px 55px -12px rgba(120, 53, 15, 0.16), 0 12px 28px -6px rgba(0, 0, 0, 0.08), 0 0 0 1px rgba(120, 53, 15, 0.03);
  overflow: hidden;
  position: relative;
  transition: transform 0.3s ease, box-shadow 0.3s ease;
}

.hiw-window-card:hover {
  box-shadow: 0 32px 70px -14px rgba(120, 53, 15, 0.22), 0 16px 36px -8px rgba(0, 0, 0, 0.1);
  transform: translateY(-3px);
}

/* Top Accent Line (Warm Brown Shade) */
.hiw-window-card::before {
  content: '';
  position: absolute;
  top: 0;
  left: 0;
  right: 0;
  height: 3.5px;
  background: linear-gradient(90deg, #78350F 0%, #92400E 35%, #B45309 70%, #D97706 100%);
  z-index: 10;
}

/* Window Folder Tabs Header (Real Folder Tabs - Strictly No Scrolling) */
.hiw-tabs-row {
  display: grid;
  grid-template-columns: repeat(5, 1fr);
  background: #F4EFEA;
  padding: 10px 12px 0;
  border-bottom: 2px solid #3B82F6;
  gap: 6px;
  overflow: hidden; /* No scrolling */
  position: relative;
  z-index: 10;
}

.hiw-tab-btn {
  background: #E8E2DC;
  border: 1px solid #D8D0C7;
  border-bottom: none;
  border-radius: 10px 10px 0 0;
  padding: 9px 4px 7px;
  font-family: 'Outfit', sans-serif;
  font-size: 13px;
  font-weight: 600;
  color: #64748B;
  cursor: pointer;
  display: flex;
  align-items: center;
  justify-content: center;
  gap: 6px;
  transition: all 0.2s ease;
  white-space: nowrap;
  position: relative;
  bottom: -2px;
}

.hiw-tab-btn svg {
  width: 14px;
  height: 14px;
  flex-shrink: 0;
  opacity: 0.7;
  transition: opacity 0.2s ease, color 0.2s ease;
}

.hiw-tab-btn:hover {
  background: #EFE9E3;
  color: #1E293B;
}

.hiw-tab-btn:hover svg {
  opacity: 1;
}

/* Active Folder Tab - Exactly Matching Reference Image (Blue outline, White body) */
.hiw-tab-btn.active {
  background: #FFFFFF !important;
  color: #0F172A !important;
  font-weight: 700;
  border: 1.5px solid #3B82F6 !important;
  border-bottom: 2.5px solid #FFFFFF !important;
  box-shadow: 0 -3px 12px rgba(59, 130, 246, 0.08);
  position: relative;
  bottom: -2px;
  z-index: 25;
  padding-top: 10px;
}

.hiw-tab-btn.active svg {
  opacity: 1;
  color: #3B82F6;
}

@media (max-width: 580px) {
  .hiw-tabs-row {
    padding: 6px 6px 0;
    gap: 4px;
  }
  .hiw-tab-btn {
    font-size: 11px;
    padding: 7px 2px 5px;
    gap: 3px;
    flex-direction: column;
  }
  .hiw-tab-btn svg {
    width: 13px;
    height: 13px;
  }
}

/* Window Subbar */
.hiw-window-subbar {
  display: flex;
  align-items: center;
  justify-content: space-between;
  padding: 13px 22px;
  background: #FFFFFF;
  border-bottom: 1px solid #F5EFEB;
}

.hiw-subbar-title {
  display: inline-flex;
  align-items: center;
  gap: 8px;
  font-size: 13px;
  font-weight: 700;
  color: #78350F;
  font-family: 'Plus Jakarta Sans', sans-serif;
  text-transform: uppercase;
  letter-spacing: 0.04em;
}

.hiw-subbar-status {
  display: inline-flex;
  align-items: center;
  gap: 6px;
  font-size: 11.5px;
  font-weight: 700;
  color: #92400E;
  background: #FEF3C7;
  border: 1px solid #FDE68A;
  padding: 3.5px 10px;
  border-radius: 9999px;
}

.hiw-subbar-status::before {
  content: '';
  width: 6px;
  height: 6px;
  background: #B45309;
  border-radius: 50%;
  animation: pulseBrownLive 1.8s infinite;
}

@keyframes pulseBrownLive {
  0%, 100% { opacity: 1; transform: scale(1); }
  50% { opacity: 0.35; transform: scale(1.35); }
}

/* Window Body (Increased Height for High Visual Impact) */
.hiw-window-body {
  padding: 22px 24px 26px;
  background: #FFFFFF;
  min-height: 510px;
  transition: opacity 0.2s ease;
}

/* Featured Header Cover Image (Big Visual Height) */
.mock-cover-img {
  width: 100%;
  height: 145px;
  object-fit: cover;
  border-radius: 12px;
  display: block;
  margin-bottom: 14px;
  box-shadow: 0 4px 14px rgba(120, 53, 15, 0.07);
}

/* Step 1: Mobile QR Order Mockup */
.mock-s1-header {
  display: flex;
  justify-content: space-between;
  align-items: center;
  margin-bottom: 12px;
  padding-bottom: 10px;
  border-bottom: 1px solid #F5EFEB;
}
.mock-s1-brand { font-size: 14.5px; font-weight: 800; color: #78350F; }
.mock-s1-table { background: #FEF3C7; color: #92400E; font-size: 11px; font-weight: 800; padding: 4px 10px; border-radius: 99px; }

.mock-s1-items { display: flex; flex-direction: column; gap: 9px; margin-bottom: 15px; }
.mock-s1-row { display: flex; align-items: center; justify-content: space-between; background: #FCFAF7; border: 1px solid #EFE8DE; padding: 10px 13px; border-radius: 12px; }
.mock-s1-left { display: flex; align-items: center; gap: 12px; }
.mock-s1-thumb { width: 52px; height: 52px; border-radius: 10px; object-fit: cover; flex-shrink: 0; box-shadow: 0 2px 6px rgba(0,0,0,0.06); }
.mock-s1-name { font-size: 13.5px; font-weight: 700; color: #292524; }
.mock-s1-sub { font-size: 11.5px; color: #78716C; }
.mock-s1-price { font-size: 14px; font-weight: 800; color: #92400E; }

.mock-s1-bottom {
  display: flex;
  align-items: center;
  justify-content: space-between;
  background: #78350F;
  color: #FFFFFF;
  padding: 11px 16px;
  border-radius: 12px;
  font-size: 12.5px;
  font-weight: 700;
}
.mock-s1-pill { background: #B45309; color: #FFFFFF; padding: 3px 9px; border-radius: 6px; font-size: 11px; }

/* Step 2: KDS Kitchen Live Orders Mockup */
.mock-s2-header { display: flex; justify-content: space-between; align-items: center; margin-bottom: 12px; font-size: 12.5px; font-weight: 800; color: #78350F; }
.mock-s2-cards { display: flex; flex-direction: column; gap: 9px; margin-bottom: 14px; }
.mock-s2-card { background: #FFFFFF; border: 1px solid #EFE8DE; border-left: 4px solid #92400E; border-radius: 10px; padding: 10px 13px; display: flex; align-items: center; justify-content: space-between; gap: 12px; box-shadow: 0 1px 4px rgba(0,0,0,0.03); }
.mock-s2-card.new { border-left-color: #D97706; }
.mock-s2-card.ready { border-left-color: #059669; }
.mock-s2-info b { font-size: 12.5px; color: #78350F; font-weight: 800; display: block; margin-bottom: 2px; }
.mock-s2-info span { font-size: 11.5px; color: #78716C; display: block; }
.mock-s2-badge { font-size: 10px; font-weight: 800; padding: 3px 8px; border-radius: 6px; text-transform: uppercase; white-space: nowrap; }
.mock-s2-badge.prep { background: #FEF3C7; color: #92400E; }
.mock-s2-badge.new { background: #FFFBEB; color: #D97706; border: 1px solid #FDE68A; }
.mock-s2-badge.ready { background: #DCFCE7; color: #16A34A; }

/* Step 3: KOT Tickets Mockup */
.mock-s3-grid { display: grid; grid-template-columns: 1fr 1fr; gap: 12px; margin-bottom: 14px; }
.mock-s3-ticket { background: #FCFAF7; border: 1px solid #EFE8DE; border-radius: 12px; padding: 12px; display: flex; flex-direction: column; }
.mock-s3-top { display: flex; justify-content: space-between; align-items: center; font-size: 12px; font-weight: 800; color: #78350F; padding-bottom: 6px; border-bottom: 1px dashed #D6D3D1; margin-bottom: 8px; }
.mock-s3-timer { font-size: 11px; font-weight: 800; color: #92400E; background: #FEF3C7; padding: 2px 7px; border-radius: 6px; }
.mock-s3-timer.ready { color: #15803D; background: #DCFCE7; }
.mock-s3-item { font-size: 12px; color: #292524; font-weight: 600; margin-bottom: 4px; }
.mock-s3-note { font-size: 11px; color: #78716C; font-style: italic; margin-top: auto; padding-top: 6px; }

/* Step 4: GST Billing Mockup */
.mock-s4-bill { background: #FCFAF7; border: 1px solid #EFE8DE; border-radius: 14px; padding: 14px 18px; margin-bottom: 14px; }
.mock-s4-head { display: flex; justify-content: space-between; align-items: center; font-size: 13px; font-weight: 800; color: #78350F; padding-bottom: 8px; border-bottom: 1px solid #EFE8DE; margin-bottom: 10px; }
.mock-s4-line { display: flex; justify-content: space-between; font-size: 12.5px; color: #57534E; margin-bottom: 5px; }
.mock-s4-line.total { font-weight: 800; font-size: 15.5px; color: #92400E; border-top: 1px dashed #D6D3D1; padding-top: 8px; margin-top: 8px; }
.mock-s4-payrow { display: flex; gap: 8px; margin-top: 10px; }
.mock-s4-paybtn { flex: 1; text-align: center; font-size: 11.5px; font-weight: 700; padding: 7px 0; border-radius: 8px; background: #FFFFFF; color: #78350F; border: 1px solid #D6D3D1; }
.mock-s4-paybtn.active { background: #92400E; color: #FFFFFF; border-color: #92400E; }

/* Step 5: Sales Analytics Mockup */
.mock-s5-card { background: #FCFAF7; border: 1px solid #EFE8DE; border-radius: 14px; padding: 16px 18px; margin-bottom: 14px; }
.mock-s5-top { display: flex; justify-content: space-between; align-items: flex-start; margin-bottom: 12px; }
.mock-s5-metric small { font-size: 11px; font-weight: 700; color: #78716C; text-transform: uppercase; display: block; margin-bottom: 2px; }
.mock-s5-metric b { font-size: 25px; font-weight: 800; color: #78350F; }
.mock-s5-gain { font-size: 12px; font-weight: 800; color: #92400E; background: #FEF3C7; border: 1px solid #FDE68A; padding: 3px 8px; border-radius: 6px; }
.mock-s5-bars { display: flex; align-items: flex-end; gap: 8px; height: 85px; margin: 12px 0 6px; }
.mock-s5-bar { flex: 1; background: #E7E5E4; border-radius: 4px 4px 0 0; }
.mock-s5-bar.peak { background: #92400E; }
.mock-s5-labels { display: flex; justify-content: space-between; font-size: 10px; color: #A8A29E; font-weight: 600; padding-top: 4px; border-top: 1px solid #EFE8DE; }

/* Right Column: Running Points Stepper */
.hiw-content-col {
  display: flex;
  flex-direction: column;
}

.hiw-side-title {
  font-family: Effra, sans-serif;
  font-size: 2.5rem;
  font-weight: 400;
  letter-spacing: normal;
  line-height: 1;
  color: #1C1917;
  margin: 0 0 12px;
}

.hiw-side-desc {
  font-family: 'Outfit', 'Inter', sans-serif;
  font-size: clamp(15.5px, 1.2vw, 17px);
  color: #57534E;
  line-height: 1.55;
  margin: 0 0 28px;
}

/* Stepper List Container */
.hiw-steps-list {
  display: flex;
  flex-direction: column;
  gap: 14px;
  margin-bottom: 0;
}

/* Individual Stepper Item (Card Architecture with Enhanced Shadow) */
.hiw-step-item {
  display: flex;
  align-items: flex-start;
  gap: 16px;
  padding: 14px 18px;
  border-radius: 16px;
  border: 1px solid #EFE8DE;
  cursor: pointer;
  position: relative;
  overflow: hidden;
  transition: all 0.25s ease;
  background: #FFFFFF;
  box-shadow: 0 4px 14px rgba(120, 53, 15, 0.05), 0 1px 3px rgba(0, 0, 0, 0.03);
}

.hiw-step-item:hover {
  background: #FFFBEB;
  border-color: #FDE68A;
  transform: translateY(-2px);
  box-shadow: 0 8px 22px -4px rgba(120, 53, 15, 0.12);
}

.hiw-step-item.active {
  background: #FFFBEB;
  border-color: #FDE68A;
  transform: translateY(-2px);
  box-shadow: 0 12px 28px -4px rgba(146, 64, 14, 0.16), 0 2px 6px rgba(0, 0, 0, 0.04);
}

/* Running Progress Line at bottom of active step (Brown Shade) */
.hiw-step-item .hiw-step-progress-bar {
  position: absolute;
  bottom: 0;
  left: 0;
  height: 3.5px;
  width: 0%;
  background: linear-gradient(90deg, #92400E, #B45309, #D97706);
  border-radius: 0 2px 2px 0;
}

@keyframes hiwProgressRun {
  from { width: 0%; }
  to { width: 100%; }
}

.hiw-step-circle {
  width: 36px;
  height: 36px;
  border-radius: 50%;
  display: flex;
  align-items: center;
  justify-content: center;
  flex-shrink: 0;
  font-family: 'Outfit', sans-serif;
  font-weight: 700;
  font-size: 13.5px;
  background: #FFFFFF;
  border: 1.5px solid #D6D3D1;
  color: #78716C;
  transition: all 0.25s ease;
  margin-top: 1px;
}

.hiw-step-item.active .hiw-step-circle {
  background: #92400E;
  color: #FFFFFF;
  border-color: #92400E;
  box-shadow: 0 3px 10px rgba(146, 64, 14, 0.35);
}

.hiw-step-content {
  flex: 1;
  min-width: 0;
}

.hiw-step-title {
  font-family: 'Effra', sans-serif;
  font-size: 16.5px;
  font-weight: 700;
  color: #1C1917;
  margin-bottom: 2px;
  line-height: 1.3;
  transition: color 0.2s ease;
}

.hiw-step-item.active .hiw-step-title {
  color: #92400E;
}

.hiw-step-desc {
  font-family: 'Inter', sans-serif;
  font-size: 13px;
  color: #78716C;
  line-height: 1.45;
  margin: 0;
}

@media (max-width: 992px) {
  .hiw-layout-grid {
    grid-template-columns: 1fr;
    gap: 40px;
  }
  .hiw-window-card {
    max-width: 600px;
    margin: 0 auto;
    width: 100%;
  }
}

@media (max-width: 768px) {
  .hiw-main-title {
    font-size: 2.35rem;
    line-height: 1.15;
  }
}

@media (max-width: 480px) {
  .hiw-main-title {
    font-size: 1.95rem;
    line-height: 1.2;
  }
}

/* ==========================================================================
   CUSTOMER EXPERIENCE — TOAST-STYLE PINNED SCROLL SHOWCASE
   ========================================================================== */
.cx-showcase-section {
  padding: 0;
  background: #FFFFFF;
  position: relative;
  overflow: visible;
  font-family: 'Outfit', 'Plus Jakarta Sans', sans-serif;
}

/* Scroll Track for Pinned Scrolling */
.cx-scroll-track {
  position: relative;
  height: 280vh; /* Smooth responsive distance for 8 points */
  width: 100%;
}

/* Sticky Stage that pins statically in view below the navbar */
.cx-sticky-wrapper {
  position: -webkit-sticky;
  position: sticky;
  top: 68px;
  height: calc(100vh - 68px);
  max-height: calc(100vh - 68px);
  display: flex;
  align-items: center;
  justify-content: center;
  z-index: 20;
  box-sizing: border-box;
  padding: 10px 20px 14px;
}

.cx-sticky-wrapper .cx-container-box {
  width: 100%;
  max-width: 1280px;
  margin: 0 auto;
}

/* Outer Card Container with Luxury Brown Shadow & Calibrated Viewport Fit */
.cx-outer-card {
  font-family: 'Outfit', 'Plus Jakarta Sans', sans-serif;
  background: #FAF8F5;
  border: 1.5px solid rgba(217, 119, 6, 0.22);
  border-radius: clamp(22px, 2.2vw, 32px);
  padding: clamp(20px, 2.6vh, 30px) clamp(26px, 3vw, 44px);
  box-shadow: 
    0 24px 60px -15px rgba(146, 64, 14, 0.26),
    0 12px 26px -6px rgba(180, 83, 9, 0.17),
    0 0 0 1px rgba(217, 119, 6, 0.14),
    inset 0 1px 0 rgba(255, 255, 255, 0.95);
  position: relative;
  overflow: hidden;
  max-height: calc(100vh - 76px);
  width: 100%;
  box-sizing: border-box;
}

/* Grid layout: Left content & list, Right visual card */
.cx-layout-grid {
  display: grid;
  grid-template-columns: 0.94fr 1.06fr;
  gap: clamp(20px, 2.4vw, 36px);
  align-items: center;
}

/* Left column */
.cx-left-col {
  display: flex;
  flex-direction: column;
  justify-content: center;
  min-width: 0;
}

.cx-header {
  margin-bottom: clamp(10px, 1.4vh, 16px);
}

.cx-title {
  font-family: Effra, sans-serif;
  font-size: clamp(2.75rem, 4.2vw, 3.6rem);
  font-weight: 400 !important;
  letter-spacing: normal;
  line-height: 1.12;
  margin: 0 0 8px;
}

.cx-title .title-grad {
  font-family: Effra, sans-serif;
  font-weight: 400 !important;
  letter-spacing: normal;
  background: linear-gradient(135deg, #1C1917 0%, #292524 50%, #78350F 100%);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
}

/* Easier & Faster - Effra font with normal weight (not bold) and luxury amber gradient */
.cx-title .sf {
  font-family: Effra, sans-serif;
  font-style: normal;
  font-weight: 400 !important;
  letter-spacing: normal;
  background: linear-gradient(135deg, #92400E 0%, #B45309 50%, #D97706 100%);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
}

.cx-subtitle {
  font-family: 'Outfit', 'Plus Jakarta Sans', sans-serif;
  font-size: clamp(14px, 1.1vw, 16px);
  font-weight: 400;
  color: #78716C;
  line-height: 1.35;
  margin: 0;
  max-width: 540px;
}

/* Toast-style Vertical Feature List */
.cx-feature-list {
  list-style: none;
  padding: 0;
  margin: 0 0 clamp(12px, 1.6vh, 18px);
  display: flex;
  flex-direction: column;
  gap: clamp(3px, 0.45vh, 6px);
}

.cx-feature-item {
  display: flex;
  align-items: center;
  justify-content: space-between;
  padding: clamp(7px, 0.8vh, 9.5px) 14px;
  border-radius: 9px;
  cursor: pointer;
  transition: all 0.2s cubic-bezier(0.4, 0, 0.2, 1);
  position: relative;
  user-select: none;
}

.cx-feature-item-text {
  font-family: 'Outfit', 'Plus Jakarta Sans', sans-serif;
  font-size: clamp(15px, 1.18vw, 17.5px);
  font-weight: 500;
  letter-spacing: -0.015em;
  color: #78716C;
  transition: all 0.2s ease;
  line-height: 1.25;
  white-space: nowrap;
  overflow: hidden;
  text-overflow: ellipsis;
}

/* Hover on inactive item */
.cx-feature-item:not(.active):hover {
  background: rgba(245, 158, 11, 0.05);
}
.cx-feature-item:not(.active):hover .cx-feature-item-text {
  color: #92400E;
  transform: translateX(3px);
}

/* Active item matching Toast reference with clear amber highlight */
.cx-feature-item.active {
  background: rgba(245, 158, 11, 0.09);
  border-left: 3.5px solid #D97706;
  padding-left: 11px;
}
.cx-feature-item.active .cx-feature-item-text {
  color: #1C1917;
  font-weight: 700;
  font-size: clamp(15.5px, 1.22vw, 18.2px);
  transform: translateX(3px);
}

/* Circular Arrow Icon with Luxury Amber-Brown Style */
.cx-circle-arrow {
  width: 26px;
  height: 26px;
  border-radius: 50%;
  border: 1.8px solid #D97706;
  display: inline-flex;
  align-items: center;
  justify-content: center;
  color: #D97706;
  background: #FFFBEB;
  box-shadow: 0 2px 8px rgba(217, 119, 6, 0.28);
  flex-shrink: 0;
  margin-left: 10px;
  opacity: 0;
  transform: scale(0.6) translateX(-4px);
  transition: all 0.22s cubic-bezier(0.34, 1.56, 0.64, 1);
}

.cx-feature-item.active .cx-circle-arrow {
  opacity: 1;
  transform: scale(1) translateX(0);
}

.cx-circle-arrow svg {
  width: 13px;
  height: 13px;
  stroke-width: 2.5;
}

/* Left CTA */
.cx-cta-wrap {
  margin-top: 5px;
}
.cx-cta-btn {
  font-family: 'Outfit', 'Plus Jakarta Sans', sans-serif;
  display: inline-flex;
  align-items: center;
  gap: 8px;
  padding: 10px 24px;
  font-size: 14.5px;
  font-weight: 700;
  border-radius: 99px;
  background: linear-gradient(135deg, #78350F 0%, #92400E 50%, #B45309 100%);
  color: #FFFFFF !important;
  text-decoration: none;
  box-shadow: 0 6px 18px -4px rgba(146, 64, 14, 0.42);
  transition: all 0.22s ease;
}
.cx-cta-btn:hover {
  transform: translateY(-1.5px);
  box-shadow: 0 10px 22px -4px rgba(146, 64, 14, 0.52);
  color: #FFFFFF !important;
}

/* Right Visual Card with Balanced Height to Fit Viewport */
.cx-visual-card {
  border-radius: 20px;
  overflow: hidden;
  position: relative;
  width: 100%;
  height: 100%;
  min-height: clamp(370px, 48vh, 460px);
  max-height: clamp(390px, 52vh, 480px);
  background: #0A0A0A;
  box-shadow: 
    0 22px 52px -10px rgba(120, 53, 15, 0.42),
    0 9px 22px -5px rgba(180, 83, 9, 0.26),
    0 0 0 1.5px rgba(217, 119, 6, 0.22);
  display: flex;
  flex-direction: column;
  justify-content: flex-end;
}

.cx-visual-img {
  position: absolute;
  inset: 0;
  width: 100%;
  height: 100%;
  object-fit: cover;
  object-position: center;
  display: block;
  border-radius: 20px;
  transition: opacity 0.3s ease, transform 0.4s ease;
}

.cx-visual-card:hover .cx-visual-img {
  transform: scale(1.02);
}

/* Gradient overlay for bottom caption */
.cx-visual-overlay {
  position: absolute;
  inset: 0;
  background: linear-gradient(to top, rgba(0, 0, 0, 0.88) 0%, rgba(0, 0, 0, 0.3) 36%, rgba(0, 0, 0, 0) 68%);
  pointer-events: none;
  z-index: 1;
}

/* Bottom centered caption */
.cx-bottom-caption {
  position: relative;
  z-index: 2;
  color: #FFFFFF;
  font-family: 'Outfit', 'Plus Jakarta Sans', sans-serif;
  font-size: clamp(13px, 1vw, 15px);
  font-weight: 600;
  text-align: center;
  padding: 12px 18px 16px;
  letter-spacing: 0.15px;
  line-height: 1.35;
  text-shadow: 0 2px 8px rgba(0, 0, 0, 0.7);
  transition: opacity 0.2s ease, transform 0.2s ease;
}

/* Live pill badge in top right of visual card */
.cx-live-badge {
  position: absolute;
  top: 14px;
  right: 14px;
  z-index: 2;
  display: inline-flex;
  align-items: center;
  gap: 6px;
  background: rgba(15, 23, 42, 0.78);
  backdrop-filter: blur(8px);
  -webkit-backdrop-filter: blur(8px);
  color: #F8FAFC;
  font-size: 11px;
  font-weight: 600;
  padding: 4px 11px;
  border-radius: 99px;
  border: 1px solid rgba(255, 255, 255, 0.18);
}

.cx-pulse-dot {
  width: 5.5px;
  height: 5.5px;
  border-radius: 50%;
  background: #10B981;
  box-shadow: 0 0 0 0 rgba(16, 185, 129, 0.7);
  animation: cxPulse 2s infinite;
}

@keyframes cxPulse {
  0% { box-shadow: 0 0 0 0 rgba(16, 185, 129, 0.7); }
  70% { box-shadow: 0 0 0 6px rgba(16, 185, 129, 0); }
  100% { box-shadow: 0 0 0 0 rgba(16, 185, 129, 0); }
}

/* Responsive */
@media (max-width: 992px) {
  .cx-scroll-track {
    height: auto !important;
  }
  .cx-sticky-wrapper {
    position: relative !important;
    top: 0 !important;
    height: auto !important;
    min-height: auto !important;
    max-height: none !important;
    padding: 30px 16px 50px;
  }
  .cx-outer-card {
    padding: 20px 16px;
    border-radius: 20px;
    max-height: none !important;
  }
  .cx-layout-grid {
    grid-template-columns: 1fr;
    gap: 20px;
  }
  .cx-visual-card {
    height: 340px;
    min-height: 340px;
    max-height: 360px;
  }
  .cx-title {
    font-size: clamp(1.95rem, 4vw, 2.35rem);
    line-height: 1.15;
  }
  .cx-feature-item-text {
    font-size: 14px;
    white-space: normal;
  }
}

@media (max-width: 640px) {
  .cx-outer-card {
    padding: 16px 12px;
    border-radius: 16px;
  }
  .cx-feature-item {
    padding: 5px 6px;
  }
  .cx-feature-item-text {
    font-size: 13px;
  }
  .cx-circle-arrow {
    width: 20px;
    height: 20px;
  }
  .cx-visual-card {
    height: 280px;
    min-height: 280px;
  }
  .cx-bottom-caption {
    font-size: 11.5px;
    padding: 7px 10px 9px;
  }
}

/* ==========================================================================
/* ==========================================================================
   YOUR TEAM — MODERN BENTO SHOWCASE & INVENTORY / OPERATIONS SECTION
   ========================================================================== */
.team-section {
  padding: 85px 0 100px;
  position: relative;
  overflow: hidden;
  background: #FFFFFF;
  font-family: 'Outfit', 'Plus Jakarta Sans', sans-serif;
}

.team-container {
  max-width: 1240px;
  margin: 0 auto;
  padding: 0 24px;
}

.team-header {
  max-width: 960px;
  margin: 0 auto 40px;
  text-align: center;
}

.team-title {
  font-family: Effra, sans-serif;
  font-size: clamp(2.75rem, 4.4vw, 3.75rem);
  font-weight: 400 !important;
  letter-spacing: normal;
  line-height: 1.12;
  color: #0F172A;
  margin: 0 0 12px;
}

/* Bento Media Grid */
.team-bento-grid {
  display: grid;
  grid-template-columns: 1.58fr 1fr;
  gap: 24px;
  margin-bottom: 48px;
  align-items: stretch;
}

/* Left Large Hero Card */
.team-bento-hero {
  position: relative;
  border-radius: 20px;
  overflow: hidden;
  min-height: 440px;
  background: #0F172A;
  box-shadow: 0 18px 45px -10px rgba(15, 23, 42, 0.1);
  border: 2px solid transparent;
}

.team-bento-hero::before {
  content: '';
  position: absolute;
  inset: 0;
  border-radius: 20px;
  padding: 2.5px;
  background: linear-gradient(135deg, #EA580C 0%, #F97316 28%, transparent 60%);
  -webkit-mask: linear-gradient(#fff 0 0) content-box, linear-gradient(#fff 0 0);
  -webkit-mask-composite: xor;
  mask-composite: exclude;
  pointer-events: none;
  z-index: 2;
}

.team-hero-img {
  width: 100%;
  height: 100%;
  object-fit: cover;
  object-position: center 25%;
  display: block;
  transition: transform 0.4s cubic-bezier(0.4, 0, 0.2, 1);
}

.team-bento-hero:hover .team-hero-img {
  transform: scale(1.02);
}

/* Right Stacked Column */
.team-bento-stack {
  display: flex;
  flex-direction: column;
  gap: 20px;
  min-width: 0;
}

/* Top Status Card */
.team-status-card {
  background: #FFFFFF;
  border: 1px solid #E2E8F0;
  border-radius: 16px;
  padding: 22px 24px;
  box-shadow: 0 8px 24px -6px rgba(15, 23, 42, 0.05);
  display: flex;
  flex-direction: column;
  justify-content: center;
}

.team-status-row {
  display: flex;
  flex-direction: column;
}

.team-status-head {
  display: flex;
  align-items: center;
  justify-content: space-between;
  margin-bottom: 4px;
}

.team-status-title {
  font-family: 'Effra', sans-serif;
  font-size: 17px;
  font-weight: 700;
  color: #1E40AF;
  letter-spacing: -0.01em;
}

.team-status-badge {
  font-family: 'Outfit', 'Plus Jakarta Sans', sans-serif;
  font-size: 11px;
  font-weight: 700;
  letter-spacing: 0.06em;
  padding: 3.5px 9px;
  border-radius: 6px;
  text-transform: uppercase;
}

.team-status-badge.in-stock {
  background: #DCFCE7;
  color: #15803D;
}

.team-status-badge.low-stock {
  background: #FEF3C7;
  color: #B45309;
}

.team-status-badge.out-stock {
  background: #FEE2E2;
  color: #B91C1C;
}

.team-status-items {
  font-size: 14px;
  font-weight: 500;
  color: #64748B;
  margin-bottom: 8px;
}

.team-status-meta {
  font-size: 13px;
  color: #64748B;
}

.team-status-divider {
  height: 1px;
  background: #F1F5F9;
  margin: 16px 0;
}

/* Bottom Sub Photo Card */
.team-bento-sub {
  position: relative;
  border-radius: 20px;
  overflow: hidden;
  height: 230px;
  flex: 1;
  background: #0F172A;
  box-shadow: 0 14px 32px -8px rgba(15, 23, 42, 0.08);
}

.team-bento-sub::before {
  content: '';
  position: absolute;
  inset: 0;
  border-radius: 20px;
  padding: 2.5px;
  background: linear-gradient(315deg, #EA580C 0%, #F97316 28%, transparent 60%);
  -webkit-mask: linear-gradient(#fff 0 0) content-box, linear-gradient(#fff 0 0);
  -webkit-mask-composite: xor;
  mask-composite: exclude;
  pointer-events: none;
  z-index: 2;
}

.team-sub-img {
  width: 100%;
  height: 100%;
  object-fit: cover;
  object-position: center;
  display: block;
  transition: transform 0.4s cubic-bezier(0.4, 0, 0.2, 1);
}

.team-bento-sub:hover .team-sub-img {
  transform: scale(1.03);
}

/* Bottom 3-Column Features Row */
.team-features-row {
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  gap: clamp(24px, 3.2vw, 48px);
}

.team-feature-col {
  display: flex;
  flex-direction: column;
}

.team-feature-icon {
  margin-bottom: 14px;
  display: inline-flex;
}

.team-feature-title {
  font-family: 'Effra', sans-serif;
  font-size: clamp(18px, 1.4vw, 21px);
  font-weight: 700;
  color: #0F172A;
  line-height: 1.3;
  margin: 0 0 10px;
  letter-spacing: -0.015em;
}

.team-feature-desc {
  font-family: 'Outfit', 'Plus Jakarta Sans', sans-serif;
  font-size: clamp(13.5px, 0.95vw, 15px);
  color: #64748B;
  line-height: 1.55;
  margin: 0;
}

/* Responsive */
@media (max-width: 992px) {
  .team-section { padding: 60px 0 75px; }
  .team-bento-grid {
    grid-template-columns: 1fr;
    gap: 20px;
  }
  .team-bento-hero {
    min-height: 340px;
    height: 340px;
  }
  .team-bento-sub {
    height: 240px;
  }
  .team-features-row {
    grid-template-columns: repeat(2, 1fr);
    gap: 28px;
  }
}

@media (max-width: 640px) {
  .team-section { padding: 45px 0 60px; }
  .team-bento-hero {
    min-height: 260px;
    height: 260px;
  }
  .team-features-row {
    grid-template-columns: 1fr;
    gap: 24px;
  }
}

@media (max-width: 768px) {
  .team-title {
    font-size: 2.35rem;
    line-height: 1.15;
  }
}

@media (max-width: 480px) {
  .team-title {
    font-size: 1.95rem;
    line-height: 1.2;
  }
}

/* Solutions International Toast-Style Split Header */
.sol-header-split {
  display: flex;
  align-items: flex-end;
  justify-content: space-between;
  gap: 32px;
  margin-bottom: 40px;
}

.sol-header-left {
  max-width: 860px;
}

.sol-split-title {
  font-family: Effra, sans-serif;
  font-size: clamp(2.75rem, 4.4vw, 3.75rem);
  font-weight: 400 !important;
  letter-spacing: normal;
  line-height: 1.12;
  color: #0F172A;
  margin: 0 0 12px;
}

.sol-split-title .sf {
  font-family: Effra, sans-serif !important;
  font-style: normal !important;
  font-weight: 400 !important;
  letter-spacing: normal !important;
  background: linear-gradient(135deg, #92400E 0%, #B45309 50%, #D97706 100%);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
}

.sol-split-desc {
  font-family: 'Outfit', 'Plus Jakarta Sans', sans-serif;
  font-size: clamp(15px, 1.05vw, 17px);
  color: #64748B;
  line-height: 1.55;
  margin: 0;
}

.sol-header-right {
  flex-shrink: 0;
}

.sol-split-btn {
  display: inline-flex;
  align-items: center;
  gap: 8px;
  background: linear-gradient(135deg, #EA580C 0%, #F97316 100%);
  color: #FFFFFF !important;
  font-family: 'Outfit', 'Plus Jakarta Sans', sans-serif;
  font-size: 14.5px;
  font-weight: 700;
  padding: 12px 24px;
  border-radius: 9999px;
  box-shadow: 0 4px 14px rgba(234, 88, 12, 0.25);
  transition: all 0.25s ease;
  text-decoration: none;
  white-space: nowrap;
}

.sol-split-btn:hover {
  transform: translateY(-2px);
  box-shadow: 0 6px 20px rgba(234, 88, 12, 0.38);
  background: linear-gradient(135deg, #C2410C 0%, #EA580C 100%);
  color: #FFFFFF !important;
}

.sol-split-btn svg {
  transition: transform 0.25s ease;
}

.sol-split-btn:hover svg {
  transform: translateX(3px);
}

@media (max-width: 768px) {
  .sol-header-split {
    flex-direction: column;
    align-items: flex-start;
    gap: 16px;
    margin-bottom: 28px;
  }
  .sol-split-title {
    font-size: 2.35rem;
    line-height: 1.15;
  }
}

@media (max-width: 480px) {
  .sol-split-title {
    font-size: 1.95rem;
    line-height: 1.2;
  }
}

/* Solutions Carousel */
.sol-carousel-wrap {
  width: 100vw;
  position: relative;
  left: 50%;
  right: 50%;
  margin-left: -50vw;
  margin-right: -50vw;
  overflow: hidden;
  padding: 16px 0 24px;
  mask-image: linear-gradient(to right, transparent, black 6%, black 94%, transparent);
  -webkit-mask-image: linear-gradient(to right, transparent, black 6%, black 94%, transparent);
}
.sol-marquee-track { display: flex; gap: 20px; width: max-content; animation: solInfiniteLoop 45s linear infinite; }
.sol-carousel-wrap:hover .sol-marquee-track { animation-play-state: paused; }
@keyframes solInfiniteLoop { 0% { transform: translateX(0); } 100% { transform: translateX(-50%); } }

.so-card {
  width: 280px;
  height: 360px;
  flex: none;
  position: relative;
  border-radius: 22px;
  overflow: hidden;
  background: #FFFFFF;
  border: 1px solid var(--line);
  box-shadow: var(--shadow-sm);
  display: flex;
  flex-direction: column;
  justify-content: flex-end;
  padding: 12px;
  transition: transform 0.35s ease, box-shadow 0.35s ease, border-color 0.35s ease;
  cursor: pointer;
}
.so-card:hover { transform: translateY(-6px); box-shadow: var(--shadow-md); border-color: #CBD5E1; }
.so-card .im { position: absolute; inset: 0; background-size: cover; background-position: center; transition: transform 0.6s ease; z-index: 1; }
.so-card:hover .im { transform: scale(1.06); }
.so-card::after { content: ""; position: absolute; inset: 0; background: linear-gradient(180deg, rgba(0, 0, 0, 0.02) 0%, rgba(0, 0, 0, 0.2) 100%); z-index: 2; pointer-events: none; }
.so-icon-badge { position: absolute; top: 14px; left: 14px; z-index: 4; }
.so-icon-badge .ic { width: 42px; height: 42px; border-radius: 12px; background: rgba(255, 255, 255, 0.96); backdrop-filter: blur(10px); color: #0A2540; border: 1px solid rgba(255, 255, 255, 0.8); box-shadow: 0 4px 14px rgba(0, 0, 0, 0.08); display: grid; place-items: center; transition: all 0.25s ease; }
.so-card:hover .so-icon-badge .ic { background: #0A2540; color: #FFFFFF; border-color: #0A2540; }
.so-body {
  position: relative;
  z-index: 4;
  padding: 16px 18px;
  background: rgba(255, 255, 255, 0.96);
  backdrop-filter: blur(16px);
  -webkit-backdrop-filter: blur(16px);
  border-radius: 16px;
  border: 1px solid rgba(255, 255, 255, 0.9);
  box-shadow: 0 8px 24px rgba(10, 37, 64, 0.08);
  display: flex;
  flex-direction: column;
  gap: 6px;
  transition: all 0.25s ease;
}
.so-card:hover .so-body { background: #FFFFFF; box-shadow: 0 12px 28px rgba(10, 37, 64, 0.12); }
.so-body h3 { font-size: 17.5px; font-family: 'Plus Jakarta Sans', sans-serif; font-weight: 700; color: #0A2540 !important; margin: 0; line-height: 1.25; transition: color 0.25s ease; }
.so-card:hover .so-body h3 { color: var(--br) !important; }
.so-body p { font-size: 13px; color: #425466; line-height: 1.45; margin: 0; display: -webkit-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical; overflow: hidden; }
.so-body .ar { margin-top: 4px; color: var(--br); font-weight: 700; font-size: 13px; display: flex; align-items: center; gap: 5px; font-family: 'Plus Jakarta Sans', sans-serif; transition: gap 0.25s ease, color 0.25s ease; }
.so-card:hover .so-body .ar { gap: 9px; color: var(--br-dark); }

/* ==========================================================================
   SCALE & GROWTH SECTION
   ========================================================================== */
.growth-section {
  padding: 85px 0 105px;
  position: relative;
  overflow: hidden;
  font-family: 'Plus Jakarta Sans', sans-serif;
}
.growth-flow-wrapper { position: relative; max-width: 800px; margin: 0 auto 16px; padding: 0 20px; }
.growth-connector-svg { position: absolute; top: 50%; left: 10%; right: 10%; width: 80%; height: 40px; transform: translateY(-50%); pointer-events: none; z-index: 1; }
.growth-connector-svg path { stroke: #CBD5E1 !important; }
.growth-floating-icons-row { display: flex; justify-content: space-between; align-items: center; position: relative; z-index: 2; max-width: 620px; margin: 0 auto; }
.growth-floating-icon {
  width: 44px;
  height: 44px;
  border-radius: 50%;
  background: #FFFFFF;
  border: 1.5px solid #E3E8EE;
  box-shadow: 0 4px 14px rgba(50, 50, 93, 0.06);
  display: flex;
  align-items: center;
  justify-content: center;
  color: #0A2540;
  transition: all 0.25s ease;
}
.growth-floating-icon svg { width: 20px; height: 20px; stroke-width: 1.8; }
.growth-floating-icon:hover { transform: scale(1.1); border-color: #0A2540; background: #0A2540; color: #FFFFFF; }
.growth-header { text-align: center; max-width: 760px; margin: 0 auto 28px; position: relative; z-index: 2; }
.growth-title {
  font-family: 'Plus Jakarta Sans', sans-serif;
  font-weight: 800;
  font-size: clamp(34px, 4.4vw, 48px);
  color: #0A2540;
  line-height: 1.15;
  letter-spacing: -0.035em;
  margin: 0 0 10px;
}
.growth-title .growth-serif { font-family: 'Playfair Display', Georgia, serif; font-style: italic; font-weight: 700; color: #B45309; display: inline-block; position: relative; }
.growth-sparkle { color: #B45309; font-size: 18px; display: inline-block; vertical-align: middle; opacity: 0.75; margin: 0 4px; }
.growth-subtitle { font-family: 'Inter', sans-serif; font-size: 17px; color: #425466; line-height: 1.6; margin: 14px auto 24px; max-width: 620px; }

.growth-pills-row { display: flex; align-items: center; justify-content: center; gap: 12px; flex-wrap: wrap; margin-bottom: 36px; }
.growth-pill {
  display: inline-flex;
  align-items: center;
  gap: 8px;
  padding: 8px 20px;
  border-radius: 99px;
  background: #F6F9FC;
  border: 1px solid #E3E8EE;
  color: #0A2540;
  font-family: 'Plus Jakarta Sans', sans-serif;
  font-size: 13.5px;
  font-weight: 700;
  box-shadow: 0 1px 3px rgba(50, 50, 93, 0.04);
}
.growth-pill svg { color: #B45309; }
.growth-pill-arrow { color: #627D98; font-size: 16px; font-weight: 700; }

.growth-cards-grid { display: grid; grid-template-columns: repeat(3, 1fr); gap: 24px; position: relative; z-index: 2; max-width: 1240px; margin: 0 auto; width: 100%; }
.growth-card {
  background: #FFFFFF;
  border: 1.5px solid #E3E8EE;
  border-radius: 24px;
  padding: 24px 22px;
  box-shadow: var(--shadow-sm);
  display: flex;
  align-items: stretch;
  justify-content: space-between;
  gap: 16px;
  transition: transform 0.25s ease, box-shadow 0.25s ease, border-color 0.25s ease;
  position: relative;
  overflow: hidden;
  text-decoration: none;
  color: inherit;
}
.growth-card:hover {
  transform: translateY(-4px);
  box-shadow: var(--shadow-md);
  border-color: #CBD5E1;
}
.growth-card-info { display: flex; flex-direction: column; justify-content: space-between; flex: 1 1 auto; min-width: 0; padding: 2px 0 2px 2px; }
.growth-card-icon-box {
  width: 44px;
  height: 44px;
  border-radius: 12px;
  background: #0A2540;
  color: #FFFFFF;
  display: flex;
  align-items: center;
  justify-content: center;
  margin-bottom: 14px;
  box-shadow: 0 4px 12px rgba(10, 37, 64, 0.2);
  transition: all 0.25s ease;
}
.growth-card:hover .growth-card-icon-box { background: #B45309; transform: scale(1.05); }
.growth-card-icon-box svg { width: 22px; height: 22px; stroke-width: 2; }
.growth-card-title { font-family: 'Plus Jakarta Sans', sans-serif; font-weight: 700; font-size: 15px; letter-spacing: 0.04em; text-transform: uppercase; color: #0A2540; margin: 0 0 8px; line-height: 1.25; }
.growth-card-desc { font-family: 'Inter', sans-serif; font-size: 13.5px; color: #425466; line-height: 1.5; margin: 0 0 16px; }
.growth-card-arrow {
  width: 32px;
  height: 32px;
  border-radius: 50%;
  background: #F6F9FC;
  color: #0A2540;
  display: flex;
  align-items: center;
  justify-content: center;
  font-size: 14px;
  font-weight: 700;
  border: 1px solid #E3E8EE;
  margin-top: auto;
  transition: all 0.2s ease;
}
.growth-card:hover .growth-card-arrow { background: #0A2540; color: #FFFFFF; border-color: #0A2540; transform: translateX(3px); }
.growth-card-visual-wrap {
  width: 140px;
  min-width: 130px;
  max-width: 150px;
  height: 146px;
  border-radius: 18px;
  overflow: hidden;
  background: #F1F5F9;
  border: 1px solid #E3E8EE;
  display: flex;
  align-items: center;
  justify-content: center;
  flex-shrink: 0;
}
.growth-card-visual-img { width: 100%; height: 100%; object-fit: cover; object-position: center; display: block; transition: transform 0.4s ease; }
.growth-card:hover .growth-card-visual-img { transform: scale(1.06); }

@media (max-width: 1100px) {
  .growth-cards-grid { grid-template-columns: repeat(2, 1fr); gap: 18px; }
}
@media (max-width: 768px) {
  .growth-cards-grid { grid-template-columns: 1fr; max-width: 480px; }
  .growth-flow-wrapper { display: none; }
}

/* ==========================================================================
   REPORTS & ANALYTICS SECTION (International Tier-1 SaaS Layout)
   ========================================================================== */
.reports-section {
  position: relative;
  background: radial-gradient(circle at 50% 0%, rgba(217, 119, 6, 0.05) 0%, rgba(248, 250, 252, 0) 65%), #F8FAFC;
  border-top: 1px solid #E2E8F0;
  border-bottom: 1px solid #E2E8F0;
  padding: 96px 0 104px;
  overflow: hidden;
}
.reports-header {
  text-align: left;
  max-width: 1140px;
  margin: 0 auto 38px;
  display: flex;
  align-items: flex-end;
  justify-content: space-between;
  gap: 36px;
}
.reports-header-left {
  max-width: 780px;
  flex: 1;
}
.reports-header-right {
  max-width: 440px;
  flex-shrink: 0;
  padding-bottom: 4px;
}
.reports-eyebrow {
  display: inline-flex;
  align-items: center;
  gap: 8px;
  font-family: 'Plus Jakarta Sans', sans-serif;
  font-size: 11.5px;
  font-weight: 700;
  letter-spacing: 0.1em;
  text-transform: uppercase;
  color: #B45309;
  background: rgba(245, 158, 11, 0.1);
  padding: 6px 14px;
  border-radius: 999px;
  border: 1px solid rgba(245, 158, 11, 0.25);
  margin-bottom: 14px;
}
.reports-eyebrow svg { flex-shrink: 0; color: #D97706; }
.reports-title {
  font-family: Effra, sans-serif;
  font-size: clamp(2.75rem, 4.4vw, 3.75rem);
  font-weight: 400 !important;
  letter-spacing: normal;
  line-height: 1.12;
  color: #0A2540;
  margin: 0;
  text-align: left;
}
.reports-title .title-grad {
  font-family: Effra, sans-serif !important;
  font-weight: 400 !important;
  letter-spacing: normal !important;
  color: #0A2540;
}
.reports-title .sf {
  font-family: Effra, sans-serif !important;
  font-style: normal !important;
  font-weight: 400 !important;
  letter-spacing: normal !important;
  background: linear-gradient(135deg, #0A2540 30%, #B45309 100%);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
}
.reports-subtitle {
  font-family: 'Inter', sans-serif;
  font-size: 15.5px;
  line-height: 1.6;
  color: #475569;
  margin: 0;
  text-align: left;
}

@media (max-width: 900px) {
  .reports-header {
    flex-direction: column;
    align-items: flex-start;
    gap: 16px;
    margin-bottom: 28px;
  }
  .reports-header-right {
    max-width: 100%;
  }
  .reports-title {
    font-size: 2.35rem;
    line-height: 1.15;
  }
}

@media (max-width: 480px) {
  .reports-title {
    font-size: 1.95rem;
    line-height: 1.2;
  }
}

/* Category Filter Tabs / Pills */
.reports-pill-bar {
  display: flex;
  flex-wrap: wrap;
  justify-content: center;
  gap: 8px;
  margin: 0 auto 36px;
  max-width: 920px;
  padding: 6px;
  background: rgba(255, 255, 255, 0.85);
  backdrop-filter: blur(10px);
  border: 1px solid #E2E8F0;
  border-radius: 999px;
  box-shadow: 0 2px 8px rgba(10, 37, 64, 0.04);
}
.reports-pill {
  display: inline-flex;
  align-items: center;
  gap: 8px;
  padding: 8px 18px;
  border-radius: 999px;
  font-family: 'Plus Jakarta Sans', sans-serif;
  font-size: 13.5px;
  font-weight: 600;
  color: #475569;
  background: transparent;
  border: none;
  transition: all 0.2s ease;
  cursor: default;
}
.reports-pill svg { color: #64748B; transition: all 0.2s ease; flex-shrink: 0; }
.reports-pill:hover {
  color: #0A2540;
  background: #F1F5F9;
}
.reports-pill:hover svg { color: #B45309; }
.reports-pill.active {
  background: #0A2540;
  color: #FFFFFF;
  font-weight: 700;
  box-shadow: 0 4px 12px rgba(10, 37, 64, 0.18);
}
.reports-pill.active svg { color: #F59E0B; }
.pill-live-dot {
  width: 7px;
  height: 7px;
  background: #10B981;
  border-radius: 50%;
  display: inline-block;
  box-shadow: 0 0 0 2px rgba(16, 185, 129, 0.2);
  animation: pulse-dot 2s infinite ease-in-out;
}
@keyframes pulse-dot {
  0%, 100% { transform: scale(1); opacity: 1; }
  50% { transform: scale(1.3); opacity: 0.7; }
}

/* Reports SaaS Browser Mockup */
.reports-mockup-frame {
  max-width: 1140px;
  margin: 0 auto;
  background: #FFFFFF;
  border: 1.5px solid #CBD5E1;
  border-radius: 22px;
  overflow: hidden;
  box-shadow: 0 24px 60px -15px rgba(10, 37, 64, 0.14), 0 0 0 1px rgba(226, 232, 240, 0.8);
  transition: transform 0.3s ease, box-shadow 0.3s ease;
}
.reports-mockup-frame:hover {
  transform: translateY(-4px);
  box-shadow: 0 32px 72px -15px rgba(10, 37, 64, 0.2);
  border-color: #94A3B8;
}
.reports-mockup-bar {
  background: #0A2540;
  border-bottom: 1px solid #1A365D;
  padding: 12px 20px;
  display: flex;
  align-items: center;
  justify-content: space-between;
  gap: 16px;
}
.reports-bar-left {
  display: flex;
  align-items: center;
  gap: 12px;
  min-width: 0;
}
.mac-dots {
  display: flex;
  align-items: center;
  gap: 6px;
}
.mac-dot {
  width: 10px;
  height: 10px;
  border-radius: 50%;
  display: inline-block;
}
.mac-red { background: #EF4444; }
.mac-yellow { background: #F59E0B; }
.mac-green { background: #10B981; }

.reports-bar-title {
  color: #FFFFFF;
  font-family: 'Plus Jakarta Sans', sans-serif;
  font-size: 11px;
  font-weight: 700;
  letter-spacing: 0.08em;
  text-transform: uppercase;
  display: flex;
  align-items: center;
  gap: 6px;
  white-space: nowrap;
}
.reports-bar-title svg { color: #F59E0B; }

.reports-bar-url {
  display: flex;
  align-items: center;
  gap: 6px;
  background: rgba(255, 255, 255, 0.08);
  border: 1px solid rgba(255, 255, 255, 0.12);
  padding: 4px 14px;
  border-radius: 999px;
  color: #CBD5E1;
  font-size: 11px;
  font-family: 'Plus Jakarta Sans', sans-serif;
  letter-spacing: 0.02em;
}
.reports-bar-url svg { color: #10B981; }

.reports-bar-sync {
  display: flex;
  align-items: center;
  gap: 6px;
  font-size: 11px;
  color: #10B981;
  font-weight: 600;
  font-family: 'Plus Jakarta Sans', sans-serif;
  white-space: nowrap;
}

.reports-image-wrapper {
  position: relative;
  width: 100%;
  background: #FFFFFF;
  overflow: hidden;
  display: flex;
  align-items: center;
  justify-content: center;
  line-height: 0;
}
.reports-saas-img {
  width: 100%;
  height: auto;
  display: block;
  object-fit: contain;
}

/* Reports KPI Grid (Directly reflects image data) */
.reports-kpi-grid {
  display: grid;
  grid-template-columns: repeat(4, 1fr);
  gap: 16px;
  max-width: 1140px;
  margin: 28px auto 0;
}
.reports-kpi-card {
  background: #FFFFFF;
  border: 1.5px solid #E2E8F0;
  border-radius: 16px;
  padding: 18px 20px;
  display: flex;
  align-items: flex-start;
  gap: 14px;
  box-shadow: 0 2px 8px rgba(10, 37, 64, 0.04);
  transition: all 0.25s ease;
}
.reports-kpi-card:hover {
  transform: translateY(-2px);
  border-color: #0A2540;
  box-shadow: 0 8px 20px rgba(10, 37, 64, 0.08);
}
.kpi-icon-wrap {
  width: 40px;
  height: 40px;
  border-radius: 10px;
  display: flex;
  align-items: center;
  justify-content: center;
  flex-shrink: 0;
}
.kpi-icon-wrap.kpi-gold { background: #FEF3C7; color: #B45309; }
.kpi-icon-wrap.kpi-navy { background: #E0E7FF; color: #3730A3; }
.kpi-icon-wrap.kpi-blue { background: #DBEAFE; color: #1E40AF; }
.kpi-icon-wrap.kpi-green { background: #D1FAE5; color: #065F46; }

.kpi-body { flex: 1; min-width: 0; }
.kpi-label {
  display: block;
  font-family: 'Plus Jakarta Sans', sans-serif;
  font-size: 12px;
  font-weight: 600;
  color: #64748B;
  margin-bottom: 4px;
  white-space: nowrap;
  overflow: hidden;
  text-overflow: ellipsis;
}
.kpi-val {
  font-family: 'Outfit', sans-serif;
  font-size: 19px;
  font-weight: 800;
  color: #0A2540;
  letter-spacing: -0.02em;
  margin-bottom: 4px;
  line-height: 1.2;
}
.kpi-tag {
  display: inline-block;
  font-family: 'Plus Jakarta Sans', sans-serif;
  font-size: 11px;
  font-weight: 600;
  border-radius: 4px;
  padding: 1px 6px;
}
.kpi-tag-up { background: #ECFDF5; color: #047857; }
.kpi-tag-neutral { background: #F1F5F9; color: #475569; }
.kpi-tag-success { background: #ECFDF5; color: #059669; }

/* ==========================================================================
   LIVE SUITE SHOWCASE (International Tier-1 SaaS Bento Grid)
   ========================================================================== */
.suite-section {
  position: relative;
  background: #FFFFFF;
  padding: 100px 0 110px;
  overflow: hidden;
}
.suite-header {
  text-align: left;
  max-width: 1200px;
  margin: 0 auto 48px;
  display: flex;
  align-items: flex-end;
  justify-content: space-between;
  gap: 36px;
}
.suite-header-left {
  max-width: 780px;
  flex: 1;
}
.suite-header-right {
  max-width: 440px;
  flex-shrink: 0;
  padding-bottom: 4px;
}
.suite-eyebrow {
  display: inline-flex;
  align-items: center;
  gap: 8px;
  font-family: 'Plus Jakarta Sans', sans-serif;
  font-size: 11.5px;
  font-weight: 700;
  letter-spacing: 0.1em;
  text-transform: uppercase;
  color: #B45309;
  background: rgba(245, 158, 11, 0.1);
  padding: 6px 14px;
  border-radius: 999px;
  border: 1px solid rgba(245, 158, 11, 0.25);
  margin-bottom: 14px;
}
.suite-eyebrow svg { flex-shrink: 0; color: #D97706; }
.suite-title {
  font-family: Effra, sans-serif;
  font-size: clamp(2.75rem, 4.4vw, 3.75rem);
  font-weight: 400 !important;
  letter-spacing: normal;
  line-height: 1.12;
  color: #0A2540;
  margin: 0;
  text-align: left;
}
.suite-title .title-grad {
  font-family: Effra, sans-serif !important;
  font-weight: 400 !important;
  letter-spacing: normal !important;
  color: #0A2540;
}
.suite-title .sf {
  font-family: Effra, sans-serif !important;
  font-style: normal !important;
  font-weight: 400 !important;
  letter-spacing: normal !important;
  background: linear-gradient(135deg, #0A2540 30%, #B45309 100%);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
}
.suite-subtitle {
  font-family: 'Inter', sans-serif;
  font-size: 15.5px;
  line-height: 1.6;
  color: #475569;
  margin: 0;
  text-align: left;
}

@media (max-width: 900px) {
  .suite-header {
    flex-direction: column;
    align-items: flex-start;
    gap: 16px;
    margin-bottom: 32px;
  }
  .suite-header-right {
    max-width: 100%;
  }
  .suite-title {
    font-size: 2.35rem;
    line-height: 1.15;
  }
}

@media (max-width: 480px) {
  .suite-title {
    font-size: 1.95rem;
    line-height: 1.2;
  }
}

/* 6-Card Bento Grid */
.suite-bento-grid {
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  gap: 26px;
  max-width: 1200px;
  margin: 0 auto;
}
.suite-bento-card {
  background: #FFFFFF;
  border: 1.5px solid #E2E8F0;
  border-radius: 20px;
  overflow: hidden;
  display: flex;
  flex-direction: column;
  box-shadow: 0 4px 20px -4px rgba(10, 37, 64, 0.05);
  transition: all 0.3s cubic-bezier(0.16, 1, 0.3, 1);
}
.suite-bento-card:hover {
  transform: translateY(-6px);
  border-color: #CBD5E1;
  box-shadow: 0 20px 40px -10px rgba(10, 37, 64, 0.12);
}
.suite-card-topbar {
  background: #0A2540;
  border-bottom: 1px solid #1A365D;
  padding: 10px 16px;
  display: flex;
  align-items: center;
  justify-content: space-between;
}
.suite-topbar-left {
  display: flex;
  align-items: center;
  gap: 10px;
}
.suite-card-badge {
  font-family: 'Plus Jakarta Sans', sans-serif;
  font-size: 10.5px;
  font-weight: 700;
  letter-spacing: 0.06em;
  text-transform: uppercase;
  color: #FFFFFF;
  display: flex;
  align-items: center;
  gap: 6px;
}
.suite-card-badge svg { color: #F59E0B; }
.suite-pill-tag {
  font-family: 'Plus Jakarta Sans', sans-serif;
  font-size: 9.5px;
  font-weight: 700;
  letter-spacing: 0.06em;
  text-transform: uppercase;
  padding: 2px 8px;
  border-radius: 999px;
}
.pill-blue { background: rgba(59, 130, 246, 0.2); color: #93C5FD; border: 1px solid rgba(59, 130, 246, 0.3); }
.pill-amber { background: rgba(245, 158, 11, 0.2); color: #FCD34D; border: 1px solid rgba(245, 158, 11, 0.3); }
.pill-purple { background: rgba(168, 85, 247, 0.2); color: #D8B4FE; border: 1px solid rgba(168, 85, 247, 0.3); }
.pill-green { background: rgba(16, 185, 129, 0.2); color: #6EE7B7; border: 1px solid rgba(16, 185, 129, 0.3); }
.pill-rose { background: rgba(244, 63, 94, 0.2); color: #FDA4AF; border: 1px solid rgba(244, 63, 94, 0.3); }
.pill-gold { background: rgba(217, 119, 6, 0.2); color: #FDE68A; border: 1px solid rgba(217, 119, 6, 0.3); }

/* Card Visual Previews */
.suite-visual-box {
  height: 180px;
  background: #F8FAFC;
  overflow: hidden;
  position: relative;
  display: flex;
  align-items: center;
  justify-content: center;
}
.suite-crop-img {
  width: 100%;
  height: 100%;
  object-fit: cover;
  object-position: top left;
  display: block;
  transition: transform 0.4s ease;
}
.suite-bento-card:hover .suite-crop-img {
  transform: scale(1.04);
}

/* Interactive Mock Widgets inside Bento Cards */
.suite-pos-widget {
  width: 100%;
  height: 100%;
  padding: 12px 14px;
  display: flex;
  flex-direction: column;
  justify-content: space-between;
  background: #F8FAFC;
}
.suite-pos-tiles {
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  gap: 6px;
}
.pos-mini-tile {
  background: #FFFFFF;
  border: 1px solid #E2E8F0;
  border-radius: 8px;
  padding: 6px 4px;
  text-align: center;
  font-family: 'Plus Jakarta Sans', sans-serif;
  font-size: 11px;
  font-weight: 700;
  color: #0A2540;
  line-height: 1.2;
}
.pos-mini-tile small {
  display: block;
  font-size: 10px;
  font-weight: 600;
  color: #64748B;
  margin-top: 2px;
}
.pos-mini-tile.active {
  background: #0A2540;
  color: #FFFFFF;
  border-color: #0A2540;
}
.pos-mini-tile.active small {
  color: #FCD34D;
}
.suite-pos-bill {
  background: #FFFFFF;
  border: 1px solid #E2E8F0;
  border-radius: 8px;
  padding: 6px 10px;
  font-family: 'Plus Jakarta Sans', sans-serif;
  font-size: 11px;
}
.bill-line {
  display: flex;
  justify-content: space-between;
  align-items: center;
  color: #475569;
  padding: 2px 0;
}
.bill-line.total {
  border-top: 1px dashed #CBD5E1;
  margin-top: 3px;
  padding-top: 4px;
  font-weight: 700;
  color: #0A2540;
}
.bill-line.total b {
  color: #B45309;
  font-size: 13.5px;
  font-family: 'Outfit', sans-serif;
}

/* Inventory Bars Widget */
.suite-inv-widget {
  width: 100%;
  height: 100%;
  padding: 14px 18px;
  display: flex;
  flex-direction: column;
  justify-content: center;
  gap: 10px;
  background: #F8FAFC;
}
.inv-bar-item { width: 100%; }
.inv-bar-label {
  display: flex;
  justify-content: space-between;
  font-family: 'Plus Jakarta Sans', sans-serif;
  font-size: 11px;
  font-weight: 600;
  color: #334155;
  margin-bottom: 4px;
}
.inv-bar-label b { font-weight: 700; color: #0A2540; }
.inv-bar-track {
  width: 100%;
  height: 6px;
  background: #E2E8F0;
  border-radius: 999px;
  overflow: hidden;
}
.inv-bar-fill {
  height: 100%;
  border-radius: 999px;
  transition: width 0.6s ease;
}
.fill-green { background: #10B981; }
.fill-amber { background: #F59E0B; }
.fill-rose { background: #F43F5E; }

/* Guest CRM Widget */
.suite-crm-widget {
  width: 100%;
  height: 100%;
  padding: 16px 18px;
  display: flex;
  flex-direction: column;
  justify-content: space-between;
  background: #F8FAFC;
}
.crm-stats-row {
  display: grid;
  grid-template-columns: 1fr 1fr;
  gap: 10px;
}
.crm-stat-box {
  background: #FFFFFF;
  border: 1px solid #E2E8F0;
  border-radius: 10px;
  padding: 8px 10px;
  text-align: center;
}
.crm-stat-box span {
  display: block;
  font-family: 'Plus Jakarta Sans', sans-serif;
  font-size: 10.5px;
  color: #64748B;
  font-weight: 600;
}
.crm-stat-box b {
  display: block;
  font-family: 'Outfit', sans-serif;
  font-size: 20px;
  color: #0A2540;
  font-weight: 800;
  margin-top: 2px;
}
.crm-guest-pill {
  display: flex;
  align-items: center;
  gap: 8px;
  background: #FFFFFF;
  border: 1px solid #E2E8F0;
  border-radius: 999px;
  padding: 6px 12px;
  font-family: 'Plus Jakarta Sans', sans-serif;
  font-size: 11px;
  font-weight: 600;
  color: #0A2540;
}
.guest-dot-vip {
  width: 8px;
  height: 8px;
  background: #F59E0B;
  border-radius: 50%;
  box-shadow: 0 0 0 2px rgba(245, 158, 11, 0.25);
}

/* Card Body Content */
.suite-card-body {
  padding: 22px 22px 20px;
  display: flex;
  flex-direction: column;
  flex: 1;
}
.suite-module-title {
  font-family: 'Outfit', sans-serif;
  font-size: 17.5px;
  font-weight: 800;
  color: #0A2540;
  letter-spacing: -0.01em;
  margin: 0 0 8px;
  display: flex;
  align-items: center;
  gap: 8px;
}
.suite-module-desc {
  font-family: 'Inter', sans-serif;
  font-size: 13.5px;
  color: #475569;
  line-height: 1.55;
  margin: 0 0 16px;
  flex: 1;
}
.suite-card-footer {
  padding-top: 14px;
  border-top: 1px solid #F1F5F9;
  display: flex;
  align-items: center;
  gap: 8px;
  font-family: 'Plus Jakarta Sans', sans-serif;
  font-size: 11.5px;
  font-weight: 700;
  color: #334155;
}
.footer-dot {
  width: 7px;
  height: 7px;
  border-radius: 50%;
  display: inline-block;
}
.dot-green { background: #10B981; box-shadow: 0 0 0 2px rgba(16, 185, 129, 0.2); }
.dot-amber { background: #F59E0B; box-shadow: 0 0 0 2px rgba(245, 158, 11, 0.2); }
.dot-rose { background: #F43F5E; box-shadow: 0 0 0 2px rgba(244, 63, 94, 0.2); }

/* Responsive adjustments */
@media (max-width: 1024px) {
  .suite-bento-grid { grid-template-columns: repeat(2, 1fr); }
  .reports-kpi-grid { grid-template-columns: repeat(2, 1fr); }
}
@media (max-width: 768px) {
  .suite-bento-grid { grid-template-columns: 1fr; }
  .reports-kpi-grid { grid-template-columns: 1fr; }
  .reports-mockup-bar .reports-bar-url { display: none; }
  .reports-pill-bar { border-radius: 16px; justify-content: flex-start; overflow-x: auto; padding: 6px; }
  .reports-pill { white-space: nowrap; }
}

/* Pricing Section - International Stripe Style */
.pricing-grid {
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  gap: 24px;
  max-width: 1200px;
  margin: 0 auto;
  align-items: stretch;
}
.pr-card {
  background: #FFFFFF;
  border: 1.5px solid #E3E8EE;
  border-radius: 24px;
  padding: 36px 30px;
  display: flex;
  flex-direction: column;
  transition: transform 0.25s ease, box-shadow 0.25s ease, border-color 0.25s ease;
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
  box-shadow: 0 20px 45px -10px rgba(10, 37, 64, 0.16);
  transform: scale(1.02);
}
.pr-card.popular:hover {
  transform: scale(1.02) translateY(-4px);
  box-shadow: 0 25px 55px -10px rgba(10, 37, 64, 0.22);
}
.pr-badge {
  position: absolute;
  top: -14px;
  left: 50%;
  transform: translateX(-50%);
  background: #0A2540;
  color: #FFFFFF;
  font-size: 11px;
  font-weight: 700;
  padding: 6px 18px;
  border-radius: 99px;
  letter-spacing: 0.08em;
  box-shadow: 0 4px 14px rgba(10, 37, 64, 0.35);
  white-space: nowrap;
}
.pr-label {
  font-size: 13px;
  font-weight: 700;
  color: #B45309;
  text-transform: uppercase;
  letter-spacing: 0.1em;
  margin-bottom: 8px;
  font-family: 'Plus Jakarta Sans', sans-serif;
}
.pr-sub {
  font-size: 20px;
  font-weight: 800;
  color: #0A2540;
  margin-bottom: 10px;
  font-family: 'Plus Jakarta Sans', sans-serif;
  letter-spacing: -0.02em;
}
.pr-desc {
  font-size: 14px;
  color: #425466;
  margin-bottom: 24px;
  line-height: 1.6;
  min-height: 44px;
}
.pr-price-box { margin-bottom: 24px; }
.pr-price {
  font-size: 42px;
  font-weight: 800;
  color: #0A2540;
  margin-bottom: 4px;
  font-family: 'Plus Jakarta Sans', sans-serif;
  letter-spacing: -0.03em;
  line-height: 1.1;
}
.pr-price span { font-size: 15px; font-weight: 600; color: #627D98; }
.pr-custom-price {
  font-size: 34px;
  font-weight: 800;
  color: #0A2540;
  margin-bottom: 4px;
  font-family: 'Plus Jakarta Sans', sans-serif;
  letter-spacing: -0.03em;
  line-height: 1.2;
}
.pr-freq { font-size: 12.5px; color: #627D98; font-weight: 600; }
.pr-features {
  margin-top: 26px;
  padding-top: 22px;
  border-top: 1px solid #E3E8EE;
  flex: 1;
}
.pr-feat-title {
  font-size: 12px;
  font-weight: 700;
  color: #0A2540;
  letter-spacing: 0.08em;
  margin-bottom: 16px;
  font-family: 'Plus Jakarta Sans', sans-serif;
  text-transform: uppercase;
}
.pr-feat-item {
  display: flex;
  align-items: flex-start;
  gap: 10px;
  margin-bottom: 12px;
  font-size: 14px;
  color: #1A365D;
  line-height: 1.45;
  font-weight: 500;
}
.pr-feat-icon {
  flex-shrink: 0;
  color: #10B981;
  margin-top: 2px;
}
@media (max-width: 1024px) {
  .pricing-grid { grid-template-columns: 1fr; max-width: 500px; }
}

/* ==========================================================================
   INTERNATIONAL SAAS FAQ ARCHITECTURE (STRIPE & LINEAR 2-COL SPLIT)
   ========================================================================== */
.faq-section {
  padding: clamp(80px, 9vw, 120px) 0;
  background: #FFFFFF;
  position: relative;
  overflow: hidden;
}

.faq-layout {
  display: grid;
  grid-template-columns: 42% 58%;
  gap: 56px;
  align-items: start;
}

.faq-left-col {
  position: sticky;
  top: 96px;
}

.faq-main-title {
  font-family: Effra, sans-serif;
  font-size: clamp(2.6rem, 3.8vw, 3.5rem);
  font-weight: 400 !important;
  letter-spacing: normal;
  line-height: 1.12;
  color: #0A2540;
  margin: 0 0 16px;
}

.faq-main-title .sf {
  font-family: Effra, sans-serif !important;
  font-style: normal !important;
  font-weight: 400 !important;
  letter-spacing: normal !important;
  background: linear-gradient(135deg, #0A2540 30%, #B45309 100%);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
  display: inline-block;
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

/* Support Help Card (High-converting micro widget) */
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
.faq {
  width: 100%;
  display: flex;
  flex-direction: column;
  gap: 14px;
}
.q {
  border: 1.5px solid #E3E8EE;
  border-radius: 16px;
  background: #FFFFFF;
  padding: 0 24px;
  box-shadow: 0 1px 3px rgba(50, 50, 93, 0.04);
  transition: all 0.25s cubic-bezier(0.16, 1, 0.3, 1);
}
.q:hover {
  border-color: #CBD5E1;
  box-shadow: 0 4px 14px rgba(50, 50, 93, 0.08);
}
.q.o {
  border-color: #0A2540;
  box-shadow: 0 8px 24px rgba(10, 37, 64, 0.08);
  background: #FFFFFF;
}
.q button {
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
.q i {
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
.q:hover i {
  border-color: #CBD5E1;
  background: #FFFFFF;
}
.q.o i {
  transform: rotate(45deg);
  background: #0A2540;
  color: #FFFFFF;
  border-color: #0A2540;
}
.a {
  display: grid;
  grid-template-rows: 0fr;
  transition: grid-template-rows 0.35s cubic-bezier(0.16, 1, 0.3, 1);
}
.q.o .a {
  grid-template-rows: 1fr;
}
.a > div {
  overflow: hidden;
}
.a p {
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
  .faq-main-title {
    font-size: 2.35rem;
    line-height: 1.15;
  }
  .faq-lead-desc,
  .faq-support-card {
    max-width: 100%;
  }
}

@media (max-width: 480px) {
  .faq-main-title {
    font-size: 1.95rem;
    line-height: 1.2;
  }
}

/* Call to Action Banner - Stripe Deep Midnight Finish */
.cta {
  position: relative;
  color: #FFFFFF;
  text-align: center;
  overflow: hidden;
  padding: 110px 0;
  background: radial-gradient(circle at 50% 0%, #1A2E4C 0%, #0A192F 100%);
  border-top: 1px solid rgba(255, 255, 255, 0.12);
}
.cta > .ph { display: none; }
.cta .w { position: relative; z-index: 2; }
.cta h2 {
  color: #FFFFFF !important;
  max-width: 760px;
  margin: 0 auto 18px;
  font-family: Effra, sans-serif;
  font-size: 2.5rem;
  font-weight: 400;
  letter-spacing: normal;
  line-height: 1;
}
.cta p {
  color: #A0AEC0 !important;
  margin-bottom: 38px;
  font-size: 19px;
  font-family: 'Inter', sans-serif;
  line-height: 1.6;
}
.cta .bts { justify-content: center; display: flex; gap: 16px; flex-wrap: wrap; }
.cta .bts .btn.p {
  background: #FFFFFF;
  color: #0A2540 !important;
  border-color: #FFFFFF;
  font-weight: 700;
  box-shadow: 0 10px 30px rgba(0,0,0,0.3);
  border-radius: 12px;
}
.cta .bts .btn.p:hover {
  background: #F6F9FC;
  transform: translateY(-2px);
  box-shadow: 0 16px 40px rgba(0,0,0,0.4);
}
.cta .bts .btn.ow {
  background: rgba(255, 255, 255, 0.08);
  border: 1.5px solid rgba(255, 255, 255, 0.25);
  color: #FFFFFF !important;
  backdrop-filter: blur(8px);
  border-radius: 12px;
}
.cta .bts .btn.ow:hover {
  background: rgba(255, 255, 255, 0.16);
  border-color: rgba(255,255,255,0.4);
  color: #FFFFFF !important;
  transform: translateY(-2px);
}
.cta small {
  display: block;
  margin-top: 36px;
  color: #718096 !important;
  font-family: 'Inter', sans-serif;
  font-size: 14px;
}

/* Footer */
footer { padding: 80px 0 32px; background: #F6F9FC; border-top: 1px solid var(--line); }
.fg2 { display: grid; grid-template-columns: 1.6fr repeat(4, 1fr); gap: 36px; }
footer h4 { font-size: 12.5px; letter-spacing: .12em; color: var(--br); margin: 0 0 16px; text-transform: uppercase; font-weight: 700; font-family: 'Plus Jakarta Sans', sans-serif; }
footer li { margin-bottom: 10px; font-size: 15px; color: #425466; }
footer li a:hover { color: var(--br); }
.fb { display: flex; justify-content: space-between; flex-wrap: wrap; gap: 14px; margin-top: 56px; padding-top: 24px; border-top: 1px solid var(--line); font-size: 14px; color: #425466; }
.fb a { margin-left: 20px; text-decoration: none; color: #425466; }
.fb a:hover { color: var(--br); }

/* Responsive Adjustments */
@media (max-width: 1100px) {
  .st { grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); }
  .sp:after { display: none !important; }
  .fc { grid-column: span 6; }
  .fc.big { grid-column: 1 / -1; }
  .tm { grid-template-columns: repeat(3, 1fr); }
  .tm:before { display: none; }
  .fg2 { grid-template-columns: 1fr 1fr 1fr; }
  .fg2 > div:first-child { grid-column: 1 / -1; }
}
@media (max-width: 900px) {
  .hg, .ig, .cx { grid-template-columns: 1fr; }
  .hv { height: 520px; }
  .ig > .ph { min-height: 360px; }
  .cxv { height: 460px; }
  .cx-phone-mockup { width: 220px; bottom: -15px; right: 15px; }
  .gr, .wg, .tg, .pg { grid-template-columns: 1fr; }
  .sh { grid-template-columns: 1fr; }
  .sh .c2 { grid-column: auto; }
  .st { grid-template-columns: 1fr; }
  .sp { display: grid; grid-template-columns: 130px 1fr; gap: 16px; align-items: center; }
  .sp .v { height: 110px; margin: 0; }
  .rp .cnt { grid-template-columns: 1fr; }
}
@media (max-width: 600px) {
  .w { padding: 0 16px; }
  .fc, .fc.big { grid-column: 1 / -1; padding: 20px 16px; }
  .b4, .bl { grid-template-columns: 1fr; gap: 12px; }
  .b4 > div { padding: 18px 16px; border-radius: 14px; }
  .tm { grid-template-columns: 1fr; }
  .fg2 { grid-template-columns: 1fr; }
  .hv .fl { display: none; }
  .hv .win { width: 100%; }
  .cxv { height: 420px; position: relative; }
  .cxv > .ph { inset: 0 45px 60px 0; border-radius: 20px; }
  .cx-phone-mockup { width: 195px; right: 0; bottom: -10px; }
  .fl { display: none; }
  .sp { grid-template-columns: 1fr; }
  .hd { margin-bottom: 36px; }
  .hd p { font-size: 15.5px; }
}
@media (max-width: 420px) {
  .cxv { height: 370px; }
  .cxv > .ph { inset: 0 30px 50px 0; border-radius: 16px; }
  .cx-phone-mockup { width: 165px; right: 0; bottom: -5px; }
}

/* ==========================================================================
   type-paragraph-lg — Effra Regular 1.125rem for All Post-Hero Sections
   Windows ClearType & Subpixel Antialiasing Smoothing Applied
   ========================================================================== */
.type-paragraph-lg,
header.hero ~ section p,
header.hero ~ section .type-paragraph-lg,
header.hero ~ section .toast-sec-subtitle,
header.hero ~ section .toast-card-desc,
header.hero ~ section .hiw-side-desc,
header.hero ~ section .hiw-step-desc,
header.hero ~ section .cx-subtitle,
header.hero ~ section .cx-bottom-caption,
header.hero ~ section .team-subtitle,
header.hero ~ section .sol-split-desc,
header.hero ~ section .reports-subtitle,
header.hero ~ section .suite-subtitle,
header.hero ~ section .faq-lead-desc,
header.hero ~ section .faq-support-text,
header.hero ~ section .faq .a p,
header.hero ~ section .cta p {
  font-family: Effra, sans-serif !important;
  font-size: 1.125rem !important;
  font-weight: 400 !important;
  letter-spacing: normal !important;
  line-height: 1.4 !important;
  -webkit-font-smoothing: subpixel-antialiased !important;
  -moz-osx-font-smoothing: auto !important;
  text-rendering: optimizeLegibility !important;
  font-feature-settings: "kern" 1, "liga" 1 !important;
  font-synthesis: none !important;
  -webkit-text-stroke: 0.12px currentColor;
  text-shadow: 0 0 0.35px rgba(0, 0, 0, 0.12);
}
</style>

<!-- Hero Section (Atmospheric Full-Width Kitchen Hero in GloriaFood Structure) -->
<header class="hero">
  <div class="hero-bg-overlay"></div>

  <div class="w">
    <div class="hero-center-content">
      <div class="hero-eyebrow-pill">
        <svg viewBox="0 0 24 24"><path d="M12 2l8 4v4c0 6-4 10-8 12-4-2-8-6-8-12V6l8-4z"/></svg>
        RESTAURANT OPERATIONS, SIMPLIFIED
      </div>

      <h1 class="hero-main-title">
        Every Part of Your Restaurant.<br>
        <span class="hero-serif-highlight">One Smart System.</span>
      </h1>

      <p class="hero-lead-text">
        Manage your menu, tables, orders, billing, kitchen, staff, inventory and more &mdash; all in one simple platform built for restaurants.
      </p>

      <div class="hero-cta-group">
        <a href="{{ route('restaurant_signup') }}" class="hero-btn-primary-demo">
          Book a Demo &rarr;
        </a>
        <a href="#features" class="hero-btn-secondary-features">
          Explore Features
        </a>
      </div>

      <!-- Devices Showcase: Dashboard + Phone Side-by-Side (Close together, phone NOT below) -->
      <div class="hero-devices-showcase">
        <!-- Desktop Dashboard Mockup -->
        <div class="hero-device-dashboard">
          <div class="desktop-monitor-frame">
            <div class="desktop-screen-bezel">
              <!-- Browser Top Bar -->
              <div class="desktop-browser-bar">
                <div class="browser-window-dots">
                  <span class="browser-dot red"></span>
                  <span class="browser-dot yellow"></span>
                  <span class="browser-dot green"></span>
                </div>
                <div class="browser-url-pill">app.genimenu.com/dashboard</div>
                <div class="desktop-live-tag">LIVE POS</div>
              </div>

              <!-- Real Original Dashboard Image -->
              <div class="dashboard-img-wrap">
                <img src="{{ asset('assets/images/dash.png') }}" alt="Geni Menu Restaurant Management & POS Dashboard">
              </div>
            </div>
          </div>
        </div>

        <!-- Phone Mockup: Snug beside dashboard, vertically centered (Never below) -->
        <div class="hero-device-phone">
          <div class="phone-mockup-wrapper">
            <img src="{{ asset('assets/images/geni-mobile-hero.png') }}" alt="Geni Menu Mobile POS Table Ordering">
          </div>
        </div>
      </div>

      <!-- Industry Compatibility Showcase (Elevated Modern Cards) -->
      <div class="industry-compat-wrap">
        <div class="industry-compat-header">
          <h2 class="industry-compat-title">Built for All Types of Food Businesses</h2>
          <p class="industry-compat-subtitle">From quick counter service to multi-course fine dining, Geni Menu fits your unique operational workflow.</p>
        </div>

        <div class="industry-cards-grid">
          <!-- 1. Fine Dine & Casual -->
          <a href="{{ route('solutions') }}" class="industry-card">
            <div class="industry-card-icon-box dine-in">
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor">
                <path d="M3 2v7c0 1.1.9 2 2 2h4a2 2 0 0 0 2-2V2"/>
                <path d="M7 2v20"/>
                <path d="M21 15V2v0a5 5 0 0 0-5 5v6c0 1.1.9 2 2 2h3Zm0 0v7"/>
              </svg>
            </div>
            <div class="industry-card-body">
              <div class="industry-card-name">Fine Dine &amp; Casual</div>
              <span class="industry-card-desc">Table POS &bull; Captain App &bull; Kitchen KOT</span>
            </div>
            <div class="industry-card-arrow-btn" aria-hidden="true">
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
            </div>
          </a>

          <!-- 2. Cafés & Coffee Bars -->
          <a href="{{ route('solutions') }}" class="industry-card">
            <div class="industry-card-icon-box cafe">
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor">
                <path d="M18 8h1a4 4 0 0 1 0 8h-1"/>
                <path d="M2 8h16v9a4 4 0 0 1-4 4H6a4 4 0 0 1-4-4V8z"/>
                <path d="M6 1v3M10 1v3M14 1v3"/>
              </svg>
            </div>
            <div class="industry-card-body">
              <div class="industry-card-name">Caf&eacute;s &amp; Coffee</div>
              <span class="industry-card-desc">Quick Order &bull; Barista KOT &bull; Loyalty</span>
            </div>
            <div class="industry-card-arrow-btn" aria-hidden="true">
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
            </div>
          </a>

          <!-- 3. QSR & Fast Food -->
          <a href="{{ route('solutions') }}" class="industry-card">
            <div class="industry-card-icon-box qsr">
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor">
                <rect x="3" y="4" width="18" height="12" rx="2"/>
                <path d="M7 20h10M12 16v4M7 8h4M7 11h2"/>
              </svg>
            </div>
            <div class="industry-card-body">
              <div class="industry-card-name">QSR &amp; Fast Food</div>
              <span class="industry-card-desc">Token Screen &bull; Self QR &bull; Express POS</span>
            </div>
            <div class="industry-card-arrow-btn" aria-hidden="true">
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
            </div>
          </a>

          <!-- 4. Bakeries & Sweets -->
          <a href="{{ route('solutions') }}" class="industry-card">
            <div class="industry-card-icon-box bakery">
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor">
                <path d="M4 11a8 8 0 0 1 16 0H4zm-1 3h18M3 17h18a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"/>
                <path d="M7 8V5M12 8V4M17 8V5"/>
              </svg>
            </div>
            <div class="industry-card-body">
              <div class="industry-card-name">Bakeries &amp; Sweets</div>
              <span class="industry-card-desc">Weigh Scale &bull; Barcode &bull; Fresh Batches</span>
            </div>
            <div class="industry-card-arrow-btn" aria-hidden="true">
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
            </div>
          </a>

          <!-- 5. Bars & Breweries -->
          <a href="{{ route('solutions') }}" class="industry-card">
            <div class="industry-card-icon-box bar">
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor">
                <path d="M8 22h8M12 11v11"/>
                <path d="m19 3-7 8-7-8Z"/>
              </svg>
            </div>
            <div class="industry-card-body">
              <div class="industry-card-name">Bars &amp; Breweries</div>
              <span class="industry-card-desc">Open Tabs &bull; Split Bills &bull; Pour Stations</span>
            </div>
            <div class="industry-card-arrow-btn" aria-hidden="true">
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
            </div>
          </a>

          <!-- 6. Cloud Kitchens -->
          <a href="{{ route('solutions') }}" class="industry-card">
            <div class="industry-card-icon-box cloud">
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor">
                <path d="M17.5 19H9a7 7 0 1 1 6.71-9h1.79a4.5 4.5 0 1 1 0 9Z"/>
                <path d="M12 13v6M9 16l3-3 3 3"/>
              </svg>
            </div>
            <div class="industry-card-body">
              <div class="industry-card-name">Cloud Kitchens</div>
              <span class="industry-card-desc">Multi-Brand &bull; Dispatch &bull; Swiggy/Zomato</span>
            </div>
            <div class="industry-card-arrow-btn" aria-hidden="true">
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
            </div>
          </a>
        </div>

        <!-- Small Solutions Navigation Button -->
        <div class="industry-compat-action">
          <a href="{{ route('solutions') }}" class="industry-compat-btn">
            Explore All Solutions
            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
          </a>
        </div>
      </div>
    </div>
  </div>
</header>


<!-- Section 3: Core Features (Toast-Style Dynamic Video-Emulation Interactive Cards) -->
<section id="features" class="toast-features-section">
  <div class="w">
    <!-- Section 3 Header: Left-Aligned Toast Structure -->
    <div class="toast-features-header r">
      <h2 class="toast-sec-title">Get busy. Stay busy. Run busy.</h2>
      <p class="toast-sec-subtitle">Meet the platform that runs real-world restaurant businesses.</p>
    </div>

    <!-- 4-Column Toast-Style Cards Grid (8 Core Features) -->
    <div class="toast-cards-grid">
      <!-- 1. Menu Management -->
      <div class="toast-card">
        <div class="toast-card-media">
          <img src="https://images.unsplash.com/photo-1544025162-d76694265947?q=80&w=800&auto=format&fit=crop" alt="Geni Menu Digital Menu Management" loading="lazy">
          <div class="toast-media-scrim"></div>
          <div class="toast-video-scanline"></div>
          <div class="toast-live-badge"><span class="toast-live-dot"></span> LIVE CATALOG</div>
          <div class="toast-circle-arrow">
            <svg viewBox="0 0 24 24"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
          </div>
          <!-- Floating UI Bubble: Live Menu Update -->
          <div class="toast-ui-bubble menu-bubble">
            <div class="bubble-head">
              <span class="bubble-tag">Live Menu Sync</span>
              <span class="bubble-status">UPDATED</span>
            </div>
            <div class="bubble-amount" style="font-size:14px;color:#1F130B;font-weight:800;margin-top:2px">Paneer Tikka · ₹280</div>
            <div class="bubble-sub">Modifiers: Extra Spicy &bull; Gluten-free</div>
          </div>
        </div>
        <div class="toast-card-body">
          <span class="toast-card-tag">DIGITAL CATALOGUE</span>
          <h3 class="toast-card-title">Menu Management</h3>
          <p class="toast-card-desc">Add, edit and manage digital menus, pricing, custom modifiers, and item availability anytime.</p>
        </div>
      </div>

      <!-- 2. Reservation Management -->
      <div class="toast-card">
        <div class="toast-card-media">
          <img src="https://images.unsplash.com/photo-1550966871-3ed3cdb5ed0c?q=80&w=800&auto=format&fit=crop" alt="Table Reservation Booking" loading="lazy">
          <div class="toast-media-scrim"></div>
          <div class="toast-video-scanline"></div>
          <div class="toast-live-badge"><span class="toast-live-dot"></span> BOOKINGS</div>
          <div class="toast-circle-arrow">
            <svg viewBox="0 0 24 24"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
          </div>
          <!-- Floating UI Bubble: Confirmed Booking -->
          <div class="toast-ui-bubble res-bubble">
            <div class="bubble-head">
              <span class="bubble-tag">Table 06 Reserved</span>
              <span class="bubble-status" style="background:#E0E7FF;color:#4338CA">CONFIRMED</span>
            </div>
            <div class="bubble-amount" style="font-size:14px;color:#1F130B;font-weight:800;margin-top:2px">Party of 4 · 08:00 PM</div>
            <div class="bubble-sub">Guest: Ananya S. &bull; Window View</div>
          </div>
        </div>
        <div class="toast-card-body">
          <span class="toast-card-tag">TABLE BOOKINGS</span>
          <h3 class="toast-card-title">Reservation Management</h3>
          <p class="toast-card-desc">Manage table bookings smoothly without confusion, phone errors, or double reservations.</p>
        </div>
      </div>

      <!-- 3. Waiter Request -->
      <div class="toast-card">
        <div class="toast-card-media">
          <img src="https://images.unsplash.com/photo-1581349485608-9469926a8e5e?q=80&w=800&auto=format&fit=crop" alt="Attentive Restaurant Waiter Service" loading="lazy">
          <div class="toast-media-scrim"></div>
          <div class="toast-video-scanline"></div>
          <div class="toast-live-badge"><span class="toast-live-dot"></span> SERVICE BELL</div>
          <div class="toast-circle-arrow">
            <svg viewBox="0 0 24 24"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
          </div>
          <!-- Floating UI Bubble: Service Call -->
          <div class="toast-ui-bubble waiter-bubble">
            <div class="bubble-head">
              <span class="bubble-tag">Table 11 Alert</span>
              <span class="bubble-status" style="background:#FEF3C7;color:#B45309">ACTIVE BELL</span>
            </div>
            <div class="bubble-amount" style="font-size:14px;color:#1F130B;font-weight:800;margin-top:2px">Water &amp; Cutlery Requested</div>
            <div class="bubble-sub">Captain Suresh Assigned &bull; 12s ago</div>
          </div>
        </div>
        <div class="toast-card-body">
          <span class="toast-card-tag">SERVICE ALERT</span>
          <h3 class="toast-card-title">Waiter Requests</h3>
          <p class="toast-card-desc">Help your waiters handle customer calls, bill requests, and table service 2x faster.</p>
        </div>
      </div>

      <!-- 4. POS and Billing -->
      <div class="toast-card">
        <div class="toast-card-media">
          <img src="https://images.unsplash.com/photo-1556742044-3c52d6e88c62?q=80&w=800&auto=format&fit=crop" alt="Geni Menu Touchscreen POS Terminal" loading="lazy" onerror="this.onerror=null;this.src='{{ asset('landing/hero-restaurant-photo.png') }}';">
          <div class="toast-media-scrim"></div>
          <div class="toast-video-scanline"></div>
          <div class="toast-live-badge"><span class="toast-live-dot"></span> LIVE POS</div>
          <div class="toast-circle-arrow">
            <svg viewBox="0 0 24 24"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
          </div>
          <!-- Floating UI Bubble: Live Bill Settlement -->
          <div class="toast-ui-bubble pos-bubble">
            <div class="bubble-head">
              <span class="bubble-tag">Table 04 · 3 items</span>
              <span class="bubble-status">PAID • UPI</span>
            </div>
            <div class="bubble-amount">₹452.00</div>
            <div class="bubble-sub">GST Bill #1048 &bull; Instant WhatsApp Invoice</div>
          </div>
        </div>
        <div class="toast-card-body">
          <span class="toast-card-tag">CHECKOUT &amp; BILLING</span>
          <h3 class="toast-card-title">POS &amp; Billing</h3>
          <p class="toast-card-desc">Make counter and table billing quick, accurate, and easy with built-in GST and payments.</p>
        </div>
      </div>

      <!-- 5. KOT Management -->
      <div class="toast-card">
        <div class="toast-card-media">
          <img src="https://images.unsplash.com/photo-1577106263724-2c8e03bfe9cf?q=80&w=800&auto=format&fit=crop" alt="Kitchen Chef Cooking Line KDS" loading="lazy">
          <div class="toast-media-scrim"></div>
          <div class="toast-video-scanline"></div>
          <div class="toast-live-badge"><span class="toast-live-dot"></span> LIVE KOT</div>
          <div class="toast-circle-arrow">
            <svg viewBox="0 0 24 24"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
          </div>
          <!-- Floating UI Bubble: KDS timer ticket -->
          <div class="toast-ui-bubble kds-bubble">
            <div class="kds-timer">⏱️ 03:15 min</div>
            <span class="kds-badge">MAIN KITCHEN</span>
            <div style="font-size:11px;color:#627D98;margin-top:2px">2x Butter Naan &bull; 1x Dal Makhani</div>
          </div>
        </div>
        <div class="toast-card-body">
          <span class="toast-card-tag">KITCHEN TRACKER</span>
          <h3 class="toast-card-title">KOT Management</h3>
          <p class="toast-card-desc">Send orders directly to the kitchen without manual slips, handwritten errors, or delays.</p>
        </div>
      </div>

      <!-- 6. Order Management -->
      <div class="toast-card">
        <div class="toast-card-media">
          <img src="https://images.unsplash.com/photo-1526367790999-0150786686a2?q=80&w=800&auto=format&fit=crop" alt="Packaged Restaurant Takeaway Orders" loading="lazy">
          <div class="toast-media-scrim"></div>
          <div class="toast-video-scanline"></div>
          <div class="toast-live-badge"><span class="toast-live-dot"></span> MULTI-ORDER</div>
          <div class="toast-circle-arrow">
            <svg viewBox="0 0 24 24"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
          </div>
          <!-- Floating UI Bubble: Order status -->
          <div class="toast-ui-bubble sms-bubble">
            <div class="sms-icon">📦</div>
            <div class="sms-text-wrap">
              <div class="sms-title">Order #109 · Dine-in Ready</div>
              <div class="sms-desc">Table 09 &bull; Served by Captain Priya</div>
            </div>
          </div>
        </div>
        <div class="toast-card-body">
          <span class="toast-card-tag">MULTI-CHANNEL FLOW</span>
          <h3 class="toast-card-title">Order Management</h3>
          <p class="toast-card-desc">Keep dine-in, takeaway, and online delivery orders organized and tracked in one screen.</p>
        </div>
      </div>

      <!-- 7. Inventory Management -->
      <div class="toast-card">
        <div class="toast-card-media">
          <img src="https://images.unsplash.com/photo-1588854337236-6889d631faa8?q=80&w=800&auto=format&fit=crop" alt="Fresh Pantry Raw Ingredients" loading="lazy">
          <div class="toast-media-scrim"></div>
          <div class="toast-video-scanline"></div>
          <div class="toast-live-badge"><span class="toast-live-dot"></span> STOCK CONTROL</div>
          <div class="toast-circle-arrow">
            <svg viewBox="0 0 24 24"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
          </div>
          <!-- Floating UI Bubble: Stock progress -->
          <div class="toast-ui-bubble inv-bubble">
            <div class="inv-line"><span>Fresh Paneer (kg)</span><b>85%</b></div>
            <div class="inv-bar"><div class="inv-fill" style="width: 85%;"></div></div>
            <div class="inv-line" style="margin-top:4px"><span>Basmati Rice (kg)</span><b style="color:#D97706">Low (20%)</b></div>
            <div class="inv-bar"><div class="inv-fill low" style="width: 20%;"></div></div>
          </div>
        </div>
        <div class="toast-card-body">
          <span class="toast-card-tag">STOCK CONTROL</span>
          <h3 class="toast-card-title">Inventory Management</h3>
          <p class="toast-card-desc">Know what raw materials are available, track recipes, and get automated restocking alerts.</p>
        </div>
      </div>

      <!-- 8. Table Management -->
      <div class="toast-card">
        <div class="toast-card-media">
          <img src="https://images.unsplash.com/photo-1517248135467-4c7edcad34c4?q=80&w=800&auto=format&fit=crop" alt="Restaurant Dining Room Table Layout" loading="lazy">
          <div class="toast-media-scrim"></div>
          <div class="toast-video-scanline"></div>
          <div class="toast-live-badge"><span class="toast-live-dot"></span> FLOOR PLAN</div>
          <div class="toast-circle-arrow">
            <svg viewBox="0 0 24 24"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
          </div>
          <!-- Floating UI Bubble: Floor plan -->
          <div class="toast-ui-bubble table-bubble">
            <div class="bubble-head">
              <span class="bubble-tag">Floor Plan · Main Dining</span>
              <span class="bubble-status" style="background:#D1FAE5;color:#059669">18/24 OCCUPIED</span>
            </div>
            <div class="bubble-amount" style="font-size:13.5px;color:#1F130B;font-weight:800;margin-top:2px">Table 12 · Dining (45m)</div>
            <div class="bubble-sub">Live Bill Total: ₹1,240</div>
          </div>
        </div>
        <div class="toast-card-body">
          <span class="toast-card-tag">LIVE FLOOR PLAN</span>
          <h3 class="toast-card-title">Table Management</h3>
          <p class="toast-card-desc">Manage tables and live dining status from one real-time interactive floor layout view.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Section: How It Works (Interactive Auto-Running Workflow with User's Content) -->
<section class="hiw-section" id="how-it-works">
  <div class="w">
    <!-- Top Centered Main Header -->
    <div class="hiw-header r">
      <h2 class="hiw-main-title">
        <span class="hiw-gradient-title" id="hiw-typing-target">From Customer to Kitchen, Made Simple.</span><span class="hiw-typing-cursor"></span>
      </h2>
    </div>

    <!-- 2-Column Workflow Layout Grid -->
    <div class="hiw-layout-grid r">
      
      <!-- Left Column: Interactive UI Window Card -->
      <div class="hiw-window-card">
        <!-- Top Folder Tabs Header (Real Folder Tab Structure - No Scrolling) -->
        <div class="hiw-tabs-row" id="hiw-tabs">
          <button class="hiw-tab-btn active" data-step="0" title="Take Order">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/><polyline points="14 2 14 8 20 8"/><line x1="16" y1="13" x2="8" y2="13"/><line x1="16" y1="17" x2="8" y2="17"/></svg>
            <span>Order</span>
          </button>
          <button class="hiw-tab-btn" data-step="1" title="Kitchen Routing">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"><path d="M6 13.8A6 6 0 0 1 12 4a6 6 0 0 1 6 9.8V17H6v-3.2zM4 17h16v3H4zM12 4V2"/></svg>
            <span>Kitchen</span>
          </button>
          <button class="hiw-tab-btn" data-step="2" title="Prepare Order">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>
            <span>Prepare</span>
          </button>
          <button class="hiw-tab-btn" data-step="3" title="Bill &amp; Collect">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"><rect x="2" y="5" width="20" height="14" rx="2"/><line x1="2" y1="10" x2="22" y2="10"/></svg>
            <span>Billing</span>
          </button>
          <button class="hiw-tab-btn" data-step="4" title="Track Sales">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"><line x1="18" y1="20" x2="18" y2="10"/><line x1="12" y1="20" x2="12" y2="4"/><line x1="6" y1="20" x2="6" y2="14"/></svg>
            <span>Sales</span>
          </button>
        </div>

        <!-- Window Subbar with Status Indicator -->
        <div class="hiw-window-subbar">
          <div class="hiw-subbar-title" id="hiw-subbar-title">
            <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polygon points="13 2 3 14 12 14 11 22 21 10 12 10 13 2"/></svg>
            <span id="hiw-subbar-text">STEP 01: TAKE THE ORDER</span>
          </div>
          <div class="hiw-subbar-status">LIVE SYNC</div>
        </div>

        <!-- Window Body (Holds the Active Step's UI Mockup) -->
        <div class="hiw-window-body" id="hiw-screen-container">
          <!-- Step 1: Take the Order Mockup (Default with Increased Image Height & Brown Shade) -->
          <div class="mock-s1-wrap">
            <img src="https://images.unsplash.com/photo-1517248135467-4c7edcad34c4?w=800&auto=format&fit=crop&q=80" alt="The Grand Bistro Restaurant Dining" class="mock-cover-img">

            <div class="mock-s1-header">
              <span class="mock-s1-brand">🍽️ The Grand Bistro</span>
              <span class="mock-s1-table">Table 12 · Dine-in</span>
            </div>

            <div class="mock-s1-items">
              <div class="mock-s1-row">
                <div class="mock-s1-left">
                  <img src="https://images.unsplash.com/photo-1544025162-d76694265947?w=160&auto=format&fit=crop&q=80" alt="Paneer Tikka" class="mock-s1-thumb">
                  <div>
                    <div class="mock-s1-name">Paneer Tikka (Chef Special)</div>
                    <div class="mock-s1-sub">Extra Mint Chutney &bull; Less Spicy</div>
                  </div>
                </div>
                <div class="mock-s1-price">&#8377;280</div>
              </div>

              <div class="mock-s1-row">
                <div class="mock-s1-left">
                  <img src="https://images.unsplash.com/photo-1603133872878-684f208fb84b?w=160&auto=format&fit=crop&q=80" alt="Fried Rice" class="mock-s1-thumb">
                  <div>
                    <div class="mock-s1-name">Veg Wok Fried Rice</div>
                    <div class="mock-s1-sub">Fresh Spring Onion &bull; Hakka Style</div>
                  </div>
                </div>
                <div class="mock-s1-price">&#8377;220</div>
              </div>

              <div class="mock-s1-row">
                <div class="mock-s1-left">
                  <img src="https://images.unsplash.com/photo-1668236543090-82eba5ee5976?w=160&auto=format&fit=crop&q=80" alt="Masala Dosa" class="mock-s1-thumb">
                  <div>
                    <div class="mock-s1-name">Crispy Masala Dosa</div>
                    <div class="mock-s1-sub">Coconut Chutney &bull; Hot Sambar</div>
                  </div>
                </div>
                <div class="mock-s1-price">&#8377;140</div>
              </div>
            </div>

            <div class="mock-s1-bottom">
              <span>3 Items Selected &bull; Total &#8377;640</span>
              <span class="mock-s1-pill">✓ Placed via Table QR (Instant)</span>
            </div>
          </div>
        </div>
      </div>

      <!-- Right Column: Auto-Running Stepper Points -->
      <div class="hiw-content-col">
        <p class="hiw-side-desc">Manage menus, streamline orders, coordinate table service, and simplify daily operations &mdash; all through one intelligent restaurant management platform.</p>

        <!-- 5 Steps Running List -->
        <div class="hiw-steps-list" id="hiw-stepper-list">
          
          <!-- Step 01 -->
          <div class="hiw-step-item active" data-step="0">
            <div class="hiw-step-circle">01</div>
            <div class="hiw-step-content">
              <div class="hiw-step-title">Take the Order</div>
              <p class="hiw-step-desc">Take orders from table QR, counter or kiosk.</p>
            </div>
            <div class="hiw-step-progress-bar"></div>
          </div>

          <!-- Step 02 -->
          <div class="hiw-step-item" data-step="1">
            <div class="hiw-step-circle">02</div>
            <div class="hiw-step-content">
              <div class="hiw-step-title">Send to Kitchen</div>
              <p class="hiw-step-desc">Orders reach the right kitchen station instantly.</p>
            </div>
            <div class="hiw-step-progress-bar"></div>
          </div>

          <!-- Step 03 -->
          <div class="hiw-step-item" data-step="2">
            <div class="hiw-step-circle">03</div>
            <div class="hiw-step-content">
              <div class="hiw-step-title">Prepare the Order</div>
              <p class="hiw-step-desc">Your kitchen team sees live order tickets &amp; timers.</p>
            </div>
            <div class="hiw-step-progress-bar"></div>
          </div>

          <!-- Step 04 -->
          <div class="hiw-step-item" data-step="3">
            <div class="hiw-step-circle">04</div>
            <div class="hiw-step-content">
              <div class="hiw-step-title">Bill &amp; Collect</div>
              <p class="hiw-step-desc">Generate crisp GST bills and collect payment.</p>
            </div>
            <div class="hiw-step-progress-bar"></div>
          </div>

          <!-- Step 05 -->
          <div class="hiw-step-item" data-step="4">
            <div class="hiw-step-circle">05</div>
            <div class="hiw-step-content">
              <div class="hiw-step-title">Track Your Business</div>
              <p class="hiw-step-desc">See real-time sales, popular dishes &amp; performance.</p>
            </div>
            <div class="hiw-step-progress-bar"></div>
          </div>

        </div>
      </div>

    </div>
  </div>
</section>

<!-- Section: Customer Experience (Toast-Style Interactive Sticky Scroll Showcase) -->
<section class="cx-showcase-section" id="customer-experience">
  <div class="food-bg-icon float-1" style="top: 15%; left: 2%; width: 120px; height: 120px;" title="Wine Glass & Cocktail">
    <svg viewBox="0 0 24 24"><path d="M8 22h8M12 15v7M12 15a7 7 0 0 0 7-7V3H5v5a7 7 0 0 0 7 7z"/></svg>
  </div>
  <div class="food-bg-icon float-2" style="bottom: 15%; right: 3%; width: 100px; height: 100px;" title="Dining Table">
    <svg viewBox="0 0 24 24"><path d="M4 9h16M5 9v10M19 9v10M9 9V5h6v4M7 15h10"/></svg>
  </div>

  <div class="cx-scroll-track" id="cxScrollTrack">
    <div class="cx-sticky-wrapper" id="cxStickyWrapper">
      <div class="cx-container-box">
        <div class="cx-outer-card r">
          <div class="cx-layout-grid">
            <!-- Left Column: Content & Interactive Feature List -->
            <div class="cx-left-col">
              <div class="cx-header">
                <h2 class="cx-title"><span class="title-grad">Make Every Order</span> <span class="sf">Easier &amp; Faster.</span></h2>
                <p class="cx-subtitle">Give your customers a smooth experience from menu to payment.</p>
              </div>

              <!-- Toast-Style Interactive Feature Stack -->
              <ul class="cx-feature-list" id="cxFeatureList">
                <li class="cx-feature-item active" data-index="0" data-caption="Stunning visual menus that boost appetite &amp; average order value." data-image="{{ asset('assets/images/cx/geni-handheld-terminal.jpg') }}">
                  <span class="cx-feature-item-text">Interactive Digital Menu with Photos</span>
                  <span class="cx-circle-arrow" aria-hidden="true">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
                  </span>
                </li>
                <li class="cx-feature-item" data-index="1" data-caption="Guests scan, order &amp; re-order in seconds without waiting for staff." data-image="{{ asset('assets/images/cx/cx-02-qr-ordering.jpg') }}">
                  <span class="cx-feature-item-text">Instant QR Table Ordering &amp; Reordering</span>
                  <span class="cx-circle-arrow" aria-hidden="true">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
                  </span>
                </li>
                <li class="cx-feature-item" data-index="2" data-caption="One-tap service alerts sent straight to staff smart devices." data-image="{{ asset('assets/images/cx/cx-03-waiter-calling.jpg') }}">
                  <span class="cx-feature-item-text">One-Tap Waiter Calling &amp; Water Requests</span>
                  <span class="cx-circle-arrow" aria-hidden="true">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
                  </span>
                </li>
                <li class="cx-feature-item" data-index="3" data-caption="Zero kitchen mistakes with modifiers, allergy tags &amp; cooking notes." data-image="{{ asset('assets/images/cx/cx-04-cooking-notes.jpg') }}">
                  <span class="cx-feature-item-text">Custom Cooking Notes &amp; Add-ons</span>
                  <span class="cx-circle-arrow" aria-hidden="true">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
                  </span>
                </li>
                <li class="cx-feature-item" data-index="4" data-caption="Effortless group bill splitting and 100% compliant GST receipts." data-image="{{ asset('assets/images/cx/cx-05-split-billing.jpg') }}">
                  <span class="cx-feature-item-text">Instant Split Billing &amp; GST Invoicing</span>
                  <span class="cx-circle-arrow" aria-hidden="true">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
                  </span>
                </li>
                <li class="cx-feature-item" data-index="5" data-caption="Seamless checkout right at the table via UPI, cards or tap." data-image="{{ asset('assets/images/cx/cx-06-contactless-pay.jpg') }}">
                  <span class="cx-feature-item-text">UPI, Card &amp; Contactless Payments</span>
                  <span class="cx-circle-arrow" aria-hidden="true">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
                  </span>
                </li>
                <li class="cx-feature-item" data-index="6" data-caption="Real-time kitchen prep &amp; dispatch tracking right on guest phones." data-image="{{ asset('assets/images/cx/cx-07-live-status.jpg') }}">
                  <span class="cx-feature-item-text">Live Food Prep Status on Guest Phones</span>
                  <span class="cx-circle-arrow" aria-hidden="true">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
                  </span>
                </li>
                <li class="cx-feature-item" data-index="7" data-caption="Inclusive dining with automatic translations &amp; dietary filter badges." data-image="{{ asset('assets/images/cx/cx-08-multi-language.jpg') }}">
                  <span class="cx-feature-item-text">Multi-Language &amp; Dietary Filter Support</span>
                  <span class="cx-circle-arrow" aria-hidden="true">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
                  </span>
                </li>
              </ul>

              <div class="cx-cta-wrap">
                <a href="{{ route('restaurant_signup') }}" class="cx-cta-btn">Make Dining Simple →</a>
              </div>
            </div>

            <!-- Right Column: Visual Card matching Toast Handheld Showcase -->
            <div class="cx-visual-card" id="cxVisualCard">
              <img src="{{ asset('assets/images/cx/geni-handheld-terminal.jpg') }}" alt="Geni Menu Live Handheld POS & Customer Ordering" class="cx-visual-img" id="cxVisualImg" loading="lazy">
              <div class="cx-visual-overlay"></div>
              <div class="cx-live-badge">
                <span class="cx-pulse-dot"></span>
                <span>Live in Restaurant</span>
              </div>
              <div class="cx-bottom-caption" id="cxBottomCaption">
                Stunning visual menus that boost appetite &amp; average order value.
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Section: Your Team -->
<section class="team-section" id="your-team">
  <div class="team-container">
    
    <!-- Section Header -->
    <div class="team-header r">
      <h2 class="team-title">
        Make Daily Work Easier for <span style="background: linear-gradient(135deg, #92400E 0%, #B45309 50%, #D97706 100%); -webkit-background-clip: text; -webkit-text-fill-color: transparent;">Everyone.</span>
      </h2>
      <p class="type-paragraph-lg team-subtitle" style="color: #64748B; max-width: 620px; margin: 0 auto;">
        A simple, connected system that helps every member of your restaurant team work faster, better and together.
      </p>
    </div>

    <!-- Top Bento Showcase Grid (Exact Reference Structure) -->
    <div class="team-bento-grid r">
      <!-- Left Column: Large Hero Photo Card -->
      <div class="team-bento-hero">
        <img src="{{ asset('assets/images/team/team-pos-counter.jpg') }}" alt="Geni Menu Live Staff POS Counter & Customer Service" class="team-hero-img" loading="lazy">
      </div>

      <!-- Right Column: 2 Stacked Cards (Top Live Status Card, Bottom Photo Card) -->
      <div class="team-bento-stack">
        <!-- Top Status Card: Live Inventory & Station Activity -->
        <div class="team-status-card">
          <!-- Row 1 -->
          <div class="team-status-row">
            <div class="team-status-head">
              <span class="team-status-title">Burgers &amp; Sandwiches</span>
              <span class="team-status-badge in-stock">IN STOCK</span>
            </div>
            <div class="team-status-items">42 items</div>
            <div class="team-status-meta">Last counted today at 2:30 PM</div>
          </div>

          <div class="team-status-divider"></div>

          <!-- Row 2 -->
          <div class="team-status-row">
            <div class="team-status-head">
              <span class="team-status-title">Pizza &amp; Pasta</span>
              <span class="team-status-badge low-stock">LOW STOCK</span>
            </div>
            <div class="team-status-items">2 items</div>
            <div class="team-status-meta">Last counted today at 2:45 PM</div>
          </div>
        </div>

        <!-- Bottom Photo Card -->
        <div class="team-bento-sub">
          <img src="{{ asset('assets/images/team/team-staff-service.jpg') }}" alt="Geni Menu Restaurant Service Team" class="team-sub-img" loading="lazy">
        </div>
      </div>
    </div>

    <!-- Bottom 3-Column Feature Row -->
    <div class="team-features-row r">
      <!-- Feature 01: Waitstaff & Mobile Ordering -->
      <div class="team-feature-col">
        <div class="team-feature-icon">
          <svg width="34" height="34" viewBox="0 0 24 24" fill="none">
            <rect x="5" y="2" width="14" height="20" rx="3" stroke="#2563EB" stroke-width="1.8"/>
            <line x1="10" y1="18" x2="14" y2="18" stroke="#2563EB" stroke-width="1.8" stroke-linecap="round"/>
            <line x1="8" y1="6" x2="16" y2="6" stroke="#EA580C" stroke-width="1.8" stroke-linecap="round"/>
            <line x1="8" y1="9.5" x2="14" y2="9.5" stroke="#EA580C" stroke-width="1.8" stroke-linecap="round"/>
            <line x1="8" y1="13" x2="12" y2="13" stroke="#EA580C" stroke-width="1.8" stroke-linecap="round"/>
          </svg>
        </div>
        <h3 class="team-feature-title">Waitstaff &amp; Tableside Ordering</h3>
        <p class="team-feature-desc">Punch table orders instantly, fire KOT tickets in one tap, and respond to customer service bells directly on mobile.</p>
      </div>

      <!-- Feature 02: Kitchen Display & KOT Sync -->
      <div class="team-feature-col">
        <div class="team-feature-icon">
          <svg width="34" height="34" viewBox="0 0 24 24" fill="none">
            <rect x="3" y="3" width="18" height="13" rx="2" stroke="#2563EB" stroke-width="1.8"/>
            <path d="M8 20h8M12 16v4" stroke="#2563EB" stroke-width="1.8" stroke-linecap="round"/>
            <path d="M7 8h10M7 11h6" stroke="#EA580C" stroke-width="1.8" stroke-linecap="round"/>
            <circle cx="15.5" cy="11" r="1.5" fill="#EA580C"/>
          </svg>
        </div>
        <h3 class="team-feature-title">Instant Kitchen Display (KOT) Sync</h3>
        <p class="team-feature-desc">Orders route automatically to the right kitchen and bar stations in real-time, eliminating lost paper slips and prep delays.</p>
      </div>

      <!-- Feature 03: Cashier Billing & Owner Reports -->
      <div class="team-feature-col">
        <div class="team-feature-icon">
          <svg width="34" height="34" viewBox="0 0 24 24" fill="none">
            <rect x="3" y="4" width="18" height="11" rx="2" stroke="#2563EB" stroke-width="1.8"/>
            <path d="M2 19h20" stroke="#2563EB" stroke-width="1.8" stroke-linecap="round"/>
            <line x1="7" y1="12" x2="7" y2="9" stroke="#EA580C" stroke-width="2" stroke-linecap="round"/>
            <line x1="11" y1="12" x2="11" y2="7" stroke="#EA580C" stroke-width="2" stroke-linecap="round"/>
            <line x1="15" y1="12" x2="15" y2="8" stroke="#EA580C" stroke-width="2" stroke-linecap="round"/>
            <line x1="6" y1="17" x2="10" y2="17" stroke="#EA580C" stroke-width="1.8" stroke-linecap="round"/>
          </svg>
        </div>
        <h3 class="team-feature-title">Fast Billing &amp; Live Owner Reports</h3>
        <p class="team-feature-desc">Speed up checkout with split bills and instant payment modes, while owners and managers track live revenue and table turnover.</p>
      </div>
    </div>

  </div>
</section>

<!-- Section: Solutions (Single Row Infinite Loop Carousel Mode) -->
<section id="solutions">
  <div class="food-bg-icon float-1" style="top: 6%; left: 2%; width: 150px; height: 150px;" title="Pizza Slice">
    <svg viewBox="0 0 24 24"><path d="M12 2L2 22h20L12 2zM12 6l6 12H6l6-12z"/><circle cx="12" cy="11" r="1.5"/><circle cx="9" cy="16" r="1.5"/><circle cx="15" cy="16" r="1.5"/></svg>
  </div>
  <div class="food-bg-icon float-3" style="bottom: 5%; right: 2%; width: 140px; height: 140px;" title="Bakery Cake">
    <svg viewBox="0 0 24 24"><path d="M20 21H4a1 1 0 0 1-1-1v-5h18v5a1 1 0 0 1-1 1zM2 15l2-6h16l2 6H2zM12 4v5"/></svg>
  </div>

  <div class="w">
    <div class="sol-header-split r">
      <div class="sol-header-left">
        <h2 class="sol-split-title">Works for Different <span class="sf">Food Businesses.</span></h2>
        <p class="sol-split-desc">Whether you run a restaurant, bakery, canteen or QSR, Geni Menu adapts to the way your business works.</p>
      </div>
      <div class="sol-header-right">
        <a href="{{ route('solutions') }}" class="sol-split-btn">
          Explore All Solutions
          <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
        </a>
      </div>
    </div>
  </div>

  <!-- Single Row Loop Carousel Container -->
  <div class="sol-carousel-wrap r">
    <div class="sol-marquee-track" id="ind"></div>
  </div>
</section>



<!-- Section: Reports & Live Analytics (International Tier-1 SaaS Layout) -->
<section class="reports-section" id="reports">
  <div class="food-bg-icon float-3" style="top: 8%; right: 3%; width: 140px; height: 140px;" title="Sales Growth Chart">
    <svg viewBox="0 0 24 24"><path d="M18 20V10M12 20V4M6 20v-6M3 20h18"/></svg>
  </div>
  <div class="food-bg-icon float-1" style="bottom: 8%; left: 3%; width: 125px; height: 125px;" title="Revenue Currency Tag">
    <svg viewBox="0 0 24 24"><rect x="2" y="5" width="20" height="14" rx="2"/><line x1="2" y1="10" x2="22" y2="10"/><path d="M7 15h2M13 15h4"/></svg>
  </div>

  <div class="w">
    <div class="reports-header r">
      <div class="reports-header-left">
        <h2 class="reports-title">
          <span class="title-grad">Know Exactly How Your</span> <span class="sf">Business Is Doing.</span>
        </h2>
      </div>
      <div class="reports-header-right">
        <p class="reports-subtitle">
          See the information that matters to you — real-time sales volume, payment reconciliation, order turnaround, and multi-branch performance in a unified view.
        </p>
      </div>
    </div>

    
    <!-- Real Software Sales Report Dashboard Preview (Tier-1 SaaS Chrome) -->
    <div class="reports-mockup-frame r">
      <div class="reports-mockup-bar">
        <div class="reports-bar-left">
          <div class="mac-dots">
            <span class="mac-dot mac-red"></span>
            <span class="mac-dot mac-yellow"></span>
            <span class="mac-dot mac-green"></span>
          </div>
          <span class="reports-bar-title">
            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"><line x1="18" y1="20" x2="18" y2="10"/><line x1="12" y1="20" x2="12" y2="4"/><line x1="6" y1="20" x2="6" y2="14"/></svg>
            RESTAURANT SALES &amp; PERFORMANCE DASHBOARD
          </span>
        </div>
        <div class="reports-bar-url">
          <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="11" width="18" height="11" rx="2" ry="2"/><path d="M7 11V7a5 5 0 0 1 10 0v4"/></svg>
          genimenu.app/analytics/sales-report
        </div>
        <div class="reports-bar-sync">
          <span class="pill-live-dot"></span>
          Live Sync &bull; Real-time
        </div>
      </div>
      <div class="reports-image-wrapper">
        <img src="{{ asset('assets/images/reports-sales-dashboard.png') }}" alt="Geni Menu Sales Report and Restaurant Performance Analytics Dashboard" class="reports-saas-img" loading="lazy">
      </div>
    </div>

    <!-- Live Metric KPI Highlights (Directly from Image Data) -->
    <div class="reports-kpi-grid r">
      <div class="reports-kpi-card">
        <div class="kpi-icon-wrap kpi-gold">
          <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"><line x1="12" y1="1" x2="12" y2="23"/><path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"/></svg>
        </div>
        <div class="kpi-body">
          <span class="kpi-label">Weekly Gross Sales</span>
          <div class="kpi-val">&#8377;1,84,750.00</div>
          <span class="kpi-tag kpi-tag-up">&#8593; +14.2% vs last week</span>
        </div>
      </div>

      <div class="reports-kpi-card">
        <div class="kpi-icon-wrap kpi-navy">
          <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"><path d="M6 2L3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4z"/><line x1="3" y1="6" x2="21" y2="6"/><path d="M16 10a4 4 0 0 1-8 0"/></svg>
        </div>
        <div class="kpi-body">
          <span class="kpi-label">Completed Orders</span>
          <div class="kpi-val">428 Orders</div>
          <span class="kpi-tag kpi-tag-neutral">&#8377;431 Avg Order Value</span>
        </div>
      </div>

      <div class="reports-kpi-card">
        <div class="kpi-icon-wrap kpi-blue">
          <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"><rect x="2" y="5" width="20" height="14" rx="2"/><line x1="2" y1="10" x2="22" y2="10"/></svg>
        </div>
        <div class="kpi-body">
          <span class="kpi-label">Counter &amp; Card Settlements</span>
          <div class="kpi-val">&#8377;1,32,450.00</div>
          <span class="kpi-tag kpi-tag-neutral">71.7% of volume</span>
        </div>
      </div>

      <div class="reports-kpi-card">
        <div class="kpi-icon-wrap kpi-green">
          <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"><path d="M12 2v20M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"/></svg>
        </div>
        <div class="kpi-body">
          <span class="kpi-label">UPI &amp; Digital Gateways</span>
          <div class="kpi-val">&#8377;52,300.00</div>
          <span class="kpi-tag kpi-tag-success">&#10003; 100% Reconciled</span>
        </div>
      </div>
    </div>

  </div>
</section>

<!-- Section: Live Suite Showcase (International Tier-1 SaaS Bento Grid) -->
<section class="suite-section" id="suite-showcase">
  <div class="food-bg-icon float-2" style="top: 10%; left: 2%; width: 130px; height: 130px;" title="Touch Screen Kiosk">
    <svg viewBox="0 0 24 24"><rect x="5" y="2" width="14" height="20" rx="3"/><path d="M12 18h.01M9 6h6M9 10h6"/></svg>
  </div>
  <div class="w">
    <div class="suite-header r">
      <div class="suite-header-left">
        <h2 class="suite-title">
          <span class="title-grad">Everything You Need.</span> <span class="sf">Right in Front of You.</span>
        </h2>
      </div>
      <div class="suite-header-right">
        <p class="suite-subtitle">
          One connected system orchestrating your dining floor, kitchen stations, billing counter, and inventory in real time.
        </p>
      </div>
    </div>

    <!-- 6-Card International Bento Grid -->
    <div class="suite-bento-grid r">

      <!-- Card 1: Table Management (Floor Plan) -->
      <div class="suite-bento-card">
        <div class="suite-card-topbar">
          <div class="suite-topbar-left">
            <div class="mac-dots">
              <span class="mac-dot mac-red"></span>
              <span class="mac-dot mac-yellow"></span>
              <span class="mac-dot mac-green"></span>
            </div>
            <span class="suite-card-badge">
              <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M4 9h16M5 9v10M19 9v10M9 9V5h6v4M7 15h10"/></svg>
              TABLE MANAGEMENT
            </span>
          </div>
          <span class="suite-pill-tag pill-blue">LIVE FLOOR PLAN</span>
        </div>
        <div class="suite-visual-box">
          <img src="{{ asset('assets/images/showcase-table-management-crop.png') }}" alt="Table Management View" class="suite-crop-img" loading="lazy">
        </div>
        <div class="suite-card-body">
          <h3 class="suite-module-title">Floor Plan &amp; Table Turnover</h3>
          <p class="suite-module-desc">Real-time table occupancy, guest turn times, and instant seating status across all dining zones.</p>
          <div class="suite-card-footer">
            <span class="footer-dot dot-green"></span>
            <span>14 Seated &bull; 6 Available &bull; 2 Reserved</span>
          </div>
        </div>
      </div>

      <!-- Card 2: Kitchen KOT Tracker (Live KDS) -->
      <div class="suite-bento-card">
        <div class="suite-card-topbar">
          <div class="suite-topbar-left">
            <div class="mac-dots">
              <span class="mac-dot mac-red"></span>
              <span class="mac-dot mac-yellow"></span>
              <span class="mac-dot mac-green"></span>
            </div>
            <span class="suite-card-badge">
              <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M6 13.8A6 6 0 0112 4a6 6 0 016 9.8V17H6v-3.2zM4 17h16v3H4zM12 4V2"/></svg>
              KITCHEN KOT TRACKER
            </span>
          </div>
          <span class="suite-pill-tag pill-amber">LIVE KDS</span>
        </div>
        <div class="suite-visual-box">
          <img src="{{ asset('assets/images/showcase-kitchen-kot.png') }}" alt="Kitchen KOT Tracker" class="suite-crop-img" loading="lazy">
        </div>
        <div class="suite-card-body">
          <h3 class="suite-module-title">Station Routing &amp; Prep Timers</h3>
          <p class="suite-module-desc">Zero paper slips lost. Orders auto-route to main kitchen, pantry, and bar with color-coded timers.</p>
          <div class="suite-card-footer">
            <span class="footer-dot dot-amber"></span>
            <span>12 min Avg Turnaround &bull; 0 Delays</span>
          </div>
        </div>
      </div>

      <!-- Card 3: Ordering Kiosk -->
      <div class="suite-bento-card">
        <div class="suite-card-topbar">
          <div class="suite-topbar-left">
            <div class="mac-dots">
              <span class="mac-dot mac-red"></span>
              <span class="mac-dot mac-yellow"></span>
              <span class="mac-dot mac-green"></span>
            </div>
            <span class="suite-card-badge">
              <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="5" y="2" width="14" height="20" rx="3"/><path d="M12 18h.01M9 6h6M9 10h6"/></svg>
              ORDERING KIOSK
            </span>
          </div>
          <span class="suite-pill-tag pill-purple">ZERO QUEUES</span>
        </div>
        <div class="suite-visual-box">
          <img src="{{ asset('assets/images/showcase-ordering-kiosk.png') }}" alt="Ordering Kiosk Customization" class="suite-crop-img" loading="lazy">
        </div>
        <div class="suite-card-body">
          <h3 class="suite-module-title">Visual Customization &amp; Add-ons</h3>
          <p class="suite-module-desc">Mouthwatering item customizations and smart upsell prompts that boost guest check size by 28%.</p>
          <div class="suite-card-footer">
            <span class="footer-dot dot-green"></span>
            <span>Self-Checkout &bull; Instant Kitchen Sync</span>
          </div>
        </div>
      </div>

      <!-- Card 4: POS & Smart Billing (Interactive Widget) -->
      <div class="suite-bento-card">
        <div class="suite-card-topbar">
          <div class="suite-topbar-left">
            <div class="mac-dots">
              <span class="mac-dot mac-red"></span>
              <span class="mac-dot mac-yellow"></span>
              <span class="mac-dot mac-green"></span>
            </div>
            <span class="suite-card-badge">
              <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="4" width="18" height="12" rx="2"/><path d="M7 20h10M12 16v4M7 8h4M7 11h2"/></svg>
              POS BILLING SYSTEM
            </span>
          </div>
          <span class="suite-pill-tag pill-green">FAST BILLING</span>
        </div>
        <div class="suite-visual-box">
          <div class="suite-pos-widget">
            <div class="suite-pos-tiles">
              <div class="pos-mini-tile">Paneer Tikka<small>&#8377;280</small></div>
              <div class="pos-mini-tile">Butter Naan<small>&#8377;60</small></div>
              <div class="pos-mini-tile active">Filter Coffee<small>&#8377;90</small></div>
              <div class="pos-mini-tile">Biryani<small>&#8377;320</small></div>
              <div class="pos-mini-tile">Gulab Jamun<small>&#8377;110</small></div>
              <div class="pos-mini-tile">Masala Dosa<small>&#8377;140</small></div>
            </div>
            <div class="suite-pos-bill">
              <div class="bill-line"><span>Table 4 &bull; 3 items</span><b>&#8377;430</b></div>
              <div class="bill-line"><span>GST (5%)</span><b>&#8377;22</b></div>
              <div class="bill-line total"><span>Total Bill</span><b>&#8377;452</b></div>
            </div>
          </div>
        </div>
        <div class="suite-card-body">
          <h3 class="suite-module-title">Fast Touch POS &amp; Split Billing</h3>
          <p class="suite-module-desc">Lightning-fast billing counter with instant split checks, discount rules, and compliant GST invoices.</p>
          <div class="suite-card-footer">
            <span class="footer-dot dot-green"></span>
            <span>UPI &bull; Cards &bull; Split Bill &bull; Auto GST</span>
          </div>
        </div>
      </div>

      <!-- Card 5: Inventory & Stock Control -->
      <div class="suite-bento-card">
        <div class="suite-card-topbar">
          <div class="suite-topbar-left">
            <div class="mac-dots">
              <span class="mac-dot mac-red"></span>
              <span class="mac-dot mac-yellow"></span>
              <span class="mac-dot mac-green"></span>
            </div>
            <span class="suite-card-badge">
              <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"/></svg>
              INVENTORY CONTROL
            </span>
          </div>
          <span class="suite-pill-tag pill-rose">STOCK SYNC</span>
        </div>
        <div class="suite-visual-box">
          <div class="suite-inv-widget">
            <div class="inv-bar-item">
              <div class="inv-bar-label"><span>Paneer (kg)</span><b>82%</b></div>
              <div class="inv-bar-track"><div class="inv-bar-fill fill-green" style="width: 82%;"></div></div>
            </div>
            <div class="inv-bar-item">
              <div class="inv-bar-label"><span>Basmati Rice (kg)</span><b>55%</b></div>
              <div class="inv-bar-track"><div class="inv-bar-fill fill-amber" style="width: 55%;"></div></div>
            </div>
            <div class="inv-bar-item">
              <div class="inv-bar-label"><span>Fresh Milk (L) &bull; <em style="color:#F43F5E;font-style:normal;font-weight:700">Low Stock</em></span><b>25%</b></div>
              <div class="inv-bar-track"><div class="inv-bar-fill fill-rose" style="width: 25%;"></div></div>
            </div>
            <div class="inv-bar-item">
              <div class="inv-bar-label"><span>Tea leaves (kg)</span><b>68%</b></div>
              <div class="inv-bar-track"><div class="inv-bar-fill fill-green" style="width: 68%;"></div></div>
            </div>
          </div>
        </div>
        <div class="suite-card-body">
          <h3 class="suite-module-title">Recipe-Level Stock Deduction</h3>
          <p class="suite-module-desc">Automatic raw material deductions as orders ring up, preventing 86'd items and stockout surprises.</p>
          <div class="suite-card-footer">
            <span class="footer-dot dot-rose"></span>
            <span>1 Low-Stock Alert Active (Fresh Milk)</span>
          </div>
        </div>
      </div>

      <!-- Card 6: Customer Loyalty & CRM -->
      <div class="suite-bento-card">
        <div class="suite-card-topbar">
          <div class="suite-topbar-left">
            <div class="mac-dots">
              <span class="mac-dot mac-red"></span>
              <span class="mac-dot mac-yellow"></span>
              <span class="mac-dot mac-green"></span>
            </div>
            <span class="suite-card-badge">
              <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M17 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2M9 11a4 4 0 100-8 4 4 0 000 8zm14 10v-2a4 4 0 00-3-3.87M16 3.13a4 4 0 010 7.75"/></svg>
              GUEST MANAGEMENT
            </span>
          </div>
          <span class="suite-pill-tag pill-gold">RETENTION CRM</span>
        </div>
        <div class="suite-visual-box">
          <div class="suite-crm-widget">
            <div class="crm-stats-row">
              <div class="crm-stat-box">
                <span>Regular Dining Guests</span>
                <b>84</b>
              </div>
              <div class="crm-stat-box">
                <span>Repeat Visit Rate</span>
                <b>42%</b>
              </div>
            </div>
            <div class="crm-guest-pill">
              <span class="guest-dot-vip"></span>
              <span>VIP Guest &bull; 14 Visits &bull; Auto 10% Cashback</span>
            </div>
          </div>
        </div>
        <div class="suite-card-body">
          <h3 class="suite-module-title">Customer Loyalty &amp; Retention</h3>
          <p class="suite-module-desc">Recognize frequent diners, auto-issue reward cashback points, and run targeted WhatsApp campaigns.</p>
          <div class="suite-card-footer">
            <span class="footer-dot dot-green"></span>
            <span>Automated Cashback &amp; SMS Active</span>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>




<!-- Section: FAQ (International Tier-1 SaaS Layout) -->
<section class="faq-section" id="faq">
  <div class="w">
    <div class="faq-layout">
      <!-- Left Column: Header & Support Contact Card -->
      <div class="faq-left-col r">
        <span class="eb">
          <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><path d="M9.09 9a3 3 0 0 1 5.83 1c0 2-3 3-3 3"/><line x1="12" y1="17" x2="12.01" y2="17"/></svg>
          FREQUENTLY ASKED QUESTIONS
        </span>
        <h2 class="faq-main-title">
          Everything You Need to Know.<br>
          <span class="sf">Before You Start.</span>
        </h2>
        <p class="faq-lead-desc">
          Quick answers to common questions about setting up Geni Menu, billing, KOT, table management, and multi-location operations.
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
      <div class="faq-right-col r">
        <div class="faq" id="fq"></div>
      </div>
    </div>
  </div>
</section>



<script>
const $raw = i => document.getElementById(i);
// Null-safe $ wrapper — silently ignores assignment when element is missing
const $ = i => $raw(i) || { set innerHTML(v){}, get innerHTML(){ return ''; } };

// Authentic Restaurant & Food Industry Icons dictionary (Clean SVG vectors)
const I = {
  m: '<path d="M4 6h16M4 12h16M4 18h10"/><circle cx="18" cy="18" r="3"/><path d="M18 15v6M15 18h6"/>', // Menu board & items
  o: '<path d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2"/><rect x="9" y="3" width="6" height="4" rx="1"/><path d="M9 12l2 2 4-4M9 16h6"/>', // Orders notepad
  t: '<path d="M4 9h16M5 9v10M19 9v10M9 9V5h6v4M7 15h10"/>', // Restaurant Table & chairs
  b: '<rect x="3" y="4" width="18" height="12" rx="2"/><path d="M7 20h10M12 16v4M7 8h4M7 11h2"/>', // POS billing machine
  r: '<path d="M18 20V10M12 20V4M6 20v-6M3 20h18"/>', // Reports & chart
  w: '<path d="M18 8A6 6 0 006 8v4h12V8zM3 16h18v2H3zM12 4v2"/>', // Waiter service bell
  k: '<path d="M6 13.8A6 6 0 0112 4a6 6 0 016 9.8V17H6v-3.2zM4 17h16v3H4zM12 4V2"/>', // Chef hat / KOT
  i: '<path d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"/>', // Inventory box
  a: '<path d="M12 2L3 7v6c0 5.55 3.84 10.74 9 12 5.16-1.26 9-5.45 9-12V7l-9-5z"/><path d="M12 8v8M8 12h8"/>', // Manager badge
  u: '<path d="M2 4l3 12h14l3-12-5 4-5-6-5 6-5-4z"/><circle cx="12" cy="17" r="2"/>', // Owner Crown
  s: '<path d="M17 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2M9 11a4 4 0 100-8 4 4 0 000 8zm14 10v-2a4 4 0 00-3-3.87M16 3.13a4 4 0 010 7.75"/>', // Team staff
  l: '<path d="M3 21h18M3 7v14M21 7v14M6 7l6-4 6 4M9 11h2M13 11h2M9 15h2M13 15h2"/>', // Multi-branch building
  z: '<path d="M13 2L3 14h9l-1 8 10-12h-9l1-8z"/>', // Fast speed lightning
  e: '<path d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5 2 5.42 4.42 3 7.5 3c1.74 0 3.41.81 4.5 2.09C13.09 3.81 14.76 3 16.5 3 19.58 3 22 5.42 22 8.5c0 3.78-3.4 6.86-8.55 11.54L12 21.35z"/>', // Customer rating heart
  g: '<path d="M23 6l-9.5 9.5-5-5L1 18M17 6h6v6"/>', // Growth trending graph
  kio: '<rect x="5" y="2" width="14" height="20" rx="3"/><path d="M12 18h.01M9 6h6M9 10h6"/>', // Self kiosk tablet
  p: '<rect x="2" y="5" width="20" height="14" rx="2"/><line x1="2" y1="10" x2="22" y2="10"/>', // Payment card
  dish: '<path d="M18 16A6 6 0 0 0 6 16v1h12v-1zM4 20h16v1H4zM12 3v3"/>', // Serving Dish / Cloche
  qr: '<rect x="3" y="3" width="7" height="7"/><rect x="14" y="3" width="7" height="7"/><rect x="3" y="14" width="7" height="7"/><path d="M14 14h3v3h-3zM17 17h4v4h-4zM14 20h3v1h-3z"/>', // QR Code
  dev: '<circle cx="7" cy="17" r="2"/><circle cx="17" cy="17" r="2"/><path d="M5 17h10M9 17V9h5l3 4h2v4M9 12h5"/>' // Delivery Scooter
};

const ic = k => `<span class="ic"><svg viewBox="0 0 24 24">${I[k] || I.m}</svg></span>`;
const wm = k => `<div class="card-wm-icon"><svg viewBox="0 0 24 24">${I[k] || I.m}</svg></div>`;

// Solution imagery mapping with high quality food photos
const SOL_IMGS = [
  'https://images.unsplash.com/photo-1517248135467-4c7edcad34c4?q=80&w=600&auto=format&fit=crop', // Family Restaurant
  'https://images.unsplash.com/photo-1550966871-3ed3cdb5ed0c?q=80&w=600&auto=format&fit=crop', // Dine-in Restaurant
  'https://images.unsplash.com/photo-1504674900247-0877df9cc836?q=80&w=600&auto=format&fit=crop', // Multi-Cuisine
  'https://images.unsplash.com/photo-1568901346375-23c9450c58cd?q=80&w=600&auto=format&fit=crop', // QSR
  'https://images.unsplash.com/photo-1526367790999-0150786686a2?q=80&w=600&auto=format&fit=crop', // Takeaway
  'https://images.unsplash.com/photo-1567521464027-f127ff144326?q=80&w=600&auto=format&fit=crop', // College Canteen
  'https://images.unsplash.com/photo-1528605248644-14dd04022da1?q=80&w=600&auto=format&fit=crop', // Office Canteen
  'https://images.unsplash.com/photo-1587314168485-3236d6710814?q=80&w=600&auto=format&fit=crop', // Sweet Shop
  'https://images.unsplash.com/photo-1509440159596-0249088772ff?q=80&w=600&auto=format&fit=crop', // Bakery
  'https://images.unsplash.com/photo-1578985545062-69928b1d9587?q=80&w=600&auto=format&fit=crop', // Cake Shop
  'https://images.unsplash.com/photo-1622483767028-3f66f32aef97?q=80&w=600&auto=format&fit=crop', // Juice Shop
  'https://images.unsplash.com/photo-1570197788417-0e82375c9371?q=80&w=600&auto=format&fit=crop', // Ice Cream Shop
  'https://images.unsplash.com/photo-1601050690597-df0568f70950?q=80&w=600&auto=format&fit=crop', // Chaat Shop
  'https://images.unsplash.com/photo-1576092768241-dec231879fc3?q=80&w=600&auto=format&fit=crop', // Tea Shop
  'https://images.unsplash.com/photo-1514933651103-005eec06c04b?q=80&w=600&auto=format&fit=crop', // Bar & Brewery
  'https://images.unsplash.com/photo-1513104890138-7c749659a591?q=80&w=600&auto=format&fit=crop'  // Pizzeria
];

const tl = (n, s, c = '') => `<div class="t ${c}">${n}<small>${s}</small></div>`;
const win = (t, b, st = '') => `<div class="win" style="${st}"><div class="wb"><i></i><i></i><i></i><b><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M13 2L3 14h9l-1 8 10-12h-9l1-8z"/></svg>${t}</b></div><div class="wc">${b}</div></div>`;
const bars = (a) => a.map(([n, v]) => `<div><div class="row" style="border:0;padding:2px 0"><span>${n}</span><b>${v}%</b></div><div class="bar"><i style="width:${v}%"></i></div></div>`).join('');

// UI Mockups
const POS = win('POS &amp; BILLING', `<div class="g g3">${tl('Paneer Tikka','₹280') + tl('Butter Naan','₹60') + tl('Filter Coffee','₹90','a') + tl('Biryani','₹320') + tl('Gulab Jamun','₹110') + tl('Masala Dosa','₹140')}</div><div><div class="row"><span>Table 4 · 3 items</span><b>₹430</b></div><div class="row"><span>GST (5%)</span><b>₹22</b></div><div class="row"><b>Total Bill</b><b style="color:var(--br);font-size:13px">₹452</b></div></div>`);
const TAB = win('TABLE MANAGEMENT', `<div style="padding:0;overflow:hidden;background:#F8FAFC;"><img src="{{ asset('assets/images/showcase-table-management-crop.png') }}" style="width:100%;height:150px;object-fit:cover;object-position:top left;display:block;" alt="Table Management View"></div>`);
const KOT = win('KOT KITCHEN TRACKER', `<div style="padding:0;overflow:hidden;background:#F8FAFC;"><img src="{{ asset('assets/images/showcase-kitchen-kot.png') }}" style="width:100%;height:150px;object-fit:cover;object-position:top left;display:block;" alt="Kitchen KOT Tracker"></div>`);
const INV = win('INVENTORY STOCK', bars([['Paneer (kg)', 82], ['Basmati Rice (kg)', 55], ['Fresh Milk (L)', 25], ['Tea leaves (kg)', 68]]));
const REP = win('COMPREHENSIVE ANALYTICS &amp; REPORTS', `<div style="padding:0;overflow:hidden;background:#FFFFFF;"><img src="{{ asset('assets/images/reports-sales-dashboard.png') }}" style="width:100%;height:220px;object-fit:cover;object-position:top;display:block;" alt="Geni Menu Sales & Analytics Dashboard"></div>`);
const KIO = win('ORDERING KIOSK', `<div style="padding:0;overflow:hidden;background:#FFFFFF;"><img src="{{ asset('assets/images/showcase-ordering-kiosk.png') }}" style="width:100%;height:150px;object-fit:cover;object-position:center;display:block;" alt="Ordering Kiosk Item Customization"></div>`);

const phone = `<div class="ph1"><div><div style="display:flex;justify-space-between;align-items:center"><b style="font-size:13px;color:var(--ink)">Your Restaurant</b><small style="color:var(--br);font-weight:700">Table 12</small></div><small style="color:var(--mute);margin-bottom:4px">Scan QR &amp; Place Order</small>${[['Paneer Tikka','₹280','https://images.unsplash.com/photo-1567188040759-fb8a883dc6d8?q=80&w=150&auto=format&fit=crop'],['Wood-fired Pizza','₹360','https://images.unsplash.com/photo-1513104890138-7c749659a591?q=80&w=150&auto=format&fit=crop'],['Cold Coffee','₹190','https://images.unsplash.com/photo-1517701604599-bb29b565090c?q=80&w=150&auto=format&fit=crop']].map(([a,b,c]) => `<div class="it"><u style="background-image:url('${c}')"></u><span>${a}</span><em>${b}</em></div>`).join('')}<div class="ct"><span>2 items · ₹640</span><b>Pay Now →</b></div></div></div>`;

const FL = ['Menu Management','Reservation Management','Waiter Requests','Table Management','POS Management','Order Management','KOT Management','Inventory','Reports'];
const SO = ['Family Restaurant','Dine-in Restaurant','Multi-Cuisine Restaurant','QSR','Takeaway Restaurant','College Canteen','Office Canteen','Sweet Shop','Bakery','Cake Shop','Juice Shop','Ice Cream Shop','Chaat Shop','Tea Shop','Bar &amp; Brewery','Pizzeria'];
const BEN = ['Manage tables, orders and billing easily.','Run dine-in service smoothly.','Handle many cuisines, one kitchen flow.','Keep ordering and billing fast.','Manage takeaway orders with ease.','Serve big crowds quickly.','Simple ordering for busy offices.','Manage products, orders and payments.','Manage bakery products &amp; fresh stock.','Track custom cake orders &amp; delivery.','Fast counter billing for drinks.','Quick billing at the ice cream counter.','Keep fast-moving queues moving.','Serve more cups, faster.','Manage bar orders, KOT and stock.','Manage custom pizza orders &amp; delivery.'];

const dd = (l, h, c) => `<div class="dm ${c||''}">${l.map(x => `<a href="${h}">${ic('m')}${x}</a>`).join('')}</div>`;

// Populate Hero - now rendered directly via Blade HTML
// $('hv').innerHTML = ...;

// Quick 4 features (section removed)

// Populate Solutions in a SINGLE CONTINUOUS ROW (Loop Mode duplicated for seamless infinite scroll)
const solHtml = SO.map((t, i) => {
  const k = ['m','t','o','b','k','i','r','w'][i%8];
  const url = '{{ route("solutions") }}';
  return `<a href="${url}" class="so-card" style="text-decoration:none;color:inherit;cursor:pointer;"><div class="im" style="background-image:url('${SOL_IMGS[i]}')"></div><div class="so-icon-badge">${ic(k)}</div><div class="so-body"><h3>${t}</h3><p>${BEN[i]}</p><span class="ar">View Solution →</span></div>${wm(k)}</a>`;
}).join('');

// Duplicate 2x for seamless continuous infinite marquee loop
$('ind').innerHTML = solHtml + solHtml;

// Growth Cards
$('gr').innerHTML = [['t','ONE BRANCH','Manage your complete daily dining and counter operations.'],['k','MULTIPLE KITCHENS','Keep main kitchen, pantry and bar orders organized.'],['l','MULTIPLE BRANCHES','Manage all your restaurant outlets from one central dashboard.']].map(([i,t,d]) => `<div class="card r">${ic(i)}<h3>${t}</h3><p>${d}</p>${wm(i)}</div>`).join('');

// Showcase Section - now statically rendered via Blade HTML international Bento grid
// $('sh').innerHTML = ...;


// FAQ Accordion (5 Core Questions - First item open by default for international SaaS UX)
$('fq').innerHTML = [
  ['What can I manage with Geni Menu?', 'Your menu, tables, reservations, orders, KOT, billing, inventory, staff, customer loyalty and multi-branch reports.'],
  ['Who can use Geni Menu?', 'Restaurants, cafés, bakeries, QSRs, canteens, sweet shops, bars, food courts and cloud kitchens.'],
  ['Can I manage multiple branches?', 'Yes. You can manage all your outlets, prices, and consolidated sales reports from one central dashboard.'],
  ['Can I manage multiple kitchen stations?', 'Yes. Orders automatically route to specific kitchens (e.g. Pantry, Main Kitchen, Bar) instantly.'],
  ['Does Geni Menu support GST billing and POS?', 'Yes. Generate compliant GST bills, split bills, and accept UPI, Cards, Cash, and Online payments.']
].map(([q,a], idx) => `<div class="q${idx === 0 ? ' o' : ''}"><button>${q}<i>+</i></button><div class="a"><div><p>${a}</p></div></div></div>`).join('');

document.querySelectorAll('.q button').forEach(b => b.onclick = () => b.parentNode.classList.toggle('o'));

// How It Works: 5-Step Operational Workflow Auto-Running Stepper
const HIW_STEPS_DATA = [
  {
    subbar: 'STEP 01: TAKE THE ORDER (QR, COUNTER & KIOSK)',
    html: `
      <div class="mock-s1-wrap">
        <img src="https://images.unsplash.com/photo-1517248135467-4c7edcad34c4?w=800&auto=format&fit=crop&q=80" alt="The Grand Bistro Restaurant Dining" class="mock-cover-img">
        <div class="mock-s1-header">
          <span class="mock-s1-brand">🍽️ The Grand Bistro</span>
          <span class="mock-s1-table">Table 12 · Dine-in</span>
        </div>
        <div class="mock-s1-items">
          <div class="mock-s1-row">
            <div class="mock-s1-left">
              <img src="https://images.unsplash.com/photo-1544025162-d76694265947?w=160&auto=format&fit=crop&q=80" alt="Paneer Tikka" class="mock-s1-thumb">
              <div>
                <div class="mock-s1-name">Paneer Tikka (Chef Special)</div>
                <div class="mock-s1-sub">Extra Mint Chutney &bull; Less Spicy</div>
              </div>
            </div>
            <div class="mock-s1-price">&#8377;280</div>
          </div>
          <div class="mock-s1-row">
            <div class="mock-s1-left">
              <img src="https://images.unsplash.com/photo-1603133872878-684f208fb84b?w=160&auto=format&fit=crop&q=80" alt="Fried Rice" class="mock-s1-thumb">
              <div>
                <div class="mock-s1-name">Veg Wok Fried Rice</div>
                <div class="mock-s1-sub">Fresh Spring Onion &bull; Hakka Style</div>
              </div>
            </div>
            <div class="mock-s1-price">&#8377;220</div>
          </div>
          <div class="mock-s1-row">
            <div class="mock-s1-left">
              <img src="https://images.unsplash.com/photo-1668236543090-82eba5ee5976?w=160&auto=format&fit=crop&q=80" alt="Masala Dosa" class="mock-s1-thumb">
              <div>
                <div class="mock-s1-name">Crispy Masala Dosa</div>
                <div class="mock-s1-sub">Coconut Chutney &bull; Hot Sambar</div>
              </div>
            </div>
            <div class="mock-s1-price">&#8377;140</div>
          </div>
        </div>
        <div class="mock-s1-bottom">
          <span>3 Items Selected &bull; Total &#8377;640</span>
          <span class="mock-s1-pill">✓ Placed via Table QR (Instant)</span>
        </div>
      </div>
    `
  },
  {
    subbar: 'STEP 02: ROUTING TO KITCHEN STATIONS',
    html: `
      <div class="mock-s2-wrap">
        <img src="https://images.unsplash.com/photo-1556910103-1c02745aae4d?w=800&auto=format&fit=crop&q=80" alt="Kitchen Display System Station Routing" class="mock-cover-img">
        <div class="mock-s2-header">
          <span>KITCHEN ROUTING SYSTEM</span>
          <span style="color:#059669;font-weight:700;">● 3 ACTIVE STATIONS</span>
        </div>
        <div class="mock-s2-cards">
          <div class="mock-s2-card">
            <div class="mock-s2-info">
              <b>Order #1024 · Table 12 &rarr; Station #1 (Main Kitchen)</b>
              <span>Paneer Tikka (Chef Special) &bull; Veg Fried Rice</span>
            </div>
            <span class="mock-s2-badge prep">IN PREP · 03m</span>
          </div>
          <div class="mock-s2-card new">
            <div class="mock-s2-info">
              <b>Order #1025 · Takeaway #08 &rarr; Station #2 (Tandoor)</b>
              <span>Butter Chicken &bull; Garlic Naan (x2)</span>
            </div>
            <span class="mock-s2-badge new">NEW TICKET</span>
          </div>
          <div class="mock-s2-card ready">
            <div class="mock-s2-info">
              <b>Order #1026 · Table 04 &rarr; Station #3 (Beverages/Dessert)</b>
              <span>Mango Lassi (x2) &bull; Gulab Jamun</span>
            </div>
            <span class="mock-s2-badge ready">READY TO SERVE</span>
          </div>
        </div>
        <div style="background:#FCFAF7;border:1px solid #EFE8DE;border-radius:10px;padding:9px 14px;font-size:12px;color:#78716C;display:flex;justify-content:space-between;align-items:center;">
          <span>⚡ Zero delay: Instant Wi-Fi &amp; Cloud KDS dispatch</span>
          <b style="color:#78350F;">Avg. Dispatch: 1.2s</b>
        </div>
      </div>
    `
  },
  {
    subbar: 'STEP 03: LIVE KOT TICKETS & COOKING TIMERS',
    html: `
      <div class="mock-s3-wrap">
        <img src="https://images.unsplash.com/photo-1577219491135-ce391730fb2c?w=800&auto=format&fit=crop&q=80" alt="Chefs Preparing Fresh Orders in Kitchen" class="mock-cover-img">
        <div class="mock-s3-grid">
          <div class="mock-s3-ticket">
            <div class="mock-s3-top">
              <span>KOT #142 · Table 12</span>
              <span class="mock-s3-timer">⏱️ 03m 42s</span>
            </div>
            <div class="mock-s3-item">1x Paneer Tikka (Less Spicy)</div>
            <div class="mock-s3-item">1x Veg Wok Fried Rice</div>
            <div class="mock-s3-note">Note: Serve mint chutney together</div>
          </div>
          <div class="mock-s3-ticket" style="border-color:#86EFAC;background:#F0FDF4;">
            <div class="mock-s3-top">
              <span>KOT #143 · Table 06</span>
              <span class="mock-s3-timer ready">✓ READY</span>
            </div>
            <div class="mock-s3-item">2x Hyderabadi Dum Biryani</div>
            <div class="mock-s3-item">1x Raita &bull; Salan</div>
            <div class="mock-s3-note" style="color:#15803D;">Waitstaff notified on mobile</div>
          </div>
        </div>
        <div style="display:flex;justify-content:space-between;align-items:center;background:#78350F;color:#FFFFFF;padding:11px 16px;border-radius:12px;font-size:12px;">
          <span>Kitchen Velocity: <strong>98% on-time prep</strong></span>
          <span style="background:rgba(255,255,255,0.18);padding:3px 10px;border-radius:6px;font-weight:700;">Avg. 08 mins</span>
        </div>
      </div>
    `
  },
  {
    subbar: 'STEP 04: ONE-TAP GST BILLING & INSTANT PAYMENT',
    html: `
      <div class="mock-s4-wrap">
        <img src="https://images.unsplash.com/photo-1556742049-0a67c5574f73?w=800&auto=format&fit=crop&q=80" alt="Restaurant Counter POS &amp; GST Billing" class="mock-cover-img">
        <div class="mock-s4-bill">
          <div class="mock-s4-head">
            <span>TAX INVOICE #INV-4821</span>
            <span style="color:#92400E;font-weight:800;">TABLE 12</span>
          </div>
          <div class="mock-s4-line">
            <span>3 Items (Food &amp; Beverage)</span>
            <b>&#8377;609.52</b>
          </div>
          <div class="mock-s4-line">
            <span>CGST (2.5%) + SGST (2.5%)</span>
            <b>&#8377;30.48</b>
          </div>
          <div class="mock-s4-line total">
            <span>Total Amount Payable</span>
            <span style="color:#92400E;">&#8377;640.00</span>
          </div>
          <div class="mock-s4-payrow">
            <div class="mock-s4-paybtn active">UPI QR Pay</div>
            <div class="mock-s4-paybtn">Credit / Debit Card</div>
            <div class="mock-s4-paybtn">Cash</div>
          </div>
        </div>
        <div style="display:flex;justify-content:space-between;align-items:center;padding:0 4px;font-size:12px;color:#78716C;">
          <span>📱 WhatsApp Digital Receipt Sent</span>
          <b style="color:#15803D;">✓ Table Marked Vacant &amp; Cleaned</b>
        </div>
      </div>
    `
  },
  {
    subbar: 'STEP 05: LIVE SALES, PEAK HOURS & BESTSELLERS',
    html: `
      <div class="mock-s5-wrap">
        <img src="https://images.unsplash.com/photo-1551288049-bebda4e38f71?w=800&auto=format&fit=crop&q=80" alt="Live Restaurant Sales &amp; Business Reports" class="mock-cover-img">
        <div class="mock-s5-card">
          <div class="mock-s5-top">
            <div class="mock-s5-metric">
              <small>Today's Total Sales</small>
              <b>&#8377;48,250</b>
            </div>
            <span class="mock-s5-gain">+18.4% vs last week</span>
          </div>
          <div class="mock-s5-bars">
            <div class="mock-s5-bar" style="height:35%" title="12 PM"></div>
            <div class="mock-s5-bar" style="height:60%" title="1 PM"></div>
            <div class="mock-s5-bar" style="height:85%" title="2 PM"></div>
            <div class="mock-s5-bar" style="height:40%" title="4 PM"></div>
            <div class="mock-s5-bar" style="height:70%" title="7 PM"></div>
            <div class="mock-s5-bar peak" style="height:100%" title="8 PM (Peak Rush)"></div>
            <div class="mock-s5-bar" style="height:90%" title="9 PM"></div>
            <div class="mock-s5-bar" style="height:55%" title="10 PM"></div>
          </div>
          <div class="mock-s5-labels">
            <span>12 PM</span>
            <span>2 PM (Lunch Rush)</span>
            <span>8 PM (Dinner Peak)</span>
            <span>11 PM</span>
          </div>
        </div>
        <div style="display:flex;justify-content:space-between;align-items:center;background:#78350F;color:#FFFFFF;padding:11px 16px;border-radius:12px;font-size:12px;">
          <span>Top Item: <strong>Paneer Tikka (42 sold)</strong></span>
          <span style="background:#B45309;color:#FFFFFF;padding:2px 8px;border-radius:6px;font-weight:700;">84 Orders Today</span>
        </div>
      </div>
    `
  }
];

let hiwCurrentStep = 0;
let hiwTimer = null;
let hiwIsHovered = false;
const HIW_STEP_DURATION_MS = 4600; // 4.6 seconds per step

function hiwGoToStep(stepIdx) {
  if (hiwTimer) {
    clearTimeout(hiwTimer);
    hiwTimer = null;
  }

  hiwCurrentStep = (stepIdx + HIW_STEPS_DATA.length) % HIW_STEPS_DATA.length;
  const d = HIW_STEPS_DATA[hiwCurrentStep];
  if (!d) return;

  // 1. Update left window tabs
  const tabBtns = document.querySelectorAll('.hiw-tab-btn');
  tabBtns.forEach((btn, idx) => {
    btn.classList.toggle('active', idx === hiwCurrentStep);
  });

  // 2. Update subbar text
  const subbarEl = document.getElementById('hiw-subbar-text');
  if (subbarEl) subbarEl.textContent = d.subbar;

  // 3. Update window mockup container with smooth fade transition
  const screenEl = document.getElementById('hiw-screen-container');
  if (screenEl) {
    screenEl.style.opacity = '0';
    setTimeout(() => {
      screenEl.innerHTML = d.html;
      screenEl.style.opacity = '1';
    }, 110);
  }

  // 4. Update right side stepper points & restart running progress bar
  const stepItems = document.querySelectorAll('.hiw-step-item');
  stepItems.forEach((item, idx) => {
    const isActive = idx === hiwCurrentStep;
    item.classList.toggle('active', isActive);
    const pbar = item.querySelector('.hiw-step-progress-bar');
    if (pbar) {
      pbar.style.animation = 'none';
      pbar.style.width = '0%';
      if (isActive) {
        // Trigger DOM reflow to restart CSS animation smoothly
        void pbar.offsetWidth;
        pbar.style.animation = `hiwProgressRun ${HIW_STEP_DURATION_MS}ms linear forwards`;
      }
    }
  });

  // 5. Automatic transition: As soon as this step sync finishes, move to the next step
  if (!hiwIsHovered) {
    hiwTimer = setTimeout(() => {
      hiwGoToStep(hiwCurrentStep + 1);
    }, HIW_STEP_DURATION_MS);
  }
}

// Attach Tab Click Listeners
document.querySelectorAll('.hiw-tab-btn').forEach(btn => {
  btn.addEventListener('click', function() {
    const stepIdx = parseInt(this.getAttribute('data-step') || '0', 10);
    hiwGoToStep(stepIdx);
  });
});

// Attach Right Stepper Item Click Listeners
document.querySelectorAll('.hiw-step-item').forEach(item => {
  item.addEventListener('click', function() {
    const stepIdx = parseInt(this.getAttribute('data-step') || '0', 10);
    hiwGoToStep(stepIdx);
  });
});

// Pause on hover so users can comfortably read
const hiwGrid = document.querySelector('.hiw-layout-grid');
if (hiwGrid) {
  hiwGrid.addEventListener('mouseenter', () => {
    hiwIsHovered = true;
    if (hiwTimer) clearTimeout(hiwTimer);
  });
  hiwGrid.addEventListener('mouseleave', () => {
    hiwIsHovered = false;
    hiwGoToStep(hiwCurrentStep);
  });
}

// Start auto-running workflow loop
hiwGoToStep(0);

// Typewriter Animation for How It Works Heading
(function() {
  const fullText = "From Customer to Kitchen, Made Simple.";
  const target = document.getElementById('hiw-typing-target');
  if (!target) return;

  let charIndex = 0;
  let isDeleting = false;
  let isPaused = false;
  const TYPE_SPEED = 75; // 75ms per character
  const DELETE_SPEED = 32; // 32ms backspacing
  const HOLD_DURATION = 5500; // 5.5s pause when full text is typed

  function runTypewriter() {
    if (isPaused) return;

    if (!isDeleting) {
      charIndex++;
      target.textContent = fullText.slice(0, charIndex);

      if (charIndex >= fullText.length) {
        // Complete! Hold for 5.5s to read the gleaming gradient text
        isPaused = true;
        setTimeout(() => {
          isPaused = false;
          isDeleting = true;
          runTypewriter();
        }, HOLD_DURATION);
        return;
      }
      setTimeout(runTypewriter, TYPE_SPEED);
    } else {
      charIndex--;
      target.textContent = fullText.slice(0, charIndex);

      if (charIndex <= 0) {
        isDeleting = false;
        setTimeout(runTypewriter, 400);
        return;
      }
      setTimeout(runTypewriter, DELETE_SPEED);
    }
  }

  // Trigger typewriter when How It Works comes into view or on load
  const hiwSection = document.getElementById('how-it-works');
  let hasStarted = false;

  function startTypingOnce() {
    if (hasStarted) return;
    hasStarted = true;
    target.textContent = '';
    runTypewriter();
  }

  if ('IntersectionObserver' in window && hiwSection) {
    const typingObserver = new IntersectionObserver((entries) => {
      if (entries[0] && entries[0].isIntersecting) {
        startTypingOnce();
        typingObserver.disconnect();
      }
    }, { threshold: 0.1 });
    typingObserver.observe(hiwSection);
    // Fallback if already visible on load
    const rect = hiwSection.getBoundingClientRect();
    if (rect.top < window.innerHeight && rect.bottom > 0) {
      startTypingOnce();
    }
  } else {
    startTypingOnce();
  }
})();

// ============================================================================
// CUSTOMER EXPERIENCE — TOAST-STYLE PINNED SCROLL SHOWCASE
// ============================================================================
(function() {
  const track = document.getElementById('cxScrollTrack');
  const stickyWrapper = document.getElementById('cxStickyWrapper');
  const listItems = document.querySelectorAll('.cx-feature-item');
  const visualImg = document.getElementById('cxVisualImg');
  const bottomCaption = document.getElementById('cxBottomCaption');

  if (!track || !stickyWrapper || !listItems.length || !visualImg || !bottomCaption) return;

  // Preload all 8 dedicated images for zero-delay instant switching
  listItems.forEach(item => {
    const src = item.getAttribute('data-image');
    if (src) {
      const img = new Image();
      img.src = src;
    }
  });

  let currentIndex = 0;
  let isProgrammatic = false;
  let isStepping = false;
  let ticking = false;

  function setActiveFeature(index, force) {
    if (index < 0 || index >= listItems.length) return;
    if (!force && index === currentIndex && listItems[index].classList.contains('active')) return;
    currentIndex = index;

    listItems.forEach((item, idx) => {
      if (idx === index) {
        item.classList.add('active');
      } else {
        item.classList.remove('active');
      }
    });

    const activeItem = listItems[index];
    const newImage = activeItem.getAttribute('data-image');
    const newCaption = activeItem.getAttribute('data-caption');

    // Smooth image transition
    if (newImage && visualImg.getAttribute('src') !== newImage) {
      visualImg.style.opacity = '0.35';
      setTimeout(() => {
        visualImg.src = newImage;
        visualImg.style.opacity = '1';
      }, 100);
    }

    // Smooth caption transition
    if (newCaption) {
      bottomCaption.style.opacity = '0';
      bottomCaption.style.transform = 'translateY(4px)';
      setTimeout(() => {
        bottomCaption.innerHTML = newCaption;
        bottomCaption.style.opacity = '1';
        bottomCaption.style.transform = 'translateY(0)';
      }, 100);
    }
  }

  function syncScrollToItem(index) {
    isProgrammatic = true;
    const currentScrollY = window.pageYOffset || document.documentElement.scrollTop;
    const trackRect = track.getBoundingClientRect();
    const trackAbsoluteTop = currentScrollY + trackRect.top;
    const maxScroll = track.offsetHeight - stickyWrapper.offsetHeight;
    if (maxScroll > 0) {
      const targetScrollY = trackAbsoluteTop - 68 + ((index + 0.35) / listItems.length) * maxScroll;
      window.scrollTo({ top: targetScrollY, behavior: 'auto' });
    }
    setTimeout(() => { isProgrammatic = false; }, 80);
  }

  // Wheel Intercept: when the card is pinned, wheel scrolls advance points one-by-one!
  function onWheel(e) {
    if (window.innerWidth <= 992) return;

    const trackRect = track.getBoundingClientRect();
    const wrapperRect = stickyWrapper.getBoundingClientRect();

    // Check if the sticky wrapper is currently pinned near top
    const isPinned = Math.abs(wrapperRect.top - 68) <= 35 && trackRect.bottom > window.innerHeight * 0.6;

    if (!isPinned) return;

    const delta = e.deltaY;
    if (Math.abs(delta) < 12) return;

    // Scrolling down: step through points until point 7
    if (delta > 0 && currentIndex < listItems.length - 1) {
      e.preventDefault();
      if (!isStepping) {
        isStepping = true;
        setActiveFeature(currentIndex + 1);
        syncScrollToItem(currentIndex);
        setTimeout(() => { isStepping = false; }, 260);
      }
      return;
    }

    // Scrolling up: step backwards until point 0
    if (delta < 0 && currentIndex > 0) {
      e.preventDefault();
      if (!isStepping) {
        isStepping = true;
        setActiveFeature(currentIndex - 1);
        syncScrollToItem(currentIndex);
        setTimeout(() => { isStepping = false; }, 260);
      }
      return;
    }

    // When at currentIndex === 7 and scrolling down:
    // No preventDefault - continues scrolling down to next section!
    // When at currentIndex === 0 and scrolling up:
    // No preventDefault - continues scrolling up to previous section!
  }

  window.addEventListener('wheel', onWheel, { passive: false });

  // Passive scroll listener for drag / touch / key navigation
  function updateScrollProgress() {
    ticking = false;
    if (isProgrammatic) return;
    if (window.innerWidth <= 992) return;

    const trackRect = track.getBoundingClientRect();
    const trackHeight = track.offsetHeight;
    const wrapperHeight = stickyWrapper.offsetHeight;
    const stickyTop = 68;

    const maxScroll = trackHeight - wrapperHeight;
    if (maxScroll <= 0) return;

    const scrolled = stickyTop - trackRect.top;
    const progress = Math.max(0, Math.min(1, scrolled / maxScroll));

    const total = listItems.length;
    let targetIndex = Math.floor(progress * total);
    if (targetIndex >= total) targetIndex = total - 1;
    if (targetIndex < 0) targetIndex = 0;

    if (targetIndex !== currentIndex) {
      setActiveFeature(targetIndex);
    }
  }

  window.addEventListener('scroll', () => {
    if (!ticking) {
      requestAnimationFrame(updateScrollProgress);
      ticking = true;
    }
  }, { passive: true });

  // Clicking any feature item smoothly switches and syncs position
  listItems.forEach((item, index) => {
    item.addEventListener('click', () => {
      setActiveFeature(index);
      if (window.innerWidth > 992) {
        syncScrollToItem(index);
      }
    });

    item.addEventListener('mouseenter', () => {
      setActiveFeature(index);
    });
  });

  // Run on initial load
  setActiveFeature(0, true);
  updateScrollProgress();
})();

// Intersection Observer for scroll entrance animations
const io = new IntersectionObserver(e => e.forEach(x => {
  if (x.isIntersecting) {
    x.target.classList.add('in');
    io.unobserve(x.target);
  }
}), { threshold: 0.1 });

document.querySelectorAll('.r').forEach(e => io.observe(e));

</script>
@endsection