<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;
    protected $fillable = [
        'project_number',
        'project_ref_number',
        'itemCode',
        'description',
        'price',
        'approval_status',
        'payment_status',
        'customer_delivery_status',
        'client_type',
        'client_id'
    ];
}
