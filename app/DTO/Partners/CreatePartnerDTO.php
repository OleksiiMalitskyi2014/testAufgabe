<?php


namespace App\DTO\Vacancies;

use Spatie\DataTransferObject\DataTransferObject;

class CreatePartnerDTO extends DataTransferObject
{
    public ?int $id;
    public string $name;


    public static function fromRequest($data): self
    {
        return new self([
            'id' => !empty($data['id']) ? (int)$data['id'] : null,
            'name' => (string)$data['name'],
        ]);
    }
}
