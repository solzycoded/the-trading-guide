<?php
	namespace Models;
	 
	use \Illuminate\Database\Eloquent\Model;
	 
	class Tag_Post extends Model {
	    protected $table = 'tag_posts';

	    protected $fillable = ['post_id', 'tag_id'];

	    // CHILD OF (tag, post)
	    public function tag()
		{
		    return $this->belongsTo('\Models\Tag');
		}

		public function post()
		{
		    return $this->belongsTo('\Models\Post');
		}
	}
?>