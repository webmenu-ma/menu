document.querySelector('meta[name="theme-color"]').setAttribute('content','#FFFFFF');
document.getElementById('name-restaurant').innerHTML = nmrest;
const elphone = document.getElementById('p-phone');
if(phn != '' || phn != ' '){
    elphone.innerHTML = phn;
    elphone.style.display = '';
}
const elinst = document.getElementById('a-inst');
if(linkinst != '' || linkinst != ' '){
    elinst.setAttribute('href', linkinst);
    elinst.style.display = '';
}
const elfb = document.getElementById('a-fb');
if(linkfb != '' || linkfb != ' '){
    elfb.setAttribute('href', linkfb);
    elfb.style.display = '';
}
//////
const elmenu = document.getElementById('menu');
const a = menujson;
window.onload = ()=>{
    var m = a.lists;
    if(m.length > 0){
        var el = ``;
        for(var i=0;i<m.length;i++){
            var els = ``;
            var mm = m[i];
            var nms = unescapeJsonString(mm.nms);
            for(var j=0;j<mm.list.length;j++){
                var mmm = mm.list[j];
                els+= `<div class="ctg-row">
                                <p class="nm">${unescapeJsonString(mmm.nm)}</p>
                                <p class="desc">${unescapeJsonString(mmm.desc)}</p>
                                <p class="pr">${mmm.pr}</p>
                            </div>`;
            }
            el+= `<div class="b-ctg">
                        <p class="ctg-name">${nms}</p>
                        ${els}
                    </div>`;
        }
        elmenu.innerHTML = el;
    }
}