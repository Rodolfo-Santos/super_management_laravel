{{ $slot }}
<form action="{{ route('site.contact') }}" method="POST">
  @csrf

  <input name="name" value="{{ old('name') }}" type="text" placeholder="Name" class="{{ $class }}">
   {{ $errors->has('name') ? $errors->first('name') : '' }} 

  <br>
  <input name="phone" value="{{ old('phone') }}" type="text" placeholder="Phone" class="{{ $class }}">
  {{ $errors->has('phone') ? $errors->first('phone') : '' }} 

  <br>
  <input name="email" value="{{ old('email') }}" type="text" placeholder="E-mail" class="{{ $class }}">
  {{ $errors->has('email') ? $errors->first('email') : '' }} 

  <br>
  <select name="contact_reason_id" class="{{ $class }}">
    <option value="">What is the contact reason?</option>

    @foreach ($reason_list as $key => $reason)
      <option value="{{ $reason->id }}" {{ old('contact_reason_id') == $reason->id  ? 'selected' : '' }}>{{ $reason->contact_reason }}</option>
    @endforeach
  </select>
  {{ $errors->has('contact_reason_id') ? $errors->first('contact_reason_id') : '' }} 

  <br>
  <textarea name="message" class="{{ $class }}">{{ (old('message') != '') ? old('message') : 'Fill your message here' }}
  </textarea>
  {{ $errors->has('message') ? $errors->first('message') : '' }} 

  <br>
  <button type="submit" class="{{ $class }}">Send</button>

</form>