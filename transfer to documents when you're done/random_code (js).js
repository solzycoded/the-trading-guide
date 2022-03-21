$(function(){
	var foto = photo();

	// receive file
	foto.receive();
});

// photo class (add, edit & remove)
var photo = function() {
	return {
		receive: function(){ // receive the response on file/image upload
			$('.uploadfromlib').on('change', function(){
                photo().upload(this);
			})
		},
		upload: function(img){ // if file exists, upload the received file
			var imgfile = img.files[0];

            if(imgfile!=undefined){
                var reader = new FileReader();

                img.title = imgfile.name;

                reader.onload = function(event) {
                    var src = event.target.result;

                    // img.css({'width': 'inherit', 'height': '100px'})
                    // .addClass('posoccupied')
                    // .attr("src", src);

                    // myphotos().sendrequest('Myprofile/Updatephotos.php', {'img': src, 'userimgid': userimgid}, 'POST');
                };

                reader.readAsDataURL(imgfile);
            }
		}
	}
	// return (end)
}