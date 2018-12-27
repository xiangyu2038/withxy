<?php
namespace XY;
trait WithXy{
    public static function withla($relations)
    {
        return (new static)->newQuery()->with(
            $relations
        );
    }
    public function newEloquentBuilder($query)
    {
        return new Builder($query);
    }


}




