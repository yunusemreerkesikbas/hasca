$(document).ready(function () {
	// $(".sortable").sortable();
	$(".sortable").sortable({
		group: 'no-drop',
		handle: 'i.bx-border-all',
		onDragStart: function ($item, container, _super) {
			// Duplicate items of the no drop area
			if(!container.options.drop)
				$item.clone().insertAfter($item);
			_super($item, container);
		}
	});


	$(".content-container").on('click', '.remove-btn', function () {
		var $data_url = $(this).data("url");


		const swalWithBootstrapButtons = Swal.mixin({
			customClass: {
				confirmButton: 'btn btn-success',
				cancelButton: 'btn btn-danger'
			},
			buttonsStyling: false
		})

		swalWithBootstrapButtons.fire({
			title: 'Emin misin?',
			text: "Bu dosyayı silmek istiyor musun!",
			icon: 'warning',
			showCancelButton: true,
			confirmButtonText: 'Evet, sil!',
			cancelButtonText: 'Hayır',
			reverseButtons: true
		}).then((result) => {
			if (result.isConfirmed) {
				swalWithBootstrapButtons.fire(
					'Silindi!',
					'Dosya başarılı bir şekilde silindi',
					'success'
				)

				window.location.href = $data_url;

			} else if (
				/* Read more about handling dismissals below */
				result.dismiss === Swal.DismissReason.cancel
			) {
				swalWithBootstrapButtons.fire(
					'Cancelled',
					'Your imaginary file is safe :)',
					'error'
				)
			}
		})


	});

	$(".content-container").on('change', '.isActive', function(){

		var $data = $(this).prop("checked");
		// alert($data);
		var $data_url = $(this).data("url");

		if(typeof $data !== "undefined" && typeof $data_url !== "undefined"){

			$.post($data_url, { data : $data}, function (response) {

			});

		}

	})

	$(".content-container").on("sortupdate", '.sortable',  function(event, ui){
		// DOM yğklendikten sonra yapının ddoğru çalışması için on() kullandık sortupdate metoduyla ve sorrable divinin üstündeki kapsayııc divi aldık
		var $data = $(this).sortable("serialize"); // oluşturduğumuz sıralamanın verisini url olarak getirir
		var $data_url = $(this).data("url");

		$.post($data_url, {data : $data}, function(response){})

	}) // sortable class'ında herhangi bir değişiklik varsa


});

