<?php get_header(); ?>
<!-- Slider main container -->
<div class="swiper">
    <!-- Additional required wrapper -->
    <?php
    $slides = get_field('slides');
    if ($slides) :
    ?>
        <div class="swiper-wrapper">
            <!-- Slides -->
            <?php foreach ($slides as $slide) { ?>
                <div class="swiper-slide" style="background-image: url(<?php echo $slide['image']; ?>);">
                    <div class="slide__container">
                        <div class="slide__inner">

                            <div class="slide__title"><?php echo $slide['text_1'] ?></div>
                            <div class="slide__subtitle"><?php echo $slide['text_2'] ?></div>
                            <button class="btn white">Book a tour</button>
                            <?php echo $slide['list'] ?>
                        </div>
                    </div>
                </div>
            <? } ?>

        </div>
    <?php endif; ?>
    <div class="swiper__nav">
        <div class="swiper__nav_progress">
            <!-- If we need pagination -->
            <div class="swiper-pagination"></div>
            <!-- If we need scrollbar -->
            <div class="swiper__progress__wrap">
                <div class="swiper__progress"></div>
            </div>
        </div>
        <!-- If we need navigation buttons -->
        <div class="swiper__nav_arrows">
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
        </div>

    </div>

</div>


<div class="content__container">
    <div class="row aligncenter direction1200">
        <div class="col-6">
            <picture>
                <source src="<?php echo get_template_directory_uri(); ?>/img/image1.webp" type="image/webp"><img src="<?php echo get_template_directory_uri(); ?>/img/image1.png" alt="">
            </picture>
        </div>
        <div class="col-6">
            <div class="flex jcc flexwrap">
                <div class="text">
                    <div class="undertitle">Serengeti, the ultimate wildlife experience</div>
                    <h1 class="h1">1 day safari Serengeti national park</h1>
                    <div class="flex flexwrap">
                        <div class="text__column">
                            <div class="text__num">12 000</div>
                            <div class="text__desc">square miles</div>
                        </div>
                        <div class="text__column">
                            <div class="text__num">30%</div>
                            <div class="text__desc">of Tanzania is National Parks</div>
                        </div>
                        <div class="text__column onlymobile">
                            <div class="text__num">35</div>
                            <div class="text__desc">species of plains animals</div>
                        </div>
                        <div class="text__column onlymobile">
                            <div class="text__num">500</div>
                            <div class="text__desc">species of birds</div>
                        </div>
                    </div>
                </div>

                <div class="calculator">
                    <div class="calculator__title">Vacation calculator</div>
                    <div class="calculator__body flex">
                        <input type="text" id="operand1" maxlength="5" value="1200">
                        <select name="" id="method">
                            <option value="1" selected="selected">+</option>
                            <option value="2">-</option>
                            <option value="3">*</option>
                            <option value="4">/</option>
                        </select>
                        <input type="text" id="operand2" maxlength="5"  value="1100">
                    </div>
                    <div class="calculator__footer">Result: <span id="result">2300</span></div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>