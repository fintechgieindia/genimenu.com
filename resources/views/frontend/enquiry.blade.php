@php
    $meta = [
        'title' => 'Enquiry | Geni Menu — Restaurant Management Software',
        'description' => 'Submit your enquiry to the Geni Menu team. Tell us about your restaurant business and we will help you find the right solution.',
        'keywords' => 'Geni Menu enquiry, restaurant software enquiry, restaurant management enquiry, Geni Menu contact, restaurant POS enquiry',
    ];
@endphp
@extends('layouts.frontend-master')

@section('content')

<style>
@import url('https://fonts.cdnfonts.com/css/effra');
*, *::before, *::after { box-sizing: border-box; }
html { scroll-behavior: smooth; }

:root {
  --amber:      #B45309;
  --amber-dark: #92400E;
  --amber-bg:   #FEF3C7;
  --navy:       #0A2540;
  --slate:      #425466;
  --slate-lt:   #627D98;
  --bg:         #F6F9FC;
  --line:       #E3E8EE;
  --green-bg:   #D1FAE5;
  --red:        #EF4444;
  --red-bg:     #FEE2E2;
  --shadow-lg:  0 20px 60px rgba(10,37,64,.13);
}

body {
  margin: 0;
  font: 400 16px/1.65 'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
  color: var(--navy);
  background: var(--bg) !important;
  overflow-x: hidden;
  -webkit-font-smoothing: subpixel-antialiased;
  -moz-osx-font-smoothing: auto;
  text-rendering: optimizeLegibility;
}

h1 { margin: 0; font-family: 'Plus Jakarta Sans', -apple-system, BlinkMacSystemFont, 'Segoe UI', sans-serif; font-weight: 800; letter-spacing: -0.035em; line-height: 1.08; color: var(--navy); }
h2,h3,h4 { margin: 0; font-family: Effra, sans-serif; font-weight: 400; letter-spacing: normal; line-height: 1.15; color: var(--navy); }
p  { margin: 0; color: var(--slate); font-size: 16px; font-family: 'Inter', system-ui, sans-serif; line-height: 1.65; letter-spacing: -0.01em; }
a  { color: inherit; text-decoration: none; }

/* Page wrapper */
.eq-page {
  min-height: 100vh;
  padding: clamp(40px, 6vw, 80px) 24px clamp(48px, 6vw, 80px);
  display: flex; flex-direction: column; align-items: center;
}

/* Badge */
.eq-badge {
  display: inline-flex; align-items: center; gap: 7px;
  font: 700 11px/1 'Plus Jakarta Sans', sans-serif;
  letter-spacing: .12em; text-transform: uppercase; color: var(--amber);
  background: var(--amber-bg); padding: 7px 16px; border-radius: 99px;
  border: 1px solid rgba(217,119,6,.3); margin-bottom: 18px;
}

/* Header */
.eq-header { text-align: center; max-width: 620px; margin-bottom: 40px; }
.eq-header h1 { font-size: clamp(28px, 4vw, 42px); margin-bottom: 14px; }
.eq-header p  { font-size: 16.5px; max-width: 520px; margin: 0 auto; }

/* Form Card */
.eq-card {
  background: #fff; border: 1px solid var(--line); border-radius: 24px;
  padding: clamp(28px, 4vw, 48px) clamp(24px, 4vw, 48px);
  box-shadow: var(--shadow-lg); width: 100%; max-width: 680px;
}

/* Alerts */
.alert-success {
  background: var(--green-bg); color: #065f46;
  padding: 18px 20px; border-radius: 14px; margin-bottom: 28px;
  border: 1px solid #6EE7B7; display: flex; align-items: flex-start; gap: 12px;
}
.alert-success svg { width: 20px; height: 20px; flex-shrink: 0; margin-top: 2px; stroke: currentColor; fill: none; stroke-width: 2; stroke-linecap: round; stroke-linejoin: round; }
.alert-success strong { display: block; font-size: 15px; margin-bottom: 4px; }
.alert-success p  { font-size: 14px; color: #047857; }
.alert-success a  { color: #065f46; font-weight: 600; text-decoration: underline; margin-top: 8px; display: inline-block; }

.alert-error {
  background: var(--red-bg); color: #991b1b;
  padding: 14px 18px; border-radius: 14px; margin-bottom: 24px;
  border: 1px solid #FCA5A5; font-size: 14px;
}
.alert-error strong { display: block; margin-bottom: 8px; font-size: 15px; }
.alert-error ul { padding-left: 18px; list-style: disc; display: flex; flex-direction: column; gap: 4px; margin: 0; }

/* Form groups */
.fg { margin-bottom: 18px; }
.fg label { display: block; font-size: 13.5px; font-weight: 700; color: var(--navy); margin-bottom: 7px; }
.fg label .req { color: var(--red); margin-left: 2px; }
.fg label .opt { font-weight: 400; font-size: 12px; color: var(--slate-lt); margin-left: 5px; }

.fg input, .fg select, .fg textarea {
  width: 100%; padding: 13px 15px;
  border: 1.5px solid var(--line); border-radius: 10px;
  font: 400 15px 'Inter', sans-serif; color: var(--navy);
  background: #fff; transition: border-color .2s, box-shadow .2s;
  appearance: none; -webkit-appearance: none;
}
.fg input::placeholder, .fg textarea::placeholder { color: #A0AEC0; }
.fg input:focus, .fg select:focus, .fg textarea:focus {
  outline: none; border-color: var(--amber);
  box-shadow: 0 0 0 4px rgba(180,83,9,.10);
}
.fg textarea { resize: vertical; min-height: 90px; }

.fg-row { display: grid; grid-template-columns: 1fr 1fr; gap: 14px; }

/* Select arrow */
.sw { position: relative; }
.sw::after {
  content: ''; position: absolute; right: 14px; top: 50%; transform: translateY(-50%);
  border: 5px solid transparent; border-top-color: var(--slate);
  pointer-events: none; margin-top: 3px;
}
.sw select { padding-right: 38px; cursor: pointer; }

/* Checkboxes */
.chk-title { font-size: 13.5px; font-weight: 700; color: var(--navy); margin-bottom: 10px; }
.chk-grid  { display: grid; grid-template-columns: 1fr 1fr; gap: 9px; }
.chk-lbl {
  display: flex; align-items: flex-start; gap: 9px;
  padding: 10px 13px; border: 1.5px solid var(--line); border-radius: 10px;
  cursor: pointer; font-size: 13.5px; color: var(--slate);
  transition: border-color .18s, background .18s; user-select: none;
}
.chk-lbl:hover { border-color: var(--amber); background: var(--amber-bg); }
.chk-lbl.on    { border-color: var(--amber); background: var(--amber-bg); color: var(--amber-dark); font-weight: 600; }
.chk-lbl input { margin-top: 2px; accent-color: var(--amber); width: 14px; height: 14px; flex-shrink: 0; }
.chk-full      { grid-column: 1 / -1; }

/* Divider */
.eq-divider { border: none; border-top: 1px solid var(--line); margin: 22px 0; }

/* Submit */
.eq-submit {
  width: 100%; padding: 15px; border: none; border-radius: 10px;
  background: var(--navy); color: #fff;
  font: 700 15px 'Plus Jakarta Sans', sans-serif;
  cursor: pointer; display: flex; align-items: center; justify-content: center; gap: 9px;
  box-shadow: 0 4px 18px rgba(10,37,64,.22);
  transition: transform .2s, box-shadow .2s, background .2s;
}
.eq-submit:hover  { transform: translateY(-2px); box-shadow: 0 8px 28px rgba(10,37,64,.32); background: #0d2d4a; }
.eq-submit:active { transform: translateY(0); }
.eq-submit svg    { width: 17px; height: 17px; stroke: currentColor; fill: none; stroke-width: 2.2; stroke-linecap: round; stroke-linejoin: round; }

/* Privacy */
.eq-privacy { margin-top: 28px; max-width: 680px; width: 100%; }
.eq-privacy-inner {
  display: flex; align-items: flex-start; gap: 12px;
  background: #fff; border: 1px solid var(--line);
  border-radius: 14px; padding: 16px 20px;
}
.eq-privacy-icon {
  width: 34px; height: 34px; flex-shrink: 0; border-radius: 8px;
  background: var(--bg2); color: var(--slate); display: grid; place-items: center;
}
.eq-privacy-icon svg { width: 16px; height: 16px; stroke: currentColor; fill: none; stroke-width: 2; stroke-linecap: round; stroke-linejoin: round; }
.eq-privacy p { font-size: 13px; color: var(--slate-lt); line-height: 1.55; }
.eq-privacy a { color: var(--amber); font-weight: 600; text-decoration: underline; }
.eq-privacy a:hover { color: var(--amber-dark); }

@media (max-width: 600px) {
  .fg-row, .chk-grid { grid-template-columns: 1fr; }
  .eq-card { border-radius: 18px; }
}
@keyframes eq-spin { to { transform: rotate(360deg); } }
</style>

<div class="eq-page">

  {{-- Header --}}
  <div class="eq-header">
    <div class="eq-badge">
      <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"/></svg>
      Submit Your Enquiry
    </div>
    <h1>Tell Us About Your Restaurant</h1>
    <p>Fill in your details and our team will get back to you within 24 hours with the right Geni Menu solution for your business.</p>
  </div>

  {{-- Form Card --}}
  <div class="eq-card">

    @if (session('success'))
      <div class="alert-success">
        <svg viewBox="0 0 24 24"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/><polyline points="22 4 12 14.01 9 11.01"/></svg>
        <div>
          <strong>Thanks for Reaching Out!</strong>
          <p>Your enquiry has been received. Our team will get in touch within 24 hours.</p>
          <a href="{{ url('/') }}">← Back to Geni Menu</a>
        </div>
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

    <form action="{{ route('contact.submit') }}" method="POST" id="eq-form">
      @csrf

      <div class="fg">
        <label for="eq_name">Full Name <span class="req">*</span></label>
        <input type="text" id="eq_name" name="name" value="{{ old('name') }}" placeholder="Enter your full name" required autocomplete="name">
      </div>

      <div class="fg-row">
        <div class="fg">
          <label for="eq_company">Business Name <span class="req">*</span></label>
          <input type="text" id="eq_company" name="company" value="{{ old('company') }}" placeholder="Restaurant / business name" required autocomplete="organization">
        </div>
        <div class="fg">
          <label for="eq_phone">Mobile Number <span class="req">*</span></label>
          <input type="tel" id="eq_phone" name="phone" value="{{ old('phone') }}" placeholder="+91 98765 43210" required autocomplete="tel">
        </div>
      </div>

      <div class="fg">
        <label for="eq_email">Email Address <span class="req">*</span></label>
        <input type="email" id="eq_email" name="email" value="{{ old('email') }}" placeholder="your@email.com" required autocomplete="email">
      </div>

      <div class="fg-row">
        <div class="fg">
          <label for="eq_subject">Business Type <span class="req">*</span></label>
          <div class="sw">
            <select id="eq_subject" name="subject" required>
              <option value="">Select business type</option>
              <option value="Restaurant"               {{ old('subject')=='Restaurant'               ?'selected':'' }}>Restaurant</option>
              <option value="Dine-in Restaurant"       {{ old('subject')=='Dine-in Restaurant'       ?'selected':'' }}>Dine-in Restaurant</option>
              <option value="Multi-Cuisine Restaurant" {{ old('subject')=='Multi-Cuisine Restaurant' ?'selected':'' }}>Multi-Cuisine Restaurant</option>
              <option value="QSR"                      {{ old('subject')=='QSR'                      ?'selected':'' }}>QSR</option>
              <option value="Takeaway Restaurant"      {{ old('subject')=='Takeaway Restaurant'      ?'selected':'' }}>Takeaway Restaurant</option>
              <option value="Bakery / Cake Shop"       {{ old('subject')=='Bakery / Cake Shop'       ?'selected':'' }}>Bakery / Cake Shop</option>
              <option value="Sweet Shop"               {{ old('subject')=='Sweet Shop'               ?'selected':'' }}>Sweet Shop</option>
              <option value="Juice Shop"               {{ old('subject')=='Juice Shop'               ?'selected':'' }}>Juice Shop</option>
              <option value="Ice Cream Shop"           {{ old('subject')=='Ice Cream Shop'           ?'selected':'' }}>Ice Cream Shop</option>
              <option value="Chaat Shop"               {{ old('subject')=='Chaat Shop'               ?'selected':'' }}>Chaat Shop</option>
              <option value="Tea Shop"                 {{ old('subject')=='Tea Shop'                 ?'selected':'' }}>Tea Shop</option>
              <option value="Bar / Brewery"            {{ old('subject')=='Bar / Brewery'            ?'selected':'' }}>Bar / Brewery</option>
              <option value="Pizzeria"                 {{ old('subject')=='Pizzeria'                 ?'selected':'' }}>Pizzeria</option>
              <option value="Cafe"                     {{ old('subject')=='Cafe'                     ?'selected':'' }}>Cafe</option>
              <option value="College Canteen"          {{ old('subject')=='College Canteen'          ?'selected':'' }}>College Canteen</option>
              <option value="Office Canteen"           {{ old('subject')=='Office Canteen'           ?'selected':'' }}>Office Canteen</option>
              <option value="Other"                    {{ old('subject')=='Other'                    ?'selected':'' }}>Other</option>
            </select>
          </div>
        </div>
        <div class="fg">
          <label for="eq_designation">Number of Outlets <span class="opt">(optional)</span></label>
          <div class="sw">
            <select id="eq_designation" name="designation">
              <option value="1 Outlet"     {{ old('designation')=='1 Outlet'    ?'selected':'' }}>1 Outlet</option>
              <option value="2-5 Outlets"  {{ old('designation')=='2-5 Outlets' ?'selected':'' }}>2-5 Outlets</option>
              <option value="6-10 Outlets" {{ old('designation')=='6-10 Outlets'?'selected':'' }}>6-10 Outlets</option>
              <option value="10+ Outlets"  {{ old('designation')=='10+ Outlets' ?'selected':'' }}>10+ Outlets</option>
            </select>
          </div>
        </div>
      </div>

      <div class="fg" style="margin-bottom:20px;">
        <div class="chk-title">What Are You Looking For? <span style="font-weight:400;font-size:12px;color:var(--slate-lt);">(Select all that apply)</span></div>
        @php $oldReqs = old('requirements', []); @endphp
        <div class="chk-grid">
          @foreach (['Digital Menu','POS & Billing','Order Management','Kitchen / KOT','Table Management','Inventory','Reports','Multi-Branch Management'] as $r)
            <label class="chk-lbl {{ in_array($r,$oldReqs)?'on':'' }}">
              <input type="checkbox" name="requirements[]" value="{{ $r }}" {{ in_array($r,$oldReqs)?'checked':'' }}>
              <span>{{ $r }}</span>
            </label>
          @endforeach
          <label class="chk-lbl chk-full {{ in_array('Complete Restaurant Management',$oldReqs)?'on':'' }}">
            <input type="checkbox" name="requirements[]" value="Complete Restaurant Management" {{ in_array('Complete Restaurant Management',$oldReqs)?'checked':'' }}>
            <span>Complete Restaurant Management</span>
          </label>
        </div>
      </div>

      <hr class="eq-divider">

      <div class="fg">
        <label for="eq_message">Message <span class="req">*</span></label>
        <textarea id="eq_message" name="message" rows="4" placeholder="Tell us about your requirements or any questions you have..." required>{{ old('message') }}</textarea>
      </div>

      <button type="submit" class="eq-submit" id="eq-btn">
        <svg viewBox="0 0 24 24"><line x1="22" y1="2" x2="11" y2="13"/><polygon points="22 2 15 22 11 13 2 9 22 2"/></svg>
        Submit Enquiry
      </button>
    </form>
  </div>

  {{-- Privacy Policy Footer --}}
  <div class="eq-privacy">
    <div class="eq-privacy-inner">
      <div class="eq-privacy-icon">
        <svg viewBox="0 0 24 24"><rect x="3" y="11" width="18" height="11" rx="2" ry="2"/><path d="M7 11V7a5 5 0 0 1 10 0v4"/></svg>
      </div>
      <p>
        By submitting this form, you agree to Geni Menu's
        <a href="{{ route('privacy.policy') }}" target="_blank">Privacy Policy</a>.
        Your information is kept confidential and will only be used to respond to your enquiry. We do not share your data with third parties.
      </p>
    </div>
  </div>

</div>

<script>
(function () {
  document.querySelectorAll('.chk-lbl').forEach(function (lbl) {
    var chk = lbl.querySelector('input[type="checkbox"]');
    if (!chk) return;
    chk.addEventListener('change', function () { lbl.classList.toggle('on', chk.checked); });
  });
  var form = document.getElementById('eq-form');
  var btn  = document.getElementById('eq-btn');
  if (form && btn) {
    form.addEventListener('submit', function () {
      btn.disabled = true;
      btn.innerHTML = '<svg viewBox="0 0 24 24" style="width:17px;height:17px;stroke:currentColor;fill:none;stroke-width:2.2;stroke-linecap:round;animation:eq-spin 1s linear infinite"><circle cx="12" cy="12" r="9" stroke-dasharray="56" stroke-dashoffset="18" opacity=".35"/><path d="M12 3a9 9 0 0 1 9 9"/></svg> Submitting...';
    });
  }
})();
</script>

@endsection
