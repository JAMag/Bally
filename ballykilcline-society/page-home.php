<?php
/*
  Template Name: Home Page
*/

get_header(); ?>

      <!-- HERO -->
    <section id="hero"><!-- full width of screen-->
        <article>
            <div class="container clearfix"><!-- Responsive width centered in middle of page, clearfix block level floated elements will collapse on themselves if not cleared (which clearfix does) -->
                <div class="row"> <!-- needed for column must be placed in a container -->
                    <div class="col-sm-5"> <!-- needed for column -->
                        <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/smlogo3.png" alt="Ballykilcline Society" class="smlogo">
                    </div>
                    <div class="col-sm-7 hero-text">
                        <h1>Where history matters.</h1>
                        <p class="lead">Come join us in researching the families, descendants and history of the townland of Ballykilcline in county Roscommon, Ireland. </p>
                        <!-- <div id="price-timeline">
                            <div class="price active">
                                <h4>Preprice <small>Ends soon!</small></h4>
                                <span>$300</span>
                            </div>
                            <div class="price">
                                <h4>Launch price <small>Ends soon!</small></h4>
                                <span>$200</span>
                            </div>
                            <div class="price">
                                <h4>Normal price <small>Ends soon!</small></h4>
                                <span>$900</span>
                            </div>
                        </div> -->
<!--                         <p><a class="btn btn-lg btn-danger" href="/" role="button"> Join us! &raquo;</a></p> -->
                    </div>
                </div>
            </div>
        </article>
    </section>


    <!-- OPT IN -->
    <section id="optin">
        <div class="container">
            <div class="row">
                <div class="col-sm-8">
                    <p class="lead"><strong>Subscribe to our mailing list.</strong> You'll like it! </p>
                </div>
                <div class="col-sm-4">
                    <button class="btn btn-success btn-lg btn-block" data-toggle="modal" data-target="#myModal">Click to Subscribe</button>
                </div>
            </div>
        </div>
    </section>


    <!-- BOOST INCOME -->
    <section id="boost-income">
        <div class="container">
            <div class="section-header">
                                    <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/tree_vector_black.png" alt="Design" style="max-width: 100%;
    border-color: #333;
    border-width: 5px;">




                <h2>The Ballykilcline Society benefits you!</h2>
                <p class="lead"></p>
                <div class="row">
                    <div class="col-sm-6">
                        <h3>Connect with family!</h3>
                        <p>We have much information. We may have information that you've been looking for. Come and check our records! Some of us want to learn more about family surnames, some of us are interested in telling our story, some of us are just looking for a connection back to our places of birth, or the birth places of our ancestors. This is a committed community.</p>
                    </div>
                    <div class="col-sm-6">
                        <h3>Connect with history!</h3>
                        <p>Although many members are looking to learn about our ancestors, their search may not end with names and dates. In fact, geneology frequently builds a distinct interest in the broader history of the people, the townlands, the economics, the society and politics, and how they all affects us today. If a blog post doesn't directly relate to your family or surname, we guarantee you it will broaden your horizens.</p>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- PROJECT FEATURES -->
    <section id="project-features">
        <div class="container">
            <h2>Our Mission</h2>
            <p class="lead">The Ballykilcline Society has now been operating for decades. We hope to convey our strong love of history and <strong>roots</strong>. Our members trade research, sources, sometimes write books and have reunions, all while making new friends and finding new <strong>family</strong>.</p>
            <div class="row">
                <div class="col-sm-4">
                <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/kells_vector2.png" alt="Chart" style="max-width: 55%; border-radius: 50%;
    border-style: solid;
    border-color: #333;
    border-width: 5px; transform: scaleX(-1);">
                    <h3>Research</h3>
                    <p>You will find links on this site of use in your Irish family research. If you are a historian interested in famine era information, we may be able to help! Our members have traced family geneologies from before the famine and then out across the world! We have a passion for this, so read, comment and ask questions. It's possible there is someone in our communinity who can help or may even be your cousin!</p>
                </div>
                <div class="col-sm-4">
                      <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/kell_lion_vect.png" alt="Chart" style="max-width: 55%; border-radius: 50%;
    border-style: solid;
    border-color: #333;
    border-width: 5px;">
                    <h3>Share</h3>
                    <p>Share your story! Share your research! Share your pictures! We hope to gather the stories of the descendants and friends of Ballykilcline in order to better know our own stories. We are a strong, and friendly people, who have a desire to learn more about ourselves by learning about our ancestors and the struggles and decisions involved in bringing us here.</p>
                </div>
                <div class="col-sm-4">
                     <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/kells_vector2.png" alt="Chart" style="max-width: 55%; border-radius: 50%;
    border-style: solid;
    border-color: #333;
    border-width: 5px; ">
                    <h3>Travel</h3>
                    <p>The Ballykilcline Society has held multiple family reunions -- several in Ireland, and others in Canada and the United States. There is nothing like doing research in Strokestown or Dublin, and then stopping for a pint and reviewing your findings. We may be able to provide strategic advice on good locations to do research given the status of your project, nearby lodgings, or even travel destinations that aren't commonly known. Geneolgy is rewarding!</p>
                </div>
            </div>
        </div>
    </section>


    <!-- VIDEO-->



    <!-- INSTRUCTOR -->



    <!-- TESTIMONIALS -->


    <!-- SIGNUP -->
<?php

get_footer();
