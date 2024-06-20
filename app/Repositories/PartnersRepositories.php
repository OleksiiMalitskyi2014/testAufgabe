<?php

namespace App\Repositories;


use App\Repositories\Interfaces\PartnersRepositoriesInterface;

class PartnersRepositories implements PartnersRepositoriesInterface
{
    private $partner;
    private $partners;

    /**
     * @param int $id
     * @return object
     */
    public function getPartner(int $id): object
    {


        return $this->partner;
    }

    /**
     * @return array
     */
    public function getPartners(): array
    {
        return $this->partners;
    }
}