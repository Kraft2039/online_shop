<?php


namespace App\Http\Filters;


use Illuminate\Database\Eloquent\Builder;

class ProductFilter extends AbstractFilter
{
    public const PRICE = 'price';
    public const L2_CATEGORY_ID = 'l2_category_id';
    public const L3_CATEGORY_ID = 'l3_category_id';


    protected function getCallbacks(): array
    {
        return [
            self::PRICE => [$this, 'price'],
            self::L2_CATEGORY_ID => [$this, 'l2CategoryId'],
            self::L3_CATEGORY_ID => [$this, 'l3CategoryId']
        ];
    }

    public function price(Builder $builder, $value)
    {
        $builder->orderBy('price', $value);
    }
    public function l2CategoryId(Builder $builder, $value)
    {
        $builder->where('l2_category_id', $value);
    }
    public function l3CategoryId(Builder $builder, $value)
    {
        $builder->where('l3_category_id', $value);
    }

}
