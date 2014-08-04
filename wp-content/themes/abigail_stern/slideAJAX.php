 <?php
	//get includes
	require_once('../../../wp-load.php');

	//POST variables
	$action = $_POST['action'];
	$nextID = $_POST['nextID'];
	$curID  = $_POST['curID'];
	$prevID = $_POST['prevID'];


	//Functions
	function next_slide($nextID){
		//globals
		global $post;
		global $wpdb;
        $post = get_post($nextID);
		$nextP = get_next_post();

        $post_categories = wp_get_post_categories( $post_id );
        $cats = array();

        foreach($post_categories as $c){
        	$cat = get_category( $c );
        	$cats[] = array( 'name' => $cat->name, 'slug' => $cat->slug );
        }

		//is this is the last post; If so, get the first post instead of an empty string
		if($nextP == ''){
			$firstID = $wpdb->get_results("SELECT id
										   FROM wp_posts
										   WHERE `post_status` = 'publish'
										   AND `post_type` = 'post'
										   ORDER BY `post_date` ASC
										   LIMIT 1");
			$nextP = get_post($firstID[0]->id);
		}

		//get render vars
		// $nextPImg = get_the_post_thumbnail($nextP->ID, 'full');
		// $nextPID = $nextP->ID;
		// $nextTitle = $nextP->post_title;
		// $nextYear = get_post_meta($nextP->ID, 'year', true);
		// $nextMedium = get_post_meta($nextP->ID, 'medium', true);
		// $nextDimensions = get_post_meta($nextP->ID, 'dimensions', true);
		// $nextLink = get_permalink($nextP->ID);

        $nextPID = $nextP->ID;
        $nextPName = get_field('project_name', $nextP->ID);
        $nextPDescription = get_field('project_description', $nextP->ID);
        $nextPImage1 = get_field('image_1', $nextP->ID)['url'];
        $nextPImage2 = get_field('image_2', $nextP->ID)['url'];
        $nextPImage3 = get_field('image_3', $nextP->ID)['url'];
        $nextPImage4 = get_field('image_4', $nextP->ID)['url'];
        $nextLink = get_permalink($nextP->ID);



		//create output
		$output .= "<div id='work-curr' data-id='$nextPID' data-link-'$nextLink'>
                        <div class='project-details'>
                            <h3>$nextPName</h3>
                            <p>$nextPDescription</p>
                        </div>
                        <ul class='project-thumbnails'>
                              <li class='project-thumbnail-1'>
                                  <img class='project-thumbnail' src='$nextPImage1' />
                              </li>
                              <li class='project-thumbnail-2'>
                                  <img class='project-thumbnail' src='$nextPImage2' />
                              </li>
                              <li class='project-thumbnail-3'>
                                  <img class='project-thumbnail' src='$nextPImage3' />
                              </li>
                              <li class='project-thumbnail-4'>
                                  <img class='project-thumbnail' src='$nextPImage4' />
                              </li>
                              <div style='clear: both;'></div>
                              <div class='left-arrow'>
                                      <a id='prevslide'><i class='fa fa-angle-left fa-2x'></i></a>
                              </div>
                              <div class='right-arrow'>
                                      <a id='nextslide'><i class='fa fa-angle-right fa-2x'></i></a>
                              </div>
                          </ul>
                    </div>";

		return $output;
	}

	function prev_slide($prevID){
		//globals
		global $post;
		global $wpdb;
        $post = get_post($prevID);
		$prevP = get_previous_post();

		//is this is the last post; If so, get the first post instead of an empty string
		if($prevP == ''){
			$firstID = $wpdb->get_results("SELECT id
										   FROM wp_posts
										   WHERE `post_status` = 'publish'
										   AND `post_type` = 'post'
										   ORDER BY `post_date` DESC
										   LIMIT 1");
			$prevP = get_post($firstID[0]->id);
		}

		//get render vars
		// $prevPImg = get_the_post_thumbnail($prevP->ID, 'full');
		// $prevPID = $prevP->ID;
		// $prevTitle = $prevP->post_title;
		// $prevYear = get_post_meta($prevP->ID, 'year', true);
		// $prevMedium = get_post_meta($prevP->ID, 'medium', true);
		// $prevDimensions = get_post_meta($prevP->ID, 'dimensions', true);
		// $prevLink = get_permalink($prevP->ID);

        $prevPID = $prevP->ID;
        $prevPName = the_field('project_name', $prevP->ID);
        $prevPDescription = the_field('project_description', $prevP->ID);
        $prevPImage1 = get_field('image_1', $prevP->ID)['url'];
        $prevPImage2 = get_field('image_2', $prevP->ID)['url'];
        $prevPImage3 = get_field('image_3', $prevP->ID)['url'];
        $prevPImage4 = get_field('image_4', $prevP->ID)['url'];
        $nextLink = get_permalink($prevP->ID);

		//create output
		$output .= "<div id='work-prev' data-id='$prevPID' data-link-'$nextLink'>
                      <div class='project-details'>
                          <h3>$prevPName</h3>
                          <p>$prevPDescription</p>
                      </div>
                      <ul class='project-thumbnails'>
                            <li class='project-thumbnail-1'>
                                <img class='project-thumbnail' src='$prevPImage1' />
                            </li>
                            <li class='project-thumbnail-2'>
                                <img class='project-thumbnail' src='$prevPImage2' />
                            </li>
                            <li class='project-thumbnail-3'>
                                <img class='project-thumbnail' src='$prevPImage3' />
                            </li>
                            <li class='project-thumbnail-4'>
                                <img class='project-thumbnail' src='$prevPImage4' />
                            </li>
                            <div style='clear: both;'></div>
                            <div class='left-arrow'>
                                    <a id='prevslide'><i class='fa fa-angle-left fa-2x'></i></a>
                            </div>
                            <div class='right-arrow'>
                                    <a id='nextslide'><i class='fa fa-angle-right fa-2x'></i></a>
                            </div>
                        </ul>
                  </div>";

  return $output;
	}

	if($action == 'next-slide'){
		echo next_slide($nextID);
	}elseif($action == 'prev-slide'){
		echo prev_slide($prevID);
	}else{
		echo "invalid action request";
	}
?>
