@extends('Layouts.master')

@section('content')

<div class="container-fluid header bg-white p-0">
  <div class="row g-0 align-items-center flex-column-reverse flex-md-row">
    <div class="col-md-12 p-5 mt-lg-3 md-lg-5">
      <div class="container" style="margin-top: 100px">
        <div class="tab-content">
          <div id="tab-1" class="tab-pane fade show p-0 active">
            <div class="row g-4">

                <!-- Category Start -->
                <div class="container-xxl py-5">
                    <div class="container">
                        <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                            <h1 class="mb-3">Statistik Pendidikan Penduduk</h1>
                            <p>Tingkatan pendidikan penduduk yang terdapat pada desa DELISAOS adalah sebagai berikut</p>
                            <img width="250px" height="250px" src="{{asset('sneat')}}/assets/img/favicon/pendidikan.png" alt="">
                        </div>

                        <div class="container bg-white rounded p-3">
                            <div class="row g-3">
                                {{-- card inti --}}
                                <div class=" col-lg-4 col-sm-3 wow fadeInUp" data-wow-delay="0.1s">
                                    <a class="cat-item d-block bg-primary text-start rounded p-3" href="">
                                        <div class="rounded bg-primary p-4">
                                            <h4 class="mb-3 text-white">Total Penduduk</h4>
                                            <h4 class="text-white">{{$penduduk}}</h4>
                                        </div>
                                    </a>
                                </div>
                                {{-- card-inti --}}

                                @foreach ($pendidikanArray as $data)
                                {{-- card-start --}}
                                <div class="col-lg-4 col-sm-3 wow fadeInUp" data-wow-delay="0.1s">
                                    <a class="cat-item d-block bg-light text-start rounded p-3" href="">
                                        <div class="rounded p-4">
                                            <h4 class="mb-3">{{ $data['pendidikan'] }}</h4>
                                            <h5>{{ $data['jumlah'] }}</h5>
                                        </div>
                                    </a>
                                </div>
                                {{-- card-end --}}
                                @endforeach

                                
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card p-3 bg-white mt-3 mb-3">
                  <div class="row justify-content-center align-items-center">
                      <div class="col-4 mr-3">
                          <div class="text-center">
                              <canvas id="fungsiDoughnutChart"></canvas>
                          </div>
                      </div>
                  </div>
              </div>
                <!-- Category End -->
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script>
    const ctx = document.getElementById('fungsiDoughnutChart').getContext('2d');

    new Chart(ctx, {
        type: 'doughnut',
        data: {
            labels: {!! json_encode($pendidikanLabels) !!},
            datasets: [{
                label: '# of Peserta',
                data: {!! json_encode($pendidikanCounts) !!},
                backgroundColor: [
                    'rgba(255, 99, 132, 0.2)',
                    'rgba(54, 162, 235, 0.2)',
                    'rgba(255, 206, 86, 0.2)',
                    'rgba(75, 192, 192, 0.2)',
                    'rgba(153, 102, 255, 0.2)',
                    'rgba(255, 159, 64, 0.2)'
                ],
                borderColor: [
                    'rgba(255, 99, 132, 1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(255, 206, 86, 1)',
                    'rgba(75, 192, 192, 1)',
                    'rgba(153, 102, 255, 1)',
                    'rgba(255, 159, 64, 1)'
                ],
                borderWidth: 1
            }]
        },
    });
</script>

@endsection
