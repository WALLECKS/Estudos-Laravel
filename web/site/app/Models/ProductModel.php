<?php

namespace App\Models;

use CreateProductModelsTable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductModel extends Model

{
    use HasFactory;
    //protected $table =('product_models_table');
    protected $filble=('name, description');

}
