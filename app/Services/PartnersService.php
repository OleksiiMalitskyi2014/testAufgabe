<?php

namespace App\Services;

//use App\Actions\PDF\CreatePDFAction;
use App\Services\Interfaces\PartnersServiceInterface;
use App\Repositories\Interfaces\PartnersRepositoriesInterface;
use Illuminate\Support\Facades\Session;

class PartnersService implements PartnersServiceInterface
{
    private $partner;
    private $partners;
    private $partnersRepositoriesInterface;

    public function __construct(PartnersRepositoriesInterface $partnersRepositoriesInterface)
    {
        $this->partnersRepositoriesInterface = $partnersRepositoriesInterface;
    }

    /**
     * @param int $id
     * @return object
     */
    public function getPartner(int $id): object
    {

        $this->partner = $this->partnersRepositoriesInterface->getPartner($id);

        return $this->partner;
    }

    /**
     * @return array
     */
    public function getPartners(): array
    {
        $this->partners = $this->partnersRepositoriesInterface->getPartners();

        return $this->partners;
    }
}
