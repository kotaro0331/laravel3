<html>
<head>
    <link href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css" rel="stylesheet">
</head>
<body>
    <table id="post"></table>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">
    <script type="text/javascript" src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
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
</body>
</html>