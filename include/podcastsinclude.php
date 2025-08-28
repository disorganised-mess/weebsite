<?php
    include(dirname(__FILE__) . '/podcastsinclude-2.php');

	function walk($the_dir){
		$handle = opendir($the_dir);
		$ret = array();
		while (false !== ($the_file = readdir($handle))) {
			if(in_array($the_file, array('.', '..'))){
				continue;
			}
			if(is_dir($the_dir.'/'.$the_file)) {
				$tmp_array = array('dir' => $the_file);
				$tmp_array['files'] = walk($the_dir.'/'.$the_file);

				if(count($tmp_array['files']) > 0){
					$ret[] = $tmp_array;
				}
			} elseif(substr($the_file, -3)) {
				$ret[] = $the_dir.'/'.$the_file;
			}
		}
		return $ret;
	}

    function decipher_date($filename){
        $date_regexes = array(
                array(
                        '-\s*(\d\d)(\d\d)(\d\d)',
                        array(
                                'month',
                                'date',
                                'year',
                                ),
                        ),
                array(
                        '-\s*(\d\d)-(\d\d)-(\d\d)',
                        array(
                                'month',
                                'date',
                                'year',
                                ),
                        ),
                );

        $ret = array();
        foreach($date_regexes as $set){
            $re = $set[0];
            if(preg_match("/{$re}/", $filename)){
                $date_re = array();
                preg_match_all("/{$re}/", $filename, $date_re);
                foreach($set[1] as $i => $elem){
                    $date_elem = $date_re[$i + 1];
                    $ret[$elem] = $date_elem[0];
                }
                break;
            }
        }
        return $ret;
    }

	function clean_item($the_item){
		$item_array = split('/', $the_item);
		$filename = $item_array[count($item_array)-1];
		$ext = substr($filename, -3);
		
        $file_date = decipher_date($filename);
		$filemo = $file_date['month'];
		$filedy = $file_date['date'];
		$fileyr = $file_date['year'];

        $filename_arr = explode('-', $filename);
        $filename_str = $filename_arr[0];
		$title = $filename_str;
		$title = str_replace('_', ' ', str_replace('-', ' ', $title));
		$ret = array('title'=>$title, 'month'=>$filemo, 
				'date'=>$filedy, 'year'=>'20'.$fileyr,
				'raw'=>$the_item);
		return $ret;
	}

    function make_date($item_arr){
            $ret = '';
            $ret = $ret.$item_arr['month'].'/'.$item_arr['date'].'/';
            $ret = $ret.$item_arr['year'];
            return $ret;
    }

    function make_name($item_arr){
            return make_date($item_arr).' - '.$item_arr['title'];
    }

    function make_item_link($item_arr){
            $ret = make_date($item_arr);
            $ret = $ret.' - <a href="playpodcast.php?toplay=';
            $ret = $ret.$item_arr['raw'].'">';
            $ret = $ret.$item_arr['title'].'</a>';
            return $ret;
    }

	function make_item_list($shows, $target){
		$folders = array();
		$other_files = array();
		foreach($shows['files'] as $item){
			if(is_array($item)){
				$folders[] = $item;
			} else{
				$other_files[] = $item;
			}
		}
		if(count($folders) > 0){
			foreach($folders as $folder){
                $real_name =  $folder['dir'];
                //$real_name =  str_replace('-', ' ', $real_name);
                $real_name =  str_replace('_', ' ', $real_name);
                if(is_null($target) || $target == $real_name){
                    echo '<h2>';
                    echo $real_name;
                    echo '</h2>'.PHP_EOL;
                    echo '<ul>'.PHP_EOL;
                    foreach($folder['files'] as $item){
                        if(is_array($item)){
                            continue;
                        }
                        $item_arr = clean_item($item);
                        echo '<li>';
                        echo make_item_link($item_arr);
                        echo '</li>';
                    }
                    echo '</ul>'.PHP_EOL;
                }
            }
		}
		//if(count($other_files) > 0){
		//	echo '<h2>Other Clips of Interest</h2>'.PHP_EOL;
		//	echo '<ul>';
		//	foreach($other_files as $item){
		//		$item_arr = clean_item($item);
		//		echo '<li>'.make_item_link($item_arr).'</li>'.PHP_EOL;
		//	}
		//	echo '</ul>';
		//}
	}

    function get_podcasts(){
        global $PODCASTS_SERIAL_FILE;
        $shows_str = file_get_contents($PODCASTS_SERIAL_FILE);
        $shows = unserialize($shows_str);

        return $shows;
    }
?>
