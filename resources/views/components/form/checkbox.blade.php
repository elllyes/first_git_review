@props(['name' , 'label', 'value'])
        <div class="row mb-3">
            <label class="col-md-4 col-form-label text-md-end"></label>

                <div class="col-md-6">
                    <div class="form-check">
                        <input type = "hidden" name = "{{$name}}" value = "0">
                        
                        <input class="form-check-input" type="checkbox" id="{{$name}}" name = "{{$name}}"
                        value = "1" {{$value == 1 ? 'checked' : '' }}/>
                            <label class="form-check-label" for="{{$name}}">
                             {{$label}}
                            </label>
                    </div>
                </div>  
        </div>