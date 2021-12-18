let list = []
let tabList = []
let target = "전체"

// 데이터 가져오기
fetch('/restAPI/phone.php')
.then(res => res.json())
.then(data => {
    if(data.statusCd == "200") {
        data.items.forEach(item => {
            list.push(item)
        });
    
        list.sort((a, b) => {
            let aa = a.deptNm;
            let bb = b.deptNm;
    
            return aa > bb ? 1 : -1
        })
    
        list.forEach(item => {
            if(tabList.indexOf(item.deptNm) == -1) {
                tabList.push(item.deptNm)
            }
        })
    
        load()
        loadItem()
    } else {
        alert(data.statusMsg)
        location.href = "/index.html"
    }
})

// 탭 생성
function load() {
    $('.tab-menu').html("<span class='sel'>전체</span>");

    tabList.forEach(item => {
        let span = `<span>${item}</span>`
        $('.tab-menu').append(span)
    })

    $('.tab-menu').on('click', 'span', function(e) {
        $('.tab-menu span').removeClass('sel')
        $(this).addClass('sel')
        target = $(this).html();
        loadItem()
    })
}

// 선택한 탭 메뉴 생성
function loadItem() {
    if(target != "전체") {
    $('.phone .list').html(`<h4 class="title"></h4>
                            <div class="box">

                            </div>`)
    $('.phone .list .title').html(target)
        list.forEach(item => {
            if(item.deptNm == target) {
                let span = `<div class="item">
                                <span>${item.name}</span>
                                <span>${item.telNo}</span>
                            </div>`
                $('.phone .box .box').append(span)
            }
        })
    } else {
        $('.phone .list').html('')
        tabList.forEach(item => {
            let asd = `<h4 class="title">${item}</h4>
                       <div class="${item}box"></div>`
            $('.phone .list').append(asd)

            list.forEach(item1 => {
                if(item == item1.deptNm) {
                    let span = `<div class="item">
                                    <span>${item1.name}</span>
                                    <span>${item1.telNo}</span>
                                </div>`
                    $(`.${item}box`).append(span)
                }
            })
        })
    }
}