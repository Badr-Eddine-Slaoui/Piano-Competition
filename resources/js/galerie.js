function show_more_pics(start){
    let pics = document.querySelectorAll('.galerie-pics .galerie-pic-container')
    let end =  start + 6 >= pics.length ? pics.length : start + 6
    for (let i = start; i < end; i++) {
      pics[i].classList.remove('hidden')
      pics[i].classList.add('flex')
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
        vids[i].classList.add('flex')
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

function downloadVideoPoster(){
  const videos = document.querySelectorAll("video");
    videos.forEach((video,index) => {
      video.addEventListener("canplay", function () {
      const canvas = document.createElement('canvas');
      const ctx = canvas.getContext('2d');
      canvas.width = video.videoWidth;
      canvas.height = video.videoHeight;
      ctx.drawImage(video, 0, 0, canvas.width, canvas.height);
      const firstFrame = canvas.toDataURL('image/jpeg');
      const link = document.createElement('a');
      link.href = firstFrame;
      link.download = `galerie-${index+1}.jpg`;
      link.click();
      canvas.remove();
    });
  })
}

/* downloadVideoPoster() */

show_more_pics(0)
show_more_vids(0)
