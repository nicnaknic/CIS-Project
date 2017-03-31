$(document).on("click", ".appRef", function () {
            var appDelRef = $(this).data('id');
            $(".modal-form #delApplicant").val( appDelRef );
        });