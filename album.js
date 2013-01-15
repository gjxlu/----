$(function() {
    $('#album li').click(function() {
	var $this = $(this),
	img = $this.find('img'),
	title = img.attr('title'),
	dialog = $('<div />', {
	    title: 'Fullsize',
	    html: '<img src="pic/' + title + '" />',
		style: 'text-align: center'
	}),
	next = function() {
	    $this = $this.next();
	    if ($this.length === 0) {
		$this = $('#album li:first')
	    }
	    img = $this.find('img');
	    title = img.attr('title');
	    dialog_img.attr('src', 'pic/' + title);
	},
	dialog_img = dialog.find('img').click(next);

	dialog.dialog({
	    modal: true,
	    autoOpen: true,
	    show: "blind",
	    hide: "explode",
	    width: '95%',
	    buttons : {
		Next: next
	    },
	    'close': function() {
		dialog.remove();
	    }
	});

    });
});