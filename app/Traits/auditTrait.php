<?php
namespace App\Traits;
use App\Models\Audit;


trait AuditTrait {
    public function logAudit($estadoLog,$action){
        $audit = new Audit;
        $audit = Audit::create([
            'id' => '1',
            'log' => $estadoLog,
            'action' => $action,
            'user_id' => mt_rand(1,7),
        ]);
        $audit -> save();
    }


    
};





?>