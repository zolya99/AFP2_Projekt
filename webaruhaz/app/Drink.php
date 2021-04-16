<?php


namespace App;
use App\Http\Controllers\productContoller;

class Drink extends Model
{
    public static function search($input){
        return Drink::query()->where('name', 'like', '%' . $input . '%');
    }
    public static function searchType($input)
    {
        $d_t = Drink_type::query()->where((Drink::where('type', 'like', '%' . $input . '%')->id), '==', 'type')->get();

        try {
            if ($d_t->count() > 0)
                $ans = Drink::query()->where('id', '==', $d_t->drink_id)->get();
            try {
                if ($ans->count() > 0)
                    return $ans;
            } catch (\Exception $e) {
                return [];
            }
        } catch (\Exception $e) {
            return [];
        }
        return [];
    }

}
