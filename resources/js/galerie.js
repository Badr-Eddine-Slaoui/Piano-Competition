function show_more_pics(start){
    let pics = document.querySelectorAll('.galerie-pics .galerie-pic-container')
    let end =  start + 6 >= pics.length ? pics.length : start + 6
    for (let i = start; i < end; i++) {
        pics[i].classList.remove('hidden')
    }
    let btn = document.getElementById('show_more_pics')
    if (end == pics.length) {
        btn.classList.add('hidden')
    }else{
        btn.removeEventListener('click',()=>show_more_pics())
        btn.addEventListener('click',()=>show_more_pics(end))
    }
}

function show_more_vids(start){
    let vids = document.querySelectorAll('.galerie-vids .galerie-vid-container')
    let end =  start + 6 >= vids.length ? vids.length : start + 6
    for (let i = start; i < end; i++) {
        vids[i].classList.remove('hidden')
    }
    let btn = document.getElementById('show_more_vids')
    if (end == vids.length) {
        btn.classList.add('hidden')
    }else{
        btn.removeEventListener('click',()=>show_more_vids())
        btn.addEventListener('click',()=>show_more_vids(end))
    }
}

show_more_pics(0)
show_more_vids(0)
