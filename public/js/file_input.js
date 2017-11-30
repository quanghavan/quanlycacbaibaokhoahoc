
var inputs = document.querySelectorAll('.inputfile');
Array.prototype.forEach.call(inputs, function (input) {
    var label = input.nextElementSibling,
        labelVal = label.innerHTML;

    input.addEventListener('change', function (e) {
        var fileName = '';
        fileName = e.target.value.split('\\').pop();
        if (fileName.length > 10){
            fileName = substring(0, 7) + '...';
        }
        label.innerHTML = fileName;
    });
});
