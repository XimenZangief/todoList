<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Todo LIST</title>
    <!-- font awesome 6.2.0 -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- mdb-ui-kit 5.0.0 -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/5.0.0/mdb.min.css" integrity="sha512-vh3qZydgHrPxdxwRhcgtoovKGWVolDZmOW9s4qDyPYnlqqPm5uzOoVj4Rq4I7bxfhuNFhgKZXp4LUIJDbCvmIA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/5.0.0/mdb.min.js" integrity="sha512-jgqnY5wi2gxl4Yj4iXEEpVWrBI6JeJQc67LVC/a65X/TeMotFC0veqlMqYHAI3FfS3hCdx5z6fqKFzXqdnKXDw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</head>
<body class="bg-info">
    <div class="container w-50 mt-5">
        <div class="card shadow-sm">
            <div class="card-body">
                <h2>LARAVEL好難</h2>
                <form action="{{route('store')}}" method="post" autocomplete="off">
                    @csrf
                    <div class="input-group">
                        <input type='test' name='content' class='form-control' placeholder="待辦事項"></input>
                        <button type="submit" class="btn btn-dark btn-sm px-4"><i class="fas fa-plus"></i></button>
                    </div>
                </form>
                <!-- 如果有資料 -->
                @if(count($todolists))
                    <ul class="list-group list-group-flush my-3">
                        @foreach ($todolists as $todolist)
                        <li class="list-group-item">
                            <form action="{{route('destroy',$todolist->id)}}" method="post">
                                {{$todolist->created_at->format('Y-m-d')}}
                                {{$todolist->content}}
                                @csrf
                                @method('delete')
                                <button type="submit" class="btn btn-link btn-sm float-end"><i class="fas fa-trash"></i></button>
                            </form>
                        </li>
                        @endforeach
                    </ul>
                @else
                    <p class="text-center mt-3">沒東西啦</p>
                @endif
                <div class="card-footer">
                    總共有 {{count($todolists)}} 個待辦事項。
                </div>
            </div>
        </div>
    </div>
    
</body>
</html>