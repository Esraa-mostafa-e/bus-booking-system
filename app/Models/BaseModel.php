<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use DateTimeInterface;
use Illuminate\Support\Facades\DB;

class BaseModel extends Model
{
    use HasFactory;
    protected $dateFormat = 'Y-m-d H:i:s';

    protected $guarded = [];

    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('Y-m-d H:i:s');
    }

    protected function TableCols()
    {
        $table = $this->getTable();

        return DB::getSchemaBuilder()->getColumnListing($table);
    }
}
