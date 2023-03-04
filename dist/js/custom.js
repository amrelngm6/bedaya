
jQuery(document).ready(function (e) {

	jQuery(document).on('click', '#show-menu', function(e){
		jQuery('#mobile-menu').addClass('show');
	});
	jQuery(document).on('click', '#close-menu', function(e){
		jQuery('#mobile-menu').removeClass('show');
	});

	jQuery(document).on('click', '#switch-cat>div', function(e){
		var html = '';
		var arr = JSON.parse(jQuery(this).attr('data-childs'));
		
		for (var i = arr.length - 1; i >= 0; i--) {
			if (arr[i])
			{
				let title = arr[i].content ? arr[i].content.title : arr[i];
				let link = arr[i].content ? arr[i].content.prefix : 'javascript:;';
				html += '<a class="lg:inline-block block mx-2 my-2 py-2 px-4 lightcyan-bg font-semibold purple-color border border-purple-400 rounded-lg" href="'+link+'">'+title+'</a>';
			}
		}

		jQuery('#cat-content').html(html)
	});

});

function shuffleArray(array) 
{
    for (var i = array.length - 1; i > 0; i--) {
        var j = Math.floor(Math.random() * (i + 1));
        var temp = array[i];
        array[i] = array[j];
        array[j] = temp;
    }
    return array;
}