<?php namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use App\Presenters\DatePresenter;

class Image extends Model  {
	use DatePresenter;
	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'images';	
}