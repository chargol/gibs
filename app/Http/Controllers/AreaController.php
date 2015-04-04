<?php namespace Gibs\Http\Controllers;

use Gibs\Http\Requests;
use Gibs\Http\Controllers\Controller;
use Gibs\Http\Requests\AreaCreateRequest;
use Gibs\Area;

use Illuminate\Http\Request;


class AreaController extends Controller {

	/**
	 * Lists all areas.
	 *
	 * @return Response
	 */
	public function index()
	{
		$areas = Area::orderBy('name')->get();

		return view('areas.index', compact('areas'));
	}

	/**
	 * Lists all fields of a given area-resource.
	 *
	 * @return Response
	 */
	public function fields($id)
	{
		$area = Area::find($id);

		return "Gebiete von $area->name";
		// return view('areas.fields', compact('area'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('areas.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(AreaCreateRequest $request)
	{
		$this->areas->create($request->all());

		return redirect('/area');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}
