<?php 
// -- Author : Tony Doan --
   
    // --- DATA  ---- 
    $directory = get_bloginfo('template_directory');
     $currentlang = get_bloginfo('language');
     $args = array(
    'numberposts'  => -1,
    'orderby' => 'ID',
    'order' => 'ASC',
    'post_type' => 'brokerages',
    'suppress_filters' => false // Helps for Language page by not suppressing filters 
    );
      $brokeragetable = get_posts($args); 
    $brokersList = array();
    $categoryList = array();

    // ============ Label language ==========================
    if($currentlang == "en-US")
    {
        $btndetails = "More details";
        $brokeragelabel = "Brokerage";
    }
    else
    {
        $btndetails = "Plus de details";
        $brokeragelabel = "Courtier";
    }

    // ============ Data Collection ===========================
   $xml = simplexml_load_file(plugin_dir_path(__FILE__).'categories.xml'  ); 

     foreach($brokeragetable as $posts)
    {
        $post = get_post_meta($posts-> ID,"",true) ;
         $image = wp_get_attachment_image_src( get_post_thumbnail_id( $posts-> ID ), 'single-post-thumbnail' );
         $brokerage = new brokerage(get_the_title(),
            $post['minimum-deposit'][0],
            $post['commission-equity'][0],
            $post['etf-offer'][0],
            $post['account-maintenance'][0],
            $post['dual-currency'][0],
            $post['promotional-offer'][0],
            $post['promotional-offer-url'][0],
            $post['promotional-offer-popout'][0],
            $post['robo-advisor'][0],
            $post['option-commission'][0],
            $post['resources'][0],
            $post['reduced-commission-equity'][0],
            $post['international-market'][0],
            $post['usd-only'][0],
            $post['account-maintenance-criteria'][0],
            $post['option-reduced-commission'][0],
            $post['level-data'][0],
            $post['margin-account-rate'][0],
            $post['mobile'][0],
            $image[0]);
         array_push($brokersList,$brokerage);
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


    // -------------------------------------------->
echo '<table class="comparator-table col-lg-11 col-md-11 col-sm-11 col-xs-11" >


  <thead>
        <tr class="brokerrow'.$counter.'">
            <th><p>'.$brokeragelabel.'s</p></th>
            <th ><P>'.$categoryList[0] -> get_name().'
            <br/><button type="button" class="tooltip-category" id="popout" aria-hidden="true"  data-toggle="popover" data-trigger="focus" data-placement="right" title="'.$categoryList[0] -> get_tooltip().'">
             <span class="glyphicon glyphicon-question-sign"></span>
            </button></P> </th>
            <th><P>'.$categoryList[1] -> get_name().'
             <br/><button type="button" class="tooltip-category" id="popout" aria-hidden="true"  data-toggle="popover" data-trigger="focus" data-placement="right" title="'.$categoryList[1] -> get_tooltip().'">
             <span class="glyphicon glyphicon-question-sign"></span>
            </button></P></th>  
            <th><P>'.$categoryList[3] -> get_name().'
             <br/><button type="button" class="tooltip-category" id="popout" aria-hidden="true"  data-toggle="popover" data-trigger="focus" data-placement="right" title="'.$categoryList[3] -> get_tooltip().'">
             <span class="glyphicon glyphicon-question-sign"></span>
            </button></th></P></th>
            <th><P>'.$categoryList[4] -> get_name().'
             <br/><button type="button" class="tooltip-category" id="popout" aria-hidden="true"  data-toggle="popover" data-trigger="focus" data-placement="right" title="'.$categoryList[4] -> get_tooltip().'">
             <span class="glyphicon glyphicon-question-sign"></span>
            </button></P></th>
            <th><P>'.$categoryList[10] -> get_name().'
             <br/><button type="button" class="tooltip-category" id="popout" aria-hidden="true"  data-toggle="popover" data-trigger="focus" data-placement="right" title="'.$categoryList[10] -> get_tooltip().'">
             <span class="glyphicon glyphicon-question-sign"></span>
            </button></P></th>
            <th><p>'.$categoryList[23] -> get_name().'
             <br/><button type="button" class="tooltip-category" id="popout" aria-hidden="true"  data-toggle="popover" data-trigger="focus" data-placement="right" title="'.$categoryList[23] -> get_tooltip().'">
             <span class="glyphicon glyphicon-question-sign"></span>
            </button></p></th>
            <th></th>
            </tr>';
    $counter = 1; ?>

    <?php 
    foreach($brokersList as $broker)
    {
        if($counter!=1)
        {
        echo '
        <tr  id="mainheadercomparator" class="collapse brokerrow'.$counter.'">
        <th><p>'.$brokeragelabel.'</p></th>
            <th><P>'.$categoryList[0] -> get_name().'
            <br/><button type="button" class="tooltip-category" id="popout" aria-hidden="true"  data-toggle="popover" data-trigger="focus" data-placement="right" title="'.$categoryList[0] -> get_tooltip().'">
             <span class="glyphicon glyphicon-question-sign"></span>
            </button></P> </th>
            <th><P>'.$categoryList[1] -> get_name().'
             <br/><button type="button" class="tooltip-category" id="popout" aria-hidden="true"  data-toggle="popover" data-trigger="focus" data-placement="right" title="'.$categoryList[1] -> get_tooltip().'">
             <span class="glyphicon glyphicon-question-sign"></span>
            </button></P></th>  
            <th><P>'.$categoryList[3] -> get_name().'
             <br/><button type="button" class="tooltip-category" id="popout" aria-hidden="true"  data-toggle="popover" data-trigger="focus" data-placement="right" title="'.$categoryList[3] -> get_tooltip().'">
             <span class="glyphicon glyphicon-question-sign"></span>
            </button></th></P></th>
            <th><P>'.$categoryList[4] -> get_name().'
             <br/><button type="button" class="tooltip-category" id="popout" aria-hidden="true"  data-toggle="popover" data-trigger="focus" data-placement="right" title="'.$categoryList[4] -> get_tooltip().'">
             <span class="glyphicon glyphicon-question-sign"></span>
            </button></P></th>
            <th><P>'.$categoryList[10] -> get_name().'
             <br/><button type="button" class="tooltip-category" id="popout" aria-hidden="true"  data-toggle="popover" data-trigger="focus" data-placement="right" title="'.$categoryList[10] -> get_tooltip().'">
             <span class="glyphicon glyphicon-question-sign"></span>
            </button></P></th>
            <th><p>'.$categoryList[23] -> get_name().'
             <br/><button type="button" class="tooltip-category" id="popout" aria-hidden="true"  data-toggle="popover" data-trigger="focus" data-placement="right" title="'.$categoryList[23] -> get_tooltip().'">
             <span class="glyphicon glyphicon-question-sign"></span>
            </button></p></th>
            <th></th>
            </tr>'; 
           }

   echo' </thead>
        <tbody>
        <tr>';
                    echo '<td><img src="'.$broker -> get_imgurl().'" alt="'.$broker -> get_broker_name().'"></td>'; 
                    echo '<td data-label="'.$categoryList[0] -> get_name().' "><button type="button" class="tooltip-category mobile" id="popout" aria-hidden="true"  data-toggle="popover" data-trigger="focus" data-placement="top" title="'.$categoryList[0] -> get_tooltip().'">
                         <span class="glyphicon glyphicon-question-sign"></span>
                        </button><p>'.str_replace("/n","<br/>", $broker -> get_minimum_deposit()).'</p></td>'; 
                    echo '<td data-label="'.$categoryList[1] -> get_name().' "><button type="button" class="tooltip-category mobile" id="popout" aria-hidden="true"  data-toggle="popover" data-trigger="focus" data-placement="top" title="'.$categoryList[1] -> get_tooltip().'">
                         <span class="glyphicon glyphicon-question-sign"></span>
                        </button><p>'.str_replace("/n","<br/>", $broker -> get_commission_equity()).'</p></td>'; 
                    echo '<td data-label="'.$categoryList[3] -> get_name().' "><button type="button" class="tooltip-category mobile" id="popout" aria-hidden="true"  data-toggle="popover" data-trigger="focus" data-placement="top" title="'.$categoryList[3] -> get_tooltip().'">
                         <span class="glyphicon glyphicon-question-sign"></span>
                        </button><p>'.str_replace("/n","<br/>", $broker -> get_etf_offer()).'</p></td>'; 
                    echo '<td data-label="'.$categoryList[4] -> get_name().' "><button type="button" class="tooltip-category mobile" id="popout" aria-hidden="true"  data-toggle="popover" data-trigger="focus" data-placement="top" title="'.$categoryList[4] -> get_tooltip().'">
                         <span class="glyphicon glyphicon-question-sign"></span>
                        </button><p>'.str_replace("/n","<br/>", $broker -> get_account_maintenance()).'</p></td>'; 
                    echo '<td data-label="'.$categoryList[10] -> get_name().' "><button type="button" class="tooltip-category mobile" id="popout" aria-hidden="true"  data-toggle="popover" data-trigger="focus" data-placement="top" title="'.$categoryList[10] -> get_tooltip().'">
                         <span class="glyphicon glyphicon-question-sign"></span>
                        </button><p>'.str_replace("/n","<br/>", $broker -> get_dual_currency()).'</p></td>'; 
                    echo '<td data-label="'.$categoryList[23] -> get_name().' "><button type="button" class="tooltip-category mobile" id="popout" aria-hidden="true"  data-toggle="popover" data-trigger="focus" data-placement="top" title="'.$categoryList[23] -> get_tooltip().'">
                         <span class="glyphicon glyphicon-question-sign"></span>
                        </button><p style="font-weight:900; font-size:18px;"><a class="'.$broker -> get_promotion_popout().'" href="'.$broker -> get_promotion_url().'">'.$broker -> get_promotion_text().'</a></p></td>'; 
                    echo ' <td><input type="button" class="btn-details" data-toggle="collapse" id="togglebtn'.$counter.'" onclick="toggle(this);" data-target=".brokerrow'.$counter.'" value="'.$btndetails.'"></td>';
   echo '</tr> 
        </tbody>';
      // ========= Second Row ===========================
        echo '<thead>
              <tr class="collapse brokerrow'.$counter.'">
                 <th></th>
                 <th><p>'.$categoryList[14] -> get_name().'
                 <br/><button type="button" class="tooltip-category" id="popout" aria-hidden="true"  data-toggle="popover" data-trigger="focus" data-placement="right" title="'.$categoryList[14] -> get_tooltip().'">
                 <span class="glyphicon glyphicon-question-sign"></span>
                 </button></p></th>
                 <th><p>'.$categoryList[6] -> get_name().'
                 <br/><button type="button" class="tooltip-category" id="popout" aria-hidden="true"  data-toggle="popover" data-trigger="focus" data-placement="right" title="'.$categoryList[6] -> get_tooltip().'">
                 <span class="glyphicon glyphicon-question-sign"></span>
                 </button></th></p></th>
                 <th><p>'.$categoryList[13] -> get_name().'
                 <br/><button type="button" class="tooltip-category" id="popout" aria-hidden="true"  data-toggle="popover" data-trigger="focus" data-placement="right" title="'.$categoryList[13] -> get_tooltip().'">
                 <span class="glyphicon glyphicon-question-sign"></span>
                 </button></p></th>
                 <th><p>'.$categoryList[2] -> get_name().'
                 <br/><button type="button" class="tooltip-category" id="popout" aria-hidden="true"  data-toggle="popover" data-trigger="focus" data-placement="right" title="'.$categoryList[2] -> get_tooltip().'">
                 <span class="glyphicon glyphicon-question-sign"></span>
                 </button></th></p></th>
                 <th><p>'.$categoryList[8] -> get_name().'
                 <br/><button type="button" class="tooltip-category" id="popout" aria-hidden="true"  data-toggle="popover" data-trigger="focus" data-placement="right" title="'.$categoryList[8] -> get_tooltip().'">
                 <span class="glyphicon glyphicon-question-sign"></span>
                 </button></th></p></th>
                 <th><p>'.$categoryList[11] -> get_name().'
                 <br/><button type="button" class="tooltip-category" id="popout" aria-hidden="true"  data-toggle="popover" data-trigger="focus" data-placement="right" title="'.$categoryList[11] -> get_tooltip().'">
                 <span class="glyphicon glyphicon-question-sign"></span>
                 </button></th></p>
                 <th></th>     
            </tr>
            </thead>

           <tbody>
           <tr class="collapse brokerrow'.$counter.'">';
           
           echo '<td></td>
                 <td data-label="'.$categoryList[14] -> get_name().' "><button type="button" class="tooltip-category mobile" id="popout" aria-hidden="true"  data-toggle="popover" data-trigger="focus" data-placement="top" title="'.$categoryList[14] -> get_tooltip().'">
                 <span class="glyphicon glyphicon-question-sign"></span>
                 </button><p>'.str_replace("/n","<br/>", $broker -> get_robo_advisor()).'</p></td>'; 
                 echo '<td data-label="'.$categoryList[6] -> get_name().' "><button type="button" class="tooltip-category mobile" id="popout" aria-hidden="true"  data-toggle="popover" data-trigger="focus" data-placement="top" title="'.$categoryList[6] -> get_tooltip().'">
                 <span class="glyphicon glyphicon-question-sign"></span>
                 </button><p>'.str_replace("/n","<br/>", $broker -> get_option_commission()).'</p></td>'; 
                 echo '<td data-label="'.$categoryList[13] -> get_name().' "><button type="button" class="tooltip-category mobile" id="popout" aria-hidden="true"  data-toggle="popover" data-trigger="focus" data-placement="top" title="'.$categoryList[13] -> get_tooltip().'">
                 <span class="glyphicon glyphicon-question-sign"></span>
                 </button><p> '.str_replace("/n","<br/>", $broker -> get_resources()).' </p></td>'; 
                 echo '<td data-label="'.$categoryList[2] -> get_name().'  "><button type="button" class="tooltip-category mobile" id="popout" aria-hidden="true"  data-toggle="popover" data-trigger="focus" data-placement="top" title="'.$categoryList[2] -> get_tooltip().'">
                 <span class="glyphicon glyphicon-question-sign"></span>
                 </button><p>'.str_replace("/n","<br/>", $broker -> get_reduced_commission_equity()).'</p></td>'; 
                 echo '<td data-label="'.$categoryList[8] -> get_name().' "><button type="button" class="tooltip-category mobile" id="popout" aria-hidden="true"  data-toggle="popover" data-trigger="focus" data-placement="top" title="'.$categoryList[8] -> get_tooltip().'">
                 <span class="glyphicon glyphicon-question-sign"></span>
                 </button><p>'.str_replace("/n","<br/>", $broker -> get_international_market()).'</p></td>';  
                 echo '<td data-label="'.$categoryList[11] -> get_name().' "><button type="button" class="tooltip-category mobile" id="popout" aria-hidden="true"  data-toggle="popover" data-trigger="focus" data-placement="top" title="'.$categoryList[11] -> get_tooltip().'">
                 <span class="glyphicon glyphicon-question-sign"></span>
                 </button><p>'.str_replace("/n","<br/>", $broker -> get_usd_only()).'</p></td>
                 <td></td> 
          </tr> 
          </tbody>';

      // ========= Third Row ===========================
           echo '
           <thead>
           <tr class=" collapse brokerrow'.$counter.'">  
               <th></th>
                <th><p>'.$categoryList[5] -> get_name().'
                 <br/><button type="button" class="tooltip-category" id="popout" aria-hidden="true"  data-toggle="popover" data-trigger="focus" data-placement="right" title="'.$categoryList[5] -> get_tooltip().'">
                 <span class="glyphicon glyphicon-question-sign"></span>
                </button></p></th>
                 <th><p>'.$categoryList[7] -> get_name().'
                 <br/><button type="button" class="tooltip-category" id="popout" aria-hidden="true"  data-toggle="popover" data-trigger="focus" data-placement="right" title="'.$categoryList[7] -> get_tooltip().'">
                 <span class="glyphicon glyphicon-question-sign"></span>
                </button></th></p></th>  
                <th><p>'.$categoryList[15] -> get_name().'
                 <br/><button type="button" class="tooltip-category" id="popout" aria-hidden="true"  data-toggle="popover" data-trigger="focus" data-placement="right" title="'.$categoryList[15] -> get_tooltip().'">
                 <span class="glyphicon glyphicon-question-sign"></span>
                </button></p></th>
                <th><p>'.$categoryList[16] -> get_name().'
                 <br/><button type="button" class="tooltip-category" id="popout" aria-hidden="true"  data-toggle="popover" data-trigger="focus" data-placement="right" title="'.$categoryList[16] -> get_tooltip().'">
                 <span class="glyphicon glyphicon-question-sign"></span>
                </button></p></th>  
                    <th><p>'.$categoryList[12] -> get_name().'
                 <br/><button type="button" class="tooltip-category" id="popout" aria-hidden="true"  data-toggle="popover" data-trigger="focus" data-placement="right" title="'.$categoryList[12] -> get_tooltip().'">
                 <span class="glyphicon glyphicon-question-sign"></span>
                </button></p></th> 
                <th colspan="2"></th>
           </tr>
           </thead>

           <tbody>
           <tr style="border-bottom: 10px solid #00C6BD;" class="collapse brokerrow'.$counter.'">
                <td></td>
                <td data-label="'.$categoryList[5] -> get_name().' "><button type="button" class="tooltip-category mobile" id="popout" aria-hidden="true"  data-toggle="popover" data-trigger="focus" data-placement="top" title="'.$categoryList[5] -> get_tooltip().'">
                <span class="glyphicon glyphicon-question-sign"></span>
                </button><p>'.str_replace("/n","<br/>", $broker -> get_account_maintenance_rebate_criteria()).'</p></td>';  
                echo '<td data-label="'.$categoryList[7] -> get_name().' "><button type="button" class="tooltip-category mobile" id="popout" aria-hidden="true"  data-toggle="popover" data-trigger="focus" data-placement="top" title="'.$categoryList[7] -> get_tooltip().'">
                <span class="glyphicon glyphicon-question-sign"></span>
                </button><p>'.str_replace("/n","<br/>", $broker -> get_option_reduced_commission()).'</p></td>';
                echo '<td data-label="'.$categoryList[15] -> get_name().' "><button type="button" class="tooltip-category mobile" id="popout" aria-hidden="true"  data-toggle="popover" data-trigger="focus" data-placement="top" title="'.$categoryList[15] -> get_tooltip().'">
                <span class="glyphicon glyphicon-question-sign"></span>
                </button><p> '.str_replace("/n","<br/>", $broker -> get_level_data()).' </p></td>'; 
                echo '<td data-label="'.$categoryList[16] -> get_name().' "><button type="button" class="tooltip-category mobile" id="popout" aria-hidden="true"  data-toggle="popover" data-trigger="focus" data-placement="top" title="'.$categoryList[16] -> get_tooltip().'">
                <span class="glyphicon glyphicon-question-sign"></span>
                </button><p>'.str_replace("/n","<br/>", $broker -> get_margin_account_rate()).'</p></td>';
                echo '<td data-label="'.$categoryList[12] -> get_name().' "><button type="button" class="tooltip-category mobile" id="popout" aria-hidden="true"  data-toggle="popover" data-trigger="focus" data-placement="top" title="'.$categoryList[12] -> get_tooltip().'">
                <span class="glyphicon glyphicon-question-sign"></span>
                </button><p>'.str_replace("/n","<br/>", $broker -> get_mobile()).'</p></td>
                <td colspan="2"></td>
            </tr>
            </tbody>';
        $counter++;
   }
    echo ' </table>
    ';




?>