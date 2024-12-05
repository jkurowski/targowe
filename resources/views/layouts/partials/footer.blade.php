<footer
        class="text-center text-md-start position-relative footer pt-4 margin-sm bg-primary"
>
    <div class="container position-relative z-1">
        <div class="row gy-5 position-relative align-items-center">
            <!-- ---------- -->
            <!-- LOGO  -->
            <!-- ---------- -->
            <div class="pt-lg-5 col-12 col-md-12 col-lg-3 align-self-start">
                <div class="mt-lg-5 d-flex d-lg-block justify-content-center">
                    <a
                            class="text-center d-inline-flex justify-content-center"
                            href="index.html"
                    >
                        <img
                                loading="lazy"
                                class="img-fluid logo-footer"
                                src="{{ asset('images/reusable/footer-logo.svg') }}"
                                width="320"
                                height="188"
                                alt="Logo Osiedle Targowe"
                        />
                    </a>
                </div>
            </div>
            <!-- ---------- -->
            <!-- Menu -->
            <!-- ---------- -->
            <div class="col-12 col-md-5 offset-md-1 col-lg-3">
                <p class="footer-title pb-4 mb-0">Menu</p>
                <ul class="list-unstyled">
                    <li class="pb-4">
                        <a class="footer-link" href="{{ route('static.deweloper') }}"
                        ><span>Deweloper</span></a
                        >
                    </li>
                    <li class="pb-4">
                        <a class="footer-link" href="{{ route('about') }}"
                        ><span>O Inwestycji</span></a
                        >
                    </li>
                    <li class="pb-4">
                        <a class="footer-link" href="{{ route('plan') }}"
                        ><span>Mieszkania</span></a
                        >
                    </li>
                    <li class="pb-4">
                        <a class="footer-link" href="{{ route('gallery') }}"
                        ><span>Galeria</span></a
                        >
                    </li>
                    <li class="pb-4">
                        <a class="footer-link" href="{{ route('static.udogodnienia') }}"
                        ><span>Udogodnienia</span></a
                        >
                    </li>
                    <li class="pb-md-4">
                        <a class="footer-link" href="{{ route('contact.index') }}"
                        ><span>Kontakt</span></a
                        >
                    </li>
                </ul>
            </div>
            <!-- ---------- -->
            <!-- Divder -->
            <!-- ---------- -->
            <div class="vr divider-vr d-none d-md-inline-block"></div>
            <!-- ---------- -->
            <!-- Kontakt -->
            <!-- ---------- -->
            <div class="col-12 col-md-4 offset-md-1 col-lg-3">
                <div class="row h-100">
                    <div class="col-12">
                        <p class="footer-title pb-4 mb-0">Kontakt</p>
                        <ul class="list-unstyled footer-contacts">
                            <li class="pb-3">
                                <a
                                        class="nav-link"
                                        href="mailto:mieszkania@wgwstalbet.eu"
                                        aria-label="skontaktuj się z nami"
                                >
                                    <svg
                                            xmlns="http://www.w3.org/2000/svg"
                                            width="16.903"
                                            height="13.522"
                                            viewBox="0 0 16.903 13.522"
                                            aria-label="email"
                                    >
                                        <path
                                                id="Icon_material-email"
                                                data-name="Icon material-email"
                                                d="M18.213,6H4.69A1.688,1.688,0,0,0,3.008,7.69L3,17.832a1.7,1.7,0,0,0,1.69,1.69H18.213a1.7,1.7,0,0,0,1.69-1.69V7.69A1.7,1.7,0,0,0,18.213,6Zm0,3.381-6.761,4.226L4.69,9.381V7.69l6.761,4.226L18.213,7.69Z"
                                                transform="translate(-3 -6)"
                                                fill="currentColor"
                                        />
                                    </svg>
                                    mieszkania@wgwstalbet.eu</a
                                >
                            </li>
                            <li class="pb-3">
                                <a
                                        class="nav-link"
                                        href="tel:+48696162406"
                                        aria-label="Zadzwoń"
                                >
                                    <svg
                                            xmlns="http://www.w3.org/2000/svg"
                                            width="16.903"
                                            height="16.903"
                                            viewBox="0 0 16.903 16.903"
                                    >
                                        <path
                                                id="Icon_awesome-phone-alt"
                                                data-name="Icon awesome-phone-alt"
                                                d="M16.421,11.945l-3.7-1.585a.792.792,0,0,0-.924.228l-1.638,2a12.237,12.237,0,0,1-5.85-5.85l2-1.638a.79.79,0,0,0,.228-.924L4.955.479A.8.8,0,0,0,4.048.02L.614.813A.792.792,0,0,0,0,1.585,15.317,15.317,0,0,0,15.319,16.9a.792.792,0,0,0,.773-.614l.792-3.433A.8.8,0,0,0,16.421,11.945Z"
                                                transform="translate(0 0)"
                                                fill="currentColor"
                                        />
                                    </svg>
                                    696 162 406
                                </a>
                            </li>
                            <!-- LOCATION -->
                            <li class="pb-3 d-flex gap-3 location-li">
                                <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        width="15.504"
                                        height="22.148"
                                        viewBox="0 0 15.504 22.148"
                                >
                                    <path
                                            id="Icon_material-location-on"
                                            data-name="Icon material-location-on"
                                            d="M15.252,3A7.746,7.746,0,0,0,7.5,10.752c0,5.814,7.752,14.4,7.752,14.4S23,16.566,23,10.752A7.746,7.746,0,0,0,15.252,3Zm0,10.52a2.768,2.768,0,1,1,2.768-2.768A2.77,2.77,0,0,1,15.252,13.52Z"
                                            transform="translate(-7.5 -3)"
                                            fill="#FFFBF5"
                                    />
                                </svg>
                                <span class="text-secondary text-start footer-location">
                      ul. Warszawska 79, <br />
                      98-100 Łask
                    </span>
                            </li>
                        </ul>
                    </div>
                    <!-- ---------- -->
                    <!-- SOCIAL MEDIA  -->
                    <!-- ---------- -->
                    <div class="col-12 align-self-end mt-3">
                        <p class="footer-title pb-4 mb-0">SOCIAL MEDIA</p>
                        <ul class="list-unstyled footer-icons">
                            <!-- ---------- -->
                            <!-- FACEBOOK  -->
                            <!-- ---------- -->
                            <li class="nav-item pb-3">
                                <a href="https://www.facebook.com/" aria-label="facebook">
                                    <svg
                                            xmlns="http://www.w3.org/2000/svg"
                                            width="15.537"
                                            height="28.143"
                                            viewBox="0 0 15.537 28.143"
                                            aria-label="facebook"
                                    >
                                        <path
                                                id="Icon_awesome-facebook-f"
                                                data-name="Icon awesome-facebook-f"
                                                d="M15.194,15.268l.754-4.912H11.235V7.168A2.456,2.456,0,0,1,14,4.514h2.143V.332A26.131,26.131,0,0,0,12.343,0C8.461,0,5.924,2.353,5.924,6.612v3.744H1.609v4.912H5.924V27.143h5.31V15.268Z"
                                                transform="translate(-1.109 0.5)"
                                                fill="currentColor"
                                                stroke="currentColor"
                                                stroke-width="1"
                                        />
                                    </svg>
                                </a>
                            </li>
                            <!-- ---------- -->
                            <!-- INSTAGRAM  -->
                            <!-- ---------- -->
                            <li class="nav-item pb-3">
                                <a href="https://www.instagram.com/" aria-label="instagram">
                                    <svg
                                            xmlns="http://www.w3.org/2000/svg"
                                            width="24.037"
                                            height="24.037"
                                            viewBox="0 0 24.037 24.037"
                                            aria-label="instagram"
                                    >
                                        <g
                                                id="Icon_feather-instagram"
                                                data-name="Icon feather-instagram"
                                                transform="translate(-2 -2)"
                                        >
                                            <path
                                                    id="Path_14839"
                                                    data-name="Path 14839"
                                                    d="M8.509,3H19.528a5.509,5.509,0,0,1,5.509,5.509V19.528a5.509,5.509,0,0,1-5.509,5.509H8.509A5.509,5.509,0,0,1,3,19.528V8.509A5.509,5.509,0,0,1,8.509,3Z"
                                                    fill="none"
                                                    stroke="currentColor"
                                                    stroke-linecap="round"
                                                    stroke-linejoin="round"
                                                    stroke-width="2"
                                            />
                                            <path
                                                    id="Path_14840"
                                                    data-name="Path 14840"
                                                    d="M20.832,15.7a4.407,4.407,0,1,1-3.713-3.713A4.407,4.407,0,0,1,20.832,15.7Z"
                                                    transform="translate(-2.406 -2.371)"
                                                    fill="none"
                                                    stroke="currentColor"
                                                    stroke-linecap="round"
                                                    stroke-linejoin="round"
                                                    stroke-width="2"
                                            />
                                            <path
                                                    id="Path_14841"
                                                    data-name="Path 14841"
                                                    d="M26.25,9.75h0"
                                                    transform="translate(-6.171 -1.792)"
                                                    fill="none"
                                                    stroke="currentColor"
                                                    stroke-linecap="round"
                                                    stroke-linejoin="round"
                                                    stroke-width="2"
                                            />
                                        </g>
                                    </svg>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- ---------- -->
        <!-- Copyrights -->
        <!-- ---------- -->
        <div class="row">
            <div class="col offset-lg-2">
                <p class="ms-2 text-center mt-4 copyrights">
                    &copy; 2024 Osiedle Targowe. Wszelkie prawa zastrzeżone.
                </p>
            </div>
        </div>
    </div>
</footer>