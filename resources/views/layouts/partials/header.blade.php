<!-- ---------- -->
<!-- NAVIGATION -->
<!-- ---------- -->
<header class="sticky-top bg-secondary">
    <nav class="navbar navbar-expand-lg navbar-custom">
        <div class="container d-flex justify-content-between position-relative">
            <!-- ---------- -->
            <!-- INFO -- EMAIL/PHONE CONTAINER -->
            <!-- ---------- -->
            <div class="info-container">
                <div class="info-container__text info-container__box">
                    <span>Zarezerwuj mieszkanie</span>
                </div>
                <div class="info-container__phone info-container__box">
                    <a href="tel:+48696162406" aria-label="Zadzwoń do nas">
                        <svg
                                xmlns="http://www.w3.org/2000/svg"
                                width="17"
                                height="17"
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
                </div>
            </div>
            <!-- ---------- -->
            <!-- Logo -->
            <!-- ---------- -->
            <div>
                <a class="text-center d-inline-flex justify-content-center" href="/">
                    <img
                            class="img-fluid logo"
                            src="{{ asset('images/reusable/logo.svg') }}"
                            width="276"
                            height="324"
                            alt="Logo Osiedle Targowe"
                    />
                </a>
            </div>
            <!-- ---------- -->
            <!-- Toggle button for mobile -->
            <!-- ---------- -->
            <button
                    class="navbar-toggler"
                    type="button"
                    data-bs-toggle="collapse"
                    data-bs-target="#navbarNav"
                    aria-controls="navbarNav"
                    aria-expanded="false"
                    aria-label="Toggle navigation"
            >
                <span class="navbar-toggler-icon"></span>
                <span class="navbar-toggler-icon-x">
					<svg
                            xmlns="http://www.w3.org/2000/svg"
                            width="28"
                            height="28"
                            fill="currentColor"
                            class="bi bi-x"
                            viewBox="0 0 16 16"
                    >
						<path
                                d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708"
                        />
					</svg>
				</span>
            </button>
            <!-- ---------- -->
            <!-- Links -->
            <!-- ---------- -->
            <div
                    class="collapse navbar-collapse justify-content-end position-relative"
                    id="navbarNav"
            >
                <ul
                        class="navbar-nav fw-light py-4 py-lg-0 gap-2 gap-lg-4 align-items-xl-center"
                >
                    <li class="nav-item">
                        <a class="nav-link" href="/"><span>Home</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('static.deweloper') }}"><span>Deweloper</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('about') }}"><span>o inwestycji</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/mieszkania"><span>mieszkania</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('gallery') }}"><span>galeria</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('static.udogodnienia') }}"><span>udogodnienia</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('contact.index') }}"><span>Kontakt</span></a>
                    </li>
                    <li class="nav-item mt-3 text-uppercase d-flex justify-content-between li-hidden">
                        <div class="info-container__text info-container__box">
                            <span>Zarezerwuj mieszkanie</span>
                        </div>
                    </li>
                    <li class="nav-item mt-3 text-uppercase d-flex justify-content-between li-hidden">
                        <div class="info-container__phone info-container__box">
                            <a href="tel:+48696162406" aria-label="Zadzwoń do nas">
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
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>
