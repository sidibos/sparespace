<?php

namespace App\SpaceInterface\Address;

use App\Models\Spaces\Address;

class AddressContract implements AddressInterface
{
    public function getAddress($id) {
        return Address::find($id);
    }

    public function createAddress(array $data) {
        Address::save($data);
    }

    public function deleteAddress($id) {
        $addressObj = Address::find($id);
        $addressObj->delete();
    }

    public function updateAddress(array $data, $id) {
        $addressObj = Address::find($id);

        $addressObj->save($data);
    }

    public function getAllAddresses()
    {
        return Address::all();
    }
}
