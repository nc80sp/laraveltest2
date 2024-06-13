<!DOCTYPE html>
<html lang="ja">
<head>
    <title>User List</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>
<body>
<!--ヘッダー-->
<div class="container">
    <header
        class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom">
        <div class="col-md-3 mb-2 mb-md-0">
            <a href="player.blade.php" class="d-inline-flex link-body-emphasis text-decoration-none">
                <svg class="bi" width="40" height="32" role="img" aria-label="Bootstrap">
                    <use xlink:href="#bootstrap"></use>
                </svg>
            </a>
        </div>

        <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
            <li><a href="/accounts/index/{account_id?}" class="nav-link px-2">ユーザー一覧</a></li>
            <li><a href="/accounts/player" class="nav-link px-2 link-secondary">プレイヤー一覧</a></li>
            <li><a href="/accounts/item" class="nav-link px-2">アイテム一覧</a></li>
            <li><a href="/accounts/have_item" class="nav-link px-2">所持アイテム一覧</a></li>
        </ul>

        <div class="col-md-3 text-end">
            <form method="post" action="{{url('accounts/doLogout')}}">
                @csrf
                <button type="submit" class="btn btn-outline-primary me-2">ログアウト</button>
                <input type="hidden" name="action" value="doLogout">
            </form>
        </div>
    </header>
</div>
<!--プレイヤー一覧表示-->
<h1>■プレイヤー一覧■</h1>
<table class="table">
    <tr>
        <th>ID</th>
        <th>名前</th>
        <th>レベル</th>
        <th>経験値</th>
        <th>ライフ</th>
    </tr>
    @foreach ($players as $player)
        <tr>
            <td>{{$player['id']}}</td>
            <td>{{$player['name']}}</td>
            <td>{{$player['level']}}</td>
            <td>{{$player['experience_point']}}</td>
            <td>{{$player['life']}}</td>
        </tr>
    @endforeach
</table>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
        crossorigin="anonymous"></script>
</body>
</html>
