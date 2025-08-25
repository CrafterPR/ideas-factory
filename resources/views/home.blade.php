<x-layout>
<home inline-template>
    <div class="homepage">
        <video autoplay muted loop playsinline class="background-video">
            <source src="https://craftedpr.co.ke/assets/images/finalreel.mp4" type="video/mp4">
        </video>
        <div class="page-header-section">
            <h1 class="parallax-slow">Creating ama<span class="green-text">zing</span> brand experiences</h1>
        </div>
        <div class="zing-is-our-thing-section">
            <h2 class="zing-heading custom-container">fresh<img loading="lazy" class="plus-grid"
                                                                src="{{ asset('img/plus-grid.png') }}"></h2>
            <div class="custom-container section-content">
                <div class="row">
                    <div class="col-0 col-sm-0 col-md-2 col-lg-4 d-none d-md-block">
                        <img loading="lazy" class="black-arrow-down" src="{{ asset('img/arrow-solid-down-black.png') }}" />
                        <img loading="lazy" class="black-arrow-down" src="{{ asset('img/arrow-solid-down-black.png') }}" />
                        <img loading="lazy" class="black-arrow-down" src="{{ asset('img/arrow-solid-down-black.png') }}" />
                        <img loading="lazy" class="black-arrow-down" src="{{ asset('img/arrow-solid-down-black.png') }}" />
                    </div>
                    <div class="col-12 col-sm-12 col-md-10 col-lg-8">
                        <h2>we live up to our name</h2>
                        <p>Aidias Factory is a 360° events management agency based in Kenya
                            and a regional leader in delivering world-class experiences.
                            We combine technical excellence with creative innovation to
                            design and execute immersive events. With core strengths in
                            audio-visuals, stage design, screens, sound, lighting, tentage,
                            and production—including photography, videography, and livestreaming—we
                            transform ideas into unforgettable experiences. Our integrated approach
                            ensures that every event is not just seen, but truly felt.</p>
                        <p><b>Let us show you the amazing things that happen here</b></p>
                    </div>
                </div>
            </div>
        </div>
        <div class="case-study-slider-section">
            <div class="section-content">
                <div class="swiper swiper-case-studies">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <a href="{{ route('what-we-done-store-opening') }}">
                                <img loading="lazy" src="{{ asset('img/case-studies/banners/399f89c9b483e44d3cabc60ff1781d9d.jpg') }}" />
                                <div class="custom-container">
                                    <h3>Delivering new store launches with impact</h3>
                                    <p>Click to discover more</p>
                                </div>
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a href="{{ route('what-we-done-galaxy-roadshow') }}">
                                <img loading="lazy" src="{{ asset('img/case-studies/banners/57fcbfcf8d240e0b9ab7d9d3ca3df942.jpg') }}">
                                <div class="custom-container">
                                    <h3>Galaxy AI Roadshow</h3>
                                    <p>Click to discover more</p>
                                </div>
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a href="{{ route('what-we-done-ferro-conference') }}">
                                <img loading="lazy" src="{{ asset('img/case-studies/banners/b9c6d6f622ff4e09aadd66baa7a5c584.jpg') }}">
                                <div class="custom-container">
                                    <h3>Company conference</h3>
                                    <p>Click to discover more</p>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="custom-container swiper-pagination-container">
                        <div class="swiper-pagination swiper-pagination-custom"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="client-logos-section">
            <div class="section-content">
                <div class="swiper swiper-client-logos">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <img loading="lazy" src="{{ asset('img/client-logos/British Council logo-02.png') }}">
                        </div>
                        <div class="swiper-slide">
                            <img loading="lazy" src="{{ asset('img/client-logos/NCA-logo grayscale-01.png') }}">
                        </div>
                        <div class="swiper-slide">
                            <img loading="lazy" src="{{ asset('img/client-logos/giz logo-02.png') }}">
                        </div>
                        <div class="swiper-slide">
                            <img loading="lazy" src="{{ asset('img/client-logos/ICC Church logo-02.png') }}">
                        </div>
                        <div class="swiper-slide">
                            <img loading="lazy" src="{{ asset('img/client-logos/Jubilee logo-02.png') }}">
                        </div>
                        <div class="swiper-slide">
                            <img loading="lazy" src="{{ asset('img/client-logos/Kasneb logo-02.png') }}">
                        </div>
                        <div class="swiper-slide">
                            <img loading="lazy" src="{{ asset('img/client-logos/KCAA logo-02.png') }}">
                        </div>
                        <div class="swiper-slide">
                            <img loading="lazy" src="{{ asset('img/client-logos/KeNIA logo-02.png') }}">
                        </div>
                        <div class="swiper-slide">
                            <img loading="lazy" src="{{ asset('img/client-logos/KFCB logo-02.png') }}">
                        </div>
                        <div class="swiper-slide">
                            <img loading="lazy" src="{{ asset('img/client-logos/Stima Sacco logo-02.png') }}">
                        </div>
                        <div class="swiper-slide">
                            <img loading="lazy" src="{{ asset('img/client-logos/The CommonWealth logo-02.png') }}">
                        </div>
                        <div class="swiper-slide">
                            <img loading="lazy" src="{{ asset('img/client-logos/The Edge logo-02.png') }}">
                        </div>
                        <div class="swiper-slide">
                            <img loading="lazy" src="{{ asset('img/client-logos/UKTech Hub logo-02.png') }}">
                        </div>
                    </div>
                </div>
                <div class="client-logos-cta custom-container">
                    <div class="text-center text-md-end">
                        <p>From Nairobi to the world, top brands trust us with their stories.  <a
                                href="{{ route('what-we-do') }}" class="green-text">yours should be next</a></p>
                    </div>
                </div>
            </div>
        </div>
        <div class="showreel-section">
            <div class="section-content">
                <div class="heading-container custom-container">
                    <h3>Showreel</h3>
                    <p>Watch our highlights from across the business, or <a href="{{ route('what-we-do') }}">click here</a> to
                        take a <br>deeper dive into our latest projects.</p>
                </div>
                <div class="video-js-container">
                    <video
                        loading="lazy"
                        class="video-js vjs-theme-fresh"
                        controls
                        preload="auto"
                        data-setup='{
                            "fluid": true,
                            "responsive": true
                        }'
                        src="https://d130dmucovph5d.cloudfront.net/videos/fresh_showreel.mp4"
                        poster="{{ asset('img/showreel.jpg') }}"
                    >
                        <p class="vjs-no-js">
                            To view this video please enable JavaScript, and consider upgrading to a
                            web browser that
                            <a href="https://videojs.com/html5-video-support/" target="_blank"
                            >supports HTML5 video</a
                            >
                        </p>
                    </video>
                </div>
            </div>
        </div>
        <div class="fresh-life-section">
            <div class="section-content">
                <div class="heading-container custom-container">
                    <h3>fresh life</h3>
                    <p>Check out our social channels and see what the team has been up to</p>
                    <img loading="lazy" class="arrow-grid" src="{{ asset('img/arrow-grid.png') }}">
                </div>
                <div class="custom-container">
                    <div class="social-links">
                        <!--<a href="https://twitter.com/freshgroup" target="_blank">
                            <img loading="lazy" src="/img/twitter.png">
                        </a>-->
                        <a href="https://www.instagram.com/aidiasfactory" target="_blank">
                            <img loading="lazy" src="{{ asset('img/instagram.png') }}">
                        </a>
                        <a href="https://www.facebook.com/aidiasfactory" target="_blank">
                            <img loading="lazy" src="{{ asset('img/facebook.png') }}">
                        </a>
                        <!--<a href="https://vimeo.com/freshgroup" target="_blank">
                            <img loading="lazy" src="/img/vimeo.png">
                        </a>-->
                    </div>
                </div>
            </div>
        </div>
        <div class="awards-section">
            <div class="section-content custom-container">
                <div>
                    <h3>Did we mention we’re the engine behind the flawless execution of these world-class events?</h3>
                </div>
                <div class="award-images-container">
                    <div class="award-image-container">
                        <img loading="lazy" src="{{ asset('img/award-logos/award1.png') }}">
                    </div>
                    <div class="award-image-container">
                        <img loading="lazy" src="{{ asset('img/award-logos/award2.png') }}">
                    </div>
                    <div class="award-image-container">
                        <img loading="lazy" src="{{ asset('img/award-logos/award3.png') }}">
                    </div>
                    <div class="award-image-container">
                        <img loading="lazy" src="{{ asset('img/award-logos/award4.png') }}">
                    </div>
                    <div class="award-image-container">
                        <img loading="lazy" src="{{ asset('img/award-logos/award5.png') }}">
                    </div>
                    <div class="award-image-container">
                        <img loading="lazy" src="{{ asset('img/award-logos/award6.png') }}">
                    </div>
                </div>
            </div>
        </div>
    </div>
</home>
</x-layout>
