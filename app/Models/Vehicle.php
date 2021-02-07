<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Vehicle extends Model
{
    //
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'plate', 'mark', 'type', 'user_id'
    ];

    /**
     * Método para buscar po placa, nombre y cédula de la persona.
     * Se uso join para mostrar unicamente los registros relacionados de usuarios vs vehiculos
     *
     * @param $query
     * @param $search
     * @param $type
     * @return mixed
     */
    public function scopeSearchBy($query, $search, $type)
    {

        if ( $type === "plate" ) {
            $query
                ->join('users as us', 'us.id', '=', 'vehicles.user_id')
                ->where('vehicles.plate', 'like', "%" . $search . "%")
                ->select('vehicles.id as id_vehicle', 'vehicles.plate', 'vehicles.mark', 'vehicles.type',
                    'us.id as id_user', 'us.names', 'us.identification'
                );
        }

        if ( $type === "names" ) {
            $query
                ->join('users as us', 'us.id', '=', 'vehicles.user_id')
                ->where('us.names', 'like', "%" . $search . "%")
                ->select('vehicles.id as id_vehicle', 'vehicles.plate', 'vehicles.mark', 'vehicles.type',
                    'us.id as id_user', 'us.names', 'us.identification'
                );
        }

        if ( $type === "identification" ) {
            $query
                ->join('users as us', 'us.id', '=', 'vehicles.user_id')
                ->where('us.identification', 'like', "%" . $search . "%")
                ->select('vehicles.id as id_vehicle', 'vehicles.plate', 'vehicles.mark', 'vehicles.type',
                    'us.id as id_user', 'us.names', 'us.identification'
                );
        }

        return $query;
    }

    /**
     * Método para
     *
     * @param $query
     * @return mixed
     */
    public function scopeGetAllData($query)
    {
        $query
            ->join('users as us', 'us.id', '=', 'vehicles.user_id')
            ->select('vehicles.id as id_vehicle', 'vehicles.plate', 'vehicles.mark', 'vehicles.type',
                'vehicles.created_at as vehicles_created_at',
                'us.id as id_user', 'us.names', 'us.identification'
            );
        return $query;
    }

    public function scopeGetByMarkCount($query)
    {
        $query
            ->select(
                DB::raw("CONCAT(UCASE(LEFT(mark, 1)), SUBSTRING(mark, 2)) as mark, COUNT(*) as total")
            )
            ->groupBy('mark');
        return $query;
    }
}
