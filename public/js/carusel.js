$(() => {

    jQuery.fn.tcarusel = function (options) {

        return this.each(function () {

            let tcaruselBlock = $(this),
            	tcaruselScroll = tcaruselBlock.find('.tcarusel-scroll'),
            	tcaruselFirstItem = tcaruselBlock.find('.tcarusel-item:first'),
            	tcaruselLastItem = tcaruselBlock.find('.tcarusel-item:last'),
            	tcaruselBlockWidth = tcaruselBlock.find(tcaruselFirstItem).outerWidth(true);

            function tcaruselShowNext() {
                tcaruselScroll.animate({
                    'left': -tcaruselBlockWidth
                }, 200, function () {
                    tcaruselBlock.find('.tcarusel-item:first').appendTo(tcaruselScroll);
                    tcaruselScroll.css({
                        'left': '0'
                    });
                });
            }

            function tcaruselShowPrev() {
                tcaruselBlock.find('.tcarusel-item:last').prependTo(tcaruselScroll);
                tcaruselScroll.css({
                    'left': -tcaruselBlockWidth
                });
                tcaruselScroll.animate({
                    'left': 0
                }, 200);
            }

            tcaruselBlock.find('.tcarusel-next').on('click', tcaruselShowNext);
            tcaruselBlock.find('.tcarusel-prev').on('click', tcaruselShowPrev);

        });

    };
    $('.tcarusel').tcarusel();
});
