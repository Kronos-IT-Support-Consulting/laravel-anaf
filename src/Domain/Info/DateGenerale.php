<?php

namespace Andali\Anaf\Domain\Info;

use Andali\Anaf\Domain\Info\Casts\DateCast;
use Carbon\Carbon;
use Spatie\LaravelData\Attributes\WithCast;
use Spatie\LaravelData\Casts\DateTimeInterfaceCast;
use Spatie\LaravelData\Data;

class DateGenerale extends Data
{
    public function __construct(
        public ?int $cui,
        #[WithCast(DateCast::class)]
        public ?Carbon $data,
        public ?string $denumire,
        public ?string $adresa,
        public ?string $nrRegCom,
        public ?string $telefon,
        public ?string $fax,
        public ?string $codPostal,
        public ?string $act,
        public ?string $stare_inregistrare,
        #[WithCast(DateCast::class)]
        public ?Carbon $data_inregistrare,
        public ?string $cod_CAEN,
        public ?string $iban,
        public bool $statusRO_e_Factura,
        public ?string $organFiscalCompetent,
    ) {
    }
}
