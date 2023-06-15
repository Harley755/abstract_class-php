<?php

namespace Class;

class Renault extends Vehicule
{
    public function marque($param = 'test'): string
    {
        return 'Je roule en ' . $this->marque . '.';
    }
}
