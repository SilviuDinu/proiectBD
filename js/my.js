jQuery(document).ready(function($) {
    $(document).ready(function() {
        window.history.pushState(null, '', window.location.href);
        window.onpopstate = function() {
            window.history.pushState(null, '', window.location.href);
        };
        $(window).on('popstate', function() {
                   alert('NU ABUZATI DE BUTONUL DE BACK SI RELOGATI-VA');
                   window.location('index.php');
              });
    });
});