@extends('admin.layouts.master')

@section('content')


<div class="row">

  
  <div class="col-md-6 col-lg-6 col-xl-3">
		<div class="media widget-media p-4 bg-white border">
      <div class="col-4 px-1">
        <div class="circle" id="divhumidity1"
        data-size="65"
        data-value="1"
        data-thickness="4"
        data-fill="{
          &quot;color&quot;: &quot;#0c426f&quot;
        }"
        >
          <div class="circle-content">
            <div id="humidity1">

            </div>
            
            <strong></strong>
          </div>
        </div>
      </div>

			<div class="media-body align-self-center">
				<p>&emsp;Humidity</p>
			</div>
		</div>
	</div>

  <div class="col-md-6 col-lg-6 col-xl-3">
		<div class="media widget-media p-4 bg-white border">
      <div class="col-4 px-1">
        <div class=" circle"
        data-size="65"
        data-value="1"
        data-thickness="4"
        data-fill="{
          &quot;color&quot;: &quot;#0c426f&quot;
        }"
        >
          <div class="circle-content">
            <div id="temperature1">

            </div>
            <strong></strong>
          </div>
        </div>
      </div>

			<div class="media-body align-self-center">
				<p>&emsp;Temperature</p>
			</div>
		</div>
	</div>

  <div class="col-md-6 col-lg-6 col-xl-3">
		<div class="media widget-media p-4 bg-white border">
      <div class="col-4 px-1">
        <div class="circle"
        data-size="65"
        data-value="1"
        data-thickness="4"
        data-fill="{
          &quot;color&quot;: &quot;#0c426f&quot;
        }"
        >
          <div class="circle-content">
            <div id="moisture1">

            </div>
            <strong></strong>
          </div>
        </div>
      </div>

			<div class="media-body align-self-center">
				<p>&emsp;Moisture Level</p>
			</div>
		</div>
	</div>

  <div class="col-md-6 col-lg-6 col-xl-3">
		<div class="media widget-media p-4 bg-white border">
			<div class="icon rounded-circle mr-4 bg-danger" style="background-color: #0c426f !important ;">
				<i class="" id="rainicon"></i>

			</div>

			<div class="media-body align-self-center vvv">
        <div id="rain">

        </div>
			</div>
		</div>
	</div>
  
	<div class="col-md-6 col-lg-6 col-xl-3">
		  <div class="media widget-media p-4 bg-white border">


          <div class="media-body align-self-center">
            <p style="padding-bottom: 14px; color: #314268;">Water Pump</p>
            <label class="switch switch-text switch-outline-alt-danger form-control-label">
              <input type="checkbox" class="switch-input form-check-input" value="on"  id="pumpid1">
              <span class="switch-label" data-on="On" data-off="Off"></span>
              <span class="switch-handle"></span>
            </label>
          </div>

          <div class="icon rounded-circle mr-4" style="background-color: #2397ea">
            <i class="" id="pumpicon"></i>
          </div>


		  </div>
	</div>

  <div class="col-md-6 col-lg-6 col-xl-3">
		<div class="media widget-media p-4 bg-white border">

			<div class="media-body align-self-center">
				<p style="padding-bottom: 14px; color: #314268;">Light</p>
        <label class="switch switch-text switch-outline-alt-danger form-control-label">
					<input type="checkbox" class="switch-input form-check-input" value="on" id="bulbid1"> 
					<span class="switch-label" data-on="On" data-off="Off"></span>
					<span class="switch-handle"></span>
				</label>
			</div>
      <div class="icon rounded-circle mr-4" style="background-color: #fcad28">
				<i class="" id="lightbulbicon"></i>
			</div>

		</div>
	</div>

  


</div>



  @endsection


  @section('script')



<script>





  $(document).ready(function() {
    
      //  setInterval(function(){
      // }, 1000); 
        fetchdht()
        fetchMoistureSensor()
        fetchrdsensor()
        // fetchpumps()
        // fetchbulbs()

        turnOnOffBulp()
        turnOnOffpump()

        function fetchdht(){
              $.ajax({
                type: "GET",
                url: "/admin/fetchdht",
                dataType: "json",
                success: function (response) {
                  $.each(response.DHT11 , function(key , value){ // if nested json need other each inside of this each
                      // console.log(value.Humidity);
                      // $( "tbody" ).empty().append( '<tr>\
                      // <td>'+value.Humidity+'</td>\
                      // <td>'+value.Temperature+'</td>\
                      // </tr>' );

                      var vhumidity = $('<h6>'+value.Humidity+'%</h6>');
                      $('#humidity1').empty().append(vhumidity);

                      var vtemperature = $('<h6>'+value.Temperature+'°C</h6>');
                      $('#temperature1').empty().append(vtemperature);

                  });
                  }
              });
              setTimeout(fetchdht,1000);

        }

        function fetchMoistureSensor(){
          $.ajax({
                type: "GET",
                url: "/admin/fetchMoistureSensor",
                dataType: "json",
                success: function (response) {
                  $.each(response.moisturesensor , function(key , value){ // if nested json need other each inside of this each
                      // console.log(value.moisturesensor1);

                      var vmoisture = $('<h6>'+value.moisturesensor1+'%</h6>');
                      $('#moisture1').empty().append(vmoisture);

                   });
                  }
          });
              setTimeout(fetchMoistureSensor,1000);

        }


        function fetchrdsensor(){
          $.ajax({
                type: "GET",
                url: "/admin/fetchrdsensor",
                dataType: "json",
                success: function (response) {
                  $.each(response.rdsensor , function(key , value){ // if nested json need other each inside of this each
                      // console.log(value.Rdread);

                    if (value.Rdread == 1){
                      $("#rainicon" ).removeClass('mdi mdi-weather-sunny text-white')
                      $("#rainicon").addClass("mdi mdi-weather-pouring text-white");
                      var rainwarning = $('<p>Rain Warning</p>');
                      $('#rain').empty().append(rainwarning);
                    }
                    else{
                      $("#rainicon" ).removeClass('mdi mdi-weather-pouring text-white')
                      $("#rainicon").addClass("mdi mdi-weather-sunny text-white");
                      var notraing = $('<p>Not Raining</p>');
                      $('#rain').empty().append(notraing);
                    }

                   });
                  }
          });
              setTimeout(fetchrdsensor,1000);

        }


        // function fetchpumps(){
        //   $.ajax({
        //         type: "GET",
        //         url: "/admin/fetchpumps",
        //         dataType: "json",
        //         success: function (response) {
        //           $.each(response.pumps , function(key , value){ // if nested json need other each inside of this each
        //               // console.log(value.pump1);

        //               if (value.pump1 == 1){
        //                 $("#pumpicon" ).removeClass('mdi mdi-water-off text-white')
        //                 $("#pumpicon").addClass("mdi mdi-water-pump text-white");

        //               }
        //               else{
        //                 $("#pumpicon" ).removeClass('mdi mdi-water-pump text-white')
        //                 $("#pumpicon").addClass("mdi mdi-water-off text-white");

        //               }

        //            });
        //           }
        //   });
        //       setTimeout(fetchpumps,100000);

        // }

        // function fetchbulbs(){
        //   $.ajax({
        //         type: "GET",
        //         url: "/admin/fetchbulbs",
        //         dataType: "json",
        //         success: function (response) {
        //           $.each(response.bulbs , function(key , value){ // if nested json need other each inside of this each
        //               // console.log(value.light1);

        //               if (value.light1 == 1){
        //                 $("#lightbulbicon" ).removeClass('mdi mdi-lightbulb-off text-white')
        //                 $("#lightbulbicon").addClass("mdi mdi-lightbulb-on text-white");
        //                 $("#bulbid1").prop('checked', true);  // Checks the box

        //               }
        //               else{
        //                 $("#lightbulbicon" ).removeClass('mdi mdi-lightbulb-on text-white')
        //                 $("#lightbulbicon").addClass("mdi mdi-lightbulb-off text-white");
        //                 $("#bulbid1").prop('checked', false);  // unchecks the box

        //               }

        //            });
        //           }
        //   });
        //       setTimeout(fetchbulbs,2000);

        // }


        function turnOnOffBulp(){

            getbulbstate()
            function getbulbstate(){

                          $.ajax({
                            type: "GET",
                            url: "/admin/fetchbulbs",
                            dataType: "json",
                            success: function (response) {
                              $.each(response.bulbs , function(key , value){ // if nested json need other each inside of this each
                                  // console.log(value.light1);

                                  if (value.light1 == 1){
                                    $("#lightbulbicon" ).removeClass('mdi mdi-lightbulb-off text-white')
                                    $("#lightbulbicon").addClass("mdi mdi-lightbulb-on text-white");
                                    $("#bulbid1").prop('checked', true);  // Checks the box

                                  }
                                  else{
                                    $("#lightbulbicon" ).removeClass('mdi mdi-lightbulb-on text-white')
                                    $("#lightbulbicon").addClass("mdi mdi-lightbulb-off text-white");
                                    $("#bulbid1").prop('checked', false);  // unchecks the box

                                  }

                              });
                              }
                            });

                    setTimeout(getbulbstate,10000);
                  
            }


                  $('#bulbid1').on('change', function(){ // on change of state
                    if(this.checked) // if changed state is "CHECKED"
                      {

                        $.ajaxSetup({
                            headers: {
                                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                            }
                        });

                        // var data = {
                        //   'light1' : 1 ,
                        // }

                        $.ajax({
                          type: "POST",
                          url: "/admin/storebulbOn",
                          // data: "data",
                          // dataType: "json",
                          success: function (response) {

                          }
                        });

                        $("#lightbulbicon" ).removeClass('mdi mdi-lightbulb-off text-white')
                        $("#lightbulbicon").addClass("mdi mdi-lightbulb-on text-white");
                        $("#bulbid1").prop('checked', true);  // Checks the box

                      }

                    else{

                      $.ajaxSetup({
                            headers: {
                                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                            }
                        });

                        // var data = {
                        //   'light1' : 1 ,
                        // }

                        $.ajax({
                          type: "POST",
                          url: "/admin/storebulbOff",
                          // data: "data",
                          // dataType: "json",
                          success: function (response) {

                          }
                        });

                          $("#lightbulbicon" ).removeClass('mdi mdi-lightbulb-on text-white')
                          $("#lightbulbicon").addClass("mdi mdi-lightbulb-off text-white");
                          $("#bulbid1").prop('checked', false);  // unchecks the box

                        }


                  })


                  // setTimeout(turnOnOffBulp,1000);
        }


        function turnOnOffpump(){

          getpumpstate()
          function getpumpstate(){
                      
                    $.ajax({
                      type: "GET",
                      url: "/admin/fetchpumps",
                      dataType: "json",
                      success: function (response) {
                        $.each(response.pumps , function(key , value){ // if nested json need other each inside of this each
                            // console.log(value.pump1);

                            if (value.pump1 == 1){
                              $("#pumpicon" ).removeClass('mdi mdi-water-off text-white')
                              $("#pumpicon").addClass("mdi mdi-water-pump text-white");
                              $("#pumpid1").prop('checked', true);  // Checks the box


                            }
                            else{
                              $("#pumpicon" ).removeClass('mdi mdi-water-pump text-white')
                              $("#pumpicon").addClass("mdi mdi-water-off text-white");
                              $("#pumpid1").prop('checked', false);  // unchecks the box

                            }

                        });
                        }
                    });
                    setTimeout(getpumpstate,10000);
          }
                
                
                $('#pumpid1').on('change', function(){ // on change of state
                  if(this.checked) // if changed state is "CHECKED"
                    {

                      $.ajaxSetup({
                          headers: {
                              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                          }
                      });

                      // var data = {
                      //   'light1' : 1 ,
                      // }

                      $.ajax({
                        type: "POST",
                        url: "/admin/storepumpOn",
                        // data: "data",
                        // dataType: "json",
                        success: function (response) {

                        }
                      });

                      $("#pumpicon" ).removeClass('mdi mdi-water-off text-white')
                      $("#pumpicon").addClass("mdi mdi-water-pump text-white");
                      $("#pumpid1").prop('checked', true);  // Checks the box

                    }

                  else{

                    $.ajaxSetup({
                          headers: {
                              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                          }
                      });

                      // var data = {
                      //   'light1' : 1 ,
                      // }

                      $.ajax({
                        type: "POST",
                        url: "/admin/storepumpOff",
                        // data: "data",
                        // dataType: "json",
                        success: function (response) {

                        }
                      });

                      $("#pumpicon" ).removeClass('mdi mdi-water-pump text-white')
                      $("#pumpicon").addClass("mdi mdi-water-off text-white");
                      $("#pumpid1").prop('checked', false);  // unchecks the box

                      }


                })





                // setTimeout(turnOnOffpump,1000);
        }


  });

  


</script>

<script src='backend/assets/plugins/circle-progress/circle-progress.js'></script>
  @endsection
