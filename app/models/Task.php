<?php
class Task extends \Eloquent {
  
  public static $rules = [
    'title' => 'required'
    ];
  
  //Tableau (liste blanche)
  protected $fillable = ['title'];
  
  protected $attributes = array(
    'done' => false
   );
  
}
  
