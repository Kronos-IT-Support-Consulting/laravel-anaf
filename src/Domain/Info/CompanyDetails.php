<?php

namespace Andali\Anaf\Domain\Info;

use Andali\Anaf\Domain\Info\Exceptions\VatNumberNotFound;
use Carbon\Carbon;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Str;

trait CompanyDetails
{
    public function info(): AnafData|VatNumberNotFound
    {
        $vatNumber = Str::of($this->vatNumber)->remove('ro', false)
            ->trim()
            ->__toString();

        /* @var array $info */
        $info = Http::withHeaders(['Content-Type' => 'application/json'])->retry(3, 100)
            ->post($this->vatUrl, [
                [
                    'cui' => $vatNumber,
                    'data' => Carbon::now()->format('Y-m-d'),
                ],
            ])->json();

        if (in_array($vatNumber, $info['notFound'])) {
            throw VatNumberNotFound::make();
        } else {
            $companyInfo = AnafData::from($info['found'][0]);
            if (filled($companyInfo->date_generale?->cui)) {
                return $companyInfo;
            } else {
                throw VatNumberNotFound::make();
            }
        }
    }
}
