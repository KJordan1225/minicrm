<x-public-layout>
    
<div class="container">    
    <div class="card mt-5">
        <h3 class="card-header p-3">Gamma Alpha Event Calendar</h3>
        <div class="card-body">
            <div id='calendar'></div>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
   <div class="modal-dialog modal-lg">
      <div class="modal-content">
       <div class="modal-header">
         <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
         <h4 class="modal-title" id="myModalLabel"> Add Event Details </h4>
       </div>
       <div class="modal-body" id="getCode" style="overflow-x: scroll;">
       <form action="#" id="eventForm">
            <div>
                <label for="title">Title:</label>
                <input type="text" id="title" name="title" class="form-control" required>
            </div>
            <div>
                <label for="start">Select a start datetime:</label>
                <input type="datetime-local" id="start" name="start" class="form-control" required>
            </div>
            <div>
                <label for="end">Select a end datetime:</label>
                <input type="datetime-local" id="end" name="end" class="form-control">
            </div> 
            <div>
                <label for="desc">Enter description:</label>
                <textarea name="desc" id="desc" rows="5" cols="35" wrap="soft" class="form-control tinyMce"></textarea>
            </div>
            <div>
                <label for="desc">Event Image:</label>
                <input name="image_path" id="image_path" type="file" />
            </div>
            <div class="modal-footer">
                <input type="submit" class="btn btn-primary" id="uploadImage" />
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
            </div> 
        </form>            
       </div>
    </div>
   </div>
 </div> 



<!-- Modal -->
<div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
   <div class="modal-dialog modal-lg">
      <div class="modal-content">
       <div class="modal-header">
         <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
         <h4 class="modal-title" id="myModalLabel2">View Event Details</h4>
       </div>
       <div class="modal-body" id="getCode" style="overflow-x: scroll;">
        <style>
            .image-container {
                width: 300px;
                height: 300px;
                display: flex;
                justify-content: center;
                align-items: center;
                overflow: hidden;
                border: 1px solid #ccc; /* Optional border */
            }

            .image-container img {
                width: 100%;
                height: 100%;
                object-fit: cover; /* Ensures the image fills the container */
            }
        </style>
            <div class="image-container">
                <img src="{{ asset('images/1732844125.jpg') }}" alt="Image Description" id="mod2eventimg">
            </div>
            <div class="container mt-4">
            <!-- First Row -->
            <div class="row mb-3">
                <div class="col-md-3">
                    <p class="fw-bold">Start:</p>
                </div>
                <div class="col-md-9">
                    <p id="1strowstart">Dynamic Text 1</p>
                </div>
            </div>
            <!-- Second Row -->
            <div class="row">
                <div class="col-md-3">
                    <p class="fw-bold">End:</p>
                </div>
                <div class="col-md-9">
                    <p id="2ndrowend">Dynamic Text 2</p>
                </div>
            </div>
        </div>
            <div id="result"></div>
            <input type="hidden" id="eventId" name="eventId" value="" />
       </div>
       <div class="modal-footer">            
            <button type="button" class="btn btn-primary" id="editEvent" data-bs-dismiss="modal">Edit Event</button>
            <button type="button" class="btn btn-danger" id="deleteEvent" data-bs-dismiss="modal">Delete Event</button>
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
        </div> 
    </div>
   </div>
 </div> 



<!-- Modal -->
<div class="modal fade" id="exampleModal3" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
   <div class="modal-dialog modal-lg">
      <div class="modal-content">
       <div class="modal-header">
         <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
         <h4 class="modal-title" id="myModalLabel"> Add Event Details </h4>
       </div>
       <div class="modal-body" id="getCode" style="overflow-x: scroll;">
            <div id="result"></div>
       </div>
       <div class="modal-footer"> 
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
        </div> 
    </div>
   </div>
 </div> 



<!-- Modal -->
<div class="modal fade" id="exampleModal4" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
   <div class="modal-dialog modal-lg">
      <div class="modal-content">
       <div class="modal-header">
         <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
         <h4 class="modal-title" id="myModalLabel"> Edit Event Details </h4>
       </div>
       <div class="modal-body" id="getCode" style="overflow-x: scroll;">
       <form action="#" id="eventForm">
            <div>
                <label for="title">Title:</label>
                <input type="text" 
					id="mytitle" 
					name="mytitle" 
					class="form-control" 
					value=""
					required>
            </div>
            <div>
                <label for="start">Select a start datetime:</label>
                <input type="datetime-local" 
					id="mystart" 
					name="mystart" 
					class="form-control" 
					value=""
					required>
            </div>
            <div>
                <label for="end">Select a end datetime:</label>
                <input type="datetime-local" 
					id="myend" 
					name="myend" 
					class="form-control" 
					value=""
					required>
            </div> 
            <div>
                <label for="desc">Enter description:</label>
                <textarea name="mydesc" 
					id="mydesc" 
					rows="5" 
					cols="35" 
					wrap="soft"
					class="form-control tinyMce">
						
					</textarea>
            </div>
            <div>
                <label for="image_path">Event Image:</label>
                <input name="myimage_path" id="myimage_path" type="file" required />
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" id="updateEvent" >Update Event</button>
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
            </div> 
        </form>            
       </div>
    </div>
   </div>
 </div> 



  
<script type="text/javascript">
  
$(document).ready(function () {
    
      
    /*------------------------------------------
    --------------------------------------------
    Get Site URL
    --------------------------------------------
    --------------------------------------------*/
    var SITEURL = "{{ url('/') }}";
    
    /*------------------------------------------
    --------------------------------------------
    CSRF Token Setup
    --------------------------------------------
    --------------------------------------------*/
    $.ajaxSetup({
        headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
      
    /*------------------------------------------
    --------------------------------------------
    FullCalender JS Code
    --------------------------------------------
    --------------------------------------------*/
    var calendar = $('#calendar').fullCalendar({
                    editable: true,
                    events: SITEURL + "/fullcalender",
                    displayEventTime: false,
                    editable: true,
                    eventRender: function (event, element, view) {
                        if (event.allDay === 'true') {
                                event.allDay = true;
                        } else {
                                event.allDay = false;
                        }
                    },
                    selectable: true,
                    selectHelper: true,
                    select: function (start, end, allDay) {
                        $("#exampleModal").modal('show');
                    },
                    eventDrop: function (event, delta) {
                        var start = $.fullCalendar.formatDate(event.start, "Y-MM-DD");
                        var end = $.fullCalendar.formatDate(event.end, "Y-MM-DD");
  
                        $.ajax({
                            url: SITEURL + '/fullcalenderAjax',
                            data: {
                                title: event.title,
                                start: start,
                                end: end,
                                id: event.id,
                                type: 'update'
                            },
                            type: "POST",
                            success: function (response) {
                                displayMessage("Event Updated Successfully");
                            },
							error: function (xhr) {
								alert('Error: ==> ' + xhr.responseJSON.message);
							}
                        });
                    },
                    eventClick: function (event) {
                        
                        $.ajax({
                            url: "{{ route('showEventDetails') }}",  // The route to call the controller method
                            method: 'POST',
                            data: {
                                id: event.id
                            },                            
                            success: function(response) {
                                // Display the response data                                
                                $("#exampleModal2").modal('show');
                                $('#1strowstart').text(response.start);
                                $('#2ndrowend').text(response.end);
                                $('#result').html(response.description);
                                $('#myModalLabel2').text(response.title);

                                var newImageSrc = `{{ asset('images/`;
                                newImageSrc = newImageSrc+response.image_path;
                                newImageSrc = newImageSrc+`') }}`;                       
                                
                                $("#mod2eventimg").attr("src", newImageSrc);
                                $('input[name="eventId"]').val(response.id);
                                $('#exampleModal2').modal('hide');
                                // $('#result').html('Name: ' + response.name + '<br>Email: ' + response.email);
                            },  
                            error: function(xhr, status, error) {
                                // Handle error
                                $("#exampleModal3").modal('show');
                                $('#result').html('An error occurred while fetching data. ==>  '+xhr.responseJSON.message);
                            }
                        });
                    }
 
                });

                // Handle event creation on form submit
                $('#eventForm').on('submit', function (e) {                
                
                e.preventDefault();

                var start = $('#start').val();
                var end = $('#end').val();
                var title = $('#title').val();
                var description = $('#desc').val();
                var image_path = $('#image_path')[0].files[0];               

                var eventData = {
                    title: title,
                    start: start,
                    end: end,
                    description: description,
                    type: 'add',
                    _token: $('meta[name="csrf-token"]').attr('content'),
                };

                /*------------------------------------------
                --------------------------------------------
                Update FormData object. Use as AJAX request
                object
                --------------------------------------------
                --------------------------------------------*/

                let formData = new FormData();
                formData.append('title', title);
                formData.append('start', start);
                formData.append('end', end);
                formData.append('description', description);
                formData.append('type', 'add');
                formData.append('image_path', $('#image_path')[0].files[0]);
                formData.append('_token', $('meta[name="csrf-token"]').attr('content'));

                $.ajax({
                    url: SITEURL + "/fullcalenderAjax",
                    type: 'POST',
                    data: formData,
                    processData: false,
                    contentType: false,
                    success: function (response) {
                        $('#exampleModal').modal('hide'); 
                        $('#exampleModal').on('hidden.bs.modal', function () {
                            $(this).find('form')[0].reset();
                        }); 
                        
                        displayMessage("Event Created Successfully id: "+response.id);
                        
                        calendar.fullCalendar('renderEvent',
                        {
                            id: response.id,
                            title: title,
                            start: start,
                            end: end,
                            allDay: false,
                        },true);
                        // calendar.refetchEvents(); // Refresh events
                    },
                    error: function (xhr) {
						alert('Error: ==> ' + xhr.responseJSON.message);
                    }
                });  //ajax
            });


            // Delete event on button click
            // jQuery AJAX request when the button is clicked
            $('#deleteEvent').on('click', function() {
                let eventid = $('input#eventId').val()
                var deleteMsg = confirm("Do you really want to delete?");
                if (deleteMsg) {
                    $.ajax({
                        type: "POST",
                        url: SITEURL + '/fullcalenderAjax',
                        data: {
                                id: eventid,
                                type: 'delete'
                        },
                        success: function (response) {
                            calendar.fullCalendar('removeEvents', eventid);
                            displayMessage("Event Deleted Successfully");
                        },
						error: function (xhr) {
							alert('Error: ==> ' + xhr.responseJSON.message);
						}
                    });
                }

            });


            // Display event to edit (in modal) on button click
            // jQuery AJAX request when the button is clicked
            $('#editEvent').on('click', function() {
                let eventid = $('input#eventId').val()
                
				$.ajax({
					type: "POST",
					url: SITEURL + '/editeventdetails',
					data: {
							id: eventid,
							type: 'edit'
					},
					success: function (response) {
						// Display the response data
						$("#exampleModal4").modal('show');
						$('#mytitle').val(response.title);
						$('#mystart').val(response.start);
                        // $("#mystart").val("2024-12-01T13:00");
						$('#myend').val(response.end);
                        // $("#myend").val("2024-12-01T14:00");
                        tinymce.get('mydesc').setContent(response.description);
						$('input[name="eventId"]').val(response.id);
						$('#exampleModal4').modal('hide');
						
						displayMessage("Event Displayed for Editting Successfully");
					},
                    error: function (xhr) {
                        alert('Error: ==> ' + xhr.responseJSON.message);
                    }
				});
            });


            // Update event on button click            
            // jQuery AJAX request when the button is clicked
            $('#updateEvent').on('click', function() {
                let eventid = $('input#eventId').val();

                var start = $('#mystart').val();
                var end = $('#myend').val();
                var title = $('#mytitle').val();
                var description = tinymce.get('mydesc').getContent();
                var image_path = $('#myimage_path')[0].files[0];

                let formData = new FormData();
                formData.append('title', title);
                formData.append('start', start);
                formData.append('end', end);
                formData.append('description', description);
                formData.append('id', eventid);
                formData.append('image_path', $('#myimage_path')[0].files[0]);
                formData.append('_token', $('meta[name="csrf-token"]').attr('content'));
                
                $.ajax({
                    type: "POST",
                    url: SITEURL + '/updateeventdetails',
                    data: formData,                    
                    processData: false,
                    contentType: false,                    
                    success: function (response) {
                        displayMessage("Event Updated Successfully");
                        $('#exampleModal4').modal('hide'); 
                        $('#exampleModal4').on('hidden.bs.modal', function () {
                            $(this).find('form')[0].reset();
                        });
                    },
                    error: function (xhr) {
                        alert('Error: ==> ' + xhr.responseJSON.message);
                    }
                });

            });
 
    });
      
    /*------------------------------------------
    --------------------------------------------
    Toastr Success Code
    --------------------------------------------
    --------------------------------------------*/
    function displayMessage(message) {
        toastr.success(message, 'Event');
    }
    
    function errorMessage(message) {
        toastr.error(message, 'Event');
    }
    
</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  
</x-public-layout>
