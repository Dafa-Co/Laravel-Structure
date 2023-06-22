<?php

namespace App\Models;

use App\Traits\TModelTranslation;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 *
 */
abstract class Model extends \Illuminate\Database\Eloquent\Model
{
    use HasFactory;
    use TModelTranslation;

    /**
     * Create a new Eloquent model instance.
     *
     * @param array $attributes
     *
     * @return void
     */
    public function __construct(array $attributes = [])
    {
        // $this->dateFormat = getDefaultDateFormat();
        parent::__construct($attributes);
    }

}
