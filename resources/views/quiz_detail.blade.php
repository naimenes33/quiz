<x-app-layout>
    <x-slot name="header">{{$quiz->title}}</x-slot>
    <div class="card">
        <div class="card-body">
            <p class="card-text">
                <div class="row">
                    <div class="col-md-4">
                        <ul class="list-group">
                            @if($quiz->my_result)
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                puan
                                <span class="badge badge-primary badge-pill">{{$quiz->my_result->point}}</span>
                            </li>

                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                doğru/yanlış sayısı
                                <div class="float-right">
                                    <span class="badge badge-success badge-pill">{{$quiz->my_result->correct}}</span>
                                    <span class="badge badge-danger badge-pill">{{$quiz->my_result->wrong}}</span>
                                </div>
                            </li>
                            @endif

                            @if($quiz->finished_at)
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                Son katılım tarihi
                                <span title="{{$quiz->finished_at}}"
                                    class="badge badge-secondary badge-pill">{{$quiz->finished_at ? $quiz->finished_at->diffForHumans() : '-'}}</span>
                            </li>
                            @endif

                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                Soru sayısı
                                <span class="badge badge-secondary badge-pill">{{$quiz->questions_count}}</span>
                            </li>
                            @if($quiz->details)

                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                Katılımcı sayısı
                                <span class="badge badge-warning badge-pill">{{$quiz->details['join_count']}}</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                Ortalama puan
                                <span class="badge badge-danger badge-pill">{{$quiz->details['average']}}</span>
                            </li>
                            @endif
                        </ul>

                    </div>

                    <div class="col-md-8">

                        {{$quiz->description}}
            </p>
            @if($quiz->my_result)
            <a href="{{route('quiz.join',$quiz->slug)}}" class="btn btn-warning btn-block btn-sm">quiz'i görüntüle</a>
            @else
            <a href="{{route('quiz.join',$quiz->slug)}}" class="btn btn-primary btn-block btn-sm">Quiz'e katıl</a>
            @endif
        </div>
    </div>

    </div>
    </div>
</x-app-layout>
