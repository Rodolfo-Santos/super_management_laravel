{{ $slot }}
<form action="{{ route('site.contact') }}" method="POST">
  @csrf
  <input name="name" value="{{ old('name') }}" type="text" placeholder="Name" class="{{ $class }}">
  <br>
  <input name="phone" value="{{ old('phone') }}" type="text" placeholder="Phone" class="{{ $class }}">
  <br>
  <input name="email" value="{{ old('email') }}" type="text" placeholder="E-mail" class="{{ $class }}">
  <br>
  <select name="reason" class="{{ $class }}">
    <option value="">What is the contact reason?</option>
    <option value="1">Doubt</option>
    <option value="2">Praise</option>
    <option value="3">Complaint</option>
  </select>
  <br>
  <textarea name="message" class="{{ $class }}">{{ (old('message') != '') ? old('message') : 'Fill your message here' }}
  </textarea>
  <br>
  <button type="submit" class="{{ $class }}">Send</button>
  <div>
    <pre>
      {{$errors}}
    </pre>
  </div>
</form>