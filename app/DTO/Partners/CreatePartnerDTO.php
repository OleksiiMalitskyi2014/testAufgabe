<?php


namespace App\DTO\Partners;

use Spatie\DataTransferObject\DataTransferObject;

class CreatePartnerDTO extends DataTransferObject
{
    public ?int $id;
    public string $name;
    public float $longitude;
    public float $latitude;
    public int $debitor_nr;
    public string $street;
    public int $haus_nr;
    public int $plz;
    public string $country;
    public string $website;
    public string $phone;
    public string $email;
    public string $logo;
    public int $pin_logo;
    public string $slug;
    public ?array $services;

    public static function fromRequest($data): self
    {
        return new self([
            'id' => !empty($data['id']) ? (int)$data['id'] : null,
            'name' => (string)$data['name'],
            'longitude' => (float)$data['longitude'],
            'latitude' => (float)$data['latitude'],
            'debitor_nr' => (int)$data['debitor_nr'],
            'street' => (string)$data['street'],
            'haus_nr' => (int)$data['haus_nr'],
            'plz' => (int)$data['plz'],
            'country' => (int)$data['country'],
            'website' => (int)$data['website'],
            'phone' => (string)$data['phone'],
            'email' => (string)$data['email'],
            'logo' => (string)$data['logo'],
            'pin_logo' => (int)$data['pin_logo'],
            'slug' => (string)$data['slug'],
            'services' => !empty($data['services']) ? (array)$data['services'] : null,
        ]);
    }
}
