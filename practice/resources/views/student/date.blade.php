
<html>
<thead>
<script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
</thead>
<tbody>
    <table id="post"></table>
    <link href="https://cdn.datatables.net/v/dt/dt-2.0.0/datatables.min.css" rel="stylesheet">
    <script src="https://cdn.datatables.net/v/dt/dt-2.0.0/datatables.min.js"></script>
    <script>


        $(() => {

            $('#post').DataTable({
                searching: true,    // 検索する？？
                ordering: true,     // 並べ替えする？？
                lengthChange: true, // ページごとに何件表示する？？
                serverSide: true,   // サーバーサイドを使う？？
                ajax: {
                    url: '/post/ajax', // データ取得するURL
                    dataFilter(data) {      // 取得したデータを加工する

                        let json = JSON.parse(data);
                        json.recordsTotal = json.total;
                        json.recordsFiltered = json.total;
                        return JSON.stringify(json);

                    }
                },
                columns: [
                    {
                        data: 'grade',
                        title: '学年'
                    },
                    {
                        data: 'name',
                        title: '名前'
                    },
                    {
                        data: 'created_at',
                        title: '登録日時',
                        orderable: false    // ここの項目は並べ替えしない
                    }
                ],
                order: [[ 0, 'asc' ]],   // 並べ替え項目を指定,
                language: { // 日本語対応
                    url: 'https://cdn.datatables.net/plug-ins/1.10.19/i18n/Japanese.json'
                }
            });

        });

    </script>
</tbody>
</html>