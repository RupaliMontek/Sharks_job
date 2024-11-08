<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha384-k6RqeWeci5ZR/Lv4MR0sA0FfDOMi8Q8dM6m+6S1rnXY+z84tvj3enSHkfKj5p5t1" crossorigin="anonymous">
    <style>
        /*body {
            font-family: Arial, sans-serif;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }*/
        #videoContainer {
            position: relative;
            width: 640px;
            height: 480px;
            margin-bottom: 20px;
        }
        #preview, #recordedVideo {
            width: 100%;
            height: 100%;
            object-fit: cover;
            background-color: black;
        }
        #timerDisplay {
            position: absolute;
            top: 10px;
            left: 10px;
            background-color: rgba(0, 0, 0, 0.7);
            color: white;
            padding: 5px 10px;
            border-radius: 5px;
            font-size: 18px;
        }
        .controls {
            margin-top: 10px;
        }
        button {
            margin: 0 5px;
            padding: 10px 20px;
            font-size: 16px;
            cursor: pointer;
        }
        button:disabled {
            opacity: 0.5;
            cursor: default;
        }
    </style>
<div class="container-fluid onRegisteringtextOuter"> 
<div class="container"> 
    <div class="row">
        <div class="col-lg-4 col-sm-12">
    <ul class="onRegisteringtext">
        
<img width="100%" height="auto" src="<?php echo base_url() ?>frontend/images/jobprofile.png"/ alt="Job Profile">
      <h4>On registering, you can</h4>
    <li><i class="fa fa-angle-double-right"></i> Build your profile and let recruiters find you</li>
    <li><i class="fa fa-angle-double-right"></i> Get job postings delivered right to your email</li>
    <li><i class="fa fa-angle-double-right"></i> Find a job and grow your career</li>
  </ul>
  
  <ul class="onRegisteringtext">
      <h4>Job Openings</h4>
    <li><i class="fa fa-angle-double-right"></i> UI Designer at Montek Tech Services</li>
    <li><i class="fa fa-angle-double-right"></i> PHP Developer at Next Technologies</li>
    <li><i class="fa fa-angle-double-right"></i> UI Designer at Lakshmi Tech Services</li>
    <button style="margin-top:10px;" type="submit" class="btn btn-primary hvr-icon-forward">View All <i class="fa fa-chevron-circle-right hvr-icon"></i></button>
  </ul>
  
        </div>
        <div class="col-lg-6 col-sm-12">
<?php if ($this->session->flashdata("success") != "") { ?>
  <script>
    toastr.success('<?php echo $this->session->flashdata(
        "success"
    ); ?>', 'Success Alert', {timeOut: 8000})
  </script>
<?php } ?>
<?php if ($this->session->flashdata("error") != "") { ?>
  <script>
    toastr.error('<?php echo $this->session->flashdata(
        "error"
    ); ?>', {timeOut: 8000})
  </script>
<?php } ?>  
       <!-- <form class="forcreateaccount"> -->
        
        <?php
        $attributes = ["role" => "form", "id" => "candidate_registration"];
        echo form_open_multipart("Recruitment/Save_Candidate_register", $attributes);
        ?>
         <h1>Find a job & grow your career</h1>
  <div class="form-group">
    <label class="" for="exampleInputName">Name<span class="requireddd">*</span></label>
      <input type="text" class="form-control" name="candidate_name" id="candidate_name" placeholder="What is your name?">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Email ID / Username<span class="requireddd">*</span></label>
    <input type="email" class="form-control" name="candidate_email" id="candidate_email4" >
    <!--<div id="custom-error-message" style="display: none;">-->
    <!--<a id="canonicalLink" rel="canonical" href="#">-->
    <!--     Email Id Allready Register Please Click Here Profile View..</a>-->
    <!-- </div>-->
     <small id="emailHelp" class="form-text text-muted">We'll send you relevant jobs in your mail</small>
     
  </div>
  <div class="form-group">
                <label for="passwords">Enter Password <span style="color: red;">*</span></label>
                <div style="display: flex; align-items: center; position: relative;">
                    <input type="password" name="passwords" id="passwords" class="form-control" placeholder="Enter password" autocomplete="off" required>
                    <i class="fa fa-eye" id="togglePasswordIcon1" onclick="togglePasswordVisibility('passwords', 'togglePasswordIcon1')" style="position: absolute; right: 10px; cursor: pointer;"></i>
                </div>
            </div>
  
  <div class="form-group">
    <label for="exampleInputEmail1">Mobile Number<span class="requireddd">*</span></label>
  <input type="phone" class="form-control" name="phone" id="phone" aria-describedby="emailHelp" placeholder="Enter your 10 digit mobile no.">
    <small id="emailHelp" class="form-text text-muted">You will receive an OTP on this number.</small>
  </div>
  
   <div class="form-group">
    <label for="exampleInputEmail1">Department<span class="requireddd">*</span></label>
    <select onchange="get_role_select_department(this.value)" class="form-control" id="departments" name="departments">
            <option value="" selected>Select Department</option> 
            <?php foreach($departments as $row)
            { ?>
            <option value="<?php echo $row->dept_id; ?>"><?php echo $row->dept_name; ?></option>
            <?php } ?>
    </select>
    <input type="hidden" class="form-control" type="text" id="role_id" name="role_id" >
    <input type="hidden" class="form-control" type="text" id="previous_recording" name="previous_recording" >
    <input type="hidden" class="form-control" type="text" id="camera_recording" name="camera_recording" >
  </div>

<div class="form-group">
<label for="work_status">Work Status<span class="requireddd">*</span></label><br>
<div class="form-check form-check-inline">
    <input class="form-check-input" type="radio" name="work_status" id="work_status" value="Experienced">
  <label class="form-check-label" for="inlineCheckbox1">I'm Experienced<br>I have work experience (excluding internships)</label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" name="work_status" id="work_status" value="Fresher">
  <label class="form-check-label" for="inlineCheckbox2">I'm a Fresher<br>I am a student/ Haven't worked after graduation </label>
</div>
</div>

<div class="form-group">
    <label for="exampleFormControlFile1">Upload Resume<span class="requireddd">*</span></label>
    <input type="file" class="form-control-file" name="candidate_resume" id="candidate_resume">
    <small id="emailHelp" class="form-text text-muted">DOC, DOCx, PDF, RTF | Max: 2 MB</small>
    <p>Recruiters give first preference to candidates who have a resume</p>
  </div>
  
  
<div class="form-group">
    <label for="exampleFormControlFile1">Portfolio Upload<span class="requireddd">*</span></label>
    <input type="file" class="form-control-file" name="portfolio_upload" id="portfolio_upload">
    <small id="emailHelp" class="form-text text-muted">DOC, DOCx, PDF, RTF | Max: 2 MB</small>
 </div>

<div class="form-group">
    <label for="exampleFormControlFile1">Innovation Doc</label>
    <input type="file" class="form-control-file" name="experiment_doc" id="experiment_doc">
    <small id="emailHelp" class="form-text text-muted">DOC, DOCx, PDF, RTF | Max: 2 MB</small>
 </div> 
 <div class="form-group">
    <label for="exampleFormControlFile1">Upload Video<span class="requireddd">*</span></label>
    <label for="video">Record Video:</label>
     <label for="recordedVideo">Record Video</label>
         <label for="recordedVideo">Record Video</label>
         <div id="videoContainer">
        <video width="200" height="300" id="preview" autoplay muted></video>
        <div id="timerDisplay">00:00</div>
    </div>
    <div class="controls">
        <button type="button" id="startButton">Start Recording</button>
        <button type="button" id="stopButton" disabled>Stop Recording</button>
        <button type="button" id="saveButton" disabled>Save Recording</button>
    </div>
    <video id="recordedVideo" width="100" height="300" controls style="display: none;"></video>
  </div>

<!--<div class="form-group">
    <label for="exampleFormControlFile1">Video Introduction<span class="requireddd">*</span></label>
    <input type="file" class="form-control-file" name="video_introducation" id="video_introducation">
    <div id="uploadProgress"></div>
    <small id="emailHelp" class="form-text text-muted">mp4 | Max: 2 MB</small>
 </div>-->   
  
<div class="form-group">
    <label for="exampleFormControlFile1">Profile Picture<span class="requireddd">*</span></label>
    <input type="file" class="form-control-file" name="profile_picture" id="profile_picture">
    <small id="emailHelp" class="form-text text-muted">jpg,png,jpeg</small>
  </div>

  <div class="form-check form-group frspaceeecheckBoxx">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Send me important updates onWhatsApp <span class="fa fa-whatsapp"></span></label>
  </div>
  <button type="submit" class="btn btn-primary hvr-icon-forward">Register Now <i class="fa fa-chevron-circle-right hvr-icon"></i></button>
<?php echo form_close(); ?>
        </div>
        <div class="col-lg-2 col-sm-12">
          <div class="googleSignUpdesign mobilegooglesign">
<span class="foror main-1">OR</span> <a href="<?php echo @$login_google; ?>"><div class="google-sigup-square"><span class="signupwith main-2">Continue with</span><button class="socialbtn google resman-btn-tertiary resman-btn-medium" type="button" name="google-register"><span class="icon-holder"><img src="//static.naukimg.com/s/7/104/assets/images/google-icon.9273ac87.svg" class="socialIcnImg"></span><span class="google-text">Google</span></button></div></a></div>
        </div>
    </div>
  </div>
</div>
 <script>
    function togglePasswordVisibility(inputId, iconId) {
        var passwordInput = document.getElementById(inputId);
        var toggleIcon = document.getElementById(iconId);
        if (passwordInput.type === "password") {
            passwordInput.type = "text";
            toggleIcon.classList.remove("fa-eye");
            toggleIcon.classList.add("fa-eye-slash");
        } else {
            passwordInput.type = "password";
            toggleIcon.classList.remove("fa-eye-slash");
            toggleIcon.classList.add("fa-eye");
        }
    }
</script>     
<script src="https://cdn.jsdelivr.net/npm/@mediapipe/camera_utils@0.8.0/dist/camera_utils.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@mediapipe/face_mesh@0.8.0/dist/face_mesh.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@mediapipe/holistic@0.8.0/dist/holistic.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@mediapipe/pose@0.8.0/dist/pose.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@mediapipe/pose@0.8.0/dist/pose.js"></script>     
<script>
let mediaRecorder;
let recordedBlobs;
let stream;
let timerInterval;
let recordingTime = 120; // 2 minutes in seconds
const countdownDisplay = document.getElementById('timerDisplay');
const preview = document.getElementById('preview');
const startButton = document.getElementById('startButton');
const stopButton = document.getElementById('stopButton');
const saveButton = document.getElementById('saveButton');
const recordedVideo = document.getElementById('recordedVideo');

startButton.addEventListener('click', startRecording);
stopButton.addEventListener('click', stopRecording);
saveButton.addEventListener('click', saveRecording);
function startRecording() {
    recordedBlobs = [];
    $("#camera_recording").val("");
    // Request a new media stream if the previous one was stopped
    if (!stream) {
        navigator.mediaDevices.getUserMedia({ video: true, audio: true })
            .then(localStream => {
                preview.srcObject = localStream;
                stream = localStream;
                initializeRecorder();
            })
            .catch(error => {
                console.error('Error accessing media devices.', error);
            });
    } else {
        initializeRecorder();
    }
}

function initializeRecorder() {
    const mimeTypes = [
        'video/webm;codecs=vp9',
        'video/webm;codecs=vp8',
        'video/webm',
        'video/mp4'
    ];

    let options = mimeTypes.find(type => MediaRecorder.isTypeSupported(type));
    if (!options) {
        console.error('No supported MIME type found for MediaRecorder.');
        return;
    }

    console.log(`Using MIME type: ${options}`);
    try {
        mediaRecorder = new MediaRecorder(stream, { mimeType: options });
    } catch (e) {
        console.error('Exception while creating MediaRecorder:', e);
        return;
    }

    startButton.disabled = true;
    stopButton.disabled = false;
    saveButton.disabled = true;

    mediaRecorder.onstop = (event) => {
        console.log('Recorder stopped:', event);
        clearInterval(timerInterval);
        countdownDisplay.textContent = '00:00';

        // Stop all media tracks to turn off the camera
        stream.getTracks().forEach(track => track.stop());
        stream = null; // Reset the stream to null

        // Call save function when recording stops
        saveRecording();
    };
    mediaRecorder.ondataavailable = handleDataAvailable;
    mediaRecorder.start();
    console.log('MediaRecorder started', mediaRecorder);

    // Start countdown timer
    startTimer();
}

function startTimer() {
    let secondsLeft = recordingTime;
    updateTimerDisplay(secondsLeft);

    timerInterval = setInterval(() => {
        secondsLeft--;
        updateTimerDisplay(secondsLeft);

        if (secondsLeft <= 0) {
            stopRecording();
        }
    }, 1000);
}

function updateTimerDisplay(secondsLeft) {
    const minutes = Math.floor(secondsLeft / 60);
    const seconds = secondsLeft % 60;
    const formattedTime = `${minutes < 10 ? '0' : ''}${minutes}:${seconds < 10 ? '0' : ''}${seconds}`;
    countdownDisplay.textContent = formattedTime;
}

function stopRecording() {
    if (mediaRecorder && mediaRecorder.state !== 'inactive') {
        mediaRecorder.stop();
    }
    startButton.disabled = false;
    stopButton.disabled = true;
    saveButton.disabled = false;
    console.log('Recorded Blobs:', recordedBlobs);

    const superBuffer = new Blob(recordedBlobs, { type: 'video/webm' });
    const videoURL = window.URL.createObjectURL(superBuffer);

    // recordedVideo.src = videoURL;
    // recordedVideo.style.display = 'block';

    // Attempt to play the video
    /*recordedVideo.onloadeddata = () => {
        recordedVideo.play().catch(error => {
            console.error('Error playing video:', error);
        });
    };*/

    // Cleanup blob URL after use
    recordedVideo.onended = () => {
        window.URL.revokeObjectURL(videoURL);
        recordedVideo.style.display = 'none';
    };

    clearInterval(timerInterval);
    countdownDisplay.textContent = '00:00';
}

function handleDataAvailable(event) {
    console.log('Data available:', event);
    if (event.data && event.data.size > 0) {
        recordedBlobs.push(event.data);
        console.log('Blob added:', event.data);
    }
}

function saveRecording() {
    const blob = new Blob(recordedBlobs, { type: 'video/webm' });
    const url = 'https://sharksjob.com/index.php/Registration/upload';
    const previousRecording = $("#previous_recording").val(); // Correctly select the element by ID
    const formData = new FormData();
    formData.append('video', blob, 'recording.webm');
    formData.append('previous_recording', previousRecording); // Append the previous recording value

    fetch(url, {
        method: 'POST',
        body: formData
    })
    .then(response => response.json())
    .then(data => {
        console.log('Success:', data);
        // Update preview with the saved video path
        if (data.status === 'success' && data.file_path) {
            $("#camera_recording").val(data.file_path);
            $("#previous_recording").val(data.file_path);
            preview.src = data.file_path;
        }
    })
    .catch(error => {
        console.error('Error:', error);
    });
}
</script>
