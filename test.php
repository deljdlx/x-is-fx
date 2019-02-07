<?php


require(__DIR__.'/source/class/Construction.php');
require(__DIR__.'/source/class/Operator.php');

require(__DIR__.'/source/class/Operator/Pour.php');


require(__DIR__.'/source/class/Termr/x.php');


$construction = new XIsFx\Construction();


$construction = new XIsFx\Construction();
$construction
    ->pour()
        ->tout()->x
            ->dans()->E
        ->ilExiste()
            ->uneConstructionZ
                ->dans()->langageDe()->E
                ->diffenteDe()->x
                ->enSurjection()
                    ->avec()
                        ->x
;

echo $construction->render();



$construction = new XIsFx\Construction();
$construction
    ->pour()
        ->tout()->x
            ->dans()->E
        ->ilExiste()
            ->uneConstructionZ
        ->dans()->langageDe()->E
            ->diffenteDe()->x
            ->enSurjection()
            ->avec()
    ->x
;

