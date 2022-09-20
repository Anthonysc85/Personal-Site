$(function () {

    // On resize, store the viewport height (for mobile full-screen)
    let timeoutResizeBounce;
    let d = document;

    window.addEventListener('resize', onResize);
    function onResize() {
        clearTimeout(timeoutResizeBounce);

        timeoutResizeBounce = setTimeout(function() {

            const windowHeight = window.innerHeight;
            const windowWidth = window.innerWidth;
            const footerHeight = document.getElementsByTagName('footer')[0].offsetHeight;
            const headerHeight = document.getElementsByTagName('header')[0].offsetHeight;

            d.documentElement.style.setProperty('--viewport-height', windowHeight + 'px');
            d.documentElement.style.setProperty('--footer-height', footerHeight + 'px');
            d.documentElement.style.setProperty('--header-height', headerHeight + 'px');
            d.documentElement.style.setProperty('--viewport-without-footer-header-height', (windowHeight - footerHeight - headerHeight) + 'px');

        }, 200);
    }

    onResize();
})