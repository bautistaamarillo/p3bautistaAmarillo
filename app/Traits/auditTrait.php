<?php
namespace App\Traits;
use App\Models\Audit;
use Illuminate\Support\Facades\Auth;



trait AuditTrait {
    
    public function logAudit($estadoLog,$action){
        $audit = new Audit;
        $user = Auth::user();
        $audit = Audit::create([
            

            'id' => '1',
            'log' => $estadoLog,
            'action' => $action,
            'user_id' => $user->id,
        ]);
        $audit -> save();
    }


    
};





?>