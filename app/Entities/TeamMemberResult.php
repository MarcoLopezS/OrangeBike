<?php namespace OrangeBike\Entities;

class TeamMemberResult extends BaseEntity{

    protected $fillable = ['team_member_id','puesto','competencia','fecha','user_id'];

    public function user()
    {
        return $this->belongsTo('OrangeBike\Entities\User', 'user_id');
    }

    public function member()
    {
        return $this->belongsTo('OrangeBike\Entities\TeamMember', 'team_member_id');
    }

} 