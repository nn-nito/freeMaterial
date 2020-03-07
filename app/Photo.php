<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Photo extends Model
{
	protected $fillable = [
		'download_count',
	];



    /**
     * Userを取得
     *
     * @return BelongsTo
     */
    public function User()
    {
        return $this->belongsTo(User::class);
    }
}
