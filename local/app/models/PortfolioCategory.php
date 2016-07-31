<?php

class PortfolioCategory extends \Eloquent {
  protected $fillable = [];
  protected $table = 'portfolio_categories';
  public $timestamps = false;
  public function portfolios()
  {
    return $this->hasMany('PortFolio');
  }
}