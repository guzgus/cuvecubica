 @if (!Auth::guest())

                    <form class="callus"  action="/storeSlides" method="post" enctype="multipart/form-data">
                          {{ csrf_field() }}
                      <div class="col-md-12">
                        <h5 class="text-white text-left">Slides {{$section_update}}:</h5>
                        <div class="">
                          <input required type="file" name="slides[]" multiple >
                          <input type="hidden" name="section" value="{{$section_update}}">
                          <input type="hidden" name="desarrollo_id" value="{{$desarrollo->id}}">
                          <input type="hidden" name="propiedad_id" value="0">
                          <button type="submit" class="btn btn-success">Subir</button>
                        </div>
                    </form>
@endif