<div class="col-lg-12">
    <div class="form-group{{ $errors->has('name_ar') ? ' has-error' : '' }}">
        {!! Form::label('name_ar', 'الأسم بالعربيه') !!}
        {!! Form::text('name_ar', null, ['class' => 'form-control', 'required' => 'required']) !!}
        <small class="text-danger">{{ $errors->first('name_ar') }}</small>
    </div>
    <div class="form-group{{ $errors->has('name_en') ? ' has-error' : '' }}">
        {!! Form::label('name_en', 'الأسم بالإنجليزيه') !!}
        {!! Form::text('name_en', null, ['class' => 'form-control', 'required' => 'required']) !!}
        <small class="text-danger">{{ $errors->first('name_en') }}</small>
    </div>
    <div class="form-group{{ $errors->has('area_id') ? ' has-error' : '' }}">
        {!! Form::label('area_id', 'المنطقه') !!}
        {!! Form::select('area_id',$areas, null, ['id' => 'area_id', 'class' => 'form-control', 'required' => 'required']) !!}
        <small class="text-danger">{{ $errors->first('area_id') }}</small>
    </div>
    <div class="form-group{{ $errors->has('address_ar') ? ' has-error' : '' }}">
        {!! Form::label('address_ar', 'العنوان بالعربيه') !!}
        {!! Form::text('address_ar', null, ['class' => 'form-control', 'required' => 'required']) !!}
        <small class="text-danger">{{ $errors->first('address_ar') }}</small>
    </div>
    <div class="form-group{{ $errors->has('address_en') ? ' has-error' : '' }}">
        {!! Form::label('address_en', 'العنوان بالإنجليزيه') !!}
        {!! Form::text('address_en', null, ['class' => 'form-control', 'required' => 'required']) !!}
        <small class="text-danger">{{ $errors->first('address_en') }}</small>
    </div>

    <div class="form-group{{ $errors->has('g_map') ? ' has-error' : '' }}">
        {!! Form::label('g_map', 'رابط الخريطه') !!}
        {!! Form::text('g_map', null, ['class' => 'form-control', 'required' => 'required']) !!}
        <small class="text-danger">{{ $errors->first('g_map') }}</small>
    </div>

   <div class="form-group col-sm-6 col-lg-12">
    {!! Form::label('map', 'الخريطه') !!}
     <table class="table"> 
      <tr> 
        <td> 
           <div id="map_canvas" style="width:100%; height: 450px"></div> 
        </td> 
        {!!Form::hidden('latitude',null,['id'=>'latitude'])!!}
        {!!Form::hidden('longitude',null,['id'=>'longitude'])!!}
      </tr> 
    </table> 
 

</div>

    

    <div class="form-group{{ $errors->has('day_off') ? ' has-error' : '' }}">
        {!! Form::label('day_off', 'العطله الرسميه') !!}
        {!! Form::select('day_off',
        [
        6=>'السبت',
        7=>'الأحد',
        1=>'الإثنين',
        2=>'الثلاثاء',
        3=>'الأربعاء',
        4=>'الخميس',
        5=>'الجمعه',
        ]
        , null, ['id' => 'day_off', 'class' => 'form-control', 'required' => 'required']) !!}
        <small class="text-danger">{{ $errors->first('day_off') }}</small>
    </div>

    <div class="row">
        {!! Form::label('services', 'الخدمات') !!}
    </div>
    <div class="row">
        @foreach($services as $service)
        <div class="col-md-3">
            <div class="checkbox">
                <label>
                    <input type="checkbox" name="services[]" {{(in_array($service->id,$current))?'checked':''}} value="{{$service->id}}">
                    {{$service->name_ar}}
                </label>
            </div>
        </div>
        @endforeach
    </div>


    <div class="form-group{{ $errors->has('logo') ? ' has-error' : '' }}">
        {!! Form::label('logo', 'اللوجو') !!}
        {!! Form::file('log') !!}
        <small class="text-danger">{{ $errors->first('logo') }}</small>
    </div>
    @if($type == "edit")
        <div class="form-group">
            <?php $images = explode(',', $salon->images); ?>
            @if($salon->images !== "")
                @foreach($images as $img)
                <div class="col-lg-2 col-md-3 col-sm-3 col-xs-4">
                    <div class="thumbnail">
                        <a href="{{Url('/')}}/uploads/salons/{{$img}}" target="_blank">
                            <img src="{{Url('/')}}/uploads/salons/{{$img}}" style="height:100px;">
                        </a>
                        <a href="{{Url('/')}}/admin/salon/delete_image/{{$salon->id}}/{{$img}}">حذف</a>
                    </div>
                </div>
                @endforeach
            @else
                <h3>لا توجد صور</h3>    
            @endif
        </div>
    @endif
    <table class="table">
        <tr>
            <td>
                <label class="control-label"  style="text-align:right">صوره الصالون 1</label>
            </td>
            <td><div  class="col-md-10">
                <input name="image[]" type="file">
                <small class="text-danger"></small>
            </div></td>
        </tr>
        <tbody class="input_fields_wrap">
        
        </tbody>
        <tr>
            <td>
                <a class="btn btn-primary" id="addmore">إضافه المزيد</i></a>
            </td>
        </tr>
    </table>

    <div class="form-group{{ $errors->has('rating') ? ' has-error' : '' }}">
        {!! Form::label('rating', 'التقييم') !!}
        {!! Form::select('rating',[1=>1,2=>2,3=>3,4=>4,5=>5], null, ['class' => 'form-control', 'required' => 'required']) !!}
        <small class="text-danger">{{ $errors->first('rating') }}</small>
    </div>
    <div class="form-group{{ $errors->has('phone') ? ' has-error' : '' }}">
        {!! Form::label('phone', 'رقم التيليفون ') !!}
        {!! Form::text('phone', null, ['class' => 'form-control','maxlength'=>8 ,'required' => 'required']) !!}
        <small class="text-danger">{{ $errors->first('phone') }}</small>
    </div>
    
    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
        {!! Form::label('email', 'Email address') !!}
        {!! Form::email('email', null, ['class' => 'form-control', 'required' => 'required', 'placeholder' => 'eg: foo@bar.com']) !!}
        <small class="text-danger">{{ $errors->first('email') }}</small>
    </div>
    <div class="form-group{{ $errors->has('from') ? ' has-error' : '' }}">
        {!! Form::label('from', 'مواعيد العمل : من') !!}
        {!! Form::input('time','from', null, ['class' => 'form-control', 'required' => 'required']) !!}
        <small class="text-danger">{{ $errors->first('from') }}</small>
    </div>
    <div class="form-group{{ $errors->has('to') ? ' has-error' : '' }}">
        {!! Form::label('to', 'مواعيد العمل : إلى') !!}
        {!! Form::input('time','to', null, ['class' => 'form-control', 'required' => 'required']) !!}
        <small class="text-danger">{{ $errors->first('to') }}</small>
    </div>
    
    
     @if($type == "edit")
    <div class="row">
        <div class="form-group">
            @if($salon->ad !== "")
                <div class="col-lg-2 col-md-3 col-sm-3 col-xs-4">
                    <div class="thumbnail">
                        <a href="{{Url('/')}}/uploads/salons/ads/{{$salon->ad}}" target="_blank">
                            <img src="{{Url('/')}}/uploads/salons/ads/{{$salon->ad}}" style="height:100px;">
                        </a>
                    </div>
                </div>
            @else
                <h3>لا توجد صوره</h3>    
            @endif
        </div>
    </div>
    @endif
    <div class="form-group{{ $errors->has('ads') ? ' has-error' : '' }}">
        {!! Form::label('ads', 'صوره الإعلان') !!}
        {!! Form::file('ads') !!}
        <small class="text-danger">{{ $errors->first('ads') }}</small>
    </div>

    <div class="form-group{{ $errors->has('ad_url') ? ' has-error' : '' }}">
        {!! Form::label('ad_url', 'رابط الإعلان') !!}
        {!! Form::input('url','ad_url', null, ['class' => 'form-control', 'required' => 'required']) !!}
        <small class="text-danger">{{ $errors->first('ad_url') }}</small>
    </div>



    <div class="btn-group pull-right">
        {!! Form::submit('حفظ', ['class' => 'btn btn-success']) !!}
    </div>
</div>

<script src="http://code.jquery.com/jquery.js"></script>
<script type="text/javascript">
            $(document).ready(function() {
                var max_fields      = 15; //maximum input boxes allowed
                var wrapper         = $(".input_fields_wrap"); //Fields wrapper
                var add_button      = $("#addmore"); //Add button ID
                
                var x = 1; //initlal text box count
                $(add_button).click(function(e){ //on add input button click
                    e.preventDefault();
                    if(x < max_fields){ //max input box allowed
                        x++; //text box increment

                        $(wrapper).append('<tr> <td> <label class="control-label" style="text-align:right">صوره الصالون '+ x +'  (<a class="remove_field">x</a>) </label></td> <td><div  class="col-md-11"><input name="image[]" type="file"> <small class="text-danger"></small> </div></td> </tr>');//add input box
                    }
                });
                
                $(wrapper).on("click",".remove_field", function(e){ //user click on remove text
                    
                    var remo = $(this).parent().parent().parent().hide('slow').remove();
                    x--;
                })
            });

        </script>
<script type="text/javascript" src="http://maps.google.com/maps/api/js?key=AIzaSyAoacCf8RDzMIaHcI5Ywh9zQ-kZt1-V_fc&callback=initMap"></script> 

<script type="text/javascript"> 
//<![CDATA[

     // global "map" variable
      var map = null;
      var marker = null;

var infowindow = new google.maps.InfoWindow(
  { 
    size: new google.maps.Size(150,50)
  });

// A function to create the marker and set up the event window function 
function createMarker(latlng, name, html) {
    var contentString = html;
    var marker = new google.maps.Marker({
        position: latlng,
        map: map,
        zIndex: Math.round(latlng.lat()*-100000)<<5
        });

    google.maps.event.addListener(marker, 'click', function() {
        infowindow.setContent(contentString); 
        infowindow.open(map,marker);
        });
    google.maps.event.trigger(marker, 'click');  

    $('#latitude').val(latlng.lat());
    $('#longitude').val(latlng.lng());  
    return marker;

}

 

$(document).ready(function(){



  var myOptions = {
    zoom: 10,
    @if($type == 'edit' && $salon->latitude !== '' && $salon->longitude !== '')
    center: new google.maps.LatLng({{$salon->latitude}},{{$salon->longitude}}),
    @else
    center: new google.maps.LatLng(25.41350860804229,51.20452880859375),
    @endif

    mapTypeControl: true,
    mapTypeControlOptions: {style: google.maps.MapTypeControlStyle.DROPDOWN_MENU},
    navigationControl: true,
    mapTypeId: google.maps.MapTypeId.ROADMAP
  }
  map = new google.maps.Map(document.getElementById("map_canvas"),
                                myOptions);
 
  google.maps.event.addListener(map, 'click', function() {
        infowindow.close();
        });

  google.maps.event.addListener(map, 'click', function(event) {
    //call function to create marker
         if (marker) {
            marker.setMap(null);
            marker = null;
         }
     marker = createMarker(event.latLng, "name", "<b>Location</b><br>"+event.latLng);

  });

    @if($type == 'edit' && $salon->latitude !== '' && $salon->longitude !== '')
       var marker = new google.maps.Marker({
              position: {lat: {{$salon->latitude}}, lng:{{$salon->longitude}}},
              map: map,
              title: '{{$salon->name}}'
            });
    @endif
});
    

//]]>

</script>