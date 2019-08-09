<?php
function search($quantity, $map) {
    $row = count($map);
    $column = count($map[0]);
for ($i=0; $i < $row; $i++) {
    $place = 0;
    for ($j=0; $j < $column; $j++) {
        if ($j > $column - $quantity + 1) {
            continue;
        }
        if ($map[$i][$j] == 0) {
            $place = $place + 1;
            if ($place == $quantity) {
                echo 'Возможные места ряд: '. ($i+1) . ' места с: ' . ($j+1 - $quantity+1). ' по: ' . ($j+1) . '<br></br>';
                continue;
            }
        } else
            $place = 0;
        
    }
}
}
function generate($rows, $placesPerRow, $avaliableCount) {
    if ($rows * $placesPerRow  > $avaliableCount) {
        $result = FALSE;
    } else {
        $result = array(array());
        for ($i = 0; $i <= $rows-1; $i++) {
            for ($j = 0; $j <= $placesPerRow-1; $j++) {
                $result[$i][$j] = rand(0,1);
                //echo $i;
            }
        }
    }
return $result;
}
$map = generate(5,10,51);
search(3,$map);
?>   