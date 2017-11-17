/**
 * Created by User on 17.11.2017.
 */
$(document).ready(function () {
	// antispam
	$('[type="submit"]').each(function(){
		if ($(this).attr('name') == '_sendForm') {
			$(this).attr('name',$(this).attr('name').substr(1));
		}
	});
});