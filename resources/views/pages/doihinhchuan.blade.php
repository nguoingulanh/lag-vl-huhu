@extends('layout.master')

{{-- Tiêu đề của trang --}}

@section('title')
Đội Hình Chuẩn
@endsection

{{-- Thẻ meta của trang --}}

@section('meta')
<meta name="description" content="Đấu Trường Chân Lý | Liên Minh Huyền Thoại">
  <meta property="og:title" content="Đấu Trường Chân Lý | Liên Minh Huyền Thoại">
  <meta property="og:description" content="Chiến đấu vì vinh quang">
  <meta property="og:image" content="https://lienminh.garena.vn/images/Lan_h3lpm3/06_2019/DCTL/bg-hero.jpg">
@endsection

{{-- Nội dung của trang --}}

@section('content')
<div>
<h3>Danh sách các đội hình mạnh nhất Đấu Trường Chân Lý</h3>
<p>Phiên bản mới nhất: Patch 10.7</p>

@for ($i = 0; $i < 10; $i++)
    <div data-toggle="collapse" href="#collapseExample{{ $i }}" aria-expanded="false" aria-controls="collapseExample{{ $i }}">
      <div class="card row-team">
        <div class="card-body">
          <div class="row">
            <div class="col-md-4">
              <div class="team-name">
                Thời không sát thủ
              </div>
            </div>
            <div class="col-md-8">
              <div>
                <div class="team-characters">
                  <div class="characters-item">
                    <div class="image-champions">
                      <img src="{{ asset('images/champions/Ekko.png') }}" />
                    </div>
                  </div>

                  <div class="characters-item">
                    <div class="image-champions">
                      <img src="{{ asset('images/champions/Ekko.png') }}" />
                    </div>
                  </div>

                  <div class="characters-item">
                    <div class="image-champions">
                      <img src="{{ asset('images/champions/Ekko.png') }}" />
                    </div>
                  </div>

                  <div class="characters-item">
                    <div class="image-champions">
                      <img src="{{ asset('images/champions/Ekko.png') }}" />
                    </div>
                  </div>

                  <div class="characters-item">
                    <div class="image-champions">
                      <img src="{{ asset('images/champions/Ekko.png') }}" />
                    </div>
                  </div>

                  <div class="characters-item">
                    <div class="image-champions">
                      <img src="{{ asset('images/champions/Ekko.png') }}" />
                    </div>
                  </div>

                  <div class="characters-item">
                    <div class="image-champions">
                      <img src="{{ asset('images/champions/Ekko.png') }}" />
                    </div>
                  </div>

                  <div class="characters-item">
                    <div class="image-champions">
                      <img src="{{ asset('images/champions/Ekko.png') }}" />
                    </div>
                  </div>

                  <div class="characters-item">
                    <div class="image-champions">
                      <img src="{{ asset('images/champions/Ekko.png') }}" />
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="collapse" id="collapseExample{{ $i }}">
            aaaaaa
          </div>
        </div>
      </div>
    </div>

@endfor
</div>

@endsection