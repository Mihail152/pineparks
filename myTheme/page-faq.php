<?php get_header(); ?>
<div class="section__q">
    <div class="section__container">
        <div class="flex jcsb">
            <div class="block__title">
                <div class="undertitle">Interesting information</div>
                <div class="h1">
                    Tips for the best experience of Tanzania
                </div>
            </div>
            <!-- accordion -->
            <?php
            $answers = get_field('answers');
            if ($answers) :
            ?>
                <div class="block__accordion">
                    <div id="accordion" class="accordion">
                        <!-- Slides -->
                        <?php foreach ($answers as $answer) { ?>
                            <div class="accordion__item">
                                <div class="accordion__header">
                                    <?php echo $answer['title'] ?>
                                </div>
                                <div class="accordion__body">
                                    <div class="accordion__content">
                                        <?php echo $answer['description'] ?>
                                    </div>
                                </div>
                            </div>
                        <? } ?>


                    </div>
                </div>
            <?php endif; ?>
            <!-- # accordion -->
        </div>
    </div>
</div>



<div class="content__container">
    <div class="row aligncenter">
        <div class="col-6">
            <div class="flex flexwrap">
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

        <div class="col-6">
            <picture>
                <source srcset="<?php echo get_template_directory_uri(); ?>/img/image1.webp" type="image/webp"><img src="<?php echo get_template_directory_uri(); ?>/img/image1.png" alt="">
            </picture>
        </div>
    </div>
</div>
<?php get_footer(); ?>