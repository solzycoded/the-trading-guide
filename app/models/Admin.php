<?php
	namespace Models;
	 
	use \Illuminate\Database\Eloquent\Model;
	 
	class Admin extends Model {
	    protected $table = 'admin';

	    protected $fillable = ['user_id', 'password'];

	    protected $guarded = ['password'];

	    // CHILD OF (user [one to one])
	    public function user()
		{
		    return $this->hasOne('\Models\User');
		} 
	}
?>