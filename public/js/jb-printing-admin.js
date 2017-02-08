// $(function() {
//     $('#' + location.pathname.split("-")[1]).addClass('active');
//     $('#sub-' + location.pathname.split("-")[2]).addClass('sub-active');  
// });

$(document).ready(function() {
    $('#order-table').DataTable();
    $('#order-table-1').DataTable();

    $('#opt-paper').change(function(){
        if(this.checked)
            $('#sec-paper').fadeIn('slow');
        else
            $('#sec-paper').fadeOut('slow');
    });
    $('#opt-color').change(function(){
        if(this.checked)
            $('#sec-color').fadeIn('slow');
        else
            $('#sec-color').fadeOut('slow');
    });
    $('#opt-colorply').change(function(){
        if(this.checked)
            $('#sec-colorply').fadeIn('slow');
        else
            $('#sec-colorply').fadeOut('slow');
    });
} );

$(document).ready(function() {
    $("input[name$='has']").click(function() {
        var test = $(this).val();

        $("div.desc").hide();
        $("#has" + test).show();
    });
});

// ----------------------
// ANNUAL YEAR VIS
// ----------------------

$(document).ready(function() {
    var annyear = document.getElementsByTagName("li");
    var aycount = 0;
    for(var i = 0; i < annyear.length; i++) {
        if(annyear[i].id.indexOf('ann-') == 0) {
            if (aycount > 19 && aycount <= 29) {
                annyear[i].style.display = "table-cell";
            } else {
                annyear[i].style.display = "none";
            }
            aycount++;
        }
    }
});

$( "#annyear" ).change(function() {
    var optionSelected = this.value;
    // alert( optionSelected );

    var annyear = document.getElementsByTagName("li");
    var aycount = 0;

    for(var i = 0; i < annyear.length; i++) {
        if(annyear[i].id.indexOf('ann-') == 0) {
            
            if (optionSelected == '1990 - 1999') {
                if (aycount <= 9) { annyear[i].style.display = "table-cell";
                } else { annyear[i].style.display = "none"; }
            } else if (optionSelected == '2000 - 2009') {
                if (aycount > 9 && aycount <= 19) { annyear[i].style.display = "table-cell";
                } else { annyear[i].style.display = "none"; }
            } else if (optionSelected == '2010 - 2019') {
                if (aycount > 19 && aycount <= 29) { annyear[i].style.display = "table-cell";
                } else { annyear[i].style.display = "none"; }
            } else if (optionSelected == '2020 - 2029') {
                if (aycount > 29) { annyear[i].style.display = "table-cell";
                } else { annyear[i].style.display = "none"; }
            }
            aycount++;
        }
    }    
    // alert( aycount );      
});

// ----------------------
// INPUT TAGGING
// ----------------------

var tagcount = 0;

 $(document).keypress(function(e) { 
    if(e.which == 13) {
        if ($('#p-size').is(':focus')) {
            e.preventDefault();
            var div = document.getElementById('div-size');
            var incont = $('#p-size').val();
            var intype = 'size';
        }
        if ($('#p-paper').is(':focus')) {
            e.preventDefault();
            var div = document.getElementById('div-paper');
            var incont = $('#p-paper').val();
            var intype = 'paperType';
        }
        if ($('#p-color').is(':focus')) {
            e.preventDefault();
            var div = document.getElementById('div-color');
            var incont = $('#p-color').val();
            var intype = 'color';
        }
        if ($('#p-colorply').is(':focus')) {
            e.preventDefault();
            var div = document.getElementById('div-colorply');
            var incont = $('#p-colorply').val();
            var intype = 'colorPly';
        }
        if ($('#p-mainpro').is(':focus')) {
            e.preventDefault();
        //     var div = document.getElementById('div-mainpro');
        //     var incont = $('#p-mainpro').val();
        //     var intype = 'mainpro';
        }
        if ($('#p-subpro').is(':focus')) {
            e.preventDefault();
        //     var div = document.getElementById('div-subpro');
        //     var incont = $('#p-subpro').val();
        //     var intype = 'subpro';
        }

        var incontstr = incont;
        incontstr = incontstr.replace(/[^a-z0-9\s]/gi, '').replace(/[_\s]/g, '-');
        // incontstr.replace('/[^a-zA-Z ]/g', ""));

        if (incont != "" && incont != null) {
            div.innerHTML = div.innerHTML + 
                '<span name="' + incontstr + '" id="vartag-' + incontstr + '-' + tagcount + '" contenteditable="false" class="tag-label">' + 
                '<button class="tag-label-btn" type="button" id="btn-vartag-' + incontstr + '-' + tagcount + '" onclick="removeVarTag(\'vartag-' + incontstr  + '-' + tagcount + '\')">' +
                '<i class="fa fa-times" aria-hidden="true"></i></button>' +
                incont +
                '</span>' + 
                '<input id="vartag-' + incontstr + '-' + tagcount + '-in" name="' + intype +'Input[]" type="hidden" value="' + incont + '">';

            tagcount++;
            $('#p-size').val("");
            $('#p-paper').val("");
            $('#p-color').val("");
            $('#p-colorply').val("");
            $('#p-mainpro').val("");
            $('#p-subpro').val("");
        }

        div = null;
    } 
});

function removeVarTag(tagname) {
    var elem = document.getElementById(tagname);
    var elemin = document.getElementById(tagname+'-in');
    elem.remove();
    elemin.remove();
}

// ----------------------
// AUTO COMPLETE YO
// ----------------------

$.get('/admin-products-mainproducts-add-auto').success(function(data) {
    var sizeresult = getAutoSize();

    // console.log(sizeresult);
    // this.setState(data);

    function getAutoSize() {
        var size = data[0];
        return size.map(function(v) {
            return {'value': v.name, 'data': v.name};
        });
    }

    $('#p-size').autocomplete({
        autoSelectFirst: true,
        lookup: sizeresult,
        onSelect: function (suggestion) {
            e.preventDefault();

            var div = document.getElementById('div-size');
            var incont = $('#p-size').val();
            var intype = 'size';

            var incontstr = incont;
            incontstr = incontstr.replace(/[^a-z0-9\s]/gi, '').replace(/[_\s]/g, '-');

            div.innerHTML = div.innerHTML + 
                '<span name="' + incontstr + '" id="vartag-' + incontstr + '-' + tagcount + '" contenteditable="false" class="tag-label">' + 
                '<button class="tag-label-btn" type="button" id="btn-vartag-' + incontstr + '-' + tagcount + '" onclick="removeVarTag(\'vartag-' + incontstr  + '-' + tagcount + '\')">' +
                '<i class="fa fa-times" aria-hidden="true"></i></button>' +
                incont +
                '</span>' + 
                '<input id="vartag-' + incontstr + '-' + tagcount + '-in" name="' + intype +'Input[]" type="hidden" value="' + incont + '">';

            tagcount++;
            $('#p-size').val("");
            $('#p-paper').val("");
            $('#p-color').val("");
            $('#p-colorply').val("");
        }
    });
});

$.get('/admin-products-mainproducts-add-auto').success(function(data) {
    var paperTyperesult = getAutoPaper();

    function getAutoPaper() {
        var paper = data[1];
        return paper.map(function(v) {
            return {'value': v.name, 'data': v.name};
        });
    }

    $('#p-paper').autocomplete({
        autoSelectFirst: true,
        lookup: paperTyperesult,
        onSelect: function (suggestion) {
            e.preventDefault();

            var div = document.getElementById('div-paper');
            var incont = $('#p-paper').val();
            var intype = 'paperType';

            var incontstr = incont;
            incontstr = incontstr.replace(/[^a-z0-9\s]/gi, '').replace(/[_\s]/g, '-');

           div.innerHTML = div.innerHTML + 
                '<span name="' + incontstr + '" id="vartag-' + incontstr + '-' + tagcount + '" contenteditable="false" class="tag-label">' + 
                '<button class="tag-label-btn" type="button" id="btn-vartag-' + incontstr + '-' + tagcount + '" onclick="removeVarTag(\'vartag-' + incontstr  + '-' + tagcount + '\')">' +
                '<i class="fa fa-times" aria-hidden="true"></i></button>' +
                incont +
                '</span>' + 
                '<input id="vartag-' + incontstr + '-' + tagcount + '-in" name="' + intype +'Input[]" type="hidden" value="' + incont + '">';

            tagcount++;
            $('#p-size').val("");
            $('#p-paper').val("");
            $('#p-color').val("");
            $('#p-colorply').val("");
        }
    });
});

$.get('/admin-products-mainproducts-add-auto').success(function(data) {
    var colorresult = getAutoPaper();

    function getAutoColor() {
        var color = data[1];
        return color.map(function(v) {
            return {'value': v.name, 'data': v.name};
        });
    }

    $('#p-color').autocomplete({
        autoSelectFirst: true,
        lookup: paperTyperesult,
        onSelect: function (suggestion) {
            e.preventDefault();

            var div = document.getElementById('div-color');
            var incont = $('#p-color').val();
            var intype = 'color';

            var incontstr = incont;
            incontstr = incontstr.replace(/[^a-z0-9\s]/gi, '').replace(/[_\s]/g, '-');

           div.innerHTML = div.innerHTML + 
                '<span name="' + incontstr + '" id="vartag-' + incontstr + '-' + tagcount + '" contenteditable="false" class="tag-label">' + 
                '<button class="tag-label-btn" type="button" id="btn-vartag-' + incontstr + '-' + tagcount + '" onclick="removeVarTag(\'vartag-' + incontstr  + '-' + tagcount + '\')">' +
                '<i class="fa fa-times" aria-hidden="true"></i></button>' +
                incont +
                '</span>' + 
                '<input id="vartag-' + incontstr + '-' + tagcount + '-in" name="' + intype +'Input[]" type="hidden" value="' + incont + '">';

            tagcount++;
            $('#p-size').val("");
            $('#p-paper').val("");
            $('#p-color').val("");
            $('#p-colorply').val("");
        }
    });
});

$.get('/admin-products-mainproducts-add-auto').success(function(data) {
    var colorPlyresult = getAutoColor();

    function getAutoColor() {
        var color = data[2];
        return color.map(function(v) {
            return {'value': v.name, 'data': v.name};
        });
    }

    $('#p-colorply').autocomplete({
        autoSelectFirst: true,
        lookup: colorPlyresult,
        onSelect: function (suggestion) {
            e.preventDefault();

            var div = document.getElementById('div-colorply');
            var incont = $('#p-colorply').val();
            var intype = 'colorPly';

            var incontstr = incont;
            incontstr = incontstr.replace(/[^a-z0-9\s]/gi, '').replace(/[_\s]/g, '-');

            div.innerHTML = div.innerHTML + 
                '<span name="' + incontstr + '" id="vartag-' + incontstr + '-' + tagcount + '" contenteditable="false" class="tag-label">' + 
                '<button class="tag-label-btn" type="button" id="btn-vartag-' + incontstr + '-' + tagcount + '" onclick="removeVarTag(\'vartag-' + incontstr  + '-' + tagcount + '\')">' +
                '<i class="fa fa-times" aria-hidden="true"></i></button>' +
                incont +
                '</span>' + 
                '<input id="vartag-' + incontstr + '-' + tagcount + '-in" name="' + intype +'Input[]" type="hidden" value="' + incont + '">';

            tagcount++;
            $('#p-size').val("");
            $('#p-paper').val("");
            $('#p-color').val("");
            $('#p-colorply').val("");
        }
    });
});

$.get('/admin-inventory-auto').success(function(data) {
    var mproresult = getAutoColor();

    function getAutoColor() {
        var mpro = data[0];
        return mpro.map(function(v) {
            return {'value': v.name, 'data': v.name};
        });
    }

    $('#p-mainpro').autocomplete({
        autoSelectFirst: true,
        lookup: mproresult,
        onSelect: function (suggestion) {
            var div = document.getElementById('div-mainpro');
            var intype = 'mainpro';

            div.innerHTML = div.innerHTML + 
                '<span name="' + suggestion.data + '" id="vartag-' + suggestion.data + '-' + tagcount + '" contenteditable="false" class="tag-label">' + 
                '<button class="tag-label-btn" type="button" id="btn-vartag-' + suggestion.data + '-' + tagcount + '" onclick="removeVarTag(\'vartag-' + suggestion.data  + '-' + tagcount + '\')">' +
                '<i class="fa fa-times" aria-hidden="true"></i></button>' +
                suggestion.data +
                '</span>' + 
                '<input id="vartag-' + suggestion.data + '-' + tagcount + '-in" name="' + intype +'Input[]" type="hidden" value="' + suggestion.data + '">';

            tagcount++;
            $('#p-mainpro').val("");
        }
    });
});
$.get('/admin-inventory-auto').success(function(data) {
    var sproresult = getAutoColor();

    function getAutoColor() {
        var spro = data[1];
        return spro.map(function(v) {
            return {'value': v.name, 'data': v.name};
        });
    }

    $('#p-subpro').autocomplete({
        autoSelectFirst: true,
        lookup: sproresult,
        onSelect: function (suggestion) {
            var div = document.getElementById('div-subpro');
            var intype = 'subpro';

            div.innerHTML = div.innerHTML + 
                '<span name="' + suggestion.data + '" id="vartag-' + suggestion.data + '-' + tagcount + '" contenteditable="false" class="tag-label">' + 
                '<button class="tag-label-btn" type="button" id="btn-vartag-' + suggestion.data + '-' + tagcount + '" onclick="removeVarTag(\'vartag-' + suggestion.data  + '-' + tagcount + '\')">' +
                '<i class="fa fa-times" aria-hidden="true"></i></button>' +
                suggestion.data +
                '</span>' + 
                '<input id="vartag-' + suggestion.data + '-' + tagcount + '-in" name="' + intype +'Input[]" type="hidden" value="' + suggestion.data + '">';

            tagcount++;
            $('#p-subpro').val("");
        }
    });
});

// ----------------------
// MATERIAL ROW ADDING
// ----------------------

var matrowcount = 2;

$( "#add-material" ).click(function() {
    var div = document.getElementById('material-rows');

    div.innerHTML = div.innerHTML +
        '<div id="matrow-' + matrowcount + '" class="row">' + 
            '<hr>' +
            '<div class="col-sm-6">' + 
                '<div class="col-xs-12"><p><b>Product Name: </b></p></div>' + 
                '<div class="col-xs-12 no-pad"><input value="" name="name-' + 
                    matrowcount + 
                '" type="text" id="name-' +
                    matrowcount + 
                '" class="form-control" required></div>' + 
            '</div>' + 
            '<div class="col-sm-5">' + 
                '<div class="col-xs-12"><p><b>Quantity/Pieces: </b></p></div>' + 
                '<div class="col-xs-12 no-pad"><input value="" name="quantity-' + 
                    matrowcount + 
                '" type="number" id="quantity-' +
                    matrowcount + 
                '" class="form-control" required></div>' + 
            '</div>' + 
            '<div class="col-sm-1">' + 
                '<button class="admin-button" type="button" id="matrev-' + matrowcount + '" onclick="removeMatRow(\'matrow-' + 
                    matrowcount + '\')">' + 
                '<i class="fa fa-times" aria-hidden="true"></i></button>' +
            '</div>' + 
            '<div class="clear"></div><br>' +
        '</div>';

    $('#matrev-'+(matrowcount-1)).hide();

    $('#matrow-count').val(matrowcount);
    matrowcount++;
});

function removeMatRow(matname) {
    var elem = document.getElementById(matname);

    matrowcount--;
    $('#matrev-'+(matrowcount-1)).show();

    elem.remove();
}