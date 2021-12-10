<?php

use App\SiteContact;
use Illuminate\Database\Seeder;

class SiteContactSeeder extends Seeder {
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run() {
    $contact = new SiteContact();
    $contact->name = 'SG System';
    $contact->phone = '(12) 99874-5558';
    $contact->email = 'contact@sg.com';
    $contact->reason = 1;
    $contact->message = 'You are Welcome!';
    $contact->save();
  }
}
