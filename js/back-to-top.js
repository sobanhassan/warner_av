// Code written by Soban Hassan
// BACk to Top Button
var btn = $('#button');
    btn.on('click', function (e) {
        e.preventDefault();
        $('html, body').animate({ scrollTop: 0 }, '300');
    });