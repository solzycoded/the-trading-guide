$(function(){
	// FILE UPLOAD OBJECT/CLASS
	var _photo = new Photo();

	// receive file
	_photo.receive();

	// EDIT & CREATE POSTS OBJECT/CLASS
	var _posts = posts();

	_posts.toggle_category_icon();
	_posts.change_category();
	_posts.toggle_edittitle_icon();
	_posts.toggle_edittitle();
	_posts.toggle_closeedittitle();
});

var posts = function(){
	var _display = display(); // display (object/class)
	var _htag_text = htag_text(); // get & set the text inside html tags (object/class)

	return {
		// CATEGORY (edit, show edit icon, hide edit icon, change category display)
		change_category: function(){
			$(".changepostcategory_options a").click(function(){
				var selected_category = $.trim($(this).text()); // get selected category

				// get current category
				var current_category_sel = $(this).parent().prev();
				var current_category = _htag_text.get(current_category_sel, 'span');

				// make sure the enclosed command, only works, when current category is not equal to selected category
				if(current_category.toLowerCase()!=selected_category.toLowerCase()){
					// set the current category display to the selected category
					_htag_text.set(current_category_sel, selected_category, 'span'); 
				}
			});
		},
		toggle_category_icon: function(){ // show and hide edit category icon
			// show edit category icon
			_display.mouse_enter(".changepostcategory", '.changepostcategory_editicon', 1);

			// hide edit category icon
			_display.mouse_leave(".changepostcategory", '.changepostcategory_editicon', 0);
		},

		// TITLE (show & hide edit-title field, change title)
		toggle_edittitle_icon: function(){ // show and hide edit-title field
			
			//SHOW
			// show edit title icon, on mouse enter
			$(".eachpostcontenttitle_container").mouseenter(function(){
				// change opacity value (show only if close edit-title option's opacity is 0)
				var this_editicon = $(this).children('.edittitle_icon');

				if(this_editicon.next('.close_edittitle_icon').css('opacity')==0)
					this_editicon.css('opacity', 1);
			});

			// hide edit title icon
			$(".eachpostcontenttitle_container").mouseleave(function(){
				// change opacity value
				$(this).children('.edittitle_icon').css('opacity', 0);
			});
		},
		toggle_edittitle: function(){
			$(".edittitle_icon").click(function(){
				posts().show_edittitle(this); // what happens when the edit title icon is clicked
			});

			// show edit title icon, on double click
			$(".eachpostcontenttitle_container").dblclick(function(){
				var edittitle_icon = $(this).children(".edittitle_icon"); // get the edit title icon

				posts().show_edittitle(edittitle_icon); // what happens when the edit title icon is clicked
			});
		},
		show_edittitle: function(_this){
			// SHOW
			$(_this).next('.close_edittitle_icon').css('opacity', 1); // show close edit_title icon
			
			var edittitle_form = $(_this).next().next('.editpost_title');

			edittitle_form.css('opacity', 1)  // show "close edit_title" icon

			// get the current title
			var currentposttitle = _htag_text.get($(_this).prev('.eachpostcontenttitle_admin'), 'b');

			// append the current title to the "edit_post title" area tag
			edittitle_form.children('.post_title').text(currentposttitle).focus();

			// HIDE
			$(_this).css('opacity', 0); // hide edit title icon
		},
		toggle_closeedittitle: function(){ // hide edit-title field
			var _posts = posts();

			// close "edit title", show "edit title icon", hide "close edit title icon"
			$(".close_edittitle_icon").click(function(){
				_posts.close_edittitle(this);
			});

			// hide edit title icon
			$(".post_title").focusout(function(){
				_posts.post_title(this);
			});
		},
		close_edittitle: function(_this){
			$(_this).prev().css('opacity', 1); // show edit title icon
			$(_this).css('opacity', 0); // hide "close edit title" icon

			$(_this).next().css('opacity', 0); // hide "edit title"
		},
		set_edittitle: function(_this){
			var title_sel = $(_this).parent().prev().prev().prev(); // get the title_display tag
			var newtitle = $(_this).val(); // 

			_htag_text.set(title_sel, newtitle, 'b');
		},
		post_title: function(_this){
			// change opacity value
			var close_edittitle_icon = $(_this).parent().prev(); // get "close edit title" icon 

			var _posts = posts();

			_posts.close_edittitle(close_edittitle_icon); // close edittitle field
			_posts.set_edittitle(_this); // set the new title
		}
	}
}

var display = function(){
	return {
		opacity: function(parent, opacity_value, child = "") {
			if(child==undefined)
				$(parent).css('opacity', opacity_value);
			else
				$(parent).children(child).css('opacity', opacity_value);
		},
		mouse_enter: function(me_sel, opacity_sel, opacity, not_child = false){
			var _display = display();

			$(me_sel).mouseenter(function(){
				// change opacity value
				var opacity_tag = not_child ? opacity_sel : this; // check if the target tag is a child of the mouseevent selector
				var opacity_sel = not_child ? "" : opacity_sel; // if target tag is not a child of the mouseevent selector assign ''

				_display.opacity(opacity_tag, opacity, opacity_sel);
			});
		},
		mouse_leave: function(ml_sel, opacity_sel, opacity, not_child = false){
			var _display = display();

			$(ml_sel).mouseleave(function(){
				// change opacity value
				_display.opacity(this, opacity, opacity_sel);
			});
		}
	}
}

var loader = function(sel, action){
	opacity = action=='show' ? 0.6 : 0;
	z_index = action=='show' ? 200 : 0;

	var loader = $(sel).next();

	loader.css({'opacity': opacity, 'z-index': z_index});
}

var htag_text = function(){
	return{
		get: function(sel, child = ""){ // return the text content of the given selectors/tags
			return $.trim(sel.children(child).text());
		},
		set: function(sel, content, child = ""){ // return the text content of the given selectors/tags
			return $.trim(sel.children(child).text(content));
		}
	}
}

const retrievenumbers_fromstring = function(str){
	return str.match(/\d+/g);
}