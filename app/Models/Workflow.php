<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Workflow extends Model
{
    use HasFactory, SoftDeletes;

    protected $guarded = [ 'id' , 'created_at' , 'updated_at'];

    public function workflowManagers()
    {
        return $this->hasMany(WorkflowManager::class);
    }

    public function workflowInstances()
    {
        return $this->hasMany(WorkflowInstance::class);
    }
}
