<x-app-layout>
    <x-slot name="header">{{$quiz->title}}</x-slot>
    <div class="card">
        <div class="card-body">
            <p class="card-text">
                <div class="row">
                    <div class="col-md-4">

                        <ul class="list-group">
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                Son katılım tarihi
                                <span title="{{$quiz->finished_at}}" class="badge badge-secondary badge-pill">{{$quiz->finished_at ? $quiz->finished_at->diffForHumans() : '-'}}</span>
                            </li>

                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                Soru sayısı
                                <span class="badge badge-secondary badge-pill">{{$quiz->questions_count}}</span>
                            </li>

                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                Katılımcı sayısı
                                <span class="badge badge-secondary badge-pill">14</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                Ortalama puan
                                <span class="badge badge-secondary badge-pill">2</span>
                            </li>
                        </ul>

                    </div>

                    <div class="col-md-8">

                        {{$quiz->description}}
            </p>
            <a href="#" class="btn btn-primary btn-block btn-sm">Quiz'e katıl</a>
        </div>
    </div>

    </div>
    </div>
</x-app-layout>
