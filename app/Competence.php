<?php 

namespace App;
use Illuminate\Database\Eloquent\Model;
class Competence extends Model {
    protected $fillable = ['id',  'nom', 'description', 'src'];
    
    public function users(){
    return $this->belongToMany('App\User')->withPivot('niveau');
    }
}

?>
