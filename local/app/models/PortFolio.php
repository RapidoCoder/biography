<?php

class PortFolio extends \Eloquent {
  protected $fillable = [];
  protected $table = 'portfolios';
  public $timestamps = false;
  public function category(){
    return $this->belongsTo('PortfolioCategory','portfolio_category_id','id');

  }
}