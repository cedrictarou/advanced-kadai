<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;

    protected $fillable = [
        'fullname',
        'gender',
        'email',
        'postcode',
        'address',
        'building_name',
        'opinion'
    ];

    public function scopeSearch($query, $search)
    {
        foreach ($search as $key => $value) {
            switch ($key) {
                case 'fullname':
                case 'gender':
                case 'email':
                    if ($value) {
                        $query->where($key, 'LIKE', "%{$value}%");
                    }
                    break;
                case 'start_date':
                    if ($value) {
                        $query->where('created_at', '>=', $value);
                    }
                    break;
                case 'end_date':
                    if ($value) {
                        $query->where('created_at', '<=', $value);
                    }
                    break;
            }
        }
        return $query;
    }
}
