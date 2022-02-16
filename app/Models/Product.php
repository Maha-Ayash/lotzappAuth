<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;


/**
 * Class Product
 * 
 * @property int $ID
 * @property int $globalID
 * @property int $artikel
 * @property string $name
 * @property int $gruppe
 * @property int $konto
 * @property int $konto_aufwand
 * @property int $auftrag
 * @property int $einheit
 * @property float $inhalt
 * @property int $grundeinheit
 * @property float $rezeptmenge
 * @property string $text1
 * @property string $text2
 * @property int $bestandsfuehrung
 * @property float $lagerstand
 * @property int $az
 * @property float $stundensatz
 * @property int $aufschlag
 * @property Carbon $updatetime
 * @property Carbon $createtime
 * @property bool $del
 * @property int $intern
 * @property string $extnr
 *
 * @package App\Models
 */
class Product extends Model
{
	protected $table = 'artikel0';
	protected $primaryKey = 'ID';
	public $timestamps = false;

	protected $casts = [
		'globalID' => 'int',
		'artikel' => 'int',
		'gruppe' => 'int',
		'konto' => 'int',
		'konto_aufwand' => 'int',
		'auftrag' => 'int',
		'einheit' => 'int',
		'inhalt' => 'float',
		'grundeinheit' => 'int',
		'rezeptmenge' => 'float',
		'bestandsfuehrung' => 'int',
		'lagerstand' => 'float',
		'az' => 'int',
		'stundensatz' => 'float',
		'aufschlag' => 'int',
		'del' => 'bool',
		'intern' => 'int'
	];

	protected $dates = [
		'updatetime',
		'createtime'
	];

	protected $fillable = [
		'globalID',
		'artikel',
		'name',
		'gruppe',
		'konto',
		'konto_aufwand',
		'auftrag',
		'einheit',
		'inhalt',
		'grundeinheit',
		'rezeptmenge',
		'text1',
		'text2',
		'bestandsfuehrung',
		'lagerstand',
		'az',
		'stundensatz',
		'aufschlag',
		'updatetime',
		'createtime',
		'del',
		'intern',
		'extnr'
	];
}
