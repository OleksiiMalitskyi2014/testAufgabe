<?php

namespace App\Http\Controllers;

use App\DTO\Partners\CreatePartnerDTO;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\DTO\Partners\PartnerDTO;
use App\Services\Interfaces\PartnersServiceInterface;


class PartnersController extends Controller
{
    private $partnersServiceInterface;

    /**
     * PDFController constructor.
     * @param PartnersServiceInterface $partnersServiceInterface
     */
    public function __construct(PartnersServiceInterface $partnersServiceInterface)
    {
        $this->partnersServiceInterface = $partnersServiceInterface;
    }

    /**
     * @param $id
     * @return object
     */
    public function getPartner($id): object
    {
        $partnerDTO = PartnerDTO::fromRequest($id);
        $data = $this->partnersServiceInterface->getPartner($partnerDTO);

        return response()->json([
            'message' => 'success',
            'data' => $data,
        ]);
    }

    /**
     * @return array
     */
    public function getPartners(): object
    {
        $data = $this->partnersServiceInterface->getPartners();

        return response()->json([
            'message' => 'success',
            'data' => $data,
        ]);
    }

    /**
     * @param Request $request
     * @return array
     */
    public function create(Request $request): object
    {
        $partnerDto = CreatePartnerDTO::fromRequest($request->only([
            'name',
            'longitude',
            'latitude',
            'debitor_nr',
            'street',
            'haus_nr',
            'plz',
            'country',
            'website',
            'phone',
            'email',
            'logo',
            'pin_logo',
            'slug',
            'services',
        ]));

        return $this->partnersServiceInterface->create($partnerDto);
    }

    /**
     * @param Request $request
     * @return array
     */
    public function update(Request $request): object
    {
        $partnerDto = CreatePartnerDTO::fromRequest($request->only([
            'name',
            'longitude',
            'latitude',
            'debitor_nr',
            'street',
            'haus_nr',
            'plz',
            'country',
            'website',
            'phone',
            'email',
            'logo',
            'pin_logo',
            'slug',
            'services',
        ]));

        return $this->partnersServiceInterface->update($partnerDto);
    }

    /**
     * @return array
     */
    public function delete($id): object
    {
        $partnerDTO = PartnerDTO::fromRequest($id);

        return $this->partnersServiceInterface->delete($partnerDTO);
    }
}
