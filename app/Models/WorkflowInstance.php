<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class WorkflowInstance extends Model
{
    use HasFactory, SoftDeletes;

    protected $guarded = [ 'id' , 'created_at' , 'updated_at'];
    
    public function workflow()
    {
        return $this->belongsTo(Workflow::class);
    }

    public function workflowManager()
    {
        return $this->belongsTo(WorkflowManager::class, 'current_workflow_manager_id');
    }

    public function status()
    {
        return $this->belongsTo(Status::class);
    }
}
