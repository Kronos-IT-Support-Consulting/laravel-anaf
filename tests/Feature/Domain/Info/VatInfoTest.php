<?php

use Andali\Anaf\Anaf;
use Andali\Anaf\Domain\Info\Casts\DateCast;
use Carbon\Carbon;
use Spatie\LaravelData\Attributes\WithCast;

it('it will get info for vat numbers', function ($vatNumber) {
    $result = Anaf::for($vatNumber)->info();

    expect($result)
        ->toBeInstanceOf(\Andali\Anaf\Domain\Info\AnafData::class)
        ->date_generale->toBeInstanceOf(\Andali\Anaf\Domain\Info\DateGenerale::class)
        ->date_generale->cui->toEqual(38744563)
        ->date_generale->data->format('Y-m-d')->toBe(Carbon::now()->format('Y-m-d'))
        ->date_generale->denumire->toEqual('ANDALI SOLUTIONS PRO S.R.L.')
        ->date_generale->adresa->toEqual('JUD. ARGEŞ, SAT LEREŞTI COM. LEREŞTI, STR. ŞOTCAN, NR.940, ET.PARTER')
        ->date_generale->nrRegCom->toEqual('J03/176/2018')
        ->date_generale->telefon->toBeEmpty()
        ->date_generale->fax->toBeEmpty()
        ->date_generale->codPostal->toEqual('117430')
        ->date_generale->act->toBeEmpty()
        ->date_generale->stare_inregistrare->toEqual('INREGISTRAT din data 25.01.2018')
        ->date_generale->data_inregistrare->format('Y-m-d')->toBe(Carbon::parse('25.01.2018')->format('Y-m-d'))
        ->date_generale->cod_CAEN->toEqual('6201')
        ->date_generale->iban->toBeEmpty()
        ->date_generale->statusRO_e_Factura->toBeFalse()
        ->date_generale->organFiscalCompetent->toEqual('Serviciul Fiscal Municipal Câmpulung')

        ->inregistrare_scop_Tva->toBeInstanceOf(\Andali\Anaf\Domain\Info\InregistrareScopTva::class)
        ->inregistrare_scop_Tva->scpTVA->toBeFalse()
        ->inregistrare_scop_Tva->data_inceput_ScpTVA->toBeEmpty()
        ->inregistrare_scop_Tva->data_sfarsit_ScpTVA->toBeEmpty()
        ->inregistrare_scop_Tva->data_anul_imp_ScpTVA->toBeEmpty()
        ->inregistrare_scop_Tva->mesaj_ScpTVA->toBe('nu figureaza in registre ')

        ->adresa_sediu_social->toBeInstanceOf(\Andali\Anaf\Domain\Info\AdresaSediuSocial::class)
        ->adresa_sediu_social->sdenumire_Strada->toEqual('Str. Şotcan')
        ->adresa_sediu_social->snumar_Strada->toEqual('940')
        ->adresa_sediu_social->sdenumire_Localitate->toEqual('Sat Lereşti Com. Lereşti')
        ->adresa_sediu_social->scod_Localitate->toEqual('338')
        ->adresa_sediu_social->sdenumire_Judet->toEqual('ARGEŞ')
        ->adresa_sediu_social->scod_Judet->toEqual('3')
        ->adresa_sediu_social->scod_JudetAuto->toEqual('AG')
        ->adresa_sediu_social->stara->toBeEmpty()
        ->adresa_sediu_social->sdetalii_Adresa->toBeEmpty()
        ->adresa_sediu_social->scod_Postal->toEqual('117430')
        ->adresa_domiciliu_fiscal->toBeInstanceOf(\Andali\Anaf\Domain\Info\AdresaDomiciliuFiscal::class)
        ->adresa_domiciliu_fiscal->ddenumire_Strada->toEqual('Str. Şotcan')
        ->adresa_domiciliu_fiscal->dnumar_Strada->toEqual('940')
        ->adresa_domiciliu_fiscal->ddenumire_Localitate->toEqual('Sat Lereşti Com. Lereşti')
        ->adresa_domiciliu_fiscal->dcod_Localitate->toEqual('338')
        ->adresa_domiciliu_fiscal->ddenumire_Judet->toEqual('ARGEŞ')
        ->adresa_domiciliu_fiscal->dcod_Judet->toEqual('3')
        ->adresa_domiciliu_fiscal->dcod_JudetAuto->toEqual('AG')
        ->adresa_domiciliu_fiscal->dtara->toBeEmpty()
        ->adresa_domiciliu_fiscal->ddetalii_Adresa->toBeEmpty()
        ->adresa_domiciliu_fiscal->dcod_Postal->toEqual('117430');
})->with([
    '38744563',
]);

it('it will get info for vat numbers with payable vat', function ($vatNumber) {
    $result = Anaf::for($vatNumber)->info();
    expect($result)
        ->toBeInstanceOf(\Andali\Anaf\Domain\Info\AnafData::class)
        ->date_generale->toBeInstanceOf(\Andali\Anaf\Domain\Info\DateGenerale::class)
        ->date_generale->cui->toEqual(34735333)
        ->date_generale->data->format('Y-m-d')->toBe(Carbon::now()->format('Y-m-d'))
        ->date_generale->denumire->toEqual('PUFFY SOLUTIONS S.R.L.')
        ->date_generale->adresa->toEqual('JUD. ARGEŞ, SAT CETĂŢENI COM. CETĂŢENI, STR. DEALULUI, NR.46')
        ->date_generale->nrRegCom->toEqual('J03/939/2015')
        ->date_generale->telefon->toBeEmpty()
        ->date_generale->fax->toBeEmpty()
        ->date_generale->codPostal->toEqual('117240')
        ->date_generale->act->toBeEmpty()
        ->date_generale->stare_inregistrare->toEqual('INREGISTRAT din data 03.07.2015')
        ->date_generale->data_inregistrare->format('Y-m-d')->toBe(Carbon::parse('03.07.2015')->format('Y-m-d'))
        ->date_generale->cod_CAEN->toEqual('6201')
        ->date_generale->iban->toBeEmpty()
        ->date_generale->statusRO_e_Factura->toBeFalse()
        ->date_generale->organFiscalCompetent->toEqual('Serviciul Fiscal Municipal Câmpulung')

        ->inregistrare_scop_Tva->toBeInstanceOf(\Andali\Anaf\Domain\Info\InregistrareScopTva::class)
        ->inregistrare_scop_Tva->scpTVA->toBeTrue()
        ->inregistrare_scop_Tva->data_inceput_ScpTVA->format('Y-m-d')->toBe(Carbon::parse('01.09.2021')->format('Y-m-d'))
        ->inregistrare_scop_Tva->data_sfarsit_ScpTVA->toBeEmpty()
        ->inregistrare_scop_Tva->data_anul_imp_ScpTVA->toBeEmpty()
        ->inregistrare_scop_Tva->mesaj_ScpTVA->toBe('platitor IN SCOPURI de TVA la data ceruta')

        ->adresa_sediu_social->toBeInstanceOf(\Andali\Anaf\Domain\Info\AdresaSediuSocial::class)
        ->adresa_sediu_social->sdenumire_Strada->toEqual('Str. Dealului')
        ->adresa_sediu_social->snumar_Strada->toEqual('46')
        ->adresa_sediu_social->sdenumire_Localitate->toEqual('Sat Cetăţeni Com. Cetăţeni')
        ->adresa_sediu_social->scod_Localitate->toEqual('136')
        ->adresa_sediu_social->sdenumire_Judet->toEqual('ARGEŞ')
        ->adresa_sediu_social->scod_Judet->toEqual('3')
        ->adresa_sediu_social->scod_JudetAuto->toEqual('AG')
        ->adresa_sediu_social->stara->toBeEmpty()
        ->adresa_sediu_social->sdetalii_Adresa->toBeEmpty()
        ->adresa_sediu_social->scod_Postal->toEqual('117240')
        ->adresa_domiciliu_fiscal->toBeInstanceOf(\Andali\Anaf\Domain\Info\AdresaDomiciliuFiscal::class)
        ->adresa_domiciliu_fiscal->ddenumire_Strada->toEqual('Str. Dealului')
        ->adresa_domiciliu_fiscal->dnumar_Strada->toEqual('46')
        ->adresa_domiciliu_fiscal->ddenumire_Localitate->toEqual('Sat Cetăţeni Com. Cetăţeni')
        ->adresa_domiciliu_fiscal->dcod_Localitate->toEqual('136')
        ->adresa_domiciliu_fiscal->ddenumire_Judet->toEqual('ARGEŞ')
        ->adresa_domiciliu_fiscal->dcod_Judet->toEqual('3')
        ->adresa_domiciliu_fiscal->dcod_JudetAuto->toEqual('AG')
        ->adresa_domiciliu_fiscal->dtara->toBeEmpty()
        ->adresa_domiciliu_fiscal->ddetalii_Adresa->toBeEmpty()
        ->adresa_domiciliu_fiscal->dcod_Postal->toEqual('117240');
})->with([
    'RO34735333',
]);

it('it will thrown an error if cui not found', function () {
    $result = Anaf::for('123456')->info();
})->throws(\Andali\Anaf\Domain\Info\Exceptions\VatNumberNotFound::class);
