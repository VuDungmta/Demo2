<?php
namespace App;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

 class Item extends Model
{
   public $fillable = ['title','description'];
}
