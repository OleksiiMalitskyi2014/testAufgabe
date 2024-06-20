<?php

namespace App\Services\Interfaces;


interface PartnersServiceInterface
{
    public function getPartner(int $id): object;
    public function getPartners(): array;
}
