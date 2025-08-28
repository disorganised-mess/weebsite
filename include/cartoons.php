<div class="cartoons">



    <?php
        $base_cartoon_dir = 'cartoons';
        $dh = opendir($base_cartoon_dir);
        while(false != ($file = readdir($dh))){
            if(!is_dir($base_cartoon_dir . '/' . $file) &&
                    $file != '.' &&
                    $file != '..'){
                echo "<img src=\"$base_cartoon_dir/$file\" />";
            }
        }
    ?>
    
</div>
