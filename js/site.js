$(function() {
    function formatNumber(number) {
        var numberInt = parseInt(number);

        if (!numberInt) {
            return number;
        }

        return parseInt(number).toLocaleString();
    }

    $('.starship-item button').click(function() {
        var id = $(this).data('shipId');
        var $modal = $('#starship-info');
        $.get($(this).data('shipUrl'), function(data) {
            $('.modal-title', $modal).text(data.name);
            $('.manufacturer span', $modal).text(data.manufacturer);
            $('.class span', $modal).text(data.starship_class);
            $('.rating span', $modal).text(data.hyperdrive_rating);
            $('.capacity span', $modal).text(formatNumber(data.cargo_capacity));
            $('.cost span', $modal).text(formatNumber(data.cost_in_credits));
            $('.max-speed span', $modal).text(formatNumber(data.max_atmosphering_speed));
            $('.mglt span', $modal).text(formatNumber(data.MGLT));
            $modal.modal('show');
        });
    });
});
