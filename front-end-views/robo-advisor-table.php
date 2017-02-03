<?php 
// -- Author : Tony Doan --
     
 // --- DATA  ---- 
    $directory = get_bloginfo('template_directory');
     $currentlang = get_bloginfo('language');
     $args = array(
    'numberposts'  => -1,
    'orderby' => 'ID',
    'order' => 'ASC',
    'post_type' => 'robos',
    'suppress_filters' => false // Helps for Language page by not suppressing filters 
    );
    $robotable = get_posts($args); 
    $roboList = array();
    $categoryList = array();

     // ============ Label language ==========================
    if($currentlang == "en-US")
    {
        $btndetails = "More details";
        $robolabel = "Robo Advisor";
    }
    else
    {
        $btndetails = "Plus de details";
        $robolabel = "Robot-Conseiller";
    }

       // ============ Data Collection ===========================
   $xml = simplexml_load_file(plugin_dir_path(__FILE__).'categories.xml'  ); 

     foreach($robotable as $posts)
    {
        $post = get_post_meta($posts-> ID,"",true) ;
         $image = wp_get_attachment_image_src( get_post_thumbnail_id( $posts-> ID ), 'single-post-thumbnail' );
         $robo = new robo(get_the_title(),
            $post['minimum-deposit'][0],
            $post['pricing'][0],
            $post['portfolio'][0],
            $post['rebalacing'][0],
            $post['promotional-offer'][0],
            $post['promotional-offer-url'][0],
            $post['promotional-offer-popout'][0],
            $post['tax-optimization'][0],
            $post['personnalized-help'][0],
            $post['mobile'][0],
            $image[0] );
         array_push($roboList,$robo);
     }

       foreach($xml-> category as $cat)
     {
        if($currentlang == 'en-US')
        {
             $category = new category($cat -> name, $cat -> tooltip);
        }
        else
        {
            $category = new category($cat -> nameFR, $cat -> tooltipFR);
        }
        array_push($categoryList, $category);
        
     }

     // ============ End Data Collection ==================

    // -------------------------------------------->
echo '
<table class="comparator-table col-lg-11 col-md-11 col-sm-11 col-xs-11" >
  <thead id="first-header">
   <tr class="roborow'.$counter.'"><th><P>'.$robolabel.'</P></th>
              <th><p>'.$categoryList[0] -> get_name().'
             <br/><button type="button" class="tooltip-category" id="popout" aria-hidden="true"  data-toggle="popover" data-trigger="focus" data-placement="right" title="'.$categoryList[0] -> get_tooltip().'">
             <span class="glyphicon glyphicon-question-sign"></span>
            </button></p></th>
              <th><p>'.$categoryList[17] -> get_name().'
             <br/><button type="button" class="tooltip-category" id="popout" aria-hidden="true"  data-toggle="popover" data-trigger="focus" data-placement="right" title="'.$categoryList[17] -> get_tooltip().'">
             <span class="glyphicon glyphicon-question-sign"></span>
            </button></p></th>
               <th><p>'.$categoryList[18] -> get_name().'
             <br/><button type="button" class="tooltip-category" id="popout" aria-hidden="true"   data-toggle="popover" data-trigger="focus" data-placement="right" title="'.$categoryList[18] -> get_tooltip().'">
             <span class="glyphicon glyphicon-question-sign"></span>
            </button></p></th>
           <th><p>'.$categoryList[19] -> get_name().'
            <br/><button type="button" class="tooltip-category" id="popout" aria-hidden="true"  data-toggle="popover" data-trigger="focus" data-placement="right" title="'.$categoryList[19] -> get_tooltip().'">
            <span class="glyphicon glyphicon-question-sign"></split(pattern, string)</san>
            </button></p></th> 
             <th><p>'.$categoryList[23] -> get_name().'
             <br/><button type="button" class="tooltip-category" id="popout" aria-hidden="true"  data-toggle="popover" data-trigger="focus" data-placement="right" title="'.$categoryList[23] -> get_tooltip().'">
             <span class="glyphicon glyphicon-question-sign"></span>
            </button></p></th>
            <th colspan="2"></th>
     </tr>';
    $counter = 1; ?>

    <?php 
      foreach($roboList as $robo)
    {

        if($counter!=1)
        {
        echo '
        <tr id="mainheadercomparator"  class="collapse roborow'.$counter.'">
            <th><P>'.$robolabel.'</P></th>
            <th><p>'.$categoryList[0] -> get_name().'
            <br/><button type="button" class="tooltip-category" id="popout" aria-hidden="true"  data-toggle="popover" data-trigger="focus" data-placement="right" title="'.$categoryList[0] -> get_tooltip().'">
            <span class="glyphicon glyphicon-question-sign"></span>
            </button></p></th>
            <th><p>'.$categoryList[17] -> get_name().'
            <br/><button type="button" class="tooltip-category" id="popout" aria-hidden="true"  data-toggle="popover" data-trigger="focus" data-placement="right" title="'.$categoryList[17] -> get_tooltip().'">
            <span class="glyphicon glyphicon-question-sign"></span>
            </button></p></th>
            <th><p>'.$categoryList[18] -> get_name().'
            <br/><button type="button" class="tooltip-category" id="popout" aria-hidden="true"  data-toggle="popover" data-trigger="focus" data-placement="right" title="'.$categoryList[18] -> get_tooltip().'">
            <span class="glyphicon glyphicon-question-sign"></span>
            </button> 
             <th><p>'.$categoryList[19] -> get_name().'
            <br/><button type="button" class="tooltip-category" id="popout" aria-hidden="true"  data-toggle="popover" data-trigger="focus" data-placement="right" title="'.$categoryList[19] -> get_tooltip().'">
            <span class="glyphicon glyphicon-question-sign"></split(pattern, string)</san>
            </button></p></th> 
            <th><p>'.$categoryList[23] -> get_name().'
            <br/><button type="button" class="tooltip-category" id="popout" aria-hidden="true"  data-toggle="popover" data-trigger="focus" data-placement="right" title="'.$categoryList[23] -> get_tooltip().'">
            <span class="glyphicon glyphicon-question-sign"></span>
            </button></p></th>      
            <th colspan="2"></th>
        </tr>';
        }   
 echo'
    </thead>
    <tbody>
    <tr class="headerbox" id="headerbox_togglebtn'.$counter.'">';
        echo '<td><img src="'.$robo -> get_imgurl().'" alt="'.$post -> post_title.'"></td>'; 
        echo '<td data-label="'.$categoryList[0] -> get_name().' "><button type="button" class="tooltip-category mobile" id="popout" aria-hidden="true"  data-toggle="popover" data-trigger="focus" data-placement="top" title="'.$categoryList[0] -> get_tooltip().'">
             <span class="glyphicon glyphicon-question-sign"></span>
            </button><p>'.str_replace("/n","<br/>",$robo -> get_minimum_deposit()).'</p></td>'; 
        echo '<td data-label="'.$categoryList[17] -> get_name().' "><button type="button" class="tooltip-category mobile" id="popout" aria-hidden="true"  data-toggle="popover" data-trigger="focus" data-placement="top" title="'.$categoryList[17] -> get_tooltip().'">
             <span class="glyphicon glyphicon-question-sign"></span>
            </button><p>'.str_replace("/n","<br/>",$robo -> get_pricing()).'</p></td>'; 
        echo '<td data-label="'.$categoryList[18] -> get_name().' "><button type="button" class="tooltip-category mobile" id="popout" aria-hidden="true"  data-toggle="popover" data-trigger="focus" data-placement="top" title="'.$categoryList[18] -> get_tooltip().'">
             <span class="glyphicon glyphicon-question-sign"></span>
            </button><p>'.str_replace("/n","<br/>",$robo -> get_portfolio()).'</p></td>'; 
          echo '<td data-label="'.$categoryList[19] -> get_name().' "><button type="button" class="tooltip-category mobile" id="popout" aria-hidden="true"  data-toggle="popover" data-trigger="focus" data-placement="top" title="'.$categoryList[19] -> get_tooltip().'">
             <span class="glyphicon glyphicon-question-sign"></span>
            </button><p>'.str_replace("/n","<br/>",$robo -> get_rebalancing()).'</p></td>';   
        echo '<td data-label="'.$categoryList[22] -> get_name().'"><button type="button" class="tooltip-category mobile" id="popout" aria-hidden="true"  data-toggle="popover" data-trigger="focus" data-placement="top" title="'.$categoryList[22] -> get_tooltip().'">
             <span class="glyphicon glyphicon-question-sign"></span>
            </button><p style="font-weight:900; font-size:17px;"><a class="'.$robo -> get_promotion_popout().'" href="'.$robo -> get_promotion_url().'">'.$robo -> get_promotion_text().'</a></p></td>';    
        echo ' <td><input type="button" class="btn-details" data-toggle="collapse" id="robotogglebtn'.$counter.'" onclick="toggle(this);" id="togglebtn'.$counter.'" onclick="toggle(this);" data-target=".roborow'.$counter.'" value="'.$btndetails.'"></td>
    </tr>
    </tbody>

    <thead>
    <tr class="collapse roborow'.$counter.'">
            <th></th> 
            <th ><p>'.$categoryList[20] -> get_name().'
            <br/><button type="button" class="tooltip-category" id="popout" aria-hidden="true"  data-toggle="popover" data-trigger="focus" data-placement="right" title="'.$categoryList[20] -> get_tooltip().'">
            <span class="glyphicon glyphicon-question-sign"></span>
            </button></p></th>
            <th><p>'.$categoryList[21] -> get_name().'
            <br/><button type="button" class="tooltip-category" id="popout" aria-hidden="true"  data-toggle="popover" data-trigger="focus" data-placement="right" title="'.$categoryList[21] -> get_tooltip().'">
            <span class="glyphicon glyphicon-question-sign"></span>
            </button></p></th>
            <th><p>'.$categoryList[22] -> get_name().'
            <br/><button type="button" class="tooltip-category" id="popout" aria-hidden="true"  data-toggle="popover" data-trigger="focus" data-placement="right" title="'.$categoryList[22] -> get_tooltip().'">
            <span class="glyphicon glyphicon-question-sign"></span>
            </button></p></th>
            <th colspan="3"></th>
    </tr>
    <tbody>
    <tr class="collapse roborow'.$counter.'" style="border-bottom: 10px solid #00C6BD ;">';
                echo '<td></td>'; // Used to complete border
                echo '<td data-label="'.$categoryList[20] -> get_name().' "><button type="button" class="tooltip-category mobile" id="popout" aria-hidden="true"  data-toggle="popover" data-trigger="focus" data-placement="top" title="'.$categoryList[20] -> get_tooltip().'">
             <span class="glyphicon glyphicon-question-sign"></span>
            </button><br/><p>'.str_replace("/n","<br/>",$post['tax-optimization'][0]).'</p></td>'; 
                echo '<td data-label="'.$categoryList[21] -> get_name().' "><button type="button" class="tooltip-category mobile" id="popout" aria-hidden="true"  data-toggle="popover" data-trigger="focus" data-placement="top" title="'.$categoryList[21] -> get_tooltip().'">
             <span class="glyphicon glyphicon-question-sign"></span>
            </button><br/><p>'.str_replace("/n","<br/>",$post['personnalized-help'][0]).'</p></td>';
                echo '<td data-label="'.$categoryList[22] -> get_name().' "><button type="button" class="tooltip-category mobile" id="popout" aria-hidden="true"  data-toggle="popover" data-trigger="focus" data-placement="top" title="'.$categoryList[22] -> get_tooltip().'">
             <span class="glyphicon glyphicon-question-sign"></span>
            </button><br/>  <p>'.str_replace("/n","<br/>",$post['mobile'][0]).'</p></td>
            <td colspan="3"></td>
     </tr>
     </tbody>';
        $counter++;
   }

    echo '</table>';

?>