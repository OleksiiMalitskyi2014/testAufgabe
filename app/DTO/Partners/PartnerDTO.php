<?php


namespace App\DTO\Partners;

use Spatie\DataTransferObject\DataTransferObject;

class PartnerDTO extends DataTransferObject
{
    public int $id;

    public static function fromRequest($data): self
    {
        return new self([
            'id' => (int)$data['id'],
        ]);
    }

}

