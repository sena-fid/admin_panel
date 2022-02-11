@extends('backend.index')
@section('content')
<div class="br-pagebody mg-t-5 pd-x-30">
    <div class="col-xl-12">
        <div class="card">

            <div class="card-body">
                <form action="{{ route('menu.update', $menus->id) }}" method="POST">
                    {{ csrf_field() }}
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group fill">
                                <label class="floating-label" for="order">Sıra</label>
                                <input type="number" min="1" class="form-control" name="order" placeholder="" value="{{ $menus->order }}">
                            </div>
                        </div>

                        <div class="col-md-6"></div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <div class="switch d-inline m-r-10">
                                    <input type="checkbox" class="switcher-input" id="status" name="status" value="1" {{ $menus->status == 1 ? 'checked' : null }}>
                                    <label for="status" class="cr"></label>
                                </div>
                                <label>Yayınla</label>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="title">Menü Adı</label>
                                    <input type="text" class="form-control" placeholder="Menü Adı" name="title" value="{{ $menus->title }}">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 mt-3">
                            <div class="form-group">
                                <a href="{{ route('menu.index') }}"
                                    class="btn  btn-danger ml-3">{{ trans('text.cancel') }}</a>
                                <button type="submit" class="btn  btn-primary ml-3">{{ trans('text.save') }}</button>
                            </div>
                        </div>
                    </div>
            </form>
        </div>
    </div>
</div>

@endsection

@section('modal')

@endsection

@section('js')
    <script type="text/javascript">
        let addRowRoute = "{{ route('menu.update, $menus->id') }}"
    </script>
@endsection
