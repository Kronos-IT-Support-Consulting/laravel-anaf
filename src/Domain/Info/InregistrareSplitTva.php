<?php

namespace Andali\Anaf\Domain\Info;

use Andali\Anaf\Domain\Info\Casts\DateCast;
use Carbon\Carbon;
use Spatie\LaravelData\Attributes\WithCast;
use Spatie\LaravelData\Data;

class InregistrareSplitTva extends Data
{
    public function __construct(
        #[WithCast(DateCast::class)]
        public ?Carbon $dataInceputSplitTVA,
        #[WithCast(DateCast::class)]
        public ?Carbon $dataAnulareSplitTVA,
        public ?bool $statusSplitTVA
    ) {
    }
}
