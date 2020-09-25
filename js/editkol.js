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
    $('.editcompanyfield').tokenfield({
        autocomplete: {
            source: ['Bread n tea','Actor','Influencer','Youtuber','Family','Comedy','Music'],
            delay: 100
        },
        showAutocompleteOnFocus: true,            
            
  });
});

$(document).ready(function() {
	
    var readURL = function(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('.profile-pic2').attr('src', e.target.result);
            }
    
            reader.readAsDataURL(input.files[0]);
        }
    }
   
    $(".file-upload2").change(function(){
        readURL(this);
    });
});


$(document).ready(function(){
    var count = 1;
    $('.editfb').click(function(){
        count = count + 1;

        var html_code = '<div class="row row'+count+'">';
        html_code += '<div class="col-xl-7">';
        html_code += '<input type="text" class="form-control" name="sowfb_name[]" placeholder="Sow" value="">';
        html_code += '</div>';
        html_code += '<div class="col-xl-5">';
        html_code += '<div class="form-row row'+count+'">';
        html_code += '<div class="col-xl-10">';
        html_code += '<input type="text" class="form-control" name="ratefb[]" placeholder="Rate card" value="">';
        html_code += '</div>';
        html_code += '<div class="col-xl-2" style="padding-top:8px">';
        html_code += '<span class="minusinput remove" data-row="row'+count+'"><i class="fas fa-times"></i></span>';
        html_code += '</div>';
        html_code += '</div>';
        $('.editcurd_tablefb').append(html_code);
    });
    $(document).on('click', '.remove', function(){
        var delete_row = $(this).data("row");
        $('.' + delete_row).remove();
    });
});
$(document).ready(function(){
    $(document).on('click', '.removefb', function(){
        var delete_row = $(this).data("row");
        $('.' + delete_row).remove();
    });
});

$(document).ready(function(){
    var count = 1;
    $('.editins').click(function(){
        count = count + 1;

        var html_code = '<div class="row row2'+count+'">';
        html_code += '<div class="col-xl-7">';
        html_code += '<input type="text" class="form-control" name="sowins_name[]" placeholder="Sow" value="">';
        html_code += '</div>';
        html_code += '<div class="col-xl-5">';
        html_code += '<div class="form-row row2'+count+'">';
        html_code += '<div class="col-xl-10">';
        html_code += '<input type="text" class="form-control" name="rateins[]" placeholder="Rate card" value="">';
        html_code += '</div>';
        html_code += '<div class="col-xl-2" style="padding-top:8px">';
        html_code += '<span class="minusinput remove" data-row="row2'+count+'"><i class="fas fa-times"></i></span>';
        html_code += '</div>';
        html_code += '</div>';
        $('.editcurd_tableins').append(html_code);
    });
    $(document).on('click', '.remove', function(){
        var delete_row = $(this).data("row");
        $('.' + delete_row).remove();
    });
});
$(document).ready(function(){
    $(document).on('click', '.removeins', function(){
        var delete_row = $(this).data("row");
        $('.' + delete_row).remove();
    });
});

$(document).ready(function(){
    var count = 1;
    $('.edityt').click(function(){
        count = count + 1;

        var html_code = '<div class="row row3'+count+'">';
        html_code += '<div class="col-xl-7">';
        html_code += '<input type="text" class="form-control" name="sowyt_name[]" placeholder="Sow" value="">';
        html_code += '</div>';
        html_code += '<div class="col-xl-5">';
        html_code += '<div class="form-row row3'+count+'">';
        html_code += '<div class="col-xl-10">';
        html_code += '<input type="text" class="form-control" name="rateyt[]" placeholder="Rate card" value="">';
        html_code += '</div>';
        html_code += '<div class="col-xl-2" style="padding-top:8px">';
        html_code += '<span class="minusinput remove" data-row="row3'+count+'"><i class="fas fa-times"></i></span>';
        html_code += '</div>';
        html_code += '</div>';
        $('.editcurd_tableyt').append(html_code);
    });
    $(document).on('click', '.remove', function(){
        var delete_row = $(this).data("row");
        $('.' + delete_row).remove();
    });
});
$(document).ready(function(){
    $(document).on('click', '.removeyt', function(){
        var delete_row = $(this).data("row");
        $('.' + delete_row).remove();
    });
});

$(document).ready(function(){
    var count = 1;
    $('.edittk').click(function(){
        count = count + 1;

        var html_code = '<div class="row row4'+count+'">';
        html_code += '<div class="col-xl-7">';
        html_code += '<input type="text" class="form-control" name="sowtk_name[]" placeholder="Sow" value="">';
        html_code += '</div>';
        html_code += '<div class="col-xl-5">';
        html_code += '<div class="form-row row4'+count+'">';
        html_code += '<div class="col-xl-10">';
        html_code += '<input type="text" class="form-control" name="ratetk[]" placeholder="Rate card" value="">';
        html_code += '</div>';
        html_code += '<div class="col-xl-2" style="padding-top:8px">';
        html_code += '<span class="minusinput remove" data-row="row4'+count+'"><i class="fas fa-times"></i></span>';
        html_code += '</div>';
        html_code += '</div>';
        $('.editcurd_tabletk').append(html_code);
    });
    $(document).on('click', '.remove', function(){
        var delete_row = $(this).data("row");
        $('.' + delete_row).remove();
    });
});
$(document).ready(function(){
    $(document).on('click', '.removetk', function(){
        var delete_row = $(this).data("row");
        $('.' + delete_row).remove();
    });
});

$(document).ready(function(){
    var count = 1;
    $('.editoff').click(function(){
        count = count + 1;

        var html_code = '<div class="row row5'+count+'">';
        html_code += '<div class="col-xl-7">';
        html_code += '<input type="text" class="form-control" name="sowoff_name[]" placeholder="Sow" value="">';
        html_code += '</div>';
        html_code += '<div class="col-xl-5">';
        html_code += '<div class="form-row row5'+count+'">';
        html_code += '<div class="col-xl-10">';
        html_code += '<input type="text" class="form-control" name="rateoff[]" placeholder="Rate card" value="">';
        html_code += '</div>';
        html_code += '<div class="col-xl-2" style="padding-top:8px">';
        html_code += '<span class="minusinput remove" data-row="row5'+count+'"><i class="fas fa-times"></i></span>';
        html_code += '</div>';
        html_code += '</div>';
        $('.editcurd_tableoff').append(html_code);
    });
    $(document).on('click', '.remove', function(){
        var delete_row = $(this).data("row");
        $('.' + delete_row).remove();
    });
});
$(document).ready(function(){
    $(document).on('click', '.removeoff', function(){
        var delete_row = $(this).data("row");
        $('.' + delete_row).remove();
    });
});

                         

// $(document).ready(function(){
//     var count = 1;
//     $('.editnote').click(function(){
//         count = count + 1;
//         var html_code = "<div class='input-group row2"+count+"'>";
//         html_code += "<input type='text' class='form-control' name='note_txt[]' placeholder='Note'>";
//         html_code += "<div class='input-group-append'>";
//         html_code += "<button class='btn btnminus removenote' data-row='row2"+count+"' type='button'><i class='fas fa-minus-circle'></i></button>";
//         html_code += "</div>";
//         html_code += "</div>";
//         $('.editnoteform').append(html_code);
//     });
//     $(document).on('click', '.removenote', function(){
//         var delete_row = $(this).data("row");
//         $('.' + delete_row).remove();
//     });
// });
// $(document).ready(function(){
//     $(document).on('click', '.removenoted', function(){
//         var delete_row = $(this).data("row");
//         $('.' + delete_row).remove();
//     });
// });

// $(document).ready(function(){
//     var count = 1;
//     $('.editfb').click(function(){
//         count = count + 1;
//         var html_code = "<div class='input-group row3"+count+"'>";
//         html_code += "<input type='text' class='form-control' name='in_fb[]' placeholder='Link ...' >";
//         html_code += "<div class='input-group-append'>";
//         html_code += "<button class='btn btnminus removefb' data-row='row3"+count+"' type='button'><i class='fas fa-minus-circle'></i></button>";
//         html_code += "</div>";
//         html_code += "</div>";
//         $('.editpostfb').append(html_code);
//     });
//     $(document).on('click', '.removefb', function(){
//         var delete_row = $(this).data("row");
//         $('.' + delete_row).remove();
//     });
// });
// $(document).ready(function(){
//     $(document).on('click', '.removefbd', function(){
//         var delete_row = $(this).data("row");
//         $('.' + delete_row).remove();
//     });
// });

// $(document).ready(function(){
//     var count = 1;
//     $('.editins').click(function(){
//         count = count + 1;
//         var html_code = "<div class='input-group row4"+count+"'>";
//         html_code += "<input type='text' class='form-control' name='in_ins[]' placeholder='Link ...' >";
//         html_code += "<div class='input-group-append'>";
//         html_code += "<button class='btn btnminus removeins' data-row='row4"+count+"' type='button'><i class='fas fa-minus-circle'></i></button>";
//         html_code += "</div>";
//         html_code += "</div>";
//         $('.editpostins').append(html_code);
//     });
//     $(document).on('click', '.removeins', function(){
//         var delete_row = $(this).data("row");
//         $('.' + delete_row).remove();
//     });
// });
// $(document).ready(function(){
//     $(document).on('click', '.removeinsd', function(){
//         var delete_row = $(this).data("row");
//         $('.' + delete_row).remove();
//     });
// });

// $(document).ready(function(){
//     var count = 1;
//     $('.edityt').click(function(){
//         count = count + 1;
//         var html_code = "<div class='input-group row5"+count+"'>";
//         html_code += "<input type='text' class='form-control' name='in_yt[]' placeholder='Link ...' >";
//         html_code += "<div class='input-group-append'>";
//         html_code += "<button class='btn btnminus removeyt' data-row='row5"+count+"' type='button'><i class='fas fa-minus-circle'></i></button>";
//         html_code += "</div>";
//         html_code += "</div>";
//         $('.editpostyt').append(html_code);
//     });
//     $(document).on('click', '.removeyt', function(){
//         var delete_row = $(this).data("row");
//         $('.' + delete_row).remove();
//     });
// });
// $(document).ready(function(){
//     $(document).on('click', '.removeytd', function(){
//         var delete_row = $(this).data("row");
//         $('.' + delete_row).remove();
//     });
// });

