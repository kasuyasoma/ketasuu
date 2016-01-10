<?php


// エスケープ処理
function h($s) //関数名 h() 引数を1つとる
{
  return htmlspecialchars($s, ENT_QUOTES, "utf-8");
}

// filter_input
  // 指定した名前の変数を外部から受け取り、オプションでそれをフィルタリング

// FILTER_VALIDATE_INT
  // 値が整数か、オプションで指定した範囲内にあるかを検証
  // 成功した場合は整数に変換

$n = filter_input(INPUT_POST, 'i', FILTER_VALIDATE_INT);
$s = strlen($n); // strlen — 文字列の長さを得る

$errors = array();

// is_numeric
  // 変数が数字または数値形式の文字列であるかを調べる
if (!is_numeric($n))
{
  $errors['nn'] = '※数字を入力してください';
}
?>

<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="utf-8">
  <title>数字の桁数</title>
</head>
<body>
  <form action="" method="post">
    <input type="text" name="i">
    <input type="submit" value="出力する"><br>
    <?php if (is_numeric($n)) : ?>
    <?php echo h($s); ?>
    <?php else : ?>
    <?php echo h($errors['nn']); ?>
    <?php endif; ?>
  </form>
</body>
</html>