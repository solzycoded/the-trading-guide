<?php
	namespace Models;
	 
	use \Illuminate\Database\Eloquent\Model;
	use Illuminate\Database\Eloquent\SoftDeletes;
	 
	class Comment extends Model {
		use SoftDeletes;
	     
	    protected $table = 'comments';

	    protected $fillable = ['user_id', 'post_id', 'comment'];

	    // PARENT TO (replies [one to many])
	    public function replies()
		{
		    return $this->hasMany('\Models\Reply');
		}

	    // CHILD OF (user [many to one], post [many to one])
	    public function user()
		{
		    return $this->belongsTo('\Models\User');
		}

		public function post()
		{
		    return $this->belongsTo('\Models\Post');
		}
	}
?>