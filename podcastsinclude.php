<?php
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

	function clean_item($the_item){
		$item_array = split('/', $the_item);
		$filename = $item_array[count($item_array)-1];
		$ext = substr($filename, -3);
		
		$filedate = substr($filename, -10, 6);
		$filemo = substr($filedate, 0, 2);
		$filedy = substr($filedate, 2, 2);
		$fileyr = substr($filedate, 4, 2);
		$title = substr($filename, 0, strlen($filename)-11);
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

	function make_item_list($shows){
		$folders = array();
		$other_files = array();
		foreach($shows['files'] as $item){
			if(is_array($item)){
				$folders[] = $item;
			} else {
				$other_files[] = $item;
			}
		}
		if(count($folders) > 0){
			echo '<ul>'.PHP_EOL;
			foreach($folders as $folder){
				echo '<li><h2>';
				echo str_replace('_', ' ', str_replace('-', ' ', $folder['dir']));
				echo '</h2></li><br />'.PHP_EOL;
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
			echo '</ul>'.PHP_EOL;
		}
		if(false && count($other_files) > 0){
			echo '<ul>'.PHP_EOL;
			echo '<li><h2>Other Clips of Interest</h2></li>';
			foreach($shows['files'] as $item){
				$item_arr = clean_item($item);
				echo '<li>'.make_item_link($item_arr).'</li>';
			}
		}
	}
?>
