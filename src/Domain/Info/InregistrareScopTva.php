<?php

namespace Andali\Anaf\Domain\Info;

use Andali\Anaf\Domain\Info\Casts\DateCast;
use Carbon\Carbon;
use Spatie\LaravelData\Attributes\WithCast;
use Spatie\LaravelData\Data;

class InregistrareScopTva extends Data
{
    public function __construct(
        public ?bool $scpTVA,
        #[WithCast(DateCast::class)]
        public ?Carbon $data_inceput_ScpTVA,
        #[WithCast(DateCast::class)]
        public ?Carbon $data_sfarsit_ScpTVA,
        #[WithCast(DateCast::class)]
        public ?Carbon $data_anul_imp_ScpTVA,
        public ?string $mesaj_ScpTVA,
    ) {
    }
}
