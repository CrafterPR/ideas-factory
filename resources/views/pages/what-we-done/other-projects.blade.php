<div class="other-projects-section">
    <div class="section-content custom-container">
        <div class="row">
            <div class="col-12">
                <h3>Check out these other amazing projects</h3>
            </div>
            <div class="col-12">
                <div class="row">
                  @if($current !== 'epra')
                    <div class="col-6 col-md-3">
                        <div class="case-study-container">
                            <a href="{{ route('epra-conference') }}">
                                <img loading="lazy" src="{{ asset('img/case-studies/thumbs/epra-thunail-min.png') }}">
                                <div class="hover-content-container">
                                    <div class="hover-content">
                                        <img loading="lazy" class="case-study-arrow" src=" {{ asset('img/green-arrow-black-background-bottom-right.png') }}">
                                        <p class="case-study-name">EPRA’s flagship Research and Innovation Conference 2025</p>
                                        <p class="case-study-description">Transforming bold ideas into a high-impact experience</p>
                                        <p class="case-study-bottom-link">Read More</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    @endif
                    @if($current !== 'startup')
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
                   @endif
                   @if($current !== 'stima')
                      <div class="col-6 col-md-3">
                        <div class="case-study-container">
                            <a href="{{ route('stima-at-50') }}">
                                <img loading="lazy" src="{{ asset('img/case-studies/thumbs/stima-50-thumb-min.png') }}">
                                <div class="hover-content-container">
                                    <div class="hover-content">
                                        <img loading="lazy" class="case-study-arrow" src="{{ asset('img/green-arrow-black-background-bottom-right.png') }}">
                                        <p class="case-study-name">Stima@50</p>
                                        <p class="case-study-description">A golden milestone deserves a golden celebration and Aidias Factory delivered just that for Stima Sacco’s 50th Anniversary</p>
                                        <p class="case-study-bottom-link">Read More</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                   @endif
                   @if($current !== 'kiw2024')
                    <div class="col-6 col-md-3">
                    <div class="case-study-container">
                        <a href="{{ route('kiw-2024') }}">
                            <img loading="lazy" src="{{ asset('img/case-studies/thumbs/kiw-2024-thumb-min.png') }}">
                            <div class="hover-content-container">
                                <div class="hover-content">
                                    <img loading="lazy" class="case-study-arrow" src="{{ asset('img/green-arrow-black-background-bottom-right.png') }}">
                                    <p class="case-study-name">KIW 2024(AFRICAN EDITION)</p>
                                    <p class="case-study-description">Kenya Innovation Week 2024 (Africa Edition) was a continental showstopper; and Aidias Factory was behind the magic.</p>
                                    <p class="case-study-bottom-link">Read More</p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
               @endif

                </div>
            </div>
        </div>
    </div>
</div>
