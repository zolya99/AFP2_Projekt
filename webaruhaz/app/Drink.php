<?php


namespace App;
use App\Http\Controllers\productController;
use Illuminate\Database\Eloquent\Model;

class Drink extends Model
{
    protected $table = 'products';

    public static function search($input){
        return Drink::query()->where('name', 'like', '%' . $input . '%');
    }
    public static function searchType($input)
    {
        $d_t = Drink_type::query()->where((Drink::where('type', 'like', '%' . $input . '%')->id), '==', 'type')->get();

        try {
            if ($d_t->count() > 0)
                $ans = Drink::query()->where('id', '==', $d_t->id)->get();
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


    /**
     * Display the specified resource.
     *
     * @param  \App\Drink  $drink
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Http\Response|\Illuminate\View\View
     */
    public function add(Drink $drink){

    }

}
