$(function() {
    $('#myModal').on("show.bs.modal", function (e) {
         $("#ModalLabel").html($(e.relatedTarget).data('title'));
         $("#del-title").html($(e.relatedTarget).data('title'));
         $("#del-id").val($(e.relatedTarget).data('id'));
         $('#del-link').attr('href', $(e.relatedTarget).data('href'));
    });
});