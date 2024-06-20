<?php

namespace App\Http\Controllers;

use Illuminate\Http\Response;
use Illuminate\Http\Request;
use App\Services\Interfaces\PartnersServiceInterface;
use Illuminate\Support\Facades\Session;
class HomeController extends Controller
{
    private $PDFServiceInterface;
    private $pdf;

    /**
     * PDFController constructor.
     * @param PartnersServiceInterface $PDFServiceInterface
     */
    public function __construct(PartnersServiceInterface $PDFServiceInterface)
    {
        $this->PDFServiceInterface = $PDFServiceInterface;
    }

    /**
     * @param Request $request
     * @return object
     */
    public function index (Request $request): object
    {
        $this->pdf = $this->PDFServiceInterface->generator($request->only('pdfContent'));

        return $this->pdf;
    }

    public function setDataToSession(Request $request): void
    {
        $this->PDFServiceInterface->setDataToSession($request->only('pdfContent'),
            $request->cookie('pdf-data')
        );
    }

    public function getDataToSession(Request $request)
    {
        $data = $this->pdf = $this->PDFServiceInterface->getDataToSession($request->cookie('pdf-data'));

        return view('pdfTemplate', $data);
    }

    public function generateCookieKey(Request $request)
    {
        if (empty($request->cookie('pdf-data'))) {
            $sessionKey = 'pdf-data-' . rand(0, 1000);
            $response = new Response('Set Cookie');
            $response->withCookie(cookie('pdf-data', $sessionKey, 60));
            return $response;
        } else {
            return response()->json('already exists', 200);
        }
    }

}
