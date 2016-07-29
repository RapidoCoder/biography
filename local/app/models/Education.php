<?php

class Education extends \Eloquent {
  protected $fillable = [];
  protected $table = 'educations';
  public $timestamps = false;
   public function achievments()
    {
        return $this->hasMany('EducationAchievment');
    }
}