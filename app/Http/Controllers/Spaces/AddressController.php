<?php

namespace App\Http\Controllers\Spaces;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Laravel\Lumen\Routing\Controller as BaseController;
use App\SpaceInterface\Address\AddressInterface;

class AddressController extends BaseController
{
    /**
     * @var AddressInterface
     */
    public $addressInterface;

    public function __construct(AddressInterface $addressInterface)
    {
        $this->addressContract = $addressInterface;
    }

    public function show($id)
    {
        $result = $this->addressContract->getAddress($id);
        $responseData =  (!empty($result)) ? $result : [];
        return response()->json($responseData);
    }
}