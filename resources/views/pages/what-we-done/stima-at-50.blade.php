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
                                <img loading="lazy" src="{{ asset('img/case-studies/banners/stima-at-50-min.png') }}">
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
                <h1>A golden milestone deserves a golden celebration and Aidias Factory delivered just that for Stima Sacco’s 50th Anniversary.</h1>
            </div>
        </div>
        <div class="intro-section">
            <div class="section-content custom-container">
                <div class="row">
                    <div class="col-12">
                        <p>We crafted the setup, produced a powerful documentary, staged a glamorous gala dinner, and orchestrated captivating storytelling and branding. The result: a spectacular celebration of legacy and the future.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="content-blocks-section">
            <div class="section-content custom-container">
                <div class="row intro-bottom">
                    <div class="col-12 col-xl-6 intro-image">
                        <div class="image-container">
                            <img loading="lazy" src="{{ asset('img/case-studies/thumbs/stima-50-thumb-min.png') }}">
                        </div>
                    </div>
                    <div class="col-12 col-xl-6 intro-quote">
                        <div class="quote-container">
                            <p class="quote">Curated a spectacular celebration of legacy and the future.</p>
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

        @include('pages.what-we-done.other-projects', ['current' => 'stima'])
        <div class="other-projects-section-below"></div>
    </div>
</case-study>
</x-layout>
