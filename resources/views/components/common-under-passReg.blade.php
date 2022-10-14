
          <x-form.inputt2 name="phone" label="Phone" type="text" value="{{ old('phone') }}"/>
          <x-form.selectGender name="gender" label="Select gender"  value="{{ old('gender') }}"/> 
          <x-form.textarea name="address" label="Address"  value="{{ old('address') }}"/>
          <x-form.country name="country" label="Country" type="text" value="{{ old('country') }}"/>     
          <x-form.dateOfBirth name="dob" label="Date of birth" type="text" value="{{ old('dob') }}"  />
          <x-form.checkbox name="subscribe" label="Want to subscribe?"  value="{{ old('subscribe') }}"/> 
          <x-form.checkbox name="terms" label="Accept terms?"  value="{{ old('terms') }}"/>    
                   
          

        