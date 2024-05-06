<footer class="footer mt-auto">
    <div class="footer-top">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="footer-content">
                        <h4>Ressources</h4>
                        <ul class="footer-link-list">
                            <li><a href="{{ route('welcome') }}" class="footer-link">Acceuil</a></li>
                            <li><a href="{{ route('faq') }}" class="footer-link">FAQ</a></li>
                            <li><a href="{{ route('contact') }}" class="footer-link">Contactez-Nous</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="footer-content">
                        <h4> Liens Utiles</h4>
                        <ul class="footer-link-list">
                            @auth
                                @if (Auth::user()->role_id == 2)
                                    <li><a href="{{ route('front.event.create') }}" class="footer-link">Créer un
                                            Evènement</a></li>
                                    <li><a href="{{ route('admin.events.index') }}" class="footer-link">Tableau de bord</a>
                                    </li>
                                @endif
                            @endauth
                            <li><a href="#" class="footer-link">Privacy Policy</a></li>
                            <li><a href="#" class="footer-link">Termes & Conditions</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="footer-content">
                        {{-- <h4>Resources</h4>
                        <ul class="footer-link-list">
                            <li><a href="pricing.html" class="footer-link">Pricing</a></li>
                            <li><a href="our_blog.html" class="footer-link">Blog</a></li>
                            <li><a href="refer_a_friend.html" class="footer-link">Refer a Friend</a></li>
                        </ul> --}}
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="footer-content">
                        <h4>Suivez-nous</h4>
                        <ul class="social-links">
                            <li><a href="#" class="social-link"><i class="fab fa-facebook-square"></i></a>
                            <li><a href="#" class="social-link"><i class="fab fa-instagram"></i></a>
                            <li><a href="#" class="social-link"><i class="fab fa-twitter"></i></a>
                            <li><a href="#" class="social-link"><i class="fab fa-linkedin-in"></i></a>
                            <li><a href="#" class="social-link"><i class="fab fa-youtube"></i></a>
                        </ul>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="footer-copyright-text">
                        <p class="mb-0">© 2022, <strong>Barren</strong>.Tous les droits sont réservés.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
