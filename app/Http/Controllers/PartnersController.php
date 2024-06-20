<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\DTO\Partners\PartnerDTO;
use App\Services\Interfaces\PartnersServiceInterface;


class PartnersController extends Controller
{
    private $partnersServiceInterface;

    /**
     * PDFController constructor.
     * @param PartnersServiceInterface $PDFServiceInterface
     */
    public function __construct(PartnersServiceInterface $partnersServiceInterface)
    {
        $this->partnersServiceInterface = $partnersServiceInterface;
    }

    /**
     * @param $id
     * @return object
     */
    public function getPartner($request): object
    {
        $partnerDTO = PartnerDTO::fromRequest($request->only(['id']));
        $data = $this->partnersServiceInterface->getPartner($partnerDTO);

        return response()->json([
            'message' => 'success',
            'data' => $data,
        ]);
    }

    /**
     * @return array
     */
    public function getPartners(): array
    {
        $data = $this->partnersServiceInterface->getPartners();

        return response()->json([
            'message' => 'success',
            'data' => $data,
        ]);
    }
}
