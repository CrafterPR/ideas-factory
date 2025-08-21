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
                                <img loading="lazy" src="{{ asset('img/case-studies/headers/eab661bbe3362bc069b0b71aa45643dc.jpg') }}">
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
                <h1>Co-op Store Openings</h1>
                <h2>Delivering new store launches with impact</h2>
            </div>
        </div>
        <div class="intro-section">
            <div class="section-content custom-container">
                <div class="row">
                    <div class="col-12">
                        <p>Team Co-op wasted no time igniting their momentum this year as they jumped straight into delivering the launch of five stores within just six weeks. The team’s goal was to not only captivate over 10,000 customers, but fulfil 32 community requests for the Local Engagement team.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="content-blocks-section">
            <div class="section-content custom-container">
                <div class="row intro-bottom">
                    <div class="col-12 col-xl-6 intro-image">
                        <div class="image-container">
                            <img loading="lazy" src="{{ asset('img/case-studies/intros/d97e204f0074e50ed7d4a11ab8aa44b5.jpg') }}">
                        </div>
                    </div>
                    <div class="col-12 col-xl-6 intro-quote">
                        <div class="quote-container">
                            <p class="quote">Captivating over 10,000 customers with 5 Co-op store launches, 6 weeks to do it.</p>
                        </div>
                    </div>
                </div>

                <block-text-with-images inline-template>
                    <div class="block block-text-with-images">
                        <div class="row">
                            <div class="col-12 col-lg-6 text-section order-lg-1">
                                <div class="text-section">
                                    <h3></h3>
                                    <p><span style="font-family: &quot;Source Sans Pro&quot;, -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, &quot;Noto Sans&quot;, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;; font-size: 1rem;">With stores launching across the country, the team got stuck straight in with in depth location research, ensuring the most relevant and enticing activities were proposed.&nbsp;</span><span style="font-family: &quot;Source Sans Pro&quot;, -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, &quot;Noto Sans&quot;, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;; font-size: 1rem;">The aim of the game – get people to visit their new Co-op store, entice them to explore the delicious food offerings and educate them on the benefits of being a Co-op member, all whilst creating a fun, welcoming, and memorable experience.&nbsp;</span><span style="font-family: &quot;Source Sans Pro&quot;, -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, &quot;Noto Sans&quot;, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;; font-size: 1rem;">Of course, it doesn’t stop there, the team have also been down to visit Hove to deliver a special Easter-themed store launch, all at the same time as planning the summer extravaganza.</span></p>
                                </div>
                            </div>
                            <div class="col-12 col-lg-6 order-lg-2">
                                <div class="images-section">
                                    <div class="image-container">
                                        <img loading="lazy" src="{{ asset('img/blocks/ed9c2aa3f92c2542c0d3c2e2a9ecbb50.jpg') }}">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </block-text-with-images>
                <block-gallery inline-template :content="{&quot;id&quot;:42,&quot;heading&quot;:null,&quot;created_at&quot;:&quot;2024-03-20T12:15:42.000000Z&quot;,&quot;updated_at&quot;:&quot;2024-03-20T12:23:07.000000Z&quot;,&quot;image_url_1&quot;:&quot;\/img\/blocks\/8aaefe23760d9637c7dad646158f44fe.jpg&quot;,&quot;image_url_2&quot;:&quot;\/img\/blocks\/3d6e6d4760053a5ab72c195daebc3eab.jpg&quot;,&quot;image_url_3&quot;:&quot;\/img\/blocks\/59a72374c570b38af7df93b2aa429fa3.jpg&quot;,&quot;image_url_4&quot;:null,&quot;image_url_5&quot;:null,&quot;image_url_6&quot;:null,&quot;image_url_7&quot;:null}" >
                    <div class="block block-gallery">
                        <div class="row">
                            <div class="col-12">
                                <div class="gallery-container">
                                    <template v-for="image in imageGroups">
                                        <div class="gallery-image-container">
                                            <a href="javascript:;" @click="showGalleryImage(image)">
                                                <img loading="lazy" :src="image">
                                            </a>
                                        </div>
                                    </template>
                                </div>
                            </div>
                        </div>
                        <div class="modal" :id="'galleryModal'+content.id" tabindex="-1" role="dialog">
                            <div class="modal-dialog modal-xl modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <div class="modal-body">
                                        <img class="modal-gallery-image" :src="currentImage" :key="currentImage">
                                        <a class="close" href="javascript:;" @click="hideGalleryImage">
                                            <img src="{{ asset('img/close.png') }}">
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="click-to-enlarge">
                            <img loading="lazy" src="{{ asset('img/plus-circle.png') }}">
                            <p>Click to enlarge</p>
                        </div>
                    </div>
                </block-gallery>
                <block-text inline-template>
                    <div class="block block-text">
                        <p><span style="font-family: &quot;Source Sans Pro&quot;, -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, &quot;Noto Sans&quot;, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;; font-size: 1rem;">It was no mean feat ensuring 32 community support requests were delivered up and down the country, always keeping to a fresh standard, but the team worked closely with Co-op to not only deliver it, but deliver it with impact.&nbsp;</span><span style="font-family: &quot;Source Sans Pro&quot;, -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, &quot;Noto Sans&quot;, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;; font-size: 1rem;">The creation of stunning community gardens alongside building playground equipment and sponsoring enriching cooking classes, just to name a couple of initiatives, allowed us to engage with 2,700 local people.</span></p><p><span style="font-family: &quot;Source Sans Pro&quot;, -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, &quot;Noto Sans&quot;, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;; font-size: 1rem;">The team are excited to see what is going to be briefed in for the rest of the year after their rewarding and fun start to 2024!</span><br></p><p><br></p><p><br></p>
                    </div>
                </block-text>                                    <block-image inline-template>
                    <div class="block block-image">
                        <div class="image-container">
                            <img loading="lazy" src="{{ asset('img/blocks/981802ac02bb3d93ff32046edd7b21de.jpg') }}">
                        </div>
                    </div>
                </block-image>                            </div>
            <div class="background-one"></div>
            <div class="background-two"></div>
            <div class="background-three"></div>
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
        <div class="outro-text-section">
            <div class="section-content custom-container">
                <div class="row">
                    <div class="col-12">
                        <p>Our door's always open and we'd love to chat to you about bringing your next big idea to life</p>
                        <p><b><a href="{{ route('contact') }}">Click here and get in touch</a></b></p>
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
                                    <a href="{{ route('what-we-done-store-opening') }}">
                                        <img loading="lazy" src="{{ asset('img/case-studies/thumbs/175b1d829551283f0ecf72c075cf00a3.jpg') }}">
                                        <div class="hover-content-container">
                                            <div class="hover-content">
                                                <img loading="lazy" class="case-study-arrow" src=" {{ asset('img/green-arrow-black-background-bottom-right.png') }}">
                                                <p class="case-study-name">Co-op Store Openings</p>
                                                <p class="case-study-description">Delivering new store launches with impact</p>
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
                                    <a href="{{ route('ferro-conference') }}">
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
