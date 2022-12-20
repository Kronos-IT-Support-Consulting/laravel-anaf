<?php

namespace Andali\Anaf\Domain\Info;

use Spatie\LaravelData\Data;

class AdresaDomiciliuFiscal extends Data
{
    public function __construct(
        public ?string $ddenumire_Strada,
        public ?string $dnumar_Strada,
        public ?string $ddenumire_Localitate,
        public ?string $dcod_Localitate,
        public ?string $ddenumire_Judet,
        public ?string $dcod_Judet,
        public ?string $dcod_JudetAuto,
        public ?string $dtara,
        public ?string $ddetalii_Adresa,
        public ?string $dcod_Postal,
    ) {
    }
}
