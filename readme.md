# x is Fx

Warning ! This is just a proof of concept.

It is a test to build some "complex logical contructions" with PHP

## Exemple
```php

$construction = new XIsFx\Construction();
$construction
    ->pour()
        ->tout()->x
            ->dans()->E
        ->ilExiste()
            ->uneConstructionZ
                ->dans()->langageDe()->E
                ->diffenteDe()->E
                ->enSurjection()
                    ->avec()
                        ->x
;

echo $construction->render();
echo PHP_EOL;

//===================================

$construction = new XIsFx\Construction();
$construction
    ->pour()
        ->tout()->x
            ->dans()->E
        ->ilExiste()
            ->uneConstructionZ
        ->dans()->langageDe()->E
            ->diffenteDe()->E
            ->enSurjection()
            ->avec()
    ->x
echo $construction->render();
echo PHP_EOL;

//===================================

$construction = new XIsFx\Construction();
$construction
    ->∀()->x
        ->∈()->E
        ->∃()->z
            ->∈()->E
            ->z->≠()->E
            ->text('/')
                ->f('z')->equal('x')
    ;
echo $construction->render();
echo PHP_EOL;

;

```
