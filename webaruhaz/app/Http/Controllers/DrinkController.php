<?php

namespace App\Http\Controllers;

use App\Models\Drink;
use Illuminate\Http\Request;

class DrinkController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        return view('shop', ['drinks' => \App\Models\Drink::all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('upload');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'price' => 'required',
            'type' => 'required',
            'description' => 'required',
            'onStock' => 'required',
            'placeOfOrigin' => 'required',
            'picture' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        $picture= new Drink ($request->input()) ;
        if($file = $request->hasFile('picture')) {

            $file = $request->file('picture') ;

            $fileName = $file->getClientOriginalName() ;
            $destinationPath = public_path().'/image/drink' ;
            $file->move($destinationPath,$fileName);
            $picture->picture = $fileName ;
        }
        $picture->save() ;
        return redirect()->route('upload-files.index')
            ->with('success','You have successfully uploaded your files');


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $drink = Drink::findOrFail($id);

        return view('edit', compact('drink'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }


    /*public function getProduct($id)
    {
        $query = "SELECT FROM id, products.name, type, price, description, onStock, placeOfOrigin, picture FROM drinks WHERE id = :id";
        $params = [
            'id' => $id
        ];

        $record = getRecord($query, $params);

        if(empty($record)){
            return false;
        }
        else{
            return $record;
        }

    }*/

    /*public function search(Request $request){
        $PER_PAGE = 15;
        $drinks = Drink::search($request->all());
        $current_page = $request->get("toPage") ?? 0;
        $found = $drinks->count();
        $drinks / $drinks->skip($current_page * $PER_PAGE)->take($PER_PAGE);
        $pages = ceil($found / $PER_PAGE);
        if($current_page < 0){
            $current_page = 0;
        }elseif ($current_page > $pages){
            $current_page = $pages;
        }

    }*/



}
