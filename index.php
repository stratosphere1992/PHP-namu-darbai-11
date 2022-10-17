<?php

class FutboloRungtynes {

    public $patirtaTrauma;
    public $rungtyniuRezultatas;
    public $kuriKomandaLaimejo;

    public function simuliuotiTraumas() {
        $skaicius = rand(1,1000);
            if ($skaicius %  3.5 && 10) {
                $patirtaTrauma = 2;
            } else {
                $patirtaTrauma = 0;
            }
            echo "Patirta traumu: $patirtaTrauma";
        }
        
    public function simuliuotiRungtynes() {
        $pirmaKomanda = rand(0,5);
        $antraKomanda = rand(0,5);
        $rungtyniuRezultatas = array($pirmaKomanda,$antraKomanda);
        echo " Rezultatas: $rungtyniuRezultatas[0] : $rungtyniuRezultatas[1]";
    }
    
    public function laimetojai() {
        if ($pirmaKomanda[0] < $rungtyniuRezultatas[1]) {
            $kuriKomandaLaimejo = 1;    
        } else {
            $kuriKomandaLaimejo = 2;
        }
        echo  " Laimejo komanda: $kuriKomandaLaimejo";
    }
}

$rungtynes = new FutboloRungtynes();
$rungtynes->simuliuotiTraumas();
$rungtynes->simuliuotiRungtynes();
$rungtynes->laimetojai();
