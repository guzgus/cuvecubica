 @if (!Auth::guest())
    <form class="callus"  action="/deleteSlides" method="post" enctype="multipart/form-data">
        {{ csrf_field() }}
        <input type="hidden" name="slide_id" value="{{$slide_id}}">
        <input type="hidden" name="file_delete" value="{{$file_delete}}">
        <input type="hidden" name="desarrollo_id" value="{{$desarrollo_id}}">
        <input type="hidden" name="propiedad_id" value="{{$propiedad_id}}">
        <input type="hidden" name="inmueble_id" value="{{$inmueble_id}}">
        <input type="hidden" name="tipo_inmueble" value="{{$tipo_inmueble}}">
        <button type="submit" class="btn btn-danger btn-xs pull-right">Elimnar</button>
    </form>
@endif