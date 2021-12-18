let nihs;

// 문화재 정보가 담긴 xml파일 가져오기
fetch('/resource/restAPI/nihList.xml')
.then(res => res.text())
.then(data => {
    let parser = new DOMParser();
    let xml = parser.parseFromString(data, "text/xml");

    nihs = Array.from(xml.querySelectorAll("item")).map(nih => ({
        no : parseInt(nih.querySelector('no').innerHTML),
        kdcd : nih.querySelector('ccbaKdcd').innerHTML,
        ctcd : nih.querySelector('ccbaCtcd').innerHTML,
        asno : nih.querySelector('ccbaAsno').innerHTML
    }))
    upload(nihs)
})


async function upload(list) {
    for(let i = 0; i < list.length; i++) {
        let url = `/resource/restAPI/detail/${list[i].kdcd}_${list[i].ctcd}_${list[i].asno}.xml`;

        await fetch(url)
        .then(res => res.text())
        .then(data => {
            let parser = new DOMParser();
            let xml = parser.parseFromString(data, "text/xml");

            let item = {
                no : list[i].no,
                ccbaKdcd : xml.querySelector('ccbaKdcd').innerHTML,
                ccbaAsno : xml.querySelector('ccbaAsno').innerHTML,
                ccbaCtcd : xml.querySelector('ccbaCtcd').innerHTML,
                ccbaCpno : xml.querySelector('ccbaCpno').innerHTML,
                longitude : xml.querySelector('longitude').innerHTML,
                latitude : xml.querySelector('latitude').innerHTML,
                ccmaName : xml.querySelector('item ccmaName').innerHTML.split('[')[2].split(']')[0],
                crltsnoNm : xml.querySelector('item crltsnoNm').innerHTML,
                ccbaMnm1 : xml.querySelector('item ccbaMnm1').innerHTML.split('[')[2].split(']')[0],
                ccbaMnm2 : xml.querySelector('item ccbaMnm2').innerHTML.split('[')[2].split(']')[0],
                gcodeName : xml.querySelector('item gcodeName').innerHTML.split('[')[2].split(']')[0],
                bcodeName : xml.querySelector('item bcodeName').innerHTML.split('[')[2].split(']')[0],
                mcodeName : xml.querySelector('item mcodeName').innerHTML.split('[')[2].split(']')[0],
                scodeName : xml.querySelector('item scodeName').innerHTML.split('[')[2].split(']')[0],
                ccbaQuan : xml.querySelector('item ccbaQuan').innerHTML.split('[')[2].split(']')[0],
                ccbaAsdt : xml.querySelector('item ccbaAsdt').innerHTML.split('[')[2].split(']')[0],
                ccbaCtcdNm : xml.querySelector('item ccbaCtcdNm').innerHTML.split('[')[2].split(']')[0],
                ccsiName : xml.querySelector('item ccsiName').innerHTML.split('[')[2].split(']')[0],
                ccbaLcad : xml.querySelector('item ccbaLcad').innerHTML.split('[')[2].split(']')[0],
                ccceName : xml.querySelector('item ccceName').innerHTML.split('[')[2].split(']')[0],
                ccbaPoss : xml.querySelector('item ccbaPoss').innerHTML.split('[')[2].split(']')[0],
                ccbaAdmin : xml.querySelector('item ccbaAdmin').innerHTML.split('[')[2].split(']')[0],
                ccbaCncl : xml.querySelector('item ccbaCncl').innerHTML.split('[')[2].split(']')[0],
                ccbaCndt : xml.querySelector('item ccbaCndt').innerHTML.split('[')[2].split(']')[0],
                imageUrl : xml.querySelector('item imageUrl').innerHTML,
                content : xml.querySelector('item content').innerHTML.split('[')[2].split(']')[0].replace(/'/gi, "\\'")
            }
        
            $.ajax({
                url:`/upload`,
                traditional:true,
                data:{
                    a:JSON.stringify(item)
                },
                dataType:'JSON',
                method:'post'
            })
        })
    }
}