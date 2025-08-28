<header-menu inline-template>
    <div>
        <div class="top-menu" id="top-menu">
            <div class="top-menu-container custom-container">
                <div class="left">
                    <a href="{{ route('/') }}">
                        <img class="logo" src="{{ asset('img/logo-square.png') }}"  alt=""/>
                        <p>A 360° <span class="green-text">events</span> agency</p>
                    </a>
                </div>
                <div class="right">
                    <nav>
                        <a class="text-link " href="{{ route('what-we-do') }}">
                            <p><span class="green-text">what</span> we do</p>
                        </a>
                        <a class="text-link " href="{{ route('how') }}">
                            <p><span class="green-text">how</span> we do it</p>
                        </a>
                        <a class="text-link " href="{{ route('who') }}">
                            <p><span class="green-text">who</span> we are</p>
                        </a>
                        <a class="text-link " href="{{ route('what-we-done') }}">
                            <p><span class="green-text">what</span> we've done</p>
                        </a>
                        <a href="javascript:;" onclick="showMenu()">
                            <img class="burger" src="{{ asset('img/burger.png') }}" />
                        </a>
                    </nav>
                </div>
            </div>
        </div>

        <div class="full-menu" id="full-menu">
            <div class="close-button-container custom-container">
                <a class="close-button" href="javascript:;" onclick="hideMenu()">
                    <img src="{{ asset('img/close.png') }}"  alt=""/>
                </a>
            </div>
            <div class="full-menu-container custom-container">
                <div class="right">
                    <nav>
                        <a href="{{ route('/') }}">
                            <img class="logo" src="{{ asset('img/logo-square.png') }}" />
                        </a>
                        <a href="{{ route('what-we-do') }}"><span class="green-text">what</span> we do</a>
                        <a href="{{ route('how') }}"><span class="green-text">how</span> we do it</a>
                        <a href="{{ route('who') }}"><span class="green-text">who</span> we are</a>
                        <!--<a href="/news"><span class="green-text">latest</span> news</a>-->
                        <a href="{{ route('what-we-done') }}"><span class="green-text">what</span> we've done</a>
                        <a href="{{ route('join') }}"><span class="green-text">join</span> us</a>
                        <a href="{{ route('contact') }}"><span class="green-text">get</span> in touch</a>
                        <div class="social-links">
                            <!--<a href="https://twitter.com/freshgroup" target="_blank">
                                <img src="/img/twitter.png">
                            </a>-->
                            <a href="https://www.facebook.com/aidiasfactory" target="_blank">
                                <img src="{{ asset('img/ig-icon.svg') }}">
                            </a>
                            <a href="https://www.facebook.com/aidiasfactory" target="_blank">
                                <img src="{{ asset('img/fb-icon.svg') }}">
                            </a>
                            <!--<a href="https://vimeo.com/freshgroup" target="_blank">
                                <img src="/img/vimeo.png">
                            </a>-->
                        </div>
                    </nav>
                </div>
                <div class="left">
                    <div class="news-stories-container">
                        <div class="news-story">
                            <div class="news-left">
                                <img src="{{ asset('img/case-studies/thumbs/175b1d829551283f0ecf72c075cf00a3.jpg') }}">
                            </div>
                            <div class="news-right">
                                <h3>Co-op Store Openings</h3>
                                <p>Delivering new store launches with impact</p>
                                <a href="{{ route('what-we-done-store-opening') }}">Read more</a>
                            </div>
                        </div>
                        <div class="news-story">
                            <div class="news-left">
                                <img src="{{ asset('img/case-studies/thumbs/01ef3f0836c0618ae0bf19d144676319.jpg') }}">
                            </div>
                            <div class="news-right">
                                <h3>Samsung</h3>
                                <p>Galaxy AI Roadshow</p>
                                <a href="{{ route('what-we-done-galaxy-roadshow') }}">Read more</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header-menu>
@push('scripts')
    <script>
        function hideMenu(){
            document.getElementById("top-menu").style.display="block";
            document.getElementById("full-menu").style.display="none";
            document.body.style.overflow="auto"
        }
        function showMenu (){
            document.getElementById("top-menu").style.display="none";
            document.getElementById("full-menu").style.display="flex";
            document.body.style.overflow="hidden"
        }
    </script>
@endpush
