$(".tt-dropdown-menu").css("z-index","11001");
$(document).ready(function(){
    $('#jobfield').tokenfield({
        autocomplete: {
            source: ['Singer','Actor','Influencer','Youtuber','Family','Comedy','Music'],
            delay: 100
        },
        showAutocompleteOnFocus: true,            
            
  });
});

$(document).ready(function(){
    $('#companyfield').tokenfield({
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
                $('.profile-pic').attr('src', e.target.result);
            }
    
            reader.readAsDataURL(input.files[0]);
        }
    }
   
    $(".file-upload").on('change', function(){
        readURL(this);
    });
    
    $(".upload-button").on('click', function() {
       $(".file-upload").click();
    });
});


$(document).ready(function(){
    var count = 1;
    $('#addfb').click(function(){
        count = count + 1;
        var html_code = '<div class="row row1'+count+'">';
        html_code += '<div class="col-xl-7">';
        html_code += '<input type="text" class="form-control" name="sowfb_name[]" placeholder="Sow" value="">';
        html_code += '</div>';
        html_code += '<div class="col-xl-5">';
        html_code += '<div class="input-group row'+count+'">';
        html_code += '<input type="text" class="form-control" name="ratefb[]" placeholder="Rate card" value="">';
        html_code += '<div class="input-group-append">';
        html_code += '<button class="btn btnminus remove" data-row="row1'+count+'" type="button"><i class="fas fa-minus-circle"></i></button>';
        html_code += '</div>';
        html_code += '</div>';
        $('#curd_tablefb').append(html_code);
    });
    $(document).on('click', '.remove', function(){
        var delete_row = $(this).data("row");
        $('#' + delete_row).remove();
    });
});

$(document).ready(function(){
    var count = 1;
    $('#addins').click(function(){
        count = count + 1;
        var html_code = '<div class="row row2'+count+'">';
        html_code += '<div class="col-xl-7">';
        html_code += '<input type="text" class="form-control" name="sowins_name[]" placeholder="Sow" value="">';
        html_code += '</div>';
        html_code += '<div class="col-xl-5">';
        html_code += '<div class="input-group row'+count+'">';
        html_code += '<input type="text" class="form-control" name="rateins[]" placeholder="Rate card" value="">';
        html_code += '<div class="input-group-append">';
        html_code += '<button class="btn btnminus remove" data-row="row2'+count+'" type="button"><i class="fas fa-minus-circle"></i></button>';
        html_code += '</div>';
        html_code += '</div>';
        $('#curd_tableins').append(html_code);
    });
    $(document).on('click', '.remove', function(){
        var delete_row = $(this).data("row");
        $('#' + delete_row).remove();
    });
});

$(document).ready(function(){
    var count = 1;
    $('#addyt').click(function(){
        count = count + 1;
        var html_code = '<div class="row row3'+count+'">';
        html_code += '<div class="col-xl-7">';
        html_code += '<input type="text" class="form-control" name="sowyt_name[]" placeholder="Sow" value="">';
        html_code += '</div>';
        html_code += '<div class="col-xl-5">';
        html_code += '<div class="input-group row'+count+'">';
        html_code += '<input type="text" class="form-control" name="rateyt[]" placeholder="Rate card" value="">';
        html_code += '<div class="input-group-append">';
        html_code += '<button class="btn btnminus remove" data-row="row3'+count+'" type="button"><i class="fas fa-minus-circle"></i></button>';
        html_code += '</div>';
        html_code += '</div>';
        $('#curd_tableyt').append(html_code);
    });
    $(document).on('click', '.remove', function(){
        var delete_row = $(this).data("row");
        $('#' + delete_row).remove();
    });
});

$(document).ready(function(){
    var count = 1;
    $('#addtk').click(function(){
        count = count + 1;
        var html_code = '<div class="row row4'+count+'">';
        html_code += '<div class="col-xl-7">';
        html_code += '<input type="text" class="form-control" name="sowtk_name[]" placeholder="Sow" value="">';
        html_code += '</div>';
        html_code += '<div class="col-xl-5">';
        html_code += '<div class="input-group row'+count+'">';
        html_code += '<input type="text" class="form-control" name="ratetk[]" placeholder="Rate card" value="">';
        html_code += '<div class="input-group-append">';
        html_code += '<button class="btn btnminus remove" data-row="row4'+count+'" type="button"><i class="fas fa-minus-circle"></i></button>';
        html_code += '</div>';
        html_code += '</div>';
        $('#curd_tabletk').append(html_code);
    });
    $(document).on('click', '.remove', function(){
        var delete_row = $(this).data("row");
        $('#' + delete_row).remove();
    });
});

$(document).ready(function(){
    var count = 1;
    $('#addoff').click(function(){
        count = count + 1;
        var html_code = '<div class="row row5'+count+'">';
        html_code += '<div class="col-xl-7">';
        html_code += '<input type="text" class="form-control" name="sowoff_name[]" placeholder="Sow" value="">';
        html_code += '</div>';
        html_code += '<div class="col-xl-5">';
        html_code += '<div class="input-group row'+count+'">';
        html_code += '<input type="text" class="form-control" name="rateoff[]" placeholder="Rate card" value="">';
        html_code += '<div class="input-group-append">';
        html_code += '<button class="btn btnminus remove" data-row="row5'+count+'" type="button"><i class="fas fa-minus-circle"></i></button>';
        html_code += '</div>';
        html_code += '</div>';
        $('#curd_tableoff').append(html_code);
    });
    $(document).on('click', '.remove', function(){
        var delete_row = $(this).data("row");
        $('#' + delete_row).remove();
    });
});

// $(document).ready(function(){
//     var count = 1;
//     $('#addnote').click(function(){
//         count = count + 1;
//         var html_code = "<div class='input-group' id='row2"+count+"'>";
//         html_code += "<input type='text' class='form-control' name='note_txt[]' placeholder='Note'>";
//         html_code += "<div class='input-group-append'>";
//         html_code += "<button class='btn btnminus removenote' data-row='row2"+count+"' type='button'><i class='fas fa-minus-circle'></i></button>";
//         html_code += "</div>";
//         html_code += "</div>";
//         $('#noteform').append(html_code);
//     });
//     $(document).on('click', '.removenote', function(){
//         var delete_row = $(this).data("row");
//         $('#' + delete_row).remove();
//     });
// });

// $(document).ready(function(){
//     var count = 1;
//     $('#addfb').click(function(){
//         count = count + 1;
//         var html_code = "<div class='input-group' id='row3"+count+"'>";
//         html_code += "<input type='text' class='form-control' name='in_fb[]' placeholder='Link ...' >";
//         html_code += "<div class='input-group-append'>";
//         html_code += "<button class='btn btnminus removefb' data-row='row3"+count+"' type='button'><i class='fas fa-minus-circle'></i></button>";
//         html_code += "</div>";
//         html_code += "</div>";
//         $('#postfb').append(html_code);
//     });
//     $(document).on('click', '.removefb', function(){
//         var delete_row = $(this).data("row");
//         $('#' + delete_row).remove();
//     });
// });

// $(document).ready(function(){
//     var count = 1;
//     $('#addins').click(function(){
//         count = count + 1;
//         var html_code = "<div class='input-group' id='row4"+count+"'>";
//         html_code += "<input type='text' class='form-control' name='in_ins[]' placeholder='Link ...' >";
//         html_code += "<div class='input-group-append'>";
//         html_code += "<button class='btn btnminus removeins' data-row='row4"+count+"' type='button'><i class='fas fa-minus-circle'></i></button>";
//         html_code += "</div>";
//         html_code += "</div>";
//         $('#postins').append(html_code);
//     });
//     $(document).on('click', '.removeins', function(){
//         var delete_row = $(this).data("row");
//         $('#' + delete_row).remove();
//     });
// });

// $(document).ready(function(){
//     var count = 1;
//     $('#addyt').click(function(){
//         count = count + 1;
//         var html_code = "<div class='input-group' id='row5"+count+"'>";
//         html_code += "<input type='text' class='form-control' name='in_yt[]' placeholder='Link ...' >";
//         html_code += "<div class='input-group-append'>";
//         html_code += "<button class='btn btnminus removeyt' data-row='row5"+count+"' type='button'><i class='fas fa-minus-circle'></i></button>";
//         html_code += "</div>";
//         html_code += "</div>";
//         $('#postyt').append(html_code);
//     });
//     $(document).on('click', '.removeyt', function(){
//         var delete_row = $(this).data("row");
//         $('#' + delete_row).remove();
//     });
// });

$(function () {
    $('[data-toggle="popover"]').popover({
        trigger:"hover"
    });
});

$(document).ready(function(){
    $(".btnrefresh").click(function(){
        $("#filterForm").trigger("reset");
    });
});

$(document).ready(function() {
    $(document).ready(function() {
        var dataTable = $('#dataTable').dataTable();
        $("#searchbox").keyup(function() {
            dataTable.fnFilter(this.value);
        });    
    });
    
    $('#dataTable').DataTable( {    
        "bInfo" : false,
        "pageLength": 10,
        "lengthChange": false,
        "language": {
            "paginate": {
                "previous": "Trước",
                "next": "Sau",
            }
        },
    } );
} );

$(document).ready(function(){
    $('#searchjob').on('keyup',function(event){
        event.preventDefault();
        var jobkey = $(this).val().toLowerCase();
        $('#dataTable2 tr').filter(function(){
            $(this).toggle($(this).text().toLowerCase().indexOf(jobkey)>-1);
        });
    });
});

$(document).ready(function(){
    $("#fbshow").click(function(){
        $(".pf2").hide();
        $(".pf3").hide();
        $(".pf1").show();
    });
});
$(document).ready(function(){
    $("#inshow").click(function(){
        $(".pf1").hide();
        $(".pf3").hide();
        $(".pf2").show();
    });
});
$(document).ready(function(){
    $("#ytshow").click(function(){
        $(".pf1").hide();
        $(".pf2").hide();
        $(".pf3").show();
    });
});