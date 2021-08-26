<?php


namespace App\Values;


use App\Strategies\Interactives\Img;
use App\Strategies\Interactives\Mp4;
use App\Strategies\Interactives\NotFound;
use App\Strategies\Interactives\Question;
use App\Strategies\Interactives\Validate;

final class Interactive {
    const GET_STRATEGY=[

      '0'=>Propuestas::class,
      '1' =>Asistencia::class,
      '2' =>Img::class,
      '3'=>Contactos::class,

    ];



    static function getStrategy( $value )
    {
        if ( key_exists( $value, self::GET_STRATEGY ) ) {
            return self::GET_STRATEGY[ $value ];
        }
        return NotFound::class;
    }
}
