<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SiteContact extends Model {
  protected $fillable = ['name', 'phone', 'email', 'contact_reason_id', 'message'];
}
