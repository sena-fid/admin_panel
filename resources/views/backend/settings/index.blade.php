@extends('backend.index')
@section('content')
    <div class="br-pagebody mg-t-5 pd-x-30">

        <div class="br-section-wrapper">

            <div class="card">
                <div class="card-body">
                    <form action="{{ route('settings.store') }}" method="POST">
                        {{ csrf_field() }}
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="address">Adres</label>
                                    <textarea class="form-control" name="address" rows="3" placeholder="Adres">{{ $setting->address }}</textarea>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="phone">Telefon Numarası</label>
                                        <textarea class="form-control" id="phone" name="phone" rows="3">{{ $setting->phone }}</textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="phone">Eposta Adresi</label>
                                        <textarea class="form-control" id="email" name="email" rows="3">{{ $setting->email }}</textarea>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="facebook">Facebook-LinkedIn</label>
                                    <input class="form-control" name="facebook" rows="3" placeholder="Facebook" value="{{ $setting->facebook }}">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="instagram">İnstagram</label>
                                    <input class="form-control" name="instagram" rows="3" placeholder="instagram" value="{{ $setting->instagram }}">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="twitter">Twitter</label>
                                    <input class="form-control" name="twitter" rows="3" placeholder="twitter" value="{{ $setting->twitter }}">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 mt-3">
                                <div class="form-group">
                                    <a href="{{ route('dashboard') }}" class="btn  btn-danger ml-3">İptal</a>
                                    <button type="submit" class="btn  btn-primary ml-3">Kaydet</button>
                                </div>
                            </div>
                        </div>
                    </form>
                    <div class="col-md-12">
                        <hr>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection

@section('js')
    <script type="text/javascript">
        let addRowRoute = "{{ route('settings.store') }}"
    </script>
@endsection
