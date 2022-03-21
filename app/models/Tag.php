<?php
	namespace Models;
	 
	use \Illuminate\Database\Eloquent\Model;
	 
	class Tag extends Model {
	    protected $table = 'tags';

	    protected $fillable = ['tag'];

	    // PARENT TO (post [one to many])
	    public function posts()
		{
		    return $this->hasMany('\Models\Post');
		} 
	}
?>