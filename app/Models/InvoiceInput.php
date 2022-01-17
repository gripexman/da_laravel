<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InvoiceInput extends Model
{
    use HasFactory;

    public $table = 'invoice_input';
    protected $fillable = [
        'ngaynhap',
        'mahoadon',
        'tensanpham',
        'soluong',
        'dongia',
        'tongtien',
    ];
}
