//Dom Element
gsap.from('h1', {
    y: -50,
    duration: 1,
    opacity: 0,
})
gsap.from('.first-p', {
    y: 30,
    duration: 1,
    opacity: 0
})
const videos = gsap.utils.toArray('.video');
gsap.set(videos, {
    opacity: 0
})

videos.forEach((video) => {
    ScrollTrigger.create({
        trigger: video,
        start: 'top center',
        end: 'bottom center',
        onEnter: () => {
            gsap.to(video, {
                opacity: 1
            })
            video.play()
        },
        onEnterBack: () => video.play(),
        onLeave: () => video.pause(),
        onLeaveBack: () => video.pause(),
    })

});