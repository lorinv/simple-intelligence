function change_visibility(id, id2, id3) {
       var show = document.getElementById(id);
	   var hide1 = document.getElementById(id2);
	   var hide2 = document.getElementById(id3);
       hide1.style.display = 'none';
	   hide2.style.display = 'none';
       show.style.display = 'block';
}