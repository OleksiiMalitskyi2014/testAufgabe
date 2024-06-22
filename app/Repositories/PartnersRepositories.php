<?php

namespace App\Repositories;


use App\Models\Partner;
use App\Repositories\Interfaces\PartnersRepositoriesInterface;
use Illuminate\Support\Facades\Log;
use Throwable;

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
        $this->partner = Partner::find($id);

        return $this->partner;
    }

    /**
     * @return array
     */
    public function getPartners(): array
    {
        $this->partners = Partner::all();

        return $this->partners->toArray();
    }

    /**
     * @param object $data
     * @return array
     */
    public function create(object $data): object
    {
        try {
            $this->partner = new Partner();
            $this->partner->name = $data->name;
            $this->partner->longitude = $data->longitude;
            $this->partner->latitude = $data->latitude;
            $this->partner->debitor_nr = $data->debitor_nr;
            $this->partner->street = $data->street;
            $this->partner->haus_nr = $data->haus_nr;
            $this->partner->plz = $data->plz;
            $this->partner->country = $data->country;
            $this->partner->website = $data->website;
            $this->partner->phone = $data->phone;
            $this->partner->email = $data->email;
            $this->partner->logo = $data->logo;
            $this->partner->pin_logo = $data->pin_logo;
            $this->partner->slug = $data->slug;
            $this->partner->save();
            $lastAdded = Partner::all()->last()->id;
            if (is_array($data->services) ) {
                foreach ($data->services as $service) {
                    $this->partner->service()->attach($lastAdded, ['service_id' => $service, 'partner_id' => $lastAdded ]);
                }
            }
            return response()->json([
                'message' => 'success',
            ]);
        } catch (Throwable $ex) {
            Log::error($ex);
            return response()->json(['errors' => [$ex->getMessage()]], 422);
        }
    }

    /**
     * @param object $data
     * @return array
     */
    public function update(object $data): object
    {
        try {
            $this->partner = $this->getPartner($data->id);
            $this->partner->name = $data->name;
            $this->partner->longitude = $data->longitude;
            $this->partner->latitude = $data->latitude;
            $this->partner->debitor_nr = $data->debitor_nr;
            $this->partner->street = $data->street;
            $this->partner->haus_nr = $data->haus_nr;
            $this->partner->plz = $data->plz;
            $this->partner->country = $data->country;
            $this->partner->website = $data->website;
            $this->partner->phone = $data->phone;
            $this->partner->email = $data->email;
            $this->partner->logo = $data->logo;
            $this->partner->pin_logo = $data->pin_logo;
            $this->partner->slug = $data->slug;
            $this->partner->save();
            if (!empty($data->services)) {
                $servicesId = [];
                foreach ($data->services as $service) {
                    $servicesId[] = $service;
                }
                $this->partner->service()->syncWithPivotValues($servicesId, ['partner_id' => $this->partner->id]);
            } else {
                $this->partner->service()->detach();
            }
            return response()->json([
                'message' => 'success',
            ]);
        } catch (Throwable $ex) {
            Log::error($ex);
            return response()->json(['errors' => [$ex->getMessage()]], 422);
        }
    }

    /**
     * @param int $id
     * @return array
     */
    public function delete(int $id): object
    {
        try {
            $this->partner = $this->getPartner($id);
            $this->partner->service()->detach();
            $this->partner->delete();
            return response()->json([
                'message' => 'success',
            ]);
        } catch (Throwable $ex) {
            Log::error($ex);
            return response()->json(['errors' => [$ex->getMessage()]], 422);
        }
    }
}