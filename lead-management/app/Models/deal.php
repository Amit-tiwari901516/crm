<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\account;
use App\Models\contact;

class deal extends Model
{
    use HasFactory;
    protected $table = "deals";
    protected $primarykey= "id";

    public function getAccountDetail(){
        return $this->hasOne(Account::class,'id','account_id');
    }

    public function getContactDetail(){
        return $this->hasOne(Contact::class,'id','contact_id');
    }
}
