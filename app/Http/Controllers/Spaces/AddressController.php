<?php

namespace App\Http\Controllers\Spaces;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Laravel\Lumen\Routing\Controller as BaseController;
use App\SpaceInterface\Address\AddressContract;

class AddressController extends BaseController
{
    /**
     * @var AddressContract
     */
    public $addressContract;

    public function __construct(AddressContract $addressContract)
    {
        $this->addressContract = $addressContract;
    }

    public function show($id)
    {
        $result = $this->addressContract->getAddress($id);
        $responseData =  (!empty($result)) ? $result : [];
        return response()->json($responseData);
    }
}