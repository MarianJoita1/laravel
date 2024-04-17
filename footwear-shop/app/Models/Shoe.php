<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class shoe extends Model
{
    use HasFactory;

    protected $fillable = ['brand', 'gender', 'logo', 'price'];

    public function scopeFilter($query, array $filters) {
        if( ($filters['search'] ?? false) || ($filters['lowest'] ?? false) || ($filters['lowest'] ?? false) || ($filters['gender'] ?? false)) {
            $query->where('brand', 'like', '%' . request('search') . '%')
            ->Where('gender', 'like', '%' . request('gender'). '%')
            ->whereBetween('price', [request('lowest'), request(['highest'])]);
        }
    }
}
