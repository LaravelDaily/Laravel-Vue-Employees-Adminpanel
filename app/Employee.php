<?php
namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Employee
 *
 * @package App
 * @property string $company
 * @property string $first_name
 * @property string $last_name
 * @property string $email
 * @property string $phone
*/
class Employee extends Model
{
    use SoftDeletes;

    protected $fillable = ['first_name', 'last_name', 'email', 'phone', 'company_id'];
    protected $hidden = [];
    
    

    /**
     * Set to null if empty
     * @param $input
     */
    public function setCompanyIdAttribute($input)
    {
        $this->attributes['company_id'] = $input ? $input : null;
    }
    
    public function company()
    {
        return $this->belongsTo(Company::class, 'company_id')->withTrashed();
    }
    
}
