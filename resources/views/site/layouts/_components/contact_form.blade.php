{{ $slot }}
<form action="{{ route('site.contact') }}" method="POST">
  @csrf
  <input name="name" type="text" placeholder="Name" class="{{ $class }}">
  <br>
  <input name="phone" type="text" placeholder="Phone" class="{{ $class }}">
  <br>
  <input name="email" type="text" placeholder="E-mail" class="{{ $class }}">
  <br>
  <select name="reason" class="{{ $class }}">
    <option value="">What is the contact reason?</option>
    <option value="">Doubt</option>
    <option value="">Praise</option>
    <option value="">Complaint</option>
  </select>
  <br>
  <textarea name="message" class="{{ $class }}">Fill your message here</textarea>
  <br>
  <button type="submit" class="{{ $class }}">Send</button>
</form>