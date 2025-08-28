<?php
    include_once('pagedata/advertisers.php');
    include_once('pagedata/staff.php');
    include_once('pagedata/programming.php');
    // include_once('include/podcastsinclude.php');

    // Open a known directory, and proceed to read its contents
    // $podcast_shows = array();
    // $shows = get_podcasts();
    // foreach($shows['files'] as $file){
    //    if(!is_array($file)){
    //        continue;
    //    }
    //    $dir_name = $file['dir'];
    //    $podcast_shows["Podcasts - {$dir_name}"] = array(
    //            'display' => $dir_name,
    //            'href' => "podcasts.php?show={$dir_name}"
    //            );
    // }

    $linksArr = array();
    $linksArr['Mornings'] = array('href'=>'WEEB990_Mornings.php',
            'display'=>'Mornings with the LeaderMan',
            'sublinks' => array(
                'Steve' => array(
                    'display'=>'Steve Leader Adams',
                    'href' => 'pd.php',
                ),
            // 'Tim' =>array(
            //     'display'=>'Tim',
                //    'href' => 'tim.php',
                //),
            // 'Aaron' =>array(
                //'display'=>'Aaron',
                // 'href' => 'aaron.php',
            // ),
            ));
    // $linksArr['The Zumwalt Zone'] = array('href'=>'zumwaltzone.php',
    //        'display'=>'The Zumwalt Zone');
    $linksArr['Programming'] = array('href'=>'WEEB990_Programming.php',
            'display'=>'Programming',
            'sublinks' => $programs,);
    $linksArr['Podcasts'] = array('href'=>'podcasts.php',
            'display'=>'Podcasts',
            // 'sublinks' => $podcast_shows,
             );
    $linksArr['Staff'] = array('href'=>'WEEB990_Staff.php',
            'display'=>'Staff',
            'sublinks' => $staff,
            );
    $linksArr['Contact'] = array('href'=>'WEEB990_Contact.php',
            'display'=>'Contact Us');
    $linksArr['About'] = array('href'=>'WEEB990_AboutUs.php',
            'display'=>'Coverage Map');
    //$linksArr['Tech Tip'] = array('href'=>'techtip.php',
    //		'display'=>'Techtip');
    $linksArr['Advertisers'] = array('href'=>'WEEB990_Advertisers.php',
            'display'=>'Advertisers',
    //        'sublinks' => $advertisers,
            );
    $linksArr['Computer'] = array('href'=>'WEEB990_Computer.php',
            'display'=>'Computer Repair');
?>

<?php
function build_left_links($linksSet, $cur){
    return build_links($linksSet, $cur, 1);
}
function build_top_links($linksSet, $cur){
    return build_links($linksSet, $cur, 0);
}
function build_links($linksSet, $cur, $deep){
    $ret = "<ul>\n";
    foreach($linksSet as $k => $v){
        if(isset($v['href'])){
            $class = '';
            if($cur == $k || 
                (!$deep && 
                    isset($v['sublinks']) && 
                    array_key_exists($cur, $v['sublinks']))){
                $class = "current";
            }
            $ret .= "<li class=\"" . $class . "\">\n";
            $ret .= "<a href=\"" . $v['href'] . "\">\n";
            if(isset($v['display'])){
                $ret .= $v['display'];
            } else {
                $ret .= $k;
            }
            $ret .= "\n</a>\n";
            if($deep){
                if(isset($v['sublinks']) && ( 
                    $cur == $k ||
                    array_key_exists($cur, $v['sublinks'])
                    )
                ){
                    $ret .= build_left_links($v['sublinks'], $cur);
                }
            }
            $ret .= "</li>\n";
        }
    }
    $ret .= "</ul>\n";
    return $ret;
}
?>
