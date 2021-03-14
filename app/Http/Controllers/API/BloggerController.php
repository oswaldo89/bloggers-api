<?php

namespace App\Http\Controllers\API;


use App\Models\Blogger;
use Illuminate\Http\Request;
use App\Http\Controllers\API\BaseController as BaseController;
use Illuminate\Support\Facades\Validator;

class BloggerController extends BaseController
{
    public function index()
    {
        $bloggers = Blogger::all();
        return $this->sendResponse($bloggers, 'Bloggers retrived successfully.');
    }

    public function store(Request $request)
    {
        $input = $request->all();
        $validator = Validator::make($input, [
            'name' => 'required',
            'email' => 'required',
            'website' => 'required'
        ]);

        if ($validator->fails()) {
            return $this->sendError('Validation Error.', $validator->errors());
        }

        $blogger = Blogger::create([
            'name' => $request->get('name'),
            'email' => $request->get('email'),
            'website' => $request->get('website')
        ]);

        if($blogger){
            return $this->sendResponse($blogger, 'Blogger created successfully.');
        }else{
            return $this->sendError("An error has occurred.");
        }


    }

    public function show($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
