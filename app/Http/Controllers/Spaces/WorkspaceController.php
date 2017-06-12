<?php

namespace App\Http\Controllers\Spaces;

use Laravel\Lumen\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\SpaceCategory;
use App\Space;

class WorkspaceController extends BaseController
{
    /**
     * get the space details by id
     * @param $id
     * @return Response
     */
    public function show($id)
    {
        $data = Space::find($id);
        $responseData =  (!empty($data)) ? $data : [];
        return response()->json($responseData);
    }

    /**
     * Update the specified workspace.
     *
     * @param  Request  $request
     * @param  string  $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        $workspaceObj = Space::find($id); /** @var Space $workspaceObj */
        $workspaceObj->name = $request->input('name');

        $workspaceObj->save();

        return response()->json(['status'=> 200]);
    }

    /**
     * Store a new workspace.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Request $request)
    {
        $spaceObj = new Space;
        $spaceObj->name                   = $request->input('name');
        $spaceObj->qty                    = $request->input('qty');
        $spaceObj->address_id             = $request->input('address_id');
        $spaceObj->category_id            = $request->input('space_category_id', 0);
        $spaceObj->address_from_id        = $request->input('address_from_id',  null);
        $spaceObj->address_to_id          = $request->input('address_to_id', null);
        $spaceObj->address_mode_id        = $request->input('space_address_mode_id', null);
        $spaceObj->availability_mode_id   = $request->input('space_availability_mode_id', null);

        $spaceObj->save();

        return response()->json(['status'=> 200]);
    }

    public function getList()
    {
        $categoryId = SpaceCategory::getCategoryIdByName('workspace');
        $spaces = SpaceCategory::find($categoryId)->spaces()->get();

        foreach($spaces as &$space)
        {
            $space->address = Space::find($space->address_id)->address()->first();
        }

        return $spaces;
    }
}