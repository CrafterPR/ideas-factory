<x-layout>
    <contact inline-template>
        <div class="contact">
            <video autoplay muted loop playsinline class="background-video">
                <source src="https://d130dmucovph5d.cloudfront.net/videos/work.mp4?v=679370" type="video/mp4">
            </video>
            <div class="page-header-section">
                <!--<h1 class="parallax-slow">re<span class="green-text">fresh</span>ingly different</h1>-->
            </div>
            <div class="get-in-touch-section">
                <h2 class="get-heading custom-container">get</h2>
                <div class="section-content custom-container">
                    <div class="row">
                        <div class="col-12 col-md-5 d-none d-md-flex left-image-container">
                            <img loading="lazy" src="img/bubble-chat.png">
                        </div>
                        <div class="col-12 col-md-7 right-text-container">
                            <h2>in touch</h2>
                            <div class="row contact-details pb-5">
                                <div class="col-12 col-lg-6 pb-lg-0 pb-4">
                                    <h3>Head <span class="green-text">office</span></h3>
                                    <p>Aidias Factory</p>
                                    <p>Sigona Cresent</p>
                                    <p>Tilisi, off A104</p>
                                    <p>Nairobi-Nakuru Highway</p>
                                </div>
                                <div class="col-12 col-lg-6">
                                    <h3>Contact details</h3>
                                    <p><a href="#">+254 0116000333 | +254 0116000444</a></p>
                                    <p><a href="mailto:events@aidiasfactory.co.ke">events@aidiasfactory.co.ke</a></p>
                                </div>
                            </div>
                            <div class="row contact-details pb-5">
                                <div class="col-12 col-lg-6 pb-lg-0 pb-4">
                                    <h3>Godown II <span class="green-text">Workshop</span></h3>
                                    <p>World Plastics</p>
                                    <p>Limuru Road,</p>
                                    <p>off A104 Nairobi-Nakuru</p>
                                    <p>Highway Junction</p>
                                </div>
                                <div class="col-12 col-lg-6">
                                    <h3>Contact details</h3>
                                    <p><a href="mailto:edinburgh@freshemail.co.uk">edinburgh@freshemail.co.uk</a></p>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="contact-form-section">
                <div class="section-content custom-container">
                    <div class="row">
                        <div class="col-12">
                            <h2>Or, fill in this form</h2>
                            <form id="contact-form">
                                <label for="name">Name:</label>
                                <input required type="text" id="name" name="name">
                                <p class="error_message"></p>
                                <label for="email">Email:</label>
                                <input required type="email" id="email" name="email">
                                <p class="error_message"></p>
                                <label for="message">Message:</label>
                                <textarea required id="message" name="message" rows="6"></textarea>
                                <p class="error_message" ></p>
                                <a href="javascript:;" class="enabled" onclick="submitContactForm()">Submit</a>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </contact>
</x-layout>
