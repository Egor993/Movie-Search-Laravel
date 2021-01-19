$(() => {
    $(".favorite").on('click', function (e) {
        let slug = $(this).attr("data-id");
        $.get("favorite_add/"+slug, {}, function (data) {
            $(".favorite").html('В избранном');
        });
        return false;
    });
});
