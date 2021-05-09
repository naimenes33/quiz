<x-app-layout>
    <x-slot name="header">{{$quiz->title}}</x-slot>
    <div class="card">
        <div class="card-body">
            <p class="card-text">
                <div class="row">
                    <div class="col-md-5">
                        <ul class="list-group">
                            <h5 class="card-title">
                                <a href="{{route('quizzes.index')}}" class="btn btn-*sm btn-secondary"><i
                                        class="fa fa-arrow-left"></i>Quiz dön</a>
                            </h5>
                            @if($quiz->my_rank)
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                sıralama
                                <span class="badge badge-success badge-pill">{{$quiz->my_rank}}</span>
                            </li>

                            @endif
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

                        @if(count($quiz->topTen)>0)
                        <div class="card mt-3">
                            <div class="card-body">
                                <h5 class="card-title">ilk 10</h5>
                                <ul class="list-group">
                                    @foreach($quiz->topTen as $result)
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        <strong class="h5">{{$loop->iteration}}.</strong>
                                        <img class="w-8 h-8 rounded-full" src="{{$result->user->profile_photo_url}}">
                                        <span @if(auth()->user()->id == $result->user_id) class="text-primary"
                                            @endif>{{$result->user->name}}</span>
                                        <span class="badge badge-success badge-pill">{{$result->point}}</span>
                                    </li>
                                    @endforeach

                                </ul>

                            </div>
                        </div>
                        @endif

                    </div>

                    <div class="col-md-7">

                        {{$quiz->description}}

                        <table class="table table-bordered mt-3">
                            <thead>
                                <tr>
                                    <th scope="col">ad soyad</th>
                                    <th scope="col">puan</th>
                                    <th scope="col">doğru</th>
                                    <th scope="col">yanlış</th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach($quiz->results as $result)
                                <tr>
                                   
                                    <td>{{$result->user->name}}</td>
                                    <td>{{$result->point}}</td>
                                    <td>{{$result->correct}}</td>
                                    <td>{{$result->wrong}}</td>
                                </tr>
                                @endforeach

                            </tbody>
                        </table>
            </p>
        </div>
    </div>

    </div>
    </div>
</x-app-layout>
