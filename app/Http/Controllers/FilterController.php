<?php namespace Gibs\Http\Controllers;

use Gibs\Http\Requests;
use Gibs\Http\Controllers\Controller;

use Gibs\Field;

use Carbon\Carbon;

use Illuminate\Http\Request;

class FilterController extends Controller {

	/**
	 * Field-Repository
	 * @var Gibs\Field
	 */
	protected $fieldRepo;

	/**
	 * Constructr
	 * @param Field $fieldRepo
	 */
	public function __construct(Field $fieldRepo) 
	{
		$this->fieldRepo = $fieldRepo;
	}

	/**
	 * Alle Gebiete, welche über 12 Monate nicht bearbeitet wurden
	 * filtern und anzeigen
	 * @return Response
	 */
	public function overdueAll()
	{	
		$fields = $this->fieldRepo->with('protocols')->get();

		$overdueFields = [];

		foreach ($fields as $field) {
			$protocols = $field->protocols->sortBy('worked_at');
			$lastWorked = $protocols->last();
			$today = Carbon::now();
			$lastWorkedInMonths = $today->diffInMonths($lastWorked->worked_at);
			
			if ($lastWorkedInMonths > 12) {
				$overdueFields[] = $field;
			}
		}

		return view('fields.filtered', compact('overdueFields'));
	}
	

}
