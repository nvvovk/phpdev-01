<?php
    interface iUnit
    {
        function Unit();
    }

    class Unit implements iUnit
        private $name_of_troops = '';
        private $health ();
        private $armour ();
        private $damage ();

    CompoundArmy    

    foreach ($army['units'] as $unit => $count) 
    {
       $damage += ${$unit}['damage'] * $count;
        $health += ${$unit}['health'] * $count + ${$unit}['armour'] * $count;
    }

        $table
        $rows = 5; 
        $cols = 3; 
        
        echo '<table border="1">';
        
        for ($tr=1; $tr<=$rows; $tr++){ 
            echo '<tr>';
            }
            for ($td=1; $td<=$cols; $td++){ 
                echo '<td>'. $tr*$td .'</td>';
            }
            echo '</tr>';
        
        echo '</table>';
        

    <html>
    <body>
        <h1><?php echo "War's results"; ?></h1>
        
        <pre><?php echo $table; ?></pre>
    </body>    
</html>