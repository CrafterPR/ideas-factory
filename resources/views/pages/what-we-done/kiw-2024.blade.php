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
                                <img loading="lazy" src="{{ asset('img/case-studies/banners/kiw2024-min.png') }}">
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
                <h1>Kenya Innovation Week 2024 (Africa Edition) was a continental showstopper;</h1>
                <h2>and Aidias Factory was behind the magic</h2>
            </div>
        </div>
        <div class="intro-section">
            <div class="section-content custom-container">
                <div class="row">
                    <div class="col-12">
                        <p>We choreographed setup, exhibitions, and audio-visual on a grand scale, creating a vibrant convergence of innovators from across Africa, and spotlighting Kenya as the heartbeat of continental innovation.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="content-blocks-section">
            <div class="section-content custom-container">
                <div class="row intro-bottom">
                    <div class="col-12 col-xl-6 intro-image">
                        <div class="image-container">
                            <img loading="lazy" src="{{ asset('img/case-studies/thumbs/kiw-2024-thumb-min.png') }}">
                        </div>
                    </div>
                    <div class="col-12 col-xl-6 intro-quote">
                        <div class="quote-container">
                            <p class="quote">When the Commonwealth gathered to celebrate innovation, Aidias Factory set the stage. </p>
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

            @include('pages.what-we-done.other-projects', ['current' => 'kiw2024'])
        <div class="other-projects-section-below"></div>
    </div>
</case-study>
</x-layout>
