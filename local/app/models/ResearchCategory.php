<?php

class ResearchCategory extends \Eloquent {
  protected $fillable = [];
  protected $table = 'research_categories';
  public $timestamps = false;
  public function researchProjects()
  {
    return $this->hasMany('ResearchProject');
  }
}