let page = 1
let nihs = [];
let target = ""
let target1 = ""

$.ajax({
    url:`/load`,
    data : {a : $('.search').html()},
    method:'post',
    dataType:'JSON',
    success : (data) => {
        data.forEach(item => {
            nihs.push(item)
        });

        albumLoad(page, nihs)
        let pages = pagination(nihs.length, 8, 10, page)
        $('#pagination').html(pages)
    }
})

document.querySelectorAll('.kind div').forEach(item => {
    item.addEventListener('click', e => {

        document.querySelector('.status .box .list').style.display = "none"
        document.querySelector('.status .box .list1').style.display = "none"

        document.querySelectorAll('.kind div').forEach(del => {
            del.classList.remove('chk');
        })

        e.target.classList.add('chk')

        if(e.target.innerHTML == "앨범형") {
            target = "앨범형";
            document.querySelector('.status .box .list').style.display = "flex"
            albumLoad(page, nihs);
        } else {
            target = "목록형"
            document.querySelector('.status .box .list1').style.display = "block"
            listLoad(page, nihs)
        }
    })
})

async function listLoad(page, list) {
    page = page || 1;
    $('.status .box .list1 tbody').html("");
    let limit = 10
    page = page > Math.ceil(list.length/limit) ? Math.ceil(list.length/limit) : page;
    let start = (page-1) * limit;
    let end;

    if(start + limit > list.length) {
        end = list.length
    } else {
        end = start + limit
    }

    for(let i = start; i < end; i++) {
        await $.ajax({
            url:`/load1`,
            method : 'post',
            data : {
                ccbaKdcd : list[i].ccbaKdcd,
                ccbaCtcd : list[i].ccbaCtcd,
                ccbaAsno : list[i].ccbaAsno
            },
            dataType : 'JSON',
            success : data => {
                let item = `<tr>
                                <td class="text-center">${data.sn}</td>
                                <td class="nm text-center"><a href="editnih?target=${data.sn}">${data.ccbaMnm1}</a></td>
                                <td class="text-center">${data.ccmaName}</td>
                                <td class="text-center">${data.crltsnoNm}호</td>
                                <td class="text-center">${data.ccbaAdmin}</td>
                            </tr>`
                $('.status .box .list1 tbody').append(item)
            }
        })
    }


    document.querySelectorAll('.status tbody .nm').forEach(item => {
        item.addEventListener('click', async function(e) {
            target1 = e.target.dataset.id
            await $.ajax({
                url:`/load2`,
                method:'post',
                data : {a:target1},
                dataType : 'JSON',
                success : data => {
                    $('#ccbaKdcd1').val(data.ccbaKdcd);
                    $('#ccbaAsno1').val(data.ccbaAsno);
                    $('#ccbaCtcd1').val(data.ccbaCtcd);
                    $('#ccbaCpno1').val(data.ccbaCpno);
                    $('#longitude1').val(data.longitude);
                    $('#latitude1').val(data.latitude);
                    $('#ccmaName1').val(data.ccmaName);
                    $('#crltsnoNm1').val(data.crltsnoNm);
                    $('#ccbaMnm11').val(data.ccbaMnm1);
                    $('#ccbaMnm21').val(data.ccbaMnm2);
                    $('#gcodeName1').val(data.gcodeName);
                    $('#bcodeName1').val(data.bcodeName);
                    $('#mcodeName1').val(data.mcodeName);
                    $('#scodeName1').val(data.scodeName);
                    $('#ccbaQuan1').val(data.ccbaQuan);
                    $('#ccbaAsdt1').val(data.ccbaAsdt);
                    $('#ccbaCtcdNm1').val(data.ccbaCtcdNm);
                    $('#ccsiName1').val(data.ccsiName);
                    $('#ccbaLcad1').val(data.ccbaLcad);
                    $('#ccceName1').val(data.ccceName);
                    $('#ccbaPoss1').val(data.ccbaPoss);
                    $('#ccbaAdmin1').val(data.ccbaAdmin);
                    $('#ccbaCncl1').val(data.ccbaCncl);
                    $('#ccbaCndt1').val(data.ccbaCndt);
                    $('#content1').val(data.content);
                }
            })

            $('#edit').modal('show');
        })
    })
    let pages = pagination(nihs.length, 10, 10, page)
    $('#pagination').html(pages)
}

async function albumLoad(page, list) {
    page = page || 1;
    $('.status .box .list').html("");
    let limit = 8
    let start = (page-1) * limit;
    let end;
    if(start + limit > list.length) {
        end = list.length
    } else {
        end = start + limit
    }
    
    for(let i = start; i<end; i++) {
        
        await $.ajax({
            url:'/load1',
            method:'post',
            data : {
                ccbaKdcd : list[i].ccbaKdcd,
                ccbaCtcd : list[i].ccbaCtcd,
                ccbaAsno : list[i].ccbaAsno
            },
            dataType : 'JSON',
            success : (data) => {
                console.log(data)
                let item = `<div class="item col-3">
                                <div class="card">
                                    <a href="editnih?target=${data.sn}"><img src="/photo?photo=${data.imageUrl}" class="card-img-top"></a>
                                    
                                    <div class="card-body">
                                        <h5 style="margin: 0;" class="card-title">${data.ccbaMnm1}</h5>
                                    </div>
                                </div>
                            </div>`
                $('.status .box .list').append(item);
            }
        })
    }

    let pages = pagination(nihs.length, 8, 10, page)
    $('#pagination').html(pages)
}

$('#pagination').on('click', '.page-link', function(e) {
    e.preventDefault();
    page = $(this).attr("href");
    page = Number(page)
    if(target == "목록형") {
        listLoad(page, nihs);
    } else {
        albumLoad(page, nihs)
    }
})

function pagination(total, item, block, page) {
    var total = total ? total : 0
    var item = item ? item : 10;
    var block = block ? block : 10;
    var curPage = page ? page : 1;

    var totalPage = Math.ceil(total/item);
    var totalBlock = Math.ceil(totalPage / block);
    var curBlock = Math.ceil(curPage / block);
    var firstPage = ((curBlock - 1) * block) + 1
    var lastPage = Math.min(totalPage, curBlock * block);
    var prevBlock = curBlock - 1;
    var nextBlock = curBlock + 1;
    var prevBlockPage = prevBlock * block;
    var nextBlockPage = nextBlock * block - (block - 1);

    $('.total-cnt').html("총 " + total + '건');
    $('.curpage').html(page + 'p')
    $('.endpage').html(totalPage + "p")

    var paginationblock = "<div aria-label='...'><ul style='margin: 0;' class='pagination justify-content-center'>";

	if( curPage > 1 ) paginationblock += "<li class='page-item'><a class='page-link' href='1'>&laquo;</a></li>";
	else paginationblock +=  "<li class='page-item disabled'><a class='page-link' href='1' tabindex='-1' aria-disabled='true'>&laquo;</a></li>";

	if( prevBlock > 0 ) paginationblock += "<li class='page-item'><a class='page-link' href='" + prevBlockPage + "'>&lt;</a></li>";
	else paginationblock += "<li class='page-item disabled'><a class='page-link' href='#!' tabindex='-1' aria-disabled='true'>&lt;</a></li>";

	for ( var i=firstPage; i <= lastPage; i++ ) {
		if(i != curPage) paginationblock +=  `<li class='page-item'><a class='page-link' href='${i}'>${i}</a></li>`;
		else paginationblock +=  `<li class='page-item active' aria-current='page'><a class='page-link' href='${i}'>${i}</a></li>`;
	}

	if( nextBlock <= totalBlock ) paginationblock += "<li class='page-item'><a class='page-link' href='" + nextBlockPage + "'>&gt;</a></li>";
	else paginationblock +=  "<li class='page-item disabled'><a class='page-link' href='#!' tabindex='-1' aria-disabled='true'>&gt;</a></li>";
	
	if( curPage < totalPage ) paginationblock += "<li class='page-item'><a class='page-link' href='" + totalPage + "'>&raquo;</a></li>";
	else paginationblock +=  "<li class='page-item disabled'><a class='page-link' href='#!' tabindex='-1' aria-disabled='true'>&raquo;</a></li>";

	paginationblock += "</ul></div>";

	return paginationblock;
}


$('.nihen').on('click', function() {
    $('#enroll').modal('show');
})

$('.enroll').on('click', function() {
    if(cheak(1)) {
        let list = {
            no : 0,
            ccbaKdcd : $('#ccbaKdcd').val(),
            ccbaAsno : $('#ccbaAsno').val(),
            ccbaCtcd : $('#ccbaCtcd').val(),
            ccbaCpno : $('#ccbaCpno').val(),
            longitude : $('#longitude').val(),
            latitude : $('#latitude').val(),
            ccmaName : $('#ccmaName').val(),
            crltsnoNm : $('#crltsnoNm').val(),
            ccbaMnm1 : $('#ccbaMnm1').val(),
            ccbaMnm2 : $('#ccbaMnm2').val(),
            gcodeName : $('#gcodeName').val(),
            bcodeName : $('#bcodeName').val(),
            mcodeName : $('#mcodeName').val(),
            scodeName : $('#scodeName').val(),
            ccbaQuan : $('#ccbaQuan').val(),
            ccbaAsdt : $('#ccbaAsdt').val(),
            ccbaCtcdNm : $('#ccbaCtcdNm').val(),
            ccsiName : $('#ccsiName').val(),
            ccbaLcad : $('#ccbaLcad').val(),
            ccceName : $('#ccceName').val(),
            ccbaPoss : $('#ccbaPoss').val(),
            ccbaAdmin : $('#ccbaAdmin').val(),
            ccbaCncl : $('#ccbaCncl').val(),
            ccbaCndt : $('#ccbaCndt').val(),
            imageUrl : $('#image').val(),
            content : $('#content').val()
        }
    
        $.ajax({
            url:`/upload`,
            method : 'post',
            data : {
                a:JSON.stringify(list)
            },
            dataType : 'JSON',
            success : () => {
                location.href = `/sub1?search=${$('.search').html()}`
            }
        })
    }
})

$('.del').on('click', function() {
    $.ajax({
        url:`/del`,
        method : 'post',
        data : {a:target1},
        success : () => {
            location.href = `/sub1?search=${$('.search').html()}`
        }
    })
})

function cheak(mode) {
    let cnt = 0;
    if(mode == 1) {
        if($('#ccbaKdcd').val() == "") {
            $('#ccbaKdcd').css('border', '1px solid #f00')
            cnt++
        } else {
            $('#ccbaKdcd').css('border', '1px solid #ced4da')
        }
        
        if($('#ccbaAsno').val() == "") {
            $('#ccbaAsno').css('border', '1px solid #f00')
            cnt++
        } else {
            $('#ccbaAsno').css('border', '1px solid #ced4da')
        }

        if($('#ccbaCtcd').val() == "") {
            $('#ccbaCtcd').css('border', '1px solid #f00')
            cnt++
        } else {
            $('#ccbaCtcd').css('border', '1px solid #ced4da')
        }

        if($('#ccmaName').val() == "") {
            $('#ccmaName').css('border', '1px solid #f00')
            cnt++
        } else {
            $('#ccmaName').css('border', '1px solid #ced4da')
        }

        if($('#crltsnoNm').val() == "") {
            $('#crltsnoNm').css('border', '1px solid #f00')
            cnt++
        } else {
            $('#crltsnoNm').css('border', '1px solid #ced4da')
        }

        if($('#ccbaMnm1').val() == "") {
            $('#ccbaMnm1').css('border', '1px solid #f00')
            cnt++
        } else {
            $('#ccbaMnm1').css('border', '1px solid #ced4da')
        }

        return cnt > 0 ? false : true;
    } else {
        if($('#ccbaKdcd1').val() == "") {
            $('#ccbaKdcd1').css('border', '1px solid #f00')
            cnt++
        } else {
            $('#ccbaKdcd1').css('border', '1px solid #ced4da')
        }
        
        if($('#ccbaAsno1').val() == "") {
            $('#ccbaAsno1').css('border', '1px solid #f00')
            cnt++
        } else {
            $('#ccbaAsno1').css('border', '1px solid #ced4da')
        }
        
        if($('#ccbaCtcd1').val() == "") {
            $('#ccbaCtcd1').css('border', '1px solid #f00')
            cnt++
        } else {
            $('#ccbaCtcd1').css('border', '1px solid #ced4da')
        }

        if($('#ccmaName1').val() == "") {
            $('#ccmaName1').css('border', '1px solid #f00')
            cnt++
        } else {
            $('#ccmaName1').css('border', '1px solid #ced4da')
        }
        
        if($('#crltsnoNm1').val() == "") {
            $('#crltsnoNm1').css('border', '1px solid #f00')
            cnt++
        } else {
            $('#crltsnoNm1').css('border', '1px solid #ced4da')
        }
        
        if($('#ccbaMnm11').val() == "") {
            $('#ccbaMnm11').css('border', '1px solid #f00')
            cnt++
        } else {
            $('#ccbaMnm11').css('border', '1px solid #ced4da')
        }
        
        return cnt > 0 ? false : true;
    }
}