/*
5.下記のビルトイン関数の用途、使い方を調べて実際に使ってみてください

strip_tags
array_push
array_merge
time, mktime
date


strip_tags
文字列から HTML および PHP タグを取り除く

```
<?php
$str = "<h1>strip_tags関数</h1>"
  . "<p>タグ取り除く</p>";
echo strip_tags($str) ."\n";
?>
```


array_push
指定した配列の末尾に要素を追加する関数

```
<?php
/* 配列を定義 */
$a = array('A', 'B');
print_r($a);
 
/* 配列の末尾に要素を追加 */
var_dump( array_push($a, 'C', 'D') );
print_r($a);
?>
```


array_merge
指定した複数の配列を結合する関数

````
<?php
/* 配列を定義 */
$a = array('A', 'B', 'C');
$b = array('D', 'E', 'F', 'G');
 
/* 配列を結合 */
print_r( array_merge($a,$b) );
?>
```


time, mktime
現在の時刻（Unixタイムスタンプ）を取得する関数 time()
引数に指定した日時からUnixタイムスタンプを取得する関数 mktime()

```
<?php
/* 現在時刻 */
var_dump( time() );
 
/* 現在の日付 / 時間 を表示 */
echo date('Y年m月d日 H時m分') ."\n";
 
/* 明日(24時間後)の日付 / 時間 を表示 */
echo date('Y年m月d日 H時m分', time() + 24 * 3600) ."\n";
 
/* 現在時刻（マイクロ秒精度） */
var_dump( microtime() );
var_dump( microtime(true) );
?>
```

mktime( 時, 分, 秒, 月, 日, 年 )
<?php
/* 2011年11月11日11時11分11秒のUnixタイムスタンプ */
$tm = mktime( 11, 11, 11, 11, 11, 2011);
var_dump($tm);
 
/* 確認 */
echo date('Y年m月d日 H時m分s秒', $tm) .'\n&';
?>
```


date
日付 / 時刻 / 曜日を表示する date関数

```
<?php
echo date("Y/m/d H:i:s P l") . "\n";
echo gmdate("Y/m/d H:i:s P l") . "\n";
?>
```
*/