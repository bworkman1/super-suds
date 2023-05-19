
(function ($) {

	var base_url = $('#base_url').val();

	$('#contact-page #phone_input').mask('(000) 000-0000');

    // Spinner
    var spinner = function () {
        setTimeout(function () {
            if ($('#spinner').length > 0) {
                $('#spinner').removeClass('show');
            }
        }, 1);
    };
    spinner();
    
    
    // Initiate the wowjs
    new WOW().init();


    // Sticky Navbar
    $(window).scroll(function () {
        if ($(this).scrollTop() > 45) {
            $('.navbar').addClass('sticky-top shadow-sm');
        } else {
            $('.navbar').removeClass('sticky-top shadow-sm');
        }
    });
    
    // Dropdown on mouse hover
    const $dropdown = $(".dropdown");
    const $dropdownToggle = $(".dropdown-toggle");
    const $dropdownMenu = $(".dropdown-menu");
    const showClass = "show";
    
    $(window).on("load resize", function() {
        if (this.matchMedia("(min-width: 992px)").matches) {
            $dropdown.hover(
            function() {
                const $this = $(this);
                $this.addClass(showClass);
                $this.find($dropdownToggle).attr("aria-expanded", "true");
                $this.find($dropdownMenu).addClass(showClass);
            },
            function() {
                const $this = $(this);
                $this.removeClass(showClass);
                $this.find($dropdownToggle).attr("aria-expanded", "false");
                $this.find($dropdownMenu).removeClass(showClass);
            }
            );
        } else {
            $dropdown.off("mouseenter mouseleave");
        }
    });

    // Back to top button
    $(window).scroll(function () {
        if ($(this).scrollTop() > 100) {
            $('.back-to-top').fadeIn('slow');
        } else {
            $('.back-to-top').fadeOut('slow');
        }
    });

    $('.back-to-top').click(function () {
        $('html, body').animate({scrollTop: 0}, 100, 'easeInOutExpo');
        return false;
    });


    // Testimonials carousel
    $(".testimonial-carousel").owlCarousel({
        autoplay: true,
        smartSpeed: 1500,
        dots: true,
        loop: true,
        center: true,
        responsive: {
            0:{
                items:1
            },
            576:{
                items:1
            },
            768:{
                items:2
            },
            992:{
                items:3
            }
        }
    });

	$('.slider').on('input', function() {
		$(this).prev().find('.divisor').css('width', $(this).val() + "%")
	});

	$('#search-form').submit(function (event) {
		event.preventDefault();
		var search_term = $('#search-input').val();
		$.post(base_url + '/ajax_call/search',   // url
			{ search_term: search_term }, // data to be submit
			function(data, status, jqXHR) {// success callback
				objResults = JSON.parse(data);
				if(objResults.success) {
					buildSearchResults(objResults.search_results)
				} else {
					noResultsFound();
				}
			});
	});

	$('#search-input').keyup(function () {
		$('#search-results').html('');
	});

	function buildSearchResults(arrSearchResults) {
		if(!arrSearchResults.length) noResultsFound();

		strHtml = '<ul className="list-group">';
		arrSearchResults.forEach(function (item, index) {
			strHtml += '<li class="list-group-item">';
				strHtml += '<div class="row">';
					strHtml += '<div class="col-sm-2">';
						strHtml += '<img src="' + item.image + '" alt="' + item.title + '" class="img-fluid" style="max-width: 60px">';
					strHtml += '</div>';
					strHtml += '<div class="col-sm-10">';
						strHtml += '<a href="' + item.url + '">' + item.title + '</a>';
					strHtml += '</div>';
				strHtml += '</div>';
			strHtml += '</li>';
		});
		strHtml += '</ul>';

		$('#search-results').html(strHtml);
	}

	function noResultsFound() {
		$('#search-results').html('<div class="alert alert-info"><b>No Results Found</b></div>');
	}

	$('#contact-page').submit(function(event) {
		event.preventDefault();

		let name 		= $('#contact-page #name_input').val();
		let email 		= $('#contact-page #email_input').val();
		let address		= $('#contact-page #address_input').val();
		let phone 		= $('#contact-page #phone_input').val();
		let description = $('#contact-page #description_input').val();
		let check 		= $('#contact-page #check_input').val();
		$('#call-feedback').html('');
		$('.alert-success').remove();
		$.post(base_url + 'ajax_call/submit-contact-form',
			{
				"name": name,
				"email": email,
				"address": address,
				"phone": phone,
				"description": description,
				"check": check,
			}, // data to be submit
			function(data, status, jqXHR) {// success callback
				objResults = JSON.parse(data);
				if(objResults.success) {
					document.getElementById("contact-page").reset();
					$('#check_input').val(objResults.check);
					$('#call-feedback').after().html(objResults.message);
				} else {
					$('#call-feedback').html(objResults.errors);
				}
			}
		);
	});

})(jQuery);
