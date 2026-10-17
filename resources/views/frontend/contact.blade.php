@php
    $meta = [
        'title' => 'Contact Geni Menu | Restaurant Management Software Support & Sales',
        'description' => 'Contact Geni Menu to discuss your restaurant software requirements, request a product demo, or get support for your existing setup.',
        'keywords' => 'contact Geni Menu, restaurant software demo, restaurant POS sales, Geni Menu support, restaurant billing software contact',
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
  --bg: #FFFFFF;
  --bg2: #F6F9FC;
  --bg3: #EEF2F6;
  --ink: #0A2540;
  --mute: #425466;
  --mute-light: #627D98;
  --line: #E3E8EE;
  --line-light: #F0F4F8;
  --shadow-sm: 0 2px 8px rgba(10, 37, 64, 0.04);
  --shadow-md: 0 8px 24px rgba(10, 37, 64, 0.08);
  --shadow-lg: 0 16px 40px rgba(10, 37, 64, 0.12);
  --green: #10B981;
}

* { box-sizing: border-box; }
html { scroll-behavior: smooth; }
body {
  margin: 0;
  font: 400 16px/1.65 'Inter', system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
  color: var(--ink);
  background: var(--bg) !important;
  overflow-x: hidden;
  -webkit-font-smoothing: antialiased;
}

h1, h2, h3, h4, h5 {
  margin: 0;
  font-family: 'Plus Jakarta Sans', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
  font-weight: 800;
  letter-spacing: -0.035em;
  line-height: 1.15;
  color: var(--ink);
}
h1 { font-size: clamp(36px, 5vw, 56px); }
h2 { font-size: clamp(28px, 3.8vw, 44px); }
h3 { font-size: 20px; font-weight: 700; }
p { margin: 0; color: var(--mute); font-size: 16px; line-height: 1.65; }
a { color: inherit; text-decoration: none; }
ul { list-style: none; margin: 0; padding: 0; }

.eb {
  display: inline-flex;
  align-items: center;
  gap: 8px;
  font-size: 12px;
  letter-spacing: .12em;
  font-weight: 700;
  text-transform: uppercase;
  color: #B45309;
  margin-bottom: 16px;
  background: #FEF3C7;
  padding: 6px 16px;
  border-radius: 99px;
  border: 1px solid rgba(217, 119, 6, 0.25);
  box-shadow: 0 1px 3px rgba(180, 83, 9, 0.08);
}

.w { max-width: 1240px; margin: auto; padding: 0 24px; position: relative; z-index: 1; }
section { padding: clamp(60px, 7vw, 96px) 0; background: var(--bg); position: relative; overflow: hidden; }
section.alt { background: var(--bg2); }

.hd { max-width: 760px; margin: 0 auto 52px; text-align: center; }
.hd p { margin-top: 14px; font-size: 18px; }
.hd.left { text-align: left; margin-left: 0; max-width: 600px; }

/* Buttons */
.btn { display: inline-flex; align-items: center; justify-content: center; gap: 8px; padding: 14px 28px; border-radius: 12px; font: 700 15px 'Plus Jakarta Sans', sans-serif; border: 1px solid transparent; transition: .25s ease; cursor: pointer; text-decoration: none; }
.btn.p { background: #0A2540; color: #fff; box-shadow: 0 4px 16px rgba(10, 37, 64, 0.2); }
.btn.p:hover { transform: translateY(-2px); background: #081d33; box-shadow: 0 8px 24px rgba(10, 37, 64, 0.3); }
.btn.o { color: var(--ink); background: #FFFFFF; border-color: var(--line); }
.btn.o:hover { background: var(--bg2); border-color: #CBD5E1; transform: translateY(-2px); }

/* SVG Icons */
.icon-svg { width: 24px; height: 24px; stroke: currentColor; fill: none; stroke-width: 2; stroke-linecap: round; stroke-linejoin: round; }

/* 3. HERO */
.hero { padding-top: 40px; padding-bottom: 40px; text-align: center; }
.hero-btns { display: flex; gap: 16px; justify-content: center; margin-top: 28px; flex-wrap: wrap; }
.hero-dash { max-width: 900px; margin: 36px auto 0; position: relative; }
.hero-dash img { width: 100%; border-radius: 20px; box-shadow: var(--shadow-lg); border: 1px solid var(--line); }

/* 4 & 5. MAIN CONTACT & FORM */
.contact-wrap { display: grid; grid-template-columns: 1fr 1.2fr; gap: 60px; align-items: start; }
.help-card { background: #fff; border: 1px solid var(--line); border-radius: 16px; padding: 24px; margin-bottom: 20px; display: flex; gap: 16px; transition: .2s; }
.help-card:hover { border-color: var(--br); box-shadow: var(--shadow-md); transform: translateY(-2px); }
.help-card .ic { width: 48px; height: 48px; flex-shrink: 0; background: var(--bg2); border-radius: 12px; color: var(--br); display: grid; place-items: center; }
.help-card h3 { font-size: 18px; margin-bottom: 4px; }
.help-card p { font-size: 14px; margin-bottom: 12px; }
.help-card a { font-size: 14px; font-weight: 500; color: var(--br); display: inline-flex; align-items: center; gap: 4px; }
.help-card a:hover { text-decoration: underline; }

.c-form-box { background: #fff; border: 1px solid var(--line); border-radius: 24px; padding: 40px; box-shadow: var(--shadow-lg); }
.c-form-box h2 { font-size: 28px; margin-bottom: 8px; }
.c-form-box p { font-size: 15px; margin-bottom: 32px; }

.fm-grp { margin-bottom: 20px; }
.fm-grp label { display: block; font-size: 14px; font-weight: 700; color: var(--ink); margin-bottom: 8px; }
.fm-grp label span { color: #EF4444; }
.fm-grp input, .fm-grp select, .fm-grp textarea { width: 100%; padding: 14px 16px; border: 1px solid var(--line); border-radius: 12px; font: 400 15px 'Plus Jakarta Sans', sans-serif; color: var(--ink); background: var(--bg); transition: .2s; }
.fm-grp input:focus, .fm-grp select:focus, .fm-grp textarea:focus { outline: none; border-color: var(--br); box-shadow: 0 0 0 4px rgba(180,83,9,0.12); }
.fm-grid { display: grid; grid-template-columns: 1fr 1fr; gap: 20px; }

.chk-grid { display: grid; grid-template-columns: 1fr 1fr; gap: 12px; }
.chk-item { display: flex; align-items: flex-start; gap: 8px; font-size: 14px; color: var(--mute); cursor: pointer; }
.chk-item input { margin-top: 4px; accent-color: var(--br); width: 16px; height: 16px; }

.fm-submit { width: 100%; margin-top: 12px; }
.fm-note { font-size: 13px; color: var(--mute); text-align: center; margin-top: 16px; }

/* Form States */
.alert-success { background: #d1fae5; color: #065f46; padding: 16px; border-radius: 12px; margin-bottom: 24px; font-weight: 600; font-size: 15px; border: 1px solid #10B981; }
.alert-error { background: #fee2e2; color: #991b1b; padding: 16px; border-radius: 12px; margin-bottom: 24px; font-size: 14px; border: 1px solid #EF4444; }
.alert-error ul { margin-top: 8px; padding-left: 20px; list-style: disc; }

/* 6. BOOK A DEMO SECTION */
.demo-wrap { display: grid; grid-template-columns: 1.2fr 1fr; gap: 60px; align-items: center; }
.demo-img-box { position: relative; }
.demo-img-box img { width: 100%; border-radius: 24px; border: 1px solid var(--line); box-shadow: var(--shadow-lg); }
.demo-feat { display: flex; gap: 16px; margin-bottom: 24px; }
.demo-feat .ic { width: 32px; height: 32px; border-radius: 8px; background: var(--bg2); color: var(--br); display: grid; place-items: center; flex-shrink: 0; }
.demo-feat h4 { font-size: 16px; margin-bottom: 4px; }
.demo-feat p { font-size: 14px; }

/* 7. WHY TALK TO US */
.why-grid { display: grid; grid-template-columns: repeat(4, 1fr); gap: 24px; }
.why-card { background: #fff; border: 1px solid var(--line); border-radius: 20px; padding: 24px; text-align: center; }
.why-card .ic { width: 48px; height: 48px; background: var(--bg2); border-radius: 12px; color: var(--br); display: grid; place-items: center; margin: 0 auto 16px; }
.why-card h4 { font-size: 16px; margin-bottom: 8px; }
.why-card p { font-size: 14px; }

/* 8. BUSINESS TYPES */
.ind-grid { display: grid; grid-template-columns: repeat(3, 1fr); gap: 24px; }
.ind-card { background: #fff; border: 1px solid var(--line); border-radius: 16px; padding: 24px; transition: .2s; }
.ind-card:hover { border-color: var(--br); box-shadow: var(--shadow-md); transform: translateY(-2px); }
.ind-ic { font-size: 32px; margin-bottom: 12px; }
.ind-card h4 { font-size: 18px; margin-bottom: 8px; }
.ind-card p { font-size: 14px; margin-bottom: 16px; min-height: 44px; }
.ind-link { font-size: 13px; font-weight: 500; color: var(--br); }

/* 9. CONTACT INFORMATION */
.info-grid { display: grid; grid-template-columns: repeat(4, 1fr); gap: 24px; }
.info-card { background: #fff; border: 1px solid var(--line); border-radius: 16px; padding: 24px; text-align: center; }
.info-lbl { font-size: 11px; font-weight: 500; color: var(--mute); text-transform: uppercase; letter-spacing: .1em; margin-bottom: 8px; }
.info-val { font-size: 16px; font-weight: 700; color: var(--ink); }

/* 10. OFFICE LOCATION */
.office-wrap { display: grid; grid-template-columns: 1fr 1fr; gap: 60px; align-items: center; }
.map-box { height: 400px; border-radius: 24px; overflow: hidden; border: 1px solid var(--line); background: var(--bg2); }

/* 11. QUICK CONTACT OPTIONS */
.quick-grid { display: grid; grid-template-columns: repeat(3, 1fr); gap: 24px; }
.q-card { background: #fff; border: 1px solid var(--line); border-radius: 16px; padding: 32px; text-align: center; transition: .2s; }
.q-card:hover { border-color: var(--br); box-shadow: var(--shadow-md); transform: translateY(-4px); }
.q-card h2 { font-size: 24px; margin-bottom: 12px; }
.q-card p { font-size: 15px; margin-bottom: 24px; }

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

/* 13. FINAL CTA */
.cta-sec { padding: 90px 0; background: radial-gradient(circle at 50% 0%, #1A2E4C 0%, #0A192F 100%); color: #FFFFFF; text-align: center; position: relative; overflow: hidden; }
.cta-box { position: relative; z-index: 2; max-width: 760px; margin: auto; }
.cta-box h2 { color: #FFFFFF; margin-bottom: 16px; }
.cta-box p { color: #8898AA; font-size: 16.5px; line-height: 1.6; }
.cta-sec .btn.p { background: #FFFFFF !important; color: #0A2540 !important; border-color: #FFFFFF !important; box-shadow: 0 10px 30px rgba(0,0,0,0.3); }
.cta-sec .btn.p:hover { background: #F6F9FC !important; transform: translateY(-2px); box-shadow: 0 16px 40px rgba(0,0,0,0.4); }
.cta-sec .btn.o { background: rgba(255, 255, 255, 0.08) !important; border-color: rgba(255, 255, 255, 0.25) !important; color: #FFFFFF !important; }
.cta-sec .btn.o:hover { background: rgba(255, 255, 255, 0.16) !important; border-color: rgba(255, 255, 255, 0.4) !important; }

/* Responsive */
@media (max-width: 1024px) {
  .contact-wrap, .demo-wrap, .office-wrap { grid-template-columns: 1fr; gap: 36px; }
  .why-grid, .ind-grid, .info-grid { grid-template-columns: repeat(2, 1fr); }
  .quick-grid { grid-template-columns: 1fr; }
}

@media (max-width: 640px) {
  .w { padding: 0 16px; }
  .fm-grid, .chk-grid { grid-template-columns: 1fr; }
  .why-grid, .ind-grid, .info-grid { grid-template-columns: 1fr; }
  .hero-btns { flex-direction: column; }
  .hero-btns .btn { width: 100%; }
  .c-form-box { padding: 22px 16px; border-radius: 16px; }
  .help-card { padding: 18px 16px; }
  .map-box { height: 260px; }
  .faq-item { padding: 16px; }
  .faq-item summary { font-size: 14.5px; }
}
</style>

{{-- 3. HERO --}}
<section class="hero" style="background: #FFFFFF !important;">
    <div class="w">
        <div class="eb">Contact Geni Menu</div>
        <h1>Let’s Build a Smarter Restaurant Business.</h1>
        <p style="max-width:640px; margin:16px auto 0;">Have questions about Geni Menu, pricing, features or the right solution for your business? Talk to our team and discover how Geni Menu can help you manage your restaurant operations more efficiently.</p>
        <div class="hero-btns">
            <a href="#demo" class="btn p">Book a Demo →</a>
            <a href="#form" class="btn o" style="background:#fff;">Talk to Sales →</a>
        </div>
        
        <div class="hero-dash">
            <!-- Using a generic placeholder image to simulate the premium dashboard UI -->
            <img src="https://images.unsplash.com/photo-1551288049-bebda4e38f71?auto=format&fit=crop&w=1200&q=80" alt="Geni Menu Dashboard Overview">
        </div>
    </div>
</section>

{{-- 4 & 5. MAIN CONTACT & FORM --}}
<section id="form">
    <div class="w contact-wrap">
        <div>
            <h2 style="margin-bottom:16px;">We’re Here to Help</h2>
            <p style="margin-bottom:48px;">Whether you are starting a new restaurant, managing an existing outlet or growing into multiple branches, our team can help you find the right Geni Menu setup.</p>
            
            <div class="help-card">
                <div class="ic"><svg class="icon-svg"><rect x="2" y="3" width="20" height="14" rx="2" ry="2"/><line x1="8" y1="21" x2="16" y2="21"/><line x1="12" y1="17" x2="12" y2="21"/></svg></div>
                <div>
                    <h3>Sales & Demo</h3>
                    <p>Want to see Geni Menu in action?</p>
                    <a href="#demo">Book a Demo →</a>
                </div>
            </div>
            
            <div class="help-card">
                <div class="ic"><svg class="icon-svg"><path d="M15.05 5A5 5 0 0 1 19 8.95M15.05 1A9 9 0 0 1 23 8.94m-1 7.98v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg></div>
                <div>
                    <h3>Product Support</h3>
                    <p>Already using Geni Menu and need assistance?</p>
                    <a href="mailto:support@wegeni.com">Contact Support →</a>
                </div>
            </div>

            <div class="help-card">
                <div class="ic"><svg class="icon-svg"><rect x="2" y="7" width="20" height="14" rx="2" ry="2"/><path d="M16 21V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16"/></svg></div>
                <div>
                    <h3>Business Enquiries</h3>
                    <p>Have a partnership, integration or business enquiry?</p>
                    <a href="mailto:business@wegeni.com">Talk to Our Team →</a>
                </div>
            </div>
        </div>

        <div class="c-form-box">
            <h2>Tell Us About Your Business</h2>
            <p>Fill in your details and our team will get back to you.</p>

            @if (session('success'))
                <div class="alert-success">
                    <h2>Thanks for Reaching Out.</h2>
                    <div style="font-weight:400; margin-top:8px;">Your enquiry has been received. Our team will get in touch with you soon.</div>
                    <a href="{{ url('/') }}" style="color:#065f46; font-weight: 500; display:inline-block; margin-top:16px;">Back to Geni Menu →</a>
                </div>
            @endif

            @if ($errors->any())
                <div class="alert-error">
                    <strong>Please fix the following errors:</strong>
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form action="{{ route('contact.submit') }}" method="POST">
                @csrf
                
                <div class="fm-grp">
                    <label>Full Name <span>*</span></label>
                    <input type="text" name="name" value="{{ old('name') }}" required placeholder="Enter your name">
                </div>

                <div class="fm-grid">
                    <div class="fm-grp">
                        <label>Business Name <span>*</span></label>
                        <input type="text" name="company" value="{{ old('company') }}" required placeholder="Enter your restaurant / business name">
                    </div>
                    <div class="fm-grp">
                        <label>Mobile Number <span>*</span></label>
                        <input type="tel" name="phone" value="{{ old('phone') }}" required placeholder="Enter your phone number">
                    </div>
                </div>

                <div class="fm-grp">
                    <label>Email Address <span>*</span></label>
                    <input type="email" name="email" value="{{ old('email') }}" required placeholder="Enter your email address">
                </div>

                <div class="fm-grid">
                    <div class="fm-grp">
                        <label>Business Type <span>*</span></label>
                        <select name="subject" required>
                            <option value="">Select your business type</option>
                            <option value="Restaurant">Restaurant</option>
                            <option value="Dine-in Restaurant">Dine-in Restaurant</option>
                            <option value="Multi-Cuisine Restaurant">Multi-Cuisine Restaurant</option>
                            <option value="QSR">QSR</option>
                            <option value="Takeaway Restaurant">Takeaway Restaurant</option>
                            <option value="Bakery / Cake Shop">Bakery / Cake Shop</option>
                            <option value="Sweet Shop">Sweet Shop</option>
                            <option value="Juice Shop">Juice Shop</option>
                            <option value="Ice Cream Shop">Ice Cream Shop</option>
                            <option value="Chaat Shop">Chaat Shop</option>
                            <option value="Tea Shop">Tea Shop</option>
                            <option value="Bar / Brewery">Bar / Brewery</option>
                            <option value="Pizzeria">Pizzeria</option>
                            <option value="Café">Café</option>
                            <option value="College Canteen">College Canteen</option>
                            <option value="Office Canteen">Office Canteen</option>
                            <option value="Other">Other</option>
                        </select>
                    </div>
                    <div class="fm-grp">
                        <label>Number of Outlets</label>
                        <select name="designation">
                            <option value="1 Outlet">1 Outlet</option>
                            <option value="2-5 Outlets">2–5 Outlets</option>
                            <option value="6-10 Outlets">6–10 Outlets</option>
                            <option value="10+ Outlets">10+ Outlets</option>
                        </select>
                    </div>
                </div>

                <div class="fm-grp" style="margin-bottom:24px;">
                    <label>What Are You Looking For?</label>
                    <div class="chk-grid">
                        <label class="chk-item"><input type="checkbox" name="requirements[]" value="Digital Menu"> Digital Menu</label>
                        <label class="chk-item"><input type="checkbox" name="requirements[]" value="POS & Billing"> POS & Billing</label>
                        <label class="chk-item"><input type="checkbox" name="requirements[]" value="Order Management"> Order Management</label>
                        <label class="chk-item"><input type="checkbox" name="requirements[]" value="Kitchen / KOT"> Kitchen / KOT</label>
                        <label class="chk-item"><input type="checkbox" name="requirements[]" value="Table Management"> Table Management</label>
                        <label class="chk-item"><input type="checkbox" name="requirements[]" value="Inventory"> Inventory</label>
                        <label class="chk-item"><input type="checkbox" name="requirements[]" value="Reports"> Reports</label>
                        <label class="chk-item"><input type="checkbox" name="requirements[]" value="Multi-Branch Management"> Multi-Branch Management</label>
                        <label class="chk-item" style="grid-column:1/-1;"><input type="checkbox" name="requirements[]" value="Complete Restaurant Management"> Complete Restaurant Management</label>
                    </div>
                </div>

                <div class="fm-grp">
                    <label>Message</label>
                    <textarea name="message" rows="3" placeholder="Tell us a little about your requirements...">{{ old('message') }}</textarea>
                </div>

                <button type="submit" class="btn p fm-submit">Send Enquiry →</button>
                <div class="fm-note">Our team will review your enquiry and get in touch with you.</div>
            </form>
        </div>
    </div>
</section>

{{-- 6. BOOK A DEMO SECTION --}}
<section class="alt" id="demo">
    <div class="w demo-wrap">
        <div>
            <div class="eb">See Geni Menu in Action</div>
            <h2 style="margin-bottom:16px;">See How Geni Menu Fits Your Business.</h2>
            <p style="margin-bottom:40px;">A quick product walkthrough can help you understand how Geni Menu can fit into your everyday restaurant operations.</p>
            
            <div class="demo-feat">
                <div class="ic"><svg class="icon-svg"><polygon points="5 3 19 12 5 21 5 3"/></svg></div>
                <div>
                    <h4>Explore the Platform</h4>
                    <p>See the key Geni Menu modules.</p>
                </div>
            </div>
            <div class="demo-feat">
                <div class="ic"><svg class="icon-svg"><path d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z"/></svg></div>
                <div>
                    <h4>Understand Your Workflow</h4>
                    <p>See how different operations connect.</p>
                </div>
            </div>
            <div class="demo-feat">
                <div class="ic"><svg class="icon-svg"><rect x="3" y="3" width="18" height="18" rx="2" ry="2"/><line x1="3" y1="9" x2="21" y2="9"/><line x1="9" y1="21" x2="9" y2="9"/></svg></div>
                <div>
                    <h4>Explore Plans</h4>
                    <p>Understand Standard, Premium and Enterprise options.</p>
                </div>
            </div>
            <div class="demo-feat">
                <div class="ic"><svg class="icon-svg"><path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"/></svg></div>
                <div>
                    <h4>Ask Your Questions</h4>
                    <p>Discuss your specific business requirements with the team.</p>
                </div>
            </div>
            
            <div style="margin-top:40px;">
                <a href="#form" class="btn p">Book a Demo →</a>
            </div>
        </div>

        <div class="demo-img-box">
            <img src="https://images.unsplash.com/photo-1551288049-bebda4e38f71?auto=format&fit=crop&w=800&q=80" alt="Geni Menu Walkthrough Demo">
        </div>
    </div>
</section>

{{-- 7. WHY TALK TO US --}}
<section>
    <div class="w">
        <div class="hd">
            <h2>Not Sure Which Geni Menu Setup You Need?</h2>
            <p>Tell us about your business and we can help you understand the available solution and features.</p>
        </div>

        <div class="why-grid">
            <div class="why-card">
                <div class="ic"><svg class="icon-svg"><line x1="4" y1="21" x2="4" y2="14"/><line x1="4" y1="10" x2="4" y2="3"/><line x1="12" y1="21" x2="12" y2="12"/><line x1="12" y1="8" x2="12" y2="3"/><line x1="20" y1="21" x2="20" y2="16"/><line x1="20" y1="12" x2="20" y2="3"/><line x1="1" y1="14" x2="7" y2="14"/><line x1="9" y1="8" x2="15" y2="8"/><line x1="17" y1="16" x2="23" y2="16"/></svg></div>
                <h4>Choose the Right Features</h4>
                <p>Identify the features relevant to your restaurant operations.</p>
            </div>
            <div class="why-card">
                <div class="ic"><svg class="icon-svg"><polygon points="12 2 2 7 12 12 22 7 12 2"/><polyline points="2 17 12 22 22 17"/><polyline points="2 12 12 17 22 12"/></svg></div>
                <h4>Understand the Plans</h4>
                <p>Explore Standard, Premium and Enterprise options.</p>
            </div>
            <div class="why-card">
                <div class="ic"><svg class="icon-svg"><polyline points="23 6 13.5 15.5 8.5 10.5 1 18"/><polyline points="17 6 23 6 23 12"/></svg></div>
                <h4>Plan for Growth</h4>
                <p>Understand how Geni Menu can support additional outlets and operations as your business grows.</p>
            </div>
            <div class="why-card">
                <div class="ic"><svg class="icon-svg"><path d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z"/></svg></div>
                <h4>Get Product Guidance</h4>
                <p>Discuss your specific requirements with the Geni Menu team.</p>
            </div>
        </div>
    </div>
</section>

{{-- 8. BUSINESS TYPES --}}
<section class="alt">
    <div class="w">
        <div class="hd">
            <h2>Built for Different Food Businesses</h2>
            <p>Whatever your food business model, explore the Geni Menu solution designed around your operations.</p>
        </div>

        <div class="ind-grid">
            <div class="ind-card">
                <div class="ind-ic">🍽️</div>
                <h4>Dine-in Restaurants</h4>
                <p>Manage tables, menus, dine-in orders, KOT and billing.</p>
                <a href="{{ route('solutions') }}" class="ind-link">Explore Solutions →</a>
            </div>
            <div class="ind-card">
                <div class="ind-ic">🍕</div>
                <h4>Pizzerias</h4>
                <p>Manage specialty menus, orders, kitchen workflows and billing.</p>
                <a href="{{ route('solutions') }}" class="ind-link">Explore Solutions →</a>
            </div>
            <div class="ind-card">
                <div class="ind-ic">🍔</div>
                <h4>QSRs</h4>
                <p>Manage fast-moving orders, POS, kitchen and daily operations.</p>
                <a href="{{ route('solutions') }}" class="ind-link">Explore Solutions →</a>
            </div>
            <div class="ind-card">
                <div class="ind-ic">🍰</div>
                <h4>Bakeries</h4>
                <p>Manage products, cake orders, customers, billing and inventory.</p>
                <a href="{{ route('solutions') }}" class="ind-link">Explore Solutions →</a>
            </div>
            <div class="ind-card">
                <div class="ind-ic">🍹</div>
                <h4>Juice & Snack Shops</h4>
                <p>Manage beverages, quick snacks, POS billing and daily stock.</p>
                <a href="{{ route('solutions') }}" class="ind-link">Explore Solutions →</a>
            </div>
            <div class="ind-card">
                <div class="ind-ic">🏢</div>
                <h4>Office Canteens</h4>
                <p>Manage employee food orders, corporate counters and billing.</p>
                <a href="{{ route('solutions') }}" class="ind-link">Explore Solutions →</a>
            </div>
        </div>
    </div>
</section>

{{-- 9. CONTACT INFORMATION --}}
<section>
    <div class="w">
        <div class="hd">
            <h2>Get in Touch</h2>
        </div>

        <div class="info-grid">
            <div class="info-card">
                <div class="info-lbl">SALES</div>
                <div class="info-val">business@wegeni.com</div>
            </div>
            <div class="info-card">
                <div class="info-lbl">SALES & ENQUIRIES</div>
                <div class="info-val">+91 97880 73000</div>
            </div>
            <div class="info-card">
                <div class="info-lbl">BUSINESS ENQUIRIES</div>
                <div class="info-val">business@wegeni.com</div>
            </div>
            <div class="info-card">
                <div class="info-lbl">CUSTOMER SUPPORT</div>
                <div class="info-val">support@wegeni.com</div>
            </div>
        </div>
    </div>
</section>

{{-- 10. OFFICE LOCATION --}}
<section class="alt">
    <div class="w office-wrap">
        <div>
            <h2 style="margin-bottom:16px;">Visit Our Office</h2>
            <p style="margin-bottom:32px;">Connect with the WeGeni team for business discussions, product conversations and other enquiries.</p>
            
            <div style="font-size:16px; color:var(--ink); font-weight:600; line-height:1.6; margin-bottom:32px; padding-left:16px; border-left:4px solid var(--br);">
                WeGeni<br>
                166/1, Thiru Nagar Colony,<br>
                Karur Bypass Road,<br>
                Erode - 638002, Tamil Nadu, India.
            </div>

            <a href="https://maps.google.com/?q=WeGeni+Erode" target="_blank" class="btn p">Get Directions →</a>
        </div>
        
        <div class="map-box">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3911.7589578112117!2d77.7214488!3d11.3283296!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ba96f001f35ab81%3A0xe54bb3dff4b130a0!2sWeGeni!5e0!3m2!1sen!2sin!4v1700000000000!5m2!1sen!2sin" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div>
</section>

{{-- 11. QUICK CONTACT OPTIONS --}}
<section>
    <div class="w">
        <div class="quick-grid">
            <div class="q-card">
                <h2>Book a Demo</h2>
                <p>See how Geni Menu works for your business.</p>
                <a href="#form" class="btn o">Book a Demo →</a>
            </div>
            <div class="q-card">
                <h2>Talk to Sales</h2>
                <p>Discuss pricing, plans and business requirements.</p>
                <a href="#form" class="btn o">Talk to Sales →</a>
            </div>
            <div class="q-card">
                <h2>Get Support</h2>
                <p>Need help with your existing Geni Menu setup?</p>
                <a href="mailto:support@wegeni.com" class="btn o">Get Support →</a>
            </div>
        </div>
    </div>
</section>

{{-- 12. FAQ (International Tier-1 SaaS Layout) --}}
<section class="faq-section" id="faq">
    <div class="w">
        <div class="faq-layout">
            <!-- Left Column: Header & Support Contact Card -->
            <div class="faq-left-col">
                <div class="eb">
                    <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><path d="M9.09 9a3 3 0 0 1 5.83 1c0 2-3 3-3 3"/><line x1="12" y1="17" x2="12.01" y2="17"/></svg>
                    FREQUENTLY ASKED QUESTIONS
                </div>
                <h2 class="faq-main-title">
                    Frequently Asked<br>
                    <span style="font-family:'Playfair Display',Georgia,serif; font-style:italic; font-weight:600; color:var(--br);">Questions & Answers.</span>
                </h2>
                <p class="faq-lead-desc">
                    Find quick answers about getting started with Geni Menu, booking a guided walkthrough, multi-branch operations, and customer support.
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
                    <p class="faq-support-text">Can't find what you're looking for? Talk directly with our team or schedule a live demo.</p>
                    <div class="faq-support-actions">
                        <a href="#form" class="faq-support-btn-primary">Book a Demo &rarr;</a>
                        <a href="mailto:support@wegeni.com" class="faq-support-link">Email Support &rarr;</a>
                    </div>
                </div>
            </div>

            <!-- Right Column: Accordion Items -->
            <div class="faq-right-col">
                <div class="faq-accordion-list">
                    <div class="faq-row open">
                        <button type="button">What is Geni Menu? <i>+</i></button>
                        <div class="faq-answer-wrap">
                            <div>
                                <p>Geni Menu is a restaurant and food-business management platform that brings menu, orders, billing, kitchen, inventory, customers and reports together.</p>
                            </div>
                        </div>
                    </div>

                    <div class="faq-row">
                        <button type="button">Can I get a product demo? <i>+</i></button>
                        <div class="faq-answer-wrap">
                            <div>
                                <p>Yes. You can request a demo to explore Geni Menu and understand how it fits your business.</p>
                            </div>
                        </div>
                    </div>

                    <div class="faq-row">
                        <button type="button">Which businesses can use Geni Menu? <i>+</i></button>
                        <div class="faq-answer-wrap">
                            <div>
                                <p>Geni Menu is designed for restaurants, QSRs, cafés, bakeries, sweet shops, juice shops, ice cream shops, tea shops, pizzerias, canteens and other food businesses.</p>
                            </div>
                        </div>
                    </div>

                    <div class="faq-row">
                        <button type="button">How do I choose the right plan? <i>+</i></button>
                        <div class="faq-answer-wrap">
                            <div>
                                <p>You can compare Standard, Premium and Enterprise plans based on your business requirements and the features you need.</p>
                            </div>
                        </div>
                    </div>

                    <div class="faq-row">
                        <button type="button">Can Geni Menu support multiple branches? <i>+</i></button>
                        <div class="faq-answer-wrap">
                            <div>
                                <p>Multi-branch capabilities are available in applicable plans.</p>
                            </div>
                        </div>
                    </div>

                    <div class="faq-row">
                        <button type="button">Can I contact the team for pricing? <i>+</i></button>
                        <div class="faq-answer-wrap">
                            <div>
                                <p>Yes. Contact the sales team to discuss your business requirements and applicable pricing.</p>
                            </div>
                        </div>
                    </div>

                    <div class="faq-row">
                        <button type="button">How can I get technical support? <i>+</i></button>
                        <div class="faq-answer-wrap">
                            <div>
                                <p>Existing customers can contact the designated Geni Menu support channel for assistance.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- 13. FINAL CTA --}}
<section class="cta-sec">
    <div class="cta-box">
        <h2>Your Restaurant. Smarter by Design.</h2>
        <p>Ready to simplify your restaurant operations? Talk to the Geni Menu team and find the right solution for your business.</p>
        <div style="display:flex; gap:16px; justify-content:center; flex-wrap:wrap; margin-top:32px;">
            <a href="#form" class="btn p">Book a Demo →</a>
            <a href="#form" class="btn o">Get Started →</a>
        </div>
    </div>
</section>

<script>
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