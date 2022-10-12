
@props(['name','label','value','type'])
<div class="row mb-3">
    <label for="{{$name}}" class="col-md-4 col-form-label text-md-end">{{$label}}</label>
        <div class="col-md-6">
            <div class="d-flex flex-wrap align-items-center">
                <input type="{{$type}}" name="{{$name}}" class = "form-control" id = "{{$name}}" value="{{$value}}"  placeholder = "dd/mm/yyyy" required/>
                <i for ="dob" class="glyphicon glyphicon-calendar" style="margin-left:-30px" id="calendar"></i>
                @error($name)
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
                   
                   
        </div>
</div>
   
<script>
                        $( function() {
                            $( "#{{$name}}" ).datepicker({
                                altFormat: "dd-mm-yy",
                                dateFormat: "dd-mm-yy",
                                yearRange: "1930:2080",
                                buttonImageOnly: true,
                                changeMonth: true,
                                changeYear: true,
                                constrainInput: false,
                                showAnim: "fadeIn"
                            });
                            // var widget = $( "#{{$name}}" ).datepicker( "widget" );
                            });
                    </script>