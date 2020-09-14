<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;
class Ticket extends Model
{
    protected $table="ticket";
    protected $hidden = ['created_at','updated_at'];
    protected $appends = ['department_name','name','subdepartment_name','priority_name','status_name','created_name','assigned_name'];
    // name use as poc_id name
    public function getDepartmentNameAttribute()
    {
        $dep_name=DB::table('departments')->where('id',$this->attributes['department_id'])->first();
        if($dep_name){
            return $dep_name->department_name;
        }
        return $dep_name;
    }
    public function getNameAttribute()
    {
        $poc_name=DB::table('users')->where('id',$this->attributes['poc_id'])->first();
        if($poc_name){
            return $poc_name->name;
        }
        return $poc_name;
    }
    public function getSubdepartmentNameAttribute()
    {
        $dept_name=DB::table('subdepartment')->where('id',$this->attributes['subdepartment_id'])->first();
        if($dept_name){
            return $dept_name->subdepartment_name;
        }
        return $dept_name;
    }
    public function getPriorityNameAttribute()
    {
        $priority_name=DB::table('priority_levels')->where('id',$this->attributes['priority'])->first();
        if($priority_name){
            return $priority_name->priority_name;
        }
        return $priority_name;
    }
    public function getStatusNameAttribute()
    {
        $ticket_status=DB::table('status')->where('id', $this->attributes['status_id'])->first();
        if($ticket_status){
            return $ticket_status->status_name;
        }
        return $ticket_status;
    }
    public function getCreatedNameAttribute()
    {
        $created=DB::table('users')->where('id', $this->attributes['created_by'])->first();
        if($created){
            return $created->name;
        }
        return $created;
    }
    public function getAssignedNameAttribute()
    {
        $assigned_by=DB::table('users')->where('id', $this->attributes['assigned_by'])->first();
        if($assigned_by){
            return $assigned_by->name;
        }
        return $assigned_by;
    }
}
