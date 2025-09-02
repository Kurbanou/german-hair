
(function ($) {
    "use strict";

	const _header =	$('.header');
	const _headerModal = $('#headerMenuModal');
	const _window = $(window);
    const _headerFadeWrapper = $('.header-fade-wrapper');

    $(document).ready(onDocumentInit);

    function _showHeaderModal() {
        if (!_headerModal.hasClass('_show')) {
            $('body').css({ overflow: 'hidden' });
            $('html').css({ overflow: 'hidden' });
            _headerModal.addClass('_show');
            _headerFadeWrapper.addClass('_show');
        }
    }

    function _hideHeaderModal() {
        if (_headerModal.hasClass('_show')) {
            _headerModal.removeClass('_show');
            _headerFadeWrapper.removeClass('_show');
            $('body').css({ overflow: '' });
            $('html').css({ overflow: '' });
        }
    }

    function _slideToggle(event) {
        const parent = $(event.target).closest('.slide-toggle-item');
        const target = parent.find('.slide-toggle-item-body');
        if (target.length) {
            target.stop().slideToggle();
            parent.toggleClass('_show');
        }
    }

    function onDocumentInit() {

        $('img[data-src]:not(.no-effect), video.lazy').Lazy({
            effect: 'fadeIn',
            visibleOnly: true,
            effectTime: 300,
            threshold: 0,
            onError: function (element) {
                console.log('error loading ' + element.data('src'));
            },
        });

        $('img[data-src].no-effect, video.lazy').Lazy({
            onError: function (element) {
                console.log('error loading ' + element.data('src'));
            },
        });

        $('[data-action="slide-toggle"]').on('click', _slideToggle);

        if (_headerModal.length) {
            $('[data-action="header-open"]').on('click', _showHeaderModal);
            $('[data-action="header-close"]').on('click', _hideHeaderModal);
            if (_headerFadeWrapper.length) _headerFadeWrapper.on('click', _hideHeaderModal);
        }

    }

})(jQuery);