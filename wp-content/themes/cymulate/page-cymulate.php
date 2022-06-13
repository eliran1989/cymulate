<?php 

get_header();
 

$firstSectionData = get_field("section_1");
$secondSectionData = get_field("section_2");



?>


    <div class="content">

            <section class='first'>
                    <div>

                        <h1><?php echo $firstSectionData['title']; ?></h1>
                        <h5><?php echo $firstSectionData['sub_title']; ?></h5>
                        <a href="" class="button"><?php echo $firstSectionData['button_title']; ?></a>
                    </div>
            </section>

            <section class='second'>

                    <div>

                        <div>
                            <h4><?php echo $secondSectionData['list_title']; ?></h4>
                            <ul>

                               <?php 

                                    foreach ($secondSectionData['list'] as $item) {
                                        ?>
                                            <li><?php echo $item; ?></li>
                                        <?php
                                    }

                                ?>

                            </ul>

                        </div>
                        <form>
                            <h4><?php echo $secondSectionData['form']['title']; ?></h4>
                            <div>

                                <?php 
        
                                    foreach ($secondSectionData['form']['inputs'] as $key => $input) {

                                       
                                        if($input['type'] ==  "select"){
                                            ?>
                                                <select  name="<?php echo $key; ?>">
                                                    <option value="<?php echo $input['placeholder']; ?>"><?php echo $input['placeholder']; ?></option>
                                                </select>
                                       
                                            <?php   
                                        }else{
                                            ?>  
                                                <input type="text"  name="<?php echo $key; ?>" placeholder="<?php echo $input['placeholder']; ?>"/>
                                            <?php   
                                        }

                                    }


                                ?>

    

                                <div>
                                    <input type="checkbox" id="terms" name="terms">
                                    <label for="terms">* I accept the <a href=''>Terms and Conditions</a> and <a href=''>Privacy Policy.</a></label>
                                </div>

                                <a href='' class="button">Subscribe</a>
                            </div>

                        </form>
                    
                    </div>

                  

                    </div>

                    <div class='mobileCircle'></div>

            </section>


            <?php
            
              $args = array(
                'post_type' => 'threats',
                'posts_per_page'=>3,
                'tax_query' => array(
                    array(
                        'taxonomy' => 'Prioritize',
                        'field' => 'slug',
                        'terms' => "Immediate-Threats"
                    )
                 )            
                );

                

            
            ?>

            <section class='third'>
                         <div>           
                            <div class='toggle'>
                                <div>
                                    <span>Immediate Threats</span>
                                    <label class="switch">
                                        <input type="checkbox">
                                        <span class="slider"></span>
                                    </label>
                                    <span>Low Risk</span>
                                </div>
                            </div>

                            <div class='toggleMobile'>
                                <a href="" class="button active">Immediate</a>
                                <a href="" class="button">Low Risk</a>
                            </div>



                                <div class="items">
                       

                                    <div class="boxes-wrap">
                                        <div class="arrow left"></div>
                                        <div class="arrow right"></div>
                                        <div class="boxes">

                                            <?php foreach (get_posts($args) as $key => $post) { ?>
                                        
                                                    <div>

                                                        <div class="icon"></div>
                                                        <div class="date"><?php echo get_field("date" , $post->ID); ?></div>
                                                        <div class="title"><?php echo get_field("title" , $post->ID); ?></div>
                                                        <div class="description"><?php echo get_field("description" , $post->ID); ?></div>


                                                    </div>


                                           <?php } ?>


                                        </div>
                                    </div>

                                </div>

                                <div class="dots">
                                    <div></div>
                                    <div></div>
                                    <div></div>
                                </div>


                        </div>

                

            </section>



    </div>


<?php 
get_footer();



