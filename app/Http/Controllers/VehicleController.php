<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Vehicle;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class VehicleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('vehicles.index');
    }

    public function mark()
    {
        return view('vehicles.mark');
    }

    /**
     * Api para listar todos los vehiculos
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function apiIndex(Request $request)
    {
        $search = $request->get('search');
        $type   = $request->get('type');

        if( $search ){

            $type = empty($type) ? "names" : $type;

            $vehicles = Vehicle::SearchBy($search, $type)->get();
            $total    = $vehicles->count();
            $message  = ($total > 0 ) ? "Datos consultados correctamente" : "No se encontraron registros.";

            return response()->json(
                [
                    "status"  => true,
                    "data"    => $vehicles,
                    "search"  => $search,
                    "total"   => $total,
                    "message" => $message,
                ],
                201 // 201 Created
            );
        }

        $vehicles = Vehicle::GetAllData()->get();
        $total = $vehicles->count();

        return response()->json(
            [
                "status"  => true,
                "data"    => $vehicles,
                "search"  => $search,
                "total"   => $total,
                "message" => "Datos consultados correctamente.",
            ],
            201 // 201 Created
        );
    }

    /**
     * Api para listar que liste la cantidad de vehículos existentes por cada marca,
     * donde se modifiquen los nombres de dichas marcas para que siempre se muestren
     * únicamente con la primer letra en mayúscula y las demás en minúscula.
     *
     */
    public function apiListByMark()
    {
        $vehicles = Vehicle::GetByMarkCount()->get();

        return response()->json(
            [
                "status"  => true,
                "data"    => $vehicles,
                "message" => "Datos consultados correctamente.",
            ],
            201 // 201 Created
        );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function apiStore(Request $request)
    {

        $validatedData = Validator::make($request->all(), [
            'names'    => 'required|string|min:3',
            'identification' => 'required|string|unique:users,identification',
            'email'   => 'required|email|unique:users,email',
            'plate'   => 'required|string|min:3',
            'mark'    => 'required|string|min:3',
            'type'    => 'required|string|min:1',
        ]);

        if ($validatedData->fails()) {
            return response()->json([
                'result' => false,
                'message' => $validatedData->errors(),
            ], 401);
        }

        // 1. Guardo el usuario
        $userData = $request->only('names', 'identification', 'email');
        $user = User::create($userData);

        // 2. Valido si el usuario se creo
        if (! $user) {

            $response = [
                "result"  => false,
                "message" => "Hubo un error al registrar el nuevo usuario.",
                "info"    => $user
            ];

            return response()->json($response, 200);
        }

        // 3. Registro el vehiculo y asocio con el usuario
        $plate = request()->input('plate');
        $mark  = request()->input('mark');
        $type  = request()->input('type');

        try {
            $vehicle = new Vehicle();
            $vehicle->plate = $plate;
            $vehicle->mark  = $mark;
            $vehicle->type  = $type;
            $vehicle->user_id  = $user->id;
            $vehicleSaved = $vehicle->save();

            $response = [
                "result"  => $vehicleSaved,
                "message" => "Usuario y vehiculos creados correctamente."
            ];

            return response()->json($response, 200);

        } catch (\Exception $ex) {

            // Elimino el usuario creado
            $userDeleted = User::destroy($user->id);

            $response = [
                "result"  => false,
                "message" => "Error al registrar el nuevo usuario.",
                "info" => $ex,
            ];

            return response()->json($response, 400);
        }
    }
}
