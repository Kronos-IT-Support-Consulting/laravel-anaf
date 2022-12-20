<?php

namespace Andali\Anaf\Domain\Info;

use Andali\Anaf\Domain\Info\Casts\DateCast;
use Carbon\Carbon;
use Spatie\LaravelData\Attributes\WithCast;
use Spatie\LaravelData\Data;

class StareInactiv extends Data
{
    public function __construct(
        #[WithCast(DateCast::class)]
        public ?Carbon $dataInactivare,
        #[WithCast(DateCast::class)]
        public ?Carbon $dataReactivare,
        #[WithCast(DateCast::class)]
        public ?Carbon $dataPublicare,
        #[WithCast(DateCast::class)]
        public ?Carbon $dataRadiere,
        public ?bool $statusInactivi
    ) {
    }
}
