<?php

namespace Class;

class Peugeot extends Vehicule
{
    public function marque($param = 'test'): string
    {
        return 'Je roule en ' . $this->marque . '.';
    }
}
