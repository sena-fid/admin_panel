@extends('backend.index')
@section('content')
<div class="br-pagebody mg-t-5 pd-x-30">

    <div class="br-section-wrapper">
            <a href="{{ route('page.create') }}" class="btn btn-success btn-sm px-3 float-right ml-2">
                Yeni Ekle
            </a>
        <div class="table-wrapper">
            @if (count($page)>0)

                    <table id="datatable1" class="table display responsive nowrap">
                        <thead>
                            <tr>
                                <th class="wd-15p">Sıra</th>
                                <th class="wd-15p">Sayfa Adı</th>
                                <th class="wd-20p">Durum</th>
                                <th class="wd-25p">İşlemler</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ( $page as $item )
                            <tr>
                                <td>{{ $item->order }}</td>
                                <td>{{ $item->title }}</td>
                                <td>{{ $item->status == 1 ? "Aktif" : "Pasif" }}</td>
                                <td>
                                    <a class="btn btn-success btn-sm btn-round has-ripple" href="{{ route('page.edit', $item->id) }}"><i class="feather icon-edit"></i>
                                       Düzenle
                                    </a>
                                    <a href="{{ route('page.destroy', $item->id) }}" class="btn btn-danger btn-sm"><i class="feather icon-trash-2"></i>
                                        Sil
                                    </a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                @else
                <strong><h5>Kayıt Bulunmamaktadır.</h5></strong>
           @endif
        </div>
    </div>
</div>

@endsection
