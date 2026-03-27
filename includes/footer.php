<?php $routeBase = $routeBase ?? 'index.php?page='; ?>
<footer class="site-footer">
    <div class="wrap">
        <!-- FOOTER TOP: Newsletter & Brand -->
        <div class="footer-hero">
            <div class="footer-brand-wrap">
                <div class="footer-logo serif">Aaron Holmes <span>Residential</span></div>
                <p class="footer-tagline">Excellence in property sales and management since 2014.</p>
            </div>
            <div class="footer-newsletter">
                <h4 class="serif">OUR NEWSLETTER</h4>
                <p>Stay informed. Subscribe to our luxury market insights and local listings.</p>
                <div class="newsletter-form">
                    <input type="email" id="footer-nl-email" placeholder="E-mail Address" aria-label="Email address for newsletter">
                    <button type="button" onclick="subscribe()">Subscribe Now</button>
                </div>
            </div>
        </div>

        <hr class="footer-divider">

        <!-- FOOTER MAIN: Columns -->
        <div class="footer-grid">
            <div class="footer-column">
                <h5 class="serif">Properties</h5>
                <ul>
                    <li><a href="<?= $routeBase ?>properties">Barkingside</a></li>
                    <li><a href="<?= $routeBase ?>properties">Clayhall</a></li>
                    <li><a href="<?= $routeBase ?>properties">Gants Hill</a></li>
                    <li><a href="<?= $routeBase ?>properties">Ilford</a></li>
                    <li><a href="<?= $routeBase ?>properties">Redbridge</a></li>
                </ul>
            </div>
            <div class="footer-column">
                <h5 class="serif">Services</h5>
                <ul>
                    <li><a href="<?= $routeBase ?>contact">Residential Sales</a></li>
                    <li><a href="<?= $routeBase ?>contact">Lettings</a></li>
                    <li><a href="<?= $routeBase ?>contact">Conveyancing</a></li>
                    <li><a href="<?= $routeBase ?>contact">Mortgages</a></li>
                    <li><a href="<?= $routeBase ?>offices">Consultant & Mentorship</a></li>
                </ul>
            </div>
            <div class="footer-column">
                <h5 class="serif">Company</h5>
                <ul>
                    <li><a href="<?= $routeBase ?>about">About Us</a></li>
                    <li><a href="<?= $routeBase ?>about">Meet the Team</a></li>
                    <li><a href="<?= $routeBase ?>about">Sustainability</a></li>
                    <li><a href="<?= $routeBase ?>about">Careers</a></li>
                    <li><a href="<?= $routeBase ?>insights">Insights</a></li>
                </ul>
            </div>
            <div class="footer-column">
                <h5 class="serif">Locations</h5>
                <ul>
                    <li><a href="<?= $routeBase ?>offices">Ilford Head Office</a></li>
                    <li><a href="<?= $routeBase ?>offices">Gants Hill</a></li>
                    <li><a href="<?= $routeBase ?>offices">United Kingdom</a></li>
                </ul>
            </div>
            <div class="footer-column">
                <h5 class="serif">Contact</h5>
                <address>
                    <p>36 Parham Drive, Gants Hill, Ilford, IG2 6NA</p>
                    <p><a href="tel:02082520115">0208 252 0115</a></p>
                    <p><a href="mailto:info@aaron-holmes.co.uk">info@aaron-holmes.co.uk</a></p>
                </address>
                <div class="footer-social">
                    <a href="#" aria-label="Facebook"><i data-lucide="facebook"></i></a>
                    <a href="#" aria-label="Twitter"><i data-lucide="twitter"></i></a>
                    <a href="#" aria-label="Instagram"><i data-lucide="instagram"></i></a>
                </div>
            </div>
        </div>

        <hr class="footer-divider">

        <!-- FOOTER BOTTOM: Legal & Copyright -->
        <div class="footer-legal">
            <div class="legal-links">
                <a href="#">Privacy Policy</a>
                <a href="#">Cookie Policy</a>
                <a href="#">Terms of Use</a>
                <a href="#">Sitemap</a>
            </div>
            <div class="copyright">
                &copy; <?= date('Y') ?> Aaron Holmes. All Rights Reserved.
            </div>
        </div>
    </div>
</footer>
