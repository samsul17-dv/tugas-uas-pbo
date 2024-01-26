function toggleActive(element) {
    var icons = document.querySelectorAll('.navbar-icon');
    icons.forEach(function (icon) {
        icon.classList.remove('active-icon');
    });
    element.classList.add('active-icon');
}

let currentCamera = 'environment'; 

async function openCameraPopup() {
    var cameraPopup = document.getElementById('cameraPopup');
    var cameraPreview = document.getElementById('cameraPreview');
    var successCard = document.getElementById('successCard');
    var successDetails = document.getElementById('successDetails');
    var toggleCameraBtn = document.getElementById('toggleCameraBtn'); 

    cameraPopup.style.display = 'flex';

    try {
        const stream = await navigator.mediaDevices.getUserMedia({
            video: { facingMode: currentCamera }
        });

        cameraPreview.srcObject = stream;

        const codeReader = new ZXing.BrowserQRCodeReader();

        codeReader.decodeOnceFromVideoDevice(undefined, 'cameraPreview')
            .then(result => {
                if (result) {
                    cameraPreview.style.display = 'none';

                    successCard.style.display = 'block';
                    successDetails.textContent = result.text;

                    playSuccessSound();

                    setTimeout(() => {
                        closeCameraPopup();
                    }, 2000);
                }
            })
            .catch(err => {
                console.error('Barcode detection error: ', err);
            });

        toggleCameraBtn.addEventListener('click', toggleCamera);
    } catch (error) {
        console.error('Error accessing webcam: ', error);
    }
}

function toggleCamera() {
    currentCamera = currentCamera === 'environment' ? 'user' : 'environment';
    openCameraPopup(); 
}

function playSuccessSound() {
    var successSound = new Audio('sound/arigato.mp3');
    successSound.play();
}

function closeCameraPopup() {
    var cameraPopup = document.getElementById('cameraPopup');
    var successCard = document.getElementById('successCard');

    cameraPopup.style.display = 'none';
    successCard.style.display = 'none';
}
