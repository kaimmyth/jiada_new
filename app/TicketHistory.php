<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;
class TicketHistory extends Model
{
    protected $table="ticket_history";
    protected $hidden = ['created_at','updated_at'];
    protected $appends = ['status_id','assign_by','assign_to','ticket_no','created_date','subject'];
    public function getStatusIdAttribute()
    {
        $status=DB::table('ticket')->where('id',$this->attributes['ticket_id'])->first();
        $ticket_status=DB::table('status')->where('id', $status->status_id)->value('status_name');
        return $ticket_status;
    }
    public function getAssignByAttribute()
    {
        $assign_by=DB::table('users')->where('id',$this->attributes['assigned_by'])->first();
        if($assign_by){
            return $assign_by->name;
        }
        return $assign_by;
    }
    public function getAssignToAttribute()
    {
        $assign_to=DB::table('users')->where('id',$this->attributes['assigned_to'])->first();
        if($assign_to){
            return $assign_to->name;
        }
        return $assign_to;
    }
    public function getTicketNoAttribute()
    {
        $ticketNo=DB::table('ticket')->where('id',$this->attributes['ticket_id'])->first();
        if($ticketNo){
            return $ticketNo->ticket_id;
        }
        return $ticketNo;
    }
    public function getCreatedDateAttribute()
    {
        $created_date=DB::table('ticket')->where('id',$this->attributes['ticket_id'])->first();
        if($created_date){
            return $created_date->created_at;
        }
        return $created_date;
    }
    public function getSubjectAttribute()
    {
        $subject=DB::table('ticket')->where('id',$this->attributes['ticket_id'])->first();
        if($subject){
            return $subject->subject;
        }
        return $subject;
    }
}
