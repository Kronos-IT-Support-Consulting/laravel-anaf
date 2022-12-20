<?php

namespace Andali\Anaf\Domain\Info;

use Andali\Anaf\Domain\Info\Casts\DateCast;
use Carbon\Carbon;
use Spatie\LaravelData\Attributes\WithCast;
use Spatie\LaravelData\Data;

class InregistrareRTVAI extends Data
{
    public function __construct(
        #[WithCast(DateCast::class)]
        public ?Carbon $dataInceputTvaInc,
        #[WithCast(DateCast::class)]
        public ?Carbon $dataSfarsitTvaInc,
        #[WithCast(DateCast::class)]
        public ?Carbon $dataActualizareTvaInc,
        #[WithCast(DateCast::class)]
        public ?Carbon $dataPublicareTvaInc,
        public ?string $tipActTvaInc,
        public ?bool $statusTvaIncasare
    ) {
    }
}
