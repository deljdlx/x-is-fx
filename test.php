<?php

require(__DIR__.'/bootstrap.php');

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
echo PHP_EOL;


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
echo PHP_EOL;
$construction = new XIsFx\Construction();
$construction
    ->∀()->x
        ->∈()->E
        ->∃()->z
            ->∈()->E
            ->z->≠()->x
            ->text('/')
                ->f('z')->equal('x')
    ;
echo $construction->render();

