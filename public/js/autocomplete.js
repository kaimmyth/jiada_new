$(document).ready(function () {
    var searchLocation = new Bloodhound({
        datumTokenizer: Bloodhound.tokenizers.obj.whitespace('label','value'),
        queryTokenizer: Bloodhound.tokenizers.whitespace,
        // prefetch: '../data/films/post_1960.json',
        remote: {
            url: window.location.origin+"/search-material?query=%QUERY",
            wildcard: '%QUERY'
        }
    });
    $('#remote .typeahead').typeahead({
        minLength: 3,
        highlight: true
        }, {
        name: 'airports',
        display: 'label',
        valueKey: 'value',
        source: searchLocation,
        limit: 20,
    }).on("typeahead:selected typeahead:autocompleted", function (event, datum) {
        console.log(datum);
        window.location.href=window.location.origin+"/unit/"+datum.value+"/"+datum.label;
    });
});