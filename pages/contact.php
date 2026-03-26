    <!-- ==================== CONTACT PAGE ==================== -->
    <div id="page-contact" class="page">
      <div class="page-hero">
        <div class="page-hero-inner">
          <p class="sec-eye">Get in touch</p>
          <h1 class="serif">Contact Us</h1>
          <p>Our team of experts is ready to assist you</p>
        </div>
      </div>
      <section>
        <div class="wrap">
          <div class="contact-grid">
            <div class="reveal-l">
              <h2
                class="serif"
                style="font-size: 30px; font-weight: 300; margin-bottom: 30px"
              >
                Send us a message
              </h2>
              <div class="form-row">
                <div class="form-group">
                  <label>First name</label>
                  <input type="text" id="cf-fn" placeholder="James" />
                </div>
                <div class="form-group">
                  <label>Last name</label>
                  <input type="text" id="cf-ln" placeholder="Whitfield" />
                </div>
              </div>
              <div class="form-group">
                <label>Email address</label>
                <input
                  type="email"
                  id="cf-email"
                  placeholder="james@example.com"
                />
              </div>
              <div class="form-group">
                <label>Phone number</label>
                <input type="tel" id="cf-ph" placeholder="+44 20 7000 0000" />
              </div>
              <div class="form-group">
                <label>Enquiry type</label>
                <select id="cf-type">
                  <option>General enquiry</option>
                  <option>Buying</option>
                  <option>Selling</option>
                  <option>Renting</option>
                  <option>Valuation request</option>
                  <option>Commercial</option>
                  <option>Press enquiry</option>
                </select>
              </div>
              <div class="form-group">
                <label>Message</label>
                <textarea
                  id="cf-msg"
                  placeholder="How can we help you?"
                ></textarea>
              </div>
              <div
                class="form-group"
                style="display: flex; align-items: center; gap: 10px"
              >
                <input type="checkbox" id="cf-consent" style="width: auto" />
                <label
                  for="cf-consent"
                  style="
                    text-transform: none;
                    font-size: 12px;
                    letter-spacing: 0;
                    cursor: pointer;
                  "
                >
                  I agree to be contacted in accordance with the
                  <a href="#" style="color: var(--gold)">Privacy Policy</a>
                </label>
              </div>
              <button
                class="btn-dark"
                onclick="submitForm()"
                style="margin-top: 8px; padding: 14px 36px"
              >
                Send enquiry
              </button>
            </div>
            <div class="reveal-r">
              <h2
                class="serif"
                style="font-size: 30px; font-weight: 300; margin-bottom: 30px"
              >
                Get in touch
              </h2>
              <div class="contact-detail">
                <h5>Head Office</h5>
                <p>55 Baker Street<br />London W1U 8AN<br />United Kingdom</p>
              </div>
              <div class="contact-detail">
                <h5>Telephone</h5>
                <p>+44 (0)20 7629 8171</p>
              </div>
              <div class="contact-detail">
                <h5>Email</h5>
                <p>enquiries@nobleestates.co.uk</p>
              </div>
              <div class="contact-detail">
                <h5>Opening Hours</h5>
                <p>
                  Monday – Friday: 9:00am – 6:00pm<br />Saturday: 10:00am – 4:00pm<br />Sunday: By appointment only
                </p>
              </div>
              <div class="contact-info-box">
                <p class="sec-eye" style="margin-bottom: 8px">Free valuation</p>
                <p
                  style="
                    font-size: 13.5px;
                    color: var(--gray-dark);
                    margin-bottom: 16px;
                    line-height: 1.7;
                  "
                >
                  Find out what your property is worth with a free,
                  no-obligation valuation from one of our local experts.
                </p>
                <button
                  class="btn-dark"
                  style="padding: 11px 24px; font-size: 11px"
                >
                  Book a valuation
                </button>
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>
