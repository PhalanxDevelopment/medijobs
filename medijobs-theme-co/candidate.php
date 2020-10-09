<?php
/**
 * Template Name: Candidate Page
 * Description: First page of the site
 *
 * @package WordPress
 * @subpackage Medijobs
 */
get_header();
?>
<style>
  .mj-list .mj-list__item {
    background-size: 6%;
    background-position: left 20px top 50px;
  }
</style>
<div class="mj-quick_links hide-on-mobile">
  <ul>
    <li id="ql_section_1" class="quick_link" data-section="1">
      Welcome to Medijobs
    </li>
    <li id="ql_section_2" class="quick_link" data-section="2">
      Benefits
    </li>
    <li id="ql_section_3" class="quick_link" data-section="3">
      Checkout
    </li>
    <li id="ql_section_4" class="quick_link" data-section="4">
      Where we're active
    </li>
    <li id="ql_section_6" class="quick_link" data-section="6">
      For Employer
    </li>
    <li id="ql_section_7" class="quick_link" data-section="7">
      Our Process
    </li>
    <li id="ql_section_9" class="quick_link" data-section="9">
      The decision
    </li>
    <li id="ql_section_10" class="quick_link" data-section="9">
      In the press
    </li>
  </ul>
</div>
<?php
$form = get_field('form');
if ($form) { ?>
  <div class="mj-container">
    <form id="form" action="<?php echo $form['form_link'] ?>" method="post" class="mj-register_form mj-form">
      <div id="close-form" class="close hide-on-desktop"></div>
      <a href="<?php echo $form['top_link'] ?>" class="login"><?php echo $form['top_link_text'] ?></a>
      <h3><?php echo $form['title'] ?></h3>
      <p><?php echo $form['text'] ?></p>
      <input class="mj-input" name="name" type="text" placeholder="Nume Prenume">
      <input class="mj-input" name="email" type="email" placeholder="Email">
      <button type="submit" class="mj-btn mj-btn--primary mj-btn--alt--2 uppercase">
        <?php echo $form['button_text']; ?>
      </button>
      <p class="mj-align--center mj-font--small"><?php echo $form['bottom_text'] ?> <a href="<?php echo $form['bottom_link'] ?>"><?php echo $form['bottom_link_text'] ?> </a></p>
    </form>
  </div>
<?php } ?>
<?php
$heroSection = get_field('hero_section');
if ($heroSection) { ?>
  <div id="section_1" class="section section_1">
    <div class="mj-container">
      <div class="mj-grid">
        <div class="grid__item width-1/24 hide-on-mobile"></div>
        <div class="grid__item width-9/24">
          <div class="above_headline"><?php echo $heroSection['above_heading'] ?></div>
          <h1 class="headline uppercase"><?php echo $heroSection['title'] ?></h1>
        </div>
        <div class="grid__item width-6/24 hide-on-mobile">
          <div class="secton_bg_image">
            <?php $randomNumber = rand(1, 6);
            $imageNr = 'image_' . $randomNumber;
            $image = get_field($imageNr);
            ?>
            <img src="<?php echo $image; ?>" alt="">
          </div>
        </div>
      </div>
      <div class="mj-grid">
        <div class="grid__item width-1/24 hide-on-mobile"></div>
        <div class="grid__item width-7/24">
          <p><?php echo $heroSection['text'] ?></p>
        </div>
      </div>
      <div class="mj-grid">
        <div class="grid__item width-10/24">
          <div class="sub_section"><?php echo $heroSection['sub_section_text'] ?></div>
          <a href="<?php echo $form['form_link'] ?>" class="mj-btn mj-btn--primary hide-on-desktop">
            creeaza cont
          </a>
          <p class="mj-align--center mj-font--small hide-on-desktop">Ești companie? <a href="https://app.medijobs.ro/register/company">Creează-ți profilul aici </a></p>
        </div>
      </div>
      <div class="mj-grid hide-on-mobile">
        <div class="grid__item width-1/24 hide-on-mobile"></div>
        <div class="grid__item width-10/24">
          <div class="hide-on-mobile">
            <div class="mj-images">
              <img class="greyscale" src="<?php echo $heroSection['logos']['logo_1']; ?>" alt="">
              <img class="greyscale" src="<?php echo $heroSection['logos']['logo_2']; ?>" alt="">
              <img class="greyscale" src="<?php echo $heroSection['logos']['logo_3']; ?>" alt="">
              <img class="greyscale" src="<?php echo $heroSection['logos']['logo_4']; ?>" alt="">
              <img class="greyscale" src="<?php echo $heroSection['logos']['logo_5']; ?>" alt="">
              <img class="greyscale" src="<?php echo $heroSection['logos']['logo_6']; ?>" alt="">
              <div class="clearfix"></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
<?php } ?>
<?php $benefitsSection = get_field('benefits_section');
if ($benefitsSection) { ?>
  <div id="section_2" class="section section_2" style="background-image: url(<?php echo $benefitsSection['image']; ?>)">
    <div class="mj-container">
      <div class="mj-grid">
        <div class="grid__item width-1/24"></div>
        <div class="grid__item width-6/24">
          <div class="above_headline"><?php echo $benefitsSection['above_heading'] ?></div>
          <h2 class="headline light"><?php echo $benefitsSection['title'] ?> </h2>
          <p><?php echo $benefitsSection['text'] ?> </p>
        </div>
        <div class="grid__item width-7/24">
          <?php if ($benefitsSection['benefit_1']) { ?>
            <ul class="mj-list">
              <?php if ($benefitsSection['benefit_1']) { ?>
                <li class="mj-list__item">
                  <?php echo $benefitsSection['benefit_1'] ?>
                </li>
              <?php } ?>
              <?php if ($benefitsSection['benefit_2']) { ?>
                <li class="mj-list__item">
                  <?php echo $benefitsSection['benefit_2'] ?>
                </li>
              <?php } ?>
              <?php if ($benefitsSection['benefit_3']) { ?>
                <li class="mj-list__item">
                  <?php echo $benefitsSection['benefit_3'] ?>
                </li>
              <?php } ?>
            </ul>
          <?php } ?>
          <p><a class="mj-icon-link" href="<?php echo $benefitsSection['link'] ?>">
              <?php echo $benefitsSection['link_actual'] ?></a> <?php echo $benefitsSection['link_text'] ?></p>
        </div>
      </div>
    </div>
  </div>
<?php } ?>
<?php $ourProcess = get_field('our_process_section');
if ($ourProcess) { ?>
  <div id="section_7" class="section section_7">
    <div class="mj-container">
      <div class="mj-grid">
        <div class="grid__item width-1/24"></div>
        <div class="grid__item width-6/24">
          <div class="above_headline"><?php echo $ourProcess['above_headline'] ?></div>
          <h2 class="headline light"><?php echo $ourProcess['title'] ?></h2>
          <div id="section_icon" style="background-image: url(<?php echo $ourProcess['icon'] ?>)" class="section_icon step_1 hide-on-mobile"></div>
        </div>
        <div class="grid__item width-1/24"></div>
        <div class="grid__item width-7/24">
          <ul class="mj-steps">
            <?php if ($ourProcess['step_1']) {  ?>
              <li id="step_1" class="mj-step active">
                <div class="step_nr">.01</div>
                <div class="step_title"><?php echo $ourProcess['step_1'] ?></div>
                <div class="step_content"><?php echo $ourProcess['step_1_text'] ?></div>
              </li>
            <?php } ?>
            <?php if ($ourProcess['step_2']) {  ?>
              <li id="step_2" class="mj-step active">
                <div class="step_nr">.02</div>
                <div class="step_title"><?php echo $ourProcess['step_2'] ?></div>
                <div class="step_content"><?php echo $ourProcess['step_2_text'] ?></div>
              </li>
            <?php } ?>
            <?php if ($ourProcess['step_3']) {  ?>
              <li id="step_3" class="mj-step active">
                <div class="step_nr">.03</div>
                <div class="step_title"><?php echo $ourProcess['step_3'] ?></div>
                <div class="step_content"><?php echo $ourProcess['step_3_text'] ?></div>
              </li>
            <?php } ?>
            <?php if ($ourProcess['step_4']) {  ?>
              <li id="step_4" class="mj-step active">
                <div class="step_nr">.04</div>
                <div class="step_title"><?php echo $ourProcess['step_4'] ?></div>
                <div class="step_content"><?php echo $ourProcess['step_4_text'] ?></div>
              </li>
            <?php } ?>
          </ul>
        </div>
      </div>
    </div>
  </div>
<?php } ?>
<?php $pressSection = get_field('press_section');
if ($pressSection) { ?>
  <div id="section_10" class="section section_10">
    <div class="mj-container">
      <div class="mj-grid">
        <div class="grid__item width-1/24"></div>
        <div class="grid__item width-7/24">
          <div class="above_headline"> <?php echo $pressSection['above_title']; ?></div>
          <h2 class="headline light"><?php echo $pressSection['title']; ?></h2>
        </div>
      </div>
      <div class="mj-grid">
        <div class="grid__item width-1/24"></div>
        <div class="grid__item width-14/24">
          <?php if ($pressSection['press_item_1']) { ?>
            <div class="quote">
              <img src="<?php echo $pressSection['press_item_1']['logo'] ?>" alt="">
              <p>
                <?php echo $pressSection['press_item_1']['text'] ?>
              </p>
            </div>
          <?php } ?>
          <?php if ($pressSection['press_item_2']) { ?>
            <div class="quote">
              <img src="<?php echo $pressSection['press_item_2']['logo'] ?>" alt="">
              <p>
                <?php echo $pressSection['press_item_2']['text'] ?>
              </p>
            </div>
          <?php } ?>
          <?php if ($pressSection['press_item_3']) { ?>
            <div class="quote">
              <img src="<?php echo $pressSection['press_item_3']['logo'] ?>" alt="">
              <p>
                <?php echo $pressSection['press_item_3']['text'] ?>
              </p>
            </div>
          <?php } ?>
          <?php if ($pressSection['press_item_4']) { ?>
            <div class="quote">
              <img src="<?php echo $pressSection['press_item_4']['logo'] ?>" alt="">
              <p>
                <?php echo $pressSection['press_item_4']['text'] ?>
              </p>
            </div>
          <?php } ?>
          <?php if ($pressSection['press_item_5']) { ?>
            <div class="quote">
              <img src="<?php echo $pressSection['press_item_5']['logo'] ?>" alt="">
              <p>
                <?php echo $pressSection['press_item_5']['text'] ?>
              </p>
            </div>
          <?php } ?>
          <?php if ($pressSection['press_item_6']) { ?>
            <div class="quote">
              <img src="<?php echo $pressSection['press_item_6']['logo'] ?>" alt="">
              <p>
                <?php echo $pressSection['press_item_6']['text'] ?>
              </p>
            </div>
          <?php } ?>
        </div>
      </div>
    </div>
  </div>
<?php } ?>
<?php $keyPositions = get_field('key_positions_section');
if ($keyPositions) { ?>
  <div id="section_3" class="section section_3">
    <div class="mj-container">
      <div class="background_title hide-on-mobile">
        <?php echo $keyPositions['background_text'] ?>
      </div>
      <div class="mj-grid">
        <div class="grid__item width-1/24"></div>
        <div class="grid__item width-13/24">
          <div class="above_headline"><?php echo $keyPositions['above_header_text'] ?></div>
          <h2 class="headline light"><?php echo $keyPositions['title'] ?></h2>
          <ul class="mj-simple-list">
            <?php echo $keyPositions['list_of_positions'] ?>
            <!--  <a class="mj-icon-link" href="#">
                                          SEE MORE ACTIVE JOBS <br> THAT WE ARE LOOKING FOR.
                                      </a>
                                  -->
        </div>
      </div>
    </div>
  </div>
<?php } ?>
<?php $mapSection = get_field('map_section');
if ($mapSection) { ?>
  <div id="section_4" class="section section_4">
    <div class="mj-container">
      <div class="mj-grid">
        <div class="grid__item width-1/24"></div>
        <div class="grid__item width-10/24">
          <div class="above_headline"><?php echo $mapSection['above_heading'] ?></div>
          <h2 class="headline light"><?php echo $mapSection['title'] ?></h2>
          <div class="mj-cols hide-on-desktop">
            <div class="mj-col">
              <p>New York</p>
              <p>Jersey City</p>
            </div>
          </div>
          <div class="mj-image romania-map hide-on-mobile" style="margin-bottom: -210px">
            <img src="<?php the_field('map'); ?>" alt="">
          </div>
        </div>
      </div>
    </div>
  </div>
<?php } ?>
<?php $employeeBox = get_field('for_employers_box');
if ($employeeBox) { ?>
  <div id="section_6" class="section section_6">
    <div class="mj-container">
      <div class="mj-box">
        <div class="mj-grid">
          <div class="grid__item width-2/24"></div>
          <div class="grid__item width-22/24">
            <div class="above_headline"><?php echo $employeeBox['above_heading'] ?></div>
            <h2 class="headline light uppercase"><?php echo $employeeBox['title'] ?></h2>
            <a href=" <?php echo $employeeBox['button_text'] ?>"><?php echo $employeeBox['text'] ?></a>
          </div>
        </div>
        <div class="mj-grid">
          <div class="grid__item width-2/24"></div>
          <div class="grid__item width-10/24">
            <a href=" <?php echo $employeeBox['link'] ?>" class="mj-btn mj-btn--primary mj-btn--alt">
              <?php echo $employeeBox['button_text'] ?>
            </a>
          </div>
          <div class="grid__item width-2/24"></div>
          <div class="grid__item width-10/24">
            <!-- <p class="mj-align--center mj-font--small "><a href="#">Find out more <br> about our process.</a></p> -->
          </div>
        </div>
      </div>
    </div>
  </div>
<?php } ?>
<?php get_footer(); ?>
