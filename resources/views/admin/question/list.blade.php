<x-app-layout>
    <x-slot name="header">{{$quiz->title}}ait quiz soruları</x-slot>
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">
                <a href="{{route('questions.create',$quiz->id)}}" class="btn btn-*sm btn-primary"><i class="fa fa-plus"></i>Questions oluştur</a>
            </h5>
            <table class="table table-bordered table-sm">
                <thead>
                    <tr>
                        <th scope="col">Soru</th>
                        <th scope="col">resim</th>
                        <th scope="col">1.cevap</th>
                        <th scope="col">2.cevap</th>
                        <th scope="col">3.cevap</th>
                        <th scope="col">4.cevap</th>
                        <th scope="col">Doğru Cevap </th>
                        <th scope="col" style="width: 100px">İşlemler</th>
                        
                    </tr>
                    @foreach($quiz->questions as $question)
                    <tr>
                        <td>{{ $question->questions }}</td>
                        <td>
                        @if($question->image)
                        <a href="{{asset($question->image)}}" target="_blank" class="btn btn-sm btn-light">Görüntüle</a>
                        @endif
                        </td>
                        <td>{{ $question->answer1 }}</td>
                        <td>{{ $question->answer2 }}</td>
                        <td>{{ $question->answer3 }}</td>
                        <td>{{ $question->answer4 }}</td>
                        <td class="text-success">{{ substr($question->correct_answer,-1) }}. cevap</td>

                        
                        <td>

                      
                        <a href=" {{route('questions.edit',[$quiz->id,$question->id])}} " class="btn btn-sm btn-primary"><i class="fa fa-pen"></i></a>
                        <a href=" {{route('quizzes.destroy',$quiz->id)}} " class="btn btn-sm btn-danger"><i class="fa fa-times"></i></a>
                        </td>
                    </tr>
                    @endforeach
                </thead>
                <tbody>
                
                </tbody>
            </table>
            
        </div>
    </div>
</x-app-layout>
