<?php namespace Gibs\Http\Controllers;

use Gibs\Http\Requests;
use Gibs\Http\Controllers\Controller;

use Gibs\Http\Requests\FieldCreateRequest;

use Gibs\Area;
use Gibs\Field;

use Illuminate\Http\Request;

class FieldController extends Controller {

	/**
	 * Area Repo
	 * @var Gibs\Area
	 */
	protected $areas;

	/**
	 * Field Repo
	 * @var Gibs\Field
	 */
	protected $fields;

	/**
	 * Constructor
	 * @param Gibs\Area  $area 
	 * @param Gibs\Field $field
	 */
	public function __construct(Area $areas, Field $fields) 
	{
		$this->areas = $areas;
		$this->fields = $fields;
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index($area_id)
	{
		$area = $this->areas->find($area_id);

		return view('fields.index', compact('area'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create($area_id)
	{ 
		$area = $this->areas->find($area_id);
		return view('fields.create', compact('area'));
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(FieldCreateRequest $request)
	{	
		$area = $this->areas->find($request->area_id);
		$fields = $area->fields()->orderBy('number', 'desc')->get();
		$request['number'] = ($fields->count() > 0) ? ++$fields->first()->number : 1;

		$this->fields->create($request->all());

		return redirect('/area/'.$area->id.'/fields');
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
