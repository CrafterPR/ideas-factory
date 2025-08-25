<div>
    <div class="footer-menu" id="footer-menu">
        <div class="footer-menu-container custom-container">
            <div class="left">
                <a href="{{ route('/') }}">
                    <img loading="lazy" class="logo" src="{{ asset('img/logo-text.png') }}" />
                    <p>A 360° <span class="green-text">events</span> agency</p>
                </a>
                <div class="contact-details">
                    <a href="tel:+254 721 586 644">+254 721 586 644</a>
                    <a href="mailto:hello@ideasfactory.co.ke">hello@ideasfactory.co.ke</a>
                </div>
            </div>
            <div class="right">
                <nav class="row">
                    <div class="col-6 col-sm-3 col-md-3">
                        <h4>Head <span class="green-text">office</span></h4>
                        <p>fresh</p>
                        <p>Union</p>
                        <p>2-10 Albert Square</p>
                        <p>Nairobi</p>
                        <p>M2 6LW</p>
                        <a href="https://w3w.co/fairly.grand.popped" target="_blank">
                            <p class="w3w"><span class="green-text">///</span>fairly.
                                <wbr>
                                grand.
                                <wbr>
                                popped
                            </p>
                        </a>
                    </div>
                    <div class="col-6 col-sm-3 col-md-3">
                        <h4>Edinburgh <span class="green-text">office</span></h4>
                        <p>fresh Edinburgh</p>
                        <p>1 St Colme Street</p>
                        <p>Edinburgh</p>
                        <p>EH3 6AA</p>
                        <a href="https://w3w.co/bind.deaf.happen" target="_blank">
                            <p class="w3w"><span class="green-text">///</span>bind.
                                <wbr>
                                deaf.
                                <wbr>
                                happen
                            </p>
                        </a>
                    </div>
                    <!--<div class="col-6 col-sm-3 col-md-3">
                        <h4>Fresh <span class="green-text">warehouse</span></h4>
                        <p>Unit 6A</p>
                        <p>Arrow Trading Estate</p>
                        <p>Audenshaw</p>
                        <p>Manchester</p>
                        <p>M34 5LR</p>
                        <a href="https://w3w.co/handle.rarely.topic" target="_blank">
                            <p class="w3w"><span class="green-text">///</span>handle.<wbr>rarely.<wbr>topic</p>
                        </a>
                    </div>-->
                    <div class="col-6 col-sm-3 col-md-3">
                        <h4>Site <span class="green-text">map</span></h4>
                        <a href="{{ route('what-we-do') }}">
                            <p><span class="green-text">what</span> we do</p>
                        </a>
                        <a href="{{ route('how') }}">
                            <p><span class="green-text">how</span> we do it</p>
                        </a>
                        <a href="{{ route('who') }}">
                            <p><span class="green-text">who</span> we are</p>
                        </a>
                        <a href="{{ route('what-we-done') }}">
                            <p><span class="green-text">what</span> we've done</p>
                        </a>
                        <!--<a href="/news">
                            <p><span class="green-text">latest</span> news</p>
                        </a>-->
                        <a href="{{ route('join') }}">
                            <p><span class="green-text">join</span> us</p>
                        </a>
                        <a href="{{ route('contact') }}">
                            <p><span class="green-text">get</span> in touch</p>
                        </a>
                    </div>
                    <div class="col-6 col-sm-3 col-md-3">
                        <h4><span class="green-text">Legal</span> bits</h4>
                        <a href="{{ route('cookie') }}">
                            <p>cookie policy</p>
                        </a>
                        <a href="{{ route('privacy') }}">
                            <p>privacy policy</p>
                        </a>
                        <a href="{{ route('terms') }}">
                            <p>terms</p>
                        </a>
                    </div>
                </nav>
            </div>
        </div>
    </div>
    <div class="footer-copyright">
        <div class="custom-container">
            <p>Copyright &copy; 2016 The Aidias Factory</p>
        </div>
    </div>
</div>
{{--<cookie-banner inline-template>--}}
{{--    <div class="cookie-banner" id="cookie-banner" v-if="showing">--}}
{{--        <div class="custom-container">--}}
{{--            <h5>Cookies</h5>--}}
{{--            <p>We use cookies. Doesn't everyone?</p>--}}
{{--            <p><a href="{{ route('cookie') }}" target="_blank">Click here</a> to find out more</p>--}}
{{--            <div class="row">--}}
{{--                <div class="col-6">--}}
{{--                    <a class="button" href="javascript:;" @click="hideOverlayAccept">Accept</a>--}}
{{--                </div>--}}
{{--                <div class="col-6">--}}
{{--                    <a class="button" href="javascript:;" @click="hideOverlayReject">Only Essential</a>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</cookie-banner>--}}
</div>
@push('scripts')
    <script>
        function getCookie(name) {
            var nameEQ = name + "=";
            var ca = document.cookie.split(';');
            for(var i=0;i < ca.length;i++) {
                var c = ca[i];
                while (c.charAt(0)==' ') c = c.substring(1,c.length);
                if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length,c.length);
            }
            return null;
        }

        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}

        gtag('consent', 'default', {
            'ad_storage': 'denied',
            'ad_user_data': 'denied',
            'ad_personalization': 'denied',
            'analytics_storage': 'denied'
        });

        if (getCookie('cookie-banner-hidden') == 1) {
            console.log("Cookie consent choice persisted: 1");
            gtag('consent', 'update', {
                'ad_user_data': 'granted',
                'ad_personalization': 'granted',
                'ad_storage': 'granted',
                'analytics_storage': 'granted'
            });
        }

        gtag('js', new Date());
        gtag('config', 'UA-11342327-11');
        function showMenu() {
            document.getElementById("top-menu").style.display = "none";
            document.getElementById("full-menu").style.display = "flex";
            document.body.style.overflow = "hidden";
        }

        function hideMenu() {
            document.getElementById("top-menu").style.display = "block";
            document.getElementById("full-menu").style.display = "none";
            document.body.style.overflow = "auto";
        }

        // expose globally so inline onclick="" can find them
        window.showMenu = showMenu;
        window.hideMenu = hideMenu;
    </script>
    @endpush
