<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>論文詳細</h1>

    {{ $article->title  }}
    
    <p>
{{ $article->body  }}
    </a>
    </p>
<button onclick="location.href='/articles'">一覧へ戻る</button>
</body>
</html>
