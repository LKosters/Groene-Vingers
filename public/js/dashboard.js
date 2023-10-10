$('#open-sidebar').click(function() {
    $('#sidebar').css({
        'display': 'block',
        'position': 'absolute',
        'width': '100%',
        'background-color': '#fff'
    });

    $('#open-sidebar').css({
        'display': 'none'
    });

    $('#close-sidebar').css({
        'display': 'block'
    });
});

$('#close-sidebar').click(function() {
    $('#sidebar').css({
        'display': 'none',
        'position': 'absolute',
        'width': '100%',
        'background-color': '#fff'
    });

    $('#open-sidebar').css({
        'display': 'block'
    });

    $('#close-sidebar').css({
        'display': 'none'
    });
});

var loc = window.location.pathname;

$('#nav-dashboard').find('a').each(function() {
    $(this).toggleClass('active-dashboard', $(this).attr('href') == loc);
});


