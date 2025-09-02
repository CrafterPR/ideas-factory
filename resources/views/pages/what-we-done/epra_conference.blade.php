<x-layout>
<case-study inline-template>
    <div class="case-study">
        <!-- If there's no video, but there are gallery images, use those -->
        <div class="page-header-slider-section">
            <div class="section-content">
                <div class="swiper swiper-header">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <a href="#">
                                <img loading="lazy" src="{{ asset('img/case-studies/banners/EPRA-conference.png') }}">
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a href="#">
                                <img loading="lazy" src="{{ asset('img/case-studies/headers/52244ec69ac016d5c464d79ed5490f4a.jpg') }}">
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a href="#">
                                <img loading="lazy" src="{{ asset('img/case-studies/headers/f3b58ad271813dfd8550c14de80fb094.jpg') }}">
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a href="#">
                                <img loading="lazy" src="{{ asset('img/case-studies/headers/206fed3f3dbc91d47ed1b663b40e8328.jpg') }}">
                            </a>
                        </div>
                    </div>
                    <div class="custom-container swiper-pagination-container">
                        <div class="swiper-pagination swiper-pagination-custom"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="page-header-section">
            <div class="section-content custom-container">
                <h1>Aidias Factory powered EPRA’s flagship Research and Innovation Conference 2025, </h1>
                <h2>Transforming bold ideas into a high-impact experience.</h2>
            </div>
        </div>
        <div class="intro-section">
            <div class="section-content custom-container">
                <div class="row">
                    <div class="col-12">
                        <p>From concept to execution, we crafted engaging sessions, dynamic branding, flawless audio-visuals, and an immersive delegate journey; sparking conversations that are shaping Kenya’s energy future.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="content-blocks-section">
            <div class="section-content custom-container">
                <div class="row intro-bottom">
                    <div class="col-12 col-xl-6 intro-image">
                        <div class="image-container">
                            <img loading="lazy" src="{{ asset('img/case-studies/thumbs/epra-thunail-min.png') }}">
                        </div>
                    </div>
                    <div class="col-12 col-xl-6 intro-quote">
                        <div class="quote-container">
                            <p class="quote">Captivating over 10,000 customers with 5 Co-op store launches, 6 weeks to do it.</p>
                        </div>
                    </div>
                </div>
        </div>
        <div class="outro-header-section">
            <div class="section-content custom-container">
                <div class="row">
                    <div class="col-12">
                        <h3>If you like what you see...</h3>
                        <img loading="lazy" src="{{ asset('img/footer-arrow.png') }}">
                    </div>
                </div>
            </div>
        </div>

        <div class="other-projects-section">
            <div class="section-content custom-container">
                <div class="row">
                    <div class="col-12">
                        <h3>Check out these other amazing projects</h3>
                    </div>
                    <div class="col-12">
                        <div class="row">
                            <div class="col-6 col-md-3">
                                <div class="case-study-container">
                                    <a href="{{ route('startup-festival') }}">
                                        <img loading="lazy" src="{{ asset('img/case-studies/thumbs/startup-festival-thumb-min.png') }}">
                                        <div class="hover-content-container">
                                            <div class="hover-content">
                                                <img loading="lazy" class="case-study-arrow" src=" {{ asset('img/green-arrow-black-background-bottom-right.png') }}">
                                                <p class="case-study-name">Startup Festival</p>
                                                <p class="case-study-description">Innovation met celebration at the Startup Festival, brought to life by Aidias Factory for KeNIA.</p>
                                                <p class="case-study-bottom-link">Read More</p>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="col-6 col-md-3">
                                <div class="case-study-container">
                                    <a href="samsung-galaxy-roadshow.html">
                                        <img loading="lazy" src=" {{ asset('img/case-studies/thumbs/01ef3f0836c0618ae0bf19d144676319.jpg') }}">
                                        <div class="hover-content-container">
                                            <div class="hover-content">
                                                <img loading="lazy" class="case-study-arrow" src=" {{ asset('img/green-arrow-black-background-bottom-right.png') }}">
                                                <p class="case-study-name">Samsung</p>
                                                <p class="case-study-description">Galaxy AI Roadshow</p>
                                                <p class="case-study-bottom-link">Read More</p>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="col-6 col-md-3">
                                <div class="case-study-container">
                                    <a href="#">
                                        <img loading="lazy" src="{{ asset('img/case-studies/thumbs/b9c6d6f622ff4e09aadd66baa7a5c584.jpg') }}">
                                        <div class="hover-content-container">
                                            <div class="hover-content">
                                                <img loading="lazy" class="case-study-arrow" src="{{ asset('img/green-arrow-black-background-bottom-right.png') }}">
                                                <p class="case-study-name">Ferrero</p>
                                                <p class="case-study-description">Company conference</p>
                                                <p class="case-study-bottom-link">Read More</p>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="other-projects-section-below"></div>
    </div>
</case-study>
</x-layout>
