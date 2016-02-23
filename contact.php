<?php include "header.php"; ?>
    
    <main class="page-main">

        <h3 class="page-title">Contact Us</h3>

        <form id="contact-form" name="contact_form" method="post" action="contact.php">

            <section class="section section-contact">

                <div class="row">
                    
                    <div class="span-12 columns">
                        
                        <div class="google-map">

                            <iframe src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d2188.5861175186856!2d-123.11540626200372!3d49.28241914062574!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1svanarts!5e0!3m2!1sen!2sca!4v1443818353934" width="100%" height="600" frameborder="0" style="border:0" allowfullscreen></iframe>

                        </div>

                    </div>

                    <div class="span-6 columns">
                        
                        <ul>
                            <li>
                                <div class="input-wrapper">
                                    <span class="label-span">Name</span>
                                    <input class="input" type="text" value="" name="name">
                                </div>
                            </li>

                            <li>
                                <div class="input-wrapper">
                                    <span class="label-span">Email</span>
                                    <input class="input" type="text" value="" name="email">
                                </div>
                            </li>

                            <li>
                                <div class="input-wrapper">
                                    <span class="label-span">Phone</span>
                                    <input class="input" type="text" value="" name="phone">
                                </div>
                            </li>

                            <li>
                                <div class="input-wrapper">

                                    <span class="label-span">Message</span>
                                    <textarea class="input textarea"></textarea>

                                </div>                              
                            </li>

                            <li>
                                <div class="input-wrapper input-wrapper-btn">
                                    <input type="submit" class="btn" name="submit">
                                </div>                              
                            </li>

                        </ul>
                    </div>

                    <div class="span-6 columns">
                        
                        <div class="section-contact-li">
                            
                            <h5 class="section-contact-li-heading">Location</h5>
                            <p class="section-contact-li-desc">Vancouver Institute of Media Arts 570 Dunsmuir Street, Suite 600 Vancouver, BC, Canada V6B 1Y1</p>

                        </div>

                        <div class="section-contact-li">

                            <h5 class="section-contact-li-heading">Email</h5>
                            <p class="section-contact-li-desc">Email: info@vanarts.com</p>

                        </div>

                        <div class="section-contact-li">

                            <h5 class="section-contact-li-heading">Phone</h5>
                            <p class="section-contact-li-desc">Phone: 604-682-ARTS (2787) Toll-Free:* 1-800-396-ARTS (2787) Fax: 604-684-2789 * Toll-Free only within Canada and USA</p>

                        </div>

                        <div class="section-contact-li">

                            <h5 class="section-contact-li-heading">Hours</h5>
                            <p class="section-contact-li-desc">Monday - Saturday 8 am - 9 pm</p>
                            <p class="section-contact-li-desc">Sunday 10 am - 6 pm</p>

                        </div>

                    </div>

                </div>

            </section><!-- end of section-contact -->


        </form>

    </main><!-- end of page-main -->

<?php include "footer.php"; ?>