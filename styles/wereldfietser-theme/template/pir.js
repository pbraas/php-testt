function updatePostedImages() {
	var MaxWidth = 675;
	var ImageObjects = document.images;
	for (var i = 0; i < ImageObjects.length; i++) {
		if (ImageObjects[i].className == "posted_image") {
			var h = ImageObjects[i].offsetHeight;
			var w = ImageObjects[i].offsetWidth;
			if (w > MaxWidth) {
				ImageObjects[i].className = "posted_image_resized";
				ImageObjects[i].title = "Klik voor grotere afbeelding";
				ImageObjects[i].width = MaxWidth;
				ImageObjects[i].onclick = function () { enlargePostedImage(this); }
				ImageObjects[i].onmouseover = function () { hoverPostedImage(this, 'over'); }
				ImageObjects[i].onmouseout = function () { hoverPostedImage(this, 'out'); }
			}
		}
	}
}
function enlargePostedImage(obj) {
	window.open(obj.src);
}
function hoverPostedImage(obj, type) {
	if (type == "over") {
		obj.className = "posted_image_resized_hover";
	} else {
		obj.className = "posted_image_resized";
	}
}

