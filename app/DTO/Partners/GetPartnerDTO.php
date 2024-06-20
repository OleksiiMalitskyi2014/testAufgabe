<?php


namespace App\DTO\Vacancies;

use Spatie\DataTransferObject\DataTransferObject;

class GetPartnerDTO extends DataTransferObject
{
    public ?int $id;
    public string $name;
    public ?int $longitude;
    public ?int $latitude;

    public static function fromRequest($data): self
    {
        return new self([
            'id' => !empty($data['id']) ? (int)$data['id'] : null,
            'name' => (string)$data['name'],
            'longitude' => !empty($data['longitude']) ? (int)$data['longitude'] : null,
            'latitude' => !empty($data['latitude']) ? (int)$data['latitude']: null,
        ]);
    }
}
