<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Purchas extends Model
{
    use HasFactory;

    protected $table = 'purchases';
    protected $guarded = false;
    protected $visible = ['created_at', 'product_id', 'name_prod'];
    protected $casts = [ 'created_at' => 'datetime:d-m-Y' ];

    public function product(){
        return $this->belongsTo(Product::class);
    }
    public function scopeAvailable($query)
    {
        return $query->whereDate('created_at', '>=', Carbon::now()->subMonth());
    }
    public function getNameProdAttribute(){
        return $this->product->name_prod;
    }
}
