<?php

namespace App\Repositories\Interfaces;


interface PartnersRepositoriesInterface
{
    public function getPartner(int $id): object;
    public function getPartners(): array;
}