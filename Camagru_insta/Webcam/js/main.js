let width = 500;
    height = 0;
    filter = 'none';
    streaming = false;

    const video = document.getElementById('video');
    const canvas = document.getElementById('canvas');
    const photos = document.getElementById('photos')
    const photoButton = document.getElementById('photo-button');
    const clearButton = document.getElementById('clear-button');
    const photoFilter = document.getElementById('photo-filter');

    navigator.mediaDevices.getUserMedia({video: true, audio: false})

    .then(function(stream){
        video.srcObject(stream);
    })
    .catch(fuction(err) {
        console.log(`Error: ${err}`);
    });
    //play when ready
    video.addEventListener('canplay', fuction(e){
        if(!streaming) {
            //set video / canvas height
            height = video.videoheight / (video.vedioWith / width);

            video.setAttribute('width', width);
            video.setAttribute('height', height);
            video.setAttribute('width', width);
            video.setAttribute('height', height);

            streaming = true;
        }
    }, false);

    photButtum.addEventListener('click', fuction(e) {
        takePicture();
        
        e.preventDefault();
    }, false);

    photoFilter.addEventListener('change', function(e) {
        //set filter to chosen option
        filter = e.target.value;
        //set filter to video
        video.style.filter = filter;

        e.preventDefault();
    });