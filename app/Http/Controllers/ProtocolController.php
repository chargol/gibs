<?php namespace Gibs\Http\Controllers;

use Gibs\Http\Requests;
use Gibs\Http\Controllers\Controller;

use Gibs\Http\Requests\ProtocolCreateRequest;

use Gibs\Field;
use Gibs\Publisher;
use Gibs\Protocol;

use Carbon\Carbon;

use Illuminate\Http\Request;

class ProtocolController extends Controller {

	/**
	 * Protocol-Repository
	 * @var Gibs\Protocol;
	 */
	protected $protocolRepo;

	/**
	 * Field-Repository
	 * @var Gibs\Field;
	 */
	protected $fieldRepo;

	/**
	 * Publisher-Repository
	 * @var Gibs\Publisher;
	 */
	protected $publisherRepo;

	/**
	 * Constructor
	 * @param Field $fieldRepo
	 */
	public function __construct(Protocol $protocolRepo, Field $fieldRepo, Publisher $publisherRepo) 
	{
		$this->protocolRepo = $protocolRepo;
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
	 * Show the form for adding a new worked turn for given field.
	 *
	 * @return Response
	 */
	public function create($field_id)
	{	
		$field = $this->fieldRepo->find($field_id);
		$publishers = $this->publisherRepo->all();
		
		return view('protocols.create', compact('field', 'publishers'));
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(ProtocolCreateRequest $request)
	{
		$request['worked_at'] = Carbon::now();
		$this->protocolRepo->create($request->all());
		
		return redirect()->route('field.show', $request['field_id']);
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
