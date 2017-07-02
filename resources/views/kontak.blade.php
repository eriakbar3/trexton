@extends('layouts.dashboard')
@section('content')
<div class="row">
  <h2>Kontak Kami</h2>

  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3961.0412100441617!2d107.645809814367!3d-6.885667395024378!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e77475f4f67d%3A0xdb3507fd5b2da0be!2sJl.+Bojong+Koneng%2C+Cibeunying%2C+Cimenyan%2C+Kota+Bandung%2C+Jawa+Barat+40191!5e0!3m2!1sid!2sid!4v1498983311765" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>

  <div class="col-sm-6">
    <form id="quick_contact_form" name="quick_contact_form" class="quick-contact-form" action="http://thememascot.net/demo/personal/f/charityfaith/demo/includes/quickcontact.php" method="post">
      <div class="form-group">
        <input name="form_email" class="form-control" type="text" required="" placeholder="Enter Name">
      </div>
      <div class="form-group">
        <input name="form_email" class="form-control" type="text" required="" placeholder="Enter Email">
      </div>
      <div class="form-group">
        <textarea name="form_message" class="form-control" required="" placeholder="Enter Message" rows="3"></textarea>
      </div>
      <div class="form-group">
        <input name="form_botcheck" class="form-control" type="hidden" value="" />
        <button type="submit" class="btn btn-dark btn-theme-colored btn-sm mt-0" data-loading-text="Please wait...">Send Message</button>
      </div>
    </form>
  </div>
</div>

@stop
