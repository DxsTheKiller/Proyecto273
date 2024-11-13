<?php

namespace App\Http\Controllers;

use App\Models\Notificacione;
use Illuminate\Http\Request;

class NotificacionController extends Controller
{
    
    public function marcarComoLeida($id)
{
    $notificacion = Notificacione::find($id);

    if ($notificacion) {
        $notificacion->leida = true;
        $notificacion->save();
    }

    return response()->json(['success' => true]); // Devuelve un JSON para confirmar el éxito
}
    
}
