<?php
header('Cache-Control: no-cache', true, 200);
?>
<table width="100%">
<?php
$FILENAME = 'scores.txt';

$lines = file($FILENAME);

foreach($lines as $i => $line){
    if(strlen(trim($line)) == 0){
        continue;
    }else if(substr($line, 0, 1) == '!'){
        $ln = implode("</th><th>", explode("\t", substr($line, 1)));
        $ln = "<th>$ln</th>";
    } else {
        $ln = implode("</td><td>", explode("\t", $line));
        $ln = "<td>$ln</td>";
    }
    echo "<tr>".PHP_EOL;
    echo "$ln".PHP_EOL;
    echo "</tr>".PHP_EOL;
}
?>
</table>
