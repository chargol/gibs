<?php namespace Gibs\Http\Controllers;

use Gibs\Http\Requests;
use Gibs\Http\Controllers\Controller;

use Illuminate\Http\Request;

use Gibs\Field;
use Gibs\Publisher;

class OwnerController extends Controller {

	/**
	 * Field-Repositpry
	 * @var Gibs\Field;
	 */
	protected $fieldRepo;

	/**
	 * Publisher-Repositpry
	 * @var Gibs\Publisher;
	 */
	protected $publisherRepo;

	/**
	 * Constructor
	 * @param Field $fieldRepo
	 */
	public function __construct(Field $fieldRepo, Publisher $publisherRepo) 
	{
		$this->fieldRepo = $fieldRepo;
		$this->publisherRepo = $publisherRepo;
	}


	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create($field_id)
	{
		$field = $this->fieldRepo->find($field_id);
		$publishers = $this->publisherRepo->all();

		return view('owners.create', compact('field', 'publishers'));
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Request $request)
	{
		dd($request->all());
		return 'Neuen Owner speichern';
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
