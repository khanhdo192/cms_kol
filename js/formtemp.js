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
            source: ['Bread n tea'],
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
        var html_code = '<div class="row row'+count+'">';
        html_code += '<div class="col-xl-7">';
        html_code += '<input type="text" class="form-control inputform" name="sowfb_name[]" placeholder="Sow" value="">';
        html_code += '</div>';
        html_code += '<div class="col-xl-5">';
        html_code += '<div class="form-row row'+count+'">';
        html_code += '<div class="col-xl-10">';
        html_code += '<input type="text" class="form-control inputform" name="ratefb[]" placeholder="Rate card" value="">';
        html_code += '</div>';
        html_code += '<div class="col-xl-2">';
        html_code += '<span class="minusinput remove" data-row="row'+count+'"><i style="margin-top:10px;" class="fas fa-times"></i></span>';
        html_code += '</div>';
        html_code += '</div>';
        $('#curd_tablefb').append(html_code);
    });
    $(document).on('click', '.remove', function(){
        var delete_row = $(this).data("row");
        $('.' + delete_row).remove();
    });
});

$(document).ready(function(){
    var count = 1;
    $('#addins').click(function(){
        count = count + 1;
        var html_code = '<div class="row row2'+count+'">';
        html_code += '<div class="col-xl-7">';
        html_code += '<input type="text" class="form-control inputform" name="sowins_name[]" placeholder="Sow" value="">';
        html_code += '</div>';
        html_code += '<div class="col-xl-5">';
        html_code += '<div class="form-row row2'+count+'">';
        html_code += '<div class="col-xl-10">';
        html_code += '<input type="text" class="form-control inputform" name="rateins[]" placeholder="Rate card" value="">';
        html_code += '</div>';
        html_code += '<div class="col-xl-2">';
        html_code += '<span class="minusinput remove" data-row="row2'+count+'"><i style="margin-top:10px;" class="fas fa-times"></i></span>';
        html_code += '</div>';
        html_code += '</div>';
        $('#curd_tableins').append(html_code);
    });
    $(document).on('click', '.remove', function(){
        var delete_row = $(this).data("row");
        $('.' + delete_row).remove();
    })
});

$(document).ready(function(){
    var count = 1;
    $('#addyt').click(function(){
        count = count + 1;
        var html_code = '<div class="row row3'+count+'">';
        html_code += '<div class="col-xl-7">';
        html_code += '<input type="text" class="form-control inputform" name="sowyt_name[]" placeholder="Sow" value="">';
        html_code += '</div>';
        html_code += '<div class="col-xl-5">';
        html_code += '<div class="form-row row3'+count+'">';
        html_code += '<div class="col-xl-10">';
        html_code += '<input type="text" class="form-control inputform" name="rateyt[]" placeholder="Rate card" value="">';
        html_code += '</div>';
        html_code += '<div class="col-xl-2">';
        html_code += '<span class="minusinput remove" data-row="row3'+count+'"><i style="margin-top:10px;" class="fas fa-times"></i></span>';
        html_code += '</div>';
        html_code += '</div>';
        $('#curd_tableyt').append(html_code);
    });
    $(document).on('click', '.remove', function(){
        var delete_row = $(this).data("row");
        $('.' + delete_row).remove();
    });
});

$(document).ready(function(){
    var count = 1;
    $('#addtk').click(function(){
        count = count + 1;
        var html_code = '<div class="row row4'+count+'">';
        html_code += '<div class="col-xl-7">';
        html_code += '<input type="text" class="form-control inputform" name="sowtk_name[]" placeholder="Sow" value="">';
        html_code += '</div>';
        html_code += '<div class="col-xl-5">';
        html_code += '<div class="form-row row4'+count+'">';
        html_code += '<div class="col-xl-10">';
        html_code += '<input type="text" class="form-control inputform" name="ratetk[]" placeholder="Rate card" value="">';
        html_code += '</div>';
        html_code += '<div class="col-xl-2">';
        html_code += '<span class="minusinput remove" data-row="row4'+count+'"><i style="margin-top:10px;" class="fas fa-times"></i></span>';
        html_code += '</div>';
        html_code += '</div>';
        $('#curd_tabletk').append(html_code);
    });
    $(document).on('click', '.remove', function(){
        var delete_row = $(this).data("row");
        $('.' + delete_row).remove();
    });
});

$(document).ready(function(){
    var count = 1;
    $('#addoff').click(function(){
        count = count + 1;
        var html_code = '<div class="row row5'+count+'">';
        html_code += '<div class="col-xl-7">';
        html_code += '<input type="text" class="form-control inputform" name="sowoff_name[]" placeholder="Sow" value="">';
        html_code += '</div>';
        html_code += '<div class="col-xl-5">';
        html_code += '<div class="form-row row5'+count+'">';
        html_code += '<div class="col-xl-10">';
        html_code += '<input type="text" class="form-control inputform" name="rateoff[]" placeholder="Rate card" value="">';
        html_code += '</div>';
        html_code += '<div class="col-xl-2">';
        html_code += '<span class="minusinput remove" data-row="row5'+count+'"><i style="margin-top:10px;" class="fas fa-times"></i></span>';
        html_code += '</div>';
        html_code += '</div>';
        $('#curd_tableoff').append(html_code);
    });
    $(document).on('click', '.remove', function(){
        var delete_row = $(this).data("row");
        $('.' + delete_row).remove();
    });
});