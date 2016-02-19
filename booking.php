<?php include "header.php"; ?>
    
    <main class="page-main">

        <h3 class="page-title">Booking</h3>

        <form id="contact-form" name="contact_form" method="post" action="booking.php">

            <section class="section section-booking-contact">
                
                <div class="row row-center">

                    <div class="span-7 columns">
                        <h4 class="section-booking-title">Contact</h4>
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

                        </ul>

                    </div>

                </div>

            </section><!-- end of section-booking-contact -->

            <section class="section section-booking-service">
                
                <div class="row row-center">

                    <div class="span-7 columns">
                        <h4 class="section-booking-title">Services</h4>
                    </div>

                    <div class="span-6 columns">
                        
                        <ul class="form-lists">
                            <li>
                                <div class="input-wrapper">

                                    <span class="label-span">Service</span>

                                    <select name="staff-preference" class="input-select input">
                                    <?php foreach($config['booking']['services'] as $val): ?>

                                        <option value=""><?php echo $val['text']; ?></option>

                                        <?php foreach($val['options'] as $option): ?>

                                        <option value="<?php echo $option['val']; ?>">--- <?php echo $option['text']; ?></option>

                                        <?php endforeach; ?>

                                    <?php endforeach; ?>
                                    </select>

                                </div>
                            </li>

                            <li>
                                <div class="input-wrapper">

                                    <span class="label-span">Staff Preference</span>

                                    <select name="staff-preference" class="input-select input">
                                    <?php foreach($config['booking']['staff_preferences'] as $val): ?>
                                        <option value="<?php echo $val['val']; ?>"><?php echo $val['text']; ?></option>
                                    <?php endforeach; ?>
                                    </select>

                                </div>
                            </li>

                            <li class="form-lists-inline span-6">
                                <div class="input-wrapper">

                                    <span class="label-span">Date</span>
                                    <input class="input" type="date" value="" name="date">

                                </div>
                            </li>

                            <li class="form-lists-inline span-5">
                                <div class="input-wrapper">

                                    <span class="label-span">Time</span>

                                    <select name="booking-time" class="input-select input">
                                    <?php foreach($config['booking']['time'] as $val): ?>
                                        <option value="<?php echo $val['val']; ?>"><?php echo $val['text']; ?></option>
                                    <?php endforeach; ?>
                                    </select>

                                </div>
                            </li>

                            <li>
                                <div class="input-wrapper">

                                    <span class="label-span">Comments/Additional Considerations:</span>
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

                </div>

            </section><!-- end of section-booking-service -->

        </form>

    </main><!-- end of page-main -->

<?php include "footer.php"; ?>