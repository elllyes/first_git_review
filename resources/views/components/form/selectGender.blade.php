
@props(['name','label','value'])
<div class="row mb-3">
        <label for="{{ $name }}" class="col-md-4 col-form-label text-md-end">{{$label}}</label>
            <div class="col-md-6">
        
                <select class="form-select form-select-lg @error('{{$name}}') is-invalid @enderror" name="{{$name}}" id="{{$name}}" required>
                
                <!-- <option disabled value = "" selected>Select gender</option> -->
                            @php 
                                $genders = array('Select gender','female','male','other','prefer not to say');
                                $user_gender = "$value";
                            @endphp

                        @foreach ($genders as $gender)

                            @if ($gender == $user_gender)
                            
                                <option value = {{$gender}} selected> {{ucfirst($gender)}}</option>
                            
                                @else 

                                <option value = {{$gender}}> {{ucfirst($gender)}}</option>
                            
                            @endif
                        @endforeach
        
                </select>
            </div>
    </div>
    