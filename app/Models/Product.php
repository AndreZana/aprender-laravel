<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use SoftDeletes;
    protected $table = 'products';

    protected $fillable = [
        "category_id",
        "name",
        "description",
        "exclusive"
    ];

    protected $dates = [
        "deleted_at"
        ];

        public function category()
        {
            return $this->belongsTo(Category::class);
        }

}
