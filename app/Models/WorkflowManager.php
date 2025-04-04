<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class WorkflowManager extends Model
{
    use HasFactory, SoftDeletes;

    protected $guarded = [ 'id' , 'created_at' , 'updated_at'];

    public function role()
    {
        return $this->belongsTo(Role::class);
    }

    public function step()
    {
        return $this->belongsTo(Step::class);
    }

    public function workflow()
    {
        return $this->belongsTo(Workflow::class);
    }

    public function workflowInstances()
    {
        return $this->hasMany(WorkflowInstance::class);
    }
}
