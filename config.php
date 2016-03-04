<?php

/* IN GENERAL, SHOULD AVOID USING GLOBAL VARIABLES LIKE THIS */
$config = array(

    // Navigation
    'nav' => array(

        'about' => array(
            'name' => 'about',
            'href' => 'about.php'
        ),
        'gallery' => array(
            'name' => 'gallery',
            'href' => 'gallery.php'
        ),
        'services' => array(
            'name' => 'services',
            'href' => 'services.php'
        ),
        'trend_watch' => array(
            'name' => 'trend watch',
            'href' => 'trend_watch.php'
        ),
        'press' => array(
            'name' => 'press',
            'href' => 'press.php'
        ),
        'contact' => array(
            'name' => 'contact',
            'href' => 'contact.php'
        ),
        'booking' => array(
            'name' => 'booking',
            'href' => 'booking.php'
        )

    ),

    // Social Media
    'social_media' => array(

        'twitter' => array(
            'name' => 'twitter',
            'class' => 'fa fa-twitter',
            'href' => '#'
        ),
        'facebook' => array(
            'name' => 'facebook',
            'class' => 'fa fa-facebook-square',
            'href' => '#'
        
        ),
        'instagram' => array(
            'name' => 'instagram',
            'class' => 'fa fa-instagram',
            'href' => '#'
        
        ),
        'pinterest' => array(
            'name' => 'pinterest',
            'class' => 'fa fa-pinterest-square',
            'href' => '#'

        )

    ),

    // Home / Hero
    'hero_images' => array(

        array(
            'style' => 'background-image: url(img/hero/hero-img-1.jpg);'
        ),
        // array(
        //     'style' => 'background-image: url(img/hero/hero-img-2.jpg);'
        // ),
        array(
            'style' => 'background-image: url(img/hero/hero-img-3.jpg);'
        ),
        array(
            'style' => 'background-image: url(img/hero/hero-img-4.jpg);'
        ),
        array(
            'style' => 'background-image: url(img/hero/hero-img-5.jpg);'
        )

    ),

    // Home / Stylists
    'home_stylists' => array(

        array(
            'name' => 'kate young',
            'desc' => 'Master Stylist',
            'img' => 'img/stylists/home_stylists_1.png',
            'alt' => 'Image of Featured Stylist',
            'href' => '#'
        ),

        array(
            'name' => 'joseph cassell',
            'desc' => 'Senior Stylist',
            'img' => 'img/stylists/home_stylists_2.png',
            'alt' => 'Image of Featured Stylist',
            'href' => '#'
        ),

        array(
            'name' => 'jessica paster',
            'desc' => 'Senior Stylist',
            'img' => 'img/stylists/home_stylists_3.png',
            'alt' => 'Image of Featured Stylist',
            'href' => '#'
        ),

    ),

    // Home / Testimonials
    'home_testimonials' => array(

        array(
            'title' => 'Vancouver Harbour Tour',
            'desc' => '"I can’t say enough good things about Yoshi. Yoshi is a wonderful and relaxing enviroment.” - Linda',
            'img' => 'img/testimonials/testimonial_1.jpg',
            'alt' => 'Image of Testimonials',
            'href' => '#'
        ),

        array(
            'title' => 'Vancouver Harbour Tour',
            'desc' => '"I can’t say enough good things about Yoshi. Yoshi is a wonderful and relaxing enviroment.” - Linda',
            'img' => 'img/testimonials/testimonial_2.jpg',
            'alt' => 'Image of Testimonials',
            'href' => '#'
        ),

        array(
            'title' => 'Vancouver Harbour Tour',
            'desc' => '“I truly love the salon experience at Yoshi’s Hair Salon” - Tina',
            'img' => 'img/testimonials/testimonial_3.jpg',
            'alt' => 'Image of Testimonials',
            'href' => '#'
        )
    ),

    // Gallery
    'galleries' => array(

        array(
            'img' => 'img/galleries/gallery-list/gallery-1.jpg',
            'alt' => 'Image of Vancouver Harbour in Canada',
            'href' => 'img/galleries/gallery-modal/gallery-1.jpg',
            'class' => ''
        )
    ),

    // About
    'about' => array(
        'about_img' => 'img/stylists/about_img.jpg',
        'about_img_alt' => 'Image of Yoshi',

        'about_desc' => array(
            'The Yoshi Hair Salon Studio is known as one of the best luxury hair salons in the LA. ',
            
            'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed nec iaculis erat, vel cursus turpis. Vivamus eu finibus ante. Sed a nulla lacus. Nunc vel accumsan quam, a suscipit nisi. ',
            
            'Aliquam a aliquet eros, a sagittis eros. In blandit vestibulum molestie. Maecenas in efficitur dolor, in sollicitudin ipsum. Nunc nec dolor id turpis egestas hendrerit in eget ipsum. Nunc vitae magna bibendum, luctus leo id, molestie nunc. Etiam a suscipit massa. ',

            'Vestibulum facilisis tortor quis vestibulum tristique. Integer porta congue dolor, faucibus aliquet velit ultricies in. Vestibulum elementum at odio vitae ultricies. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Curabitur et libero a mi sollicitudin egestas. '
        ),

        'stylists' => array(
            array(
                'name' => 'Patrick',
                'desc' => 'Master Stylist',
                'img' => 'img/stylists/stylists_1.jpg',
                'alt' => 'Image of Yoshi\'s Stylist Patrick',
                'href' => '#'
            ),
            array(
                'name' => 'Emma',
                'desc' => 'Senior Stylist',
                'img' => 'img/stylists/stylists_2.jpg',
                'alt' => 'Image of Yoshi\'s Stylist Patrick',
                'href' => '#'
            ),
            array(
                'name' => 'Audrey',
                'desc' => 'Senior Stylist',
                'img' => 'img/stylists/stylists_3.jpg',
                'alt' => 'Image of Yoshi\'s Stylist Patrick',
                'href' => '#'
            ),
            array(
                'name' => 'Asher',
                'desc' => 'Senior Stylist',
                'img' => 'img/stylists/stylists_4.jpg',
                'alt' => 'Image of Yoshi\'s Stylist Patrick',
                'href' => '#'
            ),

            array(
                'name' => 'Savannah',
                'desc' => 'Senior Stylist',
                'img' => 'img/stylists/stylists_5.jpg',
                'alt' => 'Image of Yoshi\'s Stylist Patrick',
                'href' => '#'
            ),
            array(
                'name' => 'Ezra',
                'desc' => 'Senior Stylist',
                'img' => 'img/stylists/stylists_6.jpg',
                'alt' => 'Image of Yoshi\'s Stylist Patrick',
                'href' => '#'
            ),
            array(
                'name' => 'Victoria',
                'desc' => 'Stylist',
                'img' => 'img/stylists/stylists_7.jpg',
                'alt' => 'Image of Yoshi\'s Stylist Patrick',
                'href' => '#'
            ),
            array(
                'name' => 'Sarah',
                'desc' => 'Stylist',
                'img' => 'img/stylists/stylists_8.jpg',
                'alt' => 'Image of Yoshi\'s Stylist Patrick',
                'href' => '#'
            ),

        )
    ),

    // Gallery
    'gallery' => array(

        'lists' => array(

            array(
                'img' => 'img/galleries/gallery_lists/gallery_1.jpg',
                'alt' => 'Image of Hair Style in 2016',
                'href' => 'img/galleries/gallery-modal/gallery-1.jpg',
                'class' => ''
            ),
            array(
                'img' => 'img/galleries/gallery_lists/gallery_2.jpg',
                'alt' => 'Image of Hair Style in 2016',
                'href' => 'img/galleries/gallery-modal/gallery-1.jpg',
                'class' => ''
            ),
                array(
                'img' => 'img/galleries/gallery_lists/gallery_3.jpg',
                'alt' => 'Image of Hair Style in 2016',
                'href' => 'img/galleries/gallery-modal/gallery-1.jpg',
                'class' => ''
            ),
            array(
                'img' => 'img/galleries/gallery_lists/gallery_4.jpg',
                'alt' => 'Image of Hair Style in 2016',
                'href' => 'img/galleries/gallery-modal/gallery-1.jpg',
                'class' => ''
            ),
            array(
                'img' => 'img/galleries/gallery_lists/gallery_5.jpg',
                'alt' => 'Image of Hair Style in 2016',
                'href' => 'img/galleries/gallery-modal/gallery-1.jpg',
                'class' => ''
            ),
            array(
                'img' => 'img/galleries/gallery_lists/gallery_6.jpg',
                'alt' => 'Image of Hair Style in 2016',
                'href' => 'img/galleries/gallery-modal/gallery-1.jpg',
                'class' => ''
            )
        )

    ),

    // Booking
    'booking' => array(

        'services' => array(

            'hair_cut' => array(
                'text' => 'Hair Cut',
                'options' => array(
                    array(
                    'val' => 'hair_cut',
                    'text' => 'Hair Cut'
                    )
                )
            ),
            'color' => array(

                'text' => 'Colour',

                'options' => array(

                    array(
                        'val' => 'color_1',
                        'text' => 'Color Glazing'
                    ),
                    array(
                        'val' => 'color_2',
                        'text' => 'Corrective Color Priced upon Consultation'
                    ),
                    array(
                        'val' => 'color_3',
                        'text' => 'Single Process'
                    ),
                    array(
                        'val' => 'color_4',
                        'text' => 'Partial Foil'
                    ),
                    array(
                        'val' => 'color_5',
                        'text' => 'Full Foil'
                    ),
                    array(
                        'val' => 'color_6',
                        'text' => 'Ombre'
                    ),
                    array(
                        'val' => 'color_7',
                        'text' => 'Balayage'
                    )

                )

            ),

            'perm' => array(

                'text' => 'Perm',

                'options' => array(

                    array(
                        'val' => 'perm_1',
                        'text' => 'Full Perm '
                    ),
                    array(
                        'val' => 'perm_2',
                        'text' => 'Partial Perm'
                    ),
                    array(
                        'val' => 'perm_3',
                        'text' => 'Long Hair Wavy '
                    ),
                    array(
                        'val' => 'perm_4',
                        'text' => 'Long Hair Spiral'
                    ),
                    array(
                        'val' => 'perm_5',
                        'text' => '﻿Chemical Straight'
                    )

                )
            )

        ),

        'staff_preferences' => array(
            array(
                'val' => 'staff_1',
                'text' => 'Patrick'
            ),
            array(
                'val' => 'staff_2',
                'text' => 'Joseph Cassell'
            ),
            array(
                'val' => 'staff_3',
                'text' => 'Jessica Paster'
            ),
            array(
                'val' => 'staff_4',
                'text' => 'Kate young'
            ),
            array(
                'val' => 'staff_5',
                'text' => 'Patrick'
            ),
            array(
                'val' => 'staff_6',
                'text' => 'Patrick'
            ),
        ),

        'time' => array(
            array(
                'val' => 'time_1',
                'text' => '8:00 - 10:00'
            ),
            array(
                'val' => 'time_2',
                'text' => '10:00 - 12:00'
            ),
            array(
                'val' => 'time_3',
                'text' => '12:00 - 14:00'
            ),
            array(
                'val' => 'time_4',
                'text' => '14:00 - 16:00'
            ),
            array(
                'val' => 'time_5',
                'text' => '16:00 - 18:00'
            ),
            array(
                'val' => 'time_6',
                'text' => '18:00 - 20:00'
            )
        )
    ),

    // Services
    'services' => array(

        'nav_lists' => array(

            array(
                'href' => 'hair_cut',
                'text' => 'Hair Cuts'
            ),
            array(
                'href' => 'color',
                'text' => 'Color'
            ),
            array(
                'href' => 'perms',
                'text' => 'Perms'
            ),
            array(
                'href' => 'reatment',
                'text' => 'Treatments'
            ),
            array(
                'href' => 'make-up',
                'text' => 'Make Up'
            ),
            array(
                'href' => 'extensions',
                'text' => 'Extensions / Smoothig'
            ),

        ),

        'lists' => array(

            array(
                'title' => 'Hair Cuts',
                'items' => array(
                    array(
                        'text' => 'Stylist 65 - 75'
                    ),
                    array(
                        'text' => 'Senior Stylist 75 – 100'
                    ),
                    array(
                        'text' => 'Master Stylist 100 – 250'
                    ),
                ),

                'img' => 'img/services/hair_cuts.jpg',
                'alt' => 'Image of Hair Cut Model',

            ),

            array(
                'title' => 'Color',
                'items' => array(
                    array(
                        'text' => 'Color Glazing 40'
                    ),
                    array(
                        'text' => 'Corrective Color Priced upon Consultation'
                    ),
                    array(
                        'text' => 'Single Process 45'
                    ),
                    array(
                        'text' => 'Partial Foil 80'
                    ),
                    array(
                        'text' => 'Full Foil 105'
                    ),
                    array(
                        'text' => 'Ombre 165'
                    ),
                    array(
                        'text' => 'Balayage 90'
                    )
                ),

                'img' => 'img/services/color.jpg',
                'alt' => 'Image of Hair Color Model',

            ),

            array(
                'title' => 'Perm',
                'items' => array(
                    array(
                        'text' => 'Full Perm 70 - 90'
                    ),
                    array(
                        'text' => 'Partial Perm 65 - 75'
                    ),
                    array(
                        'text' => 'Long Hair Wavy 90 - 120'
                    ),
                    array(
                        'text' => 'Long Hair Spiral 110 - 140'
                    ),
                    array(
                        'text' => '﻿Chemical Straight 80 - 110'
                    )
                ),

                'img' => 'img/services/perm.jpg',
                'alt' => 'Image of Perm Cut Model',

            ),

            array(
                'title' => 'Treatments',
                'items' => array(
                    array(
                        'text' => 'Dry or Damage Treatment 100'
                    ),
                    array(
                        'text' => 'Hair and Scalp Treatment 70 - 100'
                    ),
                    array(
                        'text' => 'Aldehyde & Formaldehyde free keratin treatment 200 - 350'
                    )
                ),

                'img' => 'img/services/treatment.jpg',
                'alt' => 'Image of Treatment Cut Model',

            ),

            array(
                'title' => 'Make Up',
                'items' => array(
                    array(
                        'text' => 'Makeup Application 55'
                    ),
                    array(
                        'text' => 'Makeup Application & Lesson 65'
                    )
                ),

                'img' => 'img/services/makeup.jpg',
                'alt' => 'Image of Makeup Cut Model',

            ),

            array(
                'title' => 'Extensions / Smoothing',
                'items' => array(
                    array(
                        'text' => 'Human Hair Extensions  Price on Consultation'
                    ),
                    array(
                        'text' => 'Individual I-Tip Copper Bond Application per Bundle 250'
                    ),
                    array(
                        'text' => 'Skin Weft / Tape Method by Consultation'
                    )
                ),

                'img' => 'img/services/extension.jpg',
                'alt' => 'Image of Extensions Cut Model',

            ),

        )
    ),


    // Trend Watch
    'trend_watch' => array(

        'lists' => array(
            array(
                'title' => 'Trend',
                'date' => 'Jan 16 2016',
                'desc' => 'Lorem ipsum dolor sit amet, consectetur adipiscing',
                'href' => '#',
                'img' => 'img/trend_watch/trend_1.jpg',
                'alt' => 'Image of Trend Watch'
            ),
            array(
                'title' => 'Trend',
                'date' => 'Jan 16 2016',
                'desc' => 'Lorem ipsum dolor sit amet, consectetur adipiscing',
                'href' => '#',
                'img' => 'img/trend_watch/trend_2.jpg',
                'alt' => 'Image of Trend Watch'
            ),
            array(
                'title' => 'Trend',
                'date' => 'Jan 16 2016',
                'desc' => 'Lorem ipsum dolor sit amet, consectetur adipiscing',
                'href' => '#',
                'img' => 'img/trend_watch/trend_3.jpg',
                'alt' => 'Image of Trend Watch'
            ),
            array(
                'title' => 'Trend',
                'date' => 'Jan 16 2016',
                'desc' => 'Lorem ipsum dolor sit amet, consectetur adipiscing',
                'href' => '#',
                'img' => 'img/trend_watch/trend_5.jpg',
                'alt' => 'Image of Trend Watch'
            ),
            array(
                'title' => 'Trend',
                'date' => 'Jan 16 2016',
                'desc' => 'Lorem ipsum dolor sit amet, consectetur adipiscing',
                'href' => '#',
                'img' => 'img/trend_watch/trend_6.jpg',
                'alt' => 'Image of Trend Watch'
            ),
            array(
                'title' => 'Trend',
                'date' => 'Jan 16 2016',
                'desc' => 'Lorem ipsum dolor sit amet, consectetur adipiscing',
                'href' => '#',
                'img' => 'img/trend_watch/trend_7.jpg',
                'alt' => 'Image of Trend Watch'
            ),
            array(
                'title' => 'Trend',
                'date' => 'Jan 16 2016',
                'desc' => 'Lorem ipsum dolor sit amet, consectetur adipiscing',
                'href' => '#',
                'img' => 'img/trend_watch/trend_8.jpg',
                'alt' => 'Image of Trend Watch'
            ),
            array(
                'title' => 'Trend',
                'date' => 'Jan 16 2016',
                'desc' => 'Lorem ipsum dolor sit amet, consectetur adipiscing',
                'href' => '#',
                'img' => 'img/trend_watch/trend_3.jpg',
                'alt' => 'Image of Trend Watch'
            )
        )

    ),

    // Press
    'press' => array(

        'lists' => array(

            array(
                'heading' => 'Hair - Feb 2016',
                'img' => 'img/press/press_1.jpg',
                'alt' => 'Image of Hair magazine cover Feburary in 2016'
            ),
            array(
                'heading' => 'Pro Hair & Beauty - Feb 2016',
                'img' => 'img/press/press_2.jpg',
                'alt' => 'Image of Pro Hair & Beauty magazine cover Feburary in 2016'
            ),
            array(
                'heading' => 'Braids - Jan 2016',
                'img' => 'img/press/press_3.jpg',
                'alt' => 'Image of Braids magazine cover Jan in 2016'
            ),
            array(
                'heading' => 'Blonde Hair - Dec 2015',
                'img' => 'img/press/press_4.jpg',
                'alt' => 'Image of Blonde Hair magazine cover December in 2015'
            ),
            array(
                'heading' => 'Your Hair - Dec 2015',
                'img' => 'img/press/press_5.jpg',
                'alt' => 'Image of Your Hair magazine cover December in 2015'
            ),
            array(
                'heading' => 'Vogue - Nov 2015',
                'img' => 'img/press/press_6.jpg',
                'alt' => 'Image of Vogue magazine cover November in 2015'
            )

        )

    ),

    // Admin
    'admin' => array(

        // Navigation
        'nav' => array(

            'gallery' => array(
                'name' => 'gallery',
                'href' => 'gallery.php'
            ),
            'trend_watch' => array(
                'name' => 'trend watch',
                'href' => 'trend_watch.php'
            ),
            'press' => array(
                'name' => 'press',
                'href' => 'press.php'
            ),
            'logout' => array(
                'name' => 'logout',
                'href' => 'logout.php'
            ),

        ),

    )


);