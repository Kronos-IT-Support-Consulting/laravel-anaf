<?php

namespace Andali\Anaf\Domain\Info;

use Spatie\LaravelData\Data;

class AdresaSediuSocial extends Data
{
    public function __construct(
                public ?string $sdenumire_Strada,
                public ?string $snumar_Strada,
                public ?string $sdenumire_Localitate,
                public ?string $scod_Localitate,
                public ?string $sdenumire_Judet,
                public ?string $scod_Judet,
                public ?string $scod_JudetAuto,
                public ?string $stara,
                public ?string $sdetalii_Adresa,
                public ?string $scod_Postal,
    ) {
    }
}
