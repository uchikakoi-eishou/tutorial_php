<?php
    // 文字コード
    header('Content-Type: text/html; charset=UTF-8');

    // コンポーネント
    require_once '../../components/conn.php';

    // SQL
    $sql = "Select 開始日,終了日,部署名,氏名,安全言葉 From general.dbo.T_Anzen;";
    $pdo = new ConnDB($sql);

    // 多次元配列
    $arr = [];
    foreach ($pdo->getQuery() as $row) {
        $arr[] = [
            'startDay' =>$row['開始日'],
            'endDay' => $row['終了日'],
            'division' => $row['部署名'],
            'name' => $row['氏名'],
            'anzenWord' =>  $row['安全言葉']
        ];
    }

    // JSON
    print json_encode($arr, JSON_UNESCAPED_UNICODE);
