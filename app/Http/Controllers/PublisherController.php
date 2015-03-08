<?php namespace Gibs\Http\Controllers;

use Gibs\Http\Requests;
use Gibs\Http\Controllers\Controller;
use Gibs\Http\Requests\PublisherCreateRequest;
use Gibs\Publisher;

use Illuminate\Http\Request;


class PublisherController extends Controller {

	/**
	 * Publisher Repository
	 * @var [type]
	 */
	protected $publisherRepo;

	/**
	 * Initalization of the Controller
	 * @param Publisher $publisher
	 */
	public function __construct(Publisher $publisher) 
	{
		$this->publisherRepo = $publisher;	
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$publishers = $this->publisherRepo->orderBy('lastname')->orderBy('firstname')->get();
		return view('publisher.index', compact('publishers'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('publisher.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(PublisherCreateRequest $request)
	{
		$this->publisherRepo->create($request->all());
		return redirect()->route('publisher.index');
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
