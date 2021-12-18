let date = new Date();
let year
let showList = []
let itemList = []

window.addEventListener('load', () => {
    load(date.getFullYear());
})

async function load(year1) {
    year = year1

    await $.ajax({
        url : `/loadShow`,
        method : 'post',
        dataType : 'json',
        success : (data) => {
            showList = []
            itemList = []
            data.forEach(item => {
                if(year == item.showDate.split('-')[0]) {
                    showList.push(item)
                }
            });

            showList.forEach(item1 => {
                if(itemList.indexOf(Number(item1.showDate.split('-')[1])) == -1) {
                    itemList.push(Number(item1.showDate.split('-')[1]))
                }
            })

            showList.sort((a, b) => {
                let dateA = new Date(a.showDate).getTime();
                let dateB = new Date(b.showDate).getTime();
                return dateA > dateB ? 1 : -1;
            })
        }
    })

    let prevYear =  year - 1;
    let nextYear =  year + 1;

    let tr = `<tr>
                <th class="text-center">
                    <a href="${prevYear}"><i class="fas fa-angle-left"></i></a>
                </th>
                <th class="text-center" height="50" colspan="3">
                    <a href="${date.getFullYear()}">${year}년</a>
                </th>
                <th class="text-center">
                    <a href="${nextYear}"><i class="fas fa-angle-right"></i></a>
                </th>
              </tr>`
    $('.table').html(tr);
    $('.container .box').html("")
    itemList.forEach(item2 => {
        let item4 = `<div class="item col-6"><h4>${item2}월</h4><div class="list">`
        showList.forEach(item3 => {
            if(item2 == item3.showDate.split('-')[1]) {
                item4 += `<div class="content">
                            <span>${item3.showDate.split('-')[2]}일</span>
                            <a href="/showEdit?target=${item3.showUid}" class="showName">${item3.showName}</a>
                            <span style="font-weight: bold;" class="dDay">${dDay(item3.showDate)}</span>
                        </div>`
            }
        })

        item4 += `</div></div>`

        $('.container .box').append(item4)
    })

    $('table').on('click', 'a', function(e) {
        e.preventDefault();
        let data = $(this).attr('href');
        load(Number(data))
    })
}

function dDay(target) {
    let targetDate = new Date(target);

    let dis = targetDate.getTime() - date.getTime();
    let day = Math.floor(dis/(1000*60*60*24));
    
    if(day < 0) {
        day = "end"
    } else if(day == 0) {
        day = "D-day"
    } else {
        day += 1
        day = 'D-'+day
    }

    return day;
}