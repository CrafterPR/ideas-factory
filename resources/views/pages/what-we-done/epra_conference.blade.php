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

            @include('pages.what-we-done.other-projects', ['current' => 'epra'])
        <div class="other-projects-section-below"></div>
    </div>
</case-study>
</x-layout>
