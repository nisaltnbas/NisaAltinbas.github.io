$(document).ready(function() {
    $('#nav_list a').on('click', function(e) {
            e.preventDefault();
            var speakerKey = $(this).attr('title');
            var jsonFile = 'json_files/' + speakerKey + '.json';
        $.getJSON(jsonFile, function(data) {
            var speaker = data.speakers[0];
            var main = $('main');
            main.empty(); 
            var html = '';
            html += '<h1>' + speaker.title + '</h1>';
            html += '<img src="' + speaker.image + '">';
            html += '<h2>' + speaker.month + '<br>' + speaker.speaker + '</h2>';
            html += '<p>' + speaker.text + '</p>';
            main.append(html);
        });
    });
}); 