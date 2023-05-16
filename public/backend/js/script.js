$(function () {
  const navItem = $(".nav-item");
  const collapse = $(".sidebar_collapse");

  $('input[name="daterange"]').daterangepicker(
    {
      opens: "left",
    },
    function (start, end, label) {
      console.log(
        "A new date selection was made: " +
          start.format("YYYY-MM-DD") +
          " to " +
          end.format("YYYY-MM-DD")
      );
    }
  );

  $(".dropdown__menu").click(() => {
    $("ul.aside__sub__nav").toggleClass("d-none");
  });

  if ($(".dropdown__menu .cat__side__nav").hasClass("active")) {
    $("ul.aside__sub__nav").removeClass("d-none");
  } else {
    $("ul.aside__sub__nav").addClass("d-none");
  }

  $("#navbar-toggler").click(() => {
    $("body").toggleClass("sidebar-text");
    $("body").toggleClass("sidebar-icon-only");
  });

  $("#sidebarCollapseBtn").click(() => {
    $(".sidebar").toggleClass("collapsed");
    $("body").toggleClass("sidebar-text");
  });

  if (window.innerWidth < 991) {
    $("body").removeClass("sidebar-text");
    $("body").removeClass("sidebar-icon-only");
  }

  // if(navItem)
  $(".nav-item a[data-toggle='collapseBtn']").click(function () {
    collapse.toggleClass("d-none");
  });
});




$(function() {
  $( ".calendar" ).datepicker({
		dateFormat: 'dd/mm/yy',
		firstDay: 1
	});
	
	$(document).on('click', '.date-picker .input', function(e){
		var $me = $(this),
				$parent = $me.parents('.date-picker');
		$parent.toggleClass('open');
	});
	
	
	$(".calendar").on("change",function(){
		var $me = $(this),
				$selected = $me.val(),
				$parent = $me.parents('.date-picker');
		$parent.find('.result').children('span').html($selected);
	});
});


$(function() {
	var Accordion = function(el, multiple) {
		this.el = el || {};
		this.multiple = multiple || false;

		// Variables privadas
		var links = this.el.find('.link');
		// Evento
		links.on('click', {el: this.el, multiple: this.multiple}, this.dropdown)
	}

	Accordion.prototype.dropdown = function(e) {
		var $el = e.data.el;
			$this = $(this),
			$next = $this.next();

		$next.slideToggle();
		$this.parent().toggleClass('open');

		if (!e.data.multiple) {
			$el.find('.submenu').not($next).slideUp().parent().removeClass('open');
		};
	}	

	var accordion = new Accordion($('#accordion'), false);
});

