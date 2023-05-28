<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Concerns\HasUlids;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Pagination\LengthAwarePaginator;

/**
 * @method static LengthAwarePaginator paginate(int $perPage = 15)
 */
class Pizza extends Model
{
    use HasFactory;
    use HasUlids;
}
