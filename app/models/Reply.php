<?php
	namespace Models;
	 
	use \Illuminate\Database\Eloquent\Model;
	use Illuminate\Database\Eloquent\SoftDeletes;
	 
	class Reply extends Model {
		use SoftDeletes;
	     
	    protected $table = 'replies';

	    protected $fillable = ['comment_id', 'reply_id'];

	    // CHILD OF (comment [many to many])
	    public function comment()
		{
		    return $this->belongsTo('\Models\Comment');
		}
	}
?>