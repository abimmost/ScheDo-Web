// to get current year
function getYear() {
    var currentDate = new Date();
    var currentYear = currentDate.getFullYear();
    document.querySelector("#displayYear").innerHTML = currentYear;
}

getYear();


// client section owl carousel
$(".client_owl-carousel").owlCarousel({
    loop: true,
    margin: 20,
    dots: false,
    nav: true,
    navText: [],
    autoplay: true,
    autoplayHoverPause: true,
    navText: [
        '<i class="fa fa-angle-left" aria-hidden="true"></i>',
        '<i class="fa fa-angle-right" aria-hidden="true"></i>'
    ],
    responsive: {
        0: {
            items: 1
        },
        600: {
            items: 2
        },
        1000: {
            items: 2
        }
    }
});



/** google_map js **/
function myMap() {
    var mapProp = {
        center: new google.maps.LatLng(40.712775, -74.005973),
        zoom: 18,
    };
    var map = new google.maps.Map(document.getElementById("googleMap"), mapProp);
}
  
  // Custom function to toggle password visibility
  function togglePasswordVisibility (fieldId) {
    var field = document.getElementById(fieldId);
    if (field.type === "password") {
      field.type = "text";
    } else {
      field.type = "password";
    }
}
  function confirmLogout() {
            if (confirm('Are you sure you want to logout?')) {
                document.getElementById('logout-form').submit();
            }
}
        
function toggleTaskStatus(taskId) {
    const taskDesc = document.getElementById(`task-desc-${taskId}`);
    const taskDue = document.getElementById(`task-due-${taskId}`);
    const taskStatus = document.getElementById(`task-status-${taskId}`);
    const checkbox = document.getElementById(`task${taskId}`);

    if (checkbox.checked) {
        taskDesc.style.textDecoration = 'line-through';
        taskDue.style.textDecoration = 'line-through';
        taskStatus.textContent = 'completed';
        document.querySelector(`#form-task-${taskId} input[name="status"]`).value = 1;
    } else {
        taskDesc.style.textDecoration = 'none';
        taskDue.style.textDecoration = 'none';
        taskStatus.textContent = 'pending';
        document.querySelector(`#form-task-${taskId} input[name="status"]`).value = 0;
    }
}

function confirmDelete() {
    return confirm('Are you sure you want to delete this task?');
}