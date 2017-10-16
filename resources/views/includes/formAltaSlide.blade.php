 @if (!Auth::guest())
<form class="callus"  action="/storeSlides" method="post" enctype="multipart/form-data">
      {{ csrf_field() }}
    <h5 class="text-white text-left">Slides {{$section_update}}:</h5>
      <input required type="file" name="slides[]" multiple >
      @if($section_update=="desarrollos-avances")
      <input type="date" name="date_avance" placeholder="AAAA-MM-DD" required>
      @endif
      <input type="hidden" name="tipo_inmueble" value="{{$tipo_inmueble}}">
      <input type="hidden" name="section" value="{{$section_update}}">
      <input type="hidden" name="desarrollo_id" value="{{$desarrollo_id}}">
      <input type="hidden" name="propiedad_id" value="{{$propiedad_id}}">
      <input type="hidden" name="inmueble_id" value="{{$inmueble_id}}">
      <button type="submit" class="btn btn-success">Subir</button>
</form>
@endif