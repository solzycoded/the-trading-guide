<?php
	namespace Models;
	 
	use Illuminate\Database\Eloquent\Model;
	use Illuminate\Database\Eloquent\SoftDeletes;
	 
	class User extends Model {
		use SoftDeletes;
	     
	    protected $table = 'users';

	    protected $fillable = ['email', 'name', 'website', 'userrole_id'];

	    // PARENT TO (comment [one to many], user [one to one])
	    public function comments()
		{
		    return $this->hasMany('\Models\Comment');
		}

	    public function admin()
		{
		    return $this->hasOne('\Models\Admin');
		} 

	    // CHILD OF (userrole [many to one])
	    public function user()
		{
		    return $this->belongsTo('\Models\User');
		}
	}
?>