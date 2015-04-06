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
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create($area_id)
	{ 
		$area = Area::find($area_id);
		return view('fields.create', compact('area'));
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(FieldCreateRequest $request)
	{	
		$area = Area::find($request->area_id);
		
		// Generating Field-Number.
		$fields = $area->fields()->orderBy('number', 'desc')->get();
		$request['number'] = ($this->areFieldsAvailable($fields)) ? $this->getNextFieldNumber($fields) : 1;

		// Storing new Field.
		Field::create($request->all());

		return redirect()->route('area.fields', $area->id);
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
		$protocols = $field->protocols;
		$protocols = $protocols->sortBy('worked_at');

		// Check if field is issued
		$ownings = $field->ownings;
		$field_is_available = true; 
		foreach ($ownings as $owner) {
			if (empty($owner->return_at)) {
				$field_is_available = false;
			}
		}

		return view('fields.show', compact('field', 'field_is_available', 'protocols'));
	}


	private function getNextFieldNumber($fields) {
		return ++$fields->first()->number;
	}

	public function areFieldsAvailable($fields)
	{
		return ($fields->count() > 0); 
	}
	

}
