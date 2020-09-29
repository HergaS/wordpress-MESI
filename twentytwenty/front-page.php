<?php
get_header();

$firstLeft = get_field('first_left');
$secondLeft = get_field('second_left');
$firstImg = get_field('first_img');
$secondImg = get_field('second_img');
$dropdown = get_field('dropdown');

$leftTitle = get_field('left_title');
$rightTitle = get_field('right_title');
$leftFirstPar = get_field('left_first_par');
$leftSecondPar = get_field('left_second_par');
$rightFirstPar = get_field('right_first_par');
$rightSecondPar = get_field('right_second_par');

?>

<main id="site-content" role="main">
<div class="container my-container">
    <div class="row navigacija text-center mb-3">
        <button class="col-12 col-md-3 nav-g"><span class="nav-gumbi aktiven">overview</span></button>
        <button class="col-12 col-md-3 nav-g"><span class="nav-gumbi">campain activities</span></button>
        <button class="col-12 col-md-3 nav-g"><span class="nav-gumbi">materials</span></button>
        <button class="col-12 col-md-3 nav-g"><span class="nav-gumbi">reward program</span></button>
    </div>
    <div class="row my-5">
        <div class="col-12 col-md-6">
            <h3 class="naslov ml-5">HEALTHY ARTERIES CAMPAIGN</h3>
            <div class="container">
                <div class="row">
                    <div class="odstavek ml-5">
                        <?php echo $firstLeft; ?>
                    </div>
                </div>
                <div class="row">
                    <div class="odstavek ml-5 my-5">
                        <?php echo $secondLeft; ?>
                    </div>
                </div>
                <button id="pokazi-vec" class="ml-2" data-toggle="collapse" data-target="#pokazi-skrij" aria-expanded="false" aria-controls="pokazi-skrij">
                    <div class="row">
                        <div>SHOW MORE</div>
                        <div class="triangle-down my-auto mx-3"></div>
                    </div>
                </button>
                <div class="row collapse" id="pokazi-skrij">
                    <div class="odstavek ml-5 mb-5">
                        <?php echo $dropdown; ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-6 slikca"><img class="img-fluid" src="<?php echo $firstImg; ?>" alt=""></div>
    </div>
    <div class="row">
        <div class="col-12 col-md-6 rumena">
            <h3 class="naslov ml-5"><?php echo $leftTitle; ?></h3>
            <div class="container">
                <div class="row">
                    <div class="odstavek ml-5">
                        <?php echo $leftFirstPar; ?>
                    </div>
                </div>
                <div class="row">
                    <div class="odstavek ml-5 my-5">
                        <?php echo $leftSecondPar; ?>
                    </div>
                </div>
                <img class="img-fluid mt-5" src="<?php echo $secondImg; ?>" alt="">
            </div>
        </div>
        <div class="col-12 col-md-6 rdeca">
            <h3 class="naslov"><?php echo $rightTitle; ?></h3>
            <div class="container">
                <div class="row">
                    <div class="odstavek ml-5">
                        <?php echo $rightFirstPar; ?>
                    </div>
                </div>
                <div class="row odtsavek">
                    <?php echo $rightSecondPar; ?>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12 col-md-6 siva">
            <div class="odstavek text-center my-5 mx-auto">
                <b>Your agreement with us includes these Rules and Conditions for Participation in the Healthy Arteries Campaign. Please read them carefully here:</b>
                <h4 class="naslov-link">RULES AND CONDITIONS</h4>
            </div>
        </div>
        <div class="col-12 col-md-6 siva siva-levi">
            <div class="odstavek text-center my-5 mx-auto">
                <b>The campaign includes a joining fee. To find out more about the fees for the campaign, please click on this button:</b>
                <br><br>
                <h4 class="naslov-link">PARTNERSHIP FEES</h4>
            </div>
        </div>
    </div>
    <div class="row mx-auto my-5 text-center">
        <div class="col-12 my-4 grey-color"><b>Become a partner by clicking here:</b></div>
        <div class="col-12"><b-button class="btn gumb mx-auto">APPLY</b-button></b></div>
    </div>
</div>
	
</main><!-- #site-content -->


<?php
get_footer();


/*
<main id="site-content" role="main">
<div class="container my-container">
    <div class="row navigacija text-center mb-3">
        <button class="col-12 col-md-3 nav-g"><span class="nav-gumbi aktiven">overview</span></button>
        <button class="col-12 col-md-3 nav-g"><span class="nav-gumbi">campain activities</span></button>
        <button class="col-12 col-md-3 nav-g"><span class="nav-gumbi">materials</span></button>
        <button class="col-12 col-md-3 nav-g"><span class="nav-gumbi">reward program</span></button>
    </div>
    <div class="row my-5">
        <div class="col-12 col-md-6">
            <h3 class="naslov ml-5">HEALTHY ARTERIES CAMPAIGN</h3>
            <div class="container">
                <div class="row">
                    <div class="odstavek ml-5"><b>The Healthy Arteries Worldwide Campaign is a
                    collaboration among MESI, health associations and
                    representatives from participating countries.</b> The
                    campaign represents an outreach arm of the Peripheral
                    Arterial Disease awareness project, focused on getting
                    messages about the facts and consequences of this
                    common disease into your communities.
                    </div>
                </div>
                <div class="row">
                    <div class="odstavek ml-5 my-5">The goal of the Healthy Arteries Campaign is to promote
                    awareness and timely diagnosis of PAD by supporting
                    active measurements of the Ankle-Brachial Index (ABI) for
                    everyone in the risk group.<b> By raising awareness about
                    PAD, we want to increase the demand for ABI
                    measurements.</b> Thus, creating benefits for stakeholders
                    looking for a commercial profit by selling ABPI MD.
                    </div>
                </div>
                <button id="pokazi-vec" class="ml-2" data-toggle="collapse" data-target="#pokazi-skrij" aria-expanded="false" aria-controls="pokazi-skrij">
                    <div class="row">
                        <div>SHOW MORE</div>
                        <div class="triangle-down my-auto mx-3"></div>
                    </div>
                </button>
                <div class="row collapse" id="pokazi-skrij">
                    <div class="odstavek ml-5 mb-5">The goal of the Healthy Arteries Campaign is to promote
                        awareness and timely diagnosis of PAD by supporting
                        active measurements of the Ankle-Brachial Index (ABI) for
                        everyone in the risk group.<b> By raising awareness about
                        PAD, we want to increase the demand for ABI
                        measurements.</b> Thus, creating benefits for stakeholders
                        looking for a commercial profit by selling ABPI MD.
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-6 slikca"><img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/assets/images/logo-slika.png" alt=""></div>
    </div>
    <div class="row">
        <div class="col-12 col-md-6 rumena">
            <h3 class="naslov ml-5">The Healthy Arteries Institute</h3>
            <div class="container">
                <div class="row">
                    <div class="odstavek ml-5">The Healthy Arteries Campaign is run by the <b>Healthy
                    Arteries Institute, a non-profit organization</b> established
                    for the sole purpose of managing the Campaign. We have
                    decided to create the Institute to start a distinct and
                    free-standing organization that will engage in a wide
                    variety of activities to promote awareness about PAD and and eventually become a globally recognized establishment.
                    </div>
                </div>
                <div class="row">
                    <div class="odstavek ml-5 my-5">Healthy Arteries Institute is a non-profit professional body
                    separated from MESI to open the opportunities for
                    professional and patient associations and other non-profit
                    organizations that would like to support the campaign.
                    </div>
                </div>
                <img class="img-fluid mt-5" src="<?php echo get_template_directory_uri(); ?>/assets/images/napis-slika.png" alt="">
            </div>
        </div>
        <div class="col-12 col-md-6 rdeca">
            <h3 class="naslov">Become a partner of the Campaign</h3>
            <div class="container">
                <div class="row">
                    <div class="odstavek ml-5">As our business partner, we invite you to become a partner
                    of the Campaign and aid our efforts to increase the demand
                    for ABI measurements by running the Campaign in your country!
                    </div>
                </div>
                <div class="row odtsavek">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages..</div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12 col-md-6 siva">
            <div class="odstavek text-center my-5 mx-auto">
                <b>Your agreement with us includes these Rules and Conditions for Participation in the Healthy Arteries Campaign. Please read them carefully here:</b>
                <h4 class="naslov-link">RULES AND CONDITIONS</h4>
            </div>
        </div>
        <div class="col-12 col-md-6 siva siva-levi">
            <div class="odstavek text-center my-5 mx-auto">
                <b>The campaign includes a joining fee. To find out more about the fees for the campaign, please click on this button:</b>
                <br><br>
                <h4 class="naslov-link">PARTNERSHIP FEES</h4>
            </div>
        </div>
    </div>
    <div class="row mx-auto my-5 text-center">
        <div class="col-12 my-4 grey-color"><b>Become a partner by clicking here:</b></div>
        <div class="col-12"><b-button class="btn gumb mx-auto">APPLY</b-button></b></div>
    </div>
</div>
	
</main>
*/