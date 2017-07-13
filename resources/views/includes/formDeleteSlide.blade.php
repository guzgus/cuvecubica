 @if (!Auth::guest())
    <form class="callus"  action="/deleteSlides" method="post" enctype="multipart/form-data">
    {{ csrf_field() }}
    <div class="col-md-12">
    <input type="hidden" name="slide_id" value="{{$slide_id}}">
    <input type="hidden" name="file_delete" value="{{$file_delete}}">
    <input type="hidden" name="desarrollo_id" value="{{$desarrollo->id}}">
    <button type="submit" class="btn btn-danger btn-xs pull-right">Elimnar</button>
    </div>
    </form>
@endif