<?php namespace Gibs\Http\Controllers;

use Gibs\Http\Requests;
use Gibs\Http\Controllers\Controller;
use Gibs\Http\Requests\AreaCreateRequest;
use Gibs\Area;

use Illuminate\Http\Request;


class AreaController extends Controller {
	/**
	 * Area-Model
	 * @var Gibs\Area
	 */
	protected $areas;

	/**
	 * Constructer
	 * @param Gibs\Area $area
	 */
	public function __construct(Area $areas) 
	{
		$this->areas = $areas;
	}

	/**
	 * Auflistung der Gebietsareale
	 *
	 * @return Response
	 */
	public function index()
	{
		$areas = $this->areas->orderBy('name')->get();

		return view('areas.index', compact('areas'));
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
