<?php

namespace App\Services\Interfaces;


interface PartnersServiceInterface
{
    public function getPartner(int $id): object;
    public function getPartners(): array;
    public function create(object $data): object;
    public function update(object $data): object;
    public function delete(int $data): object;
}
