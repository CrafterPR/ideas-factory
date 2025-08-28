<x-layout>
    <who inline-template>
        <div class="who">
            <video autoplay muted loop playsinline class="background-video">
                <source src="https://d130dmucovph5d.cloudfront.net/videos/who.mp4?v=724597" type="video/mp4">
            </video>
            <div class="page-header-section">
                <h1 class="parallax-slow">See who's behind the ama<span class="green-text">zing</span></h1>
            </div>
            <div class="who-we-are-section">
                <h2 class="who-heading custom-container">Who</h2>
                <div class="section-content custom-container">
                    <div class="row">
                        <div class="col-12 col-md-5">

                        </div>
                        <div class="col-12 col-md-7">
                            <h2>we are</h2>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-1 d-none d-md-block">

                        </div>
                        <div class="col-12 col-md-11">
                            <p>Our joined-up approach means that our team is made up of experts in their field.</p>
                            <p>From reality-bending 3D designers to reality-checking project managers,</p>
                            <p>From the safe hands of our tech directors to the steady hands of our film-makers,</p>
                            <p>From the graphic designers and content definers,</p>
                            <p>From the production professionals to the perfecting producers,</p>
                            <p>From the hard-working warehouse to the problem-solving support team,</p>
                            <p>We trust each other to get the job done,</p>
                            <p>And we've got each other's backs, each and every day.</p>
                            <p><b>Scroll down and meet the team...</b></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="fresh-faces-section">
                <div class="section-content row">
                    <div class="col-12 shuffle-section custom-container">
                        <img loading="lazy" class="green-slashes" src="img/green-slashes.png">
                        <a href="javascript:;" @click="shuffle">
                            <p class="heading">Click to shuffle</p>
                            <p class="subheading">And discover more fresh faces</p>
                            <img loading="lazy" src="img/shuffle-block.png">
                        </a>
                    </div>
                    <div class="col-12">
                        <div class="fresh-faces-container">
                          @foreach($teamGroups as $groupName => $teamGroup)
                                @foreach($teamGroup as $team_member)
                                    <span>
                                         <div class="fresh-face-container">
                                            <a href="javascript:;">
                                            <img loading="lazy" src="{{ $team_member->thumbnail_url }}" alt="">
                                            <div class="hover-content-container">
                                                <div class="hover-content">
                                                    <p class="profile-name">{{ $team_member->name }}</p>
                                                    <p class="profile-title">{{ $team_member->job_title }}</p>
                                                    @if($team_member->short_description)
                                                        <p class="profile-description">{{ $team_member->short_description }}</p>
                                                    @endif
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    </span>
                                @endforeach
                           @endforeach
                        </div>
                    </div>

                </div>
                <div class="background-lightblue"></div>
                <div class="background-yellow"></div>
                <div class="background-white"></div>
            </div>
            <div class="bright-section">
                <div class="section-content custom-container">
                    <div class="row">
                        <div class="col-12 heading-container">
                            <h4>Our values</h4>
                            <h3>We make ama<span class="green-text">zing</span> things happen</h3>
                        </div>
                    </div>
                    <div class="row bright-list">
                        <div class="col-12">
                            <h5><span class="green-text">B</span>old</h5>
                            <p>We challenge perceptions and push against the norm</p>
                        </div>
                        <div class="col-12">
                            <h5><span class="green-text">R</span>eal</h5>
                            <p>We're straight talking, no nonsense and get to the point quickly</p>
                        </div>
                        <div class="col-12">
                            <h5><span class="green-text">I</span>nnovative</h5>
                            <p>We strive to be at the forefront of our industry and seek out new approaches</p>
                        </div>
                        <div class="col-12">
                            <h5><span class="green-text">G</span>rowth</h5>
                            <p>We are committed to continuous personal and professional development</p>
                        </div>
                        <div class="col-12">
                            <h5><span class="green-text">H</span>onesty</h5>
                            <p>We face the truth head on regardless of the situation</p>
                        </div>
                        <div class="col-12">
                            <h5><span class="green-text">T</span>rust</h5>
                            <p>Honesty builds trust, implicitly in everyone across the business</p>
                        </div>
                    </div>
                    <p class="bottom-text">We bring the zing by being <span class="green-text">BRIGHT</span></p>
                </div>
            </div>
            <div class="next-fresh-face-section">
                <div class="section-content custom-container">
                    <div class="row">
                        <div class="col-12">
                            <div class="left">
                                <img loading="lazy" src="img/green-arrow-bottom-right.png">
                            </div>
                            <div class="right">
                                <h3>Want to make amazing brand <br>experiences with us?</h3>
                                <p><a href="{{ route('join') }}" class="green-text">Click here</a> to see our current recruitment opportunities</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </who>
    <style>
        /* Main container */
        .who .fresh-faces-section .section-content .fresh-faces-container {
            display: grid;
            grid-template-columns: repeat(6, 1fr); /* 6 equal columns */
            grid-auto-rows: 250px; /* default row height (adjust to fit images) */
            gap: 20px; /* space between items */
        }

        /* Each face item */
        .who .fresh-faces-section .section-content .fresh-face-container {
            position: relative;
            overflow: hidden;
            border-radius: 12px;
        }

        /* Images inside */
        .who .fresh-faces-section .section-content .fresh-face-container img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            display: block;
        }

        /* Hover overlay */
        .who .fresh-faces-section .section-content .hover-content-container {
            position: absolute;
            inset: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            background: rgba(0,0,0,0.5);
            opacity: 0;
            transition: opacity 0.3s ease-in-out;
        }

        .who .fresh-faces-section .section-content .fresh-face-container:hover .hover-content-container {
            opacity: 1;
        }

        /* Special layout rule: second face in the first group */
        .who .fresh-faces-section .section-content
        .fresh-faces-container:first-child
        .fresh-face-container:nth-child(2) {
            grid-column: 3 / 6; /* spans columns 3, 4, 5 */
            grid-row: 1 / 4;   /* spans 3 rows */
        }

    </style>
</x-layout>

