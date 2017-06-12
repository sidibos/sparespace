<?php
namespace App\SpaceInterface\Address;

Interface AddressInterface
{
    public function getAddress($id);

    public function createAddress(array $data);

    public function deleteAddress($id);

    public function updateAddress(array $data, $id);

}