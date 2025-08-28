<?php
if(!function_exists('get_random_ad')){
    $ads_not_to_return = array();
    function get_random_ad(){
        global $ads_not_to_return;
        $dir = 'sports';
        $ads = array();
        foreach(scandir($dir) as $ad){
            if(is_dir("{$dir}/{$ad}")){
                continue;
            }
            if($ad != '.' && $ad != '..'){
                $ads[] = $ad;
            }
        }
        if(count($ads) == count($ads_not_to_return)){
            $ads_not_to_return = array();
        }

        // randomly pick an ad
        $num = count($ads);

        $c = 0;
        $idx = rand(0, $num-1);
        while(in_array($ads[$idx], $ads_not_to_return)){
            $idx = rand(0, $num-1);
        }
        $ads_not_to_return[] = $ads[$idx];

        return $dir . '/' . str_replace(' ', '%20', $ads[$idx]);
    }
}
?>
