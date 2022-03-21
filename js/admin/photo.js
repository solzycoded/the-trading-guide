class Photo {
	constructor(){

	}

	append(sel, src){
		$(sel).attr('src', src);
	}
	
	getphoto(file){ // select the image in the same index position as the selected file
		var fileinput_classes = $(file).attr('id'); // select the image that's about to be uploaded
 
		// retrieve the integers in a string, into an array
        let numbers = retrievenumbers_fromstring(fileinput_classes);
        let img = $('#target_image_' + numbers[0]);

		return img;
	}

	upload(img){ // if file exists, upload the received file
		var imgfile = img.files[0];

        if(imgfile!=undefined){
            var reader = new FileReader();

            img.title = imgfile.name;

            reader.onload = function(event) {
                var src = event.target.result;

                loader(img, 'hide'); // hide image loader, after upload is complete (in _admin.js)

                // SELECT AND UPLOAD THE SELECTED FILE TO THE IMAGE TAG
             	var _photo = new Photo();

                var imgsel = _photo.getphoto(img); // get image element (for upload)

                _photo.append(imgsel, src); // add the uploade image to the selected image tag
			};

            reader.readAsDataURL(imgfile);
        }
        else {
            loader(img, 'hide'); // hide image loader, after upload is complete}
		}
	}

	receive(){ // receive the response on file/image upload
		const _photo = new Photo();

		$('.uploadfromlib').on('change', function(){
            loader(this, 'show'); // show image loader, after upload is complete (in _admin.js)

            _photo.upload(this); // upload the selected image
		});
	}
}