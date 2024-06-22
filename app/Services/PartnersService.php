<?php

namespace App\Services;

use App\DTO\Partners\SaveDataPartnerDTO;
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
        foreach ($this->partner as $key => &$value) {
            if(gettype($value) === 'string') {
                $value = html_entity_decode($value, ENT_HTML5, "UTF-8");;
            }
        }

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

    /**
     * @param object $data
     * @return array
     */
    public function create(object $data): object
    {
        foreach ($data as $key => &$value) {
            if(gettype($value) === 'string') {
                $value = htmlentities($value,ENT_HTML5, "UTF-8");
            }
        }

        return $this->partnersRepositoriesInterface->create(SaveDataPartnerDTO::fromRequest($data));
    }

    /**
     * @param object $data
     * @return array
     */
    public function update(object $data): object
    {
        foreach ($data as $key => &$value) {
            if(gettype($value) === 'string') {
                $value = htmlentities($value,ENT_HTML5, "UTF-8");
            }
        }

        return $this->partnersRepositoriesInterface->update(SaveDataPartnerDTO::fromRequest($data));
    }

    /**
     * @param int $id
     * @return array
     */
    public function delete(int $id): object
    {
        return $this->partnersRepositoriesInterface->delete($id);
    }
}
