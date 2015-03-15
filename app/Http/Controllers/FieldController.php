<?php namespace Gibs\Http\Controllers;

use Gibs\Http\Requests;
use Gibs\Http\Controllers\Controller;

use Gibs\Http\Requests\FieldCreateRequest;

use Gibs\Area;
use Gibs\Field;
use Gibs\Owner;


use Illuminate\Http\Request;

class FieldController extends Controller {

	/**
	 * Area Repo
	 * @var Gibs\Area
	 */
	protected $areaRepo;

	/**
	 * Field Repo
	 * @var Gibs\Field
	 */
	protected $fieldRepo;

	/**
	 * Owner Repo
	 * @var Gibs\Owner
	 */
	protected $ownerRepo;

	/**
	 * Constructor
	 * @param Gibs\Area  $area 
	 * @param Gibs\Field $field
	 */
	public function __construct(Area $areaRepo, Field $fieldRepo, Owner $ownerRepo) 
	{
		$this->areaRepo = $areaRepo;
		$this->fieldRepo = $fieldRepo;
		$this->ownerRepo = $ownerRepo;
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index($shortcut)
	{
		$area = $this->areaRepo->where('shortcut', $shortcut)->first();
		return view('fields.index', compact('area'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create($shortcut)
	{ 
		$area = $this->areaRepo->where('shortcut', $shortcut)->first();
		return view('fields.create', compact('area'));
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(FieldCreateRequest $request)
	{	
		$area = $this->areaRepo->find($request->area_id);
		$fieldRepo = $area->fields()->orderBy('number', 'desc')->get();
		$request['number'] = ($fieldRepo->count() > 0) ? ++$fieldRepo->first()->number : 1;

		$this->fieldRepo->create($request->all());

		return redirect()->route('area.fields', $area->shortcut);
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$field = $this->fieldRepo->find($id);

		// Check if field is issued
		$ownings = $field->ownings;
		$field_is_available = true; 
		foreach ($ownings as $owner) {
			if (empty($owner->return_at)) {
				$field_is_available = false;
			}
		}

		return view('fields.show', compact('field', 'field_is_available'));
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
