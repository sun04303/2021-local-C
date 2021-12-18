let date = new Date();
let style = ""
let year
let month
let showList = []

set(date.getFullYear(), date.getMonth() + 1);

async function set(year1, month1) {
    year = year1
    month = month1

    showList = []

    await $.ajax({
        url : `/loadShow`,
        method : 'post',
        dataType : 'JSON',
        success : data => {
            data.forEach(item => {
                if(year == item.showDate.split('-')[0] && month == item.showDate.split('-')[1]) {
                    showList.push(item);
                }
            });
        }
    })

    let prevMonth = month - 1;
    let nextMonth = month + 1;
    let prev_year = next_year = year;

    if(month == 1) {
        prevMonth = 12;
        prev_year -= 1;
    } else if(month == 12) {
        nextMonth = 1;
        next_year += 1;
    }

    let prevYear = year - 1;
    let nextYear = year + 1;

    // 총일수
    let total = new Date(year, month, 0).getDate();
    // 시작 요일
    let start = new Date(year, month - 1, 1).getDay();
    // 총 몇 주
    let totalWeek = Math.ceil((total + start) / 7);
    // 마지막 요일
    let end = new Date(year, month, 0).getDay();

    $('.month table tbody').html("<tr class='btns'></tr>")

    let btns = `<th class="text-center">
                    <a href="${prevYear}&${month}"><i class="fas fa-angle-double-left"></i></a>
                </th>
                <th class="text-center">
                    <a href="${prev_year}&${prevMonth}"><i class="fas fa-angle-left"></i></a>
                </th>
                <th class="text-center" height="50" colspan="3">
                    <a href="${date.getFullYear()}&${date.getMonth() + 1}">${year}년 ${month}월</a>
                </th>
                <th class="text-center">
                    <a href="${next_year}&${nextMonth}"><i class="fas fa-angle-right"></i></a>
                </th>
                <th class="text-center">
                    <a href="${nextYear}&${month}"><i class="fas fa-angle-double-right"></i></a>
                </th>`

    $('.btns').html(btns)

    let info = `<tr class="info">
                    <th class="text-center" style="color: #ff6c21;" hight="30">일</td>
                    <th class="text-center">월</th>
                    <th class="text-center">화</th>
                    <th class="text-center">수</th>
                    <th class="text-center">목</th>
                    <th class="text-center">금</th>
                    <th class="text-center" style="color: #00f;">토</th>
                </tr>`
    $('.month table tbody').append(info)
    // 5. 화면에 표시할 화면의 초기값을 1로 설정
    let day=1;

    // 6. 총 주 수에 맞춰서 세로줄 만들기
    for(let i=1; i <= totalWeek; i++) {
        let tr = '<tr>'

        // 7. 총 가로칸 만들기
        for (j = 0; j < 7; j++) {
            
            tr += '<td class="text-center" height="180" width="200" valign="top">';
            // 8. 첫번째 주이고 시작요일보다 $j가 작거나 마지막주이고 $j가 마지막 요일보다 크면 표시하지 않음
            if ( !( (i == 1 && j < start) || (i == totalWeek && j > end) ) ) {

                if (j == 0) {
                    // 9. $j가 0이면 일요일이므로 빨간색
                    style = "holy";
                } else if (j == 6) {
                    // 10. $j가 0이면 토요일이므로 파란색
                    style = "blue";
                } else {
                    // 11. 그외는 평일이므로 검정색
                    style = "black";
                }

                // 12. 오늘 날짜면 굵은 글씨
                if (year == date.getFullYear() && month == date.getMonth() + 1 && day == date.getDate()) {
                    // 13. 날짜 출력
                    if(day < 10) {
                        tr += `<span style="font-weight: bold" class='${style}'>0${day}</span></td>`
                    } else {
                        tr += `<span style="font-weight: bold" class='${style}'>${day}</span></td>`
                    }
                } else {
                    if(day < 10) {
                        tr += `<span class='${style}'>0${day}</span></td>`
                    } else {
                        tr += `<span class='${style}'>${day}</span></td>`
                    }
                }
                // 14. 날짜 증가
                day++;
            }
        }
        tr += '</tr>'
        $('.month table').append(tr)
    }

    document.querySelectorAll('table td').forEach(item => {
        if(item.firstChild != null) {
            showList.forEach(item1 => {
                if(item.firstChild.innerHTML == item1.showDate.split('-')[2]) {
                    let div = document.createElement('a');
                    div.classList.add('showItem')
                    div.setAttribute('href', `/showEdit?target=${item1.showUid}`);
                    div.innerHTML = `<div>${item1.showName}</div> 
                                    <div>${dDay(item1.showDate)}</div>`
                    div.style.display = 'block'
                    item.appendChild(div)
                }
            })
        }
    })

    $('.btns').on('click', 'a', function(e) {
        e.preventDefault();
        let data = $(this).attr('href').split('&');
        set(Number(data[0]), Number(data[1]))
    })
}

// 일정 등록 팝업
$('.showBtn').on('click', function() {
    $('#show').modal('show')
})

$('.showcl').on('click', function() {
    $('#show').modal('hide')
})

$('.showEnroll').on('click', function() {
    if($('#showName').val() == "" || $('#showDate').val() == "" || $('#showTime').val() == "") {
        if($('#showName').val() == "") {
            $('#showName').css('border', '1px solid #f00');
        } else {
            $('#showName').css('border', '1px solid #ced4da');
        }

        if($('#showDate').val() == "") {
            $('#showDate').css('border', '1px solid #f00');
        } else {
            $('#showDate').css('border', '1px solid #ced4da');
        }

        if($('#showTime').val() == "") {
            $('#showTime').css('border', '1px solid #f00');
        } else {
            $('#showTime').css('border', '1px solid #ced4da');
        }
    } else {
        $.ajax({
            url:`/showDate`,
            method : 'post',
            data : {
                name : $('#showName').val(),
                date : $('#showDate').val(),
                time : $('#showTime').val(),
                organ : $('#organizer').val(),
                place : $('#place').val(),
                cast : $('#cast').val(),
                content : $('#rm').val()
            }
        })

        set(year, month)
        $('#show').modal('hide');
    }
})

function dDay(target) {
    let targetDate = new Date(target);

    let dis = targetDate.getTime() - date.getTime();
    let day = Math.floor(dis/(1000*60*60*24)) + 1;
    
    if(day < 0) {
        day = "end"
    } else if(day == 0) {
        day = "D-day"
    } else {
        day = 'D-'+day
    }

    return day;
}