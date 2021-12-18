// 수정

$('.showEdit').on('click', function(e) {
    if($('#showNameEdit').val() != "" && $('#showDateEdit').val() != "" && $('#showTimeEdit').val() != "") {
        e.preventDefault();
        $.ajax({
            url : `/showUpdate`,
            method : 'post',
            data : {
                id : $('#target').val(),
                name : $('#showNameEdit').val(),
                date : $('#showDateEdit').val(),
                time : $('#showTimeEdit').val(),
                organ : $('#organizerEdit').val(),
                place : $('#placeEdit').val(),
                cast : $('#castEdit').val(),
                content : $('#rmEdit').val()
            },
            success : () => {
                alert('수정 완료');
                location.href = "/month";
            }
        })
    }
})

// 삭제

$('.showDel').on('click', function(e) {
    $.ajax({
        url: `/showDel`,
        method : 'post',
        data : {a : $('#target').val()},
        success : () => {
            alert('삭제 완료');
            location.href = "/month";
        }
    })
})

//취소 

$('.showEditcl').on('click', function(e) {
    e.preventDefault();
    history.back();
})