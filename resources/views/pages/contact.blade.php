@extends('layouts.app')

@section('title','Contact')

@section('content')

<x-hero />

<div class="contact-body">

    <!-- FORM -->
    <div class="sr-l show">

        <div class="sa-header">
            <div class="sa-badge">
                <div class="badge-dot"></div>
                Send a Message
            </div>


            <h2 class="sa-title">
                We'll get back <span class="accent">to you</span>fast.
            </h2>
            <p class="sa-subtitle">
                Trusted local expertise, delivered across the province's most vibrant communities.
            </p>
        </div>

        <div id="contactForm">
            <!-- Service type tabs -->
            <div class="stab-label">I need help with</div>
            <div class="service-tabs" id="tabGroup">
                <div class="stab active" data-tab="residential">Residential Clearout</div>
                <div class="stab" data-tab="commercial">Commercial Clearout</div>
                <div class="stab" data-tab="construction">Construction Debris</div>
                <div class="stab" data-tab="other">Other Enquiry</div>
            </div>

            <div class="form-grid" style="margin-top:28px">
                <div class="form-group">
                    <div class="fl-wrap">
                        <input class="fl-input" id="fname" type="text" placeholder=" " autocomplete="off">
                        <label class="fl-label" for="fname">First Name</label>
                    </div>
                </div>
                <div class="form-group">
                    <div class="fl-wrap">
                        <input class="fl-input" id="lname" type="text" placeholder=" " autocomplete="off">
                        <label class="fl-label" for="lname">Last Name</label>
                    </div>
                </div>
                <div class="form-group">
                    <div class="fl-wrap">
                        <input class="fl-input" id="email" type="email" placeholder=" " autocomplete="off">
                        <label class="fl-label" for="email">Email Address</label>
                    </div>
                </div>
                <div class="form-group">
                    <div class="fl-wrap">
                        <input class="fl-input" id="phone" type="tel" placeholder=" " autocomplete="off">
                        <label class="fl-label" for="phone">Phone Number</label>
                    </div>
                </div>
                <div class="form-group full">
                    <div class="fl-wrap">
                        <input class="fl-input" id="address" type="text" placeholder=" " autocomplete="off">
                        <label class="fl-label" for="address">Property Address / Postcode</label>
                    </div>
                </div>
                <div class="form-group full">
                    <div class="fl-wrap" style="position:relative">
                        <select class="fl-select" id="jobsize">
                            <option value="" disabled="" selected=""></option>
                            <option>Small — Single item or van load</option>
                            <option>Medium — Half truck load</option>
                            <option>Large — Full truck load</option>
                            <option>Extra Large — Multiple loads / full site</option>
                        </select>
                        <label class="fl-label" for="jobsize">Estimated Job Size</label>
                        <span style="position:absolute;right:16px;top:50%;transform:translateY(-50%);pointer-events:none;color:var(--soft)">
                            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M6 9l6 6 6-6"></path>
                            </svg>
                        </span>
                    </div>
                </div>
                <div class="form-group full">
                    <div class="fl-wrap">
                        <textarea class="fl-textarea" id="message" placeholder=" "></textarea>
                        <label class="fl-label" for="message">Tell us about your job...</label>
                    </div>
                </div>
            </div>

            <button class="form-submit" id="submitBtn" type="button">
                Send Message <span class="submit-arrow">→</span>
            </button>
            <p class="form-note">We typically respond within 2 hours during business hours</p>
        </div>

        <div class="success-msg" id="successMsg">
            <div class="success-icon">
                <svg viewBox="0 0 24 24">
                    <path d="M20 6L9 17l-5-5"></path>
                </svg>
            </div>
            <div class="success-h">Message sent!</div>
            <p class="success-p">Thanks for reaching out. One of our team will be in touch<br>within 2 hours during business hours.</p>
        </div>
    </div>

    <!-- INFO SIDE -->
    <div class="info-side sr-r show" style="transition-delay:.15s">

        <!-- Contact details card -->
        <div class="info-card">
            <div class="info-card-head">
                <div class="info-card-eyebrow">Direct Contact</div>
                <div class="info-card-title">Reach us <span class="org">now.</span></div>
            </div>
            <div class="info-card-body">
                <div class="info-row">
                    <div class="info-icon"><svg viewBox="0 0 24 24">
                            <path d="M22 16.92v3a2 2 0 01-2.18 2 19.79 19.79 0 01-8.63-3.07A19.5 19.5 0 013.49 12a19.79 19.79 0 01-3.07-8.67A2 2 0 012.4 1.24h3a2 2 0 012 1.72 12.84 12.84 0 00.7 2.81 2 2 0 01-.45 2.11L6.91 9.91a16 16 0 006.13 6.13l1.27-1.27a2 2 0 012.11-.45 12.84 12.84 0 002.81.7A2 2 0 0122 16.92z"></path>
                        </svg></div>
                    <div>
                        <div class="info-text-label">Phone</div>
                        <div class="info-text-val"><a href="tel:08001234567">0800 123 4567</a></div>
                    </div>
                </div>
                <div class="info-row">
                    <div class="info-icon"><svg viewBox="0 0 24 24">
                            <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path>
                            <polyline points="22,6 12,13 2,6"></polyline>
                        </svg></div>
                    <div>
                        <div class="info-text-label">Email</div>
                        <div class="info-text-val"><a href="mailto:hello@clearout.co.uk">hello@clearout.co.uk</a></div>
                    </div>
                </div>
                <div class="info-row">
                    <div class="info-icon"><svg viewBox="0 0 24 24">
                            <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"></path>
                            <circle cx="12" cy="10" r="3"></circle>
                        </svg></div>
                    <div>
                        <div class="info-text-label">Head Office</div>
                        <div class="info-text-val">14 Industrial Park Way,<br>London, EC1A 1BB</div>
                    </div>
                </div>
                <div class="info-row">
                    <div class="info-icon"><svg viewBox="0 0 24 24">
                            <circle cx="12" cy="12" r="10"></circle>
                            <path d="M12 8v4l3 3"></path>
                        </svg></div>
                    <div>
                        <div class="info-text-label">Emergency Line</div>
                        <div class="info-text-val"><a href="tel:07001234567">07001 234 567</a> (24/7)</div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Hours card -->
        <div class="hours-card">
            <div class="hours-card-head">
                <div class="hours-head-icon">
                    <svg viewBox="0 0 24 24">
                        <circle cx="12" cy="12" r="10"></circle>
                        <path d="M12 6v6l4 2"></path>
                    </svg>
                </div>
                <div>
                    <div class="hours-head-title">Opening Hours</div>
                    <div class="hours-head-sub">Available for bookings</div>
                </div>
            </div>
            <div class="hours-body">
                <div class="hours-row"><span class="hours-day">Monday – Friday</span><span class="hours-time">7:00am – 7:00pm</span></div>
                <div class="hours-row"><span class="hours-day">Saturday</span><span class="hours-time">8:00am – 5:00pm</span></div>
                <div class="hours-row"><span class="hours-day">Sunday</span><span class="hours-time">9:00am – 2:00pm</span></div>
                <div class="hours-row"><span class="hours-day">Bank Holidays</span><span class="hours-badge">By request</span></div>
            </div>
        </div>

        <!-- Guarantee strip -->
        <div class="guarantee-strip">
            <div class="guarantee-icon">
                <svg viewBox="0 0 24 24">
                    <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path>
                </svg>
            </div>
            <div>
                <div class="guarantee-title">2-hour response guarantee</div>
                <div class="guarantee-sub">We reply to every enquiry within 2 hours during business hours — or your first collection is discounted 10%.</div>
            </div>
        </div>

    </div>
</div>

<div class="map-section">
    <div class="map-inner">


        <div class="sa-header">
            <div class="sa-badge">
                <div class="badge-dot"></div>
                Coverage Area
            </div>


            <h2 class="sa-title">
                We come <span class="accent">to you.</span>fast.
            </h2>
            <p class="sa-subtitle">
                to you.
        </div>







        <div class="map-grid">
            <div class="map-frame sr-l show">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d11561456.352350302!2d-87.37795645!3d49.25011355!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4cce054d6efe5909%3A0xa5c52e8ed6280650!2sOntario%2C%20Canada!5e0!3m2!1sen!2sca!4v1710000000000!5m2!1sen!2sca" width="100%" height="100%" style="border:0; min-height:360px; display:block; filter: grayscale(20%) contrast(1.05);" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" title="Ontario, Canada Map">
                </iframe>
            </div>
            <div class="coverage-card sr-r show" style="transition-delay:.1s">
                <div class="coverage-title">Areas We Cover</div>
                <div class="coverage-sub">Same-day service available across Ontario, Canada</div>
                <ul class="coverage-list">
                    <li><span class="coverage-dot"></span> Toronto &amp; GTA <span class="coverage-check"><svg viewBox="0 0 24 24">
                                <path d="M20 6L9 17l-5-5"></path>
                            </svg></span></li>
                    <li><span class="coverage-dot"></span> Ottawa &amp; Surrounding <span class="coverage-check"><svg viewBox="0 0 24 24">
                                <path d="M20 6L9 17l-5-5"></path>
                            </svg></span></li>
                    <li><span class="coverage-dot"></span> Hamilton &amp; Burlington <span class="coverage-check"><svg viewBox="0 0 24 24">
                                <path d="M20 6L9 17l-5-5"></path>
                            </svg></span></li>
                    <li><span class="coverage-dot"></span> Mississauga &amp; Brampton <span class="coverage-check"><svg viewBox="0 0 24 24">
                                <path d="M20 6L9 17l-5-5"></path>
                            </svg></span></li>
                    <li><span class="coverage-dot"></span> London &amp; Windsor <span class="coverage-check"><svg viewBox="0 0 24 24">
                                <path d="M20 6L9 17l-5-5"></path>
                            </svg></span></li>
                </ul>
                <div class="postcode-input-wrap">
                    <input type="text" class="postcode-input" placeholder="Check your postal code… e.g. M5V" maxlength="7" id="postcodeInput">
                    <button class="postcode-btn" id="postcodeBtn">
                        <svg viewBox="0 0 24 24">
                            <path d="M5 12h14M12 5l7 7-7 7"></path>
                        </svg>
                    </button>
                </div>
                <div id="postcodeResult" style="font-size: 12.5px; color: rgba(255, 255, 255, 0.45); margin-top: 10px; min-height: 18px;">Please enter a postal code.</div>
            </div>
        </div>
    </div>
</div>
@endsection