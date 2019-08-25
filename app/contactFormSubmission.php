<?php

namespace ContactForm;

use Illuminate\Database\Eloquent\Model;

class contactFormSubmission extends Model
{

  protected $guarded = [];

  protected $fillable = ['name', 'email', 'query', 'subject', 'message'];

}
