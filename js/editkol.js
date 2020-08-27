$(document).ready(function(){
    $('.editjobfield').tokenfield({
        autocomplete: {
            source: ['Singer','Actor','Influencer','Youtuber','Family','Comedy','Music'],
            delay: 100
        },
        showAutocompleteOnFocus: true,            
            
  });
});




$(document).ready(function(){
    var count = 1;
    $('.edit').click(function(){
        count = count + 1;
        var html_code = "<div class='input-group row"+count+"'>";
        html_code += "<input type='text' class='form-control' name='sow_name[]' placeholder='Sow' required>";
        html_code += "<input type='text' class='form-control' name='ratecard[]' placeholder='Rate card' required>";
        html_code += "<input type='date' class='form-control' name='time[]' placeholder='' required>";
        html_code += "<div class='input-group-append'>";
        html_code += "<button class='btn btnminus remove' data-row='row"+count+"' type='button'><i class='fas fa-minus-circle'></i></button>";
        html_code += "</div>";
        html_code += "</div>";
        $('.editcurd_table').append(html_code);
    });
    $(document).on('click', '.remove', function(){
        var delete_row = $(this).data("row");
        $('.' + delete_row).remove();
    });
});
$(document).ready(function(){
    $(document).on('click', '.removed', function(){
        var delete_row = $(this).data("row");
        $('.' + delete_row).remove();
    });
});

                         

$(document).ready(function(){
    var count = 1;
    $('.editnote').click(function(){
        count = count + 1;
        var html_code = "<div class='input-group row2"+count+"'>";
        html_code += "<input type='text' class='form-control' name='note_txt[]' placeholder='Note'>";
        html_code += "<div class='input-group-append'>";
        html_code += "<button class='btn btnminus removenote' data-row='row2"+count+"' type='button'><i class='fas fa-minus-circle'></i></button>";
        html_code += "</div>";
        html_code += "</div>";
        $('.editnoteform').append(html_code);
    });
    $(document).on('click', '.removenote', function(){
        var delete_row = $(this).data("row");
        $('.' + delete_row).remove();
    });
});
$(document).ready(function(){
    $(document).on('click', '.removenoted', function(){
        var delete_row = $(this).data("row");
        $('.' + delete_row).remove();
    });
});

$(document).ready(function(){
    var count = 1;
    $('.editfb').click(function(){
        count = count + 1;
        var html_code = "<div class='input-group row3"+count+"'>";
        html_code += "<input type='text' class='form-control' name='in_fb[]' placeholder='Link ...' >";
        html_code += "<div class='input-group-append'>";
        html_code += "<button class='btn btnminus removefb' data-row='row3"+count+"' type='button'><i class='fas fa-minus-circle'></i></button>";
        html_code += "</div>";
        html_code += "</div>";
        $('.editpostfb').append(html_code);
    });
    $(document).on('click', '.removefb', function(){
        var delete_row = $(this).data("row");
        $('.' + delete_row).remove();
    });
});
$(document).ready(function(){
    $(document).on('click', '.removefbd', function(){
        var delete_row = $(this).data("row");
        $('.' + delete_row).remove();
    });
});

$(document).ready(function(){
    var count = 1;
    $('.editins').click(function(){
        count = count + 1;
        var html_code = "<div class='input-group row4"+count+"'>";
        html_code += "<input type='text' class='form-control' name='in_ins[]' placeholder='Link ...' >";
        html_code += "<div class='input-group-append'>";
        html_code += "<button class='btn btnminus removeins' data-row='row4"+count+"' type='button'><i class='fas fa-minus-circle'></i></button>";
        html_code += "</div>";
        html_code += "</div>";
        $('.editpostins').append(html_code);
    });
    $(document).on('click', '.removeins', function(){
        var delete_row = $(this).data("row");
        $('.' + delete_row).remove();
    });
});
$(document).ready(function(){
    $(document).on('click', '.removeinsd', function(){
        var delete_row = $(this).data("row");
        $('.' + delete_row).remove();
    });
});

$(document).ready(function(){
    var count = 1;
    $('.edityt').click(function(){
        count = count + 1;
        var html_code = "<div class='input-group row5"+count+"'>";
        html_code += "<input type='text' class='form-control' name='in_yt[]' placeholder='Link ...' >";
        html_code += "<div class='input-group-append'>";
        html_code += "<button class='btn btnminus removeyt' data-row='row5"+count+"' type='button'><i class='fas fa-minus-circle'></i></button>";
        html_code += "</div>";
        html_code += "</div>";
        $('.editpostyt').append(html_code);
    });
    $(document).on('click', '.removeyt', function(){
        var delete_row = $(this).data("row");
        $('.' + delete_row).remove();
    });
});
$(document).ready(function(){
    $(document).on('click', '.removeytd', function(){
        var delete_row = $(this).data("row");
        $('.' + delete_row).remove();
    });
});