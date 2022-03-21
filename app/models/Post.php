<?php
	namespace Models;
	 
	use \Illuminate\Database\Eloquent\Model;
	use Illuminate\Database\Eloquent\SoftDeletes;
	 
	class Post extends Model {
		use SoftDeletes;
	     
	    protected $table = 'posts';

	    protected $fillable = ['title', 'pic', 'content', 'category_id'];

	    // PARENT TO (tag_post [one to many], comment [one to many])
	    public function tag_posts()
		{
		    return $this->hasMany('\Models\Tag_Post');
		} 

	    public function comments()
		{
		    return $this->hasMany('\Models\Comment');
		}

	    // CHILD OF (category  [many to one])
	    public function category()
		{
		    return $this->belongsTo('\Models\Category');
		}
	}
?>