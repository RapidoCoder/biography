<?php

class ResearchProject extends \Eloquent {
  protected $fillable = [];
  protected $table = 'research_projects';
  public $timestamps = false;

  public function research(){
     return $this->belongsTo('ResearchCategory','research_category_id','id');
  }
}