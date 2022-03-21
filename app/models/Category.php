<?php
	namespace Models;
	 
	use \Illuminate\Database\Eloquent\Model;
	 
	class Category extends Model {
	    protected $table = 'categories';

	    protected $fillable = ['category'];

	    // PARENT TO (post [one to many])
	    public function posts()
		{
		    return $this->hasMany('\Models\Post');
		} 
	}
?>