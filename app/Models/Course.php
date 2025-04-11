<?php

namespace App\Models;

use Carbon\CarbonInterval;
use Dom\Attr;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Support\Carbon;

class Course extends Model
{
    use HasFactory;

    public function lessons(): HasMany
    {
        return $this->hasMany(Lessons::class);
    }

    public function firstLesson(): HasOne
    {
        return $this->lessons()->one()->ofMany('number', 'min');
    }

    protected function routeUrl(): Attribute
    {
        return Attribute::make(get: fn () => route('courses.show', $this));
    }

    protected function formattedLength(): Attribute
    {
        return Attribute::make(
            get: function () {
                $interval = CarbonInterval::seconds($this->lessons()->sum('length'))
                    ->cascade()
                    ->toArray();

                    $formattedHours = $interval['hours'] ? "{$interval['hours']}h" : '';
                    $formattedMinuts = $interval['minutes'] ? "{$interval['minutes']}m" : '';

                    return trim($formattedHours . ' ' . $formattedMinuts);
            }
        );

        
    }
}
